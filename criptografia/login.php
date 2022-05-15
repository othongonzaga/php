<?php
if (isset($POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql_code = "SELECT * FROM senhas WHERE email = '$email' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or  die($mysqli->error);
    $usuario = $sql_exec->fetch_assoc();

    if(password_verify($senha, $usario['senha'])){
        echo "Usuário logado!";
    }else{
        echo "Falha ao logar, senha ou email incorretos";
    }
}    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name= "email">
        <input type="password" name= "senha">
        <button type="submit">LOGAR</button>
    </form>
</body>
</html>