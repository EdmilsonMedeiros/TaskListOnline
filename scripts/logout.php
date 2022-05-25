<?php
session_start();
//valida existência da sessão
if(isset($_SESSION['email'])){
    //destroi a sessão
    session_destroy();
    unset($_SESSION);
    //redireciona
    header("Location: ../");
}
?>