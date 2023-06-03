<?php
require './database.php';


$id = isset($_POST['id'])?$_POST['id'] :  null ;

echo $id;


try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to delete a record
    $sql = "DELETE FROM produtos_tb WHERE id=$id";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

?>