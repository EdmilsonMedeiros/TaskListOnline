<?php
session_start();
require_once('connect.php');
$_email_session 	= $_SESSION['email'];
$_nome 				= $_POST['nome'];
$_email 			= $_POST['email'];
$_dataNascimento 	= $_POST['dataNascimento'];
$_query_insert 		= "UPDATE users SET nome = '$_nome', email = '$_email', dataNascimento = '$_dataNascimento' WHERE email = '$_email_session';";
if (mysqli_query($con, $_query_insert) or die("Erro no insert")) {
	unset($_SESSION['email']);
	$_SESSION['email'] = $_email;
	$_SESSION['success'] = "Dados atualizados com sucesso!";
	header("Location: ../user.php");
}else{
	$_SESSION['no-success'] = "Erro na atualização, verifique os dados e tente noovamente!";
	header("Location: ../user.php");
}
?>