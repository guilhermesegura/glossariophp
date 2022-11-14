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
                    echo"<figure>";
                        echo"<img src='.$row[3]', alt='$row[2]' />";
                        echo"<figcaption>";
                            echo"<a href='detalhe.php?palavra=$row[1]&id=$row[0]&letra=$letter'> $row[1] </a>";
                        echo"</figcaption>";
                    echo"</figure>";
                    echo "<br>";
                }
            ?>
        </section>

    </body>
</html>