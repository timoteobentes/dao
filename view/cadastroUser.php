<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <div class="title">
            <h1>Cadastro de Usuário</h1>
        </div>
        <form method="post" action="../controller/InsertUser.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Livro" required autofocus>
                <input class="form-control" type="text" id="login" name="login" placeholder="Login" required>
                <input class="form-control" type="text" id="senha" name="senha" placeholder="Senha" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

    <script language="javascript" type="text/javascript">

        function validar(formulario) {
            var quantidade = form.quantidade.value;
            var preco = form.preco.value;
            for (i = 0; i <= formulario.length - 2; i++) {
                if ((formulario[i].value == "")) {
                    alert("Preencha o campo " + formulario[i].name);
                    formulario[i].focus();
                    return false;
                }
            }
            formulario.submit();
        }

    </script>

    <?php include("scripts.php"); ?>

</body>

</html>
