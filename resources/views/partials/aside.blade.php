<!-- Main Sidebar Container -->
<?php 
use App\Committee;
$committeeName = Auth::user()->committee_id 
    ? Committee::getCommitteeName(Auth::user()->committee_id) 
    : 'N/A'; // Use 'N/A' or any other placeholder if committee_id is null
$useragent=$_SERVER['HTTP_USER_AGENT'];
$class_aside = $class_close = '';
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	$class_aside = 'menu_c';
	$class_close = 'd-none';
	?>
	<style>
	.menu_c
	{
		width: 0 !important;
	}
	.close_btn{
		position: fixed;
		top: 5px;
		left: 5px;
		z-index:99999;
	}
	</style>
	<script>
	$(document).ready(function(){
	$('#menu_toggle').click(function(){
		$('aside').removeClass('menu_c');
		$('.close_btn').removeClass('d-none');
		$('#sidebar-overlay').show();
	});
	
		$('.close_btn').click(function(){
			$('aside').addClass('menu_c');
			$('.close_btn').addClass('d-none');
			$('#sidebar-overlay').hide();
			
		});
	});
	
	</script>
	<?php
 
}
  if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin'])){
       $notificationurl = url('/').'/notifications';
   } else {
       $notificationurl =url('/').'/application/user-alerts';
   }
 $imageUrl = asset('dist/img/user2-160x160.jpg'); // Default image URL
    
    if (Auth::check() && Auth::user()->image) {
        $imageUrl = url('upload/admin/' . Auth::user()->image);
    }
    if (\Auth::user()->hasAnyRole(['User','Admin','Super Admin'])) {
        $profileUrl = url('/').'/edit-profile';
    }
?>
<a href="javascript:void(0)"  class="btn btn-danger close_btn <?php echo $class_close ?>">
		<i class="fas fa-times"></i>
	</a>
<aside class="main-sidebar sidebar-dark-navy elevation-4 <?php echo $class_aside ?>">
    
     <div class="bg-white py-3">
        <img class="img-fluid" height="100" width="250" src="https://platform.ooc.om/images/logo_inside.png?time=1">
    </div>

    <!-- Brand Logo -->
    <a style="text-align: center;" href="https://platform.ooc.om" class="brand-link mt-2 p-0">
          <div class="image bg-white py-3">
           <img 
    src="{{ $imageUrl ?? asset('dist/img/user2-160x160.jpg') }}" 
    class="img-circle1" 
    style="width: 100px;" 
    alt="User Image"
