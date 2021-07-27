<?php

$link = json_decode(file_get_contents('https://rmdff.vercel.app/api/apiff.phpW'));
$nome_ff = $link->ff->name;
$nome_da_versao_ff = $link->ff->version_name;
$codigo_da_versao_ff = $link->ff->version_code;
$status_ff = $link->ff->status;
$versao_ff = $link->ff->version_atual;
$proxima_versao_ff = $link->ff->version_disponivel;
$atualizacao = $link->ff->next_version_date;
?>

<h4><?php echo "Nome: " . $nome_ff; ?></h4>
<h4><?php echo "Versão: " . $nome_da_versao_ff . " (" . $codigo_da_versao_ff . ")" ; ?></h4>
<h4><?php echo "Status: " . $status_ff; ?></h4>
<h4><?php echo "Versão Atual: " . $versao_ff; ?></h4>
<h4><?php echo "Próxima Versão Disponível: " . $proxima_versao_ff; ?></h4>
<h4><?php echo "Próxima Atualizacão: " . $atualizacao; ?></h4>


