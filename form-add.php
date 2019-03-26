<?php 
require 'init.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
</head>
<body style="background-image:url(img/fundo.jpg); background-size:cover; background-repeat: no-repeat">
<div class="hidden" style="visibility: hidden; height:40px;"></div>
    
    <div class="container">
    <div class="card p-4">
        <div class="card-body">
            <h1 class="text-center display-4">Cadastrar Cliente</h1>
            <form method="POST" class="form.group" action="add.php" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-sm-6 md-6 lg-6">
                        <label >Nome:</label>
                        <input type="text" name="nomeCliente" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >Email:</label>
                        <input type="email" name="emailCliente" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >Senha:</label>
                        <input type="password" name="senhaCliente" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >CPF:</label>
                        <input type="text" id="cpf" name="cpfCliente" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >RG:</label>
                        <input type="text" id="rg" name="rgCliente" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >Endereço:</label>
                        <input type="text" name="endCliente" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >Telefone:</label>
                        <input type="text" id="telefonePessoa" name="telCliente" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >CEP:</label>
                        <input type="text" name="cepCliente" id="cep" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >Numero da conta:</label>
                        <input type="text" name="numConta" id="numConta" class="form-control" required="">        
                    </div>
                    <div class="col-sm-6 md-6 lg-6">
                        <label >Saldo:</label>
                        <input type="text" name="saldo" id="saldo" class="form-control" required="">        
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-12 md-12 lg-12">
                        <input type="submit" value="Cadastrar" class="btn-lg btn-block btn btn-success">        
                    </div>
                </div>

            </form>
        </div>
    </div>
    </div>

    <script src="JS/all.min.js"></script>
    <script src="JS/jquery.min.js"></script>
    <script src="JS/jquery.mask.js"></script>    
    <script>
            $('#telefonePessoa').mask('(00) 00000-0000');
            $('#cpf').mask('000.000.000-00');
            $('#cep').mask('00000-000');
            $('#rg').mask('00.000.000-0');
    </script>
    
    
</body>
</html>