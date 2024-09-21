-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 07:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radix`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `deleted_at`, `created_at`, `updated_at`, `long_description`) VALUES
(4, 'About Us', 'About-Us-2648479591685446717.webp', 'RADIX TECHNOCAST is one the best sand casting industries founded in GUNDASARA,(NEAR SHAPAR-VERAVAL)we have a  wide experienced team. We provided an ultimate sand casting solution to various companies of Gujarat.', NULL, '2023-05-23 05:06:47', '2023-05-30 06:08:37', '<p>Established in 2022, We \"<b>RADIX TECHNOCAST</b>\", is Gujarat (Rajkot) based leading Manufacturer, Supplier and Trader of Engineering Parts have built up good reputation in industry, our offered range of collection are Engineering Parts that can be casted using sand casting. We provide various types of casting like mild steel casting, SS 316, SS 304, EN 9 &amp; EN 8.</p><p><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\">Being an manufacturing unit </span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"><b>RADIX TECHNOCAST</b></span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"> is ever ready to serve our reliable customer the best and assure you our prompt services all the time. We are specialized in handling bulk orders owing to our spacious warehousing. Our offered range are available at market reasonable price. These range of product are strictly quality monitored compliance with industry set norm to provide that maximum satisfaction at user end.</span></p><p><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"><b>RADIX TECHNOCAS</b></span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"><b>T</b></span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"> pleased to express you that we have now developed our self from a trading unit to a manufactured industries a step forward for success in manufacturing products like Engineering Parts, cement pipe rings etc... Supplying to various Industries viz. We have highly energetic, young, self reliant rich in technical and commercial knowledge of expert professional moving with the spirit behind this enterprise. Our offered product are manufactured high quality of material that taken from our industry reliable sources. Even in as short span of time we are proving our self that a relatively smaller set up of work wonder by providing reliable personalized &amp; honorable services, to count we have observed over 100% growth for all products in last many years and entered in this manufacturing process.</span></p><p><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\">Feel free to contact us anytime. We are always here to help you with your queries.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `chooseuses`
--

CREATE TABLE `chooseuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooseuses`
--

INSERT INTO `chooseuses` (`id`, `title`, `short_description`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, 'Why should you choose us?', 'We at Radix technocast profestionally manage the sand casting foundry.', '<ul><li>Flexibility for quantities - large / medium / small series - all can be produced.</li><li>Well qualified &amp; experienced skilled staff.</li><li>Consistent Quality.</li><li>Shorter lead time for sample development.</li><li>Quick responses to inquiries / RFQs.</li><li>Vision to grow with the customers &amp; keep long term business relations.<br></li></ul>', 'img-1686037302108344199.webp', NULL, '2023-05-27 01:19:19', '2023-06-06 02:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Valve', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(16, 28, 84); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; letter-spacing: 0.4px;\"><br></p>', 'Product-16850940531091060491.webp', NULL, '2023-05-23 04:10:38', '2023-06-06 04:52:58', 'valve-1'),
(2, 'Product', NULL, 'Product-1685094070585559166.webp', NULL, '2023-05-23 04:13:33', '2023-06-06 04:39:58', 'product-1'),
(4, 'Pipe Mold Ring', '<p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; color: rgb(16, 28, 84); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; letter-spacing: 0.4px;\"><span style=\"font-weight: 700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(16, 28, 84); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; letter-spacing: 0.4px;\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Product-16850940911993054083.webp', NULL, '2023-05-23 07:26:37', '2023-06-02 04:33:39', 'pipe-mold-ring-1'),
(5, 'Gears', NULL, 'Product-1685094106213338656.webp', NULL, '2023-05-23 07:26:51', '2023-06-06 04:53:28', 'gears-1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `status` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0 = pending 1 = active 2 = block 3 = reject',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chooseuses`
--
ALTER TABLE `chooseuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
