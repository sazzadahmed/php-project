-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 01:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `per_info`
--

CREATE TABLE `per_info` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `birth_of_date` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `maritalstatus` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `present_address` varchar(2550s) NOT NULL,
  `permanent_address` varchar(2550) NOT NULL,
  `emailtext` varchar(255) NOT NULL,
  `facebookid` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `professionalexperience` varchar(2550) NOT NULL,
  `personalskill` varchar(2550) NOT NULL,
  `technicalskill` varchar(2550) NOT NULL,
  `languageproficiency` varchar(2550) NOT NULL,
  `interest` varchar(2550) NOT NULL,
  `refername` varchar(255) NOT NULL,
  `referprofession` varchar(255) NOT NULL,
  `refercontact` varchar(255) NOT NULL,
  `referaddress` varchar(2550) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `examdatessc` varchar(255) NOT NULL,
  `resultssc` varchar(255) NOT NULL,
  `divisionssc` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `examdatehsc` varchar(255) NOT NULL,
  `resulthsc` varchar(255) NOT NULL,
  `divisionhsc` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `examdategraduate` varchar(255) NOT NULL,
  `resultgraduate` varchar(255) NOT NULL,
  `divisiongraduate` varchar(255) NOT NULL,
  `universitypost` varchar(255) NOT NULL,
  `examdatepostgraduate` varchar(255) NOT NULL,
  `resultpostgraduate` varchar(255) NOT NULL,
  `divisionpostgraduate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_info`
--

