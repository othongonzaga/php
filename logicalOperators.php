<?php
/**
 * Aula sobre Operadores Lógicos
 * 
 * Operadores: && || ^ !
 */

 // Operador 'E' AND &&
$empregado = true;
$homeOffice = true;

var_dump(value: $empregado && $homeOffice );

// Operador 'OU' OR ||
$empregado = true;
$homeOffice = false;

var_dump(value: $empregado || $homeOffice );

//Operador 'OU Exclusivo' XOR ^
$empregado = true;
$homeOffice = false;

var_dump(value: $empregado ^ $homeOffice );

//Operador 'Não' NOT !
$empregado = true;

var_dump(!$empregado);