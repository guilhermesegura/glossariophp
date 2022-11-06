<link href="./css/login.css" rel="stylesheet">
<section class="sec1" > 
    <form action="verificar-usuario.php" method="post">
        <div class="div1"  >
            <input type="text" placeholder="Usuário" name="txUsuario" />
        </div>

        <div class="div2">
            <input type="password" placeholder="Senha" name="txSenha"/>
        </div >      

        <div class="butao" >
            <input type="submit" value="Login" />
        </div>
    </form>
</section>
<?php

    if (!empty($_GET['erro'])) {
        echo "<script>alert('Usuário Inválido')</script>";
    }

?>