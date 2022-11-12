<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavras</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include("header.php"); ?>

    <section class="lista">
        <?php
        include("conexao.php");

        $letter = $_GET['letra'];

        $stmt = $pdo->prepare("select * from tbPalavra where palavra like '$letter%'");

        $stmt->execute();

        $pdo = null;

        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

            echo utf8_encode($row[1]);
            echo "<img src='img/$row[3]' />";
            echo "<br>";
            echo utf8_encode($row[2]);
            echo utf8_encode($row[4]);
        }
        ?>
    </section>

</body>

</html>