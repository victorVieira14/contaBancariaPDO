<?php
session_start();
 
require_once 'functions.php';
require_once 'init.php';
require_once 'checagem.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
        <title>Painel | Sistema de Login</title>
    </head>
 
    <body>
        <?php 
            include_once 'navbar.php';
        ?>


        <h1 class="display-4 text-center">Painel do usuário</h1>
 
        <p class="text-center">Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?>. Deseja <a href="logout.php">Sair</a></p>
    </body>
</html>