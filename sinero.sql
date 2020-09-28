-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2020 pada 16.19
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

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `email`, `usr_admin`, `pwd_admin`) VALUES
(1, 'Anang Mukhlisin', 'anang_admin@sinero.com', '16071998', '16071998');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(5) NOT NULL,
  `nip` int(15) NOT NULL,
  `nama` char(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenkel` enum('L','P','','') NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `agama` char(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama`, `alamat`, `jenkel`, `email`, `nohp`, `agama`, `tempat_lahir`, `tgl_lahir`, `jabatan`) VALUES
(2, 123, 'Anang Mukhlisin', 'Kebumen', 'L', 'anangmukhlisin69@gmail.com', '0895422980022', 'Islam', 'Sragen', '2023-09-20', 'Guru Honorer'),
(4, 126, 'Bagas Satrio', 'Kebumen', 'L', 'anangmukhlisin69@gmail.com', '4546464', 'Budha', 'Sragen', '2009-09-20', 'Guru Honorer'),
(5, 12, 'Rama Anam', 'sds', 'L', 'anangmukhlisin69@gmail.com', '4546464', 'Kristen Pr', 'Sragen', '2016-09-20', 'Ka Kwaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hari`
--

CREATE TABLE `tb_hari` (
  `id_hari` int(5) NOT NULL,
  `nama_hari` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hari`
--

INSERT INTO `tb_hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selas'),
(3, 'Rabu'),
(5, 'Kamis'),
(6, 'Jumat'),
(7, 'Sabtu');

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
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'VII A'),
(2, 'VII B'),
(3, 'VII C'),
(4, 'VII D'),
(5, 'VII E'),
(6, 'VII F'),
(7, 'VII G'),
(9, 'VIII A'),
(10, 'VIII B'),
(11, 'VIII C'),
(12, 'VIII D'),
(13, 'VIII E'),
(14, 'VIII F'),
(15, 'VIII G'),
(16, 'VIII H'),
(17, 'IX A'),
(18, 'IX B'),
(19, 'IX C'),
(20, 'IX D'),
(21, 'IX E'),
(22, 'IX F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(5) NOT NULL,
  `nama_mapel` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Agama'),
(3, 'Ppkn'),
(4, 'Matematika'),
(5, 'IPA'),
(6, 'IPS'),
(7, 'Bahasa Inggris'),
(8, 'Seni Budaya'),
(9, 'Penjaskes'),
(10, 'Prakarya'),
(11, 'Bahasa Jawa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mengajar`
--

CREATE TABLE `tb_mengajar` (
  `id_mengajar` int(5) NOT NULL,
  `nip` int(5) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `nis` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL
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

--
-- Dumping data untuk tabel `tb_semester`
--

INSERT INTO `tb_semester` (`id_semester`, `smt`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(5) NOT NULL,
  `nama` char(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `agama` char(10) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pwd_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `alamat`, `jenkel`, `nohp`, `agama`, `tempat_lahir`, `tgl_lahir`, `pwd_siswa`) VALUES
(7191, 'Anang Mukhlisin', 'Sragen', 'L', '0895422980022', 'Islam', 'Sragen', '2020-09-17', '7191'),
(7192, 'Rama', 'Sragen', 'L', '0867343', 'Kristen', 'Kebumen', '2020-09-03', '7192');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tahunajar`
--

CREATE TABLE `tb_tahunajar` (
  `id_tahunajar` int(5) NOT NULL,
  `nama_tahunajar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tahunajar`
--

INSERT INTO `tb_tahunajar` (`id_tahunajar`, `nama_tahunajar`) VALUES
(1, '2020/2021'),
(2, '2021/2022'),
(3, '2022/2023'),
(4, '2023/2024');

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
  ADD PRIMARY KEY (`id_guru`);

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
  ADD KEY `id_jam` (`id_jam`),
  ADD KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `id_hari` (`id_hari`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_tahunajar` (`id_tahunajar`),
  ADD KEY `id_kelas` (`id_kelas`);

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
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `nis` (`nis`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_presensi` (`id_presensi`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_tahunajar` (`id_tahunajar`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_hari`
--
ALTER TABLE `tb_hari`
  MODIFY `id_hari` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  MODIFY `id_mengajar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `id_semester` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_tahunajar`
--
ALTER TABLE `tb_tahunajar`
  MODIFY `id_tahunajar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_10` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_jam`) REFERENCES `tb_jam` (`id_jam`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_4` FOREIGN KEY (`id_mengajar`) REFERENCES `tb_mengajar` (`id_mengajar`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_7` FOREIGN KEY (`id_hari`) REFERENCES `tb_hari` (`id_hari`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_8` FOREIGN KEY (`id_semester`) REFERENCES `tb_semester` (`id_semester`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_9` FOREIGN KEY (`id_tahunajar`) REFERENCES `tb_tahunajar` (`id_tahunajar`);

--
-- Ketidakleluasaan untuk tabel `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD CONSTRAINT `tb_mengajar_ibfk_5` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mengajar_ibfk_6` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mengajar_ibfk_7` FOREIGN KEY (`nip`) REFERENCES `tb_guru` (`id_guru`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_10` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_6` FOREIGN KEY (`id_presensi`) REFERENCES `tb_presensi` (`id_presensi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_7` FOREIGN KEY (`id_semester`) REFERENCES `tb_semester` (`id_semester`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_8` FOREIGN KEY (`id_tahunajar`) REFERENCES `tb_tahunajar` (`id_tahunajar`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_9` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_presensi`
--
ALTER TABLE `tb_presensi`
  ADD CONSTRAINT `tb_presensi_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_presensi_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
