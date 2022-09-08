<?php
require_once("../DAO/userDAO.php");
class DeleteUser {
    private $DeleteLivro;

    public function __construct($id) {

        $this -> DeleteLivro = new userDAO();

        if($this -> DeleteLivro -> deleteUser($id)== TRUE) {
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/tableUser.php'</script>";
        } else {
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new DeleteUser($_GET['id']);
?>
