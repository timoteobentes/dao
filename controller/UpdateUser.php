<?php
    require_once("../DAO/userDAO.php");

    class UpdateUser {

        private $editar;
        private $nome;
        private $login;
        private $senha;

        public function __construct($id) {
            $this -> editar = new userDAO();
            $this -> criarFormulario($id);
        }
        private function criarFormulario($id) {
            $row = $this -> editar -> pesquisaUser($id);
            $this -> nome         = $row['nome'];
            $this -> login        = $row['login'];
            $this -> senha        = $row['senha'];
        }
        public function editarFormulario($nome, $login, $senha, $id) {
            if($this -> editar -> updateUser($nome, $login, $senha, $id) == TRUE) {
                echo "<script>alert('Registro incluído com sucesso!');document.location='../view/tableUser.php'</script>";
            } else {
                echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
            }
        }
        public function getNome() {
            return $this -> nome;
        }
        public function getLogin() {
            return $this -> login;
        }
        public function getSenha() {
            return $this -> senha;
        }

    }

    $id = filter_input(INPUT_GET, 'id');
    $editar = new UpdateUser($id);

    if(isset($_POST['submit'])) {
        $editar -> editarFormulario($_POST['nome'], $_POST['login'], $_POST['senha'], $_POST['id']);
    }
?>
