-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2019 at 10:29 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `messmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE IF NOT EXISTS `chef` (
  `CHEF_ID` varchar(5) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(11) NOT NULL,
  `PHONE` int(15) NOT NULL,
  PRIMARY KEY (`CHEF_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`CHEF_ID`, `FIRSTNAME`, `LASTNAME`, `PHONE`) VALUES
('c003', 'jawad ali', 'ahmed', 2147483647),
('C014', 'AMIR', 'HASSAN', 2147483647),
('c002', 'ali', 'ahmed', 214748364),
('c008', 'zihaib', 'ahmed', 300332783);

-- --------------------------------------------------------

--
-- Table structure for table `currentmenu`
--

CREATE TABLE IF NOT EXISTS `currentmenu` (
  `DID` varchar(3) NOT NULL,
  `DISHES` varchar(16) NOT NULL,
  `PRICE` int(8) NOT NULL,
  `QUANTITY` int(5) NOT NULL,
  `DAY` varchar(8) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentmenu`
--

INSERT INTO `currentmenu` (`DID`, `DISHES`, `PRICE`, `QUANTITY`, `DAY`, `DATE`) VALUES
('D05', 'COFFEE WITHOUT ', 40, 0, '', '0000-00-00'),
('D06', 'PARATHA', 20, 56, '', '0000-00-00'),
('D07', 'CHICKEN PARATHA', 60, 77, '', '0000-00-00'),
('D08', 'ALU PARATHA ', 50, 89, '', '0000-00-00'),
('D09', 'OMELET', 20, 17, '', '0000-00-00'),
('D10', 'HALF FRY EGG', 20, 19, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

CREATE TABLE IF NOT EXISTS `dues` (
  `ALLOTMENTNO` int(5) NOT NULL,
  `MONEY` int(8) NOT NULL,
  `USERNAME` varchar(18) NOT NULL,
  `QUANTITY` int(5) NOT NULL,
  `ORDER` varchar(15) NOT NULL,
  KEY `ALLOTMENTNO` (`ALLOTMENTNO`),
  KEY `ALLOTMENTNO_2` (`ALLOTMENTNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dues`
--

INSERT INTO `dues` (`ALLOTMENTNO`, `MONEY`, `USERNAME`, `QUANTITY`, `ORDER`) VALUES
(4001, 48, 'tooba23', 1, 'COFFEE ii'),
(4001, 440, 'tooba23', 11, 'COFFEE WITHOUT ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FULL_NAME` varchar(20) NOT NULL,
  `COMMENTS` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `FULL_NAME`, `COMMENTS`) VALUES
(21, 'maghnoor', '            \r\n        good food'),
(23, '18TL28 ', '            \r\n        project you presented was good , was helpful for technical world  modern world it will save time and as well save the wastage  of paper , and the record would be safer â€¦ simply it was great'),
(22, 'sara', '            \r\n        good'),
(19, 'mahi', '            \r\n        gooddd'),
(20, 'Zubair Ahmed', '            \r\n        Fantastic Project.\r\nAll the Best'),
(24, '18tl14', '            \r\n        excellent '),
(25, 'Awais Rao', '            \r\n        the project was good'),
(26, 'munzah', 'Really appreciable. Parathay square na banaya karain bas :)'),
(27, 'sabrina', '            \r\n        great experience'),
(28, 'bilawal', '            \r\n        love it '),
(29, 'asad', '            \r\n        excelllent');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE IF NOT EXISTS `mainmenu` (
  `DID` varchar(3) NOT NULL,
  `DISHES` varchar(15) NOT NULL,
  `PRICE` int(5) NOT NULL,
  `QUANTITY` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`DID`, `DISHES`, `PRICE`, `QUANTITY`) VALUES
