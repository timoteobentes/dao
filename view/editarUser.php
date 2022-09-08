<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/UpdateUser.php");?>
    <div class="row">
        <form method="post" action="../controller/UpdateUser.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" id="login" name="login" value="<?php echo $editar->getLogin(); ?>" required>
                <input class="form-control" type="text" id="senha" name="senha" value="<?php echo $editar->getSenha(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
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
