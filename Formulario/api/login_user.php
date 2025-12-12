<?php 
	session_start();
	include_once "conexion.php";
?>
	 
<?php

	$correo = $_POST['correo'];
	$contrasena = $_POST['password'];
	  
 
	$sql = "SELECT * FROM $tbl_name WHERE correo = '$correo' and contrasena = '$contrasena'";
	 
    $result = $conexion->query($sql);
    $row = $result->fetch_array();
    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $correo;
    }else{
        echo 'ERRORCORREO';
    }
	mysqli_close($conexion);
?>
