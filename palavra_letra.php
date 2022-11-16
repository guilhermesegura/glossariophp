<title>Palavras</title>

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/estilo_glossario.css">

<?php include("header.php"); ?>

<section class="palavra_letra">

    <?php

    include("conexao.php");

    $letter = $_GET['letra'];

    $stmt = $pdo->prepare("select * from tbPalavra where palavra like '$letter%'");

    $stmt->execute();

    // while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
    //     echo "<img src='./img/$row[3]' />";
    //     echo ($row[1]);
    //     echo ($row[2]);
    //     echo ($row[4]);
    // }

    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

        echo  "<div class='palavras-card'> " . "
                <div><img src='./img/$row[3]' /></div>" . " 
                    <div class='conteudo-card'>
                        <h2> " . $row[1] . "</h2>" . "
                        <p> " . $row[2] . "</p>" . "
                        <a href='$row[4]' target='blank'>Saiba Mais</a>
                    </div>
                </div>";
    }

    ?>

</section>