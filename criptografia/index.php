<?php
if (isset($_POST['email'])){
    include('cnexao.php');

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $mysqli->query("INSERT INTO senhas (email,senha) VALUES ('$email', '$senha')");
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
    <h1>Cadstrar Senha</h1>
    <form action="" method="post">
        <input type="text" name= "email">
        <input type="text" name= "email">
        <button type="submit">Cadastrar senha</button>
    </form>
</body>
</html>