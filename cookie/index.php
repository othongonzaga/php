<?php
if(isset($_POST['nome'])){
    $vence = time() + (30 * 24 * 60 * 60); // 30 dias
    setcookie('nome', $_POST['nome'], $vence);
    header("Location: boasvindas.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie-PHP</title>
</head>
<body>
    <form method="post" action="">
        <p>Qual é o seu nome?</p>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>