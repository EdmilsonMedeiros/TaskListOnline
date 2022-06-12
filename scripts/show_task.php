<?php
session_start();
include("connect.php");

$_emailSession = $_SESSION['email'];
$_querySelect = "SELECT id FROM users WHERE email = '$_emailSession'";
$_result = mysqli_query($con, $_querySelect);
$id = mysqli_fetch_array($_result);
$id = $id['id'];

$_querySelectTarefas = "SELECT titulo, conteudo, dataTarefa FROM tarefas WHERE id_user = '$id' AND statusTarefa = 'aberta' ORDER BY dataTarefa LIMIT 12";
$_querySelectTarefas = mysqli_query($con, $_querySelectTarefas);

?>