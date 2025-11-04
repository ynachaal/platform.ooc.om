@extends('layouts.guest')

@section('content')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
    .login-box{
        width: 500px;
    }
    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        .login-box {
            width: 380px;
        }
        .copy_right{
            text-align: center;
        }
    }
</style>
<div class="top_bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="d-flex align-items-center">
                    <p class="m-0 text-white">22058406-24613160 - 2:30 AM 7:30 PM</p>
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-center float-left">
                    <div class="social_links">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="javascript:void(0)">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0)">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript:void(0)">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="language">
                        <ul class="list-unstyled language">
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="/dist/img/en.png" class="img-fluid" alt="language"> <span>الإنجليزية</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="header_logo p-2">
        <a href="/">
            <img src="/dist/img/oman_olympic_committee_logo.png" class="img-fluid" alt="logo">
        </a>
    </div>
</div>
<div class="login-box 1">
    <div class="login-logo">
        <!-- <a href="#"><b>@lang('custom.app_name')</b></a> -->
        <a href="#"><img src="{{url('images/login_logo.png')}}" /></a>
    </div>
    <div class="login-logo">
        <strong style="font-size: 14px;">@lang('custom.update') @lang('custom.password_placeholder')</strong>
        <p style="font-size: 12px;" class="login-box-msg">@lang('custom.update_password_text')</p>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <form method="POST" action="{{ url('/update-password-action') }}" id="my_captcha_form">
                @csrf
               <div class="input-group mb-3">
                    <input name="password" type="password" id="password" required class="form-control @error('password') is-invalid @enderror" placeholder="@lang('custom.password_placeholder')">
					<input type="hidden" value="{{$reset_token}}" name="reset_token">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                   
                    <span style="display:none" class="invalid-feedback" id="password_error" role="alert">
                      
                        <strong>@lang('custom.password_required')</strong>
                    </span>
                    <span style="display:none" class="invalid-feedback" id="password_length_error" role="alert">
                      
                        <strong>@lang('custom.password_length')</strong>
                    </span>
                </div>
				 <div class="input-group mb-3">
                    <input name="password" id="confirm_password" required type="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('custom.confirm_password')">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                   <span style="display:none" class="invalid-feedback" id="confirm_password_error" role="alert">
                     
                        <strong>@lang('custom.confirm_password_required')</strong>
                    </span>
					<span style="display:none" class="invalid-feedback" id="password_match_error" role="alert">
                     
                        <strong>@lang('custom.password_confirm_password_match')</strong>
                    </span>
                </div>
                <div class="g-recaptcha" data-sitekey="6LcbJTQbAAAAAMeszWJJu11sOGirXdl15UOM4ldX"></div>
                <div class="row">
                    <!-- <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block mt-2">@lang('custom.submit')</button>
                    </div>
                    <!-- /.col -->
                </div>
              
            </form>
            <script>
			$(document).ready(function(){
				$('#submit').click(function(){
					var error = 0;
					password = $('#password').val();
					length = password.length;
				confirm_password = $('#confirm_password').val();
				if(password==''){
					$('#password_error').show();
					error = 1;
				} else {
					if(length<5){
						$('#password_length_error').show();
					} else {
						$('#password_length_error').hide();
					}
					$('#password_error').hide();
				}
				if(confirm_password==''){
					error = 1;
					$('#confirm_password_error').show();
				} else {
					$('#confirm_password_error').hide();
				}
				if(error==0){
					if(password!=confirm_password) {
						$('#password_match_error').show();
						error = 1;
					} else {
						$('#password_match_error').hide();
					}
				}
				if(error==1)
					return false;
				})
				
			})
                document.getElementById("my_captcha_form").addEventListener("submit",function(evt)
                  {
                  
                  var response = grecaptcha.getResponse();
                  if(response.length == 0) 
                  { 
                    //reCaptcha not verified
                    alert("please verify you are human!"); 
                    evt.preventDefault();
                    return false;
                  }
                  //captcha verified
                  //do the rest of your validations here
                  
                });
            </script>
            <!-- <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div> -->
            <!-- /.social-auth-links -->


            <!-- <p class="mb-1">
                <a href="#">@lang('custom.forgot_password')</a>
            </p> -->
            <!-- <p class="mb-1">
                @if(App::getLocale() == 'ar')
                <a href="{{ url('change-language/en') }}">
                    <img height="30" src="images/en.png" />
                </a>
                @else
                <a href="{{ url('change-language/ar') }}">
                    <img height="20" src="images/ar.png" />
                </a>
                @endif
            </p> -->
            <!-- <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p> -->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

<!-- /.login-box -->
@endsection