<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="./css/usuario.css" rel="stylesheet">

    <title>Usuários</title>
</head>

<body>
    <section class="cabecalho">
        <?php
            session_start();

            echo "<a href='admin.php'><h2>Voltar</h2></a>";
        ?>
    </section>

    <section class="campos">
        <form method="post" action="inserir-usuario.php">
            <div>
                <input type="text" placeholder="Usuário" name="txUsuario" />
            </div>

            <div>
                <input type="text" placeholder="Senha" name="txSenha" />
            </div>

            <div>
                <input type="submit" value="Salvar" name="salvar" class="botao" />
            </div>



            <section>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Apagar</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php


include("conexao.php");

try {
    $stmt = $pdo->prepare("select * from tbusuario where Idusuario > 1");

    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        echo "<tr scope=\"row\">";
        echo "<th> $row[0] </th>";
        echo "<td> " . utf8_encode($row[1]) . " </td>";
        echo "<td> " . utf8_encode($row[2]) . " </td>";
        echo "<td><a href='excluir-usuario.php?id=$row[0]'> Excluir </a></td>";
        echo "</tr>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getmessage();
}

?>

                    </tbody>
                </table>

            </section>


</body>

</html>