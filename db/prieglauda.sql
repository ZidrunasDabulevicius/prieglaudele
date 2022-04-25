-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 01:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prieglauda`
--

-- --------------------------------------------------------

--
-- Table structure for table `gyvunai`
--

CREATE TABLE `gyvunai` (
  `gyvunas_id` int(11) NOT NULL,
  `vartotojai_id` int(11) NOT NULL,
  `kategorija_id` int(11) NOT NULL,
  `amzius` float NOT NULL,
  `dokumentai` tinyint(1) NOT NULL,
  `vardas` varchar(40) NOT NULL,
  `nuotrauka` varchar(254) NOT NULL DEFAULT 'img/siluetas.jpg',
  `aprasas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gyvunai`
--

INSERT INTO `gyvunai` (`gyvunas_id`, `vartotojai_id`, `kategorija_id`, `amzius`, `dokumentai`, `vardas`, `nuotrauka`, `aprasas`) VALUES
(2, 3, 6, 7, 0, 'Mesė', 'img/Mese.jpeg', 'Neišpasakyto meilumo ir švelnumo. Tik glostyk ją, tik kalbink, tik stebėk. \r\n'),
(3, 3, 6, 3, 1, 'Pūkis', 'img/1_kate.jpg', 'Pukis labai mielas draugiškas, kuris labai mėgsta paglostukus, murkia. \r\n'),
(4, 2, 6, 2.5, 1, 'Juodis', 'img/2_kate.jpg', 'Jis labai puikus ir labai norime tikėti, kad atsiras šeimininkai, jį pamilsiantys avansu.\r\n'),
(6, 3, 6, 5, 0, 'Rainė', 'img/Rainė.jpg', 'Namuose gal prireisk laiko, bet pripratusi bus nuostabi draugė ir dėkinga už galimybę gyventi namuose, o ne po balkonu.\r\n'),
(7, 3, 6, 2, 1, 'Orionas', 'img/Orionas.jpg', 'Katinėlis nedrąsus, bijo būti liečiamas ir glostomas, galima paglostyti tik uodegos galiuką ar pėdutę pakutenti \r\n'),
(8, 3, 6, 1, 0, 'Saris', 'img/Saris.jpg', 'Jaunas, mėgstantis dūkti, žaisti gaudynių, moka užlipti aukštai.\r\n'),
(9, 3, 6, 2, 0, 'Atlantas', 'img/Atlantas.jpg', 'Alantas sveikas ir stiprus, paskiepytas ir kastruotas. Su nepažįstamais yra atsargus – jam reikia šiek tiek laiko priprasti prie žmogaus.\r\n'),
(10, 3, 7, 0.5, 0, 'Džiras', 'img/ziurkenas.jpg', 'Šiuo metu Žiurkėnas laukia naujų namų, jam 5 mėnesiai.\r\n'),
(11, 3, 7, 0.5, 0, 'Pikis', 'img/dekoratyvinis_kiskis.jpg', 'Dekoratyvinis kiškis vis dar yra kūdikis ir vis dar mokosi geresnių dalykų gyvenime – pavyzdžiui, kokios daržovės yra jo mėgstamiausias užkandis! \r\n'),
(12, 3, 7, 1, 0, 'Tikė ir Paikis', 'img/juru_kiaulytes.jpg', 'Šios mielosios yra įpratusios būti laikomos, mėgsta savo daržoves ir kartu ieško namų!\r\n'),
(13, 3, 7, 2, 0, 'Balis', 'img/siluetas.jpg', 'Šiuo metu prieglaudoje yra 2 metų vėžlys, kuris ieško saugių namų.\r\n'),
(14, 3, 7, 1, 0, 'Esme', 'img/Esme.jpg', 'Esme yra miela ir mėgsta leisti laiką kišenėje ar švarko rankovėse! \r\n'),
(15, 3, 7, 2, 0, 'Todas', 'img/Todas.jpg', 'Todui patinka, kai jam trinamas smakras, jis dievina savo naktines daržoves – nekantriai jų laukia! \r\n'),
(16, 3, 7, 0.5, 0, 'Lebuna', 'img/Lebuna.jpg', 'Lebuna mėgsta visas daržoves. Pripratusi gyventi aptvare. \r\n'),
(17, 3, 5, 3, 0, 'Džesė', 'img/1_suo.jpg', 'Turi daug energijos. Mėgsta žaist su žmogumi , labai nori dėmesio, veiksmo.\r\n\r\n'),
(18, 3, 5, 2, 0, 'Ūka', 'img/2_suo.jpg', 'Nuo prigimties baikšti šunytė jau drąsiai laksto po kiemelį, smalsiai viską uostinėja, draugauja su visais šuneliais ir prašo glamonių.\r\n'),
(19, 3, 5, 4, 0, 'Bela', 'img/3_suo.jpg', 'Šunytė labai linksma, nuotaikinga, mėgsta pasimaivyti ir vis prašyti keldama leteną daugiau paglostyti. \r\n'),
(20, 3, 5, 7, 0, 'Raideris', 'img/Nik.jpg', 'Augintas rūpestingai ir mylinčiai. Raideris buvo kiemo sargas, augintas lauke. \r\n'),
(21, 3, 5, 0.5, 0, 'Mikis', 'img/Mikis.jpg', 'Jaunas draugiškas, neišauklėtas, reikalauja daug dėmesio, tinka gyventi tik namuose, žaismingas\r\n\r\n'),
(22, 3, 5, 2, 0, 'Bagyra', 'img/Bagyra.jpg', 'Bagyra imli mokslams! Ieškomas šeimininkas, kuris norės tuos mokslus kartu su ja tęsti ir toliau!\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ivykiai`
--

