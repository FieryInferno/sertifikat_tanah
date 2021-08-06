-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2021 pada 09.34
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
(1, '5', 'Kapan beresnya?', 'verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_masyarakat` int(191) NOT NULL,
  `bukti_pembayaran` varchar(191) DEFAULT NULL,
  `status` enum('0','1','2','3','4') NOT NULL,
  `stt` varchar(191) DEFAULT NULL,
  `sps` varchar(191) DEFAULT NULL,
  `pengukuran` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `ktp` varchar(191) DEFAULT NULL,
  `berita_acara` varchar(191) DEFAULT NULL,
  `tanda_batas_tanah` varchar(191) DEFAULT NULL,
  `surat_keterangan_tidak_sengketa` varchar(191) DEFAULT NULL,
  `kartu_keluarga` varchar(191) DEFAULT NULL,
  `npwp` varchar(191) DEFAULT NULL,
  `izin_mendirikan_bangunan` varchar(191) DEFAULT NULL,
  `ajb` varchar(191) DEFAULT NULL,
  `pph` varchar(191) DEFAULT NULL,
  `bphtb` varchar(191) DEFAULT NULL,
  `akta_hibah` varchar(191) DEFAULT NULL,
  `bukti_penguasaan_tanah` varchar(191) DEFAULT NULL,
  `pbb` varchar(191) DEFAULT NULL,
  `surat_keterangan_belum_bersertifikat` varchar(191) DEFAULT NULL,
  `surat_keterangan_riwayat_tanah` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_masyarakat`, `bukti_pembayaran`, `status`, `stt`, `sps`, `pengukuran`, `alamat`, `ktp`, `berita_acara`, `tanda_batas_tanah`, `surat_keterangan_tidak_sengketa`, `kartu_keluarga`, `npwp`, `izin_mendirikan_bangunan`, `ajb`, `pph`, `bphtb`, `akta_hibah`, `bukti_penguasaan_tanah`, `pbb`, `surat_keterangan_belum_bersertifikat`, `surat_keterangan_riwayat_tanah`) VALUES
(10, 5, 'Sertifikat_Akreditasi_Politeknik_Negeri_Subang4.pdf', '4', '6103810e06ae8.pdf', '610381210af6e.pdf', '', 'Sagalaherang', 'Sertifikat_Akreditasi_Politeknik_Negeri_Subang.pdf', 'Sertifikat_Akreditasi_Politeknik_Negeri_Subang1.pdf', 'Sertifikat_Akreditasi_Politeknik_Negeri_Subang2.pdf', 'Sertifikat_Akreditasi_Politeknik_Negeri_Subang3.pdf', '1.pdf', '11.pdf', '12.pdf', '13.pdf', '14.pdf', '15.pdf', '16.pdf', '17.pdf', '18.pdf', '19.pdf', '110.pdf');

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
(5, 'inwan', 'inwan', 'inwan', 'masyarakat', 'document.pdf', 'document.pdf', 'document.pdf', 'document.pdf', 'document.pdf', '', '', '', NULL),
(11, 'M. Bagas Setia Permana', 'bagassetia', '12345678', 'masyarakat', 'document.pdf', 'document1.pdf', 'document3.pdf', 'document4.pdf', 'document2.pdf', 'Kp. Pasir Gombong', 'Sukamandi', 'Sagalaherang', '2021-06-13'),
(13, 'Kepala Desa', 'kepala_desa', 'kepala_desa', 'kepala_desa', NULL, NULL, NULL, NULL, NULL, '', '', '', NULL);

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
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
