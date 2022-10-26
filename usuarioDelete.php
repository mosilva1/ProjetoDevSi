<?php
if (isset ($_GET["id"])&& !empty($_GET["id"])) {
    include "conexao.php";
    $query = "delete from usuarios where id =".$_GET["id"];
    $resultado = mysqli_query($conexao,$query);
    if($resultado){
        header("Location: usuario.php?sucesso=Excluido com sucesso!");
        exit(); 
    }else{
        header("Location: usuario.php?erro=Ocorreu algum erro!");
        exit();
    }
}else{
    header("Location: usuario.php?erro=Selecione um registro para excluir!");
    exit();
}

?>