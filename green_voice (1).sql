-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 01:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_voice`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `hall` varchar(100) NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `picture` varchar(100) NOT NULL,
  `fb` varchar(200) NOT NULL DEFAULT '#',
  `ln` varchar(200) NOT NULL DEFAULT '#',
  `insta` varchar(200) NOT NULL DEFAULT '#',
  `tweet` varchar(200) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`id`, `name`, `position`, `faculty`, `mail`, `mobile`, `hall`, `blood_grp`, `birth_date`, `picture`, `fb`, `ln`, `insta`, `tweet`) VALUES
('01', 'Ifran Yousuf Shihab', 'President', 'Faculty of Agriculture', 'if.shihab151182@gmail.com', '01759398928', 'Fazlul Haque Hall', 'O(+ve)', '2001-07-16', 'images/shihab.jpg', 'https://www.facebook.com/shihab.ifran.7', '#', 'https://www.instagram.com/ifranshihab/', '#'),
('02', 'Taskia Khatun', 'General Secretary', 'Faculty of Fisheries', 'tahiyataskia@gmail.com', '01767334187', 'Sultana Rajiya Hall', 'A(+ve)', '2002-04-11', 'images/taskia.jpg', 'https://www.facebook.com/taskiajahan.tahiya.3', '#', '#', '#'),
('03', 'Apsari Wasim', 'Human Welfare Secretary', 'Faculty of Agriculture', 'apsari.2202116@student.bau.edu.bd', '01928992340', 'Sultana Razia Hall', 'B(+ve)', '2003-03-09', 'images/apsari.jpg', 'https://www.facebook.com/apsari.wasim', '#', '#', '#'),
('04', 'Ramisha Islam Ripa', 'Organizing Secretary ', 'Faculty of Agriculture', 'islamripa03@gmail.com', '01717549113', 'Taposhi Rabeya Hall', 'A(-ve)', '2003-02-17', 'images/ramisha.jpg', 'https://www.facebook.com/ramisha.islam.986', '#', '#', '#'),
('05', 'Israt Jahan Rimu', 'Assistant General Secretary', 'Faculty of Agricultural Economics and Rural Sociology', 'rimuisratjahan13@gmail.com', '01863-947435', 'Sultana Razia Hall', 'B(+ve)', '2002-11-20', 'images/rimu.jpg', 'https://www.facebook.com/israt.jahan.rimu.135814', '#', '#', '#'),
('06', 'Maimuna Tabassum', 'Office secretary', 'Faculty of Agricultural Engineering and Technology', 'maimunatabassum2003@gmail.com', '01894816802', 'Sultana Razia Hall', 'A(+ve)', '2003-10-09', 'images/maimuna.jpg', 'https://www.facebook.com/atia.rokhsana.7', '#', '#', '#'),
('07', 'MD. Zillur Rahman Samrat', 'Vice President', 'Faculty of Agriculture', 'samratalhasan7@gmail.com', '01703409897', 'Shahjalal Hall', 'O(+ve)', '2003-03-16', 'images/samrat.jpg', 'https://www.facebook.com/samrat.alhasan.79', '#', '#', '#'),
('08', 'Mahmuda Monowar Lorin', 'Information and Communication Secretary', 'Faculty of Agriculture', 'mahmudamonowar75@gmail.com', '01863883926', 'July 36 hall', 'B(+ve)', '2002-01-26', 'images/lorin.jpg', 'https://www.facebook.com/mahmuda.monowar.lorin', '#', '#', '#'),
('09', 'MST. MAHMUDA KHATUN SADIA', 'Hospitality Secretary', 'Faculty of Agricultural Engineering and Technology', 'mksadia2002@gmail.com', '01613420612', 'Begum Rokeya Hall', 'B(+ve)', '2002-07-08', 'images/sadia.jpg', 'https://www.facebook.com/m.k.sadia.214941', '#', '#', '#'),
('10', 'Nafisa Rahman', 'Treasurer', 'Faculty of Agricultural Engineering and Technology', 'nafisar597@gmail.com', '01765042780', 'Krishi Kannya Hall', 'B(+ve)', '2002-12-31', 'images/nafisa.jpg', 'https://www.facebook.com/nafisa.rahman.482480', '#', '#', '#'),
('11', 'Anol Krishnodip', 'Cultural Secretary', 'Faculty of Agriculture', 'anolkrishnodip123@gmail.com', '01706729070', 'Mawlana Bhashani Hall', 'A(+ve)', '2003-04-17', 'images/anol.jpg', '#', '#', '#', '#'),
('12', 'Muhammad Ishmamul Hoque', 'Sports Secretary', 'Faculty of Agricultural Engineering and Technology', 'mdishmam2003@gmail.com', '01875000619', 'Ashraful Haque Hall', 'B(+ve)', '2003-11-19', 'images/ishmam.jpg', 'https://www.facebook.com/muhammadishmamul.hoque.3', 'https://www.linkedin.com/in/muhammad-ishmamul-hoque-03a882284/', '#', '#'),
('13', 'Shamima Yesmin', 'Treasurer', 'Faculty of Agricultural Engineering and Technology', 'yesmins237@gmail.com', '01754707947', 'Krishi Kannya Hall ', 'AB(+ve)', '2001-09-26', 'images/yesmin.jpg', 'https://www.facebook.com/shamima.yesmin.3701779', '#', '#', '#'),
('14', 'Aribah Tasnim Surovi', 'Executive Member', 'Faculty of Animal Husbandry', 'tasnimsurovi73@gmail.com', '01790943546', 'Sultana Razia Hall', 'A(+ve)', '2003-08-25', 'images/surovi.jpg', 'https://www.facebook.com/aribah.tasnim.surovi', '#', '#', '#'),
('15', 'Md Al Jubayer', 'Assistant General Secretary', 'Faculty of Agricultural Engineering and Technology', 'emonjubayer50@gmail.com', '01816163529', 'Hosen Shahid Sohrawardi Hall', 'A(+ve)', '2003-08-25', 'images/jubayer.jpg', 'https://www.facebook.com/al.jubayeremon.1', '#', '#', '#'),
('16', 'Lamyah Islam', 'Media and Publication Secretary ', 'Faculty of Agricultural Engineering and Technology', 'lamyah.2209027@bau.edu.bd', '01400663321', 'July 36 Hall', 'B(-ve)', '2003-07-02', 'images/lamyah.jpg', 'https://www.facebook.com/lamyah.islam.7', '#', '#', '#'),
('17', 'Md. Shafiqul Islam ', 'Organizing Secretary', 'Faculty of Agriculture', 'shafiqul.2202276@bau.edu.bd', '01630107237', 'Shaheed Shamsul Haque Hall', 'A(+ve)', '2002-04-01', 'images/shafiqul.jpg', 'https://www.facebook.com/shafiqul.islam.313995', '#', '#', '#'),
('18', 'Mst. Rabeya Sarker', 'Information and Communication Secretary', 'Faculty of Agricultural Engineering and Technology', 'rabeyasarker07@gmail.com', '01761085276', 'Krishi Kannya Hall ', 'B(+ve)', '2003-02-09', 'images/rabeya.jpg', 'https://www.facebook.com/rabeya.sarker.733', '#', '#', '#'),
('19', 'Nashmin Ferdaush', 'Organizing Secretary', 'Faculty of Agriculture', 'nashminferdaush@gmail.com', '01711228712', 'Krishi Kannya Hall', 'O(+ve)', '2003-09-14', 'images/nashmin.jpg', 'https://www.facebook.com/nashmin.ferdoush.3', '#', '#', '#'),
('20', 'Dipannita Roy Pritha', 'Cultural Secretary', 'Faculty of Agriculture', 'rdipannita88@gmail.com', '01845742599', 'Krishi Kannya Hall', 'O(+ve)', '2003-02-17', 'images/dipannita.jpg', 'https://www.facebook.com/dipanbita.raya.prtha', '#', '#', '#'),
('21', 'Parmita Saha Setu', 'Relief and Disaster Management Secretary', 'Faculty of Agriculture', 'parmitasahasetu@gmail.com', '01826122911', 'Sultana Razia Hall', 'O(+ve)', '2002-02-17', 'images/setu.jpg', 'https://www.facebook.com/parmita.sahasetu', '#', '#', '#'),
('22', 'Sanjida Akter', 'Sports Secretary', 'Faculty of Agricultural Engineering and Technology', 'mrssanjida225@gmail.com', '01837743595', 'Krishi Kannya Hall ', 'O(+ve)', '2002-05-19', 'images/sanjida.jpg', 'https://www.facebook.com/bau.bd.edu.23646858student.223', '#', '#', '#'),
('23', 'Shibu Majumder', 'Social Welfare Affairs Secretary', 'Faculty of Agriculture', 'shibu.2202152@student.bau.edu.bd', '01687916524', 'Mawlana Bhashani Hall', 'O(+ve)', '2003-09-17', 'images/shibu.jpg', 'https://www.facebook.com/shibu.majumder.235', '#', '#', '#'),
('24', 'K. M. Asif Al-Rehman Shammo', 'Education and Research Secretary', 'Faculty of Agricultural Economics and Rural Sociology', 'rehmanshammo25@gmail.com', '01703089789', 'Isha Khan Hall', 'B(+ve)', '2004-10-25', 'images/shammo.jpg', 'https://www.facebook.com/asifalrehman.shammo.3', '#', '#', '#'),
('25', 'Mst. Salma Akter', 'Relief and Disaster Management Secretary ', 'Faculty of Agricultural Economics and Rural Sociology', 'salmaakter6424@gmail.com', '01315996424', 'Sultana Razia Hall', 'O(+ve)', '2002-11-10', 'images/salma.jpg', 'https://www.facebook.com/salma.akter.11031', '#', '#', '#'),
('26', 'Susmita Podder', 'Vice President', 'Faculty of Agriculture', 'susmitapodder49@gmail.com', '01314423372', 'Sultana Razia Hall', 'O(+ve)', '2003-05-13', 'images/susmita.jpg', 'https://www.facebook.com/giti.podder', '#', '#', '#'),
('27', 'Khairun Nahar', 'Assistant General Secretary', 'Faculty of Agriculture', 'lakamoni0@gmail.com', '01307344898', 'Sultana Razia Hall', 'B(+ve)', '2001-07-18', 'images/laka.jpg', 'https://www.facebook.com/khairun.nahar.792303', '#', '#', '#'),
('28', 'Md. Farhadul Islam Fahad', 'Office Secretary ', 'Faculty of Agriculture', 'fahadhuda427078@gmail.com', '01517837536', 'Shaheed Shamsul Haque Hall', 'O(+ve)', '2004-11-04', 'images/fahad.jpg', 'https://www.facebook.com/fahad.huda.2024', '#', '#', '#'),
('29', 'Md Asadujjaman', 'Hospitality  Secretary', 'Faculty of Animal Husbandry', 'asadujjaman.2203067@bau.edu.bd', '01632530096', 'Isha Khan Hall', 'A(+ve)', '2002-01-12', 'images/asad.jpg', 'https://www.facebook.com/md.asadujjaman.577568', '#', '#', '#'),
('30', 'Md. Mine Hossain', 'Organizing Secretary', 'Faculty of Agriculture', 'minehossain48@gmail.com', '01308929338', 'Isha Khan Hall', 'O(+ve)', '2002-05-30', 'images/mine.jpg', 'https://www.facebook.com/meharab.moho', '#', '#', '#'),
('31', 'Musarrat Jahan Richie', 'Media and Publication Secretary', 'Faculty of Agricultural Engineering and Technology', 'musarrat2002richie@gmail.com', '01623574214', 'Taposhi Rabeya Hall', 'B(+ve)', '2002-04-21', 'images/richie.jpg', 'https://www.facebook.com/musarrat.jahan.richie.2024', '#', '#', '#'),
('32', 'Arpita Rani Noyoni', 'Executive Member', 'Faculty of Agricultural Economics and Rural Sociology', 'noyoni.2204065@bau.edu.bd', '01846565498', 'Sultana Razia Hall', 'O(+ve)', '2003-03-19', 'images/arpita.jpg', 'https://www.facebook.com/arpita.noyoni', '#', '#', '#'),
('33', 'Sezuti Sarkar', 'Vice President', 'Faculty of Agriculture', 'sezutisarkar07bd@gmail.com', '01612807746', 'Sultana Razia Hall', 'O(+ve)', '2002-08-07', 'images/sezuti.jpg', 'https://www.facebook.com/sezuti.sarkar.1', '#', '#', '#'),
('34', 'Arnab Saha', 'Executive Member', 'Faculty of Agriculture', 'arnab.2002249@bau.edu.bd', '01792336011', 'Mawlana Bhasani Hall', 'O(+ve)', '2000-12-12', 'images/arnob.jpg', 'https://www.facebook.com/arnab.saha.900388', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `student_ad`
--

CREATE TABLE `student_ad` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL DEFAULT 'Student Advisor',
  `faculty` varchar(100) NOT NULL DEFAULT 'Faculty of Agriculture',
  `mail` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `hall` varchar(100) NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `picture` varchar(100) NOT NULL,
  `fb` varchar(200) NOT NULL DEFAULT '#',
  `ln` varchar(200) NOT NULL DEFAULT '#',
  `insta` varchar(200) NOT NULL DEFAULT '#',
  `tweet` varchar(200) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_ad`
