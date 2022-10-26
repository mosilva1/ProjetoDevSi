<?php
    $servidor = "localhost";
    $usuario = "root";
    $senhaBanco = "";
    $bancoDados = "devsi";

    $conexao = mysqli_connect($servidor,$usuario,$senhaBanco);
    mysqli_select_db($conexao,$bancoDados);
?>