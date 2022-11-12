
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="./css/estilo_palavra.css" rel="stylesheet">

</head>
<body>

<section>
    <h1> Cadastro </h1>
    <?php
        session_start();
        $perm = $_SESSION["usrname"];
        if ($perm == "admin") {
            echo "<a href='admin.php'><h2>Voltar</h2></a>";
        }
        else {
            echo "<a href='logout.php'><h2>Sair</h2></a>";
        }
     
    ?>
</section>

<section class="campos">
    <form method="post" action="action.php">

        <div>
            <input type="hidden" name="txId" value="<?php echo @$_GET['id'];?>"/>
        </div>

        <div>
            <input type="text" placeholder="Palavra" name="txPalavra" value="<?php echo @$_GET['palavra']?>"/>
        </div>

        <div>
            <input type="text" placeholder="Descrição" name="txDescricao" value="<?php echo @$_GET['desc']?>"/>
        </div>

        <div>
            <input type="text" placeholder="Imagem" name="txImagem" value="<?php echo @$_GET['img']?>"/>
        </div>

        <div>
            <input type="text" placeholder="Link" name="txLink" value="<?php echo @$_GET['link']?>"/>
        </div>
        <br>
        <div>
            <input type="submit" value="Salvar" name="salvar" class="botao"/>
        </div>
    </form>
</section>
<section>
    
    <table class="table table-striped">
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
        <tbody>
            <?php 
                include("conexao.php");

                try {
                    $stmt = $pdo -> prepare("select * from tbpalavra");

                    $stmt ->execute();

                    while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                        echo "<tr>";
                            echo "<th scope=\"row\"> $row[idPalavra] </th>";
                            echo "<td> " . utf8_encode($row[1]) . " </td>";
                            echo "<td>" . utf8_encode($row[2]) . " </td>";
                            echo "<td>" . utf8_encode($row[3]) . " </td>";
                            
                            echo "<td><a href='?id=$row[idPalavra]&palavra=$row[1]&desc=$row[2]&img=$row[3]> Editar </a> </td>";
                            echo "<td><a href='excluir-palavra.php?id=$row[idPalavra]'> Excluir </a></td>";
                        echo"</tr>";
                        
                    }
                }

                catch(PDOException $e) {
                    echo "Erro: " . $e ->getmessage();
                }
            
            ?> 
        </tbody>
    </table>

</section>
   
</body>
</html>

