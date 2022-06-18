<?php

// Senha: mc0BfI19*mm<
// Email: teste@zerobugs.com.br
//host: smtp.zerobugs.com.br
//porta: 587

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.zerobugs.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'teste@zerobugs.com.br';
$mail->Password = 'mc0BfI19*mm<';
$mail->SMTPSecure = false;
$mail->isHTML(true);
$mail->Charset = 'UTF-8';

$mail->setFrom('teste@zerobugs.com.br', "Teste Zero Bugs");
$mail->addAddress('othoncesar1@hotmail.com');
$mail->Subject = 'Email de teste';
$mail->Body = "<h1>Email enviado pelo povo!</h1><p>Deu bom!</p>";

if ($mail->send()){
    echo "Email enviado com sucesso!";
}else{
    echo "Falha ao enviar email!";
}