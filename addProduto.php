<?php
session_start();
if(!$_SESSION['idUsuario']) header("Location: index.html");


$codigo = $_POST['codigo'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

if( $db = mysqli_connect('localhost','root','','donutsh',3307) ){
} else {
	die("Problema ao conectar ao SGDB");
}

$p = mysqli_prepare( $db, '	INSERT produto (codigo, produto, preco, categoria, descricao) values (?, ?, ?, ?, ?)');
    mysqli_stmt_bind_param($p, 'sssss' ,$codigo, $produto, $preco, $categoria, $descricao);
    mysqli_stmt_execute($p);
    
    header('Location: catalogo.php');

    