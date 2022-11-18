<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/estilo_admin.css">
    <style>
        html {
            background-color: #39394b;
            overflow: hidden;
        }
    </style>

    <title>Administrador</title>
</head>

    <main>
        <div class="pai">
            <div class="item">
                <a href="usuarios.php">Gerenciar Usuários</a>
            </div>

            <div class="item">
                <a href="palavra.php">Gerenciar Palavras</a>
            </div>

            <div class="item">
                <br>
                <a href="logout.php">Sair</a>
            </div>
        </div>
    </main>
<!--<button type="submit" onclick="window.location.href='logout.php'"> Sair </button>-->

