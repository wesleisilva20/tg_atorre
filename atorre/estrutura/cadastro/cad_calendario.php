<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$inicio			= 	$_POST['data_inicio'];
$final	        = 	$_POST['data_final'];
$abertura		= 	$_POST['hora_abertura'];
$fechamento 	= 	$_POST['hora_fechamento'];

if ($inicio != "" && $final != "" && $abertura != "" && $fechamento != ""){ 
    mysqli_query($link,"INSERT INTO calendario(cld_data_inicio,cld_data_fim,cld_hora_abertura,
    cld_hora_fechamento) VALUES
    ('$inicio','$final','$abertura','$fechamento')");
    echo "<p style='text-align: center; color: #333;padding: 5px'> Calendário cadastrado com sucesso<br>";
    echo "<a href='../dashboard.php' style='color: #59F'> Home Menu</a>";
    echo "</p>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>