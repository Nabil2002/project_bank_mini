-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 08:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibanking_smkn1dpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_code`
--

CREATE TABLE `tb_code` (
  `id_code` int(11) NOT NULL,
  `access_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_code`
--

INSERT INTO `tb_code` (`id_code`, `access_code`) VALUES
(1, '4dm1n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(3) NOT NULL,
  `number_rek` bigint(10) NOT NULL,
  `nis` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_pembayaran` enum('SPP','KI','Seragam','PKL') NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `thn_ajaran` enum('2018/2019','2019/2020','2020/2021') NOT NULL,
  `tgl_bayar` date NOT NULL,
  `pembayaran` bigint(8) NOT NULL,
  `kode_pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `number_rek`, `nis`, `nama`, `jenis_pembayaran`, `bulan`, `thn_ajaran`, `tgl_bayar`, `pembayaran`, `kode_pembayaran`) VALUES
(42, 5926413298, 0, '', '', '', '', '2020-02-07', 0, ''),
(43, 5926413298, 0, '', '', '', '', '2020-02-07', 0, ''),
(44, 5926413298, 0, '', '', '', '', '0000-00-00', 0, ''),
(45, 5926413298, 181910204, 'Nabil Khoerul Rijal', 'KI', 'Februari', '2018/2019', '2020-02-07', 100000, '0593101971'),
(46, 5926413298, 181910204, 'Nabil Khoerul Rijal', 'SPP', 'November', '2018/2019', '2020-02-07', 100000, '7828866359'),
(47, 5926413298, 181910204, 'Nabil Khoerul Rijal', 'SPP', 'Januari', '2018/2019', '2020-02-07', 100000, ''),
(48, 5926413298, 181910204, 'Nabil Khoerul Rijal', 'SPP', 'Desember', '2018/2019', '2020-02-07', 1000000, '4969413795'),
(49, 5926413298, 181910204, 'Nabil Khoerul RIjal', 'SPP', 'Desember', '2018/2019', '2020-02-07', 10000, '4998521609');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `kode_petugas` varchar(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`kode_petugas`, `nama`, `username`, `password`) VALUES
('p01', 'Petugas TU', 'Admin', 'TU4dm1n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `number_rek` bigint(10) NOT NULL,
  `nis` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `kelas_jurusan` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`number_rek`, `nis`, `nama`, `password`, `jenis_kelamin`, `kelas_jurusan`, `tgl_lahir`, `alamat`) VALUES
(0, 1122334455, 'Hendra Wiguna Sastra Wiganda', '123123', 'Laki-laki', 'XI RPL 1', '0222-03-22', 'Cimpaeun Tapos'),
(363988390, 8, 'KMAVING', '222113123', 'Perempuan', ' X RPL 1', '2020-02-11', 'Jl.Raya Tapos RT04 RW04 NO97 Kecamatan Tapos Kota Depok Jawa barat Indonesia'),
(734212460, 1122334455, 'Hendra Wiguna Sastra Wiganda', '123123qwe', 'Laki-laki', 'XI RPL 1', '0222-03-22', 'Cimpaeun Tapos'),
(1252306131, 66546565, 'Kamving', 'fhdrgsgrsg', 'Laki-laki', 'X RPL 1', '2020-02-11', 'jln.raya tapos rw01/01 depok Cimpaeun123'),
(1507838613, 2017100001, 'Hendra Wiguna Sastra Wiganda', '2222222222', '', '2222', '0002-02-22', 'wqeqweq42143'),
(1766967816, 2014201504, 'Kamving Betina', 'akuKamving', 'Laki-laki', 'X RPL 1', '2020-02-18', 'Jl.Raya Tapos RT04 RW04 NO97 Kecamatan Tapos Kota Depok Jawa barat Indonesia'),
(2046254206, 32112132, 'KAmbing', 'assswadaw', 'Perempuan', ' X RPL 1', '2020-02-26', 'Cimpaeun Tapos'),
(2221539807, 1, 'Nabil Khoerul sdawdasd', 'adwadasdaw', 'Perempuan', 'X RPL 1', '2020-02-13', 'jln.raya tapos rw01/01 depok Cimpaeun'),
(2587341661, 181910200, 'aku gak punya nama', '123qwe', 'Laki-laki', 'XI RPL 1', '2002-05-11', 'KP.CILANGKAP RT.003/013 KEL.CILANGKAP KEC.TAPOS KOTA DEPOK - 16465'),
(3433506418, 2017100001, 'wawan', 'wawan12', 'Laki-laki', 'x rpl 1', '2020-02-25', 'Jl.raya tapos RT04/04 No.97 Kec.tapos Kota.depok Jawa barat'),
(3834316506, 1819101212, 'qweqwe', 'qweqwe', 'Perempuan', 'XI RPL 1', '2222-02-22', 'Jl.raya tapos RT04/04 No.97 Kec.tapos Kota.depok Jawa barat'),
(4016354534, 2147483647, 'asas', 'asas', 'Laki-laki', 'XI RPL 1', '3333-03-31', 'jln.raya tapos rw01/01 depok Cimpaeun123'),
(4586310472, 12321231, 'AkuORang', '11223', 'Perempuan', 'X RPL 1', '2020-02-04', 'jln.raya tapos rw01/01 depok Cimpaeun123'),
(4803337454, 1231321, 'Kamving', 'kamving', 'Laki-laki', 'X RPL 1', '2020-02-12', 'Cimpaeun Tapos'),
(5926413298, 181910204, 'Nabil Khoerul Rijal', 'Nabil_wolles', 'Laki-laki', 'XI RPL 1', '2002-04-06', 'Jl.Raya Tapos RT04 RW04 NO97 Kecamatan Tapos Kota Depok Jawa barat Indonesia'),
(6119941193, 2014201504, 'KAMVINGJANTAN', 'KAmving', 'Perempuan', ' X RPL 1', '2020-02-20', 'Jl.raya tapos RT04/04 No.97 Kec.tapos Kota.depok Jawa barat'),
(6165410177, 2014201504, 'KamvingJAntan', 'kamving1231', 'Laki-laki', 'x rpl 1', '2020-02-19', 'Jl.Raya Tapos RT04 RW04 NO97 Kecamatan Tapos Kota Depok Jawa barat Indonesia'),
(6951244155, 2017100001, 'Hendra Wiguna Sastra Wiganda', '22222', 'Laki-laki', 'XI RPL 1', '0002-02-22', 'jln.raya tapos rw01/01 depok Cimpaeun123'),
(8549456964, 2017100001, 'Nabil Khoerul RIjal', '123123', 'Laki-laki', ' X RPL 1', '0222-02-22', 'Jl.raya tapos RT04/04 No.97 Kec.tapos Kota.depok Jawa barat'),
(9884112318, 181910232, 'Syafarudin Maulana', 'Syafar123', 'Laki-laki', 'XI RPL 1', '2002-05-11', 'KP.CILANGKAP RT.003/013 KEL.CILANGKAP KEC.TAPOS KOTA DEPOK - 16465');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tabungan`
--

CREATE TABLE `tb_tabungan` (
  `number_rek` bigint(10) NOT NULL,
  `pembayaran` bigint(8) NOT NULL,
  `setoran` bigint(8) NOT NULL,
  `saldo` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_code`
--
ALTER TABLE `tb_code`
  ADD PRIMARY KEY (`id_code`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`kode_petugas`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`number_rek`);

--
-- Indexes for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD PRIMARY KEY (`number_rek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_code`
--
ALTER TABLE `tb_code`
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_tabungan`
--
ALTER TABLE `tb_tabungan`
  ADD CONSTRAINT `tb_tabungan_ibfk_1` FOREIGN KEY (`number_rek`) REFERENCES `tb_siswa` (`number_rek`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
