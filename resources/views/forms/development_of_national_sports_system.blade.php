	<?php 
	$decode = array();
	if(isset($dataUserApplications['data'])) {
	$data = json_decode($dataUserApplications['data'],true);
	//print_r(count($data['competition_name']));
	
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

$option = array('Multisport project'=>'Multisport project','Physical Conditioning project'=>'Physical Conditioning project','Sport term pre-visit'=>'Sport term pre-visit','Sport-based project'=>'Sport-based project');

	$discipline = array('Swimming'=>'Swimming','Marathon Swimming'=>'Marathon Swimming','Diving'=>'Diving','Artistic Swimming'=>'Artistic Swimming','Water Polo'=>'Water Polo','Archery'=>'Archery','Athletics'=>'Athletics','Badminton'=>'Badminton','Baseball'=>'Baseball','3x3 Basketball'=>'3x3 Basketball','Basketball'=>'Basketball','Biathlon'=>'Biathlon','Bobsleigh'=>'Bobsleigh','Skeleton'=>'Skeleton','Boxing'=>'Boxing','Slalom'=>'Slalom','Sprint'=>'Sprint','Curling'=>'Curling','BMX Freestyle'=>'BMX Freestyle','BMX Racing'=>'BMX Racing','Mountain Bike'=>'Mountain Bike','Road'=>'Road','Track'=>'Track','Dressage'=>'Dressage','Eventing'=>'Eventing','Jumping'=>'Jumping','Fencing'=>'Fencing','Football'=>'Football','Golf'=>'Golf','Artistic'=>'Artistic','Rhythmic'=>'Rhythmic','Trampoline'=>'Trampoline','Handball'=>'Handball','Hockey'=>'Hockey','Ice Hockey'=>'Ice Hockey','Judo'=>'Judo','Kata'=>'Kata','Kumite'=>'Kumite','Luge'=>'Luge','Modern Pentathlon'=>'Modern Pentathlon','Rowing'=>'Rowing','Rugby Sevens'=>'Rugby Sevens','Sailing'=>'Sailing','Shooting'=>'Shooting','Skateboarding'=>'Skateboarding','Speed Skating'=>'Speed Skating','Short Track Speed Skating'=>'Short Track Speed Skating','Figure Skating'=>'Figure Skating','Ski Jumping'=>'Ski Jumping','Cross-Country Skiing'=>'Cross-Country Skiing','Nordic Combined'=>'Nordic Combined','Alpine Skiing'=>'Alpine Skiing','Freestyle Skiing'=>'Freestyle Skiing','Snowboard'=>'Snowboard','Sport Climbing'=>'Sport Climbing','Surfing'=>'Surfing','Table Tennis'=>'Table Tennis','Taekwondo'=>'Taekwondo','Tennis'=>'Tennis','Triathlon'=>'Triathlon','Volleyball'=>'Volleyball','Beach Volleyball'=>'Beach Volleyball','Weightlifting'=>'Weightlifting','Freestyle'=>'Freestyle','Greco-Roman'=>'Greco-Roman','Softball'=>'Softball','Baseball/Softball'=>'Baseball/Softball','Breaking'=>'Breaking','Other'=>'Other');



$sport = array('Aquatics'=>'Aquatics','Archery'=>'Archery','Athletics'=>'Athletics','Badminton'=>'Badminton','Baseball/Softball'=>'Baseball/Softball','Basketball'=>'Basketball','Biathlon'=>'Biathlon','Bobsleigh'=>'Bobsleigh','Boxing'=>'Boxing','Canoe Sport'=>'Canoe Sport','Curling'=>'Curling','Cycling Sport'=>'Cycling Sport','Equestrian'=>'Equestrian','Fencing'=>'Fencing','Football'=>'Football','Golf'=>'Golf','Gymnastics Sport'=>'Gymnastics Sport','Handball'=>'Handball','Hockey'=>'Hockey','Ice Hockey'=>'Ice Hockey','Judo'=>'Judo','Karate'=>'Karate','Luge'=>'Luge','Modern Pentathlon'=>'Modern Pentathlon','Rowing'=>'Rowing','Rugby'=>'Rugby','Sailing'=>'Sailing','Shooting'=>'Shooting','Skateboarding'=>'Skateboarding','Skating'=>'Skating','Skiing'=>'Skiing','Sport Climbing'=>'Sport Climbing','Surfing'=>'Surfing','Table Tennis'=>'Table Tennis','Taekwondo'=>'Taekwondo','Tennis'=>'Tennis','Triathlon'=>'Triathlon','Volleyball'=>'Volleyball','Weightlifting'=>'Weightlifting','Wrestling'=>'Wrestling','DanceSport'=>'DanceSport','Other'=>'Other');
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
		
		$if(error1==1)
return false;
})