CREATE TABLE `ivykiai` (
  `ivykiai_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `vartotojai_id` int(11) NOT NULL,
  `sql_string` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `kategorija_id` int(11) NOT NULL,
  `pavadinimas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`kategorija_id`, `pavadinimas`) VALUES
(5, 'Šuo'),
(6, 'Katė'),
(7, 'Kiti'),
(8, 'Roplys');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `vartotojai_id` int(11) NOT NULL,
  `vardas` varchar(40) NOT NULL,
  `pavarde` varchar(40) NOT NULL,
  `vartotojo_vardas` varchar(40) NOT NULL,
  `slaptazodis` varchar(40) NOT NULL,
  `elpastas` varchar(40) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`vartotojai_id`, `vardas`, `pavarde`, `vartotojo_vardas`, `slaptazodis`, `elpastas`, `admin`) VALUES
(1, 'admin', '', 'admin', 'Adminas Adminaitis', '', 1),
(2, 'Petras', 'Petraitis', 'petras123', 'petrauskas1646', 'petras@gmail.com', 0),
(3, 'Jonas', 'Jonaitis', 'jonas 234', 'jonauskas1646', 'jonas@gmail.com', 0),
(4, '', '', 'aa', '4124bc0a9335c27f086f24ba207a4912', 'aa@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gyvunai`
--
ALTER TABLE `gyvunai`
  ADD PRIMARY KEY (`gyvunas_id`),
  ADD KEY `vartotojai_id` (`vartotojai_id`),
  ADD KEY `kategorija_id` (`kategorija_id`);

--
-- Indexes for table `ivykiai`
--
ALTER TABLE `ivykiai`
  ADD PRIMARY KEY (`ivykiai_id`),
  ADD KEY `vartotojai_id` (`vartotojai_id`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`kategorija_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`vartotojai_id`),
  ADD UNIQUE KEY `vartotojo_vardas` (`vartotojo_vardas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gyvunai`
--
ALTER TABLE `gyvunai`
  MODIFY `gyvunas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ivykiai`
--
ALTER TABLE `ivykiai`
  MODIFY `ivykiai_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `kategorija_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `vartotojai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gyvunai`
--
ALTER TABLE `gyvunai`
  ADD CONSTRAINT `gyvunai_ibfk_1` FOREIGN KEY (`vartotojai_id`) REFERENCES `users` (`vartotojai_id`),
  ADD CONSTRAINT `gyvunai_ibfk_2` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorija` (`kategorija_id`);

--
-- Constraints for table `ivykiai`
--
ALTER TABLE `ivykiai`
  ADD CONSTRAINT `ivykiai_ibfk_1` FOREIGN KEY (`vartotojai_id`) REFERENCES `users` (`vartotojai_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
