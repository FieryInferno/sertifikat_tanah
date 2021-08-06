-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2021 pada 05.13
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikattanah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `isi_keluhan` text NOT NULL,
  `status` enum('belum','verifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `user_id`, `isi_keluhan`, `status`) VALUES
(1, '5', 'Kapan beresnya?', 'verifikasi'),
(2, '14', 'sertifikat rusak', 'verifikasi'),
(3, '14', 'namanya salah', 'verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_masyarakat` int(191) NOT NULL,
  `bukti_pembayaran` varchar(191) DEFAULT NULL,
  `status` enum('0','1','2','3','4','5','6','7') NOT NULL,
  `stt` varchar(191) DEFAULT NULL,
  `sps` varchar(191) DEFAULT NULL,
  `pengukuran` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `ktp` varchar(191) DEFAULT NULL,
  `berita_acara` varchar(191) DEFAULT NULL,
  `tanda_batas_tanah` varchar(191) DEFAULT NULL,
  `surat_keterangan_tidak_sengketa` varchar(191) DEFAULT NULL,
  `kk` varchar(191) DEFAULT NULL,
  `npwp` varchar(191) DEFAULT NULL,
  `imb` varchar(191) DEFAULT NULL,
  `ajb` varchar(191) DEFAULT NULL,
  `pph` varchar(191) DEFAULT NULL,
  `bphtb` varchar(191) DEFAULT NULL,
  `akta_hibah` varchar(191) DEFAULT NULL,
  `bukti_penguasaan_tanah` varchar(191) DEFAULT NULL,
  `pbb` varchar(191) DEFAULT NULL,
  `skbb` varchar(191) DEFAULT NULL,
  `surat_keterangan_riwayat_tanah` varchar(191) DEFAULT NULL,
  `jenis` enum('jual_beli','hibah_waris') NOT NULL,
  `pembayaran` int(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_masyarakat`, `bukti_pembayaran`, `status`, `stt`, `sps`, `pengukuran`, `alamat`, `ktp`, `berita_acara`, `tanda_batas_tanah`, `surat_keterangan_tidak_sengketa`, `kk`, `npwp`, `imb`, `ajb`, `pph`, `bphtb`, `akta_hibah`, `bukti_penguasaan_tanah`, `pbb`, `skbb`, `surat_keterangan_riwayat_tanah`, `jenis`, `pembayaran`) VALUES
(18, 5, '110.pdf', '3', '610c272f664fd.pdf', '610c273749848.pdf', '610c284059046', '', '1.pdf', '17.pdf', '18.pdf', '19.pdf', '12.pdf', '13.pdf', '14.pdf', '15.pdf', '16.pdf', NULL, NULL, NULL, '11.pdf', NULL, NULL, 'jual_beli', 500000),
(19, 14, '121.pdf', '6', '610c2d6c6ba4d.pdf', '610c2d70aebe9.pdf', '610c2db5adc80', '', '111.pdf', '118.pdf', '119.pdf', '120.pdf', '113.pdf', '114.pdf', '115.pdf', '116.pdf', '117.pdf', NULL, NULL, NULL, '112.pdf', NULL, NULL, 'jual_beli', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengukuran`
--

CREATE TABLE `pengukuran` (
  `id_pengukuran` varchar(191) NOT NULL,
  `no_jenis_hak` varchar(191) NOT NULL,
  `nib` varchar(191) NOT NULL,
  `keadaan_tanah` varchar(191) NOT NULL,
  `batas` varchar(191) NOT NULL,
  `luas` int(191) NOT NULL,
  `nomor` int(191) NOT NULL,
  `surat_ukur` varchar(191) DEFAULT NULL,
  `sertifikat` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengukuran`
--

INSERT INTO `pengukuran` (`id_pengukuran`, `no_jenis_hak`, `nib`, `keadaan_tanah`, `batas`, `luas`, `nomor`, `surat_ukur`, `sertifikat`) VALUES
('610c284059046', '10.06.14.04.02500', '3185', 'a', 'a', 123, 1, '610c29fa9dec7.pdf', '610c29fdc82b3.pdf'),
('610c2db5adc80', '10.06.14.04.02500', '3185', 'a', 'a', 45, 2, '610c2dd31fe8f.pdf', '610c2dd63db46.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','loket','pengukur','masyarakat','kepala_desa') NOT NULL,
  `sppt` varchar(191) DEFAULT NULL,
  `ktp` varchar(191) DEFAULT NULL,
  `ajb` varchar(191) DEFAULT NULL,
  `kk` varchar(191) DEFAULT NULL,
  `npwp` varchar(191) DEFAULT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama`, `username`, `password`, `level`, `sppt`, `ktp`, `ajb`, `kk`, `npwp`, `alamat`, `desa`, `kecamatan`, `tanggal_lahir`) VALUES
(1, 'andri', 'andri32', 'admin', 'admin', '', '', '', '', '', '', '', '', NULL),
(2, 'susi', 'susi', 'susi', 'loket', '', '', '', '', '', '', '', '', NULL),
(3, 'asep', 'asep', 'cicalengka', 'pengukur', '', '', '', '', '', '', '', '', NULL),
(5, 'inwan', 'inwan', 'inwan', 'masyarakat', 'document.pdf', 'document.pdf', 'document.pdf', 'document.pdf', 'document.pdf', 'cicalengka', '', '', NULL),
(11, 'M. Bagas Setia Permana', 'bagassetia', '12345678', 'masyarakat', 'document.pdf', 'document1.pdf', 'document3.pdf', 'document4.pdf', 'document2.pdf', 'Kp. Pasir Gombong', 'Sukamandi', 'Sagalaherang', '2021-06-13'),
(13, 'Kepala Desa', 'kepala_desa', 'kepala_desa', 'kepala_desa', NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(14, 'albi1', 'albi1', 'albi1', 'masyarakat', NULL, NULL, NULL, NULL, NULL, 'dampit', 'cibogo', 'cicalengka', '1999-02-16'),
(15, 'dina', 'dina12', 'diba12', 'masyarakat', NULL, NULL, NULL, NULL, NULL, 'cicalengka', 'subang', 'subang', '1999-02-16'),
(16, 'andri', 'andri1', 'andri1', 'masyarakat', NULL, NULL, NULL, NULL, NULL, 'bandung', 'subang', 'subang', '1999-03-10'),
(17, 'dika', 'dika', 'dika', 'pengukur', NULL, NULL, NULL, NULL, NULL, '', '', '', NULL),
(18, 'Uswatun Hasanah', 'dosen1', 'dosen1', 'masyarakat', NULL, NULL, NULL, NULL, NULL, 'SUBANG', 'subang', 'subang', '1999-03-04'),
(19, 'andri2', 'andri2', 'andri2', 'masyarakat', NULL, NULL, NULL, NULL, NULL, 'SUBANG', 'subang', 'subang', '1999-12-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`id_pengukuran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
