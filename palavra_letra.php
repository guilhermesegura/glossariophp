<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Palavra Letra </title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/palavra_letra.css">

    </head>
    <body>
    <div class="header">
    <ul>
        <a href="home.php" class="logo">Projeto Glossário</a>
        <div class="header-right">
            <li><a href="glossario.php">Home</a></li>
            <li><a class="active" href="glossario.php">Glossário</a></li>
            <li><a href="login.php">Login</a></li>
        </div>
    </ul>
</div>
        <section class="lista">
            <?php
                include("conexao.php");

                $letter = $_GET['letra'];

                $stmt = $pdo -> prepare("select * from tbPalavra where palavra like '$letter%'");

                $stmt -> execute();

                $pdo = null;

                while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                    echo"<a href='detalhe.php?palavra=$row[1]&id=$row[0]&letra=$letter'><p> $row[1] </p></a>";
                    echo "<br>";
                }
            ?>
        </section>


        <?php include("footer.php"); ?>

    </body>
</html>