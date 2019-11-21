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
    <title>O Donuts do Homer - Sobre Nós</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sobreNos.css" />
</head>

<body class="estrutura">

    <div class="barra barra-superBg">

        <div class="logo">
            <a href="intranet.html">
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
                <li><a href="intranet.php"><img class="icone" src="image/home.png" alt="">Intranet</a></li>
                <li><a href="sobreNos.php"><img class="icone" src="image/about.png" alt="">Sobre <br> Nós</a></li>
                <li><a href="catalogo.php"><img class="icone" src="image/nomear.png" alt="">Catálogo</a></li>
                <li><a href="listarProdutos.php"><img class="icone" src="image/list.png" alt="">Produtos</a></li>
                <li><a href="listarUsuarios.php"><img class="icone" src="image/settings.png" alt="">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main class="main main-sobre">

        <div class="cima-container">
            <section class="intro-container">
                <h2>O Donuts do Homer</h2>
                <p class="intro-p">Desde a criação de nossa marca e produto, acreditamos que o motivo de nossa qualidade
                    excepcional
                    são
                    não só nossos ingredientes de qualidade, mas sim nossos funcionários. São eles os responsáveis,
                    desde a separação dos ingredientes até a venda de nossos produtos. Os responsáveis por sermos o
                    melhor fornecedor de experiências. Hoje contamos com o maior catálogo de Donuts que o mercado
                    fornece, abrangendo o maior número de clientes, focando em todos os tipos de clientes, desde
                    aqueles
                    alérgicos a lactose, até aqueles em dieta. E damos todo esse crédito à nossos cúmplices (apelido
                    carinhoso), são eles, com suas ideias mirabolantes e incriveis que ajudam nosso crescimento
                    diário.
                    De nada seria nosso produto, se não tivessémos mão de obra capaz de produzí-lo.</p>
            </section>

            <section class="historia-container">
                <h2>Nossa História</h2>
                <p class="hist-p">Esta empresa foi criada em 1993 com o intúito de trazer as pessoas a delícia da vida,
                    do
                    sabor e da luxúria. O Donuts do Homer, embora citado por muitos concorrentes como uma forja dos
                    infernos
                    para atazanar, veio direto dos céus com suas delícias inigualáveis. Como Homer, acreditamos que na
                    vida
                    possuímos dois objetivos: comer Donuts e cuidar da Maggie, e este é o nosso ponto principal. Cuidar
                    da
                    Maggie? kkkkkk não amada, vender Donuts!</p>
            </section>
        </div>

        <div class="baixo-container">

            <section class="missao-container">
                <img class=" missao-img" src="image/missao-icon.png" alt="Imagem de Missão">

                <h2>Missão</h2>
                <p>Nossa missão quanto provedora de produtos, é o de oferecer o melhor no que tange qualidade e
                    sabor.
                    Focamos nos melhores produtos, buscando parcerias com as melhores empresas do ramo alimentício,
                    para
                    oferecer à nossos clientes finais a melhor experiência</p>
            </section>

            <section class="visao-container">
                <img class="visao-img" src="image/vision-icon.png" alt="Imagem de Visão">

                <h2>Visão</h2>
                <p>Nossa visão está embaçada! Tira essa rosquinha da frente da câmera!</p>
                <p>Temos como visão principal o foco no crescimento e na qualidade do nosso produto. Hoje estamos
                    localizados em cada canto deste país que chamamos de lar. Conseguimos alcançar lugares que nem
                    mesmo
                    acreditamos, e esse é nosso objetivo. Conquistar mais lugares e nos orgulharmos por levar à
                    nossos
                    clientes, nossa melhor experiência</p>

                <div class="visao-sobrepor">
                    <!-- Div de sobreposição de Visão -->
                </div>
            </section>

            <section class="valores-container">
                <img class="valores-img" src="image/value-icon.png" alt="Imagem de Valores">

                <h2>Valores</h2>
                <p> Temos como visão principal o foco no crescimento e na qualidade do nosso produto. Hoje estamos
                    localizados em cada canto deste país que chamamos de lar. Conseguimos alcançar lugares que nem
                    mesmo
                    acreditamos, e esse é nosso objetivo. Conquistar mais lugares e nos orgulharmos por levar à
                    nossos
                    clientes, nossa melhor experiência
                </p>
            </section>
        </div>

        <section class="nossoTime-container">

            <h2 class="nt-titulo">Nosso Time</h2>

            <div class="func-container">

                <div class="infoImg-container">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis rem natus similique quod
                        omnis, sint dolorum maxime excepturi .</p>
                    <img class="info-img" src="image/gabi.jpeg" alt="Foto do funcionário 1">
                </div>

                <h3 class="pf-titulo">Gabrielly <span>Vieira</span></h3>
            </div>

            <div class="func-container">

                <div class="infoImg-container">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis rem natus similique quod
                        omnis, sint dolorum maxime excepturi .</p>
                    <img class="info-img" src="image/mikael1.jpeg" alt="Foto do funcionário 1">
                </div>

                <h3 class="pf-titulo">Mikael <span>Assis</span></h3>
            </div>


        </section>

        <section class="redesSociais-container">
            <div class="redes-sociais">
                <h2 class="siga-nos">Siga-nos <span>Donuts</span></h2>
                <div class="sociais-img">
                    <img class="rs-img" src="image/face.png" alt="Facebook">
                    <img class="rs-img" src="image/linkedin.png" alt="LinkedIn">
                    <img class="rs-img" src="image/instagram.png" alt="Instagram">
                </div>
            </div>
            <div class="social-logo">
                <img src="image/donut.png" alt="Logo de rodapé">
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