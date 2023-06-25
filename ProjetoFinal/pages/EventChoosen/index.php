<?php
require('../../models/Event.php');
require '../../models/Registration.php';
$id=  $_GET['id'];
$usuario_id=  $_GET['user'];

$register = new Registration();
$reg = $register->getRegistrationInfo($usuario_id,$id);

$ev = new Event();
$event = $ev->getEvent($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../Home/style.css">
    <link rel="stylesheet" href="./style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main-content>
        <header>
            <p>Evento escolhido</p>

        </header>
        <section>


            <div class="content">
                <p class="event-title"><?php echo $event['titulo'] ?></p>
                <img src=<?php echo $event['imagem'] ?> />
                <footer>
                    <left>
                        <p><?php echo $event['descricao'] ?></p>
                        <p><strong>Hora: </strong> <?php echo $event['hora'] ?></p>
                        <p><strong>preço dos ingressos:</strong> <?php echo $event['preco'] ?></p>
                        <p class="categoria">categoria: #<?php echo $event['nome'] ?></p>
                    </left>
                    <div class="btns-container">
                        <?php if($reg == null){ ?>
                        <button onclick="subscribe(<?php echo $event['id'] ?>)">Inscrever-se</button>
                        <?php } ?>

                        <button onclick="reviews(<?php echo $event['id'] ?>)">Avaliações</button>
                    </div>

                </footer>
            </div>

        </section>

    </main-content>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./index.js"></script>
</body>

</html>