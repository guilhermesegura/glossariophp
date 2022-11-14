<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1><a href="glossario.php">Home</a></h1>
        <section>
            <?php
                include("conexao.php");

                $letter = $_GET['letra'];

                $stmt = $pdo -> prepare("select * from tbPalavra where palavra like '$letter%'");

                $stmt -> execute();

                $pdo = null;

                while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                    echo "<img src='img/$row[3]' />";
                    echo"<br>";
                    echo utf8_encode($row[1]);
                    echo utf8_encode($row[2]);
                    echo utf8_encode($row[4]);
                    echo"<a class='palavra' href='detalhe.php?palavra=$row[1]&id=$row[0]&letra=$letter'><p> $row[1] </p></a>";
                }
            ?>
        </section>

    </body>
</html>