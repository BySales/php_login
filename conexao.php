<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bd_php_fds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Conexão falhou menó: " . $conn->connect_error);
}
?>


