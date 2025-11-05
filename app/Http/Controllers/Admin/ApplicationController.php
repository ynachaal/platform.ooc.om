<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\UserApplications;
use Auth;
use DataTables;
use App\Forms;
use App\Content;
use App\UserAlert;
use App\User;
use App\Committee;
use App\UserDocuments;
use App\Application;
use App\UserApplicationImages;
use Str;
use App;
use App\Programs;
use Illuminate\Support\Facades\Redirect;
use PDF;
use Mail;
use Excel;
use App\Exports\UserApplicationsExport;
use Spatie\Permission\Models\Role;
use App\Notifications;
use App\NotificationReadStatus;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
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
	 
	public function appDelete($id)
    {
		
		$select = Notifications::where('target_id',$id)->first();
		if(!empty($select))
		{
			$notification_id = $select->id;
			$read_status1 = NotificationReadStatus::where('notification_id',$notification_id)->get();
			if($read_status1)
			{
				$read_status = $read_status1->toArray();
				foreach($read_status as $vals){
					$select1 = NotificationReadStatus::where('id',$vals['id'])->delete();
				}
			}
			$notifications = Notifications::where('target_id',$id)->delete();
		}	
		$res=UserApplications::where('id',$id)->delete();
		return redirect('/application/active');
	}
    public function getAllActive(Request $request)
    {
	

        if ($request->ajax()) {
            if (Auth::user()->hasAnyRole(['Super Admin'])) {
                $data = UserApplications::select('id','application_id','user_id','status','created_at','updated_at','updated_by','created_by','certificate_of_approval')->where('status', '=', 'accept temporary') ->orWhere('status', 'request not completed')->orWhere('status', 'under review')->with(array('user' => function($query) {
        $query->select('id','name','committee_id');
    }))->with('user.committee')->with([  'application'])->get()->toArray();
/* 	echo '<pre>';
	print_r($data);
	die;
 */
            } else if (Auth::user()->hasAnyRole(['Admin'])) {

                $data = UserApplications::select('id','application_id','user_id','status','created_at','updated_at','updated_by','created_by','certificate_of_approval')->where(function ($q) {
                    $q->where('status', 'under review')
                        ->orWhere('status', 'accept temporary')
                        ->orWhere('status', 'request not completed');
                })->with(array('user' => function($query) {
        $query->select('id','name','committee_id');
    }))->with(array('user.committee' => function($query) {
        $query->select('committee_name');
     }))->with('user.committee')->with([  'application'])->get()->toArray();
            } else {
                $data =  UserApplications::select('id','application_id','user_id','status','created_at','updated_at','updated_by','created_by','certificate_of_approval')->where('user_id', Auth::user()->id)->where(function ($q) {
                    $q->where('status', 'under review')
                        ->orWhere('status', 'accept temporary')
                        ->orWhere('status', 'request not completed');
                })->with(array('user' => function($query) {
        $query->select('id','name');
    }))->with(array('user.committee' => function($query) {
        $query->select('committee_name');
    }))->with([  'application'])->get()->toArray();
            }

            return Datatables::of($data)
                ->addIndexColumn()
				->editColumn('created_at', function ($row) {
					$timestamp = strtotime($row['created_at']);
					$time = date('d-m-Y h:i:s',$timestamp);
					return $time;
				})
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('/application/active_edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-eye"></i></a>';
				  if (Auth::user()->hasAnyRole(['Super Admin'])){
								$btn .= '<a onclick="return confirm(\'Are you sure?\');" href="' . url('/application/app-delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
							}
                    //                                $btn .= '<a href="' . url('/committee/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
                    if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
                        // $btn .= '<a href="#" class="btn btn-primary btn-sm check_appoved" data-id = "' . $row['id'] . '"><i class="fa fa-check"></i></a>';
                        // $btn .= '<a href="#" class="btn btn-danger btn-sm check_reject" data-id = "' . $row['id'] . '"><i class="fa fa-ban"></i></a>';
                    }
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('application.active.active');
    }

    public function editActive($id)
    {
		$content_data = array();
		$content = Content::get();
		if($content){
			$content_data = $content->toArray();
		}
	
        $dataUserApplications1 = UserApplications::where('id', $id)->with(['application', 'application.application_form'])->first();
		if($dataUserApplications1)
		{
			$dataUserApplications = $dataUserApplications1->toArray();
			
		}
		else {
			return redirect('/application/active');
		}
//echo '<pre>';
//print_r(json_decode($dataUserApplications['data']));
//die;
$descdata[]='';
if(isset($dataUserApplications['data']) && !empty($dataUserApplications['data'])){
$descdata=json_decode($dataUserApplications['data']);
//dd($descdata->description);
}
        $data = json_decode($dataUserApplications['data'], true);
        $attachments = [];
        if (!empty($dataUserApplications['attachments'])) {
            $attachments = json_decode($dataUserApplications['attachments'], true);
        }
        $slug = $dataUserApplications['application']['application_form']['slug'];
        $form_data = $dataUserApplications['application']['application_form'];
        $application_id = $dataUserApplications['application']['id'];
        $is_preview = false;
         $get_dataa = Programs::where('id',$application_id)->first();
		if($get_dataa)
		{
			$get_data = $get_dataa->toArray();
		}
		//echo '<pre>';
		//print_r($form_data);
		if($get_data)
		{
        return view('form_preview', compact('form_data', 'dataUserApplications', 'slug', 'is_preview', 'application_id', 'data', 'attachments','get_data','content'));
		}
		else {
		 return view('form_preview', compact('form_data', 'dataUserApplications', 'slug', 'is_preview', 'application_id', 'data', 'attachments','content','descdata'));
		}
    }

    public function getAllRejected(Request $request)
    {

        if ($request->ajax()) {
            if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
                $data = UserApplications::where('status', '=', 'rejected')->with(['user', 'application', 'user.committee'])->get()->toArray();
            } else {
                $data = UserApplications::where('user_id', Auth::user()->id)->where('status', '=', 'rejected')->with(['user', 'application', 'user.committee'])->get()->toArray();
            }
			$btn = '';
            return Datatables::of($data)
                ->addIndexColumn()
				->editColumn('created_at', function ($row) {
					$timestamp = strtotime($row['created_at']);
					$time = date('d-m-Y h:i:s',$timestamp);
					return $time;
				})
			
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . url('/application/active_edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-eye"></i></a>';
						  if (Auth::user()->hasAnyRole(['Super Admin'])){
								$btn .= '<a onclick="return confirm(\'Are you sure?\');" href="' . url('/application/app-delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
							}
                    // $btn = '<a href="' . url('/committee/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('application.rejected.rejected');
    }

    public function getAllApproved(Request $request)
    {
        if ($request->ajax()) {
            if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
                $data = UserApplications::where('status', '=', 'accepted')->with(['user', 'application', 'user.committee'])->get()->toArray();
            } else {
                $data = UserApplications::where('user_id', Auth::user()->id)->where('status', '=', 'accepted')->with(['user', 'application', 'user.committee'])->get()->toArray();
            }
            return Datatables::of($data)
                ->addIndexColumn()
				->editColumn('created_at', function ($row) {
					$timestamp = strtotime($row['created_at']);
					$time = date('d-m-Y h:i:s',$timestamp);
					return $time;
				})
				 ->addColumn('applicant_name', function ($row) {
				     $name = '';
                     $decode = json_decode($row['data']);
                     if(isset($decode->given_name)){
                         if(is_array($decode->given_name))
                        $name .=$decode->given_name[0];
                        else
                        $name .=$decode->given_name;
                     }
                      if(isset($decode->family_name)){
                         if(is_array($decode->family_name))
                        $name .=' '.$decode->family_name[0];
                        else
                        $name .=' '.$decode->family_name;
                     }
                    
                    return $name;
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn .= '<a href="' . url('/application/active_edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-eye"></i></a>';
					  if (Auth::user()->hasAnyRole(['Super Admin'])){
								$btn .= '<a onclick="return confirm(\'Are you sure?\');" href="' . url('/application/app-delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
							}
                    // $btn .= '<a href="' . url('/committee/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('application.approved.approved');
    }

    public function getAllClosed(Request $request)
    {   
        if ($request->ajax()) {
            if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
                $data = UserApplications::where('status', '=', 'closed')->with(['user', 'application', 'user.committee'])->get()->toArray();
            } else {
                $data = UserApplications::where('user_id', Auth::user()->id)->where('status', '=', 'closed')->with(['user', 'application', 'user.committee'])->get()->toArray();
            }
            return Datatables::of($data)
                ->addIndexColumn()
				->editColumn('created_at', function ($row) {
					$timestamp = strtotime($row['created_at']);
					$time = date('d-m-Y h:i:s',$timestamp);
					return $time;
				})
                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn .= '<a href="' . url('/application/active_edit', $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-eye"></i></a>';
					  if (Auth::user()->hasAnyRole(['Super Admin'])){
								$btn .= '<a onclick="return confirm(\'Are you sure?\');" href="' . url('/application/app-delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';
							}
                    // $btn .= '<a href="' . url('/committee/delete', $row['id']) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('application.closed.closed');
    }
	public function notSubmitted(Request $request) {
	$id = Auth::user()->id;

if ($request->ajax()) {
    if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
        $data = UserApplications::where('status', '=', 'not submitted')
            ->orWhere('user_id', $id)
            ->with(['user', 'application', 'user.committee'])
            ->get()
            ->toArray();
    } else {
        $data = UserApplications::where('user_id', $id)
            ->where('status', '=', 'not submitted')
            ->with(['user', 'application', 'user.committee'])
            ->get()
            ->toArray();
    }

    return Datatables::of($data)
        ->addIndexColumn()
        ->editColumn('created_at', function ($row) {
            $timestamp = strtotime($row['created_at']);
            $time = date('d-m-Y h:i:s', $timestamp);
            return $time;
        })
        ->addColumn('action', function ($row) {
            // Fetch the related application and form
            $get_application = Application::where('id', $row['application_id'])->first();
            
            // Ensure $get_application is not null
            if ($get_application) {
                $form_data = Forms::where('id', $get_application->form_id)->first();
                if ($form_data) {
                    return '<a href="' . url('/form-preview/' . $form_data->slug, $row['id']) . '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-eye"></i></a>';
                }
            }

            // Return a default or empty action if no form/application is found
            return '<span class="text-danger">No form found</span>';
        })
        ->rawColumns(['action'])
        ->make(true);
}

return view('application.not_submitted');
	}
	public function getttotal(Request $request)
    {
		$all = $request->all();
	
	
	
		$status = '';
		$year = '';
		$committee_id = '';
			if(isset($all['year']) && !empty($all['year']) && $all['year']!='undefined') {
				$year = $all['year'];
				
			} 
			if(isset( $all['committee_id']) && !empty( $all['committee_id']) &&  $all['committee_id']!='undefined') {
				$committee_id =  $all['committee_id'];
				
			} 
			if(isset( $all['status']) && !empty( $all['status'])){
			if($all['status']==trans('custom.accepted_temporary')) {
				$status = 'accept temporary';
				
			} else if($all['status']==trans('custom.accepted')) {
				$status = 'accepted';
			} else if($all['status']==trans('custom.closed')) {
				$status = 'closed';
			}  else if($all['status']==trans('custom.rejected')) {
				$status = 'rejected';
			} 
			 else if($all['status']==trans('custom.request_not_completed')) {
				$status = 'request not completed';
			} 
			else if($all['status']==trans('custom.under_review')) {
				$status = 'under review';
			} 
			else {
			
				$status = $_REQUEST['status'];
				
			}
			}
		     $data =
			 UserApplications::when($status, function($query) use ($status) {
				if(isset($status) && !empty($status))
				return $query->where('status', '=', $status);
				else 
				{
				return	   $query->orWhere('status', '=', 'closed')
                    ->orWhere('status', '=', 'request not completed')
                    ->orWhere('status', '=', 'rejected')
					->orWhere('status', 'accepted')
                     ->orWhere('status', 'under review');
				}
      })->when($year, function($query) use ($year) {
				if(isset($year) && !empty($year))
				return $query->where('created_at', 'like', '%'.$year.'%');
      })->with(['user', 'application', 'user.committee'])->get()->toArray();
		
		$array = array();
		if(!empty($committee_id)) {
			$find = Committee::where('committee_name',$committee_id)->first();
		foreach($data as $keys=> $vals){
			if(isset( $vals['user']['committee_id']) &&($vals['status']=='closed' || $vals['status']=='accepted' || $vals['status']=='request not completed'  || $vals['status']=='rejected'  || $vals['status']=='under review')){
				if($vals['user']['committee_id']==$find->id ){
					$array[$keys]  = $vals;
				}
		}
		}
		} else {
			$array  = $data;
		}
		$total = 0;
		foreach($array as $vals){
			$total +=$vals['approved_budget'];
		}
		/* if($status==trans('custom.closed')) {
			$status = 'closed';
		} else if($status==trans('custom.rejected')) {
			$status = 'rejected';
		} else {
			$status =$all['val'];
		} */
		/* if(empty($status)) 
		{
			$total_budget = UserApplications::sum('approved_budget');
		}
		else
		$total_budget = UserApplications::where(['status'=>$status])->sum('approved_budget'); */
		/* return $total_budget; */
		return $total;
	}
    public function allReport(Request $request)
    {
        $status_array = array('accept temporary','accepted','closed','rejected','request not completed','under review');
        $committee = Committee::get()->toArray();
		$total_budget = UserApplications::sum('approved_budget');
        if ($request->ajax()) {
             if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
                $data = UserApplications::where('status',  'closed')->orWhere('status', 'accepted')->orWhere('status', 'request not completed')->orWhere('status', 'rejected')->orWhere('status', 'under review')->with(['user', 'application', 'user.committee'])->get()->toArray();
            } else {
                
                $data = UserApplications::where('user_id', Auth::user()->id)->where(function ($q) {
                    $q->orWhere('status', '=', 'closed')
                    ->orWhere('status', '=', 'request not completed')
                    ->orWhere('status', '=', 'rejected')
					->orWhere('status', 'accepted')
                     ->orWhere('status', 'under review');
                })->with(['user', 'application', 'user.committee'])->get()->toArray();
            }
           
              return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                $timestamp = strtotime($row['created_at']);
                $time = date('d-m-Y h:i:s', $timestamp);
                return $time;
            })
            ->editColumn('status', function ($row) {
                // Check if 'status' is set and not null
                if (isset($row['status'])) {
                    if ($row['status'] == 'accept temporary') {
                        $value = trans('custom.accepted_temporary');
                    } else if ($row['status'] == 'accepted') {
                        $value = trans('custom.accepted');
                    } else if ($row['status'] == 'closed') {
                        $value = trans('custom.closed');
                    } else if ($row['status'] == 'rejected') {
                        $value = trans('custom.rejected');
                    } else if ($row['status'] == 'request not completed') {
                        $value = trans('custom.request_not_completed');
                    } else if ($row['status'] == 'under review') {
                        $value = trans('custom.under_review');
                    } else {
                        $value = $row['status'];
                    }
                } else {
                    $value = 'N/A'; // Fallback if 'status' is not set
                }
                
                return $value;
            })
            ->addColumn('certificated_approval', function ($row) {
                $btn = '';
        
                // Check if 'application' and 'certificated_approval' are set
                if (isset($row['application']) && isset($row['application']['certificated_approval'])) {
                    $btn .= $row['application']['certificated_approval'];
                } else {
                    $btn .= 'N/A'; // Fallback if 'certificated_approval' is not set
                }
        
                return $btn;
            })
            ->rawColumns(['certificated_approval'])
            ->make(true);

        }
        return view('application.report.report', ['committee' => $committee,'status_array'=>$status_array,'total_budget'=>$total_budget]);
    
    }
public function allReportExcelDownload()
    {
	
		 return Excel::download(new UserApplicationsExport, 'UserApplicationsExport.xlsx');
	

	}
    public function allReportDownload()
    {
		$action = '';
		if(isset( $_REQUEST['action']))
			$action = $_REQUEST['action'];
        // dd('in');
		
		if(empty($action)) {
			
			$year = '';
		$committee_id = '';
		$status = '';
		$action = '';
		$user_id =  Auth::user()->id;
		if(isset($_REQUEST['action']) && !empty($_REQUEST['action']) && $_REQUEST['action']!='undefined') {
				$action = $_REQUEST['action'];
				
			}
			if(isset($_REQUEST['year']) && !empty($_REQUEST['year']) && $_REQUEST['year']!='undefined') {
				$year = $_REQUEST['year'];
				
			} 
			if(isset($_REQUEST['committee_id']) && !empty($_REQUEST['committee_id']) && $_REQUEST['committee_id']!='undefined') {
				$committee_id = $_REQUEST['committee_id'];
				
			} 
			if(isset($_REQUEST['status']) && !empty($_REQUEST['status'])){
			if($_REQUEST['status']==trans('custom.accepted_temporary')) {
				$status = 'accept temporary';
				
			} else if($_REQUEST['status']==trans('custom.accepted')) {
				$status = 'accepted';
			} else if($_REQUEST['status']==trans('custom.closed')) {
				$status = 'closed';
			}  else if($_REQUEST['status']==trans('custom.rejected')) {
				$status = 'rejected';
			} 
			 else if($_REQUEST['status']==trans('custom.request_not_completed')) {
				$status = 'request not completed';
			} 
			else if($_REQUEST['status']==trans('custom.under_review')) {
				$status = 'under review';
			} 
			else {
			
				$status = $_REQUEST['status'];
				
			}
			}
		     $data =
			 UserApplications::when($status, function($query) use ($status) {
				if(isset($status) && !empty($status))
				return $query->where('status', '=', $status);
				else 
				{
				return	   $query->where('status', '=', 'accept temporary') ->orWhere('status', 'request not completed')->orWhere('status', 'under review');
				}
      })->when($action, function($query) use ($action) {
				if(isset($action) && !empty($action))
				{
					if($action=='active'){
						return	$query->where('status', '=', 'request not completed')
                    ->orWhere('status', '=', 'accept temporary')
                    ->orWhere('status', '=', 'under review');
					
					} else if($action=='rejected'){
						return $query->where('status', '=', 'rejected');
					} else if($action=='approved'){
							return $query->where('status', '=', 'accepted');
					} else if($action=='closed') {
						return $query->where('status', '=', 'closed');
					}
					else if($action=='not_submitted') {
						return $query->where('status', '=', 'not submitted');
					}
				}
      })->when($user_id, function($query) use ($user_id) {
				 if (Auth::user()->hasAnyRole(['User'])) {
				return $query->where('user_id', $user_id);
				 }
      })->when($year, function($query) use ($year) {
				if(isset($year) && !empty($year))
				return $query->where('created_at', 'like', '%'.$year.'%');
      })->with(['user', 'application', 'user.committee'])->get()->toArray();
		
		$array = array();
		if(!empty($committee_id)) {
			$find = Committee::where('committee_name',$committee_id)->first();
		foreach($data as $keys=> $vals){
			if(isset( $vals['user']['committee_id']) &&($vals['status']=='closed' || $vals['status']=='accepted' || $vals['status']=='request not completed'  || $vals['status']=='rejected'  || $vals['status']=='under review')){
				if($vals['user']['committee_id']==$find->id ){
					$array[$keys]  = $vals;
				}
		}
		}
		} else {
			$array  = $data;
		}
			
       /*  if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
            $data = UserApplications::where('status', '=', 'closed')->orWhere('status', 'under review')->with(['user', 'application', 'user.committee'])->get()->toArray();
        } else {
            $data = UserApplications::where('user_id', Auth::user()->id)->where(function ($q) {
				
                $q->where('status', '=', 'closed')
                    ->orWhere('status', 'under review');
            })->with(['user', 'application', 'user.committee'])->get()->toArray();
        } */
		}
		else{
		
				 if (Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
            $array = UserApplications::when($action, function($query) use ($action) {
				if(isset($action) && !empty($action))
				{
					if($action=='active'){
						return	$query->where('status', '=', 'request not completed')
                    ->orWhere('status', '=', 'accept temporary')
                    ->orWhere('status', '=', 'under review');
					
					} else if($action=='rejected'){
						return $query->where('status', '=', 'rejected');
					} else if($action=='approved'){
							return $query->where('status', '=', 'accepted');
					} else if($action=='closed') {
						return $query->where('status', '=', 'closed');
					}
					else if($action=='not_submitted') {
						return $query->where('status', '=', 'not submitted');
					}
				}
			})->with(['user', 'application', 'user.committee'])->get()->toArray();
        } else {
            $array = UserApplications::where('user_id', Auth::user()->id)->when($action, function($query) use ($action) {
				if(isset($action) && !empty($action))
				{
					if($action=='active'){
						return	$query->where('status', '=', 'request not completed')
                    ->orWhere('status', '=', 'accept temporary')
                    ->orWhere('status', '=', 'under review');
					
					} else if($action=='rejected'){
						return $query->where('status', '=', 'rejected');
					} else if($action=='approved'){
							return $query->where('status', '=', 'accepted');
					} else if($action=='closed') {
						return $query->where('status', '=', 'closed');
					}
					else if($action=='not_submitted') {
						return $query->where('status', '=', 'not submitted');
					}
				}
			})->with(['user', 'application', 'user.committee'])->get()->toArray();
        }
			
		}

        view()->share('data', $array);
        header('Content-Type: text/html; charset=UTF-8');
        $pdf = PDF::loadView('application.report.download')->setPaper('a4', 'landscape');
        return $pdf->download('pdfview.pdf');

        // $html = view('application.report.download', ['data' => $data])->render();
        // $fileNameWithPath = 'pdfs/' . Str::random(10) . '.pdf';
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML($html)->save($fileNameWithPath);
        // $url = url('/') . '/' . $fileNameWithPath;
        // dd($url);
        // dd($data);
        // return redirect()->back();

        return view('application.report.download', ['data' => $data]);
    }

   public function formApproved($id)
    {
        
        $dataUserApplications = UserApplications::where('id', $id)->first();
        $superadmins = User::role('super admin')->pluck('email')->toArray();
        
		
        if (Auth::user()->hasAnyRole(['Super Admin'])) {
			if($dataUserApplications->admin_took_over==1) {
			
				 $dataUserApplications->status = "accept temporary";
				 $dataUserApplications->admin_took_over = 0;
			}
			 else {
			/* if($dataUserApplications->status=='closed')
				 $dataUserApplications->status = "closed";
			 else */
				$dataUserApplications->status = "accepted";
			 }
        } else {
			 $userauth = Auth::user();
			 $name = $userauth->name;
			 $notifications = new Notifications;
			 $notifications->user_id = $userauth->id;
			 $notifications->target_id = $id;
			 $notifications->notification_text = 'Supervisor '.$name.' temporary accepted application';
			 $notifications->type = 'supervisor';
			 $notifications->save();
            $dataUserApplications->status = "accept temporary";
        }
        $dataUserApplications->save();
        
        $to_email_user_array = User::where('id', $dataUserApplications['user_id'])->pluck('email')->toArray();
       // $to_email = $user;
        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        $secondline = "تمت مراجعة الطلب:";
        $regards = "مع تحيات";
        $data = ['program_name' => $dataUserApplications->application->title, 'status' => $dataUserApplications->status, 'level' => 'success',   'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];

        
        $admins =array();
       
        //$to_email_user_array = array($to_email);
        
         if (Auth::user()->hasAnyRole(['Super Admin'])) {
             $admin_id = $dataUserApplications->remark_user;
             if(isset($admin_id)){
                  $admins = User::where('id',$admin_id)->pluck('email')->toArray();
             }
           
            $merge = array_merge($to_email_user_array,$admins);
        } else {
            $merge = array_merge($to_email_user_array,$superadmins);
        }
        
       

     //$merge = array('anubhav.abstain@gmail.com','jatin.abstain@gmail.com','superadmin@gmail.com');

        
        if (isset($merge)) {
            foreach ($merge as $email) {
                if (isset($email)) {
                    try {
        
                        $response =  $dataUserApplications->application->title.' - الحالة ('.$dataUserApplications->status.')';
                        $phone = User::where('email',$email)->pluck('phone')->first();
                        User::sendMessage($phone,$response,'form_temp_accept_reject_change');
                           // Attempt to call the method
                       } catch (\Exception $e) {
        
                       }
                    Mail::send('emails.temporary_appoved_or_request_modify', $data, function ($m) use ($email) {
                        //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                        $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                        $m->to($email)->subject('Program Accepted');
                    });
                }
            }
        }
        
        // var_dump(Mail::failures());
        
        return response()->json(true);
    }

    public function formreject($id)
    {
        $dataUserApplications = UserApplications::where('id', $id)->first();
        
        if (Auth::user()->hasAnyRole(['Super Admin'])) {
            $dataUserApplications->status = "rejected";
        } else {
            $dataUserApplications->status = "rejected";
        }
        $dataUserApplications->save();
        
        $user = User::where('id', $dataUserApplications['user_id'])->pluck('email')->toArray();
        $to_email = $user;
        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        $secondline = "لقد تم مراجعة طلبك :";
        $regards = "مع تحيات";
        $data = ['program_name' => $dataUserApplications->application->title, 'status' => $dataUserApplications->status, 'level' => 'success',   'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];
        
        try {
         
            $response =  $dataUserApplications->application->title.' - الحالة ('.$dataUserApplications->status.')';   
            $phone = User::where('email',$to_email)->pluck('phone')->first();
            User::sendMessage($phone,$response,'form_temp_accept_reject_change');
               // Attempt to call the method
           } catch (\Exception $e) {
              
           }
        
        Mail::send('emails.temporary_appoved_or_request_modify', $data, function ($m) use ($to_email) {
            //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
            $m->to($to_email)->subject('Program Rejected');
        });
        // var_dump(Mail::failures());
        

        return response()->json(true);
    }

    public function formChangeRequest($id)
    {
        $dataUserApplications = UserApplications::where('id', $id)->first();
        $dataUserApplications->status = "request not completed";
        $dataUserApplications->save();

        $user = User::where('id', $dataUserApplications['user_id'])->pluck('email')->toArray();
        $to_email = $user;
        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        $secondline = "لقد تم مراجعة طلبك :";
        $regards = "مع تحيات";
        $data = ['program_name' => $dataUserApplications->application->title, 'status' => $dataUserApplications->status, 'level' => 'success',   'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];
        
         try {
         
            $response =  $dataUserApplications->application->title.' - الحالة ('.$dataUserApplications->status.')';   
            $phone = User::where('email',$to_email)->pluck('phone')->first();
            User::sendMessage($phone,$response,'form_temp_accept_reject_change');
               // Attempt to call the method
           } catch (\Exception $e) {
              
           }
        
        Mail::send('emails.temporary_appoved_or_request_modify', $data, function ($m) use ($to_email) {
            //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
            $m->to($to_email)->subject('Change Request in Application');
        });
        // var_dump(Mail::failures());

        return response()->json(true);
    }

    public function deleteDocImage($img, $id)
    {
        // dd($img);
        // dd($id);
        $images = UserApplicationImages::where(['user_application_id' => $id])->first();
        $arr = explode(',', $images->images);
        foreach ($arr as $key => $val) {
            if ($val == $img) {
                unset($arr[$key]);
            }
        }
        $arr = implode(',', $arr);
        $images->images = $arr;
        $images->save();
        return redirect()->back();
    }
	public function doc_status(Request $request)
    {
        $id = $request->user_application_id;
        $data = UserApplications::where('id', $id)->first();
        $accepted = $request->accepted ?? '';
        $incomplete = $request->incomplete ?? '';
        $approved = $request->approved ?? '';
        $doc_remark = $request->doc_remark ?? '';
        $superadmins = User::role('super admin')->pluck('email')->toArray();
         $admin = array($data->remark_user);
        $userData = User::where('id', $data->user_id)->first();
        $email = $userData->email;
        $username = $userData->username;
        $content = ['username' => $username, 'id' => $id];


        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        $secondline = "تمت مراجعة الطلب:";
        $regards = "مع تحيات";

        $phone = User::where('email', $email)->pluck('phone')->first();
        if ($accepted) {
            $params = ['program_name' => $data->application->title, 'status' => 'Accepted', 'level' => 'success', 'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];
            $status = 2;
            $template = 'temporary_appoved_or_request_modify';
        } else if ($incomplete) {
            try {
                $url = 'https://platform.ooc.om/application/upload_document/' . $id;
                $phone = User::where('email', $email)->pluck('phone')->first();
                User::sendMessage($phone, $url, 'admin_incomplete_application');
                // Attempt to call the method
            } catch (\Exception $e) {
            }
            Mail::send('emails.incompleteApplication', $content, function ($m) use ($email, $id) {
                //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                $m->to($email)->subject('Documents Incomplete for application ' . $id . '');
            });
            $status = 3;
        } else if ($approved) {
            $data->status = 'closed';
            $data->save();
            $params = ['program_name' => $data->application->title, 'status' => 'Approved', 'level' => 'success', 'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];
            $template = 'temporary_appoved_or_request_modify';
            $status = 1;
        }
        if($accepted || $approved) {
              $emailArray = array($email);
              if (Auth::user()->hasAnyRole(['Super Admin'])) {
                  $merge = array_merge($emailArray,$admin);
              } else {
                  $merge = array_merge($emailArray,$superadmins);
               
              }
              
              //$merge = array('anubhav.abstain@gmail.com','superadmin@gmail.com','jatin.abstain@gmail.com');
            
           if (isset($merge)) {
                foreach ($merge as $recipientEmail) {
                    if (isset($recipientEmail)) {
                        Mail::send('emails.'.$template.'', $params, function ($m) use ($recipientEmail, $template) {
                            //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                            $m->to($recipientEmail)->subject('Document Accepted');
                        });
                    }
                }
            }
            try {
                $messageStatus = $params['status'];
                 $response = $data->application->title . ' - الحالة (' . $messageStatus . ')';
                if(isset($merge)) {
                    foreach($merge as $emails) {
                    $phone = User::where('email',$emails)->pluck('phone')->first();
                    User::sendMessage($phone, $response, 'form_temp_accept_reject_change');
                // Attempt to call the method
                }
                }
            } catch (\Exception $e) {
            }
            
        }
        
        $data->document_approve = $status;
        $data->doc_remark = $doc_remark;
        $data->save();
        Session::flash('success', 'Document status has been updated successfully.');
        return redirect()->back();
    }
    public function getUploadDocument($id)
    {
		$user = Auth::user();
        $data1 = UserApplications::where('id', $id)->with(['application'])->first();
        if(empty($data1))
         return redirect('/');
		$checkDocumentCount = UserDocuments::where(['user_id'=>$data1->user_id,'user_application_id'=>$id])->count();
		$checkImagesCount = UserApplicationImages::where(['user_id'=>$data1->user_id,'user_application_id'=>$id])->count();
		$superadmin = Auth::user()->hasAnyRole(['Super Admin']);
	
		if($data1){
			$data = $data1->toArray();
		} else {
			return redirect('/application/approved');
		}
		
        $content = Content::orderBy('sort_order', 'ASC')->get()->toArray();
        $doc = UserDocuments::where(['user_id' => $data['user_id'], 'user_application_id' => $id])->get()->toArray();
        $images = UserApplicationImages::where(['user_id' => $data['user_id'], 'user_application_id' => $id])->get()->toArray();

        return view('application.approved.upload_document', ['data' => $data, 'content' => $content, 'doc' => $doc, 'images' => $images,'checkDocumentCount'=>$checkDocumentCount,'checkImagesCount'=>$checkImagesCount,'superadmin'=>$superadmin]);
    }

    public function getUploadImage(Request $request)
    {
        $admins = array();
        // validation
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|max:15360', // 15 MB
            'upload_doc' => 'nullable|max:4096', // 4 MB
        ], [
            'image.max' => 'Image size must not exceed 15 MB.',
            'upload_doc.max' => 'Document size must not exceed 4 MB.',
        ]);

        // Check validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $superadmins = User::role('super admin')->pluck('email')->toArray();
    
        if ($upload_files = $request->file('upload_doc1')) {
            $upload_documents = array();
            $user_doc = new UserDocuments;
            $user_doc->user_application_id = $request['user_application_id'];
            $user_doc->user_id = Auth::user()->id;

            foreach ($upload_files as $f) {
                $doc = time() . '_' . $f->getClientOriginalName();
                $destinationPath = public_path('/upload/document');
                $f->move($destinationPath, $doc);
                $upload_documents[] = $doc;
            }
            $user_doc->upload_doc = implode(",", $upload_documents);
            $user_doc->report_id = 0;
            $user_doc->status = 'under review';
            $user_doc->save();
			$userauth = Auth::user();
			 $name = $userauth->name;
			 $notifications = new Notifications;
			 $notifications->user_id = $userauth->id;
			 $notifications->target_id = $request['user_application_id'];
			 $notifications->notification_text = 'Member '.$name.' uploaded document';
			 $notifications->type = 'member_attachment';
			 $notifications->save();
        }


        $files = $request->file('upload_doc');
        
        if (is_array($files) || is_object($files))
        {
            foreach ($files as $key => $file) {

                $user_doc = new UserDocuments;
                $user_doc->user_application_id = $request['user_application_id'];
                $user_doc->user_id = Auth::user()->id;

                $documents = array();
                foreach ($file as $f) {
                    $doc = time() . '_' . $f->getClientOriginalName();
                    $destinationPath = public_path('/upload/document');
                    $f->move($destinationPath, $doc);
                    $documents[] = $doc;
                }
                $user_doc->upload_doc = implode(",", $documents);
                $user_doc->report_id = $key;
                $user_doc->status = 'under review';
                $user_doc->save();
                $userauth = Auth::user();
                $name = $userauth->name;
                $notifications = new Notifications;
                $notifications->user_id = $userauth->id;
                $notifications->target_id = $request['user_application_id'];
                $notifications->notification_text = 'Member '.$name.' uploaded document';
                $notifications->type = 'member_attachment';
                $notifications->save();
            }
        }
        if ($files = $request->file('image')) {
            $image = new UserApplicationImages;
            $image->user_application_id = $request['user_application_id'];
            $image->user_id = Auth::user()->id;

            $images = array();

            foreach ($files as $file) {
                $name = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('/upload/images');
                $file->move($destinationPath, $name);
                $images[] = $name;
            }

            $image->images = implode(",", $images);
            $image->save();
			$userauth = Auth::user();
            $name = $userauth->name;
            $notifications = new Notifications;
            $notifications->user_id = $userauth->id;
            $notifications->target_id = $request['user_application_id'];
            $notifications->notification_text = 'Member '.$name.' uploaded document';
            $notifications->type = 'member_attachment';
            $notifications->save();
        }
        $id = $request['user_application_id'];
        $userApplications = UserApplications::find($id);
        if(!empty($userApplications)){
            $application = Application::where('id',$userApplications->application_id)->first();
            if(!empty($application)) {
                $title = $application->title;
                $remark_user = $application->remark_user;
                $to_email_user = Auth::user()->email;
               
                if(isset($remark_user)){
                  $admins = User::where('id',$remark_user)->pluck('email')->toArray();
                }
                $merge = array_merge($admins,$superadmins);
                $to_email = $merge;

                
                
                // $to_email = array('anubhav.abstain@gmail.com','superadmin@gmail.com','jatin.abstain@gmail.com');
                $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
                $secondline = "";
                $regards = "مع تحيات";
                $url = "https://platform.ooc.om/application/upload_document/".$id."";
                $data = ['program_name' => $title,'url'=>$url,'name'=>$name, 'level' => 'success', 'actionUrl' => route('login'), 'actionText' => 'Login to your member account', 'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];

                foreach($to_email as $emails ){
                    try {
                        $text[0] =  $url;
                        $text[1] =  $name;    
                        $text[2] =  $title;
                        $phone = User::where('email',$emails)->pluck('phone')->first();
                        User::sendMessageThreeParam($phone,$text,'upload_document_close');
                    
                        // Attempt to call the method
                    } catch (\Exception $e) {
                    
                    }
                    Mail::send('emails.uploaded_document_close', $data, function ($m) use ($emails) {
                        $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                        $m->to($emails)->subject('User uploaded documents');
                    });
                }
              
            }
        }
       
        return redirect('/application/approved');
    }

    public function updateUploadDocs(Request $request)
    {

        // validation
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|max:15360', // 15 MB
            'upload_doc' => 'nullable|max:4096', // 4 MB
        ], [
            'image.max' => 'Image size must not exceed 15 MB.',
            'upload_doc.max' => 'Document size must not exceed 4 MB.',
        ]);

        // Check validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($upload_files = $request->file('upload_doc1')) {
            $upload_documents = array();

            $user_doc = UserDocuments::where([
                'user_application_id' => $request['user_application_id'],
                'user_id' => Auth::user()->id,
                'report_id' => 0,
            ])->first();
            if (empty($user_doc)) {
                $user_doc = new UserDocuments;
            }

            $user_doc->user_application_id = $request['user_application_id'];
            $user_doc->user_id = Auth::user()->id;

            foreach ($upload_files as $f) {
                $doc = time() . '_' . $f->getClientOriginalName();
                $destinationPath = public_path('/upload/document');
                $f->move($destinationPath, $doc);
                $upload_documents[] = $doc;
            }
            $user_doc->upload_doc = implode(",", $upload_documents);
            $user_doc->report_id = 0;
            $user_doc->status = 'under review';
            $user_doc->save();
			
			$userauth = Auth::user();
			 $name = $userauth->name;
			 $notifications = new Notifications;
			 $notifications->user_id = $userauth->id;
			 $notifications->target_id = $request['user_application_id'];
			 $notifications->notification_text = 'Member '.$name.' updated document';
			 $notifications->type = 'member_attachment';
			 $notifications->save();
			
			
        }


        $files = $request->file('upload_doc');
        if ($files) {
            foreach ($files as $key => $file) {

                $user_doc = UserDocuments::where([
                    'user_application_id' => $request['user_application_id'],
                    'user_id' => Auth::user()->id,
                    'report_id' => $key,
                ])->first();
                if (empty($user_doc)) {
                    $user_doc = new UserDocuments;
                }

                $user_doc->user_application_id = $request['user_application_id'];
                $user_doc->user_id = Auth::user()->id;

                $documents = array();
                foreach ($file as $f) {
                    $doc = time() . '_' . $f->getClientOriginalName();
                    $destinationPath = public_path('/upload/document');
                    $f->move($destinationPath, $doc);
                    $documents[] = $doc;
                }
                $user_doc->upload_doc = implode(",", $documents);
                $user_doc->report_id = $key;
                $user_doc->status = 'under review';
                $user_doc->save();
            }
			 $userauth = Auth::user();
			 $name = $userauth->name;
			 $notifications = new Notifications;
			 $notifications->user_id = $userauth->id;
			 $notifications->target_id = $request['user_application_id'];
			 $notifications->notification_text = 'Member '.$name.' updated document';
			 $notifications->type = 'member_attachment';
			 $notifications->save();
        }

        if ($files = $request->file('image')) {

            $image = UserApplicationImages::where([
                'user_application_id' => $request['user_application_id'],
                'user_id' => Auth::user()->id
            ])->first();
            if (empty($image)) {
                $image = new UserApplicationImages;
            }

            $image->user_application_id = $request['user_application_id'];
            $image->user_id = Auth::user()->id;

            $images = array();

	
            foreach ($files as $file) {

                $name = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('/upload/images');
                $file->move($destinationPath, $name);
                $images[] = $name;
            }

            $image->images = implode(",", $images);
            $image->save();
			 $userauth = Auth::user();
			 $name = $userauth->name;
			 $notifications = new Notifications;
			 $notifications->user_id = $userauth->id;
			 $notifications->target_id = $request['user_application_id'];
			 $notifications->notification_text = 'Member '.$name.' updated document';
			 $notifications->type = 'member_attachment';
			 $notifications->save();
        }
        return redirect('/application/approved');
    }

    public function documentStatusChange($id, $application_id, $flag, $doc_remark  = '')
    {
        // dd($flag);
        // if(!empty($doc_remark)){
        //     $user_app = UserApplications::where('id', $application_id)->first();
        //     $user_app->doc_remark = $doc_remark;
        //     $user_app->save();
        // }
        $user_doc = UserDocuments::where('user_application_id', $application_id)->where('report_id', $id)->first();

        if ($flag == 'temporary_appoved') {
            $user_doc->status = "Temporary Appoved";
            Session::flash('success', 'Report Appoved Successfully!');
        }
        if ($flag == 'request_modify') {
            $user_doc->status = "Request Modify";

            

            Session::flash('error', 'Report Rejected Successfully!');
        }
        if ($flag == 'appoved') {
            $user_doc->status = "Appoved";
            Session::flash('success', 'Report Appoved Successfully!');
        }

        $user_doc->save();

        if ($flag == 'appoved') {
            $user_doc = UserDocuments::where('user_application_id', $application_id)->where('status', 'Appoved')->get()->toArray();
            if (count($user_doc) == 3) {
                $user_applications=UserApplications::where('id', $application_id)->first();
                //$closingTime = Carbon::parse($user_applications->deadline);
                //dd($user_applications);
                $user = User::where('id', $user_doc[0]['user_id'])->pluck('email')->toArray();
                $to_email = $user;

                $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
                $secondline = "لقد تم مراجعة طلبك :";
                $regards = "مع تحيات";
                $data = ['program_name' => $user_applications->application->title, 'status' => "close the progam", 'level' => 'success',   'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];

                Mail::send('emails.closed_application', $data, function ($m) use ($to_email) {
                    //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                    $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                    $m->to($to_email)->subject('Program Closed');
                });
                // var_dump(Mail::failures());

                UserApplications::where('id', $application_id)->update(['status' => 'closed']);
                
                $superAdmins = Role::findByName('Super Admin');
                if (isset($superAdmins) && isset($superAdmins->users)) {
                    foreach($superAdmins->users->toArray() as $mail_admins){
                        if (isset($mail_admins['email'])) { // Check if $mail_admins['email'] is set
                            Mail::send('emails.closed_application', $data, function ($m) use ($mail_admins) {
                                //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                                $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                                $m->to($mail_admins['email'])->subject('Program Closed');
                            });
                        }
                    }
                }
                
                 $admins = Role::findByName('Admin');
                if (isset($admins) && isset($admins->users)) {
                    foreach($admins->users->toArray() as $mail_admins){
                        if (isset($mail_admins['email'])) { // Check if $mail_admins['email'] is set
                            Mail::send('emails.closed_application', $data, function ($m) use ($mail_admins) {
                                //$m->from('no-reply@larademos.xyz', 'Olympic Solidarity');
                                $m->from('no-reply@ooc.om', 'Olympic Solidarity');
                                $m->to($mail_admins['email'])->subject('Program Closed');
                            });
                        }
                    }
                }
            }
        }

        return 'success';
    }

    public function documentStatusChangeRemark(Request $request)
    {
        if (!empty($request->doc_remark)) {
            $user_app = UserApplications::where('id', $request->application_id)->first();
            $user_app->doc_remark = $request->doc_remark;
            $user_app->save();
        }

        return 'success';
    }
    
    public function useralerts(Request $request) {
         $auth = \Auth::user();
              $user_id = $auth->id;
        	if ($request->ajax()) {
         
                $data = UserAlert::where('user_id', $user_id)->get()->toArray();
          
			
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('sender', function ($row) {
                    $sender = User::where('id',$row['sender'])->first();
				
					return $sender->name;
				})
				->editColumn('created_at', function ($row) {
					$timestamp = strtotime($row['created_at']);
					$time = date('d-m-Y h:i:s',$timestamp);
					return $time;
				})
               
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('application.useralerts.index');
   
    }
	
}
