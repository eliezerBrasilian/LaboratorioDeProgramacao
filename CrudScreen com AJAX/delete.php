<?php
require './Produtos.php';

$id = isset($_POST['id'])?$_POST['id'] :  null ;

 $deletar = new Produto();
 $deletar-> Deletar($id);


?>