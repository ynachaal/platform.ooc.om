<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\UserApplications;
use App\Application;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectToAdmin = '/admin';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */

	public function cron()
	{

		$applications = UserApplications::whereNotNull('deadline_timestamp')->get();
		//dd($applications);
		$time = time();
		$data = array();
		if (isset($applications) && !empty($applications)) {
			$array = $applications->toArray();

			foreach ($array as $vals) {
				// Adjust the time calculation for -3 day

				$deadline = $vals['deadline'];
				$deadlinetimestamp = strtotime($deadline . ' 00:00:00');

				$previous_date = date('Y-m-d', strtotime('-3 day', $deadlinetimestamp));
				$previous_timestamp = strtotime('-3 day', $deadlinetimestamp); //30=27


				// Adjust the time calculation for -1 day
				$previous_date_1 = date('Y-m-d', strtotime('-1 day', $deadlinetimestamp));
				$previous_timestamp_1 = strtotime('-1 day', $deadlinetimestamp);


				//dd($previous_timestamp_1);

				//  code for -3 day
				if ($deadlinetimestamp > $time) {

					if ($time > $previous_timestamp && ($vals['deadline_notification_sent'] == 0 || empty($vals['deadline_notification_sent']) || is_null($vals['deadline_notification_sent']))) {

						if (isset($vals['user_id'])) {
							$user_id = $vals['user_id'];
							$user_details = User::where('id', $vals['user_id'])->first();
							$single = UserApplications::where('id', $vals['id'])->first();
							$ud = UserApplications::where('id', $vals['id'])->first()->toArray();
							$get_application = Application::where('id', $vals['application_id'])->first()->toArray();
							if (isset($user_details->email) && !empty($user_details->email)) {
								$email = $user_details->email;
								$name = $user_details->name;
								$data['name'] = $name;
								$data['user_details'] = $ud;
								$data['title'] = $get_application['title'];



								try {

									$deadline = $ud['deadline'];
									$phone = User::where('email', $email)->pluck('phone')->first();
									User::sendMessage($phone, $deadline, 'application_deadline');

									// Attempt to call the method
								} catch (\Exception $e) {

								}

								Mail::send('emails.deadline', $data, function ($m) use ($name, $email) {
									$m->from('no-reply@ooc.om', 'Olympic Solidarity');
									$m->to($email, $name)->subject('Application Reminder');
								});
								$single->deadline_notification_sent = 1;
								$single->save();
							}
						}

					}
				}


				//dd($vals['deadline_notification_sent']);
				//  code for -1 day

				if ($deadlinetimestamp > $time) {
					//$pre = date("d-m-Y",$previous_timestamp_1);
					//$pretime = date("d-m-Y",$time);
					//dd($pre,$pretime);

					if ($time > $previous_timestamp_1 && $vals['deadline_notification_sent'] == 1) {

						if (isset($vals['user_id'])) {

							$user_id = $vals['user_id'];
							$user_details = User::where('id', $vals['user_id'])->first();

							$single = UserApplications::where('id', $vals['id'])->first();
							$ud = UserApplications::where('id', $vals['id'])->first()->toArray();
							$get_application = Application::where('id', $vals['application_id'])->first()->toArray();
							if (isset($user_details->email) && !empty($user_details->email)) {
								$email = $user_details->email;


								$name = $user_details->name;

								$data['name'] = $name;
								$data['user_details'] = $ud;
								$data['title'] = $get_application['title'];

								try {

									$deadline = $ud['deadline'];
									$phone = User::where('email', $email)->pluck('phone')->first();
									User::sendMessage($phone, $deadline, 'application_deadline');

									// Attempt to call the method
								} catch (\Exception $e) {

								}


								Mail::send('emails.deadline', $data, function ($m) use ($name, $email) {

									$m->from('no-reply@ooc.om', 'Olympic Solidarity');
									$m->to($email, $name)->subject('24 hours Application Reminder');
								});

								$single->deadline_notification_sent = 2;
								$single->save();
							}
						}
					}
				}

				$current_date = date('d-m-Y', $time);
				if ($current_date == $vals['deadline'] && ($vals['final_notification_sent'] == 0 || empty($vals['final_notification_sent']))) {
					if (isset($vals['user_id'])) {
						$user_id = $vals['user_id'];
						$user_details = User::where('id', $vals['user_id'])->first();


						$single1 = UserApplications::where('id', $vals['id'])->first();
						$ud = UserApplications::where('id', $vals['id'])->first()->toArray();
						$get_application = Application::where('id', $vals['application_id'])->first()->toArray();
						if (isset($user_details->email) && !empty($user_details->email)) {
							$email = $user_details->email;
							$name = $user_details->name;
							$data['name'] = $name;
							$data['user_details'] = $ud;
							$data['title'] = $get_application['title'];

							try {

								$deadline = $ud['deadline'];
								$phone = User::where('email', $email)->pluck('phone')->first();
								User::sendMessage($phone, $deadline, 'application_deadline');

								// Attempt to call the method
							} catch (\Exception $e) {

							}
							Mail::send('emails.deadline_final', $data, function ($m) use ($name, $email) {
								$m->from('no-reply@ooc.om', 'Olympic Solidarity');
								$m->to($email, $name)->subject('Application Deadline Today');
							});
							$single1->final_notification_sent = 1;
							$single1->save();

						}
					}
				}
			}

		}



		//$name='anubhav';

		//$data['name'] = 'anubhav';
//$data['user_details'] = [
		//  'email' => 'anubhav.abstain@gmail.com',
		//'deadline' => 'test',  // Replace with the actual deadline value
//];
//	$data['title'] ='test';
//	$d = array();
//		$email = 'anubhav.abstain@gmail.com';		  
//	 Mail::send('emails.deadline', $data, function ($m) use ($name,$email) {
//			$m->from('no-reply@ooc.om', 'Olympic Solidarity');
//			$m->to($email, $name)->subject('test mail');
		//}); 
		//die;

	}

	public function redirectPath()
	{
		$user = \Auth::user();
		$get_user = User::find($user->id);
		$get_user->last_login = time();
		$get_user->save();
		if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
			return $this->redirectToAdmin;
		} else {
			return $this->redirectTo;
		}
	}

	/**
	 * Get the failed login response instance.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 * @throws \Illuminate\Validation\ValidationException
	 */
	protected function sendFailedLoginResponse(Request $request)
	{
		throw ValidationException::withMessages([
			'auth_failed' => [trans('auth.failed')],
		]);
	}
}
