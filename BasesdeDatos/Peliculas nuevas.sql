-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.10.0.7000
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla peliculas.peliculas
CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `año` int(11) NOT NULL,
  `director` varchar(100) NOT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `pais_de_origen` varchar(50) DEFAULT NULL,
  `idioma_original` varchar(20) DEFAULT NULL,
  `presupuesto` decimal(10,2) DEFAULT NULL,
  `recaudacion` decimal(10,2) DEFAULT NULL,
  `calificacion` decimal(3,2) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla peliculas.peliculas: ~20 rows (aproximadamente)
INSERT INTO `peliculas` (`id`, `nombre`, `año`, `director`, `genero`, `duracion`, `pais_de_origen`, `idioma_original`, `presupuesto`, `recaudacion`, `calificacion`, `sinopsis`) VALUES
	(1, 'Thunderbolts', 2025, 'Jake Schreier', 'Acción , superheroes', 120, 'Estados Unidos', 'Inglés', 150.00, 0.00, 0.00, 'Un equipo de supervillanos reclutados por el gobierno para realizar misiones de alto riesgo.'),
	(2, 'Superman', 2024, 'James Gunn', 'Acción', 120, 'Estados Unidos', 'Inglés', 200.00, 0.00, 0.00, 'La nueva película de Superman sigue al icónico superhéroe mientras enfrenta un nuevo desafío que pone en peligro la Tierra y su legado.'),
	(3, 'Superbad', 2007, 'Greg Mottola', 'Comedia', 119, 'Estados Unidos', 'Inglés', 20000000.00, 99999999.99, 7.90, 'Dos amigos de secundaria, Seth y Evan, intentan comprar alcohol para una fiesta antes de graduarse, pero su noche se convierte en una serie de desventuras y situaciones absurdas.'),
	(13, 'Seven', 1995, 'David Fincher', 'Thriller', 127, 'Estados Unidos', 'Inglés', 30000000.00, 99999999.99, 8.60, 'Dos detectives, William Somerset y David Mills, deben resolver una serie de asesinatos brutales y macabros que están relacionados con los siete pecados capitales.'),
	(14, 'Tropic Thunder', 2008, 'Ben Stiller', 'Comedia', 107, 'Estados Unidos', 'Inglés', 92000000.00, 99999999.99, 7.00, 'Un grupo de actores egoístas y desequilibrados se encuentran en la jungla para rodar una película de guerra, pero pronto se ven envueltos en una situación real de guerra y deben luchar por sobrevivir.'),
	(15, 'El Padrino 2', 1974, 'Francis Ford Coppola', 'Drama', 202, 'Estados Unidos', 'Inglés', 13.00, 193.00, 8.60, 'La segunda parte de la saga de los Corleone, que sigue la historia de la familia y su imperio del crimen organizado.'),
	(16, 'Goodfellas', 1990, 'Martin Scorsese', 'Drama', 146, 'Estados Unidos', 'Inglés', 25.00, 46.84, 8.40, 'Henry Hill es un joven que crece en un barrio pobre de Nueva York y se siente atraído por la vida del crimen organizado. Pronto se convierte en un miembro de la mafia y se ve envuelto en una serie de actividades delictivas, pero su estilo de vida peligroso y su adicción a las drogas lo llevan a una caída estrepitosa.'),
	(17, 'Matrix', 1999, 'Hermanos Wachowski', 'Ciencia Ficción', 136, 'Estados Unidos', 'Inglés', 63.00, 463.50, 8.70, 'En un futuro distópico, la humanidad es esclavizada por máquinas inteligentes que utilizan a los humanos como fuente de energía. Neo, un joven hacker, descubre la verdad sobre el mundo y se une a un grupo de rebeldes para luchar contra las máquinas y liberar a la humanidad.'),
	(19, 'American Pie', 1999, 'Paul Weiland', 'Comedia', 95, 'Estados Unidos', 'Inglés', 11.00, 235.48, 7.00, 'Un grupo de amigos del instituto hacen un pacto para perder su virginidad antes de la graduación. A medida que intentan cumplir su objetivo, se enfrentan a una serie de situaciones divertidas y embarazosas.'),
	(20, 'Scarface', 1983, 'Brian De Palma', 'Drama', 170, 'Estados Unidos', 'Inglés', 25000000.00, 66000000.00, 0.00, 'Un refugiado cubano llega a Miami con nada y asciende hasta convertirse en un poderoso narcotraficante, pero su ambición y paranoia acaban llevándolo a la destrucción.'),
	(21, 'Proyecto X', 2012, 'Nima Nourizadeh', 'Comedia', 88, 'Estados Unidos', 'Inglés', 12000000.00, 99999999.99, 0.00, 'Tres adolescentes organizan una fiesta para ganar popularidad, pero la situación se descontrola rápidamente, provocando el caos en el vecindario y cambiando sus vidas para siempre.'),
	(22, 'SpiderMan', 2002, 'Sam Raimi', 'Acción', 121, 'Estados Unidos', 'Inglés', 99999999.99, 99999999.99, 0.00, 'Tras ser mordido por una araña genéticamente modificada, un estudiante adquiere habilidades sobrehumanas y adopta la identidad de Spider-Man para luchar contra el crimen, enfrentándose al temible Duende Verde.'),
	(23, 'SpiderMan2', 2004, 'Sam Raimi', 'Acción', 127, 'Estados Unidos', 'Inglés', 99999999.99, 99999999.99, 0.00, 'Peter Parker lucha por equilibrar su vida como estudiante y superhéroe mientras se enfrenta al brillante pero peligroso Doctor Octopus, quien amenaza con destruir la ciudad.'),
	(24, 'SpiderMan3', 2007, 'Sam Raimi', 'Acción', 139, 'Estados Unidos', 'Inglés', 99999999.99, 99999999.99, 0.00, 'Peter Parker enfrenta nuevos desafíos cuando un simbionte alienígena potencia su lado oscuro, mientras tres enemigos —el Hombre de Arena, Venom y Harry Osborn— amenazan su ciudad y sus relaciones personales.'),
	(25, 'TheFastandtheFuriousTokyoDrift', 2006, 'Justin Lin', 'Acción', 104, 'Estados Unidos', 'Inglés', 85000000.00, 99999999.99, 3.80, 'Sean Boswell, un adolescente aficionado a las carreras callejeras, es enviado a vivir con su padre en Tokio para evitar la cárcel en Estados Unidos. Allí descubre el mundo del drift racing y se enfrenta al campeón local, Takashi, mientras se involucra en una peligrosa red de carreras clandestinas y relaciones personales.'),
	(26, 'The Batman', 2022, 'Matt Reeves', 'Acción / Crimen / Thriller', 176, 'Estados Unidos', 'Inglés', 99999999.99, 99999999.99, 7.80, 'En su segundo año luchando contra el crimen, Batman descubre la corrupción en Gotham City mientras investiga los asesinatos del Acertijo, un asesino en serie que deja pistas enigmáticas para el Caballero Oscuro.'),
	(27, 'Hulk vs Wolverine', 2009, 'Frank Paur', 'Animación / Acción / Ciencia ficción', 37, 'Estados Unidos', 'Inglés', NULL, NULL, 6.00, 'El increíble Hulk ha estado causando estragos en el campo canadiense. Para detenerlo, el gobierno envía a Wolverine, el mutante con garras de adamantium. Sin embargo, ambos son capturados por el programa Arma X, donde se enfrentan a enemigos comunes como Deadpool, Dientes de Sable, Lady Deathstrike y Omega Red. Juntos deberán luchar por su libertad.'),
	(28, 'Deadpool y Wolverine', 2024, 'Shawn Levy', 'Acción / Aventura / Comedia / Ciencia ficción', 128, 'Estados Unidos', 'Inglés', 99999999.99, 99999999.99, 7.80, 'Wade Wilson intenta llevar una vida normal tras abandonar su identidad como Deadpool. Sin embargo, cuando su universo enfrenta una amenaza existencial por parte de la Autoridad de Variación Temporal (TVA), se ve obligado a reclutar a un reticente Wolverine de otro universo para evitar la destrucción de su mundo.'),
	(29, 'Los 4 Fantasticos Primeros pasos', 2025, 'Matt Shakman', 'Acción / Ciencia ficción / Aventura / Superhéroes', 130, 'Estados Unidos', 'Inglés', 99999999.99, NULL, NULL, 'En una Tierra paralela con estética retrofuturista de los años 60, los Cuatro Fantásticos —Reed Richards, Sue Storm, Johnny Storm y Ben Grimm— deben proteger su mundo del ser cósmico devorador de planetas Galactus y su heraldo, Silver Surfer.'),
	(30, '28 Year Later', 2025, 'Danny Boyle', 'Terror / Ciencia ficción / Thriller / Zombis', 126, 'Reino Unido', 'Inglés', 75000000.00, NULL, NULL, 'Han pasado 28 años desde que el virus de la rabia escapó de un laboratorio de armas biológicas. Un grupo de supervivientes vive en una pequeña isla conectada al continente por una única calzada fuertemente defendida. Cuando un padre y su hijo abandonan la isla en una misión hacia el oscuro corazón del continente, descubren secretos, maravillas y horrores del mundo exterior.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
