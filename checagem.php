<?php
 
require_once 'functions.php';
require_once 'init.php';
 
if (!isLoggedIn()){
    header('Location: form-login.php');
}
?>