('D05', 'COFFEE WITHOUT ', 40, 0),
('D06', 'PARATHA', 20, 0),
('D07', 'CHICKEN PARATHA', 60, 0),
('D08', 'ALU PARATHA ', 50, 0),
('D09', 'OMELET', 20, 0),
('D10', 'HALF FRY EGG', 20, 0),
('D11', 'FRIED EGG WHITE', 20, 0),
('D12', 'BOILED EGG', 10, 0),
('D15', 'FRENCH TOAST', 40, 0),
('D13', 'BREAD', 5, 0),
('D14', 'TOAST', 5, 0),
('D16', 'CHICKEN KARHAI', 80, 0),
('D17', 'CHIKEN QAURMA', 80, 0),
('D18', 'CHICKEN NIHARI', 80, 0),
('D19', 'CHICKEN HALEEM', 80, 0),
('D20', 'CHCKEN WHITE KA', 90, 0),
('D21', 'CHICKEN BIRYANI', 80, 0),
('D22', 'CHOLA BIRYANI', 60, 0),
('D23', 'ALU BIRYANI', 60, 0),
('D24', 'CHICKEN FRIED R', 70, 0),
('D25', 'CHICKEN MANCHUR', 60, 0),
('D26', 'CHICKEN MACARON', 70, 0),
('D27', 'CHICKEN QEEMA', 80, 0),
('D28', 'ANDA QEEMA', 70, 0),
('D31', 'ALU FRY', 60, 0),
('D32', 'BHINDI FRY', 60, 0),
('D33', 'MIX SABZI', 60, 0),
('D34', 'SABZI TORI', 60, 0),
('D35', 'BENGAN', 50, 0),
('D36', 'KARELE', 50, 0),
('D37', 'MUNG KI DAAL', 40, 0),
('D38', 'DAAL MASH', 40, 0),
('D37', 'DAAL CHANA', 40, 0),
('D38', 'CHICKEN KABAB', 20, 0),
('D39', 'ALU KABAB', 20, 0),
('D40', 'WHITE RICE', 40, 0),
('D41', 'ROTI', 5, 0),
('D42', 'GREEN SALAD ', 20, 0),
('D43', 'DAHI', 20, 0),
('D44', 'RAITA', 30, 0),
('D45', 'MANGO SHAKE', 60, 0),
('D46', 'CHEEKU SHAKE', 60, 0),
('D47', 'STRABERRY SHAKE', 60, 0),
('D48', 'CHOCOLATE SHAKE', 60, 0),
('D49', 'ORANGE JUICE', 60, 0),
('D50', 'APPLE JUICE', 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `ALLOTMENNO` int(5) NOT NULL,
  `FIRST` varchar(8) NOT NULL,
  `LAST` varchar(8) NOT NULL,
  `ROOMNO` int(4) NOT NULL,
  PRIMARY KEY (`ALLOTMENNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`ALLOTMENNO`, `FIRST`, `LAST`, `ROOMNO`) VALUES
(4001, 'Mahnoor', 'Rasool', 107),
(4002, 'Rakhi', 'Rani', 113),
(4003, 'Eifa', 'Mughal', 202),
(4004, 'Sara', 'Aftab', 113),
(4005, 'Sabrina', 'Tahir', 201);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `RID` int(4) NOT NULL AUTO_INCREMENT,
  `FULLNAME` varchar(20) NOT NULL,
  `FATHERS` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `USERNAME` varchar(8) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `PHONE` int(15) NOT NULL,
  `GENDER` varchar(7) NOT NULL,
  `ALLOTMENTNO` int(5) NOT NULL,
  PRIMARY KEY (`RID`),
  KEY `ALLOTMENTNO` (`ALLOTMENTNO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`RID`, `FULLNAME`, `FATHERS`, `EMAIL`, `USERNAME`, `PASSWORD`, `PHONE`, `GENDER`, `ALLOTMENTNO`) VALUES
(18, 'munzah', 'osaf shah', 'munzah.shah00@gmail.', 'Munzah42', 'munzah12', 2147483647, 'female', 2062),
(12, 'sabrina', 'tahir', 'sabrina103@gmail.com', 'sabrina', '1234', 993442, 'female', 4003),
(10, 'rakhee', 'rani', 'rakhi55@gmail.com', 'rakhi55', '1234', 4452219, 'female', 4003),
(11, 'eifa', 'mughal', 'eifa21@gmail.com', 'eifa21', '1234', 33421567, 'female', 4004),
(13, 'afshan', 'hanif', 'afshan12@gmail.com', 'afshan64', '1234', 984123, 'female', 4002),
(14, 'tooba', 'frahim', 'tooba40@gmail.com', 'tooba40', '1234', 9756342, 'female', 4002),
(16, '124', '12434', 'sangizubair@gmail.co', '1244', 'qwerty', 0, 'male', 0),
(17, 'tooba', 'farahim', 'TOOB32@gmail.com', 'tooba23', '1234', 33098712, 'female', 4001),
(19, 'aiman', 'faiz', 'aimanfaiz@gmail.com', 'aiman123', '17cs63', 4356271, 'female', 1235),
(20, 'yasrab', 'niaz Ahmed', 'yasrab@gmail.com', 'yasrab41', '17sw41', 3341234, 'female', 7921);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
