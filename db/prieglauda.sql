-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 02:18 PM
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
  `nuotrauka` varchar(254) NOT NULL,
  `aprasas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gyvunai`
--

INSERT INTO `gyvunai` (`gyvunas_id`, `vartotojai_id`, `kategorija_id`, `amzius`, `dokumentai`, `nuotrauka`, `aprasas`) VALUES
(2, 2, 5, 1.5, 0, 'img/2.jpg', 'Turi daug energijos. Mėgsta žaist su žmogumi , labai nori dėmesio, veiksmo . Su kitais šunim komplikuota. Iš pradžių gali žaisti, bet jei kažkas nepatiks – “kibs į atlapus”, tad su kitu šunimi galėtų bendrauti tik akylai stebima šeimininkų.\r\n'),
(3, 3, 6, 2.5, 1, 'img/3a.jpg', 'Dabar katinas šiek tiek baikštesnis per pirmą kontaktą, bet apsipratęs rodo tikrąjį savo charakteris. Iš tikro katinas labai mielas draugiškas, kuris labai mėgsta paglostukus, murkia. Jam tik reikia kantraus šeimininko ir turėsite puikų kompanioną.\r\n'),
(4, 2, 7, 4.5, 1, '', ''),
(6, 3, 5, 2, 0, 'img/Nik-3.jpg', 'Ji gimė ir augo niekam nereikalinga viename ūkyje, kol galiausiai ją atvežė mums. Nuo prigimties baikšti šunytė jau drąsiai laksto po kiemelį, smalsiai viską uostinėja, draugauja su visais šuneliais ir prašo glamonių. Kol kas dar su pavadėliu nedraugauja, bet kantrybės, kantrybės ir dar kartą kantrybės! Ūka nerodo jokios agresijos, ko nors išsigandusi iškart bėga į savo voljerą, įlenda į būda ir viską stebi. Skiepyta, ženklinta, sterilizuota. Ieškome jai labai kantrių, laiko ir noro ją dresuoti turinčių žmonių. Ūkai tinkamiausias variantas būtų nuosavas namas su aptvertu kiemu, o jei dar būtų kitas labai draugiškas ir drąsus šuo, tai būtų tobula.\r\n'),
(7, 3, 5, 2, 1, 'img/3.jpg', 'Baisiai gudri kalytė, gyvenusi gatvėje, ilgai net maitintojų neprisileidusi, o stogo virš galvos tai nėra, o kelias judrus čia pat. Buvo jaukinama, viliojama ir pagaliau su visokiais nuotykiais pagauta. Dabar šunytė labai linksma, nuotaikinga, mėgsta pasimaivyti ir vis prašyti keldama leteną daugiau paglostyti. Vienintelis ko bijo, tai pavadėlis ir pasivaikščiojimai, todėl labiau tiktų į nuosavą uždarą kiemą.\r\n'),
(8, 3, 6, 2, 0, 'img/1a.jpg', '\"Vis dar ieško namų katinas. Jis labai puikus ir labai norime tikėti, kad atsiras šeimininkai, jį pamilsiantys avansu:)\r\nKatinui beveik 3 metai. Jis jau... du metus „Gyvūnų“ prieglaudoje! LAUKIA JŪSŲ. Laukia taip ilgai... Žiūri per langą. Keičiasi metų laikai, keičiasi katinas, tik nesikeičia jo gyvenamoji vieta...\r\nIš pradžių jis buvo laukinukas, gyveno tamsiausiam kampe. Bet širdutė pamažu atitirpo. Daug kantrybės, skanukų ir žaisliukų ir ledai jau pralaužti, jis tikrai bus nuostabus naminis katinas ir Jūsų draugas. \"\r\n'),
(9, 3, 6, 3, 0, 'img/2a.jpg', 'Katė su 6 kačiukais paimti iš po balkono Didlaukio g. Užauginusi kačiukus mama buvo sterilizuota ir atvyko į Akropolio namelį ieškoti savo laimės. Gyvenimas lauke drasos nepridėjo, todėl nors ir labai švelni, neagresyvi katė, bet pirminio kontakti bijo, susigūžia, gali šnypštelti, bet niekada nepuls, o kai pradedi glostyti atsipalaiduoja ir mėgaujasi. Namuose gal prireisk laiko, bet pripratusi bus nuostabi draugė ir dėkinga už galimybę gyventi namuose, o ne po balkonu.\r\n'),
(10, 3, 7, 0.5, 0, 'img/Žiurkėnas.jpg', 'Žiurkėnai yra naktiniai, labai socialūs ir nepaprastai protingi gyvūnai! Dėl labai socialinio žiurkėnų pobūdžio mes mieliau jas prideriname prie namų, kuriuose gyvena esami žiurkėnai. Šiuo metu Žiurkėnas laukia naujų namų, jam 5 mėnesiai.\r\n'),
(11, 3, 7, 0.5, 0, 'img/dekoratyvinis kiškis.jpg', 'Dekoratyvinis kiškis vis dar yra kūdikis ir vis dar mokosi geresnių dalykų gyvenime – pavyzdžiui, kokios daržovės yra jo mėgstamiausias užkandis! Esant tokiai situacijai, šis kiškis mielai pozuoja nuotraukoms, gauna kasdienę glamonių dozę ir anksčiau gyveno su vaikais. Kiškis šiuo metu yra globos namuose ir laukia, kol kas nors jį įsivaikins!\r\n'),
(12, 3, 7, 0.5, 0, 'img/Jūrų kiaulytės.jpg', 'Dvi jaunos jūrų kiaulytės, kurios praleido laiką globos namuose laukdamos savo būsimos šeimos! Šios mielosios yra įpratusios būti laikomos, mėgsta savo daržoves ir kartu ieško namų!\r\n');

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
(3, 'Jonas', 'Jonaitis', 'jonas 234', 'jonauskas1646', 'jonas@gmail.com', 0);

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
  MODIFY `gyvunas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `vartotojai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Constraints for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD CONSTRAINT `kategorija_ibfk_1` FOREIGN KEY (`kategorija_id`) REFERENCES `gyvunai` (`kategorija_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
