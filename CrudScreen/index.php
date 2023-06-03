<?php
    require './database.php';
    require './conexao.php';
    require './select.php';
    $connection = new Database();
    $connection->setConnection($host,$user,$password,$db_name,$port); // OK
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
        <form action="insert.php" method="post">
            <h1 class="label">Nome do produto</h1>
            <input type="text" placeholder="digite o nome do produto..." class="form-control" name="product_name"
                id="product_name" />
            <br />
            <h1 class="label">Preço do produto</h1>
            <input type="number" placeholder="R$" class="form-control" name="product_price" id="product_price" />
            <br />
            <button class="btn btn-primary" id="btn-salvar">Salvar</button>
        </form>

    </div>

    <div id="cards-container" style="display:flex;flex-direction:row;">
        <?php while($reg = $query->fetch_array()) { ?>

        <div class="card" id="card-bg" style="margin:10px">
            <div class="card-header">
                <h4 class="product-title" id="card-product-title"><?=$reg["nome"] ?></h4>
                <input class="form-control" id="card-product-title-input" type="text" value="Arroz" hidden />
            </div>
            <div class="body">
                <p class="product-title" id="card-product-price"><?=$reg["preco"]?></p>
                <input class="form-control" id="card-product-title-input" type="number" value="20" hidden />
            </div>
            <form class="footer" id="card-btns" method="post" action="delete.php" id="form-card">
                <?php
                $id = $reg['id'];
                ?>
                <button class="btn-edit">editar</button>
                <button type="click" class="btn-delete" id="btn-delete" data-id="<?=$reg["id"] ?>"
                    onclick="excluir(<?=$id?>)" form="form-card">
                    <input class="btn-edit" type="hidden" id="id-oculto-<?=$id?>" name="<?=$reg["id"] ?>"
                        value="<?=$reg["id"] ?>">
            </form> >excluir</button>
        </div>
        <?php }?>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="./index.js"></script>
</body>

</html>