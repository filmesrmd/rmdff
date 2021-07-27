<?php
header('Content-Type: application/json');

//tira os erros unuteis
error_reporting(E_ALL);
ini_set("display_errors", 0);
//

//captura as api
$adv = json_decode(file_get_contents('https://ff-advance.ff.garena.com/api/index?lang=en'));
$convert = json_decode(file_get_contents('http://ws2.aptoide.com/api/7/app/getMeta/package_name=com.dts.freefireth'));
$convertmax = json_decode(file_get_contents('https://mumu-store-api.webapp.163.com/api/detail/pkg_name/com.dts.freefiremax/'));
$versao = $convert->data->file->vername;
$versaomax = $convertmax->app->version_name;
$versaoadv = "66.17.0";
$explodeadv = explode('.',$versaoadv);
$somaadv = $explodeadv[1]+'1';
$nextadv = $explodeadv[0].".".$somaadv.".".$explodeadv[2];

$convertff = json_decode(file_get_contents('https://version.common.freefiremobile.com/live/ver.php?version='.$versao.'&device=android'));
$convertffmax = json_decode(file_get_contents('https://version.common.freefiremobile.com/live/ver.php?version='.$versaomax.'&device=android_max'));
$convertffadv = json_decode(file_get_contents('https://version.advance.freefiremobile.com/trial/ver.php?version='.$versaoadv.'&device=android'));

if($convertffadv->code == 2){
	$convertffadv = json_decode(file_get_contents('https://version.advance.freefiremobile.com/trial/ver.php?version='.$nextadv.'&device=android'));
}

//verifica o status de online e offline
if($convertff->is_server_open == "true"){$status = "online";}
else{$status = "offline";}

if($convertffmax->is_server_open == "true"){$statusmax = "online";}
else{$statusmax = "offline";}

if($convertffadv->is_server_open == "true"){$statusadv = "online";}
else{$statusadv = "offline";}
//


//pega a url e verifica se tem uma nova versão ou não (ff normal e ff max)
$explode = explode('.',$convertff->remote_version);
$soma = $explode[2]+'1';
$next = $explode[0].".".$explode[1].".".$soma;
$very = file_get_contents('https://freefiremobile-a.akamaihd.net/live/ABHotUpdates/android/'.$next.'/versioninfo');

if($very){
	$conf = $next;
	$confmax = "2.".$explode[1].".".$explode[2]+'1';
}if($conf == null && $confmax == null){
	$confmax = "Nada disponível no momento";
	$conf = "Nada disponível no momento";
}
//


//indica o site onde mostra as novidades da atualizacão
$path_url = file_get_contents('https://dl.dir.freefiremobile.com/common/web_event/aswqooiwd/ff29.html?lang=pt-br');
if($path_url){
	 $path = "https://dl.dir.freefiremobile.com/common/web_event/aswqooiwd/ff29.html?lang=pt-br";
}else{$path = "https://dl.dir.freefiremobile.com/common/web_event/aswqooiwd/ff28.html?lang=pt-br";}

$pathmax_url = file_get_contents('https://dl.dir.freefiremobile.com/common/web_event/aswqooiwd/ffmax29.html?lang=pt-br');
if($pathmax_url){
	 $pathmax = "https://dl.dir.freefiremobile.com/common/web_event/aswqooiwd/ffmax29.html?lang=pt-br";
}else{$pathmax = "https://dl.dir.freefiremobile.com/common/web_event/aswqooiwd/ffmax28.html?lang=pt-br";}
//



$time_re= $adv->register_time[0];
$time_jo= $adv->playtest_time[0];
$time_jo_end= $adv->playtest_time[1];


$loc = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/66/fileinfo');

if($loc){
	echo ' ';
}else{
	$loc = file_get_contents('https://freefiremobile-a.akamaihd.net/advance/ABHotUpdates/android/optional/optionallocres/65/fileinfo');
}

$pega_loc1a = explode('loc_my',$loc);
$pega_loc2a = explode(',',$pega_loc1a[1]);
$pega_loc3a = explode('=',$pega_loc2a[8]);
$pega_loc4a = explode('=',$pega_loc2a[11]);
$loc_next_version = "loc_pt-br.".$pega_loc4a[0] ."~3D";




//cria o json/api
$info = array(
	'ff'=>[
			'name' => 'Free Fire',
			'version_code' => $convert->data->file->vercode, 
			'version_name' => $convert->data->file->vername,
			'version_atual'=> $convertff->remote_version,
			'status' => $status,
			'version_disponivel' => $conf,
			'next_version_date' => 'a ver',
			'notas_update' =>$path
		],
		'ffmax' =>[
			'name' => 'Free Fire Max',
			'version_code' => $convertmax->app->version_code,
			'version_name' => $convertmax->app->version_name,
			'version_atual'=> $convertffmax->remote_version,
			'status' => $statusmax,
			'notas_update' =>$pathmax,
			'next_version_date' => 'a ver',
			'version_disponivel' => $confmax
		],
		'ffadv'=>[
			'name' => 'Free Fire Advance',
			'registro' => date('d-m',$time_re),
			'joga' => date('d-m',$time_jo),
			'finaliza' => date('d-m',$time_jo_end),
			'version_atual'=> $convertffadv->remote_version,
			'status' => $statusadv,
			'loc_name' => $loc_next_version
		]
	);
//

//exibe a api
echo (json_encode($info));
//

?>