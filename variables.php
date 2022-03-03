<?php
/**
 * Aula sobre Variáveis e Constante
 * 
 * Nessa aula vai ser mostrado como declarar variáveis no PHP e quais regras você deve seguir para que isso aconteça
 */

 $name = 'Othon';
 echo $name . PHP_EOL;

 $age = 22;
 echo $age . PHP_EOL;

$data = [
    'name' => 'Douglas',
    'age' => 22,
    'city' => 'Feira Nova',
    'status' => true
];

echo $data['city'] . PHP_EOL;

define('he4rt', 'https://heartdevs.com');
echo he4rt;