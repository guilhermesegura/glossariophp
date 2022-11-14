<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavras</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/palavra_letra.css">

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

            echo"<a class='palavra' href='detalhe.php?palavra=$row[1]&id=$row[0]&letra=$letter'><p> $row[1] </p></a>";
        }
        ?>
    </section>

</body>

</html>