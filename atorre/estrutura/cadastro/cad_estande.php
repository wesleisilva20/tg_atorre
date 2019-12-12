<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$nome 			= 	$_POST['nome_estande'];
$tipo 			= 	$_POST['tipo_estande'];
$valor	        = 	$_POST['valor_estande'];
$fun_codigo	    = 	$_POST['funcionario_codigo'];

if ($nome != "" && $tipo != "" && $valor != "" && $fun_codigo != ""  ){ 
    mysqli_query($link,"INSERT INTO estandes(est_nome,est_tipo,est_valor,fun_codigo) VALUES
    ('$nome','$tipo','$valor','$fun_codigo')");
    echo "<script>alert('Tipo da área cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}
?>

