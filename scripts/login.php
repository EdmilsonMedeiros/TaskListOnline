<?php

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
        header("Location: ../home.html");
        exit;
    }else{
        echo "Invalid User or password!";
        exit;
    }
}
exit;

?>