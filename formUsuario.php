<?php
session_start();
if(!$_SESSION['idUsuario']) header("Location: index.html");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O Donuts do Homer - Cadastrar Usuário</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/listarUsuarios.css" />
</head>

<body class="estrutura">

    <div class="barra barra-superBg">

        <div class="logo">
            <a href="#">
                <h1>O Donuts do Homer</h1>
            </a>
        </div>

        <div class="barra-info">
            <h2><?=$_SESSION['nome']?></h2>
            <a href="./sair.php"><img class="icone-barra" src="image/exit.png" alt=""></a> <!-- colocar uma imagem como link -->
        </div>

    </div>

    <header class="header header-bg">
        <nav class="menu-lateral">
            <ul class="menu-ul">
                <li><a href="intranet.php"><img class="icone" src="image/home.png" alt="">Home</a></li>
                <li><a href="sobreNos.php"><img class="icone" src="image/about.png" alt="">Sobre <br> Nós</a></li>
                <li><a href="catalogo.php"><img class="icone" src="image/nomear.png" alt="">Catálogo</a></li>
                <li><a href="listarProdutos.php"><img class="icone" src="image/list.png" alt="">Produtos</a></li>
                <li><a href="listarUsuarios.php"><img class="icone" src="image/settings.png" alt="">Admin</a></li>
            </ul>
        </nav>
    </header>
    <main class="main cadastro-user">
        <h2>Cadastrar Usuário</h2>
        <form action="addUsuario.php" class="formulario" method="POST">
            <div class="user-form">
                <div class="aba-pessoais">
                    <h3>Dados Pessoais</h3>
                    <div><span>Nome Completo</span><input name="nome" type="text"></div>
                    <div><span>R.G</span><input name="rg" type="text"></div>
                    <div><span>CPF</span><input name="cpf" type="text"></div>
                    <div><span>Cargo</span><input name="cargo" type="text"></div>
                    <div><span>Departamento</span><input name="departamento" type="text"></div>
                </div>

                <div class="aba-endereco">
                    <h3>Endereço</h3>
                    <div><span>Rua</span><input name="rua" type="text"></div>
                    <div><span>Número</span><input name="numero" type="text"></div>
                    <div><span>CEP</span><input name="cep" type="text"></div>
                    <div><span>Bairro</span><input name="bairro" type="text"></div>
                    <div><span>Cidade</span><input name="cidade" type="text"></div>
                    <div><span>Estado</span><input name="estado" type="text"></div>
                </div>

                <div class="aba-login">
                    <h3>Login e Senha</h3>
                    <div><span>Login</span><input name="login" type="text"></div>
                    <div><span>Senha</span><input name="senha" type="password"></div>
                </div>
            </div>

            <div class="user-btn">
                <button type="submit">Adicionar usuário</button>
                <button type="reset">Cancelar</button></div>
        </form>
    </main>

</body>

</html>