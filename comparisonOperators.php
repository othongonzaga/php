<?php
/**
 * Aula sobre Operadores de Comparação
 * Operadores: == === != !== 
 * Operadores: > >= < <=
 */

 //Operador de Igualdade ==
 var_dump(value: 1 == 1);
 var_dump(value: '1' == 1);

 //Operador de Diferença != 
 var_dump(value: 1 != 2);

 //Operador Idêntico ===
 var_dump(value: 1 === 1);
 var_dump(value: '1' === 1);

 //Operador Não Idêntico !==
 var_dump(value: 1 !== 1);
 var_dump(value: '1' !== 1);

 //Operador Maior >
 $number = 6;
 var_dump(value: $number > 5);

 //Operador Maior ou Igual >=
 $number = 2;
 var_dump(value: $number >= 1);

 //Operador de Menor <
 $number = 2;
 var_dump(value: $number < 3);

 //Operador Menor ou Igual <=
 $number = 2;
 var_dump(value: $number <= 1);