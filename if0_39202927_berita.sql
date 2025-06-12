-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql112.infinityfree.com
-- Generation Time: Jun 11, 2025 at 10:59 PM
-- Server version: 10.6.19-MariaDB
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
-- Database: `if0_39202927_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `body`, `image`) VALUES
(1, 'Hasil Indonesia vs China Skor 1-0: Garuda Tutup Pintu Tim Naga ke Piala Dunia 2026', 'hasil-indonesia-vs-china-skor-1-0-garuda-tutup-pintu-tim-naga-ke-piala-dunia-2026', 'Timnas Indonesia mencetak sejarah penting dengan mengalahkan China 1-0 dalam lanjutan Kualifikasi Piala Dunia 2026 zona Asia. Bermain di hadapan ribuan pendukung di Stadion Gelora Bung Karno, skuad Garuda tampil disiplin dan penuh semangat sepanjang pertandingan. Gol tunggal yang dicetak oleh penyerang muda Indonesia pada menit ke-67 menjadi penentu kemenangan yang sekaligus mengguncang posisi China di klasemen.\r\n\r\nHasil ini menutup peluang China untuk melaju ke putaran berikutnya, sekaligus membuktikan bahwa Indonesia kini menjadi kekuatan yang patut diperhitungkan di kawasan Asia. Permainan solid lini belakang, kepemimpinan kapten tim, serta strategi cerdas pelatih Shin Tae-yong membuat Tim Naga tidak mampu membalas. Sepanjang laga, China terlihat kesulitan menembus pertahanan Indonesia dan kerap kehilangan bola di lini tengah.\r\n\r\nKemenangan ini bukan hanya memperkuat posisi Indonesia di klasemen grup, tetapi juga membangkitkan harapan besar publik terhadap peluang lolos ke Piala Dunia 2026. Para pemain merayakan kemenangan ini dengan penuh haru, sementara dukungan dari suporter yang memenuhi stadion menjadi energi tambahan. Dengan semangat dan konsistensi seperti ini, Indonesia membuka lembaran baru dalam sejarah sepak bola nasional.', 'timnas.jpg'),
(2, 'Detik-detik Jeka Saragih KO di Bawah 30 Detik dalam UFC 316', 'detik-detik-jeka-saragih-ko-dibawah-30-detik-dalam-ufc-316', 'Jeka Saragih, petarung asal Indonesia yang selama ini dielu-elukan sebagai kebanggaan tanah air di pentas UFC, mengalami momen mengejutkan dalam UFC 316. Dalam pertarungan yang berlangsung pada Sabtu malam waktu setempat (8 Juni 2025) di Las Vegas, Jeka harus mengakui keunggulan lawannya setelah tumbang lewat KO hanya dalam waktu kurang dari 30 detik. Kekalahan ini menjadi pukulan berat bagi Jeka dan para pendukungnya, terlebih karena ekspektasi yang tinggi telah terbangun menjelang duel tersebut.\r\n\r\nPertarungan tersebut mempertemukan Jeka Saragih dengan Mike Davis, petarung asal Amerika Serikat yang dikenal dengan pukulan cepat dan teknik striking-nya yang akurat. Sejak bel pembuka dibunyikan, Davis langsung mengambil inisiatif menyerang. Dalam hitungan detik, ia meluncurkan kombinasi pukulan cepat yang mengarah ke kepala dan tubuh Jeka. Meski Jeka sempat mencoba bertahan dan mencari celah untuk membalas, satu pukulan kanan dari Davis tepat mengenai rahang Jeka dan membuatnya terjatuh seketika.\r\n\r\nWasit pun segera menghentikan pertarungan setelah melihat kondisi Jeka yang tidak mampu melanjutkan laga. Keputusan tersebut tepat demi menjaga keselamatan sang petarung. Di tengah keheningan arena dan rasa tidak percaya dari para penonton, tim medis segera memberikan pertolongan pertama. Jeka yang perlahan siuman tampak kebingungan, sementara Davis langsung melakukan selebrasi dengan mengangkat tangannya sebagai tanda kemenangan mutlak.\r\n\r\nKekalahan ini tentunya sangat disayangkan mengingat Jeka Saragih sebelumnya menunjukkan performa impresif dalam beberapa laga terakhir. Banyak penggemar yang menyebut laga ini terlalu cepat berakhir, bahkan belum sempat menunjukkan pertarungan sengit yang diharapkan. Meski demikian, dunia MMA memang penuh ketidakpastian—satu kesalahan kecil bisa menjadi penentu hasil, dan KO kilat bukanlah hal yang asing dalam sejarah UFC.\r\n\r\nMeski kalah, semangat juang dan pencapaian Jeka Saragih tak bisa diabaikan begitu saja. Ia tetap menjadi pelopor dan inspirasi bagi petarung Indonesia lainnya untuk berani tampil di panggung internasional. Kekalahan ini bisa menjadi bahan evaluasi penting bagi Jeka dan timnya untuk memperbaiki teknik dan strategi di laga mendatang. Dunia MMA bukan hanya soal kemenangan, tapi juga soal bangkit dari kekalahan dan terus berkembang. Dukungan dari publik Indonesia akan sangat berarti untuk membangkitkan kembali semangat sang Garuda di octagon.', 'jeka.jpeg'),
(5, 'Nikita Mirzani Klaim Rugi Besar, Gugat Rp 100 M ke Reza Gladys Dinilai Kecil  Baca artikel detikhot, \"Nikita Mirzani Klaim Rugi Besar, Gugat Rp 100 M ke Reza Gladys Dinilai Kecil\"', 'nikita-mirzani-klaim-rugi-besar-gugat-100-ke-reza-gladysm-', 'Jakarta - Kuasa hukum Nikita Mirzani, Fahmi Bachmid, mengatakan gugatan senilai Rp 100 miliar yang dilayangkan terhadap dokter Reza Gladys terkait dugaan wanprestasi masih dinilai terlalu kecil. Angka tersebut dinilai tak sebanding dengan yang dialami oleh Nikita Mirzani.\r\nAktris berusia 39 tahun itu sedang menjalani proses hukum dalam kasus dugaan pemerasan terhadap Reza Gladys. Hal ini turut memengaruhi kehidupan pribadinya.\r\n\r\n\"Untuk Nikita Mirzani terlalu kecil (gugatan senilai Rp 100 miliar) dengan proses yang dialami sama dia,\" kata Fahmi Bachmid saat ditemui di Pengadilan Negeri Jakarta Selatan, Rabu (11/6/2025).\r\n\r\nBaca artikel detikhot, \"Nikita Mirzani Klaim Rugi Besar, Gugat Rp 100 M ke Reza Gladys Dinilai Kecil\" ', '68498b5ba29f6.jpeg'),
(6, 'Website Juara', 'website-juara', 'Website ini milik Rakha Ahmad Baihaqy Harahap', '68498c2c4461e.png'),
(7, 'Bebek berterbangannn', 'bebek-berterbangan', 'bebek tetaplah bebekk', '68498c9cc8c00.jpg'),
(8, 'Coding Coding', 'coding-coding', 'ya ngoding javalah', '68498d46ce786.png'),
(9, 'Setelah membuat pecinta otomotif penasaran dengan desas-desus mobil terbarunya, Suzuki Indonesia Sales (SIS) akhirnya mengonfirmasi bahwa Suzuki Fronx akan meluncur di Indonesia pada akhir Mei 2025.  Mobil sport utility vehicle (SUV) kompak itu hadir deng', 'setelah-membuat-pecinta', 'Setelah membuat pecinta otomotif penasaran dengan desas-desus mobil terbarunya, Suzuki Indonesia Sales (SIS) akhirnya mengonfirmasi bahwa Suzuki Fronx akan meluncur di Indonesia pada akhir Mei 2025.  Mobil sport utility vehicle (SUV) kompak itu hadir dengan berbagai inovasi yang dipastikan akan menarik perhatian pasar otomotif Indonesia. Salah satu keunggulan Suzuki Fronx yang banyak menyita perhatian adalah kehadiran 12 fitur Advanced Driver Assistance System (ADAS) canggih yang disebut Suzuki Safety Support (SSF). Di Indonesia, Fronx menjadi mobil pertama besutan Suzuki yang dilengkapi dengan fitur ADAS. Diberitakan Kompas.com, Selasa (6/5/2025), SSF merupakan serangkaian teknologi keselamatan aktif dan pasif yang dikembangkan oleh Suzuki untuk membantu mencegah kecelakaan, mengurangi risiko tabrakan, serta memberikan rasa aman saat berkendara bagi pengemudi dan penumpang.\r\n\r\n', '68498e69ad74a.jpeg'),
(10, 'Netflix Makin Seru', 'netflix-makin-seru', 'saksikan netflix dimana saja dan kapanpun', '68499487ac402.png'),
(11, 'Netflix Makin Seru', 'netflix-makin-seru', 'saksikan netflix dimana saja dan kapanpun', '6849951cd12dd.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
