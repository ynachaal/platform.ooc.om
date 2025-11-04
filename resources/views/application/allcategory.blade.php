@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>البرامج</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">البرامج</a></li>
                    <li class="breadcrumb-item active">الرئيسية</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">البرامج النشطة</h3>

            <div class="card-tools">
                <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button> -->
            </div>
        </div>
        <div class="card-body">
            <div class="form-group column">
                @foreach($category as $key => $c)
                   
                    <div style="float: left;" class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0 text_primary">{{$c['name']}}</h5>
                                <a href="{{ url('application_category',['category_id' => $c['id'] ])}}" class="btn btn-primary" style="margin-top: 10px;">مشاهدة البرامج</a>
                            </div>
                        </div>
                    </div>
                    
                @endforeach

                
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection