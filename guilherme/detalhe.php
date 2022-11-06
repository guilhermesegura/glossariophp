<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $_GET['palavra']?></title>
</head>
<body>
    
    <?php
        $letter = $_GET['letra'];
        echo "<h1><a href='palavra-letra.php?letra=$letter'>Voltar</a></h1>";

        $id = $_GET['id'];
    
        include("conexao.php");
        
        try {
            $stmt = $pdo -> prepare("select * from tbpalavra where idPalavra = '$id'");

            $stmt ->execute();

            while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                    
                    echo "<img src='.$row[3]' />";
                    echo"<br>";
                    echo utf8_encode($row[1]);
                    echo utf8_encode($row[2]);
                    echo utf8_encode($row[4]);
                   
                
            }
        }

        catch(PDOException $e) {
            echo "Erro: " . $e ->getmessage();
        }

    ?>
</body>
</html>