<?php
require ('./backend/verificaLogin.php');
require ('./backend/functionList.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/simbolo.ico.ico" />
    <link rel="stylesheet" href="./styles/style.css">
    <title>Pacientes - Clínica Nutri</title>
</head>
<body>
    <header>
        <h1 class="titulo">Pacientes cadastrados</h1>
        <nav class="menu">
            <a href="pacienteRegistro.php">Cadastrar Paciente</a>
            <a href="backend/logout.php">Logout</a>
        </nav>
    </header>
    <div class="containerList">
        <div class="list-pacients">
            <table>
                <tr> 
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>IMC</th>
                </tr>
                <?php while($dado = $con->fetch_array()) { ?>
                <tr>
                    <td><?php echo $dado['nome']; ?></td>
                    <td><?php echo $dado['idade']; ?></td>
                    <td><?php echo $dado['peso']; ?></td>
                    <td><?php echo $dado['altura']; ?></td>
                    <td><?php echo $dado['imc']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>    
    </div>
    <footer class="footer"><p class="textoFooter">Feito po</p>r <a href="https://www.linkedin.com/in/othon-gonzaga-7bb4501a4/">Othon Gonzaga</a> <p class="textoFooter">:)</p></footer>
</body>
</html>