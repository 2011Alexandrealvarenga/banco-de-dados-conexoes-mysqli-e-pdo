<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = new mysqli($host, $user, $pass, $db);

$sql = 'select * from usuario';
$result = $conn->query($sql);
echo '<pre>';
    print_r($result);
echo '</pre>';

$conn->close();