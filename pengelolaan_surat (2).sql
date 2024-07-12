-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 09.02
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengelolaan_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `pengirim_surat` varchar(100) DEFAULT NULL,
  `waktu_surat` datetime DEFAULT NULL,
  `lampiran_surat` text DEFAULT NULL,
  `perihal_surat` varchar(200) DEFAULT NULL,
  `penerima_surat` varchar(100) DEFAULT NULL,
  `isi_surat` text DEFAULT NULL,
  `unit_penerbit` varchar(100) DEFAULT NULL,
  `tempat_surat` varchar(100) DEFAULT NULL,
  `nama_mengesahkan` varchar(100) DEFAULT NULL,
  `nama_tembusan` varchar(100) DEFAULT NULL,
  `tipe_surat` enum('masuk','keluar') DEFAULT NULL,
  `file_scan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nomor_surat`, `pengirim_surat`, `waktu_surat`, `lampiran_surat`, `perihal_surat`, `penerima_surat`, `isi_surat`, `unit_penerbit`, `tempat_surat`, `nama_mengesahkan`, `nama_tembusan`, `tipe_surat`, `file_scan`) VALUES
(3, '111111', 'rizal', '2024-06-02 21:19:00', 'surat rapat prodi', 'rapat prodi lorem dolor sit amet', 'admin', 'dengan ini mengadakan rapat di prodi', 'Jurusan Teknik Elektro', 'upt tik', 'Ketua Jurusan Teknik Elektro', 'rizal wahyudi', 'masuk', 'Polibanlogo.png'),
(6, '10001AWD(Edit)2x surat keluar', 'rizal(Edit)', '2024-06-02 20:20:00', '0/1(edit)', 'rapat prodi Teknik Informatika(edit)', 'admin prodi(edit)', 'ini adalah surat untuk rapat prodi teknik informatika(edit)', 'Jurusan Teknik Elektro', 'upt tik(edit)', 'Ketua Jurusan Teknik Elektro', 'tiyo(edit)', 'keluar', 'Polibanlogo.png'),
(7, 'dgsdf', 'sdf', '2024-06-02 20:35:00', 'sdfsdf', 'dfsdf', 'fsdfs', 'fsdfsdfsdfsd', 'Jurusan Teknik Sipil', 'sdfsdfsd', 'Ketua Jurusan Teknik Elektro', 'sdfsdfsdf', 'keluar', '11. FR.IA.02. Tugas Praktik Demonstrasi - salinan wanvy.docx'),
(8, 'sdsd', 'sdasd', '2024-06-02 20:38:00', 'sdas', 'dsdasd', 'dasdasf', 'fasfsf', 'Jurusan Teknik Sipil', 'dfsdf', 'Ketua Jurusan Akuntansi', 'sdfsdf', 'keluar', ''),
(17, 'a', 'ddsd', '2024-06-02 22:34:00', 'dsd', 'sdsdsd', 'sdsd', 'sdsdsd', 'Jurusan Teknik Sipil', 'sdsd', 'Ketua Jurusan Teknik Sipil', 'sdsds', 'masuk', ''),
(19, 'sdasdasd', 'sfasfasf', '2024-06-03 10:09:00', 'sfasf', 'dfsdf', 'sdasdas', 'wwwwaaaawawawawa', 'Jurusan Teknik Mesin', '2eqw', 'Direktur', 'wrwere', 'masuk', ''),
(20, 'sdasdasd', 'sfasfasf', '2024-06-03 10:14:00', '231232', 'wwdw', 'sfasfas', 'qqq', 'Jurusan Teknik Sipil', 'qwert', 'Ketua Jurusan Administrasi Bisnis', '12312', 'masuk', ''),
(22, 'rizal', 'rizal', '2024-06-03 10:16:00', 'rizal', 'rizal', 'rizal', 'rizal', 'Jurusan Teknik Mesin', 'rizal', 'Ketua Jurusan Teknik Sipil', 'rizal', 'keluar', ''),
(23, 'rizal', 'aaa', '2024-06-03 10:21:00', 'a', 'a', 'a', 'a', 'Jurusan Teknik Sipil', 'a', 'Ketua Jurusan Teknik Sipil', 'a', 'keluar', ''),
(24, 'asdasfsdfds', 'sfsdfsdf', '2024-06-03 13:07:00', 'fwerwete', 'asertserstg', 'gddrgdg', 'dgdgdrydrtisehr;zso', 'Jurusan Teknik Sipil', 'setetrythfg', 'Ketua Jurusan Teknik Sipil', 'sefsese', 'masuk', ''),
(25, 'ww113256576', 'weu8q8e9q2u', '2024-06-03 13:12:00', 'wwref', 'sdgrytruru6', 'wrwtwetrt', 'rewetrtfuosefsjfsoejgoijo', 'Jurusan Teknik Sipil', 'sjfsifj', 'Ketua Jurusan Administrasi Bisnis', 'isfjaeirw9eu', 'keluar', ''),
(26, 'sasfs', 'a', '2024-06-03 13:14:00', 'q', 'q', 'q', 'q', 'Jurusan Teknik Elektro', 'a', 'Direktur', 'sdw', 'masuk', '11. FR.IA.02. Tugas Praktik Demonstrasi - salinan wanvy.docx'),
(27, '2WWWD001', 'wahyudi', '2024-06-03 16:07:00', 'ini adalah lampiran surat', 'ini adalah perihal', 'bapak fuad', 'uji kompetensi keahlian', 'Jurusan Teknik Elektro', 'Gedung H', 'Ketua Jurusan Teknik Elektro', 'Gilang', 'keluar', 'ktp.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
