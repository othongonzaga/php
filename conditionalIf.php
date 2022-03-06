<?php
/**
 * Aula sobre Condições IF/ELSE
 */

 $name = 'Othon';
 $employed = true;
 $age = 20;

 if($name == 'Othon'){
    echo 'Acessa a conta do Othon no Instagram' . PHP_EOL;
 }else{
     echo 'puts, você não conhece ele?' . PHP_EOL;
 }

 //Outro exemplo

 if($age >= 18 && $employed){
    echo 'Você é maior de idade e trabalha';
 }else{
     echo 'Você não é maior de idade ou você não tem emprego';
 }