@extends('layouts.admin')

@section('content')
<style>
    .m-2{
        margin-top: 20px !important;
    }
    .fa{
        color: white;
    }
</style>
<?php 
$super_attachments = array();
if(isset($data['superadmin_attachments']) && !empty($data['superadmin_attachments'])) {
	$super_attachments = json_decode($data['superadmin_attachments'],true);
}
$report_ids = array();
foreach($doc as $d) {
	$report_ids[] = $d['report_id'];
}

?>
<div class="card">
   
    <!-- /.card-header -->
    <div class="card-body">
        <input class="btn btn-primary" type="button" value="رجوع" onClick="javascript:history.go(-1)" />

        @if(!empty($doc))
        <form method="POST" action="{{ url('/application/update_upload_image') }}" enctype="multipart/form-data">
        @else
        <form method="POST" action="{{ url('/application/upload_image') }}" enctype="multipart/form-data" id = "upload_doc">
        @endif    
            @csrf

            <div class="m-2">
                <h4>شهادة الموافقة للبرنامج  </h4>
            <!--{{ strip_tags(html_entity_decode($data['application']['certificated_approval']),'<p>')}}-->
                {!!strip_tags(html_entity_decode($data['application']['certificated_approval']))!!}
            </div>

            <hr>
			
            @if(isset($data['certificate_of_approval']) && !empty($data['certificate_of_approval']))
            <a href="{{url('upload/pdf/'.$data['certificate_of_approval'])}}" style="color: white;" class="btn btn-primary" type="button" download>تحميل شهادة الموافقة</a>
            @endif
            <div class="m-2">
                <h4>تفاصيل البرنامج</h4>
                <input type="hidden" name="user_application_id" value="{{$data['id']}}">
                <div class="form-group">
				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped ">
                        <tr>
                            <th>الرقم</th>
                            <th>تاريخ تقديم الطلب</th>
                            <th>عنوان البرنامج</th>
                            <th>الدفعة المقدمة</th>
                            <th>الموازنة المعتمدة</th>
                        </tr>
                        <tr>
                            <td>{{$data['id']}}</td>
                            <td>{{$data['created_at']}}</td>
                            <td>{{$data['application']['title']}}</td>
                            <td>{{$data['down_payment']}}</td>
                            <td>{{$data['approved_budget']}}</td>
                        </tr>
                        <tr>
                            <th>الرقم</th>
                            <th>تاريخ تقديم الطلب</th>
                            <th>عنوان البرنامج</th>
                            <th>الدفعة المقدمة</th>
                            <th>الموازنة المعتمدة</th>
                        </tr>
                    </table>
				</div>
                    
					
                </div>
            </div>

      
 @if (\Auth::user()->hasAnyRole(['User']) || \Auth::user()->hasAnyRole(['Admin'])  || \Auth::user()->hasAnyRole(['Super Admin']))
	  
            <div>
			 <ul class="list-group">
			<?php 
			 if($data['admin_took_over_comment']==1) { 
			$super = 'Super';
			$took_over = '(Super Admin Took Over Application)';
		  } else {
			  $super = $took_over =  '';
		  }	
			
				if(isset($data['remark']) && !empty($data['remark'])) {
				?>
				<li class="list-group-item"><b> Admin Remark <?php echo $took_over ?> </b><br> <br><?php echo $data['remark'] ?></li>
				<?php
				}
				?> 
			   <?php 
				if(isset($data['superadmin_remark']) && !empty($data['superadmin_remark'])) {
				?>
				<li class="list-group-item"><b> Super Admin Remark </b><br> <br><?php echo $data['superadmin_remark'] ?></li>
				<?php
				}
				?> 
			   <?php if(isset($data['superadmin_document']) && !empty($data['superadmin_document'])) { ?>
			   <li class="list-group-item"><b>Document</b><br> <br> <a style="font-size:40px"  target="_blank" href="{{ url('upload/document') }}/<?php echo $data['superadmin_document'] ?>"><i class="fas fa-file"></i></a></li>
				<br/>
				<?php echo $data['superadmin_document'] ?>
			<?php } ?>
				
				 	</ul>
			</div>
 @endif
            <div class="m-2">
                <h4>إرفاق المستندات</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ol>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ol>
                    </div>
                @endif

                <div class="form-group">
				<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped ">
                        <tr>
                            <th>الرقم</th>
                            <th>نوع المستند</th>
                            <th>تحميل النموذج</th>
                            <th>الحالة</th>
                            <th>أخر تحديث</th>
                            <th>
                                @if(\Auth::user()->hasAnyRole(['User']))
                                رفع المستندات 
                                @else
                                تحميل
                                @endif
                            </th>
                        </tr>
					<!--
                        <tr>
                            <td>1</td>
                            <td>Technical Report</td>
                            <td>
                                <a href ="{{url('upload/programs')}}\{{$data['application']['tech_report']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                            </td>
                            @if (\Auth::user()->hasAnyRole(['Admin']))
                            <td>
                                @foreach($doc as $d)
                                    @if(0 == $d['report_id'])
                                        @if($d['status'] != 'under review' && (!empty($d['status'])))
                                            @if($d['status'] == 'Temporary Appoved')
                                            تم قبول الملفات مبدئيا     
                                            @elseif($d['status'] == 'Request Modify')
                                            الرجاء تحديث الملفات 
                                            @elseif($d['status'] == 'Appoved')
                                            تم قبول الملفات 
                                            @else
                                            {{ $d['status']}}
                                            @endif
                                        @else
                                        <a data-toggle="tooltip" title="تم قبول الملفات " class="appoved_report btn btn-primary btn-sm mr-1" report-id= 0 application-id="{{$data['id']}}" flag = "temporary_appoved"><i class="fa fa-check" ></i></a>
                                        <a data-toggle="tooltip" title="الرجاء تحديث الملفات" class="appoved_report btn btn-danger btn-sm mr-1" report-id= 0 application-id = "{{$data['id']}}" flag = "request_modify"><i class="fa fa-ban" ></i></a></i>
                                        @endif
                                    @endif
                                @endForeach
                            </td>
                            @elseif(\Auth::user()->hasAnyRole(['Super Admin']))
                            <td>
                                @foreach($doc as $d)
                                    @if(0 == $d['report_id'])
                                        @if(!empty($d['status']) && $d['status'] == 'Temporary Appoved')
                                        <a data-toggle="tooltip" title="تم قبول الملفات " class="appoved_report btn btn-primary btn-sm mr-1" report-id= 0 application-id="{{$data['id']}}" flag = "appoved">تم قبول الملفات </a>
                                        @elseif($d['status'] == 'Appoved')
                                        تم قبول الملفات 
                                        @else
                                        ---
                                        @endif
                                    @endif
                                @endForeach
                            </td>
                            @else
                            <td>
                                @if(!empty($doc))
                                    @foreach($doc as $d)
                                        @if(0 == $d['report_id'])
                                            @if($d['status'] == 'Temporary Appoved')
                                            تم قبول الملفات مبدئيا     
                                            @elseif($d['status'] == 'Request Modify')
                                            الرجاء تحديث الملفات 
                                            @elseif($d['status'] == 'Appoved')
                                            تم قبول الملفات 
                                            @elseif($d['status'] == 'under review')
                                            الطلب قيد المراجعة 
                                            @else
                                            {{ $d['status']}}
                                            @endif 
                                            
                                        @endif
                                    @endForeach
                                @endif
                            </td>
                            @endif
                            <td>
                                @if(!empty($doc))
                                    @foreach($doc as $d)
                                        @if(0 == $d['report_id'])
                                            {{ $d['updated_at']}}
                                        @endif
                                    @endForeach
                                @endif
                            </td>
                            <td>
                                @if(\Auth::user()->hasAnyRole(['User']))
                                    @if(empty($doc))
                                    <div id="temp_doc"></div>
                                    <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_0" style="display: none"  name="upload_doc1[]" class="upload_doc_temp  btn btn-primary btn-sm mr-1 upall" /><i data-toggle="tooltip" title="رفع" class="fa fa-upload" onclick="document.getElementById('myFileInput_0').click()" ></i></button>
                                    @else
                                        @foreach($doc as $d)
                                            @if(0 == $d['report_id'] && $d['status'] == 'Request Modify')
                                            <div id="temp_doc"></div>
                                            <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_0" style="display: none"  name="upload_doc1[]" class="upload_doc_temp  btn btn-primary btn-sm mr-1" /><i data-toggle="tooltip" title="رفع" class="fa fa-upload" onclick="document.getElementById('myFileInput_0').click()" ></i></button>
                                            @endif
                                            @if(0 == $d['report_id'])
                                            <a data-toggle="tooltip" title="تحميل" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
                                    @endif
                                @else
                                    @if(!empty($doc))
                                        @foreach($doc as $d)
                                            @if(0 == $d['report_id'])
                                                <a data-toggle="tooltip" title="تحميل" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
                                    @else
                                    No Document Uploaded
                                    @endif    
                                @endif
                            </td>
            
                        </tr>
						-->
						<?php $i=0; ?>
						
                        @foreach($content as $k => $con)
					
						<?php 
					
						if(in_array($con['id'],$super_attachments)) { 
					
							$i++; 
						?>
						
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$con['title']}}</td>
                            <td><a href ="{{url('upload/contect')}}\{{$con['upload_file']}}" class=" btn btn-primary btn-sm mr-1" target="_blank" download><i class="fa fa-download"></i></a>
							
							</td>
                            @if (\Auth::user()->hasAnyRole(['Admin']))
                            <td>
                                @foreach($doc as $d)
                                    @if(($con['id'] == $d['report_id']))
                                        @if($d['status'] != 'under review' && (!empty($d['status'])))
                                            @if($d['status'] == 'Temporary Appoved')
                                            تم قبول الملفات مبدئيا     
                                            @elseif($d['status'] == 'Request Modify')
                                            الرجاء تحديث الملفات 
                                            @elseif($d['status'] == 'Appoved')
                                            تم قبول الملفات 
                                            @else
                                            {{ $d['status']}}
                                            @endif
                                        @else
                                        <a data-toggle="tooltip" title="تم قبول الملفات " class="appoved_report btn btn-primary btn-sm mr-1" report-id="{{$con['id']}}" application-id = "{{$data['id']}}" flag = "temporary_appoved"><i class="fa fa-check" ></i></a>
                                        <a data-toggle="tooltip" title="الرجاء تحديث الملفات" class="appoved_report btn btn-danger btn-sm mr-1" report-id="{{$con['id']}}" application-id = "{{$data['id']}}" flag = "request_modify"><i class="fa fa-ban" ></i></a></i>
                                        @endif
                                    @endif
                                @endForeach
                            </td>
                            @elseif(\Auth::user()->hasAnyRole(['Super Admin']))
                            <td>
                                @foreach($doc as $d)
                                    @if($con['id'] == $d['report_id'])
                                        @if(!empty($d['status']) && $d['status'] == 'Temporary Appoved')
                                        <a data-toggle="tooltip" title="تم قبول الملفات " class="appoved_report btn btn-primary btn-sm mr-1" report-id="{{$con['id']}}" application-id="{{$data['id']}}" flag = "appoved">تم قبول الملفات </a>
                                        @elseif($d['status'] == 'Appoved')
                                        تم قبول الملفات 
                                        @else
                                        ---
                                        @endif
                                    @endif
                                @endForeach
                            </td>
                            @else
                            <td>
                                @foreach($doc as $d)
                                    @if($con['id'] == $d['report_id'])
                                        @if($d['status'] == 'Temporary Appoved')
                                        تم قبول الملفات مبدئيا     
                                        @elseif($d['status'] == 'Request Modify')
                                        الرجاء تحديث الملفات 
                                        @elseif($d['status'] == 'Appoved')
                                        تم قبول الملفات 
                                        @elseif($d['status'] == 'under review')
                                        الطلب قيد المراجعة 
                                        @else
                                        {{ $d['status']}}
                                        @endif
                                    @endif
                                @endForeach
                            </td>    
                            @endif
                            <td>
                            @foreach($doc as $d)
                                    @if($con['id'] == $d['report_id'])
                                        {{ $d['updated_at']}}
                                    @endif
                            @endForeach
                            </td>
                            <td>
                                @if(\Auth::user()->hasAnyRole(['User']))
								
                                    @if(empty($doc))
                                    <div id="temp_doc_{{$con['id']}}"></div>
                                    <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_{{$con['id']}}" style="display: none"  name="upload_doc[{{$con['id']}}][]" data-data="{{$con['id']}}" class="upload_doc_temp_1 btn btn-primary btn-sm mr-1 upall"/><i data-toggle="tooltip" title="رفع" class="fa fa-upload" onclick="document.getElementById('myFileInput_{{$con['id']}}').click()" ></i></button>
                                    @else
										<?php if(in_array($con['id'],$report_ids)) { 
									?>
									 @foreach($doc as $d)
										<?php
										
										
										?>
                                            @if($con['id'] == $d['report_id'] && $d['status'] == 'Request Modify')
												
                                            <div id="temp_doc"></div>
                                            <button type="button" class=" btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_{{$con['id']}}" style="display: none"  name="upload_doc[{{$con['id']}}][]" data-data="{{$con['id']}}" class="upload_doc_temp_1 btn btn-primary btn-sm mr-1"/><i data-toggle="tooltip" title="رفع" class="fa fa-upload" onclick="document.getElementById('myFileInput_{{$con['id']}}').click()" ></i></button>
											
                                            @endif
                                            @if($con['id'] == $d['report_id'])
											
                                            <a data-toggle="tooltip" title="تحميل" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
									<?php
									} else {
										?>
										
										 <div id="temp_doc_{{$con['id']}}"></div>
                                    <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_{{$con['id']}}" style="display: none"  name="upload_doc[{{$con['id']}}][]" data-data="{{$con['id']}}" class="upload_doc_temp_1 btn btn-primary btn-sm mr-1 upall"/><i data-toggle="tooltip" title="رفع" class="fa fa-upload" onclick="document.getElementById('myFileInput_{{$con['id']}}').click()" ></i></button>
										<?php
									}										
									?>
                                       
                                    @endif
                                @else
									
                                    @if(!empty($doc))
                                        @foreach($doc as $d)
                                            @if($con['id'] == $d['report_id'])
                                                <a data-toggle="tooltip" title="تحميل" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
                                    @else
                                    No Document Uploaded
                                    @endif  
                                @endif
                            </td>
            
                        </tr>
						<?php 
					
						 }  ?>
                        @endforeach
                        <tr>
                            <th>الرقم</th>
                            <th>نوع المستند</th>
                            <th>تحميل النموذج</th>
                            <th>الحالة</th>
                            <th>أخر تحديث</th>
                            <th>
                                @if(\Auth::user()->hasAnyRole(['User']))
                                رفع المستندات 
                                @else
                                تحميل
                                @endif
                            </th>
                        </tr>
                    </table>
				</div>
                    
                </div>

            </div>

            <hr>

          

            <hr>

            @if(\Auth::user()->hasAnyRole(['User']))
            <div class="m-2">
                <!-- <h4>Images</h4> -->
                <div class="form-group">
                    <label for="exampleInputPassword1">رفع صور للبرنامج ( لا يقل عن 5 ولا يزيد عن 10 صور)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload_image" name="image[]" multiple>
                        <label class="custom-file-label" for="upload_image">@lang('custom.choose_file')</label>
                    </div>
                </div>
            </div>
            @endif
            <div id="temp_div" class="row" ></div>

            @if(\Auth::user()->hasAnyRole(['Admin']))
            <!-- <div class="card-footer">
                <button type="button" class="btn btn-primary">@lang('custom.save')</button>
            </div> -->
            @endif

            @if(\Auth::user()->hasAnyRole(['User']))
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary upload_save">@lang('custom.save')</button>
                </div>
            @endif
        </form>   
    </div>

	  @if(\Auth::user()->hasAnyRole(['Admin']) || \Auth::user()->hasAnyRole(['Super Admin']))
            <div class="m-2">
			<form method="post" action="{{url('doc_status')}}">
			@csrf
                <div class="form-group col-md-12">
                    <label>الملاحظات</label>
                    <textarea id="doc_remark" name="doc_remark" class="form-control" rows="3" placeholder="Enter ...">{{isset($data) && isset($data['doc_remark']) ? $data['doc_remark'] : ""}}</textarea>
					<br/>
					<input type="hidden" name="user_application_id" value="{{$data['id']}}">
					@if(!empty($checkDocumentCount))
						@if(isset($data['document_approve']) && $data['document_approve']==2 && $superadmin==1)
						<input type="submit" name="approved" class="btn btn-primary btn-sm  both_buttons" value="Approve" >
						@elseif($data['document_approve']!=2 && $data['document_approve']!=1)
						<input type="submit" name="accepted" class="btn btn-primary btn-sm  both_buttons" value="Accepted" >
						<input type="submit" name="incomplete" class="btn btn-danger btn-sm both_buttons" value="Incomplete">
						@endif
					@endif
                </div>
			</form>
            </div>
            @endif
          
	@if(\Auth::user()->hasAnyRole(['Super Admin']))

	<div class="m-2 d-none">
		<form action="{{url('after-upload-remark')}}" method="POST">	
		@csrf
			<div class="col-md-12 row" style="display: block;" id="remark_div">
				<div class="form-group col-md-12">
					<label>Upload Remark</label>
					<textarea id="remark" required class="form-control" name="remark" rows="3" placeholder="Enter ...">@if(isset($data['final_upload_remark']) && !empty($data['final_upload_remark'])) {{$data['final_upload_remark']}} @endif</textarea>
					<span class="remark_error" style="display:none;color:red">remark is a required field</span>
				</div>
			</div>
		
			@if($data['status']!='closed' && $data['status']!='rejected') 
			<div class="form-group col-md-12">
			<input type="hidden" name="user_application_id" value="{{$data['id']}}">
			<input type="submit" name="close" class="btn btn-primary btn-sm  both_buttons" value="تم القبول مبدئيا" >
			<input type="submit" name="reject" class="btn btn-danger btn-sm both_buttons" value="تم رفض الطلب">
			</div>
			@endif
		</form>
	</div>
	@endif
    <!-- /.card-body -->
