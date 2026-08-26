-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2026 at 09:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'SANJOY', 'abc@123', '2026-08-01', '2026-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `creator` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `creator`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 'SANJOY', '2026-08-07', '2026-08-07'),
(2, 'CSS', 'SANJOY', '2026-08-07', '2026-08-07'),
(3, 'JavaScript', 'SANJOY', '2026-08-07', '2026-08-07'),
(4, 'Bootstrap', 'SANJOY', '2026-08-07', '2026-08-07'),
(5, 'Tailwind CSS', 'SANJOY', '2026-08-07', '2026-08-07'),
(6, 'PHP', 'SANJOY', '2026-08-07', '2026-08-07'),
(7, 'Laravel', 'SANJOY', '2026-08-07', '2026-08-07'),
(8, 'MySQL', 'SANJOY', '2026-08-07', '2026-08-07'),
(9, 'Python', 'SANJOY', '2026-08-07', '2026-08-07'),
(10, 'Java', 'SANJOY', '2026-08-07', '2026-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'SANJOY MAITY', 'maitysanjoy202@gmail.com', '6295437135', '$2y$12$UgSdd5IuK.jGfE4YRRMWDe6lOwOLSM/PL3kNj9i3KyQIwrxDazS8S', '2026-08-07', '2026-08-07'),
(2, 'SUBHAS MAITY', 'maitysubhas202@gmail.com', '9232768123', '$2y$12$RXtYpUg9jUJxehvQ3vxbN.J9fBjZzBy/xDcW0WSEsk4J9JeZi40zC', '2026-08-10', '2026-08-10'),
(3, 'RITII', 'pratisthapurakayastha009@gmail.com', '8637877756', '$2y$12$r.FKCFj9.tDJqhoA9ZzVvuhNu6oJBOP3p6ER1nqsMauwt/DnOjpvS', '2026-08-11', '2026-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `id` int(30) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option_a` varchar(300) NOT NULL,
  `option_b` varchar(300) NOT NULL,
  `option_c` varchar(300) NOT NULL,
  `option_d` varchar(300) NOT NULL,
  `currect_ans` varchar(30) NOT NULL,
  `admin_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `quiz_id` int(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `currect_ans`, `admin_id`, `category_id`, `quiz_id`, `created_at`, `updated_at`) VALUES
(1, 'What does HTML stand for?', 'A. Hyper Text Makeup Language', 'B. Hyper Text Markup Language', 'C. High Text Markup Language', 'D. Hyper Transfer Markup Language', 'option-b', 1, 1, 2, '2026-08-07', '2026-08-07'),
(2, 'Which tag is used to create a hyperlink?', 'A. <link>', 'B. <a>', 'C. <href>', 'D. <url>', 'option-b', 1, 1, 2, '2026-08-07', '2026-08-07'),
(3, 'Which HTML tag is used for the largest heading?', 'A. <h6>', 'B. <head>', 'C. <h1>', 'D. <heading>', 'option-c', 1, 1, 2, '2026-08-07', '2026-08-07'),
(4, 'Which tag is used to insert an image?', 'A. <picture>', 'B. <img>', 'C. <image>', 'D. <src>', 'option-b', 1, 1, 2, '2026-08-07', '2026-08-07'),
(5, 'Which attribute is used to specify the image source?', 'A. href', 'B. link', 'C. src', 'D. alt', 'option-c', 1, 1, 2, '2026-08-07', '2026-08-07'),
(6, 'What does CSS stand for?', 'A. Computer Style Sheets', 'B. Creative Style Sheets', 'C. Cascading Style Sheets', 'D. Colorful Style Sheets', 'option-c', 1, 2, 3, '2026-08-07', '2026-08-07'),
(7, 'Which HTML tag is used to link a CSS file?', 'A. <css>', 'B. <style>', 'C. <link>', 'D. <script>', 'option-c', 1, 2, 3, '2026-08-07', '2026-08-07'),
(8, 'Which CSS property is used to change the text color?', 'A. text-color', 'B. font-color', 'C. color', 'D. background-color', 'option-c', 1, 2, 3, '2026-08-07', '2026-08-07'),
(9, 'Which CSS property is used to change the background color?', 'A. bgcolor', 'B. background-color', 'C. color', 'D. background', 'option-b', 1, 2, 3, '2026-08-07', '2026-08-07'),
(10, 'Which symbol is used for an ID selector in CSS?', 'A. .', 'B. #', 'C. *', 'D. @', 'option-b', 1, 2, 3, '2026-08-07', '2026-08-07'),
(11, 'What does JavaScript primarily do?', 'A. Styles web pages', 'B. Structures web pages', 'C. Adds interactivity to web pages', 'D. Manages databases', 'option-c', 1, 3, 4, '2026-08-07', '2026-08-07'),
(12, 'Which keyword is used to declare a variable in modern JavaScript?', 'A. var', 'B. let', 'C. int', 'D. string', 'option-b', 1, 3, 4, '2026-08-07', '2026-08-07'),
(13, 'Which symbol is used for single-line comments in JavaScript?', 'A. <!-- -->', 'B. /* */', 'C. //', 'D. ##', 'option-c', 1, 3, 4, '2026-08-07', '2026-08-07'),
(14, 'Which function is used to display a message in a popup box?', 'A. print()', 'B. prompt()', 'C. alert()', 'D. console()', 'option-c', 1, 3, 4, '2026-08-07', '2026-08-07'),
(15, 'Which method is used to print output in the browser console?', 'A. console.log()', 'B. document.write()', 'C. alert()', 'D. print()', 'option-a', 1, 3, 4, '2026-08-07', '2026-08-07'),
(16, 'What is Bootstrap?', 'A. A programming language', 'B. A JavaScript framework', 'C. A CSS framework for responsive web design', 'D. A database management system', 'option-c', 1, 4, 5, '2026-08-07', '2026-08-07'),
(17, 'Which class is used to create a responsive container in Bootstrap?', 'A. .wrapper', 'B. .container', 'C. .box', 'D. .content', 'option-b', 1, 4, 5, '2026-08-07', '2026-08-07'),
(18, 'Which Bootstrap class is used to create a button?', 'A. .button', 'B. .btn', 'C. .btn-style', 'D. .button-primary', 'option-b', 1, 4, 5, '2026-08-07', '2026-08-07'),
(19, 'Which Bootstrap class is used to create a primary button?', 'A. .btn-blue', 'B. .btn-primary', 'C. .primary-btn', 'D. .button-primary', 'option-b', 1, 4, 5, '2026-08-07', '2026-08-07'),
(20, 'Which Bootstrap grid class creates a column that takes 6 out of 12 columns on medium devices?', 'A. .col-6', 'B. .col-sm-6', 'C. .col-md-6', 'D. .col-lg-6', 'option-c', 1, 4, 5, '2026-08-07', '2026-08-07'),
(21, 'What is Tailwind CSS?', 'A. A JavaScript library', 'B. A CSS framework based on utility classes', 'C. A database management system', 'D. A PHP framework', 'option-b', 1, 5, 6, '2026-08-07', '2026-08-07'),
(22, 'Which Tailwind CSS class is used to make text bold?', 'A. text-bold', 'B. font-bold', 'C. bold-text', 'D. fw-bold', 'option-b', 1, 5, 6, '2026-08-07', '2026-08-07'),
(23, 'Which Tailwind CSS class changes the text color to red?', 'A. color-red-500', 'B. text-red-500', 'C. font-red-500', 'D. red-text', 'option-b', 1, 5, 6, '2026-08-07', '2026-08-07'),
(24, 'Which Tailwind CSS class is used to center text?', 'A. align-center', 'B. text-center', 'C. center-text', 'D. justify-center', 'option-b', 1, 5, 6, '2026-08-07', '2026-08-07'),
(25, 'Which Tailwind CSS class adds padding on all sides?', 'A. m-4', 'B. p-4', 'C. px-4', 'D. py-4', 'option-b', 1, 5, 6, '2026-08-07', '2026-08-07'),
(26, 'What does PHP stand for?', 'A. Personal Home Page', 'B. Private Home Page', 'C. Professional Hypertext Processor', 'D. Programming Home Page', 'option-a', 1, 6, 7, '2026-08-07', '2026-08-07'),
(27, 'Which symbol is used to start a variable in PHP?', 'A. #', 'B. @', 'C. $', 'D. &', 'option-c', 1, 6, 7, '2026-08-07', '2026-08-07'),
(28, 'Which tag is used to start a PHP script?', 'A. <php>', 'B. <?php', 'C. <script>', 'D. <?', 'option-b', 1, 6, 7, '2026-08-07', '2026-08-07'),
(29, 'Which function is used to display output in PHP?', 'A. print()', 'B. echo', 'C. console.log()', 'D. printf()', 'option-b', 1, 6, 7, '2026-08-07', '2026-08-07'),
(30, 'Which superglobal variable is used to receive form data sent with the POST method?', 'A. $_GET', 'B. $_POST', 'C. $_REQUEST', 'D. $_SESSION', 'option-b', 1, 6, 7, '2026-08-07', '2026-08-07'),
(31, 'What is Laravel?', 'A. A JavaScript framework', 'B. A PHP Framework', 'C. A CSS framework', 'D. A Database', 'option-b', 1, 7, 8, '2026-08-07', '2026-08-07'),
(32, 'Which command is used to create a new Laravel project?', 'A. php artisan new project', 'B. composer create-project laravel/laravel project-name', 'C. laravel install', 'D. php create laravel', 'option-b', 1, 7, 8, '2026-08-07', '2026-08-07'),
(33, 'Which command is used to start the Laravel development server?', 'A. php artisan serve ✅', 'B. php serve', 'C. laravel serve', 'D. composer serve', 'option-a', 1, 7, 8, '2026-08-07', '2026-08-07'),
(34, 'Which file is used to define web routes in Laravel?', 'A. routes/api.php', 'B. routes/web.php', 'C. app/routes.php', 'D. config/routes.php', 'option-b', 1, 7, 8, '2026-08-07', '2026-08-07'),
(35, 'Which Artisan command is used to create a controller?', 'A. php artisan create:controller UserController', 'B. php artisan make:controller UserController', 'C. php artisan controller UserController', 'D. php artisan new:controller UserController', 'option-b', 1, 7, 8, '2026-08-07', '2026-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_records`
--

CREATE TABLE `mcq_records` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `record_id` int(30) NOT NULL,
  `mcq_id` int(30) NOT NULL,
  `select_answer` varchar(30) NOT NULL,
  `currect_ans` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcq_records`
--

INSERT INTO `mcq_records` (`id`, `name`, `record_id`, `mcq_id`, `select_answer`, `currect_ans`) VALUES
(1, 'SANJOY MAITY', 3, 1, 'option-b', 1),
(2, 'SANJOY MAITY', 3, 2, 'option-a', 0),
(3, 'SANJOY MAITY', 3, 3, 'option-b', 0),
(4, 'SANJOY MAITY', 3, 4, 'option-c', 0),
(5, 'SANJOY MAITY', 3, 5, 'option-c', 1),
(6, 'SANJOY MAITY', 4, 11, 'option-a', 0),
(7, 'SANJOY MAITY', 4, 12, 'option-c', 0),
(8, 'SANJOY MAITY', 4, 13, 'option-c', 1),
(9, 'SANJOY MAITY', 5, 1, 'option-a', 0),
(10, 'SANJOY MAITY', 5, 2, 'option-c', 0),
(11, 'SANJOY MAITY', 5, 3, 'option-c', 1),
(12, 'SANJOY MAITY', 5, 4, 'option-c', 0),
(13, 'SANJOY MAITY', 5, 5, 'option-c', 1),
(14, 'SANJOY MAITY', 8, 1, 'option-a', 0),
(15, 'SANJOY MAITY', 8, 2, 'option-c', 0),
(16, 'SANJOY MAITY', 8, 3, 'option-b', 0),
(17, 'SANJOY MAITY', 8, 4, 'option-c', 0),
(18, 'SANJOY MAITY', 8, 5, 'option-c', 1),
(19, 'SUBHAS MAITY', 9, 1, 'option-a', 0),
(20, 'SUBHAS MAITY', 10, 1, 'option-a', 0),
(21, 'SUBHAS MAITY', 10, 2, 'option-b', 1),
(22, 'SUBHAS MAITY', 10, 3, 'option-b', 0),
(23, 'SUBHAS MAITY', 10, 4, 'option-c', 0),
(24, 'SUBHAS MAITY', 10, 5, 'option-c', 1),
(25, 'SANJOY MAITY', 11, 6, 'option-a', 0),
(26, 'SANJOY MAITY', 11, 7, 'option-a', 0),
(27, 'SANJOY MAITY', 11, 8, 'option-b', 0),
(28, 'SANJOY MAITY', 11, 9, 'option-b', 1),
(29, 'SANJOY MAITY', 11, 10, 'option-b', 1),
(30, 'SANJOY MAITY', 12, 6, 'option-c', 1),
(31, 'SANJOY MAITY', 12, 7, 'option-b', 0),
(32, 'SANJOY MAITY', 12, 8, 'option-c', 1),
(33, 'SANJOY MAITY', 12, 9, 'option-d', 0),
(34, 'SANJOY MAITY', 12, 10, 'option-b', 1),
(35, 'SANJOY MAITY', 13, 1, 'option-a', 0),
(36, 'SANJOY MAITY', 13, 2, 'option-b', 1),
(37, 'SANJOY MAITY', 13, 3, 'option-b', 0),
(38, 'SANJOY MAITY', 13, 4, 'option-b', 1),
(39, 'SANJOY MAITY', 13, 5, 'option-b', 0),
(40, 'SANJOY MAITY', 14, 1, 'option-a', 0),
(41, 'SANJOY MAITY', 14, 2, 'option-c', 0),
(42, 'SANJOY MAITY', 14, 3, 'option-c', 1),
(43, 'SANJOY MAITY', 14, 4, 'option-c', 0),
(44, 'SANJOY MAITY', 14, 5, 'option-c', 1),
(45, 'RITII', 15, 1, 'option-b', 1),
(46, 'RITII', 15, 2, 'option-d', 0),
(47, 'RITII', 15, 3, 'option-c', 1),
(48, 'RITII', 15, 4, 'option-c', 0),
(49, 'RITII', 15, 5, 'option-c', 1),
(50, 'SANJOY MAITY', 16, 1, 'option-a', 0),
(51, 'SANJOY MAITY', 16, 2, 'option-b', 1),
(52, 'SANJOY MAITY', 16, 3, 'option-c', 1),
(53, 'SANJOY MAITY', 16, 4, 'option-c', 0),
(54, 'SANJOY MAITY', 16, 5, 'option-c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quiz_id` int(30) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `status` int(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `quiz_id`, `customer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SANJOY MAITY', 2, 1, 1, '2026-08-07', '2026-08-07'),
(2, 'SANJOY MAITY', 2, 1, 1, '2026-08-07', '2026-08-07'),
(3, 'SANJOY MAITY', 2, 1, 2, '2026-08-07', '2026-08-07'),
(4, 'SANJOY MAITY', 4, 1, 1, '2026-08-10', '2026-08-10'),
(5, 'SANJOY MAITY', 2, 1, 2, '2026-08-10', '2026-08-10'),
(6, 'SANJOY MAITY', 2, 1, 1, '2026-08-10', '2026-08-10'),
(7, 'SANJOY MAITY', 2, 1, 1, '2026-08-10', '2026-08-10'),
(8, 'SANJOY MAITY', 2, 1, 2, '2026-08-10', '2026-08-10'),
(9, 'SUBHAS MAITY', 2, 2, 1, '2026-08-10', '2026-08-10'),
(10, 'SUBHAS MAITY', 2, 2, 2, '2026-08-10', '2026-08-10'),
(11, 'SANJOY MAITY', 3, 1, 2, '2026-08-10', '2026-08-10'),
(12, 'SANJOY MAITY', 3, 1, 2, '2026-08-10', '2026-08-10'),
(13, 'SANJOY MAITY', 2, 1, 2, '2026-08-10', '2026-08-10'),
(14, 'SANJOY MAITY', 2, 1, 2, '2026-08-11', '2026-08-11'),
(15, 'RITII', 2, 3, 2, '2026-08-11', '2026-08-11'),
(16, 'SANJOY MAITY', 2, 1, 2, '2026-08-11', '2026-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category_id` int(30) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'HTML Basics Quiz', 1, '2026-08-07', '2026-08-07'),
(3, 'CSS Basics Quiz', 2, '2026-08-07', '2026-08-07'),
(4, 'JavaScript Basics Quiz', 3, '2026-08-07', '2026-08-07'),
(5, 'Bootstrap Basics Quiz', 4, '2026-08-07', '2026-08-07'),
(6, 'Tailwind CSS Basics Quiz', 5, '2026-08-07', '2026-08-07'),
(7, 'PHP Basics Quiz', 6, '2026-08-07', '2026-08-07'),
(8, 'Laravel Basics Quiz', 7, '2026-08-07', '2026-08-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq_records`
--
ALTER TABLE `mcq_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mcq_records`
--
ALTER TABLE `mcq_records`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
