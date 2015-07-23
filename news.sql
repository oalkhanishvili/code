-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2015 at 09:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image_name`, `add_date`) VALUES
(3, 'პირველი', 'asgag', 'logo4.png', '2015-07-07 18:02:51'),
(4, 'მეორე', 'asgagasg', 'logo8.png', '2015-07-07 17:46:38'),
(5, 'მესამე', 'მეოთხე', 'logo8.png', '2015-07-07 18:52:15'),
(6, 'მეოთხე', 'მეოთხე', 'logo8.png', '2015-07-07 18:52:18'),
(7, 'მეხუთე', '\r\n0\r\ndown vote\r\nfavorite\r\nI have been searching on the web to find an answer to this question, but couldn''t find one. In my style.css I''m using @font-face to use a font (that I uploaded on the server of my webiste) on my website. I did the right thing, I think so, but the font still won''t show up on the website..\r\n\r\nMy code in style.css:', 'marilyn-monroe-new-york-dress-i21290.jpg', '2015-07-07 18:52:59'),
(8, 'მეშვიდე', '	\r\nRemember, if the answer helped you, mark it as solution :) –  Trebor Apr 27 ''14 at 18:55\r\n  	 	\r\nOh, congrats. If you wanna add your css to a folder and font to another, look: Just add the folder location before your font link in @font-face: @font-face { font-family: Brandon Grotesque; src: url(''../fonts/BGREG.otf''); } per example –  rafaeldefazio Apr 27 ''14 at 18:58 ', 'eco_think_green_icon.png', '2015-07-07 19:45:23'),
(9, 'მერვე', 'sagasga', 'fblogo.png', '2015-07-07 19:47:16'),
(10, 'სატესტოდ', 'Cross-browser rendering\r\nAs a best practice, we highly recommend using the <button> element whenever possible to ensure matching cross-browser rendering.\r\n\r\nAmong other things, there''s a bug in Firefox <30 that prevents us from setting the line-height of <input>-based buttons, causing them to not exactly match the height of other buttons on Firefox.', 'marlyn.png', '2015-07-07 21:25:38'),
(11, 'aagadg', 'asagasgga', 'jaja-5.jpg', '2015-07-10 23:11:24'),
(12, 'ayyhyyda', 'agsasgagags', 'jaja-51.jpg', '2015-07-10 23:11:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
