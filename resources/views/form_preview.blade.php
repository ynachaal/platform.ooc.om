@extends('layouts.admin')

@section('content')

@include('forms.'.$slug)
<?php 
$decoded_array_attachments = [];
if(isset($dataUserApplications['attachments']) && !empty($dataUserApplications['attachments'])) {
	$decoded_array_attachments = json_decode($dataUserApplications['attachments'],true);
}

$user = \Auth::user();
$role = $user->roles->first()->name;

?>
@if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']) && (isset($dataUserApplications) && $dataUserApplications['status'] != 'rejected'))
<?php 

$decoded_array = array();
$superadmin_document = '';

if(isset($dataUserApplications['superadmin_attachments']) && !empty($dataUserApplications['superadmin_attachments'])) {
	$decoded_array = json_decode($dataUserApplications['superadmin_attachments'],true);
}
if(isset($dataUserApplications['superadmin_document']) && !empty($dataUserApplications['superadmin_document'])) {
	$superadmin_document = $dataUserApplications['superadmin_document'];
}
?>

<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js
">
</script>
<div class="col-md-12">
    <div class="card card-primary">
       
	
		 @if (\Auth::user()->hasRole('Super Admin')  && $dataUserApplications['status'] != 'under review' && $dataUserApplications['status'] != 'request not completed')
	
	
		 @csrf
			<div class="card-body">
			
			<div class="form-group">
			<label for="exampleFormControlFile1">Upload Document For Member</label>
			<input type="file"  accept=
