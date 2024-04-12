-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2024 at 12:19 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chrislaw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comments`, `created_date`) VALUES
(1, 'kola', 'ade@gamil.com', 'nbklj;lk;\r\n', '2024-03-25 12:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `reci_cat`
--

DROP TABLE IF EXISTS `reci_cat`;
CREATE TABLE IF NOT EXISTS `reci_cat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `recipe_cat` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reci_cat`
--

INSERT INTO `reci_cat` (`id`, `recipe_cat`) VALUES
(1, 'Season'),
(2, 'Ingredients'),
(3, 'Diets'),
(6, 'class'),
(10, 'Abuja'),
(11, 'Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `reci_comment`
--

DROP TABLE IF EXISTS `reci_comment`;
CREATE TABLE IF NOT EXISTS `reci_comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reci_id` int NOT NULL,
  `comment` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reci_id` (`reci_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reci_comment`
--

INSERT INTO `reci_comment` (`id`, `reci_id`, `comment`) VALUES
(1, 1, 'i love carrot salad recipe'),
(2, 1, 'the recipe is always delicious'),
(3, 1, 'this particular recipe is superp');

-- --------------------------------------------------------

--
-- Table structure for table `reci_list`
--

DROP TABLE IF EXISTS `reci_list`;
CREATE TABLE IF NOT EXISTS `reci_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `recipe_cat` varchar(200) NOT NULL,
  `user_id` int NOT NULL,
  `recipe_name` varchar(200) NOT NULL,
  `recipe_img` varchar(200) NOT NULL,
  `ingredient` varchar(200) NOT NULL,
  `instruction` varchar(200) NOT NULL,
  `portion` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reci_list`
--

INSERT INTO `reci_list` (`id`, `recipe_cat`, `user_id`, `recipe_name`, `recipe_img`, `ingredient`, `instruction`, `portion`, `created_date`) VALUES
(1, 'Ingredients', 2, 'Carrot Salad', 'salad.png', '<br>•	35g golden sultanas\n<br>•	3 tbsp vegetable oil\n<br>•	6 medium carrots (about 450g ), shredded on a box grater or mandolin\n<br>•	35g golden sultanas\n<br>•	65ml rice wine vinegar\n<br>•	25g mi', '<br>1.	Put the carrots in a large bowl, and cover with cold water. Set it aside for 30 minutes. Drain and return to the bowl.\n<br>2.	Meanwhile, in a medium bowl, cover the sultanas with hot tap ', '4 People Estimated Cooking time 60 minutes', '2024-03-25 14:16:47'),
(3, 'Diets', 1, 'BAKED PESTO CHICKEN', 'pesto.jpg', '\r\n<br>•	1⁄2 boneless skinless chicken breast halves\r\n<br>•	2 -3 cup refrigerated basil pesto\r\n<br>•	1⁄2 plum tomatoes, sliced (optional)\r\n<br>•	1⁄2 cup mozzarella cheese, shredded', '<br>1.	Preheat oven to 400 degrees F.\r\n<br>2.	Line baking sheet with heavy-duty foil.\r\n<br>3.	Place chicken and pesto in medium bowl; toss to coat.\r\n<br>4.	Place chicken on prepared baking sheet.\r\n<br', '4 People     Estimated cooking time 35mins', '2024-03-26 13:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `role`, `created`) VALUES
(1, 'kola@gmail.com', 'kola', '123456', 'admin', '2024-03-16 16:03:05'),
(2, 'ade@gmail.com', 'ola', '123456', 'chef', '2024-03-16 16:31:19'),
(3, 'wale@gmail.com', 'wale tunde', '123456', 'admin', '2024-03-16 21:52:19');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reci_comment`
--
ALTER TABLE `reci_comment`
  ADD CONSTRAINT `reci_comment_ibfk_1` FOREIGN KEY (`reci_id`) REFERENCES `reci_list` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `reci_list`
--
ALTER TABLE `reci_list`
  ADD CONSTRAINT `reci_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
