<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new mysqli($host, $user, $pass, $db);

$nome = "suporte de microfone";
$descricao = 'microfone novo';
$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

// s = string 
// i = integer 
// d = double
$stmt->bind_param("ss", $nome, $descricao);
$stmt->execute();