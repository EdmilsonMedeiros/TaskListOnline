<?php
session_start();
require_once('connect.php');
//Pega os valores no form
$nome           = $_POST['nome'];
$email          = $_POST['email'];
$dataNascimento = $_POST['dataNascimento'];
$senha          = $_POST['senha'];
//Query para consulta de existência do e-mail no banco de dados
$_query_valida_email = "SELECT * FROM users WHERE email = '$email'";
$_result = mysqli_query($con, $_query_valida_email);
//Verifica se a consulta na base retornou resultados
if(mysqli_num_rows($_result) > 0){
    //Cria um session para mensagem de e-mail cadastrado
    $_SESSION['cadastrado'] = "E-mail já cadastrado!";
    //redireciona
    header("Location: ../register.php");
}else{
    //Valida se os campos contem todos os caracteres para o cadastro
    if($nome != "" && 
    $email != "" && 
    $dataNascimento != "" && 
    $senha != ""){
        //Query para inserir dados do form no banco de dados
        $query = "INSERT INTO users(nome, email, dataNascimento, senha) VALUES('$nome', '$email', '$dataNascimento', '$senha')";
        //Verifica a execução da query
        if(mysqli_query($con, $query)){
            //cria sessão
            $_SESSION['email'] = $_email;
            echo "Redirecionando...";
            header("Location: ../home.php");
        }else{
            echo "Erro no cadastro, tente mais uma vez!";
        }
        
    }else{
        header("Location: ../register.php");
        exit;
    }
}
?>