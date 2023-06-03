<?php
require './database.php';
$db_name = $db_name;
$host = $host.
$user = $user;
$password = $password;
$port = $port;

class Produto{
    private $productName = "oi";
    private $productPrice;
    
    function __construct()
    {
        $this->productName = "";
        $this->productPrice = 0;
    }

    function getProductName(){
        return $this->productName;
    }
    function ProductPrice(){
        return $this->productPrice;
    }
     function setProduct($productName,$productPrice){
         $this->productName = $productName;
         $this->productPrice = $productPrice;

         echo $this->productName;
        
            if(empty(trim($this->productName))){
                echo "vazio";
            }
            else {
                 $this->inserir();
            }
    }
    function inserir(){
        $pdo = new PDO('mysql:host=localhost; dbname=lab_programacaodb;', 'root', '');

        $stmt = $pdo->prepare('INSERT INTO produtos_tb (nome, preco) VALUES (:p1, :p2)');
        $stmt->bindValue(':p1', $this->productName);
        $stmt->bindValue(':p2', $this->productPrice);
        $stmt->execute();

        if ($stmt->rowCount() >= 1) {
            echo json_encode('Produto inserido com Sucesso');
            header('Location: index.php');
            exit();
// or die();
            
        } else {
            echo json_encode('Falha ao salvar Produto');
        }
    }
}

$productName  = $_POST['product_name'];
$productPrice  = $_POST['product_price'];

$prod = new Produto();
$prod->setProduct($productName,$productPrice,$db_name);