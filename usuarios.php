<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="./css/estilo_usuario.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/home.css" rel="stylesheet">

    <title>Usuários</title>
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


            <section class= "campos">
            <div class="container">
                

                <table>
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
        echo "<td>  $row[1]   </td>";
        echo "<td>  $row[2]  </td>";
        echo "<td><a href='excluir-usuario.php?id=$row[0]'> Excluir </a></td>";
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

</html>