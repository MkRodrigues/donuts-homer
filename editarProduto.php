<?php
session_start();
if(!$_SESSION['idUsuario']) header("Location: index.html");


$codigo = $_POST['codigo'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

echo $codigo;


if( $db = mysqli_connect('localhost','root','','donutsh',3306) ){
} else {
	die("Problema ao conectar ao SGDB");
}

$p = mysqli_prepare( $db, '	UPDATE produto (codigo, produto, preco, categoria, descricao) values (?, ?, ?, ?, ?)');
    mysqli_stmt_bind_param($p, 'sssss' ,$codigo, $produto, $preco, $categoria, $descricao);
    mysqli_stmt_execute($p);
    
    // header('Location: catalogo.php');

    ?>

<form action="" class="formulario" method="POST">
            <div class="prod-form">
                <div><span>Código</span><input type="text"></div>
                <div><span>Produto</span><input type="text"></div>
                <div><span>Preço Unitário</span><input type="text"></div>
                <div><span>Categoria</span><input type="text"></div>
                <div><span>Descrição</span><input type="text"></div>
            </div>

            <div class="prod-btn">
                <button>Salvar</button>
                <button>Cancelar</button>
            </div>
        </form>