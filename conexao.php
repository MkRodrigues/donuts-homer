<?php
//Conecta no banco
if( $db = mysqli_connect(	'localhost',
							'root',
							'',
							'donutsh',
							3306) ){

} else {

	die("Problema ao conectar ao SGDB");
}