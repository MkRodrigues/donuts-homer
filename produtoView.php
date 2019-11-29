<?php
session_start();
if (!$_SESSION['idUsuario']) header("Location: index.html");

if ($db = mysqli_connect('localhost', 'root', '', 'donutsh', 3306)) { } else {
    die("Problema ao conectar ao SGDB");
}

$id_produto = $_GET['id_produto'];


$p = mysqli_prepare($db, 'SELECT * FROM produto WHERE id_produto = ?');
mysqli_stmt_bind_param($p, 's', $id_produto);

mysqli_stmt_execute($p);

$result = mysqli_stmt_get_result($p);
$produto = mysqli_fetch_assoc($result);

// var_dump($produto);
// return;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O Donuts do Homer - Produto</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/produtoView.css" />
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

    <main class="main main-produto">
        <section class="desc-produto">

            <img src="" alt="">
            
            <h2><?=$produto['produto']?></h2>
            <p>Preço sugerido filial:</p>
            <span><?=$produto['preco']?></span>
            <!-- <p>Descrição do produto em detalhes</p> -->
        </section>

        <section class="ingr-produto">
            <h3>Descrição</h3>
            <p><?=$produto['descricao']?></p>
            <!-- <h3>Restrições</h3> -->
            <!-- <p>Descrição dos ingredientes que são restrição de algumas dietas</p> -->
            <button>Editar</button>
            <button>Excluir</button>
        </section>
    </main>


</body>

</html>