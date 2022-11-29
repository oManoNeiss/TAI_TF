<?php

if (isset($_POST['submit'])) {
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['senha']);


    include_once('config.php');


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    $mysqli->query("INSERT INTO users(nome,email,senha) VALUES ('$nome', '$email', '$senha')") or die($mysqli->error);

header('Location: ../index.php');

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../Estilos/style.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

        <div class="center">
            <div class="logo left">
                <img src="../Imagens/logof.png" height="55px" class="logo-image">
            </div>
            <!--logo-->
            <nav class="desktop right">
                <!--site será responsivo-->
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="contato.php">suporte</a></li>
                </ul>
            </nav>

            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
    <section class="center form-login">
        <div class="center log">
            <form action="cadastro.php" method="POST">

                <br>
                <label>Nome:</label><br>
                <input required class="login" required type="text" placeholder="Seu nome aqui" name="nome">
                <br><br>

                <br>
                <label>Email:</label><br>
                <input required class="login" required type="text" placeholder="exemplo@exemplo.com" name="email">
                <br><br>

                <br>
                <label>Senha:</label><br>
                <input required class="login" required type="password" placeholder="Defina sua senha" name="senha">
                <br><br>
                <button class="btn" type="submit" name="submit" id="submit" href="home.php">Cadastrar Usuário</button>
                <br>
                <p>Já possui uma conta?<a href="../index.php" class=" link-cad"> Faça login</a></p>
            </form>

        </div>
        <section class="especialidades">
                <!--especialidades-->
                <div class="center">
                    <h2 class="title">Algumas de nossas biografias</h2>
                    <div class="w33 left box-especialidade">
                        <img class="bio" src="../Imagens/soad.png" />
                        <p class="bio">S.O.A.D</p>
                    </div>
                    <!--box-especialidades-->
                    <div class="w33 left box-especialidade">
                        <img class="bio" src="../Imagens/pink.png" />
                        <p class="bio">Pink Floyd</p>
                    </div>
                    <!--box-especialidades-->
                    <div class="w33 left box-especialidade">
                        <img class="bio" src="../Imagens/ozzy.png" />
                        <p class="bio">Ozzy Osbourne</p>
                    </div>
                    <!--box-especialidades-->
                    <div class="clear"></div>
                </div>
            </section>

        <div class="clear"></div>

        <!--limpar toda flutuacao da pagina.-->

    </section>
    <br><br><br>
    <br><br>
    <footer>
        <div class="center">
            <p>Eduardo Antonio Neiss & Kailo Santos</p>
        </div>
        <!--center-->
    </footer>
</body>

</html>