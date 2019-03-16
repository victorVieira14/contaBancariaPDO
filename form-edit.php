<?php
require 'functions.php';
require 'init.php';
 
// pega o ID da URL
$id = isset($_GET['idCliente']) ? (int) $_GET['idCliente'] : null;
 
// valida o ID
if (empty($id))
{
    echo "ID para alteração não definido";
    exit;
}
 
// busca os dados du usuário a ser editado
$PDO = db_connect();
$sql = "SELECT id, nomeCliente, email, senha, rg, cpf, endereco, telefone, cep FROM cliente WHERE id = :ID";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
 
$stmt->execute();
 
$user = $stmt->fetch(PDO::FETCH_ASSOC);
 
// se o método fetch() não retornar um array, significa que o ID não corresponde a um usuário válido
//is_array: se isso nao for encontrado como um array nao ira corresponder a um usuario valido
if (!is_array($user))
{
    echo "Nenhum usuário encontrado";
    exit;
}
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
<div class="hidden" style="visibility: hidden; height:80px;"></div>
    
    <div class="container">
    <div class="card p-4">
        <div class="card-body">
            <h1 class="text-center display-4">Cadastrar Cliente</h1>
            <form method="POST" class="form.group" action="edit.php" enctype="multipart/form-data">

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
                </div>
                <input type="hidden" name="idCliente" value="<?php echo $id ?>">

                <div class="row mt-4">
                    <div class="col-sm-12 md-12 lg-12">
                        <input type="submit" value="Alterar" class="btn-lg btn-block btn btn-success">        
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
        </form>
 
    </body>
</html>