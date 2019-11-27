<?php
session_start();
if (!$_SESSION['idUsuario']) header("Location: index.html");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O Donuts do Homer - Cadastrar Produtos</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/formProduto.css" />
</head>

<body class="estrutura">

    <div class="barra barra-superBg">

        <div class="logo">
            <a href="#">
                <h1>O Donuts do Homer</h1>
            </a>
        </div>

        <div class="barra-info">
            <h2><?= $_SESSION['nome'] ?></h2>
            <a href="./sair.php"><img class="icone-barra" src="image/exit.png" alt=""></a>
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

    <main class=" main cadastro-prod">

        <div class="cad-background">
            <h2>Cadastrar Produto</h2>
        </div>

        <form action="addProduto.php" method="POST" class="formulario">
            <div class="form-container">

                <div class="prod-form">
                    <div class="linha-um">
                        <span class="label">Código</span>
                        <input class="campo" name="codigo" type="text">
                    </div>

                    <div class="linha-dois">
                        <span class="label">Produto</span>
                        <input class="campo-dois" name="produto" type="text">
                    </div>

                    <div class="linha-tres">
                        <div class="linha-dupla">
                            <span class="label">Preço Unitário</span>
                            <input class="campo" name="preco" type="text">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Categoria</span>
                            <input class="campo" name="categoria" type="text">
                        </div>
                    </div>

                    <div class="linha-quatro">
                        <span class="label">Descrição</span>
                        <input class="campo-quatro" name="descricao" class="descricao">
                    </div>
                </div>

                <div class="prod-btn">
                    <button class="submit" type="submit">Adicionar produto</button>
                    <button class="reset" type="reset">Cancelar</button>
                </div>
            </div>
        </form>

    </main>
</body>

</html>