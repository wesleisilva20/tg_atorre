<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$cod_evento 			= 	$_POST['cod_evento'];
$cod_func 	            = 	$_POST['cod_func'];
$cod_parceiros          = 	$_POST['cod_parceiros'];
$cod_area               = 	$_POST['cod_area'];

if ($cod_evento != "" && $cod_func != "" && $cod_parceiros != "" && $cod_area != ""){ 
    mysqli_query($link,"INSERT INTO setor(evt_cod,fun_codigo,pcr_codigo,are_codigo) VALUES
    ('$cod_evento,'$cod_func','$cod_parceiros','$cod_area')");
    echo "<script>alert('Setor cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>