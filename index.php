<?php

if (isset($_POST['email'])) {

    include_once('pages/config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        //echo "logado";

        header("Location: pages/home.php");
    }
    //echo "falha ao tentar login";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Estilos/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

        <div class="center">
            <div class="logo left">
                <img src="Imagens/logof.png" width="55px" height="55px" class="logo-image">
            </div>
            <!--logo-->
            <nav class="desktop right">
                <!--site será responsivo-->
                <ul>
                    <li><a href="pages/home.php">Home</a></li>
                    <li><a href="pages/contato.php">Suporte</a></li>
                </ul>
            </nav>

            <div class="clear"></div>
        </div>
        <!--center-->
    </header>



    
    <section class="center form-login">

        <div class=" center log">
            <h1>Acesse sua conta para utilizar nossoss erviços</h1>
            <br><br>
            <form action="" method="POST">
                <p class=" center login">
                    <label>E-mail</label><br>
                    <input required placeholder="exemplo@exemplo.com" class="login" type="text" name="email">
                </p>
                <br><br>
                <p class="center login">
                    <label>Senha</label><br>
                    <input required placeholder="Sua senha aqui" class="login" type="password" name="senha">
                </p>

                <p>
                    <br><br>
                <div class="center btns-cad">
                    <input class="btn" type="submit" name="submit" id="submit" value="Logar">
                    <br><br>
                    <p class="cadastro">Não conhece nossos serviços?</p><a class="link-cad"
                        href="pages/cadastro.php">Cadastre-se</a>
                </div>

            </form>


        </div>
        <!--center-->
        <div class="clear"></div>

        <!--limpar toda flutuacao da pagina.-->
        <section class="especialidades">
            <!--especialidades-->
            <div class="center">
                <h2 class="title">Algumas de nossas biografias</h2>
                <div class="w33 left box-especialidade">
                    <img class="bio" src="Imagens/ledze.png"/>
                    <p class="bio">Led Zeppelin</p>
                </div>
                <!--box-especialidades-->
                <div class="w33 left box-especialidade">
                    <img class="bio" src="Imagens/queen.jpg"/>
                    <p class="bio">Queen</p>
                </div>
                <!--box-especialidades-->
                <div class="w33 left box-especialidade">
                <img class="bio" src="Imagens/metallica.jpg"/>
                <p class="bio">Metallica</p>
                </div>
                <!--box-especialidades-->
                <div class="clear"></div>
            </div>
    </section>
    <div class="clear"></div>
    <div class="clear"></div>
    <div class="clear"></div>
    
    <footer>
        <div class="center">
            <p>Eduardo Antonio Neiss & Kailo Santos</p>
        </div>
        <!--center-->
    </footer>

</body>

</html>