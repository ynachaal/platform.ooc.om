<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Forms;
use App\Programs;
use App\Notifications;
use App\User;
use App\UserApplications;
use Auth;
use DataTables;
use Mail;

class FormsController extends Controller
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
	public function afterUploadRemark(Request $request) {
		if(isset($_POST['user_application_id']) && !empty($_POST['user_application_id'])) {
			$userApplications = UserApplications::find($_POST['user_application_id']);
			$userApplications->final_upload_remark = $_POST['remark'];
			if(isset($_POST['close'])) {
				$userApplications->status = 'closed';
				$userApplications->save();
				Session::flash('success', 'Remark has been saved successfully.');
				return redirect('/application/closed');
			}
			if(isset($_POST['reject'])) {
				$userApplications->status = 'rejected';
				$userApplications->save();
				 Session::flash('success', 'Remark has been saved successfully.');
				return redirect('/application/rejected');
			}
		}
	}
	public function superAdminAttachmentSet(Request $request) {
		$data = $request->all();
		
		$app_id = $data['id'];
		$userApplications = UserApplications::find($app_id);
		if(isset($data['superadmin_attachment_options']) && !empty($data['superadmin_attachment_options'])) {
		$superadmin_attachment_options = $data['superadmin_attachment_options'];
		$array = explode(',',$superadmin_attachment_options);
		$encoded =  json_encode($array);
		
		$userApplications->superadmin_attachments = $encoded;
		} else {
		$userApplications->superadmin_attachments = null;
		}
		  if (isset($request['file'])) {
            $image = $request->file('file');
            $userApplications->superadmin_document = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/document');
            $image->move($destinationPath, $userApplications->superadmin_document);
        }
		/* if(isset($data['superadmin_document']) && !empty($data['superadmin_document'])) {
			
            $superadmin_document = $request->file('superadmin_document');
            $userApplications->superadmin_document = time() . '.' . $superadmin_document->getClientOriginalExtension();
            $destinationPath = public_path('/upload/document');
            $superadmin_document->move($destinationPath, $userApplications->superadmin_document);
        
		} */
		$userApplications->save();
		Session::flash('success', 'Saved successfully!');
		return redirect('/application/active_edit/'.$app_id.'');
	}
	
	public function superAdminSubmitRemark(Request $request) {
		$data = $request->all();
		$app_id=  $data['app_id'];
		$remark=  $data['remark'];
		$userApplications = UserApplications::find($app_id);
		$userApplications->superadmin_remark = $remark;
		$userApplications->save();
		 Session::flash('success', 'Saved successfully!');
		  return redirect('/application/active_edit/'.$app_id.'');
		
	}
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Forms::get()->toArray();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('/form-preview/' . $row['slug']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-eye"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.forms');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function formPreview($slug = 'form1', $application_id = 0)
    {
		$dataUserApplications = array();
		$user_id = Auth::user()->id;
		$application_id = $application_id;
	
	    // Edited Case
		$dataUserApplications1 = UserApplications::where(['status'=>'not submitted','user_id'=>$user_id,'id'=>$application_id])->first();
	    if(isset($dataUserApplications1) && !empty($dataUserApplications1)){
	        $get_dataa = Programs::where('id',$dataUserApplications1['application_id'])->first();
	    } else {
	        $get_dataa = Programs::where('id',$application_id)->first();
	    }
	    
	    
		if($get_dataa)
		{
			$get_data = $get_dataa->toArray();
		}
        $form_data = Forms::where('slug', $slug)->first()->toArray();
        $is_preview = true;
		
		
		if($dataUserApplications1)
		{
			$dataUserApplications = $dataUserApplications1->toArray();
		}
		if($dataUserApplications)
		{
			
        return view('form_preview', compact('form_data', 'slug', 'is_preview', 'application_id','dataUserApplications','user_id','get_data'));
		}
		else 
		return view('form_preview', compact('form_data', 'slug', 'is_preview', 'application_id','user_id','get_data'));	
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function formView($application_id)
    {
        $data = Programs::where('id', $application_id)->with(['childPrograms', 'form_application', 'childPrograms.form_application'])->first()->toArray();
        return view('users.form_view', compact('data'));
    }
	public function deleteattachment(Request $request) {
		$data = $request->all();
		$id = $data['id'];
		$name = $data['name'];
		$userApplications = UserApplications::find($id);
		$attachments = $userApplications->attachments;
		$decode = json_decode($attachments);
	
		 foreach($decode as $val) {
			
			unset($val->$name);
		} 
		$encode = json_encode($decode);
		$userApplications->attachments = $encode;
		$userApplications->save();
		die;
	}
   public function saveForm1(Request $request)
    {
        $user = User::role('admin')->pluck('email')->toArray();
        $superadmins = User::role('super admin')->pluck('email')->toArray();
        $merge = array_merge($user, $superadmins);
    
        $data = $request->all();
    
        if (isset($data['attachment'])) {
            $attachments = [];
            foreach ($data['attachment'] as $key => $value) {
                $doc = time() . '_' . $value->getClientOriginalName();
                $destinationPath = public_path('/upload/form_document/' . Auth::user()->id);
                $value->move($destinationPath, $doc);
                $attachments['attachment'][$key] = $doc;
            }
        }
    
        unset($data['_token'], $data['attachment'], $data['application_id']);
        $status = isset($_REQUEST['temporary']) ? 'not submitted' : 'under review';
    
        if (isset($data['dataUserApplicationsId'])) {
           
            $userEmail = Auth::user()->email;
            $temp = UserApplications::where('id', $data['dataUserApplicationsId'])->first()->toArray();
            $title = Application::where('id',$temp['application_id'])->pluck('title')->first();            //$title = $temp->application->title;
         
           
            $user_application['data'] = json_encode($data);
            $user_application['updated_by'] = Auth::user()->id;
            $user_application['status'] = $status;
    
            if (!empty($attachments)) {
                if (!empty($temp['attachments'])) {
                    $a1 = json_decode($temp['attachments'], true)['attachment'];
                    $a2 = $attachments['attachment'];
                    $attachments['attachment'] = array_merge($a1, $a2);
                }
                $user_application['attachments'] = json_encode($attachments);
            }
    
            UserApplications::where('id', $data['dataUserApplicationsId'])->update($user_application);
    
            // Email for update
            $subject = 'Application Updated';
            $secondline = "تم تحديث بيانات البرنامج بنجاح بواسطة: " . $userEmail;
            $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        } else {
            $user_application['data'] = json_encode($data);
            $user_application['user_id'] = Auth::user()->id;
            $user_application['status'] = $status;
            $user_application['created_by'] = Auth::user()->id;
            $user_application['updated_by'] = Auth::user()->id;
            $user_application['application_id'] = $request['application_id'];
    
            if (!empty($attachments)) {
                $user_application['attachments'] = json_encode($attachments);
            }
    
            $test = UserApplications::create($user_application);
            $title = $test->application->title;
            $subject = 'Application Created';
            // Email for create
            $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
            $secondline = "لقد قمت بطلب الاستفادة من برنامج:";
        }
    
        $regards = "مع تحيات";
        $emailData = [
            'program_name' => $title ?? $temp['application_id'] ?? '',
            'level' => 'success',
            'actionUrl' => route('login'),
            'actionText' => 'Login to your member account',
            'outroLines' => [$regards, 'اللجنة الأولمبية العمانية'],
            'introLines' => [$firstline, $secondline]
        ];
    
        $to_email_user = [Auth::user()->email];
        $notificationType = isset($data['dataUserApplicationsId']) ? 'update_program' : 'new_program';
    
        try {
            $combined_emails = array_merge($merge, $to_email_user);
            foreach ($combined_emails as $email) {
                $phone = User::where('email', $email)->pluck('phone')->first();
                if ($phone) {
                    User::sendMessage($phone, $emailData['program_name'], $notificationType);
                }
            }
        } catch (\Exception $e) {
            
        }
    
        // Send email to admins
       
        
        if (isset($merge)) {
            foreach ($merge as $recipientEmail) {
                if (isset($recipientEmail)) {
                    Mail::send('emails.create_program', $emailData, function ($m) use ($recipientEmail, $subject) {
                        $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                        $m->to($recipientEmail)->subject($subject);
                    });
                }
            }
        }
    
        // Send email to user
        Mail::send('emails.create_program', $emailData, function ($m) use ($to_email_user, $subject) {
            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
            $m->to($to_email_user)->subject($subject);
        });
    
        $userauth = Auth::user();
        if ($userauth->hasRole('User')) {
            $name = $userauth->name;
            $notifications = new Notifications;
            $notifications->user_id = $userauth->id;
            $notifications->target_id = isset($data['dataUserApplicationsId']) ? $data['dataUserApplicationsId'] : $test->id;
            $notifications->notification_text = isset($data['dataUserApplicationsId']) ? "User $name updated application" : "$name created application";
            $notifications->type = 'application';
            $notifications->save();
        }
    
        Session::flash('success', 'Saved successfully!');
        return redirect(isset($_REQUEST['temporary']) ? '/application/not-submitted' : '/application/active');
    }


    public function saveFormFeedback(Request $request)
    {
        
		$userid = Auth::id();
	
        $data = $request->all();
        $userApplications = UserApplications::where('id', $data['id'])->first();

        if (isset($data['feedback']) && !empty($data['feedback'])) {
            $userApplications->feedback = $data['feedback'];
        }
        if (isset($data['remark']) && !empty($data['remark'])) {
			$user = \Auth::user();
			$role = $user->roles->first()->name; // or display_name
			if($role=='Super Admin') {
				if(isset($data['admin_took_over_comment']) && $data['admin_took_over_comment']==1) {
				//23-11-update	 $userApplications->remark = $data['remark'];
			 $userApplications->remark = $data['remark'];
					 $userApplications->remark_user = $userid;
					 $userApplications->remark_timestamp=time();
				}else {
					 //23-11-update $userApplications->superadmin_remark = $data['remark'];
					
					 
					 	$userApplications->superadmin_remark = $data['remark'];
				$userApplications->superadmin_remark_timestamp=time();
				$userApplications->superadmin_remark_user = $userid;
				}
				
			}
			else{
            $userApplications->remark_user = $userid;
             $userApplications->remark = $data['remark'];
             $userApplications->remark_timestamp =time();
			}
        }
        if (isset($data['downpayment']) && !empty($data['downpayment'])) {
            $userApplications->down_payment = $data['downpayment'];
        }
        if (isset($data['approvedbudget']) && !empty($data['approvedbudget'])) {
			//$userApplications->status = 'closed';
            $userApplications->approved_budget = $data['approvedbudget'];
        }
		if (isset($data['admin_took_over']) && !empty($data['admin_took_over'])) {
            $userApplications->admin_took_over = $data['admin_took_over'];
        }
		if (isset($data['admin_took_over_comment']) && !empty($data['admin_took_over_comment'])) {
            $userApplications->admin_took_over_comment = $data['admin_took_over_comment'];
        }
		
		if (isset($data['deadline']) && !empty($data['deadline'])) {
			$timestamp = strtotime( $data['deadline']);
			$date = date('d-m-Y',$timestamp);
            $userApplications->deadline = $date;
            $userApplications->deadline_timestamp = $timestamp;
        }
		
        $userApplications->save();
        return 'success';
        // Session::flash('success', 'Saved successfully!');

        // return redirect('/application/active');
    }

    public function saveFormFeedbackPdf(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $userApplications = UserApplications::where('id', $data['id'])->first();

        if (isset($request['file'])) {
            $image = $request->file('file');
            $userApplications->certificate_of_approval = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/pdf');
            $image->move($destinationPath, $userApplications->certificate_of_approval);
        }

        $userApplications->save();
        return 'success';
        // Session::flash('success', 'Saved successfully!');
        // return redirect('/application/active');
    }
}
