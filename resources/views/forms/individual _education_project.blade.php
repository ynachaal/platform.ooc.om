	<?php 
	$decode = array();
	if(isset($dataUserApplications['data'])) {
	$data = json_decode($dataUserApplications['data'],true);
	
	}
	if(isset($get_data['manage_attachment']) && !empty($get_data['manage_attachment'])) {
	$decode = json_decode($get_data['manage_attachment'],true);
	}
	
	if(isset($dataUserApplications['attachments'])) {
	$attachments1 = json_decode($dataUserApplications['attachments']);
	$attachments = array();
	foreach($attachments1 as $key=>$val){
		foreach($val as $k=>$v)
		$attachments['attachment'][$k] = $v;
	}

	}
	$support_grant = array('2021'=>'2021','2022'=>'2022','2023'=>'2023','2024'=>'2024');
	$sport = array('Aquatics'=>'Aquatics','Baseball/Softball'=>'Baseball/Softball','Basketball'=>'Basketball','Curling'=>'Curling','Handball'=>'Handball','Hockey'=>'Hockey','Ice Hockey'=>'Ice Hockey','Rugby'=>'Rugby','Volleyball'=>'Volleyball','Football'=>'Football','Other'=>'Other');
	$discipline = array('Water Polo'=>'Water Polo','Baseball/Softball'=>'Baseball/Softball','Baseball'=>'Baseball','Softball'=>'Softball','3x3 Basketball'=>'3x3 Basketball','Basketball'=>'Basketball','Curling'=>'Curling','Handball'=>'Handball','Hockey'=>'Hockey','Ice Hockey'=>'Ice Hockey','Rugby Sevens'=>'Rugby Sevens','Volleyball'=>'Volleyball','Beach Volleyball'=>'Beach Volleyball','Football'=>'Football','Other'=>'Other');
	$activity_location = array('test'=>'test');
	$objective_location = array('test'=>'test');
	$locations =array("To be confirmed"=>"To be confirmed","Afghanistan"=>"Afghanistan","Albania"=>"Albania","Algeria"=>"Algeria","American Samoa"=>"American Samoa","Andorra"=>"Andorra","Angola"=>"Angola","Antigua and Barbuda"=>"Antigua and Barbuda","Argentina"=>"Argentina","Armenia"=>"Armenia","Aruba"=>"Aruba","Australia"=>"Australia","Austria"=>"Austria","Azerbaijan"=>"Azerbaijan","Bahamas"=>"Bahamas","Bahrain"=>"Bahrain","Bangladesh"=>"Bangladesh","Barbados"=>"Barbados","Belarus"=>"Belarus","Belgium"=>"Belgium","Belize"=>"Belize","Benin"=>"Benin","Bermuda"=>"Bermuda","Bhutan"=>"Bhutan","Bolivia"=>"Bolivia","Bonaire"=>"Bonaire","Bosnia and Herzegovina"=>"Bosnia and Herzegovina","Botswana"=>"Botswana","Brazil"=>"Brazil","British Virgin Islands"=>"British Virgin Islands","Brunei Darussalam"=>"Brunei Darussalam","Bulgaria"=>"Bulgaria","Burkina Faso"=>"Burkina Faso","Burundi"=>"Burundi","Cambodia"=>"Cambodia","Cameroon"=>"Cameroon","Canada"=>"Canada","Cape Verde"=>"Cape Verde","Cayman Islands"=>"Cayman Islands","Central African Republic"=>"Central African Republic","Chad"=>"Chad","Chile"=>"Chile","Peoples Republic of China"=>"Peoples Republic of China","Chinese Taipei"=>"Chinese Taipei","Colombia"=>"Colombia","Comoros"=>"Comoros","Congo"=>"Congo","Congo, the Dem. Republic of"=>"Congo, the Dem. Republic of","Cook Islands"=>"Cook Islands","Costa Rica"=>"Costa Rica","Côte d Ivoire"=>"Côte d Ivoire","Croatia"=>"Croatia","Cuba"=>"Cuba","Curaçao"=>"Curaçao","Cyprus"=>"Cyprus","Czech Republic"=>"Czech Republic","Democratic Rep. of Timor-Leste"=>"Democratic Rep. of Timor-Leste","Denmark"=>"Denmark","Djibouti"=>"Djibouti","Dominica"=>"Dominica","Dominican Republic"=>"Dominican Republic","Ecuador"=>"Ecuador","Egypt"=>"Egypt","El Salvador"=>"El Salvador","Equatorial Guinea"=>"Equatorial Guinea","Eritrea"=>"Eritrea","Estonia"=>"Estonia","Eswatini"=>"Eswatini","Ethiopia"=>"Ethiopia","Fiji"=>"Fiji","Finland"=>"Finland","France"=>"France","Gabon"=>"Gabon","Gambia"=>"Gambia","Georgia"=>"Georgia","Germany"=>"Germany","Ghana"=>"Ghana","Gibraltar"=>"Gibraltar","Great Britain"=>"Great Britain","Greece"=>"Greece","Grenada, Antilles"=>"Grenada, Antilles","Guam"=>"Guam","Guatemala"=>"Guatemala","Guinea"=>"Guinea","Guinea-Bissau"=>"Guinea-Bissau","Guyana"=>"Guyana","Haïti"=>"Haïti","Honduras"=>"Honduras","Hong Kong, China"=>"Hong Kong, China","Hungary"=>"Hungary","Iceland"=>"Iceland","India"=>"India","Indonesia"=>"Indonesia","Iran, Islamic Republic of"=>"Iran, Islamic Republic of","Iraq"=>"Iraq","Ireland"=>"Ireland","Israel"=>"Israel","Italy"=>"Italy","Jamaica"=>"Jamaica","Japan"=>"Japan","Jordan"=>"Jordan","Kazakhstan"=>"Kazakhstan","Kenya"=>"Kenya","Kiribati"=>"Kiribati","Korea, Demo. People s Rep. of"=>"Korea, Demo. People s Rep. of","Korea, Republic of"=>"Korea, Republic of","Kosovo"=>"Kosovo","Kuwait"=>"Kuwait","Kyrgyzstan"=>"Kyrgyzstan","Lao Peoples Democratic Republic"=>"Lao Peoples Democratic Republic","Latvia"=>"Latvia","Lebanon"=>"Lebanon","Lesotho"=>"Lesotho","Liberia"=>"Liberia","Libya"=>"Libya","Liechtenstein"=>"Liechtenstein","Lithuania"=>"Lithuania","Luxembourg"=>"Luxembourg","Macau"=>"Macau","Madagascar"=>"Madagascar","Malawi"=>"Malawi","Malaysia"=>"Malaysia","Maldives"=>"Maldives","Mali"=>"Mali","Malta"=>"Malta","Marshall Islands"=>"Marshall Islands","Mauritania"=>"Mauritania","Mauritius"=>"Mauritius","Mexico"=>"Mexico","Micronesia, Federated States of"=>"Micronesia, Federated States of","Moldova, Republic of"=>"Moldova, Republic of","Monaco"=>"Monaco","Mongolia"=>"Mongolia","Montenegro"=>"Montenegro","Morocco"=>"Morocco","Mozambique"=>"Mozambique","Myanmar"=>"Myanmar","Namibia"=>"Namibia","Nauru (Central Pacific)"=>"Nauru (Central Pacific)","Nepal"=>"Nepal","Netherlands"=>"Netherlands","New Zealand"=>"New Zealand","Nicaragua"=>"Nicaragua","Niger"=>"Niger","Nigeria"=>"Nigeria","Norfolk Island"=>"Norfolk Island","North Macedonia"=>"North Macedonia","Norway"=>"Norway","Oman"=>"Oman","Pakistan"=>"Pakistan","Palau"=>"Palau","Palestine"=>"Palestine","Panama"=>"Panama","Papua New Guinea"=>"Papua New Guinea","Paraguay"=>"Paraguay","Peru"=>"Peru","Philippines"=>"Philippines","Poland"=>"Poland","Portugal"=>"Portugal","Puerto Rico"=>"Puerto Rico","Qatar"=>"Qatar","Romania"=>"Romania","Russian Federation"=>"Russian Federation","Rwanda"=>"Rwanda","Saint Kitts and Nevis"=>"Saint Kitts and Nevis","Saint Lucia"=>"Saint Lucia","Saint Martin"=>"Saint Martin","Saint Vincent and the Grenadines"=>"Saint Vincent and the Grenadines","Samoa"=>"Samoa","San Marino"=>"San Marino","Sao Tome and Principe"=>"Sao Tome and Principe","Saudi Arabia"=>"Saudi Arabia","Senegal"=>"Senegal","Serbia"=>"Serbia","Seychelles"=>"Seychelles","Sierra Leone"=>"Sierra Leone","Singapore"=>"Singapore","Sint Eustatius and Saba"=>"Sint Eustatius and Saba","Sint Maarten"=>"Sint Maarten","Slovakia"=>"Slovakia","Slovenia"=>"Slovenia","Solomon Islands"=>"Solomon Islands","Somalia"=>"Somalia","South Africa"=>"South Africa","Spain"=>"Spain","Sri Lanka"=>"Sri Lanka","Sudan"=>"Sudan","Suriname"=>"Suriname","Sweden"=>"Sweden","Switzerland"=>"Switzerland","Syrian Arab Republic"=>"Syrian Arab Republic","Taiwan"=>"Taiwan","Tajikistan"=>"Tajikistan","Tanzania, United Republic of"=>"Tanzania, United Republic of","Thailand"=>"Thailand","Togo"=>"Togo","Tonga"=>"Tonga","Trinidad and Tobago"=>"Trinidad and Tobago","Tunisia"=>"Tunisia","Turkey"=>"Turkey","Turkmenistan"=>"Turkmenistan","Turks and Caicos Islands"=>"Turks and Caicos Islands","Tuvalu"=>"Tuvalu","Uganda"=>"Uganda","Ukraine"=>"Ukraine","United Arab Emirates"=>"United Arab Emirates","United States of America"=>"United States of America","Uruguay"=>"Uruguay","Uzbekistan"=>"Uzbekistan","Vanuatu"=>"Vanuatu","Venezuela"=>"Venezuela","Vietnam"=>"Vietnam","Virgin Islands, British"=>"Virgin Islands, British","Virgin Islands of the United States"=>"Virgin Islands of the United States","Yemen"=>"Yemen","Zambia"=>"Zambia","Zimbabwe"=>"Zimbabwe","Bonaire"=>"Bonaire","British Virgin Islands"=>"British Virgin Islands","Curaçao"=>"Curaçao","Gibraltar"=>"Gibraltar","Norfolk Island"=>"Norfolk Island","Sint Eustatius and Saba"=>"Sint Eustatius and Saba","Virgin Islands of the United States"=>"Virgin Islands of the United States");
	$gender = array('Male'=>'Male','Female'=>'Female');
	?>
	<style>
	   .budget_proposal {
	   width: 100%;
	   }
	   .budget {
	   width: 100%;
	   }
	   .table i{
			font-size: 18px !important;
			color: #ccc !important;
	   }
	   .sport h3{
		color: #1b85c3;
		font-size: 22px;
		font-weight: 600;
	   }
	   .sport_card{
		border-left: 4px solid #1b85c3;
		padding: 1rem;
	   }
	   .card i{
		color: red;
		font-size: 8px;
		vertical-align: middle;
	   }
	   ._btn{
		width: 100px;
	   }
	   .card h4{
		color: #1b85c3;
	   }
	   .required_error {
		   color:red;
		   font-size:11px;
	   }
	</style>
	<script>
	 var APP_URL = {!! json_encode(url('/')) !!};
	function delete_sport_additional(i) {
		$('.sport_inc_'+i+'').remove();
	}
	function delete_objective_additional(o) {
		$('.objective_inc_'+o+'').remove();
	}
	function delete_other_additional(oth) {
		$('.other_inc_'+oth+'').remove();
	}

	function submit_action() {
			var required_errors = 0;
			$('.required').each(function(){
				var value = $(this).val();
				if(value=='')
				{
					required_errors = 1;
					$(this).parent().find('.required_error').html('This field is required');
					$(this).parent().find('.required_error').show();
				}
				else {
					$(this).parent().find('.required_error').html('&nbsp;');
				}
			})
			if(required_errors==1){
				$('html, body').animate({
			scrollTop: $(".required").offset().top
		}, 2000);
				return false;
			}
	}
	$(document).ready(function(){
		$("#submit,#temporary").click(function(){
	error1 = 0;
<?php 
	if(in_array(1,$decode) && !empty($decode))
	{									
	?>
	var upload1 = document.getElementById("upload1").files.length;
if(upload1>0) {
	var file_size1 = $('#upload1')[0].files[0].size;
					size1 = 5*1000*1000;
					if(file_size1>size1) {
						error1 = 1;
						$("#size_error1").show();
					} else {
						$("#size_error1").hide();
					}
					
}
	<?php 
	}
	?>
	<?php 
	if(in_array(2,$decode) && !empty($decode))
	{									
	?>
	var upload2 = document.getElementById("upload2").files.length;
	if(upload2>0) {
		var file_size2 = $('#upload2')[0].files[0].size;
						size2 = 5*1000*1000;
						if(file_size2>size2) {
							error1 = 1;
							$("#size_error2").show();
						} else {
							$("#size_error2").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(3,$decode) && !empty($decode))
	{									
	?>
	var upload3 = document.getElementById("upload3").files.length;
	if(upload3>0) {
		var file_size3 = $('#upload3')[0].files[0].size;
						size3 = 5*1000*1000;
						if(file_size3>size3) {
							error1 = 1;
							$("#size_error3").show();
						} else {
							$("#size_error3").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(4,$decode) && !empty($decode))
	{									
	?>
	var upload4 = document.getElementById("upload4").files.length;
	if(upload4>0) {
		var file_size4 = $('#upload4')[0].files[0].size;
						size4 = 5*1000*1000;
						if(file_size4>size4) {
							error1 = 1;
							$("#size_error4").show();
						} else {
							$("#size_error4").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(5,$decode) && !empty($decode))
	{									
	?>
	var upload5 = document.getElementById("upload5").files.length;
	if(upload5>0) {
		var file_size5 = $('#upload5')[0].files[0].size;
						size5 = 5*1000*1000;
						if(file_size5>size5) {
							error1 = 1;
							$("#size_error5").show();
						} else {
							$("#size_error5").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(6,$decode) && !empty($decode))
	{									
	?>
	var upload6 = document.getElementById("upload6").files.length;
	if(upload6>0) {
		var file_size6 = $('#upload6')[0].files[0].size;
						size6 = 5*1000*1000;
						if(file_size6>size6) {
							error1 = 1;
							$("#size_error6").show();
						} else {
							$("#size_error6").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(7,$decode) && !empty($decode))
	{									
	?>
	var upload7 = document.getElementById("upload7").files.length;
	if(upload7>0) {
		var file_size7 = $('#upload7')[0].files[0].size;
						size7 = 5*1000*1000;
						if(file_size7>size7) {
							error1 = 1;
							$("#size_error7").show();
						} else {
							$("#size_error7").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(8,$decode) && !empty($decode))
	{									
	?>
	var upload8 = document.getElementById("upload8").files.length;
	if(upload8>0) {
		var file_size8 = $('#upload8')[0].files[0].size;
						size8 = 5*1000*1000;
						if(file_size8>size8) {
							error1 = 1;
							$("#size_error8").show();
						} else {
							$("#size_error8").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(9,$decode) && !empty($decode))
	{									
	?>
	var upload9 = document.getElementById("upload9").files.length;
	if(upload9>0) {
		var file_size9 = $('#upload9')[0].files[0].size;
						size9 = 5*1000*1000;
						if(file_size9>size9) {
							error1 = 1;
							$("#size_error9").show();
						} else {
							$("#size_error9").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(10,$decode) && !empty($decode))
	{									
	?>
	var upload10 = document.getElementById("upload10").files.length;
	if(upload10>0) {
		var file_size10 = $('#upload10')[0].files[0].size;
						size10 = 5*1000*1000;
						if(file_size10>size10) {
							error1 = 1;
							$("#size_error10").show();
						} else {
							$("#size_error10").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(11,$decode) && !empty($decode))
	{									
	?>
	var upload11 = document.getElementById("upload11").files.length;
	if(upload11>0) {
		var file_size11 = $('#upload11')[0].files[0].size;
						size11 = 5*1000*1000;
						if(file_size11>size11) {
							error1 = 1;
							$("#size_error11").show();
						} else {
							$("#size_error11").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(12,$decode) && !empty($decode))
	{									
	?>
	var upload12 = document.getElementById("upload12").files.length;
	if(upload12>0) {
		var file_size12 = $('#upload12')[0].files[0].size;
						size12 = 5*1000*1000;
						if(file_size12>size12) {
							error1 = 1;
							$("#size_error12").show();
						} else {
							$("#size_error12").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(13,$decode) && !empty($decode))
	{									
	?>
	var upload13 = document.getElementById("upload13").files.length;
	if(upload13>0) {
		var file_size13 = $('#upload13')[0].files[0].size;
						size13 = 5*1000*1000;
						if(file_size13>size13) {
							error1 = 1;
							$("#size_error13").show();
						} else {
							$("#size_error13").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(14,$decode) && !empty($decode))
	{									
	?>
	var upload14 = document.getElementById("upload14").files.length;
	if(upload14>0) {
		var file_size14 = $('#upload14')[0].files[0].size;
						size14 = 5*1000*1000;
						if(file_size14>size14) {
							error1 = 1;
							$("#size_error14").show();
						} else {
							$("#size_error14").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(15,$decode) && !empty($decode))
	{									
	?>
	var upload15 = document.getElementById("upload15").files.length;
	if(upload15>0) {
		var file_size15 = $('#upload15')[0].files[0].size;
						size15 = 5*1000*1000;
						if(file_size15>size15) {
							error1 = 1;
							$("#size_error15").show();
						} else {
							$("#size_error15").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(16,$decode) && !empty($decode))
	{									
	?>
	var upload16 = document.getElementById("upload16").files.length;
	if(upload16>0) {
		var file_size16 = $('#upload16')[0].files[0].size;
						size16 = 5*1000*1000;
						if(file_size16>size16) {
							error1 = 1;
							$("#size_error16").show();
						} else {
							$("#size_error16").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(17,$decode) && !empty($decode))
	{									
	?>
	var upload17 = document.getElementById("upload17").files.length;
	if(upload17>0) {
		var file_size17 = $('#upload17')[0].files[0].size;
						size17 = 5*1000*1000;
						if(file_size17>size17) {
							error1 = 1;
							$("#size_error17").show();
						} else {
							$("#size_error17").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(18,$decode) && !empty($decode))
	{									
	?>
	var upload18 = document.getElementById("upload18").files.length;
	if(upload18>0) {
		var file_size18 = $('#upload18')[0].files[0].size;
						size18 = 5*1000*1000;
						if(file_size18>size18) {
							error1 = 1;
							$("#size_error18").show();
						} else {
							$("#size_error18").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(19,$decode) && !empty($decode))
	{									
	?>
	var upload19 = document.getElementById("upload19").files.length;
	if(upload19>0) {
		var file_size19 = $('#upload19')[0].files[0].size;
						size19 = 5*1000*1000;
						if(file_size19>size19) {
							error1 = 1;
							$("#size_error19").show();
						} else {
							$("#size_error19").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(20,$decode) && !empty($decode))
	{									
	?>
	var upload20 = document.getElementById("upload20").files.length;
	if(upload20>0) {
		var file_size20 = $('#upload20')[0].files[0].size;
						size20 = 5*1000*1000;
						if(file_size20>size20) {
							error1 = 1;
							$("#size_error20").show();
						} else {
							$("#size_error20").hide();
						}
						
	}
	<?php 
	}
	?>
if(error1==1)
return false;
})
		
		$('.all_percentage').on('keyup',function(){
			var p1 = parseInt($('.p1').val());
			var p2 = parseInt($('.p2').val());
			var p3 = parseInt($('.p3').val());
			var p4 = parseInt($('.p4').val());
			var result = p1+p2+p3+p4;
			$('.result_percentage').val(result);
			if(result!=100) {
				
			$('.TOTAL_100').show();
			
			} else {
				$('.TOTAL_100').hide();
			}
		})
		$('.sport_php_delete').click(function(){
			 var check=confirm('Are you sure? Dont forget saving application to save changes.');
			if (check) {
			 attr = $(this).attr('rel');
			$('.'+attr).remove();
			} 
			
		})
		$('.object_php_delete').click(function(){
			
			 var check=confirm('Are you sure? Dont forget saving application to save changes.');
			if (check) {
			attr = $(this).attr('rel');
			$('.'+attr).remove();
			} 
			
			
			
		})
		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	<?php if(isset($dataUserApplications['id'] )) { ?>
		$('.other_files_php_delete').click(function(){
				attr = $(this).attr('rel');
				var name = 	$('.'+attr).find('.other_files').attr('rel');
				
			
			 var check=confirm('Are you sure? Dont forget saving application to save changes.');
			if (check) {
				  $.ajax({
                        url: APP_URL + "/forms/deleteattachment",
                        type: 'POST',
                        data: {name:name,id:<?php echo $dataUserApplications['id'] ?>},
                        success: function(data) {
							
							
						},
                        
                    });
			attr = $(this).attr('rel');
			$('.'+attr).remove();
			} 
			
		})
		$('.related_files_php_delete').click(function(){
				attr = $(this).attr('rel');
				var name = 	$('.'+attr).find('.related_files').attr('rel');
				
			
			 var check=confirm('Are you sure? Dont forget saving application to save changes.');
			if (check) {
				  $.ajax({
                        url: APP_URL + "/forms/deleteattachment",
                        type: 'POST',
                        data: {name:name,id:<?php echo $dataUserApplications['id'] ?>},
                        success: function(data) {
							
							
						},
                        
                    });
				$('.related_image').remove();
				$('.related_files_php_delete').remove();
				

			} 
			
		})
		
		$('.other_files_0_delete').click(function(){
				attr = $(this).attr('rel');
				var name = 	$('.'+attr).find('.other_files_0_input').attr('rel');
				
			
			 var check=confirm('Are you sure? Dont forget saving application to save changes.');
			if (check) {
				  $.ajax({
                        url: APP_URL + "/forms/deleteattachment",
                        type: 'POST',
                        data: {name:name,id:<?php echo $dataUserApplications['id'] ?>},
                        success: function(data) {
							
							
						},
                        
                    });
				$('.other_files_0_image').remove();
				$('.other_files_0_delete').remove();
				$('.notes_0').val('');
				

			} 
			
		})
		
	<?php } ?>
		var oth = 1;
		$('.other_file_button').click(function(){
			$('.other_file_additional').after('<div class="d-md-md-flex other_inc_'+oth+'"><div class="col"> <div class="table-responsive">   <table class="table table-sm table-bordered">   <thead class="thead-light"> <tr> <th>Title</th>  </tr>  </thead>  <tbody>  <tr>   <td><i><input type="file" name="attachment[other_files'+oth+']"></i></td> </tr>  </tbody> </table> </div> </div>  <div class="col"><div class="form-group">   <label>File Notes</label>   <input type="text" class="form-control" name="other_files_notes['+oth+']">  </div> </div><div style="margin:10px"> <a href="javascript:void(0);" onclick="return delete_other_additional('+oth+')" class="btn btn-danger _btn other_additional_delete">Delete</a> </div> </div>');
			oth++;
		})
		
		var s = 0;
		
		$('.sport_additional_button').click(function(){
			var sport = '<div class="card sport_card sport_inc_'+s+'"> <div class="d-md-flex align-items-center"> <div class="form-row col"> <div class="col"> <label><i class="fas fa-circle"></i> Event/Activity/Competition Name</label> <input type="text" class="form-control required" name="activity_name[]">    <div class="required_error">&nbsp;</div></div> </div>  <div class="form-row col">  <div class="col">  <label><i class="fas fa-circle"></i> Date</label>   <input type="date" class="form-control required" name="activity_date[]">    <div class="required_error">&nbsp;</div> </div></div> <div class="form-row col"> <div class="col"> <label><i class="fas fa-circle"></i> Territory/Location</label>  <select class="form-control required" name="activity_location[]" aria-label="Default select example">    <option value=""></option>';  
			<?php foreach($locations as $vals){ ?>
			sport +='<option value="<?php echo $vals ?>"><?php echo $vals ?></option>';  
			<?php } ?>
			sport +='</select>    <div class="required_error">&nbsp;</div> </div>  </div>  <div class="form-row col">    <div class="col">  <label><i class="fas fa-circle"></i> Result</label>  <input type="text" class="form-control required" name="activity_result[]"> <div class="required_error">&nbsp;</div>  </div>     </div> </div><div style="margin:10px"> <a href="javascript:void(0);" onclick="return delete_sport_additional('+s+')" class="btn btn-danger _btn sport_additional_delete">Delete</a> </div> </div>';
			$('.sport_additional').after(sport);
			s++;
		})
		
		var o = 1;
		
		$('.objective_additional_button').click(function(){
			var objective = '<div class="card sport_card objective_inc_'+o+'"> <div class="d-md-flex align-items-center">  <div class="form-row col"> <div class="col">  <label><i class="fas fa-circle"></i> Date</label> <input type="date" class="form-control required" name="objective_date[]"> <div class="required_error">&nbsp;</div>  </div>  </div>   <div class="form-row col">  <div class="col">   <label><i class="fas fa-circle"></i> Competition</label>   <input type="text" class="form-control required" name="objective_competition[]"><div class="required_error">&nbsp;</div>  </div>     </div>    <div class="form-row col">    <div class="col"> <label><i class="fas fa-circle"></i> Location</label>    <select class="form-control required" name="objective_location[]" aria-label="Default select example">       <option value=""></option>';
			 <?php foreach($locations as $vals){ ?>
			objective +='<option value="<?php echo $vals ?>"><?php echo $vals ?></option>';
			<?php } ?>
			objective +='</select><div class="required_error">&nbsp;</div>    </div>     </div>   </div><div style="margin:10px"> <a href="javascript:void(0);" onclick="return delete_objective_additional('+o+')" class="btn btn-danger _btn objective_additional_delete">Delete</a> </div> </div>';
			$('.objective_additional').after(objective);
			o++;
		})
	})

	</script>
	<style>
    table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  /* text-align: left; */
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
.budget_proposal{
    width: 100%;
}
.budget{
    width: 100%;
}
</style>
	<section class="content-header">
	   <div class="container-fluid">
		  <div class="row mb-2">
			 <div class="col-sm-6">
				<h1>Olympic Scholarships for Athletes - Beijing 2022 - Individual</h1>
			 </div>
			 <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				   <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    <li class="breadcrumb-item active">{{ $slug }}</li>
				</ol>
			 </div>
		  </div>
	   </div>
	   <!-- /.container-fluid -->
	</section>
	<section class="content">
	   <div class="container-fluid">
		  <div class="row">
			 <div class="col-md-12">
				<div class="card card-primary">
				   <div class="card-header">
					  <h3 class="card-title">Olympic Scholarships for Athletes - Beijing 2022 - Individual</h3>
				   </div>
				   <!-- /.card-header -->
				   <!-- form start -->
				   <form role="form" id="quickForm1" method="POST" action="{{ url('/forms/save_form1') }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($dataUserApplications))
                        <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />
                        @endif

                        <div class="card-body">
                            <div class="sport">
							<h3>Personal Details</h3>
							 <div class="card sport_card">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" name="given_name" class="form-control" placeholder="Given Name" value="{{isset($data['given_name'])? $data['given_name'] : ''}}">
											<div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Family Name</label>
											<input type="text" name="family_name" class="form-control" placeholder="Family Name" value="{{isset($data['family_name'])? $data['family_name'] : ''}}">
											<div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Gender</label>
											<select  name="gender"  class="form-control required" aria-label="Default select example">
												  <option value=""></option> 
												  <?php foreach($gender as $vals){ ?>
												<option <?php if(isset($data['gender']) && $data['gender']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											<div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Date of Birth</label>
											<input type="date" name="date_of_birth" class="form-control" placeholder="Enter date" value="{{isset($data['date_of_birth'])? $data['date_of_birth'] : ''}}">
											<div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label>Email address</label>
											<input type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="{{isset($data['email'])? $data['email'] : ''}}">
										</div>
									</div>
									</div>
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label>Priority</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['activity_name'][0]) && !empty($data['activity_name'][0])) echo $data['activity_name'][0] ?>" name="activity_name[]">
										</div>
									</div>
									</div>
									</div>
									<!--<div class="form-row col">
										<div class="col">
											<label>IF</label>
											<input  value="{{isset($data['if'])? $data['if'] : ''}} " type="text" name="if" type="text" class="form-control" >
											<div class="required_error">&nbsp;</div>
										</div>`
									</div>-->
								</div>
								
							 </div>                         
						 </div>
                            <div class="sport">
							<h3>Sport Selection</h3>
							 <div class="card sport_card">
								<div class="d-md-flex align-items-center">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Sport</label>
											<select class="form-control required" name="support_grant" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($support_grant as $vals){ ?>
								<option <?php if(isset($data['support_grant']) && $data['support_grant']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											<div class="required_error">&nbsp;</div>
										</div>
									</div>
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i> Discipline</label>
												<select name="discipline" class="form-control required" aria-label="Default select example">
											 <option value=""></option> 
											<?php foreach($discipline as $vals){ ?>
												<option <?php if(isset($data['discipline']) && $data['discipline']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Event</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['activity_result'][0]) && !empty($data['activity_result'][0])) echo $data['activity_result'][0] ?>" name="activity_result[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>IF</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['activity_result'][0]) && !empty($data['activity_result'][0])) echo $data['activity_result'][0] ?>" name="activity_result[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
								</div>
							 </div>   
							 </div> 
                           
                           
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">ATTACHMENTS REQUIREDالمرفقات المقترحة  </h3>
                            <table style="margin-top: 20px;">
								<?php 
								if(in_array(1,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Curriculum Vitae السيرة الذاتية </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['curriculum_vitae']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['curriculum_vitae'])}}">{{$attachments['attachment']['curriculum_vitae']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload1">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload1" name="attachment[curriculum_vitae]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error1">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(2,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Application form for the program استمارة الترشح للبرنامج</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['application_program']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['application_program'])}}">{{$attachments['attachment']['application_program']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload2">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload2" name="attachment[application_program]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error2">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(3,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Support letter from the NF خطاب تزكية من الاتحاد/اللجنة المعني</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['support_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['support_letter'])}}">{{$attachments['attachment']['support_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload3">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload3" name="attachment[support_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error3">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
									<?php 
								if(in_array(4,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Copy of passport نسخة من جواز السفر</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['copy_passport']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['copy_passport'])}}">{{$attachments['attachment']['copy_passport']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload4">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload4" name="attachment[copy_passport]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error4">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
									<?php 
								if(in_array(5,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Covering letter from the candidate خطاب تغطية من المترشح</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['covering_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['covering_letter'])}}">{{$attachments['attachment']['covering_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload5">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload5" name="attachment[covering_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error5">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(6,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Acceptance letter from the center/university/IF خطاب قبول من المركز / الجامعة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['acceptance_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['acceptance_letter'])}}">{{$attachments['attachment']['acceptance_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload6">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload6" name="attachment[acceptance_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error6">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(7,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Qualifications with transcripts المؤهلات العلمية مع كشف الدرجات</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['qualifications_transcripts']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['qualifications_transcripts'])}}">{{$attachments['attachment']['qualifications_transcripts']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload7">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload7" name="attachment[qualifications_transcripts]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error7">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(8,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> language certificate شهادة اتقان اللغة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['language_certificate']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['language_certificate'])}}">{{$attachments['attachment']['language_certificate']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload8">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload8" name="attachment[language_certificate]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error8">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(9,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Photograph صورة شخصية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['photograph']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['photograph'])}}">{{$attachments['attachment']['photograph']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload9">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload9" name="attachment[photograph]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error9">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
									<?php 
								if(in_array(10,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> A recommendation letter from a University Professor رسالة تزكية من الجامعة/الكلية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['recommendation_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['recommendation_letter'])}}">{{$attachments['attachment']['recommendation_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload10">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload10" name="attachment[recommendation_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error10">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(11,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Recommendation letter from the union/committee رسالة تزكية من الاتحاد/اللجنة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['recommendation_letter_union']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['recommendation_letter_union'])}}">{{$attachments['attachment']['recommendation_letter_union']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload11">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload11" name="attachment[recommendation_letter_union]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error11">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(12,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> cover letterرسالة التغطية </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['covering_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['covering_letter'])}}">{{$attachments['attachment']['covering_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload12">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload12" name="attachment[covering_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error12">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(13,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Detailed plan of the programالخطة التفصيلية للبرنامج   </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['detailed_action']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['detailed_action'])}}">{{$attachments['attachment']['detailed_action']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload13">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload13" name="attachment[detailed_action]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error13">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(14,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Medical certificate (validity: less than 3 months prior to the application)شهادة طبية (في مدة أقصاها 3 اشهر قبل تقديم الطلب )</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['medical_certificate']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['medical_certificate'])}}">{{$attachments['attachment']['medical_certificate']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload14">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload14" name="attachment[medical_certificate]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error14">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(15,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">For the sport-specific training: detailed description of the training course & budgetوصف مفصل للدورة التدريبية والميزانية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['sport_specific_training']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['sport_specific_training'])}}">{{$attachments['attachment']['sport_specific_training']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload15">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload15" name="attachment[sport_specific_training]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error15">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(16,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Curriculum Vitae of the proposed expert (where applicable) السيرة الذاتية للخبير المقترح ان وجد   </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['curriculum_vitae']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['curriculum_vitae'])}}">{{$attachments['attachment']['curriculum_vitae']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload16">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload16" name="attachment[curriculum_vitae]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error16">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(17,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Acceptance letter from the expert خطاب قبول من الخبير</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['acceptance_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['acceptance_letter'])}}">{{$attachments['attachment']['acceptance_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload17">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload17" name="attachment[acceptance_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error17">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(18,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">العقد Service provider’s proposal and/or contract</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['service_provider_proposal']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['service_provider_proposal'])}}">{{$attachments['attachment']['service_provider_proposal']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload18">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload18" name="attachment[service_provider_proposal]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error18">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(19,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">الجدول الزمنى للمشروع Project schedule</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['project_schedule']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['project_schedule'])}}">{{$attachments['attachment']['project_schedule']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload19">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload19" name="attachment[project_schedule]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error19">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(20,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Other attachments مرفقات أخرى</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['other_attachments']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['other_attachments'])}}">{{$attachments['attachment']['other_attachments']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload20">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload20" name="attachment[other_attachments]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error20">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
                            </table>
                            <p>يرفق الطلب مع رسالة تغطية من الاتحاد / اللجنة ويتم تحميلها عبر النظام ويتم ارسال الأصل الى البريد الرسمي للجنة الأولمبية العمانية موجهة الى الأمين العام.</p>
                            

                        </div>
                        <!-- /.card-body -->
                       <div class="card-footer">
                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                            @if(isset($data) && $dataUserApplications['status'] != 'not submitted')
                            <button id="submit" type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button id="submit"  type="submit" class="btn btn-primary">@lang('custom.save')</button>
							&nbsp;
							<button id="temporary"  name="temporary" style="margin:0 7px 0 0px" type="submit" class="btn btn-danger">@lang('custom.save_temporary')</button>
                            @endif
                            @endif
                        </div>
                    </form>
	</section>