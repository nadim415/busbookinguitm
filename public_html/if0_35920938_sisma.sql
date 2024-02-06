-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.infinityfree.com
-- Generation Time: Feb 06, 2024 at 03:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35920938_sisma`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `comment_text`, `timestamp`) VALUES
(1, 3, 'mantap laa', '2024-01-29 14:56:43'),
(2, 1, 'huyyoo', '2024-01-29 15:39:06'),
(3, 5, 'jadi jadi', '2024-01-29 15:42:49'),
(4, 6, 'yakkk', '2024-02-02 20:12:17'),
(5, 11, 'nice laa nadim padu2', '2024-02-05 13:44:26'),
(6, 13, 'cantik min teruskan berkerjaya', '2024-02-05 13:55:47'),
(7, 14, 'admin x upload video ker?', '2024-02-05 13:57:53'),
(8, 18, 'nice min', '2024-02-05 14:17:58'),
(9, 19, 'lawa2', '2024-02-05 14:21:32'),
(10, 20, 'boleh improve lagi ni min...kaon2', '2024-02-05 14:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `type` enum('news','picture','video') NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `description`, `type`, `file_path`, `created_at`) VALUES
(5, 'MAJLIS ANUGERAH KECEMERLANGAN MAHASISWA (MAKM) 2023, UiTM CAWANGAN KELANTAN', 'Program ini telah dijalankan oleh jawatankuasa penganjur Kolej Pengajian Seni Kreatif (KPSK) dengan kerjasama Bahagian Hal Ehwal Akademik, UiTM Cawangan Kelantan sebagai tanda penghargaan kepada semua Penerima Sijil Anugerah Dekan Peperiksaan Akhir Julai 2023, dengan bertemakan “KEBANGSAAN” seperti butiran berikut:\r\n\r\n🗓️Tarikh: 10.12.2023 (Ahad)\r\n🕰️ Masa:\r\n📌 Sesi 1 - 9:00 pagi - 1:00 tengahari (Diploma)\r\n📌 Sesi 2 - 2:00 petang - 5:00 petang (Sarjana Muda)\r\n\r\n📍Lokasi: Dewan Professional, UiTM Cawangan Kelantan\r\n\r\nSekian, terima kasih.\r\n\r\n#UiTMKELANTAN\r\n#SISMA4U\r\n#mahaSISMA\r\n#SISMAxUiTM', 'picture', 'image/3269163528686544738_6631514014.jpeg', '2024-02-05 17:16:58'),
(6, 'PEMAKLUMAN TEMPOH VALIDASI STUDENT FEEDBACK ONLINE (SUFO) SEMESTER OKTOBER 2023 - FEBRUARI 2024', 'Merujuk kepada perkara di atas, mahasiswa boleh membuat pengisian maklum balas bermula pada tarikh berikut:\r\n\r\n📍Tarikh Mula: 18 Disember 2023\r\n📍Tarikh Akhir: 28 Januari 2024\r\n\r\nSehubungan dengan itu, seluruh mahasiswa UiTM hendaklah cakna dengan pemakluman berikut dan melengkapkan proses maklum balas SUFO di portal uFuture dalam tempoh yang telah ditetapkan bagi mengelakkan sebarang masalah pada masa akan datang.\r\n\r\nSekian, terima kasih.\r\n\r\n#UiTMKELANTAN\r\n#SISMA4U\r\n#mahaSISMA\r\n#SISMAxUiTM', 'picture', 'image/3269178416611796996_6631514014.jpeg', '2024-02-05 18:01:11'),
(7, 'SELAMAT MENYAMBUT TAHUN BARU 2024', 'Merujuk perkara di atas, Society of Information System Management (SISMA) sesi 2022/2023 mengucapkan Selamat Menyambut Tahun Baru 2024 kepada semua mahasiswa UiTM Cawangan Kelantan.\r\n\r\nSambutlah tahun baru dengan senyuman dan semangat baru, jadikanlah setiap detik di tahun baru ini sebagai kisah kebahagiaan yang tak terlupakan.\r\n\r\nSekian, terima kasih.\r\n\r\nSociety Of Information System Management\r\nUiTM Cawangan Kelantan\r\nSesi 2022/2023', 'picture', 'image/3270171835752548304_6631514014.jpeg', '2024-02-05 18:02:05'),
(8, 'PROGRAM ALUMNI SHARING: SHAPING THE NEXT GENERATION', 'Sukacita dimaklumkan bahawa Society of Information System Management UiTM Cawangan Kelantan Sesi 2023/2024 akan mengadakan *Program Alumni Sharing: Shaping The Next Generation*. Butiran program adalah seperti berikut: -\r\n\r\n*🗓 Tarikh: 7 January 2024 (Ahad)*\r\n*🕰 Masa: 12:00 p.m. - 2:00 p.m.*\r\n*🏢 Tempat: HRDA, Blok A, UiTM Cawangan Kelantan Kampus Machang*\r\n\r\n👨‍💼 *Panel Jemputan*\r\n\r\n** En. Razif Alhaj\r\nMedia Creative Executive, Media Oren Selangor\r\n\r\n** En. Zaidi Idris\r\nExecutive Group Technology & Commercialisation.\r\nProject Delivery & Technology, PETRONAS\r\n\r\n📃 E-sijil & kupon merit turut disediakan untuk peserta\r\n\r\n👩‍🎓 Kehadiran pelajar *Semester 5 & 6 program IM245* dan pelajar *Semester 4 CDIM110* adalah *DIMESTIKAN*.\r\n\r\nKehadiran mahasiswa PSM lain juga dialu-alukan.\r\n\r\n📌 Sebarang pertanyaan, sila hubungi:-\r\n\r\nIzzah Natasha: http://www.wasap.my/60194232094\r\n\r\nNor Alia: http://www.wasap.my/601112999592\r\n\r\nSekian, terima kasih.\r\n\r\n*Society of Information System Management (SISMA)*\r\n*UiTM Cawangan Kelantan*\r\n*Sesi 2023/2024*', 'picture', 'image/3271922456663118752_6631514014.jpeg', '2024-02-05 18:02:34'),
(9, 'PROGRAM KEMBARA INOVASI DAN KREATIVITI KEUSAHAWANAN BAGI PELAJAR SEMESTER AKHIR DIPLOMA DAN IJAZAH SARJANA MUDA', 'Telah berlangsungnya program Kembara Inovasi Dan Kreativiti Keusahawanan\r\n\r\nAnjuran:\r\nSociety of Information System Management (SISMA) dengan kerjasama Rakan Digital Pusat Ekonomi Digital (PEDI CHERANG RUKU). Butiran program adalah seperti berikut:\r\n\r\n??Tarikh: 22 November 2023 (Rabu)\r\n??Masa: 12.00 p.m. - 2.00 p.m.\r\n?Tempat: HRDA, UiTM Cawangan Kelantan Kampus Machang\r\n\r\nSekian, terima kasih.', 'picture', 'image/3254493330452911400_6631514014 (1).jpeg', '2024-02-05 18:04:14'),
(10, 'LOVE SCAM: PROTECTING YOUR HEART & WALLET', 'Merujuk perkara di atas, kami barisan pelajar IM2456A akan mengajurkan \"Love Scam: Protecting Your Heart & Wallet\"._* Program ini akan dijalankan secara hybrid. Butiran program adalah seperti berikut:-\r\n\r\n🗓️ Tarikh: 29 November 2023 (Rabu)\r\n🕛 Masa: 9:00 pagi - 1:30 petang\r\n📍 Lokasi: Perpustakaan Tun Abdul Razak (PTAR), UiTM Puncak Perdana & Webex\r\n🔗 Pautan Webex: https://uitm.webex.com/uitm/j.php?MTID=ma957c621e0555cd8d5811ca937b24082\r\n\r\n👨‍💼 Penceramah:\r\nInsp. Hairul Nizam Bin Balalo @ Bolalan\r\nAnalysis Forensic Digital Computer Officer\r\n\r\n🎁 Pelbagai hadiah yang menarik untuk dimenangi\r\n📃 E-sijil turut disediakan!\r\n\r\nKehadiran anda amat dialu-alukan bagi memeriahkan lagi program pada kali ini.\r\n\r\n📌Link Pendaftaran:\r\nhttps://forms.gle/RXV6JFyWpMvSk3cH6\r\n\r\nSebarang pertanyaan sila hubungi:\r\n\r\n📲Fatini:\r\nhttps://wa.me/60142409893\r\n📲Nabil:\r\nhttps://wa.me/60134742565\r\n\r\nSekian, terima kasih.\r\n\r\nYang menjalankan amanah,\r\n\r\nBIRO PROMOSI & PENDAFTARAN\r\nLove Scam: Protecting Your Heart & Wallet.', 'picture', 'image/3242729191632022358_6631514014.jpeg', '2024-02-05 18:06:21'),
(11, 'ARIKH-TARIKH PENTING HARI RAPAT UMUM TAHUN 2024', 'Merujuk perkara di atas, berikut merupakan tarikh-tarikh penting hari rapat umum tahun 2024. Para pelajar diminta untuk peka terhadap tarikh-tarikh tersebut.\r\n\r\nSekian, terima kasih.\r\n\r\nSociety of Information System Management (SISMA)\r\nUiTM Cawangan Kelantan\r\nSesi 2023/2024', 'picture', 'image/3280464459092781506_6631514014.jpeg', '2024-02-05 18:08:21'),
(12, 'PEMAKLUMAN MALAM RAPAT UMUM KPPIM', 'Merujuk Kepada Pemilihan Jawatankuasa Pelajar bagi sesi 23/24. Sukacitanya Kolej Pengajian Pengkomputeran Informatik dan Matematik (KPPIM) akan mengadakan sesi Malam Rapat Umum bersama calon-calon JPP KPPIM seperti butiran berikut:\r\n\r\n??Tarikh: 15 Januari 2024\r\n?Masa : 8:30 mlm - 11:00 mlm\r\n?Tempat: Premier Lounge, UiTM Cawangan Kelantan.\r\n\r\nDengan itu, pihak kami ingin menjemput semua pelajar untuk turut hadir dalam memberi sokongan kepada calon-calon KPPIM yang akan bertanding nanti !\r\n\r\nSekian Terima Kasih. ??\r\n\r\nSociety of Information System Management (SISMA)\r\nUiTM Cawangan Kelantan\r\nSesi 2023/2024', 'picture', 'image/3280526847712172705_6631514014.jpeg', '2024-02-05 18:08:49'),
(13, 'PEMAKLUMAN TARIKH CUTI ULANGKAJI (STUDY WEEK)', 'Merujuk perkara di atas, tempoh cuti ulangkaji bagi semester Oktober 2023 - Februari 2024 adalah berdasarkan ketetapan berikut:\r\n\r\n📌 Tarikh: 22 Januari 2024 - 28 Januari 2024\r\n\r\nSehubungan dengan itu, seluruh mahasiswa UiTM hendaklah cakna\r\ndengan pemakluman ini dan berusaha memanfaatkan peluang yang diberikan untuk mengulang kaji pelajaran sebelum peperiksaan akhir bermula.\r\n\r\nSekian, terima kasih.\r\n\r\nSociety of Information System Management\r\nUiTM Cawangan Kelantan\r\nSesi 2023/2024', 'picture', 'image/3285922408556764704_6631514014.jpeg', '2024-02-05 18:09:26'),
(14, 'PEMAKLUMAN TARIKH TERKINI PROSES EXIT SURVEY SESI OKT 2023 - FEB 2024', 'Merujuk perkara di atas, tempoh bagi proses Exit Survey telah dilanjutkan mengikut ketetapan berikut:\r\n\r\nTarikh: 8 Januari 2024 - 18 Februari 2024\r\n\r\nPara pelajar yang telah melaksanakan Proses Entrance Survey pada 2 - 15 Oktober 2023 yang lalu dan tidak sempat melaksanakan Proses Exit Survey pada tarikh yang ditetapkan sebelum ini diminta untuk mengambil tindakan dengan kadar segera.\r\n\r\nSekian, terima kasih.\r\n\r\n*Society Of Information System Management*\r\n*UiTM Cawangan Kelantan*\r\n*Sesi 2022/2023*', 'picture', 'image/3269178416611796996_6631514014.jpeg', '2024-02-05 18:09:56'),
(15, 'PEMAKLUMAN TARIKH PEPERIKSAAN AKHIR SEMESTER OKT 2023 - FEB 2024', 'Merujuk kepada perkara di atas, tarikh peperiksaan akhir semester Oktober 2023 - Februari 2024 adalah seperti berikut:\r\n\r\nTarikh: 29 Januari 2024 - 16 Februari 2024\r\n\r\nOleh itu, diharapkan para pelajar mengambil cakna terhadap tarikh peperiksaan akhir pada semester ini.\r\n\r\nSekian, terima kasih.\r\n\r\nSociety of Information System Management\r\nUiTM Cawangan Kelantan\r\nSesi 2022/2023', 'picture', 'image/3290370216382928121_6631514014.jpeg', '2024-02-05 18:10:57'),
(16, 'SEMOGA BERJAYA DAN SELAMAT MAJU JAYA', 'Kami barisan ahli jawatankuasa Society of Information System Management (SISMA) ingin mengucapkan semoga berjaya dan selamat maju jaya kepada semua mahasiswa UiTM Cawangan Kelantan dalam peperiksaan akhir sesi Oktober 2023 - Februari 2024.\r\n\r\nSemoga segala urusan para mahasiswa dipermudahkan serta dikurniakan ketenangan dalam menempuhi minggu peperiksaan akhir pada semester ini.\r\n\r\nSekian, terima kasih.\r\n\r\nSociety of Information System Management\r\nUiTM Cawangan Kelantan\r\nSesi 2022/2023', 'picture', 'image/3290370426198797702_6631514014.jpeg', '2024-02-05 18:11:46'),
(17, 'KEPIMPINAN SOCIETY OF INFORMATION SYSYTEM MANAGEMENT SESI 2022|2023', 'Merujuk kepada perkara di atas. Kami, Society of Information System Management (SISMA) UiTM Kelantan sesi 2022/2023 akan meneruskan legasi kepimpinan dan memartabatkan mahasiswa UiTM khususnya pelajar Ijazah Sarjana Muda Sains Maklumat (Kepujian) Pengurusan Sistem Maklumat (IM245) dengan komited.\r\n\r\nDengan rendah hati, kami memohon kepada semua untuk mendoakan agar segala usaha memperkasa kepimpinan mahasiswa dipermudahkan serta kebajikan mahasiswa FPM dapat diperjuangkan secara konsisten.\r\n\r\nSekian, terima kasih.\r\n\r\n#UiTMKELANTAN\r\n#SISMA4U\r\n#mahaSISMA\r\n#SISMAxUiTM', 'picture', 'image/Untitled design.jpg', '2024-02-05 18:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `student_id` varchar(50) DEFAULT NULL,
  `faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `role`, `student_id`, `faculty`) VALUES
