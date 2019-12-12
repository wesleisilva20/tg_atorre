<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$tipo 			= 	$_POST['tipo'];
$localizacao 	= 	$_POST['localizacao'];

if ($tipo != "" && $localizacao != "" ){ 
    mysqli_query($link,"INSERT INTO area_atracao(are_tipo,are_localizacao) VALUES
    ('$tipo','$localizacao')");
    echo "<script>alert('Tipo da área cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>