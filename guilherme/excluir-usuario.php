<?php
    
    $id = $_GET['id'];
    
    include("conexao.php");

    try {
        $stmt = $pdo->prepare("delete from tbusuario where idusuario='$id'");

        $stmt ->execute();

        $pdo = null;

        header("Location:usuarios.php");

    }
    catch (PDOException $e) {
        echo "Erro: " . $e -> getmessage();
    }

?>