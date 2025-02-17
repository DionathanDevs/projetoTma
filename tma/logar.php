<?php 

session_start();

if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])){

    require_once("./config/conexao.php");
    require_once("./classes/UserClass.php");


    $u = new User();

    $login = addslashes($_POST['login']);
    $password = addslashes($_POST['password']);

    if($u->login($login,$password) == true){
        if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
            header("Location: ./index.php");
        }else{
            header("Location: ./login.php?error");
        }
    }else{
        header("Location: ./login.php?error");
    }

}else {
    header("Location: ./login.php?error");
} ?>