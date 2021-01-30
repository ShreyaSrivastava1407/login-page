-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 05:27 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegamingbuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_image`) VALUES
(23, 'Gaming', 'gaming.jpg'),
(24, 'Hardware', 'hardware.png'),
(25, 'Esports', 'esport.jpg'),
(26, 'Cyberpunk 2077', 'cyberpunk.jpg'),
(28, 'Test 1', '4286702-leonardo-da-vinci-s-vitruvian-man-in-vector.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_category_id` varchar(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `external_link` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `image_credit` varchar(255) NOT NULL DEFAULT 'Internet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `external_link`, `post_tags`, `status`, `image_credit`) VALUES
(24, '24', 'KFC launches game console with built-in chicken warmer', 'bucky', 'Monday 28th of December 2020 02:47:27 PM', 'https://ichef.bbci.co.uk/news/976/cpsprodpb/C6A5/production/_116235805_4d4a1912.jpg', 'Fast food chain KFC is launching a gaming console that warms up chicken.\r\n\r\n\"The chicken chamber will keep its contents hot, ready for consumption during intense gaming sessions,\" KFC said.', 'https://www.bbc.com/news/business-55433318', 'kfc, console, chicken, game', 'offline', 'Internet'),
(25, '26', 'The biggest PC gaming controversies of 2020 test', 'bucky', 'Monday 28th of December 2020 02:48:13 PM', 'https://cdn.mos.cms.futurecdn.net/5Qeip2KxooQRnZpkGWfggd-970-80.jpg.webp', '2020 was an exceptional year, but not much different from any other in terms of the number of videogame controversies we covered. From trouble with streamers to accusations of corporate wrongdoing, 2020 had it all. It even had the bungling of a massive game release, which you don\'t get every year. Cyberpunk 2077\'s launch was even more contentious than Batman: Arkham Knight\'s PC launch—except it was the consoles that got it worse in this case. How times have changed!', 'https://www.pcgamer.com/pc-gaming-controversies-2020/', 'gamer, hardware, mouse', 'online', 'google'),
(26, '25', 'Xbox Games With Gold For January 2021: Dates And Steps To Download Free Xbox Games', 'bucky', 'Monday 28th of December 2020 02:49:33 PM', 'https://img.republicworld.com/republic-prod/stories/promolarge/xxhdpi/n3sckklltf2ei8ya_1609148792.jpeg?tr=w-758,h-433', 'The Xbox Games with Gold lineup for January 2021 has been finally revealed. This means that Xbox Live Gold subscribers will soon be able to download a bunch of gaming titles on their consoles for absolutely free. Microsoft has confirmed that the free Games with Gold will be available for both first-gen Xbox One and the next-gen Xbox Series X / Series S consoles.', 'https://www.republicworld.com/technology-news/gaming/xbox-games-with-gold-for-january-2021-dates-and-steps-to-download-free-xbox-games.html', 'esports, game', 'online', 'Internet'),
(27, '23', 'https://www.geekwire.com/2020/valves-top-steam-titles-2020-say-state-video-games/ Test update', 'bucky', 'Monday 28th of December 2020 02:50:33 PM', 'https://cdn.geekwire.com/wp-content/uploads/2020/12/Doom-Eternal.jpg ', 'Valve Software announced the top 100 best-performing games of the year on its digital storefront Steam. While there aren’t many surprises, it further indicates that in the games industry, the concept of a simple end-of-year breakdown is quickly becoming a historical artifact. Many of the “games of the year” for 2020, especially on Steam, weren’t actually new releases.', 'https://www.geekwire.com/2020/valves-top-steam-titles-2020-say-state-video-games/', 'valve, steam', 'online', 'Internets'),
(28, '23', 'test', 'bucky', 'Monday 28th of December 2020 04:23:47 PM', '', 'test', '', '', 'offline', 'Internet'),
(29, '23', 'Test 22', 'fog', 'Thursday 7th of January 2021 04:06:43 PM', 'https://gamespot1.cbsistatic.com/uploads/screen_kubrick/123/1239113/3320903-thumb.jpg', 'nigga', 'https://gamespot1.cbsistatic.com/uploads/screen_kubrick/123/1239113/3320903-thumb.jpg', 'gaming, hardware, girls', 'online', 'ndtvs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `biography` text DEFAULT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_email`, `biography`, `user_role`) VALUES
(17, 'prashant', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Prashant', 'prashant@gmail.com', '', 'user'),
(18, 'bucky', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Bucky', 'bucky@gmail.com', '', 'admin'),
(19, 'mohan', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Mohan', 'mohan@gmail.com', '', 'admin'),
(20, 'sara', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Sara', 'sara@gmaik.com', '', 'user'),
(21, 'naman', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Naman', 'naman@gmail.com', '', 'user'),
(22, 'montu', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Montu', 'montu@gmail.com', '', 'user'),
(23, 'tera__pra', 'a0f44f40ff816288c55d9a1e755b9575b040c7a991fd3d4b5725befdcd9f47639b8e91d92b4559b7fdadb970f66599d68508fb04dba697145577bdfe4547014f', 'Prashant', 'prashantji@gmail.com', '', 'user'),
(24, 'fog', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Dog', 'fog@gmail.com', '  n kj ,', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
