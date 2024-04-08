-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 02:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saltelnews_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_news`
--

CREATE TABLE `add_news` (
  `n_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_news`
--

INSERT INTO `add_news` (`n_id`, `title`, `category`, `description`, `image`, `date`) VALUES
(3, ' sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. In', 'International', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', '78287402-56834903.jpg', '2004-06-24'),
(4, 'rrrci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis', 'Sports', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex. A good news after all Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', '8304ba79-a073-40ed-b2a0-d10f4f5bdc7c_720_3000_Full.jpg', '2004-07-24'),
(5, 'consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh', 'Educations', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', 'person-holds-a-book-over-a-stack-and-turns-the-page.jpg', '2004-06-24'),
(6, 'primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum ', 'Culture', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', 'Hmong-children-600x409.jpg', '2004-06-24'),
(7, 'dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at fel', 'International', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', '11453680386_21bb129ffb_b.jpg', '2004-06-24'),
(8, ' volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, ', 'Sports', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', '20231005-HIFOOT-57-600x409.jpg', '2004-06-24'),
(9, ' adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue f', 'Educations', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', 'stock-photo-close-up-of-open-laptop-and-pile-of-books.jpeg', '2004-06-24'),
(10, ' tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus', 'Culture', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', 'istockphoto-889234540-612x612.jpg', '2004-06-24'),
(11, 'Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est.', 'International', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', 'Macky-Sall-600x409.jpg', '2004-06-24'),
(12, 'ames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel d', 'Sports', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', '8304ba79-a073-40ed-b2a0-d10f4f5bdc7c_720_3000_Full.jpg', '2004-07-24'),
(13, 'sl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ult', 'Educations', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', 'stock-photo-stack-books-library.jpeg', '2004-07-24'),
(14, 'et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabi', 'Culture', 'Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\n\r\nNullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.\r\n\r\nMauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.\r\n\r\nA good news after all\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.', 'MG_7638-min-600x409@2x.jpg', '2004-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `status`) VALUES
(1, 'admin', '123', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `adversting`
--

CREATE TABLE `adversting` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `approved` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adversting`
--

INSERT INTO `adversting` (`id`, `name`, `email`, `image`, `size`, `website`, `approved`) VALUES
(1, 'nnnnnnnnnnnnn', 'nnnnnnn@gmail.com', 'add.png', '327x83', 'nnnnn', 1),
(2, 'Ishimwe Christian', 'nnnnnnn@gmail.com', '847865fa781448aa2528ae04c8681007.jpg', '1677x236', 'nnnnn', 1),
(3, 'nnnnnnnnnnnnn', 'nnnnnnn@gmail.com', '93199e65150917.5aea4a4f84bfa.png', '362x386', 'nnnnn', 1),
(4, 'nnnnnnnnnnnnn', 'nnnnnnn@gmail.com', '93199e65150917.5aea4a4f84bfa.png', '362x386', 'nnnnn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`) VALUES
(1, 'International', '2004-06-24'),
(2, 'Sports', '2004-06-24'),
(3, 'Educations', '2004-06-24'),
(4, 'Culture', '2004-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `n_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`, `date`, `n_id`) VALUES
(1, 'Ishimwe Christian', 'Wow', '2024-04-06', 7),
(2, 'admin', 'Hey', '2024-04-07', 12);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `likes` int(100) NOT NULL,
  `n_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `likes`, `n_id`) VALUES
(1, 1, 7),
(2, 1, 7),
(3, 1, 12),
(4, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date`) VALUES
(1, 'nnnnnnn@gmail.com', '2004-07-24'),
(2, 'ishimwechris94@gmail.com', '2004-07-24'),
(3, 'ishimwechristi94@gmail.com', '2004-07-24'),
(4, 'ishimwechris94@gmail.com', '2007-04-24'),
(5, 'ishimwechris94@gmail.com', '2007-04-24'),
(6, 'ishimwechristi94@gmail.com', '2007-04-24'),
(7, 'nnnnnnn@gmail.com', '2007-04-24'),
(8, 'nnnnnnn@gmail.com', '2007-04-24'),
(9, 'ishimwechristia94@gmail.com', '2007-04-24'),
(10, 'ishimwechristi94@gmail.com', '2008-04-24'),
(11, 'ishimwechris94@gmail.com', '2008-04-24'),
(12, 'nnnnnnn@gmail.com', '2008-04-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_news`
--
ALTER TABLE `add_news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adversting`
--
ALTER TABLE `adversting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `n_id` (`n_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `n_id` (`n_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_news`
--
ALTER TABLE `add_news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adversting`
--
ALTER TABLE `adversting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
