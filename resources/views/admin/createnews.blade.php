@extends('layouts.admin')

@section('content')
<script>
$(function () {
$("#submit").click(function(){
	error = 0;
var document_field = document.getElementById("document_field").files.length;
if(document_field>0) {
	var file_size = $('#document_field')[0].files[0].size;
					size = 5*1000*1000;
					if(file_size>size) {
						error = 1;
						$("#size_error").show();
					} else {
						$("#size_error").hide();
					}
					if(error==1)
						return false;
}
})
})
 
</script>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ركن الأخبار</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    @if(isset($data))
                    <li class="breadcrumb-item active">@lang('custom.edit') @lang('custom.news')</li>
                    @else
                    <li class="breadcrumb-item active">@lang('custom.create') @lang('custom.news')</li>
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
                        <h3 class="card-title">تعديل الأخبار</h3>
                        @else
                        <h3 class="card-title">@lang('custom.create') @lang('custom.news')</h3>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="newsForm" method="POST" action="{{ url('/news/save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if(isset($data))
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Enter name" value="{{isset($data['id'])? $data['id'] : ""}}">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">عنوان الخبر</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="@lang('custom.enter') @lang('custom.title')" value="{{isset($data['title']) ? $data['title'] : ''}}">
                            </div>
                            <!--                            <div class="form-group">
                                                            <label for="exampleInputEmail1">description</label>
                                                            <input type="text" name="description" class="form-control" id="description" placeholder="@lang('custom.enter') description" value="{{isset($data['description']) ? $data['description'] : ''}}">
                                                        </div>-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">الوصف</label>
                                <div class="mb-3">
                                    <textarea class="textarea" placeholder="@lang('custom.enter') @lang('custom.description')" name ="description" 
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['description']) ? $data['description'] : ''}}</textarea>
                                </div>

                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">صورة الخبر</label>
                                <div class="custom-file">
                                    <input type="file"  class="custom-file-input"  id="document_field"  name="image">
                                    <label class="custom-file-label" for="exampleInputFile">@lang('custom.choose_file')</label>
                                </div>
								<span style="display:none;color: red;font-size: 13px;" id="size_error">@lang('custom.file_size')</span>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            @if(isset($data))
                            <button id="submit" type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button id="submit" type="submit" class="btn btn-primary">@lang('custom.save')</button>
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