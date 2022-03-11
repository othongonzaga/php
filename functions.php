<?php
/**
 * Aula sobre Funções
 * 
 * function Nome_Da-Funcao(argumentos){}
 */

function sendMessage(string $nickname, string $message){
    echo "[" . date(format: 'Y-m-d H:i:s') . "] $nickname:" . strtoupper($message)  . PHP_EOL;
}

sendMessage(nickname:'Othon', message: ' Salve, mano');
sendMessage(nickname:'Gabigol', message: ' Salve, cria');