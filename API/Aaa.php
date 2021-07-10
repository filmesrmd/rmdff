<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<meta charset="utf-8">
<body>
<form method="post" enctype = "multipart/form-data">
	<br><br><label for = 'arquivo' id = 'ol'>UPLOAD DO BANNER</label>
	<br><br><input style="display: none;" type="file" id = "arquivo" name="arquivo"><br><br><br><br>
	<label for = "mc">UPLOAD DA MARCA</label><br><br><br><br>
	<input style="display: none;" id = "mc" type="file" name="mc">
	<button>EDITAR</button>
</form><br>
<center>
	<button onclick="act()">ATUALIZAR POSIÇÃO</button><br>
	<h1>VISUALIZACÃO</h1>
</center>
<style>
	label{
	background: black;
	color: #fff;
	text-align: center;
	padding: 40px 80px;
	border-radius: 20px;
	font-size: 20px;
	border:2px solid #fff;
	cursor: pointer;
}
button{
	background: black;
	color: #fff;
	text-align: center;
	padding: 30px 76px;
	font-size: 20px;
	border:2px solid #ccc;
	cursor: pointer;
}
</style>
<?php
$nome_pasta = time();
mkdir ($nome_pasta);
$caminho_file = ($_FILES['arquivo']['tmp_name']);
$save_file = $nome_pasta.'/'.md5(time()).".png";
move_uploaded_file($caminho_file, $save_file);
$size = getimagesize($save_file);
$position_w =  rand(1,550);
$position_h =  rand(1,250);

$caminho_file2 = ($_FILES['mc']['tmp_name']);
$save_file2 = 'marcas/'.md5(time());
move_uploaded_file($caminho_file2, $save_file2);


$zero = $size[0];
$um = $size[1];

echo "<center><div id='capture' style='background-color:black;width:".$zero."px;height:".$size[1]."px; background-image: url(".$save_file.");'><img id = 'marca' style ='width:170px;position:relative;top:".$position_w."px;left:".$position_h."'src = '".$save_file2."'></div></center>";
?>

<script>
function act(){
	location.reload()
}

marca.onerror = function(){
	marca.style.display="none"
}


	html2canvas(document.querySelector("#capture")).then(canvas => {aqui.href = canvas.toDataURL()
});

function dw(){
var image = new Image();
image.src = canvas.toDataURL();
}

</script>
<a download href="" id = "aqui"><BUTTON id = "h">BAIXAR</button></a><br>

</body>
