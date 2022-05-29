<?php
session_start();
function retornaNome(){	
	include("connect.php");
	$_email = $_SESSION['email'];
	$_query = "SELECT nome FROM users WHERE email = '$_email'";
	$_result = mysqli_query($con, $_query);
	$_data = mysqli_fetch_array($_result);
	echo $_data['nome'];
	// $_contador = 0;
	// while ($_contador <= count($_data)) {
	// 	echo $_data[$_contador] . "<br>";
	// 	$_contador ++;
	// }
}
function retornaEmail(){
	$_email = $_SESSION['email'];
	echo $_email;
}
function retornaDataNascimento(){
	include("connect.php");
	$_email = $_SESSION['email'];
	$_query = "SELECT * FROM users WHERE email = '$_email'";
	$_result = mysqli_query($con, $_query);
	$_data = mysqli_fetch_array($_result);
	echo $_data['dataNascimento'];
}
?>
