<?php

session_start();
if(!$_SESSION['idUsuario']) header("Location: index.html");


$id_produto = $_GET['id_produto'];

if( $db = new mysqli('localhost','root','','donutsh',3306) ){
} else {
	die("Problema ao conectar ao SGDB");
}
    
    $stmt = $db->prepare('DELETE FROM produto WHERE id_produto = ?');
    $stmt->bind_param('s' , $id_produto);

    $stmt->execute();


    header('location:listarProdutos.php');

    ?>