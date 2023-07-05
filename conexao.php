<?php
conectarBanco();
function conectarBanco(){
    $savername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";
    $port = 3307;
    $conn = new mysqli($savername,$username,$password,$dbname,3307);
    
    if($conn->connect_error){
        die("conexão falhou: ". $conn->connect_error);
    }

    $conn->set_charset("utf8");
    return $conn;
}
?>