<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");
$nome = 'aleandre';
$descricao = 'cara muito legal';

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);
$stmt->execute();