@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<style>
    .myClass {
        /* white-space: nowrap; */
        /* width: 39px; */
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12 m-t-20">
            <div class="card">
                <div class="card-header">
                    {{$data['title']}}
                    <span style="float: left;">{{$data['created_at']}}</span>
                </div>
                <div class="card-body col-md-12">
                    @if(!empty($data))
                    <div style="text-align: center;" class="col-md-12">
                        <a data-fancybox="gallery" href="{{url('upload/news')}}/{{$data['image']}}">
                            <img style="cursor: pointer;width:400px"  src="{{url('upload/news')}}/{{$data['image']}}" alt="user image">
                        </a>
                    </div>
                    <div style="text-align: center;" class="col-md-12 row">
                        <div style="margin: 0 auto;" class="col-md-10">
                            <p class="myClass">
                                {!! $data['description'] !!}
                            </p>
                        </div>
                    </div>
                    <div style="margin: 0 auto; text-align: center;" class="col-md-10">
                        <a class="btn btn-primary" href="{{route('home')}}">الرجوع للرئيسية</a>
                    </div>
                    @else
                    Not Found
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection