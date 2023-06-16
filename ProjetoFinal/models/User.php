<?php 
error_reporting();
require('../Database/connection.php');
class User{
    private $name;
    private $email;
    private $password;
    private $conn;

    function __construct($name,$email,$password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        global $conn;
        $this->conn = $conn;
    }

    function setUser($name,$email,$password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }

     function cadastraUser(){
       global $conn;

        $sql = "INSERT INTO users (nome, email,senha) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die('Erro na preparação da declaração SQL: ' . $conn->error);
        }

        $stmt->bind_param("sss", $this->name, $this->email, $this->password);
        if ($stmt->execute()) {
            echo "Inserção realizada com sucesso. {$this->name}";
        } else {
            echo "Erro na execução da inserção: " . $stmt->error;
        }
    }
}

?>