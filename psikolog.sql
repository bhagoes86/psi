/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : psikolog

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-11-29 08:22:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `aspek`
-- ----------------------------
DROP TABLE IF EXISTS `aspek`;
CREATE TABLE `aspek` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` bigint(11) NOT NULL,
  `nama_aspek` varchar(255) NOT NULL,
  `deskripsi_high` text NOT NULL,
  `deskripsi_low` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aspek
-- ----------------------------
INSERT INTO `aspek` VALUES ('1', '1', 'Kecerdasan Umum', 'Cepat mempelajari hal/materi baru dan mampu memecahkan masalah yang kompleks', 'Hanya mampu mengatasi masalah yang sifatnya sederhana');
INSERT INTO `aspek` VALUES ('2', '1', 'Pengetahuan Umum', 'Mampu memanfaatkan informasi yang ada untuk mengatasi permasalahan secara mandiri, berpikir secara konkrit praktis dan memiliki kemampuan untuk menilai secara realitas', 'Kurang mampu memanfaatkan informasi yang ada untuk mengatasi permasalahan dan kurang realistis');
INSERT INTO `aspek` VALUES ('3', '1', 'Berpikir Analis', 'Mampu memecah persoalan yang kompleks menjadi bagian-bagian yang dapat ditangani secara lebih mudah dengan cara yang sistematis', 'Hanya mampu memahami situasi yang sederhana dan kurang mampu menguraikan tugasnya secara prioritas');
INSERT INTO `aspek` VALUES ('4', '1', 'Daya Paham', 'Mampu mengantisipasi keadaan dengan menggunakan sumber daya yang tersedia', 'Kurang mampu mengantisipasi keadaan dengan menggunakan sumber daya yang ada');
INSERT INTO `aspek` VALUES ('5', '1', 'Kemampuan Hitungan', 'Mampu menyelesaikan permasalahan yang berkaitan dengan analisa dan pengolahan angka/perhitungan', 'Hanya mampu menyelesaikan permasalahan yang berkaitan dengan pengolahan angka/perhitungan sederhana');
INSERT INTO `aspek` VALUES ('6', '1', 'Kemampuan Verbal', 'Mampu memahami, mengolah dan menarik kesimpulan informasi yang bersifat verbal, mampu menyampaikan dengan jelas dan sistematis.', 'Hanya mampu memahami informasi yang bersifat verbal sederhana dan kurang mampu menyampaikan dengan sistematis');
INSERT INTO `aspek` VALUES ('7', '1', 'Berpikir Logis / Penalaran', 'Mampu berpikir secara logis dan mampu menangkap suatu hubungan antar problem dan menyimpulkannya menjadi satu pengertian yang utuh', 'Kurang mampu memahami hubungan antar problem dan menyimpulkan jalan keluar suatu permasalahan');
INSERT INTO `aspek` VALUES ('8', '1', 'Daya Bayang Ruang', 'Mampu membayangkan suatu obyek 3 dimensi, menganalisanya sehingga mampu berpikir secara konstruktif terhadap suatu obyek', 'Kurang mampu membayangkan suatu obyek 3 dimensi sehingga kurang mampu berpikir secara konstruktif');
INSERT INTO `aspek` VALUES ('9', '1', 'Daya Ingat', 'Mampu berkonsentrasi dalam jangka waktu relatif lama terhadap suatu permasalahan', 'Hanya mampu berkonsentrasi terhadap permasalahan sederhana');
INSERT INTO `aspek` VALUES ('10', '2', 'Mengatur Pekerjaan', 'Mampu mengorganisasikan tugas-tugasnya secara baik dan menggunakan sumberdaya secara optimal', 'Kurang mampu mengorganisasikan tugas-tugasnya secara prioritas');
INSERT INTO `aspek` VALUES ('11', '2', 'Motivasi Berprestasi', 'Memiliki dorongan yang kuat untuk meningkatkan prestasi, serta memiliki semangat kerja tinggi', 'Kurang memiliki dorongan dalam dirinya untuk meningkatkan prestasi');
INSERT INTO `aspek` VALUES ('12', '2', 'Perhatian terhadap Prosedur, Kualitas Akurasi', 'Memperhatikan prosedur kerja dengan baik sehingga hasil kerja sesuai standar kualitas ', 'Kurang perhatian terhadap prosedur kerja yang berlaku sehingga hasilnya kurang memenuhi kualitas ');
INSERT INTO `aspek` VALUES ('13', '2', 'Daya Tahan Kerja', 'Memiliki ketahanan kerja yang kuat sehingga mampu menyelesaikan tugas tepat waktu dengan dengan beban/tekanan pekerjaan sesuai standar', 'Hanya memiliki ketahanan kerja dengan beban/tekanan pekerjaan tanpa jadwal yang ketat');
INSERT INTO `aspek` VALUES ('14', '2', 'Ketelitian', 'Bekerja dengan cermat, hati-hati dan efisien', 'Sering membuat kesalahan yang tidak perlu dan kurang efisien');
INSERT INTO `aspek` VALUES ('15', '2', 'Inisiatif – Kemandirian', 'Mampu mengambil keputusan dan bertindak untuk menuntaskan tanggungjawab pekerjaannya tanpa pengawasan atasan', 'Masih memerlukan pengawasan yang ketat dari atasan');
INSERT INTO `aspek` VALUES ('16', '2', 'Kecepatan Kerja', 'Cepat dan efektif dalam menyelesaikan tugas, bekerja dengan teratur', 'Lambat dan kurang efektif dalam menyelesaikan tugas, irama kerja tidak ajeg');
INSERT INTO `aspek` VALUES ('17', '3', 'Kepercayaan Diri', 'Memiliki keyakinan terhadap kemampuan diri sendiri untuk menangani tugas atau pekerjaan, yang meliputi keyakinan diri dalam menerima tantangan tugas yang meningkat.', 'Kurang  memiliki keyakinan diri terhadap tugas yang diberikan sehingga kurang berani mengambil suatu keputusan');
INSERT INTO `aspek` VALUES ('18', '3', 'Pengendalian Emosi / Kematangan', 'Memiliki kemampuan untuk mengelola kehidupan emosi sehingga dapat tampil terkendali serta tidak kehilangan keseimbangan diri', 'Kurang stabil dalam mengelola kehidupan emosi sehingga tampil kurang terkendali serta kehilangan keseimbangan diri');
INSERT INTO `aspek` VALUES ('19', '3', 'Kerjasama', 'Aktif dan berpartisipasi dalam kelompok, kooperatif, peka dengan kepentingan kelompok, tetap produktif dalam tim kerja', 'Pasif dan tidak peka dengan kepentingan kelompok sehingga kurang produktif dalam tim kerja');
INSERT INTO `aspek` VALUES ('20', '3', 'Penyesuaian Diri', 'Fleksibel dan mampu memelihara keseimbangan antara pemenuhan kebutuhan pribadi dengan tuntutan (norma) lingkungan', 'Memiliki cara tersendiri yang kurang selaras dengan tuntutan (norma) lingkungan');
INSERT INTO `aspek` VALUES ('21', '3', 'Hubungan Sosial', 'Senang dan mudah bergaul serta mampu memelihara hubungan dengan orang lain, perduli terhadap kebutuhan orang lain', 'Hanya menjalin hubungan dengan orang lain secara terbatas dan kurang perduli terhadap kebutuhan orang lain');
INSERT INTO `aspek` VALUES ('22', '3', 'Komitmen Organisasi', 'Memiliki kemauan dan kemampuan untuk menyelaraskan perilaku dirinya dengan perilaku organisasional', 'Kurang memiliki kemauan dan kemampuan untuk menyelaraskan diri dengan organisasinya');
INSERT INTO `aspek` VALUES ('23', '3', 'Integritas ', 'Memiliki keinginan untuk menyesuaikan diri, bertindak konsisten, jujur dan bertanggung jawab sesuai kebijakan dan aturan perusahaan', 'Memiliki keinginan untuk menyesuaikan diri, bertindak konsisten, jujur dan bertanggung jawab sesuai kebijakan dan aturan perusahaan');
INSERT INTO `aspek` VALUES ('24', '4', 'Kepemimpinan', 'Memiliki kemampuan untuk membuat orang lain melaksanakan atau berlaku atau bertindak sesuai dengan yang diinginkan atau diharapkan', 'Kurang memiliki kemampuan untuk membuat orang lain dapat bertindak atau melaksanakan sesuai dengan apa yang diharapkan');
INSERT INTO `aspek` VALUES ('25', '4', 'Delegasi', 'Mampu membagi otorisasi keputusan dan/atau tanggung jawab tugas kepada orang yang tepat untuk memaksimalkan efektivitas individu atau organisasi', 'Kurang mampu membagi otorisasi keputusan dan tanggungjawab kepada orang yang tepat untuk memaksimalkan efektivitas individu atau organisasi');
INSERT INTO `aspek` VALUES ('26', '4', 'Pengembangan Bawahan', 'Mampu merencanakan dan mendukung pengembangan ketrampilan dan kemampuan anggota untuk memenuhi kebutuhan saat ini maupun di masa mendatang', 'Kurang mampu merencakan dan mendukung pengembangan ketrampilan dan kemampuan anggota dalam memenuhi kebutuhan saat ini atau masa yang akan datang');
INSERT INTO `aspek` VALUES ('27', '4', 'Mengelola Konflik', 'Memiliki kemampuan untuk mengelola dan memecahkan perselisihan akibat perbedaan persepsi, pendapat, gagasan atau kepentingan', 'Kurang memiliki kemampuan mengelola dan memecahkan perselisihan akibat perbedaan persepsi, pendapat, gagasan atau kepentingan');
INSERT INTO `aspek` VALUES ('28', '4', 'Pengambilan Keputusan', 'Mampu mengidentifikasi dan memahami isu/problem/kesempatan; membandingkan data dari sumber yang berbeda-beda untuk memetakan konklusi; menggunakan pendekatan yang efektif untuk memilih tindakan atau mengembangkan solusi-solusi yang memungkinkan; memutuskan pilihan tindakan yang konsisten dengan kenyataan, batasan dan konsekwensi', 'Kurang mampu untuk mengidentifikasi dan memahami isu.problem/kesempatan; membandingkan data dari sumber yg berbeda untuk memetakan konklusi; menggunakan pendekatan yg efektif untuk memilih tindakan atau mengembangkan solusi yg memungkinkan untuk memutuskan pilihan tindakan yang konsisten dengan kenyataan dan konsekwensi');

-- ----------------------------
-- Table structure for `aspek_psikogram`
-- ----------------------------
DROP TABLE IF EXISTS `aspek_psikogram`;
CREATE TABLE `aspek_psikogram` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_aspek` bigint(11) NOT NULL,
  `standart` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aspek_psikogram
