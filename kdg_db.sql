-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2022 pada 13.10
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kdg_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_kk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nik` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_hub_keluarga` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kewarganegaraan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rt` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rw` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kelurahan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kabupaten` varchar(50) CHARACTER SET latin1 NOT NULL,
  `provinsi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `bk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id_kematian` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_kk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nik` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_lahir` varchar(50) CHARACTER SET latin1 NOT NULL,
  `agama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_kematian` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `nik` varchar(50) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_kawin` varchar(50) NOT NULL,
  `status_hub_keluarga` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk_keluar`
--

CREATE TABLE `tbl_penduduk_keluar` (
  `id_pk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_kk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nik` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_pengajuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rt_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rw_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kelurahan_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kec_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kab_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `provinsi_tujuan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ket_pk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_pk` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk_masuk`
--

CREATE TABLE `tbl_penduduk_masuk` (
  `id_pm` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_kk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_masuk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat_lama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat_sekarang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rt` int(10) NOT NULL,
  `rw` int(10) NOT NULL,
  `surat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sk` varchar(200) NOT NULL,
  `kelurahan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kabupaten` varchar(50) CHARACTER SET latin1 NOT NULL,
  `provinsi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status_penduduk` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penduduk_masuk`
--

INSERT INTO `tbl_penduduk_masuk` (`id_pm`, `no_kk`, `nama`, `tgl_masuk`, `alamat_lama`, `alamat_sekarang`, `rt`, `rw`, `surat`, `sk`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `status_penduduk`) VALUES
('PM-001', '53101205070001', 'Kanisius Paduk', '2021-10-25', 'Jl. Bengawan ', 'Jl. Borong', 13, 14, 'Penugasan Kerja', '', 'Satar Tacik', 'Langke Rembong', 'Manggrai', 'Nusa Tengara Timur', 'Valid'),
('PM-002', '56565656565', 'Coca-Cola', '2022-04-26', 'sdsd', 'dsd', 13, 4, 'dsdsd', 'sk_.pdf', 'Bangka Lao', 'Langke Rembong', 'Manggarai Barat', 'Nusa Tenggara Timur', 'Valid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_umum`
--

CREATE TABLE `tbl_umum` (
  `no_kk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nama_kk` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rt` varchar(50) CHARACTER SET latin1 NOT NULL,
  `rw` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kelurahan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kabupaten` varchar(50) CHARACTER SET latin1 NOT NULL,
  `provinsi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_tlpn` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(50) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `telepon_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `tgl_registrasi` varchar(50) NOT NULL,
  `status_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `no_kk`, `nama_user`, `telepon_user`, `email_user`, `username`, `password`, `level`, `tgl_registrasi`, `status_user`) VALUES
('USR001', '', 'Chris Sony', '082339368112', 'chrissony184@gmail.com', 'Chris', '1234', 'Kepala Desa', '2020-10-26', ''),
('USR002', '', 'Acen', '082339368112', 'acen@gmail.com', 'acen', 'acen', 'Admin', '2021-09-08', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tbl_penduduk_keluar`
--
ALTER TABLE `tbl_penduduk_keluar`
  ADD PRIMARY KEY (`id_pk`);

--
-- Indeks untuk tabel `tbl_penduduk_masuk`
--
ALTER TABLE `tbl_penduduk_masuk`
  ADD PRIMARY KEY (`id_pm`);

--
-- Indeks untuk tabel `tbl_umum`
--
ALTER TABLE `tbl_umum`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
