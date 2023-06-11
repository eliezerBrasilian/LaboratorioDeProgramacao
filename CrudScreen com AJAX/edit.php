<?php
require './Produtos.php';

$id = isset($_POST['id'])?$_POST['id'] :  null ;
$nome = isset($_POST['nome'])?$_POST['nome'] :  null ;
$preco = isset($_POST['preco'])?$_POST['preco'] :  null ;
$updatedAt = isset($_POST['updatedAt'])?$_POST['updatedAt'] :  null ;

$inserir = new Produto();
$inserir->editar($nome,$preco,$updatedAt,$id);

?>