-- ----------------------------

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Kemampuan Intelektual');
INSERT INTO `kategori` VALUES ('2', 'Sikap Kerja');
INSERT INTO `kategori` VALUES ('3', 'Kepribadian');
INSERT INTO `kategori` VALUES ('4', 'Kepemimpinan');

-- ----------------------------
-- Table structure for `perhitungan`
-- ----------------------------
DROP TABLE IF EXISTS `perhitungan`;
CREATE TABLE `perhitungan` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_item_subtest` bigint(11) NOT NULL,
  `id_aspek` bigint(11) NOT NULL,
  `total_nilai` decimal(19,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of perhitungan
-- ----------------------------

-- ----------------------------
-- Table structure for `skala`
-- ----------------------------
DROP TABLE IF EXISTS `skala`;
CREATE TABLE `skala` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of skala
-- ----------------------------
INSERT INTO `skala` VALUES ('1', '1');
INSERT INTO `skala` VALUES ('2', '2');
INSERT INTO `skala` VALUES ('3', '3');
INSERT INTO `skala` VALUES ('4', '4');
INSERT INTO `skala` VALUES ('5', '5');
INSERT INTO `skala` VALUES ('6', '6');
INSERT INTO `skala` VALUES ('7', '7');
INSERT INTO `skala` VALUES ('8', '8');
INSERT INTO `skala` VALUES ('9', '9');

-- ----------------------------
-- Table structure for `standart_aspek`
-- ----------------------------
DROP TABLE IF EXISTS `standart_aspek`;
CREATE TABLE `standart_aspek` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_aspek` bigint(11) NOT NULL,
  `nama_standart` varchar(50) NOT NULL,
  `nilai_standart` int(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `standart` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of standart_aspek
-- ----------------------------

-- ----------------------------
-- Table structure for `subtest`
-- ----------------------------
DROP TABLE IF EXISTS `subtest`;
CREATE TABLE `subtest` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_skala` bigint(11) NOT NULL,
  `id_testee` bigint(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subtest
-- ----------------------------
INSERT INTO `subtest` VALUES ('1', '1', '0', 'abc');

-- ----------------------------
-- Table structure for `subtestee_testee`
-- ----------------------------
DROP TABLE IF EXISTS `subtestee_testee`;
CREATE TABLE `subtestee_testee` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id_skala` bigint(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `iq` int(10) NOT NULL,
  `se` int(10) NOT NULL,
  `wa` int(10) NOT NULL,
  `an` int(10) NOT NULL,
  `ge` int(10) NOT NULL,
  `ra` int(10) NOT NULL,
  `zr` int(10) NOT NULL,
  `fa` int(10) NOT NULL,
  `wu` int(10) NOT NULL,
  `me` int(10) NOT NULL,
  `g` int(10) NOT NULL,
  `l` int(10) NOT NULL,
  `i` int(10) NOT NULL,
  `t` int(10) NOT NULL,
  `v` int(10) NOT NULL,
  `s` int(10) NOT NULL,
  `r` int(10) NOT NULL,
  `d` int(10) NOT NULL,
  `c` int(10) NOT NULL,
  `e` int(10) NOT NULL,
  `n` int(10) NOT NULL,
  `a` int(10) NOT NULL,
  `p` int(10) NOT NULL,
  `x` int(10) NOT NULL,
  `b` int(10) NOT NULL,
  `o` int(10) NOT NULL,
  `z` int(10) NOT NULL,
  `k` int(10) NOT NULL,
  `f` int(10) NOT NULL,
  `w` int(10) NOT NULL,
  `mot` int(10) NOT NULL,
  `ini` int(10) NOT NULL,
  `pd` int(10) NOT NULL,
  `emo` int(10) NOT NULL,
  `ses` int(10) NOT NULL,
  `sos` int(10) NOT NULL,
  `pat` int(10) NOT NULL,
  `tel` int(10) NOT NULL,
  `han` int(10) NOT NULL,
  `jeg` int(10) NOT NULL,
  `msdt` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subtestee_testee
-- ----------------------------
INSERT INTO `subtestee_testee` VALUES ('1', '2', 'Helmi S', '5', '6', '5', '6', '3', '5', '5', '5', '4', '6', '2', '3', '3', '0', '1', '5', '5', '5', '3', '1', '4', '3', '3', '1', '2', '2', '5', '4', '2', '3', '5', '4', '3', '2', '4', '4', '2', '3', '2', '2', '2');
INSERT INTO `subtestee_testee` VALUES ('271', '1', 'Suhes', '5', '6', '5', '0', '3', '5', '5', '5', '4', '6', '2', '3', '3', '0', '1', '5', '5', '5', '3', '1', '4', '3', '3', '1', '2', '2', '5', '4', '2', '3', '5', '4', '3', '2', '4', '4', '2', '3', '2', '2', '2');

-- ----------------------------
-- Table structure for `testee`
-- ----------------------------
DROP TABLE IF EXISTS `testee`;
CREATE TABLE `testee` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of testee
-- ----------------------------
INSERT INTO `testee` VALUES ('4', 'iema', '2016-11-23', '0', 'surabaya', 'diploma', 'swasta', '123');
INSERT INTO `testee` VALUES ('5', 'taufiq', '2016-11-30', '0', 'rungkut surabaya', 'diploma', 'swasta', '1234567890');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', 'admin');
