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
			
			var men_17 = parseInt($('.men_17').val());
			var women_17 = parseInt($('.women_17').val());
			var result_17 = men_17+women_17;
			$('.total_17').val(result_17);
			
			var men_18 = parseInt($('.men_18').val());
			var women_18 = parseInt($('.women_18').val());
			var result_18 = men_18+women_18;
			$('.total_18').val(result_18);
			
			var men_19 = parseInt($('.men_19').val());
			var women_19 = parseInt($('.women_19').val());
			var result_19 = men_19+women_19;
			$('.total_19').val(result_19);
			
			var men_20 = parseInt($('.men_20').val());
			var women_20 = parseInt($('.women_20').val());
			var result_20 = men_20+women_20;
			$('.total_20').val(result_20);
			
			var men_21 = parseInt($('.men_21').val());
			var women_21 = parseInt($('.women_21').val());
			var result_21 = men_21+women_21;
			$('.total_21').val(result_21);
			
			var men_22 = parseInt($('.men_22').val());
			var women_22 = parseInt($('.women_22').val());
			var result_22 = men_22+women_22;
			$('.total_22').val(result_22);
			
			var men_23 = parseInt($('.men_23').val());
			var women_23 = parseInt($('.women_23').val());
			var result_23 = men_23+women_23;
			$('.total_23').val(result_23);
			
			
			var men_24 = parseInt($('.men_24').val());
			var women_24 = parseInt($('.women_24').val());
			var result_24 = men_24+women_24;
			$('.total_24').val(result_24);
			
			var men_25 = parseInt($('.men_25').val());
			var women_25 = parseInt($('.women_25').val());
			var result_25 = men_25+women_25;
			$('.total_25').val(result_25);
			
			var men_26 = parseInt($('.men_26').val());
			var women_26 = parseInt($('.women_26').val());
			var result_26 = men_26+women_26;
			$('.total_26').val(result_26);
			
			var men_27 = parseInt($('.men_27').val());
			var women_27 = parseInt($('.women_27').val());
			var result_27 = men_27+women_27;
			$('.total_27').val(result_27);
			
			var men_28 = parseInt($('.men_28').val());
			var women_28 = parseInt($('.women_28').val());
			var result_28 = men_28+women_28;
			$('.total_28').val(result_28);
			
			var men_29 = parseInt($('.men_29').val());
			var women_29 = parseInt($('.women_29').val());
			var result_29 = men_29+women_29;
			$('.total_29').val(result_29);
			
			var men_30 = parseInt($('.men_30').val());
			var women_30 = parseInt($('.women_30').val());
			var result_30 = men_30+women_30;
			$('.total_30').val(result_30);
			
			var men_31 = parseInt($('.men_31').val());
			var women_31 = parseInt($('.women_31').val());
			var result_31 = men_31+women_31;
			$('.total_31').val(result_31);
			/*
			var result_men = result_11+result_12+result_13+result_14+result_15+result_16+result_17+result_18+result_19+result_20+result_21+result_22+result_23+result_24+result_25+result_26+result_27+result_28+result_29+result_30+result_31;
			$('.result').val(result_men);
			
			var total_women = parseInt($('.total_women').val());
			var total_women = parseInt($('.total_women').val());
			var result_women = women_11+women_12+women_13+women_14+women_15+women_16+women_17+women_18+women_19+women_20+women_21+women_22+women_23+women_24+women_25+women_26+women_27+women_28+women_29+women_30+women_31;
			$('.total_women').val(result_women);
			result
			*/
			
			if(result!=100) {
				
			$('.TOTAL_100').show();
			
			} else {
				$('.TOTAL_100').hide();
			}
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

.form-check-inline{text-align: initial !important;}
.form-check-inline .form-check-input{margin-top: 2px !important;margin-left: 4px !important;}
</style>
		<section class="content-header">
	   <div class="container-fluid">
		  <div class="row mb-2">
			 <div class="col-sm-6">
				<h1>Olympic Values - Initiatives</h1>
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
					  <h3 class="card-title">Olympic Values - Initiatives</h3>
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
							  
						
						 <div class="sport mt-3">
							
							 <div class="card sport_card ">
								
								<br>
								<h4>Activite Name</h4>
								<input type="text" class="form-control "  name="Activite_Name" placeholder="" value="{{isset($data['Activite_Name'])? $data['Activite_Name'] : ''}}">

                              <div class="sport">
							<h3>Dates</h3>
							 <div class="card sport_card">
								<div class="d-md-flex align-items-center">
								<div class="row">
								 
									 
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle required"></i>Start Date</label>
											<input type="date" value="<?php if(isset($data['Start_Date']) && !empty($data['Start_Date'])) echo $data['Start_Date'] ?>" class="form-control required" name="Start_Date">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle required"></i>End Date</label>
											<input type="date" value="<?php if(isset($data['End_Date']) && !empty($data['End_Date'])) echo $data['End_Date'] ?>" class="form-control required" name="End_Date">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									
								</div>

								</div>
								
							 </div>                         
						 </div>




								<div class="sport mt-3">
									<h3>Initiative Details</h3>
									 <div class="card sport_card">
										 
										<div class="form-group">
											<div class="col-md-12 row" style="margin-top: 20px;">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Scale(e.g.local,regional/provincial,etc.)</label>
                                        <input type="text" name="provincial" class="form-control" placeholder="" value="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Location</label>
                                        <select class="form-control required" name="locations" aria-label="Default select example">
								<option value=""></option>  
								<?php foreach($locations as $vals){ ?>
								<option <?php if(isset($data['locations']) && $data['locations']==$vals) echo 'selected' ?> value="<?php echo $vals ?>"><?php echo $vals ?></option>
								<?php } ?>
							</select>
                                    </div>
                                </div>       
                                              <h4>Objective and Structure</h4>
                                             <p>Please deccribe your initiative:objectives,deliverables and timeline</p>
											<textarea cols="10" rows="10" name="year_1" class="form-control textarea"> {{isset($data['year_1'])? $data['year_1'] : ''}}</textarea>
										</div>
									 </div>                         
								 </div>
								 <br>
								<h4>Strategic Planning</h4>
								<p>How is this initiative linked to your NOC's objectives?</p>
								 
									 <div class="card sport_card">
										
										<div class="form-group">
											<textarea cols="10" rows="10"  name="year_2" class="form-control textarea">{{isset($data['year_2'])? $data['year_2'] : ''}}</textarea>
										</div>
									 </div>                         
								 </div>
								 <br>
                   
	<!--<p>If your NOC has a strategic plan-please attach it</p>

           <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Author</th>
                <th>Type</th>
                <th>Size</th>
                <th>Version</th>
                <th>Discussion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td>0</td>
                <td> </td>
                <td>0</td>
                <td> </td>
                 
            </tr>
                     
        </tbody>
    </table>-->


                <div class="form-group col-md-6">
                                    <h4>Anticipated Results</h4>
                                    <p>What are main anticipated results and outcomes for the beneficiaries of this initiative?</p>
                                    <ul>
									<li>Following its implementation</li>
									<li>In the medium term (4 years from now)</li>
									<li>In the long term (10 years from now)</li>
									</ul>
                                    
                                </div>
                              
								<div class="sport mt-3">
									<p>Main anticipated results and outcomes</p>
									 <div class="card sport_card">
										 
										<div class="form-group">
											<textarea cols="10" rows="10" name="year_3" class="form-control textarea">{{isset($data['year_3'])? $data['year_3'] : ''}}</textarea>
										</div>
									 </div>                         
								 </div>
								 <br>
 <p>Please tick the boxes most closely comesponding to the anticiped results of your NOC's initiative.</p>
 <br>
 
 
 
 <h4>Organisational level change</h4>
 <br>
 
 <p>Safe sport (safegusrding,sports medicine,athlete integrity)</p>
				 <div class="col-md-12 row">
             <div class="form-group col-md-4">
           <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_1" id="inlineRadio1" value="yes" {{isset($data['inlineRadioOptions_1']) && $data['inlineRadioOptions_1']  == "yes" ? 'checked' : ''}}>
  
  
  <label class="form-check-label" for="inlineRadio1"> Develop and implement a safeguerding strategy</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_2" id="inlineRadio2" value="yes" {{isset($data['inlineRadioOptions_2']) && $data['inlineRadioOptions_2']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="Develop and implement a safeguerding policy">Develop and implement a safeguerding policy</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_3" id="inlineRadio3" value="yes" {{isset($data['inlineRadioOptions_3']) && $data['inlineRadioOptions_3']  == "yes" ? 'checked' : ''}}  >
  <label class="form-check-label" for="inlineRadio3">Develop a safeguerding reporting system</label>
