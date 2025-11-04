<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Committee;
use App\UserAlert;
use App\UserApplications;
use Session;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\News;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashbord()
    {
		$active = UserApplications::select('id','application_id','user_id','status','created_at','updated_at','updated_by','created_by','certificate_of_approval')->where('status', '=', 'accept temporary') ->orWhere('status', 'request not completed')->orWhere('status', 'under review')->count();
		
		$rejected = UserApplications::where('status', '=', 'rejected')->count();

		$approved =  UserApplications::where('status', '=', 'accepted')->count();

		$closed = UserApplications::where('status', '=', 'closed')->count();

		$data = News::orderBy('id', 'DESC')->paginate(10);
		
		return view('admin.admin', ['data' => $data,'active'=>$active,'rejected'=>$rejected,'approved'=>$approved,'closed'=>$closed]);
 
    }
    
    public function index(Request $request) {
		
        if ($request->ajax()) {
            $data = User::role('Admin')->get()->toArray();

            return Datatables::of($data)
                            ->addIndexColumn()
							 ->editColumn('last_login', function ($row) {
					 if($row['last_login']!=0) {
						 $dt = date('Y-m-d h:i A',$row['last_login']);
					 }
					 else {
						 $dt = 'None';
					 }
                  return $dt;
				})
                            ->addColumn('action', function($row) {
                                $btn = '<a href="' . url('/edit_admins', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                $btn .= '<a href="' . url('/delete_admins', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                                
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.admins');
    }
    
    public function createAdmins() {
        $committee = Committee::get()->toArray();
        return view('admin.createadmins',['committee'=> $committee]);
    }
    
    public function saveAdmins(Request $request) {
       // dd($request->all());
        if (isset($request['id'])) {
            $request->validate(
                    [
                        'email' => 'unique:users,email,' . $request['id'],
            ]);
            $user = User::find($request['id']);
			 if(isset($request['password1']) && !empty($request['password1']))
			$user->password = bcrypt($request['password1']);
        } else {
            $request->validate(
                    [
                        'email' => 'unique:users,email',
            ]);
            $user = new User;
            $user->password = bcrypt($request['password']);
        }
        $user->name = $request['name'];
        $user->email = $request['email'];
        //$user->committee_id = $request['committee_id'];
        $user->phone = $request['phone'];
        $user->job_title = $request['job_title'];

        if (isset($request['image'])) {
            $image = $request->file('image');
            $user->image = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/admin');
            $image->move($destinationPath, $user->image);
        }

        $user->save();

        $user->assignRole('Admin');

        Session::flash('success', 'Saved successfully!');
        return view('admin.admins');
    }
    public function sendalerts() {
         $data = User::whereHas('roles', function ($query) {
    $query->whereIn('name', ['User', 'Admin', 'Super Admin']);
})->get()->toArray();

         return view('admin.sendalerts',['data'=>$data]);
    }
     public function sendalertssubmit(Request $request) {
         $model = new UserAlert();
          $request->validate([
            'users' => 'required',
            'message' => 'required',
            ]);
             $auth = \Auth::user();
             $notification = $request->message;
             
             
             
             
              $user_id = $auth->id;
              $user = $request->users;
              $emails = [];
              if(isset($user) && !empty($user)) {
                 foreach($user as $v1) {
                     $email = User::where('id',$v1)->first();
                     $emails = $email->email;
                     $username = $email->name;
                     
                     
                     $to_email = $emails;
        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        $secondline = "You got a notification from admin";
        $regards = "مع تحيات";
        $data = ['username'=>$username,'notification' => $notification,'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];
        
        
            try {
         
                $response = $notification;   
                $phone = User::where('email',$to_email)->pluck('phone')->first();
                User::sendMessage($phone,$response,'alert_message');
                   // Attempt to call the method
               } catch (\Exception $e) {
                  
               }
           
           
        
       
        Mail::send('emails.notification', $data, function ($m) use ($to_email) {
            //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
            $m->to($to_email)->subject('Notification from admin');
        }); 
                     
                     
                 }
               
              }
            
             
              
              
            foreach($request->users as $v){
            $model->user_id = $v;
            $model->alert_message = $request->message;
            $model->message_read = 0;
            $model->sender = $user_id;
            $model->save();
             Session::flash('success', 'Message has been sent successfully.');
            }
            return redirect('/send-alerts');
    }
    public function editAdmins($id) {
        
        $data = User::where('id', $id)->first();
        $committee = Committee::get()->toArray();
        return view('admin.createadmins', ['data' => $data,'committee'=> $committee]);
    }

    public function deleteAdmins($id) {
        
        $data = User::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Deleted successfully!');
        return view('admin.admins');
    }
	
}
