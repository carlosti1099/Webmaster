<?php
	$pdo = new PDO('mysql:host=localhost;dbname=testes','root','');

	//$sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,2,3)");
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE data BETWEEN '2022-10-27' AND '2022-10-27'");

	$sql->execute();

	$emails = $sql->fetchAll();

	print_r($emails);
?>