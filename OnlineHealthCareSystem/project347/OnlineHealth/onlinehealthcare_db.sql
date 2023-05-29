-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 06:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinehealthcare_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_complain`
--

CREATE TABLE `add_complain` (
  `id` int(11) NOT NULL,
  `complain` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_complain`
--

INSERT INTO `add_complain` (`id`, `complain`) VALUES
(1, 'faver');

-- --------------------------------------------------------

--
-- Table structure for table `add_instruction`
--

CREATE TABLE `add_instruction` (
  `id` int(11) NOT NULL,
  `instruction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_instruction`
--

INSERT INTO `add_instruction` (`id`, `instruction`) VALUES
(1, 'take warm water');

-- --------------------------------------------------------

--
-- Table structure for table `add_status`
--

CREATE TABLE `add_status` (
  `id` int(11) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `bt` int(30) NOT NULL,
  `pulse` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_status`
--

INSERT INTO `add_status` (`id`, `bp`, `bt`, `pulse`) VALUES
(1, '120/80', 95, 100);

-- --------------------------------------------------------

--
-- Table structure for table `add_test`
--

CREATE TABLE `add_test` (
  `id` int(11) NOT NULL,
  `test` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_test`
--

INSERT INTO `add_test` (`id`, `test`) VALUES
(1, 'X-ray');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `admin_pswd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `admin_pswd`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(100) NOT NULL,
  `doctors_name` varchar(30) NOT NULL,
  `appoinment_date` varchar(30) NOT NULL,
  `appoinment_time` varchar(30) NOT NULL,
  `patients_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `doctors_name`, `appoinment_date`, `appoinment_time`, `patients_name`) VALUES
(1, 'Dr. Sharmin Akter', '2023-01-17', '23:14', 'krittika'),
(7, 'Dr. MohammadEnamul Haque', '2023-01-12', '13:10', 'Fardin arif'),
(8, 'Amit Hasan', '2023-01-12', '15:12', 'Ariful Islam Fardin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `f_name` varchar(500) NOT NULL,
  `l_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `specialist` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(500) NOT NULL,
  `bmdc_reg_num` int(11) NOT NULL,
  `address` text NOT NULL,
  `pswd` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `permission` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `f_name`, `l_name`, `email`, `contact`, `specialist`, `qualification`, `DOB`, `gender`, `bmdc_reg_num`, `address`, `pswd`, `date`, `permission`) VALUES
(1, 'Dr. M. A.', 'Mannan', 'janobe@gmail.com', '880 2 9660015-19', 'medicine', 'MBBS, MRCP ( UK ) , ECFMG ( USA ) ,', '1968-10-10', 'male', 56867, 'Central Hospital Limited\r\nHouse # 2, Road # 5, Green Road, Dhanmondi, Dhaka – 1205', 'janobe', '2020-10-01', 'Approved'),
(1234017, 'Dr. Mohammad', 'Enamul Haque', 'enamul@gmail.com', '01711911821', 'medicine', 'MBBS, DTCD, FCPS Associate Professor & Head of Department', '1965-08-26', 'male', 56766, 'The Medical Centre Location: House # 84, Road # 7/A, ShaMasjid Road Dhanmondi, Dhaka', '123456789', '2018-09-08', 'Approved'),
(1234018, 'Dr. Sohel Mahmud', 'Arafat', 'Arafat@gmail.com', '01717351631', 'medicine', 'MBBS, FCPS Associate Professor', '1966-06-23', 'male', 56767, 'Ibn Sina Diagnostic & Imaging Center Location: House # 48, Road # 9/A, Satmasjid Road', '123456789', '2018-09-08', 'Approved'),
(1234019, 'Dr. Muhammad Jahir', 'Uddin', 'Uddin@gmail.com', '01717351631', 'medicine', 'MBBS, FCPS ( Medicine ), MD ( Internal Medicine ), MACP ( USA ) Associate Professor', '1968-09-28', 'male', 56768, 'Ibn Sina Diagnostic & Imaging Center House # 48, Road # 9/A, Dhanmondi, SAtmasjid Road', '123456789', '2018-09-08', 'Approved'),
(1234020, 'Dr. Md. Abul Kalam ', 'Azad', 'Azad@gmail.com', '01729350383', 'medicine', 'MBBS, FCPS Associate Professor', '1969-09-29', 'male', 56769, 'Padma Diagnostic Center Ltd 245/2, New Circular Road, Malibagh, Dhaka, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234021, 'Dr. Mohammad Hyder', 'Ali', 'Ali@gmail.com', '01715024100', 'medicine', 'MBBS, FCPS Associate Professor', '1970-09-01', 'male', 56770, 'City Hospital Ltd. 1/8, Block-E, Lalmatia, Satmosjid Road, Mohammadpur, Dhaka â€“ 1207, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234022, 'Dr. Amit', 'Kapoor', 'Kapoor@gmail.com', '01728401661', 'Orthopedic', 'MBBS, MS (Ortho.), DNB (Ortho.),Consultant', '1970-09-02', 'male', 56771, 'Apolo Hospital,Location: Plot # 81, Block # E, Bashundhara R/A, Dhaka - 1229, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234023, 'Dr. Abu Jafar', 'Chowdhury', 'Chowdhury@gmail.com', '01711701234', 'Orthopedic', 'MBBS, MS ( Ortho ),Assistant Professor', '1972-09-03', 'male', 56772, 'Chamber: Labaid Specialized Hospital Location: House # 6, Road # 4, Dhanmondi, Dhaka - 1205', '123456789', '2018-09-08', 'Approved'),
(1234024, 'Professor Dr. Kh. Abdul', 'Awal', 'Awal@gmail.com', '01711701234', 'Orthopedic', 'Qualification : MBBS, MS, FICS Designation: Professor & Director', '1973-09-08', 'male', 56772, 'Chamber: Green Life Medical College & Hospital Location: 32 Green Road ( Biruttom K. M Shafiullah Sarak ) , Dhanmondi,', '123456789', '2018-09-08', 'Approved'),
(1234026, 'Dr. Shyamal', 'Debnath', 'Debnath@gmail.com', '01711701234', 'Orthopedic', 'MBBS,.MS(Ortho) Designation : Associate Professor', '1977-09-15', 'male', 56778, 'Chamber: Green Life Hospital Limited Location: 25 A, Green Road, Dhanmondi Dhaka-1205', '123456789', '2018-09-08', 'Approved'),
(1234027, 'Dr. Maliha', 'Rashid', 'Rashid@gmail.com', '01711701234', 'gynecologist', 'MBBS, FCPS (Gynae & Obs) Professor of Obstetrics & Gynaecology and Academic Coordinator', '1980-09-02', 'female', 56773, 'Central Hospital Ltd. Chamber: Dhanmondi, Dhaka, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234028, 'Dr. Nasima', 'Shaheen', 'Shaheen@gmail.com', '01711701234', 'gynecologist', 'MBBS, DGO, MCPS, FCPS Consultant', '1981-09-28', 'female', 56775, 'Square Hospital Limited Address: 18/F West, Bir Uttam Qazi, Nuruzzaman Road, Panthapath, Dhaka 1205, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234029, 'Dr. Nasrin', 'Zulfiqar', 'Zulfiqar@gmail.com', '01711701234', 'gynecologist', 'MBBS, DGO, FCPS, Fellow Reproductive Medicine & Assisted Reproductive Techniques (KKIV, Singapore) Coordinator & Senior Consultant', '1982-09-24', 'female', 567780, 'Apollo Hospital, Dhaka Plot # 81, Block # E, Basudhara R/A, Dhaka â€“ 1229', '123456789', '2018-09-08', 'Approved'),
(1234030, 'Dr. Gulshan', 'Ara', 'Ara@gmail.com', '01711701234', 'gynecologist', 'MBBS,MCPS,  FCPS (BCPS), MS(Gynae&Obs.), Trained in Advanced Laparoscopic Surgery(India) Coordinator & Senior Consultant', '1983-09-10', 'female', 56781, 'Apollo Hospitals Dhaka Plot # 81, Block # E, Basudhara R/A, Dhaka â€“ 1229', '123456789', '2018-09-08', 'Pending'),
(1234031, 'Dr. Amreen Sadika', 'Sayeed', 'Sayeed@gmail.com', '01711701234', 'gynecologist', 'MBBS, DGO ( DU ) Consultant', '1983-09-23', 'female', 56782, 'Ibrahim General Hospital & DCEC â€“ Dhanmondi Location: House # 42, Road # 10/A, Dhanmondi R/A, Dhaka â€“ 1209, Bangladesh', '123456789', '2018-09-08', 'Pending'),
(1234032, 'Dr. Md. Abdullah', 'Khan', 'Khan@gmail.com', '01711701234', 'dentist', 'Qualification : BDS, PGT ( Japan ) Designation : Consultant', '1981-09-01', 'male', 56783, 'Chamber: Metropolitan Dental Location: Sel Green Center, 30, Green Road, Dhaka - 1205, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234033, 'Dr. M. A.', 'Sikder', 'Sikder@gmail.com', '01711701234', 'dentist', 'Qualification : BDS, Ph.D ( Japan ) Designation : Consultant', '1983-09-28', 'male', 56785, 'Chamber: Smile Specialised Dental & Research Center Location: 12 Gaznabi Road, College Gate, Mohammadpur, Dhaka - 1207, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234034, 'Dr. Mohammed Shafi', 'Ullah', 'Ullah@gmail.com', '01711701234', 'dentist', 'Qualification : MBBS, MS, BDS, MCPS, MDRA(USA) Designation : Associate Professor & Head of Department', '1983-09-21', 'male', 56786, 'Chamber: Islami Bank Central Hospital Location: 30, Anjuman Mafidul Islam Road, Kakrail , Dhaka-1000', '123456789', '2018-09-08', 'Approved'),
(1234035, ' Dr. Nurul', 'Amin', 'DrNurulAmin@gmail.com', '01711701234', 'dentist', 'Qualification : BDS, PhD ( Japan ) Designation : Associate Professor & Head, Department of Oral & Maxillofacial Surgery', '1983-09-29', 'male', 56787, 'Chamber: Smile Specialised Dental & Research Center Location: 75, Satmasjid Road, Dhanmondi R/A, Dhaka - 1209', '123456789', '2018-09-08', 'Pending'),
(1234036, 'Dr. Salahuddin ', 'Swapon', 'Swapon@gmail.com', '01711701234', 'dentist', 'Qualification : B.D.S, FCPS Designation : Assistant Professor & Head of Department ( CIDCH )', '1981-09-28', 'male', 56789, 'Chamber: Sudeen Dental Care Location: 20, Green Road, Rangs Taz tower, Dhanmondi, Dhaka - 1205', '123456789', '2018-09-08', 'Pending'),
(1234037, 'Dr. Golam Haider', 'Rasul', 'Rasul@gmail.com', '01711701234', 'cardiologist', 'FCPS, FRCS (Glasgow) Consultant', '1983-09-28', 'male', 56790, 'United Hospital Limited Plot #15,Road #71,Gulshan, Dhaka-1212, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234038, 'Dr. Sajal Krishna', 'Banerjee', 'Banerjee@gmail.com', '01711701234', 'dentist', 'MBBS, MD (Cardiology), FACC, FESC Professor of Cardiology', '1983-09-28', 'male', 56791, 'Holding no-11, Popular Tower, Popular Diagnostic Center Limited, Shantinagar-Dhaka', '123456789', '2018-09-08', 'Approved'),
(1234039, 'Dr. Lutfor ', 'Rahman', 'Rahman@gmail.com', '01711701234', 'cardiologist', 'MBBS, MS (CTS) Chief Cardiac Surgeon, Labiad Cardiac Hospital', '1991-09-28', 'male', 56792, 'Labiad Cardiac Hospital House#1, Road # 4, Dhanmondi, Dhaka-1205', '123456789', '2018-09-08', 'Approved'),
(1234040, 'Dr. Fazlur', 'Rahman', 'DrFazlurRahman@gmail.com', '01711701234', 'cardiologist', 'MBBS, MCPS ( Medicine ), Dcard, MD ( Card ) Cardiology /Heart Specialist', '1983-09-22', 'male', 56793, 'hamber: Anwer Khan Modern Hospital Ltd. House # 17, Road # 8, Dhanmondi, Dhaka â€“ 1205, Bangladesh', '123456789', '2018-09-08', 'Approved'),
(1234041, 'Dr. Md. Abdul Kader', 'Mollah', 'Mollah@gmail.com', '01711701234', 'cardiologist', 'MBBS, FCPS ( Medicine ) , MD ( Cardiology ) Professor', '1983-09-28', 'male', 56795, 'Labaid Specialized Hospital House # 6, Road # 4, Dhanmondi, Dhaka â€“ 1205', '123456789', '2018-09-08', 'Approved'),
(1234042, 'Dr. Md. Abu', 'Siddique', 'Abu@gmail.com', '01711701234', 'cardiologist', 'MBBS, FPGCS ( Medicine ) , PhD ( Cardiology ) Cardiology /Heart Specialist Professor', '1983-09-28', 'male', 56796, 'Chamber: Popular Diagnostic Centre House # 16, Road # 2, Dhanmondi R/A, Dhaka â€“ 1205', '123456789', '2018-09-08', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_list`
--

CREATE TABLE `medicine_list` (
  `id` int(11) NOT NULL,
  `medicine` varchar(11) NOT NULL,
  `dose1` int(3) NOT NULL,
  `dose2` int(3) NOT NULL,
  `dose3` int(3) NOT NULL,
  `duration` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_list`
--

INSERT INTO `medicine_list` (`id`, `medicine`, `dose1`, `dose2`, `dose3`, `duration`) VALUES
(1, 'napa', 1, 0, 1, '7');

-- --------------------------------------------------------

--
-- Table structure for table `onlinehealthcare_form`
--

CREATE TABLE `onlinehealthcare_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `age` varchar(4) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlinehealthcare_form`
--

INSERT INTO `onlinehealthcare_form` (`id`, `name`, `email`, `number`, `date`, `age`, `address`, `password`) VALUES
(1, 'krittika', 'krittikaroy2020@gmail.com', '01753594576', '2023-01-10', '20', 'rampura', '1234'),
(6, 'Ariful Islam Fardin', 'arifulfardin9@gmail.com', '01937670188', '2022-12-29', '20', 'wefwefwea', '123456789'),
(10, 'FARDIN', 'arifulfardin808@gmail.com', '01983879011', '2022-12-30', '25', 'dfafeawfaw', '123456789'),
(12, 'Fardin arif', 'aifewu2020@gmail.com', '01983879012', '2022-12-30', '50', '14575', '123456789'),
(13, 'Farid islam', 'farid101@gmail.com', '01937670188', '2023-01-19', '26', 'Rampura', '987654321'),
(14, 'sadiya', 'sadiya@gmail.com', '01983879011', '2023-01-13', '25', 'dhaka', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `onlinehealthcare_form_doctor`
--

CREATE TABLE `onlinehealthcare_form_doctor` (
  `id` int(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `age` varchar(2) NOT NULL,
  `address` varchar(60) NOT NULL,
  `specialist` varchar(9) NOT NULL,
  `qualification` varchar(9) NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlinehealthcare_form_doctor`
--

INSERT INTO `onlinehealthcare_form_doctor` (`id`, `name`, `email`, `number`, `date`, `age`, `address`, `specialist`, `qualification`, `password`) VALUES
(1, 'Shatarupa', 'shatarupa@gmail.com', '0175356789', '', '22', 'manikgonj', 'ortho', 'mbbs', '1'),
(3, 'Dr. Rahim khan', 'rahim@gmail.com', '01720000000', '', '30', 'Aftabnagar', 'Medicine', 'MBBS,MD,F', '123456789'),
(5, 'Dr. M. A. Mannan', 'janobe@gmail.com', '01753594577', '2023-10-10', '40', 'Central Hospital Limited\r\nHouse # 2, Road # 5, Green Road, D', 'medicine', 'MBBS, MRC', '123456789'),
(6, 'Dr. Mohammad Enamul Haque', 'enamul@gmail.com', '01711911821', '2023-10-10', '40', 'Central Hospital Limited\r\nHouse # 2, Road # 5, Green Road, D', 'medicine', 'MBBS, MRC', '123456789'),
(7, 'Dr. Sharmin Akter', 'sharmin@gmail.com', '01720086141', '2022-12-31', '34', 'Banasree', 'Orthopedi', 'MBBS', '123456789'),
(8, 'Jhid', 'jahid2002@gmail.com', '01983879012', '2022-12-30', '16', 'feawaww', 'Orthopedi', 'efgvesrge', '123456789'),
(9, 'Amit Hasan', 'amit101@gmail.com', '01983879012', '1997-05-31', '25', 'Dhaka ', 'dentist', 'Jana dork', '123456789'),
(10, 'Dr. Md. AbdullahKhan', 'abdullah@gmail.com', '01882056781', '2023-01-10', '35', 'Dhaka', 'dentist', 'MBBS', '123456789'),
(11, 'Dr. MohammadEnamul Haque', 'enamul@gmail.com', '01815599606', '2023-01-18', '55', 'Jurain', 'medicine', 'MBBS', '123456789'),
(12, 'Dr. Sohel MahmudArafat', 'arafat@gmail.com', '01915599606', '2023-01-01', '56', 'Jatrabari', 'medicine', 'MBBS, FCP', '123456789'),
(20, 'Dr. Sohel Mahmud Arafat ', 'arafat@gmail.com', '01753594577', '2023-01-02 00:08:06', '56', 'Aftabnagar', 'surgeon', 'MBBS,MD,F', '123456789'),
(21, 'Dr. Amit kapoor', 'kapoor@gmail.com', '01728401662', '', '56', 'Apolo Hospital,Location: Plot # 81, Block # E, Bashundhara R', 'Orthopedi', 'MBBS, MS ', '123456789'),
(36, 'Dr. Fazlur Rahman', 'DrFazlurRahman@gmail.com', '01711701234', '2023-01-10', '46', 'Central Hospital Limited\r\nHouse # 2, Road # 5, Green Road, D', 'gynecolog', 'MBBS, DGO', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `email`, `date`) VALUES
(1, 'krittika2020@gmail.com', '02-01-2023');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(11) NOT NULL,
  `Day_Time1` varchar(500) NOT NULL,
  `Day_Time2` varchar(500) NOT NULL,
  `Day_Time3` varchar(500) NOT NULL,
  `Day_Time4` varchar(500) NOT NULL,
  `Day_Time5` varchar(5000) NOT NULL,
  `Day_Time6` varchar(5000) NOT NULL,
  `Day_Time7` varchar(5000) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlinehealthcare_form`
--
ALTER TABLE `onlinehealthcare_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlinehealthcare_form_doctor`
--
ALTER TABLE `onlinehealthcare_form_doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `onlinehealthcare_form`
--
ALTER TABLE `onlinehealthcare_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `onlinehealthcare_form_doctor`
--
ALTER TABLE `onlinehealthcare_form_doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
