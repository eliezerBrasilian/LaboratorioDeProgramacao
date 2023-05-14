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
   on a.id_endereco = e.id
   order by a.nome limit $inicio,$limite") -> fetchAll();

$registros = $conn->query("select count(nome) count from tb_aluno")-> fetch()["count"];

$paginas = ceil($registros / $limite);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>


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
    </ul>


    <a href="?pagina=1">Primeira</a>
    <?php if($pagina>1):?>
    <a href="?pagina=<?=$pagina-1?>">
        <?php endif;?>
        << </a>
            <?=$pagina?>
            <?php if($pagina<$paginas):?>
            <a href="?pagina=<?=$pagina+1?>">>></a>
            <?php endif;?>
            <a href="?pagina=<?=$paginas?>">Último</a>

</body>


</html>