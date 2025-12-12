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

	<title>HOMECINEMA</title>

	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="shortcut icon" href="../netflix.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/580f6ca6e9.js" crossorigin="anonymous"></script>
	<script src=""></script>
	<script src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
	
		<!-- Cabezera -->
<!-- CREAR EVENTLISTENER CUANDO LE DES AL ENTER Y EL INPUT SE ESTE MOSTRANDO SE HAGA LA BUSQUEDDA -->
	<header>

		<div class="contenedor">
			<a href="home.php"><h2 class="logo">HOMECINEMA</h2></a>

			<nav>
				<div class="menu-container">
					<button class="lupa" onclick="alternaBuscador('mostrar');"></button>
					<div class="menu-search">
      					  <input type="search" id='buscador' name="query" class="buscador" autocomplete="off" onchange="abreBuscador();" placeholder="Buscador" value="<?php isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '' ?>">
					</div>

				</div>
				<a href="#" class="activo">Inicio</a>
				<a href="../Peliculas/index.php">Peliculas</a>
				<a href="#">Series</a>
				<a href="#">Mi lista</a>

				<div class="menu-container">
					<button class="icono"></button>
					<div class="menu-options">
						<a href="/formulario/api/close_session.php">cerrar sesion</a>
						<a onclick="cambiarFondo();"> color</a>
					</div>
				</div>
				
			</nav>

		</div>
		
	</header>

		<!-- Portada -->

	<div id='caja'></div>
	<main>
		<div class="portada"  onclick="$('#caja').html('');">

			<div class="contenedor">

				<img src=""alt="" class="batman" srcset="" id="imagenCambiante">

				<p class="descripcion" id="textoCambiante"> </p>
				
				<a href="" id="botonReproducir"><button role="button" class="boton"><i class="fa-solid fa-play"></i>Reproducir</button></a>

				<button role="button" class="boton"><i class="fa-solid fa-circle-info"></i>Informacion</button>

			</div>
		</div>
	</main>

	<!-- Contenido  -->

<section class="movies">

	<div class="contenedor">

		<h2>Proximos estrenos</h2>
		<HR>

	</div>

	<div class="box-conteiner-1">

			<div class="box-1">

				<div class="content">

					<a href="../Peliculas/movies/los4fantasticosprimerospasos/los4fantasticosprimerospasos.php"><img src="img/carteles/Los4FantasticosPrimerospasos.jpg" alt="4fantasticos"></a>

				</div>
			
			</div>

			<div class="box-1">

				<div class="content">

					<a href="../Peliculas/movies/28años/28años.php"><img src="img/carteles/28YearLater.jpg " alt="28años"></a>
					
				</div>
			
			</div>

			<div class="box-1">

				<div class="content">
					
					<a href="../Peliculas/movies/thunderbolts/thunderbolts.php"><img src="img/carteles/thunderbolts.jpg" alt="thunderbolts"></a>
					
				</div>
			
			</div>

			<div class="box-1">

				<div class="content">

					<a href="../Peliculas/movies/superman/superman.php"><img src="img/carteles/superman.jpg" alt="superman"></a>
					
				</div>
			
			</div>

			<div class="box-1">

				<div class="content">

					<a href="../Peliculas/movies/lilo/lilo.php"><img src="img/carteles/lilo.jpg" alt="lilo"></a>
					
				</div>
			
			</div>

	</div>
	

</section>	

<section class="movies">

	<div class="contenedor">

		<h2>Recomendaciones</h2>
		<HR>

	</div>

	<div class="box-conteiner-2">

			<div class="box-2">

				<div class="content">

					<a href="../Peliculas/movies/elpadrino/elpadrino.html"><img src="img/carteles/elpadrino2.jpg" alt="padrino"></a>

				</div>
			
			</div>

			<div class="box-2">

				<div class="content">

					<a href="../Peliculas/movies/goodfellas/goodfellas.php"><img src="img/carteles/goodfellas.jpg" alt="goodfella"></a>
					
				</div>
			
			</div>

			<div class="box-2">

				<div class="content">

					<a href="../Peliculas/movies/scareface/scareface.php"><img src="img/carteles/scarface.jpg" alt="scarface"></a>
					
				</div>
			
			</div>

			<div class="box-2">

				<div class="content">
	
					<a href="../Peliculas/movies/seven/seven.php"><img src="img/carteles/seven.jpg" alt="seven"></a>
					
				</div>
			
			</div>

			<div class="box-2">

				<div class="content">
	
					<a href="../Peliculas/movies/matrix/matrix.php"><img src="img/carteles/matrix.jpg" alt="matrix"></a>
					
				</div>
			
			</div>
			
	</div>

