-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 26-Nov-2018 às 12:49
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7958788_workers`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Category`
--

CREATE TABLE `Category` (
  `IdCategory` int(6) NOT NULL,
  `NameCategory` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `OrderService`
--

CREATE TABLE `OrderService` (
  `IdOrder` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `IdProvider` int(11) NOT NULL,
  `DateOrder` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Provider`
--

CREATE TABLE `Provider` (
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FantasyName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Provider`
--

INSERT INTO `Provider` (`Name`, `Email`, `Cpf`, `DateOfBirth`, `Adress`, `Category`, `FantasyName`, `Password`) VALUES
('Marcelo Figueiredo', 'marcelofigueiredo@gmail.com', '103.203.803-03', '1982-01-25', 'Rua Washington Mansur, 271', 'Jardinagem', 'Figueiredo Jardinagem', 'e10adc3949ba59abbe56e057f20f883e'),
('Marcelo Figueiredo', 'marcelofigueiredo@gmail.com', '103.203.803-03', '1982-01-25', 'Rua Washington Mansur, 271', 'Jardinagem', 'Figueiredo Jardinagem', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Users`
--

CREATE TABLE `Users` (
  `Name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Cpf` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Adress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
