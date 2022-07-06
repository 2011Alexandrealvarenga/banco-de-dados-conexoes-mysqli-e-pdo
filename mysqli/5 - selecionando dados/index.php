<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM itens";
$result = $conn->query($q);
$conn->close();
// 1 item
$item = $result->fetch_assoc();
// todos itens
$itens = $result->fetch_all();

echo '<pre>';
    print_r($itens);
echo '</pre>';