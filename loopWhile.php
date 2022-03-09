<?php
/**
 * Aula sobre Laço de Repetição WHILE
 * 
 * while(condição){}
 */

$estouEmpregado = true;
$comitsZoados = 0;

while($estouEmpregado){
     echo "Eu fiz ". $comitsZoados . " commits zoados e meu chefe não gostou" . PHP_EOL;
     $commitsZoados++;

     if($comitsZoados == 8){
         $estouEmpregado = false;
         echo "Agora estou desempregado" . PHP_EOL;
     }
 }