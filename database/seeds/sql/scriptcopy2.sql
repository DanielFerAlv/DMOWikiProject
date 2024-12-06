-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-03-2022 a las 15:41:11
-- Versión del servidor: 10.5.12-MariaDB-0+deb11u1
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydmoproject`
--

--
-- Volcado de datos para la tabla `digimon`
--

INSERT INTO `digimon` (`id`, `nombre`, `descripcion`, `rango`, `nivel`, `utilidad`, `atributo`, `tipo`, `health_points`, `digisoul_points`, `attack`, `attack_speed`, `critical_chance`, `hitrate`, `defense`, `evasion`, `skill1`, `skill1_base`, `skill1_increment`, `skill1_special`, `skill2`, `skill2_base`, `skill2_increment`, `skill2_special`, `skill3`, `skill3_base`, `skill3_increment`, `skill3_special`, `skill4`, `skill4_base`, `skill4_increment`, `skill4_special`, `foto`, `icono`, `created_at`, `updated_at`) VALUES
(1, 'Susanoomon (Shin)', 'Como se cuenta en las leyendas orientales, es el dios que gobierna sobre la destrucción y la regeneración. Se cuenta que, cuando el sistema de red cae en el caos, borrará el mismo y creará uno nuevo.', 'SSS+', 'Jogress', 'DPS', 'Vacuna', 'Luz', 16687, 5327, 5876, 2.2, 24.87, 510, 537, 29.70, 'Juicio Divino', 11817, 294, NULL, 'Trueno del Cielo', 27792, 609, NULL, 'Espada de los Cielos', 126572, 4598, NULL, 'Zero-Arms-Orochi', 27122, 985, NULL, NULL, NULL, NULL, NULL),
(2, 'Omegamon X', 'Omegamon X (Omnimon X en España) es la versión mejorada de Omegamon, tras obtener el anticuerpo X de manos de un moribundo Alphamon Ouryuken tras su sacrificio para derrotar a Dexmon durante el asalto a la base de Yggdrasil. Al ser consciente de las malas decisiones de su dios, Omegamon X fuerza el reinicio del mundo digital destruyendo el avatar de Yggdrasil con su All Delete.', 'SSS+', 'Jogress X', 'Tank/DPS', 'Vacuna', 'Luz', 19578, 5583, 7865, 2.4, 27.25, 419, 595, 45.10, 'Cañón Supremo', 23080, 506, NULL, 'Espada Trascendente', 34620, 759, NULL, 'All Delete', 131362, 1683, NULL, NULL, NULL, NULL, NULL, 'digimon/JWyIYEP1fM52gpRK8qtbrb8QrikcrETivAOpteQP.png', 'iconos/digimon/92LTOQeTkKtqJizqWJSH3lGu55n5jSZ3cgcspDdr.png', NULL, '2022-02-22 09:53:14'),
(3, 'Examon X', 'is a Holy Knight Digimon and carrier of the X-Antibody. Its Holy Knight-type data has been drawn out, so it appears like a knight wearing a helmet and armor. It overflows with Dragon-type and Holy Knight-type power which swirls, creating Dragonic Plasma.', 'SSS+', 'Jogress X', 'DPS', 'Datos', 'Luz', 23554, 6603, 9150, 2.5, 26.27, 482, 641, 41.10, 'Puerta de Avalon', 22481, 493, NULL, 'Gloria de Pendragón', 41217, 904, NULL, 'Destello de Pendragón', 147436, 5356, NULL, 'Raiken Bureiragaha', 69110, 2510, NULL, 'digimon/v5rI3axkskkhz8tjExPktR90Xa9fVpLP1XgyBpVO.png', 'iconos/digimon/8WUgfIG52g6uS2N7jSilBXXNDL5HAGocBSwgJnCs.png', '2022-02-16 08:43:35', '2022-02-16 08:43:35'),
(4, 'Alphamon Ouryuken (X-Antibody)', 'A form in which Ouryumon achieved a miraculous evolution and became a sword through the operation of the magic circle of Digimoji that Alphamon unleashed. Ouryumon is the Ultimate of the experimental \"Prototype Digimon\" that pursued further fighting strength, and by becoming a sword, all of that fighting strength was devoted exclusively to its attacks. To swing the Ouryuken is to wield all of the power contained within an Ultimate Digimon, so to speak, so it isn\'t a sword that can be swung by an average Digimon, and there aren\'t any average Digimon that can take the blow.', 'SSS', 'Jogress X', 'DPS', 'Vacuna', 'Luz', 15798, 4893, 5734, 2.4, 23.61, 452, 449, 35.80, 'Digitalización del Alma', 7067, 244, NULL, 'Espada de Batalla Definitiva - Ouryuken', 20593, 442, NULL, 'Espada Sagrada - Gradalpha', 46101, 1674, NULL, NULL, NULL, NULL, NULL, 'digimon/wGX7B20tRc6A0OhiE9YPY6X3l8F7UjbdYhjKtImU.png', 'iconos/digimon/WVhnPZkS3cE95XUdXVyjr2RhYQCSC6WVbFQBq0ym.png', '2022-02-16 09:34:41', '2022-02-16 09:34:41'),
(5, 'Magnamon X', 'Magnamon X is a Holy Knight Digimon and a carrier of the X Antibody. One of the \"Royal Knights\", it digivolved through the power of the Digi-Egg of Miracles. Its armor is made of the super-metal Chrome Digizoid, but it has been completely integrated with Magnamon\'s body through X-Digivolution, to the point that it possesses a nature similar to muscles. During battle it will increase in hardness, and if it enters the \"Gold Digizoid\" state in which its entire body shines gold, it is completely invulnerable.', 'SS', 'Mega X', 'Ninguna', 'Vacuna', 'Luz', 8658, 2588, 2208, 1.8, 24.57, 392, 1602, 23.30, 'Disparo de plasma', 9561, 209, NULL, 'Jihad Extrema', 16137, 354, NULL, 'Tormenta brillante del Sol Dorado', 5336, 89, NULL, NULL, NULL, NULL, NULL, 'digimon/iNlo6uwqWkwTpEqtQTsNiPXcI5jYJe0NOh5ybzS3.png', 'iconos/digimon/5k0VfhdPiSbUzOJOTbPODS9LSUd3aZyUTZ4sA4Qz.png', '2022-02-21 08:21:43', '2022-02-21 08:21:43');


--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id`, `nombre`, `descripcion`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Virus Busters', 'Familia a la que pertenecen generalmente Digimon sagrados o angelicales, o aquellos que residan en áreas sagradas', 'storage/iconos/familias/vb.png', NULL, NULL),
(2, 'Dark Area', 'Familia a la que pertenecen generalmente Digimon malvados o apocalipticos, o aquellos que residan en la Dark Area', 'storage/iconos/familias/da.png', NULL, NULL),
(3, 'Deep Savers', 'Familia a la que pertenecen generalmente Digimon aquáticos o polares, o aquellos que residan en zonas marinas', 'storage/iconos/familias/ds.png', NULL, NULL),
(4, 'Dragon\'s Roar', 'Familia a la que pertenecen generalmente Digimon dragones o con rasgos dragontinos, o aquellos que residan en áreas volcánicas', 'storage/iconos/familias/dr.png', NULL, NULL),
(5, 'Jungle Troopers', 'Familia a la que pertenecen generalmente Digimon insectos o vegetales, o aquellos que residan en áreas tropicales', 'storage/iconos/familias/jt.png', NULL, NULL),
(6, 'Metal Empire', 'Familia a la que pertenecen generalmente Digimon mecánicos o mutantes, o aquellos que residan en áreas urbanas o industriales', 'storage/iconos/familias/me.png', NULL, NULL),
(7, 'Nature Spirits', 'Familia a la que pertenecen generalmente Digimon asociables a animales o similares a monstruos, o aquellos que residan en áreas similares a un desierto', 'storage/iconos/familias/nsp.png', NULL, NULL),
(8, 'Nightmare Soldiers', 'Familia a la que pertenecen generalmente Digimon asociables a demonios o no-muertos, o aquellos que residan en zonas encantadas o malditas', 'storage/iconos/familias/nsos.png', NULL, NULL),
(9, 'Wind Guardians', 'Familia a la que pertenecen generalmente Digimon alados o voladores, o aquellos que residan en áreas similares a praderas o elevadas', 'storage/iconos/familias/wg.png', NULL, NULL),
(10, 'Unknown', 'Familia a la que pertenecen generalmente Digimon mutantes incategorizables.', 'storage/iconos/familias/uk.png', NULL, NULL),
(11, 'TBD', 'Familia a la que pertenecen generalmente Digimon que, por el motivo que sea, no son asignables a ninguna otra familia.', 'storage/iconos/familias/tbd.png', NULL, NULL);

