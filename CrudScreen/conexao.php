<?php
class Database {
  private $host;
  private $user;
  private $password;
  private $port;

  function __construct($host,$user,$password,$port) {
    $this->host = $host;
    $this->user = $user;
    $this->password = $password;
    $this->port = $port;

    echo "host";
  }

}

$connection = new Database("aqui é o host","","","");
?>