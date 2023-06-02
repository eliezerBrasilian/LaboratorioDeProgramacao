<?php

class Produto{
    private $nomeProduto;
    private $precoProduto;


    function __construct()
    {
        $nomeProduto = "";
        $precoProduto = 0;
    }

    private function inserirProduto($nomeProduto,$precoProduto){
        $this->nomeProduto = $nomeProduto;
        $this->precoProduto = $precoProduto;

        
       // $pdo = new PDO('mysql:host=localhost; dbname=bd-comment-video;', 'root', '');

    $stmt = $mysqlConnection->prepare('INSERT INTO comments (name, comment) VALUES (:na, :co)');
    $stmt->bindValue(':na', $name);
    $stmt->bindValue(':co', $comment);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo json_encode('Comentário Salvo com Sucesso');
    } else {
        echo json_encode('Falha ao salvar comentário');
    }
    }
}