@extends('layouts.admin')

@section('content')


<div><h2 style=" padding: 20px;">Notifications</h2></div>
<div class="card-body">
    <div class="col-md-12 row" style="display: block;" id="remark_div">
        <div class="form-group col-md-12">
		<ul class="list-group">
		  @if (empty($count))
		 <div style=" padding: 20px;">No content to show here</div>
		@else
			@foreach ($data as $data_val)
		  			  <li class="list-group-item">Date : <?php 
			$timestamp = strtotime($data_val['created_at']);
			echo $date = date('d-m-Y',$timestamp);
			?> <br/><br/> Details : {{$data_val['notification_text']}}
			<br/>
			<br/>
			<?php if($data_val['type']=='member_attachment') { ?>
			<a href="{{url('/')}}/application/upload_document/{{$data_val['target_id']}}"><button type="button" class="btn btn-primary">View Application</button>
			</a>
			<?php } else { ?>
			<a href="{{url('/')}}/application/active_edit/{{$data_val['target_id']}}"><button type="button" class="btn btn-primary">View Application</button>
			</a>
			<?php } ?>
			</li>
					  @endforeach
		 @endif
		  			  			</ul>
           
        </div>
    </div>
</div>

{{ $data->links() }}
@endsection