$('.all_Outreach').on('keyup',function(){
			var men_11 = parseInt($('.men_11').val());
			var women_11 = parseInt($('.women_11').val());
			var result_11 = men_11+women_11;
			$('.total_11').val(result_11);
			
			var men_12 = parseInt($('.men_12').val());
			var women_12 = parseInt($('.women_12').val());
			var result_12 = men_12+women_12;
			$('.total_12').val(result_12);
			
			var men_13 = parseInt($('.men_13').val());
			var women_13 = parseInt($('.women_13').val());
			var result_13 = men_13+women_13;
			$('.total_13').val(result_13);
			
			var men_14 = parseInt($('.men_14').val());
			var women_14 = parseInt($('.women_14').val());
			var result_14 = men_14+women_14;
			$('.total_14').val(result_14);
			
			var men_15 = parseInt($('.men_15').val());
			var women_15 = parseInt($('.women_15').val());
			var result_15 = men_15+women_15;
			$('.total_15').val(result_15);
			
			var men_16 = parseInt($('.men_16').val());
			var women_16 = parseInt($('.women_16').val());
			var result_16 = men_16+women_16;
			$('.total_16').val(result_16);
			
			
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
				<h1>Development of National Sports System</h1>
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
					  <h3 class="card-title">Development of National Sports System</h3>
				   </div>
				   <!-- /.card-header -->
				   <!-- form start -->
				   <form role="form" id="quickForm1" onsubmit="return submit_action();" method="POST" action="{{ url('/forms/save_form1') }}" enctype="multipart/form-data">

					  @csrf

					  @if(isset($dataUserApplications))

					  <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />

					  @endif

                         
						 <div class="sport">
						  <div class="form-group col-md-6">
                                <input type="hidden" name="application_id" class="form-control" placeholder="Committee Name" value="{{$application_id}}">
                            </div>
							<h3>Length of the programme</h3>
							 <div class="card sport_card">
								<div class="d-md-flex align-items-center">
									<div class="row">
										<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Start Date</label>
											<input type="date" value="<?php if(isset($data['activity_date_start']) && !empty($data['activity_date_start'])) echo $data['activity_date_start'] ?>" class="form-control required" name="activity_date_start">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>End Date</label>
											<input type="date" value="<?php if(isset($data['activity_date_end']) && !empty($data['activity_date_end'])) echo $data['activity_date_end'] ?>" class="form-control required" name="activity_date_end">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									
								</div>
								
							 </div>                         
						 </div>
                            <div class="sport">
							<h3>Sport Selection</h3>
							 <div class="card sport_card">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Sport</label>
											<select class="form-control required" name="sport" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($sport as $vals){ ?>
								<option <?php if(isset($data['sport']) && $data['sport']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											<div class="required_error">&nbsp;</div>
										</div>
										</div>
									
									<div class="col-md-4">
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
								<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Other(Discipline)</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['activity_result_other']) && !empty($data['activity_result_other'])) echo $data['activity_result_other'] ?>" name="activity_result_other">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>?How and why didi you select this sport/project</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['activity_result']) && !empty($data['activity_result'])) echo $data['activity_result'] ?>" name="activity_result">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="row">
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>?Has this project been develop by a former OSC participant</label><br>  
										</div>
										</div>
										
											 <input type="radio" id="yes" name="osr_participant"  value="single" {{isset($data['osr_participant']) && $data['osr_participant']  == "single" ? 'checked' : ''}} >
                                    <label for="male">Yes</label>
                                    <input type="radio" id="no" name="osr_participant" value="married" {{isset($data['osr_participant']) && $data['osr_participant']  == "married" ? 'checked' : ''}}>
                                    <label for="female">No</label>
											 </div>
                                             
									
									</div>
								</div>
								<div class="row">
											 <div class="col-md-6">
										<div class="col">
											<label><i class="fas fa-circle"></i>Option</label>
											<select class="form-control required" name="option" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($option as $vals){ ?>
								<option <?php if(isset($data['option']) && $data['option']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
											<div class="required_error">&nbsp;</div>
										</div>
										</div>
									</div>
							 </div>   
							 </div> 
							 
						<div class="sport">
							<h3>Current Sport Structure</h3>
							 <div class="card sport_card">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-12">
										<div class="col">
											<label>What is the current national system framework in this particular sport? Please elabroate of the topic below.</label><br>
											<p><br>
											<i class="fas fa-circle"></i>Athlete Development and Support</p>
											<input type="text" class="form-control required" value="<?php if(isset($data['athlete_development']) && !empty($data['athlete_development'])) echo $data['athlete_development'] ?>" name="athlete_development">
											<div class="required_error">&nbsp;</div>
										</div>
										</div>
									
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i> Capacity Development</label>
												<input type="text" class="form-control required" value="<?php if(isset($data['capacity_development']) && !empty($data['capacity_development'])) echo $data['capacity_development'] ?>" name="capacity_development">
											
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
								<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Governance</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['governance']) && !empty($data['governance'])) echo $data['governance'] ?>" name="governance">
											 <div class="governance">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Organisational Effectiveness</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['organisational_effectiveness']) && !empty($data['organisational_effectiveness'])) echo $data['organisational_effectiveness'] ?>" name="organisational_effectiveness">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Resource Mobilisation</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['resource_mobilisation']) && !empty($data['resource_mobilisation'])) echo $data['resource_mobilisation'] ?>" name="resource_mobilisation">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Sustainability</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['sustainability']) && !empty($data['sustainability'])) echo $data['sustainability'][0] ?>" name="sustainability">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Weak Point of your current national system framework</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['weak_point']) && !empty($data['weak_point'])) echo $data['weak_point'] ?>" name="weak_point">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Strong Point of your current national system framework</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['strong_point']) && !empty($data['strong_point'])) echo $data['strong_point'] ?>" name="strong_point">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Analysisi of requirements for the development of the coaching education in your National Feaderation </label>
											<input type="text" class="form-control required" value="<?php if(isset($data['analysisi']) && !empty($data['analysisi'])) echo $data['analysisi'] ?>" name="analysisi">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="row">
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Does your NF already have a structure in place for the coaching education</label><br>  
										</div>
										</div>
										
											 <input type="radio" id="yes" name="nf_coaching"  value="single" {{isset($data['nf_coaching']) && $data['nf_coaching']  == "single" ? 'checked' : ''}} >
                                    <label for="male">Yes</label>
                                    <input type="radio" id="no" name="nf_coaching" value="married" {{isset($data['nf_coaching']) && $data['nf_coaching']  == "married" ? 'checked' : ''}}>
                                    <label for="female">No</label>
									</div>
									<div class="col-md-12">
										<div class="col">
										<h3>Action and Objectives</h3>
											<label><i class="fas fa-circle"></i>Action plan proposed,clear breakdown of projected phases</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['action_object'][0]) && !empty($data['action_object'][0])) echo $data['action_object'][0] ?>" name="action_object[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Resources utilised</label>
											
											<input type="text" class="form-control required" value="<?php if(isset($data['resources_utilised']) && !empty($data['resources_utilised'])) echo $data['resources_utilised'] ?>" name="resources_utilised">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Objectives/expected results</label>
											
											<input type="text" class="form-control required" value="<?php if(isset($data['objectivesresult']) && !empty($data['objectivesresult'])) echo $data['objectivesresult'] ?>" name="objectivesresult">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="sport mt-3">
									<h3>Sustainability of the project</h3>
									 <div class="card sport_card">
										<p>How will this project be carried forward by your NF after the depature of the expert?</p>
										<div class="form-group">
											<textarea cols="10" rows="10" name="year_1" class="form-control textarea"> {{isset($data['year_1'])? $data['year_1'] : ''}}</textarea>
										</div>
									 </div>                         
									</div>
									</div>
									<div class="col-md-12">
										<h3 class="form_header_2" style="margin-top: 20px;">Outreach </h3>
                            <p>How many people do you expect to benefit form the project directly?</p>
                            
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>Degination</th>
                                    <th>Men</th>
                                    <th>Women</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <td class="p-0">
									Coaches
									</td>
                                    <td class="p-0">
									<input type="text" name="men[0]" id="men2" class="budget border-0 all_Outreach men_11" value="{{isset($data['men'][0])? $data['men'][0] : ''}}">
									</td>
									  <td class="p-0">
									<input type="text" name="women[0]" id="women2" class="budget border-0 all_Outreach women_11" value="{{isset($data['women'][0])? $data['women'][0] : ''}}">
									</td>
									 <td class="p-0"><input type="text" id="sum2" name="sum" class="budget border-0 all_Outreach total_11"   readonly></td>
                                </tr>
								<tr>
                                    <td class="p-0">
									PE Teachers
									</td>
                                    <td class="p-0">
									<input type="text" name="men[1]" id="men3" class="budget border-0 all_Outreach men_12" value="{{isset($data['men'][1])? $data['men'][1] : ''}}">
									</td>
									  <td class="p-0">
									<input type="text" name="women[1]" id="women3" class="budget border-0 all_Outreach women_12" value="{{isset($data['women'][1])? $data['women'][1] : ''}}">
									</td>
									<td class="p-0"><input type="text" id="sum3" name="sum" class="budget border-0 all_Outreach total_12"   readonly></td>
                                </tr>
								<tr>
                                    <td class="p-0">
									Athletes
									</td>
                                    <td class="p-0">
									<input type="text" name="men[2]" id="men4" class="budget border-0 all_Outreach men_13" value="{{isset($data['men'][2])? $data['men'][2] : ''}}">
									</td>
									  <td class="p-0">
									<input type="text" name="women[2]" id="women4" class="budget border-0 all_Outreach women_13" value="{{isset($data['women'][2])? $data['women'][2] : ''}}">
									</td>
									<td class="p-0"><input type="text" id="sum4" name="sum"  class="budget border-0 all_Outreach total_13" readonly></td>
                                </tr>
								<tr>
                                    <td class="p-0">
									Judges/Referees
									</td>
                                    <td class="p-0">
									<input type="text" name="men[3]" id="men5" class="budget border-0 all_Outreach men_14" value="{{isset($data['men'][3])? $data['men'][3] : ''}}">
									</td>
									  <td class="p-0">
									<input type="text" name="women[3]" id="women5" class="budget border-0 all_Outreach women_14" value="{{isset($data['women'][3])? $data['women'][3] : ''}}">
									</td>
									<td class="p-0"><input type="text" id="sum5" name="sum"  class="budget border-0 all_Outreach total_14"   readonly></td>
                                </tr>
								<tr>
                                    <td class="p-0">
									Administrator
									</td>
                                    <td class="p-0">
									<input type="text" name="men[4]" id="men6" class="budget border-0 all_Outreach men_15" value="{{isset($data['men'][4])? $data['men'][4] : ''}}">
									</td>
									  <td class="p-0">
									<input type="text" name="women[4]" id="women6" class="budget border-0 all_Outreach women_15" value="{{isset($data['women'][4])? $data['women'][4] : ''}}">
									</td>
									<td class="p-0"><input type="text" id="sum6" name="sum"  class="budget border-0 all_Outreach total_15"   readonly></td>
                                </tr>
								<tr>
                                    <td class="p-0">
									Other
									</td>
                                    <td class="p-0">
									<input type="text" id="men"  name="men[5]" class="budget border-0 all_Outreach men_16" value="{{isset($data['men'][5])? $data['men'][5] : ''}}">
									</td>
									  <td class="p-0">
									<input type="text" id="women" name="women[6]" class="budget border-0 all_Outreach women_16" value="{{isset($data['women'][6])? $data['women'][6] : ''}}">
									</td>
									<td class="p-0"><input type="text" id="sum9" name="sum"  class="budget border-0 all_Outreach total_15"   readonly></td>
                                </tr>

								
                                <tr>
                                    <td>Total budget requested (OMR)</td>
                                    <td class="p-0"><input type="text" name="total_men" id="total_men" class="budget border-0" value="{{isset($data['total_men'])? $data['total_men'] : ''}}" readonly></td>
									 <td class="p-0"><input type="text" name="total_women" id="total_women" class="budget border-0" value="{{isset($data['total_women'])? $data['total_women'] : ''}}" readonly></td>
									 <td class="p-0"><input type="text" name="total" id="total"  class="budget border-0"   readonly></td>
                                </tr>
                            </table>

                            <script type="text/javascript">
									$(function(){
            $('#men, #women').keyup(function(){
               var men = parseFloat($('#men').val()) || 0;
               var women = parseFloat($('#women').val()) || 0;
               $('#sum9').val(men + women);
            });
         });

										$(function(){
            $('#men2, #women2').keyup(function(){
               var men2 = parseFloat($('#men2').val()) || 0;
               var women2 = parseFloat($('#women2').val()) || 0;
               $('#sum2').val(men2 + women2);
            });
         });

									$(function(){
            $('#men3, #women3').keyup(function(){
               var men3 = parseFloat($('#men3').val()) || 0;
               var women3 = parseFloat($('#women3').val()) || 0;
               $('#sum3').val(men3 + women3);
            });
         });

									$(function(){
            $('#men4, #women4').keyup(function(){
               var men4= parseFloat($('#men4').val()) || 0;
               var women4 = parseFloat($('#women4').val()) || 0;
               $('#sum4').val(men4 + women4);
            });
         });

									$(function(){
            $('#men5, #women5').keyup(function(){
               var men5 = parseFloat($('#men5').val()) || 0;
               var women5 = parseFloat($('#women5').val()) || 0;
               $('#sum5').val(men5 + women5);
            });
         });

									$(function(){
            $('#men6, #women6').keyup(function(){
               var men6 = parseFloat($('#men6').val()) || 0;
               var women6 = parseFloat($('#women6').val()) || 0;
               $('#sum6').val(men6 + women6);
            });
         });


									$(function(){
            $('#total_men, #total_women').keyup(function(){
               var total_men = parseFloat($('#total_men').val()) || 0;
               var total_women = parseFloat($('#total_women').val()) || 0;
               $('#total').val(total_men + total_women);
            });
         });
			

									

									 
									 

								
								</script>
									</div>
						 <div class="sport">
							<h3>National coordinator(optional)</h3>
							 <?php
							 if(!empty($data))
							 {
							$num=count($data['given_name']);
							for($i=0;$i<$num;$i++)
							{
							?>	
							 <div class="card sport_card national_section">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" name="given_name[]" class="form-control required" placeholder="Given Name" value="<?php if(isset($data['given_name'][$i]) && !empty($data['given_name'][$i])) echo $data['given_name'][$i] ?>">
											<div class="required_error">&nbsp;</div>
										</div>
										</div>
									
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i> Family name</label>
											<input type="text" name="family_name[]" class="form-control required" placeholder="Family Name" value="<?php if(isset($data['family_name'][$i]) && !empty($data['family_name'][$i])) echo $data['family_name'][$i] ?>">
											
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
								<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select  name="activity_location[]"  class="form-control required" aria-label="Default select example">
												  <option value=""></option> 
												  <?php foreach($locations as $vals){ ?>
												<option <?php if(isset($data['activity_location'][$i]) && $data['activity_location'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Title Within th NF of NOC</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['nf_noc'][$i]) && !empty($data['nf_noc'][$i])) echo $data['nf_noc'][$i] ?>" name="nf_noc[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Personal email address</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['personal_email'][$i]) && !empty($data['personal_email'][$i])) echo $data['personal_email'][$i] ?>" name="personal_email[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Mobile</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['mobile'][$i]) && !empty($data['mobile'][$i])) echo $data['mobile'][$i] ?>" name="mobile[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									
									
									
									</div>
								</div>
							 </div> 
							<?php }} else{ ?>							 							 
							 <div class="card sport_card national_section">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" name="given_name[]" class="form-control required" placeholder="Given Name" value="<?php if(isset($data['given_name']) && !empty($data['given_name'])) echo $data['given_name'] ?>">
											<div class="required_error">&nbsp;</div>
										</div>
										</div>
									
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i> Family name</label>
											<input type="text" name="family_name" class="form-control required" placeholder="Family Name" value="{{isset($data['family_name'])? $data['family_name'] : ''}}">
											
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
								<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select class="form-control required" name="activity_location" aria-label="Default select example">
												  <option value=""></option>  
												  <?php foreach($locations as $vals){ ?>
												<option <?php if(isset($data['activity_location']) && $data['activity_location']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Title Within th NF of NOC</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['nf_noc'][0]) && !empty($data['nf_noc'][0])) echo $data['nf_noc'][0] ?>" name="nf_noc[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Personal email address</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['personal_email'][0]) && !empty($data['personal_email'][0])) echo $data['personal_email'][0] ?>" name="personal_email[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Mobile</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['mobile'][0]) && !empty($data['mobile'][0])) echo $data['mobile'][0] ?>" name="mobile[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									
									
									
									</div>
								</div>
							 </div> 
							 
							 
							 
							 <?php } ?>
							 <button name="add" type="submit" class="btn btn-success national">Add</button>							 
							 </div> 
							 <div class="sport">
							<h3>Proposed Expert(s)</h3>
							 <?php
							 if(!empty($data))
							 {
							$num=count($data['given_name_second']);
							for($i=0;$i<$num;$i++)
							{
							?>	
							 <div class="card sport_card proposed_section">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" name="given_name_second" class="form-control required" placeholder="Given Name" value="<?php if(isset($data['given_name_second'][$i]) && !empty($data['given_name_second'][$i])) echo $data['given_name_second'][$i] ?>">
											<div class="required_error">&nbsp;</div>
										</div>
										</div>
									
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i> Family name</label>
											<input type="text" name="family_name_second[]" class="form-control required" placeholder="Family Name" value="<?php if(isset($data['family_name_second'][$i]) && !empty($data['family_name_second'][$i])) echo $data['family_name_second'][$i] ?>">
											
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Gender</label>
											<select  name="gender[]"  class="form-control required" aria-label="Default select example">
												  <option value=""></option> 
												  <?php foreach($gender as $vals){ ?>
												<option <?php if(isset($data['gender'][$i]) && $data['gender'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
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
											<input type="date" name="date_of_birth[]" class="form-control required" placeholder="Enter date" value="<?php if(isset($data['date_of_birth'][$i]) && !empty($data['date_of_birth'][$i])) echo $data['date_of_birth'][$i] ?>">
											<div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
								<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select class="form-control required" name="activity_location[]" aria-label="Default select example">
												  <option value=""></option>  
												  <?php foreach($locations as $vals){ ?>
												<option <?php if(isset($data['activity_location'][$i]) && $data['activity_location'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Country/Territory</label>
											<select class="form-control required" name="country[]" aria-label="Default select example">
												  <option value=""></option>  
												  <?php foreach($locations as $vals){ ?>
												<option <?php if(isset($data['country'][$i]) && $data['country'][$i]==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>City</label>
											<input type="text" id="city" name="city[]" class="form-control required" placeholder="E-mail" value="<?php if(isset($data['city'][$i]) && !empty($data['city'][$i])) echo $data['city'][$i] ?>">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label>Email address</label>
											<input type="email" id="email" name="email2[]" class="form-control required" placeholder="E-mail" value="<?php if(isset($data['email2'][$i]) && !empty($data['email2'][$i])) echo $data['email2'][$i] ?>">
										</div>
									</div>
									</div>
									
									
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Mobile</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['mobile2'][$i]) && !empty($data['mobile2'][$i])) echo $data['mobile2'][$i] ?>" name="mobile2[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Curriculum Vitae(PDF Or Word)</label>
											<input type="file" class="form-control required" value="<?php if(isset($data['curriculum'][$i]) && !empty($data['curriculum'][$i])) echo $data['curriculum'][$i] ?>" name="curriculum[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="sport">
							<h3>Visit(s) by expert (if staggered))</h3>
							 <div class="card sport_card visit_expert">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-6">
										<div>
					<label style="margin-right: 20px;" for="start_date_second">Start date</label>
					<input type="date" id="start_date_second" name="start_date_second" class="form-control" style="margin-right: 20px;"  value="<?php if(isset($data['start_date_second'][$i]) && !empty($data['start_date_second'][$i])) echo $data['start_date_second'][$i] ?>" >
				</div>
				
										</div>
									
									<div class="col-md-6">
										<div class="ml-2 mr-2">
					<label style="margin-right: 20px;" for="end_date">End date:</label>
					<input type="date" id="end_date" name="end_date_second[]" class="form-control" style="margin-right: 20px;" value="<?php if(isset($data['end_date_second'][$i]) && !empty($data['end_date_second'][$i])) echo $data['end_date_second'][$i] ?>">
				</div>
									</div>
									
									</div>
									
								</div>
							 </div>  
									 
							 </div> 
							 
									</div>
								</div>
							 </div> 
							<?php }} else { ?>	
							<div class="card sport_card proposed_section">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Given Name</label>
											<input type="text" name="given_name_second[]" class="form-control required" placeholder="Given Name" value="{{isset($data['given_name_second'])? $data['given_name_second'] : ''}}">
											<div class="required_error">&nbsp;</div>
										</div>
										</div>
									
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i> Family name</label>
											<input type="text" name="family_name_second[]" class="form-control required" placeholder="Family Name" value="{{isset($data['family_name_second'])? $data['family_name_second'] : ''}}">
											
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Gender</label>
											<select  name="gender[]"  class="form-control required" aria-label="Default select example">
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
											<input type="date" name="date_of_birth[]" class="form-control required" placeholder="Enter date" value="{{isset($data['date_of_birth'])? $data['date_of_birth'] : ''}}">
											<div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
								<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Nationality</label>
											<select class="form-control required" name="activity_location[]" aria-label="Default select example">
												  <option value=""></option>  
												  <?php foreach($locations as $vals){ ?>
												<option <?php if(isset($data['activity_location']) && $data['activity_location']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Country/Territory</label>
											<select class="form-control required" name="country[]" aria-label="Default select example">
												  <option value=""></option>  
												  <?php foreach($locations as $vals){ ?>
												<option <?php if(isset($data['country']) && $data['country']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
												<?php } ?>
											</select>
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>City</label>
											<input type="text" id="city" name="city[]" class="form-control required" placeholder="E-mail" value="{{isset($data['city'])? $data['city'] : ''}}">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
									<div class="form-row col">
										<div class="col">
											<label>Email address</label>
											<input type="email" id="email" name="email2[]" class="form-control required" placeholder="E-mail" value="{{isset($data['email2'])? $data['email2'] : ''}}">
										</div>
									</div>
									</div>
									
									
									<div class="col-md-4">
										<div class="col">
											<label><i class="fas fa-circle"></i>Mobile</label>
											<input type="text" class="form-control required" value="<?php if(isset($data['mobile2']) && !empty($data['mobile2'])) echo $data['mobile2'] ?>" name="mobile2[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Curriculum Vitae(PDF Or Word)</label>
											<input type="file" class="form-control required" value="<?php if(isset($data['curriculum']) && !empty($data['curriculum'])) echo $data['curriculum'] ?>" name="curriculum[]">
											 <div class="required_error">&nbsp;</div>
											  
										</div>
									</div>
									<div class="sport">
							<h3>Visit(s) by expert (if staggered))</h3>
							 <div class="card sport_card visit_expert">
								<div class="d-md-flex align-items-center">
									<div class="row">
									<div class="col-md-6">
										<div>
					<label style="margin-right: 20px;" for="start_date_second">Start date</label>
					<input type="date" id="start_date_second" name="start_date_second[]" class="form-control" style="margin-right: 20px;"  value="{{isset($data['start_date_second'])? $data['start_date_second'] : ''}}" >
				</div>
				
										</div>
									
									<div class="col-md-6">
										<div class="ml-2 mr-2">
					<label style="margin-right: 20px;" for="end_date">End date:</label>
					<input type="date" id="end_date" name="end_date_second[]" class="form-control" style="margin-right: 20px;" value="{{isset($data['end_date_second'])? $data['end_date_second'] : ''}}">
				</div>
									</div>
									
									</div>
									
								</div>
							 </div>  
									 
							 </div> 
							 
									</div>
								</div>
							 </div> 

							<?php } ?>							
								<button name="add" type="submit" class="btn btn-success proposed_expert ">Add</button>		 
							 </div> 
							 
							 <div class="sport">
							<h3>Budget Proposal</h3>
							<p>N.B.: International experts' expenses(air ticket(s) and indemnities,etc.) must be included in the estimated expenditure below <br> Any new expenses not listed below should be submitted to OS for pre-approval, otherwise they may not be covered through the OS budget. <br> if Other entities offer financial support for this activity, we kindly ask you to details the costs that they will cover ( one expense per line) in the relevant section.</p>
							 <table style="margin-top: 20px;">
                                <tr>
                                    <th>Description</th>
                                    <th>Amount(OMR)</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[0]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['proposal'][0])? $data['proposal'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[0]" class="budget border-0" value="{{isset($data['budget'][0])? $data['budget'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[1]" class="budget_proposal border-0" value="{{isset($data['proposal'][1])? $data['proposal'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[1]" class="budget border-0" value="{{isset($data['budget'][1])? $data['budget'][1] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[2]" class="budget_proposal border-0" value="{{isset($data['proposal'][2])? $data['proposal'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[2]" class="budget border-0" value="{{isset($data['budget'][2])? $data['budget'][2] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[3]" class="budget_proposal border-0" value="{{isset($data['proposal'][3])? $data['proposal'][3] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[3]" class="budget border-0" value="{{isset($data['budget'][3])? $data['budget'][3] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[4]" class="budget_proposal border-0" value="{{isset($data['proposal'][4])? $data['proposal'][4] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[4]" class="budget border-0" value="{{isset($data['budget'][4])? $data['budget'][4] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[5]" class="budget_proposal border-0" value="{{isset($data['proposal'][5])? $data['proposal'][5] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[5]" class="budget border-0" value="{{isset($data['budget'][5])? $data['budget'][5] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[6]" class="budget_proposal border-0" value="{{isset($data['proposal'][6])? $data['proposal'][6] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[6]" class="budget border-0" value="{{isset($data['budget'][6])? $data['budget'][6] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[7]" class="budget_proposal border-0" value="{{isset($data['proposal'][7])? $data['proposal'][7] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[7]" class="budget border-0" value="{{isset($data['budget'][7])? $data['budget'][7] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[8]" class="budget_proposal border-0" value="{{isset($data['proposal'][8])? $data['proposal'][8] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[8]" class="budget border-0" value="{{isset($data['budget'][8])? $data['budget'][8] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[9]" class="budget_proposal border-0" value="{{isset($data['proposal'][9])? $data['proposal'][9] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[9]" class="budget border-0" value="{{isset($data['budget'][9])? $data['budget'][9] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[10]" class="budget_proposal border-0" value="{{isset($data['proposal'][10])? $data['proposal'][10] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[10]" class="budget border-0" value="{{isset($data['budget'][10])? $data['budget'][10] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="proposal[11]" class="budget_proposal border-0" value="{{isset($data['proposal'][11])? $data['proposal'][11] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[11]" class="budget border-0" value="{{isset($data['budget'][11])? $data['budget'][11] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td>Total budget requested (OMR)</td>
                                    <td class="p-0"><input type="text" name="total" class="budget border-0" value="{{isset($data['total'])? $data['total'] : ''}}" readonly></td>
                                </tr>
                            </table>
               <br>
			   
			   <div class="sport">
							<h3>Other sources of funding: Please list organisations providing additional funds for this project (including your NOC) andfor what type of expenditures</h3>
							
							 <table style="margin-top: 20px;">
                                <tr>
                                    <th>Organisation</th>
                                    <th>Types of Expenditure</th>
                                    <th>Amount(OMR)</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[0]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['organisation'][0])? $data['organisation'][0] : ''}}"></td>
									
									 <td class="p-0"><input type="text" name="expenditure[0]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][0])? $data['expenditure'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[0]" class="amount_usd border-0" value="{{isset($data['amount_usd'][0])? $data['amount_usd'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[1]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][1])? $data['organisation'][1] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[1]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][1])? $data['expenditure'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[1]" class="amount_usd border-0" value="{{isset($data['amount_usd'][1])? $data['amount_usd'][1] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[2]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][2])? $data['organisation'][2] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[2]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][2])? $data['expenditure'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[2]" class="amount_usd border-0" value="{{isset($data['amount_usd'][2])? $data['amount_usd'][2] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[3]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][3])? $data['organisation'][3] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[3]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][3])? $data['expenditure'][3] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[3]" class="amount_usd border-0" value="{{isset($data['amount_usd'][3])? $data['amount_usd'][3] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[4]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][4])? $data['organisation'][4] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[4]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][4])? $data['expenditure'][4] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[4]" class="amount_usd border-0" value="{{isset($data['amount_usd'][4])? $data['amount_usd'][4] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[5]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][5])? $data['organisation'][5] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[5]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][5])? $data['expenditure'][5] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[5]" class="amount_usd border-0" value="{{isset($data['amount_usd'][5])? $data['amount_usd'][5] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[6]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][6])? $data['organisation'][6] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[6]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][6])? $data['expenditure'][6] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[6]" class="amount_usd border-0" value="{{isset($data['amount_usd'][6])? $data['amount_usd'][6] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[7]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][7])? $data['organisation'][7] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[7]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][7])? $data['expenditure'][7] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[7]" class="amount_usd border-0" value="{{isset($data['amount_usd'][7])? $data['amount_usd'][7] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[8]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][8])? $data['organisation'][8] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[8]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][8])? $data['expenditure'][8] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[8]" class="amount_usd border-0" value="{{isset($data['amount_usd'][8])? $data['amount_usd'][8] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[9]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][9])? $data['organisation'][9] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[9]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][9])? $data['expenditure'][9] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[9]" class="amount_usd border-0" value="{{isset($data['amount_usd'][9])? $data['amount_usd'][9] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[10]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][10])? $data['organisation'][10] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[10]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][10])? $data['expenditure'][10] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[10]" class="amount_usd border-0" value="{{isset($data['amount_usd'][10])? $data['amount_usd'][10] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="organisation[11]" class="amount_usd_organisation border-0" value="{{isset($data['organisation'][11])? $data['organisation'][11] : ''}}"></td>
									 <td class="p-0"><input type="text" name="expenditure[11]" class="budget_organisation border-0" style="width: 100%;" value="{{isset($data['expenditure'][11])? $data['expenditure'][11] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="amount_usd[11]" class="amount_usd border-0" value="{{isset($data['amount_usd'][11])? $data['amount_usd'][11] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td>Total amount_usd requested (OMR)</td>
                                    <td></td>
                                    <td class="p-0"><input type="text" name="total_expenditure" class="amount_usd border-0" value="{{isset($data['total_expenditure'])? $data['total_expenditure'] : ''}}" readonly></td>
                                </tr>
                            </table> 
							 </div> 
			   
				  <br>
					  <p><i class="fas fa-circle"></i>Request 75% advance payment</p>
					  <div class="col">
                                    <input type="radio" id="yes" name="advance_payment"  value="single" {{isset($data['advance_payment']) && $data['advance_payment']  == "single" ? 'checked' : ''}} >
                                    <label for="male">Yes</label>
                                    <input type="radio" id="no" name="advance_payment" value="married" {{isset($data['advance_payment']) && $data['advance_payment']  == "married" ? 'checked' : ''}}>
                                    <label for="female">No</label>
					  </div>   
							 </div> 
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									</div>
								</div>
							 </div>   
							 </div> 
                          
                           <h3 class="form_header_2" style="margin-top: 20px;">Confirmation</h3>
                           <div class="card sport_card">
								<div class="d-md-flex align-items-center">
									<div class="row">
									 
									<div class="row">
									<div class="col-md-12">
										<div class="col">
											<label><i class="fas fa-circle"></i>Has your NF already submitted all the relevant technical details to its respective IF?</label><br>  
										</div>
										</div>
										
											 <input type="radio" id="yes" name="osr_participant"  value="single" {{isset($data['osr_participant']) && $data['osr_participant']  == "single" ? 'checked' : ''}} >
                                    <label for="male">Yes</label>
                                    <input type="radio" id="no" name="osr_participant" value="married" {{isset($data['osr_participant']) && $data['osr_participant']  == "married" ? 'checked' : ''}}>
                                    <label for="female">No</label>
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
                            <button id="submit" onclick="return submit_action();" type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button id="submit" onclick="return submit_action();" type="submit" class="btn btn-primary">@lang('custom.save')</button>
							&nbsp;
							<button id="temporary" onclick="return submit_action();"  name="temporary" style="margin:0 7px 0 0px" type="submit" class="btn btn-danger">@lang('custom.save_temporary')</button>
                            @endif
                            @endif
                        </div>
                    </form>
	</section>
	<script type="text/javascript">
 
    var max_fields      = 20;
var wrapper         = $(".national_section"); 
var add_button      = $(".national");
var remove_button   = $(".remove_field_button");

$(add_button).click(function(e){
	e.preventDefault();
	var total_fields = wrapper[0].childNodes.length;
	if(total_fields < max_fields){
		$(wrapper).append('<div class="card sport_card"><div class="d-md-flex align-items-center"><div class="row"><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Given Name</label><input type="text" name="given_name[]" class="form-control required" placeholder="Given Name"><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i> Family name</label><input type="text" name="family_name[]" class="form-control required" placeholder="Family Name"><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Nationality</label><select class="form-control required" name="activity_location[]" aria-label="Default select example"><option value=""></option>  <?php foreach($locations as $vals){ ?><option <?php if(isset($data['activity_location[]']) && $data['activity_location[]']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Title Within th NF of NOC</label><input type="text" class="form-control required"  name="nf_noc[]"><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Personal email address</label><input type="text" class="form-control required"  name="personal_email[]"><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Mobile</label><input type="text" class="form-control required"  name="mobile[]"><div class="required_error">&nbsp;</div></div></div></div></div></div> ');
		 $('.textarea').summernote();
	}
});
 
 
</script>


<script type="text/javascript">
 
var max_fields_proposed      = 20;
var wrapper_proposed         = $(".proposed_section"); 
var add_button_proposed      = $(".proposed_expert");
var remove_button_proposed   = $(".remove_field_button");

$(add_button_proposed).click(function(e){
	e.preventDefault();
	var total_fields_proposed = wrapper_proposed[0].childNodes.length;
	if(total_fields_proposed < max_fields_proposed){
		$(wrapper_proposed).append(' <div class="card sport_card"><div class="d-md-flex align-items-center"><div class="row"><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Given Name</label><input type="text" name="given_name_second[]" class="form-control required" placeholder="Given Name" ><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i> Family name</label><input type="text" name="family_name_second[]" class="form-control required" placeholder="Family Name"><div class="required_error">&nbsp;</div></div></div><div class="col-md-4 col-sm-12"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Gender</label><select  name="gender[]"  class="form-control required" aria-label="Default select example"><option value=""></option> <?php foreach($gender as $vals){ ?><option <?php if(isset($data['gender[]']) && $data['gender[]']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-4 col-sm-12"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Date of Birth</label><input type="date" name="date_of_birth[]" class="form-control required" placeholder="Enter date"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Nationality</label><select class="form-control required" name="activity_location[]" aria-label="Default select example"><option value=""></option>  <?php foreach($locations as $vals){ ?><option <?php if(isset($data['activity_location[]']) && $data['activity_location[]']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Country/Territory</label><select class="form-control required" name="country[]" aria-label="Default select example"><option value=""></option>  <?php foreach($locations as $vals){ ?><option <?php if(isset($data['country[]']) && $data['country[]']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option><?php } ?></select><div class="required_error">&nbsp;</div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>City</label><input type="text" id="city" name="city[]" class="form-control required" placeholder="E-mail" ><div class="required_error">&nbsp;</div></div></div><div class="col-md-4 col-sm-12"><div class="form-row col"><div class="col"><label>Email address</label><input type="email" id="email" name="email2[]" class="form-control required" placeholder="E-mail"></div></div></div><div class="col-md-4"><div class="col"><label><i class="fas fa-circle"></i>Mobile</label><input type="text" class="form-control required"  name="mobile2[]"><div class="required_error">&nbsp;</div></div></div><div class="col-md-12"><div class="col"><label><i class="fas fa-circle"></i>Curriculum Vitae(PDF Or Word)</label><input type="file" class="form-control required"  name="curriculum[]"><div class="required_error">&nbsp;</div></div></div><div class="sport"><h3>Visit(s) by expert (if staggered))</h3><div class="card sport_card visit_expert"><div class="d-md-flex align-items-center"><div class="row"><div class="col-md-6"><div><label style="margin-right: 20px;" for="start_date_second">Start date</label><input type="date" id="start_date_second" name="start_date_second[]" class="form-control" style="margin-right: 20px;"   ></div></div><div class="col-md-6"><div class="ml-2 mr-2"><label style="margin-right: 20px;" for="end_date">End date:</label><input type="date" id="end_date" name="end_date_second[]" class="form-control" style="margin-right: 20px;" ></div></div></div></div></div>  </div> </div></div></div> ');
		 $('.textarea').summernote();
	}
});
 
 
</script>


	<script>
    var total = 0;
    $(document).ready(function() {
        $('form').find('input[name^="budget"]').on('change', function() {
            total = 0;
            $('form').find('input[name^="budget"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total = "+total);
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total"]').val(total);
        });
    })
</script>


	<script>
    var total_expenditure = 0;
    $(document).ready(function() {
        $('form').find('input[name^="amount_usd"]').on('change', function() {
            total_expenditure = 0;
            $('form').find('input[name^="amount_usd"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total_expenditure += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total_expenditure = "+total_expenditure);
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total_expenditure"]').val(total_expenditure);
        });
    })
</script>

	<script>
    var total_men = 0;
    $(document).ready(function() {
        $('form').find('input[name^="men"]').on('change', function() {
            total_men = 0;
            $('form').find('input[name^="men"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total_men += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total_men = "+total_men);
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total_men"]').val(total_men);
        });
    })
</script>

	<script>
    var total_women = 0;
    $(document).ready(function() {
        $('form').find('input[name^="women"]').on('change', function() {
            total_women = 0;
            $('form').find('input[name^="women"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total_women += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total_women = "+total_women);
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total_women"]').val(total_women);
        });
    })
</script>

<script>
    var total = 0;
    $(document).ready(function() {
        $('form').find('input[name^="sum"]').on('change', function() {
            total = 0;
            $('form').find('input[name^="sum"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total += inputValue;
                    console.log("inputValue = "+inputValue);
                    console.log("total = "+total);
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total"]').val(total);
        });
    })
</script>






