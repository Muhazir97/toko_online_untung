-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jan 2020 pada 12.42
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_onlineci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stock` int(5) NOT NULL,
  `gambar` text NOT NULL,
  `tgl_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `harga`, `kategori`, `deskripsi`, `stock`, `gambar`, `tgl_post`) VALUES
(1, 'SSD 240 GB', 400000, 'KOMPUTER DAN AKSESORIS', '240 GB', 11, 'ssd.jpg', '2020-01-01 03:06:10'),
(2, 'RAM 16 GB', 1000000, 'KOMPUTER DAN AKSESORIS', '16 BG', 3, 'ram.jpg', '2020-01-02 05:16:18'),
(3, 'MOUSE WIRELESS', 200000, 'KOMPUTER DAN AKSESORIS', 'mouse wireless', 2, 'mouse.jpg', '2020-01-03 05:13:18'),
(4, 'HEADPHONE', 25000, 'KOMPUTER DAN AKSESORIS', 'Headphone Wireless', 10, 'headphone.png', '2020-01-04 11:29:29'),
(5, 'KEMEJA', 200000, 'FASHION', 'Kemeja laki-laki', 0, 'kemeja.jpg', '2020-01-05 05:14:19'),
(6, 'CELANA PANTAI', 50000, 'FASHION', 'Celana boxer pria', 6, 'boxer.jpg', '2020-01-05 08:13:35'),
(7, 'JERSEY MU', 150000, 'FASHION', 'Jersey sepakbola MU', 11, 'jersey mu.jpg', '2020-01-05 12:13:17'),
(8, 'CELANA CHINO', 300000, 'FASHION', 'Celana panjang pria', 11, 'chino.jpg', '2020-01-06 09:21:07'),
(17, 'Kerudung Pasmina', 20000, 'FASHION', 'kerudung motif', 3, 'hijabana_hijabana-pashmina-oshi-azkia-jilbab-instant_full113.jpg', '2020-01-06 05:15:15'),
(18, 'Deck Skateboard', 500000, 'OLAHRAGA', 'deck ukuran 8.0', 5, '15541_166246373907_57201283907_2771831_2534904_n1.jpg', '2020-01-06 06:14:11'),
(19, 'Knalpot norifumi', 700000, 'OTOMOTIF', 'knalpot klx ', 5, 'knalpot.jpg', '2020-01-06 04:15:17'),
(21, 'Kerudung Motif Bulu', 30000, 'FASHION', 'kerudung motif', 12, 'kerudung_organza_bulu_1517662316_091b39c99.jpg', '2020-01-06 06:17:15'),
(22, 'BOLA BASKET', 230000, 'OLAHRAGA', 'BOLA BASKET MOLEN ELASTIS', 12, 'BOLA_BASKET.jpg', '2020-01-06 07:20:22'),
(23, 'SEPATU FUTSAL ', 450000, 'OLAHRAGA', 'SEPATU FUTSAL  UMRO TIPE MARCURIAL 234', 5, 'SEPATU_FUTSAL.jpg', '2020-01-06 04:09:09'),
(24, 'BAN MOBIL', 400000, 'OTOMOTIF', 'BAN MOBIL MERK DULNOP ANTI RANJAU', 13, 'BAN_MOB.jpg', '2020-01-07 05:05:08'),
(25, 'VELK', 250000, 'OTOMOTIF', 'VELK JAGUAR 324', 12, 'PELK_MOB.jpg', '2020-01-07 06:21:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `kode_invoice` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telephone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jasa` varchar(50) NOT NULL,
  `bank` varchar(80) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `jumlah_tranfer` int(11) NOT NULL,
  `ke_bank` varchar(80) NOT NULL,
  `nama_pengirim` varchar(80) NOT NULL,
  `bukti` text NOT NULL,
  `status_konfirmasi` varchar(30) NOT NULL,
  `informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `kode_invoice`, `nama`, `no_telephone`, `email`, `alamat`, `jasa`, `bank`, `tgl_pesan`, `batas_bayar`, `jumlah_tranfer`, `ke_bank`, `nama_pengirim`, `bukti`, `status_konfirmasi`, `informasi`) VALUES
(53, ' TK-RICOFWU', 'azir', '08967896646', 'azir.muhajir77@gmail.com', 'Cilegon, banten', 'JNT', 'BCA - 0976566455', '2019-12-30 14:02:16', '2019-12-31 14:02:16', 0, 'BNI', 'sutisna', 'WhatsApp_Image_2019-11-28_at_10_46_29.jpeg', 'Pembayaran Salah', 'cqwqdw'),
(54, ' TK-3NQSDDU', 'sujatna', '08967896646', 'azir.muhajir77@gmail.com', 'serang', 'NINJA', 'BCA - 0976566455', '2019-12-30 17:47:33', '2019-12-31 17:47:33', 0, 'BNI', 'KUY', 'Use Case.jpg', 'Pembayaran Salah', 'opj;ouh;'),
(58, ' TK-VF530QQ', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'serang', 'NINJA', 'BCA - 0976566455', '2020-01-01 14:06:18', '2020-01-02 14:06:18', 0, 'BNI', 'bejo', 'hijabana_hijabana-pashmina-oshi-azkia-jilbab-instant_full11.jpg', 'Sudah Dikirim', '909090900'),
(59, ' TK-STXWGBE', 'bejo', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNT', 'BCA - 0976566455', '2020-01-01 14:07:58', '2020-01-02 14:07:58', 0, '', '', '', '', ''),
(60, ' TK-JV2HFOM', 'Martogi', '0989867657', 'azir.muhajir77@gmail.com', 'serang', 'JNT', 'BCA - 0976566455', '2020-01-01 14:44:49', '2020-01-02 14:44:49', 0, '', '', '', '', ''),
(61, ' TK-O97NFLP', 'oky gendeng', '08977765645', 'rosyadioky@gmail.com', 'serang', 'TIKI', 'BCA - 0976566455', '2020-01-01 14:46:57', '2020-01-02 14:46:57', 0, '', '', '', '', ''),
(62, ' TK-V9KGZBS', 'muhazir', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNT', 'BNI - 6758545665', '2020-01-01 14:49:10', '2020-01-02 14:49:10', 0, '', '', '', '', ''),
(63, ' TK-UTG4FPR', 'alam', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNT', 'BNI - 6758545665', '2020-01-01 14:52:28', '2020-01-02 14:52:28', 0, '', '', '', '', ''),
(64, ' TK-URNCHIT', 'anato', '08967896646', 'muhaazir9@gmail.com', 'serang', 'NINJA', 'BNI - 6758545665', '2020-01-01 14:54:07', '2020-01-02 14:54:07', 200000, 'BNI', 'ANANTO', '', 'Sudah Transfer', ''),
(65, ' TK-73NOCA9', 'boy', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNT', 'BNI - 6758545665', '2020-01-02 10:16:24', '2020-01-03 10:16:24', 0, '', '', '', '', ''),
(67, ' TK-O4NBYFK', 'mukidi', '08967896646', 'muhaazir9@gmail.com', 'serang', 'NINJA', 'BCA - 0976566455', '2020-01-02 10:19:12', '2020-01-03 10:19:12', 0, '', '', '', '', ''),
(68, ' TK-MERYTU3', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'serang', 'TIKI', 'BNI - 6758545665', '2020-01-02 23:17:34', '2020-01-03 23:17:34', 0, '', '', '', '', ''),
(69, ' TK-U27JJFL', 'UCOK', '08967896646', 'muhaazir9@gmail.com', 'Cilegon, banten', 'NINJA', 'BCA - 0976566455', '2020-01-02 23:20:00', '2020-01-03 23:20:00', 800000, 'BNI', 'AAN', 'BOLA BASKET.jpg', 'Sudah Transfer', ''),
(70, ' TK-YWVSI1K', 'kamsin', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNT', 'BNI - 6758545665', '2020-01-02 23:50:21', '2020-01-03 23:50:21', 700000, 'BNI', 'MARDI', '', 'Sudah Dikirim', 'JHLGL'),
(71, ' TK-GZOSNWB', 'Martogi', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNT', 'BNI - 6758545665', '2020-01-04 18:06:13', '2020-01-05 18:06:13', 700000, 'BNI', 'BOU', '', 'Sudah Dikirim', 'Pesanan anda sudah di kirim untuk mengecek tracking brang anda silah kan masukan nomor resi ini : 171660010447819'),
(72, ' TK-FAONRGL', 'alam', '098887', 'lrochmatal@gmail.com', 'Cilegon, banten', 'NINJA', 'BCA - 0976566455', '2020-01-07 14:39:43', '2020-01-08 14:39:43', 700000, 'BNI', 'ALAM', '', 'Sudah Dikirim', 'Pesanan anda sudah di kirim untuk mengecek tracking brang anda silah kan masukan nomor resi ini : 171660010447819'),
(73, ' TK-VSMPANS', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNT', 'BNI - 6758545665', '2020-01-08 17:39:27', '2020-01-09 17:39:27', 0, '', '', '', '', ''),
(74, ' TK-PKGDQY1', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'Cilegon, banten', 'JNT', 'BCA - 0976566455', '2020-01-08 17:40:53', '2020-01-09 17:40:53', 0, '', '', '', '', ''),
(75, ' TK-OEMFPZA', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'Cilegon, banten', 'NINJA', 'BCA - 0976566455', '2020-01-08 17:42:12', '2020-01-09 17:42:12', 0, '', '', '', '', ''),
(76, ' TK-4IQ2FL5', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'Cilegon, banten', 'NINJA', 'BCA - 0976566455', '2020-01-08 17:44:27', '2020-01-09 17:44:27', 0, '', '', '', '', ''),
(85, ' TK-W0MTI1W', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'sacsc', 'JNT', 'BCA - 0976566455', '2020-01-08 18:22:24', '2020-01-09 18:22:24', 0, '', '', '', '', ''),
(86, ' TK-3CKSXGQ', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'serang', 'TIKI', 'BCA - 0976566455', '2020-01-10 15:35:43', '2020-01-11 15:35:43', 10420000, 'BCA', 'sutisna', '', 'Sudah Dikirim', 'Pesanan anda sudah di kirim untuk mengecek tracking brang anda silah kan masukan nomor resi ini : 171660010447819'),
(87, ' TK-B6H547C', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'Cilegon, banten', 'NINJA', 'BNI - 6758545665', '2020-01-10 17:07:50', '2020-01-11 17:07:50', 0, '', '', '', '', ''),
(88, ' TK-D1F0JLZ', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'Cilegon, banten', 'JNT', 'BNI - 6758545665', '2020-01-10 17:09:09', '2020-01-11 17:09:09', 0, '', '', '', '', ''),
(89, ' TK-RG4ZHFJ', 'boy ', '08967896646', 'muhaazir9@gmail.com', 'tanggerang', 'JNT', 'BCA - 0976566455', '2020-01-10 17:12:21', '2020-01-11 17:12:21', 50000, 'BNI', 'hijabana_hijabana-pashmina-oshi-azkia-jilbab-instant_full11.jpg', '', 'Sudah Dikirim', 'addada'),
(90, ' TK-LCBW0SK', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'sfsaf', 'NINJA', 'BCA - 0976566455', '2020-01-12 22:04:03', '2020-01-13 22:04:03', 0, '', '', '', '', ''),
(91, ' TK-QZFRUMU', 'Samsudin', '08976787546', 'muhaazir9@gmail.com', 'Rangkas', 'JNE', 'BCA - 0976566455', '2020-01-12 22:16:12', '2020-01-13 22:16:12', 700000, 'BNI', 'sutisna', 'WhatsApp_Image_2019-11-21_at_19_35_59.jpeg', 'Sudah Dikirim', 'Pesanan anda sudah di kirim untuk mengecek tracking brang anda silah kan masukan nomor resi ini : 171660010447819'),
(92, ' TOU-OHKQA', 'Samlawi', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNE', 'BCA - 0976566455', '2020-01-13 09:27:35', '2020-01-14 09:27:35', 500000, 'BNI', 'Smlawi', 'WhatsApp_Image_2019-11-21_at_19_35_591.jpeg', 'Sudah Transfer', ''),
(93, ' TOU-YXGAX', 'alam', '98786765465', 'lrochmatal@gmail.com', 'serang', 'JNE', 'BCA - 0976566455', '2020-01-13 17:59:46', '2020-01-14 17:59:46', 90000, 'BNI', 'sutisna', 'WhatsApp_Image_2019-11-21_at_19_36_00.jpeg', 'Sudah Dikirim', 'ANDA BENAR BARANG SUDAH DI KIRIM 171660010447819'),
(94, ' TOU-KDPOJ', 'Angga Raswiantono', '0987654321', 'anggaraswiantono@gmail.com', 'Cilegom', 'JNE', 'BCA - 0976566455', '2020-01-13 18:11:00', '2020-01-14 18:11:00', 98765432, 'BNI', 'Angga', 'hijabana_hijabana-pashmina-oshi-azkia-jilbab-instant_full115.jpg', 'Sudah Dikirim', '12345678'),
(95, ' TOU-YEKFH', 'muha azir', '08967896646', 'dedi.n@yahoo.com', 'Cilegon, banten', 'JNE', 'BCA - 0976566455', '2020-01-13 18:25:02', '2020-01-14 18:25:02', 120000, 'BCA', 'AAN', 'FC.jpg', 'Sudah Transfer', ''),
(96, ' TOU-B08ZM', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'serang', 'JNE', 'BCA - 0976566455', '2020-01-13 19:08:08', '2020-01-14 19:08:08', 1500000, 'BNI', 'sutisna', 'img004.jpg', 'Sudah Dikirim', '171660010447819'),
(97, ' TOU-RHP7F', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'Cilegon, banten', 'NINJA', 'BNI - 6758545665', '2020-01-21 09:14:16', '2020-01-22 09:14:16', 0, '', '', '', '', ''),
(98, ' TOU-GUAWK', 'muha azir', '08967896646', 'muhaazir9@gmail.com', 'serang', 'NINJA', 'BCA - 0976566455', '2020-01-24 07:39:49', '2020-01-25 07:39:49', 1000000, 'BCA', 'JAI', '15541_166246373907_57201283907_2771831_2534904_n2.jpg', 'Sudah Dikirim', 'BARANG SUDAH DI KIRIM GAN INI NO RESI NYA : 122134244');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id`, `id_brg`, `nama`, `komentar`, `waktu`) VALUES
(16, 1, 'azir', 'tesssss', '2019-12-28 15:03:30'),
(17, 3, 'azir', 'guud', '2019-12-28 15:50:43'),
(18, 4, 'oky', 'tes drive', '2019-12-28 15:51:17'),
(20, 6, 'ananto', 'nice', '2019-12-28 15:53:44'),
(22, 8, 'azir', 'kuys', '2019-12-28 15:56:48'),
(23, 8, 'kunto', 'ini sih yess', '2020-01-03 13:39:19'),
(26, 3, 'komar', 'uy', '2020-01-03 14:19:59'),
(28, 3, 'kodir', 'mNTEP EUY', '2020-01-03 14:20:49'),
(29, 4, 'JUNED', 'Barang nya mantep euy !!', '2020-01-03 14:23:11'),
(30, 4, 'kamsin', 'Percis sama kayak di gambar mantap gan ', '2020-01-03 14:24:17'),
(33, 4, 'alam', 'oke\r\n', '2020-01-03 14:40:25'),
(34, 1, 'alam', 'mantappp', '2020-01-03 14:40:51'),
(35, 21, 'ananto', 'modelnya mantapp ????', '2020-01-03 15:19:36'),
(38, 19, 'ananto', 'keren knlapotnya', '2020-01-03 15:41:55'),
(39, 17, 'ananto', 'modelnya simple', '2020-01-03 15:42:56'),
(40, 21, 'ananto', 'guud', '2020-01-03 15:47:31'),
(42, 18, 'ananto', 'mantul nih\r\n', '2020-01-03 15:51:54'),
(43, 21, 'ananto', 'love you', '2020-01-03 15:52:21'),
(44, 7, 'ananto', 'keren', '2020-01-03 16:04:11'),
(45, 2, 'ananto', 'wrok gan', '2020-01-03 16:22:30'),
(46, 21, 'oky', 'MODEL OKE', '2020-01-07 16:12:01'),
(47, 4, 'alam', 'mantap', '2020-01-08 23:52:45'),
(48, 18, 'alam', 'mantapp', '2020-01-10 12:33:55'),
(49, 18, 'alam', 'tes', '2020-01-10 12:35:02'),
(50, 18, 'alam', 'tes lagi', '2020-01-10 12:35:20'),
(51, 4, 'alam', 'oke', '2020-01-10 12:35:47'),
(52, 5, 'alam', 'tes', '2020-01-10 12:37:19'),
(53, 18, 'alam', 'deck nya gurih', '2020-01-13 09:25:38'),
(54, 5, 'alam', 'mantap uey', '2020-01-13 17:57:43'),
(55, 6, 'alam', 'oh', '2020-01-13 18:22:18'),
(56, 4, 'alam', 'oke', '2020-01-13 19:14:32'),
(57, 5, 'alam', 'kuy\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '2020-01-14 14:36:34'),
(58, 1, 'alam', 'tess', '2020-01-14 14:40:51'),
(59, 5, 'alam', 'Yang ini stock nya ga ada lagi gan ?', '2020-01-24 07:59:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'azir', 'azir', 'admin', 1),
(2, 'oky', 'oky', 'user', 2),
(5, 'alam', 'alam', '123', 2),
(8, 'ananto', 'ananto', '123', 2),
(9, 'Angga', 'Angga Raswiantono', '12345', 2),
(10, 'alam', 'alam', '123', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(39, 53, 18, 'Deck Skateboard', 1, 500000, ''),
(40, 54, 18, 'Deck Skateboard', 1, 500000, ''),
(41, 55, 2, 'RAM 16 GB', 1, 100000, ''),
(42, 57, 6, 'CELANA PANTAI', 1, 50000, ''),
(43, 58, 3, 'MOUSE WIRELESS', 1, 200000, ''),
(44, 59, 8, 'CELANA CHINO', 1, 300000, ''),
(45, 60, 21, 'Kerudung Motif Bulu', 1, 30000, ''),
(46, 61, 7, 'JERSEY MU', 1, 15000, ''),
(47, 62, 8, 'CELANA CHINO', 1, 300000, ''),
(48, 63, 6, 'CELANA PANTAI', 1, 50000, ''),
(49, 64, 4, 'HEADPHONE', 1, 25000, ''),
(50, 65, 21, 'Kerudung Motif Bulu', 1, 30000, ''),
(51, 67, 19, 'Knalpot norifumi', 1, 700000, ''),
(52, 68, 7, 'JERSEY MU', 1, 15000, ''),
(53, 68, 6, 'CELANA PANTAI', 1, 50000, ''),
(54, 69, 19, 'Knalpot norifumi', 1, 700000, ''),
(55, 69, 18, 'Deck Skateboard', 1, 500000, ''),
(56, 70, 18, 'Deck Skateboard', 1, 500000, ''),
(57, 71, 19, 'Knalpot norifumi', 1, 700000, ''),
(58, 71, 21, 'Kerudung Motif Bulu', 1, 30000, ''),
(59, 72, 1, 'SSD 240 GB', 1, 400000, ''),
(60, 73, 8, 'CELANA CHINO', 1, 300000, ''),
(61, 74, 2, 'RAM 16 GB', 1, 1000000, ''),
(62, 75, 1, 'SSD 240 GB', 1, 400000, ''),
(63, 76, 5, 'KEMEJA', 1, 200000, ''),
(64, 77, 3, 'MOUSE WIRELESS', 1, 200000, ''),
(65, 78, 3, 'MOUSE WIRELESS', 1, 200000, ''),
(66, 79, 3, 'MOUSE WIRELESS', 1, 200000, ''),
(67, 81, 2, 'RAM 16 GB', 1, 1000000, ''),
(68, 82, 4, 'HEADPHONE', 1, 25000, ''),
(69, 85, 3, 'MOUSE WIRELESS', 1, 200000, ''),
(70, 86, 1, 'SSD 240 GB', 7, 400000, ''),
(71, 86, 4, 'HEADPHONE', 10, 25000, ''),
(72, 86, 2, 'RAM 16 GB', 3, 1000000, ''),
(73, 86, 3, 'MOUSE WIRELESS', 2, 200000, ''),
(74, 86, 17, 'Kerudung Pasmina', 3, 20000, ''),
(75, 86, 25, 'VELK', 2, 250000, ''),
(76, 86, 26, 'Kerudung Pasmina', 3, 20000, ''),
(77, 86, 6, 'CELANA PANTAI', 1, 50000, ''),
(78, 86, 23, 'SEPATU FUTSAL ', 2, 450000, ''),
(79, 86, 19, 'Knalpot norifumi', 1, 700000, ''),
(80, 86, 18, 'Deck Skateboard', 3, 500000, ''),
(81, 86, 5, 'KEMEJA', 1, 200000, ''),
(82, 87, 23, 'SEPATU FUTSAL ', 1, 450000, ''),
(83, 88, 7, 'JERSEY MU', 1, 150000, ''),
(84, 89, 5, 'KEMEJA', 1, 200000, ''),
(85, 90, 24, 'BAN MOBIL', 1, 400000, ''),
(86, 91, 18, 'Deck Skateboard', 1, 500000, ''),
(87, 92, 18, 'Deck Skateboard', 1, 500000, ''),
(88, 93, 8, 'CELANA CHINO', 1, 300000, ''),
(89, 94, 2, 'RAM 16 GB', 1, 1000000, ''),
(90, 95, 25, 'VELK', 1, 250000, ''),
(91, 96, 4, 'HEADPHONE', 2, 25000, ''),
(92, 96, 2, 'RAM 16 GB', 1, 1000000, ''),
(93, 97, 1, 'SSD 240 GB', 1, 400000, ''),
(94, 97, 3, 'MOUSE WIRELESS', 4, 200000, ''),
(95, 97, 5, 'KEMEJA', 9, 200000, ''),
(96, 98, 2, 'RAM 16 GB', 2, 1000000, ''),
(97, 98, 18, 'Deck Skateboard', 2, 500000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_barang` BEFORE INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
   UPDATE tb_barang SET stock = stock-NEW.jumlah
   WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
