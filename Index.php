<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O Donuts do Homer</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
    <div class="painel">
        <div class="painel-container">
            <h1 class="nomeEmpresa">O Donuts do Homer</h1>
        </div>
    </div>

    <div class="formulario">
        <img src="image/donut.png" alt="">


        <form action="login.php" method="POST" class="formularioUm">

            <div class="form">
                <span class="format">Login</span>
                <input class="inserir" name="usuario" type="text">
            </div>

            <div class="form">
                <span class="format">Senha</span>
                <input class="inserir" name="senha" type="password">
            </div>

            <button class="btn" type="submit">Enviar</button>

            <!-- <div class="button">
                <a class="btn" href="">Enviar</a>
            </div> -->

        </form>
    </div>

    <footer class="footer-bg">
        <div class="parag">
            <p>O Donuts do Homer - © Todos os direitos reservados</p>
        </div>
    </footer>

</body>

</html>