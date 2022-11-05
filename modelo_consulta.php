<?php 
	include("conexao.php");

	try {
		$stmt = $pdo -> prepare("select * from tbpalavra");

		$stmt ->execute();

		while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			echo $row["idPalavra"] . " | ", $row[1] . " | ", $row[2] . " | ", $row[3] . " | ", $row[4] . " | ";
			echo "<br>"; 
		}
	}

	catch(PDOException $e) {
		echo "Erro: " . $e ->getmessage();
	}
?>
		