--

INSERT INTO `student_ad` (`id`, `name`, `position`, `faculty`, `mail`, `mobile`, `hall`, `blood_grp`, `birth_date`, `picture`, `fb`, `ln`, `insta`, `tweet`) VALUES
('01', 'S.M. Rakib Hasan', 'Student Advisor', 'Faculty of Agriculture', 'rakib.1902246@bau.edu.bd', '01816488562', 'Fazlul Haque Hall', 'O(+ve)', '1998-11-26', 'student/rakib.jpg', '#', '#', '#', '#'),
('02', 'Osama Iban', 'Student Advisor', 'Faculty of Agriculture', 'usamaohiowhi@gmail.com', '01745097838', 'Hossain Shaheed Suhrawardy Hall', 'A(+ve)', '2000-07-01', 'student/osama.jpg', 'https://www.facebook.com/usama.iban.ohi', '#', '#', '#'),
('03', 'Lailatul Ferdows Shishir', 'Student Advisor', 'Faculty of Agriculture', 'lailatulferdows9976@gmail.com', '01909303242', 'Taposhi Rabeya Hall', 'O(+ve)', '2001-10-06', 'student/shishir.jpg', 'https://www.facebook.com/lailatulferdows.shiahir', '#', '#', '#'),
('04', 'Sadia Islam Ena', 'Student Advisor', 'Faculty of Agriculture', 'sadia.islam.ena@gmail.com', '01731559010', 'Taposhi Rabeya Hall', 'B(+ve)', '2001-03-18', 'student/ena.jpg', 'https://www.facebook.com/sadia.islam.ena.2025', '#', '#', '#'),
('05', 'Md. Al Shahriar Nafiz', 'Student Advisor', 'Faculty of Agriculture', 'nafiz.bau@gmail.com', '01773599040', 'Hossain Shaheed Suhrawardy Hall', 'O(+ve)', '1998-10-05', 'student/nafiz.jpg', 'https://www.facebook.com/S.nafiz.24220147', '#', '#', '#'),
('06', 'Mst. Jannatun Fiza', 'Student Advisor', 'Faculty of Agriculture', 'fizajannat1525@gmail.com', '01709437575', 'Taposhi Rabeya Hall', 'O(+ve)', '1998-12-12', 'student/fiza.jpg', 'https://www.facebook.com/jannatun.fiza.2024', '#', '#', '#'),
('07', 'Md. Al-Amin Hossain', 'Student Advisor', 'Faculty of Agriculture', 'alamin.1902269@bau.edu.bd', '01799742687', 'Fazlul Haque Hall', 'O(+ve)', '1999-10-10', 'student/al_amin.jpg', 'https://www.facebook.com/al.amin.hossain.522192', '#', '#', '#'),
('08', 'Vashwati Mondol', 'Student Advisor', 'Faculty of Agriculture', 'vashwati446@gmail.com', '01791692509', 'Tapashi Rabeya Hall', 'A(+ve)', '2001-03-03', 'student/mondol.jpg', 'https://www.facebook.com/vashwati.mondol', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL DEFAULT 'Teacher Advisor',
  `designation` varchar(100) NOT NULL DEFAULT 'Proffessor',
  `dept` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL DEFAULT 'Faculty of Agriculture',
  `mobile` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `rg` varchar(200) NOT NULL DEFAULT '#',
  `gs` varchar(200) NOT NULL DEFAULT '#',
  `oi` varchar(200) NOT NULL DEFAULT '#',
  `fb` varchar(200) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `position`, `designation`, `dept`, `faculty`, `mobile`, `mail`, `picture`, `rg`, `gs`, `oi`, `fb`) VALUES
