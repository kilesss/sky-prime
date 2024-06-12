-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 04:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sky-prime`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `code_regional_center` varchar(11) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `code_area` varchar(10) DEFAULT NULL,
  `name_area` varchar(200) DEFAULT NULL,
  `name_area_latin` varchar(200) DEFAULT NULL,
  `NUTS1` varchar(10) DEFAULT NULL,
  `NUTS2` varchar(10) DEFAULT NULL,
  `NUTS3` varchar(10) DEFAULT NULL,
  `document_number` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `document` int(10) NOT NULL,
  `doc_kind` varchar(200) NOT NULL,
  `doc_name_en` varchar(200) NOT NULL,
  `doc_inst` varchar(200) NOT NULL,
  `doc_num` varchar(200) NOT NULL,
  `doc_date` datetime DEFAULT NULL,
  `doc_act` datetime NOT NULL,
  `dv_danni` int(10) DEFAULT NULL,
  `dv_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `municapility`
--

CREATE TABLE `municapility` (
  `id` int(11) NOT NULL,
  `municapility` varchar(20) NOT NULL,
  `ekatte` varchar(20) NOT NULL,
  `name_municapility` varchar(50) NOT NULL,
  `name_municapility_en` varchar(50) NOT NULL,
  `nuts1` varchar(20) NOT NULL,
  `nuts2` varchar(20) NOT NULL,
  `nuts3` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `document` int(10) NOT NULL,
  `full_name_bul` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nuts1_regions`
--

CREATE TABLE `nuts1_regions` (
  `id` int(11) NOT NULL,
  `region` varchar(20) NOT NULL,
  `nuts1` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `name_en` varchar(200) NOT NULL,
  `document` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nuts2_regions`
--

CREATE TABLE `nuts2_regions` (
  `id` int(11) NOT NULL,
  `region` varchar(20) NOT NULL,
  `nuts1` varchar(20) NOT NULL,
  `nuts2` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `name_en` varchar(200) NOT NULL,
  `document` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `raion` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `name_en` varchar(200) NOT NULL,
  `document` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `region_sofia`
--

CREATE TABLE `region_sofia` (
  `id` int(11) NOT NULL,
  `ekatte` int(10) NOT NULL,
  `t_v_m` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `raion` varchar(200) NOT NULL,
  `kind` int(10) NOT NULL,
  `document` int(10) NOT NULL,
  `name_en` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resorts`
--

CREATE TABLE `resorts` (
  `id` int(11) NOT NULL,
  `ekatte` int(10) NOT NULL,
  `kind` int(10) NOT NULL,
  `area1` varchar(300) NOT NULL,
  `area2` varchar(300) NOT NULL,
  `document` int(10) NOT NULL,
  `abc` int(10) NOT NULL,
  `name_en` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settlements`
--

CREATE TABLE `settlements` (
  `ekatte` int(11) NOT NULL,
  `t_v_m` varchar(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `area` varchar(10) NOT NULL,
  `municipality` varchar(10) NOT NULL,
  `townhall` varchar(10) NOT NULL,
  `kind` int(10) NOT NULL,
  `category` int(10) NOT NULL,
  `altitude` int(10) NOT NULL,
  `document` int(10) NOT NULL,
  `abc` int(10) NOT NULL,
  `name_en` varchar(200) NOT NULL,
  `nuts1` varchar(10) NOT NULL,
  `nuts2` varchar(10) NOT NULL,
  `nuts3` varchar(10) NOT NULL,
  `text` varchar(200) NOT NULL,
  `oblast_name` varchar(200) NOT NULL,
  `obshtina_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `townhall`
--

CREATE TABLE `townhall` (
  `id` int(11) NOT NULL,
  `townhall` varchar(50) NOT NULL,
  `townhall_name` varchar(50) NOT NULL,
  `ekatte` int(10) NOT NULL,
  `document` varchar(20) NOT NULL,
  `category` int(10) NOT NULL,
  `townhall_name_en` varchar(200) NOT NULL,
  `nuts1` varchar(50) NOT NULL,
  `nuts2` varchar(50) NOT NULL,
  `nuts3` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nuts1_regions`
--
ALTER TABLE `nuts1_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nuts2_regions`
--
ALTER TABLE `nuts2_regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region_sofia`
--
ALTER TABLE `region_sofia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resorts`
--
ALTER TABLE `resorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settlements`
--
ALTER TABLE `settlements`
  ADD PRIMARY KEY (`ekatte`);

--
-- Indexes for table `townhall`
--
ALTER TABLE `townhall`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nuts1_regions`
--
ALTER TABLE `nuts1_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nuts2_regions`
--
ALTER TABLE `nuts2_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region_sofia`
--
ALTER TABLE `region_sofia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resorts`
--
ALTER TABLE `resorts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settlements`
--
ALTER TABLE `settlements`
  MODIFY `ekatte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `townhall`
--
ALTER TABLE `townhall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
