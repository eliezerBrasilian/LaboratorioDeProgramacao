<?php
require './Produtos.php';

$productName = isset($_POST['nome'])?$_POST['nome'] :  null ;
$productPrice = isset($_POST['preco'])?$_POST['preco'] :  null ;

$inserir = new Produto();
$inserir->inserir($productName,$productPrice);

?>