<?php

include('conexao.php');

$id = intval($_GET['id']);

function limpar_texto($str){
    return preg_replace("/[^0-9]/", "", $str);
}

if(count($_POST) > 0){

    $erro = false;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];

    if(empty($nome)){
        $erro =  "Preencha o nome";
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro =  "Preencha o email";
    }

    if(!empty($nascimento)){
        //28/02/1994
        // arrat(1994,02,28)
        // 1994/02/28

        $pedacos = explode('/', $nascimento);
        if(count($pedacos) == 3){
            $nascimento = implode('-', array_reverse($pedacos));
            
        }else{
            $erro = "A data de nascimento deve seguir o padrão dia/mes/ano.";
        }
    }

    if(!empty($telefone)){
        $telefone = limpar_texto($telefone);
        if(strlen($telefone) != 11){
            $erro = "O telefone deve ser preenchido no padrão";
        }
    }

    if($erro){
        echo "<p><b>ERRO: $erro</b></p>";
    }else{
        $sql_code = "UPDATE clientes SET nome = '$nome',
        email = '$email',
        telefone = '$telefone', 
        nascimento = '$nascimento'
        WHERE id = '$id'";

        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo){
            echo"<p><b>Cliente atualizado com sucesso!</b></p>";
            unset($_POST);
        }
    }
}

$sql_cliente = "SELECT * FROM clientes WHERE id = '$id'";
$query_cliente = $mysqli->query($sql_cliente) or die($msqli->error);
$cliente = $query_cliente->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Clientes</title>
</head>
<body>
    <div class="titulo">
        <h1>Editar Clientes</h1>
    </div>

    <div class="campo_editar">
        <a href="./clientes.php">Voltar para a lista</a>
        <form method="POST" action="">
            <p>
                <label>Nome:</label>
                <input value="<?php  echo $cliente['nome']; ?>" name="nome" type="text">
            </p>
            <p>
                <label>E-mail:</label>
                <input value="<?php  echo $cliente['email']; ?>" name="email" type="text">
            </p>
            <p>
                <label>Telefone:</label>
                <input value="<?php if(!empty($cliente['telefone'])) echo formatar_telefone($cliente['telefone']); ?>" name= "telefone" placeholder="(11) 98888-8888" type="text">
            </p>
            <p>
                <label>Data Nascimento:</label>
                <input value="<?php if(!empty($cliente['nascimento'])) echo formatar_data($cliente['nascimento']); ?>" name="nascimento" type="text">
            </p>
            <div class="campo_botao_form">
                <button type="submit" class="btn_form">Salvar Cliente</button>
            </div> 
        </form>
    </div>
</body>
</html>