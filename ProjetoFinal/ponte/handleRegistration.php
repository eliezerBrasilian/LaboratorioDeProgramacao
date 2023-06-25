<?php
require '../models/Registration.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $evento_id = $_POST['evento_id'];
    $usuario_id = $_POST['usuario_id'];
    $status_pagamento = $_POST['status_pagamento'];

    $register = new Registration();
    $register->setRegistration($usuario_id, $evento_id, $status_pagamento);
}

?>