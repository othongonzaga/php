<?php
/**
 * Aula sobre Condições de Coalescência Nula
 * 
 * valorPredefinido ?? retorno caso não existe valor
 */

 $user = [
    'name' => 'Othon',
    'age' => 20,
    'Instagram' => 'othon_gonzaga'
 ];

 echo $user['name'] ?? 'Gabigol';