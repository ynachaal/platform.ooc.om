@extends('layouts.admin')

@section('content')
<div class="card-body">
    <div class="form-group column">
        @foreach($program['child_programs'] as $key => $child_programs)
        <div style="float: left;" class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">{{$child_programs['title']}}</h5>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{$child_programs['description']}}</h4>
                    <p class="card-text"></p>
                    <a  href="{{ route('form-preview',['slug' => $child_programs['form_application']['slug'], 'application_id' => $program['id']])}}" class="btn btn-primary child"> التقدم للبرنامج</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!--<div class="form-group">

    @foreach($program['child_programs'] as $child_programs)

    <a  href="{{ route('form-preview',['slug' => $child_programs['form_application']['slug']])}}" class="btn btn-primary child">{{$child_programs['title']}}</a>
    @endforeach

</div>-->

@endsection
