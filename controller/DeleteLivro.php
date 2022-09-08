<?php
require_once("../DAO/livrosDAO.php");
class DeleteLivro {
    private $DeleteLivro;

    public function __construct($id) {

        $this -> DeleteLivro = new livrosDAO();

        if($this -> DeleteLivro -> deleteLivro($id)== TRUE) {
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/tableLivro.php'</script>";
        } else {
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new DeleteLivro($_GET['id']);
?>
