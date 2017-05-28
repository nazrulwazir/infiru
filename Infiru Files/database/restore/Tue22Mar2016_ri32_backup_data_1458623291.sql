DROP TABLE administrator;

CREATE TABLE `administrator` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `uname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_login` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`uname`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO administrator VALUES("1","Nurul Syafinnas Binti Mohd Jaafar","admin","21232f297a57a5a743894a0e4a801fc3","2016-03-22 12:04:25","2016-03-21 14:47:41","56ef956508525.n.png");
INSERT INTO administrator VALUES("3","Nazrul Hakim Bin Mat Wazir","nazrulamal96","49c7213e1650c50ac6f8234fd7fe6474","2016-03-19 17:11:15","2016-03-19 02:49:47","56ecef5a1c474.N.png");



DROP TABLE kalendar;

CREATE TABLE `kalendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kalendar` varchar(20) NOT NULL,
  `subjek` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE maklumat_slot;

CREATE TABLE `maklumat_slot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tarikh` varchar(20) NOT NULL,
  `nama_slot` varchar(50) DEFAULT NULL,
  `tajuk_kuliah` varchar(50) DEFAULT NULL,
  `penceramah` varchar(50) DEFAULT NULL,
  `episod` int(10) DEFAULT NULL,
  `bahagian` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO maklumat_slot VALUES("4","19-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","4","1");
INSERT INTO maklumat_slot VALUES("6","21-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","5","2");
INSERT INTO maklumat_slot VALUES("7","21-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","6","3");
INSERT INTO maklumat_slot VALUES("8","21-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","7","4");
INSERT INTO maklumat_slot VALUES("9","29-3-2016","Man Ana Man Anta","Hari Kiamat","Ustaz Abdul Fatah","2","2");
INSERT INTO maklumat_slot VALUES("11","29-3-2016","Man Ana Man Anta","Hari Kiamat","Ustaz Abdul Fatah","1","1");
INSERT INTO maklumat_slot VALUES("12","31-3-2016","Man Ana Man Anta","Munafiq","  Ustaz Muhd Lotfi  ","8","1");
INSERT INTO maklumat_slot VALUES("13","31-3-2016","Man Ana Man Anta","Munafiq","Ustaz Muhd Lotfi","9","2");
INSERT INTO maklumat_slot VALUES("14","21-3-2016","Man Ana Man Anta","Hari Kiamat","Ustaz Abdul Fatah","3","3");
INSERT INTO maklumat_slot VALUES("16","31-3-2016","Man Ana Man Anta"," Munafiq ","Ustaz Muhd Lotfi","11","4");
INSERT INTO maklumat_slot VALUES("17","21-3-2016","Man Ana Man Anta","Muhasabah Diri","Ustaz Ahmad Khairi","12","1");
INSERT INTO maklumat_slot VALUES("18","31-3-2016","Man Ana Man Anta","Muhasabah Diri","Ustaz Ahmad Khairi","13","2");
INSERT INTO maklumat_slot VALUES("19","22-3-2016","Man Ana Man Anta","Munafiq","Ustaz Muhd Lotfi","10","3");



DROP TABLE slot;

CREATE TABLE `slot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_slot` varchar(50) DEFAULT NULL,
  `tarikh_mula` varchar(20) DEFAULT NULL,
  `tarikh_akhir` varchar(20) NOT NULL,
  `poster` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO slot VALUES("9","Fi Kuliyyah ","2015-3-11","2016-4-29","56eadefa5deec.f.png");
INSERT INTO slot VALUES("11","Man Ana Man Anta","2014-2-27","2016-5-31","56f01c5cde202.p.png");
INSERT INTO slot VALUES("14","An Najah","2015-3-1","2016-3-31","56ec2ee986a2d.A.png");



DROP TABLE upload_file;

CREATE TABLE `upload_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_slot` varchar(70) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;




DROP TABLE upload_invois;

CREATE TABLE `upload_invois` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_slot` varchar(70) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;




