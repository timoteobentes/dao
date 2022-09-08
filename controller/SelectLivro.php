<?php
    require_once("../DAO/livrosDAO.php");
    class SelectLivro{

        private $lista;

        public function __construct() {
            $this -> lista = new livrosDAO();
            $this -> criarTabela();

        }

        private function criarTabela() {
            $row = $this -> lista -> getLivro();
            foreach ($row as $value){
                echo "<tr>";
                echo "<th>" . $value['nome'] . "</th>";
                echo "<td>" . $value['autor'] . "</td>";
                echo "<td>" . $value['quantidade'] . "</td>";
                echo "<td> R$ " . $value['preco'] . "</td>";
                echo "<td>" . $value['data'] . "</td>";
                echo "<td>" . $value['flag'] = ($value['flag'] == "0") ? "Desativado" : "Ativado" . "</td>";
                echo "<td><a class='btn btn-warning' href='../view/editarLivro.php?id=" . $value['nome'] . "'><ion-icon name='pencil-outline'></ion-icon></a>&nbsp<a class='btn btn-danger' href='../controller/DeleteLivro.php?id=" . $value['nome'] . "'><ion-icon name='trash-outline'></ion-icon></a></td>";
                echo "</tr>";
            }
        }
    }

?>