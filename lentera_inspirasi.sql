-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2016 at 07:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lentera_inspirasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `remarks` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `phone`, `amount`, `remarks`, `status`) VALUES
(1, 'Rama', 'rama@localhost', '08115522198', 100000, 'test', '1'),
(3, 'rama', 'rama@localhost', '12345', 1000000, 'test', '0'),
(4, 'rama', 'rama@localhost', '12345', 1000000, 'test', '0');

-- --------------------------------------------------------

--
-- Table structure for table `finance_report`
--

CREATE TABLE `finance_report` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_report`
--

INSERT INTO `finance_report` (`id`, `date`, `link`, `remarks`) VALUES
(2, 'Januari 2016', 'januari.xls', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `pic`, `remarks`) VALUES
(1, 'Bapak Ahtang', '1467535830647-1030x687.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `position`, `pic`) VALUES
(3, 'Shintya GA', 'Head CO', 'Shintya-300x233-300x233.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `jenis_menu` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `jenis_menu`, `content`) VALUES
(1, 'tentang_kami', '<div class="avia_textblock " style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px rgb(225, 225, 225); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.65em; font-family: inherit; vertical-align: baseline; clear: both;">\r\n<h2 style="font-style:inherit; text-align:center">TENTANG KAMI</h2>\r\n</div>\r\n\r\n<div class="avia_textblock " style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px rgb(225, 225, 225); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.65em; font-family: inherit; vertical-align: baseline; clear: both;">\r\n<p style="text-align:justify">Dalam ranah internasional, Indonesia dikategorikan sebagai salah satu negara yang berperan besar dalam perkembangan populasi lansia. Hal ini didukung oleh sensus penduduk pada tahun 2010, yang mencatat bahwa jumlah lansia mencapai 18 juta penduduk. Dari 18 juta penduduk ini, 2,9 juta di antaranya memiliki akses terbatas akan layanan kesehatan maupun jenis pelayanan sosial lainnya. Terlebih dikarenakan tidak semua lansia memiliki akses untuk jaminan pensiun.</p>\r\n\r\n<p style="text-align:justify"><strong>Lansia dalam Kacamata Sosial</strong><br />\r\nKebiasaan dari masyarakat kita adalah seringkali kita terlalu terfokus pada apa yang menjadi sorotan. Suatu konflik diklaim membutuhkan perhatian khusus ketika sudah banyak mata yang menaruh peduli. Sehingga apa yang menjadi pilihan mayoritas selalu memenangkan posisi pertama, berakibat pada minoritas yang dibiarkan berada pada nomor kesekian.&nbsp;Inilah pandangan kami terhadap para lansia ini, sebagai suatu isu yang dikategorikan minoritas. Padahal dengan estimasi PBB akan populasi lansia di Indonesia yang diperkirakan mencapai 74 juta penduduk (setara 25% dari total populasi) pada tahun 2050, perlu ada sorotan lebih terhadap isu mengenai lansia.Dari total populasi lansia yang ada, tak jarang dari mereka merupakan sebatang kara dan memikul pekerjaan berat demi menghidupi diri sendiri. Dari mereka ada yang masih bugar namun pekerjaan yang dilakoni belum bisa mencukupi kebutuhan sehari-hari. Ada juga yang memiliki keterbatasan fisik atau menderita gangguan kesehatan, namun memiliki akses terbatas dikarenakan kondisi ekonomi. Bahkan ada juga yang dianggap sebagai beban oleh keluarganya sendiri.</p>\r\n</div>\r\n\r\n<div class="avia_textblock " style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px rgb(225, 225, 225); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.65em; font-family: inherit; vertical-align: baseline; clear: both;">\r\n<h2 style="font-style:inherit; text-align:center">VISI MISI</h2>\r\n</div>\r\n\r\n<div class="avia_textblock " style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px rgb(225, 225, 225); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.65em; font-family: inherit; vertical-align: baseline; clear: both;">\r\n<p style="text-align:justify">Didorong oleh naluri kemanusiaan dan keinginan untuk berkontribusi secara nyata menuju Indonesia yang lebih baik, kami menggalang aksi yang secara khusus bergerak untuk para lansia.&nbsp;Target kami adalah bersama-sama membantu menuntaskan apa yang menjadi beban bagi para lansia dengan semangat dan pengharapan tinggi untuk berjuang serta merealisasikan apa yang sudah lama berdiam dalam katalog mimpi mereka, sekecil apapun itu wujudnya.&nbsp;Kami sadar bahwa gerakan perubahan sekecil apapun hanya akan berdampak lebih besar ketika mampu mengundang orang lain untuk melakukan aksi serupa. Karenanya kami mengajak Anda untuk turut andil menyebarkan aksi positif demi mewujudkan Indonesia yang lebih baik. Tak perlu menunggu salju turun di Jakarta karena momentum paling tepat untuk berpartisipasi aktif adalah sekarang.</p>\r\n</div>'),
(2, 'tujuan', '<h2>DARI KAMI TERUNTUK MEREKA</h2>\r\n\r\n<div class="avia_textblock " style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px rgb(225, 225, 225); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.65em; font-family: inherit; vertical-align: baseline; clear: both;">\r\n<p>Tidak hanya memberikan kontribusi menuju perubahan yang lebih baik, kami memiliki harapan bahwa kami tepat sasaran perihal kepada siapa kontribusi kami ditujukan. Kami menyeleksi dan mengobservasi kandidat melalui prosedur yang telah ditentukan. Tidak hanya tepat sasaran, wujud bantuan yang kami berikan pun dispesifikasikan sebagai berikut.</p>\r\n</div>\r\n\r\n<div class="avia_textblock " style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px rgb(225, 225, 225); font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.65em; font-family: inherit; vertical-align: baseline; clear: both;">\r\n<p>Dengan harapan target kami bisa tepat sasaran, kami memastikan bahwa kandidat yang bersangkutan telah terikat kontrak yang legal dengan tim kami. Telah digarisbawahi pula bahwa bantuan yang kami berikan bersifat sementara dan tim kami tidak bertanggung jawab atas kelangsungan hidup kandidat bersangkutan secara permanen.</p>\r\n\r\n<h4>KESEHATAN</h4>\r\n\r\n<p>Seiring meningkatnya jumlah populasi lansia di Indonesia, semakin tinggi pula risiko berkembangnya penyakit degeneratif seperti, hipertensi, penyakit jantung dan koroner, Alzheimer, demensia, hingga diabetes mellitus. Wujud bantuan yang kami berikan dalam bidang kesehatan dapat berupa bantuan fisik secara langsung seperti bantuan biaya atau bahkan menyediakan peralatan kesehatan khusus yang dibutuhkan. Selain itu kami juga siap membantu terkait hal-hal prosedural seperti pelunasan biaya rawat inap dan permohonan bantuan dana asuransi kesehatan seperti BPJS dan sejenisnya.</p>\r\n\r\n<h4>EKONOMI</h4>\r\n\r\n<p>Tidak hanya yang muda yang memiliki semangat hidup. Kami terbuka pada para lansia dengan kebutuhan khusus dalam perekonomiannya. Dimulai dari menyediakan modal awal untuk membuka peluang usaha bagi yang masih mampu bekerja, hingga membimbing proses pemasaran. Dengan demikian bantuan yang kami berikan dampaknya tidak untuk jangka pendek, namun juga jangka panjang.</p>\r\n\r\n<h4>IMPIAN</h4>\r\n\r\n<p>Tidak hanya semangat hidup, lansia juga memiliki impian sederhana yang hanya mampu diwujudkan dengan usaha keras dan semangat yang tak putus. Keinginan kuat dan kerja keras para lansia seringkali memiliki pengaruh kuat untuk menginspirasi orang di sekitarnya. Diharapkan dengan membantu para lansia mewujudkan impian sederhana mereka, kami bisa meneruskan inspirasi yang telah disampaikan para lansia kepada anak-anak muda Indonesia</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `pic`, `content`, `date`, `user`, `status`) VALUES
(3, 'Yang Pertama', 'bapak.jpg', '<p>Beliau adalah seorang pedagang keliling di daerah Jatinangor. Yang beliau jual bukanlah barang yang menjadi kebutuhan sehari-hari semua orang, melainkan hanya barang kecil, keripik dan bros. Sebagaimana kebanyakan pedagang kecil, tak pernah ada cukup uang yang bisa dibawa kembali ke rumah.</p>\r\n\r\n<p>Lentera Inspirasi tergerak untuk membantu si Bapak. Kami merencanakan untuk meringankan sedikit beban yang ditanggung beliau. Dalam waktu dekat, kami akan segera turun tangan, melakukan hal nyata yang bermanfaat bagi beliau.</p>\r\n', '2016-07-28 00:12:21', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id`, `title`, `pic`, `content`, `date`, `user`, `status`) VALUES
(3, 'Bapak Ahtang', '1467535830647-1030x687.jpg', '<p>Bapak Ahtang, begitu beliau akrab disapa. Lelaki paruh baya ini sehari-hari kerap terlihat di Jatinangor, membawa barang yang menjadi tumpuan hidup si Bapak dan keluarganya. Keripik dan Bros. Ya, sehari-hari Bapak Ahtang berjualan keripik dan bros di Jatinangor. Keripik dan bros yang tak seberapa mahal itulah yang menjadi sumber penghasilan satu-satunya dari Bapak Ahtang. Satu-satunya cara untuk tetap mengalirkan rezeki bagi istri dan anak perempuannya.</p>\r\n\r\n<p>Sudah sekitar lima tahun Bapak Ahtang menjadi penjual keripik dan bros di Jatinangor. Setiap hari beliau harus berangkat dari Bandung ke Jatinangor hanya untuk berjualan. Bukan tanpa alasan, beliau tidak membuat keripik itu sendiri, tetapi keripik itu didapat dari orang lain di Bandung lalu beliau jual di Jatinangor. Seribu rupiah, harga keripik yang beliau jual dan lima ratus untuk setiap bros yang ditawarkan. Sangat tidak masuk akal jika uang yang beliau dapatkan dari berjualan keripik dan bros mampu untuk menopang hidup keluarganya.</p>\r\n\r\n<p>Beban yang ditanggung Bapak Ahtang tidaklah kecil. Istri yang saat ini sakit, anak yang sekarang tak lagi bersuami karena suaminya telah meninggal, dan kontrakan yang belum terbayar menjadi beban yang begitu terasa bagi Bapak Ahtang. Istrinya dahulu sempat ikut membantu berjualan, tetapi akhirnya terpaksa berhenti karena penyakit maag yang diderita makin kronis. Istrinya pernah mendapatkan perawatan medis, tetapi ketiadaan biaya menyebabkan Bapak Ahtang memilih untuk merawat istrinya sendiri di rumah.</p>\r\n\r\n<p>Kontrakan yang ditinggali saat ini pun telah habis masa sewanya. Si Pemilik kontrakan telah berkali-kali meminta Bapak Ahtang untuk membayar uang sewa, sedangkan Bapak Ahtang sendiri tak lagi sanggup untuk membayar uang sewa. Dengan terpaksa, beliau dan istrinya pindah ke rumah anaknya yang berada di Cicaheum.</p>\r\n\r\n<p>Mendiang suami dari anak Bapak Ahtang memang sempat membangun sebuah rumah, namun sampai saat ini rumah tersebut belum selesai juga dibangun dan listrik pun belum terpasang. Di rumah itulah saat ini Bapak Ahtang, istri, dan anaknya perempuannya tinggal.</p>\r\n\r\n<p>Inilah Bapak Ahtang, yang sekalipun dalam kondisi sulit, masih tetap bersemangat untuk berusaha menjalani hidup. Berat, tapi tak pernah terpikir untuk menyerah pada keadaan. Berat, tapi tak pernah mencoba memadamkan harapan untuk memperbaiki hidup.</p>\r\n\r\n<p>Tabik.</p>\r\n', '2016-07-28 00:12:52', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `level` enum('Admin','Operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `level`) VALUES
(1, 'admin', 'ad', 'admin@localhost', 'f030991a5e8757e755821c044ad3a2568465e502', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_report`
--
ALTER TABLE `finance_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `finance_report`
--
ALTER TABLE `finance_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
