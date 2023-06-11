<?php

    require './Produtos.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productName = isset($_POST['nome'])?$_POST['nome'] :  null ;
        $productPrice = isset($_POST['preco'])?$_POST['preco'] :  null ;

        $inserir = new Produto();
        $inserir->inserir($productName,$productPrice);
    }
?>