(1, 'Mr. Sharif Ar Raffi', 'Chief Advisor', 'Proffessor', 'Department of Genetics and Plant Breeding', 'Faculty of Agriculture', '01711225251', 'saraffi@bau.edu.bd', 'teacher/rafi.jpg', 'https://www.researchgate.net/profile/Sharif_Ar-Raffi?ev=hdr_xprf', 'https://scholar.google.com/citations?user=sYPjaFQAAAAJ&hl=en', '#', 'https://www.facebook.com/s.a.raffi'),
(2, 'Dr. Md. Ashrafuzzaman', 'Teacher Advisor', 'Proffessor', 'Department of Crop Botany', 'Faculty of Agriculture', '', 'drashraf2007@yahoo.com', 'teacher/ashraf.jpg', 'https://www.researchgate.net/profile/Md_Ashrafuzzaman5', 'https://scholar.google.com/citations?hl=en&user=D49o2FsAAAAJ', '#', '#'),
(3, 'Dr. Mahbubul Pratik Siddique', 'Teacher Advisor', 'Proffessor', 'Department of Microbiology and Hygiene', 'Faculty of Veterinary Science', '01751945123', 'mpsiddique@bau.edu.bd', 'teacher/pratik.jpg', '#', '#', '#', 'https://www.facebook.com/mahbubul.p.siddique'),
(4, 'Dr. Md. Parvez Anwar', 'Teacher Advisor', 'Proffessor', 'Department of Agronomy', 'Faculty of Agriculture', '01912 114281', 'parvezanwar@bau.edu.bd', 'teacher/parvej.jpg', 'https://www.researchgate.net/profile/Md-Anwar-6', 'https://scholar.google.com/citations?user=rK8YfzEAAAAJ&hl=en', '#', 'https://www.facebook.com/parvez.anwar.14'),
(5, 'Dr. Md. Shahiduzzaman', 'Teacher Advisor', 'Proffessor', 'Department of Parasitology', 'Faculty of Veterinary Science', '01716460558', 'szaman@bau.edu.bd', 'teacher/shahid.jpg', 'https://www.researchgate.net/profile/Md-Shahiduzzaman-6', 'https://scholar.google.com.pk/citations?hl=en&user=7EtX7zIAAAAJ&view_op=list_works&sortby=pubdate', '#', '#'),
(6, 'Dr. Md. Rostom Ali', 'Teacher Advisor', 'Proffessor', 'Department of Farm Power and Machinery', 'Faculty of Agricultural Engineering and Technology', '01716311747', 'rostomfpm@bau.edu.bd', 'teacher/rostom.jpg', 'https://www.researchgate.net/profile/Md-Ali-2', 'https://scholar.google.com/citations?user=BLyGb94AAAAJ&hl=en', 'https://orcid.org/my-orcid?orcid=0000-0002-3331-0983', 'https://www.facebook.com/rustom.akanda'),
(7, 'Dr. Muhammad Ashik-E-Rabbani', 'Teacher Advisor', 'Proffessor', 'Department of Farm Power and Machinery', 'Faculty of Agricultural Engineering and Technology', '01712634354', 'ashik@bau.edu.bd', 'teacher/ashik.jpg', 'https://www.researchgate.net/profile/M_Rabbani', 'https://scholar.google.com/citations?user=ynUjytkAAAAJ&hl=en', 'https://orcid.org/0000-0002-7589-4403', 'https://www.facebook.com/ashik.rabbani'),
(8, 'Dr. Mohammad Mofizur Rahman Jahangir', 'Teacher Advisor', 'Proffessor', 'Department of Soil Science', 'Faculty of Agriculture', '01719 648448', 'mmrjahangir@bau.edu.bd', 'teacher/mofiz.jpg', 'https://www.researchgate.net/profile/MMR_Jahangir', 'https://scholar.google.com/citations?hl=en&user=Okzx80oAAAAJ', '#', '#'),
(9, 'Dr. Ziaul Haque', 'Teacher Advisor', 'Proffessor', 'Department of Anatomy and Histology', 'Faculty of Veterinary Science', '01793641483', 'zhaqueah80@bau.edu.bd', 'teacher/ziaul.jpg', '#', '#', '#', '#'),
(10, 'Dr. Md. Badiuzzaman Khan', 'Teacher Advisor', 'Proffessor', 'Department of Environmental Science', 'Faculty of Agriculture', '01716615141', 'mbkhan@bau.edu.bd', 'teacher/badiuzzaman.jpg', 'https://www.researchgate.net/profile/Md_Khan123', 'https://scholar.google.com/citations?user=mq_CDZsAAAAJ&hl=en', '#', '#'),
(11, '​​​​Dr. Md. Sabibul Haque​', 'Teacher Advisor', 'Proffessor', 'Department of Crop Botany', 'Faculty of Agriculture', '01716061745', 'mshaqcb@bau.edu.bd', 'teacher/sabib.jpg', 'https://www.researchgate.net/profile/Mohammad_Haque44', 'https://scholar.google.com/citations?user=phGLrt0AAAAJ', '#', 'https://www.facebook.com/sabibul.sabuj'),
(12, 'Dr. Sabina Yeasmin', 'Teacher Advisor', 'Proffessor', 'Department of Agronomy', 'Faculty of Agriculture', '01618512082', 'sabinayeasmin@bau.edu.bd', 'teacher/sabina.jpg', 'https://www.researchgate.net/profile/Sabina_Yeasmin2', 'https://scholar.google.com/citations?user=mRgaY0kAAAAJ&hl=en&authuser=1', 'https://orcid.org/0000-0001-8410-2589', 'https://www.facebook.com/Yeasmin.Shalie'),
(13, 'Dr. M. Nahid Sattar', 'Teacher Advisor', 'Proffessor', 'Department of Agricultural Economics', 'Faculty of Agricultural Economics & Rural Sociology', '01796266729', 'nahidsattar@bau.edu.bd', 'teacher/nahid.jpg', '#', 'https://scholar.google.com/citations?user=fHUanosAAAAJ&hl=en', '#', 'https://www.facebook.com/nahid.ankur'),
(14, 'Mr. Md. Tariqul Islam', 'Teacher Advisor', 'Assistant Professor', 'Haor and Char Development Institute', ' ', '01787169520', 'tariq.hcdi@bau.edu.bd', 'teacher/tariq.jpg', 'https://www.researchgate.net/profile/Mdtariqul-Islam-2', 'https://scholar.google.com/citations?user=7yTtlXYAAAAJ&hl=en&oi=sra', '#', 'https://www.facebook.com/tariqul.islam.430222'),
(15, 'Mr. Md. Hosen Ali', 'Teacher Advisor', 'Assistant Professor', 'Department of Plant Pathology', 'Faculty of Agriculture', '01773227552', 'hosen.ppath@bau.edu.bd', 'teacher/hosen.jpg', 'https://www.researchgate.net/profile/Md-Ali-219', 'https://scholar.google.com/citations?user=I3H9IV0AAAAJ&hl=en', 'https://orcid.org/0009-0005-2332-3640', 'https://www.facebook.com/md.hosen.ali.700588'),
(16, 'Mr. Zikesh Barman', 'Teacher Advisor', 'Assistant Professor', 'Department of Farm Structure and Environmental Engineering', 'Faculty of Agricultural Engineering & Technology', '01784075336', '', 'teacher/zikesh.jpg', '#', '#', '#', 'https://www.facebook.com/barman149');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `student_ad`
--
ALTER TABLE `student_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
