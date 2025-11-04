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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}?time=1">
	
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	  <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
    @if(App::getLocale() == 'ar')
    <!-- <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css"> -->
    <link rel="stylesheet" href="{{asset('css/custom_rtl.css')}}">
    @endif
</head>
@php
$dir = '';
@endphp

@if(App::getLocale() == 'ar')
@php
$dir = 'rtl';
@endphp
@endif

<body class="hold-transition login-page" dir="{{$dir}}">

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_logo">
                        <p>◈ اللجنة الأولمبية العُمانية</p>
                        <img src="/dist/img/logo-footer-300x130.png" class="img-fluid" alt="logo">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="intrest">
                        <p>◈ روابط تهمك</p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://olympics.com/en/">اللجنة الأولمبية الدولية</a>
                            </li>
                            <li>
                                <a href="https://www.mosa.gov.om/">وزارة الثقافة والرياضة والشباب</a>
                            </li>
                            <li>
                                <a href="https://www.2040.om/">رؤية عمان 2040</a>
                            </li>
                            <li>
                                <a href="https://www.rop.gov.om/">شرطة عمان السلطانية</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <p>◈ موقع اللجنة الأولمبية العمانية</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58505.158007733065!2d58.3983!3d23.583797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ffb7647c68db%3A0xa2ff0633997371c3!2zT21hbiBPbHltcGljIENvbW1pdHRlZSwgQWwgR2h1YnJh2Iwg2YXYs9mC2Lc!5e0!3m2!1sar!2som!4v1623671230002!5m2!1sar!2som" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- <strong class="copy_right">@lang('custom.footer_copyright')</strong> -->
    </footer>

    <!-- jQuery -->
  
    <!-- Bootstrap 4 -->
    <script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('dist/js/adminlte.min.js')}}"></script>

 @include('partials.flash')

</body>

</html>