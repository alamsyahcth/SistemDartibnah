# Host: localhost  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2018-07-23 23:16:34
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

INSERT INTO `detil_hak` VALUES ('PDPU0002','H01','465/2014'),('PDPU0002','H02','12/1999');

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

INSERT INTO `hak` VALUES ('H01','AKTA TANAH'),('H02','AKTA WARIS'),('H03','AKTA TANAH');

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

INSERT INTO `pemohon` VALUES ('PDPU0002','2018-07-23','santo','jakarta','1994-12-14','6475897635467653','WNI','Jalan Kostrad No.80','Jalan Kostrad No.80','Girik No : C 1267',150,'31.71.011.005.023-0014.0','089767879087','Harry',NULL);

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

INSERT INTO `petugas` VALUES ('bisri','bisri','aufa','bolang'),('harianto','harianto','777988','harrykrm'),('jonyaja','jony','5679','hanakafie');
