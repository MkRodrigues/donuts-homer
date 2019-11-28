<?php
//Conecta no banco
if( $db = mysqli_connect(	'localhost',
							'root',
							'',
							'donutsh',
							3307) ){

} else {

	die("Problema ao conectar ao SGDB");
}