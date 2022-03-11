<?php
/**
 * Aula sobre Argumentos em Scripts PHP
 * 
 * Executando script sem argumento:
 * php argumentScript.php
 * 
 * Executando script com argumento:
 * php argumentScript.php variavel1 variavel2
 */

 if (!isset($argv[1])){
     die('Preencha um argumento. Ex: php argumentScript.php 23' . PHP_EOL);
 }

 $age = $argv[1];

 if (!is_numeric($age)){
    die('Mano, manda um número');
}

if($age >= 18){
    echo "Você é maior de idade!";
}else{
    echo "Você é menor de idade!";
}