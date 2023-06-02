<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Document</title>
</head>

<body>
    <h3 class="title">Crud pratica 25/05/2023</h3>

    <div class="container" id="container-bg">
        <h3 class="title" style="font-size: 28px; color: black">
            Cadastrar produto
        </h3>
        <form action="conexao.php" method="post">
            <h1 class="label">Nome do produto</h1>
            <input type="text" placeholder="digite o nome do produto..." class="form-control" name="product_name"
                id="product_name" />
            <br />
            <h1 class="label">Preço do produto</h1>
            <input type="number" placeholder="R$" class="form-control" name="product_price" id="product_price" />
            <br />
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <div class="card" id="card-bg">
        <div class="card-header">
            <h4 class="product-title" id="card-product-title">Arroz</h4>
            <input class="form-control" id="card-product-title-input" type="text" value="Arroz" hidden />
        </div>
        <div class="body">
            <p class="product-title" id="card-product-price">R$ 20,00</p>
            <input class="form-control" id="card-product-title-input" type="number" value="20" hidden />
        </div>
        <div class="footer" id="card-btns">
            <button class="btn-edit">editar</button>
            <button class="btn-delete">excluir</button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>