--
-- Volcado de datos para la tabla `proscontras`
--

INSERT INTO `proscontras` (`id`, `pro_contra`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 0, 'El daño de su F3 es muy alto', NULL, NULL),
(2, 0, 'Buena habilidad de AoE (Área de Efecto)', NULL, NULL),
(3, 0, 'Siendo Vacuna/Luz, tiene doble ventaja contra los enemigos más comunes.', NULL, NULL),
(4, 0, 'Fácil y rápido de digievolucionar, agregando a sus capacidades de supervivencia', NULL, NULL),
(5, 0, 'Uno de los pocos Digimon con cuatro habilidades', NULL, NULL),
(6, 0, 'Posee ASB (Advance Skill Breaking) en todas sus habilidades.', NULL, NULL),
(7, 1, 'Alto consumo de maná (Digisoul)', NULL, NULL),
(8, 1, 'Exclusivo de lootbox (Caja de botín) de pago con 1% de probabilidad de obtención', NULL, NULL),
(9, 1, 'Exclusivo de un evento temporal de la Arena', NULL, NULL),
(10, 1, 'Salud mediocre/mala para su rango', NULL, NULL),
(11, 1, 'Ataque mediocre/malo para su rango', NULL, NULL),
(12, 1, 'Animaciones de habilidades lentas', NULL, NULL),
(13, 0, 'Animaciones de habilidades rápidas', NULL, NULL),
(14, 0, 'Efecto especial en una o varias habilidades', NULL, NULL),
(15, 0, 'Su mejor habilidad puede ser reiniciada con el Reset Deck, saltándose el largo tiempo de recarga', NULL, NULL),
(16, 0, 'Alta probabilidad de críticos base', NULL, NULL),
(17, 0, 'Forma parte de un deck poderoso, por lo cual su obtención es más atractiva', NULL, NULL),
(18, 1, 'Exclusivo de las lootbox (cajas de botín) ocasionales y caras del juego, dificultando mucho su obtención', NULL, NULL),
(19, 1, 'Su mejor habilidad, incluso dedicandole todos los puntos, no puede llegar a nivel 25, limitando su potencial', NULL, NULL),
(20, 1, 'El/los efecto/s especial/es no mejora/n conforme se sube de nivel la habilidad a la que está asociado cada uno', NULL, NULL),
(21, 0, 'Salud alta o muy alta para su rango', NULL, NULL),
(22, 0, 'Ataque alto o muy alto para su rango', NULL, NULL),
(23, 0, 'Defensa alta o muy alta para su rango', NULL, NULL),
(24, 1, 'Alto tiempo de recarga para sus habilidades', NULL, NULL),
(25, 0, 'Debido a sus familias, obtiene un incremento significativo de daño en días concretos gracias al Shadow Labyrinth', NULL, NULL),
(26, 0, 'Alta probabilidad de Evasión', NULL, NULL),
(27, 1, 'Exclusivo de lootbox (caja de botín) con un 0,1% de probabilidad', NULL, NULL),
(28, 1, 'Requiere varias líneas desbloqueadas completamente de Digimon X para poder evolucionar', NULL, NULL),
(29, 1, 'Posee la habilidad con el mayor tiempo de recarga del juego (6 minutos para su All-Delete)', NULL, NULL),
(30, 1, 'Su mejor habilidad no puede ser reiniciada con el Reset Deck', NULL, NULL),
(31, 1, 'Las misiones requeridas para su desbloqueo total o parcial son largas y molestas de completar', NULL, NULL);

