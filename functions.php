<?php
  
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect(){

    $PDO = new PDO("mysql:host=localhost;dbname=contabancaria", "root", "");
  
    return $PDO;
}
  
/**
 * Cria o hash da senha, usando MD5 e SHA-1
 * Ex. de hash senha: 2d29b962490320f821db80cddf6ed4b6e4ac7498
 */
function make_hash($str){

    //md5:criptografa a senha
    //str: string
    //sha1 deixa em formato de hash
    return sha1(md5($str));
}
 
 
/**
 * Verifica se o usuário está logado
 */
function isLoggedIn(){

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
        return false;
    }
    return true;
}