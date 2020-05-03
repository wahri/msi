-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 08.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `role`) VALUES
(1, 'wahyu', '$2y$10$xzuHSH5R0xR9W6gRqlKcyOVLZzLwFVxW7UR2awcgdB4Ju0MIkNI7q', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `paket` varchar(16) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `cara_penggunaan` longtext DEFAULT NULL,
  `bahan` longtext DEFAULT NULL,
  `info` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `harga`, `gambar`, `paket`, `deskripsi`, `cara_penggunaan`, `bahan`, `info`) VALUES
(1, 'MSI BAMBOO CHARCOAL SOAP', 425000, 'Gambar_-_MSI_BAMBOO_CHARCOAL_SOAP.jpg', 'silver', '<p id=\"h.p_qLs-t6-6qs43\">ULIVE Beauty dengan formula khusus Bamboo Charcoal membantu menyeimbangkan produksi minyak pada wajah sehingga membuat wajah terasa lebih lembab dan segar.</p>\r\n<p id=\"h.p_c5uOGwgFq3Mq\">Kelebihan lain dari ULIVE Beauty dapat menyamarkan noda jerawat serta mengangkat kotoran dalam pori-pori wajah</p>\r\n<p id=\"h.p_zgsmNoxWq3Mv\">Sabun wajah dengan kandungan Bamboo Charcoal cocok untuk kulit berminyak atau kering</p>\r\n<p id=\"h.p_hF2DmaY5q3M0\">Sabun Muka Membuang Sel-sel Kulit Mati,Menyerap Kotoran dan Sebun berlebih.Efektif Mengobati Jerawat, Mengobati Alergi Kulit,Anti Bakteri,Anti Virus,Anti Jamur dan Anti Mikroba</p>\r\n<p id=\"h.p_bJixF6rq-53V\">Sabun Arang Bambu ( bambo charcoal Soap) nenek moyang kita jaman dulu telah mengenal produk-produk dari arang bambu dan telah mengetahui khasiat luar biasanya,Seiring dengan perkembangan kebutuhan perawatan dari Arang bamboo saat ini hadir produk yang luar biasa yaitu Bambo Charcoal Soap (sabun Arang bamboo).</p>', '<div>Cara Pemakaian Bamboo charcoal soap (Sabun Arang Bambu)</div>\r\n<h3 id=\"h.p_mxw9UjPm5ldM\" tabindex=\"-1\"></h3>\r\n<p id=\"h.p_yYydAscj5m0B\">Cuci muka juga ada caranya,supaya kulit muka kamu sehat putih dan mulus, begini langkah-langkah mencuci muka dengan benar :</p>\r\n<ol>\r\n<li id=\"h.p_SfahogA55m0J\">Basahi wajah dan tangan terlebih dahulu.Gosok-gosokan dulu Sabun Bamboo charcoal soap di telapak tangan sampai berbusa banyak (tambahkan saja air),pastikan semua sabun sudah membusa!</li>\r\n<li id=\"h.p_SZyDPF9q5m0P\">Kemudian usapkan busanya (bukan sabunnya) perlahan di seluruh wajah (ingat,usap perlahan sampai merata).Iritasi = Jerawat.</li>\r\n<li id=\"h.p_WVqDQDWQ5m0U\">Semakin banyak iritasi,semakin besar kesempatan jerawat untuk tumbuh.Jangan lupa hindari terkena mata.</li>\r\n<li id=\"h.p_n9ojXiSj5m0b\">Tunggu beberapa saat supaya meresap jangan terlalu lama cukup kurang lebih 20 detik,kemudian basuh wajah dengan air langsung.Seperti dari shower atau kran.</li>\r\n<li id=\"h.p_BFLhfS075m0j\">Jangan terlalu banyak membilas dengan tangan bila perlu hindari kecuali di bagian celah-celah muka.(lagi-lagi semua ini untuk mengurangi iritasi)</li>\r\n<li id=\"h.p_L35d8mjt5m0m\">Jangan pernah meninggalkan sisa sedikit pun.Cek di bagian yang susah dijangkau seperti sekitar hidung, alis,di dekat telinga dll.Ulangi pembilasan kalo perlu.</li>\r\n<li id=\"h.p_U5Jyi32Y5m0q\">Gunakan handuk yang lembut untuk mengeringkan wajah yaitu dengan menempel-nempelkan handuk tersebut secara perlahan.Ingat bukan menggosok-nggosokan (lagi-lagi soal iritasi)</li>\r\n<li id=\"h.p_gqsfK7vC5m0t\">Bahkan kalau mungkin ada waktu luang lebih baik menunggu 15 menit lebih sampai kering sendiri</li>\r\n</ol>', '<p id=\"h.p_BOzxkd53rlT-\">Bambu yang tumbuh di usia 4-5 tahun dibakar pada suhu tinggi 800 9C-1200 2C dan dibuat menjadi activated bamboo charcoal.</p>\r\n<div>NIACINAMIDE Yang Berfungsi :</div>\r\n<h3 id=\"h.p_WuB1yQanvkcb\" tabindex=\"-1\"></h3>\r\n<ul style=\"list-style-type: square;\">\r\n<li id=\"h.p_c80wiPAyvkcg\">Mengatasi masalah jerawatMengecilkan pori-pori kulit</li>\r\n<li id=\"h.p_nEsMa3oqv_ZQ\">Meningkatkan kelembaban kulit</li>\r\n<li id=\"h.p_Q_2UQVzFv_ZV\">Mencerahkan kulit wajah</li>\r\n<li id=\"h.p_9CGo6FzAv_ZZ\">Menjaga keutuhan elastisitas kulit wajah.</li>\r\n</ul>\r\n<div>\r\n<div>\r\n<div role=\"presentation\" data-tooltip-horizontal-offset=\"0\" data-tooltip-vertical-offset=\"12\" data-tooltip-position=\"top\" aria-hidden=\"true\" data-tooltip=\"Salin link judul\" aria-disabled=\"false\" aria-label=\"Salin link judul\" aria-describedby=\"h.p_ij6Aqf7Iv_Zd\">\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\nCOLLAGEN Yang Berfungsi :</div>\r\n<h3 id=\"h.p_ij6Aqf7Iv_Zd\" tabindex=\"-1\"></h3>\r\n<ul style=\"list-style-type: square;\">\r\n<li id=\"h.p_f0eZMt6Uv_Zh\">Mengurangi kerutan</li>\r\n<li id=\"h.p_rKiMS7cpv_Zk\">Mengatasi kekeringan pada kulit</li>\r\n<li id=\"h.p_lI2I2LQdv_Zo\">Antiaging Meningkatkan elastisitas kulit</li>\r\n<li id=\"h.p_CMmPlLJpv_Zu\">Melembabkan kulit (moisturizing)</li>\r\n<li id=\"h.p_j-V_sPbVv_Zx\">Meningkatkan pertumbuhan sel-sel baru.</li>\r\n</ul>\r\n<div>\r\n<div>\r\n<div role=\"presentation\" data-tooltip-horizontal-offset=\"0\" data-tooltip-vertical-offset=\"12\" data-tooltip-position=\"top\" aria-hidden=\"true\" data-tooltip=\"Salin link judul\" aria-disabled=\"false\" aria-label=\"Salin link judul\" aria-describedby=\"h.p_wYe-h8Sjv_Z0\">\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\nALOE VERA LEAF EXTRACT Yang Berfungsi :</div>\r\n<h3 id=\"h.p_wYe-h8Sjv_Z0\" tabindex=\"-1\"></h3>\r\n<ul style=\"list-style-type: square;\">\r\n<li id=\"h.p_sXf2eQVGv_Z4\">Mengatasi jerawat dan eksim kulit</li>\r\n<li id=\"h.p_Uai-b6tGv_Z9\">Kulit yang terbakar</li>\r\n<li id=\"h.p_-gc45g8wv_aA\">Mencerahkan kulit wajah</li>\r\n<li id=\"h.p_0ve1bMZav_aD\">Paparan sinar matahari</li>\r\n<li id=\"h.p_XGv9f476v_aH\">Radiasi pada kulit</li>\r\n<li id=\"h.p_Q1JnlLIov_aO\">Menyamarkan flek atau bintik hitarm</li>\r\n<li id=\"h.p_S62fxq2Lv_aS\">Moisturizer tinggi</li>\r\n</ul>', '<section id=\"h.p_eiQWehkwybox\">\r\n<div>\r\n<div tabindex=\"-1\">\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div id=\"h.p_cXxHUeDPybnl\">\r\n<div>\r\n<div>\r\n<div>Bamboo Charcoal Soap</div>\r\n<h3 id=\"h.p_M-6SbqnZyboX\" tabindex=\"-1\"></h3>\r\n<p id=\"h.p_srDPzPbKyevv\">diformulasikan dari serbuk arang bamboo banyak Sekali Khasiat dan Manfaat Dari Sabun arang Bamboo</p>\r\n<ul style=\"list-style-type: square;\">\r\n<li id=\"h.p_eD8tkDOSyev5\">Efektif menghilangkan minyak berlebih dan menghilangkan jerawat.</li>\r\n<li id=\"h.p_EyCvkjU6yev_\">Mempertahankan kelembaban dan kelembutan kulit secara optimal.</li>\r\n<li id=\"h.p_G20EeRT0yewF\">Menyerap mineral,racun,kotoran dan sebum berlebih dan bahan berbahaya lainnya dari kulit Anda.</li>\r\n<li id=\"h.p_XdEX8ROOyewK\">Sebagai &ldquo;exfoliant&rdquo; alami,membuang sel-sel kulit mati.</li>\r\n<li id=\"h.p_KULX7nL4yewP\">Efektif mengobati Jerawat.</li>\r\n<li id=\"h.p_ChGhIIXMyewS\">Melembabkan, Melembutkan dan Mengencangkan dan mengecilkan pori-pori kulit.</li>\r\n<li id=\"h.p_tR21oRUAyewV\">Menghilangkan Alergi Kulit,cocok untuk kulit sensitif.</li>\r\n<li id=\"h.p_o2hKyRzZyewX\">Untuk kulit normal dan berminyak.</li>\r\n<li id=\"h.p_J_hRayl7yewe\">Berfungsi sebagai Anti bakteri,Anti-Virus,Anti-Jamur dan Anti-Mikroba.</li>\r\n<li id=\"h.p_2tjo_J1yyewh\">Mengandung antiseptic yang dapat melindungi kulit dari bakteri dan jamur</li>\r\n<li id=\"h.p_4i3A28hCyewj\">Menghaluskan kulit</li>\r\n<li id=\"h.p_jBWz7oqoyewm\">Menghilangkan gatal-gatal dan menjaga kesegaran kulit</li>\r\n<li id=\"h.p_nA4cmI0xyewo\">Membersihkan elemen logam pada kulit</li>\r\n<li id=\"h.p_4S6R1Sd7yewr\">Membersihkan dan menghilangkan jerawat,panu,eksim,kudis,kurap,komedodan penyakit kulit lainnya</li>\r\n<li id=\"h.p_lgQwYEn8yewu\">Melepaskan ion negative dan infra merah membuat kulit menjadi lembut</li>\r\n<li id=\"h.p_1lSM9jEHyewx\">Membuat kulit lebih nyaman bila dibasuh dengan air hangat</li>\r\n<li id=\"h.p_AIscbhCryewz\">Menghilangkan bau badan</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section id=\"h.p_M5qMCkWM1Hbr\">\r\n<div>&nbsp;</div>\r\n<div>\r\n<div tabindex=\"-1\">\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div id=\"h.p_nMbKhohI1Hab\">\r\n<div>\r\n<div>\r\n<p id=\"h.p_skkJEzX21HbN\">Khasiat lainya juga untuk menghilangkan jamur kulit.</p>\r\n<p id=\"h.p_ZsvwkmTj1n0G\">Dan bisa digunakan sebagai masker untuk menghilangkan</p>\r\n<ul style=\"list-style-type: square;\">\r\n<li id=\"h.p_79-44-KU1n0W\">Komedo</li>\r\n<li id=\"h.p_rtlS93wc1n0c\">Jerawat</li>\r\n<li id=\"h.p_t-b8s7q91n0i\">Flek Hitam</li>\r\n<li id=\"h.p_yvcbGTD41n0p\">Kerutan</li>\r\n<li id=\"h.p_VsRWCqzO1n0y\">Serta Kantung Mata</li>\r\n</ul>\r\n<p id=\"h.p_rjfMLyk01n04\">Dengan pemakaian secara rutin dan teratur,maka anda akan merasakan manfaat yang luar biasa dalam menjaga kesehatan dan kencatikan kulit anda.</p>\r\n<p id=\"h.p_kWnINSOt1n0_\">Sabun Kesehatan Multi Fungsi,dapat digunakan untuk wajah dan bagian tubuh lainnya.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>'),
(2, 'MSI GOLD BEAUTY FACE MIST', 425000, 'Gambar_-_MSI_GOLD_BEAUTY_FACE_MIST.jpg', 'silver', '', '', '', ''),
(3, 'MSI PEEL OFOF MASK MASKERM ALMOND ARGAN OIL', 425000, 'Gambar_-_MSI_PEEL_OFOF_MASK_MASKERM_ALMOND_ARGAN_OIL.jpg', 'silver', '', '', '', ''),
(4, 'MSI D’GREEN KOHIE', 425000, 'Gambar_-_MSI_D’GREEN_KOHIE.jpg', 'silver', '', '', '', ''),
(5, 'MSI GARTEA', 425000, 'Gambar_-_MSI_GARTEA.jpg', 'silver', '', '', '', ''),
(6, 'MSI MANJAVIKAN', 425000, 'Gambar_-_MSI_MANJAVIKAN.jpg', 'silver', '', '', '', ''),
(7, 'MSI GOLD BEAUTY GLOWING SERUM', 650000, 'Gambar_-_MSI_GOLD_BEAUTY_GLOWING_SERUM.jpg', 'gold', '', '', '', ''),
(8, 'MSI BODYLOTION', 650000, 'Gambar_-_MSI_BODYLOTION.jpg', 'gold', '', '', '', ''),
(9, 'MSI BIO SIMAPRO', 650000, 'Gambar_-_MSI_BIO_SIMAPRO.jpg', 'gold', '', '', '', ''),
(10, 'MSI MAHKOTA RAYA MOCHACCINO', 1000000, 'Gambar_-_MSI_MAHKOTA_RAYA_MOCHACCINO.jpg', 'platinum', '', '', '', ''),
(11, 'MSI BIO SIMAPRO', 1000000, 'Gambar_-_MSI_BIO_SIMAPRO1.jpg', 'platinum', '', '', '', ''),
(12, 'MSI GAMAT EMAS', 1000000, 'Gambar_-_MSI_GAMAT_EMAS.jpg', 'platinum', '', '', '', ''),
(13, 'MSI GLOWING SERUM', 1000000, 'Gambar_-_MSI_GLOWING_SERUM.jpg', 'platinum', '', '', '', ''),
(14, 'MSI BODYLOTION', 1000000, 'Gambar_-_MSI_BODYLOTION1.jpg', 'platinum', '', '', '', ''),
(15, 'MSI BIO SOAP GOLD', 1000000, 'Gambar_-_MSI_BIO_SOAP_GOLD.jpg', 'platinum', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `header1` varchar(128) NOT NULL,
  `header2` varchar(128) NOT NULL,
  `nama_button` varchar(128) NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `header1`, `header2`, `nama_button`, `link`) VALUES
(2, 'Slider_-_PESAN_SEKARANG_JUGA!.jpg', 'PESAN SEKARANG JUGA!', 'MARI HIDUP SEHAT', 'Belanja Sekarang', '#'),
(3, 'Slider_-_MSI_CHARCOAL_SOAP.jpg', 'MSI CHARCOAL SOAP', 'Discount 50%', 'Belanja Sekarang', '#');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
