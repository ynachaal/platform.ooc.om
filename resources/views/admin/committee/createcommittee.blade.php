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
                <h1>@lang('custom.committees_corner')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    @if(isset($data))
                    <li class="breadcrumb-item active">@lang('custom.edit') @lang('custom.committee')</li>
                    @else
                    <li class="breadcrumb-item active">@lang('custom.add_committee')</li>
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
                        <h3 class="card-title">@lang('custom.edit') @lang('custom.committee')</h3>
                        @else
                        <h3 class="card-title">@lang('custom.create') @lang('custom.committee')</h3>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="newsForm" method="POST" action="{{ url('/committee/save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if(isset($data))
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Enter name" value="{{isset($data['id'])? $data['id'] : ""}}">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.association_committee')</label>
                                <input type="text" name="committee_name" class="form-control" id="title" placeholder="@lang('custom.enter') @lang('custom.title')" value="{{isset($data['committee_name']) ? $data['committee_name'] : ''}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">@lang('custom.image')</label>
                                <div class="custom-file">
                                    <input id="document_field" type="file" class="custom-file-input" id="exampleInputFile" name="committee_logo">
                                    <label class="custom-file-label" for="exampleInputFile">@lang('custom.choose_file')</label>
                                </div>
								<span style="display:none;color: red;font-size: 13px;" id="size_error">@lang('custom.file_size')</span>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            @if(isset($data))
                            <button type="submit" id="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button type="submit" id="submit" class="btn btn-primary">@lang('custom.save')</button>
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