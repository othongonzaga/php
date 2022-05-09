<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/simbolo.ico.ico" />
    <link rel="stylesheet" href="./styles/style.css">
    <title>Registrar - Clínica Nutri</title>
</head>
<body>
    <div class="container">
    <img src="./images/nutricionista.jpg" alt="nutricionista">

    <form action="./backend/functionRegister.php" method="POST" name="formRegister">
        <h1 class="titulo">Cadastre-se</h1>
        <div class="email">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Informe um email" required>
        </div>
        <div class="senha">
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Informe uma senha" required>
        </div>
        <div class="senha-confirmar">
            <label>Confirmar senha:</label>
            <input type="password" name="senhaConfirm" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit">Cadastrar</button>
        
        <a id="linkLogin" href="login.php">Login</a>
    </form>
    </div>
    <footer class="footer"><p class="textoFooter">Feito po</p>r <a href="https://www.linkedin.com/in/othon-gonzaga-7bb4501a4/">Othon Gonzaga</a> <p class="textoFooter">:)</p></footer>
</body>
</html>