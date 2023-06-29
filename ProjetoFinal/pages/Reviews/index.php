<?php
require '../../models/Review.php';
require '../../models/Event.php';

$review = new Review();
$evento_id=  $_GET['id'];
$event = new Event();
$eventInfo = $event->getEvent($evento_id);
$reviews = $review->getReviews($evento_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações</title>
</head>

<body>
    <main-content>
        <header>
            <p>Reviews-Avaliações</p>
        </header>
        <section>
            <div class="event-info">
                <img src=<?php echo $eventInfo['imagem'] ?>>
                <p><?php echo $eventInfo['titulo'] ?></p>
            </div>

            <?php foreach($reviews as $review){ ?>
            <div class="comment-section">
                <user>
                    <name><?php echo $review['nome'] ?></name>
                    <img src=<?php echo $review['foto'] ?>>
                </user>
                <comment>
                    <p><?php echo $review['comentario'] ?></p>
                </comment>
            </div>
            <?php } ?>
        </section>

    </main-content>
    <script src="./index.js"></script>
</body>

</html>