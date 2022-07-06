<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 2;
$sql = $conn->prepare("UPDATE itens SET nome = :nome, descricao =:descricao WHERE id = :id");

$nome = 'ale alvarenga show';
$descricao = 'esse cara é legal';

$sql->bindParam(':id', $id);
$sql->bindParam(':nome', $nome);
$sql->bindParam(':descricao', $descricao);
$sql->execute();