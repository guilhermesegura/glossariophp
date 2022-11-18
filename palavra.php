<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavras</title>


    <link href="./css/estilo_palavra.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/home.css" rel="stylesheet">

</head>

<body>
<header>
    <nav>
        <a class="logo">Cadastro</a>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            
                <?php
                    session_start();
                    $perm = $_SESSION["usrname"];
                    if ($perm == "admin") {
                        echo "<li><a href='admin.php'>Voltar</a></li>";
                    } else {
                        echo "<li><a href='logout.php'>Sair</a></li>";
                    }
                ?>
        </ul>
    </nav>
</header>

<script src="mobile-navbar.js"></script>


    <section class="campos">
        <form method="post" action="action.php">

            <div>
                <input type="hidden" name="txId" value="<?php echo @$_GET['id']; ?>" />
            </div>

            <div>
                <input type="text" placeholder="Palavra" name="txPalavra" value="<?php echo @$_GET['palavra'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="Descrição" name="txDescricao" value="<?php echo @$_GET['desc'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="Imagem" name="txImagem" value="<?php echo @$_GET['img'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="Link" name="txLink" value="<?php echo @$_GET['link'] ?>" />
            </div>

            <div>
                <input type="submit" value="Salvar" name="salvar" class="botao" />
            </div>
        </form>
    </section>
    <section>
    
        <div class="tbl-header">
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Palavra</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Link</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Apagar</th>

                    </tr>
                </thead>
            </table>
        </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" >
                    <tbody>
                        <?php
                        include("conexao.php");

                        try {
                        $stmt = $pdo->prepare("select * from tbpalavra");

                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                            echo "<tr>";
                            echo "<th scope=\"row\"> $row[idPalavra] </th>";
                            echo "<td> " . $row[1] . " </td>";
                            echo "<td>" . $row[2] . " </td>";
                            echo "<td>" . $row[3] . " </td>";
                            echo "<td>" . $row[4] . "</td>";
                            echo "<td><a href='?id=$row[idPalavra]&palavra=$row[1]&desc=$row[2]&img=$row[3]&link=$row[4]'> Editar </a> </td>";
                            echo "<td><a href='excluir-palavra.php?id=$row[idPalavra]'> Excluir </a></td>";
                            echo "</tr>";

                        }
                        } catch (PDOException $e) {
                            echo "Erro: " . $e->getmessage();
                        }

                        ?>
                    </tbody>
                </table>
            </div>

    </section>

</body>
<script src="scroll.js"></script>
</html>
