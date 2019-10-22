<?php

$usuario =$_POST['usuario'];
$senha =$_POST['senha'];

if($usuario == "admin" && $senha == "admin"){

    echo "entrou!!";
    
}else{
    echo "não entrou";
}

?>