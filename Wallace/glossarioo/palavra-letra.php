<section>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A1 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A2 </a>
        </figcaption>
    </figure>

    <figure>
        <img src="" />
        <figcaption>
            <a href="#"> Palavra A3 </a>
        </figcaption>
    </figure>

</section>

<section>
    <?php
        include("conexao.php");

        $letter = $_GET['letra'];

        $stmt = $pdo -> prepare("select * from tbPalavra where palavra like '$letter%'");

        $stmt -> execute();

        $pdo = null;

        while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
            echo utf8_encode($row[0]);
            echo utf8_encode($row[1]);
            echo utf8_encode($row[2]);
            echo utf8_encode($row[3]);
            echo utf8_encode($row[4]);
            echo "<br>";
        }
    ?>
</section>