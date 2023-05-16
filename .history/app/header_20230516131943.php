<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo getenv('SITE_URL'); ?>css/style.css">
    <!--Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp" />
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!--Tipografia-->
    <title>Sistema Genium</title>
</head>

<body>

    <header>
        <div class="top">
            <div class="logo">
                <img src="<?php echo getenv('SITE_URL'); ?>img/Icon_Blue.png" alt="Sistema Genium">
                <h2 class="name-icon"><span class="color-1">ENIUM</span></h2>
            </div>

            <div>
                <select name="select">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Selecione a Unidade</option>
                    <option value="valor3">Valor 3</option>
                </select>

                <select name="select">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Selecione a Unidade</option>
                    <option value="valor3">Valor 3</option>
                </select>
            </div>

            <button id="menu-btn">
                <span class="material-symbols-sharp">menu</span>
            </button>

            <div class="profile">

                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>

                <div class="info">
                    <p>Olá, <b>Ian</b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="<?php echo getenv('SITE_URL'); ?>img/Icon.png" alt="Foto Perfil">
                </div>

                <div class="notification">
                    <input type="button"><span class="material-symbols-sharp">notifications</span>
                </div>
            </div>
        </div>
    </header>

    