<?php

// VARIAVEIS DE CONEXÃO 

// use Dom\Mysql;

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'crud_php_aula_02';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


?>