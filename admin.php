
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/estilo_admin.css">
        <title>Administrador</title>
    </head>
    <body>

        <div class="pai">
            <div class="item">
                <a href="logout.php">Sair</a>
            </div>

            <div class="item">
                <a href="palavra.php?">Gerenciar Palavras</a>
            </div>

            <div class="item">
                <a href="usuarios.php">Gerenciar Usuários</a>
            </div>
        </div>

    </body>

</html>