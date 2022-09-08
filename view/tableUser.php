<?php require_once("../controller/SelectLivro.php");?>
<?php require_once("../controller/SelectUser.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
    <?php include("menu.php"); ?>

    <div class="Users">
        <table class="table table-hover tableUser">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php new SelectUser();  ?>
            </tbody>
        </table>
        <a href="cadastroUser.php" class="btn btn-outline-success addUser">Cadastrar Usuário</a>
    </div>

    <?php include("scripts.php"); ?>

</body>
</html>