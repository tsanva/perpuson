-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 09:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
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
  `price` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(25) NOT NULL,
  `stok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `author`, `keywords`, `title`, `price`, `image`, `description`, `category`, `stok`) VALUES
(11, 'Sri Ratna Dewi', 'hello, easy, english', 'Hello!, Easy English', 400, 'hello.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Since its original publication in 1936,&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Gone With the Wind</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&mdash;winner of the Pulitzer Prize and one of the bestselling novels of all time&mdash;has been heralded by readers everywhere as The Great American Novel.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Widely considered The Great American Novel, and often remembered for its epic film version,&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Gone With the Wind</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;explores the depth of human passions with an intensity as bold as its setting in the red hills of Georgia. A superb piece of storytelling, it vividly depicts the drama of the Civil War and Reconstruction.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">This is the tale of Scarlett O&rsquo;Hara, the spoiled, manipulative daughter of a wealthy plantation owner, who arrives at young womanhood just in time to see the Civil War forever change her way of life. A sweeping story of tangled passion and courage, in the pages of&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Gone With the Wind</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">, Margaret Mitchell brings to life the unforgettable characters that have captured readers for over seventy years.</span></p>', 'Edukasi', 7),
(17, 'Gina S. Noer', 'Rudy, masa, muda', 'Rudy', 320, 'rudy.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Soon to be a major motion picture&mdash;Stephen King&rsquo;s terrifying, classic #1&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">New York Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;bestseller, &ldquo;a landmark in American literature&rdquo; (</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Chicago Sun-Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">)&mdash;about seven adults who return to their hometown to confront a nightmare they had first stumbled on as teenagers&hellip;an evil without a name:&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Welcome to Derry, Maine. It&rsquo;s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">They were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness. But the promise they made twenty-eight years ago calls them reunite in the same place where, as teenagers, they battled an evil creature that preyed on the city&rsquo;s children. Now, children are being murdered again and their repressed memories of that terrifying summer return as they prepare to once again battle the monster lurking in Derry&rsquo;s sewers.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Readers of Stephen King know that Derry, Maine, is a place with a deep, dark hold on the author. It reappears in many of his books, including&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Bag of Bones</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">,&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Hearts in Atlantis</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">, and&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">11/22/63</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">. But it all starts with&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&ldquo;Stephen King&rsquo;s most mature work&rdquo; (</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">St. Petersburg Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">), &ldquo;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It&nbsp;</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">will overwhelm you&hellip; to be read in a well-lit room only&rdquo; (</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Los Angeles Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">).</span></p>', 'Biografi', 3),
(18, 'Tere Liye', 'Tere, Liye, hujan, ', 'Hujan', 250, 'hujan.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">When literature student Anastasia Steele goes to interview young entrepreneur Christian Grey, she encounters a man who is beautiful, brilliant, and intimidating. The unworldly, innocent Ana is startled to realize she wants this man and, despite his enigmatic reserve, finds she is desperate to get close to him. Unable to resist Ana&rsquo;s quiet beauty, wit, and independent spirit, Grey admits he wants her, too&mdash;but on his own terms.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Shocked yet thrilled by Grey&rsquo;s singular erotic tastes, Ana hesitates. For all the trappings of success&mdash;his multinational businesses, his vast wealth, his loving family&mdash;Grey is a man tormented by demons and consumed by the need to control. When the couple embarks on a daring, passionately physical affair, Ana discovers Christian Grey&rsquo;s secrets and explores her own dark desires.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">This book is intended for mature audiences.</span></p>', 'Novel', 5),
(20, 'Andre Hirata', 'laskar, pelangi, Andre, Hirata', 'Laskar Pelangi', 600, 'laskar.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Since his first appearance in&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Beeton&rsquo;s Christmas Annual</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;in 1887, Sir Arthur Conan Doyle&rsquo;s Sherlock Holmes has been one of the most beloved fictional characters ever created. Now, in two paperback volumes, Bantam presents all fifty-six short stories and four novels featuring Conan Doyle&rsquo;s classic hero--a truly complete collection of Sherlock Holmes&rsquo;s adventures in crime!</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Volume I includes the early novel&nbsp;</span><strong style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">A Study in Scarlet</strong><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">, which introduced the eccentric genius of Sherlock Holmes to the world. This baffling murder mystery, with the cryptic word Rache written in blood, first brought Holmes together with Dr. John Watson. Next,&nbsp;</span><strong style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">The Sign of Four</strong><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;presents Holmes&rsquo;s famous &ldquo;seven percent solution&rdquo; and the strange puzzle of Mary Morstan in the quintessential locked-room mystery.&nbsp;</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Also included are Holmes&rsquo;s feats of extraordinary detection in such famous cases as the chilling&nbsp;</span><strong style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&ldquo; The Adventure of the Speckled Band,&rdquo;</strong><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;the baffling riddle of&nbsp;</span><strong style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&ldquo;The Musgrave Ritual,&rdquo;</strong><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;and the ingeniously plotted&nbsp;</span><strong style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&ldquo;The Five Orange Pips,&rdquo;</strong><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;tales that bring to life a Victorian England of horse-drawn cabs, fogs, and the famous lodgings at 221B Baker Street, where Sherlock Holmes earned his undisputed reputation as the greatest fictional detective of all time.</span></p>', 'Novel', 1),
(21, 'Andre Hirata', 'sang pemimpi, Andre , Hirata', 'Sang Pemimpi', 460, 'pemimpi.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Based on an original new story by J.K. Rowling, John Tiffany and Jack Thorne, a new play by Jack Thorne, Harry Potter and the Cursed Child is the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play received its world premiere in London&rsquo;s West End on 30th July 2016.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It was always difficult being Harry Potter and it isn&rsquo;t much easier now that he is an overworked employee of the Ministry of Magic, a husband and father of three school-age children.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes, darkness comes from unexpected places.</span></p>', 'Novel', 2),
(29, 'Jaka Tumuruna', 'jaka, tumuruna, Bara, Bere', 'Bara Bere Asix', 0, 'Screenshot (8).png', '', 'Horror', 2),
(30, 'Agass', 'assaa', 'Jarwo', 2000, 'Screenshot (8).png', 'sdadassd', 'Biografi', 1),
(31, 'Adi Haryadong', 'buku, cari, cewe', 'Cara Mencari Pasangan', 0, 'Screenshot (8).png', 'Cara mencari  pasangan yang bisa diajak ', 'Novel', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `bookid` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('Drama'),
('Edukasi'),
('Horror'),
('Novel'),
('Sejarah');

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
(11, '::1', 'priyesh patel', 'safal.priyesh@gmail.com', '12341234', 9757104581),
(12, '::1', 'Krish Parekh', 'kp@gmail.com', '10101010', 9898989863),
(13, '::1', 'altaganteng', 'alta@gmail.com', 'altaganteng123', 812312312),
(14, '::1', 'Agaskon', 'altz@yahoo.com', 'test123', 81238837),
(16, '::1', 'alta hazim', 'altz007@mantap.com', 'ganteng123212', 9092038),
(17, '::1', 'Adi Haryadong', 'adi@yahoo.com', 'adingentot', 0),
(18, '::1', 'Agas Gas', 'agas@yahoo.com', 'agastian', 0),
(20, '::1', 'altahazim', 'alta@gmail.com', 'mantap333', 812312312);

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
  ADD UNIQUE KEY `bookid_2` (`bookid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `cat` FOREIGN KEY (`category`) REFERENCES `category` (`name`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `bfk` FOREIGN KEY (`bookid`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
