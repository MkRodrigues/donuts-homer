<?php

session_start();
if(!$_SESSION['idUsuario']) header("Location: index.html");


$codigo = $_POST['codigo'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

if( $db = new mysqli('localhost','root','','donutsh',3307) ){
} else {
	die("Problema ao conectar ao SGDB");
}



$p = mysqli_prepare( $db, '	UPDATE produto (codigo, produto, preco, categoria, descricao) values (?, ?, ?, ?, ?)');
    mysqli_stmt_bind_param($p, 'sssss' ,$codigo, $produto, $preco, $categoria, $descricao);
    mysqli_stmt_execute($p);

var_dump($codigo);
    // header('location:listarProdutos.php');

    ?>