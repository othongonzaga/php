<?php
include("conexao.php");

if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error']){
        die("Falha ao enviar arquivo");
    }

    if($arquivo['size'] > 2097152){
        die("Arquivo muito grande! Máximo: 2MB"); // 1024 bytes = 1kb; 1024 kb = 1 mb
    }

    $pasta = "arquivos/";
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != "png" && $extensao != "svg"){
        die("Tipo de arquivo não aceito!");
    }

    $path = $pasta . $novoNomeArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_namme"], $path);

    if($deu_certo){
        $mysqli->query("INSERT INTO arquivos (nome, path) VALUES ('$nomeArquivo', '$path')") or die($mysqli->error);
        echo "<p>Arquivo enviado com sucesso!</p>";
    }else{
        echo "<p>Falha ao enviar arquivo!</p>";
    }
}

$sql_query = $mysqli->query("SELECT * FROM arqivos") or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="">
        <p>
            <label for="">Selecione o arquivo</label>
            <input name="arquivo" type="file" name="" id="">
        </p>
        <button type="submit">Enviar arquivo</button>
    </form>

    <h1>Lista de Arquivos</h1>
    <table border="1" cellspacing="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
        </thead>
        <tbody>
            <?php
            while($arquivo = $sql_query->fetch_assoc()){

            ?>
            <tr>
                <td><img height="70" src="<?php echo $arquivo['path']; ?>" alt=""></td>
                <td><a target="_blank" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['nome']; ?></a></td>
                <td><?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload'])); ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>