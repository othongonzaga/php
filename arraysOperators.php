<?php
/**
 * Aula sobre Operadores de Arrays
 * 
 * Operadores: + == === !=
 */

 // Operador União +
 $user = [
     'name' => 'Othon',
     'age => 20'
 ];

 $workplace =[
    'companyName' => 'Leroy Merlin BRA',
    'role' => 'Back-End Developer'
 ];

 $all = $user + $workplace;

 print_r($all);

 //Igualdade ==

 $userOne = [
    'name' => 'Othon',
     'age' => 20
 ];

 $userTwo = [
    'name' => 'Malek',
    'age' => 18
 ];

 var_dump(value: $userOne == $userTwo);

 //Identico ===

 $userOne = [
    'name' => 'Othon',
     'age' => 20
 ];

 $userTwo = [
    'name' => 'Othon',
    'age' => '20'
 ];

 var_dump(value: $userOne === $userTwo);

 // Diferença !=
 $userOne = [
    'name' => 'Othon',
     'age' => 20
 ];

 $userTwo = [
    'name' => 'HUU',
    'age' => 20
 ];

 var_dump(value: $userOne != $userTwo);

 // Não Identico !==
 $userOne = [
    'name' => 'Othon',
     'age' => 20
 ];

 $userTwo = [
    'name' => 'Othon',
    'age' => '20'
 ];

 var_dump(value: $userOne !== $userTwo);