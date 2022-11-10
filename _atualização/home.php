<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <nav>
            <a href="home.php" class="logo">Projeto Glossário</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="glossario.php">Glossário</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <script src="mobile-navbar.js"></script>

        <div class="container">
            <div class="caixa">
                <h1> Total de palavras: </h1>
            </div>

            <div class="caixa">
                <h1> Total de Usuários: </h1>
            </div>
        </div>


    </main>

    <?php include("footer.php"); ?>

</body>

</html>