INSERT INTO `per_info` (`id`, `name`, `email`, `contact`, `father_name`, `mother_name`, `birth_of_date`, `gender`, `maritalstatus`, `nationality`, `religion`, `present_address`, `permanent_address`, `emailtext`, `facebookid`, `media`, `professionalexperience`, `personalskill`, `technicalskill`, `languageproficiency`, `interest`, `refername`, `referprofession`, `refercontact`, `referaddress`, `schoolname`, `examdatessc`, `resultssc`, `divisionssc`, `collegename`, `examdatehsc`, `resulthsc`, `divisionhsc`, `university`, `examdategraduate`, `resultgraduate`, `divisiongraduate`, `universitypost`, `examdatepostgraduate`, `resultpostgraduate`, `divisionpostgraduate`) VALUES
(3, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', 'asdf', 'dfas', ' fasd', ' fasd', ' asdf', ' sdaf', ' sdaf', 'sadf', 'asdf', 'asf', 'fads', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', 'asdf', 'dfas', ' fasd', ' fasd', ' asdf', ' sdaf', ' sdaf', 'sadf', 'asdf', 'asf', 'fads', 'sa', 'asf', 'saf', 'science', 'asdf', 'asdf', 'dasf', 'science', '', '', '', '', '', '', '', ''),
(9, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', 'asdf', 'dfas', ' fasd', ' fasd', ' asdf', ' sdaf', ' sdaf', 'sadf', 'asdf', 'asf', 'fads', 'sa', 'asf', 'saf', 'science', 'asdf', 'asdf', 'dasf', 'science', '', '', '', '', '', '', '', ''),
(10, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', 'asdf', 'dfas', ' fasd', ' fasd', ' asdf', ' sdaf', ' sdaf', 'sadf', 'asdf', 'asf', 'fads', 'sa', 'asf', 'saf', 'science', 'asdf', 'asdf', 'dasf', 'science', '', '', '', '', '', '', '', ''),
(11, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', 'asdf', 'dfas', ' fasd', ' fasd', ' asdf', ' sdaf', ' sdaf', 'sadf', 'asdf', 'asf', 'fads', 'sa', 'asf', 'saf', 'science', 'asdf', 'asdf', 'dasf', 'science', 'banglai', 'asfd', 'sdaf', 'science', 'fasdf', 'asdf', 'sadf', 'science'),
(12, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', 'asdf', 'dfas', ' fasd', ' fasd', ' asdf', ' sdaf', ' sdaf', 'sadf', 'asdf', 'asf', 'fads', 'sa', 'asf', 'saf', 'science', 'asdf', 'asdf', 'dasf', 'science', 'banglai', 'asfd', 'sdaf', 'science', 'fasdf', 'asdf', 'sadf', 'science'),
(13, 'asfasdfasdf', 'sazzadahmed41@gmail.com', 'sdaf', 'asdf', 'fasdf', '2017-04-28', 'male', 'married', 'bangladeshi', 'islam', 'dsaf', 'dsaf', 'saf', 'asdf', 'dfas', ' fasd', ' fasd', ' asdf', ' sdaf', ' sdaf', 'sadf', 'asdf', 'asf', 'fads', 'sa', 'asf', 'saf', 'science', 'asdf', 'asdf', 'dasf', 'science', 'banglai', 'asfd', 'sdaf', 'science', 'fasdf', 'asdf', 'sadf', 'science'),
(14, 'sazzadAhmed', 'sazzadahmed41@gmail.comcombination', '0135345345', 'sadfasdf', 'asfsdf', '2017-05-02', 'female', 'unmarried', 'others', 'christ', 'Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe expl', 'Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe expl', 'no', '53454', '325', ' asdfasd', ' dsfasf', ' asfda', ' asdfas', ' Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe exp', 'sdafas', 'asfsda', 'sdff', 'Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe expl', 'fdasf', 'asfsdf', 'asf', 'arts', 'sdfasdf', 'asdfas', 'safaf', 'commerce', 'asdfassdfas', 'fsdas', 'asfdf', 'commerce', 'fasdfas', 'asfdasf', 'asf', 'commerce'),
(15, 'sazzadAhmed', 'sazzadahmed41@gmail.comcombination', '0135345345', 'sadfasdf', 'asfsdf', '2017-05-02', 'female', 'unmarried', 'others', 'christ', 'Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe expl', 'Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe expl', 'no', '53454', '325', ' asdfasd', ' dsfasf', ' asfda', ' asdfas', ' Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe exp', 'sdafas', 'asfsda', 'sdff', 'Text documents often contain valuable structured data that\r\nis hidden in regular English sentences. This data is best exploited\r\nif available as a relational table that we could use for\r\nanswering precise queries or for running data mining tasks.\r\nWe expl', 'fdasf', 'asfsdf', 'asf', 'arts', 'sdfasdf', 'asdfas', 'safaf', 'commerce', 'asdfassdfas', 'fsdas', 'asfdf', 'commerce', 'fasdfas', 'asfdasf', 'asf', 'commerce'),
(16, 'fsadadf', 'sazzadahmed41@gmail.com', 'dsfa', 'sdaf', 'dsaf', '2017-05-25', 'male', 'married', 'bangladeshi', 'islam', 'sdfa', 'sdfa', 'fsadf', 'fsadf', 'sdfa', ' sdfa', ' dsfdas', ' fsad', ' dfsasd', ' dasf', 'asdf', 'sdaf', 'sadf', 'sfdsad', 'fdsaf', 'sadf', 'sdaf', 'arts', 'fdsaf', 'dsfa', 'dsaf', 'science', 'sadf', 'sadf', 'sdfasa', 'science', 'safsda', 'sdaf', 'dsaf', 'science'),
(17, 'fsadadf', 'sazzadahmed41@gmail.com', 'dsfa', 'sdaf', 'dsaf', '2017-05-25', 'male', 'married', 'bangladeshi', 'islam', 'sdfa', 'sdfa', 'fsadf', 'fsadf', 'sdfa', ' sdfa', ' dsfdas', ' fsad', ' dfsasd', ' dasf', 'asdf', 'sdaf', 'sadf', 'sfdsad', 'fdsaf', 'sadf', 'sdaf', 'arts', 'fdsaf', 'dsfa', 'dsaf', 'science', 'sadf', 'sadf', 'sdfasa', 'science', 'safsda', 'sdaf', 'dsaf', 'science'),
(18, 'sdfsadf', 'sazzadahmed41@gmail.com', 'asfdas', 'sadf', 'sdfa', '2017-05-24', 'female', 'married', 'bangladeshi', 'islam', 'dfasf', 'dfasf', 'sadfas', 'safsd', 'dsaf', ' sadf', ' sdfa', ' sfasd', ' dfassa', ' fasds', 'dsaf', 'dsfa', 'dsf', 'dsfa', 'sadf', 'dsaf', 'sdaf', 'science', 'fsdaf', 'sfasd', 'safdsa', 'science', 'fsdaf', 'fsdaf', 'sdf', 'science', 'asdf', 'fdsaf', 'dasf', 'commerce'),
(19, 'sdfsadf', 'sazzadahmed41@gmail.com', 'asfdas', 'sadf', 'sdfa', '2017-05-24', 'female', 'married', 'bangladeshi', 'islam', 'dfasf', 'dfasf', 'sadfas', 'safsd', 'dsaf', ' sadf', ' sdfa', ' sfasd', ' dfassa', ' fasds', 'dsaf', 'dsfa', 'dsf', 'dsfa', 'sadf', 'dsaf', 'sdaf', 'science', 'fsdaf', 'sfasd', 'safdsa', 'science', 'fsdaf', 'fsdaf', 'sdf', 'science', 'asdf', 'fdsaf', 'dasf', 'commerce'),
(20, 'sdfsadf', 'sazzadahmed41@gmail.com', 'asfdas', 'sadf', 'sdfa', '2017-05-24', 'female', 'married', 'bangladeshi', 'islam', 'dfasf', 'dfasf', 'sadfas', 'safsd', 'dsaf', ' sadf', ' sdfa', ' sfasd', ' dfassa', ' fasds', 'dsaf', 'dsfa', 'dsf', 'dsfa', 'sadf', 'dsaf', 'sdaf', 'science', 'fsdaf', 'sfasd', 'safdsa', 'science', 'fsdaf', 'fsdaf', 'sdf', 'science', 'asdf', 'fdsaf', 'dasf', 'commerce'),
(21, 'sdfsadf', 'sazzadahmed41@gmail.com', 'asfdas', 'sadf', 'sdfa', '2017-05-24', 'female', 'married', 'bangladeshi', 'islam', 'dfasf', 'dfasf', 'sadfas', 'safsd', 'dsaf', ' sadf', ' sdfa', ' sfasd', ' dfassa', ' fasds', 'dsaf', 'dsfa', 'dsf', 'dsfa', 'sadf', 'dsaf', 'sdaf', 'science', 'fsdaf', 'sfasd', 'safdsa', 'science', 'fsdaf', 'fsdaf', 'sdf', 'science', 'asdf', 'fdsaf', 'dasf', 'commerce'),
(22, 'sdfsda', 'sdaf@sdf', 'dsf', 'asdf', 'fsad', '2017-05-26', 'male', 'married', 'bangladeshi', 'islam', 'sadf', 'sadf', 'saf', 'dfs', 'sadf', ' sdaf', ' fsda', ' dfsa', ' sadf', ' sdaf', 'sdaf', 'sdfa', 'asf', 'sadf', 'sdfa', 'sdf', '45', 'science', 'sfd', 'sdf', '154', 'science', 'asdf', 'sdf', '45', 'science', 'sdf', 'sdf', '45', 'arts'),
(23, 'sdfsda', 'sdaf@sdf', 'dsf', 'asdf', 'fsad', '2017-05-26', 'male', 'married', 'bangladeshi', 'islam', 'sadf', 'sadf', 'saf', 'dfs', 'sadf', ' sdaf', ' fsda', ' dfsa', ' sadf', ' sdaf', 'sdaf', 'sdfa', 'asf', 'sadf', 'sdfa', 'sdf', '45', 'science', 'sfd', 'sdf', '154', 'science', 'asdf', 'sdf', '45', 'science', 'sdf', 'sdf', '45', 'arts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `per_info`
--
ALTER TABLE `per_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `per_info`
--
ALTER TABLE `per_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
