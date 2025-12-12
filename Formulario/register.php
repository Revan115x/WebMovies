<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Formulario/css/register2.css">
    <link rel="shortcut icon" href="netflix.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../formulario/javascripts/SweetAlert2.js"></script>
    <script src="../Formulario/javascripts/post.js"></script>
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

     <!-- formulario de registro de usuario -->
    
        <div class="login">

            <div class="titulo">Registro</div>

    
                <div class="input">
                <input type="text" name="nombre" id="nombre_completo" autocomplete="off" placeholder="nombre completo" required><BR>
                </div>

                <div class="input">
                <input type="email" name="correo" id="correo" placeholder="correo Electronico" required><BR>
                </div>

                <div class="input">
                <input type="text" name="usuario" id="usuario" placeholder="usuario" required><br>
                </div>

                <div class="input">
                <input type="password" name="password" id="password" placeholder="Contraseña" required><br>
                </div>

                <button type="submit" id="enviar" onclick='envia();'>Registrar</button>

        </div>

    </div>

</div>

</div>
</body>
</html>