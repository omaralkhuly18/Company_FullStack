-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2024 at 11:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desix_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_one_status` tinyint(1) NOT NULL DEFAULT '1',
  `service_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_service` int UNSIGNED NOT NULL,
  `service_status` tinyint(1) NOT NULL DEFAULT '1',
  `team_member_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_team_member` int UNSIGNED NOT NULL,
  `team_member_status` tinyint(1) NOT NULL DEFAULT '1',
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `title_ar`, `welcome_one_status`, `service_heading`, `service_heading_ar`, `service_subheading`, `service_subheading_ar`, `service_text`, `service_text_ar`, `how_many_service`, `service_status`, `team_member_heading`, `team_member_heading_ar`, `team_member_subheading`, `team_member_subheading_ar`, `how_many_team_member`, `team_member_status`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'عنا', 1, 'Explore what services\n            we`re offering', 'استكشف الخدمات التي نقدمها.', 'OUR SERVICES', 'خدماتنا', 'There are many variations of passages of available but majority alteration in some form, by humou or randomised words.', 'هناك العديد من الاختلافات في المقاطع المتاحة، ولكن الغالبية تتغير بشكل ما، سواء عن طريق الفكاهة أو الكلمات المعتمدة عشوائيًا.', 4, 1, 'Meet the professional team\n            behind the success', 'تعرَّف على الفريق المحترف الذي يقف وراء النجاح.', 'MEET OUR TEAM MEMBERS', 'تعرف على أعضاء فريقنا', 3, 1, 'About Us', 'عنا', 'About Us', 'عنا', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `call_to_actions`
--

