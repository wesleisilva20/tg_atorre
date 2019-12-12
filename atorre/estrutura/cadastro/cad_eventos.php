<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$cod_calend 	= 	$_POST['cod_calend'];
$evento 	    = 	$_POST['evento'];
$endereco	    = 	$_POST['end_evento'];

if ($cod_calend != "" && $evento != "" && $endereco != ""){ 
    mysqli_query($link,"INSERT INTO evento(cld_codigo,evt_nome,evt_endereco) VALUES
    ('$cod_calend','$evento','$endereco')");
    echo "<script>alert('Evento cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>