"application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
 application/pdf, image/*,zip,application/octet-stream,application/zip,application/x-zip,application/x-zip-compressed" name="superadmin_document" class="form-control-file" id="superadmin_document">
 <?php if(isset($superadmin_document) && !empty($superadmin_document)) { ?>

 <a style="font-size: 40px;" target="_blank" href="{{ url('upload/document') }}/<?php echo $superadmin_document ?>"><i class="fas fa-file"></i></a>
 <br/>
 <?php echo $superadmin_document ?>
 <?php } ?>
		  </div>
			
			<div  style="float: right;width: 100%;" >
			<label style="margin:0 0 5px 0">Select Attachments To Add</label>
			</div>
			<?php foreach($content as $vals) { ?>
			 
			 <div class="form-check" style="float: right; width: 100%;" >
			 <input <?php if(in_array($vals['id'],$decoded_array)) echo 'checked' ?> value="<?php echo $vals['id'] ?>" class="form-check-input all_attachment_checkboxes" name="superadmin_attachment_options[]" type="checkbox"  id="flexCheckChecked<?php echo $vals['id'] ?>"  style="margin: 9px;position: static;">
			 <label class="form-check-label" for="flexCheckChecked" style="float: revert">
			<?php echo $vals['title'] ?>
			</label>
		
			</div>
			<?php } ?>
			 <input id="dataUserApplicationsId" type="hidden" name="id" class="form-control" value="{{isset($dataUserApplications) && $dataUserApplications['id'] ? $dataUserApplications['id'] : ''}}">
					  
	
		
		 @endif
		<!--
		 @if (\Auth::user()->hasRole('Super Admin')  && $dataUserApplications['status'] != 'under review')
	

		 @csrf
			<div class="form-group col-md-12">
                        <label>Remark</label>
						<input type="hidden"value="{{$dataUserApplications['id']}}"  name="app_id">
                        <textarea id="feedback" class="form-control" name="remark" rows="3" placeholder="Enter ..."><?php if(isset($dataUserApplications['superadmin_remark']) && !empty($dataUserApplications['superadmin_remark'])) echo $dataUserApplications['superadmin_remark'] ?></textarea>
                    </div>
					   

	
		 @endif
		 -->
		 @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']) && (isset($dataUserApplications) && $dataUserApplications['status'] != 'rejected')&& $dataUserApplications['status'] != 'request not completed'  )

 <form role="form" id="quickForm" method="POST" action="{{ url('/forms/save_feedback') }}">
            @csrf
         
                <div class="form-group col-md-12">
                    <input id="dataUserApplicationsId" type="hidden" name="id" class="form-control" value="{{isset($dataUserApplications) && $dataUserApplications['id'] ? $dataUserApplications['id'] : ''}}">
                </div>
               
              
                @if (\Auth::user()->hasAnyRole(['Super Admin']) && $dataUserApplications['status'] != 'under review')
                <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputPassword1">شهادة الموافقة</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="certificate_of_approval" name="certificate_of_approval" accept="application/pdf">
                            <label class="custom-file-label" for="certificate_of_approval">@lang('custom.choose_file')</label>
							<span class="certificate_of_approval_error" style="display:none;color:red">Certificate is a required field</span>
							 <?php if(isset($dataUserApplications['certificate_of_approval']) && !empty($dataUserApplications['certificate_of_approval'])) { ?>

<br/>
 <a style="font-size: 40px;" target="_blank" href="{{ url('upload/pdf') }}/<?php echo $dataUserApplications['certificate_of_approval'] ?>"><i class="fas fa-file"></i></a>
 <br/>
 <?php echo $dataUserApplications['certificate_of_approval'] ?>
 <?php } ?>
                        </div>
						
                    </div>
                </div>
                 <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label>الموازنة المعتمدة</label>
                        <input type="text" name="approved_budget" class="form-control" id="approved_budget" placeholder="@lang('custom.enter') الموازنة المعتمدة" value="{{is_numeric($dataUserApplications['approved_budget']) ? $dataUserApplications['approved_budget'] : ''}}">
						<span class="approved_budget_error" style="display:none;color:red">approved budget is a required field</span>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label>الدفعة المقدمة</label>
                        <input type="text" name="down_payment" class="form-control" id="down_payment" placeholder="@lang('custom.enter') الدفعة المقدمة" value="{{is_numeric($dataUserApplications['down_payment']) ? $dataUserApplications['down_payment'] : ''}}">
						<span class="down_payment_error" style="display:none;color:red">down payment is a required field</span>
                    </div>
                </div>
               <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                    
                     
							<label  for="deadline">@lang('custom.deadline')</label>
							<input type="date" id="deadline" name="deadline" class="form-control" value="{{isset($dataUserApplications['deadline_timestamp'])? date('Y-m-d',$dataUserApplications['deadline_timestamp']) : ''}}">
							<span class="deadline_error" style="display:none;color:red">deadline is a required field</span>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-12">
                        <label>الملاحظات</label>
                        <textarea id="feedback" class="form-control" name="feedback" rows="3" placeholder="Enter ...">{{isset($dataUserApplications) && $dataUserApplications['feedback'] ? $dataUserApplications['feedback'] : "" }}</textarea>
						<span class="feedback_error" style="display:none;color:red">feedback is a required field</span>
                    </div>
                </div>
                @endif
				<?php 
				
				?>
                @if (\Auth::user()->hasAnyRole(['Admin']) || \Auth::user()->hasRole('Super Admin') )
				<?php 
				$remark = '';
				if($role=='Super Admin') {
					if(isset( $dataUserApplications['superadmin_remark']) && !empty( $dataUserApplications['superadmin_remark']))
					$remark =$dataUserApplications['superadmin_remark']; 
				} else  {
					$remark =$dataUserApplications['remark']; 
				}
				?>
                <div class="col-md-12 row" style="display: block;" id="remark_div">
                    <div class="form-group col-md-12">
                        <label>Remark</label><br/><br/>
                        <textarea id="remark" class="form-control textarea" name="remark" rows="3" placeholder="Enter ..."><?php echo $remark ?></textarea>
						<span class="remark_error" style="display:none;color:red">remark is a required field</span>
                    </div>
                </div>
                @endif

                <div class="card-footer">
                    @if (\Auth::user()->hasRole('Super Admin') && $dataUserApplications['status'] != 'closed'  && $dataUserApplications['status'] != 'under review')
						
                    <a href="javascript:;" class="btn btn-primary btn-sm check_appoved both_buttons" data-id="{{$dataUserApplications['id']}}">قبول الطلب</a>
					 
					 @if($dataUserApplications['status'] != 'accepted')				
                    <a href="javascript:;" class="btn btn-danger btn-sm check_reject both_buttons" data-id="{{$dataUserApplications['id']}}">الطلب رفض</a>
				@endif
                    @endif
					

                    @if ((\Auth::user()->hasRole('Super Admin') || \Auth::user()->hasRole('Admin')) && $dataUserApplications['status'] == 'under review')
						
					<?php if(Auth::user()->hasAnyRole(['Super Admin'])) { ?>
						<input type="hidden" id="admin_took_over" name="admin_took_over" value="1">
						<input type="hidden" id="admin_took_over_comment" name="admin_took_over_comment" value="1">
					<?php } else {
						?>
						<input type="hidden" id="admin_took_over" name="admin_took_over" value="0">
						<?php
					}						
					?>
					
                    <a href="javascript:;" class="btn btn-primary btn-sm check_appoved" data-id="{{$dataUserApplications['id']}}">تم القبول مبدئيا</a>
                    <a href="javascript:;" class="btn btn-danger btn-sm check_reject" data-id="{{$dataUserApplications['id']}}">تم رفض الطلب</a>
                    <a href="javascript:;" class="btn btn-warning btn-sm check_change_request" data-id="{{$dataUserApplications['id']}}">تعديل بيانات الطلب </a>
                    @endif
                    <!-- <button type="submit" class="btn btn-primary">@lang('custom.save')</button> -->
                </div>

           
        </form>
	
		@endif
    </div>

</div>
@endif




<div class="card-body">
@if (isset($dataUserApplications) && ($dataUserApplications['status'] == 'rejected'))
@if(!empty($dataUserApplications['remark']) && \Auth::user()->hasAnyRole(['Admin', 'Super Admin']))

    <div class="col-md-12 row" style="display: block;">
        <div class="form-group col-md-12">
            <label>الملاحظات</label>
            <textarea class="form-control" rows="3" placeholder="Enter ...">{{isset($dataUserApplications) && $dataUserApplications['remark'] ? $dataUserApplications['remark'] : ""}}</textarea>
        </div>
    </div>

@endif
@if(!empty($dataUserApplications['feedback']))

    <div class="col-md-12 row" style="display: block;">
        <div class="form-group col-md-12">
            <label>Remark By Super Admin</label>
            <textarea class="form-control textarea" rows="3" placeholder="Enter ...">{{isset($dataUserApplications) && $dataUserApplications['feedback'] ? $dataUserApplications['feedback'] : ""}}</textarea>
        </div>
    </div>

@endif
@elseif(\Auth::user()->hasAnyRole(['User']) && isset($dataUserApplications) && !empty($dataUserApplications['remark']) && ($dataUserApplications['status'] == 'under review' || $dataUserApplications['status'] == 'request not completed'))
<!--
<div class="card-body">
    <div class="col-md-12 row" style="display: block;" id="remark_div">
        <div class="form-group col-md-12">
		<ul class="list-group">
			  <li class="list-group-item">الملاحظات <br/>{{isset($dataUserApplications) && $dataUserApplications['remark'] ? $dataUserApplications['remark'] : ""}}</li>
			  <?php if(isset($dataUserApplications['superadmin_remark']) && !empty($dataUserApplications['superadmin_remark'])) { ?>
			   <li class="list-group-item">الملاحظات <br/>{{isset($dataUserApplications) && $dataUserApplications['superadmin_remark'] ? $dataUserApplications['superadmin_remark'] : ""}}</li>	
			  <?php } ?>
			</ul>
           
        </div>
    </div>
</div>
-->
@elseif(\Auth::user()->hasAnyRole(['Super Admin']) && isset($dataUserApplications) && !empty($dataUserApplications['remark']) && ($dataUserApplications['status'] == 'accept temporary'))

    <div class="col-md-12 row" style="display: block;" id="remark_div">
        <div class="form-group col-md-12">
            <label>ملاحظات المسوؤل</label><Br/><Br/>
            <textarea class="form-control textarea" rows="3" placeholder="Enter ...">{{isset($dataUserApplications) && $dataUserApplications['remark'] ? $dataUserApplications['remark'] : ""}}</textarea>
        </div>
    </div>

@endif


@if((\Auth::user()->hasAnyRole(['Super Admin']) || \Auth::user()->hasAnyRole(['Admin']) || \Auth::user()->hasAnyRole(['User']))  && isset($dataUserApplications) &&((!empty($dataUserApplications['remark'])) || !empty($dataUserApplications['superadmin_remark'])) )

    <div class="col-md-12 row" style="display: block;" id="remark_div">
        <div class="form-group col-md-12">
		<ul class="list-group">
		  <?php if(isset($dataUserApplications['remark']) && !empty($dataUserApplications['remark'])) { ?>
		  <?php if($dataUserApplications['admin_took_over_comment']==1) { 
			$super = 'Super';
			$took_over = '(Super Admin Took Over Application)';
		  } else {
			  $super = $took_over =  '';
		  }	 ?>
			  <li class="list-group-item"><b>Admin Remark <?php echo $took_over ?></b><br/> <br/><span style="color:red">{!!isset($dataUserApplications) && $dataUserApplications['remark'] ? $dataUserApplications['remark'] : ""!!}</span><div style="font-size:12px;color:grey">
			      @if(isset($dataUserApplications['remark_user']) && !empty($dataUserApplications['remark_user']))
			      By
    			     @php
    			     $userData = $user->where('id',$dataUserApplications['remark_user'])->first();
    			     echo $userData->name;
    			     @endphp
			      @endif
			       @if(isset($dataUserApplications['remark_timestamp']) && !empty($dataUserApplications['remark_timestamp']))
			       on
			      @php
    			     echo date('d-m-Y h:i A',$dataUserApplications['remark_timestamp']);
    			     @endphp
			      @endif
			      </div></div></li>
		  <?php } ?>
			  <?php if(isset($dataUserApplications['superadmin_remark']) && !empty($dataUserApplications['superadmin_remark'])) { ?>
			   <li class="list-group-item"><b>Super Admin Remark </b> <br/>  <br/><span style="color:red">{!!isset($dataUserApplications) && $dataUserApplications['superadmin_remark'] ? $dataUserApplications['superadmin_remark'] : "" !!}</span><div style="font-size:12px;color:grey">
			      @if(isset($dataUserApplications['superadmin_remark_user']) && !empty($dataUserApplications['superadmin_remark_user']))
			      By
    			     @php
    			     $userData = $user->where('id',$dataUserApplications['superadmin_remark_user'])->first();
    			     echo $userData->name;
    			     @endphp
			      @endif
			       @if(isset($dataUserApplications['superadmin_remark_timestamp']) && !empty($dataUserApplications['superadmin_remark_timestamp']))
			       on
			      @php
    			     echo date('d-m-Y h:i A',$dataUserApplications['superadmin_remark_timestamp']);
    			     @endphp
			      @endif
			      </div></li>	
			  <?php } ?>
			</ul>
           
        </div>
    </div>

</div>	
</div>	
@endif



<script type="text/javascript">
    $(function() {

        var APP_URL = {!! json_encode(url('/')) !!};

        $('body').on('click', '.check_appoved', function() {
			<?php if($role=='Super Admin') { ?>
					errors = 0;
			remark = $("#remark").val();
			feedback = $("#feedback").val();
			deadline = $("#deadline").val();
			down_payment = $("#down_payment").val();
			approved_budget = $("#approved_budget").val();
			certificate_of_approval = $("#certificate_of_approval").val();
			
			if(remark=='') {
				$(".remark_error").show();
				errors = 1;
			} else {
				$(".remark_error").hide();
			}
			
			if(feedback=='') {
				$(".feedback_error").show();
				errors = 1;
			} else {
				$(".feedback_error").hide();
			}
			
			if(deadline=='') {
				$(".deadline_error").show();
				errors = 1;
			} else {
				$(".deadline_error").hide();
			}
			
			if(down_payment=='') {
				$(".down_payment_error").show();
				errors = 1;
			} else {
				$(".down_payment_error").hide();
			}
			if(approved_budget=='') {
				$(".approved_budget_error").show();
				errors = 1;
			} else {
				$(".approved_budget_error").hide();
			}
			<?php 
			if(isset($dataUserApplications['certificate_of_approval']) && !empty($dataUserApplications['certificate_of_approval'])) { 
			} else {
			?>
			if(certificate_of_approval=='') {
				$(".certificate_of_approval_error").show();
				errors = 1;
			} else {
				$(".certificate_of_approval_error").hide();
			}
			<?php 
			}
			?>
			if(errors==1)
				return false;
			<?php } ?>
            var id = $(this).attr('data-id');
            console.log(id);

            var r = confirm("هل أنت متأكد ?");
            if (r == true) {
				$.LoadingOverlay("show");
                var id = $(this).attr('data-id');
                console.log(id);
                var form_data = "";
				 var myCheckboxes = new Array();
					$(".all_attachment_checkboxes:checked").each(function() {
					   myCheckboxes.push($(this).val());
					});
				  if(document.getElementById("superadmin_document") &&  typeof document.getElementById("superadmin_document").files[0] != "undefined" || myCheckboxes!='' ){
					 if (typeof document.getElementById("superadmin_document").files[0] !== "undefined") {
                    var name = document.getElementById("superadmin_document").files[0].name;
					  }
                    form_data = new FormData();
					
                    form_data.append('id', $('#dataUserApplicationsId').val());
                    form_data.append('superadmin_attachment_options',myCheckboxes);
					  if (typeof document.getElementById("superadmin_document").files[0] !== "undefined") {
                    form_data.append('file', document.getElementById("superadmin_document").files[0], name);
					  }
                    form_data.append('_token', $('input[name="_token"]').attr('value'));
                    
                    $.ajax({
                        url: APP_URL + "/superadmin-attachment-set",
                        type: 'POST',
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
							
							
						},
                        error: function(data) {
							
                            var errors = data.responseJSON;
                        }
                    });
                }
				
                if(document.getElementById("certificate_of_approval") &&  typeof document.getElementById("certificate_of_approval").files[0] != "undefined" ){
                    var name = document.getElementById("certificate_of_approval").files[0].name;
                    form_data = new FormData();

                    form_data.append('id', $('#dataUserApplicationsId').val());
                    form_data.append('file', document.getElementById("certificate_of_approval").files[0], name);
                    form_data.append('_token', $('input[name="_token"]').attr('value'));
                    
                    $.ajax({
                        url: APP_URL + "/forms/save_feedback_pdf",
                        type: 'POST',
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
							
							
						},
                        error: function(data) {
							
                            var errors = data.responseJSON;
                        }
                    });
                }
			
                console.log(name);
                // return false;
                
                $.ajax({
                    url: APP_URL + "/forms/save_feedback",
                    type: 'POST',
                    data: {
                        id: $('#dataUserApplicationsId').val(),
                        feedback: $('#feedback').val(),
                        remark: $('#remark').val(),
						 deadline: $('#deadline').val(),
						 admin_took_over: $('#admin_took_over').val(),
						 admin_took_over_comment: $('#admin_took_over_comment').val(),
                        downpayment: $('#down_payment').val(),
                        approvedbudget: $('#approved_budget').val(),
                        _token: $('input[name="_token"]').attr('value')
                    },
                    success: function(data) {
						
					},
                    error: function(data) {
						
                        var errors = data.responseJSON;
                    }
                });
                setTimeout(function(){ 
				  $.ajax({
                    url: APP_URL + "/form/approved/" + id,
                    type: 'GET',
                    success: function(data) {
                        $.LoadingOverlay("hide");
                        toastr.success('User application successfully approved');
                    window.history.back();

                    },
                    error: function(data) {
						$.LoadingOverlay("hide");
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
				}, 3000);

              
            } else {
			 return false;
			}

        });
		
        $('body').on('click', '.check_reject', function() {
				
            var id = $(this).attr('data-id');
           

            var r = confirm("هل أنت متأكد ?");
            if (r == true) {
			$.LoadingOverlay("show");
                var id = $(this).attr('data-id');
                console.log(id);

                $.ajax({
                    url: APP_URL + "/forms/save_feedback",
                    type: 'POST',
                    data: {
                        id: $('#dataUserApplicationsId').val(),
                        feedback: $('#feedback').val(),
                        remark: $('#remark').val(),
                         deadline: $('#deadline').val(),
						 admin_took_over: $('#admin_took_over').val(),
						 admin_took_over_comment: $('#admin_took_over_comment').val(),
                        _token: $('input[name="_token"]').attr('value')
                    },
                    success: function(data) {
					
						
					},
                    error: function(data) {
                        var errors = data.responseJSON;
						
                    }
                });
setTimeout(function(){ 
  $.ajax({
                    url: APP_URL + "/form/reject/" + id,
                    type: 'GET',
                    success: function(data) {
                        
                        toastr.success('User application successfully rejected');
                        window.history.back();
$.LoadingOverlay("hide");
                    },
                    error: function(data) {
						$.LoadingOverlay("hide");
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
}, 3000);

              
            }
			 

        });

        $('body').on('click', '.check_change_request', function() {
		
            var id = $(this).attr('data-id');
            var remark = $('#remark').val();

            var r = confirm("هل أنت متأكد ?");
            if (r == true) {
				$.LoadingOverlay("show");
                var id = $(this).attr('data-id');
                console.log(id);

                $.ajax({
                    url: APP_URL + "/forms/save_feedback",
                    type: 'POST',
                    data: {
                        id: $('#dataUserApplicationsId').val(),
                        remark: $('#remark').val(),
                        deadline: $('#deadline').val(),
                        admin_took_over: $('#admin_took_over').val(),
                        admin_took_over_comment: $('#admin_took_over_comment').val(),
                        _token: $('input[name="_token"]').attr('value')
                    },
                    success: function(data) {
							
						
					},
                    error: function(data) {
						
                        var errors = data.responseJSON;
                    }
                });
setTimeout(function(){ 
 $.ajax({
                    url: APP_URL + "/form/change_request/" + id,
                    type: 'GET',
                    success: function(data) {
                        toastr.success('User application successfully updated');
                        window.history.back();
						$.LoadingOverlay("hide");
                    },
                    error: function(data) {
						$.LoadingOverlay("hide");
                        var errors = data.responseJSON;
                    }
                });
 }, 3000);

               
            }
			 else {
			 return false;
			}
        });

        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $(this).parent().find('label').text(fileName);
        });
    });
</script>

@endsection