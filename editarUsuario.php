<?php
session_start();
if (!$_SESSION['idUsuario']) header("Location: index.html");

$id_usuario = $_GET['id_usuario'];

if (isset($_POST["submit"])) {
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];
    $departamento = $_POST['departamento'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    // return;
}

if ($db = mysqli_connect('localhost', 'root', '', 'donutsh', 3306)) { } else {
    die("Problema ao conectar ao SGDB");
}

if (!empty($login)) {

    if(!empty($senha)){
    $p = mysqli_prepare($db, 'UPDATE usuario SET nome = ?, rg = ?, cpf = ?, cargo = ?, departamento = ?, rua = ?, numero = ?, cep = ?, bairro = ?, cidade = ?, estado = ?, login = ?, senha = ? WHERE id_usuario = ?');

    mysqli_stmt_bind_param($p, 'ssssssisssssss', $nome, $rg, $cpf, $cargo, $departamento, $rua, $numero, $cep, $bairro, $cidade, $estado, $login, $senha, $id_usuario);
    mysqli_stmt_execute($p);
    }else{
        $p = mysqli_prepare($db, 'UPDATE usuario SET nome = ?, rg = ?, cpf = ?, cargo = ?, departamento = ?, rua = ?, numero = ?, cep = ?, bairro = ?, cidade = ?, estado = ?, login = ? WHERE id_usuario = ?');

    mysqli_stmt_bind_param($p, 'ssssssissssss', $nome, $rg, $cpf, $cargo, $departamento, $rua, $numero, $cep, $bairro, $cidade, $estado, $login, $id_usuario);
    mysqli_stmt_execute($p);
    }
    
}

$p = mysqli_prepare($db, 'SELECT * FROM usuario WHERE id_usuario = ?');
mysqli_stmt_bind_param($p, 's', $id_usuario);

mysqli_stmt_execute($p);

$result = mysqli_stmt_get_result($p);
$usuario = mysqli_fetch_assoc($result);

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
            <a href="./sair.php"><img class="icone-barra" src="image/exit.png" alt=""></a> <!-- colocar uma imagem como link -->
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
    <main class="main cadastro-user">

        <div class="cad-background">
            <h2>Editar Usuário</h2>
        </div>

        <form action="editarUsuario.php?id_usuario=<?=$id_usuario?>" class="formulario" method="POST">

            <div class="form-container">

                <div class="aba-pessoais">
                    <h3 class="subtitulo">Dados Pessoais</h3>

                    <div class="linha-um">
                        <span class="label-nome">Nome Completo</span>
                        <input class="campo-nome" name="nome" type="text" value="<?= $usuario['nome'] ?>">
                    </div>

                    <div class="linha-dois">
                        <div class="linha-dupla">
                            <span class="label">R.G</span>
                            <input class="campo" name="rg" type="text" value="<?= $usuario['rg'] ?>">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">CPF</span>
                            <input class="campo" name="cpf" type="text" value="<?= $usuario['cpf'] ?>">
                        </div>
                    </div>

                    <div class="linha-tres">
                        <div class="linha-dupla">
                            <span class="label">Cargo</span>
                            <input class="campo" name="cargo" type="text" value="<?= $usuario['cargo'] ?>">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Departamento</span>
                            <input class="campo" name="departamento" type="text" value="<?= $usuario['departamento'] ?>">
                        </div>
                    </div>
                </div>

                <div class="aba-endereco">
                    <h3 class="subtitulo">Endereço</h3>

                    <div class="linha-quatro">
                        <span class="label-rua">Rua</span>
                        <input class="campo-rua" name="rua" type="text" value="<?= $usuario['rua'] ?>">
                    </div>

                    <div class="linha-cinco">
                        <div class="linha-tripla">
                            <span class="label">Número</span>
                            <input class="campo-triplo" name="numero" type="text" value="<?= $usuario['numero'] ?>">
                        </div>
                        <div class="linha-tripla">
                            <span class="label">CEP</span>
                            <input class="campo-triplo" name="cep" type="text" value="<?= $usuario['cep'] ?>">
                        </div>
                        <div class="linha-tripla">
                            <span class="label">Bairro</span>
                            <input class="campo-triplo" name="bairro" type="text" value="<?= $usuario['bairro'] ?>">
                        </div>
                    </div>

                    <div class="linha-seis">
                        <div class="linha-dupla">
                            <span class="label">Cidade</span>
                            <input class="campo" name="cidade" type="text" value="<?= $usuario['cidade'] ?>">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Estado</span>
                            <input class="campo" name="estado" type="text" value="<?= $usuario['estado'] ?>">
                        </div>
                    </div>
                </div>

                <div class="aba-login">
                    <h3 class="subtitulo">Login e Senha</h3>

                    <div class="linha-sete">
                        <div class="linha-dupla">
                            <span class="label">Login</span>
                            <input class="campo" name="login" type="text" value="<?= $usuario['login'] ?>">
                        </div>
                        <div class="linha-dupla">
                            <span class="label">Senha</span>
                            <input class="campo" name="senha" type="password">
                        </div>
                    </div>
                </div>

            </div>

            <div class="user-btn">
                <button onclick="return atualizarFunction()"  class="submit" name="submit" type="submit">Atualizar usuário</button>
                <a href="listarUsuarios.php" class="reset" type="reset">Cancelar</a>
            </div>


            <script>
                            function atualizarFunction() {
                            var r = confirm("Quer mesmo atualizar?");
                            if (r == false) {
                                        return false;
                                                            } 

                                                            }
                                        </script>


        </form>
    </main>

</body>

</html>

