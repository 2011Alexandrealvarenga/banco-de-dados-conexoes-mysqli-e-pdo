<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new mysqli($host, $user, $pass, $db);
$id = 1;
// selecionar maior que o id
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_all();

echo '<pre>';
    print_r($data);
echo '</pre>';