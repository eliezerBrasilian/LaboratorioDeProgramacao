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
  $result = $conn->query("select * from tb_aluno order by nome limit $inicio,$limite") -> fetchAll();

$registros = $conn->query("select count(nome) count from tb_aluno")-> fetch()["count"];

$paginas = ceil($registros / $limite);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="./styles/index.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <div class="main-content">
        <header>
            <p>CADASTRO DE ALUNOS</p>

        </header>
        <div class="form">
            <form action="process.php" method="post">
                <label>Nome: </label>
                <input type="text" id="nome" name="nome" required />
                <label>Telefone: </label>
                <input type="number" id="telefone" name="telefone" required />
                <label>Email: </label>
                <input type="email" id="email" name="email" required />

                <h1>Endereço</h1>
                <label>Cidade: </label>
                <input type="text" id="cidade" name="cidade" required />
                <label>Bairro: </label>
                <input type="text" id="bairro" name="bairro" required />
                <label>Rua: </label>
                <input type="text" id="rua" name="rua" required />
                <label>Número: </label>
                <input type="number" id="numero" name="numero" required />

                <input type="submit" value="Enviar para o banco de dados" />
            </form>
        </div>
        <ul class="listagem">
            <?php foreach($result as $item): ?>
            <li style="margin-right: 10px;"><?=$item["id"]?> - <?=$item["nome"]?>,</li>
            <?php endforeach; ?>
            <br>
            <a href="./view.php">Exibir dados</a>
        </ul>

    </div>

</body>


</html>