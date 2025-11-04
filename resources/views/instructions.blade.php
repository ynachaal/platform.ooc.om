	@extends('layouts.admin')

	@section('content')
	<?php $frame = ''; ?>
	<div class="content-header">
		<div class="container-fluid">
			<h1 class="mb-3 text-dark">@lang('custom.instructions')</h1>
		</div>
		<div class="row">
		  @if (empty($data))
		 <div>No content to show here</div>
		@else
			@foreach ($data as $data_val)
		
		<?php  
		if(isset($data_val['upload_file']) && !empty($data_val['upload_file'])) { 
		$inner_url = url('/upload/instructions/'.$data_val['upload_file']);
		$frame =  '<iframe src="'.$inner_url.'" scrolling="no" frameborder="0" frameborder="0"></iframe>';
		
		
		?>

		<?php
		} else {
		
		if(isset($data_val['youtube_links']) && !empty($data_val['youtube_links'])) { 	
		$inner_url = $data_val['youtube_links'];
		parse_str( parse_url( $inner_url, PHP_URL_QUERY ), $my_array_of_vars );
		if(isset($my_array_of_vars['v'] ))
		{
		$yurl = $my_array_of_vars['v'];    
		$frame_url = 'https://www.youtube.com/embed/'.$yurl.'';
		  // Output: C4kxS1ksqtw
	 
		$frame = '<iframe width="560" height="315" src="'.$frame_url.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		}
		}
		}
		?>
	   <div class="col-md-4">
				<div class="card instructions_card">
				<?php echo $frame ?>
					<div class="card-body instructions_body">
						<a href="<?php echo $inner_url ?>" class="text-decoration-none instructions_title stretched-link" target="_blank">{{$data_val['title']}}</a>
					
					</div>
				</div>
			</div>
	@endforeach
		 @endif
		</div>
	  
			
	</div>
	{{ $data->links() }}
	@endsection