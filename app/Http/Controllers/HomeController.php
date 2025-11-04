<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Programs;
use App\Instructions;
use App\News;
use App\Notifications;
use App\NotificationReadStatus;
use App\Committee;
use App\UserApplications;
use App\Application;
use App\ApplicationCategory;
use Illuminate\Support\Facades\Mail;
use Session;
use \App\User;
class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth')->except('forgotpassword','sendpasswordmail','updatepassword','updatepasswordaction','excelexport');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

	  public function notifications() {
		$user = Auth::user();
		$user_id = $user->id;
		
		$get_dataa = Notifications::get();

		if($get_dataa)
		{
			$get_data = $get_dataa->toArray();
			foreach($get_data as $vals){
				$get_single = NotificationReadStatus::where(['notification_id'=>$vals['id'],'viewer_id'=>$user_id])->first();
				if(empty($get_single)) {
					$model =  new NotificationReadStatus;
					$model->notification_id = $vals['id'];
					$model->viewer_id = $user_id;
					$model->save();
				}
			}
		}
	
		$count = Notifications::get()->count();
		$data = Notifications::where("user_id",'!=',$user_id)->orderBy('id', 'desc')->paginate(10);
		return view('notifications', ['data' => $data,'count'=>$count]);
    }
	  public function forgotpassword(Request $request) {
		
		$locale = $request->session()->get('mylocale');
        return view('forgotpassword');
    }
	public function updatepassword(Request $request,$hash) {
		$not_valid = trans('custom.not_valid');
		$locale = $request->session()->get('mylocale');
		$get_user = User::where('reset_token',$hash)->first();
		if(empty($get_user)) {
			Session::flash('error', $not_valid);
			 return redirect('/forgot-password');
		}
        return view('updatepassword',['reset_token'=>$hash]);
    }
	public function updatepasswordaction(Request $request) {
		$locale = $request->session()->get('mylocale');
		$not_valid = trans('custom.not_valid');
		$password_update_login = trans('custom.password_update_login');
		if(isset($_POST['submit'])) {
			$password = $_POST['password'];
			$token = $_POST['reset_token'];
			$get_user = User::where('reset_token',$token)->first();
			if(empty($get_user)) {
			Session::flash('error', $not_valid);
			 return redirect('/forgot-password');
			} else {
				$get_user->password = 	bcrypt($password);
				$get_user->reset_token = 	null;
				$get_user->save();
				Session::flash('success', $password_update_login);
			}
			 return redirect('/login');
		}
	}
	public function sendpasswordmail(Request $request) {
		$no_user_found = trans('custom.no_user_found');
		$check_email_instructions = trans('custom.no_user_found');
		$locale = $request->session()->get('mylocale');
		if(isset($_POST['submit'])) {
			$email = $_POST['email'];
			$get_user = User::where('email',$email)->first();
			if(empty($get_user)) {
				  Session::flash('error', $no_user_found);
			}
			else {
				$md5 = $get_user->id.' '.$get_user->name.' '.'ooc';
				$encrypt = md5($md5);
				$get_user = User::find($get_user->id);
				$get_user->reset_token =$encrypt;
				$get_user->save();
				$data['name'] = $get_user->name;
				$data['email'] = $get_user->email;
				
				$name = $get_user->name;
				$email = $get_user->email;
				$url =  url('/');
				$link = $url.'/update-password/'.$encrypt;
				$data['link']=$link;
				try {
					$phone = $get_user->phone;
					$text[0] = $name;
					$text[1] = $link;
					User::sendMessageForgot($phone,$text);
				} catch (\Exception $e) {
				   
				}
			    Mail::send('emails.forgot_password', $data, function ($m) use ($name,$email) {
				$m->from('no-reply@ooc.om', 'Olympic Solidarity');
				$m->to($email, $name)->subject('Forgot Password https://platform.ooc.om/ ');
        });
		Session::flash('success', $check_email_instructions);
			}
		}
		  return redirect('/forgot-password');
       
    }
    public function index() {
   
		$data = News::orderBy('id', 'DESC')->paginate(10);
        return view('home', ['data' => $data]);
    }
    public function contactus() {
        
	$name =  Auth::user()->name;
	$email =  Auth::user()->email;
    return view('contactus',['name'=>$name,'email'=>$email]);
    }
	public function excelexport() {
	$data = UserApplications::where('status', '=', 'closed')->orWhere('status', 'under review')->with(['user', 'application', 'user.committee'])->get()->toArray();
    return view('application.allappexport',['data'=>$data]);
    }
	
	  public function savecontact() {
	      $text = array();
		  $message_sent = trans('custom.message_sent');
		  $admin_email= 'ali_albusafi@ooc.org.om';

		  $data = array();
		  if(isset($_POST['submit'])){
			  $data['sender_name'] = $_POST['sender_name'];
			  $data['sender_email'] = $_POST['sender_email'];
			  $data['sender_message'] = $_POST['sender_message'];
			  
			   try {
                
                    $text[0] =  $_POST['sender_name'];
                    $text[1] =  $_POST['sender_email'];    
                    $text[2] =  $_POST['sender_message'];
                    $phone = User::where('email',$admin_email)->pluck('phone')->first();
                   User::sendMessageThreeParam($phone,$text,'contact_us');
               
                // Attempt to call the method
            } catch (\Exception $e) {
            
            }

			  
			   Mail::send('emails.contact_mail', $data, function ($m) use ($admin_email) {
            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
            $m->to($admin_email, 'ooc admin')->subject('Contact Us mail https://platform.ooc.om/ ');
        });
		  Session::flash('success', $message_sent);
	}
    return redirect('/contactus');
    }
    public function instructions() {
	$data = Instructions::where('active_status', 1)->orderBy('sort_order', 'ASC')->paginate(10);
    return view('instructions', ['data' => $data]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function formPreview($formName = 'form1') {
        return view('form_preview', compact('formName'));
    }

    public function getallcategory(Request $request) {
        $category = ApplicationCategory::get()->toArray();
        return view('application.allcategory', ['category' => $category]);
    }

    public function getallparent($id) {
        
        $programs = Programs::where('parent_id', '==', 0)->where('application_category_id', $id)->with(['childPrograms', 'form_application'])->orderBy('id', 'desc')->get()->toArray();
        //dd($programs);
        return view('application.allparent', ['programs' => $programs]);
    }

    public function getAllChild($id) {
        $program = Programs::where('id', '=', $id)->with(['childPrograms', 'form_application', 'childPrograms.form_application'])->first()->toArray();

        return view('application.allchild', ['program' => $program]);
    }

    public function getForm($slug) {

        $program = Programs::where('id', '=', $id)->with(['childPrograms'])->first()->toArray();
        return view('application.allchild', ['program' => $program]);
    }

}
