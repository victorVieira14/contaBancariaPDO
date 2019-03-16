<?php
include_once 'init.php';
include_once 'functions.php';
 
// abre a conexão
$PDO = db_connect();

// SQL para selecionar os registros
$sql = "SELECT idCliente, nomeCliente, email, senha, RG, CPF, endereco, telefone, cep FROM cliente ORDER BY nome ASC";
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css">
        <title>Sistema de Cadastro</title>
    </head>
 
    <body>
         
        <h1>Sistema de Cadastro</h1>
         
        <p><a href="form-add.php">Adicionar Usuário</a></p>
 
        <h2>Lista de Usuários</h2>
 
    
 
        <table  class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Endereco</th>
                    <th>Telefone</th>
                    <th>CEP</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include_once 'functions.php';

                    $consulta = $PDO->query("SELECT * FROM cliente");
                    
                    
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        //DADOS DO BD
                        echo "
                        <tr> 
                            <td>{$linha['nomeCliente']} </td>
                            <td>{$linha['email']} </td>
                            <td>{$linha['RG']} </td>
                            <td>{$linha['CPF']} </td>
                            <td>{$linha['endereco']} </td>
                            <td>{$linha['telefone']} </td>
                            <td>{$linha['cep']} </td>
                            <td>
                                <a href='form-edit.php?idCliente={$linha['idCliente']}'>Editar</a>
                                <a href='delete.php?idCliente={$linha['idCliente']} onclick='return confirm('Tem certeza de que deseja remover?');'>Remover</a>
                            </td>
                        </tr>";
                    }
                    
                ?>
            </tbody>
        </table>
    </body>
</html>