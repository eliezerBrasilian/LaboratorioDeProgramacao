<!DOCTYPE html>
<html lang="en">

<head>

    <link rel=" stylesheet" href="./style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora De Media</title>
</head>

<body>
    <div class="main-content">
        <header>
            <p>Calculadora de média</p>
        </header>
        <div class="form-container">
            <form id="form" class="form" method="post" action="index.php">
                <label class="insira-o-numero">Insira o número: </label>
                <div id="inputs" class="inputs">
                    <input type="number" id="number-input" class="number-input" value="0" placeholder="digite um numero"
                        required />
                </div>

                <div id="btns" class="btns">
                    <input type="button" id="btn-add" class="btn" value="Adicionar mais um número" />
                </div>
            </form>
        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>