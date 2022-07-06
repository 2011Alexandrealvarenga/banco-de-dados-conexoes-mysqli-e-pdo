<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new mysqli($host, $user, $pass, $db);

$id = 2;
$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
$nome = 'sofa';
$descricao = 'sofa novo muito bom';
$stmt->bind_param("ssi", $nome, $descricao, $id);
$stmt->execute();
if($stmt->error){
    echo 'erro: '. $stmt->error;
}