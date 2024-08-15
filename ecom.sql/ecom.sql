-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 03:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(200) NOT NULL,
  `author` varchar(25) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `author`, `keywords`, `title`, `price`, `image`, `description`, `category`) VALUES
(11, 'Ibrahim abb', 'Science fiction and fantasy', 'Prisons', 59, 'th.jpeg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">A book by Ibrahim Abbas characterized by fantasy</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">and scientific fiction When you read this novel will steal you time and you will not feel the extra hours in which this novel will</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">end you will merge with the story in all your entity and live in the world of imagination and gin The novel is smooth and simple </span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" and contains the element of excitement and attraction, the novel will become your friend in the other world and you will enjoy much the delight of fear and /em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;excitement that the novel suggests when you read about the gin and what this hidden world contains and what happens if the gin falls in love.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" />', 'Story and Novel'),
(17, 'Ali Jaber Alf', 'printed book', 'Because you are God.', 18, '465531.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Soon to be a major motion picture&mdash;Stephen King&rsquo;s terrifying, classic #1&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">New York Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;bestseller, &ldquo;a landmark in American literature&rdquo; (</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Chicago Sun-Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">)&mdash;about seven adults who return to their hometown to confront a nightmare they had first stumbled on as teenagers&hellip;an evil without a name:&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Welcome to Derry, Maine. It&rsquo;s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">They were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness. But the promise they made twenty-eight years ago calls them reunite in the same place where, as teenagers, they battled an evil creature that preyed on the city&rsquo;s children. Now, children are being murdered again and their repressed memories of that terrifying summer return as they prepare to once again battle the monster lurking in Derry&rsquo;s sewers.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Readers of Stephen King know that Derry, Maine, is a place with a deep, dark hold on the author. It reappears in many of his books, including&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Bag of Bones</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">,&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Hearts in Atlantis</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">, and&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">11/22/63</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">. But it all starts with&nbsp;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&ldquo;Stephen King&rsquo;s most mature work&rdquo; (</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">St. Petersburg Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">), &ldquo;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It&nbsp;</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">will overwhelm you&hellip; to be read in a well-lit room only&rdquo; (</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">Los Angeles Times</em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">).</span></p>', 'Islamic and religious'),
(18, '\'Toshikazu Kawaguchi\'', 'Before The Coffee Gets Cold,Literature and poetry, newly arrived best-selling,Story', 'Before The Coffee Gets Cold', 59, '5589000.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">The novel takes place in a café in Tokyo called \"Funiculi Vonicola\", located in a narrow back alley in the city. This café has a unique experience of going back in time to the time they choose within a set of rules. This experience is only available in one seat, but the customer will wait for the ghost who sits on this chair to go to the toilet, once back in time </span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\"> the customers cannot leave this seat, and they can only meet the people who visited this cafe in the past, but whatever happens in the past, it will not affect the present and change it. The most important requirement in this experiment is to return the customer to the present before cooling his cup of coffee .</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">(approximately one hour)</span></p>', 'literature and poetry'),
(19, '\'James Clea\'', 'Atomic Habits  ,\'James Clea', 'Atomic Habits ', 89, '517619.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">This can derail our decision making as well. The brain\r\noverestimates the danger of anything that seems like an immediate\r\nthreat but has almost no likelihood of actually occurring: your plane\r\ncrashing during a bit of turbulence, a burglar breaking in while\r\nyou’re home alone, a terrorist blowing up the bus you’re on.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp; &nbsp; &nbsp;Meanwhile, it underestimates what appears to be a distant threat\r\nbut is actually very likely: the steady accumulation of fat from\r\neating unhealthy food, the gradual decay of your muscles from\r\nsitting at a desk, the slow creep of clutter when you fail to tidy up.</span>', 'self-improvement'),
(20, 'Ahmed Al Hamdan', 'Arces , story ', 'Arces', 53, '888796898.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">You know what\'s worse than dying? It\'s the truth that awaits you inside. The novel is about a foreign object discovered in the sky.;</span><em style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\"></em><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;The Secret Research Department in Saudi Arabia works to address it and sends a team to explore this strange object, but a lot and a lot of surprises await them.</span>', 'Story and Novel'),
(21, ' Osama al-Muslimi', '\r\nOsama al-Muslimi , LG , Story ', 'LG ', 75, '9995096069.jpg', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">The sea...\r\nThat\'s the greatest secret.\r\nWhich hides more than it appears.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">It can be adoration or destruction for anyone who dives deep down or even floats on the surface.\r\nHe keeps his secrets firmly as a mother holding her only child.</span><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px;\">But this child from time to time escapes her holding hand to reveal some of his mother\'s invisibility to us.\r\n\"Lagg novel by Osama al-Muslimi\"\r\n\"Part I of the Seven Sea Series</span></p>', 'Story and Novel'),
(23, 'Edham Sharqawi', 'Best Selling, Islamic and Religious', 'Messages from the Quran', 72, '564030.jpg', '<p>A letter book from the Quran is one of the most beautiful books in interpreting some verses of the Holy Quran that help to heal.</p>\r\n<p>The book calls for reflection on the creation, creatures and human crises that pass through humans by conveying the experiences of the prophets and righteous ones mentioned in the Koran to us. </p> \r\n<p>The book illustrates the good morals mentioned in the Qur \'an, such as: good faith in God, patience for plaudits, tolerance and amnesty, honouring the guest, and other qualities. </p> ', 'Islamic and religious'),
(24, '\'Holly Jackson\'', 'Half, Girl,Friend, Chetan, Bhagat', 'Good Girl\'s Guide to Murder', 49, '65748398457.jpg', '<p>The plot follows an investigation carried out by 17-year old true crime enthusiast Pippa “Pip” Fitz-Amobi, a high school student in the fictional town of Little Kilton, Buckinghamshire  In the novel.</p>\r\n<p> Pip plans to investigate a five-year-old murder-suicide case involving the murder of popular student Andrea \"Andie\" Bell and the suicide of the perpetrator Salil \"Sal\" Singh under the guise of a school project. Her objectives are to exonerate Sal, who she is convinced was falsely accused of killing Andie Bell, and to uncover the true perpetrator, who Pip believes is still at large.</p>', 'Story and Novel'),
(25, '\'Gretchen Rubin\'', 'self , Better Than Before', 'Better Than Before-Mastering The Habits-of Our Everyday Lives', 55, '453109.jpg', '<p>\"Habits are the invisible architecture of our lives. Rubin provides an analytical and scientific framework from which to understand these habits--as well as change them for good. Infused with her compelling voice and funny stories, she illustrates the core principles of habit formation with dozens of strategies that she uses </p>\r\n<br>\r\n<p>\r\nherself and tests out on others. Rubin provides tools to help readers better understand themselves, and presents a clear, practical menu of strategies so readers can take an individualized approach. She tackles each strategy herself and in doing so shows us the importance of knowing ourselves and our own habit tendencies. </p>', 'self-improvement'),
(26, ' \'Tahereh Mafi\'', 'story , Unravel Me', 'Unravel Me', 49, '504121.jpg', '<p>The thrilling second installment in New York Times bestselling author Tahereh Mafi’s Shatter Me series.</p>\r\n<br>\r\n<p>It should have taken Juliette a single touch to kill Warner. But his mysterious immunity to her deadly power has left her shaken, wondering why her ultimate defense mechanism failed against the person she most needs protection from.</p>\r\n<br>\r\n<p>She and Adam were able to escape Warner’s clutches and join up with a group of rebels, many of whom have powers of their own. Juliette will finally be able to actively fight against The Reestablishment and try to fix her broken world. And perhaps these new allies can help her shed light on the secret behind Adam’s—and Warner’s—immunity to her killer skin..</p>', 'Story and Novel'),
(27, '\'Alex Michaelides\'', 'The Silent Patient , ', 'The Silent Patient -Only She Knows What Happened\r\n', 55, '550609.jpg', '<p> The Silent Patient is a 2019 psychological thriller novel written by British–Cypriot author Alex Michaelides. The successful debut novel was published by Celadon Books, a division of Macmillan Publishers, on 5 February 2019.The audiobook version, released on the same date, is read by Louise Brealey and Jack Hawkins.</p>\r\n<br> \r\n<p> The story is narrated by an English psychotherapist, Theo Faber, dealing with a patient who turns mute after murdering her husband. Upon its release, the book debuted on The New York Times Best Seller list at No. It later won the Goodreads Choice Award 2019 in the Mystery and Thriller category..</p>', 'literature and poetry'),
(28, ' \'Hector Garcia\'', 'lkigai ', 'lkigai - The Japanese Secret to a Long and Happy Life', 105, '488909.jpg', '<p>Bring meaning and joy to all your days with the internationally bestselling guide to ikigai.\r\n\r\nAccording to the Japanese, everyone has an ikigai--a reason for living</p>\r\n<br> \r\n<p>  And according to the residents of the Japanese island of Okinawa--home to the world’s longest-living people--finding it is the key to a happier and longer life.</p>', 'self-improvement'),
(29, '\'\'Atul Gawande\'', 'Better , Story ', 'Better - A Surgeon\'s Notes on Performance', 55, '510611.jpg', '<p>The struggle to perform well is universal: each one of us faces fatigue, limited resources, and imperfect abilities in whatever we do. But nowhere is this drive to do better more important than in medicine, where lives are on the line with every decision. In his new book, Atul Gawande explores how doctors strive to close the gap between best intentions and best performance in the face of obstacles that sometimes seem insurmountable. </p> \r\n<br> \r\n', 'Story and Novel');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `bookid` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`bookid`, `ip_add`, `quantity`) VALUES
(11, '::1', 0),
(19, '::1', 0),
(20, '::1', 0),
(21, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`) VALUES
('Islamic and religious'),
('literature and poetry'),
('self-improvement'),
('Story and Novel');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(200) NOT NULL,
  `cust_ip` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_ip`, `name`, `email`, `password`, `phone`) VALUES
(16, '::1', 'Dalal Hassan ', 'hh6208@hotmail.com', 'Da122345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `cat` FOREIGN KEY (`category`) REFERENCES `category` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
