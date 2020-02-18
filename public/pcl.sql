-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 10:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcl`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Suspendido ang klase sa lahat ng antas sa mga pampubliko at pribadong paaralan sa Bayan ng Luisiana ngayong araw, NOVEMBER 22 (FRIDAY), dahil sa masamang panahon. Mag-ingat po tayong lahat!', 1, '2019-11-20 10:07:05', '2019-11-20 21:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` bigint(20) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `photo`, `position`, `status`) VALUES
(6, 'Nestor Rondilla', '1574376677_nestor.jpeg', 'Mayor', 1),
(7, 'Armando Taguilaso', 'vice.jpg', 'Vice Mayor', 1),
(8, 'Luigi Miguel Villatuya', '', 'Councilor', 1),
(9, 'Eulogio SUARIO Jr.', '', 'Councilor', 1),
(10, 'Andy Uy', '', 'Councilor', 1),
(11, 'Ronaldo Mecija', '', 'Councilor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `author_document`
--

CREATE TABLE `author_document` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_document`
--

INSERT INTO `author_document` (`id`, `document_id`, `author_id`) VALUES
(25, 19, 10),
(27, 21, 6),
(30, 20, 8),
(31, 22, 8),
(32, 23, 6);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `town_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_private` bigint(20) NOT NULL DEFAULT 0,
  `date_approved` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `document_type`, `user_id`, `town_id`, `created_at`, `updated_at`, `file`, `is_private`, `date_approved`) VALUES
(19, 'Luisiana Resolution 1', 1, 1, 17, '2019-12-05 02:56:57', '2019-12-05 02:56:57', '1575543416_Vue-Essentials-Cheat-Sheet.pdf', 0, '2019-01-23'),
(20, 'Luisiana Ordinance 1', 2, 1, 17, '2019-12-05 03:02:22', '2019-12-05 05:24:47', '1575543742_Vue-Essentials-Cheat-Sheet.pdf', 0, '2016-12-31'),
(21, 'Alaminos Ordinance 1', 2, 1, 5, '2019-12-05 03:41:41', '2019-12-05 03:41:41', '1575546101_github-git-cheat-sheet.pdf', 0, '2019-02-15'),
(22, 'Ordinance 2', 2, 1, 17, '2019-12-07 21:08:28', '2019-12-07 21:08:28', '1575781708_City Ordinance No 16-159.pdf', 0, '2015-12-05'),
(23, 'Ordinance 3', 2, 1, 17, '2019-12-13 19:02:16', '2019-12-13 19:02:16', '1576292535_Vue-Essentials-Cheat-Sheet.pdf', 0, '2015-01-12');

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
(3, '2019_11_19_051048_create_towns_table', 2),
(4, '2019_11_19_053851_add_town_id_to_users', 3),
(5, '2019_11_19_090257_create_documents_table', 4),
(6, '2019_11_19_092602_create_types_table', 5),
(7, '2019_11_19_093017_add_document_type_to_documents', 6),
(8, '2019_11_19_095802_add_file_to_documents', 7),
(9, '2019_11_19_143653_add_author_to_documents', 8),
(10, '2019_11_20_002334_add_is_private_to_documents', 9),
(11, '2019_11_20_002933_add_date_approved_to_documents', 10),
(12, '2019_11_20_033908_create_authors_table', 11),
(13, '2019_11_20_034334_create_documentauthors_table', 12),
(14, '2019_11_20_170617_create_announcements_table', 13),
(15, '2019_11_21_062844_add_position_to_authors', 14),
(16, '2019_11_21_222533_add_status_to_author', 15),
(17, '2019_11_27_230635_create_news_table', 16),
(18, '2019_11_29_211204_create_officers_table', 17),
(19, '2019_12_08_021430_add_town_id_to_officers', 18);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `cover_photo`, `image_photo`, `created_at`, `updated_at`) VALUES
(8, 'PCL SIGNS LEGISLATIVE PARTNERSHIP WITH KOREA', '<p>Aspiring to foster progress between two countries, a signing of Memorandum of Understanding between the Philippine Councilors League and Association of Metropolitan and Provincial Council Chairs of the Republic of Korea was held on May 22, 2019 at the Gyeonggido Assembly in Gyeonggi-do Province.</p><p><br></p><p>AMPCC Chairman Han-jun Song, Chungcheongnam-do Chairman Ryu Byong-Kuk and Secretary General Jae-young Oh welcomed Chairman Danilo Dayanghirang of Davao City and the entire PCL delegation consisting of National Vice-Chairman Elmer Datuin of Baguio City, National Secretary General Joaquin Emmanuel Pimentel, National Treasurer Sharon Macabebe, National Auditor Kerby Salazar, National Liaison Officer Jess Cruz, Metro Manila Councilors League President Carol Cunanan, Island Vice-Chair Oliver Owen Garcia, Island Vice-Chair Mitchelle John Patricio, MMCL Chairman Richard Peralta, Regional Chairperson Chairman Juan Velchez Jr., RCC Maria Sheila Gange, RCC Earl Oyas, RCC Wilson Uy, RCC Joval Samonte, Assistant. Secretary Peter Thomas Reyes and Advocacy/Programs Director Gina Perez. Apart from MOU signing, a ceremonial exchange of gifts was held.</p><p><br></p><p>PCL also paid a courtesy visit to the Suwon City Council and was welcomed by Chairwoman Jo Myeong Ja and the councilors.</p><p>On May 23, 2019, a business meeting with One Asia Corporation, Airwater System and Smart Screen companies at Skypark Hotel was attended by NC Dayanghirang, NVC Datuin, Island VC Garcia, Island VC Patricio, MMCL Chair Peralta, RCC Velchez, RCC Oyas, RCC Gange and RCC Uy.</p><p><br></p><p><br></p>', '1574981498_pcl-korea-1-1024x683.jpeg', '1574981498_pcl-korea-1-1024x683.jpeg', '2019-11-28 14:51:38', '2019-11-28 14:51:38'),
(9, 'Singson Appeals for Urgent Action from Sanggunians: “DESPITE PROGRESS, CHILDREN ARE DEPRIVED OF BASIC RIGHTS”- UNICEF', '<p>Philippine Councilors League National President Luis “Chavit” Singson said, “The councilors can pass ordinances and resolutions to uplift the condition of children- being the most vulnerable and marginalized members in our society”.</p><p>On 9 October 2018 at Novotel Araneta Center in Quezon City, United Nations Children’s Fund organized a forum participated by national government agencies like DSWD, NEDA, Galing Pook Foundation, Quezon City Government, Non-Government Organizations, organizations of elected local officials (Leagues) and the media. UNICEF presented the current plight of children in the Philippines. During the said event, Ms. Lotta Sylwander of UNICEF reported the following facts:</p><ol><li>3 out of 10 Filipino children still live below the poverty line while in ARMM, the statistics is 6.5 out of 10;</li><li>Millions have no access to clean drinking water;</li><li>In the year 2015, only 62% received their immunization and only 18% in ARMM;</li><li>Between 2011 to 2015, there is a 230% increase in HIV cases among Filipino adolescents and teenagers;</li><li>2 out of 3 children are victims of physical violence at home/school;</li><li>Philippines became a destination listed 1 out of top 10 producing online sexual content using children;</li><li>1 out of 4 children age 13 to 17 years old are victims of sexual violence and abuse.</li></ol><p>Singson, Ilocos Sur Governor for almost thirty years, lauds the current programs of the national government with UNICEF providing its remarkable assistance nevertheless he said, ”The Sanggunian Members can strengthen the current approach being familiar with the condition of children in their respective localities. Just like the senators and congressmen, our prime responsibility is legislation. We can approve policies, projects and appropriate funds to uplift the children’s condition”, he explained.</p><p>“The country faces these social challenges. I personally urge my colleagues in PCL to pass ordinances on building a pro-child environment, promoting the needs and rights of children, capacity building of government workers for children and assisting in the massive information dissemination on children’s rights, gender sensitivity and other intervention programs. As the National President, I humbly open our League for recommendations on how we can effectively function on this matter”, Singson concluded.</p>', '1574988031_unicef-article.jpeg', '1574988031_unicef-article.jpeg', '2019-11-28 16:40:31', '2019-11-29 02:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `position`, `fname`, `lname`, `photo`, `achievements`, `town`) VALUES
(1, 'National Chairman', 'Danilo', 'Dayanghirang', '1575069007_danilo-dayanghirang.jpeg', NULL, 'National'),
(2, 'National President', 'Luis', 'Singson', '1575069348_chavit-singson.jpeg', 'test', 'National'),
(3, 'National Vice Chairman', 'Elmer', 'Datuin', '1575069503_elmer-datuin.jpeg', 'Test', 'National'),
(4, 'National Executive Vice President', 'Benito', 'Brizuela', '1575069608_benito-brizuela.jpeg', 'cdfvgfds', 'National'),
(5, 'National Secretary-General', 'Jay', 'Pimentel', '1575069695_joaquin-pemintel.jpeg', 'ds', 'National'),
(6, 'National Treasurer', 'Sharon', 'Macabebe', '1575069754_sharon-macabebe.jpeg', NULL, 'National'),
(7, 'National Auditor', 'Kerby', 'Salazar', '1575069800_kerby-salazar.jpeg', NULL, 'National'),
(8, 'National PRO', 'Beethoven', 'Bermejo', '1575069854_beethoven-beremejo.jpeg', NULL, 'National'),
(9, 'National Liaison Officer', 'Jesus', 'Cruz', '1575069898_jesus-cruz.jpeg', NULL, 'National'),
(10, 'General Legal Counsel', 'Rey Oliver', 'Alejandrino', '1575069950_rey-oliver-alejandrino.jpeg', NULL, 'National'),
(11, 'Executive Director', 'Esther', 'Cuadra', '1575070014_IMG_1751-2.jpeg', NULL, 'National'),
(12, 'Councilor', 'Juan', 'Dela Cruz', '1576464994_user.jpeg', NULL, 'Alaminos');

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
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `name`) VALUES
(5, 'Alaminos'),
(6, 'Bay'),
(7, 'Biñan'),
(8, 'Cabuyao'),
(10, 'Calamba'),
(11, 'Calauan'),
(12, 'Cavinti'),
(13, 'Famy'),
(14, 'Kalayaan'),
(15, 'Liliw'),
(16, 'Los Baños'),
(17, 'Luisiana'),
(18, 'Lumban'),
(19, 'Mabitac'),
(20, 'Magdalena'),
(21, 'Majayjay'),
(22, 'Nagcarlan'),
(23, 'Paete'),
(24, 'Pagsanjan'),
(25, 'Pakil'),
(26, 'Pangil'),
(27, 'Pila'),
(28, 'Rizal'),
(29, 'San Pablo'),
(30, 'San Pedro'),
(31, 'Santa Cruz'),
(32, 'Santa Maria'),
(33, 'Santa Rosa'),
(34, 'Siniloan'),
(35, 'Victoria');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Resolution'),
(2, 'Ordinance');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `town_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `town_id`) VALUES
(1, 'Juan Dela Cruz', 'pcl@gmail.com', NULL, '$2y$10$WyHev8SdRchA35C4t3pEDezhFcKnpQZGmBMr1qKQFeilWCBJSWwcy', 'dpb6tWOyaaQRkvZxFRE8hthEW4jOykqSC2atamIkwAQDYBnQMT0HF2W0475C', '2019-11-18 22:29:56', '2019-11-18 22:29:56', NULL),
(4, 'PCL Alaminos', 'pcl_alaminos@gmail.com', NULL, '$2y$10$ys0l7XAvj/o.ErXfXI8/l.hbP2uXe6JvBtRi/N6toJxvxsWoXQjvy', 'Ype93oileUaBfml6LZh0EsQ0Sj8xDJLVFjATNiulGNkHpbwPo6XauFtHZLBH', '2019-12-05 07:06:26', '2019-12-05 07:06:26', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_document`
--
ALTER TABLE `author_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentauthors_document_id_foreign` (`document_id`),
  ADD KEY `documentauthors_author_id_foreign` (`author_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_document_type_foreign` (`document_type`),
  ADD KEY `documents_user_id_foreign` (`user_id`),
  ADD KEY `documents_town_id_foreign` (`town_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_town_id_foreign` (`town_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `author_document`
--
ALTER TABLE `author_document`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `towns`
--
ALTER TABLE `towns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author_document`
--
ALTER TABLE `author_document`
  ADD CONSTRAINT `documentauthors_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `documentauthors_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_document_type_foreign` FOREIGN KEY (`document_type`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `documents_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`),
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_town_id_foreign` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
