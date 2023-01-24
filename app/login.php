<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo getenv('SITE_URL'); ?>css/global/login.css">
    <!--Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!--Tipografia-->
    <title>Sistema Genium</title>
</head>
<body>
    <div class="page">
        <div class="welcome">
            <img src="./img/Logo_White.png" alt="Sistema Genium">
            <p>Sistema de Gestão Pedagógica</p>
            <button class="login_btn">Login</button>
            <button class="register_btn">Registrar</button>
        </div>

        <div class="register">
            <form>
                <h2>Registre sua conta</h2>
                <input type="text" class="reg-input" placeholder="Usuário">
                <input type="email" placeholder="Email" class="reg-input">
                <input type="password" class="reg-input" placeholder="Senha">
                <input type="submit" value="REGISTER" class="reg-btn">
            </form>
        </div>

        <div class="login">
            <form>
                <h2>Faça login na sua conta</h2>
                <input type="email" class="log-input" placeholder="Email">
                <input type="password" class="log-input" placeholder="Senha">
                <input type="submit" value="LOGIN" class="log-btn">

                <a href="#" class="forg-pass">Esqueceu a senha?</a>
            </form>
        </div>
    </div>

    <script src="login.js"></script>
</body>
</html>