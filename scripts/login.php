<?php
session_start();
require_once("connect.php");
//Captura dados do form
$_email = $_POST['email'];
$_senha = $_POST['senha'];
//Valida os campos do form
if( $_email != "" && $_senha != "" ){
    //Query para consulta
    $query = "SELECT * FROM users WHERE email = '$_email' AND senha = '$_senha'";
    //Valida existência do usuário
    if(mysqli_num_rows(mysqli_query($con, $query)) != 0){
        echo "LOGIN OK";
        //Cria sessão
        $_SESSION['email'] = $_email;
        //redireciona
        header("Location: ../home.php");
        exit;
    }else{
        $_SESSION['erroLogin'] = "Usuário ou senha incorreto, tente novamente!";
        header("Location: ../");
        exit;
    }
}
exit;

?>