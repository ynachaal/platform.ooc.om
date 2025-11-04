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
<div class="card">
   
    <!-- /.card-header -->
    <div class="card-body">
        <input class="btn btn-primary" type="button" value="Back" onClick="javascript:history.go(-1)" />

        @if(!empty($doc))
        <form method="POST" action="{{ url('/application/update_upload_image') }}" enctype="multipart/form-data">
        @else
        <form method="POST" action="{{ url('/application/upload_image') }}" enctype="multipart/form-data" id = "upload_doc">
        @endif    
            @csrf
            <div class="m-2">
                <h4>تفاصيل البرنامج</h4>
                <input type="hidden" name="user_application_id" value="{{$data['id']}}">
                <div class="form-group">
                    <table id="example1" class="table table-bordered table-striped ">
                        <tr>
                            <th>الرقم</th>
                            <th>تاريخ تقديم الطلب</th>
                            <th>عنوان البرنامج</th>
                        </tr>
                        <tr>
                            <td>{{$data['id']}}</td>
                            <td>{{$data['created_at']}}</td>
                            <td>{{$data['application']['title']}}</td>
                        </tr>
                        <tr>
                            <th>الرقم</th>
                            <th>تاريخ تقديم الطلب</th>
                            <th>عنوان البرنامج</th>
                        </tr>
                    </table>
                </div>
            </div>

            <hr>
            
            <div class="m-2">
                <h4>شهادة الموافقة للبرنامج  </h4>
            <!--{{ strip_tags(html_entity_decode($data['application']['certificated_approval']),'<p>')}}-->
                {!!strip_tags(html_entity_decode($data['application']['certificated_approval']))!!}
            </div>

            <hr>

            @if(\Auth::user()->hasAnyRole(['Admin']))
            <div class="m-2">
                <div class="form-group col-md-12">
                    <label>Remark</label>
                    <textarea id="doc_remark" name="doc_remark" class="form-control" rows="3" placeholder="Enter ...">{{isset($data) && isset($data['doc_remark']) ? $data['doc_remark'] : ""}}</textarea>
                </div>
            </div>
            @endif

            <hr>

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
                                        {{ $d['status']}}
                                        @else
                                        <a data-toggle="tooltip" title="approve" class="appoved_report btn btn-primary btn-sm mr-1" report-id= 0 application-id="{{$data['id']}}" flag = "temporary_appoved"><i class="fa fa-check" ></i></a>
                                        <a data-toggle="tooltip" title="request modify" class="appoved_report btn btn-danger btn-sm mr-1" report-id= 0 application-id = "{{$data['id']}}" flag = "request_modify"><i class="fa fa-ban" ></i></a></i>
                                        @endif
                                    @endif
                                @endForeach
                            </td>
                            @elseif(\Auth::user()->hasAnyRole(['Super Admin']))
                            <td>
                                @foreach($doc as $d)
                                    @if(0 == $d['report_id'])
                                        @if(!empty($d['status']) && $d['status'] == 'Temporary Appoved')
                                        <a data-toggle="tooltip" title="approve" class="appoved_report btn btn-primary btn-sm mr-1" report-id= 0 application-id="{{$data['id']}}" flag = "appoved"><i class="fa fa-check" ></i></a>
                                        @elseif($d['status'] == 'Appoved')
                                        {{ $d['status']}}
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
                                            {{ $d['status']}}
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
                                    <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_0" style="display: none"  name="upload_doc1[]" class=" btn btn-primary btn-sm mr-1" /><i data-toggle="tooltip" title="upload" class="fa fa-upload" onclick="document.getElementById('myFileInput_0').click()" ></i></button>
                                    @else
                                        @foreach($doc as $d)
                                            @if(0 == $d['report_id'] && $d['status'] == 'Request Modify')
                                            <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_0" style="display: none"  name="upload_doc1[]" class=" btn btn-primary btn-sm mr-1" /><i data-toggle="tooltip" title="upload" class="fa fa-upload" onclick="document.getElementById('myFileInput_0').click()" ></i></button>
                                            @endif
                                            @if(0 == $d['report_id'])
                                            <a data-toggle="tooltip" title="download" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
                                    @endif
                                @else
                                    @if(!empty($doc))
                                        @foreach($doc as $d)
                                            @if(0 == $d['report_id'])
                                                <a data-toggle="tooltip" title="download" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
                                    @else
                                    No Document Uploaded
                                    @endif    
                                @endif
                            </td>
            
                        </tr>
                        @foreach($content as $k => $con)
                        <tr>
                            <td>{{$k+2}}</td>
                            <td>{{$con['title']}}</td>
                            <td><a href ="{{url('upload/contect')}}\{{$con['upload_file']}}" class=" btn btn-primary btn-sm mr-1" target="_blank" download><i class="fa fa-download"></i></a></td>
                            @if (\Auth::user()->hasAnyRole(['Admin']))
                            <td>
                                @foreach($doc as $d)
                                    @if(($con['id'] == $d['report_id']))
                                        @if($d['status'] != 'under review' && (!empty($d['status'])))
                                        {{ $d['status']}}
                                        @else
                                        <a data-toggle="tooltip" title="approve" class="appoved_report btn btn-primary btn-sm mr-1" report-id="{{$con['id']}}" application-id = "{{$data['id']}}" flag = "temporary_appoved"><i class="fa fa-check" ></i></a>
                                        <a data-toggle="tooltip" title="request modify" class="appoved_report btn btn-danger btn-sm mr-1" report-id="{{$con['id']}}" application-id = "{{$data['id']}}" flag = "request_modify"><i class="fa fa-ban" ></i></a></i>
                                        @endif
                                    @endif
                                @endForeach
                            </td>
                            @elseif(\Auth::user()->hasAnyRole(['Super Admin']))
                            <td>
                                @foreach($doc as $d)
                                    @if($con['id'] == $d['report_id'])
                                        @if(!empty($d['status']) && $d['status'] == 'Temporary Appoved')
                                        <a data-toggle="tooltip" title="approve" class="appoved_report btn btn-primary btn-sm mr-1" report-id="{{$con['id']}}" application-id="{{$data['id']}}" flag = "appoved"><i class="fa fa-check" ></i></a>
                                        @elseif($d['status'] == 'Appoved')
                                        {{ $d['status']}}
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
                                        {{ $d['status']}}
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
                                    <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_{{$con['id']}}" style="display: none"  name="upload_doc[{{$con['id']}}][]" class=" btn btn-primary btn-sm mr-1" multiple/><i data-toggle="tooltip" title="upload" class="fa fa-upload" onclick="document.getElementById('myFileInput_{{$con['id']}}').click()" ></i></button>
                                    @else
                                        @foreach($doc as $d)
                                            @if($con['id'] == $d['report_id'] && $d['status'] == 'Request Modify')
                                            <button type="button" class="btn btn-primary btn-sm mr-1"><input type="file" id="myFileInput_{{$con['id']}}" style="display: none"  name="upload_doc[{{$con['id']}}][]" class=" btn btn-primary btn-sm mr-1" multiple/><i data-toggle="tooltip" title="upload" class="fa fa-upload" onclick="document.getElementById('myFileInput_{{$con['id']}}').click()" ></i></button>
                                            @endif
                                            @if($con['id'] == $d['report_id'])
                                            <a data-toggle="tooltip" title="download" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
                                    @endif
                                @else
                                    @if(!empty($doc))
                                        @foreach($doc as $d)
                                            @if($con['id'] == $d['report_id'])
                                                <a data-toggle="tooltip" title="download" href ="{{url('upload/document')}}\{{$d['upload_doc']}}" class=" btn btn-primary btn-sm mr-1" download><i class="fa fa-download"></i></a>
                                            @endif
                                        @endForeach
                                    @else
                                    No Document Uploaded
                                    @endif  
                                @endif
                            </td>
            
                        </tr>
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

            <hr>

            @if(\Auth::user()->hasAnyRole(['User']))
            <div class="m-2">
                <h4>Upload Images</h4>
                <div class="form-group">
                    <label for="exampleInputPassword1">رفع صور للبرنامج ( لا يقل عن 5 ولا يزيد عن 10 صور)</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload_image" name="image[]" multiple>
                        <label class="custom-file-label" for="upload_image">@lang('custom.choose_file')</label>
                    </div>
                </div>
            </div>
            @endif
            <div id="temp_div"></div>

            @if(\Auth::user()->hasAnyRole(['Admin']))
            <!-- <div class="card-footer">
                <button type="button" class="btn btn-primary">@lang('custom.save')</button>
            </div> -->
            @endif

            @if(\Auth::user()->hasAnyRole(['User']))
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">@lang('custom.save')</button>
            </div>
            @endif
        </form>   
    </div>
    <!-- /.card-body -->
