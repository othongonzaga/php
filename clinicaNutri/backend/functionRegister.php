<?php
    require 'conexao.php';

    function register($mysqli) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $senhaConfirm = $_POST["senhaConfirm"];

        // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
        if (empty($_POST['email']) OR empty($_POST['senha'] OR empty($_POST['senhaConfirm']))) {
            echo '<br/><br/><br/><center><img class="alert" src="https://www.monetcasadefestas.com.br/wp-content/uploads/2020/02/icone-aten%C3%A7%C3%A3o-png.png">';
            echo "<center><p>Você deixou campos em branco, corrija-os para continuar!</p><center/><br/>";
            echo "<center><p>Voltando a página de cadastro...</p><center/><br/>";
            // Redireciona dentro de 5s para a página de cadastro se a condição acima for verdadeira
            header('refresh: 5; ../registro.php');
        } else {
            // Verifica se a senha é igual a confirmção da senha
            if ($senha == $senhaConfirm) {
                // Querry armazenha o comando para inserir os dados no banco de dados
                $query = "INSERT INTO usuarios (id, email, senha) VALUES (null, '$email', md5('$senha'))";
                // Envia o comando salvo em query para o banco de dados
                mysqli_query($mysqli, $query);

                // Verifica se não houve nehum problema ao inserir no banco
                if (mysqli_affected_rows($mysqli) > 0) {
                    echo "Usuario inserido com sucesso!<br/>";
                    echo '<a href="../index.php">Ir para o login</a>';
                    header('Location: ../index.php');
                } else {
                    echo "Erro ao inserir usuario!";
                }
                // Fecha o comando 'mysli_close'
                mysqli_close($mysqli);
            } else {
                echo "AS SENHAS NÃO CONFEREM!";
            }
        }
    }
    register($mysqli);
?>