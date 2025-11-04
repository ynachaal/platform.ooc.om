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

$permission_activity = array('Yes'=>'Yes','No'=>'No');
	$support_grant = array('2021'=>'2021','2022'=>'2022','2023'=>'2023','2024'=>'2024');
	$discipline = array('Swimming'=>'Swimming','Marathon Swimming'=>'Marathon Swimming','Diving'=>'Diving','Artistic Swimming'=>'Artistic Swimming','Water Polo'=>'Water Polo','Archery'=>'Archery','Athletics'=>'Athletics','Badminton'=>'Badminton','Baseball'=>'Baseball','3x3 Basketball'=>'3x3 Basketball','Basketball'=>'Basketball','Biathlon'=>'Biathlon','Bobsleigh'=>'Bobsleigh','Skeleton'=>'Skeleton','Boxing'=>'Boxing','Slalom'=>'Slalom','Sprint'=>'Sprint','Curling'=>'Curling','BMX Freestyle'=>'BMX Freestyle','BMX Racing'=>'BMX Racing','Mountain Bike'=>'Mountain Bike','Road'=>'Road','Track'=>'Track','Dressage'=>'Dressage','Eventing'=>'Eventing','Jumping'=>'Jumping','Fencing'=>'Fencing','Football'=>'Football','Golf'=>'Golf','Artistic'=>'Artistic','Rhythmic'=>'Rhythmic','Trampoline'=>'Trampoline','Handball'=>'Handball','Hockey'=>'Hockey','Ice Hockey'=>'Ice Hockey','Judo'=>'Judo','Kata'=>'Kata','Kumite'=>'Kumite','Luge'=>'Luge','Modern Pentathlon'=>'Modern Pentathlon','Rowing'=>'Rowing','Rugby Sevens'=>'Rugby Sevens','Sailing'=>'Sailing','Shooting'=>'Shooting','Skateboarding'=>'Skateboarding','Speed Skating'=>'Speed Skating','Short Track Speed Skating'=>'Short Track Speed Skating','Figure Skating'=>'Figure Skating','Ski Jumping'=>'Ski Jumping','Cross-Country Skiing'=>'Cross-Country Skiing','Nordic Combined'=>'Nordic Combined','Alpine Skiing'=>'Alpine Skiing','Freestyle Skiing'=>'Freestyle Skiing','Snowboard'=>'Snowboard','Sport Climbing'=>'Sport Climbing','Surfing'=>'Surfing','Table Tennis'=>'Table Tennis','Taekwondo'=>'Taekwondo','Tennis'=>'Tennis','Triathlon'=>'Triathlon','Volleyball'=>'Volleyball','Beach Volleyball'=>'Beach Volleyball','Weightlifting'=>'Weightlifting','Freestyle'=>'Freestyle','Greco-Roman'=>'Greco-Roman','Softball'=>'Softball','Baseball/Softball'=>'Baseball/Softball','Breaking'=>'Breaking','Other'=>'Other');

$sport = array('Aquatics'=>'Aquatics','Archery'=>'Archery','Athletics'=>'Athletics','Badminton'=>'Badminton','Baseball/Softball'=>'Baseball/Softball','Basketball'=>'Basketball','Biathlon'=>'Biathlon','Bobsleigh'=>'Bobsleigh','Boxing'=>'Boxing','Canoe Sport'=>'Canoe Sport','Curling'=>'Curling','Cycling Sport'=>'Cycling Sport','Equestrian'=>'Equestrian','Fencing'=>'Fencing','Football'=>'Football','Golf'=>'Golf','Gymnastics Sport'=>'Gymnastics Sport','Handball'=>'Handball','Hockey'=>'Hockey','Ice Hockey'=>'Ice Hockey','Judo'=>'Judo','Karate'=>'Karate','Luge'=>'Luge','Modern Pentathlon'=>'Modern Pentathlon','Rowing'=>'Rowing','Rugby'=>'Rugby','Sailing'=>'Sailing','Shooting'=>'Shooting','Skateboarding'=>'Skateboarding','Skating'=>'Skating','Skiing'=>'Skiing','Sport Climbing'=>'Sport Climbing','Surfing'=>'Surfing','Table Tennis'=>'Table Tennis','Taekwondo'=>'Taekwondo','Tennis'=>'Tennis','Triathlon'=>'Triathlon','Volleyball'=>'Volleyball','Weightlifting'=>'Weightlifting','Wrestling'=>'Wrestling','DanceSport'=>'DanceSport','Other'=>'Other');