</div>

@if(!empty($images))
<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        @if(!empty($images))
            @foreach(explode(',', $images[0]['images']) as $key => $img)
                <img height="100" width="100" src="{{url('upload/images')}}\{{$img}}" />
            @endforeach
        @endif
    </div>
</div>
@endif

@if(\Auth::user()->hasAnyRole(['User', 'Super Admin']))
@if(isset($data) && isset($data['doc_remark']) && !empty($data['doc_remark']))
<div class="m-2">
    <div class="form-group col-md-12">
        <label>ملاحظات</label>
        <textarea id="doc_remark" name="doc_remark" class="form-control" rows="3" placeholder="Enter ...">{{isset($data) && isset($data['doc_remark']) ? $data['doc_remark'] : ""}}</textarea>
    </div>
</div>
@endif
@endif

<script type="text/javascript">
    $(document).ready(function () {

        $('[data-toggle="tooltip"]').tooltip();


        $('body').on('click', '.appoved_report', function () {
            var id = $(this).attr('report-id');
            var application_id = $(this).attr('application-id');
            var flag = $(this).attr('flag');
            console.log(id);
            console.log(application_id);
            console.log(flag);
            
            var r = confirm("Are you sure ?");
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
        })
       
        
        
    });

    function filePreview(input) {
        var total_file=document.getElementById("upload_image").files.length;
        for(var i=0;i<total_file;i++)
        {
            $('#temp_div').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' width='100' height='100'><br>");
        }
    }
</script> 
@endsection
