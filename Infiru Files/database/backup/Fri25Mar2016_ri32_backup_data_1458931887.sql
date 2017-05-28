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

INSERT INTO administrator VALUES("1","Nurul Syafinnas Binti Mohd Jaafar","admin","21232f297a57a5a743894a0e4a801fc3","2016-03-26 02:49:33","2016-03-26 01:19:43","56ef956508525.n.png");
INSERT INTO administrator VALUES("3","Nazrul Hakim Bin Mat Wazir","nazrulamal96","49c7213e1650c50ac6f8234fd7fe6474","2016-03-26 02:33:23","2016-03-26 00:35:52","56f584ce5eb49.U.png");



DROP TABLE kalendar;

CREATE TABLE `kalendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kalendar` varchar(20) NOT NULL,
  `subjek` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO maklumat_slot VALUES("4","19-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","4","1");
INSERT INTO maklumat_slot VALUES("6","21-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","5","2");
INSERT INTO maklumat_slot VALUES("7","21-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","6","3");
INSERT INTO maklumat_slot VALUES("8","21-3-2016","Man Ana Man Anta","Kitab Minhajul Abidin","Ustaz Muhd Lotfi","7","4");
INSERT INTO maklumat_slot VALUES("9","29-3-2016","Man Ana Man Anta","Hari Kiamat","Ustaz Abdul Fatah","2","2");
INSERT INTO maklumat_slot VALUES("11","29-3-2016","Man Ana Man Anta","Hari Kiamat"," Ustaz Abdul Fatah ","1","1");
INSERT INTO maklumat_slot VALUES("12","31-3-2016","Man Ana Man Anta","Munafiq","   Ustaz Muhd Lotfi   ","8","1");
INSERT INTO maklumat_slot VALUES("13","31-3-2016","Man Ana Man Anta","Munafiq","Ustaz Muhd Lotfi","9","2");
INSERT INTO maklumat_slot VALUES("14","21-3-2016","Man Ana Man Anta","Hari Kiamat","Ustaz Abdul Fatah","3","3");
INSERT INTO maklumat_slot VALUES("16","31-3-2016","Man Ana Man Anta"," Munafiq "," Ustaz Muhd Lotfi ","11","4");
INSERT INTO maklumat_slot VALUES("17","21-3-2016","Man Ana Man Anta","Muhasabah Diri","Ustaz Ahmad Khairi","12","1");
INSERT INTO maklumat_slot VALUES("18","31-3-2016","Man Ana Man Anta","Muhasabah Diri"," Ustaz Ahmad Khairi ","13","2");
INSERT INTO maklumat_slot VALUES("19","22-3-2016","Man Ana Man Anta","Munafiq","Ustaz Muhd Lotfi","10","3");
INSERT INTO maklumat_slot VALUES("20","25-3-2016","Al Falah","Fastaqim","Ustaz Ahmad Khairi","1","1");
INSERT INTO maklumat_slot VALUES("22","16-3-2016","Al Falah","Wfwf\'","Ustaz Ahmad Khairi","0","none");



DROP TABLE slot;

CREATE TABLE `slot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_slot` varchar(50) DEFAULT NULL,
  `tarikh_mula` varchar(20) DEFAULT NULL,
  `tarikh_akhir` varchar(20) NOT NULL,
  `poster` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO slot VALUES("9","Al Falah","2015-3-11","2016-4-29","56f554f5499ac.a.png");
INSERT INTO slot VALUES("11","Man Ana Man Anta","2015-2-27","2016-5-31","56f36cce3b958.p.png");
INSERT INTO slot VALUES("12","Syifa\'ul Qalbu","2016-3-25","2017-1-1","56f55a08334e6.S.png");
INSERT INTO slot VALUES("13","Tazkiratul Iman","2015-9-1","2016-5-28","56f567fc99f46.T.png");
INSERT INTO slot VALUES("14","Alhamdulillah","2015-3-1","2015-10-20","56f568b580174.A.png");
INSERT INTO slot VALUES("15","Kufiah Putih","2015-9-1","2015-10-29","56f5691561509.K.png");
INSERT INTO slot VALUES("16","Darul Ilmu","2015-4-16","2015-9-23","56f5695cf35c2.D.png");
INSERT INTO slot VALUES("17","Ilham Ilmu","2015-11-19","2016-3-22","56f569a496199.I.png");
INSERT INTO slot VALUES("18","Fi Kuliyyah Musim 2","2015-5-28","2015-7-21","56f569d815cce.F.png");
INSERT INTO slot VALUES("19","Indah Iman","2014-8-1","2014-11-30","56f569fce082c.i.png");
INSERT INTO slot VALUES("20","An Najah","2016-1-1","2016-2-29","56f56a189efea.A.png");
INSERT INTO slot VALUES("21","Fis Silmi","2015-4-18","2015-8-17","56f56b091839b.P.png");



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
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

INSERT INTO upload_file VALUES("58","Man Ana Man Anta","2016-03-25","Sinopsis Slot Man Ana Man Anta Episod","docx","18174","Infiru Files/document/Sinopsis Slot Man Ana Man Anta Episod.docx","Sinopsis Slot Man Ana Man Anta Episod.docx");
INSERT INTO upload_file VALUES("53","Al Falah","2016-03-25","Sinopsis Slot Al Falah Episod 1","docx","18174","Infiru Files/document/Sinopsis Slot Al Falah Episod 1.docx","Sinopsis Slot Al Falah Episod 1.docx");



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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;




