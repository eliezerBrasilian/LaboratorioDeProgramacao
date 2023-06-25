<?php
class Registration{
private $id;
private $usuario_id;
private $evento_id;
private $status_pagamento;

function isRegistered($usuario_id,$evento_id){
    $db_name = "lab_programacaodb";
    $host = "localhost";
    $user = "root";
    $password = "";

    $this->usuario_id = $usuario_id;
    $this->evento_id = $evento_id;

    $conn = new mysqli($host, $user, $password, $db_name);
      if ($conn->connect_error) echo ("Falha na conexão: " . $conn->connect_error);
    
    $query = "SELECT * from registrations WHERE usuario_id = $this->usuario_id AND evento_id = $this->evento_id";
     $result = $conn->query($query);
     if ($result->num_rows > 0) {
     $registrationResult = $result->fetch_assoc();
     return $registrationResult;
     } else {
     return null;
     }
}
function getRegistrationInfo($usuario_id,$evento_id){
    $db_name = "lab_programacaodb";
    $host = "localhost";
    $user = "root";
    $password = "";

    $this->usuario_id = $usuario_id;
    $this->evento_id = $evento_id;

    // Criar a conexão
    $conn = new mysqli($host, $user, $password, $db_name);
      // Verificar a conexão
      if ($conn->connect_error) {
        echo ("Falha na conexão: " . $conn->connect_error);
    }
    
    $query = "SELECT * from registrations WHERE usuario_id = $this->usuario_id AND evento_id = $this->evento_id ";
     $result = $conn->query($query);
     if ($result->num_rows > 0) {
     $registrationResult = $result->fetch_assoc();
     return $registrationResult;
     } else {
     return null;
     }
}
function setRegistration($usuario_id,$evento_id,$status_pagamento){
    $this->usuario_id = $usuario_id;
    $this->evento_id = $evento_id;
    $this->status_pagamento = $status_pagamento;

    $db_name = "lab_programacaodb";
    $host = "localhost";
    $user = "root";
    $password = "";

    $this->usuario_id = $usuario_id;

    // Criar a conexão
    $conn = new mysqli($host, $user, $password, $db_name);
      // Verificar a conexão
      if ($conn->connect_error) {
        return "Falha na conexão: " . $conn->connect_error;
    }

    $isRegistered = $this->isRegistered($usuario_id, $evento_id);
    if($isRegistered != null){
        $sql = "UPDATE registrations SET status_pagamento = ? WHERE usuario_id = ? AND evento_id = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            return ('Erro na preparação da declaração SQL: ' . $conn->error);
        }
        $stmt->bind_param("iii", $this->status_pagamento,$this->usuario_id,$this->evento_id);
        if ($stmt->execute()) {
            echo "Atualização realizada com sucesso!";
        } else {
            echo "Erro ao executar a atualização: " . $stmt->error;
        }
    }
    else{
        $sql = "INSERT INTO registrations (usuario_id,evento_id,status_pagamento) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);

    
        if (!$stmt) {
            echo('Erro na preparação da declaração SQL: ' . $conn->error);
        }
    
        $stmt->bind_param("iii", $this->usuario_id, $this->evento_id, $this->status_pagamento);
        if ($stmt->execute()) {
            echo "Inserção realizada com sucesso.{$this->status_pagamento}";
        } else {
            echo "Erro na execução da inserção: " . $stmt->error;
        }
    }
    
}
    
}
?>