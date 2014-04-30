
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 10:28 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `author` varchar(120) NOT NULL,
  `description` varchar(240) NOT NULL,
  `isbn` varchar(80) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `title`, `author`, `description`, `isbn`) VALUES
(1, 'Alice''s Adventures in Wonderland', 'Lewis Carroll', 'Alice in Wonderland was written for children. It is a humorous fantasy novel about a child’s dream world with strange people and animals. The language used is simple and the book contains drawings to make it fun to read. ', '0553213458'),
(2, 'The Grapes of Wrath', 'John Steinbeck', 'First published in 1939, Steinbeck’s Pulitzer Prize winning epic of the Great Depression chronicles the Dust Bowl migration of the 1930s and tells the story of one Oklahoma farm family, the Joads, driven from their homestead.', '0756971004'),
(3, 'East of Eden', 'John Steinbeck', ' Set in the rich farmland of California''s Salinas Valley, this sprawling and often brutal novel follows the intertwined destinies of two families—the Trasks and the Hamiltons—whose generations helplessly reenact the fall of Adam and Eve and', '0670033049'),
(4, 'For Whom the Bell Tolls', 'Ernest Hemingway', 'The story of Robert Jordan, a young American in the International Brigades attached to an antifascist guerilla unit in the mountains of Spain, it tells of loyalty and courage, love and defeat, and the tragic death of an ideal. ', '0684830485'),
(5, 'The Ocean at the End of the Lane', 'Neil Gaiman', 'A brilliantly imaginative and poignant fairy tale from the modern master of wonder and terror, The Ocean at the End of the Lane is Neil Gaiman’s first new novel for adults since his #1 New York Times bestseller Anansi Boys', '0062255657'),
(6, 'Capital in the Twenty-First Century', 'Thomas Piketty', 'What are the grand dynamics that drive the accumulation and distribution of capital? Questions about the long-term evolution of inequality, the concentration of wealth, and the prospects for economic growth lie at the heart of politics.', '067443000X'),
(7, 'Flash Boys: A Wall Street Revolt', 'Michael Lewis', 'Flash Boys is about a small group of Wall Street guys who figure out that the U.S. stock market has been rigged for the benefit of insiders and that, post–financial crisis, the markets have become not more free but less, and more control.', '0393244660');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
