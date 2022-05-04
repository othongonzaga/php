<?php
require ('./backend/verificaLogin.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="./styles/style.css">
    <title>Cadastrar Paciente - Clínica Nutri</title>
</head>
<body>
    <header>
        <nav>
            <a href="list.php">Listar Pacientes</a>
            <a href="backend/logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <img src="./images/enfermeira.jpg" alt="nutricionista">

        <form action="./backend/pacientRegister.php" method="POST">
            <h1 class="titulo">Cadastrar paciente</h1>
            <div class="nome">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Informe seu nome" required>
            </div>
            <div class="idade">
                <label>Idade:</label>
                <input type="text" name="idade" placeholder="Informe sua idade" required>
            </div>
            <div class="peso">
                <label>Peso:</label>
                <input type="text" name="peso" placeholder="Exemplo: 65" required>
            </div>
            <div class="altura">
                <label>Altura:</label>
                <input type="text" name="altura" placeholder="Exemplo: 1.75" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    <footer class="footer">Feito por <a href="https://www.linkedin.com/in/othon-gonzaga-7bb4501a4/">Othon Gonzaga</a> :)</footer>
</body>
</html>