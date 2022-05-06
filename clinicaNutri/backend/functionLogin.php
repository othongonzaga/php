<?php
session_start();
require ('conexao.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../login.php');
    exit;
}

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
$query = "SELECT `email`, `senha` FROM `usuarios` WHERE (`email` = '".$email ."') AND (`senha` = '".md5("$senha")."')";
$result = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../list.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../login.php');
    exit();
}
?>