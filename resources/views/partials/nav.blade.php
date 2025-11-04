<?php 
$count = 0;
use App\Notifications;
use App\NotificationReadStatus;
$user = Auth::user();
$user_id = $user->id;

$get_dataa = Notifications::where('user_id','!=',$user_id)->get();

if($get_dataa)
{
	$get_data = $get_dataa->toArray();
	foreach($get_data as $vals){
		$data = NotificationReadStatus::where(['viewer_id'=>$user_id,'notification_id'=>$vals['id']])->get()->first();
		if(empty($data)) {
			$count += 1;
		}
	}
}

?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button" id="menu_toggle"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/')}}" class="nav-link">@lang('custom.home')</a>
    </li>
    @if (\Auth::user()->hasAnyRole(['User']))
    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/application')}}" class="nav-link">Applications</a>
    </li> -->
    @endif
	  @if (\Auth::user()->hasAnyRole(['Super Admin']) || \Auth::user()->hasAnyRole(['Admin']))
	  <li >
	<a style="color:#000" href="{{url('/notifications')}}">
	        <span class="badge rounded-pill badge-notification bg-danger" style="float: right;"><?php echo $count ?></span>
        <i class="far fa-bell fa-2x"></i>
      </a>
	</li>
	 @endif
  </ul>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->

      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li style="display: none;" class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ App::getLocale() }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('change-language/en') }}">
            en
          </a>
          <a class="dropdown-item" href="{{ url('change-language/ar') }}">
            ar
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
             تسجيل الخروج
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>

</nav>
<!-- /.navbar -->