<?php 
$total_budget = 0;
?>
<table>
	<tr>
		<th>الرقم</th>
		<th>تاريخ تقديم الطلب</th>
		<th>اسم المستخدم</th>
		<th>اسم الإتحاد أو اللجنة</th>
		<th>عنوان البرنامج</th> 
		<th>@lang('custom.active_status')</th>
		<th>@lang('custom.allocated')</th>
		<th>@lang('custom.total_budget')</th>
	</tr>
	
	<?php 
	$i = 1;
	foreach($data as $vals) { 
	$total_budget += $vals['approved_budget'];
	?>
	<tr>
	<td><?php echo $i ?></td>
		<td><?php echo $vals['created_at'] ?></td>
		<td><?php if(isset($vals['user']['name'])) echo $vals['user']['name'] ?></td>
		<td><?php if(isset($vals['user']['committee']['committee_name'])) echo $vals['user']['committee']['committee_name'] ?></td> 
		<td><?php if(isset($vals['application']['title'])) echo $vals['application']['title'] ?></td> 
		<td><?php
							$status = $vals['status'];
							if($status=='accept temporary') 
							$label = trans('custom.accepted_temporary');
						else if($status=='accepted') 
							$label = trans('custom.accepted');
						else if($status=='closed') 
							$label = trans('custom.closed');
						else if($status=='rejected') 
							$label = trans('custom.rejected');
						else if($status=='request not completed') 
							$label = trans('custom.request_not_completed');
						else if($status=='under review') 
							$label = trans('custom.under_review');
						else 
							$label = $status;
						
						echo $label;
		?></td>
		<td><?php echo $vals['down_payment'] ?></td>
		<td><?php echo $vals['approved_budget'] ?></td>
	</tr>
	<?php 
	$i++;
	} ?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td> 
		<td></td> 
		<td></td>
		<td>@lang('custom.total_budget')</td>
		<td><?php echo $total_budget ?></td>
	</tr>
</table>