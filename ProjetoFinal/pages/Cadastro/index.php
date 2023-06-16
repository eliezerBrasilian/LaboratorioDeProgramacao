<?php
require ('../../Database/connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro - lista de eventos</title>
</head>

<body>
    <main-content>
        <header>
            <p>Lista de eventos</p>
        </header>
        <section>
            <div class="login-side">
                <h1 class="title">Faça seu cadastro</h1>
                <div class="form">
                    <form id="form" method="post">
                        <label>Nome</label><br />
                        <input type="text" id="name" value="joaquim" />
                        <label>Email</label><br />
                        <input type="email" id="email" value="teste@teste.com" />
                        <br />
                        <label>Senha</label><br />
                        <input type="password" id="password" value="12345" />
                        <br />
                        <button id="btn">Cadastrar</button>
                        <a href="../../index.html">
                            <p class="p-cadastro">já possuo conta, fazer login</p>
                        </a>
                    </form>
                </div>
            </div>
            <div class="on-right">
                <h1>Sempre os melhores eventos</h1>
                <img src="../../img/party1.png" />
                <img src="../../img/party2.png" />
            </div>
        </section>
    </main-content>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./index.js"></script>
</body>

</html>