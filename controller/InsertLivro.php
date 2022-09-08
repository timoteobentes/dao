<?php
    require_once("../model/livrosVO.php");
    class InsertLivro {

        private $livrosVO;

        public function __construct() {
            $this -> livrosVO = new livrosVO();
            $this -> insert();
        }

        private function insert() {
            $this -> livrosVO -> setNome($_POST['nome']);
            $this -> livrosVO -> setAutor($_POST['autor']);
            $this -> livrosVO -> setQuantidade($_POST['quantidade']);
            $this -> livrosVO -> setPreco($_POST['preco']);
            $this -> livrosVO -> setData(date('Y-m-d',strtotime($_POST['data'])));
            $result = $this -> livrosVO -> insert();
            if($result >= 1) {
                echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastroLivro.php'</script>";
            } else {
                echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
            }
        }
    }

    new InsertLivro();

?>