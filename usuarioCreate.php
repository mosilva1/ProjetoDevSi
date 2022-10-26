<?php
    $titulo = "Novo Usuário";
    include "cabecalho.php";
    if (isset($_POST)&& !empty($_POST)) {
        //echo "<pre>";
        //print_r($_POST);
        //echo "</pre>";

        $nome = $_POST["nome"];
        $senha = hash("sha512", $_POST["senha"]);
        $login = $_POST["login"];

        if(isset($_POST["ativo"])&& $_POST["ativo"] == "on")
        {
            $ativo = 1;
        }else{
            $ativo = 0;
        }

        include "conexao.php";
        $query = "insert into usuarios(nome, login, senha, ativo)";
        $query .= "value('$nome','$login','$senha','$ativo')";
        $resultado = mysqli_query($conexao,$query);

        if($resultado)
        {
            header("Location: usuario.php?sucesso=Cadastrado com Sucesso");
            exit();
        }else{
            ?>
            <div class="alert alert-danger">
                Alguma coisa está errada! Cheque a orotografira.    
            </div>
            <?php
        }
    }
?>
<div class="row">
    <div class="col-md-4 offset-4">
        <form action="usuarioCreate.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" riquered name="nome" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Login</label>
                <input type="text" riquered name="login" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" r1quered name="senha" class="form-control" id="">
            </div>
            <div class="form-group">
                <label>Ativo</label>
                <input type="checkbox" r1quered name="ativo" class="form-check" id="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="">Salvar Usuário</button>
            </div>
        </form>
    </div>

</div>

<?php include "rodape.php"?>