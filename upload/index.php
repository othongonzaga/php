<?php
include("conexao.php");

if(isset($_GET['deletar'])){
    $id = intval($_GET['deletar']);
    $sql_query = $mysqli->query("SELECT * FROM arquivos WHERE id = '$id") or die($mysqli->error);
    $arquivo = $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])){
        $mysqli->query("DELETE FROM arquivos WHERE id = '$id") or die($mysqli->error);
    };

    echo "<p>Arquivo excluid com sucesso!</p>";
}

$funcao = function($error, $size, $name, $tmp_namme) use($mysqli){
    

    if($error){
        die("Falha ao enviar arquivo");
    }
    
    if($size > 2097152){
        die("Arquivo muito grande! Máximo: 2MB"); // 1024 bytes = 1kb; 1024 kb = 1 mb
    }
    
    $pasta = "arquivos/";
    $nomeArquivo = $name;
    $novoNomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION));
    
    if($extensao != "jpg" && $extensao != "png" && $extensao != "svg"){
        die("Tipo de arquivo não aceito!");
    }
    
    $path = $pasta . $novoNomeArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($tmp_namme, $path);
    
    if($deu_certo){
        $mysqli->query("INSERT INTO arquivos (nome, path) VALUES ('$nomeArquivo', '$path')") or die($mysqli->error);
        true;
    }else{
        false;
    }
};

if(isset($_FILES['arquivos'])){
    $arquivos = $_FILES['arquivos'];
    $tudo_certo = true;
    
    foreach($arquivos['name'] as $index => $arq){
        $tudo_certo = $funcao($arquivos['error'][$index],$arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);

        if(!$tudo_certo){
            $tudo_certo = false;
        }
    }

    if($tudo_certo){
        echo "<p>Todos os arquivo foram enviados com sucesso!</p>";
    }else{
        echo "<p>Todos os arquivo foram enviados com sucesso!</p>";
    }
}

$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);
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
            <input multiple name="arquivos[]" type="file" name="" id="">
        </p>
        <button type="submit">Enviar arquivo</button>
    </form>

    <h1>Lista de Arquivos</h1>
    <table border="1" cellspacing="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
            <th>Apagar</th>
        </thead>
        <tbody>
            <?php
            while($arquivo = $sql_query->fetch_assoc()){

            ?>
            <tr>
                <td><img height="70" src="<?php echo $arquivo['path']; ?>" alt=""></td>
                <td><a target="_blank" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['nome']; ?></a></td>
                <td><?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload'])); ?></td>
                <th><a href="index.php?deletar=<?php echo $arquivo['id']; ?>"></a></th>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>