</div>
</div>
</div>

<div class="col-md-12 row">
             <div class="form-group col-md-4">
           <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_4" id="inlineRadio1" value="yes" {{isset($data['inlineRadioOptions_4']) && $data['inlineRadioOptions_4']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio1">Raise awareness and encourage other organisations to take action to promote safegarding</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_5" id="inlineRadio2" value="yes" {{isset($data['inlineRadioOptions_5']) && $data['inlineRadioOptions_5']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio2">Provide education/training in sports medecine areas such as injury prevention,physical therapies,sports nutrition and mental health</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_6" id="inlineRadio3" value="yes" {{isset($data['inlineRadioOptions_6']) && $data['inlineRadioOptions_6']  == "yes" ? 'checked' : ''}}  >
  <label class="form-check-label" for="inlineRadio3">Provide education/training in anti-doping</label>
</div>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_7" id="inlineRadio3" value="yes" {{isset($data['inlineRadioOptions_7']) && $data['inlineRadioOptions_7']  == "yes" ? 'checked' : ''}}  >
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
</div>
<br>
<p>Sustainable sport(environmental and social sustainability)</p>
<br>
<div class="col-md-12 row">
             <div class="form-group col-md-4">
           <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_8" id="inlineRadio1" value="yes" {{isset($data['inlineRadioOptions_8']) && $data['inlineRadioOptions_8']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio1">Develop and implement a sustainability strategy</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_9" id="inlineRadio2" value="yes" {{isset($data['inlineRadioOptions_9']) && $data['inlineRadioOptions_9']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio2">Develop and implement a sustainability policy</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_10" id="inlineRadio3" value="yes" {{isset($data['inlineRadioOptions_10']) && $data['inlineRadioOptions_10']  == "yes" ? 'checked' : ''}}  >
  <label class="form-check-label" for="inlineRadio3">Measure and reduce carbon emissions,with the goal of achiveving carbon neutraity</label>
</div>
</div>
</div>
<div class="col-md-12 row">
    <div class="form-group col-md-4">
           <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_11" id="inlineRadio1" value="yes" {{isset($data['inlineRadioOptions_11']) && $data['inlineRadioOptions_11']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio1">Raise awareness and encourage other organisations to take action to promote sustainability</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_12" id="inlineRadio2" value="yes" {{isset($data['inlineRadioOptions_12']) && $data['inlineRadioOptions_12']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio2">Introduce a sustainable sourcing clause in procurementcontracts,which includes human and labour rights,good govarnance,community impacts and enviromental standards</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_13" id="inlineRadio3" value="yes" {{isset($data['inlineRadioOptions_13']) && $data['inlineRadioOptions_13']  == "yes" ? 'checked' : ''}}  >
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
</div>
</div>
<br>
<p>Inclucive sport(gender eqality,non-discrimination)</p>
<br>
<div class="col-md-12 row">
             <div class="form-group col-md-4">
           <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_14" id="inlineRadio1" value="yes" {{isset($data['inlineRadioOptions_14']) && $data['inlineRadioOptions_14']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio1">Develop and implement a gender/inclusive strategy</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_15" id="inlineRadio2" value="yes" {{isset($data['inlineRadioOptions_15']) && $data['inlineRadioOptions_15']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio2">Develop and implement a gender/inclusive policy</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_16" id="inlineRadio3" value="yes" {{isset($data['inlineRadioOptions_16']) && $data['inlineRadioOptions_16']  == "yes" ? 'checked' : ''}}  >
  <label class="form-check-label" for="inlineRadio3">Monitor gender balance on national sports governing bodies</label>
</div>
</div>
</div>
<div class="col-md-12 row">
             <div class="form-group col-md-4">
           <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_17" id="inlineRadio1" value="yes" {{isset($data['inlineRadioOptions_17']) && $data['inlineRadioOptions_17']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio1">Offer training opportunities in inclusive leadership-skills techniques</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_18" id="inlineRadio2" value="yes" {{isset($data['inlineRadioOptions_18']) && $data['inlineRadioOptions_18']  == "yes" ? 'checked' : ''}}>
  <label class="form-check-label" for="inlineRadio2">Lainch mentoring programme</label>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_19" id="inlineRadio3" value="yes" {{isset($data['inlineRadioOptions_19']) && $data['inlineRadioOptions_19']  == "yes" ? 'checked' : ''}} >
  <label class="form-check-label" for="inlineRadio3">Raise awareness and encourage other organisations to take action to promote inclusive</label>
