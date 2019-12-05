<?php
session_start();
if (!$_SESSION['idUsuario']) header("Location: index.html");

$id_produto = $_GET['id_produto'];

if (isset($_POST["submit"])) {
    $codigo = $_POST['codigo'];
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    // return;
}

if ($db = mysqli_connect('localhost', 'root', '', 'donutsh', 3306)) { } else {
    die("Problema ao conectar ao SGDB");
}

if (!empty($codigo)) {

    $p = mysqli_prepare($db, 'UPDATE produto SET codigo = ?, produto = ?, preco = ?, categoria = ?, descricao = ? WHERE id_produto = ?');

    mysqli_stmt_bind_param($p, 'sssssi', $codigo, $produto, $preco, $categoria, $descricao, $id_produto);
    mysqli_stmt_execute($p);

    header('location:listarProdutos.php');
}

$p = mysqli_prepare($db, 'SELECT * FROM produto WHERE id_produto = ?');
mysqli_stmt_bind_param($p, 's', $id_produto);

mysqli_stmt_execute($p);

$result = mysqli_stmt_get_result($p);
$produto = mysqli_fetch_assoc($result);

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
                <li><a href="intranet.php"><img class="icone" src="image/home.png" alt="">Intranet</a></li>
                <li><a href="sobreNos.php"><img class="icone" src="image/about.png" alt="">Sobre <br> Nós</a></li>
                <li><a href="catalogo.php"><img class="icone" src="image/nomear.png" alt="">Catálogo</a></li>
                <li><a href="listarProdutos.php"><img class="icone" src="image/list.png" alt="">Produtos</a></li>
                <li><a href="listarUsuarios.php"><img class="icone" src="image/settings.png" alt="">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main class=" main cadastro-prod">

        <div class="cad-background">
            <h2>Editar Produto</h2>
        </div>

        <form action="editarProduto.php?id_produto=<?= $id_produto ?>" method="POST" class="formulario">
            <div class="form-container">

                <div class="prod-form">
                    <div class="linha-um">
                        <span class="label">Código</span>
                        <input class="campo" name="codigo" type="text" value="<?= $produto['codigo'] ?>">
                    </div>

                    <div class="linha-dois">
                        <span class="label">Produto</span>
                        <input class="campo-dois" name="produto" type="text" value="<?= $produto['produto'] ?>">
                    </div>

                    <div class="linha-tres">
                        <div class="linha-dupla">
                            <span class="label">Preço Unitário</span>
                            <input class="campo" name="preco" type="text" value="<?= $produto['preco'] ?>">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Categoria</span>
                            <input class="campo" name="categoria" type="text" value="<?= $produto['categoria'] ?>">
                        </div>
                    </div>

                    <div class="linha-quatro">
                        <span class="label">Descrição</span>
                        <textarea class="campo-quatro" name="descricao" rows="4" class="descricao"><?= $produto['descricao'] ?></textarea>
                    </div>
                </div>

                <div class="prod-btn">
                    <button class="submit" type="submit" name="submit">Atualizar produto</button>
                    <a class="reset" href="listarProdutos.php">Cancelar</a>
                </div>
            </div>
        </form>

    </main>
</body>

</html>