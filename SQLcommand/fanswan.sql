-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 03:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fanswan`
--
CREATE DATABASE IF NOT EXISTS `fanswan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fanswan`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `NAME` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `brand` text DEFAULT NULL,
  `model_name` text DEFAULT NULL,
  `screen_size` int(11) DEFAULT NULL,
  `color` text DEFAULT NULL,
  `storge` varchar(20) DEFAULT NULL,
  `cpu_model` varchar(20) DEFAULT NULL,
  `ram` varchar(20) DEFAULT NULL,
  `os` text DEFAULT NULL,
  `special_feature` text DEFAULT NULL,
  `graphics_card` text DEFAULT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Dumping data for table `product`
--

INSERT INTO `products` (`id`, `NAME`, `images`, `price`, `brand`, `model_name`, `screen_size`, `color`, `storge`, `cpu_model`, `ram`, `os`, `special_feature`, `graphics_card`, `about`) VALUES
(0, 'LG gram 16” 2in1 Lightweight Laptop, Intel 13th Gen Core i7 Evo Platform, Windows 11 Home, 16GB RAM, 512GB SSD, Black', ' https://m.media-amazon.com/images/I/81D9knGjZ5L._AC_SL1500_.jpg , https://m.media-amazon.com/images/I/81C0a3UcA-L._AC_SL1500_.jpg ,https://m.media-amazon.com/images/I/81W9pQwXRfL._AC_SL1500_.jpg ', '$817.88', 'LG', '16T90R-K.AAC7U1', 16, 'Black', '512 GB', 'Core i7', '16 GB', 'Windows 11 Home', 'Pen', 'Integrated', '•	13th Gen Intel Core Processor - Powered by Intel’s 13th Gen processor and Intel Iris Xe graphics, this LG gram is engineered to keep users multitasking with ease. You can accomplish those intensive daily demands from crunching numbers, to editing a masterpiece with processor power that will not SLOW you down ./n\r\n• 5200 MHz LPDDR5 RAM - Stay IN the zone WITH 5200 MHz of lightning - QUICK MEMORY you need TO perform AT your very best during BOTH WORK AND play./n \r\n• 16 \" WQXGA Non-Reflective IPS Display With DCI-P3 99% - Expand the realm of what’s possible using a 16” screen with a 16:10 aspect ratio that can make your visions come to life. The non-reflective screen helps maintain your focus and a bold DCI-P3 99% color gamut4 display adds a vivid touch to graphics./n\r\n•	Windows 11 Home - Windows 11 brings you closer to what you love. Pursue your passions and maximize your productivity with the new Windows 11. Built with tools to help you multitask, think, create, and connect—all designed with simplicity and intuition in mind./n\r\n•	Dolby Atmos - Dolby Atmos is a proprietary audio format that brings the same immersive, 360-degree sound you get in a movie theater to your LG gram. Hear and feel more in music and movies through Dolby Atmos and be moved by the immersive surround sound experience./n\r\n•	360-degree Hinge - Transform your gram from laptop to tablet and everything in between with the 360-degree hinge. Whether watching a movie, sharing your screen with others, note taking or on a video call, choose a configuration that works for you./n\r\n•	72Wh Battery - LG grams large 72Wh battery gives you the power you need, wherever and whenever you need it. Work, play, create and watch wherever your hustle takes you./n '),
(1, 'SAMSUNG 14\" Galaxy Book4 Pro Laptop PC Computer, Intel Core 7 Ultra Processor 512GB, 3K AMOLED (2880 x 1800) Touchscreen, Advanced Security, 2024 Model, NP940XGK-KG1US, Moonstone Gray', '6131ZgIFn1L._AC_SL1500_.jpg (1500×1136) (media-amazon.com),\r\n71WBELZFc2L._AC_SL1500_.jpg (1500×1500) (media-amazon.com),\r\n61iBY7OynjL._AC_SL1500_.jpg (1500×1500) (media-amazon.com)', '$1,449.99', 'SAMSUNG', 'Galaxy Book4', 14, 'black', '512 GB SSD', 'Intel Core 7 Ultra P', '8GB DDR4', 'Windows 11 Home', '---', 'Integrated', '•	POWER FOR YOUR MOST PRODUCTIVE DAYS: Breeze through every task with a powerful Intel processor; Intel Core Ultra 7 processor 155H; Enhanced with AI Intel ARC Graphics./n\r\n•	POWERFUL. LIGHT. AMAZINGLY SLIM: Take premium power on the go with an ultralight and amazingly slim laptop; 16” Thickness: 12.5mm, Weight: 3.44 lbs; 14\" Thickness: 11.6mm, Weight: 2.71 lbs./n\r\n•	BRACE YOURSELF FOR THE ULTIMATE SCREEN EXPERIENCE: Tackle what you need to do then kick back with what you love to do on a spacious 14\" or 16\" Dynamic AMOLED 2X touchscreen that’s bright, crisp and vivid./n\r\n•	A PACKED BATTERY FOR YOUR STACKED DAYS: Achieve your goals – and more – with a long-lasting battery that goes the distance; 16”: 76Wh (Typical) 65W Adapter; 14”: 63Wh (Typical) 65W Adapter./n\r\n•	OUR MOST ADVANCED GALAXY BOOK SECURITY YET: Have peace of mind while bringing your big ideas to life with our most advanced Galaxy Book security available; Secured Core PC; Secured by Knox ./n'),
(2, 'Ruzava/Aocwei 16\" Laptop 12+512GB Celeron Intel N5095 (Up to 2.9Ghz) 4-Core Win 11 PC with Cooling Fan 1920 * 1200 2K Screen Dual WiFi Support 2.5\" HDD 1TB SSD Expand for Game Work Study-Blue', '71G3RzNG65L._AC_SL1500_.jpg (1500×1130) (media-amazon.com),\r\n71MWCaysGfL._AC_SL1500_.jpg (1500×1500) (media-amazon.com),\r\n81F4JsfE3mL._AC_SL1500_.jpg (1500×1500) (media-amazon.com),\r\n71hQ4z25NrL._AC_SL1500_.jpg (1500×1487) (media-amazon.com),', '$289.99 ', 'Ruzava', 'A6', 16, '---', '512 GB SSD', 'Intel N5095', '12 GB LPDDR4', 'Windows 11', '---', '---', '•	【LATEST GENERATION PROCESSOR】Aocwei A6 laptop installed with Win 11 and equipped with the latest and powerful Intel Celeron N5095 Quad-Core processor with a turbo frequency of 2.0 GHz (Support Up to 2.9Ghz). Run multiple apps and browser tabs and videos smoothly, ensuring faster multitasking and enjoying immersive Game, Entertainment, work and study./n\r\n•	【FULL HD LARGE SCRREN】Equipped with a 16-inch large screen, the laptop screen can be rotated 180 degrees. This laptop features 1920x1200 Full HD. With 2K Display Screen Ultra Narrow Bezel, Youll get immersive, brilliant colors and great clarity during a movie, e-learning, or video meeting.A laptop that combines performance and beauty./n\r\n•	【STORAGE AND MEMORY】Aocwei laptop has built-in 12GB RAM and 512GB SSD storage space, Support up to connect 512GB TF card , 1TB SSD and 2.5\" HDD expansion, Sufficient memory handles multi-application and multimedia workflows efficiently and quickly, plenty of space and faster read and write speeds for your documents, photos and videos./n\r\n•	【HIGHLIGHTS & SUPERB FUNCTIONS】Laptop comes with a super powerful fan, have fast cooling function, Dual-band WIFI Internet access more smooth, Anti-theft buckle to improve security, new Type-C interface transmission charging, with a more comfortable use of the big keyboard cap, the body and keyboard color integration, making the computer more beautiful, best gift for child, parent and friends./n\r\n•	【WIN 11 AND SERVICE】Experience the secure Win 11 ever built with increased responsiveness, packed with Silicone keyboard protection film, At the same time, Laptop has 1+1 year VIP service. If you encounter any problems, we will have professional technicians to help you solve them./n '),
(3, 'MSI Newest GF63 Thin Gaming Laptop, 15.6\" FHD 144Hz, Intel i5-11400H, RTX 3050, 16GB RAM, 512GB NVMe SSD, Windows 11, Aluminum Black', 'https://m.media-amazon.com/images/I/71D3-jcU0dL._AC_SL1500_.jpg,\r\nhttps://m.media-amazon.com/images/I/61ld-kZbwDL._AC_SL1500_.jpg , \r\nhttps://m.media-amazon.com/images/I/61dVXqw8kxL._AC_SL1500_.jpg ,\r\n', '$623.03', 'MSI', 'MSI GF63', 16, 'Aluminum Black', '512 GB', 'Core i5 Family', '16 GB DDR4', 'Windows 11', 'Backlit Keyboard', 'Dedicated ', '•	15.6\" Full HD display: The 1920 x 1080 resolution with 144hz boasts impressive color and clarity. Energy-efficient LED backlight./n\r\n•	16GB system memory for intense multitasking and gaming: Reams of high-bandwidth DDR4 RAM to smoothly run your graphics-heavy PC games and video-editing applications, as well as numerous programs and browser tabs all at once./n\r\n•	512GB solid-state drive (PCI-e): Save files fast and store more data. With massive amounts of storage and advanced communication power, PCI-e NVMe SSDs are great for major gaming applications, multiple servers, daily backups, and more./n\r\n•	NVIDIA GeForce RTX 3050 graphics: Backed by 4GB GDDR6 dedicated video memory for an ultrafast, advanced GPU to fuel your games./n\r\n•	11th Gen Intel Core i5-11400H processor optimized for gaming, creating, and productivity. Featuring PCIe Gen 4.0 support ./n '),
(4, 'HP Newest Envy x360 2-in-1 Laptop, 15.6\" Full HD Touchscreen, AMD Ryzen 5 5625U 6-Core Processor, 16GB RAM, 512GB SSD, Backlit Keyboard, HDMI, Webcam, Wi-Fi 6, Windows 11 Home, Stylus Pen Included', '71b4EaJHBRL._AC_SL1500_.jpg (1319×1017) (media-amazon.com) ,\r\n71aAD0IndVL._AC_SL1500_.jpg (1500×1500) (media-amazon.com) ,\r\n71RSnSLI5PL._AC_SL1500_.jpg (1500×1500) (media-amazon.com) ,\r\n51HWWJFJIGL._AC_SL1500_.jpg (1500×1500) (media-amazon.com) , ', '$559.00', 'HP', 'TPN-C158 Envy', 16, '---', '512 GB SSD', 'AMD Radeon Graphics', '16 GB DDR4', 'Windows 11', '---', '---', '•	【Memory & Storage】Memory is 16GB high-bandwidth RAM to smoothly run multiple applications and browser tabs all at once. Hard Drive is 512GB PCIe NVMe M.2 Solid State Drive which allows to fast bootup and data transfer. /n\r\n•	【Processor】AMD Ryzen 5 5625U 2.30GHz Hexa-Core Processor up to 4.30GHz, AMD Radeon Graphics./n\r\n•	【Screen】15.6\" Full HD Micro-edge Touchscreen (1920 x 1080) Display, Multitouch-enabled, Edge-to-edge Glass, 250 nits, 45% NTSC ./n\r\n•	【Ports】2 x USB 3.2 Gen 2 Type-C, 2 x USB 3.2 Gen 1 Type-A, 1 x HDMI 2.1, 1 x Combination Audio Jack, 1 x Multi-format SD Media Card Reader; Wireless-AX Wi-Fi 6 + Bluetooth Combo ./n\r\n•	【Operating System】Windows 11 Home, HP Stylus Pen Included ./n\r\n'),
(5, 'LG gram (2022) 17Z90Q Ultra Lightweight Laptop, 17\" (2560 x 1600) IPS Display, Intel Evo 12th Gen i7 1260P Processor, 16GB LPDDR5, 1TB NVMe SSD, FHD Webcam, WiFi 6E, Thunderbolt 4, Windows 11, Black', 'https://m.media-amazon.com/images/I/71Wbbw-Nd4L._AC_SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/61JY9KlwDmL._AC_SL1500_.jpg\r\nhttps://m.media-amazon.com/images/I/61CzdBW7otL._AC_SL1500_.jpg\r\n', '$979.00 ', 'LG', '17Z90Q-K.AAB8U1', 17, 'Obsidian Black', '1 TB', 'Core i7', '16 GB', 'Windows 11 Home', 'Lightweight', 'Intel Iris Xe', '•	Intel Evo Platform Powered by 12th Gen Intel Core i7 Processor and Iris Xe Graphics .A powerful processor with impressive with Iris Xe graphics, built to carry you through work, studies, and surfing the web./n\r\n•	32GB LPDDR5 RAM - 32GB of memory to a substantial clock speed of 5200 MHz, we’re making it simple to do work and play with minimal buffering. /n\r\n•	32GB LPDDR5. 32GB of memory to a substantial clock speed of 5200 Mhz, we’re making it simple to do work and play with minimal buffering./n\r\n•	2 TB NVMe Gen 4 M.2 SSD - Supporting 2 TB of storage, you have the power and speed to run multiple large applications while saving your important documents with ease ./n\r\n•	Ultra-Lightweight. With an ultra-lightweight body, bring your laptop wherever you go since it’ll never weigh you down./n\r\n•	80 Wh Battery: Carry your hustle anywhere with up to 12.5 hours of nonstop power and get up to 19.5 hours of video playback, with a whopping 80 Wh battery./n\r\n•	Connectivity - Connect with Confidence: Two USB-C ports with Thunderbolt 4 support, two USB-A 3.2 ports, a full-size HDMI port, a microSD card reader, and a 3.5mm audio jack./n\r\n•	Full HD IR Webam: Stay connected Full HD video quality and built-in AI sound technology that filters out background noise so you can always look and sound your best./n\r\n'),
(6, 'LG Gram (2022) 16Z90Q Ultra Lightweight Laptop, 16\" (1920 x 1200) IPS Display, Intel Evo 12th Gen i7 1260P Processor, 16GB LPDDR5, 512GB NVMe SSD, FHD Webcam, WiFi 6E, Thunderbolt 4, Windows 11, Black', ' https://m.media-amazon.com/images/I/71rwBR4o6pL._AC_SL1500_.jpg ,\r\nhttps://m.media-amazon.com/images/I/61a5aNBs7pL._AC_SL1500_.jpg , \r\nhttps://m.media-amazon.com/images/I/61xG+KkWV0L._AC_SL1500_.jpg , ', '	$922.19', 'LG', '16Z90Q-R.AAS8U1 ', 17, 'Gray', '1 TB', 'Core i7', '16 GB', ' Windows 11 Home ', 'Backlit Keyboard', 'RTX2050', '•	LG gram 16\' WQXGA Notebook Computer (Charcoal Gray) - AC Adapter - Original Box. /n\r\n•	LG gram16Z90Q Thin and Lightweight Laptop ./n\r\n•	16\" WQXGA (2560x1600) Anti-Glare IPS LCD, with DCI-P3 99% (Typical, min 95%)./n\r\n•	Windows 11 Home ./n\r\n•	Intel Evo 12th Gen Intel Core i5-1240P 12 Core Processor ./n\r\n•	Built with tools to help you multitask, think,create, and connect-all designed with simplicity and intuition in mind.Intel Evo platform powered by Intel Core i5 processor and Intel Iris Xe graphics - Bring it to LifeMake strides with a powerful processor with impressive Iris Xe graphics, built to carry you through work, studies, and surfing the web.16GB 5200 MHz LPDDR5 - The Speed of YouFrom 16GB of memory to a substantial clock speed of 5200 MHz, were making it simple to do work and play with minimal buffering so you can always focus on your next move.Ultra-Lightweight - Might Meets LightWith an ultra-lightweight body, bring your laptop wherever you go since itll never weigh you down.MIL-STD-810 - Tried and True DurabilityNo matter where your day takes you, your laptop is up for the challenge. /n'),
(7, 'Apple 2024 MacBook Air 13-inch Laptop with M3 chip: 13.6-inch Liquid Retina Display, 8GB Unified Memory, 256GB SSD Storage, Backlit Keyboard, 1080p FaceTime HD Camera, Touch ID; Midnight', 'https://m.media-amazon.com/images/I/71-D1xCuVwL._AC_SL1500_.jpg ,\r\nhttps://m.media-amazon.com/images/I/71eamTIYCyL._AC_SL1500_.jpg ,\r\nhttps://m.media-amazon.com/images/I/61LbQpnFNvL._AC_SL1500_.jpg ', '$1,099.00', 'Apple', 'MacBook Air', 14, 'Midnight', '256 GB', 'Unknown', '8 GB', 'Mac OS', 'Fingerprint Reader', 'Integrated', '•	LEAN. MEAN. M3 MACHINE — The blazing-fast MacBook Air with the M3 chip is a superportable laptop that sails through work and play./n\r\n•	PORTABLE DESIGN — Lightweight and under half an inch thin, so you can take MacBook Air anywhere you go.\r\n•	GET MORE DONE FASTER — The powerful 8-core CPU and up to 10-core GPU of the Apple M3 chip keep things running smoothly./n\r\n•	UP TO 18 HOURS OF BATTERY LIFE — Amazing, all-day battery life so you can leave the power adapter at home./n\r\n•	A BRILLIANT DISPLAY — The 13.6-inch Liquid Retina display supports 1 billion colors./n\r\n•	LOOK SHARP, SOUND GREAT — Everything looks and sounds amazing with a 1080p FaceTime HD camera, three mics, and four speakers with Spatial Audio./n\r\n•	APPS FLY WITH APPLE SILICON — All your favorites, from Microsoft 365 to Adobe Creative Cloud, run lightning fast in macOS . /n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
