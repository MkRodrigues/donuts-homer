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
    <title>O Donuts do Homer - Intranet</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/intranet.css" />
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

    <main class="main main-intranet">

        <div class="start">
            <h2>Intranet</h2>
            <p>Este espaço se destina a postagens de notícias, atualizações e informações sobre a empresa</p>
            <img id="linha" src="image/linha.png">
        </div>
        <section class="intranet-news">
            <img src="image/news.png">
            <div class="news-data">
                <div class="noticia-1">
                    <img id="calendar" src="image/calendar.png" alt="">

                    <p>Presidente da empresa estará visitando as filiais São Paulo, para entrega dos prêmios de melhor
                        faturamento mensal</p>
                </div>
                <div class="noticia-2">
                    <img id="calendar" src="image/calendar.png" alt="">
                    <p>Presidente da empresa estará visitando as filiais São Paulo, para entrega dos prêmios de melhor
                        faturamento mensal</p>
                </div>
                <div class="noticia-3">
                    <img id="calendar" src="image/calendar.png" alt="">
                    <p>Presidente da empresa estará visitando as filiais São Paulo, para entrega dos prêmios de melhor
                        faturamento mensal</p>
                </div>
            </div>
            <img id="linha" src="image/linha.png">
        </section>

        <section class="intranet-atualizacoes">
            <img id="img-atualiza" src="image/atualiza.png" alt="">
            <div class="update">
                <div class="atualizacao-1">
                    <img id="varinha" src="image/varinha.png" alt="">
                    <p>Novas correções ao inserir novos produtos</p>
                </div>
                <div class="atualizacao-2">
                    <img id="varinha" src="image/varinha.png" alt="">
                    <p>Adicionado funcionalidade para atualizar produto direto da tela principal na barra lateral</p>
                </div>
            </div>
            <img id="linha" src="image/linha.png">
        </section>

        <section class="intranet-eventos">
            <img src="image/eventos.png" alt="">
            <div class="evento-">
                <div class=evento-1>

                    <img src="image/evento1.png" alt="Imagem sobre eventos 1">
                    <div class="eventotxt-1">
                        <p>Novos funcionários participam da integração na Sede São Paulo. Atividades foram desde passeio pelas
                            unidades destaque, quanto pela sede de produção.</p>
                    </div>
                </div>
                <div class=evento-2>
                    <img src="image/evento2.jpg" alt="Imagem sobre eventos 2">

                    <div class="eventotxt-2">
                        <p>Novos funcionários participam da integração na Sede São Paulo. Atividades foram desde passeio pelas
                            unidades destaque, quanto pela sede de produção.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- <footer class="footer footer-bg">
        <div class="parag">
            <p>O Donuts do Homer - © Todos os direitos reservados</p>
        </div>
    </footer> -->

</body>

</html>