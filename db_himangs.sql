-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2022 pada 05.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_himangs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp_admin` varchar(20) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `alamat_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `telp_admin`, `email_admin`, `alamat_admin`) VALUES
(1, 'Himang', 'himang', '15c21b706930e7c22e7b370cdab99ca2', '085348004415', 'himangbd181021@gmail.com', 'Jalan Siti Aisyah'),
(2, 'Benidiktus Himang', 'admin', '21232f297a57a5a743894a0e4a801fc3', '+6285348004415', 'bendiktushimang@gmail.comc', 'Jalan Cendanaa1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `kategori_nama`) VALUES
(8, 'Sepatu'),
(9, 'Komputer'),
(10, 'Laptop'),
(11, 'Handphone');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `produk_nama` varchar(100) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_desk` text NOT NULL,
  `produk_gbr` varchar(200) NOT NULL,
  `produk_status` tinyint(4) NOT NULL,
  `buat_tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `kategori_id`, `produk_nama`, `produk_harga`, `produk_desk`, `produk_gbr`, `produk_status`, `buat_tanggal`) VALUES
(13, 10, 'ACER NITRO AN515-57 - i5-11400H', 15999000, '<p><strong>ACER NITRO AN515-57 - i5-11400H 512GB GTX1650/RTX3050 4GB 15.6&quot;FHD IPS W11 OHS</strong></p>\r\n\r\n<p>Highlights :<br />\r\n- FPS lebih baik dengan display yang lebih smooth. Peningkatan 50% dr processor generasi sebelumnya. Dan meningkat up to 11.88% dengan menggunakan Nitro Sense.<br />\r\n- Performance yang lebih stabil dan durabilitas yang lebih lama dengan +25% airflow yg lebih baik menggunakan Acer CoolBoost (quad exhaust fan).<br />\r\n- Dual slot NVMe, dengan max 2TB SSD.<br />\r\n- Smoother display 2x smoother dari 60Hz refresh rate.</p>\r\n\r\n<p>Speksifikasi:</p>\r\n\r\n<p>&bull; 11th Generation Intel&reg; Core&trade; i5-11400H Processor (2.70 GHz, up to 4.50 GHz with Turbo Boost, 6 Cores, 12Thread)<br />\r\n&bull; Memory DDR4 8 GB 3200MHZ ( UPTO 32GB )<br />\r\n&bull; Storage 512GB M.2 NVMe&trade; PCIe&reg; SSD<br />\r\n&bull; Graphic NVIDIA&reg; GeForce&reg; GTX&trade; 1650 4GB GDDR6 / NVIDIA&reg; GeForce&reg; RTX&trade; 3050 4GB GDDR6<br />\r\n&bull; Display 15.6inch (16:9) FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel<br />\r\n&bull; Keyboard Backlight keyboard with isolated numpad key<br />\r\n&bull; WebCam HD camera (Front)<br />\r\n&bull; Wi-Fi : Wireless Wi-Fi 6 AX201<br />\r\n&bull; KillerTM Ethernet E2600</p>\r\n\r\n<p>&bull; Bluetooth : Bluetooth&reg; 5.0 The Version of BT may change as OS upgrades</p>\r\n\r\n<p>&bull; Interface :<br />\r\n1x USB 3.2 Gen 2 port featuring power-off USB charging<br />\r\n2x USB 3.2 Gen 1 ports<br />\r\nHDMI&reg; 2.0 port with HDCP support<br />\r\nEthernet (RJ-45) port</p>\r\n\r\n<p>&bull; Audio :<br />\r\n-Built-in 2 W Stereo Speakers with Array Microphone<br />\r\n-DTS:X&reg; Ultra<br />\r\n-Supports Windows 11 Cortana with Voice</p>\r\n\r\n<p>&bull; BATTERY: 57 Wh lithium-polymer battery Battery<br />\r\n&bull; Operating System Windows 11 Home + Office Home &amp; Student 2021 Original Permanen</p>\r\n\r\n<p>Feature :<br />\r\n1. Nitro Sense.<br />\r\n2. Acer CoolBoost (quad exhaust fan).<br />\r\n3. Dual Slot NVMe, max 2TB SSD.<br />\r\n4. Refresh Rate 144Hz.</p>\r\n\r\n<p><br />\r\n&bull; Free<br />\r\n- Office Home &amp; Student 2021<br />\r\n- Tas Nitro Backpack</p>\r\n\r\n<p><br />\r\nGARANSI ACER INDONESIA 3 TAHUN RESMI</p>\r\n', 'produk1650132759.png', 1, '2022-04-16 18:12:39'),
(14, 10, 'ASUS TUF FA506IC R735B6TO11', 15084000, '<p><strong>ASUS TUF FA506IC R735B6TO11 RYZEN 7 4800 8GB/16GB 512SSD RTX3050 4GB W11+OHS 15.6FHD BLK</strong></p>\r\n\r\n<p>Specification :</p>\r\n\r\n<p>Graphics : NVIDIA GeForce RTX&trade; 3050 4GB<br />\r\nProcessor : MD Ryzen&trade; 7 4800H Processor<br />\r\nMemory : 8 GB DDR4<br />\r\nStorage : 512GB M.2 NVMe&trade; PCIe&reg; 3.0 SSD<br />\r\nDisplay : 15.6inch (16:9) FHD (1920x1080) 144Hz IPS-level Panel 45% NTSC<br />\r\nKeyboard : Backlit Chiclet Keyboard RGB<br />\r\nOperating System : WIndows 10 Home<br />\r\nBundled Software : Office Home Student 2019</p>\r\n\r\n<p>GARANSI<br />\r\nGARANSI RESMI ASUS 2 TAHUN<br />\r\nGARANSI TOKO 5 HARI</p>\r\n\r\n<p>KELENGKAPAN :<br />\r\nUnit Laptop, Charger, Kartu Garansi, Dus/Box</p>\r\n\r\n<p>BUNDLING +SCREEN PROTECTOR :<br />\r\nPembelian Bundling screen protector, akan kami pasangkan pada screen dan body laptop.<br />\r\nPROMO KHUSUS BERGARANSI LIFETIME, untuk Paket Screen Protectornya.</p>\r\n', 'produk1650133197.png', 1, '2022-04-16 18:19:57'),
(15, 11, 'ASUS ROG Phone 5 Phantom Black', 12999000, '<p><strong>ASUS ROG Phone 5 (12/256) Phantom Black</strong></p>\r\n\r\n<p>SPESIFIKASI :</p>\r\n\r\n<p>ASUS ROG Phone 5 12GB 256GBP hantom Black</p>\r\n\r\n<p>Operating System : Android 11 (ROG UI)<br />\r\nCPU : Qualcomm Snapdragon 888 2.84GHz<br />\r\nGPU : Qualcomm Adreno 660<br />\r\nRAM : 12GB<br />\r\nStorage : 256GB<br />\r\nDisplay : 6.78&quot; 20.4:9 (2448 x 1080) 144 Hz / 1 ms Samsung AMOLED display + Corning Gorilla Glass Victus<br />\r\nWLAN : Integrated WiFi 6E (802.11a/b/g/n/ac/ax, 2x2 MIMO)<br />\r\nSupports 2.4GHz/ 5GHz/ 6GHz WiFi<br />\r\nBluetooth Version : 5.2<br />\r\nSIM Card : Dual SIM</p>\r\n\r\n<p>Camera<br />\r\nRear: 64MP + 13MP + 5MP<br />\r\nFront: 24MP</p>\r\n\r\n<p>Battery : 6000mAh<br />\r\nDimension : 173(L)*77(H) *9.90(W) mm</p>\r\n\r\n<p>InBox-Items<br />\r\nDocumentation (user guide, warranty card)<br />\r\nEjector pin (SIM tray needle)<br />\r\nUSB power adapter (65W)<br />\r\nAero Case</p>\r\n\r\n<p>Color : Phantom Black<br />\r\nWarranty : 1 Years by ASUS Indonesia RESMI</p>\r\n', 'produk1650133611.png', 1, '2022-04-16 18:26:51'),
(16, 11, 'Black Shark 4  5G Gaming Phone  Smart Phone', 10999000, '<p><strong>Black Shark 4 8GB+128GB | 5G Gaming Phone | Blackshark 4 Smart Phone</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;Xiaomi Black Shark 4</p>\r\n\r\n<ul>\r\n	<li>Jaringan: GSM/CDMA/HSPA/EVDO/LTE/5G, dual sim</li>\r\n	<li>Dimensi: 163.8 x 76.4 x 9.9 mm, 210g</li>\r\n	<li>Resolusi: 1080 x 2400 pixels, 20:9 ratio (~395 ppi density)</li>\r\n	<li>Layar: Super Amoled, 6,67 inci, HDR10+, 1300 nits (peak)</li>\r\n	<li>Chipset: Qualcomm Snapdragon 870 5G (7 nm)</li>\r\n	<li>GPU: Adreno 650</li>\r\n	<li>CPU: Octa-core (1x3.2 GHz Kryo 585 &amp; 3x2.42 GHz Kryo 585 &amp; 4x1.80 GHz Kryo 585)</li>\r\n	<li>Memori: 128GB 6GB RAM, 128GB 8GB RAM, 128GB 12GB RAM, 256GB 8GB RAM, 256GB 12GB RAM, tidak ada kartu SD eksternal</li>\r\n	<li>Sistem Operasi: android 11, Joy UI 12.5</li>\r\n	<li>Baterai: Li-Po 4.500 mAh, non-removable, USB Type C, fast charging pengisian 120W</li>\r\n	<li>Kamera Depan: 20 MP, f/2.0, (wide), HDR</li>\r\n	<li>Kamera Belakang: 3 kamera belakang (48 MP, f/1.8, wide) + (8 MP, f/2.2, 120˚, ultrawide) + (5 MP, f/2.4, macro)</li>\r\n	<li>Speaker: Stereo Speaker</li>\r\n	<li>Sensor: Fingerprint (samping)</li>\r\n	<li>Konektivitas: Bluetooth 5.2, Wi-Fi 802.11 a/b/g/n/ac/6e</li>\r\n</ul>\r\n', 'produk1650134565.png', 1, '2022-04-16 18:42:45'),
(17, 9, 'PC HP AIO 24-DF1010D ', 12499000, '<p>PC HP AIO 24-DF1010D&nbsp;Core i5-1135G7 / 8GB / 512GB / WIN 10</p>\r\n\r\n<p>HP AIO 24 df1009d AIO Core i5 1135G7 8G 512GB SSD WIN 10</p>\r\n\r\n<p>Procesor : intel Core i5-1135G7 Processor (2.4 GHz; 8M Cache; up to 4.2 GHz)</p>\r\n\r\n<p>Ram : 8GB DDR4 3200 (2x4GB)</p>\r\n\r\n<p>HDD : 512 GB SSD NVMe</p>\r\n\r\n<p>Vga : Intel&reg; Iris&reg; Xe Graphics</p>\r\n\r\n<p>Display : 23.8 IPS,FHD Non Touch</p>\r\n\r\n<p>Operasi system : Windows 10 Home</p>\r\n\r\n<p>GARANSI RESMI 1 TAHUN HP INDONESIA</p>\r\n\r\n<p>Terima kasih banyak telah mengunjungi toko kami</p>\r\n', 'produk1650135003.png', 1, '2022-04-16 18:50:03'),
(18, 9, 'AIO LENOVO IdeaCentre A340 24IWL F0E800XEID ', 7262000, '<p><strong>AIO LENOVO IdeaCentre A340 24IWL F0E800XEID Core i3-10110U 1TB</strong></p>\r\n\r\n<p>Processor : Intel Core i3-10110U (2C / 4T, 2.1 / 4.1GHz, 4MB)<br />\r\nGraphics : Integrated Intel UHD Graphics<br />\r\nChipset : Intel SoC Platform<br />\r\nMemory :1x 4GB SO-DIMM DDR4-2666<br />\r\nMemory Slots : One DDR4 SO-DIMM slot<br />\r\nMax Memory : Up to 16GB DDR4-2400<br />\r\nStorage : 1TB HDD 5400rpm 2.5&quot;<br />\r\nDisplay : 23.8&quot; FHD (1920x1080) IPS 250nits</p>\r\n\r\n<p>Operating System : Windows 11 Home 64, English</p>\r\n\r\n<p>Storage Support<br />\r\nUp to two drives, 1x 2.5&quot; HDD + 1x M.2 SSD<br />\r\n&bull; 2.5&quot; HDD up to 1TB<br />\r\n&bull; M.2 SSD up to 512GB<br />\r\n&bull; Optional Intel Optane Memory integrated with SSD, M.2</p>\r\n\r\n<p>Card Reader : 3-in-1 Card Reader<br />\r\nAudio Chip : High Definition (HD) Audio<br />\r\nSpeakers : 3Wx2<br />\r\nCamera : 720p<br />\r\nMicrophone : Mono<br />\r\nPower Supply : 65W Adapter Black<br />\r\nStand : AIO Stand<br />\r\nForm Factor: AIO (23.8 inches)</p>\r\n\r\n<p>Expansion Slots<br />\r\nTwo M.2 slots (one for WLAN, one for SSD)</p>\r\n\r\n<p>Ethernet : Integrated 100/1000M<br />\r\nWLAN + Bluetooth : 11ac, 2x2 + BT4.0</p>\r\n\r\n<p>Rear Ports<br />\r\n1x USB 3.2 Gen 2 (for i3 / i5 / i7 models only)<br />\r\n2x USB 2.0<br />\r\n1x HDMI-out 1.4<br />\r\n1x Ethernet (RJ-45)<br />\r\n1x power connector</p>\r\n\r\n<p>Left Ports<br />\r\n1x USB 3.2 Gen 2 (for Core i3, i5 and i7 models only)<br />\r\n1x card reader<br />\r\n1x headphone / microphone combo jack (3.5mm)</p>\r\n\r\n<p>Green Certifications :&nbsp;&nbsp; &nbsp;-ErP Lot 3 and Lot&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -7RoHS compliant</p>\r\n\r\n<p>1-Years Onsite Warranty by LENOVO</p>\r\n', 'produk1650135278.png', 1, '2022-04-16 18:54:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
