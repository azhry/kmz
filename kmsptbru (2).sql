-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2019 pada 07.50
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `kmsptbru`
--
CREATE DATABASE IF NOT EXISTS `kmsptbru` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kmsptbru`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `explicit`
--

CREATE TABLE IF NOT EXISTS `explicit` (
  `id_explicit` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `nama_dokumen` varchar(50) NOT NULL,
  `pegawai` varchar(25) NOT NULL,
  `status_validasi` varchar(5) NOT NULL,
  PRIMARY KEY (`id_explicit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `explicit`
--

INSERT INTO `explicit` (`id_explicit`, `id_kategori`, `tgl_post`, `judul`, `keterangan`, `dokumen`, `nama_dokumen`, `pegawai`, `status_validasi`) VALUES
(1, 2, '2018-11-22', 'Sistem Hidrolik & Perlengkapan', 'Dasar-dasar hidrolik', '../folder/Sistem Hidrolik & Perlengkapan.pdf', 'Sistem Hidrolik & Perlengkapan.pdf', 'Adi', 'YA'),
(2, 2, '2018-11-28', 'Sistem Listrik', 'Dasar dan komponen listrik', '../folder/Sistem Listrik.pdf', 'Sistem Listrik.pdf', 'Adi', 'YA'),
(3, 1, '2018-12-03', 'Teknik Alat Berat Budi Tri Siswanto Jilid 2', 'Komponen alat berat', '../folder/Teknik Alat Berat Budi Tri Siswanto Jilid 2.pdf', 'Teknik Alat Berat Budi Tri Siswanto Jilid 2.pdf', 'Adi', 'YA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `id_gejala` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gejala` text NOT NULL,
  `bobot_gejala` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `bobot_gejala`, `id_kategori`) VALUES
