<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\News;
use Auth;
use DataTables;
use App\User;
use Mail;

class NewsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
   // $call = User::verifyNumber();
         //  dd($call);
        if ($request->ajax()) {
            $data = News::get()->toArray();

            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row) {
                                $btn = '<a href="' . url('/news/edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>';
                                $btn .= '<a href="' . url('/news/notification', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-envelope"></i></a>';
                                if (Auth::user()->hasAnyRole(['Super Admin'])){
                                    $btn .= '<a href="' . url('/news/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                                }
                                return $btn;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.news');
    }

    public function createNews() {

        return view('admin.createnews');
    }

    public function saveNews(Request $request) {
         $admin = User::role('admin')->pluck('email')->toArray();
		 $superadmins = User::role('super admin')->pluck('email')->toArray();
		 $merge = array_merge($admin,$superadmins);
         $users =  User::role('user')->pluck('email')->toArray();
         $finalMerge = array_merge($merge,$users);
        // $finalMerge = array('anubhav.abstain@gmail.com');
         
         
        $validatedData = $request->validate([
            'image' => 'required',
            
                ], [
            'image.required' => 'الصورة مطلوبة',
            
        ]);
        // dd($request->all());
        if (isset($request['id'])) {

            $news = News::find($request['id']);
        } else {
            $news = new News;
        }
        $news->title = $request['title'];
        $news->description = $request['description'];
        if (isset($request['image'])) {
            $image = $request->file('image');
            $news->image = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/news');
            $image->move($destinationPath, $news->image);
        }
        
        
   
        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
                $secondline = "";
                $regards = "مع تحيات";
                $data = ['news_title' =>$request['title'],  'level' => 'success',   'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];
        if($news->save()){
           
        if(!empty($finalMerge)){
          foreach($finalMerge as $mail_admins){
            $phone = User::where('email',$mail_admins)->pluck('phone')->first();
           
            try {
                // Attempt to call the method
                User::sendMessage($phone,$request['title'],'new_news_item');
            } catch (\Exception $e) {
               
            }
            if (isset($mail_admins)) {
               
                   
                        Mail::send('emails.create_news', $data, function ($m) use ($mail_admins, $data) {
                            //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                            $m->to($mail_admins)->subject('New news item added');
                        });
                  
                
            }
          
                    
                  
                }
         }
             
          Session::flash('success', 'Saved successfully!');
        } else {
            Session::flash('error', 'There was some issue please try again later.');
        }
       
        return redirect('/news');
    }

    public function editNews($id) {

        $data = News::where('id', $id)->first();
        return view('admin.createnews', ['data' => $data]);
    }

    public function notificationNews($id) {
        
        $news = News::where('id', $id)->first('title');
        $emails = User::role('User')->pluck('email')->toArray();
     
    

        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        $secondline = "لقد تم إضافة خبر جديد في المنصة بعنوان :";
        $regards = "مع تحيات";
        $data = ['news_title' => $news->title,  'level' => 'success', 'actionUrl' => route('login'), 'actionText' => 'Login to your member account', 'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];
       
       
        if(!empty($emails)){
            foreach($emails as $email){
                $phone = User::where('email',$email)->pluck('phone')->first();

        try {
            
            // Attempt to call the method
            User::sendMessage($phone,$news->title,'new_news_item');
        } catch (\Exception $e) {
           
        }
            }
        if (isset($emails)) {
                foreach ($emails as $recipientEmail) {
                    if (isset($recipientEmail)) {
                        Mail::send('emails.create_news', $data, function ($m) use ($recipientEmail, $data) {
                            //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                            $m->to($recipientEmail)->subject('Latest News');
                        });
                    }
                }
            }
       
        }
    

        Session::flash('success', 'Mail sent successfully!');
        return redirect('/news');
    }

    public function viewNews($id) {

        $data = News::where('id', $id)->first();
        return view('users.view_news', ['data' => $data->toArray()]);
    }
    
    public function deleteNews($id) {
        $data = News::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Deleted successfully!');
        return redirect('/news');
    }
}
