<?php
  
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect(){

    $PDO = new PDO("mysql:host=localhost;dbname=contabancaria", "root", "");
  
    return $PDO;
}
  
 
/**
 * Converte datas entre os padrões ISO e brasileiro
 */
function dateConvert($date){
    //verifica se esta no formato certo
    if ( ! strstr( $date, '/' ) ){
        // $date está no formato ISO (yyyy-mm-dd) e deve ser convertida
        // para dd/mm/yyyy
        sscanf($date, '%d-%d-%d', $y, $m, $d);
        return sprintf('%02d/%02d/%04d', $d, $m, $y);
    }
    else{
        // $date está no formato brasileiro e deve ser convertida para ISO
        sscanf($date, '%d/%d/%d', $d, $m, $y);
        return sprintf('%04d-%02d-%02d', $y, $m, $d);
    }
 
    return false;
}
 
 
/**
 * Calcula a idade a partir da data de nascimento
 *
 * Sobre a classe DateTime: http://rberaldo.com.br/php-usando-a-classe-nativa-datetime/
 */
function calculateAge($birthdate)
{
    $now = new DateTime();
    $diff = $now->diff(new DateTime($birthdate));
     
    return $diff->y;
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

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
 
    return true;
}