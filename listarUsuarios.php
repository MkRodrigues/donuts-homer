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
    <title>O Donuts do Homer - Cadastrar Usuário</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/listarUsuarios.css">
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
    <main class="main">
        <h2 class="main-h2">Usuários</h2>

        <div class="botoes">
            <a class="btn-usuarios" href="formUsuario.php">Cadastrar Usuários</a>
        </div>

        <section class="tabela-usuarios">

            <table class="tabela">

                <thead>
                    <tr>
                        <!-- <th class="checkbox"><input type="checkbox"></th> -->
                        <th class="rotulo">Id</th>
                        <th class="rotulo">Login</th>
                        <th class="rotulo">Nome Completo</th>
                        <th class="rotulo">R.G</th>
                        <th class="rotulo">CPF</th>
                        <th class="rotulo">Cargo</th>
                        <th class="rotulo">Departamento</th>
                        <th class="rotulo">Rua</th>
                        <th class="rotulo">N°</th>
                        <th class="rotulo">Cep</th>
                        <th class="rotulo">Bairro</th>
                        <th class="rotulo">Cidade</th>
                        <th class="rotulo">Estado</th>
                        <th class="rotulo">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    if ($db = mysqli_connect('localhost', 'root', '', 'donutsh', 3306)) {
                        // Nada dentro
                    } else {
                        die("Problema ao conectar ao SGDB");
                    }

                    $p = mysqli_prepare($db, '	SELECT * FROM usuario');
                    mysqli_stmt_execute($p);
                    $result = mysqli_stmt_get_result($p);

                    while ($usuario = mysqli_fetch_assoc($result)) {
                        ?>

                        <tr class="row">
                            <td><?= $usuario['id_usuario'] ?></td>
                            <td><?= $usuario['login'] ?></td>
                            <td><?= $usuario['nome'] ?></td>
                            <td><?= $usuario['rg'] ?></td>
                            <td><?= $usuario['cpf'] ?></td>
                            <td><?= $usuario['cargo'] ?></td>
                            <td><?= $usuario['departamento'] ?></td>
                            <td><?= $usuario['rua'] ?></td>
                            <td><?= $usuario['numero'] ?></td>
                            <td><?= $usuario['cep'] ?></td>
                            <td><?= $usuario['bairro'] ?></td>
                            <td><?= $usuario['cidade'] ?></td>
                            <td><?= $usuario['estado'] ?></td>
                            <td>
                                <a href="editarUsuario.php?id_usuario=<?= $usuario['id_usuario'] ?>"><img class="icones" src="image/edit.png" alt=""></a>
                                <a href="excluirUsuario.php?id_usuario=<?= $usuario['id_usuario'] ?>"><img class="icones" src="image/delete.png" alt=""></a>
                            </td>

                        </tr>

                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </section>

    </main>



</body>

</html>