--
-- Volcado de datos para la tabla `digimon_familia`
--

INSERT INTO `digimon_familia` (`id`, `digimon_id`, `familia_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 8, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 6, NULL, NULL),
(5, 2, 9, NULL, NULL),
(10, 3, 4, NULL, NULL),
(26, 5, 1, NULL, NULL),
(27, 5, 6, NULL, NULL);

--
-- Volcado de datos para la tabla `digimon_proscontra`
--

INSERT INTO `digimon_proscontra` (`id`, `digimon_id`, `procontra_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 9, NULL, NULL),
(9, 1, 10, NULL, NULL),
(10, 1, 11, NULL, NULL),
(11, 1, 12, NULL, NULL),
(12, 2, 2, NULL, NULL),
(13, 2, 3, NULL, NULL),
(14, 2, 17, NULL, NULL),
(15, 2, 25, NULL, NULL),
(16, 2, 16, NULL, NULL),
(17, 2, 26, NULL, NULL),
(18, 2, 27, NULL, NULL),
(19, 2, 31, NULL, NULL),
(20, 2, 29, NULL, NULL),
(21, 2, 30, NULL, NULL),
(22, 2, 28, NULL, NULL),
(32, 3, 1, NULL, NULL),
(33, 3, 5, NULL, NULL),
(34, 3, 6, NULL, NULL),
(35, 3, 14, NULL, NULL),
(36, 3, 16, NULL, NULL),
(37, 3, 21, NULL, NULL),
(38, 3, 22, NULL, NULL),
(39, 3, 7, NULL, NULL),
(40, 3, 19, NULL, NULL),
(41, 3, 20, NULL, NULL),
(42, 3, 24, NULL, NULL),
(43, 3, 27, NULL, NULL),
(44, 3, 30, NULL, NULL),
(45, 3, 31, NULL, NULL),
(64, 5, 3, NULL, NULL),
(65, 5, 23, NULL, NULL),
(66, 5, 10, NULL, NULL),
(67, 5, 11, NULL, NULL),
(68, 5, 30, NULL, NULL);


