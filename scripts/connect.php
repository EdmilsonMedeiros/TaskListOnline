<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbName = "manager";
$con    = mysqli_connect($host, $user, $pass, $dbName);
if($con != true){
    echo "Erro: ".mysqli_connect_errno();
}
?>