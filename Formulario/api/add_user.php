<?php
	session_start();
	include_once "conexion.php";
?>
	 
<?php

	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['password'];


	// VERIFICAR QUE EL CORREO NO SE REPITA

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
	if(mysqli_num_rows($verificar_correo) > 0){
		echo 'ERRORCORREO!!';
		exit();
	}

	// VERIFICAR QUE EL USUARIO NO SE REPITA

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario'");

	if(mysqli_num_rows($verificar_correo) > 0){
		echo 'ERRORUSUARIO!!';
		exit();
	}

	$sql= "INSERT INTO $tbl_name (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES ('','$nombre_completo','$correo','$usuario','$contrasena')";
	mysqli_query($conexion, $sql);


	mysqli_close($conexion)
?>