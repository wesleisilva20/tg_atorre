<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$nome 			= 	$_POST['nome_atracao'];
$empresa 	    = 	$_POST['empresa_atracao'];
$tipo 			= 	$_POST['tipo_atracao'];
$convidado	    = 	$_POST['convidado_atracao'];
$inicio 		= 	$_POST['inicio_atracao'];
$fim 	        = 	$_POST['fim_atracao'];

if ($nome != "" && $empresa != "" && $tipo != "" && $convidado != "" && $inicio != "" && $fim != ""){ 
    mysqli_query($link,"INSERT INTO atracao(atr_nome,atr_empresa,atr_tipo,
    atr_convidado,atr_hora_inicio,atr_hora_fim) VALUES
    ('$nome','$empresa','$tipo','$convidado','$inicio','$fim')");
    echo "<script>alert('Atração cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>