--
-- Volcado de datos para la tabla `tamers`
--

INSERT INTO `tamers` (`id`, `nombre`, `descripcion`, `utilidad`, `health_points`, `digisoul_points`, `attack`, `defense`, `active_skill_name`, `active_skill_effect`, `active_skill_cooldown`, `passive_skill_name`, `passive_skill_effect1`, `passive_skill_effect2`, `active_skill_icon`, `passive_skill_icon`, `tamer_icon`, `tamer_model`, `created_at`, `updated_at`) VALUES
(1, 'Taichi \"Tai\" Kamiya', 'Protagonista de las series relacionadas de Digimon Adventure. Chico de quinto grado poco dado a los estudios y muy talentoso en los deportes. Tiende a ser impulsivo, actuando primero y pensando después, lo cual le ha llevado a meterse en líos. Sin embargo, con un valor muy difícil de quebrantar y unas capacidades de liderazgo innatos, capitanea al grupo de los niños elegidos en su lucha contra las fuerzas del mal. Está en el equipo de futbol de su colegio, donde es delantero y el goleador estrella.', 'Tank/DPS', 90, 80, 10, 2, 'Berserk', 'Aumenta el ataque base del Digimon compañero en un 50% por 30 segundos.', '3 minutos.', 'Valor de Tai', 'Aumenta el ataque base del Digimon compañero en un 5% si es de atributo Vacuna.', 'Aumenta la salud base del Digimon compañero en un 10% si es de atributo Virus.', 'tamers/active_icon/OPL0Hh6J72jHGvYgYOWKWONJfAA4eLyCgt8I0w1K.png', 'tamers/passive_icon/3U8yUHNmrARizR8ZqHQDCDsN3RQ4ahn5WQbI5uda.png', 'tamers/tamer_icon/31rhCeS2u6lGXIz8jBnSYL2fqLNAn6BNeq0J9jV2.png', 'tamers/tamer_model/opJbJqHfeDaqetzy8NFC2lXKGdpUCAi0otzLNrHZ.png', '2022-03-15 11:44:43', '2022-03-15 12:42:18');

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `telegramid`, `isadmin`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Daniel', 'dan@example.es', NULL, 'admindan', '$2y$10$8FHjwIiXMjHjTZ6JmuocjuzvqvBJ6TnH7gkNd6n4NVLhzBTwB5jiO', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2022-03-09 09:11:23', '2022-03-14 11:40:41'),
(2, 'Dan2', 'dan2@example.es', NULL, 'userdan', '$2y$10$lxMkTg./n09YwBMScZfT.eEFuxLE2UopBtLCNOBPAxpHSZ7HHbbn.', NULL, NULL, '123', 0, NULL, NULL, NULL, '2022-03-09 09:51:16', '2022-03-09 09:51:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
