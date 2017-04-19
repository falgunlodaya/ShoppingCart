-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 07:54 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtlevel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `brand_type` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `product_decp` varchar(255) NOT NULL,
  `cost` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_type`, `brand_type`, `upload_file`, `product_decp`, `cost`) VALUES
(1, 'iphone', 'mobile', 'Apple', 'apple.JPG', 'good', 10000),
(2, 'galaxy', 'mobile', 'samsung', '2.jpg', 'nice', 30000),
(3, 'vibe', 'mobile', 'asus', '1.jpg', 'nice', 34006),
(4, 'galaxys1', 'mobile', 'samsung', '1.jpg', 'nice', 18000),
(5, 'zenfone5', 'mobile', 'asus', 'micromax-canvas.jpg', 'excellent', 10000),
(6, 'lenovo note', 'mobile', 'lenovo', 'nokia.jpg', 'excellnt', 12000),
(7, 'iphone5s', 'mobile', 'apple', 'apple.JPG', 'excellent', 50000),
(15, 'nikon', 'camera', 'Nikon', 'cam1.jpg', 'goood', 45000),
(16, 'kodak', 'camera', 'kodak', 'cam2.jpg', 'excellent', 50009),
(17, 'canon', 'camera', 'Samsung', 'cam3.jpg', 'mdkgj', 34546),
(18, 'philips', 'camera', 'panasonic', 'cam4.jpg', 'kofpge', 7895),
(19, 'panasonic', 'camera', 'panasonic', 'cam5.jpg', 'cgtoo', 6785),
(20, 'casusal shirt', 'clothes', 'Levis', 'shirt1.jpg', 'good material with full design', 12000),
(21, 'mens shirt', 'clothes', 'Scullers', 'shirt2.jpg', 'good', 25000),
(22, 'dell inspiration', 'laptop', 'Dell', 'dell1.jpg', 'i3processor 2gb ram\r\nwith graphics card expandable', 35000),
(23, 'dell inspiration 1', 'laptop', 'Dell', 'dell2.jpg', 'i5processor 4gb ram.', 43000),
(24, 'dell inspiration 1', 'laptop', 'Dell', 'dell2.jpg', 'i5processor 4gb ram.', 43000),
(25, 'dell inspiron3545', 'laptop', 'Dell', 'dell3.jpg', '3gb ram \r\ni3 processor\r\nmemory expandable', 30000),
(26, 'dell', 'laptop', 'Dell', 'dell4.jpg', '2gb ram\r\n', 20000),
(27, 'dell2565', 'laptop', 'Dell', 'dell5.jpg', 'good graphic card', 39999),
(28, 'dell gradient', 'laptop', 'Dell', 'dell6.jpg', 'i7processor\r\n4gb ram\r\ngaming card', 46999),
(29, 'dell inspiron3536', 'laptop', 'Dell', 'dell7.jpg', 'pentium processor', 19999),
(30, 'dell inspiron3536', 'laptop', 'Dell', 'dell7.jpg', 'pentium processor', 19999),
(31, 'hp pavilion15', 'laptop', 'Hp', 'hp1.jpg', 'i3processor', 25999),
(32, 'hp pavilion157', 'laptop', 'Hp', 'hp1.jpg', 'i3processor\r\ngaming card', 27000),
(33, 'hp pavilion156', 'laptop', 'Hp', 'hp2.jpg', 'i5 processor\r\n2gb ram', 45000),
(34, 'hp atom', 'laptop', 'Hp', 'hp3.jpg', 'i7 processor\r\ngamin card', 49999),
(35, 'hp atom', 'laptop', 'Hp', 'hp3.jpg', 'i7 processor', 40000),
(36, 'hp 4gen', 'laptop', 'Hp', 'hp4.jpg', 'i3 processor\r\n2gb ram', 36999),
(37, 'hp grand', 'laptop', 'Hp', 'hp5.jpg', 'i5 processor\r\n4gb ram', 49999),
(38, 'samsung notebook', 'laptop', 'Samsung', 'sam1.jpg', 'pentium processor 2gb ram', 27999),
(39, 'sanmsung next gen', 'laptop', 'Samsung', 'sam2.jpg', 'i3processor\r\n2gb ram', 35000),
(40, 'samsung air', 'laptop', 'Samsung', 'sam3.jpg', 'i5 processor\r\ngaming card', 45999),
(41, 'vaio', 'laptop', 'sony', 'sony1.jpg', 'i3 processor\r\n4gb ram', 40000),
(42, 'vaio gen1', 'laptop', 'sony', 'sony2.jpg', 'pentium', 18000),
(43, 'vaio fit', 'laptop', 'sony', 'sony3.jpg', 'i5 processor', 46999),
(44, 'vaio2436', 'laptop', 'sony', 'sony10.jpg', 'i7 processor\r\ngaming card', 51000),
(45, 'full shleves', 'clothes', 'Scullers', 'shirt3.jpg', 'slim fit', 5000),
(46, 'casusal wear', 'clothes', 'wrangler', 'shirt4.jpg', 'slim fit 2 shaded', 34999),
(47, 'party wear', 'clothes', 'PeterEngland', 'shirt5.jpg', 'excellent fiber\r\nsoft quality\r\n', 3500),
(48, 'club wear', 'clothes', 'Levis', 'shirt6.jpg', 'regular fit', 13999),
(49, 'denim jeans', 'clothes', 'Levis', 'jen1.jpg', 'slim fit', 2000),
(50, 'blue denim', 'clothes', 'wrangler', 'jen2.jpg', 'regular fit', 1500),
(51, 'blue denim', 'clothes', 'wrangler', 'jen2.jpg', 'regular fit', 1500),
(52, 'denim', 'clothes', 'Scullers', 'denim1.jpg', 'skinny fit', 10000),
(53, 'jeans', 'clothes', 'PeterEngland', 'jen3.jpg', 'slim fit\r\nwash', 12999),
(54, 'black panther', 'clothes', 'wrangler', 'jen4.jpg', 'slim fit', 15999),
(55, 'monkey wash', 'clothes', 'Scullers', 'jen5.jpg', 'regularfit', 5999),
(56, 'denim shades', 'clothes', 'Scullers', 'jen6.jpg', 'pack of3\r\nreguarfit', 16999),
(58, 'casusal', 'clothes', 'PeterEngland', 'jen7.jpg', 'skinny fit', 13999),
(64, 'samsung1452', 'camera', 'Samsung', 'cam6.jpg', '20mg pix\r\ncoated lens', 25000),
(65, 'dslr', 'camera', 'kodak', 'cam7.jpg', '14mg pix', 30000),
(66, 'Dslr 25', 'camera', 'panasonic', 'cam8.jpg', '25 mg pix \r\n', 40000),
(67, 'unix 15', 'camera', 'Nikon', 'cam9.jpg', '15 mg pix ', 29999),
(68, 'nix', 'camera', 'Samsung', 'cam10.jpg', '12 pixel', 18999),
(69, 'cd cam', 'camera', 'kodak', 'cam11.jpg', '13 pix', 14999),
(70, 'dslr2', 'camera', 'panasonic', 'cam12.jpg', '30 mega pixel', 39999),
(71, 'samsung gen 2', 'camera', 'Samsung', 'cam13.jpg', '20 mg pix \r\nwith image transfer at real time ', 45999),
(72, '', 'camera', 'Samsung', '916010046945915.pdf', '<script>alert("hack");</script>', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
