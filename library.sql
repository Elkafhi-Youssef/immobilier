-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 01:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `edition_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `title`, `edition_year`) VALUES
('', '', 0),
('1948', 'zs', 1),
('2022', 'Article preview component', 1),
('2022TYUI', 'dsfg', 1),
('2022YASSINE', 'Article preview component', 1),
('3646q5sd46q', 'title1', 2000),
('BYTSGG6544', 'JavaScript algorithms', 2016),
('FFTTYU165585', 'CPP OOP', 2019),
('YU645648', 'Article preview component', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(123, 'programation'),
(456, 'visualisation'),
(521, 'category of cate'),
(788, 'langue');

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE `copy` (
  `copy_id` int(11) NOT NULL,
  `ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `copy`
--

INSERT INTO `copy` (`copy_id`, `ISBN`) VALUES
(1, '1948'),
(2, '2022'),
(3, '2022'),
(4, '2022'),
(5, '2022YASSINE'),
(6, '3646q5sd46q'),
(7, 'BYTSGG6544'),
(8, 'YU645648');

-- --------------------------------------------------------

--
-- Table structure for table `ecrire`
--

CREATE TABLE `ecrire` (
  `ISBN` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `empl_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`empl_id`, `first_name`, `last_name`, `email`, `phone`, `img`, `passwd`, `service`) VALUES
('B654989', 'Ayman', 'Salih', 's.ayman@gmail.com', '+212602135489', '', '123456', 'service de service'),
('G654895', 'Yassin', 'Ayoub', 'y.ayoub@gmail.com', '+212684571259', '', '123456', 'service5'),
('H13654885', 'Hassan', 'Rahmouni', 'h.rahmouni@gmail.com', '+212698547812', '', '123456', 'HR'),
('Hb1254845', 'Hamza', 'Fasi', 'h.fasi@gmail.com', '+212698547123', '', '123456', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `emp_borrow`
--

CREATE TABLE `emp_borrow` (
  `borrow_date` date NOT NULL,
  `recovery_date` date NOT NULL,
  `empl_id` varchar(255) NOT NULL,
  `copy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_order`
--

CREATE TABLE `emp_order` (
  `date_prise` date NOT NULL,
  `order_date` date NOT NULL,
  `empl_id` varchar(255) NOT NULL,
  `copy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `existe`
--

CREATE TABLE `existe` (
  `ISBN` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `std_borrow`
--

CREATE TABLE `std_borrow` (
  `borrow_date` date NOT NULL,
  `recovery_date` date NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `copy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `std_order`
--

CREATE TABLE `std_order` (
  `order_date` date NOT NULL,
  `date_prise` date NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `copy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `email`, `phone`, `passwd`, `branch`, `img`, `semester`) VALUES
('G5652145587', 'Amal', 'Beddiaf', 'b.amal@gmail.com', '+212698574125', '12345', 'Génié info', '', 4),
('H65464656', 'Salma', 'Bouizmoune', 'b.salma@gmail.com', '+212658479412', '12345', 'Génié info', '', 4),
('K213165468', 'Youssef', 'Elkafhi', 'youssefelkafhi@gmail.com', '+210654879213', '1234', 'Génié info', '', 4),
('k3213546', 'Hamza', 'Gassai', 'elgassaihamzam54@gmail.com', '+212689063923', '@dk0000', 'Génié info', '', 4),
('K56464568', 'Yassine', 'Benkhay', 'b.yassibe@gmail.com', '+212654879452', '12345', 'Génié info', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `first_name`, `last_name`, `email`, `phone`, `img`, `passwd`, `departement`) VALUES
('H65464656', 'Ahmed', 'Ymani', 'y.ahmed@gmail.com', '+212698547125', '', '123456', 'GI'),
('U546564895', 'Kmal', 'Ayman', 'a.kamal@gmail.com', '+212698547845', '', '12345', 'TM');

-- --------------------------------------------------------

--
-- Table structure for table `tea_borrow`
--

CREATE TABLE `tea_borrow` (
  `borrow_date` date NOT NULL,
  `recovery_date` date NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `copy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tea_order`
--

CREATE TABLE `tea_order` (
  `date_prise` date NOT NULL,
  `order_date` date NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `copy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`copy_id`),
  ADD KEY `ISBN` (`ISBN`);

--
-- Indexes for table `ecrire`
--
ALTER TABLE `ecrire`
  ADD PRIMARY KEY (`ISBN`,`author_id`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`empl_id`);

--
-- Indexes for table `emp_borrow`
--
ALTER TABLE `emp_borrow`
  ADD PRIMARY KEY (`empl_id`,`copy_id`),
  ADD KEY `copy_id` (`copy_id`),
  ADD KEY `empl_id` (`empl_id`);

--
-- Indexes for table `emp_order`
--
ALTER TABLE `emp_order`
  ADD PRIMARY KEY (`empl_id`,`copy_id`),
  ADD KEY `copy_id` (`copy_id`),
  ADD KEY `empl_id` (`empl_id`);

--
-- Indexes for table `existe`
--
ALTER TABLE `existe`
  ADD PRIMARY KEY (`ISBN`,`cat_id`),
  ADD KEY `ISBN` (`ISBN`,`cat_id`),
  ADD KEY `FK_cat_id` (`cat_id`);

--
-- Indexes for table `std_borrow`
--
ALTER TABLE `std_borrow`
  ADD PRIMARY KEY (`student_id`,`copy_id`),
  ADD KEY `copy_id` (`copy_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `std_order`
--
ALTER TABLE `std_order`
  ADD PRIMARY KEY (`student_id`,`copy_id`),
  ADD KEY `copy_id` (`copy_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `tea_borrow`
--
ALTER TABLE `tea_borrow`
  ADD PRIMARY KEY (`teacher_id`,`copy_id`),
  ADD KEY `copy_id` (`copy_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `tea_order`
--
ALTER TABLE `tea_order`
  ADD PRIMARY KEY (`teacher_id`,`copy_id`),
  ADD KEY `copy_id` (`copy_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789;

--
-- AUTO_INCREMENT for table `copy`
--
ALTER TABLE `copy`
  MODIFY `copy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `copy`
--
ALTER TABLE `copy`
  ADD CONSTRAINT `FK_ISBNN` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ecrire`
--
ALTER TABLE `ecrire`
  ADD CONSTRAINT `FK_ISBN_book` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_borrow`
--
ALTER TABLE `emp_borrow`
  ADD CONSTRAINT `FK_co` FOREIGN KEY (`copy_id`) REFERENCES `copy` (`copy_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_emp` FOREIGN KEY (`empl_id`) REFERENCES `employe` (`empl_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_order`
--
ALTER TABLE `emp_order`
  ADD CONSTRAINT `FK_copyyy` FOREIGN KEY (`copy_id`) REFERENCES `copy` (`copy_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_emplo` FOREIGN KEY (`empl_id`) REFERENCES `employe` (`empl_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `existe`
--
ALTER TABLE `existe`
  ADD CONSTRAINT `FK_ISBN` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `std_borrow`
--
ALTER TABLE `std_borrow`
  ADD CONSTRAINT `FK_copy_id` FOREIGN KEY (`copy_id`) REFERENCES `copy` (`copy_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `std_order`
--
ALTER TABLE `std_order`
  ADD CONSTRAINT `FK_copy` FOREIGN KEY (`copy_id`) REFERENCES `copy` (`copy_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tea_borrow`
--
ALTER TABLE `tea_borrow`
  ADD CONSTRAINT `FK_copy_yyy` FOREIGN KEY (`copy_id`) REFERENCES `copy` (`copy_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tea_order`
--
ALTER TABLE `tea_order`
  ADD CONSTRAINT `FK_copyy` FOREIGN KEY (`copy_id`) REFERENCES `copy` (`copy_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_teacher` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
