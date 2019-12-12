<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$nome 			= 	$_POST['nome_parceiro'];
$empresa 	    = 	$_POST['empresa_parceiro'];
$cnpj 			= 	$_POST['cnpj_parceiro'];
$contribuicao 	= 	$_POST['contribuicao_parceiro'];

if ($nome != "" && $empresa != "" && $cnpj != "" && $contribuicao != ""){ 
    mysqli_query($link,"INSERT INTO parceiros(pcr_nome,pcr_empresa,pcr_cnpj,pcr_contribuicao) VALUES
    ('$nome','$empresa','$cnpj','$contribuicao')");
    echo "<script>alert('Parceiro cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>