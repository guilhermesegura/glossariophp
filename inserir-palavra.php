<?php
    include("PalavraClasse.php");
    
    $palavra = new Palavra();

    $palavra -> palavra = $_POST["txPalavra"];
    $palavra -> descricao = $_POST["txDescricao"];
    $palavra -> imagem = $_POST["txImagem"];
    
    
    include("conexao.php");

    try {
        $stmt = $pdo->prepare("insert into tbPalavra values(null, '$palavra->palavra', '$palavra->descricao', '$palavra->imagem', )");

        $stmt ->execute();

        $pdo = null;

        header("Location:palavra.php");

    }
    catch (PDOException $e) {
        echo "Erro: " . $e -> getmessage();
    }

?>