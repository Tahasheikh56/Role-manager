-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 01:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pprice` varchar(50) NOT NULL,
  `pimg` varchar(100) NOT NULL,
  `pdesc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pprice`, `pimg`, `pdesc`) VALUES
(61, 'Suit Beige SF-W23-61', '32990', 'images/SF-W23-61-Beige_360x.png', 'Description: 4 Piece Shirt, Trouser, Dupatta. Product Details Organza fully embroidered long shirt, embroidered sleeves, neckline, straight trousers, and dupatta. Available in two Colors: Coffee, Nude Pink Shirt Fabric: Organza Trouser Fabric: Raw Silk Dupatta Fabric: Organza'),
(63, 'Suit Rust SF-W23-27', '29990', 'images/MBUS23112BFRONT-1_540x.jpg', '3 Piece Shirt with Trouser and Dupatta Product Details Straight shirt with embellished embroidered neckline with embroidered sleeves and border paired with block print embroidered dupatta and straight pants. Available in two Colors: Pink and Rust Shirt Fabric: Organza Zarri Crush Trouser Fabric: Cotton Satin Dupatta Fabric: Organza'),
(64, 'Suit Peach SF-W23-05', '42990', 'images/SF-W23-05-Peach_360x.png', 'Long panelled frock with embroidery all over. Handwork embellished neckline, embroidered sleeves and hem paired with matching crushed lehnga and undershirt. All over embroidered contrast dupatta with embroidered four side border Frock fabric: Organza Lehnga fabric: Cotton satin Dupatta fabric: Organza'),
(65, 'Suit Lime Green SF-W23', '36990', 'images/SF-W23-11-LimeGreen_360x.png', '3 Piece Frock with Trousers and Dupatta Product Details Long angrakha frock with sequin and tilla embroidery on neckline, sleeves, and hem border with matching trousers and block printed contrast dupatta. Available in two colors: Green and magenta Shirt Fabric: Raw silk Trouser Fabric: Raw silk Dupatta Fabric: Organza'),
(66, 'Luxe Fabrics Peach 520', '8725', 'images/LF-520-B-Peach_360x.jpg', 'Pink Poly Net Fabric with Embroidery, Thread, and Sequins.  Fabric: Poly Net Color: Pink'),
(67, 'Fabrics Golden 501', '12475', 'images/LF501_360x.png', 'Gold Zari Net Fabric Embroidered with Gold Tilla and Sequins.  Fabric: Zari Net Color: Gold'),
(68, 'Fabrics Rust LF-512', '9975', 'images/LF-512-Rust_360x.jpg', 'Rust Chiffon Fabric with Traditional Schiffli Embroidery Embellished with Diamantes  Fabric: Chiffon Color: Rust'),
(69, 'MPC-23-102 Teal Blue', '29500', 'images/MPC-23-202_360x.png', 'Embroidered Pure Chiffon Center Panel with Machine Pearl Embroidered Pure Chiffon Side Panel with Machine Pearl Left + Right Embroidered Pure Chiffon Sleeves Pure Chiffon Back Embroidered Raw Silk Applique on Organza Sleeves Patches Embroidered Raw Silk Applique on Organza Ghera Patch Pure Chiffon Dupatta Embroidered Organza Dupatta Patti Raw Silk Undershirt Raw Silk Trouser'),
(70, 'Suit Green MKS-W23', '13490', 'images/MKS-W23-33-Green_360x.png', '3-Piece (Long Shirt with Straight Trousers and Dupatta) Details: A-Line Embroidered Shirt Paired with Trousers and Chiffon Dupatta Available in 2 Colors. (Pink & Green) Shirt Fabric: Zari Organza Bottom Fabric: Satin Dupatta Fabric: Organza'),
(71, 'Suit Black MKD-W23', '10990', 'images/MKDW2307BlackFront_360x.webp', '3-Piece Dyed Embroidered angrakha front, embroidered sleeves paired with dhaka pajama and chiffon dupatta Available in 1 Colour Shirt Fabric: Linen Bottom Fabric: Linen Dupatta Fabric: Chiffon'),
(72, 'Suit Lime Green MKD-34', '9490', 'images/MKD-W23-15-LimeGreen_120x.png', '3-Piece (Frock with shalwar & Dupatta) Details: Embroidered And Printed Frock Paired With Shalwar And Chiffon Dupatta. Available in 1 color. Shirt Fabric: Linen Bottom Fabric: Linen Dupatta Fabric: Chiffon'),
(73, 'Suit Peach MKS-W23', '14490', 'images/MKSW23-36PinkFront_540x.jpg', '3-Piece (Embroidered Choli with Embroidered Lehenga & Dupatta) Details: Embroidered Choli, Embroidered Lehenga, and crushed chiffon dupatta. Available in 3 colors. Choli Fabric: Net Lehenga Fabric: Net Dupatta Fabric: Chiffon'),
(74, 'Suit Beige SF-W23-61', '32990', 'images/SF-W23-61-Beige_360x.png', 'Description: 4 Piece Shirt, Trouser, Dupatta. Product Details Organza fully embroidered long shirt, embroidered sleeves, neckline, straight trousers, and dupatta. Available in two Colors: Coffee, Nude Pink Shirt Fabric: Organza Trouser Fabric: Raw Silk Dupatta Fabric: Organza'),
(75, 'Suit Rust SF-W23-27', '29990', 'images/MBUS23112BFRONT-1_540x.jpg', '3 Piece Shirt with Trouser and Dupatta Product Details Straight shirt with embellished embroidered neckline with embroidered sleeves and border paired with block print embroidered dupatta and straight pants. Available in two Colors: Pink and Rust Shirt Fabric: Organza Zarri Crush Trouser Fabric: Cotton Satin Dupatta Fabric: Organza'),
(76, 'Suit Peach SF-W23-05', '42990', 'images/SF-W23-05-Peach_360x.png', 'Long panelled frock with embroidery all over. Handwork embellished neckline, embroidered sleeves and hem paired with matching crushed lehnga and undershirt. All over embroidered contrast dupatta with embroidered four side border Frock fabric: Organza Lehnga fabric: Cotton satin Dupatta fabric: Organza'),
(77, 'Suit Lime Green SF-W23', '36990', 'images/SF-W23-11-LimeGreen_360x.png', '3 Piece Frock with Trousers and Dupatta Product Details Long angrakha frock with sequin and tilla embroidery on neckline, sleeves, and hem border with matching trousers and block printed contrast dupatta. Available in two colors: Green and magenta Shirt Fabric: Raw silk Trouser Fabric: Raw silk Dupatta Fabric: Organza'),
(78, 'Luxe Fabrics Peach 520', '8725', 'images/LF-520-B-Peach_360x.jpg', 'Pink Poly Net Fabric with Embroidery, Thread, and Sequins.  Fabric: Poly Net Color: Pink'),
(79, 'Fabrics Golden 501', '12475', 'images/LF501_360x.png', 'Gold Zari Net Fabric Embroidered with Gold Tilla and Sequins.  Fabric: Zari Net Color: Gold'),
(80, 'Fabrics Rust LF-512', '9975', 'images/LF-512-Rust_360x.jpg', 'Rust Chiffon Fabric with Traditional Schiffli Embroidery Embellished with Diamantes  Fabric: Chiffon Color: Rust'),
(81, 'MPC-23-102 Teal Blue', '29500', 'images/MPC-23-202_360x.png', 'Embroidered Pure Chiffon Center Panel with Machine Pearl Embroidered Pure Chiffon Side Panel with Machine Pearl Left + Right Embroidered Pure Chiffon Sleeves Pure Chiffon Back Embroidered Raw Silk Applique on Organza Sleeves Patches Embroidered Raw Silk Applique on Organza Ghera Patch Pure Chiffon Dupatta Embroidered Organza Dupatta Patti Raw Silk Undershirt Raw Silk Trouser'),
(82, 'Suit Green MKS-W23', '13490', 'images/MKS-W23-33-Green_360x.png', '3-Piece (Long Shirt with Straight Trousers and Dupatta) Details: A-Line Embroidered Shirt Paired with Trousers and Chiffon Dupatta Available in 2 Colors. (Pink & Green) Shirt Fabric: Zari Organza Bottom Fabric: Satin Dupatta Fabric: Organza'),
(83, 'Suit Black MKD-W23', '10990', 'images/MKDW2307BlackFront_360x.webp', '3-Piece Dyed Embroidered angrakha front, embroidered sleeves paired with dhaka pajama and chiffon dupatta Available in 1 Colour Shirt Fabric: Linen Bottom Fabric: Linen Dupatta Fabric: Chiffon'),
(84, 'Suit Lime Green MKD-34', '9490', 'images/MKD-W23-15-LimeGreen_120x.png', '3-Piece (Frock with shalwar & Dupatta) Details: Embroidered And Printed Frock Paired With Shalwar And Chiffon Dupatta. Available in 1 color. Shirt Fabric: Linen Bottom Fabric: Linen Dupatta Fabric: Chiffon'),
(85, 'Suit Peach MKS-W23', '14490', 'images/MKSW23-36PinkFront_540x.jpg', '3-Piece (Embroidered Choli with Embroidered Lehenga & Dupatta) Details: Embroidered Choli, Embroidered Lehenga, and crushed chiffon dupatta. Available in 3 colors. Choli Fabric: Net Lehenga Fabric: Net Dupatta Fabric: Chiffon');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('Admin','Customer','Employee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'BUTCH', 'butch@gmail.com', '12345', 'Employee'),
(2, 'kHAN', 'khan@gmail.com', '12345', 'Customer'),
(3, 'Ahmed', 'ahmed123@gmail.com', '12345', 'Admin'),
(17, 'Ali', 'ali@123gmail.com', '23456', 'Customer'),
(18, 'Sheikh', 'Sheikh1829@gmail.com', '4444', 'Customer'),
(19, 'Hasan', 'hasan@gmail.com', '1234', 'Customer'),
(20, 'zenu', 'zenu@gmail.com', '123', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sid` int(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `pid`, `user_id`, `date`) VALUES
(4, 9, 73, '2007-07-22 19:00:00'),
(5, 13, 73, '2007-07-23 02:15:29'),
(16, 13, 73, '2023-07-07 07:04:11'),
(17, 8, 49, '2023-07-07 05:34:49'),
(20, 11, 73, '2023-07-29 23:41:00'),
(21, 11, 73, '2023-07-29 23:46:34'),
(22, 8, 73, '2023-07-29 23:47:34'),
(23, 15, 98, '2023-07-29 23:55:17'),
(24, 31, 3, '2023-08-13 03:56:10'),
(25, 30, 1, '2023-08-13 03:58:14'),
(26, 30, 17, '2023-08-13 03:59:14'),
(27, 34, 17, '2023-08-13 04:02:58'),
(28, 27, 17, '2023-08-13 04:03:59'),
(29, 30, 17, '2023-08-13 04:05:07'),
(30, 40, 18, '2023-08-13 06:07:58'),
(31, 34, 19, '2023-11-02 07:41:09'),
(32, 63, 20, '2023-11-02 00:22:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
