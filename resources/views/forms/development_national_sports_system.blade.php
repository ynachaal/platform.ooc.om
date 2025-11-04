<?php 
$decode = array();
if(isset($dataUserApplications['data'])) {
$data = json_decode($dataUserApplications['data'],true);
}
if(isset($get_data['manage_attachment']) && !empty($get_data['manage_attachment'])) {
$decode = json_decode($get_data['manage_attachment'],true);
}
if(isset($dataUserApplications['attachments'])) {
$attachments1 = json_decode($dataUserApplications['attachments']);
$attachments = array();
foreach($attachments1 as $key=>$val){
	foreach($val as $k=>$v)
	$attachments['attachment'][$k] = $v;
}

}
 ?>
    <script>
$(function () {
$("#submit").click(function(){
		error = 0;
	var email = $('#email').val();
	if(email==''){
		$('html, body').animate({
        scrollTop: $("#form_header_2").offset().top
    }, 2000);
		$('#email_error').show();
		error = 1;
	}else {
		$('#email_error').hide();
	}		


if(error==1)
{
return false;
}

})
$("#submit,#temporary").click(function(){
	error1 = 0;
	
	<?php 
	if(in_array(1,$decode) && !empty($decode))
	{									
	?>
	var upload1 = document.getElementById("upload1").files.length;
if(upload1>0) {
	var file_size1 = $('#upload1')[0].files[0].size;
					size1 = 5*1000*1000;
					if(file_size1>size1) {
						error1 = 1;
						$("#size_error1").show();
					} else {
						$("#size_error1").hide();
					}
					
}
	<?php 
	}
	?>
	<?php 
	if(in_array(2,$decode) && !empty($decode))
	{									
	?>
	var upload2 = document.getElementById("upload2").files.length;
	if(upload2>0) {
		var file_size2 = $('#upload2')[0].files[0].size;
						size2 = 5*1000*1000;
						if(file_size2>size2) {
							error1 = 1;
							$("#size_error2").show();
						} else {
							$("#size_error2").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(3,$decode) && !empty($decode))
	{									
	?>
	var upload3 = document.getElementById("upload3").files.length;
	if(upload3>0) {
		var file_size3 = $('#upload3')[0].files[0].size;
						size3 = 5*1000*1000;
						if(file_size3>size3) {
							error1 = 1;
							$("#size_error3").show();
						} else {
							$("#size_error3").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(4,$decode) && !empty($decode))
	{									
	?>
	var upload4 = document.getElementById("upload4").files.length;
	if(upload4>0) {
		var file_size4 = $('#upload4')[0].files[0].size;
						size4 = 5*1000*1000;
						if(file_size4>size4) {
							error1 = 1;
							$("#size_error4").show();
						} else {
							$("#size_error4").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(5,$decode) && !empty($decode))
	{									
	?>
	var upload5 = document.getElementById("upload5").files.length;
	if(upload5>0) {
		var file_size5 = $('#upload5')[0].files[0].size;
						size5 = 5*1000*1000;
						if(file_size5>size5) {
							error1 = 1;
							$("#size_error5").show();
						} else {
							$("#size_error5").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(6,$decode) && !empty($decode))
	{									
	?>
	var upload6 = document.getElementById("upload6").files.length;
	if(upload6>0) {
		var file_size6 = $('#upload6')[0].files[0].size;
						size6 = 5*1000*1000;
						if(file_size6>size6) {
							error1 = 1;
							$("#size_error6").show();
						} else {
							$("#size_error6").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(7,$decode) && !empty($decode))
	{									
	?>
	var upload7 = document.getElementById("upload7").files.length;
	if(upload7>0) {
		var file_size7 = $('#upload7')[0].files[0].size;
						size7 = 5*1000*1000;
						if(file_size7>size7) {
							error1 = 1;
							$("#size_error7").show();
						} else {
							$("#size_error7").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(8,$decode) && !empty($decode))
	{									
	?>
	var upload8 = document.getElementById("upload8").files.length;
	if(upload8>0) {
		var file_size8 = $('#upload8')[0].files[0].size;
						size8 = 5*1000*1000;
						if(file_size8>size8) {
							error1 = 1;
							$("#size_error8").show();
						} else {
							$("#size_error8").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(9,$decode) && !empty($decode))
	{									
	?>
	var upload9 = document.getElementById("upload9").files.length;
	if(upload9>0) {
		var file_size9 = $('#upload9')[0].files[0].size;
						size9 = 5*1000*1000;
						if(file_size9>size9) {
							error1 = 1;
							$("#size_error9").show();
						} else {
							$("#size_error9").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(10,$decode) && !empty($decode))
	{									
	?>
	var upload10 = document.getElementById("upload10").files.length;
	if(upload10>0) {
		var file_size10 = $('#upload10')[0].files[0].size;
						size10 = 5*1000*1000;
						if(file_size10>size10) {
							error1 = 1;
							$("#size_error10").show();
						} else {
							$("#size_error10").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(11,$decode) && !empty($decode))
	{									
	?>
	var upload11 = document.getElementById("upload11").files.length;
	if(upload11>0) {
		var file_size11 = $('#upload11')[0].files[0].size;
						size11 = 5*1000*1000;
						if(file_size11>size11) {
							error1 = 1;
							$("#size_error11").show();
						} else {
							$("#size_error11").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(12,$decode) && !empty($decode))
	{									
	?>
	var upload12 = document.getElementById("upload12").files.length;
	if(upload12>0) {
		var file_size12 = $('#upload12')[0].files[0].size;
						size12 = 5*1000*1000;
						if(file_size12>size12) {
							error1 = 1;
							$("#size_error12").show();
						} else {
							$("#size_error12").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(13,$decode) && !empty($decode))
	{									
	?>
	var upload13 = document.getElementById("upload13").files.length;
	if(upload13>0) {
		var file_size13 = $('#upload13')[0].files[0].size;
						size13 = 5*1000*1000;
						if(file_size13>size13) {
							error1 = 1;
							$("#size_error13").show();
						} else {
							$("#size_error13").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(14,$decode) && !empty($decode))
	{									
	?>
	var upload14 = document.getElementById("upload14").files.length;
	if(upload14>0) {
		var file_size14 = $('#upload14')[0].files[0].size;
						size14 = 5*1000*1000;
						if(file_size14>size14) {
							error1 = 1;
							$("#size_error14").show();
						} else {
							$("#size_error14").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(15,$decode) && !empty($decode))
	{									
	?>
	var upload15 = document.getElementById("upload15").files.length;
	if(upload15>0) {
		var file_size15 = $('#upload15')[0].files[0].size;
						size15 = 5*1000*1000;
						if(file_size15>size15) {
							error1 = 1;
							$("#size_error15").show();
						} else {
							$("#size_error15").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(16,$decode) && !empty($decode))
	{									
	?>
	var upload16 = document.getElementById("upload16").files.length;
	if(upload16>0) {
		var file_size16 = $('#upload16')[0].files[0].size;
						size16 = 5*1000*1000;
						if(file_size16>size16) {
							error1 = 1;
							$("#size_error16").show();
						} else {
							$("#size_error16").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(17,$decode) && !empty($decode))
	{									
	?>
	var upload17 = document.getElementById("upload17").files.length;
	if(upload17>0) {
		var file_size17 = $('#upload17')[0].files[0].size;
						size17 = 5*1000*1000;
						if(file_size17>size17) {
							error1 = 1;
							$("#size_error17").show();
						} else {
							$("#size_error17").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(18,$decode) && !empty($decode))
	{									
	?>
	var upload18 = document.getElementById("upload18").files.length;
	if(upload18>0) {
		var file_size18 = $('#upload18')[0].files[0].size;
						size18 = 5*1000*1000;
						if(file_size18>size18) {
							error1 = 1;
							$("#size_error18").show();
						} else {
							$("#size_error18").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(19,$decode) && !empty($decode))
	{									
	?>
	var upload19 = document.getElementById("upload19").files.length;
	if(upload19>0) {
		var file_size19 = $('#upload19')[0].files[0].size;
						size19 = 5*1000*1000;
						if(file_size19>size19) {
							error1 = 1;
							$("#size_error19").show();
						} else {
							$("#size_error19").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(20,$decode) && !empty($decode))
	{									
	?>
	var upload20 = document.getElementById("upload20").files.length;
	if(upload20>0) {
		var file_size20 = $('#upload20')[0].files[0].size;
						size20 = 5*1000*1000;
						if(file_size20>size20) {
							error1 = 1;
							$("#size_error20").show();
						} else {
							$("#size_error20").hide();
						}
						
	}
	<?php 
	}
	?>
if(error1==1)
{
return false;
}
})
})
 
</script>
<style>
    table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  /* text-align: left; */
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
.budget_proposal{
    width: 100%;
}
.budget{
    width: 100%;
}
.form-check-input {
    position: static;
    margin-right: 10px;
    margin-top: 8px;
}
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Development National Sports System</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    <li class="breadcrumb-item active">{{ $slug }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">الرجاء تعبئة البيانات المطلوبة في الإستمارة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="quickForm1" method="POST" action="{{ url('/forms/save_form1') }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($dataUserApplications))
                        <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />
                        @endif

                        <div class="card-body">
                            <div class="form-group col-md-6">
                                <input type="hidden" name="application_id" class="form-control" placeholder="Committee Name" value="{{$application_id}}">
                            </div>
                            <p>IMPORTANT: This form duly completed and signed along with the documents indicated under “Attachments required” should be sent to Olympic Solidarity no later than 3 months before the start of your action plan.</p>
                            <p>يجب ارسال هذا الطلب قبل مدة لا تقل عن 3 اشهر من الموعد المحدد لتنفيذ البرنامج</p>
                            
                            <div class="form-group col-md-12" style="margin-top: 20px;">
                                <label for="exampleInputEmail1">Sport (or other) الرياضة</label>
                                <input type="text" name="sport" class="form-control" placeholder="Sport (or other)" value="{{isset($data['sport'])? $data['sport'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Discipline التخصص</label>
                                <input type="text" name="discipline" class="form-control" placeholder="Discipline" value="{{isset($data['discipline'])? $data['discipline'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Name of the project (if any) اسم المشروع</label>
                                <input type="text" name="name_of_project" class="form-control" placeholder="Name of the project" value="{{isset($data['name_of_project'])? $data['name_of_project'] : ''}}">
                            </div>

                            <h3 class="form_header_2" style="margin-top: 20px;">CURRENT SPORT STRUCTURE الهيكل الرياضي الحالي  </h3>

                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">Summary of the current level ملخص المستوى الحالي </label>
                                <textarea class="form-control"  name ="summary_current_level" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['summary_current_level']) ? $data['summary_current_level'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">Weak points نقاط الضعف </label>
                                <textarea class="form-control"  name ="weak_points" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['weak_points']) ? $data['weak_points'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">Strong points نقاط القوة </label>
                                <textarea class="form-control"  name ="strong_points" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['strong_points']) ? $data['strong_points'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">Analysis of requirements تحليل المتطلبات </label>
                                <textarea class="form-control"  name ="analysis_of_requirements" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['analysis_of_requirements']) ? $data['analysis_of_requirements'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">Action plan proposed خطة العمل المقترحة </label>
                                <textarea class="form-control"  name ="action_plan_proposed" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['action_plan_proposed']) ? $data['action_plan_proposed'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">Objectives / expected results الأهداف / النتائج  المتوقعة </label>
                                <textarea class="form-control"  name ="objectives_expected_results" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['objectives_expected_results']) ? $data['objectives_expected_results'] : ''}}</textarea>
                            </div>

                            <h3 class="form_header_2" style="margin-top: 20px;">PLANNING التخطيط </h3>

                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Length of the programme مدة البرنامج</label>
                                <br>
                                <div class="row mt-2">
                                    <div class="col-md-5 row">
                                        <label style="margin-right: 20px;" class="col-md-6" for="length_start_date"> Start Dateالبداية</label>
                                        <input type="date" id="length_start_date" name="length_start_date" class="form-control col-md-8" style="margin-right: 20px;"  value="{{isset($data['length_start_date'])? $data['length_start_date'] : ''}}" >
                                    </div>
                                    <div class="ml-2 mr-2 col-md-5 row">
                                        <label style="margin-right: 20px;" class="col-md-6" for="length_end_date">End Date النهاية</label>
                                        <input type="date" id="length_end_date" name="length_end_date" class="form-control col-md-8" style="margin-right: 20px;" value="{{isset($data['length_end_date'])? $data['length_end_date'] : ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Visit(s) by expert (if staggered) فترات زيارة الخبير</label>
                                <br>
                                <div class="row mt-2">
                                    <div class="col-md-5 row">
                                        <label style="margin-right: 20px;" for="from1">From</label>
                                        <input type="date" id="from1" name="from1" class="form-control col-md-8" placeholder="Enter date" style="margin-right: 20px;"  value="{{isset($data['from1'])? $data['from1'] : ''}}" >
                                    </div>
                                    <div class="ml-2 mr-2 col-md-5 row">
                                        <label style="margin-right: 20px;" for="to1">To</label>
                                        <input type="date" id="to1" name="to1" class="form-control col-md-8" placeholder="Enter date"  style="margin-right: 20px;" value="{{isset($data['to1'])? $data['to1'] : ''}}">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-5 row">
                                        <label style="margin-right: 20px;" for="from2">From</label>
                                        <input type="date" id="from2" name="from2" class="form-control col-md-8" placeholder="Enter date" style="margin-right: 20px;"  value="{{isset($data['from2'])? $data['from2'] : ''}}" >
                                    </div>
                                    <div class="ml-2 mr-2 col-md-5 row">
                                        <label style="margin-right: 20px;" for="to2">To</label>
                                        <input type="date" id="to2" name="to2" class="form-control col-md-8" placeholder="Enter date"  style="margin-right: 20px;" value="{{isset($data['to2'])? $data['to2'] : ''}}">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-5 row">
                                        <label style="margin-right: 20px;" for="from3">From</label>
                                        <input type="date" id="from3" name="from3" class="form-control col-md-8" placeholder="Enter date" style="margin-right: 20px;"  value="{{isset($data['from3'])? $data['from3'] : ''}}" >
                                    </div>
                                    <div class="ml-2 mr-2 col-md-5 row">
                                        <label style="margin-right: 20px;" for="to3">To</label>
                                        <input type="date" id="to3" name="to3" class="form-control col-md-8" placeholder="Enter date"  style="margin-right: 20px;" value="{{isset($data['to3'])? $data['to3'] : ''}}">
                                    </div>
                                </div>
                            </div>
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">BUDGET PROPOSAL </h3>
                            <p>N.B.: International expert’s expenses (air ticket(s) and indemnities, etc.) must be included in the estimated expenditure below. ملاحظة: يجب تضمين نفقات الخبراء الدوليين (تذاكر الطيران والتعويضات ، وما إلى ذلك) في النفقات المقدرة أدناه.</p>
                            
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>Type of expenditure البند</th>
                                    <th>Budget (OMR) المبلغ</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[0]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['proposal'][0])? $data['proposal'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[0]" class="budget border-0" value="{{isset($data['budget'][0])? $data['budget'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[1]" class="budget_proposal border-0" value="{{isset($data['proposal'][1])? $data['proposal'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[1]" class="budget border-0" value="{{isset($data['budget'][1])? $data['budget'][1] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[2]" class="budget_proposal border-0" value="{{isset($data['proposal'][2])? $data['proposal'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[2]" class="budget border-0" value="{{isset($data['budget'][2])? $data['budget'][2] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[3]" class="budget_proposal border-0" value="{{isset($data['proposal'][3])? $data['proposal'][3] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[3]" class="budget border-0" value="{{isset($data['budget'][3])? $data['budget'][3] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[4]" class="budget_proposal border-0" value="{{isset($data['proposal'][4])? $data['proposal'][4] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[4]" class="budget border-0" value="{{isset($data['budget'][4])? $data['budget'][4] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[5]" class="budget_proposal border-0" value="{{isset($data['proposal'][5])? $data['proposal'][5] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[5]" class="budget border-0" value="{{isset($data['budget'][5])? $data['budget'][5] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[6]" class="budget_proposal border-0" value="{{isset($data['proposal'][6])? $data['proposal'][6] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[6]" class="budget border-0" value="{{isset($data['budget'][6])? $data['budget'][6] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[7]" class="budget_proposal border-0" value="{{isset($data['proposal'][7])? $data['proposal'][7] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[7]" class="budget border-0" value="{{isset($data['budget'][7])? $data['budget'][7] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[8]" class="budget_proposal border-0" value="{{isset($data['proposal'][8])? $data['proposal'][8] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[8]" class="budget border-0" value="{{isset($data['budget'][8])? $data['budget'][8] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[9]" class="budget_proposal border-0" value="{{isset($data['proposal'][9])? $data['proposal'][9] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[9]" class="budget border-0" value="{{isset($data['budget'][9])? $data['budget'][9] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[10]" class="budget_proposal border-0" value="{{isset($data['proposal'][10])? $data['proposal'][10] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[10]" class="budget border-0" value="{{isset($data['budget'][10])? $data['budget'][10] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[11]" class="budget_proposal border-0" value="{{isset($data['proposal'][11])? $data['proposal'][11] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[11]" class="budget border-0" value="{{isset($data['budget'][11])? $data['budget'][11] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td>الاجماليTOTAL</td>
                                    <td class="p-0"><input type="text" name="total" class="budget border-0" value="{{isset($data['total'])? $data['total'] : ''}}" readonly></td>
                                </tr>
                            </table>

                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Has your NF already submitted all the relevant technical details to its respective IF? هل تم التنسيق مع الاتحاد الدولي المعني حول تفاصيل طلب هذه الدورة</label>
                                    <input type="radio" id="yes" name="technical_details"  value="yes" {{isset($data['technical_details']) && $data['technical_details']  == "yes" ? 'checked' : ''}} >
                                    <label for="yes">Yes</label>
                                    <input type="radio" id="no" name="technical_details" value="no" {{isset($data['technical_details']) && $data['technical_details']  == "no" ? 'checked' : ''}}>
                                    <label for="no">No</label>
                                </div>
                            </div>
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">PROPOSED EXPERT الخبير المقترح  </h3>
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Family Name اسم العائلة</label>
                                    <input type="text" name="family_name" class="form-control" placeholder="Family Name" value="{{isset($data['family_name'])? $data['family_name'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Given Name(s) الاسم الأول</label>
                                    <input type="text" name="given_name" class="form-control" placeholder="Given Name" value="{{isset($data['given_name'])? $data['given_name'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date of Birth تاريخ الميلاد </label>
                                    <input type="date" name="date_of_birth" class="form-control"  value="{{isset($data['date_of_birth'])? $data['date_of_birth'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nationality الجنسية</label>
                                    <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{isset($data['nationality'])? $data['nationality'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Genderالجنس</label>
                                    <input type="radio" id="male" name="gender"  value="male" {{isset($data['gender']) && $data['gender']  == "male" ? 'checked' : ''}} >
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" {{isset($data['gender']) && $data['gender']  == "female" ? 'checked' : ''}}>
                                    <label for="female">Female</label>
                                </div>
                                <div id="form_header_2" class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Current level المستوى الحالي</label>
                                    <input type="text" name="current_level" class="form-control" placeholder="Current Level" value="{{isset($data['current_level'])? $data['current_level'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Residence الإقامة (المدينة / الدولة) (city, country)</label>
                                    <input type="text" name="residence" class="form-control" placeholder="Residence" value="{{isset($data['residence'])? $data['residence'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Emailالبريد الالكتروني </label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{isset($data['email'])? $data['email'] : ''}}">
										<span style="display:none;color: red;font-size: 13px;" id="email_error">@lang('custom.email_required')</span>
                                </div>
                            </div>
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Telephoneالهاتف  </label>
                                    <input type="number" name="telephone" class="form-control" placeholder="Telephone" value="{{isset($data['telephone'])? $data['telephone'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Mobileالجوال </label>
                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile" value="{{isset($data['mobile'])? $data['mobile'] : ''}}">
                                </div>
                            </div>

                            <h3 class="form_header_2" style="margin-top: 20px;">EDUCATION & DIPLOMAS المستوى التعليمي والمؤهلات</h3>
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>Year السنة </th>
                                    <th>Training التدريب </th>
                                    <th>Diplomas awarded شهادات الدبلوم</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="year[0]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['year'][0])? $data['year'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="training[0]" class="budget border-0" value="{{isset($data['training'][0])? $data['training'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="diplomas_awarded[0]" class="budget border-0" value="{{isset($data['diplomas_awarded'][0])? $data['diplomas_awarded'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="year[1]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['year'][1])? $data['year'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="training[1]" class="budget border-0" value="{{isset($data['training'][1])? $data['training'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="diplomas_awarded[1]" class="budget border-0" value="{{isset($data['diplomas_awarded'][1])? $data['diplomas_awarded'][1] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="year[2]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['year'][2])? $data['year'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="training[2]" class="budget border-0" value="{{isset($data['training'][0])? $data['training'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="diplomas_awarded[2]" class="budget border-0" value="{{isset($data['diplomas_awarded'][2])? $data['diplomas_awarded'][2] : ''}}"></td>
                                </tr>
                            </table>

                            <h3 class="form_header_2" style="margin-top: 20px;">SPORTS EXPERIENCE الخبرات الرياضية </h3>
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>Year السنة </th>
                                    <th>Clubs, athletes coached, past achievements, etc. أندية ، رياضيون مدربون ، إنجازات سابقة ، إلخ</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="sports_year[0]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['sports_year'][0])? $data['sports_year'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="past_achievements[0]" class="budget border-0" value="{{isset($data['past_achievements'][0])? $data['past_achievements'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="sports_year[1]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['sports_year'][1])? $data['sports_year'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="past_achievements[1]" class="budget border-0" value="{{isset($data['past_achievements'][1])? $data['past_achievements'][1] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="sports_year[2]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['sports_year'][2])? $data['sports_year'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="past_achievements[2]" class="budget border-0" value="{{isset($data['past_achievements'][2])? $data['past_achievements'][2] : ''}}"></td>
                                </tr>
                            </table>

                            <h3 class="form_header_2" style="margin-top: 20px;">NATIONAL COORDINATOR(IF ALREADY KNOWN) المنسق الوطني للبرنامج – اذا كان متوافرا  </h3>
                            
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Family Name اسم العائلة</label>
                                    <input type="text" name="national_family_name" class="form-control" placeholder="Family Name" value="{{isset($data['national_family_name'])? $data['national_family_name'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Given Name(s) الاسم الأول</label>
                                    <input type="text" name="national_given_name" class="form-control" placeholder="Given Name" value="{{isset($data['national_given_name'])? $data['national_given_name'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nationality الجنسية</label>
                                    <input type="text" name="national_nationality" class="form-control" placeholder="Nationality" value="{{isset($data['national_nationality'])? $data['national_nationality'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Title within the NF or NOC  المسمى</label>
                                    <input type="text" name="national_noc" class="form-control" placeholder="Title within the NF or NOC" value="{{isset($data['national_noc'])? $data['national_noc'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Emailالبريد الالكتروني </label>
                                    <input type="email" name="national_email" class="form-control" placeholder="Email" value="{{isset($data['national_email'])? $data['national_email'] : ''}}">
                                </div>
                                <div id="attach" class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Mobileالجوال </label>
                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile" value="{{isset($data['mobile'])? $data['mobile'] : ''}}">
                                </div>
                            </div>

                            <h3 class="form_header_2" style="margin-top: 20px;">ATTACHMENTS REQUIRED المرفقات المطلوبة  </h3>  

                            <table style="margin-top: 20px;">
							<?php 
								if(in_array(1,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Curriculum Vitae السيرة الذاتية </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['curriculum_vitae']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['curriculum_vitae'])}}">{{$attachments['attachment']['curriculum_vitae']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload1">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload1" name="attachment[curriculum_vitae]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error1">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(2,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Application form for the program استمارة الترشح للبرنامج</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['application_program']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['application_program'])}}">{{$attachments['attachment']['application_program']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload2">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload2" name="attachment[application_program]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error2">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(3,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Support letter from the NF خطاب تزكية من الاتحاد/اللجنة المعني</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['support_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['support_letter'])}}">{{$attachments['attachment']['support_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload3">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload3" name="attachment[support_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error3">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
									<?php 
								if(in_array(4,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Copy of passport نسخة من جواز السفر</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['copy_passport']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['copy_passport'])}}">{{$attachments['attachment']['copy_passport']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload4">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload4" name="attachment[copy_passport]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error4">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
									<?php 
								if(in_array(5,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Covering letter from the candidate خطاب تغطية من المترشح</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['covering_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['covering_letter'])}}">{{$attachments['attachment']['covering_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload5">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload5" name="attachment[covering_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error5">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(6,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Acceptance letter from the center/university/IF خطاب قبول من المركز / الجامعة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['acceptance_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['acceptance_letter'])}}">{{$attachments['attachment']['acceptance_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload6">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload6" name="attachment[acceptance_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error6">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(7,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Qualifications with transcripts المؤهلات العلمية مع كشف الدرجات</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['qualifications_transcripts']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['qualifications_transcripts'])}}">{{$attachments['attachment']['qualifications_transcripts']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload7">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload7" name="attachment[qualifications_transcripts]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error7">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(8,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> language certificate شهادة اتقان اللغة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['language_certificate']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['language_certificate'])}}">{{$attachments['attachment']['language_certificate']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload8">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload8" name="attachment[language_certificate]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error8">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(9,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Photograph صورة شخصية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['photograph']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['photograph'])}}">{{$attachments['attachment']['photograph']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload9">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload9" name="attachment[photograph]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error9">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
									<?php 
								if(in_array(10,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> A recommendation letter from a University Professor رسالة تزكية من الجامعة/الكلية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['recommendation_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['recommendation_letter'])}}">{{$attachments['attachment']['recommendation_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload10">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload10" name="attachment[recommendation_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error10">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(11,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Recommendation letter from the union/committee رسالة تزكية من الاتحاد/اللجنة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['recommendation_letter_union']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['recommendation_letter_union'])}}">{{$attachments['attachment']['recommendation_letter_union']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload11">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload11" name="attachment[recommendation_letter_union]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error11">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(12,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> cover letterرسالة التغطية </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['covering_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['covering_letter'])}}">{{$attachments['attachment']['covering_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload12">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload12" name="attachment[covering_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error12">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(13,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Detailed plan of the programالخطة التفصيلية للبرنامج   </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['detailed_action']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['detailed_action'])}}">{{$attachments['attachment']['detailed_action']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload13">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload13" name="attachment[detailed_action]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error13">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(14,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Medical certificate (validity: less than 3 months prior to the application)شهادة طبية (في مدة أقصاها 3 اشهر قبل تقديم الطلب )</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['medical_certificate']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['medical_certificate'])}}">{{$attachments['attachment']['medical_certificate']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload14">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload14" name="attachment[medical_certificate]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error14">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(15,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">For the sport-specific training: detailed description of the training course & budgetوصف مفصل للدورة التدريبية والميزانية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['sport_specific_training']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['sport_specific_training'])}}">{{$attachments['attachment']['sport_specific_training']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload15">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload15" name="attachment[sport_specific_training]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error15">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(16,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Curriculum Vitae of the proposed expert (where applicable) السيرة الذاتية للخبير المقترح ان وجد   </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['curriculum_vitae']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['curriculum_vitae'])}}">{{$attachments['attachment']['curriculum_vitae']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload16">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload16" name="attachment[curriculum_vitae]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error16">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(17,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Acceptance letter from the expert خطاب قبول من الخبير</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['acceptance_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['acceptance_letter'])}}">{{$attachments['attachment']['acceptance_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload17">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload17" name="attachment[acceptance_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error17">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(18,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">العقد Service provider’s proposal and/or contract</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['service_provider_proposal']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['service_provider_proposal'])}}">{{$attachments['attachment']['service_provider_proposal']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload18">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload18" name="attachment[service_provider_proposal]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error18">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(19,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">الجدول الزمنى للمشروع Project schedule</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['project_schedule']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['project_schedule'])}}">{{$attachments['attachment']['project_schedule']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload19">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload19" name="attachment[project_schedule]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error19">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(20,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Other attachments مرفقات أخرى</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['other_attachments']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['other_attachments'])}}">{{$attachments['attachment']['other_attachments']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload20">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload20" name="attachment[other_attachments]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error20">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
                            </table>

                            <p>يرفق الطلب مع رسالة تغطية من الاتحاد / اللجنة ويتم تحميلها عبر النظام ويتم ارسال الأصل الى البريد الرسمي للجنة الأولمبية العمانية موجهة الى الأمين العام</p>

                        </div>
                        <!-- /.card-body -->
                           <div class="card-footer">
                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                            @if(isset($data) && $dataUserApplications['status'] != 'not submitted')
                            <button id="submit" type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button id="submit"  type="submit" class="btn btn-primary">@lang('custom.save')</button>
							&nbsp;
							<button id="temporary"  name="temporary" style="margin:0 7px 0 0px" type="submit" class="btn btn-danger">@lang('custom.save_temporary')</button>
                            @endif
                            @endif
                        </div>
                    </form>
                </div>

            </div>

            
        </div>

    </div>
</section>
<script>
    var total = 0;
    $(document).ready(function() {
        $('form').find('input[name^="budget"]').on('change', function() {
            total = 0;
            $('form').find('input[name^="budget"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total = "+total);
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total"]').val(total);
        });
    })
</script>