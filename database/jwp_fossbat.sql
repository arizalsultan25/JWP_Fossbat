-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2021 pada 02.39
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwp_fossbat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `email`, `nama`, `password`) VALUES
(1, 'admin@admin.com', 'Administrator', '$2y$10$exmi63BsmxjnfB5QDb6cvObvViubP/YdiaYW.BRrWANFIdnCKPrnK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `berita` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `slug`, `berita`, `created_at`) VALUES
(2, 'CR 7 alami cidera', 'cr-7-alami-cidera', '<h2>The three greatest things you learn from traveling</h2><p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p><p>&nbsp;</p><h3>Appreciation of diversity</h3><p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p><blockquote><p>The real voyage of discovery consists not in seeking new landscapes, but having new eyes.</p><p><strong>Marcel Proust</strong></p></blockquote><h3>Improvisation</h3><p>Life doesn\'t allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist; but when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p><ul><li>buy the ticket</li><li>start your adventure</li></ul><p>&nbsp;</p><h3>Confidence</h3><p>Going to a new place can be quite terrifying. While change and uncertainty makes us scared, traveling teaches us how ridiculous it is to be afraid of something before it happens. The moment you face your fear and see there was nothing to be afraid of, is the moment you discover bliss.</p>', '2021-04-26 14:22:52'),
(3, 'Klub eropa tolak Eropa Super League', 'klub_eropa_tolak_eropa_super_league', '<h2>The three greatest things you learn from traveling</h2><p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p><p>&nbsp;</p><h3>Appreciation of diversity</h3><p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p><blockquote><p>The real voyage of discovery consists not in seeking new landscapes, but having new eyes.</p><p><strong>Marcel Proust</strong></p></blockquote><h3>Improvisation</h3><p>Life doesn\'t allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist; but when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p><ul><li>buy the ticket</li><li>start your adventure</li></ul><p>&nbsp;</p><h3>Confidence</h3><p>Going to a new place can be quite terrifying. While change and uncertainty makes us scared, traveling teaches us how ridiculous it is to be afraid of something before it happens. The moment you face your fear and see there was nothing to be afraid of, is the moment you discover bliss.</p>', '2021-04-27 07:45:41'),
(4, 'Berita 3', 'berita_3', '<h2>The three greatest things you learn from traveling</h2><p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p><p>&nbsp;</p><h3>Appreciation of diversity</h3><p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p><blockquote><p>The real voyage of discovery consists not in seeking new landscapes, but having new eyes.</p><p><strong>Marcel Proust</strong></p></blockquote><h3>Improvisation</h3><p>Life doesn\'t allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist; but when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p><ul><li>buy the ticket</li><li>start your adventure</li></ul><p>&nbsp;</p><h3>Confidence</h3><p>Going to a new place can be quite terrifying. While change and uncertainty makes us scared, traveling teaches us how ridiculous it is to be afraid of something before it happens. The moment you face your fear and see there was nothing to be afraid of, is the moment you discover bliss.</p>', '2021-04-27 08:33:00'),
(5, 'Berita 4', 'berita_4', '<h2>The three greatest things you learn from traveling</h2><p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p><p>&nbsp;</p><h3>Appreciation of diversity</h3><p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p><blockquote><p>The real voyage of discovery consists not in seeking new landscapes, but having new eyes.</p><p><strong>Marcel Proust</strong></p></blockquote><h3>Improvisation</h3><p>Life doesn\'t allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist; but when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p><ul><li>buy the ticket</li><li>start your adventure</li></ul><p>&nbsp;</p><h3>Confidence</h3><p>Going to a new place can be quite terrifying. While change and uncertainty makes us scared, traveling teaches us how ridiculous it is to be afraid of something before it happens. The moment you face your fear and see there was nothing to be afraid of, is the moment you discover bliss.</p>', '2021-04-27 08:33:07'),
(6, 'Berita 5', 'berita_5', '<h2>The three greatest things you learn from traveling</h2><p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p><p>&nbsp;</p><h3>Appreciation of diversity</h3><p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p><blockquote><p>The real voyage of discovery consists not in seeking new landscapes, but having new eyes.</p><p><strong>Marcel Proust</strong></p></blockquote><h3>Improvisation</h3><p>Life doesn\'t allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist; but when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p><ul><li>buy the ticket</li><li>start your adventure</li></ul><p>&nbsp;</p><h3>Confidence</h3><p>Going to a new place can be quite terrifying. While change and uncertainty makes us scared, traveling teaches us how ridiculous it is to be afraid of something before it happens. The moment you face your fear and see there was nothing to be afraid of, is the moment you discover bliss.</p>', '2021-04-27 08:33:13'),
(7, 'berita 6', 'berita_6', '<h2>The three greatest things you learn from traveling</h2><p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p><p>&nbsp;</p><h3>Appreciation of diversity</h3><p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p><blockquote><p>The real voyage of discovery consists not in seeking new landscapes, but having new eyes.</p><p><strong>Marcel Proust</strong></p></blockquote><h3>Improvisation</h3><p>Life doesn\'t allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist; but when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p><ul><li>buy the ticket</li><li>start your adventure</li></ul><p>&nbsp;</p><h3>Confidence</h3><p>Going to a new place can be quite terrifying. While change and uncertainty makes us scared, traveling teaches us how ridiculous it is to be afraid of something before it happens. The moment you face your fear and see there was nothing to be afraid of, is the moment you discover bliss.</p>', '2021-04-27 08:33:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gallery`
--

INSERT INTO `tb_gallery` (`id`, `nama_kegiatan`, `deskripsi`, `tanggal`, `foto`, `created_at`) VALUES
(1, 'Piala Presiden 2021', 'Turnament Antar Provinsi Piala Presiden 2021', '2021-04-08', 'Piala_Presiden_2021_28042021.jpg', '2021-04-24 06:56:21'),
(2, 'Liga Champion 2021', 'Liga terbesar eropa', '1998-02-04', 'Liga_Champion_2021_28042021.jpg', '2021-04-25 07:20:30'),
(3, 'Liga Eropa 2021', 'Liga eropa', '1998-02-04', 'Liga_Eropa_2021_28042021.jpg', '2021-04-25 07:20:55'),
(4, 'Fossbat U-13', 'Turnament Fossbat 2020', '2021-04-16', 'Fossbat_U-13_28042021.jpg', '2021-04-28 04:43:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `home` varchar(100) NOT NULL,
  `away` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `skor_home` int(11) DEFAULT NULL,
  `skor_away` int(11) DEFAULT NULL,
  `status` enum('belum main','sedang berlangsung','selesai') NOT NULL DEFAULT 'belum main',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `tanggal`, `waktu`, `home`, `away`, `lokasi`, `skor_home`, `skor_away`, `status`, `created_at`) VALUES
(1, '2021-04-27', '15:00:26', 'Barcelona FC', 'Bayern Munich FC', 'San Siro', 2, 8, 'selesai', '2021-04-25 08:00:58'),
(3, '2021-04-29', '16:07:00', 'Barcelona FC', 'Manchester United FC', 'Giuseppe Meazza', 0, 0, 'belum main', '2021-04-27 09:04:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemain`
--

CREATE TABLE `tb_pemain` (
  `id_pemain` bigint(64) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(32) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `ssb` varchar(100) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `berat` int(6) NOT NULL,
  `tinggi` int(6) NOT NULL,
  `administrasi` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki laki','Perempuan') NOT NULL DEFAULT 'Laki laki',
  `riwayat_sd` text NOT NULL,
  `riwayat_smp` text NOT NULL,
  `riwayat_ssb` text NOT NULL,
  `riwayat_kabupaten` text NOT NULL,
  `riwayat_provinsi` text NOT NULL,
  `riwayat_tahun` text NOT NULL,
  `riwayat_posisi` text NOT NULL,
  `prestasi_ssb` text NOT NULL,
  `prestasi_kompetisi` text NOT NULL,
  `prestasi` text NOT NULL,
  `prestasi_tahun` text NOT NULL,
  `prestasi_posisi` text NOT NULL,
  `foto` varchar(255) DEFAULT 'default.jpg',
  `qr` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemain`
--

INSERT INTO `tb_pemain` (`id_pemain`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tgl_lahir`, `alamat`, `ssb`, `nama_ayah`, `nama_ibu`, `gol_darah`, `berat`, `tinggi`, `administrasi`, `jenis_kelamin`, `riwayat_sd`, `riwayat_smp`, `riwayat_ssb`, `riwayat_kabupaten`, `riwayat_provinsi`, `riwayat_tahun`, `riwayat_posisi`, `prestasi_ssb`, `prestasi_kompetisi`, `prestasi`, `prestasi_tahun`, `prestasi_posisi`, `foto`, `qr`, `created_at`, `updated_at`) VALUES
(4, 'Robert Lewandowski', 'Lewi', 'Berlin', '2021-04-15', 'Moscow', 'Bayern Munich FC', 'Halim', 'Tyas', 'AB', 89, 182, 'Akte Kelahiran, KK, Passport', 'Laki laki', 'SD 009 Baloi', 'SMP 41 Batam', 'SSB Mulya Jati, SSB Jaya Prestasi', 'Batam Kota, Sekupang', 'Kepulauan Riau, Kepulauan Riau', '2013, 2014', 'Back, Back', 'SSB Mulya Jati, SSB Mulya Jati', 'Turnament Pocari, Piala Walikota', 'Juara 2, Juara 1', '2013, 2013', 'Back, Back', 'default.jpg', 'C53OePShWAc6uobH.png', '2021-04-27 05:26:35', '2021-04-27 06:38:38'),
(6, 'Mario Gotze', 'Gotze', 'Berlin', '2021-04-02', 'Moscow', 'Manchester United FC', 'Reno', 'Novita', 'A', 123, 188, 'Akte Kelahiran, KK, Passport', 'Laki laki', 'SD 009 Baloi', 'SMP 41 Batam', '', '', '', '', 'GK', '', '', '', '', 'GK', 'Gotze_27042021_1535th.jpeg', 'zwCDN3HKVEp7ShAQ.png', '2021-04-27 08:35:16', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ssb`
--

CREATE TABLE `tb_ssb` (
  `id` int(11) NOT NULL,
  `nama_ssb` varchar(100) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ssb`
--

INSERT INTO `tb_ssb` (`id`, `nama_ssb`, `logo`, `alamat`, `tanggal_berdiri`, `created_at`) VALUES
(1, 'Bayern Munich FC', 'Bayern_Munich_FC_23042021.png', 'Berlin', '1993-06-22', '2021-04-23 13:03:15'),
(2, 'Barcelona FC', 'Barcelona_FC_23042021.png', 'Barcelona', '2021-04-07', '2021-04-23 13:04:22'),
(3, 'Real Madrid FC', 'Real_Madrid_FC_23042021.png', 'Madrid', '2021-04-07', '2021-04-23 13:04:41'),
(4, 'Manchester United FC', 'Manchester_United_FC_23042021.png', 'Manchester, London', '2021-04-20', '2021-04-23 13:05:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stadion`
--

CREATE TABLE `tb_stadion` (
  `id` int(11) NOT NULL,
  `nama_stadion` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `link_map` text DEFAULT NULL,
  `tanggal_berdiri` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_stadion`
--

INSERT INTO `tb_stadion` (`id`, `nama_stadion`, `alamat`, `link_map`, `tanggal_berdiri`, `foto`, `created_at`) VALUES
(1, 'San Siro', 'Barcelona', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11190.280281228308!2d9.120095282414583!3d45.47846391131257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1909e7fc017%3A0x54993b230b18a111!2sSan%20Siro%2C%20Milan%2C%20Metropolitan%20City%20of%20Milan%2C%20Italy!5e0!3m2!1sen!2sid!4v1619525799572!5m2!1sen!2sid', '2021-04-03', 'San_Siro_25042021.jpg', '2021-04-24 06:44:11'),
(2, 'Giuseppe Meazza', 'Milan', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.062895342952!2d-2.1996637082090755!3d53.48520600773814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb10dcc950ae3%3A0x549a8dcce67a876a!2sEtihad%20Stadium!5e0!3m2!1sen!2sid!4v1619525893052!5m2!1sen!2sid', '2021-04-16', 'Giuseppe_Meazza_25042021.jpg', '2021-04-25 07:46:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home` (`home`),
  ADD KEY `away` (`away`);

--
-- Indeks untuk tabel `tb_pemain`
--
ALTER TABLE `tb_pemain`
  ADD PRIMARY KEY (`id_pemain`),
  ADD KEY `ssb` (`ssb`);

--
-- Indeks untuk tabel `tb_ssb`
--
ALTER TABLE `tb_ssb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_ssb` (`nama_ssb`);

--
-- Indeks untuk tabel `tb_stadion`
--
ALTER TABLE `tb_stadion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pemain`
--
ALTER TABLE `tb_pemain`
  MODIFY `id_pemain` bigint(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_ssb`
--
ALTER TABLE `tb_ssb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_stadion`
--
ALTER TABLE `tb_stadion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `away` FOREIGN KEY (`away`) REFERENCES `tb_ssb` (`nama_ssb`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `home` FOREIGN KEY (`home`) REFERENCES `tb_ssb` (`nama_ssb`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pemain`
--
ALTER TABLE `tb_pemain`
  ADD CONSTRAINT `ssb` FOREIGN KEY (`ssb`) REFERENCES `tb_ssb` (`nama_ssb`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
