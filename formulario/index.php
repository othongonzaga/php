<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
    <h1>Formulário com PHP</h1>
        <p class="error">* Obrigatório</p>
        <p>Nome: 
            <input required type="text" name="nome"><span class="error">*</span><br><br>
        </p>
        <p>E-mail: 
            <input required type="email" name="email" id=""><br><br>
        </p>
        <p>Website: 
            <input type="text" name="website"><br><br>
        </p>
        <p>Comentário:
            <textarea name="comentario" cols="30" rows="2"></textarea><br><br>
        </p>
        <br><br>
        <p>Genêro: 
            <input type="radio" name="genero" value="masculino"> Masculino
            <input type="radio" name="genero" value="feminino"> Feminino
            <input type="radio" name="genero" value="outro"> Outro
        </p>
        <br><br>
        <button name="enviado" type="submit">Enviar</button>
        <h2>Dados enviados:</h2>
        <?php
        if(isset($_POST['enviado'])){
            if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100){
                echo '<p class="error">Preencha o campo nome</p>';
                die();
            }

            if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo '<p class="error">Preencha o campo e-mail</p>';
                die();
            }

            if(empty($_POST['website']) || !filter_var($_POST['websit
            e'], FILTER_VALIDATE_EMAIL)){
                echo '<p class="error">Preencha corretamente o campo website</p>';
                die();
            }

            $genero = "Não relacionado";
            if(isset($_POST['genero'])){
                $genero = $_POST['genero'];
                if($genero != "masculino" && $genero != "feminino" && $genero != "outros"){
                    echo '<p class="error">Preencha corretamente o campo gênero</p>';
                    die();
                }
            }
            echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
            echo "<p><b>E-mail: </b>" . $_POST['email'] . "</p>";
            echo "<p><b>Website: </b>" . $_POST['website'] . "</p>";
            echo "<p><b>Comentário: </b>" . $_POST['comentario'] . "</p>";
            echo "<p><b>Genêro: </b>" . $genero . "</p>";
        }
        ?>
    </form>
</body>
</html>