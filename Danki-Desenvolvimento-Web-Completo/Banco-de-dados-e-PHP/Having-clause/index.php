<?php
	$pdo = new PDO('mysql:host=localhost;dbname=testes','root','');

	$select = $pdo->prepare("SELECT * FROM tb_cliente GROUP BY cargo HAVING pontos > 5");

	$select->execute();

	echo '<pre>';
	var_dump($select->fetchAll());
	echo '</pre>';
?>