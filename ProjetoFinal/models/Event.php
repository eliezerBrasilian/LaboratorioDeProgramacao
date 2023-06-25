<?php
//require('../Database/connection.php');
class Event{
    private $id;
    private $categoria_id;
    private $titulo;
    private $descricao;
    private $data;
    private $hora;
    private $local;
    private $preco;
    private $imagem;
    private $conn;
    
    function setEvent(  
     $id,
     $categoria_id,
     $titulo,
     $descricao,
     $data,
     $hora,
     $local,
     $preco,
     $imagem
     )
    {
        $this->id;
        $this->categoria_id;
        $this->titulo;
        $this->descricao;
        $this->data;
        $this->hora;
        $this->local;
        $this->preco;
        $this->imagem;
        global $conn;
        $this->conn = $conn;
    }

    function getEvent($id){
        $db_name = "lab_programacaodb";
        $host = "localhost";
        $user = "root";
        $password = "";

        $conn = new mysqli($host, $user, $password, $db_name);
          // Verificar a conexão
          if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
       
        // Ajuste da consulta SQL para filtrar pelo ID
        $query = "SELECT e.id, e.titulo, e.descricao, e.data, e.hora, e.local, e.preco, e.imagem, c.nome
        FROM events AS e
        INNER JOIN categories AS c ON e.categoria_id = c.id
        WHERE e.id = $id"; // Ajuste para filtrar pelo ID desejado

        $result = $conn->query($query);

        // Verificar se a consulta retornou resultados
        if ($result->num_rows > 0) {
        // Obter o registro correspondente ao ID
        $event = $result->fetch_assoc();
        return $event;
        } else {
        return null; // ID não encontrado, retorna null ou faça algo apropriado
        }

    }
    function getEvents(){
        // global $conn;
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
        // echo "<h1>" ."conectou". "</h1>";
      //  echo $query = $conn->query("SELECT * FROM events ORDER BY id DESC");
        $query = "SELECT e.id,e.titulo,e.descricao,e.data,e.hora,e.local,e.preco,e.imagem,c.nome
        from events as e
        inner join categories as c
        on e.categoria_id = c.id
         ORDER BY id DESC";
        $result = $conn->query($query);

        $eventData = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $eventData[] = $row;
            }
        }

        return $eventData;
    }
}

?>