CREATE TABLE `call_to_actions` (
  `id` bigint UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `call_to_actions`
--

INSERT INTO `call_to_actions` (`id`, `text`, `text_ar`, `phone`, `email`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Get your FREE\n            Business Consultation', 'احصل على استشارة\n             مجانية لعملك', '+1 (266) 456-7895', 'support@company.com', 'flaticon-phone-call', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `url`, `photo`, `created_at`, `updated_at`) VALUES
(1, '#', 'client_1705167020.png', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(2, '#', 'client_1705167033.png', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(3, '#', 'client_1705167041.png', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(4, '#', 'client_1705167049.png', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(5, '#', 'client_1705167062.png', '2024-04-22 06:30:10', '2024-04-22 06:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_ones`
--

CREATE TABLE `feature_ones` (
  `id` bigint UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_ones`
--

INSERT INTO `feature_ones` (`id`, `text`, `text_ar`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Let’s Discuss How \n            to Make your \n            Business Better.', 'لنناقش كيفية\n             جعل عملك أفضل.', 'feature_one_photo_1704876660.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `feature_one_elements`
--

CREATE TABLE `feature_one_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_one_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_one_elements`
--

INSERT INTO `feature_one_elements` (`id`, `heading`, `heading_ar`, `text`, `text_ar`, `icon`, `feature_one_id`, `created_at`, `updated_at`) VALUES
(1, '	IT Management', 'إدارة تقنية المعلومات', 'Knowledge of technologies rules better than anyone', 'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر .', 'flaticon-learning', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Cyber Security', 'أمن المعلومات السيبراني', 'Knowledge of technologies rules better than anyone', 'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر.', 'flaticon-settings', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, '	Cloud Computing', 'الحوسبة السحابية', 'Knowledge of technologies rules better than anyone', 'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر.', 'flaticon-cloud', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `feature_twos`
--

CREATE TABLE `feature_twos` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_twos`
--

INSERT INTO `feature_twos` (`id`, `heading`, `heading_ar`, `subheading`, `subheading_ar`, `text`, `text_ar`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'We Shape the Perfect Solution', 'نحن نشكل الحل المثالي', 'Corporate Features', 'ميزات الشركة', 'There are many variations of passages of available but majority alteration in some form, by humou or randomised words.', '\n            هناك العديد من الاختلافات في المقاطع المتاحة ولكن الغالبية منها تحتوي على تعديلات بشكل ما، سواء بواسطة الفكاهة أو الكلمات المعتمدة عشوائياً.', 'feature_two_photo_1704877679.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `feature_two_elements`
--

CREATE TABLE `feature_two_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_two_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_two_elements`
--

INSERT INTO `feature_two_elements` (`id`, `name`, `name_ar`, `feature_two_id`, `created_at`, `updated_at`) VALUES
(1, 'We promise to respect your time', 'نعدكم بأن نحترم وقتكم.', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'We hire only professionals you can trust', 'نحن نوظف فقط المحترفين الذين يمكنك الوثوق بهم.', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'We promise to provide up front pricing', 'نعدكم بتقديم أسعار محددة مسبقًا.', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `fun_facts`
--

CREATE TABLE `fun_facts` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fun_facts`
--

INSERT INTO `fun_facts` (`id`, `heading`, `heading_ar`, `sub_heading`, `sub_heading_ar`, `text`, `text_ar`, `created_at`, `updated_at`) VALUES
(1, 'We`re standout experts in the business', 'نحن خبراء متميزون في العمل.', 'FUNFACT', 'FUNFACT', 'There are many variations of passages of available but majority alteration in some form, by humou or randomised words', '\n            هناك العديد من الاختلافات في المقاطع المتوفرة ولكن الغالبية يتم تعديلها بشكل ما، سواء بواسطة الفكاهة أو الكلمات المعتمدة عشوائيًا.', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `fun_fact_elements`
--

CREATE TABLE `fun_fact_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fun_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fun_fact_elements`
--

INSERT INTO `fun_fact_elements` (`id`, `name`, `name_ar`, `number`, `icon`, `fun_id`, `created_at`, `updated_at`) VALUES
(1, 'Projects Completed', 'المشاريع المكتملة', '6420', 'flaticon-job-promotion', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Satisfied Clients', 'عملاء راضون', '9280', 'flaticon-recommend', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Expert Teams', 'فرق خبراء', '380', 'flaticon-teaching', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `question_ar`, `answer`, `answer_ar`, `created_at`, `updated_at`) VALUES
(1, 'What services does your digital agency offer?', 'ما هي الخدمات التي تقدمها وكالتك الرقمية؟', '<p>Our digital agency provides a comprehensive range of services tailored to meet your business needs. From website design and development to digital marketing strategies, we specialize in creating engaging online experiences. Our services also include search engine optimization (SEO), social media management, content creation, and e-commerce solutions, ensuring a holistic approach to enhancing your online presence and driving results.</p>', '<p>توفر وكالتنا الرقمية مجموعة شاملة من الخدمات المصممة خصيصا لتلبية احتياجات عملك. من تصميم وتطوير مواقع الويب إلى استراتيجيات التسويق الرقمي ، نحن متخصصون في إنشاء تجارب جذابة عبر الإنترنت. تشمل خدماتنا أيضا تحسين محركات البحث (SEO) ، وإدارة وسائل التواصل الاجتماعي ، وإنشاء المحتوى ، وحلول التجارة الإلكترونية ، مما يضمن اتباع نهج شامل لتعزيز تواجدك عبر الإنترنت وتحقيق النتائج.</p>', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(2, 'How long does it take to build a website?', 'كم من الوقت يستغرق إنشاء موقع على شبكة الإنترنت؟', '<p>The timeline for website development depends on the complexity and specific requirements of your project. A simple informational website might take a few weeks, while a more intricate e-commerce platform or custom web application could take a few months. We work closely with our clients to understand their goals and deadlines, providing transparent timelines and regular updates throughout the development process.</p>', '<p>يعتمد الجدول الزمني لتطوير موقع الويب على مدى تعقيد مشروعك ومتطلباته المحددة. قد يستغرق موقع ويب إعلامي بسيط بضعة أسابيع ، في حين أن منصة التجارة الإلكترونية الأكثر تعقيدا أو تطبيق الويب المخصص قد يستغرق بضعة أشهر. نحن نعمل عن كثب مع عملائنا لفهم أهدافهم ومواعيدهم النهائية ، وتوفير جداول زمنية شفافة وتحديثات منتظمة طوال عملية التطوير.</p>', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(3, 'Can you help with my company`s social media presence?', 'هل يمكنك المساعدة في وجود شركتي على وسائل التواصل الاجتماعي؟', '<p>Absolutely! Our digital agency specializes in social media management and marketing. We can create and execute a tailored social media strategy to boost your brand`s visibility, engage with your audience, and drive traffic to your website. From content creation and scheduling to analytics and performance tracking, we`ll help you harness the power of social media to achieve your business objectives.</p>', '<p>مطلقا! وكالتنا الرقمية متخصصة في إدارة وسائل التواصل الاجتماعي والتسويق. يمكننا إنشاء وتنفيذ استراتيجية وسائط اجتماعية مخصصة لتعزيز ظهور علامتك التجارية والتفاعل مع جمهورك وزيادة حركة المرور إلى موقع الويب الخاص بك. من إنشاء المحتوى وجدولته إلى التحليلات وتتبع الأداء ، سنساعدك على تسخير قوة وسائل التواصل الاجتماعي لتحقيق أهداف عملك.</p>', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'What sets your digital agency apart from others?', 'ما الذي يميز وكالتك الرقمية عن غيرها؟', '<p>At our digital agency, we distinguish ourselves through a combination of creativity, technical expertise, and a client-centric approach. Our team is dedicated to delivering high-quality solutions that align with your unique goals. We prioritize open communication, transparency, and collaboration to ensure your vision is translated into a successful digital presence. With a focus on innovation and staying abreast of industry trends, we strive to exceed expectations and provide exceptional value to our clients.</p>', '<p>في وكالتنا الرقمية، نميز أنفسنا من خلال مزيج من الإبداع والخبرة التقنية والتوجه الخاص بالعميل. فريقنا ملتزم بتقديم حلول عالية الجودة تتوافق مع أهدافك الفريدة. نحن نعطي الأولوية للتواصل المفتوح والشفافية والتعاون لضمان تحويل رؤيتك إلى وجود رقمي ناجح. مع التركيز على الابتكار ومواكبة أحدث الاتجاهات في الصناعة، نسعى لتجاوز التوقعات وتقديم قيمة استثنائية لعملائنا.</p>', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, 'Do you offer ongoing support after the website is launched?', 'هل تقدمون دعما مستمرا بعد إطلاق الموقع؟', '<p>Yes, we believe in fostering long-term relationships with our clients. After your website is launched, we provide ongoing support and maintenance services to address any issues, implement updates, and ensure optimal performance. Our support team is readily available to assist you with any questions or concerns, ensuring that your digital presence remains seamless and up-to-date.</p>', '<p>نعم، نحن نؤمن بتعزيز العلاقات طويلة الأمد مع عملائنا. بعد إطلاق موقعك الإلكتروني، نقدم خدمات الدعم والصيانة المستمرة لمعالجة أي مشاكل، وتنفيذ التحديثات، وضمان الأداء المثالي. فريق الدعم لدينا متاح دائمًا لمساعدتك في أي أسئلة أو مخاوف، مما يضمن بقاء وجودك الرقمي سلسًا ومحدثًا.</p>', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_fours`
--

CREATE TABLE `home_fours` (
  `id` bigint UNSIGNED NOT NULL,
  `service_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_service` int UNSIGNED NOT NULL,
  `service_status` tinyint(1) NOT NULL DEFAULT '1',
  `marquee_status` tinyint(1) NOT NULL DEFAULT '1',
  `welcome_two_status` tinyint(1) NOT NULL DEFAULT '1',
  `portfolio_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_portfolio` int UNSIGNED NOT NULL,
  `portfolio_status` tinyint(1) NOT NULL DEFAULT '1',
  `choose_two_status` tinyint(1) NOT NULL DEFAULT '1',
  `testimonial_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_status` tinyint(1) NOT NULL DEFAULT '1',
  `team_member_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_team_member` int UNSIGNED NOT NULL,
  `team_member_status` tinyint(1) NOT NULL DEFAULT '1',
  `video_one_status` tinyint(1) NOT NULL DEFAULT '1',
  `client_status` tinyint(1) NOT NULL DEFAULT '1',
  `contact_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_status` tinyint(1) NOT NULL DEFAULT '1',
  `blog_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_blog` int UNSIGNED NOT NULL,
  `blog_status` tinyint(1) NOT NULL DEFAULT '1',
  `map_status` tinyint(1) NOT NULL DEFAULT '1',
  `photo_home_four` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_fours`
--

INSERT INTO `home_fours` (`id`, `service_heading`, `service_subheading`, `service_heading_ar`, `service_subheading_ar`, `how_many_service`, `service_status`, `marquee_status`, `welcome_two_status`, `portfolio_heading`, `portfolio_heading_ar`, `portfolio_subheading`, `portfolio_subheading_ar`, `how_many_portfolio`, `portfolio_status`, `choose_two_status`, `testimonial_heading`, `testimonial_heading_ar`, `testimonial_subheading`, `testimonial_subheading_ar`, `testimonial_text`, `testimonial_text_ar`, `testimonial_status`, `team_member_heading`, `team_member_heading_ar`, `team_member_subheading`, `team_member_subheading_ar`, `how_many_team_member`, `team_member_status`, `video_one_status`, `client_status`, `contact_heading`, `contact_heading_ar`, `contact_subheading`, `contact_subheading_ar`, `contact_status`, `blog_heading`, `blog_heading_ar`, `blog_subheading`, `blog_subheading_ar`, `how_many_blog`, `blog_status`, `map_status`, `photo_home_four`, `created_at`, `updated_at`) VALUES
(1, 'Explore what services\n            we’re offering', 'OUR SERVICES', 'استكشاف الخدمات التي نقدمها', 'خدماتنا', 3, 1, 1, 1, 'Explore our new recently\n            completed projects.', 'استكشف مشاريعنا الجديدة التي تم إكمالها مؤخرًا.', 'OUR PORTFOLIO', 'معرض أعمالنا', 4, 1, 1, 'What they’re \n            talking about', 'ماذا يتحدثون عنه؟', 'TESTIMONIALS', 'شهادات العملاء', 'Lorem ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free text quis bibendum.', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 1, 'Meet the professional team\n            behind the success', 'التعرف على الفريق المحترف الذي يقف وراء النجاح', 'MEET OUR TEAM MEMBERS', 'تعرف على أعضاء فريقنا', 3, 1, 1, 1, 'Let’s work together', 'لنعمل معًا', 'GET IN TOUCH', 'تواصل معنا', 1, 'Checkout latest news\n            updates & articles', 'تحقق من آخر التحديثات الإخبارية والمقالات', 'FROM THE BLOG', 'من المدونة', 3, 1, 1, 'home_4_contact_1705210297.png', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_ones`
--

CREATE TABLE `home_ones` (
  `id` bigint UNSIGNED NOT NULL,
  `how_many_service_slider` int UNSIGNED NOT NULL,
  `service_slider_status` tinyint(1) NOT NULL DEFAULT '1',
  `welcome_one_status` tinyint(1) NOT NULL DEFAULT '1',
  `service_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_service` int UNSIGNED NOT NULL,
  `service_status` tinyint(1) NOT NULL DEFAULT '1',
  `video_one_status` tinyint(1) NOT NULL DEFAULT '1',
  `funfact_status` tinyint(1) NOT NULL DEFAULT '1',
  `portfolio_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_portfolio` int UNSIGNED NOT NULL,
  `portfolio_status` tinyint(1) NOT NULL DEFAULT '1',
  `contact_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_status` tinyint(1) NOT NULL DEFAULT '1',
  `blog_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_blog` int UNSIGNED NOT NULL,
  `blog_status` tinyint(1) NOT NULL DEFAULT '1',
  `video_two_status` tinyint(1) NOT NULL DEFAULT '1',
  `feature_one_status` tinyint(1) NOT NULL DEFAULT '1',
  `testimonial_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_status` tinyint(1) NOT NULL DEFAULT '1',
  `choose_one_status` tinyint(1) NOT NULL DEFAULT '1',
  `client_status` tinyint(1) NOT NULL DEFAULT '1',
  `photo_home_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_ones`
--

INSERT INTO `home_ones` (`id`, `how_many_service_slider`, `service_slider_status`, `welcome_one_status`, `service_heading`, `service_subheading`, `service_heading_ar`, `service_subheading_ar`, `how_many_service`, `service_status`, `video_one_status`, `funfact_status`, `portfolio_heading`, `portfolio_subheading`, `portfolio_heading_ar`, `portfolio_subheading_ar`, `how_many_portfolio`, `portfolio_status`, `contact_heading`, `contact_subheading`, `contact_heading_ar`, `contact_subheading_ar`, `contact_status`, `blog_heading`, `blog_subheading`, `blog_heading_ar`, `blog_subheading_ar`, `how_many_blog`, `blog_status`, `video_two_status`, `feature_one_status`, `testimonial_heading`, `testimonial_subheading`, `testimonial_text`, `testimonial_heading_ar`, `testimonial_subheading_ar`, `testimonial_text_ar`, `testimonial_status`, `choose_one_status`, `client_status`, `photo_home_one`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 1, 'High quality products and services \n            that we stand behind', 'SERVICES WE ARE OFFERING', 'منتجات وخدمات عالية الجودة التي نقف وراءها', 'الخدمات التي نقدمها', 3, 1, 1, 1, 'Our Recent Work', 'OUR PORTFOLIO', 'أعمالنا الأخيرة', 'معرض أعمالنا', 5, 1, 'Let`s work together', 'GET IN TOUCH', ' لنعمل معًا', 'تواصل معنا', 1, 'Checkout latest news updates & articles', 'Your Blog Subheading', 'تحقق من أحدث التحديثات الإخبارية والمقالات', 'من المدونة', 3, 1, 1, 1, 'What they’re talking?', 'OUR FEEDBACKS', 'Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free text quis bibendum.', 'عن ماذا يتحدثون؟', 'OUR FEEDBACKS', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 1, 1, 1, 'home_1_contact_1705210297.png', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_threes`
--

CREATE TABLE `home_threes` (
  `id` bigint UNSIGNED NOT NULL,
  `how_many_service` int UNSIGNED NOT NULL,
  `service_status` tinyint(1) NOT NULL DEFAULT '1',
  `welcome_two_status` tinyint(1) NOT NULL DEFAULT '1',
  `offer_status` tinyint(1) NOT NULL DEFAULT '1',
  `portfolio_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_portfolio` int UNSIGNED NOT NULL,
  `portfolio_status` tinyint(1) NOT NULL DEFAULT '1',
  `video_one_status` tinyint(1) NOT NULL DEFAULT '1',
  `feature_two_status` tinyint(1) NOT NULL DEFAULT '1',
  `call_to_action_status` tinyint(1) NOT NULL DEFAULT '1',
  `client_status` tinyint(1) NOT NULL DEFAULT '1',
  `team_member_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_team_member` int UNSIGNED NOT NULL,
  `team_member_status` tinyint(1) NOT NULL DEFAULT '1',
  `contact_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_status` tinyint(1) NOT NULL DEFAULT '1',
  `photo_home_three` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_threes`
--

INSERT INTO `home_threes` (`id`, `how_many_service`, `service_status`, `welcome_two_status`, `offer_status`, `portfolio_heading`, `portfolio_heading_ar`, `portfolio_subheading`, `portfolio_subheading_ar`, `portfolio_text`, `portfolio_text_ar`, `how_many_portfolio`, `portfolio_status`, `video_one_status`, `feature_two_status`, `call_to_action_status`, `client_status`, `team_member_heading`, `team_member_heading_ar`, `team_member_subheading`, `team_member_subheading_ar`, `how_many_team_member`, `team_member_status`, `contact_heading`, `contact_subheading`, `contact_heading_ar`, `contact_subheading_ar`, `contact_status`, `photo_home_three`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 1, 'IMPROVE & ENHANCE THE \n            TECH PROJECTS', 'تحسين وتعزيز مشاريع التكنولوجيا', 'RECENTLY COMPLETED WORKS', 'الأعمال التي تم الانتهاء منها مؤخرًا', 'There are many variations of passages of available but majority have suffered alteration in some form, by humou or randomised words which don’t look even slightly believable', '\n            هناك العديد من الاختلافات في المقاطع المتاحة، ولكن الغالبية تعرضت للتعديل بشكل ما، سواء بواسطة الفكاهة أو الكلمات المعتمدة عشوائيًا، والتي لا تبدو حتى بشكل يسير مصداقية.', 5, 1, 1, 1, 1, 1, 'MEET THE EXPERTS', 'تعرف على الخبراء', 'OUR TEAM MEMBERS', 'أعضاء فريقنا', 3, 1, 'Let’s work together', 'GET IN TOUCH', 'لنعمل معًا', 'تواصل معنا', 1, 'home_3_contact_1705210297.png', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `home_twos`
--

CREATE TABLE `home_twos` (
  `id` bigint UNSIGNED NOT NULL,
  `service_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_service` int UNSIGNED NOT NULL,
  `service_status` tinyint(1) NOT NULL DEFAULT '1',
  `marquee_status` tinyint(1) NOT NULL DEFAULT '1',
  `welcome_two_status` tinyint(1) NOT NULL DEFAULT '1',
  `portfolio_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_portfolio` int UNSIGNED NOT NULL,
  `portfolio_status` tinyint(1) NOT NULL DEFAULT '1',
  `choose_two_status` tinyint(1) NOT NULL DEFAULT '1',
  `testimonial_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_status` tinyint(1) NOT NULL DEFAULT '1',
  `team_member_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_member_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_team_member` int UNSIGNED NOT NULL,
  `team_member_status` tinyint(1) NOT NULL DEFAULT '1',
  `client_status` tinyint(1) NOT NULL DEFAULT '1',
  `contact_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_status` tinyint(1) NOT NULL DEFAULT '1',
  `blog_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_blog` int UNSIGNED NOT NULL,
  `blog_status` tinyint(1) NOT NULL DEFAULT '1',
  `map_status` tinyint(1) NOT NULL DEFAULT '1',
  `photo_home_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_twos`
--

INSERT INTO `home_twos` (`id`, `service_heading`, `service_heading_ar`, `service_subheading`, `service_subheading_ar`, `how_many_service`, `service_status`, `marquee_status`, `welcome_two_status`, `portfolio_heading`, `portfolio_heading_ar`, `portfolio_subheading`, `portfolio_subheading_ar`, `how_many_portfolio`, `portfolio_status`, `choose_two_status`, `testimonial_heading`, `testimonial_heading_ar`, `testimonial_subheading`, `testimonial_subheading_ar`, `testimonial_text`, `testimonial_text_ar`, `testimonial_status`, `team_member_heading`, `team_member_heading_ar`, `team_member_subheading`, `team_member_subheading_ar`, `how_many_team_member`, `team_member_status`, `client_status`, `contact_heading`, `contact_heading_ar`, `contact_subheading`, `contact_subheading_ar`, `contact_status`, `blog_heading`, `blog_heading_ar`, `blog_subheading`, `blog_subheading_ar`, `how_many_blog`, `blog_status`, `map_status`, `photo_home_two`, `created_at`, `updated_at`) VALUES
(1, 'Explore what services\n            we`re offering', 'استكشف الخدمات التي نقدمها', 'OUR SERVICES', 'خدماتنا', 3, 1, 1, 1, 'Explore our new recently\n            completed projects', 'استكشف مشاريعنا الجديدة التي تم إكمالها مؤخرًا', 'OUR PORTFOLIO', 'معرض أعمالنا', 4, 1, 1, 'What they’re \n            talking about', 'عن ماذا يتحدثون؟', 'TESTIMONIALS', 'شهادات العملاء', 'Lorem ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean solldin, lorem is simply free text quis bibendum.', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 1, 'Meet the professional team\n            behind the success', 'تعرف على الفريق المحترف الذي يقف وراء النجاح', 'MEET OUR TEAM MEMBERS', 'تعرف على أعضاء فريقنا', 3, 1, 1, 'Let’s work together', 'لنعمل معًا', 'GET IN TOUCH', 'تواصل معنا', 1, 'Checkout latest news\n            updates & articles', 'تحقق من آخر التحديثات الأخبارية والمقالات', 'FROM THE BLOG', 'من المدونة', 3, 1, 1, 'home_2_contact_1705210297.png', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `marquees`
--

CREATE TABLE `marquees` (
  `id` bigint UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marquees`
--

INSERT INTO `marquees` (`id`, `item`, `item_ar`, `created_at`, `updated_at`) VALUES
(1, '* Transofrm ideas into reality', '* تحويل الأفكار إلى واقع.', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, '* Inspired with Creativity', '* مستوحى بالإبداع', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, '* Design & development craft', '* صناعة التصميم والتطوير', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, '* Unlock the potential', '* إطلاق الإمكانيات', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, '* Innovate with Great Passion', '* الابتكار بشغف عظيم', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `menu_manages`
--

CREATE TABLE `menu_manages` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_manages`
--

INSERT INTO `menu_manages` (`id`, `menu_name`, `menu_name_ar`, `identifier_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About', 'حول', 'about', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(2, 'Team Members', 'أعضاء الفريق', 'team_member', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(3, 'Testimonials', 'الاراء', 'testimonial', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(4, 'Pricing', 'السعر', 'pricing', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(5, 'FAQ', 'FAQ', 'faq', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(6, 'Services', 'خدمات', 'service', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(7, 'Products', 'منتجات', 'product', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(8, 'Portfolios', 'portfolio', 'portfolio', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(9, 'Blog', 'مدونة', 'blog', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(10, 'Contact', 'تواصل', 'contact', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_24_063533_create_clients_table', 1),
(7, '2024_01_24_082349_create_pricing_plans_table', 1),
(8, '2024_01_24_093326_create_pricing_options_table', 1),
(9, '2024_01_25_070756_create_f_a_q_s_table', 1),
(10, '2024_01_25_080840_create_testimonials_table', 1),
(11, '2024_01_25_095527_create_teams_table', 1),
(12, '2024_01_25_161257_create_team_experiences_table', 1),
(13, '2024_01_26_063351_create_portfolios_table', 1),
(14, '2024_01_26_063450_create_services_table', 1),
(15, '2024_01_26_063459_create_sliders_table', 1),
(16, '2024_01_26_094427_create_post_categories_table', 1),
(17, '2024_01_26_102222_create_service_f_a_q_s_table', 1),
(18, '2024_01_26_102559_create_posts_table', 1),
(19, '2024_01_27_061358_create_post_tags_table', 1),
(20, '2024_01_27_085103_create_settings_table', 1),
(21, '2024_01_28_060652_create_fun_facts_table', 1),
(22, '2024_01_28_060716_create_fun_fact_elements_table', 1),
(23, '2024_01_28_072652_create_marquees_table', 1),
(24, '2024_01_28_080416_create_offers_table', 1),
(25, '2024_01_28_080618_create_offer_elements_table', 1),
(26, '2024_01_28_090354_create_call_to_actions_table', 1),
(27, '2024_01_28_093924_create_video_ones_table', 1),
(28, '2024_01_28_093933_create_video_twos_table', 1),
(29, '2024_01_28_103957_create_menu_manages_table', 1),
(30, '2024_01_28_133013_create_subscribers_table', 1),
(31, '2024_01_28_145013_create_welcome_ones_table', 1),
(32, '2024_01_28_145020_create_welcome_twos_table', 1),
(33, '2024_01_28_145306_create_welcome_one_elements_table', 1),
(34, '2024_01_28_145326_create_welcome_two_elements_table', 1),
(35, '2024_01_28_145335_create_welcome_two_skills_table', 1),
(36, '2024_01_29_053706_create_feature_ones_table', 1),
(37, '2024_01_29_053715_create_feature_one_elements_table', 1),
(38, '2024_01_29_053932_create_feature_twos_table', 1),
(39, '2024_01_29_053941_create_feature_two_elements_table', 1),
(40, '2024_01_29_064013_create_why_choose_ones_table', 1),
(41, '2024_01_29_064020_create_why_choose_one_elements_table', 1),
(42, '2024_01_29_064036_create_why_choose_twos_table', 1),
(43, '2024_01_29_064041_create_why_choose_two_elements_table', 1),
(44, '2024_01_29_080204_create_home_ones_table', 1),
(45, '2024_01_29_085037_create_home_twos_table', 1),
(46, '2024_01_29_093424_create_home_threes_table', 1),
(47, '2024_01_29_093429_create_home_fours_table', 1),
(48, '2024_01_30_064713_create_abouts_table', 1),
(49, '2024_01_30_071342_create_other_page_team_members_table', 1),
(50, '2024_01_30_072058_create_other_page_testimonials_table', 1),
(51, '2024_01_30_072632_create_other_page_pricings_table', 1),
(52, '2024_01_30_072641_create_other_page_f_a_q_s_table', 1),
(53, '2024_01_30_072654_create_other_page_services_table', 1),
(54, '2024_01_30_072709_create_other_page_portfolios_table', 1),
(55, '2024_01_30_072716_create_other_page_blogs_table', 1),
(56, '2024_01_30_074943_create_other_page_contacts_table', 1),
(57, '2024_01_30_081047_create_other_page_terms_table', 1),
(58, '2024_01_30_081233_create_other_page_privacies_table', 1),
(59, '2024_01_30_082941_create_other_page_searches_table', 1),
(60, '2024_01_30_083001_create_other_page_tags_table', 1),
(61, '2024_01_30_085055_create_other_page_custom_pages_table', 1),
(62, '2024_02_07_093209_create_product_categories_table', 1),
(63, '2024_02_07_093217_create_products_table', 1),
(64, '2024_02_11_092335_create_contacts_table', 1),
(65, '2024_02_18_061615_create_product_orders_table', 1),
(66, '2024_02_18_075034_create_pricing_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `heading`, `heading_ar`, `sub_heading`, `sub_heading_ar`, `text`, `text_ar`, `icon`, `tagline`, `tagline_ar`, `youtube_video_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'The Best Source for IT Solutions', 'أفضل مصدر لحلول تكنولوجيا المعلومات', 'TECH MANAGEMENT', 'إدارة التكنولوجيا', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu convenient scheduling, account fugiat pariatur', 'دون أي حق في الإعتراض، يتم استخدام النصوص الخيالية كمثال لعرض اللغة البشرية.', 'flaticon-rating', 'We’re doing the right thing.\n            The right way.', 'نحن نقوم بالشيء الصحيح.\n            بالطريقة الصحيحة.', 'EWEDUrd1i5g', 'offer_photo_1704901634.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `offer_elements`
--

CREATE TABLE `offer_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_elements`
--

INSERT INTO `offer_elements` (`id`, `item`, `item_ar`, `offer_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is not simply random text', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Making this the first true generator on the Internet', 'جعل هذا أول مُولّد حقيقي على الإنترنت.', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Various versions have evolved over the years', 'تطورت إصدارات مختلفة على مر السنين', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_blogs`
--

CREATE TABLE `other_page_blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_blogs`
--

INSERT INTO `other_page_blogs` (`id`, `title`, `title_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 'مدونة', 'Blog', 'مدونة', 'Blog', 'مدونة', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_contacts`
--

CREATE TABLE `other_page_contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_mail_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_mail_heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_mail_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_mail_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_phone_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_phone_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_phone_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_email_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_email_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_email_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_address_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_address_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_address_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_address_value_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_contacts`
--

INSERT INTO `other_page_contacts` (`id`, `title`, `title_ar`, `send_mail_heading`, `send_mail_heading_ar`, `send_mail_subheading`, `send_mail_subheading_ar`, `information_heading`, `information_heading_ar`, `information_subheading`, `information_subheading_ar`, `information_text`, `information_text_ar`, `information_phone_title`, `information_phone_title_ar`, `information_phone_value`, `information_email_title`, `information_email_title_ar`, `information_email_value`, `information_address_title`, `information_address_title_ar`, `information_address_value`, `information_address_value_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Contact', 'التواصل', 'Feel free to write', 'الراحة في التواصل', 'Send us email', 'يمكنكم إرسال بريد إلكتروني إلينا ', 'Get in touch with us', 'تواصل معنا', 'Need any help?', 'هل تحتاج إلى أي مساعدة؟', 'Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'Have Any Question?', 'هل لديك أي سؤال؟', '+92 (020)-9850', 'Write Email', 'اكتب ايميل', 'needhelp@company.com', 'Visit Anytime', 'زُرنا في أي وقت', '66 broklyn golden street. New York', '66 شارع بروكلين الذهبي نيويورك', 'Contact', 'التواصل', 'Contact', 'التواصل', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_custom_pages`
--

CREATE TABLE `other_page_custom_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_custom_pages`
--

INSERT INTO `other_page_custom_pages` (`id`, `name`, `slug`, `name_ar`, `slug_ar`, `content`, `content_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Custom Page 1', 'Custom-Page-1', 'الصفحة المتخصصة 1', 'الصفحة-المتخصصة-1', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.<br><br>At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.<br><br>His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.<br><br>Ea eam illum impetus fierent, usu an erant honestatis accommodare. Eu sit elit eruditi repudiandae. Graeci menandri tacimates eam ea, mea indoctum aliquando eu, postea fierent ad cum. Ne has stet fuisset, pri apeirian reprehendunt an. Ius ut rebum essent. Tritani docendi insolens in quo, est dictas oblique cu, vim eius exerci ne. Ad eam vitae iudico facilisis. Sit ne euismod molestie placerat. Ut cum brute platonem. Nominavi scribentur no vix. Eum dolorem elaboraret adversarium eu, mea id vero dictas legimus. His at natum errem appetere, quo wisi alterum ex. Mei ipsum nihil urbanitas an, ut eam modo putant expetendis.</p>', '<p>نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي&nbsp;</p>', 'Custom Page 1', 'الصفحة المتخصصة 1', 'Custom Page 1', 'الصفحة المتخصصة 1', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Custom Page 2', 'Custom-Page-2', 'الصفحة المتخصصة 2', 'الصفحة-المتخصصة-2', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.<br><br>At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.<br><br>His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.<br><br>Ea eam illum impetus fierent, usu an erant honestatis accommodare. Eu sit elit eruditi repudiandae. Graeci menandri tacimates eam ea, mea indoctum aliquando eu, postea fierent ad cum. Ne has stet fuisset, pri apeirian reprehendunt an. Ius ut rebum essent. Tritani docendi insolens in quo, est dictas oblique cu, vim eius exerci ne. Ad eam vitae iudico facilisis. Sit ne euismod molestie placerat. Ut cum brute platonem. Nominavi scribentur no vix. Eum dolorem elaboraret adversarium eu, mea id vero dictas legimus. His at natum errem appetere, quo wisi alterum ex. Mei ipsum nihil urbanitas an, ut eam modo putant expetendis.</p>', '<p>نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي نص عشوائي&nbsp;</p>', 'Custom Page 2', 'الصفحة المتخصصة 2', 'Custom Page 2', 'الصفحة المتخصصة 2', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_f_a_q_s`
--

CREATE TABLE `other_page_f_a_q_s` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_f_a_q_s`
--

INSERT INTO `other_page_f_a_q_s` (`id`, `title`, `title_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'FAQ', 'FAQ', 'FAQ', 'FAQ', 'FAQ', 'FAQ', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_portfolios`
--

CREATE TABLE `other_page_portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_portfolios`
--

INSERT INTO `other_page_portfolios` (`id`, `title`, `title_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Portfolios', 'معرض أعمالنا', 'Portfolios', 'معرض أعمالنا', 'Portfolios', 'معرض أعمالنا', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_pricings`
--

CREATE TABLE `other_page_pricings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_pricings`
--

INSERT INTO `other_page_pricings` (`id`, `title`, `title_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Pricing Plans', 'خطط الأسعار', 'Pricing Plans', 'خطط الأسعار', 'Pricing Plans', 'خطط الأسعار', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_privacies`
--

CREATE TABLE `other_page_privacies` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_privacies`
--

INSERT INTO `other_page_privacies` (`id`, `title`, `title_ar`, `content`, `content_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Privacy', 'الخصوصية', 'Lorem ipsum dolor sit amet, sit liber elitr ei, elaboraret adversarium nam at. Ne vim tamquam lucilius pericula. Regione adipisci splendide id qui, ex justo harum neglegentur quo. Choro putent ex sea. Unum illud blandit ea has. Ornatus voluptua efficiantur te mei, ius eius regione legimus an, sit illud essent meliore ex.', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'Privacy', 'الخصوصية', 'Privacy', 'الخصوصية', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_searches`
--

CREATE TABLE `other_page_searches` (
  `id` bigint UNSIGNED NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_searches`
--

INSERT INTO `other_page_searches` (`id`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Search', 'البحث', 'Search', 'البحث', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_services`
--

CREATE TABLE `other_page_services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_services`
--

INSERT INTO `other_page_services` (`id`, `title`, `title_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'الخدمات', 'Services', 'الخدمات', 'Services', 'الخدمات', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_tags`
--

CREATE TABLE `other_page_tags` (
  `id` bigint UNSIGNED NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_tags`
--

INSERT INTO `other_page_tags` (`id`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Tag', 'اشارات', 'Tag', 'اشارات', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_team_members`
--

CREATE TABLE `other_page_team_members` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_team_members`
--

INSERT INTO `other_page_team_members` (`id`, `title`, `title_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Team Members', 'أعضاء الفريق', 'Team Members', 'أعضاء الفريق', 'Team Members', 'أعضاء الفريق', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_terms`
--

CREATE TABLE `other_page_terms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_terms`
--

INSERT INTO `other_page_terms` (`id`, `title`, `title_ar`, `content`, `content_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Terms of Use', 'شروط الاستخدام', 'Heading 1\n            Lorem ipsum dolor sit amet, sit liber elitr ei, elaboraret adversarium nam at. Ne vim tamquam lucilius pericula. Regione adipisci splendide id qui, ex justo harum neglegentur quo. Choro putent ex sea. Unum illud blandit ea has. Ornatus voluptua efficiantur te mei, ius eius regione legimus an, sit illud essent meliore ex.\n            \n            Heading 2\n            Viderer accusata volutpat in sit. Vel everti placerat gubergren id. Facer verterem inimicus qui eu, his delectus appetere te, doming iriure ex sit. Cum at hinc ipsum quodsi, ei pro erant perfecto.\n            \n            Heading 3\n            Suas homero nostro an sea, ea hinc evertitur has. Ius semper dolorum epicuri id, ea nam volumus definitiones, id vix eruditi appareat postulant. Te his elitr invenire persequeris. Homero eripuit te nec, omittam nominavi senserit nam id. Te eum consulatu assentior contentiones, suas aliquam verterem mea in, quod nibh mutat eam no. Ea has harum legere maluisset, sit cu summo sapientem. Labitur mandamus consectetuer nam ea, no fierent scribentur neglegentur ius.\n            \n            Heading 4\n            Utamur gubergren ea mel, at nibh veri temporibus pro. Vis hinc recteque definitionem in. Ius dicit pertinacia no. Te vel adhuc iriure reprehendunt, ei pri exerci essent virtute. Eam elit munere veritus in, ne quas scripta oblique mea, cu sea dolor saepe voluptatum.\n            \n            Heading 5\n            Nihil impetus quo cu, ne vix movet lucilius mediocritatem. Decore regione in nam, ne mei volumus albucius assueverit. Cu sea purto rationibus, usu an epicuri definitiones. Porro clita hendrerit usu ne. Et cum saepe insolens.\n            \n            Heading 6\n            Sed omnis lucilius repudiare ut. Vis ut putent volumus philosophia, in est brute tractatos concludaturque. Vim ad erant propriae maiestatis. In ius vidisse voluptaria, veri graece intellegat usu ex, veritus inimicus liberavisse ad mea.', 'عنوان 1\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            \n            عنوان 2\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            \n            عنوان 3\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            \n            عنوان 4\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            \n            عنوان 5\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            \n            عنوان 6\n            لوريم إيبسوم ليس مجرد نص عشوائي.', 'Terms of Use', 'شروط الاستخدام', 'Terms of Use', 'شروط الاستخدام', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `other_page_testimonials`
--

CREATE TABLE `other_page_testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_page_testimonials`
--

INSERT INTO `other_page_testimonials` (`id`, `title`, `title_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Testimonials', 'شهادات العملاء', 'Testimonials', 'شهادات العملاء', 'Testimonials', 'شهادات العملاء', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_descr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_descr_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `name_ar`, `slug`, `slug_ar`, `descr`, `descr_ar`, `date`, `client`, `client_ar`, `website`, `location`, `location_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `photo`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'Evolve Creative Studio', 'استوديو التطور الإبداعي', 'evolve-creative-studio', 'استودي-التطور-الإبداعي', '<p>Embark on a transformative journey with Evolve Creative Studio, where innovation meets artistry in a digital symphony. Our collaboration with this forward-thinking creative company led us to design and develop a website that serves as a virtual canvas for their boundless creativity. Evolve Creative Studio`s commitment to pushing the envelope in creative expression inspired us to craft a digital space that not only reflects their ethos but also stands as a testament to the seamless integration of technology and artistic evolution.\n            \n                The Evolve Creative Studio website is a testament to design innovation and a user-centric experience. Meticulously designed, it beckons visitors into a visually stunning realm, allowing them to seamlessly navigate through the studio`s diverse portfolio. From the captivating visuals that greet users to the intuitive user interface, every element was carefully curated to enhance user engagement and convey the essence of Evolve Creative Studio`s commitment to pushing creative boundaries.\n            \n                Behind the scenes, we orchestrated a technological symphony to ensure the website`s seamless performance. By utilizing cutting-edge web development techniques, we crafted a responsive design that adapts effortlessly to various devices. Evolve Creative Studio`s digital presence is not just a website; it`s a technological marvel that mirrors our dedication to leveraging the latest innovations, providing a dynamic and sophisticated platform for showcasing the studio`s evolving creative prowess. \n            \n                Our collaboration with Evolve Creative Studio was a journey of digital evolution, a transformative process that brought their vision to life. The website we designed and developed is more than a virtual space; it`s a dynamic reflection of Evolve Creative Studio`s ever-evolving narrative. Immerse yourself in the digital journey of Evolve Creative Studio, where every click propels you into a realm of innovation and creativity that continues to evolve and inspire.</p>', '<p>انطلق في رحلة تحولية مع استوديو التطور الإبداعي، حيث تلتقي الابتكار بالفن في سمفونية رقمية. تعاوننا مع هذه الشركة الإبداعية التفكيرية أدى بنا إلى تصميم وتطوير موقع ويب يعمل كلوحة فنية افتراضية لإبداعهم اللا حدود. التزام استوديو التطور الإبداعي بدفع حدود التعبير الإبداعي ألهمنا لصياغة مساحة رقمية تعكس ليس فقط جوهرهم ولكن أيضًا تقف كشهادة على التكامل السلس بين التكنولوجيا والتطور الفني.\n\n             موقع ويب استوديو التطور الإبداعي يعد شاهدًا على الابتكار في التصميم وتجربة مستخدم محورية. تم تصميمه بعناية فائقة، حيث يدعو الزوار إلى عالم مذهل بصريا، مما يتيح لهم التنقل بسهولة من خلال مجموعة متنوعة من أعمال الاستوديو. من الرؤى المذهلة التي تستقبل الزوار إلى واجهة المستخدم البديهية، تمت مراعاة كل عنصر بعناية لتعزيز مشاركة المستخدم ونقل جوهر التزام استوديو التطور الإبداعي بدفع حدود الإبداع.\n             \n             خلف الكواليس، قمنا بتنظيم سمفونية تكنولوجية لضمان أداء الموقع السلس. من خلال استخدام تقنيات تطوير الويب الحديثة، صممنا تصميمًا استجابيًا يتكيف بسلاسة مع مختلف الأجهزة. وجود استوديو التطور الإبداعي على الإنترنت ليس مجرد موقع ويب؛ بل هو عجيب تكنولوجي يعكس التزامنا بالاستفادة من أحدث الابتكارات، ويوفر منصة ديناميكية ومتطورة لعرض قدرات الاستوديو الإبداعية المتطورة.\n             \n             كان تعاوننا مع استوديو التطور الإبداعي رحلة من التطور الرقمي، وهو عملية تحولية جلبت رؤيتهم للحياة. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد مساحة افتراضية؛ بل هو انعكاس ديناميكي للسرد المتطور باستمرار لاستوديو التطور الإبداعي. اغمر نفسك في الرحلة الرقمية لاستوديو التطور الإبداعي، حيث يقودك كل نقرة في عالم من الابتكار والإبداع الذي يستمر في التطور والإلهام.</p>', '24 September, 2023', 'Evolve Creative Studio', 'استوديو التطور الإبداعي', 'https://www.evolve-creative-studio.com', 'Orlands, USA', NULL, 'Evolve Creative Studio', 'استوديو التطور الإبداعي', 'Evolve Creative Studio', 'استوديو التطور الإبداعي', 'portfolio_1699636287.jpg', 'portfolio_banner_1699618631.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Virtuoso Visions', 'استوديو التطور الإبداعي', 'virtuoso-visions', 'استودي-التطور-الإبداعي', '<p>Embark on a voyage into the visionary realm of Virtuoso Visions, where creativity and innovation converge in a symphony of digital brilliance. Our collaboration with this dynamic creative company led us to design and develop a unique website that serves as a digital canvas for their virtuoso endeavors. Virtuoso Visions` commitment to pushing the boundaries of creative expression inspired us to create a virtual space that not only captures their artistic spirit but also stands as a testament to the harmonious fusion of technology and creativity.\n\n                The Virtuoso Visions website is a testament to design elegance and user immersion. Our team meticulously crafted an immersive experience, inviting visitors to explore the intricate details of Virtuoso Visions` creative universe. From the striking visuals that greet users to the intuitive navigation guiding them through a diverse portfolio, every element was carefully considered to enhance user engagement and mirror the company`s commitment to artistic excellence.\n                \n                Behind the scenes, we orchestrated a technological symphony to ensure the website`s seamless performance. Employing cutting-edge web development techniques, we ensured a responsive design that adapts effortlessly to various devices. Virtuoso Visions` digital presence is not just a platform; it`s a technological masterpiece that reflects our commitment to leveraging the latest innovations in the digital landscape, providing a dynamic and sophisticated showcase for the company`s visionary work.\n                \n                Our collaboration with Virtuoso Visions was a journey of transforming vision into a captivating digital showcase. The website we designed and developed is more than a virtual space—it`s a testament to virtuosity in the digital age. Immerse yourself in the digital gallery of Virtuoso Visions, where every click unveils a new layer of creativity, and the boundaries of artistic expression are pushed to new heights.</p>', '<p>انطلق في رحلة إلى عالم الرؤى الرائدة مع \"رؤى الفنان الماهر\"، حيث تتلاقى الإبداع والابتكار في سمفونية من البراعة الرقمية. تعاوننا مع هذه الشركة الإبداعية الديناميكية أدى بنا إلى تصميم وتطوير موقع ويب فريد يعمل كقماش رقمي لجهودهم الفنية الراقية. التزام \"رؤى الفنان الماهر\" بدفع حدود التعبير الإبداعي ألهمنا لخلق مساحة افتراضية تلتقط ليس فقط روحهم الفنية ولكن أيضًا تقف كشهادة على الدمج المتناغم بين التكنولوجيا والإبداع.\n\n                موقع \"رؤى الفنان الماهر\" هو شاهد على أناقة التصميم وانغماس المستخدم. قام فريقنا بصناعة تجربة غامرة بعناية، مدعومة بصور بصرية مبهرة تستقبل الزوار، وتوجيه ملاحي بديهي يوجههم خلال مجموعة متنوعة من الأعمال الفنية. تم اعتبار كل عنصر بعناية لتعزيز مشاركة المستخدم وتعكس التزام الشركة بالتميز الفني.\n                \n                وراء الكواليس، قمنا بتنظيم سمفونية تكنولوجية لضمان أداء الموقع السلس. باستخدام تقنيات تطوير الويب الحديثة، ضمنا تصميمًا استجابيًا يتكيف بسهولة مع مختلف الأجهزة. وجود \"رؤى الفنان الماهر\" على الإنترنت ليس مجرد منصة؛ بل هو تحفة تكنولوجية تعكس التزامنا بالاستفادة من أحدث الابتكارات في المشهد الرقمي، وتوفير منصة ديناميكية ومتطورة لعرض العمل الرؤوي للشركة.\n                \n                كان تعاوننا مع \"رؤى الفنان الماهر\" رحلة لتحويل الرؤية إلى عرض رقمي مثير. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد مساحة افتراضية، بل هو شاهد على البراعة في العصر الرقمي. انغمس في المعرض الرقمي لـ \"رؤى الفنان الماهر\"، حيث كل نقرة تكشف عن طبقة جديدة من الإبداع، وحيث تتم دفع حدود التعبير الفني إلى آفاق جديدة.</p>', '21 November, 2022', 'Virtuoso Visions', 'رؤى موهوبة', 'https://www.virtuoso-visions.com', 'Toronto, Canada', NULL, 'Virtuoso Visions', 'رؤى موهوبة', 'Virtuoso Visions', 'رؤى موهوبة', 'portfolio_1699636146.jpg', 'portfolio_banner_1699618801.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Dream Craftsman', 'حرفي الأحلام', 'dream-craftsman', 'حرفي-الأحلام', '<p>Enter the enchanting world of DreamCraftsman, where imagination meets craftsmanship in a symphony of digital artistry. Our collaboration with this visionary creative company led us to design and develop a bespoke website that serves as a virtual atelier, showcasing their exceptional talent and commitment to crafting dreams into reality. DreamCraftsman`s ethos inspired us to create an online space that not only mirrors their artistic spirit but also stands as a testament to the seamless integration of technology and creativity.\n\n                The DreamCraftsman website is a testament to design harmony, where aesthetics and functionality converge seamlessly. Our team meticulously crafted an immersive user experience, ensuring that visitors embark on a visual journey through the heart of DreamCraftsman`s creative universe. From the captivating imagery that greets users to the intuitive navigation guiding them through an array of masterpieces, every detail was considered to elevate user engagement and encapsulate the essence of DreamCraftsman`s unparalleled artistry.\n                \n                Behind the scenes, we employed technological artistry to ensure the website not only meets but exceeds the expectations of a modern digital audience. Responsive design ensures a fluid and captivating experience across various devices, while robust backend development guarantees optimal performance and security. DreamCraftsman`s digital presence is a showcase of our commitment to leveraging technology as a canvas for artistic expression, providing a dynamic and cutting-edge platform that mirrors the sophistication of the company`s creations.\n                \n                Our collaboration with DreamCraftsman was a journey of translating dreams into a digital gallery. The website we designed and developed is not just a platform—it`s an immersive experience where every click is an invitation to explore the intricate tapestry of dreams brought to life. Step into the digital gallery of DreamCraftsman, where every pixel tells a story, and creativity knows no bounds.</p>', '<p>ادخل إلى عالم ساحر من حرفي الأحلام، حيث تلتقي الخيال بالحرفية في سمفونية من الفن الرقمي. تعاوننا مع هذه الشركة الإبداعية المبتكرة أدى بنا إلى تصميم وتطوير موقع ويب حصري يعمل كورشة افتراضية، يعرض موهبتهم الاستثنائية والتزامهم بتحويل الأحلام إلى واقع. روح حرفي الأحلام ألهمتنا لخلق مساحة عبر الإنترنت لا تعكس فقط روحهم الفنية ولكن أيضًا تقف كشهادة على التكامل السلس بين التكنولوجيا والإبداع.\n\n                موقع ويب حرفي الأحلام هو شاهد على توافق التصميم، حيث تتلاقى الجمالية والوظائف بسلاسة. قام فريقنا بصناعة تجربة مستخدم غامرة، ضمنا فيها أن الزوار يبدؤون رحلة بصرية عبر قلب كون حرفي الأحلام الإبداعي. من الصور المذهلة التي تستقبل الزوار إلى التصفح البديهي الذي يوجههم خلال مجموعة من الأعمال الرائعة، تم اعتبار كل تفاصيل لتعزيز مشاركة المستخدم وتلخيص جوهر فن حرفي الأحلام الفريد.\n                \n                وراء الكواليس، استخدمنا الحرفية التكنولوجية لضمان أن الموقع لا يفوت فقط التوقعات ولكن يتجاوزها بالنسبة للجمهور الرقمي الحديث. يضمن التصميم الاستجابي تجربة سلسة وجذابة عبر مختلف الأجهزة، بينما يضمن تطوير الجزء الخلفي القوي الأداء والأمان الأمثل. وجود حرفي الأحلام عبر الإنترنت هو عرض لالتزامنا بتحويل التكنولوجيا إلى وسيلة للتعبير الفني، وتوفير منصة ديناميكية وحديثة تعكس تطور الشركة وتفردها.\n                \n                كان تعاوننا مع حرفي الأحلام رحلة من ترجمة الأحلام إلى معرض رقمي. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد منصة، بل هو تجربة غامرة حيث كل نقرة هي دعوة لاستكشاف خيوط الأحلام التي تتحقق. اخطو إلى المعرض الرقمي لحرفي الأحلام، حيث كل بكسل يحكي قصة، وحيث لا حدود للإبداع.</p>', '25 March, 2023', 'Dream Craftsman', 'حرفي الأحلام', 'https://www.dream-craftsman.com', 'Brisbane, Australia', NULL, 'Dream Craftsman', 'حرفي الأحلام', 'Dream Craftsman', 'حرفي الأحلام', 'portfolio_1699636005.jpg', 'portfolio_banner_1699630123.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'Imagination Forge', 'معمل الخيال', 'imagination-forge', 'معمل-الخيال', '<p>Step into the realm of boundless creativity with Imagination Forge, where innovation is forged into the very fabric of the digital landscape. Our collaboration with this visionary creative company led us to design and develop a bespoke website, a digital forge where ideas are brought to life. Imagination Forge`s commitment to pushing the boundaries of imagination inspired us to create a virtual space that not only reflects their avant-garde spirit but also serves as a testament to the fusion of technology and creative prowess.\n\n                The Imagination Forge website is a masterpiece of design alchemy, where aesthetics meet functionality. We conceptualized and crafted an immersive user experience, ensuring that each visit is a journey through the limitless possibilities of imagination. From the captivating visuals that greet visitors to the seamless navigation that guides them through a diverse portfolio, every aspect of the design has been meticulously curated to foster engagement and showcase the company`s commitment to forging new creative frontiers.\n                \n                Behind the scenes, we employed technological wizardry to ensure that the website not only meets but surpasses the expectations of a modern digital audience. Responsive design ensures a fluid experience across devices, while the robust backend development guarantees optimal performance and security. Imagination Forge`s digital presence is a testament to our dedication to leveraging technology as a catalyst for creative expression, providing a dynamic and cutting-edge platform that mirrors the company`s ethos.\n                \n                Our collaboration with Imagination Forge was a shared odyssey of transforming vision into a digital reality. The website we designed and developed isn`t just a virtual space—it`s a digital canvas where innovation is brought to life. Immerse yourself in the imaginative wonders of Imagination Forge, where every click is a step into a realm where creativity knows no bounds, and the forge of innovation is ever ablaze.</p>', '<p>انغمس في عالم الإبداع اللا حدود مع معمل الخيال، حيث يتم تشكيل الابتكار في نسيج المناظر الرقمية. تعاوننا مع هذه الشركة الإبداعية المبتكرة أدى بنا إلى تصميم وتطوير موقع ويب حصري، معمل رقمي حيث تُحقق الأفكار الحية. التزام معمل الخيال بدفع حدود الخيال ألهمنا لخلق مساحة افتراضية لا تعكس فقط روحهم المبتكرة ولكن تقف أيضًا كشهادة على دمج التكنولوجيا والقدرة الإبداعية.\n\n                موقع معمل الخيال هو تحفة في الكيمياء التصميمية، حيث تلتقي الجمالية بالوظائف. قمنا بتصور وصنع تجربة مستخدم غامرة، مضمونة بأن كل زيارة هي رحلة عبر الإمكانيات اللانهائية للخيال. من الصور المبهرة التي تستقبل الزوار إلى التصفح السلس الذي يوجههم خلال مجموعة متنوعة من الأعمال، تمت مراعاة كل جانب من جوانب التصميم بعناية لتعزيز المشاركة وعرض التزام الشركة بفتح آفاق إبداعية جديدة.\n                \n                وراء الكواليس، استخدمنا السحر التكنولوجي لضمان أن الموقع لا يفوت فقط التوقعات ولكن يتجاوزها بالنسبة للجمهور الرقمي الحديث. يضمن التصميم الاستجابي تجربة سلسة عبر الأجهزة، بينما يضمن تطوير الجزء الخلفي القوي الأداء والأمان الأمثل. وجود معمل الخيال عبر الإنترنت هو شاهد على التفاني لدينا في استغلال التكنولوجيا كمحفز للتعبير الإبداعي، وتوفير منصة ديناميكية وحديثة تعكس مبادئ الشركة.\n                \n                كان تعاوننا مع معمل الخيال رحلة مشتركة لتحويل الرؤية إلى واقع رقمي. الموقع الذي قمنا بتصميمه وتطويره ليس مجرد منصة افتراضية، بل هو قماش رقمي حيث يتم تحقيق الابتكار. انغمس في عجائب الخيال في معمل الخيال، حيث كل نقرة هي خطوة نحو عالم حيث لا حدود للإبداع، وحيث تبقى مصنع الابتكار في دائم الحيوية.</p>', '13 August, 2023', 'Imagination Forge', 'معمل الخيال', 'https://www.imagination-forge.com', 'Sydney, Australia', NULL, 'Imagination Forge', 'معمل الخيال', 'Imagination Forge', 'معمل الخيال', 'portfolio_1699630123.jpg', 'portfolio_banner_1699636005.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, 'Innovate Craft', 'تجديد الصناعة', 'innovate-craft', 'تجديد-الصناعة', '<p>Embark on a journey of innovation and craftsmanship with Innovate Craft, a digital haven for a creative company that thrives on pushing boundaries. Our partnership with Innovate Craft led us to design and develop a bespoke website that not only serves as a digital storefront but also mirrors the company`s commitment to ingenuity and quality. As architects of their online presence, we meticulously crafted a platform that not only showcases their exceptional products but also captures the essence of their unique creative spirit.\n\n                At the core of Innovate Craft`s online identity lies a design philosophy that marries elegance with user interaction. The website is a testament to our dedication to providing a seamless and visually engaging experience. From the intuitive navigation that guides visitors through the product catalog to the strategically placed calls-to-action, every element has been carefully considered. The design doesn`t just showcase craftsmanship; it invites users to explore, learn, and appreciate the artistry behind each creation.\n                \n                Behind the scenes, we employed state-of-the-art web development techniques to ensure that the website not only meets but exceeds modern digital standards. Responsive design ensures a consistent and visually appealing experience across devices, while robust backend development guarantees optimal performance and security. Innovate Craft`s digital presence is a harmonious fusion of artistic expression and technological precision, a testament to our commitment to delivering excellence in the digital realm.\n                \n                Our collaboration with Innovate Craft was more than a project; it was a shared journey of storytelling in the digital age. The website we crafted is not just a platform for transactions; it`s a digital narrative that unfolds the story behind each craft. We invite you to explore Innovate Craft`s virtual showroom—a testament to the seamless integration of creativity and technology, where innovation meets craftsmanship in the digital realm.</p>', '<p>\n                انطلق في رحلة من الابتكار والحرفية مع Innovate Craft، ملاذ رقمي لشركة إبداعية تزدهر على دفع الحدود. شراكتنا مع Innovate Craft أدتنا إلى تصميم وتطوير موقع ويب حصري يعمل ليس فقط كمتجر رقمي ولكن أيضًا يعكس التزام الشركة بالابتكار والجودة. كمهندسين لوجودهم على الإنترنت، قمنا بصناعة منصة بدقة تعكس ليس فقط منتجاتهم الاستثنائية ولكن أيضًا تلتقط جوهر روحهم الإبداعية الفريدة.\n                \n                في جوهر هوية Innovate Craft على الإنترنت تكمن فلسفة التصميم التي تجمع بين الأناقة وتفاعل المستخدم. الموقع هو شاهد على التفاني في توفير تجربة سلسة وجذابة بصريًا. من التصفح البديهي الذي يوجه الزوار من خلال فهرس المنتجات إلى الدعوات إلى العمل الموضوعة بشكل استراتيجي، تم اعتبار كل عنصر بعناية. التصميم لا يعرض فقط الحرفية؛ بل يدعو المستخدمين إلى استكشاف وتعلم وتقدير الفن وراء كل إبداع.\n                \n                وراء الكواليس، استخدمنا أحدث تقنيات تطوير الويب لضمان أن الموقع لا يلبي فقط ولكن يتجاوز المعايير الرقمية الحديثة. يضمن التصميم الاستجابي تجربة متسقة وجذابة بصريًا عبر مختلف الأجهزة، بينما يضمن تطوير الجزء الخلفي القوي الأداء الأمثل والأمان. يمثل وجود Innovate Craft عبر الإنترنت دمجًا متناغمًا بين التعبير الفني والدقة التكنولوجية، شاهدًا على التزامنا بتقديم التميز في العالم الرقمي.\n                \n                كان تعاوننا مع Innovate Craft أكثر من مشروع؛ كانت رحلة مشتركة للسرد في عصر الرقمي. الموقع الذي قمنا بصياغته ليس مجرد منصة للمعاملات؛ بل هو سرد رقمي يكشف عن قصة كل حرفة. ندعوك لاستكشاف صالة عرض Innovate Craft الافتراضية - شاهدًا على التكامل السلس بين الإبداع والتكنولوجيا، حيث يلتقي الابتكار بالحرفية في العالم الرقمي.</p>', '01 February, 2023', 'Innovate Craft', 'تجديد الصناعة', 'https://www.innovate-craft.com', 'Boston, USA', NULL, 'Innovate Craft', 'تجديد الصناعة', 'Innovate Craft', 'تجديد الصناعة', 'portfolio_1699618801.jpg', 'portfolio_banner_1699636146.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(6, 'Creative Canvas Hub', 'مركز القماش الإبداعي', 'creative-canvas-hub', 'مركز-القماش-الإبداعي', '<p>Step into the digital realm of boundless creativity with Creative Canvas Hub, a vibrant showcase of artistic expression brought to life through the lens of cutting-edge web design and development. Our collaboration with Creative Canvas Hub is more than just a project; it`s a testament to the fusion of technology and artistry. As the architects behind their online presence, we took on the challenge of translating their unique vision into a dynamic, visually captivating website that serves as a canvas for their creative endeavors.\n\n                In crafting the digital home for Creative Canvas Hub, our design philosophy centered on providing an immersive and seamless user experience. The website is a masterpiece in itself, featuring an intuitive navigation structure that guides visitors through the diverse tapestry of Creative Canvas Hub`s portfolio. From the bold color schemes that evoke emotion to the strategic placement of interactive elements, every aspect of the design was meticulously curated to enhance engagement and showcase the depth of their creative prowess.\n                \n                Behind the scenes, we employed the latest in web development technologies to ensure a robust and scalable platform. The website is not just visually stunning but also boasts functionality that aligns with the dynamic nature of Creative Canvas Hub`s work. Responsive design elements guarantee a flawless experience across devices, and our commitment to optimization ensures swift loading times, inviting visitors to explore without interruption.\n                \n                Collaborating with Creative Canvas Hub was a journey of synergy, where their artistic vision met our technical expertise. The result is a website that not only reflects the essence of Creative Canvas Hub but also serves as a testament to the power of collaboration in the digital age. We invite you to experience the seamless blend of creativity and technology at Creative Canvas Hub`s virtual home—a testament to our dedication to bringing ideas to life in the digital space.</p>', '<p>ادخل إلى عالم الإبداع الرقمي الذي لا حدود له مع مركز القماش الإبداعي، عرض حي ومتجدد للتعبير الفني يتجسد من خلال عدسة تصميم وتطوير الويب المتطورة. تعاوننا مع مركز القماش الإبداعي أكثر من مجرد مشروع؛ إنه شاهد على دمج التكنولوجيا والفن. بصفتنا المهندسين وراء وجودهم على الإنترنت، قبلنا التحدي لترجمة رؤيتهم الفريدة إلى موقع ويب ديناميكي وجذاب بصريًا يعمل كقماش لجهودهم الإبداعية.\n\n                عند تصميم الموطن الرقمي لمركز القماش الإبداعي، تركزت فلسفتنا على توفير تجربة مستخدم غامرة وسلسة. الموقع هو تحفة في حد ذاته، حيث يتميز ببنية تصفح بديهية توجه الزوار خلال السجادة المتنوعة لمحفظة مركز القماش الإبداعي. من المخططات اللونية الجريئة التي تستحضر المشاعر إلى توزيع العناصر التفاعلية بشكل استراتيجي، تم ترتيب كل جانب من جوانب التصميم بعناية لتعزيز المشاركة وعرض عمق قدرتهم الإبداعية.\n                \n                وراء الكواليس، استخدمنا أحدث تقنيات تطوير الويب لضمان منصة قوية وقابلة للتوسيع. الموقع ليس فقط جميل بصريًا ولكنه يتمتع أيضًا بوظائف تتناسب مع طبيعة عمل مركز القماش الإبداعي الدينامي. تضمن عناصر التصميم الاستجابي تجربة خالية من العيوب عبر الأجهزة، والتزامنا بالتحسين يضمن أوقات تحميل سريعة، داعيًا الزوار لاستكشاف دون انقطاع.\n                \n                كان التعاون مع مركز القماش الإبداعي رحلة من التآزر، حيث التقى رؤيتهم الفنية بخبرتنا التقنية. النتيجة هي موقع ويب لا يعكس فقط جوهر مركز القماش الإبداعي بل يعتبر أيضًا شاهدًا على قوة التعاون في عصر الرقمي. ندعوك لتجربة الاندماج السلس بين الإبداع والتكنولوجيا في موطن Creative Canvas Hub - شاهد على التفاني لدينا في تحويل الأفكار إلى واقع في الفضاء الرقمي.</p>', '22 Janurary, 2023', 'Creative Canvas Hub', 'مركز القماش الإبداعي', 'https://www.creativecanvashub.com', 'NewYork, USA', NULL, 'Creative Canvas Hub', 'مركز القماش الإبداعي', 'Creative Canvas Hub', 'مركز القماش الإبداعي', 'portfolio_1699618631.jpg', 'portfolio_banner_1699636287.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_title_ar` text COLLATE utf8mb4_unicode_ci,
  `seo_descr` text COLLATE utf8mb4_unicode_ci,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `title_ar`, `slug`, `slug_ar`, `descr`, `descr_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `photo`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Social Media Success: Pro Strategies for You', 'النجاح في وسائل التواصل الاجتماعي: استراتيجيات متقدمة لك', 'social-media-success-pro-strategies', 'النجاح-في-وسائل-التواصل-الاجتماعي-استراتيجيات', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.\n\n            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.\n            \n            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.\n            \n            </p>', '<p>لوريم إيبسوم ليس مجرد نص عشوائي. \n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            </p>', 'Social Media Success: Pro Strategies for You', 'النجاح في وسائل التواصل الاجتماعي: استراتيجيات متقدمة لك', 'Social Media Success: Pro Strategies for You', 'النجاح في وسائل التواصل الاجتماعي: استراتيجيات متقدمة لك', 'post_1704688156.jpg', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Web Design Essentials for Optimal User Experience', 'الأساسيات في تصميم الويب لتجربة مستخدم مثلى', 'web-design-essentials-for-optimal-ux', 'الأساسيات-في-تصميم-الويب-لتجربة-مستخدم-مثلى', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.\n\n            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.\n            \n            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.\n            \n            </p>', '<p>لوريم إيبسوم ليس مجرد نص عشوائي. \n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            </p>', 'Web Design Essentials for Optimal User Experience', '', 'Web Design Essentials for Optimal User Experience', '', 'post_1704688078.jpg', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Digital Branding Mastery: Your Ultimate Guide', 'احتراف التسويق الرقمي: دليلك النهائي', 'digital-branding-mastery', 'احتراف-التسويق-الرقمي', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.\n\n            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.\n            \n            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.\n            \n            </p>', '<p>لوريم إيبسوم ليس مجرد نص عشوائي. \n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            </p>', 'Digital Branding Mastery: Your Ultimate Guide', 'احتراف التسويق الرقمي: دليلك النهائي', 'Digital Branding Mastery: Your Ultimate Guide', 'احتراف التسويق الرقمي: دليلك النهائي', 'post_1704687929.jpg', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `name_ar`, `slug`, `slug_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Business', 'عمل', 'business', 'عمل', 'Business', 'عمل', 'Business', 'عمل', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Digital Agency', 'وكالة رقمية', 'digital-agency', 'وكالة-رقمية', 'Digital Agency', 'وكالة رقمية', 'Digital Agency', 'وكالة رقمية', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Technology', 'تكنولوجيا', 'technology', 'تكنولوجيا', 'Technology', 'تكنولوجيا', 'Technology', 'تكنولوجيا', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'Web Design', 'تصميم ويب', 'web-design', 'تصميم-ويب', 'Web Design', 'تصميم ويب', 'Web Design', 'تصميم ويب', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, 'Web Development', 'تطوير ويب', 'web-development', 'تطوير-ويب', 'Web Development', 'تطوير ويب', 'Web Development', 'تطوير ويب', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `name`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'social', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'strategies', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'business', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'web design', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, 'agency', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(6, 'ui', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(7, 'ux', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(8, 'digital', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(9, 'agency', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(10, 'website', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_options`
--

CREATE TABLE `pricing_options` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricing_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_options`
--

INSERT INTO `pricing_options` (`id`, `name`, `name_ar`, `pricing_id`, `created_at`, `updated_at`) VALUES
(1, '24/7 System Monitoring', '24/7 مراقبة النظام', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(2, 'Security Management', 'إدارة الأمن', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(3, 'Patch Management', 'إدارة التصحيح', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(4, 'Remote Support', 'الدعم عن بعد', 1, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(5, '24/7 System Monitoring', '24/7 مراقبة النظام', 2, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(6, 'Security Management', 'إدارة الأمن', 2, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(7, 'Patch Management', 'إدارة التصحيح', 2, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(8, 'Remote Support', 'الدعم عن بعد', 2, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(9, '24/7 System Monitoring', '24/7 مراقبة النظام', 3, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(10, 'Security Management', 'إدارة الأمن', 3, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(11, 'Patch Management', 'إدارة التصحيح', 3, '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(12, 'Remote Support', 'الدعم عن بعد', 3, '2024-04-22 06:30:10', '2024-04-22 06:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_orders`
--

CREATE TABLE `pricing_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `pricing_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plans`
--

CREATE TABLE `pricing_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_plans`
--

INSERT INTO `pricing_plans` (`id`, `photo`, `name`, `name_ar`, `price`, `period`, `btn_text`, `btn_text_ar`, `btn_url`, `created_at`, `updated_at`) VALUES
(1, 'pricing_plan_1704720013.png', 'Basic Plan', 'الخطة الأساسية', '49', 'Monthly', 'Choose Plan', 'اختر خطة', '#', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(2, 'pricing_plan_1704720036.png', 'Advance Plan', 'الخطة المتفدمة', '69', 'Monthly', 'Choose Plan', 'اختر خطة', '#', '2024-04-22 06:30:10', '2024-04-22 06:30:10'),
(3, 'pricing_plan_1704720057.png', 'Premium Plan', 'الخطة مميزة', '99', 'Monthly', 'Choose Plan', 'اختر خطة', '#', '2024-04-22 06:30:10', '2024-04-22 06:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `seo_title_ar` text COLLATE utf8mb4_unicode_ci,
  `seo_descr` text COLLATE utf8mb4_unicode_ci,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci,
  `amount` int UNSIGNED NOT NULL,
  `price` bigint UNSIGNED NOT NULL,
  `discount` int UNSIGNED NOT NULL DEFAULT '0',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `name_ar`, `slug`, `slug_ar`, `descr`, `descr_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `amount`, `price`, `discount`, `photo`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'Lorem-ipsum-dolor-sit-amet1', 'لوريم-إيبسوم-ليس-مجرد-نص-عشوائي-1', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.\n\n            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.\n            \n            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.\n            \n            </p>', '<p>لوريم إيبسوم ليس مجرد نص عشوائي. \n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            </p>', 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 5, 91000, 1000, 'product_1704688156.jpg', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'Lorem-ipsum-dolor-sit-amet2', 'لوريم-إيبسوم-ليس-مجرد-نص-عشوائي-2', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.\n\n            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.\n            \n            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.\n            \n            </p>', '<p>لوريم إيبسوم ليس مجرد نص عشوائي. \n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            </p>', 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 10, 2500, 100, 'product_1704688157.jpg', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Lorem ipsum dolor sit amet', 'احتراف التسويق الرقمي: دليلك النهائي', 'Lorem-ipsum-dolor-sit-amet3', 'لوريم-إيبسوم-ليس-مجرد-نص-عشوائي-3', '<p>Lorem ipsum dolor sit amet, duo veniam feugiat platonem cu, laoreet graecis sensibus ius ut. Cum lorem vocent luptatum at, no ius possim maluisset vituperatoribus, ea vivendo tacimates ius. Ius an altera essent iisque. Ceteros intellegebat at sit, eam amet paulo timeam ex. Ad sed fierent moderatius. Cum id debitis probatus partiendo. Eius principes expetendis eu vim, et voluptatum instructior mediocritatem duo, invenire periculis id sit. Timeam omnesque pro no. Quodsi ocurreret posidonium no quo. Nostrud perpetua convenire ex usu, eu errem scriptorem sea.\n\n            At pro ubique adipisci pertinacia, homero interpretaris conclusionemque has in. Sea offendit tacimates ne, summo dolore voluptatibus no vix. Mea nemore dignissim id, eos in facer conclusionemque. Ei duo omnesque conclusionemque. Nec ne paulo dolorem euripidis, sed ea epicurei singulis honestatis. Et quodsi platonem definiebas sed, cum no justo tamquam, pro paulo viris et. Putant partiendo dissentiunt te vis. Te percipit torquatos mea, erant audiam sapientem et mel, quas vituperata ad ius. Deserunt tractatos et quo, eu pri omnis aliquip honestatis. Est id doming possit facilisis, meis feugait deseruisse id quo.\n            \n            His ex zril ponderum disputando, nonumes epicurei accommodare mei id. Vis an simul delenit propriae. Ne eos nisl iisque indoctum, ut est vivendo fastidii, hinc eripuit cum at. Nam ei adhuc oblique. Movet salutandi expetendis ad vis. Ea mea vide exerci. Nec an appetere maiestatis, ridens delicata vis at. Viris probatus vis no, ei regione voluptatibus vel. Ut his feugiat scaevola, id qui libris pericula definitionem. Sit te urbanitas torquatos, et sumo scaevola expetenda per. Ad vix doctus referrentur repudiandae, eu vix nibh graecis posidonium, agam commodo an ius.\n            \n            </p>', '<p>لوريم إيبسوم ليس مجرد نص عشوائي. \n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            لوريم إيبسوم ليس مجرد نص عشوائي.\n            </p>', 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'Lorem ipsum dolor sit amet', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 10, 5000000, 0, 'product_1704688159.jpg', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `name_ar`, `slug`, `slug_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `created_at`, `updated_at`) VALUES
(1, 'Mobile phones', 'هواتف', 'mobile_phones', 'هواتف', 'Mobile phones', 'هواتف', 'Mobile phones', 'هواتف', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Home appliances', 'أجهزة منزلية', 'home-applications', 'أجهزة-منزلية', 'Home appliances', 'أجهزة منزلية', 'Home appliances', 'أجهزة منزلية', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Cars', 'سيارات', 'cars', 'سيارات', 'Cars', 'سيارات', 'Cars', 'سيارات', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `name_ar`, `slug`, `slug_ar`, `short_descr`, `short_descr_ar`, `descr`, `descr_ar`, `icon`, `phone`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `photo`, `banner`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'تطوير الويب', 'web-development', 'تطوير-الويب', 'Providing website development for your business.', 'توفير تطوير مواقع الويب لعملك.', '<p>In an era where your website is often the first interaction a potential customer has with your brand, our dedicated team of developers is committed to creating websites that leave a lasting impression.\n\n                We understand that every business is unique. Our Website Development services are highly customizable, ensuring that your website aligns with your brand identity, goals, and the specific needs of your target audience. Whether you need a sleek corporate site, an engaging portfolio, or a robust e-commerce platform, we have the expertise to bring your vision to life.\n                \n                In a mobile-centric world, responsive design is non-negotiable. Our websites are designed to adapt seamlessly to various devices and screen sizes, providing users with a consistent and optimized experience, whether they are accessing your site on a desktop, tablet, or smartphone.\n                \n                User experience is at the core of our Website Development philosophy. We prioritize intuitive navigation, engaging interfaces, and fast-loading pages to ensure that visitors not only stay on your site but also have a positive and memorable experience that encourages repeat visits and conversions.\n                \n                For businesses venturing into e-commerce, our Website Development services include creating robust and secure online shopping platforms. From product catalog management to seamless checkout processes, we build e-commerce solutions that enhance user satisfaction and drive sales.\n                \n                Empower yourself with control over your website`s content. Our use of advanced Content Management Systems ensures that you can easily update, edit, and manage your website`s content without the need for technical expertise, providing flexibility and autonomy.</p>', '<p>في عصر يعتبر موقع الويب الخاص بك غالبًا أول تفاعل يتمتع به العميل المحتمل مع علامتك التجارية، فإن فريقنا المتخصص من المطورين ملتزم بإنشاء مواقع الويب التي تترك انطباعًا دائمًا.\n\n                نحن ندرك أن كل عمل يعتبر فريدًا. خدمات تطوير مواقع الويب الخاصة بنا قابلة للتخصيص بشكل كبير، مما يضمن أن موقع الويب الخاص بك يتوافق مع هوية العلامة التجارية الخاصة بك، وأهدافك، واحتياجات جمهورك المستهدف الخاصة. سواء كنت بحاجة إلى موقع شركة أنيق، أو معرض جذاب، أو منصة تجارة إلكترونية قوية، لدينا الخبرة لتحويل رؤيتك إلى واقع.\n                \n                في عالم يتمحور حول الأجهزة المحمولة، التصميم الاستجابي لا يُمكن التفاوض فيه. يتم تصميم مواقعنا للتكيف بسلاسة مع مختلف الأجهزة وأحجام الشاشة، مما يوفر للمستخدمين تجربة متسقة ومحسّنة، سواء كانوا يستخدمون موقعك على سطح المكتب، أو الجهاز اللوحي، أو الهاتف الذكي.\n                \n                تجربة المستخدم هي في قلب فلسفة تطوير مواقع الويب لدينا. نحن نولي أولوية للتنقل البديهي، والواجهات المشوّقة، وصفحات التحميل السريع لضمان أن الزوار لا يتركون موقعك فحسب، بل يمتلكون تجربة إيجابية وذاكرة تشجع على الزيارات المتكررة والتحويلات.\n                \n                بالنسبة للشركات التي تخوض عالم التجارة الإلكترونية، تتضمن خدمات تطوير مواقع الويب الخاصة بنا إنشاء منصات تسوق عبر الإنترنت قوية وآمنة. من إدارة فهرس المنتجات إلى عمليات الدفع السلسة، نقوم ببناء حلول التجارة الإلكترونية التي تعزز رضا المستخدم وتحفز المبيعات.\n                \n                تمكن نفسك بالتحكم في محتوى موقع الويب الخاص بك. استخدامنا لأنظمة إدارة المحتوى المتقدمة يضمن أنه يمكنك بسهولة تحديث وتحرير وإدارة محتوى موقع الويب الخاص بك بدون الحاجة إلى خبرة تقنية، مما يوفر لك المرونة والاستقلالية.</p>', 'flaticon-recommend', '+1 (660) 831-0044', 'Web Development', 'تطوير الويب', 'Web Development', 'تطوير الويب', 'service_1699558761.jpg', 'service_banner_1699608445.jpg', 'service_pdf_1704613777_2.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'SEO Optimization', 'تحسين محركات البحث', 'seo-optimization', 'تحسين-محركات-البحث', 'Providing SEO optimization for your business.', 'توفير تحسين محركات البحث (SEO) لعملك.', '<p>In a world where online presence is synonymous with success, our team of SEO experts is dedicated to positioning your business at the forefront of search engine results.\n\n                Our SEO Optimization process begins with in-depth keyword research. We identify the most relevant and high-performing keywords in your industry to formulate a customized strategy. This strategic approach ensures that your website ranks prominently for terms that matter most to your target audience.\n                \n                We optimize every aspect of your website to align with search engine algorithms. From meta tags and headers to content and multimedia elements, our on-page optimization techniques enhance the overall relevance and accessibility of your web pages.\n                \n                Content is key in the digital landscape. Our SEO services include the creation of high-quality, engaging, and relevant content that not only resonates with your audience but also attracts search engine algorithms, contributing to improved rankings and user engagement.\n                \n                Establishing your website as an authority in your industry is crucial for SEO success. Our link-building strategies and off-page optimization techniques involve creating quality backlinks and fostering a strong online presence, enhancing your site`s credibility in the eyes of search engines.\n                \n                We conduct thorough technical SEO audits to identify and address any underlying issues that may impact your website`s performance in search results. This includes optimizing site speed, improving mobile responsiveness, and addressing any technical barriers to search engine crawling and indexing.</p>', '<p>في عالم حيث الوجود على الإنترنت يشير إلى النجاح، فإن فريقنا من خبراء تحسين محركات البحث (SEO) مكرس لتموضع عملك في مقدمة نتائج محركات البحث.\n\n                يبدأ عملية تحسين SEO لدينا بإجراء بحث شامل عن الكلمات الرئيسية. نحدد الكلمات الرئيسية الأكثر صلة والأكثر أداءً في صناعتك لوضع استراتيجية مخصصة. تضمن هذه النهج الاستراتيجي أن يتصدر موقعك على الويب قوائم البحث للمصطلحات التي تهم جمهورك المستهدف بشكل رئيسي.\n                \n                نحن نحسن كل جانب من جوانب موقع الويب الخاص بك ليتماشى مع خوارزميات محركات البحث. من العلامات الوصفية والرؤوس إلى المحتوى وعناصر الوسائط المتعددة، تقنيات التحسين في الموقع تعزز الصلة العامة وسهولة الوصول إلى صفحات الويب الخاصة بك.\n                \n                المحتوى هو العنصر الأساسي في المشهد الرقمي. تشمل خدماتنا في SEO إنشاء محتوى عالي الجودة وجذاب وملائم لا يمت إلى جمهورك فحسب ولكن يجذب أيضًا خوارزميات محركات البحث، مما يسهم في تحسين التصنيفات ومشاركة المستخدمين.\n                \n                تأسيس موقع الويب الخاص بك كسلطة في صناعتك أمر حاسم لنجاح SEO. تتضمن استراتيجيات بناء الروابط وتحسين المواقع الخارجية إنشاء روابط ذات جودة وتعزيز الوجود عبر الإنترنت، مما يعزز مصداقية موقعك في نظر محركات البحث.\n                \n                نقوم بإجراء فحوصات تقنية شاملة لـ SEO لتحديد ومعالجة أي مشكلات تحتية قد تؤثر على أداء موقع الويب الخاص بك في نتائج البحث. يتضمن ذلك تحسين سرعة الموقع، وتحسين الاستجابة على الهواتف المحمولة، ومعالجة أي عوائق تقنية تؤثر على الزحف والفهرسة في محركات البحث.</p>', 'flaticon-digital-services', '+1 (660) 831-0044', 'تحسين محركات البحث', 'تطوير الويب', 'تحسين محركات البحث', 'تطوير الويب', 'service_1699558070.jpg', 'service_banner_1699608457.jpg', 'service_pdf_1704613832.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'App Development', 'تطوير التطبيقات', 'app-development', 'تطوير-التطبيقات', 'Providing app development for your business.', 'توفير تطوير مواقع التطبيقات لعملك.', '<p>Visualizing your app is crucial. Our App Development process includes creating interactive prototypes and detailed designs. This not only gives you a tangible preview of the final product but also allows for user feedback, ensuring that the design aligns with your vision and user expectations.\n\n                Whether it`s iOS, Android, or cross-platform development, our expertise spans diverse platforms. We ensure that your app delivers a consistent and seamless user experience across various devices and operating systems, maximizing your reach and impact.\n                \n                Agility is at the core of our development process. We follow an agile methodology, fostering collaboration, flexibility, and iterative progress. This approach allows us to adapt to changes efficiently, respond to feedback promptly, and deliver high-quality apps within realistic timelines.\n                \n                Behind every great app is a robust backend infrastructure. Our developers ensure that your app`s backend is not just functional but also scalable and secure. This foundation supports the seamless operation of your app and accommodates future growth.</p>', '<p>\n                تصور تطبيقك أمر أساسي. يتضمن عملية تطوير التطبيق لدينا إنشاء نماذج تفاعلية وتصاميم مفصلة. هذا ليس فقط يمنحك معاينة ملموسة للمنتج النهائي ولكنه يسمح أيضًا بالحصول على تغذية راجعة من المستخدمين، مما يضمن أن التصميم يتماشى مع رؤيتك وتوقعات المستخدمين.\n                \n                سواء كان التطوير لمنصة iOS أو Android أو تطوير متعدد المنصات، فإن خبرتنا تمتد عبر منصات متنوعة. نحن نضمن أن توفر التطبيق تجربة مستخدم متسقة وسلسة عبر أجهزة وأنظمة تشغيل مختلفة، مما يعزز نطاق وتأثير تطبيقك.\n                \n                التنويع هو في صلب عملية تطويرنا. نتبع منهجية رشيقة، تعزز التعاون والمرونة والتقدم التدريجي. تتيح لنا هذه النهجية التكيف مع التغييرات بكفاءة، والاستجابة للتغذية الراجعة بسرعة، وتقديم تطبيقات عالية الجودة ضمن الجداول الزمنية الواقعية.\n                \n                وراء كل تطبيق رائع يكمن البنية الأساسية القوية. يضمن مطورونا أن البنية الخلفية لتطبيقك ليست فقط وظيفية ولكن أيضًا قابلة للتوسيع وآمنة. تدعم هذه الأساسية تشغيل التطبيق بسلاسة وتتسع لنمو المستقبل.</p>', 'flaticon-graphic-design', '+1 (660) 831-0044', 'App Development', 'تطوير التطبيقات', 'App Development', 'تطوير التطبيقات', 'service_1699519555.jpg', 'service_banner_1699608486.jpg', 'service_pdf_1704613838.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'Data Analysis', 'تحليل البيانات', 'data-analysis', 'تحليل-البيانات', 'Providing the data analysis for your business.', 'توفير تحليل البيانات لعملك.', '<p>In the age of information, making data-driven decisions is a competitive necessity. Our dedicated team of analysts is here to guide you through the process of transforming raw data into actionable insights.\n\n                Our process begins with the meticulous collection and integration of relevant data from various sources. Whether it`s customer interactions, market trends, or operational metrics, we ensure a comprehensive and accurate dataset forms the foundation of our analysis.\n                \n                We employ advanced analytics techniques to uncover patterns, trends, and correlations within your data. From descriptive statistics to predictive modeling, our goal is to provide you with a deeper understanding of your business landscape, enabling strategic planning and foresight.\n                \n                Visualizing data is key to comprehension. We design customized dashboards that present complex information in a user-friendly manner. These interactive dashboards allow you to monitor key metrics, track performance, and derive insights at a glance.\n                \n                Our expertise in statistical modeling enables us to go beyond surface-level observations. Whether it`s forecasting future trends, identifying outliers, or conducting A/B testing, we leverage statistical methods to extract meaningful and actionable intelligence.\n                \n                The ultimate aim of our Data Analysis services is to empower you with decision support. We provide clear, concise, and actionable recommendations based on our findings, ensuring that you can make informed decisions that align with your business objectives.</p>', '<p>\n                في عصر المعلومات، جعل القرارات القائمة على البيانات ضرورة تنافسية. فريقنا المتخصص من المحللين هنا لمساعدتك في عملية تحويل البيانات الخام إلى رؤى قابلة للتنفيذ.\n                \n                يبدأ عملنا بجمع وتكامل دقيق للبيانات ذات الصلة من مصادر متعددة. سواء كانت تفاعلات العملاء أو اتجاهات السوق أو المقاييس التشغيلية، نضمن أن مجموعة بيانات شاملة ودقيقة تشكل أساس تحليلنا.\n                \n                نستخدم تقنيات تحليلية متقدمة لاكتشاف الأنماط والاتجاهات والترابطات داخل بياناتك. من الإحصائيات الوصفية إلى النمذجة التنبؤية، هدفنا هو تزويدك بفهم أعمق لمنظومة عملك، مما يمكنك من التخطيط الاستراتيجي والتنبؤ بالمستقبل.\n                \n                تصور البيانات أمر أساسي للفهم. نقوم بتصميم لوحات تحكم مخصصة تقدم المعلومات المعقدة بطريقة سهلة الاستخدام. تسمح هذه اللوحات التفاعلية لك بمراقبة المقاييس الرئيسية وتتبع الأداء واستخلاص الرؤى بنظرة واحدة.\n                \n                خبرتنا في النمذجة الإحصائية تمكننا من الذهاب إلى ما وراء الملاحظات على مستوى السطح. سواء كان الأمر يتعلق بالتنبؤ بالاتجاهات المستقبلية، أو تحديد القيم الشاذة، أو إجراء الاختبار A/B، نستخدم الطرق الإحصائية لاستخراج معلومات ذات مغزى وقابلة للتنفيذ.\n                \n                الهدف النهائي لخدماتنا في تحليل البيانات هو تمكينك من دعم القرارات. نقدم توصيات واضحة وموجزة وقابلة للتنفيذ استنادًا إلى نتائجنا، مما يضمن أن تتخذ قرارات مستنيرة تتماشى مع أهداف عملك.</p>', 'flaticon-laptop', '+1 (660) 831-0044', 'Data Analysis', 'تحليل البيانات', 'Data Analysis', 'تحليل البيانات', 'service_1699677682.jpg', 'service_banner_1699608498.jpg', 'service_pdf_1704613844.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, 'UI/UX Designing', 'تصميم واجهة المستخدم/تجربة المستخدم', 'ui-ux-designing', 'تصميم-واجهة-المستخدم-تجربة-المستخدم', 'Providing UI/UX design for your business.', 'توفير تصميم UI / UX لعملك.', '<p>Our dedicated team of designers combines creativity and functionality to craft visually appealing and user-friendly interfaces that captivate and engage your audience.\n\n                Our UI design focuses on the aesthetics and visual elements of your digital platforms. We carefully choose colors, typography, and imagery to create a visually stunning interface that reflects your brand identity. The goal is to make a memorable first impression that resonates with your audience.\n                \n                UX design is at the core of our service, ensuring that every interaction with your digital assets is seamless and enjoyable. We prioritize user research and testing to understand your audience`s needs, preferences, and behaviors. This data guides the creation of intuitive and user-centric designs that enhance overall satisfaction.\n                \n                In an era where users access digital content across various devices, our designs are inherently responsive. Whether on desktop, tablet, or mobile, your audience will experience consistent and optimized interfaces, promoting accessibility and user satisfaction.\n                \n                Before implementation, we create interactive prototypes that allow you to experience the design firsthand. This iterative process ensures that the final product meets your expectations and provides an opportunity for feedback and refinement.\n                \n                We believe in collaboration and value your input throughout the design process. Your insights, coupled with our expertise, result in designs that not only meet aesthetic standards but also align with your business goals and user expectations.</p>', '<p>\n                فريقنا المتخصص من المصممين يجمع بين الإبداع والوظائف لصناعة واجهات جذابة بصريًا وسهلة الاستخدام تجذب وتشد انتباه جمهورك.\n                \n                تصميم واجهة المستخدم (UI) يركز على الجوانب الجمالية والبصرية لمنصاتك الرقمية. نختار بعناية الألوان والأنماط الطباعية والصور لإنشاء واجهة جذابة بصريًا تعكس هوية علامتك التجارية. الهدف هو إنشاء انطباع أول لا يُنسى يتفاعل مع جمهورك.\n                \n                تصميم تجربة المستخدم (UX) هو في صميم خدمتنا، مضمونة أن كل تفاعل مع أصولك الرقمية يكون سلسًا وممتعًا. نعطي الأولوية للبحث عن المستخدم والاختبار لفهم احتياجات جمهورك وتفضيلاته وسلوكياته. توجيهات هذه البيانات إلى إنشاء تصميمات بديهية وموجهة نحو المستخدم تعزز الرضا العام.\n                \n                في عصر يقوم فيه المستخدمون بالوصول إلى المحتوى الرقمي عبر أجهزة مختلفة، تكون تصميماتنا متجاوبة بشكل طبيعي. سواء كان على سطح المكتب أو الجهاز اللوحي أو الهاتف المحمول، سيشعر جمهورك بتجارب واجهة متسقة ومحسنة، مما يعزز التوفر ورضا المستخدم.\n                \n                قبل التنفيذ، نقوم بإنشاء نماذج تفاعلية تتيح لك تجربة التصميم بشكل مباشر. هذه العملية التكرارية تضمن أن المنتج النهائي يلبي توقعاتك وتوفر فرصة للتغذية الراجعة والتحسين.\n                \n                نحن نؤمن بالتعاون ونقدر مدخلاتك طوال عملية التصميم. تصميماتنا، مع خبرتنا، تنتج تصميمات لا تلبي فقط المعايير الجمالية ولكن تتوافق أيضًا مع أهداف عملك وتوقعات المستخدم.</p>', 'flaticon-graphic-design', '+1 (660) 831-0044', 'UI/UX Designing', 'تصميم واجهة المستخدم/تجربة المستخدم', 'UI/UX Designing', 'تصميم واجهة المستخدم/تجربة المستخدم', 'service_1699518311.jpg', 'service_banner_1699608505.jpg', 'service_pdf_1704613851.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(6, 'Security System', 'نظام أمني', 'security-system', 'نظام-أمني', 'Providing security system for your business', 'توفير نظام أمني لعملك.', '<p>Our Security System services are crafted to meet the unique needs of both residential and commercial clients, providing a robust defense against potential threats.\n\n                At the heart of our offerings is a commitment to leveraging cutting-edge technology for maximum security. Our surveillance systems feature the latest in camera technology, offering high-definition video capture and real-time monitoring. Whether you need to keep an eye on your home, office, or industrial facility, our surveillance solutions provide a watchful eye, 24/7.\n                \n                Access control is a critical aspect of any security strategy, and our systems are designed to manage and restrict entry efficiently. Through advanced access control measures, we ensure that only authorized individuals have access to designated areas, enhancing overall security and reducing the risk of unauthorized access.\n                \n                Our alarm systems are tailored to your specific security needs, alerting you to potential threats or emergencies. With customizable triggers, such as motion detection, unauthorized access, or fire alarms, you can rest assured that our Security Systems provide a proactive response to keep you and your assets safe.</p>', '<p>\n                خدمات نظام الأمان الخاصة بنا مصممة لتلبية الاحتياجات الفريدة للعملاء السكنيين والتجاريين، مما يوفر دفاعًا قويًا ضد التهديدات المحتملة.\n                \n                في قلب عروضنا التزام بالاستفادة من أحدث التقنيات لضمان الحد الأقصى من الأمان. تتميز أنظمة المراقبة لدينا بأحدث التقنيات في مجال الكاميرات، مما يوفر التقاط فيديو عالي الجودة ومراقبة فورية في الوقت الحقيقي. سواء كنت بحاجة إلى مراقبة منزلك أو مكتبك أو مرافقك الصناعية، توفر حلولنا للمراقبة عينًا يقظة على مدار الساعة.\n                \n                تحكم الوصول هو جزء حاسم من أي استراتيجية أمنية، وتم تصميم أنظمتنا لإدارة وتقييد الوصول بكفاءة. من خلال إجراءات التحكم في الوصول المتقدمة، نضمن أن يكون الوصول إلى المناطق المحددة مقتصرًا فقط على الأفراد المرخص لهم، مما يعزز الأمان العام ويقلل من مخاطر الوصول غير المصرح به.\n                \n                أنظمة الإنذار الخاصة بنا مصممة وفقًا لاحتياجاتك الأمنية المحددة، مما ينبهك إلى التهديدات المحتملة أو الحالات الطارئة. باستخدام مؤثرات مخصصة، مثل اكتشاف الحركة، أو الوصول غير المصرح به، أو إنذارات الحريق، يمكنك أن تطمئن إلى أن أنظمة الأمان الخاصة بنا توفر استجابة نشطة للحفاظ عليك وعلى ممتلكاتك بأمان.</p>', 'flaticon-technology', '+1 (660) 831-0044', 'Security System', 'نظام أمني', 'Security System', 'نظام أمني', 'service_1699502886.jpg', 'service_banner_1699608514.jpg', 'service_pdf_1704613777_2.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(7, 'Digital Marketing', 'التسويق الرقمي', 'digital-marketing', 'التسويق-الرقمي', 'Providing Digital Marketing for your business.', 'توفير التسويق الرقمي  لعملك.', '<p>In an era where the online landscape shapes business success, our agency is dedicated to navigating the digital realm on your behalf. Our comprehensive Digital Marketing services are designed to maximize your brand visibility, engagement, and conversions.\n\n                Our Digital Marketing journey begins with strategic planning. We analyze your business goals, target audience, and industry landscape to create customized strategies that align with your objectives. This meticulous planning sets the foundation for impactful digital campaigns.\n                \n                Boost your visibility on search engines with our SEO expertise. We implement data-driven optimization strategies to improve your website`s ranking, increase organic traffic, and enhance your online presence, ensuring that your brand is easily discoverable by your target audience.\n                \n                Maximize your reach and drive targeted traffic with our PPC advertising solutions. From Google Ads to social media platforms, we craft compelling ad campaigns that efficiently reach your audience, ensuring your brand message is front and center when and where it matters most.\n                \n                Harness the power of social media with our Social Media Marketing services. We create engaging and shareable content, run targeted ad campaigns, and foster meaningful interactions to build a strong online community around your brand, driving brand loyalty and conversions.\n                \n                Content is king, and our Content Marketing services ensure your brand`s narrative is not only compelling but also resonates with your audience. From blog posts to videos, we create content that adds value, establishes your authority, and drives engagement across digital platforms.</p>', '<p>\n                في عصر يشكل فيه المنظر الرقمي عبر الإنترنت نجاح الأعمال، تتفانى وكالتنا في توجيهك خلال الميدان الرقمي نيابة عنك. تتميز خدمات التسويق الرقمي الشاملة التي نقدمها بتصميمها لزيادة رؤية العلامة التجارية الخاصة بك، والمشاركة، وتحويلات العملاء.\n                \n                تبدأ رحلتنا في التسويق الرقمي بالتخطيط الاستراتيجي. نحلل أهداف عملك، وجمهورك المستهدف، والمشهد الصناعي لخلق استراتيجيات مخصصة تتماشى مع أهدافك. يضع هذا التخطيط الدقيق الأساس لحملات رقمية ذات تأثير كبير.\n                \n                زيادة رؤيتك على محركات البحث باستخدام خبرتنا في الـ SEO. نقوم بتنفيذ استراتيجيات التحسين المدعومة بالبيانات لتحسين تصنيف موقعك على الويب، وزيادة حركة المرور العضوية، وتعزيز وجودك على الإنترنت، مما يضمن أن علامتك التجارية سهلة الاكتشاف من قبل جمهورك المستهدف.\n                \n                استغلال الوصول الأقصى وجلب حركة مستهدفة مع حلولنا للإعلانات على الإنترنت. من إعلانات Google إلى منصات التواصل الاجتماعي، نقوم بصياغة حملات إعلانية مقنعة تصل بكفاءة إلى جمهورك، مما يضمن أن رسالة علامتك الجارية هي في المقدمة عندما يكون الأمر مهمًا وأينما كان.\n                \n                استغلال قوة وسائل التواصل الاجتماعي مع خدماتنا للتسويق عبر وسائل التواصل الاجتماعي. نقوم بإنشاء محتوى جذاب ويمكن مشاركته، وتشغيل حملات إعلانية مستهدفة، وتعزيز التفاعلات المعنوية لبناء مجتمع قوي على الإنترنت حول علامتك التجارية، مما يدفع بالولاء والتحويلات للعلامة التجارية.\n                \n                المحتوى هو الملك، وخدماتنا في التسويق بالمحتوى تضمن أن سرد علامتك التجارية ليس فقط جذابًا ولكنه أيضًا يتردد لدى جمهورك. من المقالات إلى الفيديوهات، نقوم بإنشاء محتوى يضيف قيمة، ويؤسس لسلطتك، ويحفز التفاعل عبر منصات رقمية.</p>', 'flaticon-teaching', '+1 (660) 831-0044', 'Digital Marketing', 'التسويق الرقمي', 'Digital Marketing', 'التسويق الرقمي', 'service_1699504815.jpg', 'service_banner_1699608524.jpg', 'service_pdf_1704613864.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(8, 'Product Crafting', 'صياغة المنتج', 'product-crafting', 'صياغة-المنتج', 'Providing product development for your business.', 'توفير صياغة المنتج لعملك.', '<p>In a landscape driven by innovation, our dedicated team is committed to guiding you through the entire product development journey.\n\n                We begin by understanding your vision and goals. Our strategic ideation process involves collaborative brainstorming, market research, and feasibility analysis to shape concepts that align with your business objectives and resonate with your target audience.\n                \n                Once the concept is solidified, we move to the prototyping and design phase. Our expert team creates interactive prototypes and detailed design plans, allowing you to visualize the product and make informed decisions before moving into the development stage.\n                \n                Our agile development methodology ensures flexibility and adaptability throughout the product development lifecycle. We prioritize collaboration, iterative progress, and quick response to changes, ensuring a streamlined and efficient development process.\n                \n                Our team brings diverse expertise to the table, covering areas such as design, engineering, marketing, and quality assurance. This cross-functional approach ensures a holistic development process, addressing all aspects required for a successful product launch.\n                \n                Before launching your product, we conduct thorough market validation. This involves testing prototypes, gathering user feedback, and refining the product based on real-world insights. Market validation ensures that your product meets user expectations and stands out in the market.</p>', '<p>\n                في ساحة محركة بالابتكار، يلتزم فريقنا المخصص بتوجيهك خلال رحلة تطوير المنتج بأكملها.\n                \n                نبدأ بفهم رؤيتك وأهدافك. يتضمن عملنا الفكري الاستراتيجي عمليات التفكير المشتركة والبحث السوقي وتحليل الجدوى لتشكيل مفاهيم تتماشى مع أهداف عملك وتلقي صدىً إيجابيًا من جمهورك المستهدف.\n                \n                بمجرد تثبيت المفهوم، ننتقل إلى مرحلة إنشاء النماذج الأولية والتصميم. يقوم فريقنا الخبير بإنشاء نماذج تفاعلية وخطط تصميم مفصلة، مما يتيح لك تصور المنتج واتخاذ قرارات مستنيرة قبل التوجه إلى مرحلة التطوير.\n                \n                منهجية تطويرنا السريعة تضمن المرونة والقابلية للتكيف طوال دورة حياة تطوير المنتج. نعطي الأولوية للتعاون والتقدم التدريجي والاستجابة السريعة للتغييرات، مما يضمن عملية تطوير سلسة وفعالة.\n                \n                يجلب فريقنا خبرات متنوعة إلى الطاولة، تغطي مجالات مثل التصميم والهندسة والتسويق وضمان الجودة. يضمن هذا النهج المتعدد التخصصات عملية تطوير شاملة، تتناول جميع الجوانب اللازمة لإطلاق منتج ناجح.\n                \n                قبل إطلاق منتجك، نجري التحقق السوقي الشامل. يتضمن ذلك اختبار النماذج الأولية وجمع ملاحظات المستخدمين وتحسين المنتج استنادًا إلى ردود الفعل الفعلية. يضمن التحقق السوقي أن يلبي منتجك توقعات المستخدمين ويبرز في السوق.</p>', 'flaticon-digital-services', '+1 (660) 831-0044', 'Product Crafting', 'صياغة المنتج', 'Product Crafting', 'صياغة المنتج', 'service_1699502886.jpg', 'service_banner_1704613777.jpg', 'service_pdf_1704613869.pdf', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `service_f_a_q_s`
--

CREATE TABLE `service_f_a_q_s` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_f_a_q_s`
--

INSERT INTO `service_f_a_q_s` (`id`, `question`, `question_ar`, `answer`, `answer_ar`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(6, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(7, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(8, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(9, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(10, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 4, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(11, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 4, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(12, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 4, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(13, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 5, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(14, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 5, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(15, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 5, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(16, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 6, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(17, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 6, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(18, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 6, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(19, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 7, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(20, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 7, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(21, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 7, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(22, 'What is Web Development, and why do I need it for my business?', 'ما هي تطوير الويب، ولماذا أحتاج إليها لعملي؟', '<p>Web Development involves creating and maintaining websites. It is essential for your business as it provides a digital presence, enabling you to reach a broader audience, showcase your products or services, and engage with potential customers.</p>', '<p>\n            تطوير الويب ينطوي على إنشاء وصيانة المواقع الإلكترونية. وهو أساسي لعملك حيث يوفر وجودًا رقميًا، مما يتيح لك الوصول إلى جمهور أوسع، وعرض منتجاتك أو خدماتك، والتفاعل مع العملاء المحتملين.</p>', 8, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(23, 'How does Web Development differ from Web Design?', 'كيف يختلف تطوير الويب عن تصميم الويب؟', '<p>Web Development is the process of building the functionality and features of a website, while Web Design focuses on the visual aesthetics and user interface. Both are crucial for creating a successful and effective website.</p>', '<p>\n            تطوير الويب هو عملية بناء الوظائف والميزات التقنية لموقع الويب، بينما يركز تصميم الويب على الجماليات البصرية وواجهة المستخدم. كلاهما أساسي لإنشاء موقع ويب ناجح وفعال.</p>', 8, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(24, 'How long does it take to develop a website from scratch?', 'كم يستغرق تطوير موقع الويب من البداية؟', '<p>The timeline for website development varies based on the complexity and features of the website. A simple site may take a few weeks, while more complex ones with advanced features can take several months. We work with you to establish realistic timelines based on your requirements.</p>', '<p>\n            الجدول الزمني لتطوير موقع الويب يتفاوت بناءً على تعقيد الموقع وميزاته. قد يستغرق موقع بسيط بضعة أسابيع، بينما قد يستغرق المواقع الأكثر تعقيدًا مع ميزات متقدمة عدة أشهر. نحن نعمل معك لتحديد جداول زمنية واقعية استنادًا إلى متطلباتك.</p>', 8, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sticky` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page404` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_shown` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_seo_descr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_seo_descr_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pintrest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_address_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_address_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_copyright_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_links` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_links_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_subscriber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_subscriber_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_subscriber_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_subscriber_text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_text_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_bg_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_btn_text_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_btn_bg_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cookie_status` tinyint(1) NOT NULL,
  `google_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_status` tinyint(1) NOT NULL,
  `google_recabtcha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_recabtcha_status` tinyint(1) NOT NULL,
  `livewire_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livewire_status` tinyint(1) NOT NULL,
  `sticky_header` tinyint(1) NOT NULL,
  `preloader` tinyint(1) NOT NULL,
  `layout_direction` enum('LTR','RTL') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'LTR',
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` enum('ar','en') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `sticky`, `favicon`, `page404`, `banner`, `login`, `home_shown`, `home_seo_title`, `home_seo_title_ar`, `home_seo_descr`, `home_seo_descr_ar`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `pintrest`, `top_email`, `top_address`, `top_address_ar`, `top_phone`, `footer_email`, `footer_phone`, `footer_address`, `footer_address_ar`, `footer_copyright`, `footer_copyright_ar`, `footer_text`, `footer_text_ar`, `footer_links`, `footer_links_ar`, `footer_subscriber`, `footer_subscriber_ar`, `footer_subscriber_text`, `footer_subscriber_text_ar`, `map`, `cookie_message`, `cookie_text_color`, `cookie_bg_color`, `cookie_btn_text_color`, `cookie_btn_bg_color`, `cookie_btn_text`, `cookie_status`, `google_code`, `google_status`, `google_recabtcha`, `google_recabtcha_status`, `livewire_id`, `livewire_status`, `sticky_header`, `preloader`, `layout_direction`, `theme_color`, `language`, `created_at`, `updated_at`) VALUES
(1, 'logo_1699436212.png', 'logo_sticky_1699436212.png', 'favicon_1699434586.png', '404_1705309028.jpg', 'banner_1704766456.jpg', 'login_page_photo_1704942796.jpg', 'Home 1', 'Desix | Multipurpose Business, Creative & Digital Agency CMS', 'ديسيكس', 'Desix | Multipurpose Business, Creative & Digital Agency CMS', 'ديسيكس', '#', '#', '#', '#', '#', '#', 'needhelp@company.com', '88 Broklyn Golden Street. New York', '88 شارع بروكلين الذهبي نيويورك', '+92 (8800) - 9850', '+92 (8800) - 9850', '+92 (8800) -89 8630', '30 Broklyn Golden Street, USA', '30 شارع بروكلين الذهبي امريكا', 'Copyright © 2023 by Company Name', 'حقوق النشر', 'Welcome to our digital agency. We hope you will love our website and soon get some awesome services from us.', 'مرحبا بكم في وكالتنا الرقمية. نأمل أن تحب موقعنا على الإنترنت وأن تحصل قريبا على بعض الخدمات الرائعة منا.', 'Explore', 'اكتشف', 'Newsletter', 'الرساله الاخباريه', 'Subsrcibe our newsletter to get latest news.', 'اشترك في النشرة الإخبارية لدينا للحصول على آخر الأخبار.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d35753.80272668888!2d-119.34303891638667!3d37.078457181068664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sbd!4v1704944810889!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'This website uses cookies to ensure you get the best experience on our website.', '#F8FFED', '#000000', '#000000', '#FFFFFF', 'ACCEPT', 0, 'UA-84213520-6', 1, '6LeAoNshAAAAANRnOmjeT7o-rwyLeIqrZ-fV6K8j', 0, '5a7c31ded7591465c7077c48', 0, 1, 1, 'LTR', '#FEC63F', 'en', '2024-04-22 06:30:10', '2024-04-22 06:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `text_ar` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_text_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `text`, `text_ar`, `photo`, `btn_text`, `btn_text_ar`, `btn_url`, `created_at`, `updated_at`) VALUES
(1, 'Shaping the\n                Perfect Solution\n                For Your Business', 'تشكيل\n                الحل الأمثل\n                لأعمالك', 'slider_1699468038.jpg', 'Discover More', 'اكتشف اكثر', '#', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Empowering Your\n                Digital Journey\n                With Innovation', 'تمكين رحلتك الرقمية\n                بالابتكار', 'slider_1699468031.jpg', 'Discover More', 'اكتشف اكثر', '#', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'smith@gmail.com', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'robin@gmail.com', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, '	peter@gmail.com', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pintrest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_text` text COLLATE utf8mb4_unicode_ci,
  `experience_text_ar` text COLLATE utf8mb4_unicode_ci,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_descr` text COLLATE utf8mb4_unicode_ci,
  `seo_descr_ar` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `name_ar`, `slug`, `slug_ar`, `designation`, `designation_ar`, `tagline`, `tagline_ar`, `email`, `phone`, `website`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `pintrest`, `experience_text`, `experience_text_ar`, `seo_title`, `seo_title_ar`, `seo_descr`, `seo_descr_ar`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Mike Henderson', 'مايك هندرسون', 'mike-henderson', 'مايك-هندرسون', 'Managing Director', 'المدير', 'I help my clients stand out and they help me grow.', 'أنا أساعد عملائي على التميز وهم يساعدونني على النمو.', 'mike@gmail.com', '+012-3456-789', 'https://www.miketheboss.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 'https://www.youtube.com/', 'https://www.pinterest.com/', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia', 'عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت إليه لعمل كتاب عينة من النوع. لقد نجا ليس فقط خمسة قرون من المهندس المعماري دولوريم إيبسوم كويا', 'Mike Henderson', 'مايك هندرسون', 'Mike Henderson', 'مايك هندرسون', 'team_member_1704650244.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Kevin Martin', 'كيفن مارتن', 'kevin-martin', 'كيفن-مارتن', 'Chief Executive Officer', 'المدير التنفيذي', 'I help my clients stand out and they help me grow.', 'أنا أساعد عملائي على التميز وهم يساعدونني على النمو.', 'kevin@gmail.com', '+012-3456-781', 'https://www.kevintheceo.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 'https://www.youtube.com/', 'https://www.pinterest.com/', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia', 'عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت إليه لعمل كتاب عينة من النوع. لقد نجا ليس فقط خمسة قرون من المهندس المعماري دولوريم إيبسوم كويا', 'Kevin Martin', 'كيفن مارتن', 'Kevin Martin', 'كيفن مارتن', 'team_member_1704650135.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Jason Cleaver', 'جايسون كليفر', 'jason-cleaver', 'جايسون-كليفر', 'Human Resource Manager', 'مدير الموارد البشرية', 'I help my clients stand out and they help me grow.', 'أنا أساعد عملائي على التميز وهم يساعدونني على النمو.', 'jason@gmail.com', '+012-3411-789', 'https://www.jasonthehradmin.com', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.instagram.com', 'https://www.youtube.com/', 'https://www.pinterest.com/', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia', 'عندما أخذت طابعة غير معروفة مطبخا من النوع وسارعت إليه لعمل كتاب عينة من النوع. لقد نجا ليس فقط خمسة قرون من المهندس المعماري دولوريم إيبسوم كويا', 'Jason Cleaver', 'جايسون كليفر', 'Jason Cleaver', 'جايسون كليفر', 'team_member_1704650144.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `team_experiences`
--

CREATE TABLE `team_experiences` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` tinyint UNSIGNED NOT NULL,
  `member_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_experiences`
--

INSERT INTO `team_experiences` (`id`, `name`, `name_ar`, `percentage`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'التقنية', 90, 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Marketing', 'التسويق', 80, 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Business', 'الأعمال', 75, 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'Technology', 'التقنية', 85, 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(5, 'Marketing', 'التسويق', 75, 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(6, 'Business', 'الأعمال', 70, 2, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(7, 'Technology', 'التقنية', 80, 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(8, 'Marketing', 'التسويق', 75, 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(9, 'Business', 'الأعمال', 70, 3, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `name_ar`, `designation`, `designation_ar`, `rating`, `comment`, `comment_ar`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Donald Hardson', 'دونالد هاردسون', 'Founder, ABC Media', 'مؤسس, ABC Media', 5, 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.', 'testimonial_1704656837.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Matthew Abbott', 'ماثيو أبوت', 'Founder, SDK Media', 'مؤسس, SDK Media', 5, 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.', 'testimonial_1704656860.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Darren Sharp', 'دارين شارب', 'Founder, VFD Media', 'مؤسس, VFD Media', 5, 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.', 'testimonial_1704656874.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, 'Peter Garcia', 'بيتر جارسيا', 'Founder, RTY Media', 'مؤسس, RTY Media', 5, 'Lorem ipsum is simply free text dolor not sit amet, notted adipisicing elit sed do eiusmod incididunt labore et dolore text.', 'لوريم إيبسوم هو ببساطة نص مجاني لا يحمل أي معنى، لا يتوجب أن يكون تحديدا ولا يتمتع بخواص الفصل أو التمييز بين الأقسام. يُستخدم في تصميم الطباعة والتصميم الجرافيكي والتخطيط النموذجي على الويب كنص افتراضي لتوضيح التصميم والتوزيع والخطوط قبل النص النهائي الفعلي.', 'testimonial_1704656886.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sherif Elkhouly', 'admin@gmail.com', '#', '2024-04-22 06:30:12', '$2y$12$BcwJFcdsK3tyh8hkjRLXIOGuqPsKdotnwYIP9VvHnV2Ep55eC9KkK', 'psqnSavGBM', '2024-04-22 06:30:12', '2024-04-22 06:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `video_ones`
--

CREATE TABLE `video_ones` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_ones`
--

INSERT INTO `video_ones` (`id`, `heading`, `heading_ar`, `youtube_video_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Most Trusted Agency', 'الوكالة الأكثر ثقة', 'EWEDUrd1i5g', 'video_one_photo_1704852598.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `video_twos`
--

CREATE TABLE `video_twos` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_video_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_twos`
--

INSERT INTO `video_twos` (`id`, `heading`, `heading_ar`, `youtube_video_id`, `created_at`, `updated_at`) VALUES
(1, 'Digital agency services built specifically\n            for your business', 'خدمات الوكالة الرقمية المصممة خصيصًا لعملك', 'EWEDUrd1i5g', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_ones`
--

CREATE TABLE `welcome_ones` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_designation_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_ones`
--

INSERT INTO `welcome_ones` (`id`, `heading`, `heading_ar`, `sub_heading`, `sub_heading_ar`, `text`, `text_ar`, `btn_text`, `btn_text_ar`, `btn_url`, `experience_year`, `person_name`, `person_name_ar`, `person_designation`, `person_designation_ar`, `person_photo`, `photo1`, `photo2`, `created_at`, `updated_at`) VALUES
(1, 'The best digital marketing solutions', 'أفضل حلول التسويق الرقمي', 'Get to Know Us', 'تعرف علينا', 'There are many variations of passages of available but the majority have \n            suffered alteration in some form, by injected hum randomised words which \n            don`t slightly.', 'هناك العديد من الاختلافات في المقاطع المتاحة ولكن الغالبية\n             عانت من التغيير بشكل ما ، عن طريق حقن الكلمات \n             العشوائية التي لا تفعل ذلك قليلا.', 'Discover More ', 'كتشف أكثر', '#', '38', 'David Cooper', 'ديفيد كوبر', 'CEO and Co-Founder', 'الرئيس التنفيذي والمؤسس المشارك', 'welcome_one_person_photo_1704848548.jpg', 'welcome_one_photo1_1704823739.jpg', 'welcome_one_photo2_1704823756.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_one_elements`
--

CREATE TABLE `welcome_one_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_one_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_one_elements`
--

INSERT INTO `welcome_one_elements` (`id`, `heading`, `heading_ar`, `text`, `text_ar`, `icon`, `welcome_one_id`, `created_at`, `updated_at`) VALUES
(1, 'Leading in marketing', 'الريادة في التسويق', 'Knowledge of technologies rules better than anyone which we apply in our daily work', 'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر والتي نطبقها في عملنا اليومي.', 'flaticon-targeted-marketing', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Expert developers', 'المطورون الخبراء', 'Knowledge of technologies rules better than anyone which we apply in our daily work', 'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر والتي نطبقها في عملنا اليومي.', 'flaticon-digital-services', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_twos`
--

CREATE TABLE `welcome_twos` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_twos`
--

INSERT INTO `welcome_twos` (`id`, `heading`, `heading_ar`, `sub_heading`, `sub_heading_ar`, `text`, `text_ar`, `btn_text`, `btn_text_ar`, `btn_url`, `experience_year`, `photo1`, `photo2`, `created_at`, `updated_at`) VALUES
(1, 'Leading the best digital agency in town', 'قيادة أفضل وكالة رقمية في المدينة', 'Welcome to Agency', 'مرحبًا بك في الوكالة', 'There are many variations of simply free text passages of available but \n            the majority have suffered alteration in some form, by injected hum randomised \n            words which don`t slightly.', 'هناك العديد من الاختلافات في المقاطع النصية\n             المتاحة بحرية، ولكن الغالبية تعرضت للتعديل بشكل ما، من خلال إدخال كلمات عشوائية\n              لا تحمل معنى.', 'Discover More', 'اكتشف أكثر', '#', '38', 'welcome_two_photo1_1704850420.jpg', 'welcome_two_photo2_1704850420.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_two_elements`
--

CREATE TABLE `welcome_two_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_two_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_two_elements`
--

INSERT INTO `welcome_two_elements` (`id`, `heading`, `heading_ar`, `text`, `text_ar`, `welcome_two_id`, `created_at`, `updated_at`) VALUES
(1, 'Digital marketing', 'الريادة في التسويق', 'Knowledge of technologies rules better than anyone', 'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر .', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Quality results', 'المطورون الخبراء', 'Knowledge of technologies rules better than anyone', 'معرفة التقنيات تحكم بشكل أفضل من أي شخص آخر.', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_two_skills`
--

CREATE TABLE `welcome_two_skills` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` tinyint UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_two_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_two_skills`
--

INSERT INTO `welcome_two_skills` (`id`, `name`, `percentage`, `name_ar`, `welcome_two_id`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', 77, 'التسويق', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_ones`
--

CREATE TABLE `why_choose_ones` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_ones`
--

INSERT INTO `why_choose_ones` (`id`, `heading`, `heading_ar`, `subheading`, `subheading_ar`, `text`, `text_ar`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'We made things easier for your business', 'لقد سهلنا الأمور لعملك.', 'Why Choose us?', 'لماذا تختارنا؟', 'Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et simply free text dolore magna aliqua lonm andhn.', 'لوريم إيبسوم ليس مجرد نص عشوائي.', 'why_choose_one_photo_1704886453.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_one_elements`
--

CREATE TABLE `why_choose_one_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choose_one_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_one_elements`
--

INSERT INTO `why_choose_one_elements` (`id`, `heading`, `heading_ar`, `icon`, `choose_one_id`, `created_at`, `updated_at`) VALUES
(1, '	Business Growth', 'نمو الأعمال', 'flaticon-laptop', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Marketing Solution', 'حلول التسويق', 'flaticon-teaching', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_twos`
--

CREATE TABLE `why_choose_twos` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subheading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_over_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_over_text_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_over_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_over_heading_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_twos`
--

INSERT INTO `why_choose_twos` (`id`, `heading`, `heading_ar`, `subheading`, `subheading_ar`, `photo_over_text`, `photo_over_text_ar`, `photo_over_heading`, `photo_over_heading_ar`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Building a design easy for business', 'بناء تصميم سهل للأعمال', 'Why choose us', 'لماذا تختارنا؟', 'We’re bringing latest business innovation in to the digital world', 'نحن نقدم أحدث الابتكارات في مجال الأعمال إلى العالم الرقمي.', 'Top quality marketing solutions', 'حلول تسويق عالية الجودة', 'why_choose_two_photo_1704886719.jpg', '2024-04-22 06:30:11', '2024-04-22 06:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_two_elements`
--

CREATE TABLE `why_choose_two_elements` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `choose_two_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_two_elements`
--

INSERT INTO `why_choose_two_elements` (`id`, `heading`, `heading_ar`, `icon`, `choose_two_id`, `created_at`, `updated_at`) VALUES
(1, '	Web Growths', 'نمو الويب', 'flaticon-laptop', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(2, 'Digital solutions', 'حلول رقمية', 'flaticon-graphic-design', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(3, 'Best consultancy', 'أفضل استشارات', 'flaticon-health-check', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11'),
(4, '	Expert developers', 'مطورون متخصصون', 'flaticon-teaching', 1, '2024-04-22 06:30:11', '2024-04-22 06:30:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_to_actions`
--
ALTER TABLE `call_to_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
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
-- Indexes for table `feature_ones`
--
ALTER TABLE `feature_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_one_elements`
--
ALTER TABLE `feature_one_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_one_elements_feature_one_id_foreign` (`feature_one_id`);

--
-- Indexes for table `feature_twos`
--
ALTER TABLE `feature_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_two_elements`
--
ALTER TABLE `feature_two_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_two_elements_feature_two_id_foreign` (`feature_two_id`);

--
-- Indexes for table `fun_facts`
--
ALTER TABLE `fun_facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fun_fact_elements`
--
ALTER TABLE `fun_fact_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fun_fact_elements_fun_id_foreign` (`fun_id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_fours`
--
ALTER TABLE `home_fours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_ones`
--
ALTER TABLE `home_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_threes`
--
ALTER TABLE `home_threes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_twos`
--
ALTER TABLE `home_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marquees`
--
ALTER TABLE `marquees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_manages`
--
ALTER TABLE `menu_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_elements`
--
ALTER TABLE `offer_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_elements_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `other_page_blogs`
--
ALTER TABLE `other_page_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_contacts`
--
ALTER TABLE `other_page_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_custom_pages`
--
ALTER TABLE `other_page_custom_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_f_a_q_s`
--
ALTER TABLE `other_page_f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_portfolios`
--
ALTER TABLE `other_page_portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_pricings`
--
ALTER TABLE `other_page_pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_privacies`
--
ALTER TABLE `other_page_privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_searches`
--
ALTER TABLE `other_page_searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_services`
--
ALTER TABLE `other_page_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_tags`
--
ALTER TABLE `other_page_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_team_members`
--
ALTER TABLE `other_page_team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_terms`
--
ALTER TABLE `other_page_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_page_testimonials`
--
ALTER TABLE `other_page_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tags_post_id_foreign` (`post_id`);

--
-- Indexes for table `pricing_options`
--
ALTER TABLE `pricing_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricing_options_pricing_id_foreign` (`pricing_id`);

--
-- Indexes for table `pricing_orders`
--
ALTER TABLE `pricing_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricing_orders_pricing_id_foreign` (`pricing_id`);

--
-- Indexes for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_f_a_q_s`
--
ALTER TABLE `service_f_a_q_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_f_a_q_s_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_experiences`
--
ALTER TABLE `team_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_experiences_member_id_foreign` (`member_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_ones`
--
ALTER TABLE `video_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_twos`
--
ALTER TABLE `video_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_ones`
--
ALTER TABLE `welcome_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_one_elements`
--
ALTER TABLE `welcome_one_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `welcome_one_elements_welcome_one_id_foreign` (`welcome_one_id`);

--
-- Indexes for table `welcome_twos`
--
ALTER TABLE `welcome_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_two_elements`
--
ALTER TABLE `welcome_two_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `welcome_two_elements_welcome_two_id_foreign` (`welcome_two_id`);

--
-- Indexes for table `welcome_two_skills`
--
ALTER TABLE `welcome_two_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `welcome_two_skills_welcome_two_id_foreign` (`welcome_two_id`);

--
-- Indexes for table `why_choose_ones`
--
ALTER TABLE `why_choose_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_one_elements`
--
ALTER TABLE `why_choose_one_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `why_choose_one_elements_choose_one_id_foreign` (`choose_one_id`);

--
-- Indexes for table `why_choose_twos`
--
ALTER TABLE `why_choose_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_two_elements`
--
ALTER TABLE `why_choose_two_elements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `why_choose_two_elements_choose_two_id_foreign` (`choose_two_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `call_to_actions`
--
ALTER TABLE `call_to_actions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_ones`
--
ALTER TABLE `feature_ones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_one_elements`
--
ALTER TABLE `feature_one_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_twos`
--
ALTER TABLE `feature_twos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_two_elements`
--
ALTER TABLE `feature_two_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fun_facts`
--
ALTER TABLE `fun_facts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fun_fact_elements`
--
ALTER TABLE `fun_fact_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_fours`
--
ALTER TABLE `home_fours`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_ones`
--
ALTER TABLE `home_ones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_threes`
--
ALTER TABLE `home_threes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_twos`
--
ALTER TABLE `home_twos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marquees`
--
ALTER TABLE `marquees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu_manages`
--
ALTER TABLE `menu_manages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_elements`
--
ALTER TABLE `offer_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_page_blogs`
--
ALTER TABLE `other_page_blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_contacts`
--
ALTER TABLE `other_page_contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_custom_pages`
--
ALTER TABLE `other_page_custom_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other_page_f_a_q_s`
--
ALTER TABLE `other_page_f_a_q_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_portfolios`
--
ALTER TABLE `other_page_portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_pricings`
--
ALTER TABLE `other_page_pricings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_privacies`
--
ALTER TABLE `other_page_privacies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_searches`
--
ALTER TABLE `other_page_searches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_services`
--
ALTER TABLE `other_page_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_tags`
--
ALTER TABLE `other_page_tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_team_members`
--
ALTER TABLE `other_page_team_members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_terms`
--
ALTER TABLE `other_page_terms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_page_testimonials`
--
ALTER TABLE `other_page_testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pricing_options`
--
ALTER TABLE `pricing_options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pricing_orders`
--
ALTER TABLE `pricing_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricing_plans`
--
ALTER TABLE `pricing_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_f_a_q_s`
--
ALTER TABLE `service_f_a_q_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_experiences`
--
ALTER TABLE `team_experiences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_ones`
--
ALTER TABLE `video_ones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_twos`
--
ALTER TABLE `video_twos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `welcome_ones`
--
ALTER TABLE `welcome_ones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `welcome_one_elements`
--
ALTER TABLE `welcome_one_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `welcome_twos`
--
ALTER TABLE `welcome_twos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `welcome_two_elements`
--
ALTER TABLE `welcome_two_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `welcome_two_skills`
--
ALTER TABLE `welcome_two_skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_ones`
--
ALTER TABLE `why_choose_ones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_one_elements`
--
ALTER TABLE `why_choose_one_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_choose_twos`
--
ALTER TABLE `why_choose_twos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_two_elements`
--
ALTER TABLE `why_choose_two_elements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feature_one_elements`
--
ALTER TABLE `feature_one_elements`
  ADD CONSTRAINT `feature_one_elements_feature_one_id_foreign` FOREIGN KEY (`feature_one_id`) REFERENCES `feature_ones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_two_elements`
--
ALTER TABLE `feature_two_elements`
  ADD CONSTRAINT `feature_two_elements_feature_two_id_foreign` FOREIGN KEY (`feature_two_id`) REFERENCES `welcome_twos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fun_fact_elements`
--
ALTER TABLE `fun_fact_elements`
  ADD CONSTRAINT `fun_fact_elements_fun_id_foreign` FOREIGN KEY (`fun_id`) REFERENCES `fun_facts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offer_elements`
--
ALTER TABLE `offer_elements`
  ADD CONSTRAINT `offer_elements_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pricing_options`
--
ALTER TABLE `pricing_options`
  ADD CONSTRAINT `pricing_options_pricing_id_foreign` FOREIGN KEY (`pricing_id`) REFERENCES `pricing_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pricing_orders`
--
ALTER TABLE `pricing_orders`
  ADD CONSTRAINT `pricing_orders_pricing_id_foreign` FOREIGN KEY (`pricing_id`) REFERENCES `pricing_plans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD CONSTRAINT `product_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_f_a_q_s`
--
ALTER TABLE `service_f_a_q_s`
  ADD CONSTRAINT `service_f_a_q_s_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_experiences`
--
ALTER TABLE `team_experiences`
  ADD CONSTRAINT `team_experiences_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `welcome_one_elements`
--
ALTER TABLE `welcome_one_elements`
  ADD CONSTRAINT `welcome_one_elements_welcome_one_id_foreign` FOREIGN KEY (`welcome_one_id`) REFERENCES `welcome_ones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `welcome_two_elements`
--
ALTER TABLE `welcome_two_elements`
  ADD CONSTRAINT `welcome_two_elements_welcome_two_id_foreign` FOREIGN KEY (`welcome_two_id`) REFERENCES `welcome_twos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `welcome_two_skills`
--
ALTER TABLE `welcome_two_skills`
  ADD CONSTRAINT `welcome_two_skills_welcome_two_id_foreign` FOREIGN KEY (`welcome_two_id`) REFERENCES `welcome_twos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `why_choose_one_elements`
--
ALTER TABLE `why_choose_one_elements`
  ADD CONSTRAINT `why_choose_one_elements_choose_one_id_foreign` FOREIGN KEY (`choose_one_id`) REFERENCES `why_choose_ones` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `why_choose_two_elements`
--
ALTER TABLE `why_choose_two_elements`
  ADD CONSTRAINT `why_choose_two_elements_choose_two_id_foreign` FOREIGN KEY (`choose_two_id`) REFERENCES `why_choose_twos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
