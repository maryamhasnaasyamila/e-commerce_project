-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 10.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_pakaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(3, 'Burberry'),
(4, 'Erigo'),
(5, 'H&M'),
(6, 'Nevada'),
(7, 'Triset'),
(8, 'Uniqlo'),
(9, 'Zara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(32) DEFAULT NULL,
  `tipe_pakaian_id` int(45) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `nama`, `ukuran`, `warna`, `stok`, `harga`, `tipe_pakaian_id`, `brand_id`, `deskripsi`, `foto`) VALUES
(22, 'Vintage Flannel Shirt', 'All Size', 'Default as pict', 50, 220000, 8, 3, 'Kemeja flanel kotak-kotak vintage yang memberikan tampilan klasik dan stylish. Terbuat dari kain flanel yang hangat dan nyaman, cocok dipakai untuk berbagai kesempatan formal atau santai.', 'assets/img/collection/shirt-vintage.jpg'),
(23, 'White Jeans', 'All Size', 'Default as pict', 95, 245000, 10, 5, 'Celana jeans putih memberikan tampilan yang segar dan modern. Terbuat dari bahan denim yang tahan lama dan nyaman, cocok untuk dipakai dalam situasi formal atau santai.', 'assets/img/collection/jeans-white.jpg'),
(24, 'Choco Long Shirt', 'All Size', 'Default as pict', 30, 245000, 8, 3, 'Baju lengan panjang berwarna cokelat manis memberikan tampilan yang hangat dan elegan. Terbuat dari bahan berkualitas yang nyaman dan tahan lama, cocok untuk dipakai dalam situasi formal atau santai. Kombinasikan dengan celana atau rok untuk menciptakan tampilan yang trendi namun tetap sopan.', 'assets/img/collection/shirt-choco.jpg'),
(25, 'White Fluffy Cardigan', 'All Size', 'Default as pict', 30, 235000, 12, 3, 'Cardigan fluffy berwarna putih memberikan tampilan yang nyaman dan lucu. Terbuat dari bahan yang lembut dan hangat, cocok untuk dipakai dalam situasi santai. Kombinasikan dengan celana jeans atau rok untuk menciptakan tampilan yang manis dan feminin.', 'assets/img/collection/cardigan-white.jpg'),
(26, 'Blue Jeans', 'All Size', 'Default as pict', 60, 245000, 10, 5, 'Jeans berwarna biru memberikan tampilan yang klasik dan trendi. Terbuat dari bahan denim yang tahan lama dan nyaman, cocok untuk dipakai dalam situasi formal atau santai. Kombinasikan dengan baju atau kemeja untuk menciptakan tampilan yang stylish dan kasual.', 'assets/img/collection/jeans-blue.jpg'),
(28, 'Sky Cropped Top', 'All Size', 'Default as pict', 45, 215000, 8, 3, 'Sky cropped top adalah pilihan yang sempurna untuk tampilan kasual yang chic. Terbuat dari bahan yang ringan dan nyaman, cocok dipakai dalam cuaca hangat. Kombinasikan dengan celana high-waisted atau rok untuk menciptakan tampilan yang stylish dan trendi.', 'assets/img/collection/croptop-blue.jpg'),
(30, 'Old Gray Blazer', 'All Size', 'Default as pict', 150, 270000, 12, 4, 'Old Gray Blazer memberikan tampilan yang elegan dan klasik. Terbuat dari bahan yang berkualitas dan nyaman, cocok untuk dipakai dalam situasi formal. Kombinasikan dengan celana panjang atau rok untuk menciptakan tampilan yang professional dan sophisticated.', 'assets/img/collection/blazer-gray.jpg'),
(31, 'Old Gray Pants', 'All Size', 'Default as pict', 90, 225000, 10, 4, 'Old Gray Pants memberikan tampilan yang elegan dan formal. Terbuat dari bahan katun yang berkualitas dan nyaman, cocok untuk dipakai dalam situasi kerja atau formal. Kombinasikan dengan kemeja atau blazer untuk menciptakan tampilan yang sophisticated dan professional.', 'assets/img/collection/pants-grey.jpg'),
(33, 'Black T-Shirt', 'All Size', 'Default as pict', 100, 165000, 8, 6, 'Kaos hitam pendek memberikan tampilan yang simpel namun stylish. Terbuat dari bahan katun berkualitas tinggi dan nyaman dipakai, cocok untuk dipakai dalam situasi santai atau kasual. Kombinasikan dengan celana jeans atau celana pendek atau dengan blazeruntuk menciptakan tampilan yang trendi dan formal.', 'assets/img/collection/shirt-black.jpg'),
(34, 'Young Black Blazer', 'All Size', 'Default as pict', 80, 270000, 12, 8, 'Blazer hitam memberikan tampilan yang elegan dan classy. Terbuat dari bahan berkualitas tinggi dan nyaman dipakai, cocok untuk dipakai dalam situasi formal atau semi-formal. Kombinasikan dengan celana panjang atau rok untuk menciptakan tampilan yang timeless dan sophisticated.', 'assets/img/collection/blazer-black.jpg'),
(35, 'Young Black Pants', 'All Size', 'Default as pict', 70, 225000, 10, 8, 'Celana panjang hitam memberikan tampilan yang simpel namun elegan. Terbuat dari bahan berkualitas tinggi dan nyaman dipakai, cocok untuk dipakai dalam situasi formal atau kasual. Kombinasikan dengan kemeja atau t-shirt untuk menciptakan tampilan yang versatile dan effortless.', 'assets/img/collection/pants-black.jpg'),
(36, 'White T-Shirt', 'All Size', 'Default as pict', 100, 165000, 8, 6, 'Kaos putih pendek memberikan tampilan yang simpel namun fresh. Terbuat dari bahan berkualitas tinggi dan nyaman dipakai, cocok untuk dipakai dalam situasi santai atau kasual. Kombinasikan dengan celana jeans atau celana pendek untuk menciptakan tampilan yang trendy dan effortless.', 'assets/img/collection/shirt-white.jpg'),
(37, 'Black Brocade Dress', 'All Size', 'Default as pict', 120, 200000, 8, 3, 'Gaun brukat hitam memberikan tampilan yang elegan dan mewah. Terbuat dari bahan berkualitas tinggi dan detail brukat yang indah, cocok untuk dipakai dalam acara formal atau semi-formal. Kombinasikan dengan sepatu hak tinggi untuk menciptakan tampilan yang glamour dan sophisticated.', 'assets/img/collection/brukat-black.jpg'),
(38, 'Soft Gray Long Skirt', 'All Size', 'Default as pict', 70, 240000, 11, 9, 'Rok panjang abu muda memberikan tampilan yang simpel dan elegan. Terbuat dari bahan berkualitas tinggi dan nyaman dipakai, cocok untuk dipakai dalam situasi formal atau semi-formal. Kombinasikan dengan kemeja atau blouse untuk menciptakan tampilan yang timeless dan sophisticated.', 'assets/img/collection/skirt-gray.jpg'),
(39, 'Gray Cropped Top', 'All Size', 'Default as pict', 95, 220000, 8, 8, 'Gray cropped top memberikan tampilan yang simpel dan stylish. Terbuat dari bahan berkualitas tinggi dan nyaman dipakai, cocok untuk dipakai dalam situasi santai atau kasual. Kombinasikan dengan high-waist jeans atau rok untuk menciptakan tampilan yang trendy dan chic.', 'assets/img/collection/croptop-gray.jpg'),
(41, 'Autumn Vest', 'All Size', 'Default as pict', 60, 210000, 12, 7, 'Autumn vest memberikan tampilan yang casual namun stylish. Terbuat dari bahan berkualitas tinggi dan desain yang modis, cocok untuk dipakai dalam situasi hangout atau traveling. Kombinasikan dengan atasan dan celana jeans untuk menciptakan tampilan yang cozy dan effortless di musim gugur.', 'assets/img/collection/vest-outer.jpg'),
(42, 'Retro Pleated Skirt', 'All Size', 'Default as pict', 55, 210000, 11, 9, 'Retro pleated skirt memberikan tampilan yang vintage dan elegan. Terbuat dari bahan berkualitas tinggi dan detail pleated yang indah, cocok untuk dipakai dalam acara formal atau semi-formal. Kombinasikan dengan blouse atau kemeja untuk menciptakan tampilan yang timeless dan sophisticated.', 'assets/img/collection/skirt-pleated.jpg'),
(44, 'Strawberry Cheesecake Shirt', 'All Size', 'Default as pict', 113, 225000, 8, 6, 'Strawberry cheesecake shirt memberikan tampilan yang fun dan playful. Terbuat dari bahan berkualitas tinggi dan desain yang unik dengan gambar strawberry cheesecake, cocok untuk dipakai dalam situasi santai atau kasual. Kombinasikan dengan celana jeans atau shorts untuk menciptakan tampilan yang playful dan fresh.', 'assets/img/collection/shirt-pinkwhite.jpg'),
(45, 'Almond Blazer', 'All Size', 'Default as pict', 105, 270000, 12, 7, 'Almond blazer memberikan tampilan yang elegan dan modern. Terbuat dari bahan berkualitas tinggi dan warna almond yang netral, cocok untuk dipakai dalam acara formal atau semi-formal. Kombinasikan dengan celana panjang atau rok untuk menciptakan tampilan yang sleek dan professional.', 'assets/img/collection/blazer-beige.jpg'),
(46, 'Almond Dropped Skirt', 'All Size', 'Default as pict', 105, 235000, 11, 7, 'Almond dropped skirt memberikan tampilan yang chic dan stylish. Terbuat dari bahan berkualitas tinggi dan desain dropped yang modern, cocok untuk dipakai dalam acara formal atau semi-formal. Kombinasikan dengan kemeja atau blouse untuk menciptakan tampilan yang effortless dan fashionable.', 'assets/img/collection/skirt-almond.jpg'),
(47, 'Gray T-Shirt', 'All Size', 'Default as pict', 70, 165000, 8, 6, 'Kaos pendek abu memberikan tampilan yang kasual dan nyaman. Terbuat dari bahan berkualitas tinggi dan warna abu yang netral, cocok untuk dipakai dalam aktivitas sehari-hari atau hangout bersama teman. Kombinasikan dengan celana jeans atau short untuk menciptakan tampilan yang simple dan effortless.', 'assets/img/collection/shirt-gray.jpg'),
(48, 'Pattern Mini Skirt', 'All Size', 'Default as pict', 75, 230000, 11, 8, 'Pattern mini skirt memberikan tampilan yang playful dan stylish. Terbuat dari bahan yang nyaman dan desain mini yang modern, cocok untuk dipakai dalam acara formal atau semi-formal. Kombinasikan dengan kemeja atau blouse untuk menciptakan tampilan yang trendy dan fashion-forward.', 'assets/img/collection/skirt-pattern.jpg'),
(49, 'Simple Black Outer', 'All Size', 'Default as pict', 125, 295000, 12, 4, 'Simple black outer memberikan sentuhan elegan dan simpel pada penampilan Anda. Terbuat dari bahan berkualitas dan desain yang timeless, cocok untuk dipakai dalam berbagai kesempatan formal atau casual.', 'assets/img/collection/outer-black.jpg'),
(51, 'Feminine Mint Dress', 'All Size', 'Default as pict', 90, 345000, 9, 5, 'Feminine mint dress hadir dengan desain yang feminin dan segar. Terbuat dari bahan yang nyaman dan ringan, cocok untuk dipakai dalam acara semi-formal atau formal.', 'assets/img/collection/dress-mint.jpg'),
(52, 'Twill Skirt', 'All Size', 'Default as pict', 35, 210000, 11, 9, 'Twill skirt memberikan tampilan yang chic dan modern. Terbuat dari bahan berkualitas tinggi dan desain yang simpel namun elegan, cocok untuk dipakai dalam acara formal atau semi-formal.', 'assets/img/collection/skirt-twill.jpg'),
(54, 'Brown Sugar Outer', 'All Size', 'Default as pict', 40, 265000, 12, 9, 'Brown sugar outer hadir dengan warna yang hangat dan unik. Terbuat dari bahan yang nyaman dan desain yang simple namun stylish, cocok untuk dipakai dalam berbagai kesempatan formal atau casual.', 'assets/img/collection/outer-red.jpg'),
(56, 'Floral Dress', 'All Size', 'Default as pict', 85, 385000, 9, 9, 'Floral dress memberikan sentuhan romantis pada penampilan Anda. Terbuat dari bahan berkualitas tinggi dan desain yang elegan, cocok untuk dipakai dalam acara formal atau semi-formal di musim semi atau musim panas.', 'assets/img/collection/dress-flower.jpg'),
(57, 'Lilac Cropped Jacket', 'All Size', 'Default as pict', 90, 230000, 13, 5, 'Lilac cropped jacket memberikan sentuhan chic pada tampilan Anda. Terbuat dari bahan yang nyaman dan desain yang modern, cocok untuk dipakai dalam acara formal atau semi-formal.', 'assets/img/collection/jacket-lilac.jpg'),
(58, 'Sweet Black Outer', 'All Size', 'Default as pict', 165, 215000, 12, 6, 'Sweet black outer hadir dengan desain yang feminin dan manis. Terbuat dari bahan berkualitas tinggi dan desain yang simpel namun elegan, cocok untuk dipakai dalam berbagai kesempatan formal atau casual.', 'assets/img/collection/outer-vest-black.jpg'),
(59, 'Lilac Dress', 'All Size', 'Default as pict', 130, 340000, 9, 9, 'Lilac long dress memberikan sentuhan elegan dan feminin pada tampilan Anda. Terbuat dari bahan berkualitas tinggi dan desain yang timeless, cocok untuk dipakai dalam acara formal atau semi-formal.', 'assets/img/collection/dress-lilac.jpg'),
(60, 'Bright Chiffon Dress', 'All Size', 'Default as pict', 85, 440000, 9, 9, 'Bright Chiffon Dress adalah gaun panjang yang terbuat dari bahan chiffon berkualitas tinggi, dengan potongan A-line yang memberikan siluet yang elegan dan feminin. Cocok dipakai untuk acara formal atau semi-formal, seperti pesta pernikahan atau dinner party.', 'assets/img/collection/bright-chiffon-dress.jpg'),
(61, 'Classic Vintage Dress', 'All Size', 'Default as pict', 100, 540000, 9, 5, 'Classic Vintage Dress adalah gaun bergaya klasik dengan desain yang timeless, terbuat dari bahan berkualitas tinggi seperti satin atau lace, dengan aksen vintage yang elegan seperti kerah peter pan atau pita leher. Cocok dipakai untuk acara-acara formal seperti cocktail party atau konser.', 'assets/img/collection/classic-white-dress.jpg'),
(62, 'Spring Pattern Dress', 'All Size', 'Default as pict', 135, 390000, 9, 7, 'Spring Pattern Dress adalah gaun berbahan ringan dan breathable dengan motif musim semi yang segar, seperti bunga-bunga atau daun-daun. Cocok dipakai untuk acara-acara santai seperti picnic atau gathering dengan teman-teman.', 'assets/img/collection/spring-pattern-dress.jpg'),
(63, 'Wild Black Pants', 'All Size', 'Default as pict', 25, 235000, 10, 3, 'Wild Black Pants adalah celana hitam yang stylish dan modern, dengan potongan flare atau palazzo yang memberikan kenyamanan saat digunakan. Cocok dipakai untuk acara semi-formal seperti meeting kantor atau dinner date.', 'assets/img/collection/wild-black-pants.jpg'),
(64, 'Cotton Candy Sweatpants', 'All Size', 'Default as pict', 60, 255000, 10, 5, 'Cotton Candy Sweatpants adalah celana santai yang nyaman dan trendy, terbuat dari bahan katun yang lembut dan ringan, dengan warna pastel yang manis. Cocok dipakai saat santai di rumah atau jalan-jalan.', 'assets/img/collection/cotton-candy-sweatpants.jpg'),
(65, 'Black Mamba Jacket', 'All Size', 'Default as pict', 110, 360000, 13, 4, 'Black Mamba Jacket adalah jaket hitam yang chic dan modis, dengan desain yang berbeda seperti cut-out yang memberikan kesan edgy dan stylish. Cocok dipakai untuk acara semi-formal atau santai, seperti konser atau hangout dengan teman-teman.', 'assets/img/collection/black-biker-jacket.jpg'),
(66, 'Soft Denim Jakcet', 'All Size', 'Default as pict', 30, 270000, 13, 7, 'Soft Denim Jacket adalah jaket denim yang nyaman dan stylish, dengan bahan yang lembut dan detail yang elegan seperti kancing logam. Cocok dipakai untuk acara santai seperti jalan-jalan ke mall atau ke taman.', 'assets/img/collection/denim-jacket.jpg'),
(67, 'Fly Ash Hoodie', 'All Size', 'Default as pict', 85, 265000, 14, 5, 'Fly Ash Hoodie adalah hoodie abuyang modern dan sporty, dengan desain yang inovatif seperti print bold yang memberikan kesan futuristic dan edgy. Cocok dipakai saat berolahraga atau hangout dengan teman-teman.', 'assets/img/collection/fly-hooded-top-hoodie.jpg'),
(68, 'Peanut Long Zip Hoodie', 'All Size', 'Default as pict', 105, 330000, 14, 6, 'Peanut Long Zip Hoodie adalah hoodie panjang yang nyaman dan stylish, dengan bahan berkualitas tinggi dan warna seperti kacang. Cocok dipakai saat hangout dengan teman-teman atau berjalan-jalan di tempat yang sejuk.', 'assets/img/collection/peanut-long-zip-hoodie.jpg'),
(70, 'Snow Skirt', 'All Size', 'Default as pict', 65, 275000, 11, 7, 'Snow Skirt adalah rok seputih salju yang lucu dan modis, dengan desain yang unik seperti aksen bulu yang memberikan kesan playful dan cute.', 'assets/img/collection/snow-skirt.jpg'),
(72, 'Cream Rib-Knit Cardigan', 'All Size', 'Default as pict', 55, 375000, 12, 8, 'Cream Rib-knit Cardigan adalah jaket hangat yang nyaman dan stylish, terbuat dari bahan rajutan berwarna cream dengan aksen rib-knit yang memberikan kesan textural dan modern.', 'assets/img/collection/rib-knit-cardigan.jpg'),
(73, 'Choco Bear Hoodie', 'All Size', 'Default as pict', 70, 345000, 14, 7, 'Choco Bear Hoodie adalah hoodie lucu dan menggemaskan, dengan desain bulu tebal yang imut dan nyaman saat dikenakan. Cocok dipakai saat cuaca sedang dingin.', 'assets/img/collection/choco-bear-hoodie.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pakaian_id` int(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_pakaian`
--

CREATE TABLE `tipe_pakaian` (
  `id` int(11) NOT NULL,
  `tipe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tipe_pakaian`
--

INSERT INTO `tipe_pakaian` (`id`, `tipe`) VALUES
(8, 'Shirt'),
(9, 'Dress'),
(10, 'Pants'),
(11, 'Skirt'),
(12, 'Outer'),
(13, 'Jacket'),
(14, 'Hoodie');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pakaian_1_idx` (`tipe_pakaian_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`pakaian_id`);

--
-- Indeks untuk tabel `tipe_pakaian`
--
ALTER TABLE `tipe_pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tipe_pakaian`
--
ALTER TABLE `tipe_pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD CONSTRAINT `fk_pakaian_tipe1` FOREIGN KEY (`tipe_pakaian_id`) REFERENCES `tipe_pakaian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`pakaian_id`) REFERENCES `pakaian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
