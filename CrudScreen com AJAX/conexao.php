<?php

class Database {
  private $host;
  private $user;
  private $password;
  private $db;
  private $port;
  private $conexao;

  function setConnection($host,$user,$password,$db,$port){
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
    $this->db = $db;
    $this->port = $port;

    try {
      $this->conexao = new PDO("mysql:host=$host;dbname=$db", $user, $password);
      // set the PDO error mode to exception
      $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

  }
  function getConnection(){
    return $this->conexao;
  }
}
?>