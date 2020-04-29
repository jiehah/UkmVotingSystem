-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 06:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukmes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `photo`, `created_on`) VALUES
(1, 'Team Milo', '$2y$10$g4m/PfziRBxoM9fvwqiS9OgxAV29w0y8..XHruyEplYPxYnhZJ6bC', 'Milo Lori', 'milo-1-logo.png', '2019-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `cid` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `type` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `manifesto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `cid`, `password`, `fullname`, `pid`, `photo`, `type`, `video`, `manifesto`) VALUES
(1, '', '$2y$10$y1OqYFUHAbkCgWl/vTHoh.dcLyPInG0rXBiN3XXpT5fEBx215sf8.', 'Wilson', 8, 'profile.jpg', 'Fakulti', '', ''),
(2, '', '$2y$10$SOTAHllEO.CrqSewCSHK4.g9w1xbmbOkiCsbulmrzXn/XlPSMjtlG', 'Angelina1', 0, 'female3.jpg', 'Umum11', '', ''),
(3, '', '$2y$10$zrjd/OWccwoGfGA1Uh2moOSEfraxe7ozQt30thOGoYWupwmliVyDC', 'Logan', 9, 'male2.png', 'Umum', '', ''),
(4, '', '$2y$10$wY1VSzxdR1X9RpSo3oKodumhkFihorsT2K1zausafYiNnnqYqscje', 'Danny', 9, 'TROLLFACE-DEAL-WITH-IT.png', 'Umum', '', ''),
(5, '', '$2y$10$3ov.kMMWqHBO8KBtjix6p.hw642C7Y5w/.r.OGU4VQRiG3qtvRji2', 'Tom', 9, 'e360bc98dbb4441f73d253f90723d9a4.jpg', 'Umum', '', ''),
(6, '', '$2y$10$2eF0UGUbOcH8L1ny0qXE0uw8pMJMNUUozoYSJw0ZXKGlZx8rYDuea', 'Tony Hawks', 0, 'favicon.png', 'Pengumuman', '', ''),
(7, '', '$2y$10$ZYpT8rgNn/ohBX1xx2DU6.QMCSjasqJNTRHpkJ/mFUPCGTk6wLOzW', 'James', 9, 'IMG_20180615_182842.jpg', 'Umum', '', ''),
(8, '', '$2y$10$eMVtYY6tGlrhZuSQl7CYXebiS66gT8nuo6pLCk1DMKWI9M0iwABJm', 'Sophia', 8, 'female.jpg', 'Fakulti', '', ''),
(9, '', '$2y$10$jBJ7LbyEXa7E/bwW0lBmHu38Pa8o.bX2WyFxk3Zn3Gk5LbvSe1XMO', 'Thom', 8, 'profile.jpg', 'Fakulti', '', ''),
(10, '', '$2y$10$fO.V4DyY7biwZYWUmHnN0.k1uZa40qdiosGeeOOjXAjdXkwzGNxFC', 'William', 8, 'profile.jpg', 'Fakulti', '', ''),
(11, '', '$2y$10$7kUrF.nydR2FZqxaTi1Qze.H.Ef7mSaWbJrH3VZ1FJoCqhKPEv7ZS', 'A', 0, 'mask.jpg', 'sad', '', ''),
(12, '', '$2y$10$BhnhcZfQ40Bufse7yKqjoOu0/G4BuqZu2z8It5XpSUcKuTPhMcPxa', 'Harry', 9, 'dealer-logo.jpg', 'Umum', '', ''),
(13, '', '$2y$10$iqhdKLw3VAopiEprzWM4letKheG23V.MYrAa330SmfdYE7bbuNFuO', 'Jerry Rig', 0, 'female4.jpg', 'FTSM', '', ''),
(14, '11', '', 'Ahmad Dani', 0, 'IMG-20190820-WA0065.jpg', 'Fakulti', '', ''),
(15, '10', '', 'as', 0, 'boOZzpi.png', 'dgf', '', ''),
(17, '', '', 'Jerry Rig', 13, 'FIREBASE.png', 'FTSM', '', ''),
(18, '', '', 'aaaa', 9, 'boOZzpi.png', 'aaaa', '', ''),
(19, '', '', 'Afifah', 10, 'IMG_20180615_182842.jpg', 'ad', '', ''),
(20, '', '', 'A', 11, 'milo-1-logo.png', 'sad', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(255) NOT NULL,
  `facname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `facname`) VALUES
(1, 'FPI'),
(2, 'FUU'),
(3, 'FFAR'),
(4, 'FTSM'),
(5, 'FPER'),
(6, 'FKAB'),
(7, 'FSK'),
(8, 'FPEND'),
(9, 'FGG'),
(10, 'FSSK'),
(11, 'FST'),
(12, 'FEP');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`id`, `pname`, `priority`) VALUES
(8, 'Demokrat UKM', 2),
(9, 'Bebas', 1),
(10, 'Republican UKM', 3),
(11, 'Inspirasi UKM', 4),
(13, 'test', 5);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `vid` varchar(11) NOT NULL,
  `vpassword` varchar(255) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `facid` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `vid`, `vpassword`, `fullname`, `facid`, `year`, `photo`) VALUES
(1, 'A161010', 'T54336', 'ahmad', 1, 3, 'v1.jpg'),
(2, 'A162020', 'AB0987', 'ali', 2, 3, 'v2.jpg'),
(3, 'A163433', 'Q124321', 'abu', 3, 3, 'v3.jpg'),
(4, 'A163712', 'A123456', 'bakar', 4, 3, 'v4.jpg'),
(5, 'A168989', 'F45363', 'Mira', 5, 3, 'v5.jpg'),
(6, 'A169900', 'Q09867', 'Saad', 6, 3, 'v6.jpg'),
(7, 'A165454', 'T446612', 'Wawa', 7, 3, 'v7.jpg'),
(8, 'A162121', 'E124533', 'Azzarrah', 8, 3, 'v8.jpg'),
(9, 'A161811', 'Y65784', 'Afifa', 9, 3, 'v9.jpg'),
(10, 'A163211', 'R567890', 'Syafiqah', 10, 3, 'v10.jpg'),
(11, 'A168923', 'D33245', 'Razita', 11, 3, 'v11.jpg'),
(12, 'A164567', 'W2345', 'Sofea', 12, 3, 'v12.jpg'),
(13, 'A161234', 'B44325', 'Najihah', 1, 2, 'v13.jpg'),
(14, 'A167890', 'ABCD123', 'nana', 2, 2, 'v14.jpg'),
(15, 'A168787', 'J66472', 'Shahirah', 3, 2, 'v15.jpg'),
(16, 'A164343', 'F447789', 'Annisa', 4, 2, 'v16.jpg'),
(17, 'A169034', 'Y65472', 'Annisha', 5, 2, 'v17.jpg'),
(18, 'A164342', 'Q01938', 'Jamal', 6, 2, 'v18.jpg'),
(19, 'A167030', 'R43567', 'Tahir', 7, 2, 'v19.jpg'),
(20, 'A163302', 'B32556', 'Sisi', 8, 2, 'v20.jpg'),
(21, 'A162610', 'G66325', 'Paa', 9, 2, 'v21.jpg'),
(22, 'A168111', 'G44267', 'Im', 10, 2, 'v22.jpg'),
(23, 'A164543', 'U53678', 'Hazirah', 11, 2, 'v23.jpg'),
(24, 'A160111', 'Y53267', 'Ani', 12, 2, 'v24.jpg'),
(25, 'A160001', 'U2345', 'Haz', 1, 1, 'v25.jpg'),
(26, '', 'I86543', '', 0, 1, ''),
(27, '', 'M34567', '', 0, 1, ''),
(28, '', 'X12345', '', 0, 1, ''),
(29, '', 'C244567', '', 0, 1, ''),
(30, '', 'ABCE123', '', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `vid`, `cid`, `pid`) VALUES
(81, 5, 26, 8),
(82, 5, 18, 9),
(83, 5, 19, 9),
(84, 5, 21, 9),
(85, 5, 24, 9),
(86, 6, 26, 8),
(87, 6, 18, 9),
(88, 6, 19, 9),
(89, 7, 26, 8),
(90, 7, 18, 9),
(91, 7, 19, 9),
(92, 7, 22, 9),
(93, 8, 25, 8),
(94, 8, 18, 9),
(95, 8, 19, 9),
(96, 9, 26, 8),
(97, 9, 18, 9),
(98, 9, 19, 9),
(99, 9, 23, 9),
(100, 10, 26, 8),
(101, 10, 18, 9),
(102, 10, 22, 9),
(103, 11, 26, 8),
(104, 11, 18, 9),
(105, 11, 22, 9),
(106, 12, 25, 8),
(107, 12, 26, 8),
(108, 12, 18, 9),
(109, 12, 21, 9),
(110, 12, 23, 9),
(111, 13, 25, 8),
(112, 13, 26, 8),
(113, 13, 18, 9),
(114, 13, 20, 9),
(115, 13, 22, 9),
(116, 14, 26, 8),
(117, 14, 18, 9),
(118, 14, 19, 9),
(119, 14, 24, 9),
(120, 15, 25, 8),
(121, 15, 18, 9),
(122, 16, 25, 8),
(123, 16, 18, 9),
(124, 17, 25, 8),
(125, 17, 18, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