>
        </div>

        <div class="bg-white py-3 mt-2">
            <span class="brand-text font-weight-light text_primary d-block h6">{{$committeeName}}</span>
            <span class="brand-text font-weight-light text-dark mt-1 d-block h6">  {{Auth::user()->name}}</span>
        </div>
    </a>

    <div class="bg-white py-3 mt-2">
        <ul class="list-inline text-center m-0">
           
            <li class="list-inline-item mr-3">
                <a href="{{$profileUrl}}" class="text_primary h4">
                    <i class="far fa-user"></i>
                    
                </a>
            </li>
     
            <li class="list-inline-item mr-3">
                
                <a href="{{$notificationurl}}" class="text_primary h4">
                    <i class="far fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
    
    <!--
    <img style="" height="100" width="250" src="{{url('images/logo_inside.png')}}" />

  
    <a style="text-align: center;" href="{{url('/')}}" class="brand-link">
          <div class="image" style="margin-top: 10px;">
            @if(Auth::user()->image)
            <img src="{{url('upload/admin/'.Auth::user()->image)}}" class="img-circle1 elevation-2" style="width:100px" alt="User Image">
            @else
                <img src="{{asset('dist/img/user2-160x160.jpg')}}"  style="width:100px" class="img-circle1 elevation-2" alt="User Image">
            @endif
            </div>
        <span class="brand-text font-weight-light">@lang('custom.app_name')</span>
    </a>

  -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @if (\Auth::user()->hasAnyRole(['User', 'Admin']))
          
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
                <a href="#" class="d-block">{{Auth::user()->phone}}</a>
                <a href="#" class="d-block">{{Auth::user()->job_title}}</a>
                
            </div>
            @endif
        </div>
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			    
               @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
                <li class="nav-item">
                    <a href="{{url('/admin')}}" class="nav-link {{Request::segment(1) == 'admin' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            @lang('custom.dashboard')
                        </p>
                    </a>
                </li>
                @endif
				
               @if (\Auth::user()->hasAnyRole(['User']))
                <li class="nav-item">
                    <a href="{{url('/home')}}" class="nav-link {{Request::segment(1) == 'home' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            @lang('custom.dashboard')
                        </p>
                    </a>
                </li>
                @endif
				@if (\Auth::user()->hasAnyRole(['User','Admin']))
			    <li class="nav-item">
                    <a href="{{url('/edit-profile')}}" class="nav-link {{Request::segment(1) == 'edit-profile' ? 'active' : ''}}">
                        <i class="far fa-edit"></i>
                        <p>  @lang('custom.profile')</p>
                    </a>
                </li>
				 @endif
                @if (\Auth::user()->hasAnyRole(['User']))
                <li class="nav-item">
                    <a href="{{url('/application/category')}}" class="nav-link {{Request::segment(1) == 'application' && Request::segment(2) == '' ? 'active' : ''}}">
                        <i class="far fa-copy nav-icon"></i>
                        <p>
                        @lang('custom.application')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/application/user-alerts')}}" class="nav-link {{Request::segment(2) == 'user-alerts' ? 'active' : ''}}">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>
                        @lang('custom.messages')
                        </p>
                    </a>
                </li>
                @endif

                @if (\Auth::user()->hasAnyRole(['Super Admin']))
                <li class="nav-item has-treeview {{Request::segment(1) == 'users' || Request::segment(1) == 'send-alerts' || Request::segment(1) == 'admins' ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{Request::segment(1) == 'send-alerts' ||Request::segment(1) == 'users' || Request::segment(1) == 'admins' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            @lang('custom.users')
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/admins')}}" class="nav-link {{Request::segment(1) == 'admins' ? 'active' : ''}}">
                                <i class="far fa-user nav-icon"></i>
                                <p>@lang('custom.moderators')</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/users')}}" class="nav-link {{Request::segment(1) == 'users' ? 'active' : ''}}">
                                <i class="far fa-user-circle nav-icon"></i>
                                <p>@lang('custom.members')</p>
                            </a>
                        </li>
                        
                    </ul>
                    
                </li>
                @endif
                  @if (\Auth::user()->hasAnyRole(['Super Admin']) || \Auth::user()->hasAnyRole(['Admin']))
                   <li class="nav-item">
                            <a href="{{url('/whatsapp-messages')}}" class="nav-link {{Request::segment(1) == 'whatsapp-messages' ? 'active' : ''}}">
                                <i class="fab fa-whatsapp nav-icon"></i>
                                <p>@lang('custom.whatsapp_messages')</p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="{{url('/send-alerts')}}" class="nav-link {{Request::segment(1) == 'send-alerts' ? 'active' : ''}}">
                                <i class="far fa-envelope nav-icon"></i>
                                <p>@lang('custom.sendalerts')</p>
                            </a>
                        </li>
                        @endif
                <li class="nav-header">@lang('custom.applications')</li>
                <li class="nav-item">
                    <a href="{{url('/application/active')}}" class="nav-link {{Request::segment(2) == 'active' ? 'active' : ''}}">
                        <i class="fas fa-check nav-icon"></i>
                        <p>@lang('custom.under_review')</p>
                        <!-- program under review -->
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/application/rejected')}}" class="nav-link {{Request::segment(2) == 'rejected' ? 'active' : ''}}">
                        <i class="fas fa-times-circle nav-icon"></i>
                        <p>@lang('custom.rejected')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/application/approved')}}" class="nav-link {{Request::segment(2) == 'approved' ? 'active' : ''}}">
                        <i class="fas fa-check-circle nav-icon"></i>
                        <p>@lang('custom.approved')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/application/closed')}}" class="nav-link {{Request::segment(2) == 'closed' ? 'active' : ''}}">
                        <i class="fas fa-clipboard-list nav-icon"></i>
                        <p>@lang('custom.closed')</p>
                    </a>
                </li>
				 @if (\Auth::user()->hasAnyRole(['User']))
					<li class="nav-item">
                    <a href="{{url('/application/not-submitted')}}" class="nav-link {{Request::segment(2) == 'not-submitted' ? 'active' : ''}}">
						<i class="fas fa-pause nav-icon"></i>
                        <p>@lang('custom.not_submitted')</p>
                    </a>
                </li>
				 @endif
                <li class="nav-header">@lang('custom.reports')</li>
                <li class="nav-item">
                    <a href="{{url('/application/report')}}" class="nav-link {{Request::segment(2) == 'report' ? 'active' : ''}}">
                        <i class="fas fa-check-circle nav-icon"></i>
                        <p>@lang('custom.reports')</p>
                    </a>
                </li>

                @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
                <li class="nav-header">@lang('custom.control_board')</li>
                <li class="nav-item">
                    <a href="{{url('/forms')}}" class="nav-link {{Request::segment(1) == 'forms' ? 'active' : ''}}">
                        <i class="far fa-edit nav-icon"></i>
                        <p>@lang('custom.questionnaire_corner')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/programs')}}" class="nav-link {{Request::segment(1) == 'programs' ? 'active' : ''}}">
                        <i class="far fa-copy nav-icon"></i>
                        <p>@lang('custom.programs_corner')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/news')}}" class="nav-link {{Request::segment(1) == 'news' ? 'active' : ''}}">
                        <i class="fas fa-book nav-icon"></i>
                        <p>@lang('custom.news_corner')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/slider')}}" class="nav-link {{Request::segment(1) == 'slider' ? 'active' : ''}}">
                        <i class="far fa-image nav-icon"></i>
                        <p>@lang('custom.banners_corner')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/content')}}" class="nav-link {{Request::segment(1) == 'content' ? 'active' : ''}}">
                        <i class="fas fa-th nav-icon"></i>
                        <p>@lang('custom.content') @lang('custom.management')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/committee')}}" class="nav-link {{Request::segment(1) == 'committee' ? 'active' : ''}}">
                        <i class="far fa-star nav-icon"></i>
                        <p>@lang('custom.committees_corner')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/category')}}" class="nav-link {{Request::segment(1) == 'category' ? 'active' : ''}}">
                        <i class="far fa-star nav-icon"></i>
                        <p>الفئة</p>
                    </a>
                </li>
				<li class="nav-item">
                    <a href="/instructions-listing" class="nav-link {{Request::segment(1) == 'instructions-listing' ? 'active' : ''}}">
                        <i class="far fa-edit nav-icon"></i>
                        <p>@lang('custom.manage-instructions')</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="/contactus" class="nav-link {{Request::segment(1) == 'contactus' ? 'active' : ''}}">
                        <i class="far fa-address-book nav-icon"></i>
                        <p>@lang('custom.contact')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view-instructions" class="nav-link {{Request::segment(1) == 'view-instructions' ? 'active' : ''}}">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>@lang('custom.instructions')</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<style>
    .text_primary {
        color: #007dc6 !important;
    }
</style>