@extends('layouts.admin')

@section('content')
<script>
$(function () {
/* var form_id = $("#form_id").val();
$('#attach_'+form_id+'').show();
$("#form_id").change(function(){
	$(".all_attach").hide();
	var form_id = $("#form_id").val();
	$('#attach_'+form_id+'').show();
}) */
$("#submit").click(function(){
error = 0;
var document_field = document.getElementById("tech_report").files.length;
var document_field1 = document.getElementById("document_field1").files.length;

if(document_field1>0) {
var file_size1 = $('#document_field1')[0].files[0].size;
size1 = 5*1000*1000;
if(file_size1>size1) {
error = 1;
$("#size_error1").show();
} else {
$("#size_error1").hide();
}

}

if(document_field>0) {
var file_size = $('#tech_report')[0].files[0].size;
size = 5*1000*1000;
if(file_size>size) {
error = 1;
$("#size_error").show();
} else {
$("#size_error").hide();
}

}
if(error==1)
return false;
})
})
 
</script>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ركن البرامج</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    @if(isset($data))
                    <li class="breadcrumb-item active">@lang('custom.edit') @lang('custom.programs')</li>
                    @else
                    <li class="breadcrumb-item active">@lang('custom.create') @lang('custom.programs')</li>
                    @endif

                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        @if(isset($data))
                        <h3 class="card-title">إضافة برنامج</h3>
                        @else
                        <h3 class="card-title">@lang('custom.create') @lang('custom.programs')</h3>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="programForm" method="POST" action="{{ url('/programs/save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if(isset($data))
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Enter name" value="{{isset($data['id'])? $data['id'] : ""}}">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">عنوان البرنامج</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="@lang('custom.enter') @lang('custom.title')" value="{{isset($data['title']) ? $data['title'] : ''}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">الفئة</label>
                                <select name="application_category_id" class="form-control" >
                                <!-- <option value="0" {{isset($data) && $data['application_category_id'] == 0 ? 'selected' : ''}}>اختر الفئة</option> -->
                                    @foreach($category as $c)
                                        <option value="{{$c['id']}}" {{isset($data) && $data['application_category_id'] == $c['id'] ? 'selected' : ''}}>{{$c['name']}}</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>وصف البرنامج</label>
                                <textarea class="form-control textarea" name="description" rows="8" placeholder="Enter ...">{{isset($data['description']) ? $data['description'] : ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">تحديد الإستبانة</label>
                                <select name="form_id" id="form_id"  class="form-control" >
                                    <option value="0" {{isset($data) && $data['form_id'] == 0 ? 'selected' : ''}}>اختيار</option>
                                    @foreach($forms as $forms)
                                        <option value="{{$forms['id']}}" {{isset($data) && $data['form_id'] == $forms['id'] ? 'selected' : ''}}>{{$forms['name']}}</option>
                                     @endforeach
                                </select>
                            </div>
							 <div class="form-group">

							    <div class="all_attach" >
							    <label>Manage Attachments</label>
								<br/>
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(1,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="1"> Curriculum Vitae السيرة الذاتية
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(2,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="2"> Application form for the program استمارة الترشح للبرنامج
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(3,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="3"> Support letter from the NF خطاب تزكية من الاتحاد/اللجنة المعني
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(4,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="4"> Copy of passport نسخة من جواز السفر
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(5,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="5"> Covering letter from the candidate خطاب تغطية من المترشح
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(6,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="6"> Acceptance letter from the center/university/IF خطاب قبول من المركز / الجامعة
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(7,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="7"> Qualifications with transcripts المؤهلات العلمية مع كشف الدرجات
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(8,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="8"> language certificate شهادة اتقان اللغة
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(9,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="9"> Photograph صورة شخصية
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(10,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="10"> A recommendation letter from a University Professor رسالة تزكية من الجامعة/الكلية
								
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(11,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="11"> Recommendation letter from the union/committee رسالة تزكية من الاتحاد/اللجنة
								
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(12,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="12"> cover letterرسالة التغطية 
								
								
								<br/>
							
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(13,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="13"> Detailed plan of the programالخطة التفصيلية للبرنامج   
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(14,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="14"> Medical certificate (validity: less than 3 months prior to the application)شهادة طبية (في مدة أقصاها 3 اشهر قبل تقديم الطلب )
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(15,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="15"> For the sport-specific training: detailed description of the training course & budgetوصف مفصل للدورة التدريبية والميزانية   
								
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(16,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="16"> Curriculum Vitae of the proposed expert (where applicable) السيرة الذاتية للخبير المقترح ان وجد   
								
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(17,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="17"> Acceptance letter from the expert خطاب قبول من الخبير
								
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(18,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="18"> العقد Service provider’s proposal and/or contract
																
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(19,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="19"> الجدول الزمنى للمشروع Project schedule
																
								<br/>
								<input type="checkbox" 
								<?php 
								if(isset($data['form_id'])) {
									if(in_array(20,$decode))
										echo 'checked';
								}									
								?> name="manage_attachment[]" value="20"> Other attachments مرفقات أخرى
								
							   </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">التصنيف</label>
                                <select name="parent_id" class="form-control" >
                                    <option value="0" {{isset($data) && $data['parent_id'] == 0 ? 'selected' : ''}}>اختيار</option>
                                    @foreach($programs as $programs)
                                        <option value="{{$programs['id']}}" {{isset($data) && $data['parent_id'] == $programs['id'] ? 'selected' : ''}}>{{$programs['title']}}</option>
                                     @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">صورة</label>
                                <div class="custom-file">
                                    <input  id="document_field1" type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">@lang('custom.choose_file')</label>
                                </div>
								<span style="display:none;color: red;font-size: 13px;" id="size_error1">@lang('custom.file_size')</span>
                            </div>
                            <div class="form-group">
                                <label>شهادة الموافقة</label>
                                <textarea class="form-control textarea" name=" certificated_approval" rows="8" placeholder="Enter ...">{{isset($data['certificated_approval']) ? $data['certificated_approval'] : ''}}</textarea>
                            </div>
                           <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Proposed dates الفترة</label>
                                <div class="row">
                                    <div class="col-md-5 row">
                                        <label style="margin-right: 20px;" for="proposed_dates_from"> from من</label>
                                        <input type="date" id="proposed_dates_from" name="proposed_dates_from" class="form-control col-md-8" style="margin-right: 20px;"  value="{{isset($data['proposed_dates_from'])? date('Y-m-d',$data['proposed_dates_from_timestamp']) : ''}}" >
                                    </div>
                                    <div class="ml-2 mr-2 col-md-5 row">
                                        <label style="margin-right: 20px;" for="proposed_dates_to">to إلى</label>
                                        <input type="date" id="proposed_dates_to" name="proposed_dates_to" class="form-control col-md-8" style="margin-right: 20px;" value="{{isset($data['proposed_dates_to'])? date('Y-m-d',$data['proposed_dates_to_timestamp']) : ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>التقارير الختامية</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="tech_report" name="tech_report">
                                    <label class="custom-file-label" for="tech_report">@lang('custom.choose_file')</label>
                                </div>
									<span style="display:none;color: red;font-size: 13px;" id="size_error">@lang('custom.file_size')</span>
                            </div>
                           
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            @if(isset($data))
                            <button id="submit"  type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button id="submit"  type="submit" class="btn btn-primary">@lang('custom.save')</button>
                            @endif

                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


@endsection