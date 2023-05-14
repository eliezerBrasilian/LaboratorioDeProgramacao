<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pratica7db";
$port = 3306;
 $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname,$user,$password);
  $result = $conn->query("select * from tb_aluno") -> fetchAll()
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
    <div>
        <form action="process.php" method="post">
            <label>Nome: </label>
            <input type="text" id="nome" name="nome" />
            <label>Telefone: </label>
            <input type="number" id="telefone" name="telefone" />
            <label>Email: </label>
            <input type="email" id="email" name="email" />

            <br>
            <label for="pet-select">Selecione o endereco:</label>
            <select name="endereco_ids" id="endereco-select">
                <option value="" disabled selected>--Selecione uma opção--</option>
                <option value="1">1 - Belo Horizonte</option>
                <option value="2">2 - São Paulo</option>
                <option value="3">3 - Rio de Janeiro</option>
            </select>
            <input type="submit" value="Enviar para o banco de dados" />
        </form>
    </div>
    <ul>
        <?php foreach($result as $item): ?>
        <li><?=$item["nome"]?></li>
        <?php endforeach; ?>
    </ul>
</body>


</html>

<!-- Criar um formulário para inserção de dados em um banco de dados, contendo:
ID - Identificação auto incremento
Nome - Nome do aluno
Telefone - Apenas números
Email - email do aluno, com validação do formato em Javascript.
Endereco - Chave estrangeira para outra tabela contendo:
Cidade
Bairro
Rua
Numero -->