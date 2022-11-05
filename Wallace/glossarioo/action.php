<?php
 
 $id = $_POST['txId'];

if($id != 0){

    include("alterar-palavra.php");

} 

else {
    include("inserir-palavra.php");
}
?>