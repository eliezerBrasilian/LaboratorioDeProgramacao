<?php
require './database.php';
class Produto{

    function deletar($id){
        try {
            $conn = new PDO('mysql:host=localhost; dbname=lab_programacaodb;', 'root', '');
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
        }

        function editar($nome,$preco,$updatedAt,$id){
            // $servername, $username, $password, $dbname
            $conn = new mysqli('localhost', 'root', '', 'lab_programacaodb');
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
        }
        function inserir($productName,$productPrice){
            $pdo = new PDO('mysql:host=localhost; dbname=lab_programacaodb;', 'root', '');
    
            $stmt = $pdo->prepare('INSERT INTO produtos_tb (nome, preco) VALUES (:p1, :p2)');
            $stmt->bindValue(':p1', $productName);
            $stmt->bindValue(':p2', $productPrice);
            $stmt->execute();
    
            if ($stmt->rowCount() >= 1) {
                echo json_encode('Produto inserido com Sucesso');
                header('Location: index.php');
                exit();
                
            } else {
                echo json_encode('Falha ao salvar Produto');
            }
        }
}