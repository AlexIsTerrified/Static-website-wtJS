CREATE DATABASE IF NOT EXISTS `form` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `form`;



CREATE TABLE `appointments` (
  `ID` int(11) DEFAULT NULL,
  `transcation` varchar(255) DEFAULT NULL,
  `classification` varchar(255) DEFAULT NULL,
  `use` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `maidenname` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `street1` varchar(255) DEFAULT NULL,
  `city1` varchar(255) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `ttdrivingpermit` varchar(255) DEFAULT NULL,
  `ttprevpermit` varchar(255) DEFAULT NULL,
  `issuenumber` varchar(255) DEFAULT NULL,
  `issuedate` varchar(255) DEFAULT NULL,
  `issueclass` varchar(255) DEFAULT NULL,
  `iprevpermit` varchar(255) DEFAULT NULL,
  `particulars` varchar(255) DEFAULT NULL,
  `dispermit` varchar(255) DEFAULT NULL,
  `disparticulars` varchar(255) DEFAULT NULL,
  `quapermit` varchar(255) DEFAULT NULL,
  `appointment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `appointments` (`ID`, `transcation`, `classification`, `use`, `surname`, `firstname`, `middlename`, `maidenname`, `sex`, `birthplace`, `birthdate`, `nationality`, `street`, `city`, `email`, `phone`, `street1`, `city1`, `email1`, `phone1`, `ttdrivingpermit`, `ttprevpermit`, `issuenumber`, `issuedate`, `issueclass`, `iprevpermit`, `particulars`, `dispermit`, `disparticulars`, `quapermit`, `appointment`) VALUES
(1669074474, 'Renewal', 'Light Motor Vehicle', 'Hiring Car/Taxi', 'lkkejg', 'lgkdhnlwk', 'ghnwlk', 'legknelk', 'male', 'lkgnw', '4933-03-09', 'lsktnlwk', 'sgkn', 'lkgnlk', 'nlkn@g.com', '(356) 464 - 6784', '', '', '', '', 'Yes', 'Yes', '', '', '', 'No', '', 'Yes', '', 'Yes', '0'),
(1669075586, 'Duplicate', 'Motocycle', 'Private', 'dgkln', 'lkbdl', '', '', 'male', 'dgmndln', '2000-03-03', 'dgkng', 'ldkgnl', 'lkgnldnqllk', 'lknglkdn@g.com', '(538) 975 - 3839', '', '', '', '', 'No', 'Yes', '2424024', '', '', 'No', '', 'No', '', 'Yes', 'Tuesday 6th December 2022');

