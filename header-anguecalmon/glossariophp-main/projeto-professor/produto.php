<?php
    session_start();

    if(!isset($_SESSION["autorizacao"])==true){
        unset($_SESSION["autorizacao"]);
        session_destroy();
        header("location:index.php");
    }
?>


<h1> Produto </h1>