</section>	

<section class="movies">

	<div class="contenedor">

		<h2>Comedias</h2>
		<HR>

	</div>

	<div class="box-conteiner-3">

			<div class="box-3">

				<div class="content">

					<a href="../Peliculas/movies/proyectox/proyectox.php"><img src="img/carteles/proyectox.jpg" alt="proyectox"></a>

				</div>
		
			</div>

			<div class="box-3">

				<div class="content">

					<a href="../Peliculas/movies/tropicthunder/tropicthunder.php"><img src="img/carteles/tropicthunder.jpg" alt="tropicthunder"></a>
				
				</div>
		
			</div>

			<div class="box-3">

				<div class="content">

					<a href="../Peliculas/movies/americanpie/americanpie.php"><img src="img/carteles/americanpie.jpg" alt="americanpie"></a>
				
				</div>
		
			</div>

			<div class="box-3">

				<div class="content">

					<a href="../Peliculas/movies/superbad/superbad.php"><img src="img/carteles/superbad.jpg" alt="superbad"></a>
				
				</div>
		
			</div>

			<div class="box-3">

				<div class="content">

					<a href="../Peliculas/movies/scarymovie2/scarymovie2.php"><img src="img/carteles/scarymovie.jpg" alt="scarymovie"></a>

				</div>
		
			</div>

	</div>

</section>

<script>
function abreBuscador(){
	$("#caja").html("");
	var valorBusqueda = $("#buscador").val();
	$.post("api/busca.php", {valorBusqueda}, function(data){
		$("#caja").html(data);
	});
}

function alternaBuscador(tipo){
	if(tipo=="mostrar"){
		$(".menu-search").css("visibility","visible");
		$(".menu-search").css("opacity","1");
		$(".menu-search").css("pointer-events","auto");
		// $(".menu-search").css("animation","nombre 1s lineal");
		$(".lupa").attr("onclick","alternaBuscador('ocultar')");
	}else{
		$(".menu-search").css("visibility","hidden");
		$(".menu-search").css("opacity","0");
		$(".menu-search").css("pointer-events","none");
		// $(".menu-search").css("animation","nombre 1s lineal");
		$(".lupa").attr("onclick","alternaBuscador('mostrar')");
	}
}

  const textos = [
	"Cuando un asesino se dirige a la élite de Gotham con una serie de maquinaciones sádicas, un rastro de pistas crípticas envía Batman a una investigación en los bajos fondos. A medida que las pruebas comienzan a acercarse a su casa y se hace evidente la magnitud de los planes del autor, Batman debe forjar nuevas relaciones, desenmascarar al culpable y hacer justicia al abuso de poder y la corrupción que durante mucho tiempo han asolado Gotham City.",
	"Un grupo de supervillanos y antihéroes van en misiones para el gobierno. Basado en la serie de cómics del mismo nombre.",
	"Tres estudiantes de último curso de instituto, aparentemente anónimos, deciden montar una fiesta salvaje en casa de uno de ellos, promocionándola en las redes sociales como la fiesta más loca de la temporada. Además, los chicos deciden grabarla para luego colgarla en la red. Enseguida se corre la voz y todo se hace un desmadre..."
  ];


  const imagenes = [
    "img/Logos/batman.png",
    "img/Logos/thunderbolts.png",
    "img/Logos/proyectox.png"
  ];

  const links = [
    "../Peliculas/movies/thebatman/thebatman.php",
    "../Peliculas/movies/thunderbolts/thunderbolts.php",
    "../Peliculas/movies/proyectox/proyectox.php"
  ];

  const duraciones = [10000, 10000, 10000]; // en milisegundos
  const textoElemento = document.getElementById("textoCambiante");
  const imagenElemento = document.getElementById("imagenCambiante");
  const botonReproducir = document.getElementById("botonReproducir");

  let index = 0;

  textoElemento.textContent = textos[index];
  imagenElemento.src = imagenes[index];
  botonReproducir.href = links[index];

  function cambiarContenido() {
    index = (index + 1) % textos.length;
    textoElemento.textContent = textos[index];
    imagenElemento.src = imagenes[index];
    botonReproducir.href = links[index];

    setTimeout(cambiarContenido, duraciones[index]);
  }

  setTimeout(cambiarContenido, duraciones[index]); // Inicia el ciclo tras mostrar el primer contenido
</script>


</body>

</html>