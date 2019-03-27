<?php
session_start();
 
require 'init.php';
require 'functions.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
        <title>Sistema de Login</title>
    </head>
 
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" aria-label="Toggle navigation" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link active" href="form-login.php">Login</a>
                    <a class="nav-item nav-link active" href="form-add.php">Cadastro</a>
                </div>

            </div>
        </nav>
         
        <h1 class="display-4 text-center">Sistema de Login</h1>
 
        <?php if (isLoggedIn()): ?>
            <div class="text-center"><p>Olá, <?php echo $_SESSION['user_name']; ?>.     Direcione-se para o seu <a href="painel.php">Painel</a> | <a href="logout.php">Sair</a></p></div>
        <?php else: ?>
            <p class="text-center">Olá, visitante. Faça o seu <a href="form-login.php">Login</a></p>
        <?php endif; ?>
 

        <script src="JS/all.min.js"></script>
        <script src="JS/jquery.min.js"></script>

    </body>
</html>