-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2021 at 01:20 AM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpuson`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(200) NOT NULL,
  `author` varchar(25) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `author`, `keywords`, `title`, `image`, `description`, `category`) VALUES
(11, 'Sri Ratna Dewi', 'hello, easy, english', 'Hello!, Easy English', 'hello.jpg', 'Bahasa Inggris menjadi bahasa yang harus dikuasai oleh seluruh umat manusia karena digunakan secara luas dan diajarkan secara formal di segala institusi pendidikan di dunia ini. Tentu saja, hal ini menjadikan keberadaan buku penunjang berbahasa Inggris menjadi mutlak untuk dimiliki mereka yang sedang belajar bahasa Inggris. Tentu saja di dalam buku ini mencakup segala tata bahasa, kosakata, frase dan percakapan yang akan menunjang keterampilan berbahasa Inggris kita.\r\n\r\nBuku ini hanyalah media pembelajaran, Namun semuanya kembali lagi ke pembaca semua. Mereka yang konsisten dan berencana untuk menguasai bahasa Inggris, pastilah bisa!', 'Edukasi'),
(17, 'Gina S. Noer', 'Rudy, masa, muda', 'Rudy', 'rudy.jpg', 'Ini adalah perjalanan Rudy menjadi B.J Habibie.\r\n\r\nRudy adalah kisah yang disusun dari cerita-cerita B.J. Habibie yang belum diceritakan sebelumnya. Ini adalah kisah tentang perjalanan tumbuh dewasa seorang anak laki-laki dan Indonesia yang masih belia.', 'Biografi'),
(18, 'Tere Liye', 'Tere, Liye, hujan, ', 'Hujan', 'hujan.jpg', 'Tentang persahabatan\r\nTentang cinta\r\nTentang perpisahan\r\nTentang melupakan\r\nTentang hujan', 'Novel'),
(19, 'Yuval Noah Harari', 'sapiens, jared deamond, evolusi', 'Sapiens', 'sapien.jpg', 'SELAMA dua setengah juta tahun, berbagai spesies manusia hidup dan punah di Bumi, sampai akhirnya tersisa satu, Homo sapiens, Manusia Bijaksana, sejak seratusan ribu tahun lalu. Namun spesies ini bisa menyebar ke seluruh dunia dan beranak-pinak hingga berjumlah 7 miliar, dan kini menjadi kekuatan alam yang dapat mengubah kondisi planet. Apa penyebabnya?', 'Sejarah'),
(20, 'Andre Hirata', 'laskar, pelangi, Andre, Hirata', 'Laskar Pelangi', 'laskar.jpg', 'Laskar Pelangi adalah novel pertama karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada tahun 2005. Novel ini bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan.', 'Novel'),
(21, 'Andre Hirata', 'sang pemimpi, Andre , Hirata', 'Sang Pemimpi', 'pemimpi.jpg', 'Sang Pemimpi Baru adalah novel kedua dalam tetralogi Laskar Pelangi karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada Juli 2006. Dalam novel ini, Andrea mengeksplorasi hubungan persahabatannya dengan dua anak yatim piatu, Arai Ichsanul Mahidin dan Jimbron, serta kekuatan mimpi yang dapat membawa Andrea dan Arai melanjutkan studi ke Sorbonne, Paris, Prancis.', 'Novel'),
(29, 'test pengarang', 'keyword', 'test judul', 'code.png', 'deskripsi buku', 'Biografi'),
(30, 'test pengarang 2', 'key', 'test judul 2', '1.png', 'dsdsdsdsds', 'test cat'),
(31, 'test pengarang 3', 'asd', 'test judul 3', 'Untitled-6.jpg', 'desk  ripsi', 'test cat 2'),
(32, 'test pengarang 9', 'worddd', 'test judul 9', 'UII - Biru.png', 'deskrip', 'Edukasi'),
(33, 'test pengarang 99', 'keyyy', 'test judul 99', 'UII - Hitam.png', 'deksripsi buku adalah', 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `bookid` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `bookid`, `ip_add`, `email`) VALUES
(85, 19, '::1', 'user123@email.com'),
(86, 19, '::1', 'user123@email.com'),
(87, 19, '::1', 'user123@email.com'),
(88, 19, '::1', 'user123@email.com'),
(89, 19, '::1', 'user123@email.com'),
(90, 19, '::1', 'user123@email.com'),
(94, 17, '::1', 'user123@email.com'),
(95, 21, '::1', 'user123@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`) VALUES
('Biografi'),
('Edukasi'),
('Novel'),
('Sejarah'),
('test cat'),
('test cat 10'),
('test cat 2'),
('test cat 3'),
('test cat 99');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(200) NOT NULL,
  `cust_ip` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_ip`, `name`, `email`, `password`, `phone`) VALUES
(13, '::1', 'altaganteng', 'alta@gmail.com', 'altaganteng123', 812312312),
(16, '::1', 'alta hazim', 'altz007@mantap.com', 'ganteng123212', 9092038),
(18, '::1', 'Agas Gas', 'agas@yahoo.com', 'agastian', 0),
(19, '::1', 'vasantpns', 'vasantpns@gmail.com', 'vasant123', 694201337),
(20, '::1', 'joko', 'joko@email.com', 'joko12345', 81999);

-- --------------------------------------------------------

--
-- Table structure for table `dipinjam`
--

CREATE TABLE `dipinjam` (
  `pinjamid` int(20) NOT NULL,
  `bookid` int(20) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dipinjam`
