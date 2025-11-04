<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use App\Committee;
use Auth;
use DataTables;

class UserController extends Controller
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
    public function index(Request $request)
    {
       if ($request->ajax()) {
            $data = User::role('User')->get()->toArray();

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
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('/edit_users', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                    $btn .= '<a href="' . url('/delete_users', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
        return view('admin.users');
    }

    public function create_users()
    {
        $committee = Committee::get()->toArray();
        return view('admin.createusers',['committee'=> $committee]);
    }
public function save_user_profile(Request $request)
    {
//        $user = User::where('email', 'vvr025@gmail.com')->first();
//        $this->welcomeEmail($user, '1234567777');
//        echo "<pre>";
//        print_r($request->all());
//        echo "</pre>";
//        die;
        $new = 0;
        if (isset($request['id'])) {
             $new = 0;
            $request->validate(
                [
                    'email' => 'unique:users,email,' . $request['id'],
                ]
            );
            $user = User::find($request['id']);
			 if(isset($request['password1']) && !empty($request['password1']))
			$user->password = bcrypt($request['password1']);
        } else {
            $new = 1;
            $request->validate(
                [
                    'email' => 'unique:users,email',
                ]
            );
            $user = new User;
            $user->password = bcrypt($request['password']);
        }
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->committee_id = $request['committee_id'];
        $user->phone = $request['phone'];
        $user->job_title = $request['job_title'];

        if (isset($request['image'])) {
            $image = $request->file('image');
            $user->image = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/admin');
            $image->move($destinationPath, $user->image);
        }

        $user->save();
        if($new==1)
        $user->assignRole('User');
        if (!isset($request['id']) && isset($request['password'])) {
            $this->welcomeEmail($user, $request['password']);
        }

        Session::flash('success', 'Saved successfully!');
        return redirect('/edit-profile');
    }
    public function save_user(Request $request)
    {
//        $user = User::where('email', 'vvr025@gmail.com')->first();
//        $this->welcomeEmail($user, '1234567777');
//        echo "<pre>";
//        print_r($request->all());
//        echo "</pre>";
//        die;
        if (isset($request['id'])) {
            $request->validate(
                [
                    'email' => 'unique:users,email,' . $request['id'],
                ]
            );
            $user = User::find($request['id']);
             if(isset($request['password1']) && !empty($request['password1']))
            $user->password = bcrypt($request['password1']);
        } else {
            $request->validate(
                [
                    'email' => 'unique:users,email',
                ]
            );
            $user = new User;
            $user->password = bcrypt($request['password']);
        }
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->committee_id = $request['committee_id'];
        $user->phone = $request['phone'];
        $user->job_title = $request['job_title'];

        if (isset($request['image'])) {
            $image = $request->file('image');
            $user->image = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/admin');
            $image->move($destinationPath, $user->image);
        }

        $user->save();

        $user->assignRole('User');
        if (!isset($request['id']) && isset($request['password'])) {
            $this->welcomeEmail($user, $request['password']);
        }

        Session::flash('success', 'Saved successfully!');
        return redirect('/users');
    }

    public function edit_users($id)
    {
        $data = User::where('id', $id)->first();
        $committee = Committee::get()->toArray();
        return view('admin.createusers', ['data' => $data,'committee'=> $committee]);
    }

    public function delete_users($id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Deleted successfully!');
        return view('admin.users');
    }
       public function editProfile() {
       
	   $user = \Auth::user();
	
	  $roles = $user->getRoleNames();
	  
	
	 
	   $id = $user->id;
	     $data = User::where('id', $id)->first();
        $committee = Committee::get()->toArray();
        return view('users.edit-profile' ,['data' => $data,'committee'=> $committee]);
    }
}
