<?php
namespace App\Exports;

use App\UserApplications;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\User;
use Auth;
use App\Committee;
class UserApplicationsExport implements FromView
{
	public function view(): View
	{
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
		
			  return view('application.allappexport', [
		     'data' => $array
			
			 ]);
		
		
	}
}
?>