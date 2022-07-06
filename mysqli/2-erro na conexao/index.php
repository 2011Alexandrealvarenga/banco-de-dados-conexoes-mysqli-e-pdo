<?php 

$host = 'localhost';
$user = 'roota';
$pass = '';
$db = 'test';

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_errno){
    echo 'erro na conexao<br>';
    echo 'erro '.mysqli_connect_error();
}