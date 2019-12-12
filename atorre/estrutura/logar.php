<?php
	include "connect.php";

	$cpf   =   $_POST['cpf_logar'];

	if($cpf != "" ){
		//echo "Logado";
		$sql = mysqli_query($link,"SELECT * FROM funcionarios WHERE fun_cpf = '$cpf'");
		$registro = mysqli_num_rows($sql); //quantas linhas/registros foram encontradas
		while ($line = mysqli_fetch_array($sql)) {
			$cpf_usuario = $line['fun_cpf'];
			$nivel = $line['fun_nivel']; 
		}
		if ($registro) {
			if ($cpf_usuario == $cpf) {
				session_start();
				$_SESSION['cpf'] = $cpf;
				if ($nivel == 1) {
					header('location:dashboard.php');
				}else{
					header('location:funcionario.php');
				}
			}else{
				echo "CPF não confere nos cadastros. Deseja se cadastrar?";
				echo "<a href='index.php'>Voltar ao Home</a> ";
			}
		}
	}
?>