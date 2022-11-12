<?php
    include("PalavraClasse.php");
    
    $palavra = new Palavra();

    $palavra -> palavra = $_POST["txPalavra"];
    $palavra -> descricao = $_POST["txDescricao"];
    $palavra -> imagem = $_POST["txImagem"];
    $id = $_POST['txId'];

    include("conexao.php");

    try {
        $stmt = $pdo->prepare("update tbPalavra set palavra = '$palavra->palavra', descricao = '$palavra->descricao', imagem = '$palavra->imagem',  where idPalavra = '$id'");

        $stmt ->execute();

        echo "<script>alert('Dados enviados com sucesso')</script>";

        $pdo = null;

        header("Location:palavra.php");

    }
    catch (PDOException $e) {
        echo "Erro: " . $e -> getmessage();
    }

?>