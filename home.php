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

    <?php include("header.php"); ?>

    <?php
    include("conexao.php");

    $sql = "SELECT COUNT(*) FROM tbPalavra";
    $res = $pdo->query($sql);
    $totalPalavras = $res->fetchColumn();

    $sql2 = "SELECT COUNT(*) FROM tbUsuario";
    $res2 = $pdo->query($sql2);
    $totalUsuarios = $res2->fetchColumn();

    ?>

    <main>

        <div class="container">
            <div class="caixa">
                <h1> Total de palavras:
                    <?php echo "$totalPalavras"; ?>
                </h1>
            </div>

            <div class="caixa">
                <h1> Total de Usuários:
                    <?php echo $totalUsuarios - 1; ?>
                </h1>
            </div>
        </div>


    </main>

    <?php include("footer.php"); ?>

</body>

</html>