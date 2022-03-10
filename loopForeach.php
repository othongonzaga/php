<?php
/**
 * Aula sobre Laço de Repetição ForEach
 * 
 * foreach(dadoIteravel as dado){}
 */

 $user = [
     'name' => 'Othon',
     'age' => 20,
     'employed' => true
 ];

 foreach($user as $field){
     echo $field . PHP_EOL;
 }

 // Outro exemplo

 foreach($user as $key => $value){
    echo $key. " ". $value . PHP_EOL;
}