<?php

    $usu = $_POST['txUsuario'];
    $sen = $_POST['txSenha'];

    include("conexao.php");

    $stmt = $pdo -> prepare("select * from tbusuario
    where usuario = '$usu' and senha = '$sen'");

    $stmt -> execute();

    $count = $stmt->rowCount();

    if($count == 1){
        session_start();
        $_SESSION["usrname"] = $usu;
        header("Location:verifica-permissao.php");
    }
    else if($count < 1) {
        header("Location:login.php?erro=1");
    }

?>