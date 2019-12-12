<?php 
//arquivop de cadastro
include "connect.php";
date_default_timezone_set('America/Sao_Paulo');

$nome 			= 	$_POST['nome'];
$rg 			= 	$_POST['rg'];
$cpf			= 	$_POST['cpf'];
$end 	        = 	$_POST['end'];
$nivel 		    =   $_POST['nivel'];

//verifica se foi inserido tudo corretamente
if ($nome !="" && $rg !="" && $cpf !="" && $end !="" && $nivel !=""){ 	 	
	mysqli_query($link,"INSERT INTO funcionarios(fun_nome,fun_rg,fun_cpf,fun_endereco,fun_nivel) VALUES
		('$nome','$rg','$cpf','$end','$nivel')");
		echo "<script>alert('Usuário cadastrado com sucesso');window.history.go(-1);</script>";
		echo "</p>";
	}else{
		echo "<script>alert('Faltou informação');window.history.go(-1);</script>";
	}	
?>