<?php
 
// inclui o arquivo de inicialização
require 'init.php';
require 'functions.php';
 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($email) || empty($password)){
    echo "Informe email e senha";
    exit;
}
 
// cria o hash da senha
$passwordHash = make_hash($password);
 
$PDO = db_connect();
 
$sql = "SELECT idCliente, nomeCliente FROM cliente WHERE email = :EMAIL AND senha = :PASSWORD";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':PASSWORD', $password);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['idCliente'];
$_SESSION['user_name'] = $user['nomeCliente'];
 
header('Location: indexLogin.php');