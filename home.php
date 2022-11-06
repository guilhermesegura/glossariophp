<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="header">
    <ul>
        <a href="home.php" class="logo">Projeto Glossário</a>
        <div class="header-right">
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="glossario.php">Glossário</a></li>
            <li><a href="login.php">Login</a></li>
        </div>
    </ul>
</div>

<section class="total">
    <div class="box_total">
        <div>
            <h1> Total de Palavras: </h1>
        </div>
    </div>

    <div class="box_total">
        <div>
            <h1> Total de Usuários: </h1>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>

</body>
</html>