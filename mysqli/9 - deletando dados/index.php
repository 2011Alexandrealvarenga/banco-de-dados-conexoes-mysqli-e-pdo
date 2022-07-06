<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new mysqli($host, $user, $pass, $db);

$nome = 'ale';
$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");
$stmt->bind_param("s", $nome);
$stmt->execute();
$conn->close();