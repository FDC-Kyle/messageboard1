-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 11:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `recipient` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `time_sent` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `recipient_id`, `recipient`, `message`, `time_sent`) VALUES
(28, 11, 11, '', 'test send message to dennis', '2023-11-09 09:18:16'),
(29, 11, 98, '', 'test send message to dennis', '2023-11-09 09:22:06'),
(30, 11, 98, '', 'test send message to dennis', '2023-11-09 09:34:04'),
(31, 11, 98, '', 'test send message to dennis', '2023-11-09 09:34:24'),
(32, 11, 11, '', 'test send message to dennis23', '2023-11-10 04:44:00'),
(33, 11, 11, '', '1234', '2023-11-10 05:03:05'),
(34, 98, 11, '', 'hhjjkjk', '2023-11-10 05:31:14'),
(35, 11, 98, '', '1234', '2023-11-10 05:32:20'),
(36, 11, 11, '', 'test send message to test2', '2023-11-10 05:34:07'),
(37, 98, 11, '', 'test send message to mark', '2023-11-10 05:34:38'),
(38, 11, 107, '', 'test send message to dennis', '2023-11-10 05:35:59'),
(40, 98, 107, '', 'tste', '2023-11-10 07:59:22'),
(41, 98, 107, '', 'test', '2023-11-10 08:02:35'),
(42, 11, 107, '', 'test', '2023-11-10 08:11:08'),
(43, 98, 107, '', 'test', '2023-11-10 08:20:17'),
(44, 11, 107, '', 'test', '2023-11-10 08:30:43'),
(45, 11, 107, '', 'test', '2023-11-10 09:19:19'),
(46, 98, 107, '', 'test2323', '2023-11-10 09:21:00'),
(47, 98, 107, '', 'test2323', '2023-11-10 09:21:01'),
(48, 98, 107, '', 'testmaoni', '2023-11-10 09:21:44'),
(49, 11, 107, '', '3232', '2023-11-10 09:22:06'),
(50, 11, 107, '', 'test232323', '2023-11-10 09:24:14'),
(51, 11, 107, '', 'test232323', '2023-11-10 09:24:29'),
(52, 11, 107, '', 'test2323232222', '2023-11-10 09:24:34'),
(53, 11, 107, '', 'test2323232222', '2023-11-10 09:24:35'),
(54, 11, 107, '', 'test2323232222', '2023-11-10 09:24:35'),
(55, 11, 107, '', 'test2323232222', '2023-11-10 09:24:35'),
(56, 98, 107, '', 'test2323232222', '2023-11-10 09:24:38'),
(57, 98, 107, '', 'test2323232222', '2023-11-10 09:24:38'),
(58, 98, 107, '', 'test2323232222', '2023-11-10 09:24:39'),
(59, 11, 107, '', 'testmaoni', '2023-11-10 09:24:42'),
(60, 11, 107, '', 'testmaoni', '2023-11-10 09:24:42'),
(61, 11, 107, '', 'testmaoni', '2023-11-10 09:25:05'),
(62, 11, 107, '', 'qwerty', '2023-11-10 09:25:12'),
(63, 11, 107, '', 'qwerty', '2023-11-10 09:25:13'),
(64, 11, 107, '', 'qwerty', '2023-11-10 09:25:13'),
(65, 11, 107, '', 'qwerty', '2023-11-10 09:25:14'),
(66, 11, 107, '', 'qwerty', '2023-11-10 09:25:32'),
(67, 11, 107, '', 'qwerty1', '2023-11-10 09:25:41'),
(68, 11, 107, '', 'qwerty1', '2023-11-10 09:25:47'),
(69, 11, 107, '', 'qwerty12', '2023-11-10 09:26:01'),
(70, 11, 107, '', 'qwerty43', '2023-11-10 09:27:32'),
(71, 11, 107, '', 'qwerty43333', '2023-11-10 09:30:09'),
(72, 11, 107, '', 'qwerty3211', '2023-11-10 09:32:35'),
(73, 11, 107, '', 'qwerty3211222', '2023-11-10 09:32:46'),
(74, 11, 107, '', 'qwerty3211222sds', '2023-11-10 09:36:00'),
(75, 11, 107, '', 'testmaoni', '2023-11-10 09:38:22'),
(76, 11, 107, '', 'testmaoniwewe', '2023-11-10 09:43:07'),
(77, 11, 107, '', 'testmaoniwewe', '2023-11-10 09:43:07'),
(78, 11, 107, '', 'testmaoniwewe', '2023-11-10 09:43:08'),
(79, 11, 107, '', 'testmaoniwewe', '2023-11-10 09:43:08'),
(80, 0, 0, 'dennis23', 'sadsdas', '2023-11-10 09:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(8) NOT NULL,
  `topic_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `topic_id`, `user_id`, `body`, `created`, `modified`) VALUES
(1, 0, 0, 'test post', '2023-11-07 03:46:51', '2023-11-07 03:46:51'),
(2, 0, 0, 'test post', '2023-11-07 03:55:18', '2023-11-07 03:55:18'),
(3, 4, 0, 'This is the post for test1', '2023-11-07 03:56:18', '2023-11-07 03:56:18'),
(4, 4, 0, 'This is the post for test1', '2023-11-07 03:56:24', '2023-11-07 03:56:24'),
(5, 4, 0, '', '2023-11-07 03:56:54', '2023-11-07 03:56:54'),
(6, 4, 0, 'this is the post for topic id 4', '2023-11-07 04:24:30', '2023-11-07 04:24:30'),
(7, 4, 0, 'this is the post for topic id 4', '2023-11-07 04:25:32', '2023-11-07 04:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `title` varchar(100) NOT NULL,
  `visible` tinyint(1) NOT NULL COMMENT '1 for visible 2 for hidden',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `title`, `visible`, `created`, `modified`) VALUES
(2, 0, 'another test1234', 1, '2023-11-07 02:15:32', '2023-11-07 03:02:48'),
(3, 0, 'test1', 1, '2023-11-07 02:18:23', '2023-11-07 02:18:23'),
(4, 0, 'test1', 1, '2023-11-07 02:22:53', '2023-11-07 02:22:53'),
(6, 0, 'another test1234', 1, '2023-11-07 03:25:56', '2023-11-07 03:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birthdate` date NOT NULL,
  `hobby` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `full_name`, `gender`, `birthdate`, `hobby`, `created`, `modified`, `last_login`, `image`) VALUES
(11, 'dennis23', 'test@gmail.com', 'ece7178d250836696d2aa3fbaba386d1ffba5dd3', '1234b32', 1, '2043-05-22', 'I like coding and playing basketball during my free time.3232wew1', '2023-11-07 07:52:30', '2023-11-10 04:00:11', '0000-00-00 00:00:00', 'content-creator.jpg'),
(98, 'Marky', 'mark@gmail.com', 'ece7178d250836696d2aa3fbaba386d1ffba5dd3', '', 0, '0000-00-00', '', '2023-11-09 10:19:10', '2023-11-09 10:19:10', '2023-11-09 17:19:10', ''),
(107, 'michael', 'michael@gmail.com', 'ece7178d250836696d2aa3fbaba386d1ffba5dd3', '', 0, '0000-00-00', '', '2023-11-10 06:35:37', '2023-11-10 06:35:37', '2023-11-10 13:35:37', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
