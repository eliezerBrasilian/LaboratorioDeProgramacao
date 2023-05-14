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
$id_endereco;


if(!empty($_POST['endereco_ids'])) {
    $selected = $_POST['endereco_ids'];
    
    $id_endereco = $selected;
    echo 'You have chosen: ' . $id_endereco;
} else {
    echo 'Please select the value.';
}

//tb aluno
/*id	id_endereco	nome	telefone	email	*/

//inserindo os dados acima na tabela

$pdo = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname,$user,$password);
    $stmt = $pdo->prepare('INSERT INTO tb_aluno 
    (id_endereco, nome, telefone, email) 
    VALUES
    (:id_endereco, :nome, :telefone, :email)');

    $stmt->bindValue(':id_endereco', $id_endereco);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    if ($stmt->rowCount() >= 1) {
        echo json_encode('Insercao feita com Sucesso');
    } else {
        echo json_encode('Falha ao inserir');
    }

 

//echo $nome . " " .$endereco;

/*
ID - Identificação auto incremento
Nome - Nome do aluno
Telefone - Apenas números
Email - email do aluno, com validação do formato em Javascript.
Endereco - Chave estrangeira para outra tabela contendo:
Cidade
Bairro
Rua
Numero
*/