</div>
</div>
</div>
<div class="form-group col-md-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineRadioOptions_20" id="inlineRadioOptions_20" value="yes" {{isset($data['inlineRadioOptions_20']) && $data['inlineRadioOptions_20']  == "yes" ? 'checked' : ''}} >
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
</div>
<br>
<br>


								<h4>Community level Change </h4>
								<p>Help more people find a community in sport and be physically active </p>
								<div class="col-md-12 row">
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote" id="Promote" value="yes" {{isset($data['Promote']) && $data['Promote']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio1">Promote the role of sport and physical activity in society (eg city planning and infrastructure)</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote1" id="Promote1" value="yes" {{isset($data['Promote1']) && $data['Promote1']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Promote physical activity , physical education physical literacy of sport in school</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote2" id="Promote2" value="yes" {{isset($data['Promote2']) && $data['Promote2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">Promote olympic and values-based education in grassroots sport</label>
							</div>
							</div>
							
									<div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote3" id="Promote3" value="yes" {{isset($data['Promote3']) && $data['Promote3']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio1">Work to include greater sports participations as a key aspect of event legacy</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote4" id="Promote4" value="yes" {{isset($data['Promote4']) && $data['Promote4']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Support the hosting of a sport for all event</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote5" id="Promote5" value="yes" {{isset($data['Promote5']) && $data['Promote5']  == "yes" ? 'checked' : ''}}  >
									  <label class="form-check-label" for="inlineRadio3">Provide sport  and physical activity opportunities to a specific community of people </label>
							</div>
							</div>
							
							<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote6" id="Promote5" value="yes" {{isset($data['Promote6']) && $data['Promote6']  == "yes" ? 'checked' : ''}}  >
									  <label class="form-check-label" for="inlineRadio3">Other</label>
							</div>
							</div>
							
							
							
							</div>
								
							<p>Help more people benefit from Olympic education (i.e. through OVEP) and values-based education (including but not limited but not limited to safeguarding, inclusion, anti-doping, sustainability and healty lifestyles) </p>
								<div class="col-md-12 row">
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_education" id="Promote" value="yes" {{isset($data['Olympic_education']) && $data['Olympic_education']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1"> Promote Olympic and values-based education among athletes and their entourage</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_education1" id="Promote1" value="yes" {{isset($data['Olympic_education1']) && $data['Olympic_education1']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Promote Olympic and values-based education in a school setting</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_education2" id="Promote2" value="yes" {{isset($data['Olympic_education2']) && $data['Olympic_education2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">Promote Olympic and values-based education in grassroots sport</label>
							</div>
							</div>
							
									<div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_education3" id="Promote3" value="yes" {{isset($data['Olympic_education3']) && $data['Olympic_education3']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio1">Promote Olympic and values-based education to a specific community of people</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_education4" id="Promote4" value="yes" {{isset($data['Olympic_education4']) && $data['Olympic_education4']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Promote the IOC's Olympic values education programme (OVEP)</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_education5" id="Promote5" value="yes" {{isset($data['Olympic_education5']) && $data['Olympic_education5']  == "yes" ? 'checked' : ''}}  >
									  <label class="form-check-label" for="inlineRadio3">Use sport and the Olympic values as tools for increasing social cohesion and building bridges between people</label>
							</div>
							</div>
							
							<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_education6" id="Promote5" value="yes" {{isset($data['Olympic_education6']) && $data['Olympic_education6']  == "yes" ? 'checked' : ''}}  >
									  <label class="form-check-label" for="inlineRadio3">Other</label>
							</div>
							</div>
							
							
							
							</div>	
									<p>Help more people experience and create Olympic culture and heritage</p>
								<div class="col-md-12 row">
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_culture" id="Promote" value="yes" {{isset($data['Olympic_culture']) && $data['Olympic_culture']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Celebrate and preserve your NOC's Olympic heritage</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_culture2" id="Promote1" value="yes" {{isset($data['Olympic_culture2']) && $data['Olympic_culture2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Support an initiative blending sport and culture
</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_culture3" id="Promote2" value="yes" {{isset($data['Olympic_culture3']) && $data['Olympic_culture3']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">Other</label>
							</div>
							</div>
						
							</div>
							
							
							<h4>The Role of your NOC </h4>
									<p>Please indicate whether your NOC acts as implementer, partner or funder of this initiactive</p>
								<div class="col-md-12 row">
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="NOC_acts" id="Promote" value="yes" {{isset($data['NOC_acts']) && $data['NOC_acts']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Implementer (NOC is implementing the initiative)</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="NOC_acts2" id="Promote1" value="yes" {{isset($data['NOC_acts2']) && $data['NOC_acts2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Partner (initiative implemented in partnership with another entity)

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="NOC_acts3" id="Promote2" value="yes" {{isset($data['NOC_acts3']) && $data['NOC_acts3']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Funder (initiative implemented by another entity)</label>
							</div>
							</div>
						
							</div>
							
							
							<h4>Partners </h4>
									<p>?What organisation(s) are you partnering or funding with for the implementation of this initiative</p>
								<div class="col-md-12 row">
								    <div class="form-group col-3">
									 <label>National federations(s)(001)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(001)</label>
						<input type="text" class="form-control result_percentage" value="{{isset($data['National_federations'])? $data['National_federations'] : ''}}" name="National_federations">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (001)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_federations2'])? $data['National_federations2'] : ''}}" name="National_federations2">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(001)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_federations3'])? $data['National_federations3'] : ''}}" name="National_federations3">
								 </div>
									  <div class="form-group col-3">
									 <label>National Paralympic Committee (002)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(002)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_Paralympic_Committee'])? $data['National_Paralympic_Committee'] : ''}}" name="National_Paralympic_Committee">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (002)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_Paralympic_Committee2'])? $data['National_Paralympic_Committee2'] : ''}}" name="National_Paralympic_Committee2">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(002)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_Paralympic_Committee3'])? $data['National_Paralympic_Committee3'] : ''}}" name="National_Paralympic_Committee3">
								 </div>
								   <div class="form-group col-3">
									 <label>Former or current Olympians/athletes (003)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(003)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Former_current_Olympians'])? $data['Former_current_Olympians'] : ''}}" name="Former_current_Olympians">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (003)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Former_current_Olympians2'])? $data['Former_current_Olympians2'] : ''}}" name="Former_current_Olympians2">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(003)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Former_current_Olympians3'])? $data['Former_current_Olympians3'] : ''}}" name="Former_current_Olympians3">
								 </div>
								 
								   <div class="form-group col-3">
									 <label>National Olympic Academy (004)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(004)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_Olympic_Academy'])? $data['National_Olympic_Academy'] : ''}}" name="National_Olympic_Academy">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (004)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_Olympic_Academy2'])? $data['National_Olympic_Academy2'] : ''}}" name="National_Olympic_Academy2">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(004)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['National_Olympic_Academy3'])? $data['National_Olympic_Academy3'] : ''}}" name="National_Olympic_Academy3">
								 </div>
								 
								   <div class="form-group col-3">
									 <label>International Organisations (005)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(005)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['International_Organisations'])? $data['International_Organisations'] : ''}}" name="International_Organisations">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (005)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['International_Organisations2'])? $data['International_Organisations2'] : ''}}" name="International_Organisations2">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(005)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['International_Organisations3'])? $data['International_Organisations3'] : ''}}" name="International_Organisations3">
								 </div>
								 
								   <div class="form-group col-3">
									 <label>Non-govermental Organisations (006)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(006)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['govermental_Organisations'])? $data['govermental_Organisations'] : ''}}" name="Non-govermental_Organisations">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (006)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['govermental_Organisations2'])? $data['govermental_Organisations2'] : ''}}" name="govermental_Organisations2">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(006)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['govermental_Organisations3'])? $data['govermental_Organisations3'] : ''}}" name="govermental_Organisations3">
								 </div>
								 
								   <div class="form-group col-3">
									 <label>Governmental Organisations (007)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(007)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Governmental_Organisations'])? $data['Governmental_Organisations'] : ''}}" name="Governmental_Organisations">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (007)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Governmental_Organisations2'])? $data['Governmental_Organisations2'] : ''}}" name="Governmental_Organisations2">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(007)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Governmental_Organisations3'])? $data['Governmental_Organisations3'] : ''}}" name="Governmental_Organisations3">
								 </div>
								 
								   <div class="form-group col-3">
									 <label>Private sector, e.g, sponsors (008)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Number(008)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Private_sector'])? $data['Private_sector'] : ''}}" name="Private_sector">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (008)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Private_sector2'])? $data['Private_sector2'] : ''}}" name="Private_sector2" >
								 </div>
									 <div class="form-group col-3">
									 <label>Role(008)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Private_sector3'])? $data['Private_sector3'] : ''}}" name="Private_sector3">
								 </div>
								 
						<div class="sport">
						<br>
							<div class="card sport_card Other_section">
							<?php
						
					 if(!empty($data))
					 {
					$num=count($data['Other_1']);
					for($j=0;$j<$num;$j++)
						{
						?>	
								<div class="row ">
									<div class="form-group col-3">
									 <label>Other (010)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Number(010)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Other_1'][$j])? $data['Other_1'][$j] : ''}}" name="Other_1[]">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (010)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Other_2'][$j])? $data['Other_2'][$j] : ''}}" name="Other_2[]">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(010)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Other_3'][$j])? $data['Other_3'][$j] : ''}}" name="Other_3[]">
								 </div>
										
								
								</div>
								 <?php }} else{ ?>
								 <div class="row">
									<div class="form-group col-3">
									 <label>Other (010)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Number(010)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Other_1'])? $data['Other_1'] : ''}}" name="Other_1[]">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Which ones? (010)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Other_2'])? $data['Other_2'] : ''}}" name="Other_2[]">
								 </div>
									 <div class="form-group col-3">
									 <label>Role(010)</label>
									 <input type="text" class="form-control result_percentage" value="{{isset($data['Other_3'])? $data['Other_3'] : ''}}" name="Other_3[]">
								 </div>
										
								
								</div>
								 <?php } ?>
							</div>
							<div class="col-md-12">
								<button type="button" name="" class="btn btn-success Other_section_add">Add </button>
							</div>
						</div>

							<br>
								
									
								<div class="col-md-12 row">
								<h4>Outreach </h4>
									<p>How many people do you expect to benefit from the project directly (please select only one category per person,
									even if she/he may be for example both a coach and medical staff)?</p>
								    <div class="form-group col-3">
									 <label>Athletes (011)</label>
								
								 </div>
									
								 <div class="form-group col-3">
									 <label>Men (011)</label>
									 <input type="text" class="form-control all_Outreach men_11" value="{{isset($data['Outreach_men'])? $data['Outreach_men'] : ''}}" name="Outreach_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (011)</label>
									 <input type="text" class="form-control all_Outreach  women_11" value="{{isset($data['Outreach_Women'])? $data['Outreach_Women'] : ''}}" name="Outreach_Women">
								 </div>
								 
									 <div class="form-group col-3">
									 <label>Total (011)</label>
									 <input type="text" class="form-control all_Outreach total_11" readonly value="{{isset($data['Outreach_total'])? $data['Outreach_total'] : ''}}" name="Outreach_total">
								 </div>
									  <div class="form-group col-3">
									 <label>Coaches (012) </label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (012)</label>
									 <input type="text" class="form-control all_Outreach men_12" value="{{isset($data['Coaches_men'])? $data['Coaches_men'] : ''}}" name="Coaches_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (012)</label>
									 <input type="text" class="form-control all_Outreach  women_12" value="{{isset($data['Coaches_Women'])? $data['Coaches_Women'] : ''}}" name="Coaches_Women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (012)</label>
									 <input type="text" class="form-control all_Outreach total_12" readonly value="{{isset($data['Coaches_total'])? $data['Coaches_total'] : ''}}" name="Coaches_total">
								 </div>
								   <div class="form-group col-3">
									 <label>Medical Personnel (013)</label>
								
								 </div>
									 <div class="form-group col-3">
									 <label>Men (013)</label>
									 <input type="text" class="form-control all_Outreach men_13" value="{{isset($data['Medical_Personnel_men'])? $data['Medical_Personnel_men'] : ''}}" name="Medical_Personnel_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (013)</label>
									 <input type="text" class="form-control all_Outreach  women_13" value="{{isset($data['Medical_Personnel_women'])? $data['Medical_Personnel_women'] : ''}}" name="Medical_Personnel_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (013)</label>
									 <input type="text" class="form-control all_Outreach total_13" readonly value="{{isset($data['Medical_Personnel_total'])? $data['Medical_Personnel_total'] : ''}}" name="Medical_Personnel_total">
								 </div>
								 
								   <div class="form-group col-3">
									 <label>Youth Aged 0-9 (014)</label>
								
								 </div>
									 <div class="form-group col-3">
									 <label>Men (014)</label>
									 <input type="text" class="form-control all_Outreach men_14" value="{{isset($data['Youth_Aged_men'])? $data['Youth_Aged_men'] : ''}}" name="Youth_Aged_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (014)</label>
									 <input type="text" class="form-control all_Outreach  women_14" value="{{isset($data['Youth_Aged_women'])? $data['Youth_Aged_women'] : ''}}" name="Youth_Aged_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (014)</label>
									 <input type="text" class="form-control all_Outreach total_14" readonly value="{{isset($data['Youth_Aged_total'])? $data['Youth_Aged_total'] : ''}}" name="Youth_Aged_total">
								 </div>
								 
								   <div class="form-group col-3">
									 <label>
									Youth aged 10-18 (015)</label>
								 </div>
								 <div class="form-group col-3">
									 <label>Men (015)</label>
									 <input type="text" class="form-control all_Outreach men_15" value="{{isset($data['Youth_aged_y_men'])? $data['Youth_aged_y_men'] : ''}}" name="Youth_aged_y_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (015)</label>
									 <input type="text" class="form-control all_Outreach  women_15" value="" name="Youth_aged_y_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (015)</label>
									 <input type="text" class="form-control all_Outreach total_15" readonly value="{{isset($data['Youth_aged_y_total'])? $data['Youth_aged_y_total'] : ''}}" name="Youth_aged_y_total" >
								 </div>
								 
								   <div class="form-group col-3">
									 <label>Youth aged 19-24 (016)</label>
								
								 </div>
									 <div class="form-group col-3">
									 <label>Men (016)</label>
									 <input type="text" class="form-control all_Outreach men_16" value="{{isset($data['Youth_aged_19_men'])? $data['Youth_aged_19_men'] : ''}}" name="Youth_aged_19_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (016)</label>
									 <input type="text" class="form-control all_Outreach  women_16" value="{{isset($data['Youth_aged_19_women'])? $data['Youth_aged_19_women'] : ''}}" name="Youth_aged_19_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (016)</label>
									 <input type="text" class="form-control all_Outreach total_16" readonly value="{{isset($data['Youth_aged_19_total'])? $data['Youth_aged_19_total'] : ''}}" name="Youth_aged_19_total" >
								 </div>
								 
								   <div class="form-group col-3">
									 <label>Grassroots Sport (017)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (017)</label>
									 <input type="text" class="form-control all_Outreach men_17" value="{{isset($data['Grassroots_Sport_men'])? $data['Grassroots_Sport_men'] : ''}}" name="Grassroots_Sport_men ">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (017)</label>
									 <input type="text" class="form-control all_Outreach  women_17" value="{{isset($data['Grassroots_Sport_women'])? $data['Grassroots_Sport_women'] : ''}}" name="Grassroots_Sport_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (017)</label>
									 <input type="text" class="form-control all_Outreach total_17" readonly value="{{isset($data['Grassroots_Sport_total'])? $data['Grassroots_Sport_total'] : ''}}" name="Grassroots_Sport_total">
								 </div>
								   <div class="form-group col-3">
									 <label>General Public (018)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (018)</label>
									 <input type="text" class="form-control all_Outreach men_18" value="{{isset($data['General_Public_men'])? $data['General_Public_men'] : ''}}" name="General_Public_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (018)</label>
									 <input type="text" class="form-control all_Outreach  women_18" value="{{isset($data['General_Public_women'])? $data['General_Public_women'] : ''}}" name="General_Public_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (018)</label>
									 <input type="text" class="form-control all_Outreach total_18" readonly value="{{isset($data['General_Public_total'])? $data['General_Public_total'] : ''}}" name="General_Public_total" >
								 </div>
								  <div class="form-group col-3">
									 <label>
