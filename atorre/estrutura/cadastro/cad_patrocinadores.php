<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$nome 			= 	$_POST['nome_patrocinador'];
$empresa 	    = 	$_POST['empresa_patrocinador'];
$marca 			= 	$_POST['marca_patrocinador'];
$cnpj           = 	$_POST['cnpj_patrocinador'];
$nivel		    = 	$_POST['nivel_patrocinador'];
$cod_evento 	= 	$_POST['cod_evento'];

if ($nome != "" && $empresa != "" && $marca != "" && $cnpj != "" && $nivel != "" && $cod_evento != ""){ 
    mysqli_query($link,"INSERT INTO patrocinadores,evento(pat_nome,pat_empresa,pat_marca,
    pat_cnpj,pat_nivel,evt_codigo) VALUES
    ('$nome','$empresa','$marca','$cnpj','$nivel','$cod_evento')");
    echo "<script>alert('Patrocinador cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>
