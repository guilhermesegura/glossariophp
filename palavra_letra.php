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
                        <h2 class='conteudo'> " . $row[1] . "</h2>" . "
                        <p class='conteudo'> " . $row[2] . "</p>" . "
                        <div class='link'><a class='conteudo' href='$row[4]' target='blank'>Saiba Mais</a></div>
                    </div>
                </div>";
    }

    ?>
    <?php include("footer.php")?>
</section>

<script type="text/javascript" src="vanilla-tilt.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".palavras-card"), {
        max: 25,
        speed: 400,
        glare: true,
        "max-glare": 0.4,
        
    });
</script>