-- Tambahan tabel untuk konten landing publik

-- Tabel pengumuman publik
CREATE TABLE IF NOT EXISTS `tb_pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `dipublikasikan` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `tanggal` (`tanggal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabel layanan masyarakat
CREATE TABLE IF NOT EXISTS `tb_layanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `kontak` varchar(100) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `urutan` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `aktif` (`aktif`),
  KEY `urutan` (`urutan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contoh data awal (opsional)
INSERT INTO `tb_pengumuman` (`judul`,`isi`,`tanggal`,`dipublikasikan`) VALUES
('Contoh Pengumuman','Ini contoh pengumuman. Silakan edit di menu admin.', CURDATE(), 1);

INSERT INTO `tb_layanan` (`judul`,`deskripsi`,`kontak`,`aktif`,`urutan`) VALUES
('Zakat Fitrah/Maal','Penerimaan & penyaluran melalui UPZ Masjid.','Koord. Zakat — 08xx',1,1),
('Layanan Jenazah','Perawatan & pemakaman (mobil ambulan desa).','Tim Sosial — 08xx',1,2);

-- Tambah entri menu admin + role minimal (opsional, sesuaikan type_id)
INSERT INTO `tb_menu` (`menu_id`, `menu_parent`, `menu_label`, `menu_link`, `menu_icon`, `menu_location`) VALUES
(100, NULL, 'Konten Publik', '#konten', 'fas fa-bullhorn', 'mainmenu'),
(101, 100, 'Pengumuman', 'pengumuman', 'fas fa-bullhorn', 'submenu'),
(102, 100, 'Layanan', 'layanan', 'fas fa-hands-helping', 'submenu');

-- Berikan akses ke Administrator (type_id=1) dan Petugas (type_id=6)
INSERT INTO `tb_roles` (`type_id`, `menu_id`) VALUES
(1, 100),(1,101),(1,102),(6,100),(6,101),(6,102);


