<?php
    require ('conexao.php');

    $consulta = "SELECT * FROM pacientes";
    $con = mysqli_query($mysqli, $consulta);
?>