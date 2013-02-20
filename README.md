Wish cms is an OpenSoure CMS

you need create your database manually at now



--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '#',
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--


-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `language` varchar(5) NOT NULL,
  `type` varchar(5) NOT NULL,
  `path` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `path` (`path`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

