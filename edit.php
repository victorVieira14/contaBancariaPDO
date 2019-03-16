<?php
 
require_once 'functions.php';
require_once 'init.php';
 
$nome = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : null;
$email = isset($_POST['emailCliente']) ? $_POST['emailCliente'] : null;
$senha = isset($_POST['senhaCliente']) ? $_POST['senhaCliente'] : null;
$cpf = isset($_POST['cpfCliente']) ? $_POST['cpfCliente'] : null;
$rg = isset($_POST['rgCliente']) ? $_POST['rgCliente'] : null;
$endereco = isset($_POST['endCliente']) ? $_POST['endCliente'] : null;
$telefone = isset($_POST['telCliente']) ? $_POST['telCliente'] : null;
$cep = isset($_POST['cepCliente']) ? $_POST['cepCliente'] : null;
$id = isset($_POST['idCliente']) ? $_POST['idCliente'] : null;
 
// validação (bem simples, mais uma vez)
if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($rg)  || empty($endereco) || empty($telefone) || empty($cep))
{
    echo "Volte e preencha todos os campos";
    exit;
}

// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE cliente SET nomeCliente = :NOME, email = :EMAIL, senha = :SENHA, RG = :RG, CPF = :CPF, endereco = :ENDERECO, telefone = :TELEFONE, cep = :CEP WHERE idCliente = :ID";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':SENHA', $senha);
$stmt->bindParam(':CPF', $cpf);
$stmt->bindParam(':RG', $rg);
$stmt->bindParam(':ENDERECO', $endereco);
$stmt->bindParam(':TELEFONE', $telefone);
$stmt->bindParam(':CEP', $cep);
$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: form-list.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}