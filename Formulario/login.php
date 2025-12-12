<?php

	session_start();

    if(isset($_SESSION['usuario'])) {
        header("location: ../web/home/home.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Formulario/css/login2.css">
    <link rel="shortcut icon" href="netflix.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="../formulario/javascripts/SweetAlert2.js"></script>
    <script src="../Formulario/javascripts/post.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Sesion</title>

</head>
<body>
    <header> 
		<div class="contenedor">
			<h2 class="logo">HOMECINEMA</h2>
        </div>
    </header>

<div class="portada">
<div class="contenedor-formularios">
    
    <div class="wrapper">

    
            <div method="post" class="login">

                 <div class="titulo">Iniciar Sesión</div>

                     <div class="input">

                         <input type="email" name="correo" id="correo" placeholder="Correo Electronico" required><BR>

                     </div>

                     <div class="input">

                        <input type="passworf" name="password" id="password" placeholder="Contraseña"><br>
                        
                    </div>

                    <button type="submit" id="enviar" onclick='enviar2();'>Iniciar</button>

                    <div class="login-register">

                    <p>No tienes cuenta aún? <a href="../Formulario/register.php" class="registerlink">register</a></p>

                     </div>

    </div>
</div>
</div>
</body>
</html>