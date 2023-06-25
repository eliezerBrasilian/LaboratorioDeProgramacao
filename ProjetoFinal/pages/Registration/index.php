<?php
require '../../models/Event.php';
require '../../models/Registration.php';
$id_evento = $_GET['id'];
$usuario_id = $_GET['user'];

$evento = new Event();
$ev = $evento->getEvent($id_evento);

$register = new Registration();
$reg = $register->getRegistrationInfo($usuario_id,$id_evento);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../Home/style.css">
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>
</head>

<body>
    <main-content>
        <header>
            <p>Registrar-se</p>

        </header>
        <section>
            <div class="register-info-container">
                <left>
                    <p><?php echo $ev['titulo'] ?></p>
                    <img src=<?php echo $ev['imagem']  ?> />
                </left>
                <right>
                    <p class="pagamento">Pagamento</p>

                    <?php
                        $status_pagamento = 0;
                    ?>
                    <?php if($reg !== null){ ?>
                    <?php $status_pagamento = $reg['status_pagamento']; ?>
                    <?php if($status_pagamento == 0 ){ ?>
                    <input type="checkbox" id="pago" name="pago" value="1">
                    <label for="pago">Está pago?</label><br>
                    <?php } else{ ?>
                    <p>Está pago!</p>
                    <?php } ?>

                    <?php   }else{ ?>
                    <input type="checkbox" id="pago" name="pago" value="1">
                    <label for="pago">Está pago?</label><br>
                    <?php } ?>
                </right>
            </div>

            <?php if($status_pagamento == 0){ ?>
            <button onclick="validaTermo(<?php echo $id_evento ?>)">Inscrever-se</button>
            <?php } ?>

        </section>
    </main-content>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./index.js"></script>
</body>

</html>