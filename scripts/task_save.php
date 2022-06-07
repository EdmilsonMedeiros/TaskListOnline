<?php 
session_start();
$_titulo 		= $_POST['titulo'];
$_dataTarefa 	= $_POST['dataTarefa'];
$_conteudo 		= $_POST['conteudo'];
$_emailSessao 	= $_SESSION['email'];
$_querySelect	= "SELECT id FROM users WHERE email = '$_emailSessao'";
if ($_emailSessao != null) {
	include('connect.php');
	$_consulta = mysqli_query($con, $_querySelect);
	if (mysqli_num_rows($_consulta) != 0) {
		$_lista = mysqli_fetch_array($_consulta);
		$id = $_lista['id'];
		$_queryInsert	= "INSERT INTO tarefas(titulo, dataTarefa, conteudo, id_user) VALUES('$_titulo', '$_dataTarefa', '$_conteudo', '$id')";
		mysqli_query($con, $_queryInsert);
		header("Location: ../home.php");
	}else{
		// header("Location: ../home.php");
	}
}else{
	header("Location: ../");
}

?>