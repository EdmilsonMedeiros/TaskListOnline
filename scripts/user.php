<?php
session_start();
require_once("connect.php");
//Atribui a sessão a variável e-mail
function retornaEmail(){
	$_email = $_SESSION['email'];
	echo $_email;
}
function retornaNome(){
}
function retornaDataNascimento(){
}
?>