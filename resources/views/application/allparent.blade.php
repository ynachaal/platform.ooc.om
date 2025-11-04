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

                @foreach($programs as $key => $program)
                     @if(isset($program['child_programs']))
                   
                      @if(count($program['child_programs'])) > 0)
            
                        <div style="float: left;" class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0 text_primary"> @if(isset($program['title']) && !empty($program['title'])){{$program['title']}}@endif</h5>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                      @if(isset($program['description']) && !empty($program['description'])) {!!str_limit(strip_tags($program['description']),300,'...')!!}@endif
                                    </h4>
                                    <p class="card-text"></p>
                                    <!-- <a href="{{ route('child_application',['id' => $program['id']])}}" class="btn btn-primary"> قرأت المزيد </a> -->
                                    <a href="{{ route('form-view',['application_id' => $program['id'] ])}}" class="btn btn-primary">تفاصيل البرنامج </a>

                                </div>
                            </div>
                        </div>
                        
                     @else
                     
                        <div style="float: left;" class="col-md-12">
                            <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0 text_primary">
                                            @if(isset($program['title']) && !empty($program['title']))
                                            {{$program['title']}} 
                                            @else
                                            Title not available
                                             @endif
                                         </h5>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                        @if(isset($program['description']) && !empty($program['description']))
                                        {!!str_limit(strip_tags($program['description']),300,'...')!!}
                                         @else
                   
                                            Description not available
                                        @endif
                                        </h4>
                                        <p class="card-text"></p>
                                        <a href="{{ route('form-view',['application_id' => $program['id'] ])}}" class="btn btn-primary">تفاصيل البرنامج</a>
                                    </div>
                            </div>
                        </div>
                    @endif
                 
                    
                 @endif
              
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