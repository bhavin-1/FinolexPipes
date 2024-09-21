-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 03:34 PM
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
(1, 'helloa', 'hello-16844809661502923664.webp', 'Helloa', '2023-05-19 02:04:25', '2023-05-19 01:52:46', '2023-05-19 02:04:25', NULL),
(2, 'hello', 'hello-16844817471865852293.webp', 'hello jay', '2023-05-20 04:42:57', '2023-05-19 02:05:47', '2023-05-20 04:42:57', NULL),
(3, 'hello', 'hello-16845784601862276760.webp', 'hello', '2023-05-20 04:57:58', '2023-05-20 04:57:40', '2023-05-20 04:57:58', NULL),
(4, 'About Us', 'About-Us-14954555101685363035.webp', 'RADIX TECHNOCAST is one the best sand casting industries founded in GUNDASARA,(NEAR SHAPAR-VERAVAL)we have a  wide experienced team. We provided an ultimate sand casting solution to various companies of Gujarat.', NULL, '2023-05-23 05:06:47', '2023-05-29 06:53:55', '<p>Established in 2022, We \"<b>RADIX TECHNOCAST</b>\", is Gujarat (Rajkot) based leading Manufacturer, Supplier and Trader of Engineering Parts have built up good reputation in industry, our offered range of collection are Engineering Parts that can be casted using sand casting. We provide various types of casting like mild steel casting, SS 316, SS 304, EN 9 &amp; EN 8.</p><p><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\">Being an manufacturing unit </span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"><b>RADIX TECHNOCAST</b></span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"> is ever ready to serve our reliable customer the best and assure you our prompt services all the time. We are specialized in handling bulk orders owing to our spacious warehousing. Our offered range are available at market reasonable price. These range of product are strictly quality monitored compliance with industry set norm to provide that maximum satisfaction at user end.</span></p><p><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"><b>RADIX TECHNOCAS</b></span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"><b>T</b></span><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\"> pleased to express you that we have now developed our self from a trading unit to a manufactured industries a step forward for success in manufacturing products like Engineering Parts, cement pipe rings etc... Supplying to various Industries viz. We have highly energetic, young, self reliant rich in technical and commercial knowledge of expert professional moving with the spirit behind this enterprise. Our offered product are manufactured high quality of material that taken from our industry reliable sources. Even in as short span of time we are proving our self that a relatively smaller set up of work wonder by providing reliable personalized &amp; honorable services, to count we have observed over 100% growth for all products in last many years and entered in this manufacturing process.</span></p><p><span style=\"color: var(--bs-body-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); letter-spacing: 0.01rem; text-align: var(--bs-body-text-align);\">Feel free to contact us anytime. We are always here to help you with your queries.</span></p>'),
(5, 'hello', 'hello-11129968961685355072.webp', '<p>hello<br></p>', '2023-05-29 04:41:42', '2023-05-29 04:41:12', '2023-05-29 04:41:42', '<p>hello<br></p>'),
(6, 'hello', 'hello-19806439931685355243.webp', '<ul><li>hello</li><li>hello<br></li></ul>', '2023-05-29 04:45:43', '2023-05-29 04:44:03', '2023-05-29 04:45:43', '<p>hello<br></p>');

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
(10, 'Why should you choose us?', 'We at Rajeshwary technocast profestionally manage the sand casting foundry.', '<ul><li>Flexibility for quantities - large / medium / small series - all can be produced.</li><li>Well qualified &amp; experienced skilled staff.</li><li>Consistent Quality.</li><li>Shorter lead time for sample development.</li><li>Quick responses to inquiries / RFQs.</li><li>Vision to grow with the customers &amp; keep long term business relations.<br></li></ul>', 'img-16851802911551161671.webp', NULL, '2023-05-27 01:19:19', '2023-05-27 04:08:11'),
(11, 'ddx', 'x', '<p>dd</p>', 'img-1685341739326311014.webp', '2023-05-29 04:24:35', '2023-05-29 00:58:59', '2023-05-29 04:24:35'),
(12, 'assa', 'sas', '<p>sa</p>', 'img-16853542531744589063.webp', '2023-05-29 04:33:10', '2023-05-29 04:27:33', '2023-05-29 04:33:10');

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
(2, 'Kishan', 'jay@gmail.com', '1234567890', 'Massage', 'Massage', '2023-05-25 23:49:50', '2023-05-25 23:49:50');

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
(14, '2023_05_26_061336_create_chooseuses_table', 9);

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
(1, 'hello', '<p>hello</p>', 'hello-1684498568448957513.webp', '2023-05-19 07:08:21', '2023-05-19 06:46:08', '2023-05-19 07:08:21'),
(2, 'hello', '<p>hello<br></p>', 'hello-16844990241015784103.webp', '2023-05-19 07:08:24', '2023-05-19 06:53:44', '2023-05-19 07:08:24'),
(3, 'helloo', '<p>hello<br></p>', 'hello-1684499412605672861.webp', '2023-05-19 23:27:35', '2023-05-19 07:00:12', '2023-05-19 23:27:35'),
(4, 'Process', '<p>Sand casting, the most widely used casting process, utilizes expendable sand molds to form complex metal parts that can be made of nearly any alloy. Because the sand mold must be destroyed in order to remove the part, called the casting, sand casting typically has a low production rate. The sand casting process involves the use of a furnace, metal, pattern, and sand mold. The metal is melted in the furnace and then ladled and poured into the cavity of the sand mold, which is formed by the pattern. The sand mold separates along a parting line and the solidified casting can be removed. The steps in this process are described in greater detail in the next section.</p><div><br></div>', 'Process-1684845174959911767.webp', NULL, '2023-05-19 23:28:03', '2023-05-23 07:02:54'),
(5, 'Process', '<p>Sand casting, the most widely used casting process, utilizes expendable sand molds to form complex metal parts that can be made of nearly any alloy. Because the sand mold must be destroyed in order to remove the part, called the casting, sand casting typically has a low production rate. The sand casting process involves the use of a furnace, metal, pattern, and sand mold. The metal is melted in the furnace and then ladled and poured into the cavity of the sand mold, which is formed by the pattern. The sand mold separates along a parting line and the solidified casting can be removed. The steps in this process are described in greater detail in the next section.<br></p>', 'Process-16848385921988091171.webp', '2023-05-23 05:16:32', '2023-05-23 05:13:12', '2023-05-23 05:16:32');

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
(1, 3, 'hellozz', 'hello', 0x696d672d31363834343939343132313636393437393934302e77656270, NULL, '2023-05-19 07:00:12', '2023-05-19 08:18:28'),
(2, 4, 'Mold-making', 'The first step in the sand casting process is to create the mold for the casting. A sand mold is formed by packing sand into each half of the mold. The sand is packed around the pattern, which is a replica of the external shape of the casting. When the pattern is removed, the cavity that will form the casting remains.The mold-making time includes positioning the pattern, packing the sand, and removing the pattern. Also, lubrication is often applied to the surfaces of the mold cavity in order to facilitate removal of the casting. The lubricant that is used is chosen based upon the sand and molten metal temperature.', 0x696d672d31363835333339333237313930363632343833302e77656270, NULL, '2023-05-19 23:28:03', '2023-05-29 00:18:47'),
(3, 4, 'Clamping', 'Once the mold has been made, it must be prepared for the molten metal to be poured. The surface of the mold cavity is first lubricated to facilitate the removal of the casting. Then, the cores are positioned and the mold halves are closed and securely clamped together.', 0x696d672d3136383533333933323734373237393730362e77656270, NULL, '2023-05-23 05:16:20', '2023-05-29 00:18:47'),
(4, 4, 'Metal Pouring', 'The molten metal is maintained at a set temperature in a furnace. After the mold has been clamped, the molten metal can be ladled from its holding container in the furnace and poured into the mold. Enough molten metal must be poured to fill the entire cavity and all channels in the mold. The filling time is very short in order to prevent early solidification of any one part of the metal.', 0x696d672d31363835333339333237313737353532393530382e77656270, NULL, '2023-05-23 05:16:20', '2023-05-29 00:18:47'),
(5, 4, 'Removal', 'After the predetermined solidification time has passed, the sand mold can simply be broken, and the casting removed. Once removed, the casting will likely have some sand and oxide layers adhered to the surface. Shot blasting is sometimes used to remove any remaining sand, especially from internal surfaces, and reduce the surface roughness', 0x696d672d31363835333339333237313039353539383232322e77656270, NULL, '2023-05-23 05:16:20', '2023-05-29 00:18:47'),
(6, 4, 'Finishing', 'During cooling, the material from the channels in the mold solidifies attached to the part. This excess material must be trimmed from the casting either manually via gas cutting or grinding. A larger casting will require a longer finishing time.', 0x696d672d31363835333339333237313435383731373737322e77656270, NULL, '2023-05-23 05:16:20', '2023-05-29 00:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Valve', 'Valve Casting', 'Product-16850940531091060491.webp', NULL, '2023-05-23 04:10:38', '2023-05-29 07:16:15'),
(2, 'Product', 'Product', 'Product-1685094070585559166.webp', NULL, '2023-05-23 04:13:33', '2023-05-26 04:11:10'),
(3, 'jay', 'f', 'jay-16848350321175920415.webp', '2023-05-23 04:14:03', '2023-05-23 04:13:52', '2023-05-23 04:14:03'),
(4, 'Pipe Mold Ring', 'Product', 'Product-16850940911993054083.webp', NULL, '2023-05-23 07:26:37', '2023-05-29 07:14:27'),
(5, 'Gears', 'Product', 'Product-1685094106213338656.webp', NULL, '2023-05-23 07:26:51', '2023-05-29 07:13:26'),
(6, 'aacdsf', 'aaaa', 'aacdsf-16851060201391855835.webp', '2023-05-26 07:30:30', '2023-05-26 07:30:20', '2023-05-26 07:30:30'),
(7, 'ff', NULL, 'ff-1685360736268012585.webp', '2023-05-29 06:15:45', '2023-05-29 06:15:36', '2023-05-29 06:15:45');

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
(1, 'hello', 'hello-1684488325697513706.webp', 'hello slider1', '2023-05-19 04:01:05', '2023-05-19 03:55:25', '2023-05-19 04:01:05'),
(2, NULL, 'We-own-two-core-assets-5126846501685095144.webp', 'Welcome To Radix Technocast', NULL, '2023-05-19 04:01:42', '2023-05-29 06:48:14'),
(3, 'slider', 'slider-16844888891396325702.webp', 'slider', '2023-05-20 04:42:44', '2023-05-19 04:04:49', '2023-05-20 04:42:44'),
(4, NULL, 'We-own-two-core-assets-7760082981685095166.webp', NULL, NULL, '2023-05-24 06:01:14', '2023-05-29 06:47:11'),
(5, NULL, 'test-13077860571685095185.webp', NULL, NULL, '2023-05-25 04:51:43', '2023-05-29 06:47:27'),
(6, 'hello', 'hello-16952497281685021579.webp', NULL, '2023-05-25 08:03:14', '2023-05-25 08:02:59', '2023-05-25 08:03:14'),
(7, 'hello', 'hello-15847232101685360375.webp', 'testing', '2023-05-29 06:11:17', '2023-05-29 06:09:35', '2023-05-29 06:11:17');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
