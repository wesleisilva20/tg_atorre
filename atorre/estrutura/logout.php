<?php
session_start();
unset($_SESSION['cpf']); //removendo as definições e variaveis da sessão login
header('location:../index.php');
?>