$option = array('Multisport project'=>'Multisport project','Physical Conditioning project'=>'Physical Conditioning project','Sport term pre-visit'=>'Sport term pre-visit','Sport-based project'=>'Sport-based project');

$level_activity = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5');

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
		.fa-circle{margin: 5px;}
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
				<h1>Technical Courses for Coaches</h1>
			 </div>
			 <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				   <li class="breadcrumb-item"><a href="#">Home</a></li>
				   <li class="breadcrumb-item active">Technical Courses for Coaches</li>
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
					  <h3 class="card-title">Technical Courses for Coaches</h3>
				   </div>
				   <!-- /.card-header -->
				   <!-- form start -->
				   <form role="form" id="quickForm1" method="POST" action="{{ url('/forms/save_form1') }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($dataUserApplications))
                        <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />
                        @endif

                        <div class="card-body">
                              <input type="hidden" name="application_id" class="form-control" placeholder="Committee Name" value="{{$application_id}}">
						 
							 
						   
						   @if (( \Auth::user()->hasAnyRole(['User'])) && ((isset($dataUserApplications['status']) &&  $dataUserApplications['status'] == 'not submitted') || !isset($dataUserApplications)))
						 <a href="javascript:void(0);" class="btn btn-success _btn sport_additional_button">Add</a>
					  @endif
						 <div class="sport mt-3">
							 <div class="card sport_card ">
										<div class="row">
										<div class="col-md-12">
									<div class="form-row col">
										 
								<p><i class="fas fa-circle"></i>Activity</p>
								<input type="text"   name="activity1" class="form-control required" placeholder="Activity" value="<?php if(isset($data['activity1']) && !empty($data['activity1'])) echo $data['activity1'] ?>">
								<div class="required_error">&nbsp;</div>
								</div> 
									</div>
									 
									 
									</div>
								</div>
                                  <br>

                                    <h4>Sport Selection</h4>
								<div class="card sport_card ">
					 
										<div class="row">
  
									 <div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Sport Selection</label>
											<select class="form-control required" name="sport1" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($sport as $vals){ ?>
								<option <?php if(isset($data['sport1']) && $data['sport1']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Discipline Selection</label>
											<select class="form-control required" name="discipline1" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($discipline as $vals){ ?>
								<option <?php if(isset($data['discipline1']) && $data['discipline1']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 <div class="col-md-4">
									<div class="form-row col">
										 
								<label><i class="fas fa-circle"></i>Other(discipline)</label>
								<input type="text"   name="discipline2" class="form-control required" placeholder="other" value="<?php if(isset($data['discipline2']) && !empty($data['discipline2'])) echo $data['discipline2'] ?>">
								<div class="required_error">&nbsp;</div>
								</div> 
									</div> 

									<div class="col-md-12">
									<div class="form-row col">
										 
								<p><i class="fas fa-circle"></i>How and why did you select this sport/course?</p>
								<input type="text"   name="other2" class="form-control required" placeholder=" " value="<?php if(isset($data['other2']) && !empty($data['other2'])) echo $data['other2'] ?>">
								<div class="required_error">&nbsp;</div>
								</div> 
									</div> 
									</div>
								</div>
                                    <br>
                                   
	                      
<br>
 
                                 <h3>Technical Course Details</h3>
 <div class="card sport_card" style="width: 100%;
    float: left;">
   
										<div class="row">
											 
                       <div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Course Options</label>
											<select  name="option"  class="form-control required" aria-label="Default select example">
												  <option value=""></option> 
												  <?php foreach($option as $vals){ ?>
												<option <?php if(isset($data['option']) && $data['option']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 <div class="col-md-6">
									<label><i class="fas fa-circle"></i>Course Options</label>
                                    <div class="col-md-2">
                      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="career_ststus1" value="Women" {{isset($data['career_ststus1']) && $data['career_ststus1']  == "Women" ? 'checked' : ''}} />
  <label class="form-check-label" for="inlineCheckbox1">Women</label>
</div>
</div>
<div class="col-md-2">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="career_ststus2" value="National" {{isset($data['career_ststus2']) && $data['career_ststus2']  == "National" ? 'checked' : ''}} />
  <label class="form-check-label" for="inlineCheckbox2"> National</label>
</div>
</div>
<div class="col-md-2">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Regional" name="career_ststus3"  {{isset($data['career_ststus3']) && $data['career_ststus3']  == "Regional" ? 'checked' : ''}}/>
  <label class="form-check-label" for="inlineCheckbox2">Regional</label>
</div>
</div>
<div class="col-md-2">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Educators training" name="career_ststus4"  {{isset($data['career_ststus4']) && $data['career_ststus4']  == "Educators training" ? 'checked' : ''}}/>
  <label class="form-check-label" for="inlineCheckbox2">Educators training</label>
</div>
</div>
 </div>	 
	 <div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Level</label>
											<select  name="level_activity"  class="form-control required" aria-label="Default select example">
												  <option value=""></option> 
												  <?php foreach($level_activity as $vals){ ?>
												<option <?php if(isset($data['level_activity']) && $data['level_activity']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
								</div>
									<br>

	           <h3>Proposed Course Dates</h3>
 <div class="card sport_card Diploma_Certificate1111111" id="container" style="width: 100%;
    float: left;">
    
							 	
					<?php
					 if(!empty($data['start_date']) &&  !empty($data['end_date']))
					 {
					$num=count($data['start_date']);
					$amount=count($data['end_date']);
					for($i=0;$i<$num;$i++)
				{
				?>	
               
				<div class="row">

                       <div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Start Date</label>
											<input type="date" value="<?php if(isset($data['start_date'][$i]) && !empty($data['start_date'][$i])) echo $data['start_date'][$i] ?>" class="form-control required" name="start_date[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>End Date</label>
											<input type="date" value="<?php if(isset($data['end_date'][$i]) && !empty($data['end_date'][$i])) echo $data['end_date'][$i] ?>" class="form-control required toSum" name="end_date[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				 <?php }} else{ ?>
				 <div class="row">
											 
                       <div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Start Date</label>
											<input type="date" value="<?php if(isset($data['start_date']) && !empty($data['start_date'])) echo $data['start_date'] ?>" class="form-control required" name="start_date[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>End Date</label>
											<input type="date" value="<?php if(isset($data['end_date']) && !empty($data['end_date'])) echo $data['end_date'] ?>" class="form-control required toSum" name="end_date[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				<?php } ?>
							
									 </div>
									 <div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_Diploma_Certificate">Add Courses Dates,if modular</button>
								</div>
									 <br>		 
							 
						<br>
					  
									 <br>


<div class="sport mt-3">
	<h4>Participants</h4>
   
  
										<div class="row">
 
										<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>No. of Men</label>
											<input type="text" value="<?php if(isset($data['no_of_man'][0]) && !empty($data['no_of_man'][0])) echo $data['no_of_man'][0] ?>" class="form-control required" name="no_of_man[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>No. of Women  </label>
											<input type="text" value="<?php if(isset($data['no_of_women'][0]) && !empty($data['no_of_women'][0])) echo $data['no_of_women'][0] ?>" class="form-control required" name="no_of_women[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Total No. of Participants</label>
											<input type="text" value="<?php if(isset($data['no_of_participate'][0]) && !empty($data['no_of_participate'][0])) echo $data['no_of_participate'][0] ?>" class="form-control required" name="no_of_participate[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Do you have a list of participants?</label>
											<select  name="permission_activity"  class="form-control required" aria-label="Default select example">
												  <option value=""></option> 
												  <?php foreach($permission_activity as $vals){ ?>
												<option <?php if(isset($data['permission_activity']) && $data['permission_activity']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
                                  <div class="col-md-12">
									  <h4>Technical Information</h4>
									</div>
                                       <div class="col-md-12">
									<p><i class="fas fa-circle"></i>Programme Contents Summary</p>
										<textarea cols="10" rows="10" name="year_4" class="form-control textarea required">{{isset($data['year_4'])? $data['year_4'] : ''}}</textarea> 
										<div class="required_error">&nbsp;</div>  
										 </div>

										<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>City</label>
											<input type="text" value="<?php if(isset($data['city_add'][0]) && !empty($data['city_add'][0])) echo $data['city_add'][0] ?>" class="form-control required" name="city_add[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Venue</label>
											<input type="text" value="<?php if(isset($data['venue'][0]) && !empty($data['venue'][0])) echo $data['venue'][0] ?>" class="form-control required" name="venue[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
                                   <div class="col-md-12">
									<p><i class="fas fa-circle"></i>Materials available for practical / technical sessions and online modules, where applicable</p>
										<textarea cols="10" rows="10" name="year_4" class="form-control textarea required">{{isset($data['year_4'])? $data['year_4'] : ''}}</textarea>    </div>
										 <div class="col-md-12">
									<p>Other Information</p>
										<textarea cols="10" rows="10" name="year_5" class="form-control textarea required">{{isset($data['year_5'])? $data['year_5'] : ''}}</textarea>  
                                         <div class="required_error">&nbsp;</div>
										  </div>

										<div class="col-md-6">
                        <label><i class="fas fa-circle"></i>Has your NF already submitted all the relevant technical details to its respective IF?</label>
                                     
                                    <br>
                                    
                      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="advance_payment1" value="Yes" {{isset($data['advance_payment1']) && $data['advance_payment1']  == "Yes" ? 'checked' : ''}}/>
  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
 
</div>
 
 
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="advance_payment2" value="No" {{isset($data['advance_payment2']) && $data['advance_payment2']  == "No" ? 'checked' : ''}}/>
  <label class="form-check-label" for="inlineCheckbox2">No</label>
 
</div> 
 </div>
<div class="col-md-6">
                        <label><i class="fas fa-circle"></i>Does your NFhave a database for the follow-up of the active coaches?</label>
                                     
                                    <br>
                                    
                      <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="advance_payment" value="Yes" {{isset($data['advance_payment']) && $data['advance_payment']  == "Yes" ? 'checked' : ''}}/>
  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
 
</div>
 
 
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="advance_paymentt" value="No" {{isset($data['advance_paymentt']) && $data['advance_paymentt']  == "No" ? 'checked' : ''}}/>
  <label class="form-check-label" for="inlineCheckbox2">No</label>
 
</div> 
 </div> 
<div class="col-md-12">
									<p><i class="fas fa-circle"></i>What is the current status of your NF's coaching education structure?</p>
										<textarea cols="10" rows="10" name="year_6" class="form-control textarea required">{{isset($data['year_6'])? $data['year_6'] : ''}}</textarea>  
                                         <div class="required_error">&nbsp;</div>
										  </div>

	 <h3>Contact person within the NF</h3>
 
 <div class="card sport_card contact_person15453" id="container" style="width: 100%;
    float: left;">
     
					<?php
					 if(!empty($data['family_name']) && is_array($data['family_name']))
					 {
					$num=count($data['family_name']);
					//$amount=count($data['amount1']);
					for($i=0;$i<$num;$i++)
				{
				?>	
               
				<div class="row">

                       <div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Family Name</label>
											<input type="text" value="<?php if(isset($data['family_name'][$i]) && !empty($data['family_name'][$i])) echo $data['family_name'][$i] ?>" class="form-control required" name="family_name[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" value="<?php if(isset($data['given_name'][$i]) && !empty($data['given_name'][$i])) echo $data['given_name'][$i] ?>" class="form-control required toSum" name="given_name[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select class="form-control required" name="locations[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($locations as $vals){ ?>
								<option <?php if(isset($data['locations'][$i]) && $data['locations'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Email</label>
											<input type="text" value="<?php if(isset($data['email_add'][$i]) && !empty($data['email_add'][$i])) echo $data['email_add'][$i] ?>" class="form-control required toSum" name="email_add[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Mobile</label>
											<input type="text" value="<?php if(isset($data['phone_c'][$i]) && !empty($data['phone_c'][$i])) echo $data['phone_c'][$i] ?>" class="form-control required" name="phone_c[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				 <?php }} else{ ?>
				 <div class="row">
											 
                       <div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Family Name</label>
											<input type="text" value="<?php if(isset($data['family_name']) && !empty($data['family_name'])) echo $data['family_name'] ?>" class="form-control required" name="family_name[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" value="<?php if(isset($data['given_name']) && !empty($data['given_name'])) echo $data['given_name'] ?>" class="form-control required toSum" name="given_name[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select class="form-control required" name="locations[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($locations as $vals){ ?>
								<option <?php if(isset($data['locations']) && $data['locations']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Email</label>
											<input type="text" value="<?php if(isset($data['email_add']) && !empty($data['email_add'])) echo $data['email_add'] ?>" class="form-control required toSum" name="email_add[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Mobile</label>
											<input type="text" value="<?php if(isset($data['phone_c']) && !empty($data['phone_c'])) echo $data['phone_c'] ?>" class="form-control required" name="phone_c[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				<?php } ?>
							
									 </div>
									 <div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_contact_person">Add</button>
								</div>
									 <br>		 
							 
						<br>
					 



<h3>Proposed Expert(s)</h3>
 
 <div class="card sport_card add_section_area_new_new" id="container" style="width: 100%;
    float: left;">
     
					<?php
					 if(!empty($data['given_name1']))
					 {
					$num=count($data['given_name1']);
					 
					for($i=0;$i<$num;$i++)
				{
				?>	
               
				<div class="row">
                    <div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" value="<?php if(isset($data['given_name1'][$i]) && !empty($data['given_name1'][$i])) echo $data['given_name1'][$i] ?>" class="form-control required toSum" name="given_name1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
                       <div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Family Name</label>
											<input type="text" value="<?php if(isset($data['family_name1'][$i]) && !empty($data['family_name1'][$i])) echo $data['family_name1'][$i] ?>" class="form-control required" name="family_name1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 <div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Gender</label>
											<select class="form-control required" name="gender[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($gender as $vals){ ?>
								<option <?php if(isset($data['gender'][$i]) && $data['gender'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select class="form-control required" name="locations42[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($locations as $vals){ ?>
								<option <?php if(isset($data['locations42'][$i]) && $data['locations42'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Email Address</label>
											<input type="text" value="<?php if(isset($data['email_add1'][$i]) && !empty($data['email_add1'][$i])) echo $data['email_add1'][$i] ?>" class="form-control required toSum" name="email_add1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Phone Number</label>
											<input type="text" value="<?php if(isset($data['phone_c1'][$i]) && !empty($data['phone_c1'][$i])) echo $data['phone_c1'][$i] ?>" class="form-control required" name="phone_c1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Sport</label>
											<select class="form-control required" name="sport42[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($sport as $vals){ ?>
								<option <?php if(isset($data['sport42'][$i]) && $data['sport42'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Discipline </label>
											<select class="form-control required" name="discipline4[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($discipline as $vals){ ?>
								<option <?php if(isset($data['discipline4'][$i]) && $data['discipline4'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 <div class="col-md-4">
									<div class="form-row col">
										 
								<label><i class="fas fa-circle"></i>Other Discipline</label>
								<input type="text"   name="other_desc2[]" class="form-control required" placeholder="other" value="<?php if(isset($data['other_desc2'][$i]) && !empty($data['other_desc2'][$i])) echo $data['other_desc2'][$i] ?>">
								<div class="required_error">&nbsp;</div>
								</div> 
									</div>

									 
				</div>
				 <?php }} else{ ?>
				 <div class="row">
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" value="<?php if(isset($data['given_name1']) && !empty($data['given_name1'])) echo $data['given_name1'] ?>" class="form-control required toSum" name="given_name1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>		 
                       <div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Family Name</label>
											<input type="text" value="<?php if(isset($data['family_name1']) && !empty($data['family_name1'])) echo $data['family_name1'] ?>" class="form-control required" name="family_name1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Gender</label>
											<select class="form-control required" name="gender[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($gender as $vals){ ?>
								<option <?php if(isset($data['gender']) && $data['gender']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select class="form-control required" name="locations42[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($locations as $vals){ ?>
								<option <?php if(isset($data['locations42']) && $data['locations42']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Email</label>
											<input type="text" value="<?php if(isset($data['email_add1']) && !empty($data['email_add1'])) echo $data['email_add1'] ?>" class="form-control required toSum" name="email_add1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Mobile</label>
											<input type="text" value="<?php if(isset($data['phone_c1']) && !empty($data['phone_c1'])) echo $data['phone_c1'] ?>" class="form-control required" name="phone_c1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Sport </label>
											<select class="form-control required" name="sport42[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($sport as $vals){ ?>
								<option <?php if(isset($data['sport42']) && $data['sport42']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-2">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Discipline </label>
											<select class="form-control required" name="discipline4[]" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($discipline as $vals){ ?>
								<option <?php if(isset($data['discipline4']) && $data['discipline4']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 <div class="col-md-2">
									<div class="form-row col">
										 
								<label><i class="fas fa-circle"></i>Other(discipline)</label>
								<input type="text"   name="other_desc2[]" class="form-control required" placeholder="other" value="<?php if(isset($data['other_desc2']) && !empty($data['other_desc2'])) echo $data['other_desc2'] ?>">
								<div class="required_error">&nbsp;</div>
								</div> 
									</div>
									 
				</div>
				<?php } ?>
							
									 </div>
									 <div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_section_new">Add</button>
								</div>
									 <br>		 
						<br>
	  </div>

<h3> Budget Proposal </h3>
	  <div class="card sport_card add_Diploma_Certificate_new11" id="container2" style="width: 100%;
    float: left;">
     
	<p>N,B:Experts' expensess(per diem+international travel)should be included in the NOC budget breakdown ONLY for multisport courses organised directly by the NOC.</p>
	 
	<p>Any new expensess not listed below should be submitted to OS for pre-approval,otherwise they may not be covered through the OS budgel.</p>
	 
	<h3>Detailed breakdown of budget requested from Olympic</h3>
							 	
					<?php
					 //if(!empty($data['description_new']))
					 if(!empty($data['description']))
					 {
					//$num=count($data['description_new']);
					$num=count($data['description']);
					$amount=count($data['amount']);
					for($i=0;$i<$num;$i++)
				{
				?>	
               
				<div class="row">
 
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Description(002)</label>
											<input type="text" value="<?php if(isset($data['description'][$i]) && !empty($data['description'][$i])) echo $data['description'][$i] ?>" class="form-control required" name="description[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Amount(USD)(002)</label>
											<input type="text" value="<?php if(isset($data['amount'][$i]) && !empty($data['amount'][$i])) echo $data['amount'][$i] ?>" class="form-control required toSum2" name="amount[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				 <?php }} else{ ?>
				 <div class="row">
											 
                      

									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Description(002)</label>
											<input type="text" value="<?php if(isset($data['description']) && !empty($data['description'])) echo $data['description'] ?>" class="form-control required" name="description[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Amount(USD)(002)</label>
											<input type="text" value="<?php if(isset($data['amount']) && !empty($data['amount'])) echo $data['amount'] ?>" class="form-control required toSum2" name="amount[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				<?php } ?>



							
									 </div>
									 <div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_Diploma_Certificate_new111">Add</button>
								</div>
									 <br>		 
							 
						<br>
						<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Total budget requested(USD)</label>
											<input type="text" placeholder="0" value="" class="form-control required" name="" id="totalSum2">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

<script type="text/javascript">
	$('#add').click(function(){
    $('#container2').append('<input type="text" class="toSum2" /><br/>');
});

$('#container2').change(function(e){
    var sum2 = 0;
    $(this).find('.toSum2').each(function(index,el){
        var val = $(el).val();
        if(val && val != "")
            sum2+= parseInt(val);
    });
    $('#totalSum2').val(sum2);
});
</script>
								    
<div class="card sport_card new_Diploma_Certificate_new22" id="container1" style="width: 100%;
    float: left;">
     
	<h3>Other sources of funding: Please list organisations providing additional funds for this project (including your NOC) andfor what type of expenditures</h3>
							 	
					<?php
					 if(!empty($data['description_new']))
					 {
					$num=count($data['description_new']);
					$amount=count($data['amount']);
					for($i=0;$i<$num;$i++)
				{
				?>	
               
				<div class="row">

                       <div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Organisation(003)</label>
											<input type="text" value="<?php if(isset($data['description_new'][$i]) && !empty($data['description_new'][$i])) echo $data['description_new'][$i] ?>" class="form-control required" name="description_new[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Type of Expenditure</label>
											<input type="text" value="<?php if(isset($data['type_expenditure'][$i]) && !empty($data['type_expenditure'][$i])) echo $data['type_expenditure'][$i] ?>" class="form-control required" name="type_expenditure[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Amount(USD)(003)</label>
											<input type="text" value="<?php if(isset($data['amount'][$i]) && !empty($data['amount'][$i])) echo $data['amount'][$i] ?>" class="form-control required toSum1" name="amount[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				 <?php }} else{ ?>
				 <div class="row">
											 
                       <div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Organisation(003)</label>
											<input type="text" value="<?php if(isset($data['description_new']) && !empty($data['description_new'])) echo $data['description_new'] ?>" class="form-control required" name="description_new[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Type of Expenditure</label>
											<input type="text" value="<?php if(isset($data['type_expenditure']) && !empty($data['type_expenditure'])) echo $data['type_expenditure'] ?>" class="form-control required" name="type_expenditure[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-4">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Amount(USD)(003)</label>
											<input type="text" value="<?php if(isset($data['amount']) && !empty($data['amount'])) echo $data['amount'] ?>" class="form-control required toSum1" name="amount[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				<?php } ?>
							
									 </div>
									 <div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_Diploma_Certificate_new22">Add</button>
								</div>
									 <br>		 
							 
						<br>
						<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Total budget requested(USD)</label>
											<input type="text" placeholder="0" value="" class="form-control required" name="" id="totalSum1">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<p>* Request 75% advance payment</p>  
							    	<div class="col-md-12 row">    
					<div class="form-group col-md-3">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote2" id="Promote2" value="Promote olympic and values-based education in grassroots sport">
									  <label class="form-check-label" for="inlineRadio3">
yes</label>
							</div>
							</div>
							<div class="form-group col-md-3">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote2" id="Promote2" value="Promote olympic and values-based education in grassroots sport">
									  <label class="form-check-label" for="inlineRadio3">
No</label>
							</div>
							</div>
						    </div>
 
<br>
<br>
<script type="text/javascript">
	$('#add').click(function(){
    $('#container1').append('<input type="text" class="toSum1" /><br/>');
});

$('#container1').change(function(e){
    var sum1 = 0;
    $(this).find('.toSum1').each(function(index,el){
        var val = $(el).val();
        if(val && val != "")
            sum1+= parseInt(val);
    });
    $('#totalSum1').val(sum1);
});
</script>

	  <div class="sport">
							 
					  <br>
 
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
                            <button id="submit" onclick="return submit_action();" type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button id="submit" onclick="return submit_action();"  type="submit" class="btn btn-primary">@lang('custom.save')</button>
							&nbsp;
							<button id="temporary" onclick="return submit_action();"  name="temporary" style="margin:0 7px 0 0px" type="submit" class="btn btn-danger">@lang('custom.save_temporary')</button>
                            @endif
                            @endif
                        </div>
                    </form>
	</section>


 


<script type="text/javascript">
var max_fields_d4      = 20;
var wrapper_d4         = $(".add_section_area_new_new"); 


var add_button_d4      = $(".add_section_new");
var remove_button_d4   = $(".remove_field_button");

$(add_button_d4).click(function(e){
	e.preventDefault();
	var total_fields_d4 = wrapper_d4[0].childNodes.length;
	if(total_fields_d4 < max_fields_d4){
		$(wrapper_d4).append('<div class="row"><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Given Name</label><input type="text"   class="form-control required toSum" name="given_name1[]"><div class="required_error">&nbsp;</div></div></div></div>		 <div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Family Name</label><input type="text"   class="form-control required" name="family_name1[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Gender</label><select class="form-control required" name="gender[]" aria-label="Default select example"><option value=""></option>  <?php foreach($gender as $vals){ ?><option <?php if(isset($data['gender']) && $data['gender']==$vals) echo 'selected' ?> value=" "><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Nationality</label><select class="form-control required" name="locations42[]" aria-label="Default select example"><option value=""></option>  <?php foreach($locations as $vals){ ?><option <?php if(isset($data['locations']) && $data['locations']==$vals) echo 'selected' ?> value=" "><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Email</label><input type="text"   class="form-control required toSum" name="email_add1[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Mobile</label><input type="text"   class="form-control required" name="phone_c1[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Sport Selection</label><select class="form-control required" name="sport42[]" aria-label="Default select example"><option value=""></option>  <?php foreach($sport as $vals){ ?><option <?php if(isset($data['sport42']) && $data['sport42']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Discipline Selection</label><select class="form-control required" name="discipline4[]" aria-label="Default select example"><option value=""></option><?php foreach($discipline as $vals){ ?><option <?php if(isset($data['discipline4']) && $data['discipline4']==$vals) echo 'selected' ?> value=" "><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><label><i class="fas fa-circle"></i>Other(discipline)</label><input type="text"   name="other_desc2[]" class="form-control required" placeholder="other" ><div class="required_error">&nbsp;</div></div></div></div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>



	<script type="text/javascript">
var max_fields_d9      = 20;
var wrapper_d9         = $(".Diploma_Certificate1111111"); 


var add_button_d9      = $(".add_Diploma_Certificate");
var remove_button_d9   = $(".remove_field_button");

$(add_button_d9).click(function(e){
	e.preventDefault();
	var total_fields_d9 = wrapper_d9[0].childNodes.length;
	if(total_fields_d9 < max_fields_d9){
		$(wrapper_d9).append('<div class="row"><div class="col-md-4"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Start Date</label> <input type="date" class="form-control required" name="start_date[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-4"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>End Date</label> <input type="date"  class="form-control required toSum" name="end_date[]"><div class="required_error">&nbsp;</div></div></div></div> </div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>

<script type="text/javascript">
var max_fields_d1      = 20;
var wrapper_d1         = $(".contact_person15453"); 


var add_button_d1      = $(".add_contact_person");
var remove_button_d1   = $(".remove_field_button");

$(add_button_d1).click(function(e){
	e.preventDefault();
	var total_fields_d1 = wrapper_d1[0].childNodes.length;
	if(total_fields_d1 < max_fields_d1){
		$(wrapper_d1).append('<div class="row"><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Family Name</label><input type="text"   class="form-control required" name="family_name[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Given Name</label><input type="text"  class="form-control required toSum" name="given_name[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Nationality</label><select class="form-control required" name="locations[]" aria-label="Default select example"><option value=""></option>  <?php foreach($locations as $vals){ ?><option <?php if(isset($data['locations']) && $data['locations']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Email</label><input type="text"   class="form-control required toSum" name="email_add[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-2"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Mobile</label><input type="text"   class="form-control required" name="phone_c[]"><div class="required_error">&nbsp;</div></div></div></div></div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>



 

<script type="text/javascript">
var max_fields_d      = 20;
var wrapper_d         = $(".add_Diploma_Certificate_new11"); 


var add_button_d      = $(".add_Diploma_Certificate_new111");
var remove_button_d   = $(".remove_field_button");

$(add_button_d).click(function(e){
	e.preventDefault();
	var total_fields_d = wrapper_d[0].childNodes.length;
	if(total_fields_d < max_fields_d){
		$(wrapper_d).append('<div class="row"><div class="col-md-6"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Description(002)</label> <input type="text" class="form-control required" name="description[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-6"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Amount(USD)(002)</label> <input type="text"  class="form-control required toSum2" name="amount[]"><div class="required_error">&nbsp;</div></div></div></div> </div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>
 
<script type="text/javascript">
var max_fields_d11      = 20;
var wrapper_d11         = $(".new_Diploma_Certificate_new22"); 


var add_button_d11      = $(".add_Diploma_Certificate_new22");
var remove_button_d11   = $(".remove_field_button");

$(add_button_d11).click(function(e){
	e.preventDefault();
	var total_fields_d11 = wrapper_d11[0].childNodes.length;
	if(total_fields_d11 < max_fields_d11){
		$(wrapper_d11).append('<div class="row"><div class="col-md-4"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Organisation(003)</label> <input type="text" class="form-control required" name="description_new[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-4"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Type of Expenditure</label><input type="text" class="form-control required" name="type_expenditure[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-4"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Amount(USD)(003)</label> <input type="text"  class="form-control required toSum1" name="amount[]"><div class="required_error">&nbsp;</div></div></div></div> </div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>