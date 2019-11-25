<?php
session_start();
if(!$_SESSION['idUsuario']) header("Location: index.html");


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

if( $db = mysqli_connect('localhost','root','','donutsh',3306) ){
} else {
	die("Problema ao conectar ao SGDB");
}

$p = mysqli_prepare( $db, 'INSERT usuario(nome, rg, cpf, cargo, departamento, rua, numero, cep, bairro, cidade, estado, login, senha) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    mysqli_stmt_bind_param($p, 'ssssssissssss' ,$nome, $rg, $cpf, $cargo, $departamento, $rua, $numero, $cep, $bairro, $cidade, $estado, $login, $senha);
    mysqli_stmt_execute($p);
    
    header('Location: catalogo.php');