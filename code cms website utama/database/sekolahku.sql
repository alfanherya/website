-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 06:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tgla` varchar(50) DEFAULT NULL,
  `tmpt` varchar(100) DEFAULT NULL,
  `wkt` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id`, `judul`, `isi`, `tgla`, `tmpt`, `wkt`, `foto`, `id_kategori`) VALUES
(4, '1', '<p>1</p>', '2020-07-30', '1', '1', '20200726-1.jpg', 1),
(5, '31323123', '<p>3123123123</p>', '3123123123', '3123123', '3123123', '20200729-31323123.jpg', 1),
(6, '4rr3r', '<p>r4r4r</p>', 'r4r4r', '4r4r3r', 'r3r3r', '20200729-4rr3r.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`) VALUES
(13, 'Seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 Tahun 2019', '<p>UT School bekerjasama dengan SMK Negeri 1 Wanareja akan melaksanakan seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 pada awal tahun 2019 nanti.</p><p>Kesempatan ini terbuka untuk umum baik Alumni SMK Negeri 1 Wanareja maupun dari sekolah lain boleh mengikuti asalkan memenuhi kriteria yang dipersyaratkan.</p><p>Tentang UT School :</p><ul><li><p>Visi</p><p>Menjadi lembaga pendidikan keterampilan mekanik dan operator alat &ndash; alat berat terbaik di dunia.</p></li><li><p>Misi</p><ul><li>Menciptakan sumberdaya manusia yang berkualitas, profesional dan berwawasan internasional.</li><li>Menjadi sumber IPTEK terapan.</li><li>Menciptakan jaringan yang luas dengan industri &ndash; industri didalam dan di luar negeri</li></ul></li><li><p>Tujuan</p><ul><li>Menciptakan tenaga terampil di bidang mekanik, operator dan instruktur alat berat profesional yang siap karya dan siap latih.</li><li>Menjadi lembaga pendidikan keterampilan mekanik terbaik di dunia.</li><li>Turut serta untuk mencerdaskan kehidupan bangsa.</li></ul></li><li><p>Nilai</p><ul><li>Integritas (integrity)</li><li>Santun (Good Manners)</li><li>Berani (Courageous)</li></ul></li></ul><p>============================================</p><ol><li>UT SCHOOL membuka kelas angkatan 26 tahun ajaran 2019/2020&nbsp;<strong>Prodi MEKANIK ALAT BERAT</strong>&nbsp;untuk alumni SMK/SMA tahun 2016/2017/2018 jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><ol><li>UT SCHOOL membuka kelas angkatan 27 dan 28 tahun ajaran 2019/2020/2021 Prodi&nbsp;<strong>MEKANIK DAN OPERATOR ALAT BERAT</strong>&nbsp;untuk siswa SMK/SMA yang masih duduk di kelas 3&nbsp; jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><p>Dengan kriteria jenis kelamin laki-laki, tinggi badan minimum 164 CM, Tidak berkacamata, Tidak Bertato, Tidak Butawarna, Tidak Bertindik serta Sehat Jasmani dan Rohani.</p><p>Waktu Pendaftaran mulai Sekarang sampai dengan akhir Desember 2018</p><p>Tempat Pendaftaran di BKK SMK Negeri 1 Wanareja</p><p><strong>Pelaksanaan test adalah:</strong></p><ul><li>Hari, tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Senin dan Selasa, 14 dan 15 Januari 2019</li><li>Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 07.30 sampai selesai</li><li>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Aula SMK Negeri 1 Wanareja</li><li>Yang berminat bisa langsung mengisi Formulir disini&nbsp;<a target=\"_blank\" href=\"https://goo.gl/rsWEUv\">https://goo.gl/rsWEUv</a></li></ul><p>Demikian info dari BKK Mandiri SMK Negeri 1 Wanareja. Semoga informasi ini bermanfaat. Jangan lupa share melalui sosial media kepada sahabat, kerabat atau teman yang membutuhkan.</p>', '2020-01-10', '20200110-seleksi-calon-siswa-ut-school-angkatan-26,-27-dan-28-tahun-2019.jpg', 3),
(14, 'Belajar Sehari Di Luar Kelas', '<p>Menindaklanjuti Surat dari Cabang Dinas Pendidikan Wilayah X Pemerintah Provinsi Jawa Tengah nomor : 427/01520/XI/2019 dan Surat dari Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana nomor : 421.7/35551 Tanggal 31 Oktober 2019 hal Pelaksanaan Sehari Belajar di Luar Kelas bahwa merupakan salah satu bentuk pengembangan Sekolah Ramah Anak.</p><p>Pada hari kamis, 7 November 2019 SMK Negeri 1 Wanareja melaksanakan Belajar sehari di luar kelas dengan urutan acara sebagai berikut :</p><ul><li>Menyambut siswa yang datang ke sekolah dengan senyum, sapa, salam. Kegiatan ini bertujuan untuk menanamkan Penguatan Pendidikan Karakter (PPK).</li><li>Apel Pagi bersama tim &amp; siswa Menyanyikan lagu Indonesia Raya (3 stanza).</li><li>Seluruh warga sekolah menyanyikan lagu Indonesia Raya 3 stanza dengan sikap siap sempurna.</li><li>Siswa diajak untuk melaksanakan cuci tangan sebelum makan. Kegiatan ini bertujuan untuk membiasakan Prilaku Hidup Bersih dan Sehat (PHBS).</li><li>Berdoa bersama sebelum makan dilakukan untuk meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa Sarapan bersama, siswa memakan sarapan sehat yang disiapkan oleh orangtua masing-masing.</li><li>Berdoa setelah makan.</li><li>Cuci tangan setelah makan.</li><li>Siswa diajak untuk memeriksa lingkungan sekolah. Tanaman, barang, atau hal-hal yang membahayakan anak agar disingkirkan.</li><li>Memeriksa lampu, peralatan listrik, dan kran air. Jika tidak dipakai, agar dimatikan untuk menghemat energi.</li><li>Melaksanakan kegiatan membaca buku di luar kelas selama 15 menit untuk meningkatkan gerakan literasi sekolah (GLS).</li><li>Melaksanakan simulasi evakuasi bencana melalui lagu dan gerak selama 10 menit. Melaksanakan senam germas selama 5 menit.</li><li>Siswa diajak melaksanakan permainan tradisional selama 45 menit. Permainan ini disesuaikan dengan masing-masing daerah.</li><li>Melakukan tepuk hak anak dan yel-yel sekolah ramah anak selama 7 menit.</li><li>Melakukan deklarasi sekolah ramah anak selama 5 menit Pelantikan Tim Sekolah Ramah Anak selama 5 menit.</li><li>Masing-masing sekolah diharapkan membentuk Tim Sekolah Ramah Anak Kegiatan akhir yaitu penutupan.</li><li>Seluruh siswa diajak menyanyikan lagu Maju Tak Gentar (5 menit).</li></ul>', '2020-01-10', '20200110-belajar-sehari-di-luar-kelas.jpg', 3),
(15, 'Upacara Hari Pahlawan Tahun 2019', '<p>Wanareja &ndash; SMK Negeri 1 Wanareja pada hari Minggu, 10 November 2019 walaupun bertepatan dengan hari libur tetap melaksanakan Upacara Memperingati Hari Pahlawan tahun ini. Upacara hari ini diikuti oleh semua Guru, Karyawan &amp; Siswa dengan penuh hikmad. Sebagai pembina upacara beliau Bapak Dayatudin, SP menyampaikan amanat dari Menteri Sosial Republik indonesia Juliani P Batubara.</p><p>Berikut amanat yang disampaikan pada Upacara Hari Pahlawan tahun ini :</p><p>Assalamu&rsquo;alaikum WR.Wb.<br />salam sejahtera bagi kita semua<br />Om Swasti Astu<br />Nano Buddhaya<br />Salam Kebajikan</p><p>Bapak/Ibu, sebangsa dan setanah air</p><p>Puji syukur marilah kita panjatkan kehadirat Allah SWT, Tuhan Yang Maha Kuasa, atas limpahan rahmat dan karuniaNya, pada hari ini di seluruh pelosok tanah air dan Perwakilan RI di seluruh Negeri, kita dapat melaksanakan Upacara Bendera dan mengheningkan Cipta serentak selama 60 detik untuk memperingati Hari Pahlawan 10 November 2019 dengan khidmat.</p><p>Setiap Hari Pahlawan, kita diingatkan kembali kepada peristiwa pertempuran 10 November 1945 di Surbaya sebagai salah satu momen paling bersejarah dalam merebut kemerdekaan Indonesia.</p><p>Pada pertempuran tersebut rakyat bersatu padu, berjuang, pantang menyerah melawan penjajah yang ingin menancapkan kembali kekuasaannya di Indonesia.</p><p>Peristiwa Perang mengingatkan kita bahwa kemerdekaan yang kita rasakan saat ini tidaklah datang begitu saja, namun memerlukan perjuangan dan pengorbanan yang luar biasa dari para pendahulu negeri. semangat yang ditunjukkan para pahlawan dan pejuang tersebut hendaknya perlu terus ditumbuhkembangkan di dalam hati sanubari segenap insan Warga Negara Indonesia.</p><p>Dengan Peringatan Hari Pahlwan diharapkan kita akan lebih menghargai jasa dan pengorbanan para pahlawan, sebagaimana ungkapan salah seorang The Founding Fathers kita Bung Karno yang menyatakan bahwa &ldquo;&hellip;.hanya bangsa yang menghargai jasa para pahlawannya dapat menajdi bangsa yang besar&hellip;&rdquo;. Selain itu peringatan Hari Pahlawan kita bangkitkan semangat berinovasi bagi anak &ndash; anak bangsa untuk menjadi pahlawan masa kini, sebagaimana tema peringatan hari pahlawan masa kini.</p><p>Menjadi Pahlawan Masa Kini dapat diakukan oleh siapapun warga negara Indonesia, dalam bentuk aksi &ndash; aksi nyata memperkuat keutuhan NKRI, seperti tolong menolong sesama yang terkena musibah, tidak melakukan provokasi yang dapat menggangu ketertiban umum, tidak menyebarkan berita hoax, tidak melakukan perbuatan anarkis atau merugukan orang lain dan sebagainnya.</p><p>Jika dahulu semangat kepahlawanan ditunjukkan melalui pengorbanan tenaga, harta bahakan nyawa. sekarang, untuk menajdi pahlawa, bukan hanya mereka yang berjuang mengangkat senjata mengusir penjajah, tetapi kita juga bisa, dengan cara menorehkan prestasi di berbagai bidang kehidupan, memberikan kemaslahatan bagi masyarakt, membawa harum nama bangsa di mata Internasional.</p><p>Peringatan Hari Pahlawan kiranya dapat meningkatkan kesadaran kita untuk lebih mencintai tanah air dan menjaganya sampai akhir hayat.</p><p>Jangan biarkan keutuhan NKRI yang telah dibangun para pendahulu negeri dengan tetesan darah dan air mata menjadi sia-sia. jangan biarkan tangan-tangan jahil atau pihak yang tidak bertanggungjawab merusak persatuan dan kesatuan bangsa. jangan biarkan negeri kita terkoyak, tercerai berai, terprovokasi untuk saling menghasut dan berkonflik satu sama lain.</p><p>Mari kita maknai hari pahlawan hari pahlawan ini dengan wujud nyata, bekerja dan bekerja membangun negeri menuju Indonesia maju.</p><p>Saudara sebangsa dan setanah air, hari pahlawan kiranya bukan hanya bersifat seremonial semata tetapi dapat diisi dengan berbagai akifitas yang dapat menyuburkan rasa nasionalisme dan meningkatkan rasa kepedulian untuk menolon sesama yang membutuhkan.</p><p>Dengan menjadikan diri kita sebagai Pahlawan masa kini, maka permasalahan yang melanda bangsa dewasa ini dapat teratasi. untuk itu marilah kita terus menerus berupaya memupuk nilai kepahlawanan agar tumbuh subur dalam hati sanubari segenap insan masyarakat Indonesia.</p><p>Selamat Hari Pahlawan 2019, semoga Allah SWT, Tuhan Yang Maha Kuasa senantiasa memberikan bimbingan dan kekuatan kepada bangsa Indonesia agar dapat menjaga keutuhan NKRI yang telah diperjuangkan oleh para pendahulu negeri. sekali lagi jadilah pahlawan masa kini yang membanggalkan negeri.</p><p>Sekian, Terima Kasih<br />Wassalamu&rsquo;alaikum Wr.Wb.</p>', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2019.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tgla` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `judul`, `isi`, `tgla`, `foto`, `id_kategori`) VALUES
(3, 'Begini Persiapan Salat Id di Jakarta Islamic Centre', '<p>Kementerian Agama (Kemenag) mengimbau, agar shalat Idul pada tahun ini dilaksanakan di rumah.</p>', 'Kamis, 30 Jul 2020 14:00 WIB', '20200730-begini-persiapan-salat-id-di-jakarta-islamic-centre.jpeg', 1),
(4, 'qwerty', '<p>rdytdu</p>', '12-08-2020', '20200731-qwerty.jpg', 2),
(5, '234', '<p>esydrty</p>', '12-09-2019', '20200731-234.jpg', 1),
(6, 'fyfyt', '<p>tfcct</p>', 'tffyt', '20200731-fyfyt.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bukutamu`
--

CREATE TABLE `tbl_bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bukutamu`
--

INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `isi`) VALUES
(3, 'Fakhrul Fanani Nugroho', 'fakhrulnugroho@gmail.com', 'Websitenya sangat bagus dan menarik!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `j_kelamin` enum('L','P') DEFAULT NULL,
  `t_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `s_pegawai` enum('NO_DATA','PNS','GTT','PTT') DEFAULT NULL,
  `nip` int(25) DEFAULT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `univ` varchar(50) NOT NULL,
  `alamat` text,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `j_kelamin`, `t_lahir`, `tgl_lahir`, `s_pegawai`, `nip`, `pendidikan`, `univ`, `alamat`, `email`, `telp`, `foto`) VALUES
(13, 'Farita, S. Pd.SD', 'P', 'Pekalongan', '1966-08-30', 'PNS', 2147483647, 'S1 PGSD', 'Universitas Terbuka', 'Jl. WR. Supratman Gang 9 No.40 RT 06 RW 04 Kelurahan Panjang Wetan, Kota Pekalongan', 'farita0830@gmail.com', '085725859405', 'farita,-s.-pd.sd.jpeg'),
(14, 'Wisnu Wardana, S. Pd', 'L', 'Batang', '1995-12-29', 'PNS', 2147483647, 'S1 PJKR', 'Universitas PGRI Semarang', 'RT 06 RW 04 Desa Gondang, kec Subah, kab Batang', 'wwardana024@gmail.com', '085742113163', 'wisnu-wardana,-s.-pd.jpeg'),
(15, 'Nur Fajar Mulyaningrum', 'P', 'Pekalongan', '1986-02-14', 'PNS', 2147483647, 'S1 PGSD', 'Universitas Terbuka', 'Perum Panjang Indah 3 jl palapa 2 No. 4 Pekalongan', 'dzakialmair05@gmail.com', '085842349705', 'nur-fajar-mulyaningrum.jpeg'),
(16, 'RIKA SEPTIYANI', 'P', 'Batang', '1982-09-25', 'PNS', 2147483647, 'S1 PGSD', 'Universitas Negeri Semarang', 'Hunian Islami Arrayyan #3 Jln. Belimbing Raya C.43 Rt.07 Rw.04 Kalisalak Batang', 'zakariza@gmail.com', '085226740885', 'rika-septiyani.jpeg'),
(17, 'Mulyadi, S.Pd', 'L', 'Sragen', '1964-03-30', 'PNS', 2147483647, 'S1', 'Universitas Negeri Semarang', 'Jl.Dr. Wahidin Noyontaan Gg.VI/13A Pekalongan', 'noyontaanmulyadi@mail.com', '085877940235', 'mulyadi,-s.pd.jpeg'),
(18, 'Hestin Diyah Widiyowati, S. Pd', 'P', 'Pekalongan', '1972-08-08', 'PNS', 2147483647, 'S1 PGSD', 'Universitas Terbuka', 'Noyontaansari RT002/006 No 1224 Kota Pekalongan', 'hestindw88@gmail.com', '081548063148', 'hestin-diyah-widiyowati,-s.-pd.jpeg'),
(19, 'Chaeriyah, SPdI', 'P', 'Pekalongan', '1961-11-06', 'PNS', 2147483647, 'S1 Tarbiyah', 'STAIN ', 'Jl hos cokroaminoto gg 14 no 36 Pekalongan', 'Chaeriyah61@gmail.com', '085743622022', 'chaeriyah,-spdi.jpeg'),
(20, 'Ristianingrum, S. Pd', 'P', 'Pekalongan', '1979-12-05', 'PTT', 0, 'S1 PGSD', 'Universitas Terbuka', 'Jl. Lapangan Sekalong RT.04/RW.05, Karangasem Selatan, Batang', 'sanyadewi@gmail.com', '00', 'ristianingrum,-s.-pd.jpg'),
(21, 'Fx.Sujarwanto, S.Pd.SD', 'L', 'Klaten', '1962-08-06', 'PNS', 2147483647, 'S1 PGSD', 'Universitas Terbuka', 'Jl Q Surantaka No 23 Dekoro Rt 1 Rw 12 Pekalongan Timur Kota Pekalongan', 'sujarwantoarien696@gmail.com', '082313544272', 'fx.sujarwanto,-s.pd.sd.jpeg'),
(22, 'Ikmal Kholis, S. Pd.I', 'L', 'Batang', '1969-07-05', 'PNS', 2147483647, 'S1 Tarbiyah', 'STAIN', 'Jln. Gajah Mada Gg. Kakak Tua Bogoran Kauman Batang', 'Ikmalkholis1969@gmail.com', '08156922664', 'ikmal-kholis,-s.-pd.i.jpeg'),
(23, 'UMI THOHIROH, S. Pd.I', 'P', 'Pekalongan', '1996-05-09', 'PTT', 0, 'S1', 'IAIN Pekalongan', 'Jalan Irian Kebulen Gg. 1 Rt. 1 Rw. 11 Pekalongan', 'miumithohiroh996@gmail.com', '089653105239', 'umi-thohiroh,-s.-pd.i.jpeg'),
(24, 'Izza Ni\'amah, S. Pd', 'P', 'Pemalang', '1990-01-09', 'PNS', 2147483647, 'S1', 'IKIP PGRI SEMARANG', 'Ds. Jatirejo RT.04 RW.07 Kecamatan Ampelgading Kabupaten Pemalang', 'izzaniamah45@gmail.com', '085640153153', '.jpeg'),
(25, 'Mafuwah, S. Pd.I', 'P', 'unknown', '1945-08-17', 'PNS', 0, 'S1 Tarbiyah', 'Unknown', 'Unknown', 'unknown', 'unknown', 'mafuwah,-s.-pd.i.jpeg'),
(26, 'Tri Mulyaningsih, S. Pd', 'P', 'Unknown', '1945-08-17', 'PNS', 0, 'S1', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'tri-mulyaningsih,-s.-pd.jpeg'),
(27, 'Urip Purwaningsih, S. Pd', 'P', 'Unknown', '1945-08-17', 'PNS', 0, 'S1', 'Unknown', 'Unknown', 'Unknown', '1', 'urip-purwaningsih,-s.-pd.jpeg'),
(28, 'Khubaidillah, S. Pd', 'L', 'Unknown', '1945-08-17', 'PTT', 0, 'S1', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'khubaidillah,-s.-pd.jpeg'),
(29, 'MADURETNO OKTAVIA, ST', 'P', 'Pekalongan', '1984-10-16', 'PTT', 0, 'S1', 'Universitas Muhammadiyah Surakarta', 'JL LIMAS II NO 9 PERUMAHAN LIMAS INDAH KOTA PEKALONGAN', 'hifzimaulana5@gmail.com', '08156677976', 'maduretno-oktavia,-st.png'),
(30, 'Hadza Muhammad Amirul Bahar, S. Pd', 'L', 'Batang', '0000-00-00', 'PTT', 0, 'S1 PGSD', 'Universitas PGRI Semarang', 'Jl Sunan Ampel kebulen gg 13 no. 30 Pekalongan Barat, Pekalongan', 'hadzamuhammadamirulbahar@gmail.com', '08986594554', 'hadza-muhammad-amirul-bahar,-s.-pd.jpeg'),
(31, 'Dhimas Oeka Aji Wicaksana', 'L', 'Batang', '1987-03-31', 'PTT', 0, 'S1 PGSD', 'Universitas PGRI Semarang', 'Jl Dr Sutomo Gang Waru No 37 Watesalit Batang ', 'dhimaswicaksana12@gmail.com', '0895412554407', '.jpeg'),
(32, 'Risma Rizqi Rosyada, A.Md', 'P', 'Pekalongan', '1995-09-18', 'PTT', 0, 'DIII', 'STMIK Widya Pratama Pekalongan', 'Perumahan Tirto Indah Baru 7 No.21A Tirto, Pekalongan Barat, Pekalongan', 'rismarizqi18@gmail.com', '085643306519', 'risma-rizqi-rosyada,-a.md.jpeg'),
(33, 'IGA RISKIYANTI', 'P', 'Pekalongan', '1992-10-25', 'PTT', 0, 'DIII', 'POLITEKNIK PUSMANU', 'Jl.KHM. MANSYUR BENDAN Gg. 7 TIMUR NO. 43, Pekalongan', 'riskiyanti.iga92@gmail.com', '085742434712', 'iga-riskiyanti.jpeg'),
(34, 'SUNARTO', 'L', 'Grobogan', '1977-01-20', 'PNS', 2147483647, 'SMP ( Penjaga Sekolah )', 'KPB MELATI', 'NOYONTAAN GG.1X NO.28 PEKALONGAN', 'Sunartonarto170@gmail.com', '082135084917', 'sunarto.jpeg'),
(35, 'Mustofa', 'L', 'Pekalongan', '1945-08-17', 'PTT', 0, 'SMA ', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'mustofa.jpeg'),
(36, 'Aminuri', 'L', 'Unknown', '1945-08-17', 'PNS', 0, 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'aminuri.jpeg'),
(37, 'Mahfud', 'L', 'Pekalongan', '1945-08-17', 'PTT', 0, 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'mahfud.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_agenda`
--

CREATE TABLE `tbl_kategori_agenda` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_agenda`
--

INSERT INTO `tbl_kategori_agenda` (`id`, `nama_kategori`) VALUES
(1, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_artikel`
--

CREATE TABLE `tbl_kategori_artikel` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_artikel`
--

INSERT INTO `tbl_kategori_artikel` (`id`, `nama_kategori`) VALUES
(3, 'Kegiatan Sekolah'),
(10, 'Event'),
(12, 'asdw');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_berita`
--

CREATE TABLE `tbl_kategori_berita` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_berita`
--

INSERT INTO `tbl_kategori_berita` (`id`, `nama_kategori`) VALUES
(1, 'Kategori'),
(2, 'Anggit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_pengumuman`
--

CREATE TABLE `tbl_kategori_pengumuman` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_pengumuman`
--

INSERT INTO `tbl_kategori_pengumuman` (`id`, `nama_kategori`) VALUES
(3, 'Sains');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`, `foto`) VALUES
(3, 'Administrator', 'admin', '$2y$10$9uAKnax9/7HoMVtMFWDUEe6GhtWdq5SIn75AWwHnYboKctXCfybVG', 'administrator.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `tgla` varchar(30) DEFAULT NULL,
  `id_kategori` int(10) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `judul`, `isi`, `tgla`, `id_kategori`, `foto`) VALUES
(1, 'Kelulusan', '<p>Kelulusan Siswa</p>', '10-12-2020', 3, '20200727-kelulusan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang_website`
--

CREATE TABLE `tbl_tentang_website` (
  `id` int(11) NOT NULL,
  `tentang_website` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentang_website`
--

INSERT INTO `tbl_tentang_website` (`id`, `tentang_website`) VALUES
(1, '<p>--coming soon--</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `visi_misi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `visi_misi`) VALUES
(1, '<p><strong>Visi&nbsp;</strong></p><p>--coming soon--</p><p><strong>Misi&nbsp;</strong></p><p>--coming soon--</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori_agenda`
--
ALTER TABLE `tbl_kategori_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori_pengumuman`
--
ALTER TABLE `tbl_kategori_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tentang_website`
--
ALTER TABLE `tbl_tentang_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_bukutamu`
--
ALTER TABLE `tbl_bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_kategori_agenda`
--
ALTER TABLE `tbl_kategori_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kategori_artikel`
--
ALTER TABLE `tbl_kategori_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kategori_berita`
--
ALTER TABLE `tbl_kategori_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kategori_pengumuman`
--
ALTER TABLE `tbl_kategori_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tentang_website`
--
ALTER TABLE `tbl_tentang_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_artikel` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
