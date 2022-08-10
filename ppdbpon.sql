-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 12:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbpon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_daftar` varchar(50) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `nama_panggilan` varchar(40) NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat_lhr` varchar(20) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `pend_terakhir` varchar(15) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `mondok` enum('PERNAH','TIDAK PERNAH') NOT NULL,
  `ponpes_asal` varchar(50) NOT NULL,
  `konsentrasi` enum('SAINS','SALAF') NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `ktpayah` varchar(20) NOT NULL,
  `kerja_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `ktpibu` varchar(20) NOT NULL,
  `kerja_ibu` varchar(20) NOT NULL,
  `penghasilan` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `berkas` varchar(10) NOT NULL DEFAULT 'Belum',
  `waktu_daftar` datetime NOT NULL DEFAULT current_timestamp(),
  `th_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_daftar`, `nama_lengkap`, `nama_panggilan`, `jekel`, `nik`, `tempat_lhr`, `tgl_lhr`, `pend_terakhir`, `asal_sekolah`, `alamat`, `mondok`, `ponpes_asal`, `konsentrasi`, `nama_ayah`, `ktpayah`, `kerja_ayah`, `nama_ibu`, `ktpibu`, `kerja_ibu`, `penghasilan`, `no_hp`, `foto`, `berkas`, `waktu_daftar`, `th_ajaran`) VALUES
('0af4cc06-4c70-4563-8977-bc7aaf01a1a7', 'Muhammad', 'Muhammad', 'Laki-laki', '12345678910', 'Kudus', '2021-03-01', 'SD', 'SD Harapan', 'Desa mana RT 02 RW 01, Kecamatan disini, Kabupaten apa', '', '-', 'SALAF', 'Abdullah', '23456789567', 'Pedagang', 'Aminah', '345678902345', 'Ibu Rumah Tangga', '20.000.000', '081234567890', 'Foto.jpg', 'Belum', '2021-03-01 03:15:19', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('Administrator','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(0, 'Administrator', 'administrator', '123', 'Administrator'),
(0, 'Petugas', 'petugas', '123', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ponpes`
--

CREATE TABLE `tb_ponpes` (
  `id_ponpes` int(11) NOT NULL,
  `nama_ponpes` varchar(40) NOT NULL,
  `alamat_ponpes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ponpes`
--

INSERT INTO `tb_ponpes` (`id_ponpes`, `nama_ponpes`, `alamat_ponpes`) VALUES
(1, 'Pondok Pesantren Tasywiqul Furqon', 'Kudus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sesi`
--

CREATE TABLE `tb_sesi` (
  `id_sesi` int(11) NOT NULL,
  `sesi` varchar(30) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sesi`
--

INSERT INTO `tb_sesi` (`id_sesi`, `sesi`, `tgl_awal`, `tgl_akhir`, `gambar`) VALUES
(1, 'tahap awal', '2021-02-01', '2021-04-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id_tahun` varchar(10) NOT NULL,
  `t_ajaran` varchar(40) NOT NULL,
  `status` enum('Aktif','Non Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`id_tahun`, `t_ajaran`, `status`) VALUES
('2021', '2021', 'Aktif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