</div>

@if(!empty($images))
<div class="card">
    <!-- /.card-header -->
    <div class="card-body" style="display: flex;">
        @if(!empty($images))
            @foreach(explode(',', $images[0]['images']) as $key => $img)
                <div class="col-md-2">
                    <img height="100" width="100" src="{{url('upload/images')}}\{{$img}}" />
                    <a href="{{url('/delete-doc-image', $img)}}/{{$data['id']}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endif


@if(\Auth::user()->hasAnyRole(['User', 'Super Admin','Admin']))
<div class="form-group col-md-12">
	<ul class="list-group">
		@if(isset($data) && isset($data['feedback']) && !empty($data['feedback']))
			<li class="list-group-item"><b>الملاحظات </b><br> <br><span style="color:red">{{isset($data) && isset($data['feedback']) ? $data['feedback'] : ""}}</span></li>
		@endif
		@if(isset($data) && isset($data['doc_remark']) && !empty($data['doc_remark']))
			  <li class="list-group-item"><b>ملاحظات</b> <br>  <br><span style="color:red">{{isset($data) && isset($data['doc_remark']) ? $data['doc_remark'] : ""}}</span></li>	
		@endif
	</ul>
 </div>
@endif





<script type="text/javascript">

    document.getElementById('upload_image').addEventListener('change', function () {
        const MAX_TOTAL_SIZE = 15 * 1024 * 1024; // 15 MB in bytes
        let files = this.files;
        let totalSize = 0;

        for (let i = 0; i < files.length; i++) {
            totalSize += files[i].size;
        }
        if (totalSize > MAX_TOTAL_SIZE) {
            alert("Total upload size should not exceed 15 MB.\nSelected size: " + (totalSize / (1024 * 1024)).toFixed(2) + " MB");
            this.value = ""; // reset input
        }
    });


    $(document).ready(function () {
        
        $('.upload_save').click(function(){
           
            var error = [];
            $('.upall').each(function(){
                val = $(this).val();
                if(val==''){
                    error.push ="1";
                }
            })
            
            if(error.push==1){
                alert('Please input all attachments');
                return false;
            }

            
        })
        $('[data-toggle="tooltip"]').tooltip();


        $('body').on('click', '.appoved_report', function () {
            var id = $(this).attr('report-id');
            var application_id = $(this).attr('application-id');
            var flag = $(this).attr('flag');
            console.log(id);
            console.log(application_id);
            console.log(flag);
            
            var r = confirm("هل أنت متأكد ?");
            if (r == true) {
                if($('#doc_remark').val() != '' && $('#doc_remark').val() != null){
                    $.ajax({
                        url: "{{ url('application/document_status_change_remark') }}",
                        type: 'POST',
                        data: {
                            _token: $('input[name="_token"]').attr('value'),
                            application_id: application_id,
                            doc_remark: $('#doc_remark').val(),
                        },
                        success: function (data) {
                            console.log("#####");
                        },
                        error: function (data) {
                            var errors = data.responseJSON;
                            console.log(errors);
                        }
                    });
                }

                $.ajax({
                    url: "{{ url('application/document_status_change') }}"+"/" + id + "/" + application_id + "/" + flag,
                    type: 'GET',
                    success: function (data) {
                        console.log("#####");
                        toastr.success('Status updated Successfully');
                        window.location.reload();
                    },
                    error: function (data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            }

        });

        $('body').on('change', '#upload_image', function () {
            filePreview(this);
        });

        $('body').on('change', '.upload_doc_temp', function (e) {
            console.log("test");
            console.log(e);
            var fileName = e.target.files[0].name;
            $('#temp_doc').append(fileName);
            //alert('The file "' + fileName +  '" has been selected.');
        });

        $('body').on('change', '.upload_doc_temp_1', function (e) {
            console.log("test");
            console.log(e);
            var fileName = e.target.files[0].name;
            $('#temp_doc_'+$(this).attr('data-data')).append(fileName);
            //alert('The file "' + fileName +  '" has been selected.');
        });
       
        
        
    });

    function filePreview(input) {
        $('#temp_div').html('')
        var total_file=document.getElementById("upload_image").files.length;
        for(var i=0;i<total_file;i++)
        {
            $('#temp_div').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' width='100' height='100'><br>");
        }
    }
</script> 
@endsection
