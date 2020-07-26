-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 16-06-2020 a las 04:35:37
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

DROP TABLE IF EXISTS `entrada`;
CREATE TABLE IF NOT EXISTS `entrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `contenido` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `titulo`, `contenido`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Titulo 1', 'contenido 1', '2020-06-15 00:57:18', '2020-06-15 00:57:18', NULL),
(4, 'piedra papel tijera', '$model->insert($data);\r\n        var_dump($model);', '2020-06-15 10:41:58', '2020-06-15 10:41:58', '2020-06-15 23:02:29'),
(5, 'piedra papel tijera 2', 'qsd', '2020-06-15 10:48:59', '2020-06-15 10:48:59', '2020-06-15 23:02:35'),
(6, 'piedra papel tijera 22', 'qqqqqqqqw', '2020-06-15 10:51:15', '2020-06-15 10:51:15', '2020-06-15 23:02:27'),
(7, 'piedra papel tijera 222', 'qqqqqqqqqqqqzzs', '2020-06-15 10:52:10', '2020-06-15 10:52:10', '2020-06-15 23:02:26'),
(8, 'piedra papel tijera 2222', 'qqqqqqqqqqqqzsz', '2020-06-15 10:53:16', '2020-06-15 10:53:16', '2020-06-15 23:02:30'),
(9, 'piedra papel tijera 22222', 'qqqqqqqqqqqqzzs', '2020-06-15 10:54:23', '2020-06-15 10:54:23', '2020-06-15 23:02:33'),
(10, 'piedra papel tijera 3', 'qqqqqqqqqqqqzzzs', '2020-06-15 10:59:09', '2020-06-15 10:59:09', '2020-06-15 23:02:33'),
(11, 'cuarzo papiro navaja', 'asdas', '2020-06-15 19:28:18', '2020-06-15 19:28:18', '2020-06-15 23:02:24'),
(12, 'Titulo 2', 'Contenido 2\r\n', '2020-06-15 23:06:17', '2020-06-15 23:06:17', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
