<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new mysqli($host, $user, $pass, $db);

$table = 'itens';
$nome = 'xicara2';
$descricao = 'é uma xicara usada de cor rosa2';

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);
$conn->close();
