-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2020 pada 17.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinero`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `nama` char(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usr_admin` varchar(25) NOT NULL,
  `pwd_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip` int(15) NOT NULL,
  `nama` char(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenkel` enum('L','P','','') NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(15) NOT NULL,
  `agama` char(10) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `jabatan` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hari`
--

CREATE TABLE `tb_hari` (
  `id_hari` int(5) NOT NULL,
  `nama_hari` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_hari` int(5) NOT NULL,
  `id_jam` int(5) NOT NULL,
  `id_mengajar` int(5) NOT NULL,
  `id_tahunajar` int(5) NOT NULL,
  `id_semester` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jam`
--

CREATE TABLE `tb_jam` (
  `id_jam` int(11) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(5) NOT NULL,
  `nama_kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(5) NOT NULL,
  `nama_mapel` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mengajar`
--

CREATE TABLE `tb_mengajar` (
  `id_mengajar` int(5) NOT NULL,
  `nip` int(15) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `nis` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `id_semester` int(5) NOT NULL,
  `id_mapel` int(15) NOT NULL,
  `n_pts` int(5) NOT NULL,
  `n_uas` int(5) NOT NULL,
  `n_prestasi` int(5) NOT NULL,
  `n_keterampilan` int(5) NOT NULL,
  `id_presensi` int(5) NOT NULL,
  `id_tahunajar` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_presensi`
--

CREATE TABLE `tb_presensi` (
  `id_presensi` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `hadir` enum('1','0','','') NOT NULL,
  `alfa` enum('1','0','','') NOT NULL,
  `izin` enum('1','0','','') NOT NULL,
  `sakit` enum('1','0','','') NOT NULL,
  `keterangan` text NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_semester`
--

CREATE TABLE `tb_semester` (
  `id_semester` int(5) NOT NULL,
  `smt` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(5) NOT NULL,
  `nama` char(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenkel` enum('L','P','','') NOT NULL,
  `nohp` int(15) NOT NULL,
  `agama` char(10) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `user_siswa` int(10) NOT NULL,
  `pwd_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahunajar`
--

CREATE TABLE `tb_tahunajar` (
  `id_tahunajar` int(5) NOT NULL,
  `nama_tahunajar` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_hari`
--
ALTER TABLE `tb_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD UNIQUE KEY `id_hari` (`id_hari`),
  ADD UNIQUE KEY `id_jam` (`id_jam`),
  ADD UNIQUE KEY `id_mengajar` (`id_mengajar`),
  ADD UNIQUE KEY `id_tahunajar` (`id_tahunajar`),
  ADD UNIQUE KEY `id_semester` (`id_semester`);

--
-- Indeks untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD UNIQUE KEY `id_mapel` (`id_mapel`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `id_semester` (`id_semester`),
  ADD UNIQUE KEY `id_presensi` (`id_presensi`),
  ADD UNIQUE KEY `id_jadwal` (`id_mapel`),
  ADD UNIQUE KEY `id_tahunajar` (`id_tahunajar`);

--
-- Indeks untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_tahunajar`
--
ALTER TABLE `tb_tahunajar`
  ADD PRIMARY KEY (`id_tahunajar`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_mengajar` (`nip`);

--
-- Ketidakleluasaan untuk tabel `tb_hari`
--
ALTER TABLE `tb_hari`
  ADD CONSTRAINT `tb_hari_ibfk_1` FOREIGN KEY (`id_hari`) REFERENCES `tb_jadwal` (`id_hari`);

--
-- Ketidakleluasaan untuk tabel `tb_jam`
--
ALTER TABLE `tb_jam`
  ADD CONSTRAINT `tb_jam_ibfk_1` FOREIGN KEY (`id_jam`) REFERENCES `tb_jadwal` (`id_jam`);

--
-- Ketidakleluasaan untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_jadwal` (`id_kelas`),
  ADD CONSTRAINT `tb_kelas_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_presensi` (`id_kelas`),
  ADD CONSTRAINT `tb_kelas_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `tb_nilai` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD CONSTRAINT `tb_mapel_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mengajar` (`id_mengajar`),
  ADD CONSTRAINT `tb_mapel_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tb_nilai` (`id_mapel`);

--
-- Ketidakleluasaan untuk tabel `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD CONSTRAINT `tb_mengajar_ibfk_1` FOREIGN KEY (`id_mengajar`) REFERENCES `tb_jadwal` (`id_mengajar`);

--
-- Ketidakleluasaan untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD CONSTRAINT `tb_presensi_ibfk_1` FOREIGN KEY (`id_presensi`) REFERENCES `tb_nilai` (`id_presensi`);

--
-- Ketidakleluasaan untuk tabel `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD CONSTRAINT `tb_semester_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `tb_jadwal` (`id_semester`),
  ADD CONSTRAINT `tb_semester_ibfk_2` FOREIGN KEY (`id_semester`) REFERENCES `tb_nilai` (`id_semester`);

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_presensi` (`nis`),
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tb_mengajar` (`nis`),
  ADD CONSTRAINT `tb_siswa_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `tb_nilai` (`nis`);

--
-- Ketidakleluasaan untuk tabel `tb_tahunajar`
--
ALTER TABLE `tb_tahunajar`
  ADD CONSTRAINT `tb_tahunajar_ibfk_1` FOREIGN KEY (`id_tahunajar`) REFERENCES `tb_jadwal` (`id_tahunajar`),
  ADD CONSTRAINT `tb_tahunajar_ibfk_2` FOREIGN KEY (`id_tahunajar`) REFERENCES `tb_nilai` (`id_tahunajar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
