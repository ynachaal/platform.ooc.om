
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
            <div class="card card-primary card-outline">
                @if(!empty($data))
                <div class="card-header text_primary">
                   {{$data['title']}}
                </div>
                <div class="card-body col-md-12">

                    @if(isset($data['image']) && !empty($data['image']))
                    <div style="text-align: center;" class="col-md-12">
                        <a data-fancybox="gallery" href="{{url('upload/programs')}}/{{$data['image']}}">
                            <img style="cursor: pointer;" width="600" height="400" src="{{url('upload/programs')}}/{{$data['image']}}" alt="user image">
                        </a>
                    </div>
                    @endif
                    <div style="text-align: center;" class="col-md-12 row m-t-20">
                        <div style="margin: 0 auto;" class="col-md-10">
                            <p class="myClass">
                                {!! $data['description'] !!}
                            </p>
                        </div>
                    </div>
					
                    @if(!isset($data['child_programs']) || empty($data['child_programs']))
                    <div style="margin: 0 auto; text-align: center;" class="col-md-10">
				
				<?php 
			
				/* echo  $data['proposed_dates_from_timestamp'];
				echo '<br/>';
				echo $data['proposed_dates_to_timestamp'];
				echo '<br/>';
				echo time(); */
								if(!empty($data['proposed_dates_from_timestamp']) && !empty($data['proposed_dates_to_timestamp'])) {
									$from =  $data['proposed_dates_from_timestamp'];
									$to =   $data['proposed_dates_to_timestamp'];
									$current_time = time();
								if($current_time>=$from && $current_time<=$to)	{							
								?>
                               <a href="{{ route('form-preview',['slug' => $data['form_application']['slug'] , 'application_id' => $data['id'] ])}}" class="btn btn-primary"> التقدم للبرنامج</a>
								<?php 
								}
								} else {
									?>
									  <a href="{{ route('form-preview',['slug' => $data['form_application']['slug'] , 'application_id' => $data['id'] ])}}" class="btn btn-primary"> التقدم للبرنامج</a>
									<?php
								}									
								?>
				
                       
                    </div>
                    @endif
                </div>

                @if(isset($data['child_programs']) && !empty($data['child_programs']))
                <div class="form-group column">
                    @foreach($data['child_programs'] as $key => $child_programs)
                    <div style="float: left;" class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0 text_primary">{{$child_programs['title']}}</h5>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                {!!str_limit(strip_tags($child_programs['description']),300,'...')!!}
                                </h4>
                                <p class="card-text"></p>
                                <!-- <a href="{{ route('form-preview',['slug' => $child_programs['form_application']['slug'], 'application_id' => $data['id']])}}" class="btn btn-primary child"> التقدم للبرنامج</a> -->
                                <a href="{{ route('form-view',['application_id' => $child_programs['id'] ])}}" class="btn btn-primary"> قرأت المزيد</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @else
                Not Found
                @endif
            </div>
        </div>
    </div>
</div>

@endsection