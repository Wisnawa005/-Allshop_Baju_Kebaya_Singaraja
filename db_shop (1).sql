-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2020 pada 15.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` tinyint(3) UNSIGNED NOT NULL,
  `kode_ktbarang` int(3) UNSIGNED DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_jual` decimal(10,0) DEFAULT NULL,
  `stok` tinyint(3) UNSIGNED DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `kode_ktbarang`, `nama_barang`, `harga_jual`, `stok`, `satuan`, `deskripsi`, `foto`, `foto2`) VALUES
(1, 1, 'Kebaya Bet Pinggiran', '150000', 10, 'Buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya kuning dengan lengan 1 per 3.\r\n\r\nKebaya Jadi Sofia, Bahan sofia super adem\r\nBahan adem, lemes , strait ngikutin bentuk tubuh, super nyaman dipakai  ya. Warna warna pilihan \r\nJahitan rapi. \r\nUntuk pembelian yg satu set jangan lupa tulis ukuran apa pada saat chekout. ', 'sofia1.jpg', 'sofia2.jpg'),
(2, 1, 'Kebaya Sabrina Lengan Pendek', '200000', 15, 'Buah', 'Model ini sangat cocok untuk anda yang ingin tampil cantik pada saat kondangan, dikarenakan perpaduan antara Pink Biru pada leher terhilan anda akan tampil lebih mempesona. Disamping itu kebaya Sabrina ini menggunakan model lengan pendek.', '2.jpg', NULL),
(3, 1, 'Kebaya Katini Lengan Panjang', '150000', 6, 'buah', 'Buat anda yang ingin tampil elegan dan sopan, kebaya ini sangatlah cocok dikarenakan kepada situasi anda ingin tampil ilegan dan juga sopan. Dengan kebaya model kartini dengan lengan panjang sangatlah cocok.', '3.jpg', NULL),
(4, 1, 'Kebaya Bet Pinggiran Lengan Panjang Pink', '150000', 9, 'buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya pink dengan lengan panjang akan membuat anda terasa muda dan energy saat memapakainya.', '4.jpg', NULL),
(5, 1, 'Kebaya Bet Pinggiran Lengan Panjang Putih', '150000', 6, 'Buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya putih  dengan lengan panjang akan membuat anda terasa siap untuk bersembahyang saat memapakainya.', '5.jpg', NULL),
(6, 1, 'Kebaya Bet Pinggiran Lengan Panjang Orange', '150000', 4, 'Buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya pink dengan lengan panjang akan membuat anda terasa percaya diri dan sejuk saat memapakainya.', '6.jpg', NULL),
(7, 1, 'Kebaya Sari Bet Pinggiran Putih', '100000', 2, 'buah', 'Buat anda yang ingin tampil sederhana dan indah sangat disarankan menggunakan kebaya ini karena sangatlah cocok banget.', '7.jpg', NULL),
(8, 1, 'Kebaya Bet Pinggiran Lengan Panjang Kupu Kupu', '125000', 1, 'buah', 'Tampil mempesona dengan perpaduan Kebaya wana putih bersih bet pinggiran, ditambah lagi dengan bentuk legan kupu-kupu yang sangat leluasa bagi anda yang pengen tampil eksotis.', '8.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `batas_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ktbarang`
--

CREATE TABLE `tb_ktbarang` (
  `kode_ktbarang` tinyint(3) UNSIGNED NOT NULL,
  `nama_ktbarang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ktbarang`
--

INSERT INTO `tb_ktbarang` (`kode_ktbarang`, `nama_ktbarang`) VALUES
(1, 'Kebaya'),
(2, 'Dress'),
(3, 'Selendang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Wisnawa', 'wisnawa@gmail.com', '$2y$10$gobmbij5Kj5m4UxvuD3aAuNSNV1TVu61vpZw50VNLcIO7DlQeekJW', 'default.PNG', 1, 1, 1587724798),
(7, 'Tachibana Kanade', 'kanade@gmail.com', '$2y$10$PJMtbm4Qyqphl6yNEv6qmeZPQYEPlCxPkUR96SU5xFKytlmK.R2bi', 'default.PNG', 2, 1, 1587747980),
(8, 'Edy Krisnawan', 'edy@gmail.com', '$2y$10$mTf73ar6dfn4VbkVaaHukO2me7vg7RZrqKglf7OQz6VdO.P9VnQe2', 'default.PNG', 1, 1, 1589639795);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Administrator\r\n'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `tb_ktbarang`
--
ALTER TABLE `tb_ktbarang`
  ADD PRIMARY KEY (`kode_ktbarang`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `kode_barang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_ktbarang`
--
ALTER TABLE `tb_ktbarang`
  MODIFY `kode_ktbarang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
