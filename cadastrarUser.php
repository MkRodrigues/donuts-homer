<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>O Donuts do Homer - Cadastrar Usuário</title>
</head>

<body>

    <div class="barra-supBg">
        <div class="barra-info">
            <h1>O Donuts do Homer</h1>
            <h2>Nome do Usuário</h2>
            <a href="">Sair</a> <!-- colocar uma imagem como link -->
        </div>
    </div>

    <header>
        <nav class="menu-lateral">
            <ul>
                <li><a href=""></a>Home</li>
                <li><a href=""></a>Sobre Nós</li>
                <li><a href=""></a>Catálogo</li>
                <li><a href=""></a>Produtos</li>
                <li><a href=""></a>Admin</li>
                <li><a href=""></a>Add Produto</li>
                <li><a href=""></a>Add User</li>
            </ul>
        </nav>
    </header>

    <main class="cadastro-user">
        <h2>Cadastrar Usuário</h2>
        <form action="" class="formulario">
            <div class="user-form">
                <div class="aba-pessoais">
                    <h3>Dados Pessoais</h3>
                    <div><span>Id</span><input type="text"></div>
                    <div><span>Nome Completo</span><input type="text"></div>
                    <div><span>R.G</span><input type="text"></div>
                    <div><span>CPF</span><input type="text"></div>
                    <div><span>Cargo</span><input type="text"></div>
                    <div><span>Departamento</span><input type="text"></div>
                </div>

                <div class="aba-endereco">
                    <h3>Endereço</h3>
                    <div><span>Rua</span><input type="text"></div>
                    <div><span>Número</span><input type="text"></div>
                    <div><span>CEP</span><input type="text"></div>
                    <div><span>Bairro</span><input type="text"></div>
                    <div><span>Cidade</span><input type="text"></div>
                    <div><span>Estado</span><input type="text"></div>
                </div>

                <div class="aba-login">
                    <h3>Login e Senha</h3>
                    <div><span>Login</span><input type="text"></div>
                    <div><span>Senha</span><input type="text"></div>
                </div>
            </div>

            <div class="user-btn">
                <button>Adicionar usuário</button>
                <button>Cancelar</button></div>
        </form>
    </main>


</body>

</html>