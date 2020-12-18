-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 02:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloginfo`
--

CREATE TABLE `bloginfo` (
  `infoid` int(11) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloginfo`
--

INSERT INTO `bloginfo` (`infoid`, `regno`, `date_time`, `info`) VALUES
(100, 'RA1511003020410', '2020-12-16 15:48:47', 'Using an event announcement is the right answer.'),
(101, 'RA1511003020155', '2020-12-16 15:49:44', 'We’ve collected a few examples of event announcements on Instagram, Facebook, and YouTube.'),
(102, 'RA1511003020892', '2020-12-16 15:50:35', 'Target your event announcements.'),
(103, 'RA1511003020410', '2020-12-16 16:25:39', 'You can add a background-image to a textarea like you can any other element. ');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `postid` int(11) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `hashtag` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `content` longtext NOT NULL,
  `title` text NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`postid`, `regno`, `hashtag`, `date_time`, `content`, `title`, `image`) VALUES
(100, 'RA1511003020892', NULL, '2020-12-16 16:10:07', 'The Marvel Cinematic Universe (MCU) is an American media franchise and shared universe centered on a series of superhero films, independently produced by Marvel Studios and based on characters that appear in American comic books published by Marvel Comics. The franchise includes comic books, short films, television series, and digital series. The shared universe, much like the original Marvel Universe in comic books, was established by crossing over common plot elements, settings, cast, and characters.\r\n\r\nThe first MCU film is Iron Man (2008), which began the films of Phase One culminating in the crossover film The Avengers (2012). Phase Two began with Iron Man 3 (2013) and concluded with Ant-Man (2015). Phase Three began with Captain America: Civil War (2016) and concluded with Spider-Man: Far From Home (2019). The first three phases in the franchise are collectively known as \"The Infinity Saga\". The films of Phase Four will begin with Black Widow (2021) and are set to conclude with Guardians of the Galaxy Vol. 3 (2023).\r\n\r\nMarvel Television expanded the universe to network television with Agents of S.H.I.E.L.D. on ABC in 2013, followed by streaming television with Daredevil on Netflix in 2015 and Runaways on Hulu in 2017, and cable television with Cloak & Dagger on Freeform in 2018. Marvel Television produced the digital series Agents of S.H.I.E.L.D.: Slingshot. Marvel Studios expanded to streaming television with Disney+ for tie-in shows, starting with WandaVision in 2021 as the beginning of Phase Four. Soundtrack albums have been released for all the films and many of the television series, as well as compilation albums containing existing music heard in the films. The MCU includes tie-in comics published by Marvel Comics, while Marvel Studios has produced a series of direct-to-video short films, called Marvel One-Shots, and a viral marketing campaign for its films and the universe with the faux news program WHIH Newsfront.\r\n\r\nThe franchise has been commercially successful and has generally received a positive critical response, though some reviewers have found that some of its films and television series have suffered in service of the wider universe. It has inspired other film and television studios with comic book character adaptation rights to attempt to create similar shared universes. The MCU has been the focus of other media, outside of the shared universe, including attractions at various Walt Disney Parks and Resorts, an attraction at Discovery Times Square, a Queensland Gallery of Modern Art exhibit, two television specials, guidebooks for each film, multiple tie-in video games, and commercials.', 'Marvel Cinematic Universe', NULL),
(101, 'RA1511003020410', NULL, '2020-12-16 17:49:37', 'As an intern in Wells Fargo during my final semester, I had the first-hand experience in all aspects of Software Development - Planning to Testing and Maintenance. For someone who had only worked with only a few hundred lines of code, it was mesmerising to look at thousands of lines of code working in sync and where every line had equal importance. I got to understand the interconnectivity and interdependence among various technologies on a global enterprise-level. I am currently working as an Engineering Analyst in Wells Fargo. My team works with Java Spring, Apache Camel, Rest APIs, and Oracle.', 'Wells Fargo (India) Pvt. Ltd.', NULL),
(102, 'RA1511003020410', NULL, '2020-12-16 17:50:53', 'John Deere is the brand name of Deere & Company, an American corporation that manufactures agricultural, construction, and forestry machinery, diesel engines, drivetrains (axles, transmissions, gearboxes) used in heavy equipment, and lawn care equipment. In 2019, it was listed as 87th in the Fortune 500 America\'s ranking[3] and was ranked 329th in the global ranking.[4] The company also provides financial services and other related activities.\r\n\r\nDeere & Company is listed on the New York Stock Exchange under the symbol DE.[5] The company\'s slogan is \"Nothing Runs Like a Deere\", and its logo is a leaping deer, with the words \'JOHN DEERE\' under it. Various logos incorporating a leaping deer have been used by the company for over 155 years. Deere & Company is headquartered in Moline, Illinois.', 'John Deere (India) Pvt. Ltd.', NULL),
(103, 'RA1511003020155', NULL, '2020-12-16 17:51:36', 'SRM Institute of Science and Technology, is a deemed university located in Kattankulathur, Chengalpattu, Tamil Nadu, India, near Chennai. It was founded in 1985 as SRM Engineering College in Kattankulathur, under University of Madras. SRM Institute of Science and Technology includes six campuses, three in Tamil Nadu — Kattankulathur, Ramapuram and Vadapalani, one in NCR Delhi, one in Sikkim and one in Amaravati. And there are about 50,000 students studying in SRM College.\r\n\r\nThe institute gained deemed status during the 2003–2004 academic year and was renamed SRM Institute of Science and Technology. It became SRM University in 2006 following permission by the UGC for \'Deemed to be Universities\' to be called \'Universities\'.[2] In 2017 it was renamed back as SRM Institute of Science and Technology following the UGC request to drop \"University\" from the name.[3]', 'SRM Institute of Science and Technology', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `regno` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='USER ACCOUNT DETAILS';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`regno`, `name`, `email`, `password`, `year`, `dept`) VALUES
('RA1511003020155', 'Aiswarya Reddy', 'a.reddy@gmail.com', '8e9c9d74e6dbc8c28188678b7b97bab0', 3, 'Electronics and Communication Engineering'),
('RA1511003020410', 'Subhashree Navaneethan', 'n.subhasree@yahoo.in', '8e9c9d74e6dbc8c28188678b7b97bab0', 3, 'Mechanical Engineering'),
('RA1511003020892', 'Keerthana Kamesh', 'k.kamesh@gmail.com', '8e9c9d74e6dbc8c28188678b7b97bab0', 4, 'Aerospace Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloginfo`
--
ALTER TABLE `bloginfo`
  ADD PRIMARY KEY (`infoid`);

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloginfo`
--
ALTER TABLE `bloginfo`
  MODIFY `infoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
