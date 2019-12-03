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
    <title>O Donuts do Homer - catálogo</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/catalogo.css" />
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

    <main class="main main-catalogo">

        <div class="intro-catalogo">
            <!-- DIV DE BACKGROUND -->
        </div>

        <h3 class="titulo-h3">Catálogo</h3>

        <section class="produtos-catalogo">

            <div class="produtos-container">

                <?php

                if ($db = mysqli_connect('localhost', 'root', '', 'donutsh', 3306)) { 
                    // Nada dentro
                } else {
                    die("Problema ao conectar ao SGDB");
                }

                $p = mysqli_prepare($db, '	SELECT * FROM produto');
                mysqli_stmt_execute($p);
                $result = mysqli_stmt_get_result($p);

                while ($produto = mysqli_fetch_assoc($result)) {
                    ?>

                    <div class="produto">
                        <img class="donut-img" src="image/donut1.jpg" alt="Imagem do Produto">
                        
                        <a href="produtoView.php?id_produto=<?=$produto['id_produto']?>"><h3><?=$produto["produto"]?></h3></a>

                    </div>

                <?php
                }
                ?>

            </div>

        </section>

    </main>

</body>

</html>