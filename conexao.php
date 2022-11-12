<?php
	$servidor="localhost";
	$banco="dbglossario";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		

	$pdo->exec ('SET CHARACTER SET utf8');
?>