Senior Citizens (019)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (019)</label>
									 <input type="text" class="form-control all_Outreach men_19" value="{{isset($data['Senior_Citizens_men'])? $data['Senior_Citizens_men'] : ''}}" name="Senior_Citizens_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (019)</label>
									 <input type="text" class="form-control all_Outreach  women_19" value="{{isset($data['Senior_Citizens_women'])? $data['Senior_Citizens_women'] : ''}}" name="Senior_Citizens_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (019)</label>
									 <input type="text" class="form-control all_Outreach total_19" readonly value="{{isset($data['Senior_Citizens_total'])? $data['Senior_Citizens_total'] : ''}}" name="Senior_Citizens_total">
								 </div>
								 
								 
								  <div class="form-group col-3">
									 <label>
People witha disability (020)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (020)</label>
									 <input type="text" class="form-control all_Outreach men_20" value="{{isset($data['People_witha_disability_men'])? $data['People_witha_disability_men'] : ''}}" name="People_witha_disability_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (020)</label>
									 <input type="text" class="form-control all_Outreach  women_20" value="{{isset($data['People_witha_disability_women'])? $data['People_witha_disability_women'] : ''}}" name="People_witha_disability_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (020)</label>
									 <input type="text" class="form-control all_Outreach total_20" readonly value="{{isset($data['People_witha_disability_total'])? $data['People_witha_disability_total'] : ''}}" name="People_witha_disability_total">
								 </div>
								 
								 
								  <div class="form-group col-3">
									 <label>
Socially Vulnerable Groups (021)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (021)</label>
									 <input type="text" class="form-control all_Outreach men_21" value="{{isset($data['Socially_Vulnerable_Groups_men'])? $data['Socially_Vulnerable_Groups_men'] : ''}}" name="Socially_Vulnerable_Groups_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (021)</label>
									 <input type="text" class="form-control all_Outreach  women_21" value="{{isset($data['Socially_Vulnerable_Groups_women'])? $data['Socially_Vulnerable_Groups_women'] : ''}}" name="Socially_Vulnerable_Groups_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (021)</label>
									 <input type="text" class="form-control all_Outreach total_21" readonly value="{{isset($data['Socially_Vulnerable_Groups_total'])? $data['Socially_Vulnerable_Groups_total'] : ''}}" name="Socially_Vulnerable_Groups_total">
								 </div>
								 
								  <div class="form-group col-3">
									 <label>
National Olympic Committee Representatives (022)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (022)</label>
									 <input type="text" class="form-control all_Outreach men_22" value="{{isset($data['National_Olympic_Committee_men'])? $data['National_Olympic_Committee_men'] : ''}}" name="National_Olympic_Committee_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (022)</label>
									 <input type="text" class="form-control all_Outreach  women_22" value="{{isset($data['National_Olympic_Committee_women'])? $data['National_Olympic_Committee_women'] : ''}}" name="National_Olympic_Committee_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (022)</label>
									 <input type="text" class="form-control all_Outreach total_22" readonly value="{{isset($data['National_Olympic_Committee_total'])? $data['National_Olympic_Committee_total'] : ''}}" name="National_Olympic_Committee_total">
								 </div>
								 
								  <div class="form-group col-3">
									 <label>
National Federation Representatives (023)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (023)</label>
									 <input type="text" class="form-control all_Outreach men_23" value="{{isset($data['National_Federation_Representatives_men'])? $data['National_Federation_Representatives_men'] : ''}}" name="National_Federation_Representatives_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (023)</label>
									 <input type="text" class="form-control all_Outreach  women_23" value="{{isset($data['National_Federation_Representatives_women'])? $data['National_Federation_Representatives_women'] : ''}}" name="National_Federation_Representatives_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (023)</label>
									 <input type="text" class="form-control all_Outreach total_23" readonly value="{{isset($data['National_Federation_Representatives_total'])? $data['National_Federation_Representatives_total'] : ''}}" name="National_Federation_Representatives_total">
								 </div>
								 
								  <div class="form-group col-3">
									 <label>
National Paralympic Committee Representatives (024)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (024)</label>
									 <input type="text" class="form-control all_Outreach men_24" value="{{isset($data['National_Paralympic_Committee_men'])? $data['National_Paralympic_Committee_men'] : ''}}" name="National_Paralympic_Committee_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (024)</label>
									 <input type="text" class="form-control all_Outreach  women_24" value="{{isset($data['National_Paralympic_Committee_women'])? $data['National_Paralympic_Committee_women'] : ''}}" name="National_Paralympic_Committee_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (024)</label>
									 <input type="text" class="form-control all_Outreach total_24" readonly value="{{isset($data['National_Paralympic_Committee_total'])? $data['National_Paralympic_Committee_total'] : ''}}" name="National_Paralympic_Committee_total">
								 </div>
								 
								  <div class="form-group col-3">
									 <label>

