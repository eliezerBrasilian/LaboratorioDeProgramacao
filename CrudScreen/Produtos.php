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

// class Produto{
//     private $productName = "oi";
//     private $productPrice;
//     private $db_name = $db_name;
//     private $host = $host;
//     private $user = $user;
//     private$password = $password;
//     private $port = $port;
        
//     function __construct()
//     {
//         $this->productName = "";
//         $this->productPrice = 0;
        
//     }

//     function getProductName(){
//         return $this->productName;
//     }
//     function ProductPrice(){
//         return $this->productPrice;
//     }
//      function setProduct($productName,$productPrice){
//          $this->productName = $productName;
//          $this->productPrice = $productPrice;

//          echo $this->productName;
        
//             if(empty(trim($this->productName))){
//                 echo "vazio";
//             }
//             else {
//                  $this->inserir();
//             }
//     }

//     function inserir(){
//         $pdo = new PDO('mysql:host=localhost; dbname=lab_programacaodb;', 'root', '');

//         $stmt = $pdo->prepare('INSERT INTO produtos_tb (nome, preco) VALUES (:p1, :p2)');
//         $stmt->bindValue(':p1', $this->productName);
//         $stmt->bindValue(':p2', $this->productPrice);
//         $stmt->execute();

//         if ($stmt->rowCount() >= 1) {
//             echo json_encode('Produto inserido com Sucesso');
//             header('Location: index.php');
//             exit();
//         } else {
//             echo json_encode('Falha ao salvar Produto');
//         }
//     }
//     function Deletar($id){
//         echo "em deletar";
//         try {
//             $conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password);
//             // set the PDO error mode to exception
//             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
//             // sql to delete a record
//             $sql = "DELETE FROM produtos_tb WHERE id=$id";
        
//             // use exec() because no results are returned
//             $conn->exec($sql);
//             echo "Record deleted successfully";
//         } catch(PDOException $e) {
//             echo $sql . "<br>" . $e->getMessage();
//         }
        
//         $conn = null;
//             }
// }

// $productName  = $_POST['product_name'];
// $productPrice  = $_POST['product_price'];

// $prod = new Produto();
// $prod->setProduct($productName,$productPrice,$db_name); -->