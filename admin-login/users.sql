-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btr_jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `user_image` text DEFAULT NULL,
  `user_type` varchar(200) DEFAULT 'USER',
  `added_date` date DEFAULT NULL,
  `added_time` time DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 inactive, 1 active, 2 banned, 3 left'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `surname`, `phone`, `user_image`, `user_type`, `added_date`, `added_time`, `status`) VALUES
(1, 'admin', 'founder@smartbtr.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'SmartBTR', 'Private Limited', '9785475845', 'images/users/will.jpg', 'ADMIN', '2021-09-06', '06:00:00', 1),
(12, 'pranjal', 'pranjal12roy@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'Pranjal', 'Brahma Ray', '7845858695', 'images/users/23d2a193fdb4325138aac065606216aea.jpg', 'STAFF', '2023-09-26', '14:46:17', 3),
(18, 'willson', 'willsonmarandi@gmail.com', 'bda313b4b93429d66ae54bca49f47822f4cffc7f16c461a40893d9b9a60b382679c1079f1746b9522c7b6e74829967fb6af854ce4436b22f7da1c6bdb398404f', 'Willson ', 'Marandi', '8472868183', 'images/users/75b6ac15e7ea1f350b27299f35367c7cLogo.png', 'ADMIN', '2023-11-30', '13:16:38', 2),
(53, 'rsr@gmail.com', 'rr@gmail.com', '8518d04a7c810abe936747addd85db19d8ea3b1ea20b35a9b6a384cd0e38af3b44b72d3d94facbd18d94f78379a4201ec3bf232e984b560bac561b4852fb19c1', 'sda', 'sdcfzd', '9586213457', 'images/users/73db9f388048314cfc352bc8e1d3bd05capsArgo.jpg', 'STAFF', '2024-01-24', '13:36:24', 1),
(60, 'User@gmail.com', 'User@gmail.com', '8518d04a7c810abe936747addd85db19d8ea3b1ea20b35a9b6a384cd0e38af3b44b72d3d94facbd18d94f78379a4201ec3bf232e984b560bac561b4852fb19c1', 'sdfcs', 'sdf', '9586213457', 'images/users/679d2c3a17f8ebe558aaaaf0f4106c81emptyimg.jpg', 'STAFF', '2024-01-25', '10:57:46', 1),
(70, 'newUser@gmail.com', 'newUser@gmail.com', '8518d04a7c810abe936747addd85db19d8ea3b1ea20b35a9b6a384cd0e38af3b44b72d3d94facbd18d94f78379a4201ec3bf232e984b560bac561b4852fb19c1', 'new UserUp', 'newUP', '9586213457', 'images/users/ed9ef48dedb0c91f0b45320483a0650csn.jpg', 'STAFF', '2024-02-12', '11:15:40', 1),
(78, 'bk@gmail.com', 'bk@gmail.com', '99a374175c006988d52a37520b54d36b81f1c3045280f24e9193f5a9367efb9cb4b86710e8d83cb6127760c51633a87bbaa8ce58bce036fd45de3ae8c736f7b3', 'sadsa', 'ujmh', '9586213457', '../images/users/670cf059f733044a0f45b982d5a770d3cityLiveBroadcast.PNG', 'COUNSELLOR', '2024-02-17', '16:59:29', 3),
(79, 'hg@gmail.com', 'hg@gmail.com', '8518d04a7c810abe936747addd85db19d8ea3b1ea20b35a9b6a384cd0e38af3b44b72d3d94facbd18d94f78379a4201ec3bf232e984b560bac561b4852fb19c1', 'sadsa up', 'gh', '9586213457', '../images/users/3badf2a6b6c86dd730cc5889d4e71d2cAboutChc.PNG', 'COUNSELLOR', '2024-02-17', '17:01:48', 0),
(80, 'client@gmail.com', 'email@gamail.com', '42fb04dbd0cb6f203425b594aa650d76c6475f8ef1c5a57adf0bd7e0252b134f56278e2cf8a649c4a7db96605b21cb0a8b3c542004341580c633eba1aff129a8', 'stt', 'stt', '9586213457', '../images/users/24b2997e84a266ae925354cb64f107f003 (2).jpg', 'ADMIN', '2024-02-19', '12:55:40', 0),
(85, 'jk@gmail.com', 'jk@gmail.com', '8518d04a7c810abe936747addd85db19d8ea3b1ea20b35a9b6a384cd0e38af3b44b72d3d94facbd18d94f78379a4201ec3bf232e984b560bac561b4852fb19c1', 'fghfhn', 'dghdf', '9562875624', 'images/users/2b066831bf10321cad11962f15e552a8cm.jpg', 'ADMIN', '2024-02-20', '13:41:34', 0),
(87, 'f@gmail.com', 'f@gmail.com', '8518d04a7c810abe936747addd85db19d8ea3b1ea20b35a9b6a384cd0e38af3b44b72d3d94facbd18d94f78379a4201ec3bf232e984b560bac561b4852fb19c1', 'sdf uip', 'sdfgv up', '9562875624', 'images/users/0127f86a1a0a246f42a4c18954ee2f0echurchMembers.jpg', 'COUNSELLOR', '2024-02-20', '13:50:50', 2),
(92, 'kjg@gmail.com', 'kjg@gmail.com', '8518d04a7c810abe936747addd85db19d8ea3b1ea20b35a9b6a384cd0e38af3b44b72d3d94facbd18d94f78379a4201ec3bf232e984b560bac561b4852fb19c1', 'counsellor', 'last', '9562875624', 'images/users/54c6d1f6baf79ab5b111212834322620the-parish-church-of-saint-mary-the-virgin-in-petworth-west-sussex-uk-W89F9R.jpg', 'COUNSELLOR', '2024-02-21', '11:01:02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
