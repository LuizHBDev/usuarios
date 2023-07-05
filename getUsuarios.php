<?php
require_once 'conexao.php';
// getUsuarios();

function getUsuarios(){
    $conn = conectarBanco();
    $sql="select * from usuarios";
    $usuarios = $conn->query($sql);

    foreach($usuarios as $usuario);

    $conn->close();

    return $usuarios;
    
    

}

?>