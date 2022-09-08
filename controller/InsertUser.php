<?php
    require_once("../model/userVO.php");
    class InsertUser {

        private $userVO;

        public function __construct() {
            $this -> userVO = new userVO();
            $this -> insert();
        }

        private function insert() {
            $this -> userVO -> setNome($_POST['nome']);
            $this -> userVO -> setLogin($_POST['autor']);
            $this -> userVO -> setSenha($_POST['quantidade']);
            $result = $this -> userVO -> insert();
            if($result >= 1) {
                echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastroUser.php'</script>";
            } else {
                echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            }
        }
    }

    new InsertUser();

?>