<?php
$url = json_decode(file_get_contents('https://rmdff.vercel.app/api/projeto'));

echo "<div style = 'text-align:center'><b id = 'title'>FF: ".$url->version."</b><br>";
echo "<img id 'img' src = '".$url->icone."'></div><br>";
echo "<center><b id = 'loc'>".$url->loc_adv."</b></center><br>";
echo "<b id = 'ver'>Versão atual: ".$url->version_atual." (Status: ".$url->status.")</b><br>";
echo "<b id = 'che'>".$url->next_version."</b>";
echo "<div style = 'float:right;'><b class = 'date'>Registro ADV: ".$url->registro_adv."</b><br>";
echo "<b class = 'date'>Início do ADV: ".$url->playtest_adv."</b><br>";
echo "<b class = 'date'>Fim ADV: ".$url->fim_adv."</b></div><br><br>";
echo "<br><br><center><b class = 'date'>Ícones de recargas</b></center>";
?>
<style>
body{color: #fff;background: black}
#ver{font-size: 24px;}
#che{font-size: 22px}
#loc{font-size: 24px}
.date{font-size: 22px}

  #title{
     -webkit-text-stroke-width: 1px;
     -webkit-text-stroke-color: #fff;
     font-size: 3em; color: #000;
   }
</style>
<img id = "img1">
<img id = "img2">
<img id = "img3">
<img id = "img4">
<script>   
var data = new Date()
var dia = data.getDate()
var mes = data.getMonth()+1
if(dia<10){var dia = "0"+dia}
if(mes<10){var mes = "0"+mes}
var i2 = Number(dia+1);var i3 = Number(dia+2);var i4 = Number(dia+3)
img1.src='https://dl.ctl.freefiremobile.com/common/OB29/Topupicons/TOPUPEvent'+mes+dia+'BR_pt.png'
img2.src='https://dl.ctl.freefiremobile.com/common/OB29/Topupicons/TOPUPEvent'+mes+i2+'BR_pt.png'
img3.src='https://dl.ctl.freefiremobile.com/common/OB29/Topupicons/TOPUPEvent'+mes+i3+'BR_pt.png'
img4.src='https://dl.ctl.freefiremobile.com/common/OB29/Topupicons/TOPUPEvent'+mes+i4+'BR_pt.png'
img1.onerror=function(){img1.style.display = "none"}
img2.onerror=function(){img2.style.display = "none"}
img3.onerror=function(){img3.style.display = "none"}
img4.onerror=function(){img4.style.display = "none"}


     if(che.innerHTML.match("disponivel")){che.style.color="green"}else{che.style.color="red"}
     if(loc.innerHTML.match("66")){loc.style.color="green"}else{loc.style.color="whiter"}
</script>
