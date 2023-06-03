<?php

class Database {
  private $host;
  private $user;
  private $password;
  private $db;
  private $port;

  function setConnection($host,$user,$password,$db,$port){
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
    $this->db = $db;
    $this->port = $port;

    try {
      $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

  }
}
?>