<?php

    session_start();
    
    
    if ($_SESSION["usrname"] == "admin")
    {
        header("Location:admin.php");
    }
    else {
        header("Location:palavra.php?");
    }
    
?>