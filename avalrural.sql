-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2019 a las 04:32:06
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `avalrural`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `title` tinytext COLLATE utf8_croatian_ci NOT NULL,
  `subtitle` text COLLATE utf8_croatian_ci NOT NULL,
  `content` text COLLATE utf8_croatian_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_preview` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `img_noticia` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `date`, `title`, `subtitle`, `content`, `created_at`, `updated_at`, `img_preview`, `img_noticia`) VALUES
(31, '2018-06-01', 'Nueva alternativa de financiación para las Pymes', 'En noviembre Aval Rural SGR fue aprobada por la CNV como avalista en el régimen de Obligaciones Negociables Simples, sumando este producto a las propuestas de la SGR hacia las Pymes.', '<p>Es una herramienta ágil y flexible que permite a las Pymes obtener financiación, a través del mercado de capitales, emitiendo deuda hasta 60 meses, en pesos o USD a tasas competitivas de mercado.</p><p>Durante el 2017 asistimos a más de 400 Pymes, financiándolas con cheques, pagarés de pago diferido y bancos.</p><p>Desde Aval Rural acompañamos a Pymes en todo el país y de todos los sectores de la economía con el objetivo de consolidar y potenciar su crecimiento.</p><p>Si desea contactarse con Aval Rural, llamar al (011) 4468-8291 o enviar mail a <a href=\"http://info@avalrural.com.ar\" target=\"_blank\">info@avalrural.com.ar</a> y <a href=\"http://jsalate@avalrural.com.ar\" target=\"_blank\">jsalate@avalrural.com.ar</a></p>', '2019-12-15 21:16:44', '2019-12-15 21:16:44', 'mskWGwrxrouYrRjqX7ANkYSD1bvP2eX23UdCg1xQ.jpeg', 'deDM7EJgYgH9NlbuuHuelw4o5ukhy3PJIJTRATPC.jpeg'),
(32, '2018-06-01', 'Educación financiera - Instructivos MiPyME', 'La CASFOG propone, a través de videos instructivos, explicar el funcionamiento del Sistema de Garantías de Argentina y los productos', '<p>De esta manera, y en coherencia con la visión institucional de desarrollar, potenciar y fortalecer la inclusión financiera de las</p><p>Te invitamos a conocer el primer video instructivo sobre Obligaciones Negociables Simples.</p><p><a href=\"https://www.youtube.com/watch?v=7IcB8aOIP9U&amp;t=7s\" target=\"_blank\">Ver Video</a><br></p>', '2019-12-15 21:20:43', '2019-12-15 21:20:43', 'd8NFQqzGXhTn7t21uwxDoJTF4h7zZ7ZX19j1Muoa.png', 'R0edVA0jWZS9JszTq999mDeqBIEu8Z7WFbS2cx2P.png'),
(33, '2018-06-01', 'Financiación PyME para la campaña fina 2018 - Aval', 'Las PyMES pueden acceder a condiciones en pesos y dólares para financiar el capital de trabajo necesario para sembrar trigo y cebada.', '<p>Bancos en USD: Tasas anuales de interés desde 4% anual a 180 días y 360 días;</p><p>Descuento de cheques $: Tasa de interés vencida 25% anual hasta 360 días;</p><p>Pagaré Bursátil USD: Financiación en dólares hasta 360 días, tasa de interés 8,5% anual.</p><p>Adicionalmente, se pueden financiar compras de maquinaria o inversiones con créditos hasta 60 meses.</p><h6>Requisitos para asociarse:</h6><p>Para asociarse a AVAL RURAL es necesario ser considerado micro, pequeña o mediana empresa en los términos definidos por la Subsecretaría de Financiamiento de la Producción, es decir, tener un promedio de los últimos 3 años de ventas anuales de hasta:</p><p>$ 230.000.000 + IVA, para empresas agropecuarias (ej. productores)</p><p>$ 250.000.000 + IVA, para empresas de servicios (ej. contratistas)</p><p>$ 760.000.000 + IVA, para empresas industriales (ej. formulación de biodiesel)</p><p>$ 900.000.000 + IVA, para comercios (ej. acopios y agronomías)</p><p>Debe tener regularizada la situación impositiva y previsional y estar en situación normal en el sistema financiero.</p><p><br></p><h6>Para mayor información contactarse con su responsable zonal:</h6><p>- Mariano García (Corrientes, Entre Ríos, Santa Fe, NEA y Norte de Buenos Aires)</p><p>mgarcia@avalrural.com.ar (0341) 15-3384422</p><p>- Hernán Zapata (Centro, Sur y Noroeste Buenos Aires, NOA, Mendoza y San Juan)</p><p><a href=\"http://hzapata@avalrural.com.ar\" target=\"_blank\">hzapata@avalrural.com.ar</a> (011) 4468-8296 o (011)15-5888-1125</p><p>- Inés Bollón (Oeste de Buenos Aires, La Pampa y GBA Norte)</p><p><a href=\"http://ibollon@avalrural.com.ar\" target=\"_blank\">ibollon@avalrural.com.ar</a> (011) 4468-8174 o (011) 15-2721-1516</p><p>- Maximiliano Bustos Ferreyra (Córdoba y GBA Sur)</p><p><a href=\"http://mbustosferreyra@avalrural.com.ar\" target=\"_blank\">mbustosferreyra@avalrural.com.ar</a> (011) 4468-8293 o (011) 15-3789-2166</p><p>- Johanna Salate</p><p><a href=\"http://jsalate@avalrural.com.ar\" target=\"_blank\">jsalate@avalrural.com.ar</a> (011) 4468-8291</p>', '2019-12-15 21:26:44', '2019-12-15 21:26:44', '6ZrwqxyVCKGUzBUGOAeVbMbmRK5yAoMsaGuwwhkC.jpeg', 'JAh78X42kkPZ4y2ykX8JPHVOzcoKXVFQhjJ7uFEL.jpeg'),
(34, NULL, 'Nueva Normativa 455/2018', 'Salió la Resolución 455/2018 derogando la Resolución 212/2013, e introduciendo cambios a la normativa aplicable a las SGRs.', '<p>Pueden leer la norma completa del siguiente link:</p><p><a href=\"https://www.boletinoficial.gob.ar/#!DetalleNorma/188981/20180727\" target=\"_blank\">https://www.boletinoficial.gob.ar/#!DetalleNorma/188981/20180727</a><br></p>', '2019-12-15 21:32:07', '2019-12-15 21:32:07', 'TXEL5BbmbwDQVnZcmcsA26UnPVpOK4EIj1Rb1pzr.png', '7ZOgmlWeSTQ0sdseS2yM1yHt7uO3fZVRE4tnNH2E.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
