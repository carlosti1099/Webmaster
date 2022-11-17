<?php
    $pdo = new PDO('mysql:host=localhost;dbname=testes','root','');

    $sql = 'CREATE TABLE cursos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome_curso VARCHAR(30) NOT NULL
    )';

    $pdo->exec($sql);


?>