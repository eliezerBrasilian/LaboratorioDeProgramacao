<?php

require './database.php';

$id = isset($_POST['id'])?$_POST['id'] :  null ;
$nome = isset($_POST['nome'])?$_POST['nome'] :  null ;
$preco = isset($_POST['preco'])?$_POST['preco'] :  null ;
$updatedAt = isset($_POST['updatedAt'])?$_POST['updatedAt'] :  null ;

//echo "{$id} {$nome} {$preco} {$updatedAt}  ";
// Create connection

$conn = new mysqli($host, $user, $password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE produtos_tb SET preco=$preco,nome='$nome', updatedAt='$updatedAt' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();