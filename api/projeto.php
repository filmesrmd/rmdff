<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);
header('Content-Type: application/json');

//captura aos link
$adv = json_decode(file_get_contents('https://ff-advance.ff.garena.com/api/index?lang=pt'));
$convert = json_decode(file_get_contents('http://ws2.aptoide.com/api/7/app/getMeta/package_name=com.dts.freefireth'));
$icone = "https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png";
$review_server = file_get_contents("https://review.client.common.freefiremobile.com");
$loc_url = file_get_contents('https://rmdff.vercel.app/api/loc.php');

//retira
$loc_ex1 = explode('>', $loc_url);
$loc_ex2 = explode('<',$loc_ex1[1]); 
if($review_server){$review =  "Servidor de teste online";}
else{$review="Servidor de teste offlie";}
$versao = $convert->data->file->vername;
$versao_atual = json_decode(file_get_contents("https://version.common.freefiremobile.com/live/ver.php?version=".$versao."&device=android"));

$va = $versao_atual->remote_version;
if($versao_atual->is_server_open == "true"){$status  = "Online";}else{$status  = "Offline";}
$time_re= $adv->register_time[0];
$time_jo= $adv->playtest_time[0];
$time_jo_end= $adv->playtest_time[1];

$explode = explode('.',$versao_atual->remote_version);
$soma = $explode[2]+'1';
$next = $explode[0].".".$explode[1].".".$soma;
$next2 = $next+1;
$very = file_get_contents('https://freefiremobile-a.akamaihd.net/live/ABHotUpdates/android/'.$next.'/versioninfo');
$very2 = file_get_contents('https://freefiremobile-a.akamaihd.net/live/ABHotUpdates/android/'.$next2.'/versioninfo');

if($very || $very2){
     $conf = 'Possui um versao disponivel';
}else{
     $conf = "Nada disponivel no momento";
}
$version_ff = $versao;
$atual = $va;
$loc = $loc_ex2[0];
$server_review = $review;
$o = $status;

$res = [
     "version"=>$version_ff,
     "version_atual"=>$atual,
     "status"=>$status,
     "icone"=>$icone,
     "registro_adv"=>date("d-m-Y",$time_re),
     "playtest_adv"=>date("d-m-Y",$time_jo),
     "fim_adv"=>date("d-m-Y",$time_jo_end),
     "next_version"=>$conf,
     "loc_adv"=>$loc
 ];
echo json_encode($res);
?>
