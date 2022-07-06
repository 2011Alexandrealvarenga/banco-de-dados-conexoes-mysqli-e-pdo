<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$id = 2;
$sql = $conn->prepare("SELECT * FROM itens WHERE id > :id");
$sql->bindParam(':id', $id);
$sql->execute();
$data = $sql->fetch(PDO::FETCH_ASSOC);

// 1 item
echo '<pre>';
    echo print_r($data);
echo '</pre>';

// varios itens
$itens = $sql->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
    echo print_r($itens);
echo '</pre>';
