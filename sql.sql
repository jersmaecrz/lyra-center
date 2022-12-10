-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2022 at 06:12 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NsqxjSUDbx`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `crsID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crsName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `crsInstructor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `crsPrice` float NOT NULL,
  `crsDesc` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crsID`, `crsName`, `crsInstructor`, `crsPrice`, `crsDesc`) VALUES
('FE ELEC ', 'IP EXAM', 'Sir PHILNITS', 1300, 'Online Course'),
('ICS 26016', 'Technopreneuship', 'Ma\'am Maria Christina Aragon', 1500, 'Entrepreneurial skills.'),
('ICS26013', 'Software Engineering 2', 'Inst. Lopez', 5000, 'Lorem ipsum'),
('IT ELEC3C', 'Web Application Development with PHP', 'Gabriel Montano', 1000, '3 Months PHP Online Course');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled courses`
--

CREATE TABLE `enrolled courses` (
  `ecID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ecStatus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crsID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sUsername` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `paymentID` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enrolled courses`
--

INSERT INTO `enrolled courses` (`ecID`, `ecStatus`, `crsID`, `sUsername`, `paymentID`) VALUES
('16701959321497234362638d2adb8deb18.05510604', 'pending', 'FE ELEC', 'leila', '1670195931677188703638d2adb8deab8.81101069'),
('1670196073366291576638d2b682b9bf5.00871471', 'active', 'IT ELEC3C', 'leila', '1670196072274352341638d2b682b9ae5.62279434'),
('1670197344118424666638d305fda01b5.82993303', 'pending', 'FE ELEC', 'admin', '1670197343411313935638d305fda0142.64527490'),
('1670197813393576131638d3234bfc968.88341701', 'pending', 'FE ELEC', 'admin', '16701978122145216715638d3234bfc8e3.25870887'),
('1670198091655076242638d334aab83f0.41130143', 'pending', 'FE ELEC', 'leila', '16701980902144416970638d334aab82a1.10682423'),
('1670198686636657989638d359d496fb8.42840150', 'active', 'FE ELEC', 'jerss', '1670198685449793380638d359d496f09.92833558'),
('16702084141042725727638d5b9d8e1c60.87543055', 'pending', 'IT ELEC3C', 'jerss', '1670208413810879801638d5b9d8e1a06.60887530'),
('16702086911275851441638d5cb2a75946.00581751', 'pending', 'FE ELEC', 'hellokitty', '16702086901578977200638d5cb2a757e5.71925899'),
('1670208752724271261638d5cef786dc4.57645126', 'pending', 'FE ELEC', 'hellokitty', '1670208751302917338638d5cef786b61.25706662'),
('16702097462097942193638d60d1497c68.11934231', 'pending', 'ICS26013', 'jerss', '16702097451946937420638d60d14979b1.13937276'),
('16702100341518102781638d61f1927cd3.53639471', 'pending', 'FE ELEC', 'hellokitty', '1670210033899097364638d61f1927c27.57195186'),
('1670210104942650170638d6237ea5f03.62206925', 'active', 'ICS26013', 'hellokitty', '1670210103170333922638d6237ea5db9.23480530'),
('1670210155321859167638d626a3eb444.83055402', 'pending', 'IT ELEC3C', 'hellokitty', '16702101541117962015638d626a3eb346.59570752'),
('16702127591097052237638d6c96403ed9.91254940', 'pending', 'IT ELEC3C', 'znvry', '16702127582087346264638d6c96403cd2.24352796'),
('1670235760368388639638dc66f9094d5.34280561', 'pending', 'IT ELEC3C', 'jersii', '1670235759705719477638dc66f9093d1.39422241');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `pytID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `pytID`) VALUES
(15, 'IMG-638d308b2e46e9.24230276.png', '1670197343411313935638d305fda0142.64527490'),
(16, 'IMG-638d323a33eb70.39873298.png', '16701978122145216715638d3234bfc8e3.25870887'),
(17, 'IMG-638d334f967a49.64128796.png', '16701980902144416970638d334aab82a1.10682423'),
(18, 'IMG-638d35aecb5358.64127542.png', '1670198685449793380638d359d496f09.92833558'),
(19, 'IMG-638d5bc421e607.53884239.jpg', '1670208413810879801638d5b9d8e1a06.60887530'),
(20, 'IMG-638d5cfdbb9c80.79173549.jpg', '1670208751302917338638d5cef786b61.25706662'),
(21, 'IMG-638d60dc7db438.29125813.jpg', '16702097451946937420638d60d14979b1.13937276'),
(22, 'IMG-638d621d3ee985.14288765.jpg', '1670210033899097364638d61f1927c27.57195186'),
(23, 'IMG-638d6243a47334.81772123.jpg', '1670210103170333922638d6237ea5db9.23480530'),
(24, 'IMG-638d627b1e87a4.64882858.jpg', '16702101541117962015638d626a3eb346.59570752'),
(25, 'IMG-638d6cb01af129.57800758.png', '16702127582087346264638d6c96403cd2.24352796'),
(26, 'IMG-638dc689ac2b88.28154426.jpg', '1670235759705719477638dc66f9093d1.39422241');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pytID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `schemeID` int(11) NOT NULL,
  `ecID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `acctNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pytID`, `schemeID`, `ecID`, `method`, `bank`, `acctNo`) VALUES
