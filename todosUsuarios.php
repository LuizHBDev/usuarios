<?php
include_once "getUsuarios.php";

$usuarios= getUsuarios();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Todos Usuários</title>
</head>
<body>
    <div class="container" >
        <p>Seja bem vindo</p>
        <h2>Listar usuários</h2>
        <table class="table table-bordered">
         <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
         </thead>
         <tbody>
            <?php
                foreach($usuarios as $usuario):
            
            ?>
            <tr>
                <td><?php echo $usuario['id']?></td>
                <td><?php echo $usuario['usuario']?></td>
                <td><?php echo $usuario['email']?></td>
                <td>
                <a class="btn btn-primary" href="editarUsuario.php?id=<?php echo $usuario['id']?>">Editar usuario</a>
                <a class="btn btn-danger" href="excluirUsuario.php?id=<?php echo $usuario['id']?>">Excluir</a>
                </td>
                
            </tr>
            <?php endforeach;?>
         </tbody>
        </table>

    </div>
    
</body>
</html>