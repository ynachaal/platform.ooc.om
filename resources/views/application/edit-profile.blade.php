@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@lang('custom.edit') @lang('custom.instruction')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.profile')</a></li>
                    <li class="breadcrumb-item active">@lang('custom.edit') @lang('custom.instruction')</li>
                 

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
                   
                    <!-- /.card-header -->
                    <!-- form start -->
                     <form role="form" id="userForm" method="POST" action="{{ url('save_users') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if(isset($data))
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Enter name" value="{{isset($data['id'])? $data['id'] : ""}}">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم العضو</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="@lang('custom.enter') @lang('custom.name')" value="{{isset($data['name'])? $data['name'] : ""}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.email_placeholder')</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="@lang('custom.enter') @lang('custom.email_placeholder')" value="{{isset($data['email'])? $data['email'] : ""}}">
                            </div>
                           @if(!isset($data))
                            <div class="form-group">
                                <label for="exampleInputPassword1">@lang('custom.password_placeholder')</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="@lang('custom.enter') @lang('custom.password_placeholder')" >
                            </div>
                            @else
								@if (\Auth::user()->hasAnyRole(['Super Admin']))
                              <div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.password_placeholder')</label>
                                <input type="password" name="password1" class="form-control" id="password1" placeholder="@lang('custom.enter') @lang('custom.password_placeholder') " value="">
                            </div>
							   @endif
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">رقم الهاتف</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="@lang('custom.enter') رقم الهاتف" value="{{isset($data['phone'])? $data['phone'] : ""}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">المسمى الوظيفي</label>
                                <input type="text" name="job_title" class="form-control" id="name" placeholder="@lang('custom.enter') المسمى الوظيفي" value="{{isset($data['job_title'])? $data['job_title'] : ""}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">الصورة الشخصية </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">@lang('custom.choose_file')</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم الإتحاد أو اللجنة</label>
                                <select name="committee_id" class="form-control" >
                                    @foreach($committee as $committee)
                                        <option value="{{$committee['id']}}" {{isset($data) && $data['committee_id'] == $committee['id'] ? 'selected' : ''}}>{{$committee['committee_name']}}</option>
                                     @endforeach
                                </select>
                            </div>
                          

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            @if(isset($data))
                            <button type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button type="submit" class="btn btn-primary">@lang('custom.save')</button>
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