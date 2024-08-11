-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 02:33 PM
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
-- Database: `dbrepairo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_data`
--

CREATE TABLE `blog_data` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `postby` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(200) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_data`
--

INSERT INTO `blog_data` (`id`, `heading`, `postby`, `description`, `filename`, `curdate`) VALUES
(8, 'How To Customize A Used Car', 'Ishan Dhingra', 'As you’ve probably noticed, the trend of buying used cars is on the rise. In fact, it’s booming. Why? Because it makes sense. You save a considerable amount of cash, dodge the steep depreciation that new cars face, and get to choose from a broader range of options. But there’s a common challenge that comes with owning a used car. It’s this nagging desire to inject a touch of your personality into the vehicle, to make it truly ‘yours.’\r\n\r\nMany used car owners grapple with this. They yearn to customize their cars but are clueless about where to start or what to do. If you’re in this predicament, don’t sweat it. This article will walk you through five proven tips to help you customize your used car, reflecting your unique style. So buckle up, and dive right in!\r\n\r\nCustomizing a car may seem like a fun DIY project, but professional customizers are often necessary. They have the skills and tools needed to safely and effectively modify your vehicle. Their expertise ensures each customization, from paint jobs to performance upgrades, is done correctly, avoiding potential damages. \r\n\r\nPlus, professionals stay updated with regulations, preventing legal issues related to certain modifications. They can also provide valuable advice on maintaining your car’s new features. So, for a successful, hassle-free customization experience, it’s worth turning to the pros, for which you may want to visit https://www.sterlingcars.co.nz/ or similar reliable sites. You’ll enjoy a personalized car without the stress of handling tricky modifications yourself.\r\n\r\nBefore you jump into customizing your car, it’s crucial to decide on a style or theme. Think of it as a roadmap guiding your customization journey. You wouldn’t start a road trip without a destination in mind, would you? The same principle applies here. A clear, coherent theme will help you avoid a hodgepodge of unrelated modifications that may end up looking odd.\r\n\r\nBut how do you choose a style that fits you? Reflect on your personality and preferences. Are you a classic and vintage lover? A retro-themed car could be your go-to. More into the sleek and modern look? Then a futuristic theme would hit the spot. Remember, it’s your car, and it should mirror who you are.\r\n\r\nFor inspiration, some popular themes include the race-inspired look, off-road style, luxury-focused, or minimalist approach. Keep in mind; there’s no wrong choice here. The key is to select a theme that resonates with you and stick with it. In the end, your car will not only be a means of transportation but also an expression of your unique personality.', 'AdobeStock_619247421_Editorial_Use_Only-1536x1024.jpeg', '2023-07-30'),
(13, 'Car Interior Modification Guide: Simple Additions ', 'S.Sriram', 'Car companies nowadays put in a lot of thought and R&D resources into the interior design of their products. It is safe to say that they have certainly come a long way from their earlier rudimentary designs. Now, they are loaded with a lot of equipment and comfort elements that definitively amplify your driving experience. However, the scope of putting in additional aftermarket items is still almost infinite. So, in this article, we will address the topic of car interior modification and list out some really useful aftermarket elements that will definitely spruce up your car from the inside.Let’s start our car interior modification guide with the part that covers more than 70% of your car interiors. Your car’s seats are probably the most important components once you step into your car. Almost all of the common sub-C-segment cars get fabric upholstery. Although they are designed very meticulously now, there is no denying that they lack the premium feel. To fix this, you can opt to install aftermarket seat covers to get that plush sensation. Aftermarket seat covers come in a variety of materials, colours, and prices. The affordable ones are usually made of PU leather which is most common amongst consumers. You can even opt for full genuine leather covers but they will be quite expensive in comparison. Be sure to choose wisely to ensure the seat covers gel with the overall looks of the car and don’t look odd.Similar to seats, carmakers are now also giving an emphasis to the steering wheel design as it plays a key role in the interior aesthetics of a car. Similar to the seats, the steering wheel can also be incorporated with aftermarket covers made of a variety of materials. Naturally, even here the genuine leather option will set you back by the most. Apart from just boosting the aesthetic value, steering wheel covers also add to the comfort and grip factor as well. Hence be sure to choose the kind which doesn’t make your hand slip from the wheel when you are driving. Also, try to use a similar colour theme as your seat upholstery for a coordinated appearance.', 'cars24-car-interior-modification-guide-feature-1.png', '2023-07-31'),
(14, 'Swift Car Modified', 'Team Repairo', 'While this Maruti Swift car has been modified into something much louder, who are we to complain if it makes the owner happy? This hatchback features white highlights around its radiator grille, lower bumper and even has a skid plate. The Suzuki logo receives red paint. The roof spoiler and the tailgate also boast white accents to complement the once on the front. A major highlight is the ’38’ sticker. In all probability, the owner has put this sticker as 38 could be his lucky number.', 'swift-car-modified-best-images-4.jpg', '2023-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `model` int(11) NOT NULL,
  `message` text NOT NULL,
  `curdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `carname`, `model`, `message`, `curdate`) VALUES
(5, 'arshdeep', 'sandhuarshdeep848@gmail.com', 9056813099, 'TATA, INDICA', 2003, 'LINEMENT AND PAINT', '2023-07-21 11:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `username`, `password`) VALUES
(1, 'admin', '999');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `curdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `curdate`) VALUES
(10, 'Admin', 'This is to check the working of the database', '2023-07-24 21:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`) VALUES
(37, '16f5d4296c2e3ce48a26a70fd45ec790 (1).jpg'),
(38, 'maxresdefault (1) (1).jpg'),
(39, 'Modified-Marut-Swift-Bagged-3-76.jpg'),
(40, 'OIP (1) (1).jpg'),
(41, 'OIP (2) (1).jpg'),
(42, 'R (2) (1).jpg'),
(43, 'Untitled-1 (1).jpg'),
(44, 'OIP.jpg'),
(45, 'maxresdefault.jpg'),
(46, 'Best car custom interior design 1.jpg'),
(47, '457872.jpg'),
(48, 'maruti-suzuki-swift-valvetronic-exhaust.jpg'),
(49, 'Modified-Suzuki-Swift5-1021x574.jpg'),
(50, 'mahindra-thar-adventures-series.jpg'),
(51, 'modified-Mahindra-Thar-off-road.jpg'),
(52, 'new indian cars 3.jpg'),
(53, 'R (1).jpg'),
(54, 'R.jpg'),
(55, 'Ford-Fiesta-Side.jpg'),
(56, 'Honda-Amaze-Front-scaled.jpg'),
(57, 'Screenshot 2023-07-20 214636.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `curdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `email`, `curdate`) VALUES
(4, 'ishandh987@gmail.com', '2023-09-22 10:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `filename`) VALUES
(8, 'crysta-lounge.mp4'),
(9, 'Untitled video - Made with Clipchamp (3).mp4'),
(10, 'Untitled video - Made with Clipchamp (2).mp4'),
(11, 'Untitled video - Made with Clipchamp (1).mp4'),
(12, 'Untitled video - Made with Clipchamp.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_data`
--
ALTER TABLE `blog_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_data`
--
ALTER TABLE `blog_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
