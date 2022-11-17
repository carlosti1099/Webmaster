<?php
	
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 10;

	//OR funcion como 'OU'
	//AND funciona com 'E'

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Simone', sobrenome='Costa' WHERE nome='Guilherme' OR nome='junior'");

	if($sql->execute()) {
		echo 'Meu cliente foi atualizado com sucesso!';
	}
?>