National Olympic Academy Representatives (025)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (025)</label>
									 <input type="text" class="form-control all_Outreach men_25" value="{{isset($data['National_Olympic_Academy_men'])? $data['National_Olympic_Academy_men'] : ''}}" name="National_Olympic_Academy_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (025)</label>
									 <input type="text" class="form-control all_Outreach  women_25" value="{{isset($data['National_Olympic_Academy_women'])? $data['National_Olympic_Academy_women'] : ''}}" name="National_Olympic_Academy_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (025)</label>
									 <input type="text" class="form-control all_Outreach total_25" readonly value="{{isset($data['National_Olympic_Academy_total'])? $data['National_Olympic_Academy_total'] : ''}}" name="National_Olympic_Academy_total">
								 </div>
								 
								 
								 <div class="form-group col-3">
									 <label>

International Organisations (026)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (026)</label>
									 <input type="text" class="form-control all_Outreach men_26" value="{{isset($data['International_Organisations_men'])? $data['International_Organisations_men'] : ''}}" name="International_Organisations_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (026)</label>
									 <input type="text" class="form-control all_Outreach  women_26" value="{{isset($data['International_Organisations_women'])? $data['International_Organisations_women'] : ''}}" name="International_Organisations_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (026)</label>
									 <input type="text" class="form-control all_Outreach total_26" readonly value="{{isset($data['International_Organisations_total'])? $data['International_Organisations_total'] : ''}}" name="International_Organisations_total">
								 </div>
								 
								 <div class="form-group col-3">
									 <label>

Non-govermental Organisations (027)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (027)</label>
									 <input type="text" class="form-control all_Outreach men_27" value="{{isset($data['Non_govermental_Organisations_men'])? $data['Non_govermental_Organisations_men'] : ''}}" name="Non_govermental_Organisations_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (027)</label>
									 <input type="text" class="form-control all_Outreach  women_27" value="{{isset($data['Non_govermental_Organisations_women'])? $data['Non_govermental_Organisations_women'] : ''}}" name="Non_govermental_Organisations_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (027)</label>
									 <input type="text" class="form-control all_Outreach total_27" readonly value="{{isset($data['Non_govermental_Organisations_total'])? $data['Non_govermental_Organisations_total'] : ''}}" name="Non_govermental_Organisations_total">
								 </div>
								 
								 <div class="form-group col-3">
									 <label>

Governmental Organisations (028)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (028)</label>
									 <input type="text" class="form-control all_Outreach men_28" value="{{isset($data['Governmental_Organisations_men'])? $data['Governmental_Organisations_men'] : ''}}" name="Governmental_Organisations_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (028)</label>
									 <input type="text" class="form-control all_Outreach  women_28" value="{{isset($data['Governmental_Organisations_women'])? $data['Governmental_Organisations_women'] : ''}}" name="Governmental_Organisations_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (028)</label>
									 <input type="text" class="form-control all_Outreach total_28" readonly value="{{isset($data['Governmental_Organisations_total'])? $data['Governmental_Organisations_total'] : ''}}" name="Governmental_Organisations_total">
								 </div>
								 
							 <div class="form-group col-3">
									 <label>Private Sector, e.g, Sponsors (029)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (029)</label>
									 <input type="text" class="form-control all_Outreach men_29"  value="{{isset($data['Private_Sector_men'])? $data['Private_Sector_men'] : ''}}" name="Private_Sector_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (029)</label>
									 <input type="text" class="form-control all_Outreach  women_29" value="{{isset($data['Private_Sector_women'])? $data['Private_Sector_women'] : ''}}" name="Private_Sector_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (029)</label>
									 <input type="text" readonly class="form-control all_Outreach total_29 " value="{{isset($data['Private_Sector_total'])? $data['Private_Sector_total'] : ''}}" required name="Private_Sector_total">
								 </div>
								 
								  <div class="form-group col-3">
									 <label>Media (030)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men (030)</label>
									 <input type="text" class="form-control all_Outreach men_30" value="{{isset($data['Media_men'])? $data['Media_men'] : ''}}" name="Media_men">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (030)</label>
									 <input type="text" class="form-control all_Outreach  women_30" value="{{isset($data['Media_women'])? $data['Media_women'] : ''}}" name="Media_women">
								 </div>
									 <div class="form-group col-3">
									 <label>Total (030)</label>
									 <input type="text" class="form-control all_Outreach total_30" readonly value="{{isset($data['Media_total'])? $data['Media_total'] : ''}}" name="Media_total">
								 </div>
								 
								 <div class="sport">
<br>
							<div class="card sport_card Governmental_Organisations">
							<?php
							
						//print_r($data['Organisations_Other_1']); die();	
					 if(!empty($data))
					 {
					$num=count($data['Organisations_Other_1']);
					for($j=0;$j<$num;$j++)
						{
						?>	
								<div class="row">
									<div class="form-group col-3">
									 <label>Other (031)</label>
								
								 </div>
								 <div class="form-group col-3">
									 <label>Men(031)</label>
									 <input type="text" class="form-control all_Outreach men_31" value="{{isset($data['Organisations_Other_1'][$j])? $data['Organisations_Other_1'][$j] : ''}}" name="Organisations_Other_1[]">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (031)</label>
									 <input type="text" class="form-control all_Outreach  women_31" value="{{isset($data['Organisations_Other_2'][$j])? $data['Organisations_Other_2'][$j] : ''}}" name="Organisations_Other_2[]">
								 </div>
									 <div class="form-group col-3">
									 <label>Total(031)</label>
									 <input type="text" class="form-control all_Outreach total_31" readonly value="{{isset($data['Organisations_Other_3'][$j])? $data['Organisations_Other_3'][$j] : ''}}" name="Organisations_Other_3[]">
								 </div>
										
								
								</div>
								 <?php }} else{ ?>
								 <div class="row">
									<div class="form-group col-3">
									 <label>Other (31)</label>
								 </div>
								 <div class="form-group col-3">
									 <label>Men(031)</label>
									 <input type="text" class="form-control all_Outreach men_31" value="{{isset($data['Organisations_Other_1'])? $data['Organisations_Other_1'] : ''}}" name="Organisations_Other_1[]">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women (031)</label>
									 <input type="text" class="form-control all_Outreach  women_31" value="{{isset($data['Organisations_Other_2'])? $data['Organisations_Other_2'] : ''}}" name="Organisations_Other_2[]">
								 </div>
									 <div class="form-group col-3">
									 <label>Total(031)</label>
									 <input type="text" class="form-control all_Outreach total_31" readonly value="{{isset($data['Organisations_Other_3'])? $data['Organisations_Other_3'] : ''}}" name="Organisations_Other_3[]">
								 </div>
								</div>
								 <?php } ?>
							</div>
							<div class="col-md-12">
								<button type="button" name="" class="btn btn-success Governmental_Organisations_add">Add </button>
							</div>
						</div>
							
							<br>
								<div class="col-md-12 row">
							 <div class="form-group col-3">
									 <label>Total</label>
								
								 </div>
								 
								 
								 <div class="form-group col-3">
									 <label>Men Total</label>
									 <input type="text" class="form-control all_Outreach total_men" value="" readonly name="Men_Total">
								 </div>
									
								 <div class="form-group col-3">
									 <label>Women Total</label>
									 <input type="text" class="form-control all_Outreach total_women" value="" readonly name="Women_Total">
								 </div>
									 <div class="form-group col-3">
									 <label>Total Combined</label>
									 <input type="text" class="form-control result" value="" readonly name="Total_Combined">
								 </div>
								 
							</div>
							
							
								<h4>Type of initiactive </h4>
								<div class="row">
									 <div class="form-group col-md-12">
								<p>Please indicate which of the below activities and part of your NOC's  initiactive</p>

								 </div>
									
								 
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Type_of_initiactive" id="Promote" value="{{isset($data['Type_of_initiactive'])? $data['Type_of_initiactive'] : ''}}">
<label class="form-check-label" for="inlineRadio1">Project, e.g, support community sports, promote Olympic values, etc.</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Type_of_initiactive2" id="Promote1" value="{{isset($data['Type_of_initiactive2'])? $data['Type_of_initiactive2'] : ''}}">
									  <label class="form-check-label" for="inlineRadio2">Skills workshop (train and educate participants)

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Type_of_initiactive3" id="Promote2" value="{{isset($data['Type_of_initiactive3'])? $data['Type_of_initiactive3'] : ''}}">
									  <label class="form-check-label" for="inlineRadio3">
