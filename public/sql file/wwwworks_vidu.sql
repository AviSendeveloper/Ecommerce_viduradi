-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2022 at 04:36 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwwworks_vidu`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblogs`
--

CREATE TABLE `addblogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addblogs`
--

INSERT INTO `addblogs` (`id`, `blogcategory_id`, `title`, `image`, `description`, `slug`, `tag`, `meta_tag`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, '3', 'How to design effective arts?', '1643804013-15542698893-min.jpg', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\" style=\"line-height: 1.08333;\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\" style=\"line-height: 1.08333;\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', 'how-to-design-effective-arts', 'Process,Mechanical', 'Best,no1', 'Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii.', '2022-02-02 05:25:57', '2022-02-02 06:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `addmodels`
--

CREATE TABLE `addmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customers` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bulk_product_upload` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `set_coupons` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messages` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_settings` varchar(123) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_settings` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manage_staffs` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribers` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `orders`, `products`, `customers`, `categories`, `bulk_product_upload`, `set_coupons`, `blog`, `messages`, `general_settings`, `payment_settings`, `manage_staffs`, `subscribers`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Swarnadwip Nath', 'pfswarnadwip@gmail.com', '$2y$10$RQnxYW53qTTXitAqjRRmM.XkvvVd.1lWqSUZRf3ovZ8/kXvwKMfya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 1, '2022-01-08 08:03:53', '2022-01-08 08:03:53'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$6eOMyOGjSG8XOzxupdnrtepOe7El78iBNnj49GAL2fHa4SqsuNvrS', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, '1', 'admin', 1, '2022-01-12 06:53:13', '2022-01-12 14:29:31'),
(5, 'Avi Debnath', 'avi@gmail.com', '$2y$10$5a5SG/zYzuPks4qus/1Xnebia4iAfkCU5j.r0mTXdUhdIsmeQxHV2', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-12 14:29:05', '2022-01-12 14:29:17'),
(6, 'shreya Roy', 'pfshreya@gmail.com', '$2y$10$p2hpUdhOUimEHflgRGo8qOW8Qhf2risR5eG.vnkmq/v7Ba926T2U.', NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, '1', NULL, '1', NULL, NULL, '2022-01-12 14:30:16', '2022-01-12 14:30:34'),
(7, 'Jack', 'jack@gmail.com', '$2y$10$JUNC/1H4EylJgt9LEw3v/OwFJpQNI5SL8LoFmhJwruu70qVjIDkRe', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, 1, '2022-01-12 14:32:26', '2022-02-15 07:56:15'),
(9, 'James', 'james@yopmail.com', '$2y$10$h1PUnTmuCpurmcyha6LBi./PW6af0mIq5HdmDIcIF2Mf.ANW0gdEe', '1', '1', '1', '1', NULL, NULL, '1', NULL, NULL, NULL, NULL, '1', NULL, 1, '2022-02-15 08:13:57', '2022-02-15 08:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `category`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 'shirt', 1, '2022-02-02 02:05:22', '2022-02-02 04:25:13'),
(3, 'Casual T-shirt', 'casual-t-shirt', 1, '2022-02-02 02:16:13', '2022-02-02 02:33:08'),
(4, 'Fancy Dress', 'fancy_dress', 1, '2022-02-02 02:19:48', '2022-02-02 04:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Filla', 1, NULL, '2022-02-08 08:18:09'),
(2, 'Lee Copper', 1, NULL, '2022-02-08 07:30:33'),
(5, 'Peter England', 1, '2022-02-08 07:28:17', '2022-02-08 07:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `session_id`, `user_id`, `product_id`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(61, '856iyjLMQwMusVkvDiSeS2nOVAuY19iQIpRV1s0B', NULL, 10, 'l', 1, '2022-03-01 01:17:57', '2022-03-01 01:17:57'),
(68, 'RaSkyzWQmOPtqjXWEz7ZcPLoP5dDLWWq1kbK4zOV', 6, 10, 's', 1, '2022-03-02 08:23:48', '2022-03-02 08:27:17'),
(69, 'RaSkyzWQmOPtqjXWEz7ZcPLoP5dDLWWq1kbK4zOV', 6, 10, 'l', 3, '2022-03-02 08:23:52', '2022-03-02 08:35:49'),
(70, 'RaSkyzWQmOPtqjXWEz7ZcPLoP5dDLWWq1kbK4zOV', 6, 10, 'xl', 6, '2022-03-02 08:23:58', '2022-03-02 08:35:43'),
(71, 'TDSoN8gTQ4SeFgQLle99r18m84ce6x0BE9STWOeX', NULL, 14, 'xl', 3, '2022-03-03 04:51:21', '2022-03-03 04:51:21'),
(91, 'xldjsIuEgd1eA5v9KUwffq7gNBbZaQeSnQfgumZV', NULL, 10, 'M', 1, '2022-04-04 14:36:38', '2022-04-04 14:36:38'),
(94, 'NqhCVQ8d37fAchHqNNXZo648zySKk8u7TcTwED1o', 16, 10, 'S', 1, '2022-04-20 06:37:57', '2022-04-20 06:37:57'),
(95, 'NqhCVQ8d37fAchHqNNXZo648zySKk8u7TcTwED1o', 16, 10, 'M', 1, '2022-04-20 06:38:03', '2022-04-20 06:38:03'),
(96, 'NqhCVQ8d37fAchHqNNXZo648zySKk8u7TcTwED1o', 16, 19, 'M', 3, '2022-04-20 06:38:26', '2022-04-20 07:32:08'),
(138, 'iHU99bB991762bY4DApXrZmDqZv4UEKnirNa48TA', NULL, 10, 'S', 1, '2022-04-30 05:12:41', '2022-04-30 05:12:41'),
(139, 'iHU99bB991762bY4DApXrZmDqZv4UEKnirNa48TA', NULL, 15, 'm', 1, '2022-04-30 05:13:10', '2022-04-30 05:13:10'),
(140, 'L9CeNsuSdJ5Vr4XpDJar92elM3p57xGszWXNsw99', 1, 17, 'L', 3, '2022-05-02 13:00:21', '2022-05-02 14:11:09'),
(142, 'YryI8oHt8cV6PSgcuEdee0k8ZFwKWgYXAqunCZ3B', NULL, 10, 'XL', 2, '2022-05-03 12:01:19', '2022-05-03 12:41:51'),
(143, 'YryI8oHt8cV6PSgcuEdee0k8ZFwKWgYXAqunCZ3B', NULL, 10, 'S', 2, '2022-05-03 12:08:51', '2022-05-03 12:41:47'),
(144, '190Nm9YAVWoo87peLAQQfBOS60tv5qSrwW5i0qKo', NULL, 10, 'M', 1, '2022-05-07 08:53:54', '2022-05-07 08:53:54'),
(145, 'Gcaz2DJX8MNMoh0ZORo8mN5kioFha3kyZ7DGThqI', NULL, 10, 'S', 1, '2022-05-07 12:03:16', '2022-05-07 12:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_discount` double(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `section_id`, `category_name`, `category_image`, `category_discount`, `description`, `url`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(16, 0, 1, 'Topwear', '1646378209-knitted-sweaters-horizontal-tile.webp', 10.00, 'Buy online at Topwear. Huge footwear and Clothing range. Order now and avail Best Discounts, Cash on Delivery, Easy Returns and Exchange', 'topwear', 'Topwear', 'Buy online at Topwear. Huge footwear and Clothing range. Order now and avail Best Discounts, Cash on Delivery, Easy Returns and Exchange', 'Topwear', 1, '2022-02-09 01:59:44', '2022-03-04 01:48:01'),
(17, 0, 1, 'Bottomwear', '1646378393-mens-joggers-name-tiles.webp', 10.00, 'Usually, many trousers from Uniqlo are a little short for tall people. This length is just right for a 6ft 3 inch height. Can be worn as both formal office wear or semi casual looks. Fit and fabric are good. Would’ve bought more but other colours are sold out', 'bottomwear', 'Usually, many trousers from Uniqlo are a little short for tall people', 'Usually, many trousers from Uniqlo are a little short for tall people. This length is just right for a 6ft 3 inch height. Can be worn as both formal office wear or semi casual looks. Fit and fabric are good. Would’ve bought more but other colours are sold out', 'Usually, many trousers from Uniqlo are a little short for tall people', 1, '2022-02-09 02:01:59', '2022-03-04 01:49:53'),
(18, 0, 1, 'Footwear', '1646378836-womens-joggers-name-tiles.webp', 10.00, 'The shoe size mentioned on our website is measured along the length of the insole of the footwear, from the midpoint of the top to the midpoint of the bottom. Find out your foot size by measuring the length of your foot from the toes to the heel, and then order the footwear in the closest corresponding size.', 'footwear', 'The shoe size mentioned on our website is measured along the length of the insole of the footwear', 'The shoe size mentioned on our website is measured along the length of the insole of the footwear, from the midpoint of the top to the midpoint of the bottom. Find out your foot size by measuring the length of your foot from the toes to the heel, and then order the footwear in the closest corresponding size.', 'The shoe size mentioned on our website is measured along the length of the insole of the footwear', 1, '2022-02-09 02:03:56', '2022-03-04 01:57:16'),
(19, 0, 1, 'Sports & Active Wear', '1646378498-mens-coord-sets-name-tiles.webp', 10.00, 'Pinterest\r\n44 Fitness Clothing Ideas For Cool Men Who Are Stunning - vialaven.com | Mens workout clothes, Sport outfits, Mens outfits', 'sports-active-wear', '44 Fitness Clothing Ideas For Cool Men Who Are Stunning - vialaven.com', 'Pinterest\r\n44 Fitness Clothing Ideas For Cool Men Who Are Stunning - vialaven.com | Mens workout clothes, Sport outfits, Mens outfits', '44 Fitness Clothing Ideas For Cool Men Who Are Stunning - vialaven.com', 1, '2022-02-09 02:05:43', '2022-03-04 01:51:38'),
(20, 16, 1, 'T-shirt', '1644392245-1_265403cb-1881-4ce9-a408-f6042d35575e_765x.jpg', 10.00, 'Improve your overall style with a new pair of marvelous 7 for all mankind joggers. Team this soliddarkblue pair with Chelsea boots and a warm cardigan when your heading to a low key dinner party with your friends.', 't-shirt', 'Our best selling short sleeve T-Shirt, the Crew neck and Straight-Hem, with our staple fabric.', 'Improve your overall style with a new pair of marvelous 7 for all mankind joggers. Team this soliddarkblue pair with Chelsea boots and a warm cardigan when your heading to a low key dinner party with your friends.', 'Our best selling short sleeve T-Shirt, the Crew neck and Straight-Hem, with our staple fabric.', 1, '2022-02-09 02:07:25', '2022-02-09 02:16:32'),
(21, 17, 1, 'Jeans', '1644392360-407353-3646378.jpg', 0.00, 'Improve your overall style with a new pair of marvelous 7 for all mankind joggers. Team this soliddarkblue pair with Chelsea boots and a warm cardigan when your heading to a low key dinner party with your friends.', 'jeans', 'Improve your overall style with a new pair of marvelous 7 for all mankind joggers', 'Improve your overall style with a new pair of marvelous 7 for all mankind joggers. Team this soliddarkblue pair with Chelsea boots and a warm cardigan when your heading to a low key dinner party with your friends.', 'Improve your overall style with a new pair of marvelous 7 for all mankind joggers', 1, '2022-02-09 02:09:20', '2022-02-09 02:09:20'),
(22, 18, 1, 'Casual Shoes', '1644392520-Neemans-DawnBlue-ReLive-Knits-SlipOn-SideProfileLogo-Comfortable-Shoes_1024x.jpg', 10.00, 'Welcome to the world of ReLive Knits, the \'Made in India\' shoe created from 100% Recycled PET bottles. We selected this material because it deserved a second chance to be presented as a non-pollutant by being crafted in the form of a comfortable pair of sneakers.', 'casual-shoes', 'Welcome to the world of ReLive Knits, the \'Made in India\' shoe created from 100% Recycled PET bottles.', 'Welcome to the world of ReLive Knits, the \'Made in India\' shoe created from 100% Recycled PET bottles. We selected this material because it deserved a second chance to be presented as a non-pollutant by being crafted in the form of a comfortable pair of sneakers.', 'Welcome to the world of ReLive Knits, the \'Made in India\' shoe created from 100% Recycled PET bottles.', 1, '2022-02-09 02:12:00', '2022-02-09 02:12:00'),
(23, 19, 1, 'Sports Shoes', '1644392656-9-1530blk-91-dunkaston-black-original-imag72efhd9wzdtc.jpeg', 10.00, 'For Plus customers, shipping charges are free.\r\nFor non-Plus customers, if the total value of FAssured items is more than Rs.500, shipping charges are free. If the total value of FAssured items is less than Rs.500, shipping charges = Rs.40 per unit\r\n* For faster delivery, shipping charges will be applicable.', 'sports-shoes', 'Sport Shoes For Men | Walking Shoes | Trekking Shoes Running Shoes For Men', 'For Plus customers, shipping charges are free.\r\nFor non-Plus customers, if the total value of FAssured items is more than Rs.500, shipping charges are free. If the total value of FAssured items is less than Rs.500, shipping charges = Rs.40 per unit\r\n* For faster delivery, shipping charges will be applicable.', 'Sport Shoes For Men | Walking Shoes | Trekking Shoes Running Shoes For Men', 1, '2022-02-09 02:14:16', '2022-02-09 02:14:16'),
(24, 0, 1, 'Jacket', '1646378548-mens-winterwear-name-tiles.webp', 10.00, 'cdrescs', 'jacket', 'ghmg', 'fgnbfn gy', 'htrjfn', 1, '2022-03-02 06:19:06', '2022-03-04 01:52:28'),
(25, 25, 2, 'Topwear', '1646223839-1_3483d8c8-ef19-4ac9-b7ab-1e45e18f28ab_1600x.jpg', 10.00, 'This is women topwear', 'women-topware', 'Women Topwear', 'This is women topwear', 'Topwear, Women topware', 1, '2022-03-02 06:53:59', '2022-03-02 06:57:09'),
(26, 0, 2, 'demo', '1646378721-womens-shirts-horizontal-tile.webp', 10.00, 'jcdshjcbdjb', 'dckjhdsuc', 'dfhvbdfhjvbj', 'dhuhdv', 'duhjbuikjvcb', 1, '2022-03-02 07:06:07', '2022-03-04 01:55:21'),
(27, 0, 2, 'Kurti', '1646378772-womens-sweatshorts-name-tiles.webp', 15.00, 'This is women kurti', 'women-kurti', 'Women Kurti', 'This is women kurti', 'kurti, women kurti', 1, '2022-03-03 00:52:11', '2022-03-04 01:56:12'),
(28, 0, 1, 'loafers', '1647341396-loafers-best-men-shoes-luxe-digital.jpg', 10.00, 'This is men shoe', 'loafer', 'loafers', 'This is men shoe', 'men shoe, loafer', 1, '2022-03-03 00:55:05', '2022-03-15 05:20:41'),
(29, 16, 1, 'Co-ord Sets', '1647240922-shopping.webp', 10.00, 'Product Details Pack Of - 1 Fabric - Soft Cotton Occasion - Party Wear , Casual Wear , Daily Wear , Other Variant Occasion.', 'co-ord-sets', 'Beautiful Cotton Fabric Spider Printed Two Piece Half Sleeve', 'Product Details Pack Of - 1 Fabric - Soft Cotton Occasion - Party Wear , Casual Wear , Daily Wear , Other Variant Occasion.', 'Beautiful Cotton Fabric Spider Printed Two Piece Half Sleeve', 1, '2022-03-14 01:25:22', '2022-03-14 01:25:22'),
(30, 16, 1, 'Drop-Cut T-Shirt', '1647242895-shopping (1).webp', 10.00, 'A clothing sets featuring solid pattern, a crew neck and short sleeve, and a matching pant with drawstring and slant pocket.', 'drop-cut-t-shirt', 'A clothing sets featuring solid pattern', 'A clothing sets featuring solid pattern, a crew neck and short sleeve, and a matching pant with drawstring and slant pocket.', 'A clothing sets featuring solid pattern', 1, '2022-03-14 01:58:15', '2022-03-14 01:58:15'),
(31, 16, 1, 'Full-Sleeves T-Shirt', '1647243058-shopping (2).webp', 10.00, 'Buy Full Sleeve T-Shirts for Men Online in India at Best Price. Explore The Latest range of Long Sleeve T-Shirts at Bewakoof. Enjoy Free Shipping & COD.', 'full-sleeves-t-shirt', 'Buy Full Sleeve T-Shirts for Men Online in India at Best Price.', 'Buy Full Sleeve T-Shirts for Men Online in India at Best Price. Explore The Latest range of Long Sleeve T-Shirts at Bewakoof. Enjoy Free Shipping & COD.', 'Buy Full Sleeve T-Shirts for Men Online in India at Best Price.', 1, '2022-03-14 02:00:58', '2022-03-14 02:00:58'),
(32, 16, 1, 'Oversized T-Shirt', '1647243172-shopping (3).webp', 10.00, 'Oversized Tshirts Online. Shop for Oversized Tshirts in India', 'oversized-t-shirt', 'Oversized Tshirts Online. Shop for Oversized Tshirts in India', 'Oversized Tshirts Online. Shop for Oversized Tshirts in India', 'Oversized Tshirts Online. Shop for Oversized Tshirts in India', 1, '2022-03-14 02:02:52', '2022-03-14 02:02:52'),
(33, 16, 1, 'Polos', '1647243361-download (2).jpg', 20.00, 'Polo shirts have been around since before the end of the 19th century, but what are they? Originally, polo shirts were worn by Polo players in India in 1859 before becoming attire associated with horse-riding by the British upper classes', 'polos', 'Polo shirts have been around since before the end of the 19th century', 'Polo shirts have been around since before the end of the 19th century, but what are they? Originally, polo shirts were worn by Polo players in India in 1859 before becoming attire associated with horse-riding by the British upper classes', 'Polo shirts have been around since before the end of the 19th century', 1, '2022-03-14 02:06:01', '2022-03-14 02:06:01'),
(34, 16, 1, 'Shirts', '1647243487-download (3).jpg', 10.00, 'Buy from the huge selection of Men\'s Shirts Online at best price. Shop for printed, faded, checked and more patterns of Shirt for Men', 'shirts', 'Buy from the huge selection of Men\'s Shirts Online at best price.', 'Buy from the huge selection of Men\'s Shirts Online at best price. Shop for printed, faded, checked and more patterns of Shirt for Men', 'Buy from the huge selection of Men\'s Shirts Online at best price.', 1, '2022-03-14 02:08:07', '2022-03-14 02:08:07'),
(35, 16, 1, 'Tank Tops & Vest', '1647243643-shopping.png', 10.00, 'Stock up on versatile tanks tops for every occasion with H&M. Choose from delicate satin camis, romantic lace tops and casual strappy options in a range of', 'tank-top-vest', 'Stock up on versatile tanks tops for every occasion with H&M.', 'Stock up on versatile tanks tops for every occasion with H&M. Choose from delicate satin camis, romantic lace tops and casual strappy options in a range of', 'Stock up on versatile tanks tops for every occasion with H&M.', 1, '2022-03-14 02:10:43', '2022-03-14 02:10:43'),
(36, 16, 1, 'Hoodies & SweatShirts', '1647243874-download.webp', 10.00, 'Buy Sweatshirt & Hoodies for Men. Huge collection of men\'s sweatshirt & hoodies at low offer price & discounts at COD, Easy Returns & Exchanges. Order Now.', 'hoodies-sweatshirt', 'Buy Sweatshirt & Hoodies for Men', 'Buy Sweatshirt & Hoodies for Men. Huge collection of men\'s sweatshirt & hoodies at low offer price & discounts at COD, Easy Returns & Exchanges. Order Now.', 'Buy Sweatshirt & Hoodies for Men', 1, '2022-03-14 02:14:34', '2022-03-14 02:14:34'),
(37, 16, 1, 'Base Layer Wear', '1647244028-shopping (1).png', 10.00, 'As the name suggests, base layers are the first layer of clothing you put on. This can include underwear, t-shirts, long sleeve tops, and leggings. The fit is usually tight to snug, as it should be to ensure the perfect amount of heat is retained.', 'base-layer-wear', 'As the name suggests, base layers are the first layer of clothing you put on.', 'As the name suggests, base layers are the first layer of clothing you put on. This can include underwear, t-shirts, long sleeve tops, and leggings. The fit is usually tight to snug, as it should be to ensure the perfect amount of heat is retained.', 'As the name suggests, base layers are the first layer of clothing you put on.', 1, '2022-03-14 02:17:08', '2022-03-14 02:17:08'),
(38, 16, 1, 'Jackets', '1647244113-shopping (2).png', 10.00, 'Buy Mens Winter Jackets Online. Avail in a variety of styles & sizes quilted, lightweight down Winter Jackets, Half Jacket, Windcheater & Sleeveless Vest', 'jackets', 'Buy Mens Winter Jackets Online', 'Buy Mens Winter Jackets Online. Avail in a variety of styles & sizes quilted, lightweight down Winter Jackets, Half Jacket, Windcheater & Sleeveless Vest', 'Buy Mens Winter Jackets Online. Avail in a variety of styles & sizes quilted, lightweight down Winter Jackets, Half Jacket, Windcheater & Sleeveless Vest', 1, '2022-03-14 02:18:33', '2022-03-14 02:18:33'),
(39, 16, 1, 'Sweaters', '1647244194-download.png', 12.00, 'Buy Sweaters & Cardigans for Men. Huge collection of men\'s sweaters & cardigans at low offer price & discounts at COD, Easy Returns & Exchanges. Order Now.', 'sweaters', 'Buy Sweaters & Cardigans for Men', 'Buy Sweaters & Cardigans for Men. Huge collection of men\'s sweaters & cardigans at low offer price & discounts at COD, Easy Returns & Exchanges. Order Now.', 'Buy Sweaters & Cardigans for Men', 1, '2022-03-14 02:19:54', '2022-03-14 02:19:54'),
(40, 0, 3, 'Boys Clothing', '1647341205-new-spring-4-12-years-boys-clothing-sets.jpg', 10.00, 'asdf', 'boys-clothing', 'asd', 'saf', 'df', 1, '2022-03-14 14:42:18', '2022-03-15 05:17:21'),
(41, 0, 8, 'Kitchen & Table', '1647269052-84f14536-1186-4980-a46f-522c3abcc7191612890897805-1.webp', 10.00, 'Good', 'kitchen-table', 'Good', 'Good', 'Good', 1, '2022-03-14 14:44:12', '2022-03-14 14:44:12'),
(42, 42, 9, 'Makup', '1647341123-download (4).jpg', 10.00, 'Good', 'makeup', 'Good', 'Good', 'Good', 1, '2022-03-14 14:45:26', '2022-03-15 05:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ammount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ammount` double(8,2) NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `users`, `categories`, `coupon_code`, `coupon_option`, `coupon_type`, `ammount_type`, `ammount`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'pfswarnadwip@yopmail.com', '16,20,17', '92Vt229', 'Automatic', 'Single Times', 'Fixed', 150.00, '2022-02-25', 1, '2022-02-15 02:18:59', '2022-02-15 05:14:18'),
(4, 'privy@yopmail.com', '16,20', 'test2022', 'Manual', 'Single Times', 'Percentage', 20.00, '2022-02-23', 1, '2022-02-15 02:32:19', '2022-02-15 02:32:19'),
(5, 'pfswarnadwip@yopmail.com,pfavijit@gmail.com', '20', '49Uw51', 'Automatic', 'Multiple Times', 'Percentage', 10.00, '2022-04-24', 1, '2022-02-15 02:32:52', '2022-04-20 14:38:05'),
(6, 'pfswarnadwip@yopmail.com', '16,20,17', '6Zo82', 'Automatic', 'Single Times', 'Fixed', 150.00, '2022-02-25', 1, '2022-02-15 05:01:49', '2022-02-15 05:01:49'),
(13, 'pfswarnadwip@yopmail.com,privy@yopmail.com', '16,20,17,21,18,22,23', 'test 123', 'Manual', 'Multiple Times', 'Percentage', 10.00, '2022-02-24', 1, '2022-02-17 06:39:56', '2022-02-17 06:39:56'),
(14, 'pfswarnadwip@yopmail.com,privy@yopmail.com,shreya@yopmail.com', '16,20,17,21,18,22', 'test2000', 'Manual', 'Multiple Times', 'Percentage', 20.00, '2022-02-25', 1, '2022-02-17 07:08:28', '2022-02-17 07:08:28'),
(15, 'pfswarnadwip@yopmail.com', '16,20,17,21,18,22,19,23,24,28', 'pp6', 'Manual', 'Multiple Times', 'Fixed', 50.00, '2022-03-24', 1, '2022-03-09 06:00:28', '2022-03-09 06:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_ph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_addresses`
--

INSERT INTO `delivery_addresses` (`id`, `user_id`, `name`, `phone`, `pincode`, `locality`, `address`, `city`, `state`, `landmark`, `alternate_ph`, `address_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'Work', 0, '2022-02-16 03:20:13', '2022-02-16 03:20:13'),
(2, 1, 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'Home', 0, '2022-02-16 05:02:07', '2022-02-16 05:02:07'),
(3, 5, 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'Home', 0, '2022-02-17 07:10:21', '2022-02-17 07:10:21'),
(4, 9, 'Manish Rajesh Dubey', 'Manish Rajesh Dubey', '401209', '401209', 'H/104, New Suryakirti Nagar,\r\nAchole Road, Nalasopara East', 'mumbai', 'Maharashtra', NULL, '8999892699', 'Home', 0, '2022-03-30 18:14:21', '2022-03-30 18:14:21'),
(5, 12, 'Swarnadwip Nath', 'Swarnadwip Nath', '700007', 'DK-RD', 'Bidhannagar,Dakshidari Bus Stop,Kolkata', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'Home', 0, '2022-04-04 08:42:33', '2022-04-04 08:42:33'),
(6, 16, 'Kalu', '4586456463', '700001', 'Kolkat', 'Nabbanna,, dsf\r\ndsf', 'Kolkata', 'Andaman & Nicobar Islands', 'tvrfvbgdtr', '9876543210', 'Home', 0, '2022-04-20 06:49:49', '2022-04-20 06:49:49'),
(7, 7, 'Manish Rajesh Dubey', '8999892699', '401209', 'NSP', 'H/104, New Suryakirti Nagar,\r\nAchole Road, Nalasopara East', 'NSP', 'Maharashtra', 'Opp. Niddhisha Restaurant', '8999892699', 'Home', 0, '2022-04-27 11:33:07', '2022-04-27 11:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `deliver_addresses`
--

CREATE TABLE `deliver_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_links`
--

INSERT INTO `footer_links` (`id`, `category`, `name`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Company', 'Home', '/', 1, '2022-03-03 07:06:51', '2022-03-04 05:15:46'),
(3, 'Need Help', 'Contact Us', 'contact-us', 1, '2022-03-04 04:50:52', '2022-03-04 05:15:54'),
(4, 'Need Help', 'Track Order', 'track-order', 1, '2022-03-04 04:51:10', '2022-03-04 05:16:01'),
(5, 'Need Help', 'Return & Refunds', 'return-refunds', 1, '2022-03-04 04:51:55', '2022-03-04 05:16:11'),
(6, 'Need Help', 'FAQ\'s', 'faqs', 1, '2022-03-04 04:52:11', '2022-03-04 05:16:20'),
(7, 'Need Help', 'My Account', 'profile', 1, '2022-03-04 04:52:32', '2022-03-04 05:16:29'),
(8, 'Company', 'About Us', 'about-us', 1, '2022-03-04 04:53:17', '2022-03-04 05:16:37'),
(9, 'Company', 'Careers', 'carrers', 1, '2022-03-04 04:53:40', '2022-03-04 05:16:45'),
(10, 'Company', 'Stores Near Me', 'stores-near-me', 1, '2022-03-04 04:54:05', '2022-03-04 05:16:54'),
(11, 'Company', 'Gift Vouchers', 'gift-vouchers', 1, '2022-03-04 04:54:23', '2022-03-04 05:17:01'),
(12, 'Company', 'From The Soul', 'from-the-soul', 1, '2022-03-04 04:54:46', '2022-03-04 05:17:11'),
(13, 'Company', 'Souled Army', 'souled-army', 1, '2022-03-04 04:55:16', '2022-03-04 05:17:21'),
(14, 'More Info', 'T&C', 'terms-condition', 1, '2022-03-04 04:56:16', '2022-03-04 05:17:28'),
(15, 'More Info', 'Privacy Policy', 'privacy-policy', 1, '2022-03-04 04:56:42', '2022-03-04 05:17:39'),
(16, 'More Info', 'Sitemap', 'sitemap', 1, '2022-03-04 04:56:57', '2022-03-04 05:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_customizations`
--

CREATE TABLE `home_page_customizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_customizations`
--

INSERT INTO `home_page_customizations` (`id`, `service_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slider', 1, '2022-02-09 06:32:17', '2022-03-04 07:46:51'),
(2, 'service', 1, '2022-02-09 06:32:17', '2022-03-04 07:46:51'),
(3, 'blog', 1, '2022-02-09 06:32:51', '2022-03-04 07:46:51'),
(4, 'footer_link', 1, '2022-03-03 11:49:00', '2022-03-04 07:46:51'),
(5, 'social_link', 0, '2022-03-04 13:13:40', '2022-03-04 07:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_08_125635_create_admins_table', 1),
(6, '2022_01_21_071507_create_sections_table', 2),
(7, '2022_01_24_080526_create_categories_table', 3),
(8, '2022_01_25_122431_create_products_table', 4),
(9, '2022_01_25_125712_create_products_table', 5),
(10, '2022_01_27_122005_create_sliders_table', 6),
(11, '2022_01_28_064439_create_socialpages_table', 7),
(12, '2022_01_28_130616_create_socialsettings_table', 8),
(13, '2022_01_31_110241_add_social_login_field', 9),
(14, '2022_02_02_070046_create_blogcategories_table', 10),
(15, '2022_02_02_100733_create_addmodels_table', 11),
(16, '2022_02_02_100747_create_addblogs_table', 12),
(17, '2022_02_03_144007_create_subscriptions_table', 13),
(18, '2022_02_08_064233_create_products_attributes_table', 14),
(19, '2022_02_08_100521_create_products_images_table', 15),
(20, '2022_02_08_114656_create_brands_table', 16),
(21, '2022_02_08_141226_create_home_page_customizations_table', 17),
(22, '2022_02_09_062635_create_services_table', 18),
(23, '2022_02_14_071402_create_carts_table', 19),
(24, '2022_02_14_114750_create_coupons_table', 20),
(25, '2022_02_16_075447_create_deliver_addresses_table', 21),
(26, '2022_02_16_075503_create_delivery_addresses_table', 22),
(27, '2022_02_17_071412_create_orders_table', 23),
(28, '2022_02_17_092647_create_order_products_table', 24),
(29, '2022_02_18_061426_create_payments_table', 25),
(30, '2022_02_18_135705_create_order_statuses_table', 26),
(32, '2022_02_21_111935_create_taxes_table', 27),
(33, '2022_02_21_141355_create_special_discounts_table', 28),
(40, '2022_02_28_120308_create_razorpay_settings_table', 29),
(41, '2022_02_28_120545_create_paytm_settings_table', 29),
(43, '2022_02_28_121847_create_payment_settings_table', 30),
(44, '2022_03_01_074449_create_orderlogs_table', 31),
(45, '2022_03_03_104615_create_footer_links_table', 32),
(46, '2022_03_07_105226_create_wishlists_table', 33),
(47, '2022_03_08_100854_create_shipping_charges_table', 33),
(48, '2022_03_09_072746_create_shipping_charges_table', 34),
(49, '2022_03_10_092641_add_to_orders', 35),
(50, '2022_04_20_072729_create_save_laters_table', 36);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_ph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_ammount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancel_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_gateway` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pushed` tinyint(4) DEFAULT NULL,
  `courier_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `pincode`, `locality`, `address`, `address_type`, `city`, `state`, `landmark`, `alternate_ph`, `email`, `shipping_charges`, `coupon_code`, `coupon_ammount`, `order_status`, `cancel_reason`, `payment_method`, `payment_gateway`, `grand_total`, `is_pushed`, `courier_name`, `tracking_number`, `invoice`, `created_at`, `updated_at`) VALUES
(10, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'Delivered', NULL, 'Razorpay', 'Razorpay', '32', 1, NULL, NULL, NULL, '2022-02-17 04:42:47', '2022-03-12 06:22:16'),
(11, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'COD', 'COD', '32', NULL, NULL, NULL, NULL, '2022-02-17 05:30:09', '2022-02-17 05:30:09'),
(12, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'COD', 'COD', '32', NULL, NULL, NULL, NULL, '2022-02-17 05:30:26', '2022-02-17 05:30:26'),
(13, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'COD', 'COD', '12128', NULL, NULL, NULL, NULL, '2022-02-17 05:44:48', '2022-02-17 05:44:48'),
(14, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'Razorpay', 'Razorpay', '401', NULL, NULL, NULL, NULL, '2022-02-17 05:50:23', '2022-02-17 05:50:23'),
(15, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'Paytm', 'Paytm', '401', NULL, NULL, NULL, NULL, '2022-02-17 05:51:10', '2022-02-17 05:51:10'),
(16, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'Paytm', 'Paytm', '8201', NULL, NULL, NULL, NULL, '2022-02-17 05:52:26', '2022-02-17 05:52:26'),
(17, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'Shipped', NULL, 'Paytm', 'Paytm', '8201', 1, NULL, NULL, NULL, '2022-02-17 05:52:50', '2022-03-01 02:30:58'),
(18, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'Razorpay', 'Razorpay', '8201', NULL, NULL, NULL, NULL, '2022-02-17 05:53:01', '2022-02-17 05:53:01'),
(19, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'Razorpay', 'Razorpay', '8201', NULL, NULL, NULL, NULL, '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(20, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'Razorpay', 'Razorpay', '8201', NULL, NULL, NULL, NULL, '2022-02-17 06:09:39', '2022-02-17 06:09:39'),
(21, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', 'sk00', '10', 'New', NULL, 'Razorpay', 'Razorpay', '8201', NULL, NULL, NULL, NULL, '2022-02-17 06:21:26', '2022-02-17 06:21:26'),
(22, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '1608.00', 'New', NULL, 'Razorpay', 'Razorpay', '6433', NULL, NULL, NULL, NULL, '2022-02-17 07:10:38', '2022-02-17 07:10:38'),
(23, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'Razorpay', 'Razorpay', '164', NULL, NULL, NULL, NULL, '2022-02-18 00:41:09', '2022-02-18 00:41:09'),
(24, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'COD', 'COD', '164', NULL, NULL, NULL, NULL, '2022-02-18 00:57:05', '2022-02-18 00:57:05'),
(25, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'COD', 'COD', '164', NULL, NULL, NULL, NULL, '2022-02-18 00:57:36', '2022-02-18 00:57:36'),
(26, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'COD', 'COD', '164', NULL, NULL, NULL, NULL, '2022-02-18 00:57:54', '2022-02-18 00:57:54'),
(27, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'COD', 'COD', '164', NULL, NULL, NULL, NULL, '2022-02-18 01:02:02', '2022-02-18 01:02:02'),
(28, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'COD', 'COD', '164', NULL, NULL, NULL, NULL, '2022-02-18 01:02:37', '2022-02-18 01:02:37'),
(29, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'COD', 'COD', '164', NULL, NULL, NULL, NULL, '2022-02-18 01:03:02', '2022-02-18 01:03:02'),
(30, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '41.00', 'New', NULL, 'Razorpay', 'Razorpay', '2032', NULL, NULL, NULL, NULL, '2022-02-18 01:10:26', '2022-02-18 01:10:26'),
(31, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '406.00', 'New', NULL, 'Razorpay', 'Razorpay', '1626', NULL, NULL, NULL, NULL, '2022-02-18 01:11:02', '2022-02-18 01:11:02'),
(32, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '406.00', 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:14:39', '2022-02-18 01:14:39'),
(33, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '406.00', 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:23:28', '2022-02-18 01:23:28'),
(34, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:27:31', '2022-02-18 01:27:31'),
(35, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:29:01', '2022-02-18 01:29:01'),
(36, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:34:55', '2022-02-18 01:34:55'),
(37, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:37:08', '2022-02-18 01:37:08'),
(38, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:41:32', '2022-02-18 01:41:32'),
(39, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:43:26', '2022-02-18 01:43:26'),
(40, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:43:30', '2022-02-18 01:43:30'),
(41, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:49:05', '2022-02-18 01:49:05'),
(42, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:51:06', '2022-02-18 01:51:06'),
(43, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:52:28', '2022-02-18 01:52:28'),
(44, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:56:23', '2022-02-18 01:56:23'),
(45, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 01:59:59', '2022-02-18 01:59:59'),
(46, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '82', NULL, NULL, NULL, NULL, '2022-02-18 02:01:52', '2022-02-18 02:01:52'),
(47, '5', 'Shreya Roy', '6789586895', '700007', 'BD', 'Bidhannagar', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'shreya@yopmail.com', '0', 'test2000', '814.00', 'New', NULL, 'Razorpay', 'Razorpay', '3258', NULL, NULL, NULL, NULL, '2022-02-18 06:19:18', '2022-02-18 06:19:18'),
(48, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '6237', NULL, NULL, NULL, NULL, '2022-02-24 08:16:35', '2022-02-24 08:16:35'),
(49, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '6237', NULL, NULL, NULL, NULL, '2022-02-24 08:20:11', '2022-02-24 08:20:11'),
(50, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3720', NULL, NULL, NULL, NULL, '2022-02-24 08:27:18', '2022-02-24 08:27:18'),
(51, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '6080', NULL, NULL, NULL, NULL, '2022-02-24 08:29:48', '2022-02-24 08:29:48'),
(52, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '1440', NULL, NULL, NULL, NULL, '2022-02-28 01:16:00', '2022-02-28 01:16:00'),
(53, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '1440', NULL, NULL, NULL, NULL, '2022-02-28 01:41:53', '2022-02-28 01:41:53'),
(54, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3768', NULL, NULL, NULL, NULL, '2022-02-28 02:02:15', '2022-02-28 02:02:15'),
(55, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3768', NULL, NULL, NULL, NULL, '2022-02-28 02:03:11', '2022-02-28 02:03:11'),
(56, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3768', NULL, NULL, NULL, NULL, '2022-02-28 02:05:11', '2022-02-28 02:05:11'),
(57, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3914', NULL, NULL, NULL, NULL, '2022-02-28 02:07:27', '2022-02-28 02:07:27'),
(58, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3720', NULL, NULL, NULL, NULL, '2022-02-28 02:10:41', '2022-02-28 02:10:41'),
(59, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', '26Uj696', '8.00', 'New', NULL, 'Razorpay', 'Razorpay', '80', NULL, NULL, NULL, NULL, '2022-02-28 04:52:46', '2022-02-28 04:52:46'),
(60, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', '26Uj696', '8.00', 'New', NULL, 'Razorpay', 'Razorpay', '80', NULL, NULL, NULL, NULL, '2022-02-28 04:56:23', '2022-02-28 04:56:23'),
(61, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', '26Uj696', '8.00', 'New', NULL, 'Razorpay', 'Razorpay', '80', NULL, NULL, NULL, NULL, '2022-02-28 05:03:19', '2022-02-28 05:03:19'),
(62, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', '26Uj696', '8.00', 'New', NULL, 'Razorpay', 'Razorpay', '80', NULL, NULL, NULL, NULL, '2022-02-28 05:04:03', '2022-02-28 05:04:03'),
(63, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', '26Uj696', '8.00', 'New', NULL, 'Razorpay', 'Razorpay', '80', NULL, NULL, NULL, NULL, '2022-02-28 05:05:59', '2022-02-28 05:05:59'),
(64, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3758', NULL, NULL, NULL, NULL, '2022-03-01 08:32:09', '2022-03-01 08:32:09'),
(65, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '3758', NULL, NULL, NULL, NULL, '2022-03-01 08:34:23', '2022-03-01 08:34:23'),
(66, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '1440', NULL, NULL, NULL, NULL, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(67, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '1440', NULL, NULL, NULL, NULL, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(68, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '1440', NULL, NULL, NULL, NULL, '2022-03-01 08:39:07', '2022-03-01 08:39:07'),
(69, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'Shipped', NULL, 'Paytm', 'Paytm', '1440', 1, NULL, NULL, NULL, '2022-03-01 08:39:33', '2022-03-08 08:46:10'),
(70, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '2327', NULL, NULL, NULL, NULL, '2022-03-09 05:27:03', '2022-03-09 05:27:03'),
(71, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '500', NULL, NULL, 'Cancel', 'I want to convert my order to Prepaid', 'COD', 'COD', '2327', NULL, NULL, NULL, NULL, '2022-03-09 05:48:43', '2022-03-10 08:17:17'),
(72, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '500', 'pp6', '802.00', 'New', NULL, 'COD', 'COD', '2105', NULL, NULL, NULL, NULL, '2022-03-09 06:03:16', '2022-03-09 06:03:16'),
(73, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '500', 'pp6', '1199.00', 'Cancel', 'I want to convert my order to Prepaid', 'COD', 'COD', '2898', NULL, NULL, NULL, NULL, '2022-03-09 06:12:19', '2022-03-10 08:16:49'),
(74, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', 'pp6', '425.00', 'Shipped', NULL, 'COD', 'COD', '425', 1, NULL, NULL, NULL, '2022-03-09 07:14:16', '2022-03-09 07:15:23'),
(75, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '50', 'pp6', '106.00', 'Cancel', NULL, 'Razorpay', 'Razorpay', '156', NULL, NULL, NULL, NULL, '2022-03-09 08:15:08', '2022-03-10 08:16:28'),
(76, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '50', 'pp6', '106.00', 'Cancel', 'I want to convert my order to Prepaid', 'Razorpay', 'Razorpay', '156', NULL, NULL, NULL, NULL, '2022-03-09 08:17:02', '2022-03-10 04:25:58'),
(77, '9', 'Manish Rajesh Dubey', 'Manish Rajesh Dubey', '401209', '401209', 'H/104, New Suryakirti Nagar,\r\nAchole Road, Nalasopara East', 'Home', 'mumbai', 'Maharashtra', NULL, '8999892699', 'dubeymanish965@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1929', NULL, NULL, NULL, NULL, '2022-03-30 18:20:39', '2022-03-30 18:20:39'),
(78, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '1508', NULL, NULL, NULL, NULL, '2022-03-31 13:17:58', '2022-03-31 13:17:58'),
(79, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1508', NULL, NULL, NULL, NULL, '2022-03-31 13:18:03', '2022-03-31 13:18:03'),
(80, '12', 'Swarnadwip Nath', 'Swarnadwip Nath', '700007', 'DK-RD', 'Bidhannagar,Dakshidari Bus Stop,Kolkata', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'pfswarnadwip@gmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '1124', NULL, NULL, NULL, NULL, '2022-04-04 08:42:54', '2022-04-04 08:42:54'),
(81, '12', 'Swarnadwip Nath', 'Swarnadwip Nath', '700007', 'DK-RD', 'Bidhannagar,Dakshidari Bus Stop,Kolkata', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'pfswarnadwip@gmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '1124', NULL, NULL, NULL, NULL, '2022-04-04 08:43:01', '2022-04-04 08:43:01'),
(82, '12', 'Swarnadwip Nath', 'Swarnadwip Nath', '700007', 'DK-RD', 'Bidhannagar,Dakshidari Bus Stop,Kolkata', 'Home', 'Kolkata', 'West Bengal', 'Kali Temple', '6789564215', 'pfswarnadwip@gmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1124', NULL, NULL, NULL, NULL, '2022-04-04 08:43:13', '2022-04-04 08:43:13'),
(83, '16', 'Kalu', '4586456463', '700001', 'Kolkat', 'Nabbanna,, dsf\r\ndsf', 'Home', 'Kolkata', 'Andaman & Nicobar Islands', 'tvrfvbgdtr', '9876543210', 'pfanushree@gmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '1353', NULL, NULL, NULL, NULL, '2022-04-20 06:51:12', '2022-04-20 06:51:12'),
(84, '16', 'Kalu', '4586456463', '700001', 'Kolkat', 'Nabbanna,, dsf\r\ndsf', 'Home', 'Kolkata', 'Andaman & Nicobar Islands', 'tvrfvbgdtr', '9876543210', 'pfanushree@gmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '1353', NULL, NULL, NULL, NULL, '2022-04-20 06:52:06', '2022-04-20 06:52:06'),
(85, '16', 'Kalu', '4586456463', '700001', 'Kolkat', 'Nabbanna,, dsf\r\ndsf', 'Home', 'Kolkata', 'Andaman & Nicobar Islands', 'tvrfvbgdtr', '9876543210', 'pfanushree@gmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '1353', NULL, NULL, NULL, NULL, '2022-04-20 06:52:27', '2022-04-20 06:52:27'),
(86, '16', 'Kalu', '4586456463', '700001', 'Kolkat', 'Nabbanna,, dsf\r\ndsf', 'Home', 'Kolkata', 'Andaman & Nicobar Islands', 'tvrfvbgdtr', '9876543210', 'pfanushree@gmail.com', '0', NULL, NULL, 'New', NULL, 'Paytm', 'Paytm', '1353', NULL, NULL, NULL, NULL, '2022-04-20 06:52:34', '2022-04-20 06:52:34'),
(87, '16', 'Kalu', '4586456463', '700001', 'Kolkat', 'Nabbanna,, dsf\r\ndsf', 'Home', 'Kolkata', 'Andaman & Nicobar Islands', 'tvrfvbgdtr', '9876543210', 'pfanushree@gmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '1353', NULL, NULL, NULL, NULL, '2022-04-20 06:53:01', '2022-04-20 06:53:01'),
(88, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', '49Uw51', '447.00', 'New', NULL, 'Razorpay', 'Razorpay', '3271', NULL, NULL, NULL, NULL, '2022-04-20 14:39:08', '2022-04-20 14:39:08'),
(89, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '3718', NULL, NULL, NULL, NULL, '2022-04-21 14:42:12', '2022-04-21 14:42:12'),
(90, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '3718', NULL, NULL, NULL, NULL, '2022-04-21 14:42:53', '2022-04-21 14:42:53'),
(91, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '3718', NULL, NULL, NULL, NULL, '2022-04-21 14:45:33', '2022-04-21 14:45:33'),
(92, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '3718', NULL, NULL, NULL, NULL, '2022-04-21 14:46:18', '2022-04-21 14:46:18'),
(93, '7', 'Manish Rajesh Dubey', '8999892699', '401209', 'NSP', 'H/104, New Suryakirti Nagar,\r\nAchole Road, Nalasopara East', 'Home', 'NSP', 'Maharashtra', 'Opp. Niddhisha Restaurant', '8999892699', 'dubeymanish965@gmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '797', NULL, NULL, NULL, NULL, '2022-04-27 11:33:59', '2022-04-27 11:33:59'),
(94, '7', 'Manish Rajesh Dubey', '8999892699', '401209', 'NSP', 'H/104, New Suryakirti Nagar,\r\nAchole Road, Nalasopara East', 'Home', 'NSP', 'Maharashtra', 'Opp. Niddhisha Restaurant', '8999892699', 'dubeymanish965@gmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '754', NULL, NULL, NULL, NULL, '2022-04-27 12:35:04', '2022-04-27 12:35:04'),
(95, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '10509', NULL, NULL, NULL, NULL, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(96, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'CashFree', 'CashFree', '7300', NULL, NULL, NULL, NULL, '2022-04-27 14:43:49', '2022-04-27 14:43:49'),
(97, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '7300', NULL, NULL, NULL, NULL, '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(98, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1843', NULL, NULL, NULL, NULL, '2022-04-29 10:08:37', '2022-04-29 10:08:37'),
(99, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '530', NULL, NULL, NULL, NULL, '2022-04-29 10:15:04', '2022-04-29 10:15:04'),
(100, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1791', NULL, NULL, NULL, NULL, '2022-04-29 10:18:13', '2022-04-29 10:18:13'),
(101, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1262', NULL, NULL, NULL, NULL, '2022-04-29 10:27:19', '2022-04-29 10:27:19'),
(102, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1589', NULL, NULL, NULL, NULL, '2022-04-29 10:40:13', '2022-04-29 10:40:13'),
(103, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '754', NULL, NULL, NULL, NULL, '2022-04-29 10:45:57', '2022-04-29 10:45:57'),
(104, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '754', NULL, NULL, NULL, NULL, '2022-04-29 10:48:20', '2022-04-29 10:48:20'),
(105, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1284', NULL, NULL, NULL, NULL, '2022-04-29 10:50:46', '2022-04-29 10:50:46'),
(106, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'Razorpay', 'Razorpay', '531', NULL, NULL, NULL, NULL, '2022-04-29 10:51:56', '2022-04-29 10:51:56'),
(107, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1772', NULL, NULL, NULL, NULL, '2022-04-29 11:49:23', '2022-04-29 11:49:23'),
(108, '1', 'Rohit Das', '8957956895', '700007', 'Bally', 'Fakir chandra RD', 'Home', 'North 24 Porgona', 'West Bengal', 'Durga Temple near by', '6789564215', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1649', NULL, NULL, NULL, NULL, '2022-04-29 11:51:58', '2022-04-29 11:51:58'),
(109, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '2488', NULL, NULL, NULL, NULL, '2022-04-30 04:32:14', '2022-04-30 04:32:14'),
(110, '1', 'Swarnadwip Nath', '9856859685', '700005', 'DC', 'Bidhannagar', 'Work', 'Kolkata', 'West Bengal', 'Kali Temple', '6235895689', 'pfswarnadwip@yopmail.com', '0', NULL, NULL, 'New', NULL, 'COD', 'COD', '1830', NULL, NULL, NULL, NULL, '2022-04-30 04:38:11', '2022-04-30 04:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_logs`
--

CREATE TABLE `order_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` tinyint(4) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_logs`
--

INSERT INTO `order_logs` (`id`, `order_id`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 17, 'Shipped', '2022-03-01 02:30:58', '2022-03-01 02:30:58'),
(2, 69, 'New', '2022-03-08 04:35:38', '2022-03-08 04:35:38'),
(3, 69, 'Completed', '2022-03-08 04:35:45', '2022-03-08 04:35:45'),
(4, 69, 'In Process', '2022-03-08 04:35:53', '2022-03-08 04:35:53'),
(5, 69, 'Shipped', '2022-03-08 04:36:01', '2022-03-08 04:36:01'),
(6, 69, 'Shipped', '2022-03-08 04:53:47', '2022-03-08 04:53:47'),
(7, 69, 'New', '2022-03-08 04:54:24', '2022-03-08 04:54:24'),
(8, 69, 'Shipped', '2022-03-08 05:39:13', '2022-03-08 05:39:13'),
(9, 69, 'New', '2022-03-08 05:41:09', '2022-03-08 05:41:09'),
(10, 69, 'Shipped', '2022-03-08 07:52:49', '2022-03-08 07:52:49'),
(11, 69, 'Delivered', '2022-03-08 08:00:03', '2022-03-08 08:00:03'),
(12, 69, 'Completed', '2022-03-08 08:45:50', '2022-03-08 08:45:50'),
(13, 69, 'Shipped', '2022-03-08 08:46:10', '2022-03-08 08:46:10'),
(14, 74, 'Shipped', '2022-03-09 07:15:23', '2022-03-09 07:15:23'),
(15, 10, 'Shipped', '2022-03-12 06:22:12', '2022-03-12 06:22:12'),
(16, 10, 'Delivered', '2022-03-12 06:22:16', '2022-03-12 06:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `user_id`, `product_id`, `product_code`, `product_name`, `product_color`, `product_size`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(4, 10, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-17 04:42:47', '2022-02-17 04:42:47'),
(5, 11, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-17 05:30:09', '2022-02-17 05:30:09'),
(6, 12, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-17 05:30:26', '2022-02-17 05:30:26'),
(7, 13, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 4, '2022-02-17 05:44:48', '2022-02-17 05:44:48'),
(8, 13, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 6, '2022-02-17 05:44:48', '2022-02-17 05:44:48'),
(9, 14, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 05:50:23', '2022-02-17 05:50:23'),
(10, 14, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 10, '2022-02-17 05:50:23', '2022-02-17 05:50:23'),
(11, 15, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 05:51:10', '2022-02-17 05:51:10'),
(12, 15, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 10, '2022-02-17 05:51:10', '2022-02-17 05:51:10'),
(13, 16, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 05:52:26', '2022-02-17 05:52:26'),
(14, 16, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 5, '2022-02-17 05:52:27', '2022-02-17 05:52:27'),
(15, 16, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 4, '2022-02-17 05:52:27', '2022-02-17 05:52:27'),
(16, 17, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 05:52:50', '2022-02-17 05:52:50'),
(17, 17, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 5, '2022-02-17 05:52:51', '2022-02-17 05:52:51'),
(18, 17, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 4, '2022-02-17 05:52:51', '2022-02-17 05:52:51'),
(19, 18, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 05:53:01', '2022-02-17 05:53:01'),
(20, 18, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 5, '2022-02-17 05:53:01', '2022-02-17 05:53:01'),
(21, 18, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 4, '2022-02-17 05:53:01', '2022-02-17 05:53:01'),
(22, 19, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(23, 19, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 5, '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(24, 19, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 4, '2022-02-17 06:05:24', '2022-02-17 06:05:24'),
(25, 20, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 06:09:39', '2022-02-17 06:09:39'),
(26, 20, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 5, '2022-02-17 06:09:39', '2022-02-17 06:09:39'),
(27, 20, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 4, '2022-02-17 06:09:39', '2022-02-17 06:09:39'),
(28, 21, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 06:21:26', '2022-02-17 06:21:26'),
(29, 21, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 5, '2022-02-17 06:21:26', '2022-02-17 06:21:26'),
(30, 21, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 4, '2022-02-17 06:21:26', '2022-02-17 06:21:26'),
(31, 22, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 4, '2022-02-17 07:10:38', '2022-02-17 07:10:38'),
(32, 22, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 1, '2022-02-17 07:10:38', '2022-02-17 07:10:38'),
(33, 23, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-18 00:41:09', '2022-02-18 00:41:09'),
(34, 24, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-18 00:57:05', '2022-02-18 00:57:05'),
(35, 25, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-18 00:57:36', '2022-02-18 00:57:36'),
(36, 26, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-18 00:57:54', '2022-02-18 00:57:54'),
(37, 27, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-18 01:02:02', '2022-02-18 01:02:02'),
(38, 28, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-18 01:02:37', '2022-02-18 01:02:37'),
(39, 29, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-18 01:03:02', '2022-02-18 01:03:02'),
(40, 30, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-02-18 01:10:26', '2022-02-18 01:10:26'),
(41, 30, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-18 01:10:26', '2022-02-18 01:10:26'),
(42, 31, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-02-18 01:11:02', '2022-02-18 01:11:02'),
(43, 31, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-18 01:11:02', '2022-02-18 01:11:02'),
(44, 32, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:14:39', '2022-02-18 01:14:39'),
(45, 33, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:23:28', '2022-02-18 01:23:28'),
(46, 34, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:27:31', '2022-02-18 01:27:31'),
(47, 35, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:29:01', '2022-02-18 01:29:01'),
(48, 36, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:34:55', '2022-02-18 01:34:55'),
(49, 37, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:37:08', '2022-02-18 01:37:08'),
(50, 38, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:41:32', '2022-02-18 01:41:32'),
(51, 39, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:43:27', '2022-02-18 01:43:27'),
(52, 40, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:43:30', '2022-02-18 01:43:30'),
(53, 41, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:49:05', '2022-02-18 01:49:05'),
(54, 42, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:51:06', '2022-02-18 01:51:06'),
(55, 43, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:52:28', '2022-02-18 01:52:28'),
(56, 44, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:56:23', '2022-02-18 01:56:23'),
(57, 45, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 01:59:59', '2022-02-18 01:59:59'),
(58, 46, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-02-18 02:01:52', '2022-02-18 02:01:52'),
(59, 47, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-18 06:19:18', '2022-02-18 06:19:18'),
(60, 47, 5, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 2, '2022-02-18 06:19:18', '2022-02-18 06:19:18'),
(61, 48, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-24 08:16:35', '2022-02-24 08:16:35'),
(62, 48, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-24 08:16:35', '2022-02-24 08:16:35'),
(63, 48, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-24 08:16:35', '2022-02-24 08:16:35'),
(64, 49, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 5, '2022-02-24 08:20:11', '2022-02-24 08:20:11'),
(65, 49, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-24 08:20:11', '2022-02-24 08:20:11'),
(66, 50, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-24 08:27:18', '2022-02-24 08:27:18'),
(67, 51, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 3, '2022-02-24 08:29:48', '2022-02-24 08:29:48'),
(68, 52, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-02-28 01:16:00', '2022-02-28 01:16:00'),
(69, 52, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-02-28 01:16:00', '2022-02-28 01:16:00'),
(70, 53, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-02-28 01:41:54', '2022-02-28 01:41:54'),
(71, 54, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-28 02:02:15', '2022-02-28 02:02:15'),
(72, 55, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-28 02:03:11', '2022-02-28 02:03:11'),
(73, 56, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-28 02:05:11', '2022-02-28 02:05:11'),
(74, 57, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-28 02:07:27', '2022-02-28 02:07:27'),
(75, 57, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 4, '2022-02-28 02:07:27', '2022-02-28 02:07:27'),
(76, 58, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-02-28 02:10:41', '2022-02-28 02:10:41'),
(77, 59, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-02-28 04:52:46', '2022-02-28 04:52:46'),
(78, 59, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-28 04:52:46', '2022-02-28 04:52:46'),
(79, 60, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-02-28 04:56:23', '2022-02-28 04:56:23'),
(80, 60, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-28 04:56:23', '2022-02-28 04:56:23'),
(81, 61, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-02-28 05:03:19', '2022-02-28 05:03:19'),
(82, 61, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-28 05:03:19', '2022-02-28 05:03:19'),
(83, 62, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-02-28 05:04:03', '2022-02-28 05:04:03'),
(84, 62, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-28 05:04:03', '2022-02-28 05:04:03'),
(85, 63, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-02-28 05:05:59', '2022-02-28 05:05:59'),
(86, 63, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-02-28 05:05:59', '2022-02-28 05:05:59'),
(87, 64, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-03-01 08:32:09', '2022-03-01 08:32:09'),
(88, 64, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-03-01 08:32:09', '2022-03-01 08:32:09'),
(89, 65, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-03-01 08:34:23', '2022-03-01 08:34:23'),
(90, 65, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 2, '2022-03-01 08:34:23', '2022-03-01 08:34:23'),
(91, 66, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(92, 66, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(93, 66, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(94, 67, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(95, 67, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(96, 67, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-03-01 08:38:42', '2022-03-01 08:38:42'),
(97, 68, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-03-01 08:39:07', '2022-03-01 08:39:07'),
(98, 68, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-03-01 08:39:07', '2022-03-01 08:39:07'),
(99, 68, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-03-01 08:39:07', '2022-03-01 08:39:07'),
(100, 69, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 1, '2022-03-01 08:39:33', '2022-03-01 08:39:33'),
(101, 69, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'l', 32.00, 1, '2022-03-01 08:39:33', '2022-03-01 08:39:33'),
(102, 69, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'xl', 2000.00, 1, '2022-03-01 08:39:33', '2022-03-01 08:39:33'),
(103, 70, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 3, '2022-03-09 05:27:03', '2022-03-09 05:27:03'),
(104, 70, 1, 14, 'VV0010', 'White Jeans', 'White', 'xl', 720.00, 2, '2022-03-09 05:27:03', '2022-03-09 05:27:03'),
(105, 71, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 3, '2022-03-09 05:48:43', '2022-03-09 05:48:43'),
(106, 71, 1, 14, 'VV0010', 'White Jeans', 'White', 'xl', 720.00, 2, '2022-03-09 05:48:43', '2022-03-09 05:48:43'),
(107, 72, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 'm', 41.00, 2, '2022-03-09 06:03:16', '2022-03-09 06:03:16'),
(108, 72, 1, 14, 'VV0010', 'White Jeans', 'White', 'm', 639.00, 2, '2022-03-09 06:03:16', '2022-03-09 06:03:16'),
(109, 73, 1, 14, 'VV0010', 'White Jeans', 'White', 'xl', 720.00, 4, '2022-03-09 06:12:19', '2022-03-09 06:12:19'),
(110, 74, 1, 14, 'VV0010', 'White Jeans', 'White', 'xl', 720.00, 1, '2022-03-09 07:14:16', '2022-03-09 07:14:16'),
(111, 75, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 5, '2022-03-09 08:15:08', '2022-03-09 08:15:08'),
(112, 76, 1, 10, 'VV00', 'V Neck T-shirt', 'Red', 's', 36.00, 5, '2022-03-09 08:17:02', '2022-03-09 08:17:02'),
(113, 77, 9, 10, 'VV00', 'Boxers', 'Red', 'S', 36.00, 1, '2022-03-30 18:20:39', '2022-03-30 18:20:39'),
(114, 77, 9, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-03-30 18:20:39', '2022-03-30 18:20:39'),
(115, 78, 1, 14, 'VV0010', 'Women\'s Shirts', 'White', 'M', 639.00, 2, '2022-03-31 13:17:58', '2022-03-31 13:17:58'),
(116, 79, 1, 14, 'VV0010', 'Women\'s Shirts', 'White', 'M', 639.00, 2, '2022-03-31 13:18:03', '2022-03-31 13:18:03'),
(117, 80, 12, 14, 'VV0010', 'Women\'s Shirts', 'White', 'S', 600.00, 3, '2022-04-04 08:42:54', '2022-04-04 08:42:54'),
(118, 81, 12, 14, 'VV0010', 'Women\'s Shirts', 'White', 'S', 600.00, 3, '2022-04-04 08:43:01', '2022-04-04 08:43:01'),
(119, 82, 12, 14, 'VV0010', 'Women\'s Shirts', 'White', 'S', 600.00, 3, '2022-04-04 08:43:13', '2022-04-04 08:43:13'),
(120, 83, 16, 10, 'VV00', 'Boxers', 'Red', 'S', 36.00, 1, '2022-04-20 06:51:12', '2022-04-20 06:51:12'),
(121, 83, 16, 10, 'VV00', 'Boxers', 'Red', 'M', 41.00, 1, '2022-04-20 06:51:12', '2022-04-20 06:51:12'),
(122, 83, 16, 19, 'vv0089', 'Shirt', 'black', 'M', 639.00, 3, '2022-04-20 06:51:12', '2022-04-20 06:51:12'),
(123, 84, 16, 10, 'VV00', 'Boxers', 'Red', 'S', 36.00, 1, '2022-04-20 06:52:06', '2022-04-20 06:52:06'),
(124, 84, 16, 10, 'VV00', 'Boxers', 'Red', 'M', 41.00, 1, '2022-04-20 06:52:06', '2022-04-20 06:52:06'),
(125, 84, 16, 19, 'vv0089', 'Shirt', 'black', 'M', 639.00, 3, '2022-04-20 06:52:06', '2022-04-20 06:52:06'),
(126, 85, 16, 10, 'VV00', 'Boxers', 'Red', 'S', 36.00, 1, '2022-04-20 06:52:27', '2022-04-20 06:52:27'),
(127, 85, 16, 10, 'VV00', 'Boxers', 'Red', 'M', 41.00, 1, '2022-04-20 06:52:27', '2022-04-20 06:52:27'),
(128, 85, 16, 19, 'vv0089', 'Shirt', 'black', 'M', 639.00, 3, '2022-04-20 06:52:27', '2022-04-20 06:52:27'),
(129, 86, 16, 10, 'VV00', 'Boxers', 'Red', 'S', 36.00, 1, '2022-04-20 06:52:34', '2022-04-20 06:52:34'),
(130, 86, 16, 10, 'VV00', 'Boxers', 'Red', 'M', 41.00, 1, '2022-04-20 06:52:34', '2022-04-20 06:52:34'),
(131, 86, 16, 19, 'vv0089', 'Shirt', 'black', 'M', 639.00, 3, '2022-04-20 06:52:34', '2022-04-20 06:52:34'),
(132, 87, 16, 10, 'VV00', 'Boxers', 'Red', 'S', 36.00, 1, '2022-04-20 06:53:01', '2022-04-20 06:53:01'),
(133, 87, 16, 10, 'VV00', 'Boxers', 'Red', 'M', 41.00, 1, '2022-04-20 06:53:01', '2022-04-20 06:53:01'),
(134, 87, 16, 19, 'vv0089', 'Shirt', 'black', 'M', 639.00, 3, '2022-04-20 06:53:01', '2022-04-20 06:53:01'),
(135, 88, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-20 14:39:08', '2022-04-20 14:39:08'),
(136, 88, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-20 14:39:08', '2022-04-20 14:39:08'),
(137, 89, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-21 14:42:12', '2022-04-21 14:42:12'),
(138, 89, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-21 14:42:12', '2022-04-21 14:42:12'),
(139, 90, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-21 14:42:53', '2022-04-21 14:42:53'),
(140, 90, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-21 14:42:53', '2022-04-21 14:42:53'),
(141, 91, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-21 14:45:33', '2022-04-21 14:45:33'),
(142, 91, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-21 14:45:33', '2022-04-21 14:45:33'),
(143, 92, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-21 14:46:18', '2022-04-21 14:46:18'),
(144, 92, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-21 14:46:18', '2022-04-21 14:46:18'),
(145, 93, 7, 17, 'rabbit11', 'Dress', 'pink', 'S', 639.00, 1, '2022-04-27 11:33:59', '2022-04-27 11:33:59'),
(146, 93, 7, 10, 'VV00', 'Boxers', 'Red', 'S', 36.00, 1, '2022-04-27 11:33:59', '2022-04-27 11:33:59'),
(147, 94, 7, 17, 'rabbit11', 'Dress', 'pink', 'S', 639.00, 1, '2022-04-27 12:35:04', '2022-04-27 12:35:04'),
(148, 95, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(149, 95, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(150, 95, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'm', 719.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(151, 95, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'xl', 879.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(152, 95, 1, 15, 'VV001', 'Jacket', 'Black', 'l', 719.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(153, 95, 1, 15, 'VV001', 'Jacket', 'Black', 's', 639.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(154, 95, 1, 15, 'VV001', 'Jacket', 'Black', 'xl', 799.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(155, 95, 1, 10, 'VV00', 'Boxers', 'Red', 'XL', 2000.00, 1, '2022-04-27 14:41:33', '2022-04-27 14:41:33'),
(156, 96, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-27 14:43:49', '2022-04-27 14:43:49'),
(157, 96, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-27 14:43:49', '2022-04-27 14:43:49'),
(158, 96, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'm', 719.00, 1, '2022-04-27 14:43:49', '2022-04-27 14:43:49'),
(159, 96, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'xl', 879.00, 1, '2022-04-27 14:43:49', '2022-04-27 14:43:49'),
(160, 96, 1, 15, 'VV001', 'Jacket', 'Black', 's', 639.00, 1, '2022-04-27 14:43:49', '2022-04-27 14:43:49'),
(161, 96, 1, 15, 'VV001', 'Jacket', 'Black', 'xl', 799.00, 1, '2022-04-27 14:43:49', '2022-04-27 14:43:49'),
(162, 97, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(163, 97, 1, 17, 'rabbit11', 'Dress', 'pink', 'XXL', 2399.00, 1, '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(164, 97, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'm', 719.00, 1, '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(165, 97, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'xl', 879.00, 1, '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(166, 97, 1, 15, 'VV001', 'Jacket', 'Black', 's', 639.00, 1, '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(167, 97, 1, 15, 'VV001', 'Jacket', 'Black', 'xl', 799.00, 1, '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(168, 98, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-29 10:08:37', '2022-04-29 10:08:37'),
(169, 98, 1, 11, 'VV001', 'Shorts', 'Yellow', 'm', 810.00, 1, '2022-04-29 10:08:37', '2022-04-29 10:08:37'),
(170, 99, 1, 18, 'rabbit112', 'Innerwear', 'pink', 'xs', 449.00, 1, '2022-04-29 10:15:04', '2022-04-29 10:15:04'),
(171, 100, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'l', 799.00, 1, '2022-04-29 10:18:13', '2022-04-29 10:18:13'),
(172, 100, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'm', 719.00, 1, '2022-04-29 10:18:13', '2022-04-29 10:18:13'),
(173, 101, 1, 19, 'vv0089', 'Shirt', 'black', 'M', 639.00, 3, '2022-04-29 10:27:19', '2022-04-29 10:27:19'),
(174, 102, 1, 18, 'rabbit112', 'Innerwear', 'pink', 's', 449.00, 3, '2022-04-29 10:40:13', '2022-04-29 10:40:13'),
(175, 103, 1, 15, 'VV001', 'Jacket', 'Black', 'm', 639.00, 1, '2022-04-29 10:45:57', '2022-04-29 10:45:57'),
(176, 104, 1, 19, 'vv0089', 'Shirt', 'black', 'M', 639.00, 1, '2022-04-29 10:48:20', '2022-04-29 10:48:20'),
(177, 105, 1, 15, 'VV001', 'Jacket', 'Black', 's', 639.00, 1, '2022-04-29 10:50:46', '2022-04-29 10:50:46'),
(178, 105, 1, 18, 'rabbit112', 'Innerwear', 'pink', 's', 449.00, 1, '2022-04-29 10:50:46', '2022-04-29 10:50:46'),
(179, 106, 1, 13, 'VV008', 'women\'s Shorts', 'Pink', 'm', 216.00, 1, '2022-04-29 10:51:56', '2022-04-29 10:51:56'),
(180, 106, 1, 13, 'VV008', 'women\'s Shorts', 'Pink', 'l', 234.00, 1, '2022-04-29 10:51:56', '2022-04-29 10:51:56'),
(181, 107, 1, 12, 'VV006', 'Bermunda', 'Yellow', 'm', 224.00, 1, '2022-04-29 11:49:23', '2022-04-29 11:49:23'),
(182, 107, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 's', 639.00, 2, '2022-04-29 11:49:23', '2022-04-29 11:49:23'),
(183, 108, 1, 18, 'rabbit112', 'Innerwear', 'pink', 's', 449.00, 5, '2022-04-29 11:51:58', '2022-04-29 11:51:58'),
(184, 109, 1, 16, 'VV0034', 'co-ORD-SETS', 'Yellow', 'l', 799.00, 1, '2022-04-30 04:32:14', '2022-04-30 04:32:14'),
(185, 109, 1, 15, 'VV001', 'Jacket', 'Black', 'l', 719.00, 3, '2022-04-30 04:32:14', '2022-04-30 04:32:14'),
(186, 110, 1, 17, 'rabbit11', 'Dress', 'pink', 'L', 1599.00, 1, '2022-04-30 04:38:11', '2022-04-30 04:38:11'),
(187, 110, 1, 17, 'rabbit11', 'Dress', 'pink', 'XL', 799.00, 1, '2022-04-30 04:38:11', '2022-04-30 04:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New', 1, NULL, NULL),
(2, 'Completed', 1, NULL, NULL),
(3, 'Pending', 1, NULL, NULL),
(4, 'Declined', 1, NULL, NULL),
(5, 'Refund', 1, NULL, NULL),
(6, 'Shipped', 1, '2022-03-01 07:59:37', '2022-03-01 07:59:37'),
(7, 'In Process', 1, '2022-03-01 07:59:37', '2022-03-01 07:59:37'),
(8, 'Delivered', 1, '2022-03-01 07:59:54', '2022-03-01 07:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_ammount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `transaction_id`, `fee`, `payment_method`, `total_ammount`, `created_at`, `updated_at`) VALUES
(3, '36', 'pay_IxNoqcYeE8o9gv', 'Free', 'Razorpay', '82', '2022-02-18 01:35:14', '2022-02-18 01:35:14'),
(4, '46', '20220218111212800110168993003453947', 'Free', 'Paytm', '82', '2022-02-18 02:02:05', '2022-02-18 02:02:05'),
(5, '47', 'pay_IxSfKhAy1BYL6t', 'Free', 'Razorpay', '3258', '2022-02-18 06:19:43', '2022-02-18 06:19:43'),
(6, '58', 'pay_J1Ln8OJrrves2j', 'Free', 'Razorpay', '3720', '2022-02-28 02:12:41', '2022-02-28 02:12:41'),
(7, '63', 'pay_J1OkxmuWX3KQ1Y', 'Free', 'Razorpay', '80', '2022-02-28 05:06:19', '2022-02-28 05:06:19'),
(8, '65', 'pay_J1qqIZUV5oDX3Q', 'Free', 'Razorpay', '3758', '2022-03-01 08:34:45', '2022-03-01 08:34:45'),
(9, '71', 'codtran_76A203Xu', 'Free', 'COD', '2327', '2022-03-09 05:48:43', '2022-03-09 05:48:43'),
(10, '72', 'codtran_0G484Bh', 'Free', 'COD', '2105', '2022-03-09 06:03:16', '2022-03-09 06:03:16'),
(11, '73', 'codtran_967T271Lg', 'Free', 'COD', '2898', '2022-03-09 06:12:19', '2022-03-09 06:12:19'),
(12, '74', 'codtran_959R827Ok', 'Free', 'COD', '425', '2022-03-09 07:14:16', '2022-03-09 07:14:16'),
(13, '77', 'codtran_176S827Mg', 'Free', 'COD', '1929', '2022-03-30 18:20:39', '2022-03-30 18:20:39'),
(14, '79', 'codtran_98K558Xt', 'Free', 'COD', '1508', '2022-03-31 13:18:03', '2022-03-31 13:18:03'),
(15, '82', 'codtran_646W934Nj', 'Free', 'COD', '1124', '2022-04-04 08:43:13', '2022-04-04 08:43:13'),
(16, '94', 'codtran_34U842Js', 'Free', 'COD', '754', '2022-04-27 12:35:04', '2022-04-27 12:35:04'),
(17, '97', 'codtran_648B855Kf', 'Free', 'COD', '7300', '2022-04-27 15:09:55', '2022-04-27 15:09:55'),
(18, '98', 'codtran_256X219Iq', 'Free', 'COD', '1843', '2022-04-29 10:08:37', '2022-04-29 10:08:37'),
(19, '99', 'codtran_430J893Va', 'Free', 'COD', '530', '2022-04-29 10:15:04', '2022-04-29 10:15:04'),
(20, '100', 'codtran_769V605Gt', 'Free', 'COD', '1791', '2022-04-29 10:18:13', '2022-04-29 10:18:13'),
(21, '101', 'codtran_518F646Ex', 'Free', 'COD', '1262', '2022-04-29 10:27:19', '2022-04-29 10:27:19'),
(22, '102', 'codtran_723T793Lj', 'Free', 'COD', '1589', '2022-04-29 10:40:13', '2022-04-29 10:40:13'),
(23, '103', 'codtran_489E869Yf', 'Free', 'COD', '754', '2022-04-29 10:45:57', '2022-04-29 10:45:57'),
(24, '104', 'codtran_100C640Tl', 'Free', 'COD', '754', '2022-04-29 10:48:20', '2022-04-29 10:48:20'),
(25, '105', 'codtran_319Y370Zc', 'Free', 'COD', '1284', '2022-04-29 10:50:46', '2022-04-29 10:50:46'),
(26, '106', 'pay_JP95BU2kvOZvSN', 'Free', 'Razorpay', '531', '2022-04-29 10:52:22', '2022-04-29 10:52:22'),
(27, '107', 'codtran_442C718Hz', 'Free', 'COD', '1772', '2022-04-29 11:49:23', '2022-04-29 11:49:23'),
(28, '108', 'codtran_428W305Ko', 'Free', 'COD', '1649', '2022-04-29 11:51:58', '2022-04-29 11:51:58'),
(29, '109', 'codtran_170L871Lu', 'Free', 'COD', '2488', '2022-04-30 04:32:14', '2022-04-30 04:32:14'),
(30, '110', 'codtran_618X945Fz', 'Free', 'COD', '1830', '2022-04-30 04:38:11', '2022-04-30 04:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `payment_table_name`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'razorpay', 'Razorpay', 'This is razorpay payment gateway.', 1, '2022-02-28 13:02:25', '2022-03-01 07:04:47'),
(2, 'paytm', 'Paytm', 'This is paytm payment gateway.', 1, '2022-02-28 13:02:25', '2022-02-28 13:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `paytm_settings`
--

CREATE TABLE `paytm_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marchant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marchant_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marchant_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paytm_settings`
--

INSERT INTO `paytm_settings` (`id`, `name`, `environment`, `marchant_id`, `marchant_key`, `marchant_website`, `channel`, `industry_type`, `created_at`, `updated_at`) VALUES
(1, 'Paytm', 'local', 'tkogux49985047638244', 'LhNGUUKE9xCQ9xY8', 'WEBSTAGING', 'WEB', 'Retail', '2022-03-01 11:35:51', '2022-03-01 11:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `brand_id` int(50) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_discount` double(8,2) DEFAULT NULL,
  `product_weight` double(8,2) NOT NULL,
  `product_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wash_care` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fabric` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pattern` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sleeve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occassion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` enum('No','Yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `todays_status` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `section_id`, `brand_id`, `product_name`, `product_code`, `group_code`, `product_color`, `product_price`, `product_discount`, `product_weight`, `product_video`, `main_image`, `description`, `wash_care`, `fabric`, `pattern`, `sleeve`, `fit`, `occassion`, `meta_title`, `meta_description`, `meta_keywords`, `is_featured`, `todays_status`, `status`, `created_at`, `updated_at`) VALUES
(10, 20, 1, 5, 'Boxers', 'VV00', '224235', 'Red', 999.00, 10.00, 25.00, 'screencast-nimbus-capture-2022.01.25-20_15_17.webm-192006061.webm', '1647348235-web-tile.webp', 'Add this weft knitted Maroon V-Neck Half Sleeves T-shirt to your comfortable, casual yet trendy closet. It\'s high-grade cotton blend gives a soft touch feel and stays sharp through the day. It’s NOT just a t-shirt. It’s got a pleasing, real character to it.', 'Natural', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'mfort and style - That\'s what Ultramate\'s athleisure wear t-shirt stands for.', 'Add this weft knitted Maroon V-Neck Half Sleeves T-shirt to your comfortable, casual yet trendy closet. It\'s high-grade cotton blend gives a soft touch feel and stays sharp through the day. It’s NOT just a t-shirt. It’s got a pleasing, real character to it.', 'mfort and style - That\'s what Ultramate\'s athleisure wear t-shirt stands for.', 'Yes', 1, 1, '2022-02-09 05:36:41', '2022-03-15 07:15:48'),
(11, 21, 1, 5, 'Shorts', 'VV001', '224235', 'Yellow', 1999.00, 10.00, 25.00, 'production ID_4067804.mp4-707239277.mp4', '1647348446-web-tile3.webp', 'The classic dark blue jeans are the most versatile pair of jeans you’ll ever own. Dress it up with a sports jacket, button down shirt and a pair of brown dress shoes or dress them down completely with a t-shirt and sneakers. The dark blue jeans can be styled in many different ways to suit several occasions. A slim, dark pair will remain timeless and keep you looking stylish from one season to the next.', 'Dry', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'The classic dark blue jeans are the most versatile pair of jeans you’ll ever own.', 'The classic dark blue jeans are the most versatile pair of jeans you’ll ever own. Dress it up with a sports jacket, button down shirt and a pair of brown dress shoes or dress them down completely with a t-shirt and sneakers. The dark blue jeans can be styled in many different ways to suit several occasions. A slim, dark pair will remain timeless and keep you looking stylish from one season to the next.', 'The classic dark blue jeans are the most versatile pair of jeans you’ll ever own.', 'Yes', 1, 1, '2022-02-09 05:43:36', '2022-03-15 07:18:08'),
(12, 17, 1, 2, 'Bermunda', 'VV006', NULL, 'Yellow', 1999.00, 20.00, 25.00, 'production ID_4067804.mp4-1034353888.mp4', '1644474093-1-3.jpg', 'Featuring 100% durable soft cotton sourced from the Deccan Plateau of India, it’s a Breeeze to step into the ultra-light boxer shorts. It’s so light, it may make light of a tough day too.', 'Natural', 'cotton', 'Plain', 'Half Sleeve', 'Slim', 'Casual', 'Superior breathability with ultra-light fabric for everyday wear', 'Featuring 100% durable soft cotton sourced from the Deccan Plateau of India, it’s a Breeeze to step into the ultra-light boxer shorts. It’s so light, it may make light of a tough day too.', 'Superior breathability with ultra-light fabric for everyday wear', 'Yes', 1, 1, '2022-02-10 00:51:33', '2022-03-14 01:26:36'),
(13, 26, 2, 5, 'women\'s Shorts', 'VV008', '343r4', 'Pink', 1999.00, 10.00, 25.00, 'production ID_4067804.mp4-1231434105.mp4', '1647348597-web-tile4.webp', 'Buy Black Jeans for Men by DNMX Online in India at Rs. 679. Shop for more DNMX Jeanss at Ajio.com and avail great discounts', 'Natural', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'Buy Black Jeans for Men by DNMX Online in India at Rs. 679. Shop for more DNMX Jeanss at Ajio.com and avail great discounts', 'Buy Black Jeans for Men by DNMX Online in India at Rs. 679. Shop for more DNMX Jeanss at Ajio.com and avail great discounts', 'Buy Black Jeans for Men by DNMX Online in India at Rs. 679. Shop for more DNMX Jeanss at Ajio.com and avail great discounts', 'Yes', 1, 1, '2022-02-10 00:54:42', '2022-04-01 07:07:46'),
(14, 26, 2, 5, 'Women\'s Shirts', 'VV0010', '224235', 'White', 999.00, 20.00, 25.00, 'production ID_4067804.mp4-1243135392.mp4', '1647348733-womensshirts-website-tile_krwwb0b.webp', 'Flex\r\nFlex moves with you for comfort that feels better than the rest\r\nHigh stretch level that keeps its shape\r\nWhite wash & destroyed\r\nOur jeans are your canvas. Remix yours.\r\nStyle: WES0114712100 | Color: White', 'Natural', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'American Eagle Men White Flex Slim Jean', 'Flex\r\nFlex moves with you for comfort that feels better than the rest\r\nHigh stretch level that keeps its shape\r\nWhite wash & destroyed\r\nOur jeans are your canvas. Remix yours.\r\nStyle: WES0114712100 | Color: White', 'American Eagle Men White Flex Slim Jean', 'Yes', 1, 1, '2022-02-10 02:24:12', '2022-03-15 07:29:36'),
(15, 38, 1, 5, 'Jacket', 'VV001', '224235', 'Black', 1999.00, 20.00, 25.00, 'production ID_4067804.mp4-600429042.mp4', '1647349662-menwebsite-tiles_09jQKcQ.webp', 'For the first time Juventus celebrates denim by lauching regular fit jeans. The garment is enriched with unique details: embroidery of the logo on the', 'Natural', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'Indigo Blue Solid Slim Fit Jeans | JadeBlue Sport', 'For the first time Juventus celebrates denim by lauching regular fit jeans. The garment is enriched with unique details: embroidery of the logo on the', 'Indigo Blue Solid Slim Fit Jeans | JadeBlue Sport', 'Yes', 1, 1, '2022-02-10 02:35:07', '2022-04-01 10:41:30'),
(16, 27, 2, 5, 'co-ORD-SETS', 'VV0034', '44543', 'Yellow', 1999.00, 20.00, 25.00, 'production ID_4067804.mp4-2020411302.mp4', '1647349240-co-ordsets-website-tile.webp', 'Copyright ownership gives the owner the exclusive right to use the work, with some exceptions. When a person creates an original work, fixed in a tangible medium, he or she automatically owns copyright to the work.', 'Dry', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'Which types of work are subject to copyright?', 'Copyright ownership gives the owner the exclusive right to use the work, with some exceptions. When a person creates an original work, fixed in a tangible medium, he or she automatically owns copyright to the work.', 'Which types of work are subject to copyright?', 'Yes', 1, 1, '2022-02-10 02:38:35', '2022-04-01 10:43:50'),
(17, 27, 2, 5, 'Dress', 'rabbit11', '256', 'pink', 799.00, 20.00, 100.00, 'images.jpg-1675156047.jpg', '1647349418-Dresses_website-tile_1.webp', 'A short sleeve T-Shirt with Crew neck and Straight-Hem in graphic HD print.\r\n- Designed for everyday wear, from the office to date night.\r\n- Best worn under outerwear and leather jackets.\r\n- Slim fit.\r\n- Fabric: 100% Cotton\r\nSIZE\r\n- The model (Chest-39, Waist-32, Hips-38, Height-188 cms) is wearing a size M.', 'Natural', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'RABBIT-4- MENS T-SHIRT - RUST', 'RABBIT-4- MENS T-SHIRT - RUST', 'RABBIT-4- MENS T-SHIRT - RUST', 'Yes', 1, 1, '2022-03-11 05:31:30', '2022-04-01 10:43:37'),
(18, 17, 1, 5, 'Innerwear', 'rabbit112', '256', 'pink', 999.00, 10.00, 25.00, 'images.jpg-1063539231.jpg', '1647349775-innerwear-website-tile.webp', '- A short sleeve T-Shirt with Crew neck and Straight-Hem in graphic HD print.\r\n- Designed for everyday wear, from the office to date night.\r\n- Best worn under outerwear and leather jackets.\r\n- Slim fit.\r\n- Fabric: 100% Cotton\r\n\r\nSIZE\r\n- The model (Chest-39, Waist-32, Hips-38, Height-188 cms) is wearing a size M.', 'Natural', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'RABBIT-4- MENS T-SHIRT - RUST', 'RABBIT-4- MENS T-SHIRT - RUST', 'RABBIT-4- MENS T-SHIRT - RUST', 'Yes', 1, 1, '2022-03-11 05:34:24', '2022-04-01 10:42:08'),
(19, 29, 1, 5, 'Shirt', 'vv0089', '22', 'black', 799.00, 20.00, 15.00, '637957-6337533.avif-490337242.avif', '1647349341-shhirts-website-tile.webp', 'Details\r\nA clothing sets featuring solid pattern, a crew neck and short sleeve, and a matching pant with drawstring and slant pocket.\r\n\r\nContent + Care\r\n100% Cotton Terry 240 Gsm\r\nSize + Fit\r\nModel is 6\'1\" and wearing Medium\r\nProduct Code : 0059024101', 'Natural', 'wool', 'Solid', 'Sleeveles', 'Slim', 'Formal', 'Crew Neck Tee & Pant Sets', 'Details\r\nA clothing sets featuring solid pattern, a crew neck and short sleeve, and a matching pant with drawstring and slant pocket.\r\n\r\nContent + Care\r\n100% Cotton Terry 240 Gsm\r\nSize + Fit\r\nModel is 6\'1\" and wearing Medium\r\nProduct Code : 0059024101', 'Crew Neck Tee & Pant Sets', 'Yes', 1, 1, '2022-03-14 01:30:28', '2022-03-15 07:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `size`, `color`, `price`, `stock`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(8, 10, 'S', 'Red', 40.00, 15, 'DISC-40', 1, '2022-02-11 09:43:03', '2022-02-11 09:43:03'),
(9, 10, 'M', 'Red', 45.00, 12, 'DISC-4048654', 1, '2022-02-11 09:43:03', '2022-02-11 09:43:03'),
(11, 10, 'XL', 'Red', 2222.00, 15, 'silver-156', 1, '2022-02-11 09:43:03', '2022-02-11 09:43:03'),
(12, 14, 'S', 'white', 750.00, 5, 'J01', 1, '2022-03-03 04:50:18', '2022-03-03 04:50:28'),
(13, 14, 'M', 'white', 799.00, 4, 'J02', 1, '2022-03-03 04:50:18', '2022-03-03 04:50:28'),
(14, 14, 'L', 'white', 850.00, 7, 'J03', 1, '2022-03-03 04:50:18', '2022-03-03 04:50:28'),
(15, 14, 'XL', 'white', 900.00, 5, 'J04', 1, '2022-03-03 04:50:18', '2022-03-03 04:50:28'),
(20, 17, 'S', 'Red', 799.00, 10, 're11', 1, '2022-03-11 05:39:45', '2022-03-11 05:39:45'),
(22, 17, 'L', 'Red', 1999.00, 12, 're33', 1, '2022-03-11 05:39:46', '2022-03-11 05:39:46'),
(23, 17, 'XXL', 'Red', 2999.00, 12, 're44', 1, '2022-03-11 05:39:46', '2022-03-11 05:39:46'),
(24, 20, 'S', 'Black', 799.00, 15, 'Black22', 1, '2022-04-01 07:14:40', '2022-04-01 07:14:40'),
(25, 20, 'M', 'Black', 799.00, 10, 'Black223', 1, '2022-04-01 07:14:40', '2022-04-01 07:14:40'),
(26, 20, 'L', 'Black', 899.00, 12, 'Black445', 1, '2022-04-01 07:14:40', '2022-04-01 07:14:40'),
(27, 20, 'XL', 'Black', 1299.00, 54, 'Black585', 1, '2022-04-01 07:14:40', '2022-04-01 07:14:40'),
(28, 19, 'S', 'Black', 599.00, 50, 'Black116', 1, '2022-04-01 07:18:57', '2022-04-01 07:18:57'),
(29, 19, 'M', 'Black', 799.00, 25, 'Black225', 1, '2022-04-01 07:18:57', '2022-04-01 07:18:57'),
(30, 19, 'L', 'Black', 899.00, 15, 'Black96', 1, '2022-04-01 07:18:57', '2022-04-01 07:18:57'),
(31, 11, 's', 'white', 800.00, 4, 'H01', 1, '2022-04-20 14:43:02', '2022-04-20 14:43:02'),
(32, 11, 'm', 'white', 900.00, 3, 'H02', 1, '2022-04-20 14:43:02', '2022-04-20 14:43:02'),
(33, 11, 'l', 'white', 1000.00, 6, 'H03', 1, '2022-04-20 14:43:02', '2022-04-20 14:43:02'),
(34, 11, 'xl', 'white', 1100.00, 2, 'H04', 1, '2022-04-20 14:43:02', '2022-04-20 14:43:02'),
(35, 12, 's', 'gray', 250.00, 4, 'K01', 1, '2022-04-20 14:45:02', '2022-04-20 14:45:02'),
(36, 12, 'm', 'gray', 280.00, 3, 'K02', 1, '2022-04-20 14:45:02', '2022-04-20 14:45:02'),
(37, 12, 'l', 'gray', 350.00, 6, 'K03', 1, '2022-04-20 14:45:02', '2022-04-20 14:45:02'),
(38, 12, 'xl', 'gray', 410.00, 1, 'K04', 1, '2022-04-20 14:45:02', '2022-04-20 14:45:02'),
(39, 13, 's', 'pink', 210.00, 6, 'L01', 1, '2022-04-20 14:46:52', '2022-04-20 14:46:52'),
(40, 13, 'm', 'pink', 240.00, 4, 'L02', 1, '2022-04-20 14:46:52', '2022-04-20 14:46:52'),
(41, 13, 'l', 'pink', 260.00, 3, 'L03', 1, '2022-04-20 14:46:52', '2022-04-20 14:46:52'),
(42, 13, 'xl', 'pink', 270.00, 1, 'L04', 1, '2022-04-20 14:46:52', '2022-04-20 14:46:52'),
(43, 15, 's', 'red', 799.00, 121, 'ag01', 1, '2022-04-20 14:49:55', '2022-04-20 14:49:55'),
(44, 15, 'm', 'red', 799.00, 13, 'ag02', 1, '2022-04-20 14:49:55', '2022-04-20 14:49:55'),
(45, 15, 'l', 'red', 899.00, 33, 'ag03', 1, '2022-04-20 14:49:55', '2022-04-20 14:49:55'),
(46, 15, 'xl', 'red', 999.00, 1354, 'ag04', 1, '2022-04-20 14:49:55', '2022-04-20 14:49:55'),
(47, 16, 's', 'Yelllow', 799.00, 153, 'YS01', 1, '2022-04-20 14:51:29', '2022-04-20 14:51:29'),
(48, 16, 'm', 'Yelllow', 899.00, 235, 'YS02', 1, '2022-04-20 14:51:29', '2022-04-20 14:51:29'),
(49, 16, 'l', 'Yelllow', 999.00, 125, 'YS03', 1, '2022-04-20 14:51:29', '2022-04-20 14:51:29'),
(50, 16, 'xl', 'Yelllow', 1099.00, 412, 'YS04', 1, '2022-04-20 14:51:29', '2022-04-20 14:51:29'),
(51, 18, 'xs', 'Blue', 499.00, 154, 'blo1', 1, '2022-04-20 14:53:50', '2022-04-20 14:53:50'),
(52, 18, 's', 'Blue', 499.00, 136, 'blo2', 1, '2022-04-20 14:53:50', '2022-04-20 14:53:50'),
(53, 18, 'l', 'Blue', 599.00, 154, 'blo3', 1, '2022-04-20 14:53:50', '2022-04-20 14:53:50'),
(54, 18, 'xl', 'Blue', 699.00, 158, 'blo4', 1, '2022-04-20 14:53:50', '2022-04-20 14:53:50'),
(55, 18, 'xxl', 'Blue', 799.00, 351, 'blo5', 1, '2022-04-20 14:53:50', '2022-04-20 14:53:50'),
(56, 19, 'XL', 'Black', 999.00, 132, 'Black123', 1, '2022-04-20 14:54:58', '2022-04-20 14:54:58'),
(57, 17, 'XL', 'Red', 999.00, 155, 're15', 1, '2022-04-20 14:56:03', '2022-04-20 14:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 10, '1644592325-download (1).jpg', 1, '2022-02-11 09:42:05', '2022-02-11 09:42:05'),
(7, 10, '1644592325-41LDkAGCztL.jpg', 1, '2022-02-11 09:42:05', '2022-02-11 09:42:05'),
(8, 10, '1644592325-363407-1832364.jpeg', 1, '2022-02-11 09:42:05', '2022-02-11 09:42:05'),
(9, 10, '1644592325-363407-1832364.jpeg', 1, '2022-02-11 09:42:05', '2022-02-11 09:42:05'),
(10, 18, '1646996740-2_1418d8b1-f625-4531-b858-bf6e2ba4b2f3_1_765x.webp', 1, '2022-03-11 05:35:40', '2022-03-11 05:35:40'),
(11, 18, '1646996740-4_7f3e5af8-4901-4e17-b905-ec014de46f0a_1_765x.webp', 1, '2022-03-11 05:35:40', '2022-03-11 05:35:40'),
(12, 18, '1646996740-3_c8018464-4802-4e7d-a7ef-eecd44faeccb_1_765x.webp', 1, '2022-03-11 05:35:40', '2022-03-11 05:35:40'),
(13, 18, '1646996740-1_dac179d7-7d1c-438c-a053-e85703a08be1_765x.webp', 1, '2022-03-11 05:35:40', '2022-03-11 05:35:40'),
(14, 17, '1646996804-RABBIT4RUSTTSHIRT_23_765x.webp', 1, '2022-03-11 05:36:44', '2022-03-11 05:36:44'),
(15, 17, '1646996804-RABBIT4RUSTTSHIRT_17_765x.webp', 1, '2022-03-11 05:36:44', '2022-03-11 05:36:44'),
(16, 17, '1646996804-RABBIT4RUSTTSHIRT_20_765x.webp', 1, '2022-03-11 05:36:44', '2022-03-11 05:36:44'),
(17, 20, '1648797339-1644212051_9763091.webp', 1, '2022-04-01 07:15:39', '2022-04-01 07:15:39'),
(18, 20, '1648797339-1644212051_1804047.webp', 1, '2022-04-01 07:15:39', '2022-04-01 07:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `razorpay_settings`
--

CREATE TABLE `razorpay_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `razorpay_settings`
--

INSERT INTO `razorpay_settings` (`id`, `name`, `key`, `secret`, `created_at`, `updated_at`) VALUES
(1, 'Razorpay', 'rzp_test_nJWecPILSkDusz', 'i6gjxdZlssGNaxV0Lq7egN6q', '2022-03-01 11:36:52', '2022-03-01 07:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `save_laters`
--

CREATE TABLE `save_laters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save_laters`
--

INSERT INTO `save_laters` (`id`, `cart_id`, `session_id`, `user_id`, `product_id`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 97, 'KHSUPKqeQSX8rWA0bgMAuTt1XtEfiQ06JL77YKBt', 1, '17', 'L', 1, '2022-04-20 14:36:56', '2022-04-20 14:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men', 1, NULL, '2022-01-24 09:22:53'),
(2, 'Women', 1, NULL, NULL),
(3, 'Kids', 1, NULL, NULL),
(8, 'Home & Leaving', 1, '2022-03-14 14:38:02', '2022-03-14 14:38:02'),
(9, 'Beauty', 1, '2022-03-14 14:38:11', '2022-03-14 14:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `category`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Phone pe', '100% Secure Payment', '1646397442-PhonePe-Logo.png', '2022-03-04 07:07:22', '2022-03-04 07:07:22'),
(4, 'G Pay', '100% Secure Payment', '1646397941-google-pay.png', '2022-03-04 07:15:41', '2022-03-04 07:15:41'),
(5, 'Amazon Pay', '100% Secure Payment', '1646397968-amazonpay-logo.png', '2022-03-04 07:16:08', '2022-03-04 07:18:58'),
(6, 'MasterCard', '100% Secure Payment', '1646398020-MasterCard_logo.png', '2022-03-04 07:17:00', '2022-03-04 07:19:05'),
(7, 'Paytm', '100% Secure Payment', '1646398045-paytm.png', '2022-03-04 07:17:25', '2022-03-04 07:17:25'),
(8, 'FedEx', 'Shipping Partners', '1646398228-fedex.png', '2022-03-04 07:20:28', '2022-03-04 07:20:28'),
(9, 'DTDC', 'Shipping Partners', '1646398251-dtdc.png', '2022-03-04 07:20:51', '2022-03-04 07:20:51'),
(10, 'DelhiVery', 'Shipping Partners', '1646398283-delivery.png', '2022-03-04 07:21:23', '2022-03-04 07:21:23'),
(11, 'Ecom Express', 'Shipping Partners', '1646398324-ecom-express.png', '2022-03-04 07:22:04', '2022-03-04 07:22:04'),
(12, 'Express Bees', 'Shipping Partners', '1646398359-express-bees.png', '2022-03-04 07:22:39', '2022-03-04 07:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_charges` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `country`, `shipping_charges`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', 50.00, 1, '2022-03-09 08:04:47', '2022-03-09 07:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `slug`, `caption`, `created_at`, `updated_at`) VALUES
(1, '1643291637-img1.webp', 'product', '20% off', '2022-01-27 07:45:44', '2022-01-27 08:30:18'),
(3, '1643291647-img2.webp', 'product', '40% off', '2022-01-27 08:21:02', '2022-01-27 08:30:39'),
(4, '1643291660-img3.webp', 'product', NULL, '2022-01-27 08:24:20', '2022-01-27 08:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `socialpages`
--

CREATE TABLE `socialpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialpages`
--

INSERT INTO `socialpages` (`id`, `name`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com', '1', NULL, '2022-01-28 06:07:37'),
(2, 'Google Plus', 'https://plus.google.com', '0', NULL, '2022-01-28 07:31:12'),
(3, 'Twitter', 'https://twitter.com', '1', NULL, '2022-01-28 06:07:37'),
(4, 'Linkedin ', 'https://www.linkedin.com', '1', NULL, '2022-01-28 06:07:38'),
(5, 'Dribble ', 'https://dribbble.com', '1', NULL, '2022-01-28 06:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `socialsettings`
--

CREATE TABLE `socialsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialsettings`
--

INSERT INTO `socialsettings` (`id`, `name`, `app_id`, `app_secret`, `url`, `redirect_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '367904891791631', '71e4b7b6b165e10b8fc0dd18481beb06', 'http://e-commerce.workstream.club/', 'https://e-commerce.workstream.club/facebook/callback', 1, NULL, '2022-04-01 13:20:05'),
(2, 'Google', '271553803862-i6hm9t3sta6bb086ub83u3dm35duodff.apps.googleusercontent.com', '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', 'http://e-commerce.workstream.club/', 'http://e-commerce.workstream.club/callback/google', 1, NULL, '2022-04-01 07:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `special_discounts`
--

CREATE TABLE `special_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `minimum_price` double(8,2) NOT NULL,
  `discount` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special_discounts`
--

INSERT INTO `special_discounts` (`id`, `minimum_price`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1, 2000.00, 1000, 1, '2022-02-22 07:10:20', '2022-02-24 07:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'pfswarnadwip@gmail.com', '2022-02-03 09:16:57', '2022-02-03 09:16:57'),
(2, 'pfswarnadwip@gmail.com', '2022-02-15 01:08:28', '2022-02-15 01:08:28'),
(3, 'pfswarnadwip@gmail.com', '2022-02-15 06:10:51', '2022-02-15 06:10:51'),
(4, 'jacky@gmail.com', '2022-02-15 06:44:42', '2022-02-15 06:44:42'),
(5, 'rohit@yopmail.com', '2022-02-15 06:45:10', '2022-02-15 06:45:10'),
(6, 'rohit1@yopmail.com', '2022-02-15 06:45:51', '2022-02-15 06:45:51'),
(7, 'mala@yopmail.com', '2022-02-15 06:50:23', '2022-02-15 06:50:23'),
(8, 'prasad@yopmail.com', '2022-02-15 06:50:52', '2022-02-15 06:50:52'),
(10, 'ss@yopmail.com', '2022-02-15 06:54:43', '2022-02-15 06:54:43'),
(11, 'pfswarnadwip@yopmail.com', '2022-02-15 07:27:58', '2022-02-15 07:27:58'),
(12, 'shreya4561@yopmail.com', '2022-02-15 07:34:47', '2022-02-15 07:34:47'),
(13, 'sanu@yopmail.com', '2022-02-15 07:36:17', '2022-02-15 07:36:17'),
(14, 'shreya456@yopmail.com', '2022-02-15 07:36:32', '2022-02-15 07:36:32'),
(15, 'swarna@yopmail.com', '2022-03-10 07:09:37', '2022-03-10 07:09:37'),
(16, 'swarna123@yopmail.com', '2022-03-10 07:10:02', '2022-03-10 07:10:02'),
(17, 'lalu', '2022-03-12 01:47:32', '2022-03-12 01:47:32'),
(18, 'laluprasad123@yopmail.com', '2022-04-01 10:46:36', '2022-04-01 10:46:36'),
(19, 'rahul@yopmail.com', '2022-04-27 14:51:40', '2022-04-27 14:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgst` int(11) NOT NULL,
  `sgst` int(11) NOT NULL,
  `igst` int(11) NOT NULL,
  `apply_tax` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `country`, `cgst`, `sgst`, `igst`, `apply_tax`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', 9, 9, 18, 'After Discount', 1, '2022-02-21 06:32:09', '2022-02-22 07:10:23'),
(2, 'India', 9, 9, 18, 'Before Discount', 1, '2022-02-21 09:08:55', '2022-02-21 09:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dp` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `dp`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `social_id`, `social_type`) VALUES
(1, 'Swarnadwip Nath', 'pfswarnadwip@yopmail.com', '+917431331525', NULL, '1647266590-download (3).jpg', '1', NULL, '$2y$10$/bDgd1XuzK6muhY3oRRWIus/vxz1R8FFIlG4gFEwfLxcJyJY8scry', NULL, '2022-01-12 14:18:17', '2022-03-14 08:33:10', NULL, NULL),
(2, 'avijitpanda', 'privy@yopmail.com', '08981083112', 'Male', '1642689493-pexels-photo-674010.jpeg', '1', NULL, '$2y$10$DfUeeDM9MdYBSeWblvAqve9x1eFPjYZX15o0RNqh5BbcuOkIKNUTy', NULL, '2022-01-20 14:29:11', '2022-01-20 14:38:13', NULL, NULL),
(5, 'Shreya Das', 'shreya@yopmail.com', '+915689784578', NULL, NULL, '1', NULL, '$2y$10$4e3x6lJFE86A7OJWqB5tA.gXJiiyDTbKUs4hnamjp0OVQyd6Q3HCW', NULL, '2022-02-17 07:06:19', '2022-02-17 07:06:44', NULL, NULL),
(6, 'Avijit', 'pfavijit@gmail.com', '09876543210', NULL, NULL, '1', NULL, '$2y$10$UEMAO.xi3vSVs26yLIbPI.SxKkH1VNBUduMJhvx1Y1MZ5P.uVtI8u', NULL, '2022-03-02 08:26:41', '2022-03-02 08:26:57', NULL, NULL),
(7, 'Manish Dubey', 'dubeymanish965@gmail.com', '8999892699', NULL, NULL, '1', NULL, '$2y$10$cBom9yecpuIab7gW7UwwDuoywzhrh026Mi22iAejruorZ6V6MIb.C', NULL, '2022-03-22 16:43:24', '2022-03-22 16:44:23', NULL, NULL),
(8, 'jacky', 'jacky@yopmail.com', '8981083112', NULL, NULL, '1', NULL, '$2y$10$dzWNSMyHhkO8L1iQ7gfKX.7CdvzXfctXdA9.Evj3g7zBwyZagO./C', NULL, '2022-03-30 17:53:01', '2022-03-30 17:53:21', NULL, NULL),
(9, 'manish', 'dubeymanish965@yopmail.com', '8999892699', NULL, NULL, '1', NULL, '$2y$10$Xya8Kb9qhyNU3AQ9m3uZWu1n6Mt8/J4BF18E6zNDhFV2h4wEE/oYK', NULL, '2022-03-30 17:54:44', '2022-03-30 17:55:24', NULL, NULL),
(12, 'Swarnadwip Nath', 'pfswarnadwip@gmail.com', '7431255695', 'Male', '1649061583-ZiClJf-1920w.jpg', NULL, NULL, 'eyJpdiI6IkFOWHB2NHc3Y2QwSUJmeHEvRkVKWGc9PSIsInZhbHVlIjoiS1pabTZvbktxeTd1WTdqMzN2VlJDNEIzalpzRzFwK0ozZnJ0UDYwRWxZUT0iLCJtYWMiOiJiMmEwYTVhNjY0Mzg3ZDIwYzk4YjdlODZiOGZjMzNlOWVmZDhjYTQ2MTAyYWY2MjJmNTdlMzNlY2Y2ODBhYTc0IiwidGFnIjoiIn0=', NULL, '2022-04-01 13:47:19', '2022-04-04 08:39:43', '153184153825386', 'facebook'),
(13, 'User', 'user@yopmail.com', '536431531546', NULL, NULL, '1', NULL, '$2y$10$XVKspkEdrlcUblgo8.WbneHeitIpPGeRCXYJQDl9IKIcBAYhq1yi.', NULL, '2022-04-20 06:33:44', '2022-04-20 06:34:34', NULL, NULL),
(15, 'Avishek Pramanick', 'futuristavishek@gmail.com', NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6IkUxa3NkOGNjZjRWT0xyZVZiRHZpWlE9PSIsInZhbHVlIjoiRE9EOUs0RXkwa0JNM0RiVnJndVo3dElCYXdzRjdNS2xCSzZiQTIwUEtpaz0iLCJtYWMiOiJkNzM2YzMzZTI2N2ZhYzM1MGFlYTQwMDJmYmZiM2VlODFkYWZjNGNhMGJhZDM0MGNhYTg5NzUwNzk0OTVlOTNiIiwidGFnIjoiIn0=', NULL, '2022-04-20 06:36:14', '2022-04-20 06:36:14', '112092365816359705654', 'google'),
(16, 'Kalu Da', 'pfanushree@gmail.com', NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6Ik9UNWVQeHdOWjd5Y01paW44SER4dFE9PSIsInZhbHVlIjoiS0paRzdqTjRFUktkOERBQW9hbkV2VW1ScjloQU85U1ZOYnI5NmMvZjhPZz0iLCJtYWMiOiI2ZGEyMjdhMDk0NWY3YmFmYjVjZjVlM2ZiNTkxNmYwNmIwMzkyMGZlODczZTZmYjlhODRjM2RmNzJiOTlkYTE2IiwidGFnIjoiIn0=', NULL, '2022-04-20 06:36:53', '2022-04-20 06:36:53', '143250618262881', 'facebook');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(9, '1', '18', '2022-03-14 07:51:50', '2022-03-14 07:51:50'),
(16, '1', '10', '2022-04-18 14:19:56', '2022-04-18 14:19:56'),
(17, '1', '15', '2022-04-22 14:25:47', '2022-04-22 14:25:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addblogs`
--
ALTER TABLE `addblogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addmodels`
--
ALTER TABLE `addmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliver_addresses`
--
ALTER TABLE `deliver_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_customizations`
--
ALTER TABLE `home_page_customizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_logs`
--
ALTER TABLE `order_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paytm_settings`
--
ALTER TABLE `paytm_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `razorpay_settings`
--
ALTER TABLE `razorpay_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_laters`
--
ALTER TABLE `save_laters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialpages`
--
ALTER TABLE `socialpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialsettings`
--
ALTER TABLE `socialsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_discounts`
--
ALTER TABLE `special_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addblogs`
--
ALTER TABLE `addblogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addmodels`
--
ALTER TABLE `addmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deliver_addresses`
--
ALTER TABLE `deliver_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `home_page_customizations`
--
ALTER TABLE `home_page_customizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `order_logs`
--
ALTER TABLE `order_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paytm_settings`
--
ALTER TABLE `paytm_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `razorpay_settings`
--
ALTER TABLE `razorpay_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `save_laters`
--
ALTER TABLE `save_laters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `socialpages`
--
ALTER TABLE `socialpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `socialsettings`
--
ALTER TABLE `socialsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `special_discounts`
--
ALTER TABLE `special_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
