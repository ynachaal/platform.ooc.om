@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">@lang('custom.dashbord')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    <li class="breadcrumb-item active">@lang('custom.dashbord')</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<?php
$news_count = \App\News::get()->toArray();
$programs_count = \App\UserApplications::get()->toArray();
$closed_programs_count = \App\UserApplications::where('status', 'closed')->get()->toArray();
$users_count = \App\User::role('User')->get()->toArray();
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$active}}</h3>

                        <p>@lang('custom.under_review')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>

                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                         <h3>{{$rejected}}</h3>

                        <p>@lang('custom.rejected')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$approved}}</h3>

                        <p>@lang('custom.approved')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                           <h3>{{$closed}}</h3>

                        <p>@lang('custom.closed')</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<div class="col-md-12">
    <div class="card">
        <div class="card-header"> الأخبار</div>
        <div class="card-body col-md-12">
            @foreach($data as $key => $value)
            <div class="post">
                <div class="user-block">
                    <span class="username">
                        <a href="#">{{$value['title']}}</a>
                    </span>
                    <span class="description">Published on - {{$value['created_at']}}</span>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-2">
                        @if(!empty($value['image']))
                        <img width="150" height="150" src="{{url('upload/news')}}/{{$value['image']}}" alt="user image">
                        @else
                        <img width="150" height="150" src="{{url('images/no_image.png')}}" alt="No image">
                        @endif
                    </div>
                    <div class="col-md-10">
                        <p class="myClass">
                            {!!str_limit(strip_tags($value['description']),300,'...')!!}
                        </p>
                        <a href="{{route('news_view', ['id' => $value['id']])}}" class="btn btn-primary">
                            إقراء المزيد
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{ $data->links() }}

@endsection