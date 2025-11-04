@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>الفئة المستهدفة</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    @if(isset($data))
                    <li class="breadcrumb-item active">@lang('custom.edit') الفئة</li>
                    @else
                    <li class="breadcrumb-item active">إضافة فئة</li>
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
                        <h3 class="card-title">@lang('custom.edit') الفئة المستهدفة</h3>
                        @else
                        <h3 class="card-title">@lang('custom.create') الفئة المستهدفة</h3>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="newsForm" method="POST" action="{{ url('/category/save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            @if(isset($data))
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control" id="id" value="{{isset($data['id'])? $data['id'] : ''}}">
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="@lang('custom.enter') @lang('custom.title')" value="{{isset($data['name']) ? $data['name'] : ''}}">
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