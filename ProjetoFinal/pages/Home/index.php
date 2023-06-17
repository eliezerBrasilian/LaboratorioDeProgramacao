<?php 
require '../../models/Event.php';
$event = new Event();
$events = $event->getEvents();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
</head>

<body>
    <main-content>
        <header>
            <p>Lista de eventos</p>
            <search>
                <img src="../../img/search_.png" alt="icone de pesquisar" />
                <p>Pesquisar</p>
            </search>
        </header>
        <section>
            <p class="title">Eventos em destaque</p>
            <?php foreach ($events as $event) { ?>
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
                    <button>Ver mais</button>
                </footer>
            </div>
            <?php }?>
        </section>
    </main-content>
    <script src="./index.js"></script>
</body>

</html>