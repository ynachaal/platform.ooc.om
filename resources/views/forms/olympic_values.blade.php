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
                <h1>Olympic Solidarity Online Platform</h1>
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
                    <form role="form" id="quickForm" method="POST" action="{{ url('/forms/save_form1') }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($dataUserApplications))
                        <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />
                        @endif

                        <div class="card-body">
                            <div class="form-group col-md-6">
                                <input type="hidden" name="application_id" class="form-control" placeholder="Committee Name" value="{{$application_id}}">
                            </div>
                            <p>IMPORTANT: In order for this request to be taken into consideration, this form, duly completed and signed, should be sent to Olympic Solidarity in electronic format, at the very latest two (2) months prior to the start of the activity.</p>
                            <p>يجب ارسال هذا الطلب قبل مدة لا تقل عن شهرين من الموعد المحدد لتنفيذ البرنامج</p>
                            <h3>Title of the Proggram</h3>
                            <h3 class="form_header_2">عنوان البرنامج :</h3>
                            <table style="margin-top: 20px;">
                                <tr>
                                    <td>نوع البرنامج المراد تنفيذه</td>
                                    <td>
                                        <div class="row"> 
                                            استراتيجية <input class="form-check-input" type="radio" name="title_proggram" value="strategy" {{isset($data['title_proggram']) && $data['title_proggram']  =="strategy" ? 'checked' : ''}}>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            ندوة <input class="form-check-input" type="radio" name="title_proggram" value="symposium" {{isset($data['title_proggram']) && $data['title_proggram']  =="symposium" ? 'checked' : ''}}>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            مشروع <input class="form-check-input" type="radio" name="title_proggram" value="project" {{isset($data['title_proggram']) && $data['title_proggram']  =="project" ? 'checked' : ''}}>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            تدريب <input class="form-check-input" type="radio" name="title_proggram" value="training" {{isset($data['title_proggram']) && $data['title_proggram']  =="training" ? 'checked' : ''}}>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <h3 class="form_header_2" style="margin-top: 20px;">GENERAL INFORMATION البيانات العامة </h3>
                            <div class="form-group col-md-12" style="margin-top: 20px;">
                                <div class="row">
                                    <div>
                                        <label style="margin-right: 20px;" for="start_date">البداية Start date</label>
                                        <input type="date" id="start_date" name="start_date" class="form-control" style="margin-right: 20px;"  value="{{isset($data['start_date'])? $data['start_date'] : ''}}" >
                                    </div>
                                    <div class="ml-2 mr-2">
                                        <label style="margin-right: 20px;" for="end_date">النهايةEnd date:</label>
                                        <input type="date" id="end_date" name="end_date" class="form-control" style="margin-right: 20px;" value="{{isset($data['end_date'])? $data['end_date'] : ''}}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">What is the current situation of your Committee / NF and your national sporting movement in this area?</label>
                                <label>ما هو الوضع الحالي لـــ اللجنة / الاتحاد في هذا المجال </label>
                                <textarea class="form-control"  name ="national_sporting" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['national_sporting']) ? $data['national_sporting'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12 row">
                                <label for="exampleInputEmail1">What are your future objectives in this area?</label><br>
                                <label>ما هي اهدافك المستقبيلة في هذا المجال</label>
                                <textarea class="form-control"  name ="future_objectives" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['future_objectives']) ? $data['future_objectives'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12 row">
                                <label for="exampleInputEmail1">How do you expect that the formulation of a strategy will help you achieve these objectives?</label><br>
                                <label>كيف تتوقع ان يساعدك هذا البرنامج في تحقيق اهدافك</label>
                                <textarea class="form-control"  name ="formulation_strategy" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['formulation_strategy']) ? $data['formulation_strategy'] : ''}}</textarea>
                            </div>



                            
                        <h3 class="form_header_2" style="margin-top: 20px;">PARTICIPANTS المشاركين </h3> 
                            
                           <table style="margin-top: 20px;">
                                <tr>
                                    <th></th>
                                    <th>رجالMen</th>
                                    <th>نساءWomen</th>
                                    <th>الاجماليTotal</th>
                                </tr>
                                <tr class="rowTotal" data-row="0">
                                    <td>National Olympic Committee representatives ممثلو اللجنة الأولمبية الوطنية</td>
                                    <td class="p-0"><input type="text" name="men[0]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][0])? $data['men'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[0]" class="budget border-0" value="{{isset($data['women'][0])? $data['women'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[0]" class="budget border-0" value="{{isset($data['total'][0])? $data['total'][0] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="1">
                                    <td>National federation representatives ممثلو الاتحاد الوطني</td>
                                    <td class="p-0"><input type="text" name="men[1]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][1])? $data['men'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[1]" class="budget border-0" value="{{isset($data['women'][1])? $data['women'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[1]" class="budget border-0" value="{{isset($data['total'][1])? $data['total'][1] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="2">
                                    <td>National Paralympic Committee representatives ممثلو اللجنة البارالمبية الوطنية</td>
                                    <td class="p-0"><input type="text" name="men[2]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][2])? $data['men'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[2]" class="budget border-0" value="{{isset($data['women'][2])? $data['women'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[2]" class="budget border-0" value="{{isset($data['total'][2])? $data['total'][2] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="3">
                                    <td>National Olympic Academy representatives ممثلو الأكاديمية الأولمبية الوطنية</td>
                                    <td class="p-0"><input type="text" name="men[3]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][3])? $data['men'][3] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[3]" class="budget border-0" value="{{isset($data['women'][3])? $data['women'][3] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[3]" class="budget border-0" value="{{isset($data['total'][3])? $data['total'][3] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="4">
                                    <td>Athletes اللاعبين</td>
                                    <td class="p-0"><input type="text" name="men[4]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][4])? $data['men'][4] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[4]" class="budget border-0" value="{{isset($data['women'][4])? $data['women'][4] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[4]" class="budget border-0" value="{{isset($data['total'][4])? $data['total'][4] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="5">
                                    <td>Coaches المدربين</td>
                                    <td class="p-0"><input type="text" name="men[5]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][5])? $data['men'][5] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[5]" class="budget border-0" value="{{isset($data['women'][5])? $data['women'][5] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[5]" class="budget border-0" value="{{isset($data['total'][5])? $data['total'][5] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="6">
                                    <td>International organisations المنظمات الدولية</td>
                                    <td class="p-0"><input type="text" name="men[6]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][6])? $data['men'][6] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[6]" class="budget border-0" value="{{isset($data['women'][6])? $data['women'][6] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[6]" class="budget border-0" value="{{isset($data['total'][6])? $data['total'][6] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="7">
                                    <td>Non-governmental organisations المنظمات غير الحكومية</td>
                                    <td class="p-0"><input type="text" name="men[7]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][7])? $data['men'][7] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[7]" class="budget border-0" value="{{isset($data['women'][7])? $data['women'][7] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[7]" class="budget border-0" value="{{isset($data['total'][7])? $data['total'][7] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="8">
                                    <td>Governmental organisations المنظمات الحكومية</td>
                                    <td class="p-0"><input type="text" name="men[8]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][8])? $data['men'][8] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[8]" class="budget border-0" value="{{isset($data['women'][8])? $data['women'][8] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[8]" class="budget border-0" value="{{isset($data['total'][8])? $data['total'][8] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="9">
                                    <td>Private sector, e.g. sponsors القطاع الخاص - الرعاة</td>
                                    <td class="p-0"><input type="text" name="men[9]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][9])? $data['men'][9] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[9]" class="budget border-0" value="{{isset($data['women'][9])? $data['women'][9] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[9]" class="budget border-0" value="{{isset($data['total'][9])? $data['total'][9] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="10">
                                    <td>Doctors الاطباء</td>
                                    <td class="p-0"><input type="text" name="men[10]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][10])? $data['men'][10] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[10]" class="budget border-0" value="{{isset($data['women'][10])? $data['women'][10] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[10]" class="budget border-0" value="{{isset($data['total'][10])? $data['total'][10] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="11">
                                    <td>Physiotherapists العلاج الطبيعي</td>
                                    <td class="p-0"><input type="text" name="men[11]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][11])? $data['men'][11] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[11]" class="budget border-0" value="{{isset($data['women'][11])? $data['women'][11] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[11]" class="budget border-0" value="{{isset($data['total'][11])? $data['total'][11] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="12">
                                    <td>Other medical personnel افراد طبيون اخرون</td>
                                    <td class="p-0"><input type="text" name="men[12]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][12])? $data['men'][12] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[12]" class="budget border-0" value="{{isset($data['women'][12])? $data['women'][12] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[12]" class="budget border-0" value="{{isset($data['total'][12])? $data['total'][12] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="13">
                                    <td>Media الاعلام</td>
                                    <td class="p-0"><input type="text" name="men[13]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][13])? $data['men'][13] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[13]" class="budget border-0" value="{{isset($data['women'][13])? $data['women'][13] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[13]" class="budget border-0" value="{{isset($data['total'][13])? $data['total'][13] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal" data-row="14">
                                    <td>Other اخرين</td>
                                    <td class="p-0"><input type="text" name="men[14]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['men'][14])? $data['men'][14] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="women[14]" class="budget border-0" value="{{isset($data['women'][14])? $data['women'][14] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="total[14]" class="budget border-0" value="{{isset($data['total'][14])? $data['total'][14] : ''}}"></td>
                                </tr>
                                <tr class="rowTotal">
                                    <td>TOTAL</td>
                                    <td class="p-0"><input type="text" name="total_men" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['total_men'])? $data['total_men'] : ''}}" readonly></td>
                                    <td class="p-0"><input type="text" name="total_women" class="budget border-0" value="{{isset($data['total_women'])? $data['total_women'] : ''}}" readonly></td>
                                    <td class="p-0"><input type="text" name="total_total" class="budget border-0" value="{{isset($data['total_total'])? $data['total_total'] : ''}}" readonly></td>
                                </tr>
                            </table>


                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Do you plan to involve experts or organisations other than your NOC in the development of the strategy? If so, which experts and/or organisations?  Please attach CVs if experts have already been identified هل تخطط لإشراك خبراء أو منظمات أخرى في تطوير هذا المشروع؟ إذا كان الأمر كذلك ، فما الخبراء و / أو المنظمات؟
