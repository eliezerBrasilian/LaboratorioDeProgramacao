<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pratica7db";
$port = 3306;

//realizar conexao
try{
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname,$user,$password);
   echo "Conexão feita com o banco de dados";
}catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}

$nome =  $_POST['nome'];
$telefone =  $_POST['telefone'];
$email =  $_POST['email'];

$pdo = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname,$user,$password);
    $stmt = $pdo->prepare('INSERT INTO tb_aluno 
    (nome, telefone, email) 
    VALUES
    (:nome, :telefone, :email)');

    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    if ($stmt->rowCount() >= 1) {
        echo ('Insercao feita com Sucesso');
    } else {
        echo ('Falha ao inserir');
    }



 $cidade =  $_POST['cidade'];
 $bairro =  $_POST['bairro'];
 $rua =  $_POST['rua'];
 $numero =  $_POST['numero'];

 $stmt2 = $pdo->prepare('INSERT INTO tb_endereco 
    (cidade, bairro, rua, numero) 
    VALUES
    (:cidade, :bairro, :rua, :numero)');

    $stmt2->bindValue(':cidade', $cidade);
    $stmt2->bindValue(':bairro', $bairro);
    $stmt2->bindValue(':rua', $rua);
    $stmt2->bindValue(':numero', $numero);
    $stmt2->execute();
    if ($stmt2->rowCount() >= 1) {
        echo ('Insercao feita com Sucesso');
    } else {
        echo ('Falha ao inserir');
    }

    header("Location: index.php");
    exit();