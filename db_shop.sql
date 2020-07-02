-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2020 pada 02.31
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
  `ktbarang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_jual` decimal(10,0) DEFAULT NULL,
  `stok` tinyint(3) UNSIGNED DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(800) NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `foto2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `ktbarang`, `nama_barang`, `harga_jual`, `stok`, `satuan`, `deskripsi`, `foto`, `foto2`) VALUES
(1, 'Kebaya', 'Kebaya Bet Pinggiran', '155000', 9, 'Buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya Kuing dengan lengan panjang akan membuat anda terasa muda dan energy saat memapakainya.', 'sofia1.jpg', 'sofia2.jpg'),
(2, 'Kebaya', 'Kebaya Sabrina Lengan Pendek', '200000', 13, 'Buah', 'Model ini sangat cocok untuk anda yang ingin tampil cantik pada saat kondangan, dikarenakan perpaduan antara Pink Biru pada leher terhilan anda akan tampil lebih mempesona. Disamping itu kebaya Sabrina ini menggunakan model lengan pendek.', '2.jpg', 'kebaya modif.jpg'),
(3, 'Kebaya', 'Kebaya Katini Lengan Panjang', '150000', 5, 'Buah', 'Buat anda yang ingin tampil elegan dan sopan, kebaya ini sangatlah cocok dikarenakan kepada situasi anda ingin tampil ilegan dan juga sopan. Dengan kebaya model kartini dengan lengan panjang sangatlah cocok.', '3.jpg', 'dayu2.jpg'),
(4, 'Kebaya', 'Kebaya Bet Pinggiran Lengan Panjang Pink', '150000', 9, 'Buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya pink dengan lengan panjang akan membuat anda terasa muda dan energy saat memapakainya.', '4.jpg', 'kebaya bali.jpg'),
(5, 'Kebaya', 'Kebaya Bet Pinggiran Lengan Panjang Putih', '150000', 6, 'Buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya putih  dengan lengan panjang akan membuat anda terasa siap untuk bersembahyang saat memapakainya.', '5.jpg', 'jujn2.jpg'),
(6, 'Kebaya', 'Kebaya Bet Pinggiran Lengan Panjang Orange', '150000', 2, 'Buah', 'Produk ini brokat dengan perpaduan bet pinggiran. Warna kebaya pink dengan lengan panjang akan membuat anda terasa percaya diri dan sejuk saat memapakainya.', '6.jpg', 'produk kebaya bet pinggiran.jpg'),
(7, 'Kebaya', 'Kebaya Sari Bet Pinggiran Putih', '100000', 1, 'Buah', 'Buat anda yang ingin tampil sederhana dan indah sangat disarankan menggunakan kebaya ini karena sangatlah cocok banget.', '7.jpg', 'riska2.jpg'),
(8, 'Kebaya', 'Kebaya Bet Pinggiran Lengan Panjang Kupu Kupu', '125000', 0, 'Buah', 'Tampil mempesona dengan perpaduan Kebaya wana putih bersih bet pinggiran, ditambah lagi dengan bentuk legan kupu-kupu yang sangat leluasa bagi anda yang pengen tampil eksotis.', '8.jpg', 'kebaya bagian lengan.jpg'),
(9, 'Kamben', 'Kamben Motif Songket Pxxda Bali', '105000', 43, 'Buah', 'Bahan Katun Halus, Panjang Rok +/- 93cm, Rok pakai karet Kanan-kiri, Jahit Halusan bkn grosiran, Ready warna hitam-merah-biru-maroon-ungu-hijau', 'kamben_1a.jpg', 'kamben_1b.jpg'),
(10, 'Dress', 'Baju Keki Endek Cewek Lengan Pendek', '175000', 6, 'Buah', 'Cocok buat anda yang sedang acara formal atau sebagai setelan kantor, dengan bahan kualitas yang bagus dan nyaman untuk dipakai, untuk saku terletak di bagian kanan dan kiri bagian bawah. ', 'produk_3a.jpg', 'produk_3b.jpg'),
(11, 'Kebaya', 'Kebaya Bet Pinggiran Dengan Perpaduan Motif Mute ', '200000', 5, 'Buah', 'Bahan Kebaya : Brokat Katun Jepang Premium,kebaya menggunakan bet klip.dengan menggunakan mute motif seperti bunga', 'produk_1a.jpg', 'produk_1b.jpg'),
(12, 'Kebaya', 'Kebaya Bet Pinggiran Accessoris Motif Mute Bunga', '225000', 9, 'Buah', 'Kebaya ini berlengan pendek, dengan bahan yang bagus digunakan. Bet menggunakan kancing klip. sangatlah cocok untuk anda pada saat pergi kondangan, dengan harga yang terjangkau', 'produk_2a.jpg', 'produk_2b.jpg'),
(13, 'Kebaya_Anak', 'Kebaya sang buah Hati dengan sentuhan tempelan Bunga', '105000', 20, 'Buah', 'kebaya bordir anak, menggunakan bordiran bunga membuat kesan sang buah hati terasa lebih cantik untuk dipakai. dalam hal tersebut bahan kebaya yang dikenakan sangatlah mudah untuk dicari yang lembut saat dirasakan. Ayo segera beli.', 'produk_anak_3b.jpg', 'produk_anak_3a.jpg'),
(14, 'Kebaya_Anak', 'Kebaya Kertini Aksesoris Renda Bunga', '15000', 3, 'Buah', 'Dengan kain bagus dimodel menjadi model Kebaya Kartini ditambah aksesoris renda bunga yang menempel membuat kesan yang sangat bagus pada saat dipandang. Sangat cocok digunakan pada saat persembahyangan.', 'produk_anak_1a.jpg', 'produk_anak_2b.jpg'),
(15, 'Kebaya', 'Kebaya Brokat Semi Prancis', '200000', 5, 'Buah', 'Dengan gaya ala Brokat Semi Perancis ini memiliki kualitas yang mirip dengan brokat prancis. Bedanya brokat semi prancis lebih kaku dibanding brokat prancis. Tetapi dalam penggunaan terkesan adem untuk dipakai dikarenakan juga sangatlah elegan untuk dilihat.', 'produk_4a.jpg', 'produk_4b.jpg'),
(17, 'Selendang', 'Selendang Mutiara', '35000', 9, 'Buah', 'Selendang terbaru mutiara bahan kain sifon dngn warna yg cantik, dngn ukuran panjang 2.5m cocok untk ke pura, kondangan, bekerja dll. Harganya : 35rb ', 'selendang_1a.jpg', 'selendang_1b.jpg'),
(19, 'Kamben', 'Kamben Rok Jadi Endek', '100000', 10, 'Buah', 'Rok Jadi Wanita ukuran besar  berbahan Katun strait , sangat Nyaman dipakai, pinggang full karet, muat sampai big size atau jumbo. Sangatlah cocok digunakan untuk berpergian ke acara kantor dikarenakan dengan menggunakan bahan bermotif endek Parta 100% Original. Keunggulan dari produk ini adalah Nyaman digunakan.', 'Rok-Jadi-Wanita-ukuran-besar-Warna-Biru.jpg', 'Rok-Jadi-Wanita-ukuran-besar-Warna-Ungu.jpg'),
(20, 'Kebaya', 'Kebaya Hitam Dengan Paduan Mute Gold', '220000', 12, 'Buah', 'Dengan perpaduan antara warna Hitam dari Kain Sari membuat nuansa dari aksesoris Gold muncul, itu dikarenakan keselarasan antara warna yang ada.', 'kebaya1a.jpg', 'kebaya1b.jpg'),
(21, 'Accessories', 'Bros Kebaya Kutubaru Terbaru', '225000', 12, 'Biji', 'Set Bros khas Bali dengan harga murah dan berkualitas.\r\nBahan : Alpaka\r\nterdiri dari tiga logam yaitu logam nikel, tembaga, dan seng yang dicampur sehingga menghasilkan suatu logam baru yang disebut alpaka, kilauan dari alpaka ini sangat mirip dengan perak,\r\nbahkan orang awam mungkin tidak bisa membedakan, mana logam alpaka dan logam perak. Bros kebaya ini sangat cocok digunakan ketika mengenakan kebaya jenis apa pun, akan sangat elegan matching dengan giwang & cincin', 'aksesoris_1a.jpg', 'aksesoris_1b.jpg'),
(255, 'Accessories', 'Bros Keris Alpaka Anak Pria', '130000', 16, 'Biji', 'Alpaka, yaitu campuran antara nikel, tembaga dan seng yang berkilau, Persis seperti perak. Yang disepuh dengan emas (warna kuning), jika luntur bisa disepuh kembali di toko-toko emas pada umumnya.\r\nKetahanan lapisan emas pada produk dalam penggunaan wajar (tidak terkena alkohol, lotion, minyak, air garam). Bisa dipakai di safari/di Udeng. Pemakaian sangat awet di pakai, tidak mengkarat, warna dasar emas. Segera miliki set Bros anak modern, trendi, dan juga modis ini ya!', 'aksesoris_2a.jpg', 'aksesoris_2b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `nophone` int(11) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `shipping` varchar(100) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `name`, `address`, `city`, `kode_pos`, `email`, `nophone`, `comment`, `shipping`, `payment`, `tgl_pesan`, `batas_bayar`) VALUES
(15, 'Devi', 'Banyuning', 'Singaraja', 8115, 'tachibana@gmail.com', 165165162, 'yeah', 'JNT', 'Indomaret', '2020-05-27 02:56:44', '2020-05-28 02:56:44'),
(16, 'Agus Wisnawa', 'Jln. Gempol gg Jalak Putih No.14', 'Singaraja', 81115, 'wisnawa@gmail.com', 2147483647, 'Ukuran XL', 'POS', 'BNI', '2020-05-31 11:11:38', '2020-06-01 11:11:38'),
(17, 'Diah Asti', 'Desa Banyuning', 'Singaraja', 8115, 'diah@gmail.com', 2147483647, 'dikirim secepatnya', 'JNE', 'Alfamart', '2020-06-05 03:43:39', '2020-06-06 03:43:40');

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
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) DEFAULT NULL,
  `kode_barang` int(11) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `kode_barang`, `nama_barang`, `jumlah`, `harga`) VALUES
(6, 13, 6, 'Kebaya Bet Pinggiran Lengan Panjang Orange', 1, 150000),
(8, 15, 3, 'Kebaya Katini Lengan Panjang', 1, 150000),
(9, 15, 7, 'Kebaya Sari Bet Pinggiran Putih', 1, 100000),
(10, 15, 8, 'Kebaya Bet Pinggiran Lengan Panjang Kupu Kupu', 1, 125000),
(11, 16, 2, 'Kebaya Sabrina Lengan Pendek', 1, 200000),
(12, 17, 1, 'Kebaya Bet Pinggiran', 1, 155000),
(13, 43, 4, 'Kebaya Bet Pinggiran Lengan Panjang Pink', 1, 150000),
(14, 43, 8, 'Kebaya Bet Pinggiran Lengan Panjang Kupu Kupu', 1, 125000),
(15, 44, 3, 'Kebaya Katini Lengan Panjang', 1, 150000),
(16, 44, 2, 'Kebaya Sabrina Lengan Pendek', 1, 200000),
(17, 45, 3, 'Kebaya Katini Lengan Panjang', 1, 150000),
(18, 45, 6, 'Kebaya Bet Pinggiran Lengan Panjang Orange', 1, 150000),
(19, 46, 2, 'Kebaya Sabrina Lengan Pendek', 1, 200000),
(21, 48, 2, 'Kebaya Sabrina Lengan Pendek', 1, 200000),
(22, 17, 6, 'Kebaya Bet Pinggiran Lengan Panjang Orange', 2, 150000),
(23, 17, 7, 'Kebaya Sari Bet Pinggiran Putih', 1, 100000),
(24, 17, 2, 'Kebaya Sabrina Lengan Pendek', 1, 200000),
(25, 17, 1, 'Kebaya Bet Pinggiran', 1, 155000),
(26, 18, 3, 'Kebaya Katini Lengan Panjang', 1, 150000),
(27, 18, 8, 'Kebaya Bet Pinggiran Lengan Panjang Kupu Kupu', 1, 125000);

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE kode_barang = NEW.kode_barang;
END
$$
DELIMITER ;

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
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Wisnawa', 'wisnawa@gmail.com', '$2y$10$gobmbij5Kj5m4UxvuD3aAuNSNV1TVu61vpZw50VNLcIO7DlQeekJW', 'default.PNG', 1, 1, 1587724798),
(7, 'Tachibana Kanade', 'kanade@gmail.com', '$2y$10$PJMtbm4Qyqphl6yNEv6qmeZPQYEPlCxPkUR96SU5xFKytlmK.R2bi', 'default.PNG', 2, 1, 1587747980),
(8, 'Edy Krisnawan', 'edy@gmail.com', '$2y$10$mTf73ar6dfn4VbkVaaHukO2me7vg7RZrqKglf7OQz6VdO.P9VnQe2', 'default.PNG', 1, 1, 1589639795),
(9, 'diah', 'diah@gmail.com', '$2y$10$ZLFaRzjpISnXvJVXTYRmy.Me9WftmESNqLPhILN.t03I8FcFqgOAm', 'default.PNG', 2, 1, 1591299276);

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
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `tb_ktbarang`
--
ALTER TABLE `tb_ktbarang`
  ADD PRIMARY KEY (`kode_ktbarang`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `kode_barang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_ktbarang`
--
ALTER TABLE `tb_ktbarang`
  MODIFY `kode_ktbarang` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
