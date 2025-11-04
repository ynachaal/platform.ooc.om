@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@lang('custom.create') @lang('custom.instruction')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    @if(isset($data))
                    <li class="breadcrumb-item active">@lang('custom.edit') @lang('custom.instruction')</li>
                    @else
                    <li class="breadcrumb-item active">@lang('custom.create') @lang('custom.instruction')</li>
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
                        <h3 class="card-title">@lang('custom.edit')</h3>
                        @else
                        <h3 class="card-title">@lang('custom.create')</h3>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="newsForm1" method="POST" action="{{ url('/instructions/save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if(isset($data))
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Enter name" value="{{isset($data['id'])? $data['id'] : ""}}">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.title')</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="@lang('custom.enter') @lang('custom.title')" value="{{isset($data['title']) ? $data['title'] : ''}}">
								<span style="display:none;color: red;font-size: 13px;" id="title_error">@lang('custom.title_required')</span>
                            </div>
							 <div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.sort_order')</label>
                                <input required  type="number"  min="0"  name="sort_order" class="form-control" id="sort_order" placeholder="@lang('custom.enter') @lang('custom.sort_order')" value="{{isset($data['sort_order']) ? $data['sort_order'] : ''}}">
								<span style="display:none;color: red;font-size: 13px;" id="sort_order_error">@lang('custom.sort_order_required')</span>
                            </div>
							<div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.active_status')</label>
								<br/>
								<select  class="form-control" name="active_status">
								<option <?php if(isset($data['active_status']) && $data['active_status']==0) echo 'selected' ?> value="0">@lang('custom.disable')</option>
									<option <?php if(isset($data['active_status']) && $data['active_status']==1) echo 'selected' ?> value="1">@lang('custom.enable')</option>
									
								</select>
                            </div>
								<div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.youtube_links')</label>
								<br/>
								 <input type="text" name="youtube_links" class="form-control" id="youtube_links" placeholder="@lang('custom.enter') @lang('custom.title')" value="{{isset($data['youtube_links']) ? $data['youtube_links'] : ''}}">
							
                            </div>
                           <div class="form-group">
                                <label for="exampleInputPassword1">@lang('custom.document')</label>
                                <div class="custom-file">
								  @if(isset($data))
                                      <input  id="document_field" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf"  type="file" class="custom-file-input" name="upload_file">
								   @else
									 <input   accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf"  type="file" class="custom-file-input" id="document_field" name="upload_file">
									@endif
                                    <label class="custom-file-label" for="exampleInputFile">@lang('custom.choose_file')</label>
									<span style="display:none;color: red;font-size: 13px;" id="file_error">@lang('custom.upload_youtube_or_document')</span>
									<span style="display:none;color: red;font-size: 13px;" id="size_error">@lang('custom.file_size')</span>
                                </div>
                                </div>
								<br/>
								<br/>
								@if(isset($data['upload_file']))
									<a target="_blank" href="/upload/instructions/{{($data['upload_file'])}}"><i class="fa fa-file"></i></a>
								@endif
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
<script type="text/javascript">
	
    $(function () {
		$("#youtube_links").keyup(function(){
			document.getElementById("document_field").value = "";
		})
		 $("#document_field").change(function (){
     $("#youtube_links").val('');
     });
		$("#submit").click(function(){
			var youtube_links = $("#youtube_links").val();
			var title = $("#title").val();
			var sort_order = $("#sort_order").val();
			var document_field = $("#document_field").val();
			var error = 0;
			if(title==''){
				$('#title_error').show();
				error = 1;
			} else {
				$('#title_error').hide();
			}
			if(sort_order==''){
				$('#sort_order_error').show();
				error = 1;
			} else {
				$('#sort_order_error').hide();
			}
			var document_field = document.getElementById("document_field").files.length;
			if(youtube_links=='') {
				
				<?php if(!isset($data)) { ?>
				if(document_field==0) {
				$("#file_error").show();
				
				error = 1;
				}
				else {
					var file_size = $('#document_field')[0].files[0].size;
					//size = 5*1000*1000;
					size = 7*1000*1000;
				
					if(file_size>size) {
						error = 1;
						$("#size_error").show();
						
					} else {
						$("#size_error").hide();
					}
					$("#file_error").hide();
				}
				<?php } ?>
			} else {
				
				$("#file_error").hide();
			}				
			if(error==1)
				return false;
		})
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('index') }}",
            columns: [
                {data: 'title', name: 'title'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>

@endsection