<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O Donuts do Homer - Cadastrar Produto</title>
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt|Ubuntu:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="sobreNos.css" />
</head>

<body class="estrutura">

    <div class="barra barra-supBg">
        <div class="barra-info">
            <h1>O Donuts do Homer</h1>
            <h2>Nome do Usuário</h2>
            <a href="">Sair</a> <!-- colocar uma imagem como link -->
        </div>
    </div>

    <header class="header">
        <nav class="menu-lateral">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Catálogo</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Add Produto</a></li>
                <li><a href="#">Add User</a></li>
            </ul>
        </nav>
    </header>

    <main class="cadastro-prod">

        <h2>Cadastrar Produto</h2>

        <form action="" class="formulario" method="POST">
            <div class="prod-form">
                <div><span>Id</span><input type="text"></div>
                <div><span>Código</span><input type="text"></div>
                <div><span>Produto</span><input type="text"></div>
                <div><span>Preço Unitário</span><input type="text"></div>
                <div><span>Categoria</span><input type="text"></div>
                <div><span>Descrição</span><input type="text"></div>
            </div>

            <div class="prod-btn">
                <button>Adicionar produto</button>
                <button>Cancelar</button>
            </div>
        </form>

    </main>
</body>

</html>