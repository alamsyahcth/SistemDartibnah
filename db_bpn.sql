# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2018-02-15 21:27:32
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "detil_hak"
#

CREATE TABLE `detil_hak` (
  `no_daftar` char(8) NOT NULL DEFAULT '',
  `kd_hak` char(3) NOT NULL,
  `nomor` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`no_daftar`,`kd_hak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detil_hak"
#

INSERT INTO `detil_hak` VALUES ('PDPU0008','H02','dsadeedaedewd'),('PDPU0009','H01','wtewrt34636235326'),('PDPU0009','H02','34532462rt'),('PDPU0009','H03','34234242e'),('PDPU0010','H02','23/2016'),('PDPU0010','H03','23/2008');

#
# Structure for table "hak"
#

CREATE TABLE `hak` (
  `kd_hak` char(3) NOT NULL DEFAULT '',
  `jn_hak` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kd_hak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "hak"
#

INSERT INTO `hak` VALUES ('H01','Akta Jual Beli'),('H02','Akta Penjualan'),('H03','Akta Pembelian');

#
# Structure for table "pemohon"
#

CREATE TABLE `pemohon` (
  `no_daftar` char(8) NOT NULL DEFAULT '',
  `tgl_daftar` date DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` char(16) DEFAULT NULL,
  `wn` varchar(3) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `alamat_bidang` varchar(100) DEFAULT NULL,
  `alas_hak` varchar(50) DEFAULT NULL,
  `luas_tanah` int(4) DEFAULT NULL,
  `nop_pbb` char(24) DEFAULT NULL,
  `telepon` varchar(14) DEFAULT NULL,
  `koordinator` varchar(30) DEFAULT NULL,
  `kd_petugas` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`no_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pemohon"
#

INSERT INTO `pemohon` VALUES ('PDPU0001','2017-12-09','tono','Surabaya','2017-12-17','2534167283726172','WNA','jalan kostrad no45 rt 006 rw 07 kel petukangan utara','Jalan yang kemaren','Girik No : c 234',345,'31.71.011.005.0009.0','089764536475','muji hartono',NULL),('PDPU0002','2017-12-09','gunawan','Magelang','1960-12-29','2534167283726172','WNI','<label for=\"wn\" class=\"col-md-2 control-label\">Warga Negara</label>\r\n\t\t\t\t\t\t<div class=\"col-md-4\">\r\n\t','jalan swadarma','Girik No : 8329232348239820948',1200,'31.71.011.005.0009.0','089764536475','04/FAHMI',NULL),('PDPU0003','2017-12-09','Udin','jakarta','2017-12-12','2534167283726172','','jalan kostrad no45 rt 006 rw 07 kel petukangan utara','Jalan yang kemaren','Girik No : 09/2828/1010/23',1344,'31.71.011.005.0009.0','089765456765','04/FAHMI',NULL),('PDPU0004','2017-12-09','Udin','Jakarta','1990-06-06','1892837289019283','','Jalan Duku','jalan swadarma','Girik No : 09/2828/1010/23',4000,'31.71.011.005.0009.0','089765456765','04/FAHMI',NULL),('PDPU0005','2017-12-09','kusnaini','Jakarta','2017-12-19','1892837289019283','WNI','Jalan Raya','Jalan yang kemaren','Girik No : 8329232348239820948',1222,'31.71.011.005.0009.0','089765456765','04/FAHMI',NULL),('PDPU0006','2017-12-11','Dinda','Jakarta','2017-12-03','1892837289019283','WNI','Jalan Raya','jalan swadarma','Girik No : 856653555454353',1000,'31.71.011.005.656576676','089765456765','04/FAHMI',NULL),('PDPU0007','2018-02-14','Dini','Jakarta','2002-06-12','3174090803120006','','Jalan Kostrad No.3','Jalan Kostrad No.3','Girik No : 42423423412542',12,'31.71.011.005.321.2132','089764736253','joko',NULL),('PDPU0008','2018-02-14','Andi','Palembang','1994-03-10','3174078902890007','WNI','Jalan Masjid No.8','Jl.Masjid No.8','Girik No : 95495804234',14,'31.71.011.005.1290192','085767874565','joko',NULL),('PDPU0009','2018-02-14','Adhiba','Surabaya','1998-02-05','3174078902820003','WNI','Jl. H.Najih No.4','Jl.H.Najih No.4','Girik No : 5234524525234',16,'31.71.011.005.4242252312','089764736457','joko',NULL),('PDPU0010','2018-02-15','CARITEM','JAKARTA','1967-06-24','3174102406780002','WNI','Jalan Kostrad No.3','Jalan Kostrad No.3','Girik No : C.233.P24.B.DII',120,'31.71.011.005.','087699087765','HARRI',NULL);

#
# Structure for table "petugas"
#

CREATE TABLE `petugas` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `kata_rahasia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "petugas"
#

INSERT INTO `petugas` VALUES ('harianto','harianto','777988','harrykrm');
