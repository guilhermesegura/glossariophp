<?php
   

    $usrname = $_POST["txUsuario"];
    $passwd = $_POST["txSenha"];
   
    
    include("conexao.php");

    try {
        $stmt = $pdo->prepare("insert into tbUsuario values(null, '$usrname', '$passwd')");

        $stmt ->execute();

        $pdo = null;

        header("Location:usuarios.php");

    }
    catch (PDOException $e) {
        echo "Erro: " . $e -> getmessage();
    }

?>