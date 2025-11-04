@extends('layouts.admin')
@section('content')
<div class="content mt-5">
	<div class="container-fluid">
		<div class="contact_us">
			<div class="row">
				<div class="col-md-6">
					<div class="contact_map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d234020.63203093226!2d58.3983!3d23.583797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e91ffb7647c68db%3A0xa2ff0633997371c3!2zT21hbiBPbHltcGljIENvbW1pdHRlZSwgQWwgR2h1YnJh2Iwg2YXYs9mC2Lc!5e0!3m2!1sar!2som!4v1623732960502!5m2!1sar!2som" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="col-md-6 contact_info">
					<h1 class="m-0 contact_heading text-center text-dark">@lang('custom.contact')</h1>
					<div class="row">
						<div class="col-sm">
							<ul class="list-unstyled info_section">
								<li>
									<i class="fas fa-map-marker-alt"></i> 
									<p>Oman Olympic Committee <br /><small>Al Ghubra, Muscat</small></p>
								</li>
								<li>
									<i class="fas fa-phone-alt"></i>
									<p> 22058406 - 24613160 </p>
								</li>
								<li>
									<i class="far fa-envelope"></i>
									<p> ali_albusafi@ooc.org.om</p>
								</li>
							</ul>
						</div>
						<div class="col-sm">
							<form method="POST" action="{{ url('/savecontact') }}"  enctype="multipart/form-data">
							   @csrf
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputEmail4">@lang('custom.name')</label>
										<input readonly required type="name" value="{{$name}}" name="sender_name" class="form-control" id="inputEmail4">
									</div>
									<div class="form-group col-md-6">
										<label for="inputPassword4">@lang('custom.email_placeholder')</label>
										<input readonly required type="email" value="{{$email}}" name="sender_email"  class="form-control" id="inputPassword4">
									</div>
								</div>
								<label for="inputPassword4">@lang('custom.message')</label>	
								<textarea  required class="form-control"  name="sender_message"></textarea>
								<br/>
								<button type="submit" name="submit" class="btn btn-primary">@lang('custom.submit')</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection