<?php

class User{
    public $db;
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }


public function login($login, $password){

    $sql = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = :password AND status = :status");
    $sql->bindValue("login",$login);
    $sql->bindValue("password",md5($password));
    $sql->bindValue("status", 1);
    $sql->execute();
    
    if($sql->rowCount() > 0){

        $dado = $sql->fetch();

        unset($_SESSION['idUser']);
        $_SESSION['idUser'] = $dado['id'];

        return true;
    }else{
        unset($_SESSION['idUser']);
        return false;
    }

}

public function getUser($id){
    $array = array();

    $sql = $this->db->prepare("SELECT name FROM users AS u WHERE u.id = :id");

    $sql->bindValue("id", $id);

    $sql->execute();

    if($sql->rowCount() > 0){
        $array = $sql->fetch();
    }
    return $array;
}
}
?>