('1670182310489338281638cf5a68a2c39.53898634', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('16701948132084475014638d267d000a47.77089135', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('1670194901225499573638d26d5e95222.44214843', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('16701952921515429463638d285c609f38.27161499', 1, 'FE ELEC', 'otc', 'bdo', '12312312'),
('16701958621475831207638d2a96708d71.03091392', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('1670195931677188703638d2adb8deab8.81101069', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('1670196072274352341638d2b682b9ae5.62279434', 1, 'IT ELEC3C', 'online', 'bdo', '092177263121'),
('1670196436450670411638d2cd4204f20.71502889', 1, 'FE ELEC', 'online', 'gcash', '09161234567'),
('1670197343411313935638d305fda0142.64527490', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('16701978122145216715638d3234bfc8e3.25870887', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('16701980902144416970638d334aab82a1.10682423', 1, 'FE ELEC', 'online', 'gcash', '092177263121'),
('1670198685449793380638d359d496f09.92833558', 1, 'FE ELEC', 'online', 'gcash', '09161234567'),
('1670208413810879801638d5b9d8e1a06.60887530', 1, 'IT ELEC3C', 'otc', 'bdo', '1234567'),
('16702086901578977200638d5cb2a757e5.71925899', 1, 'FE ELEC', 'otc', 'gcash', '2019000000'),
('1670208751302917338638d5cef786b61.25706662', 1, 'FE ELEC', 'online', 'gcash', '2019000000'),
('16702097451946937420638d60d14979b1.13937276', 1, 'ICS26013', 'otc', 'bdo', '1234567'),
('1670210033899097364638d61f1927c27.57195186', 1, 'FE ELEC', 'online', 'gcash', '2019000000'),
('1670210103170333922638d6237ea5db9.23480530', 1, 'ICS26013', 'online', 'gcash', '2019000000'),
('16702101541117962015638d626a3eb346.59570752', 1, 'IT ELEC3C', 'online', 'gcash', '2019000000'),
('16702127582087346264638d6c96403cd2.24352796', 1, 'IT ELEC3C', 'online', 'gcash', '12003213'),
('1670235759705719477638dc66f9093d1.39422241', 1, 'IT ELEC3C', 'online', 'gcash', '09161234567');

-- --------------------------------------------------------

--
-- Table structure for table `payment scheme`
--

CREATE TABLE `payment scheme` (
  `schemeID` int(11) NOT NULL,
  `method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `acctNo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment scheme`
--

INSERT INTO `payment scheme` (`schemeID`, `method`, `bank`, `acctNo`) VALUES
(1, 'Online Payment', 'G-Cash', '09161234567'),
(2, 'Over-the-Counter', 'Banco de Oro (BDO)', '007250123456'),
(3, 'Bank Transfer', 'Bank of the Philippine Islands (BPI)', '2536981475'),
(4, 'Checks', 'Banco de Oro (BDO)', '0072501234567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Arella Sumabat', 'arellamarie', 'arellamarie.sumabat@gmail.com', 'user', '4573a077f36ee2fd05b3e6054a24aa29'),
(6, 'Leila Gregorio', 'leinami', 'leilapatricia.gregorio.cics@ust.edu.ph', 'admin', '754f9968bf5f5f68d7dea029889b7415'),
(7, 'admin', 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'Leila Gregorio', 'leila', 'leilapatricia.gregorio.cics@ust.edu.ph', 'user', '754f9968bf5f5f68d7dea029889b7415'),
(9, 'Jersey Cruz', 'jerss', 'jersuu@email.com', 'user', '202cb962ac59075b964b07152d234b70'),
(10, 'Hello Kitty', 'hellokitty', 'hellokitty03@gmail.com', 'user', '62fbc82dabe52c6e017e8ad9fb8f69a2'),
(11, 'Mya Nava', 'znvry', 'myajaren.nava.cics@ust.edu.ph', 'user', '27cb01c90a7fa07daf3a649f780b7086'),
(12, 'Jersey', 'jersii', 'jerseyy@email.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `crsID` (`crsID`);

--
-- Indexes for table `enrolled courses`
--
ALTER TABLE `enrolled courses`
  ADD PRIMARY KEY (`ecID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD UNIQUE KEY `pytID` (`pytID`);

--
-- Indexes for table `payment scheme`
--
ALTER TABLE `payment scheme`
  ADD PRIMARY KEY (`schemeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment scheme`
--
ALTER TABLE `payment scheme`
  MODIFY `schemeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
