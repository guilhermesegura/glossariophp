<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php include("header.php"); ?>

        <section class="sec1">


            <div class="divpai">

                <h2>Login</h2>
                <form action="verificar-usuario.php" method="post">

                    <div class="div1">

                        <input type="text" placeholder="Usuário" name="txUsuario" class="email" />

                    </div>

                    <div class="div2">

                        <input type="password" placeholder="Senha" name="txSenha" class="senha" />

                    </div>

                    <div class="container">
                        <div class="center">
                            <button class="btn">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span>LOGIN</span>
                            </button>
                        </div>
                    </div>

                </form>

            </div>

        </section>

        <?php

        if (!empty($_GET['erro'])) {
            if ($_GET['erro'] == 1)
                echo "<script>alert('Usuário Inválido')</script>";
        }

        ?>
        <?php include("footer.php")?>
    </main>

</body>

</html>