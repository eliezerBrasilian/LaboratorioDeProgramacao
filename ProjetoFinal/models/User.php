<?php 
require('../Database/connection.php');
class User{
    private $name;
    private $email;
    private $password;
    private $conn;
    private $tipo_usuario;
    private $id;

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
    function fazLogin($email, $password) {
        global $conn;
    
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
    
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->name = $row['nome'];
            $this->id = $row['id'];
            $email_da_consulta = $row['email'];
            $password_da_consulta = $row['senha'];
            $this->tipo_usuario = $row['tipo_usuario'];
    
            if ($email_da_consulta == $email && $password_da_consulta == $password) {
                //echo "Usuário válido: ";
               
                $objeto = new stdClass();
                $objeto->name = $this->name;
                $objeto->id = $this->id;
                $objeto->email = $this->email;
                $objeto->tipo_usuario = $this->tipo_usuario;

                $json = json_encode($objeto);

                header('Content-Type: application/json');
                echo $json;
            } else {
                echo "Verifique seus dados e tente novamente";
            }
        } else {
            echo "Nenhum resultado encontrado. {$conn->error}";
        }
    
        $stmt->close();
    }
    
}

?>