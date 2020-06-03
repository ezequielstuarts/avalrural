-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2020 a las 20:19:14
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
  `img_miniature` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `img_noticia` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `date`, `title`, `subtitle`, `content`, `created_at`, `updated_at`, `img_miniature`, `img_noticia`) VALUES
(31, '2018-06-01', 'Nueva alternativa de financiación para las Pymes', 'En noviembre Aval Rural SGR fue aprobada por la CNV como avalista en el régimen de Obligaciones Negociables Simples, sumando este producto a las propuestas de la SGR hacia las Pymes.', '<p>Es una herramienta ágil y flexible que permite a las Pymes obtener financiación, a través del mercado de capitales, emitiendo deuda hasta 60 meses, en pesos o USD a tasas competitivas de mercado.</p><p>Durante el 2017 asistimos a más de 400 Pymes, financiándolas con cheques, pagarés de pago diferido y bancos.</p><p>Desde Aval Rural acompañamos a Pymes en todo el país y de todos los sectores de la economía con el objetivo de consolidar y potenciar su crecimiento.</p><p>Si desea contactarse con Aval Rural, llamar al (011) 4468-8291 o enviar mail a <a href=\"http://info@avalrural.com.ar\" target=\"_blank\">info@avalrural.com.ar</a> y <a href=\"http://jsalate@avalrural.com.ar\" target=\"_blank\">jsalate@avalrural.com.ar</a></p>', '2019-12-15 21:16:44', '2019-12-15 21:16:44', 'mskWGwrxrouYrRjqX7ANkYSD1bvP2eX23UdCg1xQ.jpeg', 'deDM7EJgYgH9NlbuuHuelw4o5ukhy3PJIJTRATPC.jpeg'),
(32, '2018-06-01', 'Educación financiera - Instructivos MiPyME', 'La CASFOG propone, a través de videos instructivos, explicar el funcionamiento del Sistema de Garantías de Argentina y los productos', '<p>De esta manera, y en coherencia con la visión institucional de desarrollar, potenciar y fortalecer la inclusión financiera de las</p><p>Te invitamos a conocer el primer video instructivo sobre Obligaciones Negociables Simples.</p><p><a href=\"https://www.youtube.com/watch?v=7IcB8aOIP9U&amp;t=7s\" target=\"_blank\">Ver Video</a><br></p>', '2019-12-15 21:20:43', '2019-12-15 21:20:43', 'd8NFQqzGXhTn7t21uwxDoJTF4h7zZ7ZX19j1Muoa.png', 'R0edVA0jWZS9JszTq999mDeqBIEu8Z7WFbS2cx2P.png'),
(33, '2018-06-01', 'Financiación PyME para la campaña fina 2018 - Aval', 'Las PyMES pueden acceder a condiciones en pesos y dólares para financiar el capital de trabajo necesario para sembrar trigo y cebada.', '<p>Bancos en USD: Tasas anuales de interés desde 4% anual a 180 días y 360 días;</p><p>Descuento de cheques $: Tasa de interés vencida 25% anual hasta 360 días;</p><p>Pagaré Bursátil USD: Financiación en dólares hasta 360 días, tasa de interés 8,5% anual.</p><p>Adicionalmente, se pueden financiar compras de maquinaria o inversiones con créditos hasta 60 meses.</p><h6>Requisitos para asociarse:</h6><p>Para asociarse a AVAL RURAL es necesario ser considerado micro, pequeña o mediana empresa en los términos definidos por la Subsecretaría de Financiamiento de la Producción, es decir, tener un promedio de los últimos 3 años de ventas anuales de hasta:</p><p>$ 230.000.000 + IVA, para empresas agropecuarias (ej. productores)</p><p>$ 250.000.000 + IVA, para empresas de servicios (ej. contratistas)</p><p>$ 760.000.000 + IVA, para empresas industriales (ej. formulación de biodiesel)</p><p>$ 900.000.000 + IVA, para comercios (ej. acopios y agronomías)</p><p>Debe tener regularizada la situación impositiva y previsional y estar en situación normal en el sistema financiero.</p><p><br></p><h6>Para mayor información contactarse con su responsable zonal:</h6><p>- Mariano García (Corrientes, Entre Ríos, Santa Fe, NEA y Norte de Buenos Aires)</p><p>mgarcia@avalrural.com.ar (0341) 15-3384422</p><p>- Hernán Zapata (Centro, Sur y Noroeste Buenos Aires, NOA, Mendoza y San Juan)</p><p><a href=\"http://hzapata@avalrural.com.ar\" target=\"_blank\">hzapata@avalrural.com.ar</a> (011) 4468-8296 o (011)15-5888-1125</p><p>- Inés Bollón (Oeste de Buenos Aires, La Pampa y GBA Norte)</p><p><a href=\"http://ibollon@avalrural.com.ar\" target=\"_blank\">ibollon@avalrural.com.ar</a> (011) 4468-8174 o (011) 15-2721-1516</p><p>- Maximiliano Bustos Ferreyra (Córdoba y GBA Sur)</p><p><a href=\"http://mbustosferreyra@avalrural.com.ar\" target=\"_blank\">mbustosferreyra@avalrural.com.ar</a> (011) 4468-8293 o (011) 15-3789-2166</p><p>- Johanna Salate</p><p><a href=\"http://jsalate@avalrural.com.ar\" target=\"_blank\">jsalate@avalrural.com.ar</a> (011) 4468-8291</p>', '2019-12-15 21:26:44', '2019-12-15 21:26:44', '6ZrwqxyVCKGUzBUGOAeVbMbmRK5yAoMsaGuwwhkC.jpeg', 'JAh78X42kkPZ4y2ykX8JPHVOzcoKXVFQhjJ7uFEL.jpeg'),
(34, NULL, 'Nueva Normativa 455/2018', 'Salió la Resolución 455/2018 derogando la Resolución 212/2013, e introduciendo cambios a la normativa aplicable a las SGRs.', '<p>Pueden leer la norma completa del siguiente link:</p><p><a href=\"https://www.boletinoficial.gob.ar/#!DetalleNorma/188981/20180727\" target=\"_blank\">https://www.boletinoficial.gob.ar/#!DetalleNorma/188981/20180727</a><br></p>', '2019-12-15 21:32:07', '2019-12-15 21:32:07', 'TXEL5BbmbwDQVnZcmcsA26UnPVpOK4EIj1Rb1pzr.png', '7ZOgmlWeSTQ0sdseS2yM1yHt7uO3fZVRE4tnNH2E.png'),
(35, '2019-05-01', 'Renovación del certificado PYME', 'Hay tiempo hasta el 31 de mayo para las PyMEs que hayan cerrado el ejercicio fiscal en diciembre 2018 o enero 2019', NULL, '2019-12-17 17:02:53', '2019-12-17 17:02:53', 'hL1a6gTKVsZbElSNO473iM0HpNhalcSQtdf9F1SB.png', '8s9GDdSivNy31rkU04S2dPKt6amVgpDyaUPqzXtP.png'),
(37, '2019-06-03', 'Las pymes se financiaron en el mercado por un récord histórico durante mayo.', 'De acuerdo al informe del Mav se negociaron en el último mes cheques por un total de $9.646 millones.', '<p><a href=\"https://www.cronista.com/finanzasmercados/Las-pymes-se-financiaron-en-el-mercado-por-un-record-historico-durante-mayo-20190604-0022.html\" target=\"_blank\">Leer nota completa</a><br></p>', '2019-12-17 17:15:34', '2019-12-17 17:15:34', 'qhBFHqwyRjxXhsdWbMH30V3DCX0BSuYafJAzHQ6T.png', '70OMbhDOO6Rp0XojD8IEoYBYYKcG3UTvjflE7KQT.jpeg'),
(40, '2019-12-01', 'Condiciones Aval Rural Octubre 2019', 'DESCUENTO de CHEQUES de PAGO DIFERIDO/ PRESTAMOS en BANCOS – CORTO PLAZO (USD) DESCUENTO.', '<h6>Comerciales de Aval Rural por zona:</h6><p>Inés Bollón (Oeste de Buenos Aires, La Pampa, Sur de Córdoba)</p><p><a href=\"http://ibollon@avalrural.com.ar\" target=\"_blank\">ibollon@avalrural.com.ar</a>&nbsp;- (011) 4468-8174 o (011)15-27211516</p><p><br></p><p>Mariano García (Entre Ríos, Santa Fe, NEA y Norte de Buenos Aires)</p><p><a href=\"http://mgarcia@avalrural.com.ar\" target=\"_blank\">mgarcia@avalrural.com.ar</a>&nbsp;- (0341) 15-3384422</p><p><br></p><p>Hernán Zapata (Centro y Sur Buenos Aires, Norte de Córdoba, NOA)</p><p><a href=\"http://hzapata@avalrural.com.ar\" target=\"_blank\">hzapata@avalrural.com.ar</a>&nbsp;- - (011) 4468-8296 o (011)15-5888-1125</p><p><br></p><p>Paulo Marchetti (Córdoba)</p><p><a href=\"http://PMarchetti@avalrural.com.ar\" target=\"_blank\">PMarchetti@avalrural.com.ar</a> - (0341) 15-2107564</p>', '2019-12-17 17:34:31', '2019-12-17 17:34:31', 'pzGll3BvWxZOOq36co8hxlKwh0RDaf3e2Hc1Yudg.png', 'CnUFFOkEEl4oT7waUqdwa0pC1zDqejzuyhOXNGaU.png'),
(41, '2019-12-02', 'Nuevos Límites PYME Resolución 563/2019– SEPYME', 'El día 6 de diciembre se publicó en el B.O. la Resolución 563/2019', '<p>El día 6 de diciembre se publicó en el B.O. la Resolución 563/2019 de la Secretaría de Emprendedores y de la Pequeña y Mediana Empresa, modificatoria de la Resolución 220/2019, estableciendo nuevos topes de ventas totales para encuadrar a las empresas dentro de la categoría MiPyme. A partir de la citada norma, el cuadro de límites de facturación se modifica por el que sigue:<span style=\"white-space:pre\">	</span></p><p>Estos montos entrarán en vigencia a partir del 11 de diciembre de 2019.</p><p>Para más información consulta:</p><p><a href=\"https://www.boletinoficial.gob.ar/detalleAviso/primera/223554/20191210\" target=\"_blank\">Aquí</a></p>', '2019-12-17 17:29:49', '2019-12-29 19:33:46', 'iUnocqhJ2iVyfDJWQyE94mKDrVRt2UOGjoXfXSzP.png', '3U6U44vJN4vdH6G1eBzQtFgw3spc4SB3aKuPJceN.png'),
(43, '2019-12-02', 'Nuevos Límites PYME Resolución 563/2019', 'El día 6 de diciembre se publicó en el B.O. la Resolución 563/2019', '<p>El día 6 de diciembre se publicó en el B.O. la Resolución 563/2019 de la Secretaría de Emprendedores y de la Pequeña y Mediana Empresa, modificatoria de la Resolución 220/2019, estableciendo nuevos topes de ventas totales para encuadrar a las empresas dentro de la categoría MiPyme. A partir de la citada norma, el cuadro de límites de facturación se modifica por el que sigue:<span style=\"white-space:pre\">	</span></p><p>Estos montos entrarán en vigencia a partir del 11 de diciembre de 2019.</p><p>Para más información consulta:</p><p><a href=\"https://www.boletinoficial.gob.ar/detalleAviso/primera/223554/20191210\" target=\"_blank\">Aquí</a></p>', '2019-12-17 17:29:49', '2019-12-31 05:18:55', '6GfKwXDfiXoeDMcpQY8CLCfqjRCKqUliXzSLeACM.png', 'OJLu8WZS8xURf7q1bI0NZEEdXRGRD2O0KR2IzcYr.png'),
(47, NULL, 'dffffffffffffffdfdd', 'fdfdfdffddffdfdfdfd', '<blockquote>dfcdfdfdfdfddffddfdfdf<b>fddffddffd</b>dfdfddffddffd</blockquote>', '2020-01-01 19:30:24', '2020-01-01 19:30:24', 'VhThd1dqzcZLO2eGVC5T2a75mQnNHS1gDnMl3vOh.jpeg', '6ZFTE2TCAqQvwbbwyWQX7TF4eHuJ1hXEg9rAlxc4.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ezequiel', 'e.stuarts@gmail.com', NULL, '$2y$10$Qay0e0UX1HMdNOOdFvNdGer6XrG7KWf5Qdhv1u8qViKkwpK0iSC3i', NULL, '2019-12-30 03:21:01', '2019-12-30 03:21:01'),
(2, 'Ezequiel', 'e.stuarts@mas54.com', NULL, '$2y$10$qBH/ULBH.U78PmpjbQt4.uSjv6r1vmaThHEJ0TgJ8P.5MHq/qohJe', NULL, '2020-01-01 05:27:16', '2020-01-01 05:27:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
