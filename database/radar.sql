-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2016 at 09:30 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `radar`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idforum` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `info_news_id_news` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `approved` int(11) DEFAULT '0',
  `like` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idforum`, `username`, `comment`, `info_news_id_news`, `iduser`, `approved`, `like`) VALUES
(22, 'naquib555', 'Theres always been a passionate discussion among fans when it comes to which brand is superior, and with DCs and Marvels biggest movies.', 1, 3, 1, 0),
(23, 'naquib555', 'The Hollywood Reporter recently, and for his part the director isnt annoyed with the constant comparisons. Its like comparing Downton Abbey and Mr. Selfridge. Like Star Wars and Star Trek. Those are things that you could compare, but no one ever does. Tho', 1, 3, 1, 0),
(24, 'naquib555', 'If youre a fan of comic book heroes, its a good time to be alive. We are living in a golden age of superhero cinema right now, and while much of the credit for that deserves to go to Marvel, DC is about to join the party in a big way with Batman v Superma', 2, 3, 1, 0),
(25, 'naquib555', 'Another week, another slew of games news and this week Leon and I even have Hollywood courtroom drama. Watch now for everything you need to know about PlayStation VR, the latest in the Lindsay Lohan vs Rockstar lawsuit and a stack on info on Fallout 4s Au', 4, 3, 1, 0),
(26, 'naquib555', ' Instead, he said that he just happened to bump into one of the producers at a recording studio, the two got drinks, and he was told then that there would be no need for him to audition or work out a deal.', 3, 3, 1, 0),
(27, 'naquib555', ' Instead, he said that he just happened to bump into one of the producers at a recording studio, the two got drinks, and he was told then that there would be no need for him to audition or work out a deal.', 2, 3, 1, 0),
(28, 'jondoe', 'the latest in the Lindsay Lohan vs Rockstar lawsuit and a stack on info on Fallout 4s Automatron DLC coming next week.', 1, 4, 1, 0),
(29, 'jondoe', 'the latest in the Lindsay Lohan vs Rockstar lawsuit and a stack on info on Fallout 4s Automatron DLC coming next week.', 4, 4, 1, 0),
(30, 'jondoe', 'I had to re-audition for Metal Gear [Solid] 3 to play Naked Snake, Hayter told Game Informer on a recent podcast. They made me re-audition to play Old Snake', 3, 4, 1, 0),
(31, 'jondoe', 'Instead, he said that he just happened to bump into one of the producers at a recording studio, the two got drinks, and he was told then that there would be no need for him to audition or work out a deal.', 2, 4, 1, 0),
(32, 'jondoe', 'he Hollywood Reporter recently, and for his part the director isnt annoyed with the constant comparisons. Its like comparing Downton Abbey and Mr. Selfridge. Like Star Wars and Star Trek. Those are things that you could compare, but no one ever does.', 4, 4, 1, 0),
(33, 'zack12', 'Another week, another slew of games news and this week Leon and I even have Hollywood courtroom drama. Watch now for everything you need to know about PlayStation VR, the latest in the Lindsay Lohan vs Rockstar lawsuit and a stack on info on Fallout 4s Au', 1, 5, 1, 0),
(34, 'zack12', 'Another week, another slew of games news and this week Leon and I even have Hollywood courtroom drama. Watch now for everything you need to know about PlayStation VR, the latest in the Lindsay Lohan vs Rockstar lawsuit and a stack on info on Fallout 4s Au', 4, 5, 1, 0),
(35, 'zack12', 'I heard that Kojima asked one of the producers on Metal Gear [Solid] 3 to ask Kurt Russell if he would take over for that game. When it came time for development on Metal Gear Solid: Ground Zeroes and The Phantom Pain, Hayter was not formally informed tha', 3, 5, 1, 0),
(36, 'zack12', 'Snyder was asked about the debate while chatting to The Hollywood Reporter recently, and for his part the director isnt annoyed with the constant comparisons. Its like comparing Downton Abbey and Mr. Selfridge. Like Star Wars and Star Trek. Those are thin', 4, 5, 1, 0),
(37, 'naquib555', 'Theres always been a passionate discussion among fans when it comes to which brand is superior, and with DCs and Marvels biggest movies coming out within a month of each other tensions have rarely been higher. Snyder was asked about the debate while chatt', 2, 3, 0, 0),
(38, 'admin', 'Another week', 1, 1, 0, 0),
(39, 'jac', 'jnuhvvtu', 1, 13, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `info_news`
--

CREATE TABLE `info_news` (
  `id_news` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_short_description` text NOT NULL,
  `news_content` text NOT NULL,
  `news_author` varchar(120) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `news_published` DateTime DEFAULT CURRENT_TIMESTAMP,
  `hitcount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info_news`
--

INSERT INTO `info_news` (`id_news`, `news_title`, `news_short_description`, `news_content`, `news_author`, `image_path`, `news_published`, `hitcount`) VALUES
(1, 'Heres what Zack Snyder thinks about the Marvel vs DC debate', 'If youre a fan of comic book heroes, its a good time to be alive. We are living in a golden age of superhero cinema right now, and while much of the credit for that deserves to go to Marvel, DC is about to join the party in a big way with Batman v Superman: Dawn of Justice later this month.', 'Theres always been a passionate discussion among fans when it comes to which brand is superior, and with DCs and Marvels biggest movies coming out within a month of each other tensions have rarely been higher. Snyder was asked about the debate while chatting to The Hollywood Reporter recently, and for his part the director isnt annoyed with the constant comparisons. Its like comparing Downton Abbey and Mr. Selfridge. Like Star Wars and Star Trek. Those are things that you could compare, but no one ever does. Those [DC versus Marvel] conversations are fun for the Internet. But in truth, it represents such a small group of people who are actually versed in the difference between DC and Marvel. The average moviegoer doesn’t know. Like my dad would be, ‘Is Spider-Man ever going to be in any of your films', 'Amon Warman', 'uploads/bvs.jpg', '2016-03-10 02:30:55', 174),
(2, 'Heres what Zack Snyder thinks about the Marvel vs DC debate', 'If youre a fan of comic book heroes, its a good time to be alive. We are living in a golden age of superhero cinema right now, and while much of the credit for that deserves to go to Marvel, DC is about to join the party in a big way with Batman v Superman: Dawn of Justice later this month.', 'Theres always been a passionate discussion among fans when it comes to which brand is superior, and with DCs and Marvels biggest movies coming out within a month of each other tensions have rarely been higher. Snyder was asked about the debate while chatting to The Hollywood Reporter recently, and for his part the director isnt annoyed with the constant comparisons. Its like comparing Downton Abbey and Mr. Selfridge. Like Star Wars and Star Trek. Those are things that you could compare, but no one ever does. Those [DC versus Marvel] conversations are fun for the Internet. But in truth, it represents such a small group of people who are actually versed in the difference between DC and Marvel. The average moviegoer doesn’t know. Like my dad would be, ‘Is Spider-Man ever going to be in any of your films', 'Amon Warman', 'uploads/bvs2.jpg', '2016-03-10 02:30:55', 44),
(3, 'Fallout 4s Automatron DLC, PlayStation VR and Lindsay Lohan vs Rockstar - The Wrap Up', 'Another week, another slew of games news and this week Leon and I even have Hollywood courtroom drama. Watch now for everything you need to know about PlayStation VR, the latest in the Lindsay Lohan vs Rockstar lawsuit and a stack on info on Fallout 4s Automatron DLC coming next week.', 'GR+ news lead Louise is a fan of all things Bat and Assassin shaped. She can often be found watching horror, drinking coffee and beating you at The Binding Of Isaac: Rebirth.', 'Louise Blain', 'uploads/fallout.jpg', '2016-03-21 12:19:57', 55),
(4, 'Metal Gear Solid 5 wasnt the first time Konami tried to replace David Hayter', 'Metal Gear Solid fans were conflicted when it was revealed that longtime veteran voice actor David Hayter would no longer be playing the role of Snake - by which I mean Naked Snake, AKA Big Boss, and his clone, Solid Snake. But Metal Gear Solid 5: The Phantom Pain and its standalone prequel, Ground Zeroes, werent the first time Hayter was set to be cut.', 'I had to re-audition for Metal Gear [Solid] 3 to play Naked Snake, Hayter told Game Informer on a recent podcast. They made me re-audition to play Old Snake, and the whole time, they were trying to find somebody else to do it. I heard that Kojima asked one of the producers on Metal Gear [Solid] 3 to ask Kurt Russell if he would take over for that game. When it came time for development on Metal Gear Solid: Ground Zeroes and The Phantom Pain, Hayter was not formally informed that he had been replaced. Instead, he said that he just happened to bump into one of the producers at a recording studio, the two got drinks, and he was told then that there would be no need for him to audition or work out a deal.', 'Sam Prell', 'uploads/9f2873651056bdef95ced8b2a779fe38-1200-80.jpg', '2016-03-26 17:32:06', 124),
(6, 'Gal Gadots Wonder Woman will be more naive and pure in standalone movie', 'Directed by Patty Jenkins and starring Gal Gadot, Chris Pine, Lucy Davis, Connie Nielsen, Robin Wright, Lisa Loven Kongsli, Danny Huston, David Thewlis, and SaÃ¯d Taghmaoui, Wonder Woman will open in cinemas on June 23, 2017', 'Although the critical consensus on Batman v Superman: Dawn of Justice is largely negative, theres at least one thing that most reviewers agree on - Gal Gadots Wonder Woman is one of the films highlights. We got a little bit of information on the Princess of Themysciras backstory during Zack Snyders film, but well be learning a lot more about the character in her solo feature next year.That film will take place long before the events in Batman v Superman - World War I to be exact - and as such, there are going to be some big differences between the Wonder Woman we were just introduced to and the Wonder Woman of 1910. In the standalone Wonder Woman movie, its the first time were going to tell the coming of age of Wonder Woman and Im going to go back in time, Im going to travel back in time, Gadot told IGN. Wonder Woman [in the solo film] is different than the one youre going to see in Batman v Superman. Shes more naive and pure and shes this young idealist who does not understand the complexities of men and life, whereas in BvS shes super, shes very experienced and its been such am amazing creative process.Devolving a character would be an interesting challenge for any actress, and Im curious to see how Gadot handles it. Im also curious to see what event made Wonder Woman turn her back on mankind for 100 years, an interesting tidbit that the character reveals in Batman v Superman.\r\nBut most of all, Im just really looking forward to seeing Wonder Woman finally getting her due. Its been a long time coming, so heres hoping Patty Jenkins and co knock this one out of the park.', 'Amon Warmann', 'uploads/4104ca72255fcc355ef03e51f759904b-1200-80.jpg', '2016-03-31 02:03:52', 68);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idlogin`, `username`, `password`, `usertype`, `active`, `firstname`, `lastname`, `email`) VALUES
(1, 'admin', 'admin', 0, 1, 'Mike', 'Borg', 'admin@gmail.com'),
(3, 'naquib555', '5', 1, 1, 'Ahmad', 'Naquib', 'naquib555@gmail.com'),
(4, 'jondoe', 'j', 1, 1, 'Jon', 'Doe', 'jon@gmail.com'),
(5, 'zack12', 'z', 1, 1, 'Zack', 'Synder', 'zack@gmail.com'),
(13, 'jac', 'a', 1, 1, 'Jack', 'as', 'ashiq@gm.com'),
(14, 'mike5', 'mike', 1, 0, 'Mike', 'Denvas', 'mike@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `idreply` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `reply` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `comment_idforum` int(11) NOT NULL,
  `comment_info_news_id_news` int(11) NOT NULL,
  `approved` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`idreply`, `username`, `reply`, `iduser`, `comment_idforum`, `comment_info_news_id_news`, `approved`) VALUES
(4, 'naquib555', 'The Hollywood Reporter recently, and for his part the director isnt annoyed with the constant comparisons. Its like comparing Downton Abbey.', 3, 33, 1, 1),
(5, 'zack12', 'Those [DC versus Marvel] conversations are fun for the Internet. But in truth, it represents such a small group of people who are actually versed in the difference between DC and Marvel.', 5, 33, 1, 1),
(6, 'admin', 'uhuhh', 1, 33, 1, 0),
(7, 'jac', 'uhnini', 13, 33, 1, 0),
(8, 'jac', 'abc', 13, 33, 1, 1),
(9, 'jac', 'everything you need to know about', 13, 33, 1, 1),
(10, 'jac', 'hhhhhhhhhhhhh hhhhhhhhhhhh hhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh hhh hhhhhhhhhhhhhhh hhhhhhhhhhhhhhhhhhhhhhhhh shhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 13, 33, 1, 1),
(11, 'jac', 'hhhhhhhhhhhhhhhhhhhhdddddddddddddddddddddhhhhhhhhhhhhhhhhhhhhdddddddddddddddddddddhhhhhhhhhhhhhhhhhhhhdddddddddddddddddddddhhhhhhhhhhhhhhhhhhhhdddddddddddddddddddddhhhhhhhhhhhhhhhhhhhhdddddddddddddddddddddhhhhhhhhhhhhhhhhhhhhdddddddddddddddddddddhhhhhhhhh', 13, 33, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idforum`,`info_news_id_news`),
  ADD KEY `fk_comment_info_news1_idx` (`info_news_id_news`);

--
-- Indexes for table `info_news`
--
ALTER TABLE `info_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`idreply`,`comment_idforum`,`comment_info_news_id_news`),
  ADD KEY `fk_reply_comment1_idx` (`comment_idforum`,`comment_info_news_id_news`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idforum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `info_news`
--
ALTER TABLE `info_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `idreply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_info_news1` FOREIGN KEY (`info_news_id_news`) REFERENCES `info_news` (`id_news`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `fk_reply_comment1` FOREIGN KEY (`comment_idforum`,`comment_info_news_id_news`) REFERENCES `comment` (`idforum`, `info_news_id_news`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
