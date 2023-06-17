<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
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
                <h1 class="title">Faça seu login</h1>
                <div class="form">
                    <form id="form">
                        <label>Email</label><br />
                        <input type="email" required id="email" placeholder="digite seu email" />
                        <br />
                        <label>Senha</label><br />
                        <input type="password" required id="password" placeholder="digite sua senha" />
                        <br />
                        <button type="submit">Acessar</button>
                        <a href="./pages/Cadastro/index.php">
                            <p class="p-cadastro">cadastrar-me</p>
                        </a>
                    </form>
                </div>
            </div>
            <div class="on-right">
                <h1>Sempre os melhores eventos</h1>
                <img src="./img/party1.png" />
                <img src="./img/party2.png" />
            </div>
        </section>
    </main-content>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./index.js"></script>
</body>

</html>