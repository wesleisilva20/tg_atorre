<?php 
//arquivop de cadastro
include "../connect.php";
date_default_timezone_set('America/Sao_Paulo');

$nome 			= 	$_POST['nome_participante'];
$rg 	        = 	$_POST['rg_participante'];
$cpf 			= 	$_POST['cpf_participante'];
$cidade	        = 	$_POST['cidade_participante'];
$telefone		= 	$_POST['telefone_participante'];
$email          =   $_POST['email_participante'];
$cod_evento 	= 	$_POST['cod_evento'];

if ($nome != "" && $rg != "" && $cpf != "" && $cidade != "" && $telefone != "" && $cod_evento != ""){ 
    mysqli_query($link,"INSERT INTO participantes(par_nome,par_rg,par_cpf,
    par_cidade,par_telefone,par_email,evt_codigo) VALUES
    ('$nome','$rg','$cpf','$cidade','$telefone','$email','$cod_evento')");
    echo "<script>alert('Participante cadastrado com sucesso');window.history.go(-1);</script>";
	}
	
	else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>