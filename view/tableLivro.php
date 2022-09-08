<?php require_once("../controller/SelectLivro.php");?>
<?php require_once("../controller/SelectUser.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
    <?php include("menu.php"); ?>


    <div class="Books">
        <table class="table table-hover tableBook">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Quant. de Páginas</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data</th>
                    <th scope="col">Flag</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php new SelectLivro();  ?>
            </tbody>
        </table>
        <a href="cadastroLivro.php" class="btn btn-outline-success addBook">Cadastrar Livro</a>
    </div>

    <?php include("scripts.php"); ?>

</body>
</html>