<?php


include_once('config.php');

$email = $_POST['email_msg'];
$msg = $_POST['msg'];

$mysqli->query("INSERT INTO msg(msg,email) VALUES ('$msg', '$email')") or die($mysqli->error);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="../Estilos/style.css" />
</head>

<body>
    <header>

        <div class="center">
            <div class="logo left">
                <img src="../Imagens/logof.png" width="55px" height="55px" class="logo-image">
            </div>
            <!--logo-->
            <nav class="desktop right">
                <!--site será responsivo-->
                <ul>
                    <li><a href="pages/home.php">Home</a></li>
                    <li><a href="../index.php">Login</a></li>
                </ul>
            </nav>

            <div class="clear"></div>
        </div>
        <!--center-->
    </header>

    <section class="center form-login">

        <div class=" center log">
            <h1>Dúvidas? Entre em contato</h1>
            <br><br>
            <form action="" method="POST">
                <p class=" center login">
                    <label>E-mail</label><br>
                    <input placeholder="exemplo@exemplo.com" class="login" type="text" name="email_msg" required>
                </p>
                <br><br>
                <p class="center login">
                    <label>Mensagem</label><br>
                    <textarea name="msg" class="login" cols="30" rows="10" ></textarea>
                </p>

                <p>
                    <br><br>
                <div class="center btns-cad">
                    <input class="btn" type="submit" name="submitMsg" id="submitMsg" value="Enviar mensagem">
                    
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
                    <img class="bio" src="../Imagens/ledze.png" />
                    <p class="bio">Led Zeppelin</p>
                </div>
                <!--box-especialidades-->
                <div class="w33 left box-especialidade">
                    <img class="bio" src="../Imagens/queen.jpg" />
                    <p class="bio">Queen</p>
                </div>
                <!--box-especialidades-->
                <div class="w33 left box-especialidade">
                    <img class="bio" src="../Imagens/metallica.jpg" />
                    <p class="bio">Metallica</p>
                </div>
                <!--box-especialidades-->
                <div class="clear"></div>
            </div>
        </section>
        <div class="clear"></div>
        <div class="clear"></div>
        <div class="clear"></div>

        <footer style="top: 50%;">
            <div class="center">
                <p>Eduardo Antonio Neiss & Kailo Santos</p>
            </div>
            <!--center-->
        </footer>
</body>

</html>