<?php
require_once("../DAO/userDAO.php");

class userVO extends userDAO {

    private $nome;
    private $login;
    private $senha;

    //Metodos Set
    public function setNome($string) {
        $this -> nome = $string;
    }
    public function setLogin($string) {
        $this -> login = $string;
    }
    public function setSenha($string) {
        $this -> senha = $string;
    }

    //Metodos Get

    public function getNome() {
        return $this -> nome;
    }
    public function getLogin() {
        return $this -> login;
    }
    public function getSenha() {
        return $this -> senha;
    }


    public function insert() {
        return $this -> setUser($this -> getNome(), $this -> getLogin(), $this -> getSenha());
    }
}
?>
