<?php
    require_once("../DAO/userDAO.php");
    class SelectUser{

        private $lista;

        public function __construct() {
            $this -> lista = new userDAO();
            $this -> criarTabela();

        }

        private function criarTabela() {
            $row = $this -> lista -> getUser();
            foreach ($row as $value){
                echo "<tr>";
                echo "<th>" . $value['id'] . "</th>";
                echo "<td>" . $value['nome'] . "</td>";
                echo "<td>" . $value['login'] . "</td>";
                echo "<td>" . $value['senha'] . "</td>";
                echo "<td><a class='btn btn-warning' href='../view/editarUser.php?id=" . $value['nome'] . "'><ion-icon name='pencil-outline'></ion-icon></a>&nbsp<a class='btn btn-danger' href='../controller/DeleteUser.php?id=" . $value['nome'] . "'><ion-icon name='trash-outline'></ion-icon></a></td>";
                echo "</tr>";
            }
        }
    }

?>