(1, 'admin', 'admin', 'administrator', 'admin', NULL, ''),
(3, 'nadim', '123', 'AHMAD NADIM NAJMI BIN FAIZAL', 'user', '2022464266', 'cdim245'),
(5, 'wudda', '111', 'wuddatul', 'user', '78945', 'fskm'),
(11, 'nuraiman', '123', 'NUR AIMAN BIN ASHARI', 'user', '2022879512', 'Information management'),
(12, 'ismail', '123', 'MUHAMAD ISMAIL BIN AZMAN ', 'user', '2021627662', 'Information management'),
(13, 'muiz', '123', 'MUHAMMAD SHAMIERUL MUIZ BIN ABDUL KARIM', 'user', '2022844914', 'Information management'),
(14, 'firdaus', '1234', 'MUHAMMAD FIRDAUS BIN MOHAMED SOHAIMI', 'user', '2021856746', 'Information management'),
(15, 'aiman', '123', 'MOHAMMAD AIMAN BIN ROSELI', 'user', '2022819209', 'Academy of Contemporary Islamic Studies'),
(16, 'Mad', '123', 'MUHAMMAD BIN MAT', 'user', '2022663682', 'Academy of Contemporary Islamic Studies'),
(17, 'syurfina', '123', 'NURUL SYURFINA BINTI SUPIAN', 'user', '2022842112', 'Academy of Contemporary Islamic Studies'),
(18, 'razi', '1234', 'MOHAMMAD SYIRAZI BIN ABU SIN', 'user', '2022477958', 'Academy of Contemporary Islamic Studies'),
(19, 'muhaimin', 'min125', 'MUHAMMAD MUHAIMIN BIN MOHD NAZRI', 'user', '2022868834', 'Academy of Contemporary Islamic Studies'),
(20, 'kimi', 'kimi784', 'MUHAMAD DANIEL HAKIMI BIN AZAHAR', 'user', '2022664504', 'Academy of Contemporary Islamic Studies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
