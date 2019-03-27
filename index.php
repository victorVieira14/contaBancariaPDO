<?php
include_once 'init.php';
include_once 'functions.php';
 
// abre a conexão
$PDO = db_connect();

// SQL para selecionar os registros
$sql = "SELECT idCliente, nomeCliente, email, senha, RG, CPF, endereco, telefone, cep, numConta, saldo FROM cliente ORDER BY nome ASC";
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css">
        <title>Sistema de Listagem</title>
    </head>
 
    <body style="background-image:url(img/teste.jpg); background-size:cover; background-repeat: no-repeat">


        <?php 

            require 'navbar.php';
        
        ?>
        <div style="visibility: hidden; height: 100px;"></div>
        <p class="display-4 pl-4 text-center mr-5 text-white"><i class="fas fa-user mr-4"></i>Lista de usuarios
       
        <table  class="table">
            <thead class="bg-info text-light">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Endereco</th>
                    <th>Telefone</th>
                    <th>CEP</th>
                    <th>Numero da conta</th>
                    <th>Saldo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="bg-white">

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
                            <td align='center'>{$linha['numConta']} </td>
                            <td>{$linha['saldo']} </td>
                            <td></td>
                            <td>
                                <a href='form-edit.php?idCliente={$linha['idCliente']}'><i class='fas fa-edit ml-5' style='font-size:23px;'></i></a>
                                <a href='delete.php?idCliente={$linha['idCliente']}' onclick='return confirm('Tem certeza de que deseja remover?');'><i class='fas fa-times-circle text-danger ml-4' style='font-size:23px;'></i></a>
                            </td>
                        </tr>";
                    }
                    
                ?>
            </tbody>
        </table>

        <script src="JS/all.min.js"></script>
        <script src="JS/jquery.min.js"></script>
    </body>
</html>