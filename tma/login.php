<?php 

session_start();

unset($_SESSION['idUser']);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <main>
        <section class="login-container">
            <div class="login-img"><img src="./assets/img/logo.png" alt="" class="logo-login"></div>
            <form action="logar.php" method="post">
                <div class="box-user">
                    <label for="username" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="username" name="login" placeholder="Digite seu usuário" require>
                </div>
                <div class="box-password">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" require>
                </div>
                <button type="submit" class="login-btn">Entrar</button>
                <?php 
                if(isset($_GET['error1'])) { ?>
                <div class="alert-error">
                    <strong>Atenção!</strong> Preencha todos os campos.
                    
                </div><?php 
                }
                if(isset($_GET['error2'])) { ?>
                    <div class="alert-error">
                        Dados incorretos! Por favor tente novamente.
                        
                    </div><?php 
                    }
                ?>
                <a href="#" class="esqueci-senha">Esqueci <b>minha senha</b></a>
            </form> 
        </section>
    </main>

</body>

</html>