Coordination workshop (coordinate action around a specific area)</label>
							</div>
							</div>
							<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Type_of_initiactive4" id="Promote2" value="{{isset($data['Type_of_initiactive4'])? $data['Type_of_initiactive4'] : ''}}">
									  <label class="form-check-label" for="inlineRadio3">
Policy or strategy development</label>
							</div>
							</div>
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Type_of_initiactive5" id="Promote2" value="{{isset($data['Type_of_initiactive5'])? $data['Type_of_initiactive5'] : ''}}">
									  <label class="form-check-label" for="inlineRadio3">
Creation of content, e.g, for a book, video  or app</label>
							</div>
							</div>
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Type_of_initiactive6" id="Promote2" value="{{isset($data['Type_of_initiactive6'])? $data['Type_of_initiactive6'] : ''}}">
									  <label class="form-check-label" for="inlineRadio3">
Other</label>
							</div>
							</div>
						
							 
							</div>
							
									<h4>Topics </h4>
									<div class="row">
									 <div class="form-group col-md-12">
									<p>Please indicate the topics most closely associated with your initiative</p>
									<p>Safe Report</p>
								</div>
								 
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote" id="Promote" value="yes" {{isset($data['Promote']) && $data['Promote']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Protecting athletes (safeguarding)</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Protecting_athletes" id="Promote1" value="yes" {{isset($data['Protecting_athletes']) && $data['Protecting_athletes']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Sports Medicine

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Protecting_athletes2" id="Promote2" value="yes" {{isset($data['Protecting_athletes2']) && $data['Protecting_athletes2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Anti-doping</label>
							</div>
							</div>
							</div>
							<div class="row">
									 <div class="form-group col-md-12">
								<p>Inclusive Sport</p>
								 </div>
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Protecting_athletes3" id="Promote" value="yes" {{isset($data['Protecting_athletes3']) && $data['Protecting_athletes3']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Inclusion and equity (gender and other)</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Protecting_athletes4" id="Promote1" value="yes" {{isset($data['Protecting_athletes4']) && $data['Protecting_athletes4']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Prevention of discrimination in sport

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Protecting_athletes5" id="Promote2" value="yes" {{isset($data['Protecting_athletes5']) && $data['Protecting_athletes5']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Portrayal of women in sport</label>
							</div>
							</div>
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promote2" id="Promote2" value="yes" {{isset($data['Promote2']) && $data['Promote2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Resource allocation in sport</label>
							</div>
							</div>
							
							</div>
							  <div class="row">
									 <div class="form-group col-md-12">
								<p>Sustainable Sport</p>
								</div>
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Sustainable_Sport" id="Promote" value="yes" {{isset($data['Sustainable_Sport']) && $data['Sustainable_Sport']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Environmental Sustainability</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Sustainable_Sport2" id="Promote1" value="yes" {{isset($data['Sustainable_Sport2']) && $data['Sustainable_Sport2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Social and economic sustainability

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Sustainable_Sport3" id="Promote2" value="yes" {{isset($data['Sustainable_Sport3']) && $data['Sustainable_Sport3']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Human Rights</label>
							</div>
							</div>
							
							</div>
							   <div class="row">
									 <div class="form-group col-md-12">
								<p>Promotion of sport and Physical Activity</p>
								</div>
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promotion_of_sport_and_Physical" id="Promote" value="yes" {{isset($data['Promotion_of_sport_and_Physical']) && $data['Promotion_of_sport_and_Physical']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Sport for all</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promotion_of_sport_and_Physical2" id="Promote1" value="yes" {{isset($data['Promotion_of_sport_and_Physical2']) && $data['Promotion_of_sport_and_Physical2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">Play

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Promotion_of_sport_and_Physical3" id="Promote2" value="yes" {{isset($data['Promotion_of_sport_and_Physical3']) && $data['Promotion_of_sport_and_Physical3']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
The importance of sport to society</label>
							</div>
							</div>
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="The_importance_of_sport" id="Promote2" value="yes" {{isset($data['The_importance_of_sport']) && $data['The_importance_of_sport']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
The benefits of sport to individuals</label>
							</div>
							</div>
							
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="The_importance_of_sport2" id="Promote2" value="yes" {{isset($data['The_importance_of_sport2']) && $data['The_importance_of_sport2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Physical education, physical activity or physical literacy in school</label>
							</div>
							</div>
							
							</div>
							
							
							<div class="row">
									 <div class="form-group col-md-12">
								<p>Olympic Values, Culture and Education</p>
								</div>
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="The_importance_of_sport3" id="Promote" value="yes" {{isset($data['The_importance_of_sport3']) && $data['The_importance_of_sport3']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Olympic Culture and Education</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education" id="Promote1" value="yes" {{isset($data['Olympic_Culture_and_Education']) && $data['Olympic_Culture_and_Education']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">
Sport and Peace

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education2" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education2']) && $data['Olympic_Culture_and_Education2']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Fair Play</label>
							</div>
							</div>
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education3" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education3']) && $data['Olympic_Culture_and_Education3']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Foundations of the Olympic Movement and the modern Olympic Games</label>
							</div>
							</div>
							
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education4" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education4']) && $data['Olympic_Culture_and_Education4']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
The Olympic Values</label>
							</div>
							</div>
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education5" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education5']) && $data['Olympic_Culture_and_Education5']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Olympic Legacy and Heritage</label>
							</div>
							</div>
							
							
							</div>
							<div class="row">
									 <div class="form-group col-md-12">
								<p>Partnerships and Procedures</p>
								</div>
										 <div class="form-group col-md-4">
									   <div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education6" id="Promote" value="yes" {{isset($data['Olympic_Culture_and_Education6']) && $data['Olympic_Culture_and_Education6']  == "yes" ? 'checked' : ''}}>
<label class="form-check-label" for="inlineRadio1">Sport and Public Authorities</label>
						 			</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education7" id="Promote1" value="yes" {{isset($data['Olympic_Culture_and_Education7']) && $data['Olympic_Culture_and_Education7']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio2">
Working in Partnerships

</label>
									</div>
									</div>
									<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education8" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education8']) && $data['Olympic_Culture_and_Education8']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Strategic Planning</label>
							</div>
							</div>
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education9" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education9']) && $data['Olympic_Culture_and_Education9']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Promotion and Sponsorship</label>
							</div>
							</div>
							
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education10" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education10']) && $data['Olympic_Culture_and_Education10']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Organising an event</label>
							</div>
							</div>
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education11" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education11']) && $data['Olympic_Culture_and_Education11']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Managing and Operating Facilites</label>
							</div>
							</div>
							
								<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education12" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education12']) && $data['Olympic_Culture_and_Education12']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Monitoring and Evaluation</label>
							</div>
							</div>
							</div>
							
							
							
								<div class="col-md-12 row">
								    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Other Topic</label>
                                        <input type="text" name="project_start_date" class="form-control" placeholder="" value="yes" {{isset($data['project_start_date']) && $data['project_start_date']  == "yes" ? 'checked' : ''}}>
                                    </div>
								    </div>
							
							<div class="col-md-12 row">
							    <p>Would you like to receive additional technical support and advice for the implementation of this initiative, or help with identifying subject matter experts?</p>
							    <div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education13" id="Promote2" value="yes" {{isset($data['Olympic_Culture_and_Education13']) && $data['Olympic_Culture_and_Education13']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
yes</label>
							</div>
							</div>
							<div class="form-group col-md-4">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education14" id="Promote2" value="yes"{{isset($data['Olympic_Culture_and_Education14']) && $data['Olympic_Culture_and_Education14']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
No</label>
							</div>
							</div>
							    </div>
							
								<div class="sport mt-3" style="width: 96%;float: left;">
									<h3>Monitoring and Evaluation</h3>
									 <div class="card sport_card">
										<p>Please define if/how your NOC will monitor and evaluate results from this initiative</p>
										<div class="form-group">
											<textarea cols="10" rows="10" name="year_4" class="form-control textarea">{{isset($data['year_4'])? $data['year_4'] : ''}}</textarea>
										</div>
									 </div>                         
								 </div>
								 
							<div class="row">	 
						<div class="col-md-12 row">
						<div class="col-md-12">	
						<h3>Other</h3>
						<p>?Will this project be offered free of change for participants</p>
						</div>
						
							    <div class="form-group col-md-6">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education15" id="Promote2" value="yes"{{isset($data['Olympic_Culture_and_Education15']) && $data['Olympic_Culture_and_Education15']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Free</label>
							</div>
							</div>
							<div class="form-group col-md-6">
									<div class="form-check form-check-inline">
									  <input class="form-check-input" type="checkbox" name="Olympic_Culture_and_Education16" id="Promote2" value="yes"{{isset($data['Olympic_Culture_and_Education16']) && $data['Olympic_Culture_and_Education16']  == "yes" ? 'checked' : ''}}>
									  <label class="form-check-label" for="inlineRadio3">
Participant Free</label>
							</div>
							</div>
							    </div>
							    </div>
								 
								 <div class="sport mt-3">
									<div class="card sport_card">
										<p>If resources are required to sustain the initiative after the original implementation phase,how does your NOC plan to finance it in the future?</p>
										<div class="form-group">
											<textarea cols="10" rows="10" name="year_4" class="form-control textarea">{{isset($data['year_4'])? $data['year_4'] : ''}}</textarea>
										</div>
									 </div>                         
								 </div>
								 
								  <div class="sport mt-3" style="width: 96%;float: left;">
									<div class="card sport_card">
										<p>Do you have other comments about this project that you wish to share with Olympic Solidarity?</p>
										<div class="form-group">
											<textarea cols="10" rows="10" name="year_4" class="form-control textarea">{{isset($data['year_4'])? $data['year_4'] : ''}}</textarea>
										</div>
									 </div>                         
								 </div>
								 
								 <h3>Co-ordinators/Speakers/Experts-Please list the names,titles and roles of 
the main people that will be involved in the implementation of this 
initiative from your NOC, as wll as external partners</h3>
<div class="row add_expetise_new">
							<?php
					 if(!empty($data))
					 {
					$num=count($data['Given_Name']);
					$amount=count($data['amount1']);
					for($i=0;$i<$num;$i++)
				{
				?>
						<div class="col-md-12">
						<div class="form-group col-2">
									 <label>Given Name</label>
									 <input type="text" class="form-control" value="{{isset($data['Given_Name'][$i])? $data['Given_Name'][$i] : ''}}" name="Given_Name[]">
								 </div>
						<div class="form-group col-2">
									 <label>Family Name</label>
									 <input type="text" class="form-control " value="{{isset($data['Family_Name'][$i])? $data['Family_Name'][$i] : ''}}" name="Family_Name[]">
								 </div>
								 <div class="form-group col-2">
									 <label>Title</label>
									 <input type="text" class="form-control " value="{{isset($data['Title'][$i])? $data['Title'][$i] : ''}}" name="Title[]">
								 </div>
								 <div class="form-group col-2">
									 <label>Role</label>
									 <input type="text" class="form-control " value="{{isset($data['Role'][$i])? $data['Role'][$i] : ''}}" name="Role[]">
								 </div>
								 <div class="form-group col-2">
									 <label>Expertise</label>
									 <input type="text" class="form-control " value="{{isset($data['Expertise'][$i])? $data['Expertise'][$i] : ''}}" name="Expertise[]">
								 </div>
 
							<?php } } 
							else
								{
									?>
									 
						<div class="form-group col-2">
									 <label>Given Name</label>
									 <input type="text" class="form-control" value="{{isset($data['Given_Name'])? $data['Given_Name'] : ''}}" name="Given_Name[]">
								 </div>
						<div class="form-group col-2">
									 <label>Family Name</label>
									 <input type="text" class="form-control" value="{{isset($data['Family_Name'])? $data['Family_Name'] : ''}}" name="Family_Name[]">
								 </div>
								 <div class="form-group col-2">
									 <label>Title</label>
									 <input type="text" class="form-control " value="{{isset($data['Title'])? $data['Title'] : ''}}" name="Title[]">
								 </div>
								 <div class="form-group col-2">
									 <label>Role</label>
									 <input type="text" class="form-control " value="{{isset($data['Role'])? $data['Role'] : ''}}" name="Role[]">
								 </div>
								 <div class="form-group col-2">
									 <label>Expertise</label>
									 <input type="text" class="form-control " value="{{isset($data['Expertise'])? $data['Expertise'] : ''}}" name="Expertise[]">
								 </div>

							  
									<?php
                                   }
									?>
									</div>
								 	<div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_expetise">Add</button>
								</div>	
								<br>
						<!--<div class="col-md-12 row">
						<div class="form-group col-2">
									 <label>Given Name</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
						<div class="form-group col-2">
									 <label>Family Name</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								 <div class="form-group col-2">
									 <label>Title</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								 <div class="form-group col-2">
									 <label>Role</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								 <div class="form-group col-2">
									 <label>Expertise</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
							    </div>-->
							    
							    <!--<p>If this is an external expert,please upload their CV, if applicable</p>
							    <p>Curriculum vitae (PDF or Word)</p>
							    
							    	<div class="col-md-12 row">
							    	    
							    	     <div class="form-group col-12">
									
									 <input type="file" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								 <br><br>
								 <a href="javascript:void(0);" class="btn btn-success _btn sport_additional_button">Add</a>
							    	    </div>-->
										
										 <h3> Budget Proposal </h3>
 <div class="card sport_card Diploma_Certificate" id="container" style="width: 100%;
    float: left;">
    <p>Please provide a detailed budget for each phase of the project</p>
	<h3>Detailed breakdown of budget requested from Olympic Solidarity</h3>
							 	
					<?php
					 if(!empty($data))
					 {
					$num=count($data['description1']);
					$amount=count($data['amount1']);
					for($i=0;$i<$num;$i++)
				{
				?>	
               
				<div class="row">

                       <div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Description</label>
											<input type="text" value="<?php if(isset($data['description1'][$i]) && !empty($data['description1'][$i])) echo $data['description1'][$i] ?>" class="form-control required" name="description1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Amount(USD)</label>
											<input type="text" value="<?php if(isset($data['amount1'][$i]) && !empty($data['amount1'][$i])) echo $data['amount1'][$i] ?>" class="form-control required toSum" name="amount1[]">
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
											<label><i class="fas fa-circle"></i>Description</label>
											<input type="text" value="<?php if(isset($data['description1']) && !empty($data['description1'])) echo $data['description1'] ?>" class="form-control required" name="description1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
									<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Amount(USD)</label>
											<input type="text" value="<?php if(isset($data['amount1']) && !empty($data['amount1'])) echo $data['amount1'] ?>" class="form-control required toSum" name="amount1[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				<?php } ?>
							
									 </div>
									 <div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_Diploma_Certificate">Add</button>
								</div>
									 <br>		 
							 
						<br>
						<div class="col-md-6">
									<div class="form-row col">
										<div class="col">
											<label><i class="fas fa-circle"></i>Total budget requested(USD)</label>
											<input type="text" placeholder="0" value="" class="form-control required" name="" id="totalSum">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>

									<script type="text/javascript">
	$('#add').click(function(){
    $('#container').append('<input type="text" class="toSum" /><br/>');
});

$('#container').change(function(e){
    var sum = 0;
    $(this).find('.toSum').each(function(index,el){
        var val = $(el).val();
        if(val && val != "")
            sum+= parseInt(val);
    });
    $('#totalSum').val(sum);
});
</script>


 
               <br>
			   <br>
			   <div class="card sport_card Diploma_Certificate_new" id="container1" style="width: 100%;
    float: left;">
     
	<h3>Other sources of funding: Please list organisations providing additional funds for this project (including your NOC) and for what type of expenditures</h3>
							 	
					<?php
					 if(!empty($data))
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
											<label><i class="fas fa-circle"></i>Organisation</label>
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
											<label><i class="fas fa-circle"></i>Amount(USD)</label>
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
											<label><i class="fas fa-circle"></i>Organisation</label>
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
											<label><i class="fas fa-circle"></i>Amount(USD)</label>
											<input type="text" value="<?php if(isset($data['amount']) && !empty($data['amount'])) echo $data['amount'] ?>" class="form-control required toSum1" name="amount[]">
											 <div class="required_error">&nbsp;</div>
										</div>
									</div>
									</div>
									 
				</div>
				<?php } ?>
							
									 </div>
									 <div class="col-md-12">
									<button type="button" name="" class="btn btn-success add_Diploma_Certificate_new">Add</button>
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
										
									
							  <br>
							    	<!-- <h3>Budget Proposal</h3>
							<p>Please provide a detailed budget for each phase of the project</p>
							<h3>Detailed breakdown of budget requested from Olympic Solidarity</h3>
						<div class="col-md-12 row">
						    <div class="form-group col-6">
									 <label>Description </label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								  <div class="form-group col-6">
									 <label>Amount (USD)</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								   <div class="form-group col-6">
									 <label>Total Budget Requested (USD)</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								
							
						    </div>	    
							    	    
							    	<a href="javascript:void(0);" class="btn btn-success _btn sport_additional_button">Add Item</a> 
								 	    
							    	  <br>  <br> 
							 <h3>Other sources of funding: Please list organisations providing additional 
funds for this project (including your NOC) and for what type of expenditures</h3>
						<div class="col-md-12 row">
						    <div class="form-group col-4">
									 <label>Organisation</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								  <div class="form-group col-4">
									 <label>Type of Expenditure </label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								   <div class="form-group col-4">
									 <label>Amount (USD)</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								
							
						    </div>	    
							    	    
							    	<a href="javascript:void(0);" class="btn btn-success _btn sport_additional_button">Add</a> 
								 	    
							    	   <br>  <br>	    
							    <div class="col-md-12 row">
					
								  <div class="form-group col-6">
									 <label>Total Other Source of Funding (USD)</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								   <div class="form-group col-6">
									 <label>Total Budget OS and Other Sources (USD)</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								
							</
						    </div>-->	
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
							    </div>	    
							   	 <!--<h3>Files/Uploads/Related Documents</h3>
							   	 <p>Service provider's proposal and/or contract</p>
						<div class="col-md-12 row" style="background-color: #cecdcd;padding: 11px 15px 0 0;">
						    <div class="form-group col-1">
									 <label>Title </label>
								</div>
							 <div class="form-group col-1">
									 <label>Date</label>
								</div>
								 <div class="form-group col-2">
									 <label>Author</label>
								</div>
								 <div class="form-group col-1">
									 <label>Type</label>
								</div>
								 <div class="form-group col-1">
									 <label>Size</label>
								</div>
								 <div class="form-group col-2">
									 <label>Version</label>
								</div>
							 <div class="form-group col-4">
									 <label>Discussions</label>
								</div>
								
						    </div>
						    <div class="form-group col-12">
									
									 <input type="file" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								 
								 	   	 <p>Service provider's proposal and/or contract</p>
						<div class="col-md-12 row" style="background-color: #cecdcd;padding: 11px 15px 0 0;">
						    <div class="form-group col-1">
									 <label>Title </label>
								</div>
							 <div class="form-group col-1">
									 <label>Date</label>
								</div>
								 <div class="form-group col-2">
									 <label>Author</label>
								</div>
								 <div class="form-group col-1">
									 <label>Type</label>
								</div>
								 <div class="form-group col-1">
									 <label>Size</label>
								</div>
								 <div class="form-group col-2">
									 <label>Version</label>
								</div>
							 <div class="form-group col-4">
									 <label>Discussions</label>
								</div>
								
						    </div>
						    <div class="form-group col-12">
									
									 <input type="file" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								 
								 
								 	 	   	 <h3>Other File Uploads</h3>
								 	 	   	 <p>Please Upload any other document you wish to share</p>
					<div class="col-md-12 row">
					
								  <div class="form-group col-12 row" style="background-color: #cecdcd;padding: 11px 15px 0 0;">
									 <div class="form-group col-1">
									 <label>Title </label>
								</div>
							 <div class="form-group col-3">
									 <label>Type Size</label>
								</div>
								 <div class="form-group col-2">
									 <label>Version</label>
								</div>
								 <div class="form-group col-1">
									 <label>Discussions</label>
								</div>
								
								 </div>
								     <div class="form-group col-12" style="margin-top: -15px;">
									
									 <input type="file" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								  &nbsp;&nbsp; <div class="form-group col-5">
									 <label>Files Notes</label>
									 <input type="text" class="form-control result_percentage" value="" name="result_percentage">
								 </div>
								
							
						    </div>
						    <a href="javascript:void(0);" class="btn btn-success _btn sport_additional_button">Add File</a>
							 </div>
						 </div>-->
                           
                            
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
	
		<script type="text/javascript">
		
var max_fields      = 20;
var wrapper         = $(".Other_section"); 
var add_button      = $(".Other_section_add");
var remove_button   = $(".remove_field_button");

$(add_button).click(function(e){
	e.preventDefault();
	var total_fields = wrapper[0].childNodes.length;
	if(total_fields < max_fields){
		$(wrapper).append('<div class="row"><div class="form-group col-3"> <label>Other (010)</label></div><div class="form-group col-3"> <label>Number(010)</label> <input type="text" class="form-control result_percentage" name="Other_1[]"></div><div class="form-group col-3"> <label>Which ones? (010)</label> <input type="text" class="form-control result_percentage" name="Other_2[]"></div><div class="form-group col-3"> <label>Role(010)</label> <input type="text" class="form-control result_percentage"  name="Other_3[]"></div></div>');
		 $('.textarea').summernote();
	}
});
</script>

<script type="text/javascript">
		
var max_fields_d      = 20;
var wrapper_d         = $(".Governmental_Organisations"); 
var add_button_d      = $(".Governmental_Organisations_add");
var remove_button_d   = $(".remove_field_button");

$(add_button_d).click(function(e){
	e.preventDefault();
	var total_fields_d = wrapper_d[0].childNodes.length;
	if(total_fields_d < max_fields_d){
		$(wrapper_d).append('<div class="row"><div class="form-group col-3"> <label>Men (031)</label></div><div class="form-group col-3"> <label>Number(031)</label> <input type="text" class="form-control all_Outreach men_31"  name="Organisations_Other_1[]"></div><div class="form-group col-3"> <label>Women (031)</label> <input type="text" class="form-control all_Outreach women_31"  name="Organisations_Other_2[]"></div><div class="form-group col-3"> <label>Total(031)</label> <input type="text" class="form-control all_Outreach total_31" name="Organisations_Other_3[]"></div></div>');
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



<script type="text/javascript">
var max_fields_d      = 20;
var wrapper_d         = $(".Diploma_Certificate"); 


var add_button_d      = $(".add_Diploma_Certificate");
var remove_button_d   = $(".remove_field_button");

$(add_button_d).click(function(e){
	e.preventDefault();
	var total_fields_d = wrapper_d[0].childNodes.length;
	if(total_fields_d < max_fields_d){
		$(wrapper_d).append('<div class="row"><div class="col-md-6"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Description</label> <input type="text" class="form-control required" name="description1[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-6"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Amount(USD)</label> <input type="text"  class="form-control required toSum" name="amount1[]"><div class="required_error">&nbsp;</div></div></div></div> </div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>

<script type="text/javascript">
var max_fields_d1      = 20;
var wrapper_d1         = $(".Diploma_Certificate_new"); 


var add_button_d1      = $(".add_Diploma_Certificate_new");
var remove_button_d1   = $(".remove_field_button");

$(add_button_d1).click(function(e){
	e.preventDefault();
	var total_fields_d1 = wrapper_d1[0].childNodes.length;
	if(total_fields_d1 < max_fields_d1){
		$(wrapper_d1).append('<div class="row"><div class="col-md-4"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Organisation</label> <input type="text" class="form-control required" name="description_new[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-4"><div class="form-row col"><div class="col"><label><i class="fas fa-circle"></i>Type of Expenditure</label><input type="text" class="form-control required" name="type_expenditure[]"><div class="required_error">&nbsp;</div></div></div></div><div class="col-md-4"><div class="form-row col"><div class="col"> <label><i class="fas fa-circle"></i>Amount(USD)</label> <input type="text"  class="form-control required toSum1" name="amount[]"><div class="required_error">&nbsp;</div></div></div></div> </div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>


<script type="text/javascript">
var max_fields_d6     = 20;
var wrapper_d6         = $(".add_expetise_new"); 


var add_button_d6      = $(".add_expetise");
var remove_button_d6   = $(".remove_field_button");

$(add_button_d6).click(function(e){
	e.preventDefault();
	var total_fields_d6 = wrapper_d6[0].childNodes.length;
	if(total_fields_d6 < max_fields_d6){
		$(wrapper_d6).append('<div class="row"><div class="form-group col-2"><label>Given Name</label><input type="text" class="form-control" value="{{isset($data['Given_Name'])? $data['Given_Name'] : ''}}" name="Given_Name[]"></div><div class="form-group col-2"><label>Family Name</label><input type="text" class="form-control" value="{{isset($data['Family_Name'])? $data['Family_Name'] : ''}}" name="Family_Name[]"></div><div class="form-group col-2"><label>Title</label><input type="text" class="form-control" value="{{isset($data['Title'])? $data['Title'] : ''}}" name="Title[]"></div><div class="form-group col-2"><label>Role</label><input type="text" class="form-control" value="{{isset($data['Role'])? $data['Role'] : ''}}" name="Role[]"></div><div class="form-group col-2"><label>Expertise</label><input type="text" class="form-control" value="{{isset($data['Expertise'])? $data['Expertise'] : ''}}" name="Expertise[]"></div></div>');
		 $('.textarea').summernote();
	}
});
 
 
</script>