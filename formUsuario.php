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
    <link rel="stylesheet" type="text/css" href="css/formUsuario.css" />
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
    <main class="main cadastro-user">

        <div class="cad-background">
            <h2>Cadastrar Usuário</h2>
        </div>

        <form action="addUsuario.php" class="formulario" method="POST">

            <div class="form-container">

                <div class="aba-pessoais">
                    <h3 class="subtitulo">Dados Pessoais</h3>

                    <div class="linha-um">
                        <span class="label-nome">Nome Completo</span>
                        <input class="campo-nome" name="nome" type="text">
                    </div>

                    <div class="linha-dois">
                        <div class="linha-dupla">
                            <span class="label">R.G</span>
                            <input class="campo" name="rg" type="text">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">CPF</span>
                            <input class="campo" name="cpf" type="text">
                        </div>
                    </div>

                    <div class="linha-tres">
                        <div class="linha-dupla">
                            <span class="label">Cargo</span>
                            <input class="campo" name="cargo" type="text">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Departamento</span>
                            <input class="campo" name="departamento" type="text">
                        </div>
                    </div>
                </div>

                <div class="aba-endereco">
                    <h3 class="subtitulo">Endereço</h3>

                    <div class="linha-quatro">
                        <span class="label-rua">Rua</span>
                        <input class="campo-rua" name="rua" type="text">
                    </div>

                    <div class="linha-cinco">
                        <div class="linha-tripla">
                            <span class="label">Número</span>
                            <input class="campo-triplo" name="numero" type="text">
                        </div>
                        <div class="linha-tripla">
                            <span class="label">CEP</span>
                            <input class="campo-triplo" name="cep" type="text">
                        </div>
                        <div class="linha-tripla">
                            <span class="label">Bairro</span>
                            <input class="campo-triplo" name="bairro" type="text">
                        </div>
                    </div>

                    <div class="linha-seis">
                        <div class="linha-dupla">
                            <span class="label">Cidade</span>
                            <input class="campo" name="cidade" type="text">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Estado</span>
                            <input class="campo" name="estado" type="text">
                        </div>
                    </div>
                </div>

                <div class="aba-login">
                    <h3 class="subtitulo">Login e Senha</h3>

                    <div class="linha-sete">
                        <div class="linha-dupla">
                            <span class="label">Login</span>
                            <input class="campo" name="login" type="text">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Senha</span>
                            <input class="campo" name="senha" type="password">
                        </div>
                    </div>
                </div>

            </div>

            <div class="user-btn">
                <button class="submit" type="submit">Adicionar usuário</button>
                <button class="reset" type="reset">Cancelar</button>
            </div>

        </form>
    </main>

</body>

</html>