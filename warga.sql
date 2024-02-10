-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 10:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bantuan_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `status_kawin` varchar(50) DEFAULT NULL,
  `status_kependudukan` varchar(100) DEFAULT NULL,
  `hubungan_keluarga` varchar(100) DEFAULT NULL,
  `kondisi_fisik` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `status_pensiun` varchar(100) DEFAULT NULL,
  `pendapatan` varchar(100) DEFAULT NULL,
  `usaha` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_rumah` varchar(100) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `no_kk`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `pendidikan`, `status_kawin`, `status_kependudukan`, `hubungan_keluarga`, `kondisi_fisik`, `pekerjaan`, `status_pensiun`, `pendapatan`, `usaha`, `alamat`, `no_rumah`, `rt`, `rw`, `no_telp`) VALUES
('3204150911680002', '3204171308190006', 'ASEP  WARMAN', 'Laki-laki', '1968-11-09', 'SD', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Karyawan Swasta', 'Tidak', '2300000', 'Tidak', 'BANTARPAYUNG', '29', '004', '003', ''),
('3206020101820007', '3206062805140002', 'ITON RUSTANDI', 'Laki-laki', '1982-01-01', 'SD', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Ya', '550000', 'Tidak', 'BANTARPAYUNG', '16', '004', '003', ''),
('3206060102550002', '3206063001140003', 'JOJO SUDARJO', 'Laki-laki', '1955-11-04', 'SD', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '750000', 'Ya', 'BANTARPAYUNG', '38', '004', '003', ''),
('3206060103670003', '3206060108058165', 'TATANG ISKANDAR ', 'Laki-laki', '1967-03-10', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'KARYAWAN SWASTA', 'Tidak', '3000000', 'Tidak', 'BANTARPAYUNG', '06', '004', '003', ''),
('3206060108057019', '3206061605050004', 'REYZA ZALFA GRAHA', 'Laki-laki', '2005-05-16', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', 'Pelajar', 'Tidak', '', 'Tidak', 'BANTARPAYUNG', '', '004', '003', ''),
('3206060108650001', '3206062311130005', 'ASEP DIANTO', 'Laki-laki', '1964-08-01', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'PENGAJAR', 'Ya', '2600000', 'Tidak', 'BANTARPAYUNG', '24', '004', '003', ''),
('3206060109850003', '3206060806120003', 'SANTIKA', 'Perempuan', '1985-09-01', 'SMP', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'ASISTEN RUMAH TANGGA', 'Tidak', '550000', 'Tidak', 'BANTARPAYUNG', '15', '004', '003', ''),
('3206060210670001', '3206060108057497', 'OPIK HOPIDIN', 'Laki-laki', '1967-10-02', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'SOPIR', 'Tidak', '3500000', 'Ya', 'BANTARPAYUNG', '', '004', '003', ''),
('3206060502740003', '3206060108058372', 'YUSUP SUPRIADI', 'Laki-laki', '1974-05-02', 'SD', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '850000', 'Tidak', 'BANTARPAYUNG', '07', '004', '003', ''),
('3206060504810002', '3206061511070003', 'ADI HARI ASMARA', 'Laki-laki', '1981-04-05', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Wiraswasta', 'Tidak', '550000', 'Ya', 'BANTARPAYUNG', '31', '004', '003', ''),
('3206060507730003', '3206062009120004', 'JENAL ARIPIN', 'Laki-laki', '1973-07-05', 'SMP', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '1050000', 'Tidak', 'BANTARPAYUNG', '32', '004', '003', ''),
('3206060707740001', '3206061003150001', 'IDO RIDWAN ', 'Laki-laki', '1974-07-07', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', '', 'Wiraswasta', 'Tidak', '2350000', 'Ya', 'BANTARPAYUNG', '41', '004', '003', ''),
('3206060804610001', '3206060501120009', 'NONO ', 'Laki-laki', '1961-08-04', 'SD', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '800000', 'Tidak', 'BANTARPAYUNG', '03', '004', '003', ''),
('3206060804840002', '3206060108057019', 'ARA NUGRAHA   ', 'Laki-laki', '1984-08-04', 'SMP', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'OJEK', 'Tidak', '650000', 'Tidak', 'BANTARPAYUNG', '42', '004', '003', ''),
('3206060807500001', '3206060108057508', 'IBROHIM', 'Laki-laki', '1950-07-08', 'SMP', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '800000', 'Tidak', 'BANTARPAYUNG', '11', '004', '003', ''),
('3206060808530001', '3206063001110318', 'ROHMAN ', 'Laki-laki', '1953-08-08', 'SD', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '500000', 'Tidak', 'BANTARPAYUNG', '01', '004', '003', ''),
('3206060906080004', '3206061511070003', 'GHANI FATIR NURALBANI', 'Laki-laki', '2008-06-09', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', 'Pelajar', 'Tidak', '', 'Tidak', '', '31', '004', '003', ''),
('3206060907520001', '3206063001110332', 'AYO  ', 'Laki-laki', '1952-09-07', 'SD', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '700000', 'Tidak', 'BANTARPAYUNG', '02', '004', '003', ''),
('3206061101740001', '3206062310070015', 'YANTO BUDIYANTO,SP', 'Laki-laki', '1974-11-01', 'S1', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'KARYAWAN SWASTA', 'Tidak', '7000000', 'Tidak', 'BANTARPAYUNG', '13', '004', '003', ''),
('3206061107600002', '3206060108056870', 'AAN', 'Laki-laki', '1960-07-11', 'SD', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '550000', 'Tidak', 'BANTARPAYUNG', '14', '004', '003', ''),
('3206061108670001', '3206060108058302', 'WAWAN KOSWARA ', 'Laki-laki', '1967-08-11', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Ya', '800000', 'Tidak', 'BANTARPAYUNG', '35', '004', '003', ''),
('3206061310660001', '3206060108057524', 'II KUSWITA', 'Laki-laki', '1966-10-13', 'D3', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Wiraswasta', 'Tidak', '2600000', 'Ya', 'BANTARPAYUNG', '08', '004', '003', ''),
('3206061409510002', '3206060108057643', 'JUMAD', 'Laki-laki', '1951-12-09', 'SD', 'Cerai Mati', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '750000', 'Tidak', 'BANTARPAYUNG', '04', '004', '003', ''),
('3206061507680003', '3206060108058127', 'SUPYAN ', 'Laki-laki', '1968-07-15', 'SD', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '850000', 'Ya', 'BANTARPAYUNG', '36', '004', '003', ''),
('3206061604520004', '3206060108057366', 'ADEN', 'Laki-laki', '1952-04-16', 'SD', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '760000', 'Tidak', 'BANTARPAYUNG', '40', '004', '003', ''),
('3206061703710005', '3206060108057285', 'DUDUNG', 'Laki-laki', '1971-03-17', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'SOPIR', 'Tidak', '3000000', 'Ya', 'BANTARPAYUNG', '44', '004', '003', ''),
('3206061706680001', '3206060108057204', 'DENI', 'Laki-laki', '1968-06-17', 'SD', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'Mata rabun', 'TIDAK BEKERJA', 'Tidak', '', 'Ya', 'BANTARPAYUNG', '49', '004', '003', ''),
('3206061802870003', '3206063001110328', 'YOGI GINANJAR', 'Laki-laki', '1987-02-18', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Wiraswasta', 'Tidak', '3000000', 'Tidak', 'BANTARPAYUNG', '25', '004', '003', ''),
('3206061901800001', '3206062302080542', 'ASEP TARYANA   ', 'Laki-laki', '1980-11-19', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Wiraswasta', 'Tidak', '1650000', 'Ya', 'BANTARPAYUNG', '48', '004', '003', ''),
('3206062010890002', '3206060711140006', 'AHMAD AZI NURUL HAQ', 'Laki-laki', '1989-10-20', 'SMP', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Tidak', '850000', 'Tidak', 'BANTARPAYUNG', '45', '004', '003', ''),
('3206062104490003', '3206060108057838', 'NAEN KARNAEN', 'Laki-laki', '1949-04-21', 'SMP', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Pensiunan', 'Ya', '3805000', 'Ya', 'BANTARPAYUNG', '', '004', '003', ''),
('3206062301950003', '3206060406200001', 'YUDISTIRA MULYADI', 'Laki-laki', '1995-01-23', 'SMA', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Karyawan Swasta', 'Tidak', '2100000', 'Ya', 'BANTARPAYUNG', '27', '004', '003', ''),
('3206062411960002', '3206062306150001', 'NOVAN SUPRIYANTO', 'Laki-laki', '1996-11-24', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', 'BELUM BEKERJA', 'Tidak', '0', 'Tidak', 'BANTARPAYUNG', '05', '004', '003', ''),
('3206062505730001', '3206061206190002', 'BUDI SETIAWAN', 'Laki-laki', '1973-05-25', 'SMA', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Wiraswasta', 'Tidak', '2500000', 'Tidak', 'BANTARPAYUNG', '26', '004', '003', ''),
('3206062507630001', '3206060406080050', 'IWAN,S.Pd', 'Laki-laki', '1963-07-25', 'S1', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'PNS', 'Ya', '5500000', 'Ya', 'BANTARPAYUNG', '21', '004', '003', ''),
('3206062509950003', '3206060501120009', 'YANA SURYADI', 'Laki-laki', '0000-00-00', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', 'BELUM BEKERJA', 'Tidak', '0', 'Tidak', 'BANTARPAYUNG', '03', '004', '003', ''),
('3206062607870001', '3206060803120001', 'HENDRIK RUDIYANA', 'Laki-laki', '1987-07-26', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'POLISI', 'Ya', '5000000', 'Ya', 'BANTARPAYUNG', '30', '004', '003', ''),
('3206063003790001', '3206061303080002', 'IMAN BUDIMAN', 'Laki-laki', '1979-03-30', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Ya', '750000', 'Tidak', 'BANTARPAYUNG', '12', '004', '003', ''),
('3206064104710002', '3206063001110368', 'ELI ROHMAYANTI    ', 'Perempuan', '1971-04-01', 'SMA', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'BURUH', 'Ya', '850000', 'Tidak', 'BANTARPAYUNG', '47', '004', '003', ''),
('3206064107580073', '3206063001110332', 'JUJU        ', 'Perempuan', '1958-01-07', 'SD', 'Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'IBU RUMAH TANGGA', 'Tidak', '0', 'Tidak', 'BANTARPAYUNG', '02', '04', '003', ''),
('3206064308820006', '3206061511070003', 'DEWI NURANGGTAENI  SY. S.KM', 'Perempuan', '1982-03-08', 'S1', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'PNS', 'Ya', '3450000', 'Tidak', 'BANTARPAYUNG', '31', '004', '003', ''),
('3206064502470002', '3206060108057225', 'DIOH ', 'Perempuan', '1947-02-05', 'SD', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'MANULA', 'IBU RUMAH TANGGA', 'Ya', '1600000', 'Tidak', 'TASIKMALAYA', '09', '004', '003', ''),
('3206064503670003', '3206060108057366', 'CUCU SUMINAR', 'Perempuan', '1967-03-05', 'SMP', 'Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'IBU RUMAH TANGGA', 'Tidak', '', 'Tidak', 'BANTARPAYUNG', '40', '', '', ''),
('3206064706770003', '3206062409140003', 'IDA NURAIDA,S.Sos    ', 'Perempuan', '1977-07-06', 'S1', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Karyawan Swata', 'Tidak', '3000000', 'Tidak', 'BANTARPAYUNG', '46', '004', '003', ''),
('3206064803900002', '3206060108056870', 'SHELI SANTIKA', 'Perempuan', '1990-03-08', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'IBU RUMAH TANGGA', 'Tidak', '0', 'Tidak', 'BANTARPAYUNG', '14', '004', '003', ''),
('3206065010670007', '3206060108057204', 'DODOH', 'Perempuan', '1967-10-10', 'SD', 'Belum Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'Berdagang', 'Tidak', '450000', 'Ya', 'BANTARPAYUNG', '49', '004', '003', ''),
('3206065101900001', '3206062905150004', 'IKA SARTIKA', 'Perempuan', '1990-11-01', 'SMP', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'ASISTEN RUMAH TANGGA', 'Tidak', '1600000', 'Tidak', 'BANTARPAYUNG', '39', '004', '003', ''),
('3206065103670001', '3206060501120009', 'ADE KARSAH', 'Perempuan', '1967-11-03', 'SD', 'Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'IBU RUMAH TANGGA', 'Tidak', '0', 'Tidak', 'BANTARPAYUNG', '03', '004', '003', ''),
('3206065203880001', '3206060605140004', 'IKEU SUDARYANTI', 'Perempuan', '1988-03-12', 'D3', 'Belum Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'Karyawan Honorer', 'Tidak', '1600000', 'Tidak', 'BANTARPAYUNG', '37', '004', '003', ''),
('3206065507870002', '3206060108057019', 'YUNI SHETIANI', 'Perempuan', '1987-07-15', 'SD', 'Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'IBU RUMAH TANGGA', 'Tidak', '200000', 'Ya', 'BANTARPAYUNG', '42', '004', '003', ''),
('3206065807100002', '3206060108056870', 'AMANDA RIZKIA', 'Perempuan', '2010-07-18', 'SMP', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', 'Pelajar', 'Tidak', '0', 'Tidak', 'BANTARPAYUNG', '14', '004', '003', ''),
('3206065909510001', '3206062309170001', 'DIAH HODIAH', 'Perempuan', '1951-09-09', 'S1', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', '', 'Pensiunan', 'Ya', '2000000', 'Ya', 'BANTARPAYUNG', '23', '004', '003', ''),
('3206065911890001', '3206060803120001', 'NOVA SILPIANY PERDANY', 'Perempuan', '1989-11-19', 'SMA', 'Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'PNS', 'Ya', '3000000', 'Ya', 'BANTARPAYUNG', '30', '004', '003', ''),
('3206066105180001', '3206061511070003', 'GHAIZANI NURAFIFA NUHA', 'Perempuan', '2018-06-21', 'Belum Sekolah', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', '', 'Tidak', '', 'Tidak', 'BANTARPAYUNG', '31', '004', '003', ''),
('3206066307200001', '3206060605140004', 'KAESA ARETHA BANAFSHA', 'Perempuan', '2020-07-23', 'Belum Sekolah', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', '', 'Tidak', '', 'Tidak', 'BANTARPAYUNG', '37', '004', '003', ''),
('3206066502170001', '3206060605140004', 'ALMIRA BATRISYIA RAHMA', 'Perempuan', '2017-02-25', 'SD', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', 'Pelajar', 'Tidak', '', 'Tidak', 'BANTARPAYUNG', '37', '004', '003', ''),
('3206066503630001', '3206062306150001', 'NYAI SULASTRI ', 'Perempuan', '1963-03-25', 'SMP', 'Cerai Hidup', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'ASISTEN RUMAH TANGGA', 'Tidak', '800000', 'Tidak', 'BANTARPAYUNG', '05', '004', '003', ''),
('3206066504140001', '3206060605140004', 'ZHAFIRA IRA SYALQINA', 'Perempuan', '2014-04-25', 'SD', 'Belum Menikah', 'Tinggal Bersama', 'Anak', 'SEHAT', 'Pelajar', 'Tidak', '', 'Tidak', 'BANTARPAYUNG', '37', '004', '003', ''),
('3206066511610002', '3206060108057595', 'TINI SUMIATI   ', 'Perempuan', '1961-11-25', 'SD', 'Cerai Mati', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'ASISTEN RUMAH TANGGA', 'Tidak', '550000', 'Tidak', 'BANTARPAYUNG', '43', '004', '003', ''),
('3206066602640003', '3206060108057083', 'NURNAHIDAH,M.PD', 'Perempuan', '1964-02-26', 'S2', 'Cerai Mati', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'PNS', 'Ya', '5000000', 'Tidak', 'BANTARPAYUNG', '17', '004', '003', ''),
('3206066910480001', '3206060108058233', 'SUKMINAH', 'Perempuan', '1948-10-29', 'S2', 'Cerai Mati', 'Tinggal Bersama', 'Kepala Keluarga', '', 'Pensiunan', 'Ya', '3000000', 'Tidak', 'BANTARPAYUNG', '22', '004', '003', ''),
('3206180712910002', '3206062905190002', 'RIZKI AHMAD FAISAL.S. Pd', 'Laki-laki', '1991-07-12', 'S1', 'Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Karyawan Honorer', 'Tidak', '2200000', 'Tidak', 'BANTARPAYUNG', '28', '004', '003', ''),
('3206184606650001', '3206062706150001', 'HARTATI,S.Pd SD', 'Perempuan', '1963-06-06', 'S1', 'Cerai Mati', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'PNS', 'Ya', '3000000', 'Tidak', 'BANTARPAYUNG', '19', '004', '003', ''),
('3278020103860006', '3206060605140004', 'ANANG BUDAYA', 'Laki-laki', '1986-03-01', 'SMA', 'Belum Menikah', 'Tinggal Bersama', 'Kepala Keluarga', 'SEHAT', 'Wiraswasta', 'Tidak', '4550000', 'Tidak', 'BANTARPAYUNG', '37', '004', '003', ''),
('3328045901950004', '3206060711140006', 'SOBIROH', 'Perempuan', '1995-01-19', 'SD', 'Menikah', 'Tinggal Bersama', 'Istri', 'SEHAT', 'IBU RUMAH TANGGA', 'Tidak', '', 'Tidak', 'BANTARPAYUNG', '45', '004', '003', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
