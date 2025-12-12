<?php

extract($_POST);

if (isset($valorBusqueda)) {
    $ret = "";
    $conexion = new mysqli("localhost", "root", "gtasa2025g", "peliculas");
    $conexion->set_charset("utf8");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $query = $conexion->real_escape_string($valorBusqueda);
    $sql = "SELECT nombre FROM peliculas WHERE nombre LIKE '%$query%' limit 10";
    $resultado = $conexion->query($sql);

    $ret .= '<div class="contenedor-resultados"><h3>Resultados para: ' . htmlspecialchars(strtoupper($query)) . '</h3><div class="resultado-contenedor">';
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $nombre = $row['nombre'];
            $slug = strtolower(str_replace(' ', '', iconv('UTF-8', 'ASCII//TRANSLIT', $nombre)));
            $url = "../peliculas/movies/$slug/$slug.php";
            $cartel = "../home/img/carteles/$slug.jpg";
            $ret .= '
                <div class="resultado-box">
                    <a href="' . $url . '" target="_blank">
                        <img src="' . $cartel . '" alt="' . htmlspecialchars($nombre) . '">
                    </a>
                </div>';
        }
    } else {
        $ret .= "<p>No se encontraron resultados.</p>";
    }
    $ret .= '</div></div>';
    $conexion->close();
}

echo $ret;

?>