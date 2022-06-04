-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 12:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `found it`
--

-- --------------------------------------------------------

--
-- Table structure for table `founditems`
--

CREATE TABLE `founditems` (
  `foundID` int(11) NOT NULL,
  `found_name` varchar(30) NOT NULL,
  `found_cat` text NOT NULL,
  `found_desp` varchar(200) NOT NULL,
  `found_city` varchar(30) NOT NULL,
  `found_img` longtext NOT NULL,
  `found_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founditems`
--

INSERT INTO `founditems` (`foundID`, `found_name`, `found_cat`, `found_desp`, `found_city`, `found_img`, `found_user`) VALUES
(5, 'Iphone 8', 'Electronics', 'White Iphone 8 with rainbow cover', 'Tamich', 'founditem61f061a7369bc4.49596539.jpg', 'Gael123'),
(6, 'Green spinner', 'Toys', 'Found it on the road near the church', 'Antelias', 'founditem61f064a7933ec3.01763570.jpeg', 'Chris123'),
(7, 'Science Book', 'Book', 'Found this science book left on the school bench in the playground', 'Zalka', 'founditem61f06711b2fca5.96575039.jfif', 'Karen123'),
(8, 'Wallet', 'Personal Belongings', 'Blue Wallet found with no id card', 'Khenchara', 'founditem61f06a9edc9c99.14622694.jfif', 'vicky123'),
(9, 'Mouse', 'Electronics', 'black hp mouse', 'Sin el fil', 'founditem61f0702947ad47.33145554.jpg', 'pompeo123'),
(10, 'Toyota Car', 'Vehicle', 'Toyota yaris 2010 blue', 'Beirut', 'founditem61f070b53c28e1.69170942.jpg', 'pompeo123'),
(11, 'Earrings', 'Jewellery', 'Pink and silver earrings', 'Rabieh', 'founditem61f0731664df59.18341327.jfif', 'Cathy123'),
(12, 'Backpack', 'Clothing', 'Black nike backpack found at public library', 'Byblos', 'founditem61f07bc47a4d41.90242736.jfif', 'Dimitri123'),
(13, '2 keys', 'Keys', '2 Golden keys found in cinemall Dbayeh', 'Dbayeh', 'founditem61f07e6bd6f0c0.11642112.jfif', 'vicky123'),
(15, 'Lighter', 'Gadgets', 'Golden zippo with brick pattern found at douar resto', 'Douar', 'founditem61f07ecb1d75c8.93751807.jpg', 'Floyd123');

-- --------------------------------------------------------

--
-- Table structure for table `lostitems`
--

CREATE TABLE `lostitems` (
  `lostID` int(11) NOT NULL,
  `lost_name` varchar(30) NOT NULL,
  `item_cat` text NOT NULL,
  `lost_desp` varchar(200) NOT NULL,
  `lost_city` varchar(30) NOT NULL,
  `lost_img` longtext NOT NULL,
  `lost_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lostitems`
--

INSERT INTO `lostitems` (`lostID`, `lost_name`, `item_cat`, `lost_desp`, `lost_city`, `lost_img`, `lost_user`) VALUES
(340, 'Computer Mouse', 'Electronics', 'Black wired HP mouse', 'Sin El Fil', 'lostitem-61f0608213c696.51620453.jpg', 'Gael123'),
(343, 'Hammer', 'Tools', 'Silver hammer with blue handle. Lost it on construction site near burgerking.', 'Dekwaneh', 'lostitem-61f065675eedb8.74196712.jpg', 'Chris123'),
(344, 'Toyota Yaris ', 'Vehicle', 'Someone stole my blue Toyota Yaris 2010 model.\r\nPlease inform me if you spot it!', 'Beirut', 'lostitem-61f066a1989d99.45781903.jpg', 'Karen123'),
(345, 'Pink Earrings', 'Jewellery', 'pink earrings, lost them at plaza event site.', 'Rabieh', 'lostitem-61f06933c97a86.59573644.jfif', 'vicky123'),
(346, 'Blue Jacket', 'Clothing', 'I last wore it at dannys cafe. its a northface puffy jacket', 'Hamra', 'lostitem-61f06fcf5b7f52.53742624.jpg', 'pompeo123'),
(347, 'Spinner', 'Toys', 'green spinner', 'Antelias', 'lostitem-61f0716a20eef0.95442692.jpeg', 'Tommy123'),
(348, 'IPhone 8', 'Electronics', 'White iphone 8 + rainbow cover', 'Tamich', 'lostitem-61f0720a1f28d4.42492592.jpg', 'Cathy123'),
(349, 'Keys', 'Keys', '5 colored keys (purple, blue, green, yellow, red)', 'Bikfaya', 'lostitem-61f072937bda29.97554743.jfif', 'Cathy123'),
(350, 'Hair Comb', 'Other', 'Black Hair Comb', 'Saida', 'lostitem-61f072cf445419.37106885.jpg', 'Cathy123'),
(351, 'Tppuerware', 'Other', '3 Tupperware with blue covers', 'Nabatieh', 'lostitem-61f07b1b243f11.71316856.jfif', 'Leticia123'),
(352, 'HP laptop', 'Electronics', 'Silver HP laptop', 'Dora', 'lostitem-61f07c66ac5a58.91910849.jfif', 'Floyd123'),
(353, 'Monopoly', 'Toys', 'Monopoly game', 'Bsalim', 'lostitem-61f080d20d6ac3.34134043.jfif', 'Lily123'),
(354, 'Red Spinner', 'Toys', 'red spinner', 'Jal el Dib', 'lostitem-61f081094195e6.44152825.jpg', 'Lily123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `isPublished` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `Fname`, `Lname`, `password`, `dob`, `email`, `phone`, `picture`, `city`, `role`, `isPublished`) VALUES
('admin', 'Mario', 'Al Akl', 'admin', '0000-00-00', '', 0, '', '', 1, 1),
('admin1', 'Abdo', 'Saker', 'admin1', '0000-00-00', '', 0, '', '', 1, 1),
('Cathy123', 'Cathy', 'Willson', 'Cathy123', '1989-06-08', 'cathy.will@hotmail.com', 1231244353, 'pic-61f071bd28e2b4.62668558.jfif', 'Saida', 0, 1),
('Chris123', 'Chris', 'Marlowe', 'Chris123', '1966-08-09', 'chris.mar@hotmail.com', 1234567, 'pic-61f0625c9fa268.88992660.jfif', 'Dekwaneh', 0, 1),
('David123', 'David', 'Rockwell', 'David123', '1992-07-08', 'David.rock@hotmail.com', 123443, 'pic-61f07f5f5f3b68.30937713.jfif', 'Antelias', 0, 1),
('Dimitri123', 'Dimitri', 'Vlad', 'Dimitri123', '1959-03-10', 'Dimitri.vlad@hotmail.com', 123443, 'pic-61f07b838eb323.42487552.jfif', 'Byblos', 0, 1),
('Floyd123', 'Floyd', 'Rogers', 'Floyd123', '1995-10-20', 'floyd.r@hotmail.com', 2147483647, 'pic-61f07c324a98f7.00823499.jfif', 'Forn El Chebak', 0, 1),
('Gael123', 'Gael', 'Bermudo', 'Gael123', '1990-06-14', 'Gael.ber@hotmail.com', 1234567, 'pic-61f05f335ba055.82928317.jfif', 'jounieh', 0, 1),
('Karen123', 'Karen', 'Ronja', 'Karen123', '1990-06-22', 'karen.ron@hotmail.com', 123455, 'pic-61f06630810648.81655955.jfif', 'Broumana', 0, 1),
('Leticia123', 'Leticia', 'Smith', 'Leticia123', '1979-03-03', 'leticia.smith@hotmail.com', 12345, 'pic-61f07ad4ed1b50.21288241.jfif', 'Nabatieh', 0, 1),
('Lily123', 'Lily', 'Adams', 'lily123', '2010-06-10', 'lily.adams@hotmail.com', 123434, 'pic-61f0807cd90ad9.16585884.jfif', 'Jal el dib', 0, 1),
('pompeo123', 'Pompeo', 'David', 'pompeo123', '1972-07-06', 'pompeo.dav@hotmail.com', 12334, 'pic-61f06f226c55c4.25125698.jfif', 'Hamra', 0, 1),
('Tommy123', 'Tommy', 'Thomson', 'Tommy123', '2010-02-09', 'tommy.tom@hotmail.com', 1234455545, 'pic-61f0713eceb438.43135558.jpg', 'Antelias', 0, 1),
('vicky123', 'Vicky', 'Elizabeth', 'vicky123', '1996-05-14', 'vicky.lizzie@hotmail.com', 12345678, 'pic-61f068a3eabb90.43578436.jfif', 'Mtayleb', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `founditems`
--
ALTER TABLE `founditems`
  ADD PRIMARY KEY (`foundID`),
  ADD KEY `FK_founduser` (`found_user`);

--
-- Indexes for table `lostitems`
--
ALTER TABLE `lostitems`
  ADD PRIMARY KEY (`lostID`),
  ADD KEY `FK_lostuser` (`lost_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `founditems`
--
ALTER TABLE `founditems`
  MODIFY `foundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lostitems`
--
ALTER TABLE `lostitems`
  MODIFY `lostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `founditems`
--
ALTER TABLE `founditems`
  ADD CONSTRAINT `FK_founduser` FOREIGN KEY (`found_user`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Constraints for table `lostitems`
--
ALTER TABLE `lostitems`
  ADD CONSTRAINT `FK_lostuser` FOREIGN KEY (`lost_user`) REFERENCES `users` (`username`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
