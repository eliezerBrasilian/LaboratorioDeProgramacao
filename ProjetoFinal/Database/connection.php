<?php
$db_name = "lab_programacaodb";
 $host = "localhost";
 $user = "root";
 $password = "";
 $port = 3306;

// Criar a conexão
$conn = new mysqli($host, $user, $password, $db_name);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
// echo "<h1>" ."conectou". "</h1>"

 ?>