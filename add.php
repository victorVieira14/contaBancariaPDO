<?php
 
include_once 'functions.php';
include_once 'init.php';
 
// pega os dados do formuário
$nome = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : null;
$email = isset($_POST['emailCliente']) ? $_POST['emailCliente'] : null;
$senha = isset($_POST['senhaCliente']) ? $_POST['senhaCliente'] : null;
$cpf = isset($_POST['cpfCliente']) ? $_POST['cpfCliente'] : null;
$rg = isset($_POST['rgCliente']) ? $_POST['rgCliente'] : null;
$endereco = isset($_POST['endCliente']) ? $_POST['endCliente'] : null;
$telefone = isset($_POST['telCliente']) ? $_POST['telCliente'] : null;
$cep = isset($_POST['cepCliente']) ? $_POST['cepCliente'] : null;
 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($rg)  || empty($endereco) || empty($telefone) || empty($cep))
{
    echo "Volte e preencha todos os campos";
    exit;
}

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO cliente(nomeCliente, email, senha, RG, CPF, endereco, telefone, cep) VALUES(:NOME,:EMAIL,:SENHA,:CPF,:RG,:ENDERECO,:TELEFONE,:CEP)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':SENHA', $senha);
$stmt->bindParam(':CPF', $cpf);
$stmt->bindParam(':RG', $rg);
$stmt->bindParam(':ENDERECO', $endereco);
$stmt->bindParam(':TELEFONE', $telefone);
$stmt->bindParam(':CEP', $cep);
 
 
if ($stmt->execute())
{
    header('Location: form-list.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}