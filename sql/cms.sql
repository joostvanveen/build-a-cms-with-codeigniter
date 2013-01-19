-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2013 at 11:01 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `pubdate` date NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` VALUES(1, 'Chuck is on the Tutsplus team!', 'Chuck-is-on-the-Tutsplus-team', '2012-10-15', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-26 21:57:59', '2012-10-26 21:57:59');
INSERT INTO `articles` VALUES(2, 'Darth Vader kills ten at Deathstar Canteen', 'Darth-Vader-kills-ten-at-Deathstar-Canteen', '2012-10-31', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-26 21:58:33', '2012-11-01 18:38:49');
INSERT INTO `articles` VALUES(4, 'This week''s special: Penne Arabiata', 'This-weeks-special-Penne-Arabiata', '2012-10-27', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-29 17:34:41', '2012-10-29 17:34:41');
INSERT INTO `articles` VALUES(5, 'Vader: "I can kill you with a single tought"', 'Vader-I-can-kill-you-with-a-single-tought', '2012-10-26', '<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>', '2012-10-29 17:35:53', '2012-10-29 17:36:08');
INSERT INTO `articles` VALUES(6, 'Head of catering resigns', 'Head-of-catering-resigns', '2012-10-29', '<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-29 17:36:47', '2012-10-29 17:36:47');
INSERT INTO `articles` VALUES(7, 'Jeff Vader autographs', 'Jeff-Vader-autographs', '2012-10-29', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-29 17:37:40', '2012-10-29 17:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` VALUES('42aeb202bd08045cf6760b9a0c9e2348', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:16.0) Gecko/20100101 Firefox/16.0', 1351871956, '');
INSERT INTO `ci_sessions` VALUES('99f9b867cc0bb45d96ed3fd4bde6ec7a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:17.0) Gecko/20100101 Firefox/17.0', 1356442718, '');
INSERT INTO `ci_sessions` VALUES('cdf8b48d6630bc9304144aa8ff6e7cd4', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:16.0) Gecko/20100101 Firefox/16.0', 1352066404, 'a:5:{s:9:"user_data";s:0:"";s:4:"name";s:14:"Joost van Veen";s:5:"email";s:20:"joost@codeigniter.tv";s:2:"id";s:1:"2";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `version` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` VALUES(6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `order` int(11) unsigned NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `template` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` VALUES(1, 'Homepage', '', 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<ul>\n<li>One</li>\n<li>two</li>\n</ul>', 0, 'homepage');
INSERT INTO `pages` VALUES(3, 'Contact', 'contact', 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', 0, 'page');
INSERT INTO `pages` VALUES(4, 'About', 'about', 3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', 0, 'page');
INSERT INTO `pages` VALUES(5, 'News archive', 'News-archive', 4, '<p>This page will automatically display the news archive.</p>', 0, 'news_archive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(2, 'joost@codeigniter.tv', 'a6145bc0c2d356ff36a8e15c995b04dc877e8cc69f1a57defefc7de465ba4509118d0f77a08685318715c31d40cd38f61403bd317d7b1a37591643246d69d4a8', 'Joost van Veen');
INSERT INTO `users` VALUES(3, 'chucknorris@tutsplus.com', 'c5d67f50a18d13e56349d8d385944c6975e178555005ea8c12d003703d0139ccd1b92853858b91fd6688c9fa6c735d1dae9942e888727e735ca9e67f6f75a7e3', 'Chuck Norris');
