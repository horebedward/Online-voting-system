

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Administrator');



CREATE TABLE IF NOT EXISTS `nominees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org` varchar(60) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `course` varchar(60) NOT NULL,
  `year` varchar(3) NOT NULL,
  `stud_id` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;



INSERT INTO `nominees` (`id`, `org`, `pos`, `name`, `course`, `year`, `stud_id`) VALUES
(1, 'COMPUTER ENGINEERING SOCIETY', 'President', 'Ali Nawaz', 'CE', 'III', 'bsc02153005'),
(2, 'COMPUTER ENGINEERING SOCIETY', 'President', 'Waqar Yousaf', 'CE', 'III', 'bsc02153044'),
(3, 'COMPUTER ENGINEERING SOCIETY', 'Vice-President', 'Hamza Zahid', 'CE', 'III', 'bsc02153060'),
(4, 'COMPUTER ENGINEERING SOCIETY', 'Vice-President', 'Moeez Mazhar', 'CE', 'III', 'bsc02153049'),
(5, 'COMPUTER ENGINEERING SOCIETY', 'Secretary', 'Danyal Mustafa', 'CE', 'III', 'bsc02153008'),
(6, 'COMPUTER ENGINEERING SOCIETY', 'Secretary', 'Tamjeed Hur', 'CE', 'III', 'bsc02153048');


CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



INSERT INTO `organization` (`id`, `org`) VALUES
(1, 'COMPUTER ENGINEERING SOCIETY');



CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org` varchar(60) NOT NULL,
  `pos` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



INSERT INTO `positions` (`id`, `org`, `pos`) VALUES
(1, 'COMPUTER ENGINEERING SOCIETY', 'President'),
(2, 'COMPUTER ENGINEERING SOCIETY', 'Vice-President'),
(3, 'COMPUTER ENGINEERING SOCIETY', 'Secretary');



CREATE TABLE IF NOT EXISTS `voters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `course` varchar(60) NOT NULL,
  `year` varchar(3) NOT NULL,
  `stud_id` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



INSERT INTO `voters` (`id`, `name`, `course`, `year`, `stud_id`) VALUES
(1, 'Horeb Edward', 'CE', 'III', 'bsc02153017'),
(2, 'Ali Raza', 'CE', 'III', 'bsc02153057'),
(3, 'Arsalan Aslam', 'CE', 'III', 'bsc02153093');




CREATE TABLE IF NOT EXISTS `votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org` varchar(60) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;



INSERT INTO `votes` (`id`, `org`, `pos`, `candidate_id`, `voters_id`) VALUES
(1, 'COMPUTER ENGINEERING SOCIETY', 'President', 1, 1),
(2, 'COMPUTER ENGINEERING SOCIETY', 'Vice-President', 4, 1),
(3, 'COMPUTER ENGINEERING SOCIETY', 'Secretary', 5, 1),
(4, 'COMPUTER ENGINEERING SOCIETY', 'President', 1, 2),
(5, 'COMPUTER ENGINEERING SOCIETY', 'Vice-President', 3, 2),
(6, 'COMPUTER ENGINEERING SOCIETY', 'Secretary', 5, 2),
(7, 'COMPUTER ENGINEERING SOCIETY', 'President', 1, 3),
(8, 'COMPUTER ENGINEERING SOCIETY', 'Vice-President', 3, 3),
(9, 'COMPUTER ENGINEERING SOCIETY', 'Secretary', 5, 3);


