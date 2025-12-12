<?php

	session_start();

    if(!isset($_SESSION['usuario'])) {

        echo '
            <script>
                alert("inicia sesion para acceder");
                window.location = "/formulario/login.php"
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HOME NETFLIX</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="../netflix.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/580f6ca6e9.js" crossorigin="anonymous"></script>
	<script src="js/jquery-3.7.1.min.js"></script>

</head>
<body>
	
		<!-- Cabezera -->

	<header>

		<div class="contenedor">

            <a href="../Home/home.php"><h2 class="logo">HOMECINEMA</h2></a>

			<nav>
				<div class="menu-container">
					<button class="lupa"></button>
					<div class="menu-search">
                        <input type="search" id='buscador' name="query" class="buscador" onchange="abreBuscador();" placeholder="Buscador" value="<?php isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '' ?>">
					</div>

				</div>
				<a href="../Home/home.php">Inicio</a>
                    <div class="menu-container">
				        <a href="#" class="activo">Peliculas</a>
                         <div class="menu-category">
						    <a href="/formulario/api/.php">Accion</a>
                            <a href="/formulario/api/.php">Dramas</a>
                            <a href="/formulario/api/.php">Terror</a>
                            <a href="api/comedia.php">Comedias</a>
                            <a href="/formulario/api/.php">Animacion</a>
					    </div>
                    </div>
				<a href="#">Series</a>
				<a href="#">Mi lista</a>

				<div class="menu-container">
					<button class="icono"></button>
					<div class="menu-options">
						<a href="/formulario/api/close_session.php">cerrar sesion</a>
					</div>
				</div>
				
			</nav>

		</div>
		
	</header>

		<!-- Portada -->
	<div id='caja'></div>
    <div id='caja__2'>
        <section class="movies">

            <div class="contenedor">
        
                <h2>Animaciones</h2>
                <HR>
        
            </div>
        
            <div class="box-conteiner-1">
        
                    <div class="box-1">
        
                        <div class="content">
        
                            <a href="../Peliculas/movies/thunderbolts/thunderbolts.html"><img src="img/carteles/shrek2.png" alt="shrek2"></a>
        
                        </div>
                    
                    </div>
        
                    <div class="box-1">
        
                        <div class="content">
        
                            <a href="../Peliculas/28años/28años.html"><img src="img/carteles/toystory.png" alt="toystory"></a>
                            
                        </div>
                    
                    </div>
        
                    <div class="box-1">
        
                        <div class="content">
                            
                            <a href="../Peliculas/thunderbolts/thunderbolts.html"><img src="img/carteles/losincreibles.png" alt="losincreibles"></a>
                            
                        </div>
                    
                    </div>
        
                    <div class="box-1">
        
                        <div class="content">
        
                            <a href="../Peliculas/superman/superman.html"><img src="img/carteles/lacenicienta.png" alt="lacenicienta"></a>
                            
                        </div>
                    
                    </div>
        
                    <div class="box-1">
        
                        <div class="content">
        
                            <a href="../Peliculas/lilo/lilo.html"><img src="img/carteles/legobatman.png" alt="legobatman"></a>
                            
                        </div>
                    
                    </div>

                    <!-- <div class="box-1">
        
                        <div class="content">
        
                            <a href="../Peliculas/lilo/lilo.html"><img src="img/carteles/spiderman.png" alt="spiderman"></a>
                            
                        </div>
                    
                    </div> -->
        
            </div>
            
        
        </section>	
        
        
        
        
        
        <section class="movies">
        
            <div class="contenedor">
        
                <h2>Dramas nominados</h2>
                <HR>
        
            </div>
        
            <div class="box-conteiner-2">
        
                    <div class="box-2">
        
                        <div class="content">
        
                            <a href="../peliculas/elpadrino/elpadrino.html"><img src="img/carteles/titanic.png" alt="titanic"></a>
        
                        </div>
                    
                    </div>
        
                    <div class="box-2">
        
                        <div class="content">
        
                            <a href="../peliculas/goodfellas/goodfellas.html"><img src="img/carteles/elpianista.png" alt="elpianista"></a>
                            
                        </div>
                    
                    </div>
        
                    <div class="box-2">
        
                        <div class="content">
        
                            <a href="../peliculas/scareface/scareface.html"><img src="img/carteles/americanhistoryx.png" alt="americanhistoryx"></a>
                            
                        </div>
                    
                    </div>
        
                    <div class="box-2">
        
                        <div class="content">
            
                            <a href="../peliculas/seven/seven.html"><img src="img/carteles/salvar.png" alt="salvar"></a>
                            
                        </div>
                    
                    </div>
        
                    <div class="box-2">
        
                        <div class="content">
            
                            <a href="../peliculas/matrix/matrix.html"><img src="img/carteles/enbusquedadelafelicidad.png" alt="enbusquedadelafelicidad"></a>
                            
                        </div>
                    
                    </div>

                    <!-- <div class="box-2">
        
                        <div class="content">
            
                            <a href="../peliculas/matrix/matrix.html"><img src="img/carteles/elpadrino2.png" alt="elpadrino"></a>
                            
                        </div>
                    
                    </div> -->
                    
            </div>
        
        </section>	
        
        <section class="movies">
        
            <div class="contenedor">
        
                <h2> Terror</h2>
                <HR>
        
            </div>
        
            <div class="box-conteiner-3">
        
                    <div class="box-3">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/freddyvjason.png" alt="freddyvjason"></a>
        
                        </div>
                
                    </div>
        
                    <div class="box-3">
        
                        <div class="content">
        
                            <a href="../peliculas/tropicthunder/tropicthunder.html"><img src="img/carteles/saw.png" alt="tropicthunder"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-3">
        
                        <div class="content">
        
                            <a href="../peliculas/americanpie/americanpie.html"><img src="img/carteles/halloween.png" alt="americanpie"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-3">
        
                        <div class="content">
        
                            <a href="../peliculas/superbad/superbad.html"><img src="img/carteles/terrifier.png" alt="superbad"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-3">
        
                        <div class="content">
        
                            <a href="../peliculas/scarymovie2/scarymovie2.html"><img src="img/carteles/scream.png" alt="scarymovie"></a>
        
                        </div>
                
                    </div>

                    <!-- <div class="box-3">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/28diasdespues.png" alt="proyectox"></a>
        
                        </div>
                
                    </div>
        -->
            </div>
        
        </section>

        <section class="movies">
        
            <div class="contenedor">
        
                <h2> Accion </h2>
                <HR>
        
            </div>
        
            <div class="box-conteiner-4">
        
                    <div class="box-4">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/gladiador.png" alt="gladiador"></a>
        
                        </div>
                
                    </div>
        
                    <div class="box-4">
        
                        <div class="content">
        
                            <a href="../peliculas/tropicthunder/tropicthunder.html"><img src="img/carteles/falloums.png" alt="fallout"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-4">
        
                        <div class="content">
        
                            <a href="../peliculas/americanpie/americanpie.html"><img src="img/carteles/johnwick.png" alt="johnwick"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-4">
        
                        <div class="content">
        
                            <a href="../peliculas/superbad/superbad.html"><img src="img/carteles/madmax.png" alt="madmax"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-4">
        
                        <div class="content">
        
                            <a href="../peliculas/scarymovie2/scarymovie2.html"><img src="img/carteles/diehard.png" alt="diehard"></a>
        
                        </div>
                
                    </div>

                    <!-- <div class="box-4">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/scareface.png" alt="scareface"></a>
        
                        </div>
                
                    </div> -->
        
            </div>
        
        </section>
        
        <section class="movies">
        
            <div class="contenedor">
        
                <h2> Heroes </h2>
                <HR>
        
            </div>
        
            <div class="box-conteiner-5">
        
                    <div class="box-5">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/tdkbatman.png" alt="tdkbatman"></a>
        
                        </div>
                
                    </div>
        
                    <div class="box-5">
        
                        <div class="content">
        
                            <a href="../peliculas/tropicthunder/tropicthunder.html"><img src="img/carteles/logan.png" alt="logan"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-5">
        
                        <div class="content">
        
                            <a href="../peliculas/americanpie/americanpie.html"><img src="img/carteles/thunderboltsh.png" alt="thunderbolts"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-5">
        
                        <div class="content">
        
                            <a href="../peliculas/superbad/superbad.html"><img src="img/carteles/spiderman1.png" alt="spiderman"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-5">
        
                        <div class="content">
        
                            <a href="../peliculas/scarymovie2/scarymovie2.html"><img src="img/carteles/civilwar.png" alt="civilwar"></a>
        
                        </div>
                
                    </div>

                    <!-- <div class="box-5">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/endgame.png" alt="endgame"></a>
        
                        </div>
                
                    </div> -->
        
            </div>
        
        </section>

        <section class="movies">
        
            <div class="contenedor">
        
                <h2> Comedias </h2>
                <HR>
        
            </div>
        
            <div class="box-conteiner-6">
        
                    <div class="box-6">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/friday.png" alt="freddyvjason"></a>
        
                        </div>
                
                    </div>
        
                    <div class="box-6">
        
                        <div class="content">
        
                            <a href="../peliculas/tropicthunder/tropicthunder.html"><img src="img/carteles/tropicthunder.png" alt="tropicthunder"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-6">
        
                        <div class="content">
        
                            <a href="../peliculas/americanpie/americanpie.html"><img src="img/carteles/proyectox.png" alt="americanpie"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-6">
        
                        <div class="content">
        
                            <a href="../peliculas/superbad/superbad.html"><img src="img/carteles/ted.png" alt="superbad"></a>
                        
                        </div>
                
                    </div>
        
                    <div class="box-6">
        
                        <div class="content">
        
                            <a href="../peliculas/scarymovie2/scarymovie2.html"><img src="img/carteles/americanpie.png" alt="scarymovie"></a>
        
                        </div>
                
                    </div>

                    <!-- <div class="box-6">
        
                        <div class="content">
        
                            <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/scaremovie.png" alt="proyectox"></a>
        
                        </div>
                
                    </div> -->
        
            </div>
        
        </section>
    </div>

    <!-- <section class="movies">
    
        <div class="contenedor">
    
            <h2> Terror</h2>
            <HR>
    
        </div>
    
        <div class="box-conteiner-7">
    
                <div class="box-7">
    
                    <div class="content">
    
                        <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/freddyvjason.png" alt="freddyvjason"></a>
    
                    </div>
            
                </div>
    
                <div class="box-7">
    
                    <div class="content">
    
                        <a href="../peliculas/tropicthunder/tropicthunder.html"><img src="img/carteles/saw.png" alt="tropicthunder"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-7">
    
                    <div class="content">
    
                        <a href="../peliculas/americanpie/americanpie.html"><img src="img/carteles/halloween.png" alt="americanpie"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-7">
    
                    <div class="content">
    
                        <a href="../peliculas/superbad/superbad.html"><img src="img/carteles/terrifier.png" alt="superbad"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-7">
    
                    <div class="content">
    
                        <a href="../peliculas/scarymovie2/scarymovie2.html"><img src="img/carteles/scream.png" alt="scarymovie"></a>
    
                    </div>
            
                </div>

                <div class="box-7">
    
                    <div class="content">
    
                        <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/28diasdespues.png" alt="proyectox"></a>
    
                    </div>
            
                </div>
    
        </div>
    
    </section>

    <section class="movies">
    
        <div class="contenedor">
    
            <h2> Terror</h2>
            <HR>
    
        </div>
    
        <div class="box-conteiner-8">
    
                <div class="box-8">
    
                    <div class="content">
    
                        <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/freddyvjason.png" alt="freddyvjason"></a>
    
                    </div>
            
                </div>
    
                <div class="box-8">
    
                    <div class="content">
    
                        <a href="../peliculas/tropicthunder/tropicthunder.html"><img src="img/carteles/saw.png" alt="tropicthunder"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-8">
    
                    <div class="content">
    
                        <a href="../peliculas/americanpie/americanpie.html"><img src="img/carteles/halloween.png" alt="americanpie"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-8">
    
                    <div class="content">
    
                        <a href="../peliculas/superbad/superbad.html"><img src="img/carteles/terrifier.png" alt="superbad"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-8">
    
                    <div class="content">
    
                        <a href="../peliculas/scarymovie2/scarymovie2.html"><img src="img/carteles/scream.png" alt="scarymovie"></a>
    
                    </div>
            
                </div>

                <div class="box-8">
    
                    <div class="content">
    
                        <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/28diasdespues.png" alt="proyectox"></a>
    
                    </div>
            
                </div>
    
        </div>
    
    </section>

    <section class="movies">
    
        <div class="contenedor">
    
            <h2> Terror</h2>
            <HR>
    
        </div>
    
        <div class="box-conteiner-9">
    
                <div class="box-9">
    
                    <div class="content">
    
                        <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/freddyvjason.png" alt="freddyvjason"></a>
    
                    </div>
            
                </div>
    
                <div class="box-9">
    
                    <div class="content">
    
                        <a href="../peliculas/tropicthunder/tropicthunder.html"><img src="img/carteles/saw.png" alt="tropicthunder"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-9">
    
                    <div class="content">
    
                        <a href="../peliculas/americanpie/americanpie.html"><img src="img/carteles/halloween.png" alt="americanpie"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-9">
    
                    <div class="content">
    
                        <a href="../peliculas/superbad/superbad.html"><img src="img/carteles/terrifier.png" alt="superbad"></a>
                    
                    </div>
            
                </div>
    
                <div class="box-9">
    
                    <div class="content">
    
                        <a href="../peliculas/scarymovie2/scarymovie2.html"><img src="img/carteles/scream.png" alt="scarymovie"></a>
    
                    </div>
            
                </div>

                <div class="box-9">
    
                    <div class="content">
    
                        <a href="../peliculas/proyectox/proyectox.html"><img src="img/carteles/28diasdespues.png" alt="proyectox"></a>
    
                    </div>
            
                </div>
    
        </div>
    
    </section> -->


<script>

function abreBuscador(){
	$("#caja").html("");
	var valorBusqueda = $("#buscador").val();
	$.post("api/busca.php", {valorBusqueda}, function(data){
		$("#caja").html(data);
	});
}

</script>
    </body>
    </html>