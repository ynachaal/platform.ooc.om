<?php
use App\UserAlert;
use App\User;
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@lang('custom.app_name')</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('partials.css')
        @include('partials.js')

    </head>

    @php
    $dir = '';
    $sidebar = '';
    @endphp

    @if(App::getLocale() == 'ar')
    @php
    $dir = 'rtl';
    @endphp
    @endif

    @if(Auth::user()->hasRole('User'))
    @php
    //$sidebar = 'sidebar-collapse';
    $auth = \Auth::user();
    $user_id = $auth->id;
    $count = UserAlert::where('user_id',$user_id)->where('message_read',0)->count();
    @endphp
    
    
    

    
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">@lang('custom.messages')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
@if($count>0)
<script type="text/javascript">
 $(window).on('load', function() {
 $('#exampleModalLong').modal('show');
});
</script>
@php
$get = UserAlert::where('user_id',$user_id)->where('message_read',0)->get();
foreach($get as $val){
$primaryKey = $val->id;
$changeStatus = UserAlert::where('id',$primaryKey)->first();
$changeStatus->message_read = 1;
$changeStatus->save();
$sender = User::where('id',$val->sender)->first();
$timestamp = strtotime($val->created_at);
$date = date('d-m-Y h:i:s',$timestamp);
echo '<h6 class="mb-0">'.$val->alert_message.'</h6>';
echo '<small class="text-muted">'.$date.' ('.$sender->name.')</small>';
echo '<hr />';
}
@endphp
@endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('custom.close')</button>
       
      </div>
    </div>
  </div>
</div>
    
    @endif

    <body class="hold-transition sidebar-mini {{$sidebar}} {{$dir}}" dir="{{$dir}}">
        <div class="wrapper">

            @include('partials.nav')

            @include('partials.aside')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('partials.footer')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('partials.flash')

    </body>

</html>