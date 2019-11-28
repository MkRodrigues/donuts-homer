<?php

session_start();
if(!$_SESSION['idUsuario']) header("Location: index.html");


$id_usuario = $_GET['id_usuario'];

if( $db = new mysqli('localhost','root','','donutsh',3306) ){
} else {
	die("Problema ao conectar ao SGDB");
}
    
    $stmt = $db->prepare('DELETE FROM usuario WHERE id_usuario = ?');
    $stmt->bind_param('s' , $id_usuario);

    $stmt->execute();


    header('location:listarUsuarios.php');

    ?>