<?php
session_start();
require_once('connect.php');
//Pega os values do form
$_email_session 	= $_SESSION['email'];
$_nome 				= $_POST['nome'];
$_email 			= $_POST['email'];
$_dataNascimento 	= $_POST['dataNascimento'];
//Realiza as consulta e update na base de dados
$_query 			= "SELECT email FROM users WHERE email = '$_email'";
$_query_insert 		= "UPDATE users SET nome = '$_nome', email = '$_email', dataNascimento = '$_dataNascimento' WHERE email = '$_email_session';";
//Verifica se o e-mail da sessão é o mesmo no form
if ($_email_session == $_email) {
	//Valida o sucesso do insert
	if (mysqli_query($con, $_query_insert) or die("Erro no insert")) {
		//Limpa a sessão ativa
		unset($_SESSION['email']);
		//Cria uma nova sessão com o novo e-mail
		$_SESSION['email'] 		= $_email;
		$_SESSION['success'] 	= "Dados atualizados com sucesso!";
		//Redireciona
		header("Location: ../user.php");
	}else{
		$_SESSION['no-success'] = "Erro na atualização, verifique os dados e tente novamente!";
		header("Location: ../user.php");
	}
	//Verifica se o e-mail da sessão é diferente do e-mail no form
}elseif ($_email_session != $_email) {
	//Realiza a consulta do e-mail na base e conta a quantidade de retornos
	$_data = mysqli_query($con, $_query) or die("Erro na consulta");
	$_num_rows = mysqli_num_rows($_data);
	//Valida se houve retorno da consulta anterior
	if ($_num_rows > 0) {
		$_SESSION['email_conflict'] = "O e-mail já está cadastrado";
		header("Location: ../user.php");
	}else{
		if (mysqli_query($con, $_query_insert) or die("Erro no insert")) {
			unset($_SESSION['email']);
			$_SESSION['email'] 		= $_email;
			$_SESSION['success'] 	= "Dados atualizados com sucesso!";
			header("Location: ../user.php");
		}else{
			$_SESSION['no-success'] = "Erro na atualização, verifique os dados e tente novamente!";
			header("Location: ../user.php");
		}
	}
}
?>