(8, 'Suara Bising', 2, 1),
(9, 'Overheat', 3, 4),
(10, 'Mesin mati (mogok)', 1, 1),
(11, 'Boros bahan bakar', 1, 1),
(12, 'Mesin susah hidup', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Mesin'),
(4, 'Alat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentarexplicit`
--

CREATE TABLE IF NOT EXISTS `komentarexplicit` (
  `id_komentarexplicit` int(11) NOT NULL AUTO_INCREMENT,
  `id_explicit` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL,
  PRIMARY KEY (`id_komentarexplicit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentartacit`
--

CREATE TABLE IF NOT EXISTS `komentartacit` (
  `id_komentartacit` int(11) NOT NULL AUTO_INCREMENT,
  `id_tacit` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tgl_komentar` date NOT NULL,
  PRIMARY KEY (`id_komentartacit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `komentartacit`
--

INSERT INTO `komentartacit` (`id_komentartacit`, `id_tacit`, `nama`, `isi_komentar`, `tgl_komentar`) VALUES
(3, 0, 'selly', 'horee', '2018-11-15'),
(4, 0, 'selly', 'horee', '2018-11-15'),
(5, 0, 'selly', 'horee', '2018-11-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masalah`
--

CREATE TABLE IF NOT EXISTS `masalah` (
  `id_masalah` int(11) NOT NULL AUTO_INCREMENT,
  `id_gejala` int(11) NOT NULL,
  `id_solusi` int(11) NOT NULL,
  PRIMARY KEY (`id_masalah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `masalah`
--

INSERT INTO `masalah` (`id_masalah`, `id_gejala`, `id_solusi`) VALUES
(11, 9, 1),
(12, 12, 1),
(13, 11, 1),
(14, 9, 2),
(15, 8, 2),
(16, 10, 2),
(17, 9, 3),
(18, 8, 3),
(19, 9, 4),
(20, 11, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE IF NOT EXISTS `solusi` (
  `id_solusi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_solusi` text NOT NULL,
  `solusi_masalah` text NOT NULL,
  PRIMARY KEY (`id_solusi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `nama_solusi`, `solusi_masalah`) VALUES
(1, 'S1', 'Periksa mesin bagian dalam'),
(2, 'S2', 'Cek bagian dalam'),
(3, 'S3', 'Selesaikan dengan cara kekeluargaan'),
(4, 'S4', 'Selesaikan baik-baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tacit`
--

CREATE TABLE IF NOT EXISTS `tacit` (
  `id_tacit` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `judul` text NOT NULL,
  `masalah` text NOT NULL,
  `solusi` text NOT NULL,
  `status_validasi` varchar(5) NOT NULL,
  `pegawai` varchar(25) NOT NULL,
  PRIMARY KEY (`id_tacit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `tacit`
--

INSERT INTO `tacit` (`id_tacit`, `id_kategori`, `tgl_post`, `judul`, `masalah`, `solusi`, `status_validasi`, `pegawai`) VALUES
(1, 3, '2018-06-29', 'Oli SAE 40 Meditrans', 'Mesin terasa berat dan cepat panas', 'Cek indikator oli mesin dan transmisi secara berkala jika sudah melebihi batas SOP/waktu kerja maka oli siap diganti', 'YA', 'Herpin'),
(2, 3, '2018-06-30', 'Ban dalam ukuran 1300x24 pentil panjang', 'Kebocoran ban', 'Buka ban dan lihat jika masih bisa ditambal sebaiknya ditambal jika tidak harus diganti', 'YA', 'Burhan'),
(3, 3, '2018-07-01', 'Ban luar ukuran 1300x24x12 FL Bridgestone', 'Kembang ban sudah habis sehingga gaya gesek semakin kecil', 'Lakukan segera pernggantian ban yang baru karena jika tidak diganti akan berbahaya saat berada dijalan yang licin', 'YA', 'Risdianto'),
(4, 3, '2018-07-02', 'Seat Assy (Jok Grader)', 'Jok mobil mudah sobek', 'Lakukan pengecekan pada busa jok, jika sudah tidak empuk dan sarung sudak sobek sebaiknya diganti', 'YA', 'Supriadi'),
(5, 3, '2018-07-03', 'Baterai N-100 + Air GS For Grader', 'Lampu indikator baterai tidak menyala', 'Cek direct baterai jika voltasenya kurang maka sebaiknya baterai harus diganti', 'YA', 'Zainal A.'),
(6, 2, '2018-08-17', 'Cutting Edge (Pisau grader)', 'Tanah yang diratakan tidak merata', 'Cek pisau (Cutting Edge) jika ada bagian yang terkikis sebaiknya cepat diganti', 'YA', 'Kanedi'),
(7, 3, '2018-08-18', 'Grease Rotary', 'Sistem hidrolik terasa berat', 'Lakukan pengecekan berkala, jika grease sudah kering maka segera lakukan greasing', 'YA', 'Sopian'),
(8, 3, '2018-08-19', 'Cartridge oil/Filter oli', 'Kebuntuan di filter oli', 'Lakukan pengecekan atau perawatan filter oli setiap penggantian oli mesin, jika oli', 'YA', 'M. Tahan'),
(9, 3, '2018-08-20', 'Cartridge fuel/Filter solar', 'Kurangnya tenaga mesin saat akselerasi, mobil jadi susah starter', 'Hendaknya penggantian filter solar rutin dilakukan sesuai jadwal service ataupun rekomendasi dari mekanik', 'YA', 'Faisol'),
(10, 2, '2018-08-21', 'Lampu sorot 24V UK4', 'Lampu sorot mati', 'Lakukan pengecekan bohlam, jika bohlam tidak putus lakukan pengecekan kabel, jika kabel putus dan bohlam putus maka kabel disambung dan bohlam diganti', 'YA', 'Ridwan'),
(11, 3, '2018-09-01', 'Air Cleaner Assy', 'Lampu indikator piston di kabin berwarna merah', 'Pada air cleanser grader komatsu terdapat angka dari 1-6 yang menunjukkan bahwa air cleanser bisa diberihkan dan dipakai sampai 6 kali. Jika indikator berwarna merah berarti air cleanser tersumbat sebaiknya disemprot atau dibersihkan menggunakan kompressor bertekanan tinggi', 'YA', 'Khairullah'),
(12, 3, '2018-09-02', 'Water Separator', 'Solar bercampur dengan air', 'Cek secara berkala water separator, jika air lebih banyak daripada minyak sebaiknya dibuang dengan cara membuka keran bagian bawah separator', 'YA', 'Fikri'),
(13, 2, '2018-09-03', 'Strainer', 'Air masuk kedalam sistem bahan bakar', 'Lepaskan filter bahan bakar dengan menggunakan kunci filter, jika sudah terlepas buang air dan solar yang ada didalam filter. Segera ganti strainer jika tidak bisa memisahkan air dan solar lagi', 'YA', 'Arbani'),
(14, 2, '2018-09-04', 'Water Pump Assy', 'Mesin cepat panas (Overheating)', 'Lakukan pengecekkan di water pump jika tidak berfungsi dengan baik maka akan menyebabkan air pendingin tidak dapat bersirkulasi. Segeralah mengganti water pump', 'YA', 'Bayu Sanjaya'),
(15, 1, '2018-09-05', 'Radiator', 'Kebocoran pada air radiator', 'Jika terjadi kebocoran pada radiator segera lakukan penggantian karena jika tidak mesin akan ngejim', 'YA', 'Pandri'),
(16, 1, '2018-10-20', 'Nozzle Injector', 'Mesin susah hidup', 'Lakukan direct pengecekkan di Nozzle Injector, jika tekanan Nozzle kurang dari 280 Mpa maka Nozzle tidak berfungsi dengan baik segeralah lakukan penggantian Nozzle', 'YA', 'Herianto'),
(17, 1, '2018-10-21', 'Fuel Pump Injection', 'Mesin kondisi dingin dan mati total', 'Lakukan pengecekkan pada pompa injeksi, jika stelan dari pabrik sudah di atur atau segel SOP keluaran pabrik sudah dilepas sebaiknya pompa injeksi di reset ulang atau langsung diganti ', 'YA', 'Bejo Sukamto'),
(18, 1, '2018-10-22', 'Pompa Hidrolik', 'Pompa hidrolik tidak mau memompa fluida', 'Service oli secara rutin. Lakukan penggantian pompa hidrolik, pompa tidak bisa diperbaiki', 'YA', 'Dimas'),
(19, 2, '2018-10-23', 'O-Ring Pompa Hidrolik', 'Terjadi kebocoran disekeliling pompa hidrolik', 'Buka dan lihat o-ring di pompa hidrolik, jika sudah tidak layak pakai maka lakukan penggantian o-ring keseluruhan di pompa hidrolik', 'YA', 'Iryanto'),
(20, 2, '2018-10-24', 'Cylinder Hidrolik', 'Cylinder hidrolik tidak berfungsi dengan baik', 'Lakukan pengecekkan seal dust, o-ring, piston dan spool. Jika sudah tidak layak pakai harus diganti', 'YA', 'Imam'),
(21, 2, '2018-11-10', 'Seal Dust', 'Kebocoran di Cylinder Hidrolik', 'Cek cylinder hidrolik jika terjadi kebocoran maka segeralah ganti seal dust dengan yang baru sesuai deng SOP yang ada', 'YA', 'Sigit'),
(22, 1, '2018-11-11', 'Ring Piston', 'Ring piston sudah melemah sehingga hidrolik tidak bekerja', 'Jika ring piston sudah melemah lakukan penggantian agar sistem hidrolik dapat bekerja secara maksimal', 'YA', 'Joharmansyah'),
(23, 2, '2018-11-12', 'Spool Hidrolik', 'Spool hidrolik mengalami pengkaratan', 'Bila katup aliran atau inti klep arah macet. Periksa apakah sedimen kotor atau koloid terjebak dalam spool lubang katup, Periksa kondisi body wear valve.', 'YA', 'Juliansyah'),
(24, 2, '2018-11-13', 'Control Valve', 'Cincin yang berada dibawah valve lingkarannya membesar', 'Untuk mengetahui bahwa sebuah valve mengalami kebocoran maka dilakukan pemeriksaan secara visual pada punggung valve maupun pada seatingnya. Pada valve yang tidak mengalami kerusakan maka terdapat garis putih melingkar yang tak terputus pada punggung valve dan pada seatingnya. Jika garis tersebut tidak melingkar atau terputus maka dapat disimpulkan bahwa valve mengalami kebocoran. Untuk valve yang terbakar harus diganti', 'YA', 'Sohibul'),
(25, 2, '2018-11-14', 'Main Pump (Pompa Utama)', 'Oli hidrolik terkontaminasi oleh air', 'Menjaga kebersihan oli hidrolik dengan cara menghindari dari faktor penyebab kontaminasi seperti masuknya udara karena kerapatan yang rendah pada bagian-bagian pertemuan komponen yang dapat mengakibatkan eksternal leak', 'YA', 'Alex'),
(26, 3, '2018-06-29', 'Oli SAE 40 Meditrans', 'Mesin terasa berat dan cepat panas', 'Cek indikator oli mesin dan transmisi secara berkala jika sudah melebihi batas SOP/waktu kerja maka oli siap diganti', 'YA', 'Herpin'),
(27, 3, '2018-06-30', 'Ban dalam ukuran 1300x24 pentil panjang', 'Kebocoran ban', 'Buka ban dan lihat jika masih bisa ditambal sebaiknya ditambal jika tidak harus diganti', 'YA', 'Burhan'),
(28, 3, '2018-07-01', 'Ban luar ukuran 1300x24x12 FL Bridgestone', 'Kembang ban sudah habis sehingga gaya gesek semakin kecil', 'Lakukan segera pernggantian ban yang baru karena jika tidak diganti akan berbahaya saat berada dijalan yang licin', 'YA', 'Risdianto'),
(29, 3, '2018-07-02', 'Seat Assy (Jok Grader)', 'Jok mobil mudah sobek', 'Lakukan pengecekan pada busa jok, jika sudah tidak empuk dan sarung sudak sobek sebaiknya diganti', 'YA', 'Supriadi'),
(30, 3, '2018-07-03', 'Baterai N-100 + Air GS For Grader', 'Lampu indikator baterai tidak menyala', 'Cek direct baterai jika voltasenya kurang maka sebaiknya baterai harus diganti', 'YA', 'Zainal A.'),
(31, 2, '2018-08-17', 'Cutting Edge (Pisau grader)', 'Tanah yang diratakan tidak merata', 'Cek pisau (Cutting Edge) jika ada bagian yang terkikis sebaiknya cepat diganti', 'YA', 'Kanedi'),
(32, 3, '2018-08-18', 'Grease Rotary', 'Sistem hidrolik terasa berat', 'Lakukan pengecekan berkala, jika grease sudah kering maka segera lakukan greasing', 'YA', 'Sopian'),
(33, 3, '2018-08-19', 'Cartridge oil/Filter oli', 'Kebuntuan di filter oli', 'Lakukan pengecekan atau perawatan filter oli setiap penggantian oli mesin, jika oli', 'YA', 'M. Tahan'),
(34, 3, '2018-08-20', 'Cartridge fuel/Filter solar', 'Kurangnya tenaga mesin saat akselerasi, mobil jadi susah starter', 'Hendaknya penggantian filter solar rutin dilakukan sesuai jadwal service ataupun rekomendasi dari mekanik', 'YA', 'Faisol'),
(35, 2, '2018-08-21', 'Lampu sorot 24V UK4', 'Lampu sorot mati', 'Lakukan pengecekan bohlam, jika bohlam tidak putus lakukan pengecekan kabel, jika kabel putus dan bohlam putus maka kabel disambung dan bohlam diganti', 'YA', 'Ridwan'),
(36, 3, '2018-09-01', 'Air Cleaner Assy', 'Lampu indikator piston di kabin berwarna merah', 'Pada air cleanser grader komatsu terdapat angka dari 1-6 yang menunjukkan bahwa air cleanser bisa diberihkan dan dipakai sampai 6 kali. Jika indikator berwarna merah berarti air cleanser tersumbat sebaiknya disemprot atau dibersihkan menggunakan kompressor bertekanan tinggi', 'YA', 'Khairullah'),
(37, 3, '2018-09-02', 'Water Separator', 'Solar bercampur dengan air', 'Cek secara berkala water separator, jika air lebih banyak daripada minyak sebaiknya dibuang dengan cara membuka keran bagian bawah separator', 'YA', 'Fikri'),
(38, 2, '2018-09-03', 'Strainer', 'Air masuk kedalam sistem bahan bakar', 'Lepaskan filter bahan bakar dengan menggunakan kunci filter, jika sudah terlepas buang air dan solar yang ada didalam filter. Segera ganti strainer jika tidak bisa memisahkan air dan solar lagi', 'YA', 'Arbani'),
(39, 2, '2018-09-04', 'Water Pump Assy', 'Mesin cepat panas (Overheating)', 'Lakukan pengecekkan di water pump jika tidak berfungsi dengan baik maka akan menyebabkan air pendingin tidak dapat bersirkulasi. Segeralah mengganti water pump', 'YA', 'Bayu Sanjaya'),
(40, 1, '2018-09-05', 'Radiator', 'Kebocoran pada air radiator', 'Jika terjadi kebocoran pada radiator segera lakukan penggantian karena jika tidak mesin akan ngejim', 'YA', 'Pandri'),
(41, 1, '2018-10-20', 'Nozzle Injector', 'Mesin susah hidup', 'Lakukan direct pengecekkan di Nozzle Injector, jika tekanan Nozzle kurang dari 280 Mpa maka Nozzle tidak berfungsi dengan baik segeralah lakukan penggantian Nozzle', 'YA', 'Herianto'),
(42, 1, '2018-10-21', 'Fuel Pump Injection', 'Mesin kondisi dingin dan mati total', 'Lakukan pengecekkan pada pompa injeksi, jika stelan dari pabrik sudah di atur atau segel SOP keluaran pabrik sudah dilepas sebaiknya pompa injeksi di reset ulang atau langsung diganti ', 'YA', 'Bejo Sukamto'),
(43, 1, '2018-10-22', 'Pompa Hidrolik', 'Pompa hidrolik tidak mau memompa fluida', 'Service oli secara rutin. Lakukan penggantian pompa hidrolik, pompa tidak bisa diperbaiki', 'YA', 'Dimas'),
(44, 2, '2018-10-23', 'O-Ring Pompa Hidrolik', 'Terjadi kebocoran disekeliling pompa hidrolik', 'Buka dan lihat o-ring di pompa hidrolik, jika sudah tidak layak pakai maka lakukan penggantian o-ring keseluruhan di pompa hidrolik', 'YA', 'Iryanto'),
(45, 2, '2018-10-24', 'Cylinder Hidrolik', 'Cylinder hidrolik tidak berfungsi dengan baik', 'Lakukan pengecekkan seal dust, o-ring, piston dan spool. Jika sudah tidak layak pakai harus diganti', 'YA', 'Imam'),
(46, 2, '2018-11-10', 'Seal Dust', 'Kebocoran di Cylinder Hidrolik', 'Cek cylinder hidrolik jika terjadi kebocoran maka segeralah ganti seal dust dengan yang baru sesuai deng SOP yang ada', 'YA', 'Sigit'),
(47, 1, '2018-11-11', 'Ring Piston', 'Ring piston sudah melemah sehingga hidrolik tidak bekerja', 'Jika ring piston sudah melemah lakukan penggantian agar sistem hidrolik dapat bekerja secara maksimal', 'YA', 'Joharmansyah'),
(48, 2, '2018-11-12', 'Spool Hidrolik', 'Spool hidrolik mengalami pengkaratan', 'Bila katup aliran atau inti klep arah macet. Periksa apakah sedimen kotor atau koloid terjebak dalam spool lubang katup, Periksa kondisi body wear valve.', 'YA', 'Juliansyah'),
(49, 2, '2018-11-13', 'Control Valve', 'Cincin yang berada dibawah valve lingkarannya membesar', 'Untuk mengetahui bahwa sebuah valve mengalami kebocoran maka dilakukan pemeriksaan secara visual pada punggung valve maupun pada seatingnya. Pada valve yang tidak mengalami kerusakan maka terdapat garis putih melingkar yang tak terputus pada punggung valve dan pada seatingnya. Jika garis tersebut tidak melingkar atau terputus maka dapat disimpulkan bahwa valve mengalami kebocoran. Untuk valve yang terbakar harus diganti', 'YA', 'Sohibul'),
(50, 2, '2018-11-14', 'Main Pump (Pompa Utama)', 'Oli hidrolik terkontaminasi oleh air', 'Menjaga kebersihan oli hidrolik dengan cara menghindari dari faktor penyebab kontaminasi seperti masuknya udara karena kerapatan yang rendah pada bagian-bagian pertemuan komponen yang dapat mengakibatkan eksternal leak', 'YA', 'Alex');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `no_badge` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `no_badge`, `username`, `password`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `telepon`, `foto`, `jabatan`) VALUES
(2, '1234', 'Admin', '12345', 'Selly', 'Perempuan', 'Palembang', '1997-03-12', '085896384736', 'FJ7A6283 copy.jpg', 'admin'),
(3, '2345', 'Pakar', '12345', 'Ridwan', 'Laki-laki', 'Palembang', '1997-11-17', '081377760287', 'logo.PNG', 'tim validasi'),
(4, '3456', 'Kepala Cabang', '12345', 'Yopis', 'Laki-laki', 'Palembang', '1997-10-23', '089765234321', 'FJ7A6283 copy.jpg', 'manager'),
(7, '4567', 'User', '12345', 'Adi', 'Laki-laki', 'Jakarta', '1995-03-12', '089765234322', '', 'pengguna');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
