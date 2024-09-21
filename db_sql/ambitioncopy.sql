-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 01:29 PM
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
-- Database: `ambitioncopy`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `long_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `deleted_at`, `created_at`, `updated_at`, `long_description`) VALUES
(4, 'About Us', 'About Us-16965048011807021751.webp', 'AMBITION PIPES is one the best PIPE &amp; FITTINGS industries founded in RAJKOT, we have a wide experienced team. We provided an ultimate pipe &amp; fittings solution to various companies of Gujarat.', NULL, '2023-05-23 05:06:47', '2023-12-29 06:38:29', '<p>Ambition Pipes has been established to set the new trends and achieve new milestones in the piping industry. With state-of-the-art production facilities inda modern-day technologies, we aim to bring amtinuous innovations and better piping solutions in the market. We have set our bar higher in terms of compromise-free quality and sustainability and aspire to be among the pioneers of the industry.</p><p>Ambition Pipes is an ISO Certified Company with its manufacturing units spread across 46000 sq ft at Khambha, Gujarat and 32000 sq ft at Ravki Gujarat. With the production capacity of Rs 3 Lakh Kilograms per month and Rs 40 Lakh Kilograms per year, the company procures the turnover of Rs 25 Crore every year. Our manufacturing unit is equipped with in-house Laboratory, Testing Department, Extruder Machine, CNC, and Moulding Machine. The distribution channels of Ambition Pipes has been spread across other states like Rajasthan, Madhya Pradesh and Uttar Pradesh, and we are inclined to make even wider expansion in the coming years.</p><p>Our core products in the present date are various kinds of PVC Pipes &amp; Fitting like CPVC Pipes, UPVC Pipes, Conduit Pipes, SWR Pipes, Column Pipes, and Casing Pipes. We tend to exceed our consumer\'s expectations with our QC department in place to ensure the best quality production and accurate plumbing solutions to set high parameters for residential, corporate and industeal construction.<br></p>'),
(7, 'Vision', 'Vision-1696510542385569291.webp', 'Our aim is to create excellent and ingenious PVC Products manufacturing unit that is committed towards providing superior products that meets the topmost safety standards and thut gain utmost faith in our products from our consumers.', NULL, '2023-05-23 05:06:47', '2023-12-29 05:53:35', '<p>Established in 2022, We \"<b>RADIX TECHNOCAST</b>\", is Gujarat (Rajkot) based leading Manufacturer, Supplier and Trader of Engineering Parts have built up good reputation in industry, our offered range of collection are Engineering Parts that can be casted using sand casting. We provide various types of casting like mild steel casting, SS 316, SS 304, EN 9 &amp; EN 8.</p><p><br></p>'),
(8, 'Mission', 'Mission-16965109841088883354.webp', 'We believe in achieving excellence in everything and be the trendsetters of the industry.&nbsp; A strong intent to provide quality and unmatchable services inspires us to give our best output to our consumers.', NULL, '2023-05-23 05:06:47', '2023-12-29 05:57:36', '<p>Established in 2022, We \"<b>RADIX TECHNOCAST</b>\", is Gujarat (Rajkot) based leading Manufacturer, Supplier and Trader of Engineering Parts have built up good reputation in industry, our offered range of collection are Engineering Parts that can be casted using sand casting. We provide various types of casting like mild steel casting, SS 316, SS 304, EN 9 &amp; EN 8.</p>'),
(9, 'Values', 'Values-16965116522069212533.webp', 'We practice strong ethical values in our system and always seek to do the right thing with the right perspective. We highly respect individual contributions from various backgrounds that lead us to stand in the position we are at in the present day.', NULL, '2023-05-23 05:06:47', '2023-12-29 06:03:55', '<p>Established in 2022, We \"<b>RADIX TECHNOCAST</b>\", is Gujarat (Rajkot) based leading Manufacturer, Supplier and Trader of Engineering Parts have built up good reputation in industry, our offered range of collection are Engineering Parts that can be casted using sand casting. We provide various types of casting like mild steel casting, SS 316, SS 304, EN 9 &amp; EN 8.</p><p><br></p><p><br></p>'),
(10, 'UNIQUENESS', 'UNIQUENESS-16965099961995206244.webp', 'Ambition Pipes has been established to set the new trends and achieve new milestones in thr piping industry. With state_of_the_art production faclities and modern_day technologies.we aim to bring the market. We have set our bar higer in terms in compromise-free quality and sustainability and asprie to br among the pioneers of the indusrty.', NULL, '2023-05-23 05:06:47', '2023-12-29 06:20:43', '<span style=\"letter-spacing: 0.14px;\">RADIX TECHNOCAST is one the best sand casting industries founded in GUNDASARA,(NEAR SHAPAR-VERAVAL)we have a wide experienced team. We provided an ultimate sand casting solution to various companies of Gujarat.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `chooseuses`
--

CREATE TABLE `chooseuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooseuses`
--

INSERT INTO `chooseuses` (`id`, `title`, `short_description`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, 'Why should you choose us?', 'We at Ambition Pipes profestionally manage the Pipes And Fitings.', '<ul><li>Flexibility for quantities - large / medium / small series - all can be produced.</li><li>Well qualified &amp; experienced skilled staff.</li><li>Consistent Quality.</li><li>Shorter lead time for sample development.</li><li>Quick responses to inquiries / RFQs.</li><li>Vision to grow with the customers &amp; keep long term business relations.<br></li></ul>', 'img-16964833531985824905.webp', NULL, '2023-05-27 01:19:19', '2023-12-29 06:48:13'),
(13, 'Why should you choose us?', 'We at Ambition Pipes profestionally manage the Pipes And Fitings.', '<ul><li>Flexibility for quantities - large / medium / small series - all can be produced.</li><li>Well qualified &amp; experienced skilled staff.</li><li>Consistent Quality.</li><li>Shorter lead time for sample development.</li><li>Quick responses to inquiries / RFQs.</li><li>Vision to grow with the customers &amp; keep long term business relations.<br></li></ul>', 'img-1696483337281394869.webp', NULL, '2023-05-27 01:19:19', '2023-12-29 06:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(13, 'Kishan', 'jay@gmail.com', '1234567890', 'Massage', 'aaa', '2023-06-08 08:06:35', '2023-06-08 08:06:35'),
(14, 'pintu', 'pintu@g.c', '1234567890', 'Massage', 'dd', '2023-06-08 08:12:56', '2023-06-08 08:12:56'),
(15, 'Kishan', 'jay@gmail.com', '1234567890', 'Massage', 'ss', '2023-06-08 08:27:00', '2023-06-08 08:27:00'),
(16, 'Kishan', 'jay.techfirst@gmail.com', '1234567890', 'Massage', 'dd', '2023-06-08 08:32:17', '2023-06-08 08:32:17'),
(17, 'Kishan', 'jay.techfirst@gmail.com', '1234567890', 'Massage', 'aa', '2023-06-08 08:36:29', '2023-06-08 08:36:29'),
(18, 'Kishan', 'jay@gmail.com', '1234567890', 'Massage', 'Massage', '2023-06-08 23:38:20', '2023-06-08 23:38:20'),
(19, 'Kishan', 'jay@gmail.com', '1234567890', 'Massage', 'fevicon', '2023-06-08 23:39:54', '2023-06-08 23:39:54'),
(20, 'Kishan', 'jay@gmail.com', '1234567890', 'Massage', 'radix1.svg', '2023-06-09 00:06:00', '2023-06-09 00:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_03_134536_create_permission_tables', 1),
(7, '2023_05_19_060709_create_abouts_table', 2),
(8, '2023_05_19_085142_create_sliders_table', 3),
(9, '2023_05_19_095319_create_processes_table', 4),
(10, '2023_05_19_100700_create_process_metas_table', 5),
(11, '2023_05_23_091952_create_products_table', 6),
(12, '2023_05_24_064020_add_paid_to_abouts_table', 7),
(13, '2023_05_25_105415_create_contacts_table', 8),
(14, '2023_05_26_061336_create_chooseuses_table', 9),
(16, '2023_06_01_071840_create_seos_table', 10),
(17, '2023_06_02_045616_add_paid_to_products_table', 11),
(18, '2023_06_02_045811_add_paid_to_products_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'web', '2023-10-25 05:09:29', '2023-10-25 05:09:29'),
(4, 'merchant', 'web', '2023-10-25 05:09:29', '2023-10-25 05:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `title`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Process', '<p>Sand casting, the most widely used casting process, utilizes expendable sand molds to form complex metal parts that can be made of nearly any alloy. Because the sand mold must be destroyed in order to remove the part, called the casting, sand casting typically has a low production rate. The sand casting process involves the use of a furnace, metal, pattern, and sand mold. The metal is melted in the furnace and then ladled and poured into the cavity of the sand mold, which is formed by the pattern. The sand mold separates along a parting line and the solidified casting can be removed. The steps in this process are described in greater detail in the next section.</p><div><br></div>', 'Process-1684845174959911767.webp', NULL, '2023-05-19 23:28:03', '2023-05-23 07:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `process_metas`
--

CREATE TABLE `process_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `process_id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_image` blob DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_metas`
--

INSERT INTO `process_metas` (`id`, `process_id`, `meta_title`, `meta_description`, `meta_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 4, 'Mold-making', 'The first step in the sand casting process is to create the mold for the casting. A sand mold is formed by packing sand into each half of the mold. The sand is packed around the pattern, which is a replica of the external shape of the casting. When the pattern is removed, the cavity that will form the casting remains.The mold-making time includes positioning the pattern, packing the sand, and removing the pattern. Also, lubrication is often applied to the surfaces of the mold cavity in order to facilitate removal of the casting. The lubricant that is used is chosen based upon the sand and molten metal temperature.', 0x696d672d313638353639373535303836353630383133392e77656270, NULL, '2023-05-19 23:28:03', '2023-06-02 03:49:10'),
(3, 4, 'Clamping', 'Once the mold has been made, it must be prepared for the molten metal to be poured. The surface of the mold cavity is first lubricated to facilitate the removal of the casting. Then, the cores are positioned and the mold halves are closed and securely clamped together.', 0x696d672d313638353639373535303531303637333339392e77656270, NULL, '2023-05-23 05:16:20', '2023-06-02 03:49:10'),
(4, 4, 'Metal Pouring', 'The molten metal is maintained at a set temperature in a furnace. After the mold has been clamped, the molten metal can be ladled from its holding container in the furnace and poured into the mold. Enough molten metal must be poured to fill the entire cavity and all channels in the mold. The filling time is very short in order to prevent early solidification of any one part of the metal.', 0x696d672d313638353639373535303338313836303330342e77656270, NULL, '2023-05-23 05:16:20', '2023-06-02 03:49:10'),
(5, 4, 'Removal', 'After the predetermined solidification time has passed, the sand mold can simply be broken, and the casting removed. Once removed, the casting will likely have some sand and oxide layers adhered to the surface. Shot blasting is sometimes used to remove any remaining sand, especially from internal surfaces, and reduce the surface roughness', 0x696d672d313638353639373535303432313039373236382e77656270, NULL, '2023-05-23 05:16:20', '2023-06-02 03:49:10'),
(6, 4, 'Finishing', 'During cooling, the material from the channels in the mold solidifies attached to the part. This excess material must be trimmed from the casting either manually via gas cutting or grinding. A larger casting will require a longer finishing time.', 0x696d672d313638353639373535303538353836353233302e77656270, NULL, '2023-05-23 05:16:20', '2023-06-02 03:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Valve', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(16, 28, 84); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; letter-spacing: 0.4px;\"><br></p>', 'Product-16850940531091060491.webp', NULL, '2023-05-23 04:10:38', '2023-06-06 04:52:58', 'valve-1'),
(2, 'Product', NULL, 'Product-1685094070585559166.webp', NULL, '2023-05-23 04:13:33', '2023-06-06 04:39:58', 'product-1'),
(4, 'Pipe Mold Ring', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(16, 28, 84); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; letter-spacing: 0.4px;\"><span style=\"font-weight: 700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(16, 28, 84); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; letter-spacing: 0.4px;\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Product-16850940911993054083.webp', NULL, '2023-05-23 07:26:37', '2023-06-02 04:33:39', 'pipe-mold-ring-1'),
(5, 'Gears', NULL, 'Product-1685094106213338656.webp', NULL, '2023-05-23 07:26:51', '2023-06-06 04:53:28', 'gears-1'),
(9, 'kljhb', '<p>lkjhoinh oijh oij</p>', 'kljhb-16964253371829851799.webp', '2023-10-04 08:01:29', '2023-10-04 07:45:37', '2023-10-04 08:01:29', 'kljhb'),
(10, 'twert', '<p>qwet qwt</p>', 'twert-1696425428741292117.webp', '2023-10-04 08:01:23', '2023-10-04 07:47:09', '2023-10-04 08:01:23', 'twert'),
(11, 'dsfhdf', '<p>dghd</p>', 'dsfhdf-16964841441503096288.webp', '2023-10-05 00:05:54', '2023-10-05 00:05:44', '2023-10-05 00:05:54', 'dsfhdf');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-10-11 04:38:19', '2023-10-11 04:38:19'),
(2, 'merchant', 'web', '2023-10-11 04:38:19', '2023-10-11 04:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `title`, `keyword`, `description`, `link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home', 'Radix Technocast Home', 'home', NULL, '2023-06-01 04:16:33', '2023-06-01 04:16:33'),
(2, 'About', 'About', 'About Us', 'about-us', NULL, '2023-06-01 04:17:07', '2023-06-01 04:17:07'),
(3, 'Process', 'Process', 'Radix Technocast Process', 'proceses', NULL, '2023-06-01 04:17:48', '2023-06-06 04:59:31'),
(4, 'Product', 'Product', 'Radix Technocast Product', 'products', NULL, '2023-06-01 04:18:37', '2023-06-06 04:59:44'),
(5, 'Contact', 'contact', 'Radix Technocast Contact Us', 'contact-us', NULL, '2023-06-01 04:19:31', '2023-06-01 06:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `short_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, NULL, '-20436152501685438557.webp', NULL, NULL, '2023-05-19 04:01:42', '2023-05-30 03:52:37'),
(4, NULL, '-13932774331685438575.webp', NULL, NULL, '2023-05-24 06:01:14', '2023-05-30 03:52:56'),
(5, NULL, '-5818121791685438593.webp', NULL, NULL, '2023-05-25 04:51:43', '2023-05-30 03:53:13'),
(8, NULL, '-15124234211685438607.webp', NULL, NULL, '2023-05-30 03:53:27', '2023-05-30 03:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `status` enum('0','1','2','3') NOT NULL COMMENT '0 = pending 1 = active 2 = block 3 = reject',
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `status`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'jay', '1234567890', 'admin@gmail.com', NULL, '$2y$10$Gp33uv1Eey.Dut22ZDvuWujvGgzR6y0PbbQ1GMv61DzfvH6zB3SRa', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooseuses`
--
ALTER TABLE `chooseuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_metas`
--
ALTER TABLE `process_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `process_metas_process_id_foreign` (`process_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chooseuses`
--
ALTER TABLE `chooseuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `process_metas`
--
ALTER TABLE `process_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `process_metas`
--
ALTER TABLE `process_metas`
  ADD CONSTRAINT `process_metas_process_id_foreign` FOREIGN KEY (`process_id`) REFERENCES `processes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
