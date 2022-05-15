<?php

$host = "localhost";
$db = "criptografia";
$user = "root";
$pass = "Fl@mengo12"; 

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli-> connect_errno){
    die("Falha na conexão com o banco de dados");
}