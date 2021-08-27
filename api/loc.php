<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);

$loc_65 = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/65/fileinfo');
$loc_66 = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/66/fileinfo');
$loc_67 = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/67/fileinfo');
$loc_68 = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/68/fileinfo');
$loc_69 = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/69/fileinfo');
$loc_70 = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/70/fileinfo');

if($loc_65){
	$pega_loc1a = explode('loc_my',$loc_65);
	$pega_loc2a = explode(',',$pega_loc1a[1]);
	$pega_loc3a = explode('=',$pega_loc2a[8]);
	$pega_loc4a = explode('=',$pega_loc2a[11]);
	$loc_next_version = "<label id = 'loc65'>loc_pt-br.".$pega_loc4a[0] ."~3D</label>";
	echo $loc_next_version;
 }
if($loc_66){
	echo "<script>loc65.innerHTML = ''</script>";
	$pega_loc1a = explode('loc_my',$loc_66);
	$pega_loc2a = explode(',',$pega_loc1a[1]);
	$pega_loc3a = explode('=',$pega_loc2a[8]);
	$pega_loc4a = explode('=',$pega_loc2a[11]);
	$loc_next_version = "<label id = 'loc66'>loc_pt-br.".$pega_loc4a[0] ."~3D</label>";
	echo $loc_next_version;
	} 
if($loc_67){
	echo "<script>loc65.innerHTML = '';loc66.innerHTML = ''</script>";
	$pega_loc1a = explode('loc_my',$loc_67);
	$pega_loc2a = explode(',',$pega_loc1a[1]);
	$pega_loc3a = explode('=',$pega_loc2a[8]);
	$pega_loc4a = explode('=',$pega_loc2a[11]);
	$loc_next_version = "<label id = 'loc67'>loc_pt-br.".$pega_loc4a[0] ."~3D</label>";
	echo $loc_next_version;
	} 
if($loc_68){
	echo "<script>loc65.innerHTML = '';loc66.innerHTML = '';loc67.innerHTML = ''</script>";
	$pega_loc1a = explode('loc_my',$loc_68);
	$pega_loc2a = explode(',',$pega_loc1a[1]);
	$pega_loc3a = explode('=',$pega_loc2a[8]);
	$pega_loc4a = explode('=',$pega_loc2a[11]);
	$loc_next_version = "<label id = 'loc68'>loc_pt-br.".$pega_loc4a[0] ."~3D</label>";
	echo $loc_next_version;
	} 
if($loc_69){
	echo "<script>loc65.innerHTML = '';loc66.innerHTML = '';loc67.innerHTML = '';loc68.innerHTML = ''</script>";
	$pega_loc1a = explode('loc_my',$loc_69);
	$pega_loc2a = explode(',',$pega_loc1a[1]);
	$pega_loc3a = explode('=',$pega_loc2a[8]);
	$pega_loc4a = explode('=',$pega_loc2a[11]);
	$loc_next_version = "<label id = 'loc69'>loc_pt-br.".$pega_loc4a[0] ."~3D</label>";
	echo $loc_next_version;
	} 	
if($loc_70){
	echo "<script>loc65.innerHTML = '';loc66.innerHTML = '';loc67.innerHTML = '';loc68.innerHTML = '';loc69.innerHTML = ''</script>";
	$pega_loc1a = explode('loc_my',$loc_70);
	$pega_loc2a = explode(',',$pega_loc1a[1]);
	$pega_loc3a = explode('=',$pega_loc2a[8]);
	$pega_loc4a = explode('=',$pega_loc2a[11]);
	$loc_next_version = "<label id = 'loc70'>loc_pt-br.".$pega_loc4a[0] ."~3D</label>";
	echo $loc_next_version;
	} 	
?>