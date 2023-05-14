<?php
$pagina = 1;

if(isset($_GET['pagina'])) $pagina = filter_input(INPUT_GET,"pagina",FILTER_VALIDATE_INT);
if(!$pagina)$pagina = 1;
$limite = 10;

$host = "localhost";
$user = "root";
$password = "";
$dbname = "pratica7db";

$inicio = ($pagina * $limite) - $limite;
$port = 3306;
 $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname,$user,$password);
  $result = $conn->query("select a.nome, a.telefone, a.id, a.email,e.cidade, e.bairro,e.numero
   from tb_aluno as a
   inner join tb_endereco as e
   on a.id = e.id
   order by a.nome limit $inicio,$limite") -> fetchAll();

$registros = $conn->query("select count(nome) count from tb_aluno")-> fetch()["count"];

$paginas = ceil($registros / $limite);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="./styles/view.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listagem dos registros</title>
</head>

<body>
    <main-content>
        <header>
            <p>LISTAGEM DE REGISTROS</p>

        </header>
        <section>
            <ul>
                <?php foreach($result as $item): ?>
                <li><?=$item["id"]?></li>
                <li><?=$item["nome"]?></li>
                <li><?=$item["cidade"]?></li>
                <li><?=$item["bairro"]?></li>
                <li><?=$item["numero"]?></li>
                <hr>
                <?php endforeach; ?>
                <a href="./index.php">Inserir mais dados</a>
                <br>
                <div class="navigate">
                    <a href="?pagina=1" style="margin-right: 20px;">Primeira</a>
                    <?php if($pagina>1):?>
                    <a href="?pagina=<?=$pagina-1?>" style="margin-right: 20px;">
                        << </a><?php endif;?>

                            <?=$pagina?>
                            <?php if($pagina<$paginas):?>
                            <a href="?pagina=<?=$pagina+1?>" style="margin-left: 20px;"> >> </a>
                            <?php endif;?>
                            <a href="?pagina=<?=$paginas?>" style="margin-left: 20px;">Último</a>
                </div>

            </ul>


        </section>
    </main-content>


</body>

</html>