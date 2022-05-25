<?php
require_once('connect.php');

$nome           = $_POST['nome'];
$email          = $_POST['email'];
$dataNascimento = $_POST['dataNascimento'];
$senha          = $_POST['senha'];

if($nome != "" && 
   $email != "" && 
   $dataNascimento != "" && 
   $senha != ""){
    
    $query = "INSERT INTO users(nome, email, dataNascimento, senha) VALUES('$nome', '$email', '$dataNascimento', '$senha')";
    if(mysqli_query($con, $query)){
        echo "Redirecionando...";
        header("Location: ../home.html");
    }else{
        echo "Erro no bloco da query";
    }
    
}else{
    header("Location: ../index.html");
    exit;
}

?>