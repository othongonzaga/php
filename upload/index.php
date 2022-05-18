<?php
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
}
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
</body>
</html>