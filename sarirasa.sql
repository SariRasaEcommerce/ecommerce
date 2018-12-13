-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2018 pada 02.22
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarirasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`ID_ADMIN` int(10) NOT NULL,
  `NAMA_ADMIN` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `ALAMAT` text NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `NO_TELP` varchar(13) NOT NULL,
  `IMG` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID_ADMIN`, `NAMA_ADMIN`, `EMAIL`, `ALAMAT`, `PASSWORD`, `NO_TELP`, `IMG`) VALUES
(1, '', 'admin@gmail.com', 'JEMBER', 'admin123', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
`ID_BARANG` int(11) NOT NULL,
  `ID_ADMIN` varchar(10) NOT NULL,
  `NAMA_BARANG` text NOT NULL,
  `BERAT` decimal(25,0) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `IMG` varchar(100) NOT NULL,
  `HARGA_BARANG` decimal(25,0) NOT NULL,
  `STOK` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`ID_BARANG`, `ID_ADMIN`, `NAMA_BARANG`, `BERAT`, `DESKRIPSI`, `IMG`, `HARGA_BARANG`, `STOK`) VALUES
(6, '1', 'Tape', '240', 'Olahan singkong', 'assets/webadmin/img/DF_Manual1.jpg', '20000', 20),
(7, '1', 'Suwar Suwir', '230', 'Olahan tape', 'assets/webadmin/img/ERD_Absensi.jpg', '23000', 23),
(8, '2', 'Prol Tape', '23', 'Olahan tape', 'assets/webadmin/img/Logo_TIF.png', '23000', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buktitf`
--

CREATE TABLE IF NOT EXISTS `tbl_buktitf` (
`ID_BUKTI` int(11) NOT NULL,
  `ID_PELANGGAN` int(11) NOT NULL,
  `ID_TRANSAKSI` varchar(11) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `IMG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detailtransaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_detailtransaksi` (
  `ID_DETAILTRANSAKSI` varchar(11) NOT NULL,
  `ID_KERANJANG` varchar(11) NOT NULL,
  `ID_PELANGGAN` varchar(11) NOT NULL,
  `TGL_TRANSAKSI` date NOT NULL,
  `JUMLAH` int(13) NOT NULL,
  `TOTAL` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keranjang`
--

CREATE TABLE IF NOT EXISTS `tbl_keranjang` (
  `ID_KERANJANG` varchar(11) NOT NULL,
  `ID_TRANSAKSI` varchar(11) NOT NULL,
  `ID_PELANGGAN` varchar(11) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
`ID_PELANGGAN` int(100) NOT NULL,
  `NAMA_PEL` varchar(100) NOT NULL,
  `ALAMAT_PEL` text NOT NULL,
  `NO_TELP` varchar(13) NOT NULL,
  `JK` varchar(14) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `STATUS_PEL` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`ID_PELANGGAN`, `NAMA_PEL`, `ALAMAT_PEL`, `NO_TELP`, `JK`, `TGL_LAHIR`, `EMAIL`, `PASSWORD`, `STATUS_PEL`) VALUES
(1, 'Ardhan', 'Jember', '081230439511', 'Laki - Laki', '1998-02-05', 'febriansyahardhan@gmail.com', 'ardhan789', 'Terkonfirmasi'),
(2, 'Rais', 'Pati', '081234321123', 'Laki - Laki', '2008-11-21', 'rais@gmail.com', 'rais123', 'Belum Terkonfirmasi'),
(3, 'Avinda', 'Magetan', '082345678876', 'Laki - Laki', '2018-11-21', 'avinda@gmail.com', 'avinda123', 'Belum Terkonfirmasi'),
(5, 'Firdaus', 'Bondowoso', '081235465769', 'Perempuan', '2018-11-21', 'firdaus@gmail.com', 'firdaus', 'Terkonfirmasi'),
(6, 'Rizki', 'Jember', '0822233334455', 'Laki - Laki', '2018-03-21', 'rizki@gmail.com', 'rizki123', 'Terkonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slideshow`
--

CREATE TABLE IF NOT EXISTS `tbl_slideshow` (
`ID_SLIDE` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `IMG` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_slideshow`
--

INSERT INTO `tbl_slideshow` (`ID_SLIDE`, `ID_ADMIN`, `IMG`) VALUES
(2, 1, 'assets/webadmin/img/Tunjungan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `ID_TRANSAKSI` varchar(11) NOT NULL,
  `ID_BARANG` varchar(11) NOT NULL,
  `ID_PELANGGAN` int(11) NOT NULL,
  `HARGA` decimal(25,0) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
 ADD PRIMARY KEY (`ID_BARANG`);

--
-- Indexes for table `tbl_buktitf`
--
ALTER TABLE `tbl_buktitf`
 ADD PRIMARY KEY (`ID_BUKTI`);

--
-- Indexes for table `tbl_detailtransaksi`
--
ALTER TABLE `tbl_detailtransaksi`
 ADD PRIMARY KEY (`ID_DETAILTRANSAKSI`);

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
 ADD PRIMARY KEY (`ID_KERANJANG`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
 ADD PRIMARY KEY (`ID_PELANGGAN`);

--
-- Indexes for table `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
 ADD PRIMARY KEY (`ID_SLIDE`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
 ADD PRIMARY KEY (`ID_TRANSAKSI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `ID_ADMIN` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_buktitf`
--
ALTER TABLE `tbl_buktitf`
MODIFY `ID_BUKTI` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
MODIFY `ID_PELANGGAN` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
MODIFY `ID_SLIDE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