يرجى إرفاق السير الذاتية إذا تم تحديد الخبراء بالفعل
</label>
                                    <input type="radio" id="yes" name="organisations_noc"  value="yes" {{isset($data['organisations_noc']) && $data['organisations_noc']  == "yes" ? 'checked' : ''}} >
                                    <label for="yes">Yes</label>
                                    <input type="radio" id="no" name="organisations_noc" value="no" {{isset($data['organisations_noc']) && $data['organisations_noc']  == "no" ? 'checked' : ''}}>
                                    <label for="no">No</label>
                                </div>
                            </div>
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">BUDGET الموازنة </h3> 
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>Please provide the main points of your NOC’s budget:  يرجى تقديم النقاط الرئيسية للميزانيةالخاصة بك</th>
                                    <th> Budgetالمبلغ (Local currency)</th>
                                </tr>
                                <tr>
                                    <td>Budget requested from Olympic Solidarity (must be the same figure as the total in the table below) الميزانية المطلوبة من التضامن الأولمبي (يجب أن يكون نفس الرقم مثل الإجمالي في الجدول أدناه)</td>
                                    <td class="p-0"><input type="text" name="budget[0]" class="budget border-0" value="{{isset($data['budget'][0])? $data['budget'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="type_of_expenditure[1]" class="budget border-0" value="{{isset($data['type_of_expenditure'][1])? $data['type_of_expenditure'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[1]" class="budget border-0" value="{{isset($data['budget'][1])? $data['budget'][1] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="type_of_expenditure[2]" class="budget border-0" value="{{isset($data['type_of_expenditure'][2])? $data['type_of_expenditure'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[2]" class="budget border-0" value="{{isset($data['budget'][2])? $data['budget'][2] : ''}}"></td>
                                </tr>
                                
                                <tr>
                                    <td>الاجمالي TOTAL</td>
                                    <td class="p-0"><input type="text" name="total_expenditure" class="budget border-0" value="{{isset($data['total_expenditure'])? $data['total_expenditure'] : ''}}" readonly></td>
                                </tr>
                            </table>

                            <h3 class="form_header_2" style="margin-top: 20px;">ATTACHMENTS المرفقات المطلوبة </h3> 
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
                            <h3 class="form_header_2" style="margin-top: 20px;">REPORTING</h3> 
                            <p>Once you have finalised the development of your strategy, you will be asked to submit a copy of the strategy together with a financial report. The strategy should contain objectives, an action plan and means for measuring outcomes/progress. بمجرد الانتهاء من تطوير البرنامج ، سيُطلب منك تقديم نسخة من المشروع مع تقرير مالي. يجب أن تحتوي الاستراتيجية على أهداف وخطة عمل ووسائل لقياس النتائج / التقدم.</p>
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
    $(document).ready(function() {
        $('form .rowTotal input[name^="men"], form .rowTotal input[name^="women"]').on('change', function() {
            var index = $(this).parents('.rowTotal').attr('data-row');
            var menValue = parseInt($('form .rowTotal input[name="men['+index+']"]').val());
            var womenValue = parseInt($('form .rowTotal input[name="women['+index+']"]').val());

            if($.isNumeric(menValue) && $.isNumeric(womenValue)) {
                var rowTotal =  menValue + womenValue;
                console.log(rowTotal);
                $('form .rowTotal input[name="total['+index+']"]').val(rowTotal);
            }
        });

        $('form .rowTotal input[name^="men"]').on('change', function() {
            total = 0;
            $('form .rowTotal input[name^="men"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total = "+total);
                } else {
                    $(this).val('');
                }
            });
            
            $('form .rowTotal input[name="total_men"]').val(total);


            var menValue = parseInt($('form .rowTotal input[name="total_men"]').val());
            var womenValue = parseInt($('form .rowTotal input[name="total_women"]').val());

            if($.isNumeric(menValue) && $.isNumeric(womenValue)) {
                var rowTotal =  menValue + womenValue;
                console.log("rowTotal"+rowTotal);
                $('form .rowTotal input[name="total_total"]').val(rowTotal);
            }
        });

        $('form .rowTotal input[name^="women"]').on('change', function() {
            total = 0;
            $('form .rowTotal input[name^="women"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total = "+total);
                } else {
                    $(this).val('');
                }
            });
            
            $('form .rowTotal input[name="total_women"]').val(total);

            var menValue = parseInt($('form .rowTotal input[name="total_men"]').val());
            var womenValue = parseInt($('form .rowTotal input[name="total_women"]').val());

            if($.isNumeric(menValue) && $.isNumeric(womenValue)) {
                var rowTotal =  menValue + womenValue;
                console.log("rowTotal"+rowTotal);
                $('form .rowTotal input[name="total_total"]').val(rowTotal);
            }
        });    
        $('form').find('input[name^="budget"]').on('blur', function() {
            total = 0;
            $('form').find('input[name^="budget"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total += inputValue;
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total_expenditure"]').val(total);
        });
    })
</script>
