<?php 

	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "gtasa2025g";
	$db_name = "login_register";
	$tbl_name = "usuarios";
	
	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
	 
	// if ($conexion) {
    //     echo 'Conectado Exitosamente a la base de datos';
    // }else{
    //     echo 'No se ha podido conectar a la base de datos';
    // }

?>