@extends('layouts.admin')

@section('content')

<style>
    .myClass {
        /* white-space: nowrap; */
        /* width: 39px; */
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css" />
<!-- <script src="../node_modules/jquery/dist/jquery.js"></script> -->
<script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>

<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">الرئيسية</div>

                <div class="card-body col-md-12" style="margin: 0 auto;">
                    <div class="owl-carousel owl-theme" dir="ltr">
                        @foreach(\App\Slider::orderBy('order_by', 'asc')->get()->toArray() as $key => $value)
                        <div> <img width="1000" height="250" src="{{url('upload/slider')}}/{{$value['image']}}" /> </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> الأخبار</div>
                <div class="card-body col-md-12">
                    @foreach($data as $key => $value)
                    <div class="post">
                        <div class="user-block">
                            <span class="username">
                                <a href="#">{{$value->title}}</a>
                            </span>
                            <span class="description">Published on - {{$value->created_at}}</span>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-2">
                                @if(!empty($value->image))
                                <img width="150"  src="{{url('upload/news')}}/{{$value->image}}" alt="user image">
                                @else
                                <img width="150"  src="{{url('images/no_image.png')}}" alt="No image">
                                @endif
                            </div>
                            <div class="col-md-10">
                                <p class="myClass">
                                    {!!str_limit(strip_tags($value['description']),300,'...')!!}
                                </p>
                                <a href="{{route('news_view', ['id' => $value->id])}}" class="btn btn-primary">
                                إقراء المزيد
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{ $data->links() }}
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 1,
            margin: 10,
            autoHeight: false,
            rtl: false,
            nav: true,
            dots: true,
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        });
    });
</script>

@endsection