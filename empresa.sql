-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2020 a las 02:25:20
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(8, 'categoria 1', 'esta es la categoria de camisasc', 'Activada', NULL, '2020-10-25 03:12:52'),
(11, 'Categoria 2', 'esta es la categoria 2 xd', 'Desactivada', NULL, '2020-10-24 07:01:41'),
(13, 'categoria 3', 'es la categoria de los perfumesss', 'Activada', NULL, '2020-10-25 03:13:22'),
(15, 'Categoria 4', 'esta categoria es la de los zapatos', 'Activada', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quienessomos` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailcontacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonocontacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `quienessomos`, `emailcontacto`, `direccion`, `telefonocontacto`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'WOLF', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel maximus est. Integer efficitur ut augue non luctus. Suspendisse pharetra vitae arcu at tempor. Nam id suscipit nisl. Maecenas scelerisque, tortor et efficitur bibendum, massa libero suscipit nibh, quis iaculis dolor orci nec odio. Nulla accumsan congue euismod. Curabitur rutrum nibh et risus feugiat ornare. Phasellus congue ultricies orci, id porttitor tortor porta sed. Curabitur non pretium tellus, id lobortis massa. Sed erat leo, ornare eu congue in, tristique a nisi. Nulla scelerisque tempor dui, nec ultrices ex interdum et. Vestibulum elit lectus, varius non felis eget, placerat pellentesque metus. Maecenas pulvinar est metus, a egestas lacus maximus ac.\r\n\r\nCurabitur placerat consectetur ultrices. Aliquam eget lorem pulvinar, fermentum ipsum vel, fermentum est. Praesent turpis tellus, aliquam quis libero non, elementum dapibus arcu. Nullam et viverra dolor. Fusce porttitor tempor erat, dapibus scelerisque nisl cursus cursus. Ut id libero eget tellus pellentesque pulvinar. Suspendisse ac tortor lobortis, elementum ipsum quis, convallis lacus. Mauris volutpat tempor dignissim. Praesent volutpat lectus ex, vel condimentum sem volutpat in. Etiam quis odio in diam vestibulum tristique. Maecenas feugiat mollis sem, eget commodo diam commodo vel. Vivamus consectetur nisl risus, id posuere justo lobortis eget.', 'wolf@gmail.com', 'av. 8e #4-85 Quinta Oriental', '5752087', 'https://www.facebook.com/cesar.karvajal', 'https://twitter.com/cesardavid_26', 'https://www.instagram.com/wolfclotheshop/', '2020-10-24 07:22:52', '2020-10-25 05:12:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'breve descripcion sobre una marca muy conocida xdd', NULL, '2020-10-25 03:19:17'),
(2, 'Nike', 'esta es una descripcion breve de nike, que mas quieres saber XD', NULL, '2020-10-23 07:01:46'),
(6, 'arturo calle', 'en esta marca hay camisas, zapatos y jeans, boxers tambien', NULL, '2020-10-21 20:41:24'),
(8, 'Lacoste', 'la marca con el cocodrilo xd', NULL, '2020-10-24 19:36:19'),
(9, 'Puma', 'es un puma xd', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_20_133109_create_marcas_table', 1),
(5, '2020_10_20_134240_create_categorias_table', 1),
(6, '2020_10_20_134259_create_productos_table', 1),
(7, '2020_10_20_134313_create_empresas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `referencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcioncorta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `palabrasclave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(10) UNSIGNED DEFAULT NULL,
  `marca_id` int(10) UNSIGNED DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `referencia`, `nombre`, `descripcioncorta`, `detalle`, `valor`, `palabrasclave`, `estado`, `categoria_id`, `marca_id`, `foto`, `created_at`, `updated_at`) VALUES
(17, 'xddddd', 'sudadera', 'es una sudadera marca adidas', 'sudadera de buena calidad', '150000.00', 'sudadera, frio, cool', 'Disponible', 8, 1, 'uploads/7WnpGrHsnqMzyTat6bIDs37BAQeubtfo2KPXslHn.jpeg', NULL, '2020-10-25 03:23:05'),
(21, 'zooo9', 'gorra', 'es una gorra nike melita', 'gorra malandra', '50000.00', 'forro', 'Disponible', 8, 2, 'uploads/kElcS3lUhkClKuaHTGSlQcD8KRhKiCcOXnnfhfxz.jpeg', NULL, '2020-10-24 19:03:10'),
(22, 'zoooop', 'boxer', 'son unos boxer xd', 'XDDDD', '20000.00', 'ropainterior', 'Disponible', 13, 6, 'uploads/nBApyHpejpNtdx98P26WvtmThW6x6PpLcRrfj7B6.png', NULL, NULL),
(23, 'loooool', 'Perfume Lacoste', 'Es un perfume lacoste xd', 'El perfume que huele muy rico', '40000.00', 'rico', 'Disponible', 8, 8, 'uploads/OKXN7w2HXuSVlzfE6SIu7jyKdHSbHOmboWUANGz4.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cesar Carvajal', 'cesdavidcar21282@gmail.com', NULL, '$2y$10$D6vrZISngYbGKsCH.tm8POB6nuuAvFOTGOTTVIvUSh2LCZbOojAgO', NULL, '2020-10-22 21:40:09', '2020-10-22 21:40:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_categoria_id_foreign` (`categoria_id`) USING BTREE,
  ADD KEY `productos_marca_id_foreign` (`marca_id`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
