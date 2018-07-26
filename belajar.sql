-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 11:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `content`) VALUES
(1, 'Honkai Impact 3rd', '1) Houkai (å´©å£Š)\r\n\r\nThe Earthâ€™s natural immune system. Houkai is a natural phenomena that awakes after a fixed period, visiting the civilization which has developed into an extend of harming the Earth itself. Zombie, Houkai Beasts and Lawman arise from Houkai are like leukocytes produced by the Earthâ€™s immune system.\r\n\r\nIts purpose is to end human kind civilization, just like the immunity of the human body. Mankind on the other hand, acts like pathogen, reacts and counters the Houkai, forcing it to produce stronger â€œanti-bodiesâ€. The result of this is an escalating war between Houkai and mankind, ultimately leading to a catastrophe ending the human race.\r\n\r\nHoukaiâ€™s first confirmed existence dates back to around 50,000 years ago. Mankind at that time still continued to fight against Houkai despite having much superior technology and fighting power compared to the present time, and paid a great price. Mankind now is on the verge of extinction.\r\n\r\n2) Houkai Energy\r\n\r\nHoukai Energy is a type of energy hidden within the Houkai, it defies all known natural laws. The unit for measuring Houkai energy is HW (Houkai Watt).\r\n\r\nWhen a Houkai event triggers, Houkai Energy will begin fill up the word. It affect and damages intellectual life forms, make it losing all reasons, becoming a zombie that attack all other creatures.\r\n\r\n3) The chosen one\r\n\r\nThe chosen one refer to the one who can resist or control Houkai Energy. One way to notice them is through the unique tattoos on their bodies called Stigmata.\r\n\r\n4) Shicksal (å¤©å‘½çµ„ç¹”)\r\n\r\nOne of many organization opposing â€œHoukaiâ€. Formed in 2000BC, the main goal of Shicksal is to eradicate â€œHoukaiâ€. It originated in Europe, but the organization has its branches across the world, and nowadays occupies the majority of its forces in Europe and Asia. Kianaâ€™s group is located in the Far East Branch.\r\n\r\n500 years ago, around the time when Kallen former fiance, Otto Apocalypse, rose up to the top of Schicksal, the organization internal corruption began spreading. By now most of the organization is within Ottoâ€™s control. Its goal is Kallenâ€™s resurrection while keeping its appearance as an organization of justice saving people from the Houkai beasts.\r\n\r\n Three branch families of Shicksal (å¤©å‘½å¾¡ä¸‰å®¶)\r\nRefers to the three families supporting the organization. The â€œApocalypse familyâ€ who administers the â€œBishopâ€, the â€œShania familyâ€ who is responsible for the â€œPriestessâ€, and the â€œKaslana familyâ€ who administers the â€œKnightâ€. Among them, the Shania family has excellent ability to control Houkai energy, the Kaslana family is born with good Houkai energy adaptability, however the Apocalypse family that governs the Shicksal has no power to fight the Houkai unlike other families.\r\n\r\n5) Nengentropy\r\n\r\nOne of the organizations opposing â€œHoukaiâ€, founded in 1955. Unlike Schicksal, its aim is to minimize the damage to humanity caused by Houkai by intentionally accelerating it. Originally, it was the Northern America branch of Shicksal but due to an disagreement with the main HQâ€™s policy, the two separated and now are in hostile conflict. When it comes to machinery/technology, Nengentropy far exceeds Schicksal. Currently all the mechanical unit in-game are the works of Nengentropy.\r\n\r\nNegentropy is affiliated with Raiden Ryouma â€˜s ME Corp and Cacaliaâ€™s orphanage.\r\n\r\n6) Lawmaker (å¾‹è€…)\r\n\r\nWhen a large amount Houkai Energy focuses on one individual having the capacity of storing it, a Lawmaker is born. They are regarded as the spokesman of the Houkai. When the Lawmaker body is formed, along with it forms a Lawmaker core. Having its own personality, the core is incompatible with humans, but on a Lawmaker zombie body will give them ability to reason compared with normal zombie.\r\n\r\nFurthermore, mankind now has the technology to raise an artificial Lawmaker by embedding the core of the Lawmaker or a fragment of  it into the body.\r\n\r\n1st Lawmaker:  Walter, the founder of Negentropy â€“ Himekoâ€™s father. His details is unknown. The Walter appears in the official manga is a clone\r\n2nd Lawmaker: Shirin. In the year 2000 in Siberia, Houkai War II, Kianaâ€™s mother, Cecilia Kaslana has fallen in battle while subjugating Shirin\r\n3rd Lawmaker: the Lightning Lawmaker â€“ Raiden Mei. Became a Lawmaker in Houkai War III in Choukuu City (é•·ç©ºå¸‚)\r\n4th Lawmaker: the Wind Lawmaker  â€“ Wendy\r\n7) Stigmata (è–ç—•)\r\n\r\nStigmata is the technology left by the civilization destroyed by Houkai about 50,000 years ago, genes for fighting against Houkai. Specifically, it involves with factors such as resistance to Houkai energy and control Houkai energy.\r\n\r\nThe chance for someone to have Houkai energy tolerance at the current age is around 1 in 1 million people, but only a few among then have stigmata and the ability to control Houkai energy.\r\n\r\nIn order to fight back Houkai, Schicksal analyzed the stigmata and established technology for transplanting artificial stigmata, but as a side effect, it would put a tremendous burden on the transplanted body and sharply decreases the life span.\r\n\r\n8) Valkyrja\r\n\r\nA disposable soldier who has a stigmata implanted and has the ability to convert collapsed energy into battle.\r\nMost Valkyrja are forced to have artificial stigmta transplanted due to having no natural resistance against Houkai since birth, so the side effects of the transplantation combined with constant battles slowly invades their body with Houkai energy.\r\nThe final end of being a Valkyrja is having the body reaching its limit, burning out without a trace by the Houkai energy in their body or lose all reasoning, turn into a zombie.\r\n\r\n9) Saint Freya Academy \r\n\r\nValkyrja school of the Far Eastern branch of Schicksal. The founder is Teresa Apocalypse.\r\nFollowing Theresaâ€™s belief, the school train Valkyrja and treat them as normal beings, including the Kiana group, to raise them without throwing them into senseless and inhumane battles. However, right under the school lies the laboratory that still run the 2nd Lawmaker Shirin project run by Otto, unknown to Theresa.\r\n\r\n9.1) Shirin Project\r\n\r\nThe project started in the year 2000 with its goal studying the space time control capability of Shirin â€“ the 2nd Lawmaker. The result of this project is the technology for space-time deceleration and complex number matrix dimension.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `birth_place`, `birth_date`, `gender`, `address`) VALUES
(24, 'Sigit Indrajaya', 'Sukabumi', '1995-02-11', 'Pria', 'Sukabumi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
