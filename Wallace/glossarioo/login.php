<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/login.css" rel="stylesheet">
</head>
<body>
      


    
<section class="sec1" > 

    <div class="divpai">

    <form action="verificar-usuario.php" method="post">
        <div >
        <input type="text" placeholder="Usuário" name="txUsuario" class="email" />

        </div>

        <div class="div2">
            
            
            <input type="password" placeholder="Senha" name="txSenha" class="senha"    />

        </div >      

        <div  >

            <input type="submit" value="Login" class="butao" />

        </div>
    </form>

    </div>   

</section>





    
<?php

    if (!empty($_GET['erro'])) {
        echo "<script>alert('Usuário Inválido')</script>";
    }

?>

    

</body>
</html>