--

INSERT INTO `dipinjam` (`pinjamid`, `bookid`, `ip_add`, `email`) VALUES
(24, 18, '::1', 'vasantpns@gmail.com'),
(25, 18, '::1', 'vasantpns@gmail.com'),
(26, 18, '::1', 'vasantpns@gmail.com'),
(27, 18, '::1', 'vasantpns@gmail.com'),
(31, 19, '::1', 'vasantpns@gmail.com'),
(32, 19, '::1', 'vasantpns@gmail.com'),
(33, 19, '::1', 'vasantpns@gmail.com'),
(49, 21, '::1', 'vasantpns@gmail.com'),
(50, 21, '::1', 'vasantpns@gmail.com'),
(51, 21, '::1', 'vasantpns@gmail.com'),
(52, 21, '::1', 'vasantpns@gmail.com'),
(53, 21, '::1', 'vasantpns@gmail.com'),
(54, 21, '::1', 'vasantpns@gmail.com'),
(55, 21, '::1', 'vasantpns@gmail.com'),
(56, 21, '::1', 'vasantpns@gmail.com'),
(57, 21, '::1', 'vasantpns@gmail.com'),
(74, 18, '::1', 'user123@email.com'),
(75, 18, '::1', 'user123@email.com'),
(76, 18, '::1', 'user123@email.com'),
(77, 18, '::1', 'user123@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id_log` int(200) NOT NULL,
  `id_buku` int(200) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `hari` varchar(20) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `banyak` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id_log`, `id_buku`, `email`, `hari`, `jenis`, `banyak`) VALUES
(21, 11, 'vasantpns@gmail.com', '6', 'pinjam', 1),
(22, 17, 'vasantpns@gmail.com', '6', 'pinjam', 2),
(23, 18, 'vasantpns@gmail.com', '6', 'pinjam', 4),
(24, 19, 'vasantpns@gmail.com', '6', 'pinjam', 3),
(25, 20, 'vasantpns@gmail.com', '6', 'pinjam', 10),
(26, 21, 'vasantpns@gmail.com', '6', 'pinjam', 9),
(27, 11, 'vasantpns@gmail.com', '6', 'kembali', 1),
(28, 17, 'vasantpns@gmail.com', '6', 'kembali', 2),
(29, 11, 'vasantpns@gmail.com', '7', 'pinjam', 3),
(30, 20, 'vasantpns@gmail.com', '7', 'pinjam', 2),
(31, 11, 'user123@email.com', '7', 'pinjam', 1),
(32, 20, 'user123@email.com', '7', 'pinjam', 2),
(33, 18, 'user123@email.com', '7', 'pinjam', 4),
(34, 20, 'user123@email.com', '7', 'kembali', 14),
(35, 11, 'user123@email.com', '7', 'kembali', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `dipinjam`
--
ALTER TABLE `dipinjam`
  ADD PRIMARY KEY (`pinjamid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `dipinjam`
--
ALTER TABLE `dipinjam`
  MODIFY `pinjamid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `cat` FOREIGN KEY (`category`) REFERENCES `category` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
