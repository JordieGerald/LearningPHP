--
-- Database: `mvc`
--

CREATE DATABASE mvc
USE mvc

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data for table `users`
--
-- came up with the password by using php's md5 function, and parsed 'jenny', e.g. echo md5('jenny');
INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jenny', 'ebe6941ee8a10c14dc933ae37a0f43fc');