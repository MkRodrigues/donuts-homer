<?php
//Conecta no banco
session_start();
if( $db = mysqli_connect('localhost','root','','donutsh',3307) ){
} else {
	die("Problema ao conectar ao SGDB");
}


$login = $_POST['usuario'];
$senha = $_POST['senha'];

if( isset($login) && $login != ""){
	$p = mysqli_prepare( $db, 'SELECT id_usuario, login, senha, nome FROM usuario WHERE login = ?');
    mysqli_stmt_bind_param($p, 's',$login);
	mysqli_stmt_execute($p);
	$result = mysqli_stmt_get_result($p);
    $usuario = $result->fetch_assoc();


    if( $senha == $usuario['senha']){
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['idUsuario'] = $usuario['id_usuario'];
        header("Location: intranet.php");
        exit();
    }
}
header("Location: index.html");
