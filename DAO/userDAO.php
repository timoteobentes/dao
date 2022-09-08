<?php

    include_once("../conexao.php");

    class userDAO {

        protected $mysqli;

        public function __construct() {
            $this -> conexao();
        }

        private function conexao() {
            $this -> mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        }

        public function setUser($nome, $login, $senha){
            $stmt = $this -> mysqli -> prepare("INSERT INTO usuarios (`nome`, `login`, `senha`) VALUES (?,?,?)");
            $stmt -> bind_param("sss", $nome, $login, $senha);

            if( $stmt->execute() == TRUE) {
                return true ;
            } else {
                return false;
            }

        }
        public function getuser() {
            $result = $this -> mysqli -> query("SELECT * FROM usuarios");
            $array = array();

            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $array[] = $row;
            }
            return $array;

        }

        public function deleteUser($id) {
            if($this -> mysqli -> query("DELETE FROM `usuarios` WHERE `nome` = '".$id."';")== TRUE) {
                return true;
            } else {
                return false;
            }

        }
        public function pesquisaUser($id) {
            $result = $this -> mysqli -> query("SELECT * FROM usuarios WHERE nome='$id'");
            return $result -> fetch_array(MYSQLI_ASSOC);

        }
        public function updateUser($nome, $login, $senha, $id) {
            $stmt = $this -> mysqli -> prepare("UPDATE `usuarios` SET `nome`=?, `login`=?, `senha`=? WHERE `nome` = ?");
            $stmt -> bind_param("ssss", $nome, $login, $senha, $id);
            if($stmt -> execute() == TRUE) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
