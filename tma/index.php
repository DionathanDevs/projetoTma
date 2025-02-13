<?php 

require_once("./config/conexao.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="assets/css/style.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Menu Lateral -->
    <nav class="menu-lateral">
    <!-- Botão Menu -->
        <div class="btn-expandir">
            <i class="bi bi-list"></i>
            <img src="assets/img/logo.png" alt="" class="logo-cgn">
        </div>

        
    <!-- Lista de Navegação Lateral -->
        <ul class="lista-menu">
            <li class="item-menu">
                <a href="index.php">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="index.php?pg=tma">
                    <span class="icon"><i class="bi bi-broadcast-pin"></i></span>
                    <span class="txt-link">TMA</span>
                </a>
            </li>


        </ul>
        </nav>
        <!-- Header -->
         <nav class="menu-header">
            <div class="box-logo-cgn-header">
            <img src="assets/img/logo.png" alt="" class="logo-cgn-header"></div>

            <!-- Nome de Usuario e Opção para sair-->
            <div class="box-info-header">
                <span><i class="bi bi-person"></i></span>
                <span>Usuario</span>
                <button>Sair</button>
            </div>
         </nav>
         <main id="container">
            <?php
            // 
            if(isset($_GET['pg']) && !empty($_GET['pg'])){
                $pg = $_GET['pg'];
            }else {
                $pg = ''; 
            }
            

            switch($pg){
                case 'tma';
                require("page/tma.php");
                break;

                case 'new';
                require("page/tma_new.php");
                break;
                
                default: require("page/home.php");
            }
            ?>

         </main>
    <script src="menulateral.js"></script> 
    
</body>
</html>