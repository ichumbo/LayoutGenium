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
            <p class="title">Faça login na sua conta</p>
            <button class="login_btn">Login</button>
            <button class="recover_btn">Esqueceu a senha?</button>
        </div>

        <div class="login">
            <form>
                <input type="user" class="log-input margin-t" placeholder="Usuário">
                <input type="password" class="log-input" placeholder="Senha">
                <select name="select" class="log-input">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Selecione</option>
                    <option value="valor3">Valor 3</option>
                </select>
                <select name="select" class="log-input">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Selecione</option>
                    <option value="valor3">Valor 3</option>
                </select>
                <select name="select" class="log-input">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Selecione</option>
                    <option value="valor3">Valor 3</option>
                </select>
                <input type="submit" value="Login" class="log-btn">
            </form>
        </div>

        <div class="recover">
            <form>
                <h2>Recuperação de Senha</h2>
                <input type="email" placeholder="Email" class="rec-input">
                <input type="submit" value="Recuperar Senha" class="rec-btn">
                <p class="notice">Caso você não receba o <span>email</span>, entre em contato com seu administrador para verificar se o email está correto.</p>
            </form>
        </div>

    <script src="login.js"></script>
</body>
</html>