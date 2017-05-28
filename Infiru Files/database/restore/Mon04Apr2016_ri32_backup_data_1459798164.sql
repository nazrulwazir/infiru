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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO administrator VALUES("1","Nurul Syafinnas Binti Mohd Jaafar","admin","21232f297a57a5a743894a0e4a801fc3","2016-04-05 03:27:31","2016-03-16 10:40:11","56e66eb13815e.N.png");



DROP TABLE kalendar;

CREATE TABLE `kalendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kalendar` varchar(20) NOT NULL,
  `subjek` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

INSERT INTO kalendar VALUES("1","3-3-2016","Ustaz Abdul Fatah","Masjid An Naim \n10.00 Pagi \nMuslimat");
INSERT INTO kalendar VALUES("2","3-3-2016","Ceramah Mega Teluk Intan","");
INSERT INTO kalendar VALUES("4","7-3-2016","Ustaz Muhammad","Sdj Desa Bakti\nMaghrib");
INSERT INTO kalendar VALUES("5","8-3-2016","Ustaz Lutfi","Sdj Taman Cicely\nMaghrib");
INSERT INTO kalendar VALUES("6","8-3-2016","Ustaz Khairi","S. Desa Aman\nMaghrib");
INSERT INTO kalendar VALUES("7","9-3-2016","Ustaz Abdul Fatah","Sdj Desa Bakti\nMaghrib\n");
INSERT INTO kalendar VALUES("8","10-3-2016","Ustaz Abdul Fatah","Masjid An Naim \n10.00 Pagi \nMuslimat");
INSERT INTO kalendar VALUES("9","17-3-2016","Ustaz Abdul Fatah","Masjid An Naim \n10.00 Pagi \nMuslimat");
INSERT INTO kalendar VALUES("10","24-3-2016","Ustaz Abdul Fatah","Masjid An Naim \n10.00 Pagi \nMuslimat");
INSERT INTO kalendar VALUES("11","31-3-2016","Ustaz Abdul Fatah","Masjid An Naim \n10.00 Pagi \nMuslimat");
INSERT INTO kalendar VALUES("12","10-3-2016","Ustaz Abdul Fatah","Sdj Taman Cicely\n5.30 (muslimat)");
INSERT INTO kalendar VALUES("13","10-3-2016","Ustaz Abdul Fatah","Masjid Nurul Hijrah\nMaghrib");
INSERT INTO kalendar VALUES("14","11-3-2016","Ustaz Khairi","Masjid Jamek Langkap\nMaghrib\n\n\n");
INSERT INTO kalendar VALUES("15","11-3-2016","Ustaz Faisal","Sdj Taman Cicely\nMaghrib\n");
INSERT INTO kalendar VALUES("16","14-3-2016","Ustaz Abdul Fatah","Sdj Taman Cicely\n5.30 (muslimat)");
INSERT INTO kalendar VALUES("17","21-3-2016","Ustaz Abdul Fatah","Sdj Taman Cicely\n5.30 (muslimat)");
INSERT INTO kalendar VALUES("19","14-3-2016","Ustaz Muhammad","Masjid Nurul Hijrah");
INSERT INTO kalendar VALUES("20","12-3-2016","Ustaz Muhammad","Tali Air 6\nMaghrib");
INSERT INTO kalendar VALUES("21","12-3-2016","Ustaz Muhammad","Surau Al Mudathir\nSubuh\n");
INSERT INTO kalendar VALUES("22","14-3-2016","Ustaz Fatah","Masjid Langkap\n9.00 Pagi Muslimat");
INSERT INTO kalendar VALUES("23","21-3-2016","Ustaz Muhammad","Masjid Langkap\nMaghrib");
INSERT INTO kalendar VALUES("24","28-3-2016","Ustaz Rizal","Masjid Nurul Hijrah\nMaghrib");
INSERT INTO kalendar VALUES("25","15-3-2016","Ustaz Lutfi","Masjid Parit 2b\n9.00 Pagi");
INSERT INTO kalendar VALUES("26","15-3-2016","Ustaz Muhammad","Tali Air 6\nMaghrib");
INSERT INTO kalendar VALUES("27","29-3-2016","Ustaz Ahmad Khairi","Sdj Taman Cicely\nMaghrib");
INSERT INTO kalendar VALUES("28","27-3-2016","Ustaz Abdul Fatah","Sdj Taman Cicely");
INSERT INTO kalendar VALUES("29","16-3-2016","Ustaz Muhammad","Masjid Ayer Tawar Maghrib\n");
INSERT INTO kalendar VALUES("30","18-3-2016","Ustaz Muhammad","Desa Aman \nMaghrib");
INSERT INTO kalendar VALUES("31","19-3-2016","Ustaz Muhammad","Sdj Desa Bakti\nMaghrib");
INSERT INTO kalendar VALUES("32","22-3-2016","Ustaz Ahmad Khairi","Desa Aman\nMaghrib");
INSERT INTO kalendar VALUES("33","23-3-2016","Ustaz Abdul Fatah","Desa Aman\nMaghrib");
INSERT INTO kalendar VALUES("34","24-3-2016","Ustaz Abdul Fatah","Taman Melor\nMaghrib");
INSERT INTO kalendar VALUES("35","20-3-2016","Ustaz Muhammad","Taman Cicely\nSubuh");
INSERT INTO kalendar VALUES("36","1-4-2016","Ustaz Muhammad","Masjid Langkap - Maghrib\n");
INSERT INTO kalendar VALUES("37","17-4-2016","Ustaz Muhammad","Taman Cicely - Subuh");
INSERT INTO kalendar VALUES("38","29-4-2016","Ustaz Ahmad Khairi","Taman Cicely - Maghrib");
INSERT INTO kalendar VALUES("39","4-4-2016","Ustaz Fatah","Masjid Makmur - Maghrib");
INSERT INTO kalendar VALUES("40","4-4-2016","Ustaz Muhammad","Desa Bakti - Maghrib");
INSERT INTO kalendar VALUES("41","6-4-2016","Ustaz Lutfi","Masjid Daerah - Maghrib");
INSERT INTO kalendar VALUES("42","7-4-2016","Ustaz Abdul Fatah","Masjid An Naim - 10.00 Am");
INSERT INTO kalendar VALUES("43","14-4-2016","Ustaz Abdul Fatah","Masjid An Naim - 10.00 Am");
INSERT INTO kalendar VALUES("44","21-4-2016","Ustaz Abdul Fatah","Masjid An Naim - 10.00 Am");
INSERT INTO kalendar VALUES("45","28-4-2016","Ustaz Abdul Fatah","Masjid An Naim - 10.00 Am");
INSERT INTO kalendar VALUES("46","14-4-2016","Ustaz Abdul Fatah","Taman Cicely - 5.30 Pm");
INSERT INTO kalendar VALUES("47","8-4-2016","Ustaz Ahmad Khairi","Masjid Jamek Langkap - Maghrib");
INSERT INTO kalendar VALUES("48","8-4-2016","Ustaz Faisal","Taman Cicely - Maghrib");
INSERT INTO kalendar VALUES("49","15-4-2016","Ustaz Muhammad","Desa Aman - Maghrib");
INSERT INTO kalendar VALUES("50","14-4-2016","Ustaz Abdul Fatah","Masjid Nurul Hijrah - Maghrib");
INSERT INTO kalendar VALUES("51","28-4-2016","Ustaz Abdul Fatah","Taman Melor - Maghrib");
INSERT INTO kalendar VALUES("52","13-4-2016","Ustaz Abdul Fatah","Desa Bakti - Maghrib");
INSERT INTO kalendar VALUES("53","27-4-2016","Ustaz Abdul Fatah","Desa Aman - Maghrib");
INSERT INTO kalendar VALUES("54","12-4-2016","Ustaz Lutfi","Taman Cicely - Maghrib");
INSERT INTO kalendar VALUES("55","12-4-2016","Ustaz Ahmad Khairi","Desa Aman - Maghrib");
INSERT INTO kalendar VALUES("56","26-4-2016","Ustaz Ahmad Khairi","Desa Aman - Maghrib");
INSERT INTO kalendar VALUES("57","11-4-2016","Ustaz Abdul Fatah","Masjid Langkap - 9.00 Am");
INSERT INTO kalendar VALUES("58","11-4-2016","Ustaz Abdul Fatah","Taman Cicely - 5.30 Pm ");
INSERT INTO kalendar VALUES("59","11-4-2016","Ustaz Muhammad","Masjid Nurul Hijrah");
INSERT INTO kalendar VALUES("60","18-4-2016","Ustaz Abdul Fatah","Taman Cicely - 5.30 Pm");
INSERT INTO kalendar VALUES("61","18-4-2016","Ustaz Muhammad","Masjid Langkap - Maghrib");
INSERT INTO kalendar VALUES("62","25-4-2016","Ustaz Abdul Fatah","Taman Cicely - 5.30 Pm");
INSERT INTO kalendar VALUES("63","24-4-2016","Ustaz Abdul Fatah","Taman Cicely - Subuh");
INSERT INTO kalendar VALUES("64","16-4-2016","Ustaz Muhammad","Desa Bakti - Maghrib");



DROP TABLE maklumat_slot;

CREATE TABLE `maklumat_slot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tarikh` varchar(20) NOT NULL,
  `nama_slot` varchar(50) DEFAULT NULL,
  `tajuk_kuliah` varchar(50) DEFAULT NULL,
  `penceramah` varchar(50) DEFAULT NULL,
  `sinopsis` varchar(300) DEFAULT NULL,
  `episod` int(10) DEFAULT NULL,
  `bahagian` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO maklumat_slot VALUES("1","","Sinar Islam","Akhlaq & Sifat-sifat Yang Mesti Bagi Pemimpin (bah","Ustaz Ahmad Khairi","","1","1");
INSERT INTO maklumat_slot VALUES("2","2016-04-04","At Tilmeez","Test","Ustaz Abdul Fattah Bin Awang","Slot At Tilmeez Episod 1 akan menjelaskan sedikit mukaddimah penting dalam setiap rukun Islam yang wajib kita ketahui. Pengacara memberikan penerangan yang mudah dan ringkas sebagai panduan kepada penonton dalam mendalami ilmu fardhu kifayah ini.","1","1");



DROP TABLE slot;

CREATE TABLE `slot` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_slot` varchar(50) DEFAULT NULL,
  `tarikh_mula` varchar(20) DEFAULT NULL,
  `tarikh_akhir` varchar(20) NOT NULL,
  `poster` varchar(30) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO slot VALUES("2","At Tilmeez","2016-3-29","2016-5-10","5702bc8907a71.A.png","5702bc890ff43.S.png");
INSERT INTO slot VALUES("3","Kufiah Putih","9-3-2016","1-6-2016","56e66db5302bf.K.png","");
INSERT INTO slot VALUES("4","Ilham Ilmu","16-2-2016","10-5-2016","56e66e29487f7.I.png","");
INSERT INTO slot VALUES("5","An Najah","6-3-2016","29-5-2016","56e66dc938c09.A.png","");
INSERT INTO slot VALUES("6","Tazkiratul Iman","3-3-2016","2-6-2016","56e66de044caf.T.png","");
INSERT INTO slot VALUES("7","Indah Iman","20-2-2016","14-5-2016","56e66e1d04b31.i.png","");
INSERT INTO slot VALUES("8","Alhamdulillah","5-1-2016","22-3-2016","56e90a8a14dd2.S.png","");
INSERT INTO slot VALUES("15","Darul Ilmu Musim Kedua","2016-1-13","2016-4-6","5702bd71cb0ad.D.png","");
INSERT INTO slot VALUES("16","Al Falah Musim Ke-2","2015-2-2","2016-2-24","56e673fbee555.f.png","");
INSERT INTO slot VALUES("17","Fis Silmi","2015-11-21","2016-2-13","56e6747ca2016.P.png","");
INSERT INTO slot VALUES("18","Man Ana Man Anta","2015-11-20","2016-2-12","56e674d2dc56a.m.png","");
INSERT INTO slot VALUES("19","Fi Kuliyyah","2015-7-19","2015-10-10","56e8cdc64dcff.P.png","");
INSERT INTO slot VALUES("20","Darul Ilmu","2016-7-27","2016-10-19","5702bdacd5a1e.D.png","5702bdacd7d46.D.png");
INSERT INTO slot VALUES("21","Syukran La Ka","2015-1-1","2015-3-23","56e8d283d818b.S.png","");
INSERT INTO slot VALUES("22","Lensa Kuliah","2015-1-1","2015-1-25","56e8d2ccba98c.L.png","");
INSERT INTO slot VALUES("23","Al Falah","2015-1-16","2015-4-10","56e8d30830ffb.A.png","");
INSERT INTO slot VALUES("24","Syifaul Qalbu","2015-12-16","2016-2-28","56e8d61ecf032.s.png","");
INSERT INTO slot VALUES("25","Lensa Kuliah 3","3-9-2015","26-11-2015","56e8d6ebe0c4b.L.png","");
INSERT INTO slot VALUES("26","Syukran La Ka Musim 2","2015-6-7","2015-8-30","56e8d8695f92e.S.png","");
INSERT INTO slot VALUES("27","Lensa Kuliah Musim 2","2015-3-30","2016-6-22","56e9073d97e4e.L.png","");
INSERT INTO slot VALUES("28","Maal Ilmu","2015-1-1","2015-2-2","56e8d9f0189d2.M.png","");
INSERT INTO slot VALUES("29","Sinar Islam","1-1-2015","2-1-2015","56e8da6d84528.S.png","");
INSERT INTO slot VALUES("30","Fi Kuliyyah Musim 2","2016-1-14","2016-4-7","56e9115944a4b.S.png","");



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
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;

INSERT INTO upload_file VALUES("6","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 1","doc","256512","Infiru Files/document/Sinopsis Sinar Islam Episod 1.doc","Sinopsis Sinar Islam Episod 1.doc");
INSERT INTO upload_file VALUES("7","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 2","doc","257536","Infiru Files/document/Sinopsis Sinar Islam Episod 2.doc","Sinopsis Sinar Islam Episod 2.doc");
INSERT INTO upload_file VALUES("8","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 3","doc","257536","Infiru Files/document/Sinopsis Sinar Islam Episod 3.doc","Sinopsis Sinar Islam Episod 3.doc");
INSERT INTO upload_file VALUES("9","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 4","doc","257536","Infiru Files/document/Sinopsis Sinar Islam Episod 4.doc","Sinopsis Sinar Islam Episod 4.doc");
INSERT INTO upload_file VALUES("10","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 5","doc","258048","Infiru Files/document/Sinopsis Sinar Islam Episod 5.doc","Sinopsis Sinar Islam Episod 5.doc");
INSERT INTO upload_file VALUES("11","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 6","doc","257536","Infiru Files/document/Sinopsis Sinar Islam Episod 6.doc","Sinopsis Sinar Islam Episod 6.doc");
INSERT INTO upload_file VALUES("12","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 7","doc","257536","Infiru Files/document/Sinopsis Sinar Islam Episod 7.doc","Sinopsis Sinar Islam Episod 7.doc");
INSERT INTO upload_file VALUES("13","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 8","doc","258560","Infiru Files/document/Sinopsis Sinar Islam Episod 8.doc","Sinopsis Sinar Islam Episod 8.doc");
INSERT INTO upload_file VALUES("14","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 9","doc","258560","Infiru Files/document/Sinopsis Sinar Islam Episod 9.doc","Sinopsis Sinar Islam Episod 9.doc");
INSERT INTO upload_file VALUES("15","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 10","doc","259072","Infiru Files/document/Sinopsis Sinar Islam Episod 10.doc","Sinopsis Sinar Islam Episod 10.doc");
INSERT INTO upload_file VALUES("16","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 11","doc","258560","Infiru Files/document/Sinopsis Sinar Islam Episod 11.doc","Sinopsis Sinar Islam Episod 11.doc");
INSERT INTO upload_file VALUES("18","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 12","doc","259072","Infiru Files/document/Sinopsis Sinar Islam Episod 12.doc","Sinopsis Sinar Islam Episod 12.doc");
INSERT INTO upload_file VALUES("19","Sinar Islam","2016-03-16","Sinopsis Sinar Islam Episod 13","doc","259072","Infiru Files/document/Sinopsis Sinar Islam Episod 13.doc","Sinopsis Sinar Islam Episod 13.doc");
INSERT INTO upload_file VALUES("20","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 1","doc","202240","Infiru Files/document/Sinopsis Syukran La Ka Episod 1.doc","Sinopsis Syukran La Ka Episod 1.doc");
INSERT INTO upload_file VALUES("21","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 2","doc","202240","Infiru Files/document/Sinopsis Syukran La Ka Episod 2.doc","Sinopsis Syukran La Ka Episod 2.doc");
INSERT INTO upload_file VALUES("22","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 3","doc","202240","Infiru Files/document/Sinopsis Syukran La Ka Episod 3.doc","Sinopsis Syukran La Ka Episod 3.doc");
INSERT INTO upload_file VALUES("23","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 4","doc","202752","Infiru Files/document/Sinopsis Syukran La Ka Episod 4.doc","Sinopsis Syukran La Ka Episod 4.doc");
INSERT INTO upload_file VALUES("24","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 5","doc","202752","Infiru Files/document/Sinopsis Syukran La Ka Episod 5.doc","Sinopsis Syukran La Ka Episod 5.doc");
INSERT INTO upload_file VALUES("25","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 6","doc","202752","Infiru Files/document/Sinopsis Syukran La Ka Episod 6.doc","Sinopsis Syukran La Ka Episod 6.doc");
INSERT INTO upload_file VALUES("26","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 7","doc","202752","Infiru Files/document/Sinopsis Syukran La Ka Episod 7.doc","Sinopsis Syukran La Ka Episod 7.doc");
INSERT INTO upload_file VALUES("27","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 8","doc","202752","Infiru Files/document/Sinopsis Syukran La Ka Episod 8.doc","Sinopsis Syukran La Ka Episod 8.doc");
INSERT INTO upload_file VALUES("28","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 9","doc","202240","Infiru Files/document/Sinopsis Syukran La Ka Episod 9.doc","Sinopsis Syukran La Ka Episod 9.doc");
INSERT INTO upload_file VALUES("29","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 10","doc","202240","Infiru Files/document/Sinopsis Syukran La Ka Episod 10.doc","Sinopsis Syukran La Ka Episod 10.doc");
INSERT INTO upload_file VALUES("30","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 11","doc","202752","Infiru Files/document/Sinopsis Syukran La Ka Episod 11.doc","Sinopsis Syukran La Ka Episod 11.doc");
INSERT INTO upload_file VALUES("31","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 12","doc","202752","Infiru Files/document/Sinopsis Syukran La Ka Episod 12.doc","Sinopsis Syukran La Ka Episod 12.doc");
INSERT INTO upload_file VALUES("32","Syukran La Ka","2016-03-16","Sinopsis Syukran La Ka Episod 13","doc","202240","Infiru Files/document/Sinopsis Syukran La Ka Episod 13.doc","Sinopsis Syukran La Ka Episod 13.doc");
INSERT INTO upload_file VALUES("33","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 1","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 1.doc","Sinopsis Lensa Kuliah Episod 1.doc");
INSERT INTO upload_file VALUES("34","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 2","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 2.doc","Sinopsis Lensa Kuliah Episod 2.doc");
INSERT INTO upload_file VALUES("35","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 3","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 3.doc","Sinopsis Lensa Kuliah Episod 3.doc");
INSERT INTO upload_file VALUES("36","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 4","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 4.doc","Sinopsis Lensa Kuliah Episod 4.doc");
INSERT INTO upload_file VALUES("37","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 5","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 5.doc","Sinopsis Lensa Kuliah Episod 5.doc");
INSERT INTO upload_file VALUES("38","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 6","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 6.doc","Sinopsis Lensa Kuliah Episod 6.doc");
INSERT INTO upload_file VALUES("39","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 7","doc","183296","Infiru Files/document/Sinopsis Lensa Kuliah Episod 7.doc","Sinopsis Lensa Kuliah Episod 7.doc");
INSERT INTO upload_file VALUES("40","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 8","doc","183296","Infiru Files/document/Sinopsis Lensa Kuliah Episod 8.doc","Sinopsis Lensa Kuliah Episod 8.doc");
INSERT INTO upload_file VALUES("41","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 9","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 9.doc","Sinopsis Lensa Kuliah Episod 9.doc");
INSERT INTO upload_file VALUES("42","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 10","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 10.doc","Sinopsis Lensa Kuliah Episod 10.doc");
INSERT INTO upload_file VALUES("43","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 11","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 11.doc","Sinopsis Lensa Kuliah Episod 11.doc");
INSERT INTO upload_file VALUES("44","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 12","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 12.doc","Sinopsis Lensa Kuliah Episod 12.doc");
INSERT INTO upload_file VALUES("45","Lensa Kuliah","2016-03-16","Sinopsis Lensa Kuliah Episod 13","doc","182784","Infiru Files/document/Sinopsis Lensa Kuliah Episod 13.doc","Sinopsis Lensa Kuliah Episod 13.doc");
INSERT INTO upload_file VALUES("46","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 1","docx","102878","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 1.docx","Sinopsis Darul Ilmu Musim 2 Episod 1.docx");
INSERT INTO upload_file VALUES("48","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 2","docx","102687","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 2.docx","Sinopsis Darul Ilmu Musim 2 Episod 2.docx");
INSERT INTO upload_file VALUES("49","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 3","docx","102711","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 3.docx","Sinopsis Darul Ilmu Musim 2 Episod 3.docx");
INSERT INTO upload_file VALUES("50","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 4","docx","102879","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 4.docx","Sinopsis Darul Ilmu Musim 2 Episod 4.docx");
INSERT INTO upload_file VALUES("51","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 5","docx","103318","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 5.docx","Sinopsis Darul Ilmu Musim 2 Episod 5.docx");
INSERT INTO upload_file VALUES("52","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 6","docx","103374","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 6.docx","Sinopsis Darul Ilmu Musim 2 Episod 6.docx");
INSERT INTO upload_file VALUES("53","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 7","docx","103320","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 7.docx","Sinopsis Darul Ilmu Musim 2 Episod 7.docx");
INSERT INTO upload_file VALUES("54","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 8","docx","103436","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 8.docx","Sinopsis Darul Ilmu Musim 2 Episod 8.docx");
INSERT INTO upload_file VALUES("55","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 9","docx","830947","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 9.docx","Sinopsis Darul Ilmu Musim 2 Episod 9.docx");
INSERT INTO upload_file VALUES("56","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 10","docx","831000","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 10.docx","Sinopsis Darul Ilmu Musim 2 Episod 10.docx");
INSERT INTO upload_file VALUES("57","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 11","docx","831028","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 11.docx","Sinopsis Darul Ilmu Musim 2 Episod 11.docx");
INSERT INTO upload_file VALUES("58","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 12","docx","831033","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 12.docx","Sinopsis Darul Ilmu Musim 2 Episod 12.docx");
INSERT INTO upload_file VALUES("59","Darul Ilmu Musim Kedua","2016-03-16","Sinopsis Darul Ilmu Musim 2 Episod 13","docx","831042","Infiru Files/document/Sinopsis Darul Ilmu Musim 2 Episod 13.docx","Sinopsis Darul Ilmu Musim 2 Episod 13.docx");
INSERT INTO upload_file VALUES("60","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 1","docx","868580","Infiru Files/document/Sinopsis Ilham Ilmu Episod 1.docx","Sinopsis Ilham Ilmu Episod 1.docx");
INSERT INTO upload_file VALUES("61","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 2","docx","868377","Infiru Files/document/Sinopsis Ilham Ilmu Episod 2.docx","Sinopsis Ilham Ilmu Episod 2.docx");
INSERT INTO upload_file VALUES("62","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 3","docx","868478","Infiru Files/document/Sinopsis Ilham Ilmu Episod 3.docx","Sinopsis Ilham Ilmu Episod 3.docx");
INSERT INTO upload_file VALUES("63","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 4","docx","868480","Infiru Files/document/Sinopsis Ilham Ilmu Episod 4.docx","Sinopsis Ilham Ilmu Episod 4.docx");
INSERT INTO upload_file VALUES("64","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 5","docx","868416","Infiru Files/document/Sinopsis Ilham Ilmu Episod 5.docx","Sinopsis Ilham Ilmu Episod 5.docx");
INSERT INTO upload_file VALUES("65","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 6","docx","868381","Infiru Files/document/Sinopsis Ilham Ilmu Episod 6.docx","Sinopsis Ilham Ilmu Episod 6.docx");
INSERT INTO upload_file VALUES("66","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 7","docx","867390","Infiru Files/document/Sinopsis Ilham Ilmu Episod 7.docx","Sinopsis Ilham Ilmu Episod 7.docx");
INSERT INTO upload_file VALUES("67","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 8","docx","867464","Infiru Files/document/Sinopsis Ilham Ilmu Episod 8.docx","Sinopsis Ilham Ilmu Episod 8.docx");
INSERT INTO upload_file VALUES("68","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 9","docx","866026","Infiru Files/document/Sinopsis Ilham Ilmu Episod 9.docx","Sinopsis Ilham Ilmu Episod 9.docx");
INSERT INTO upload_file VALUES("69","Ilham Ilmu","2016-03-16","Sinopsis Ilham Ilmu Episod 10","docx","866083","Infiru Files/document/Sinopsis Ilham Ilmu Episod 10.docx","Sinopsis Ilham Ilmu Episod 10.docx");
INSERT INTO upload_file VALUES("70","Fi Kuliyyah","2016-03-16","Sinopsis Fi Kuliyyah Episod 8","doc","714752","Infiru Files/document/Sinopsis Fi Kuliyyah Episod 8.doc","Sinopsis Fi Kuliyyah Episod 8.doc");
INSERT INTO upload_file VALUES("71","Fi Kuliyyah","2016-03-16","Sinopsis Fi Kuliyyah Episod 9","doc","714752","Infiru Files/document/Sinopsis Fi Kuliyyah Episod 9.doc","Sinopsis Fi Kuliyyah Episod 9.doc");
INSERT INTO upload_file VALUES("72","Fi Kuliyyah","2016-03-16","Sinopsis Fi Kuliyyah Episod 10","doc","715264","Infiru Files/document/Sinopsis Fi Kuliyyah Episod 10.doc","Sinopsis Fi Kuliyyah Episod 10.doc");
INSERT INTO upload_file VALUES("73","Fi Kuliyyah","2016-03-16","Sinopsis Fi Kuliyyah Episod 11","doc","715264","Infiru Files/document/Sinopsis Fi Kuliyyah Episod 11.doc","Sinopsis Fi Kuliyyah Episod 11.doc");
INSERT INTO upload_file VALUES("74","Fi Kuliyyah","2016-03-16","Sinopsis Fi Kuliyyah Episod 12","doc","715776","Infiru Files/document/Sinopsis Fi Kuliyyah Episod 12.doc","Sinopsis Fi Kuliyyah Episod 12.doc");
INSERT INTO upload_file VALUES("75","Fi Kuliyyah","2016-03-16","Sinopsis Fi Kuliyyah Episod 13","doc","715264","Infiru Files/document/Sinopsis Fi Kuliyyah Episod 13.doc","Sinopsis Fi Kuliyyah Episod 13.doc");
INSERT INTO upload_file VALUES("76","Al Falah Musim Ke-2","2016-03-16","Sinopsis Al Falah Musim 2 Episod 1","doc","1119232","Infiru Files/document/Sinopsis Al Falah Musim 2 Episod 1.doc","Sinopsis Al Falah Musim 2 Episod 1.doc");
INSERT INTO upload_file VALUES("77","Al Falah Musim Ke-2","2016-03-16","Sinopsis Al Falah Musim 2 Episod 2","doc","1119232","Infiru Files/document/Sinopsis Al Falah Musim 2 Episod 2.doc","Sinopsis Al Falah Musim 2 Episod 2.doc");
INSERT INTO upload_file VALUES("78","Al Falah Musim Ke-2","2016-03-16","Sinopsis Al Falah Musim 2 Episod 3","doc","1119232","Infiru Files/document/Sinopsis Al Falah Musim 2 Episod 3.doc","Sinopsis Al Falah Musim 2 Episod 3.doc");
INSERT INTO upload_file VALUES("79","Al Falah Musim Ke-2","2016-03-16","Sinopsis Al Falah Musim 2 Episod 4","doc","1119744","Infiru Files/document/Sinopsis Al Falah Musim 2 Episod 4.doc","Sinopsis Al Falah Musim 2 Episod 4.doc");
INSERT INTO upload_file VALUES("80","Al Falah Musim Ke-2","2016-03-16","Sinopsis Al Falah Musim 2 Episod 5","doc","1119744","Infiru Files/document/Sinopsis Al Falah Musim 2 Episod 5.doc","Sinopsis Al Falah Musim 2 Episod 5.doc");
INSERT INTO upload_file VALUES("81","Al Falah Musim Ke-2","2016-03-16","Sinopsis Al Falah Musim 2 Episod 6","doc","1119744","Infiru Files/document/Sinopsis Al Falah Musim 2 Episod 6.doc","Sinopsis Al Falah Musim 2 Episod 6.doc");
INSERT INTO upload_file VALUES("82","Al Falah Musim Ke-2","2016-03-16","Sinopsis Al Falah Musim 2 Episod 7","doc","1119232","Infiru Files/document/Sinopsis Al Falah Musim 2 Episod 7.doc","Sinopsis Al Falah Musim 2 Episod 7.doc");
INSERT INTO upload_file VALUES("83","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 1","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 1.doc","Sinopsis Man Ana Man Anta Episod 1.doc");
INSERT INTO upload_file VALUES("84","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 2","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 2.doc","Sinopsis Man Ana Man Anta Episod 2.doc");
INSERT INTO upload_file VALUES("85","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 3","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 3.doc","Sinopsis Man Ana Man Anta Episod 3.doc");
INSERT INTO upload_file VALUES("86","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 4","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 4.doc","Sinopsis Man Ana Man Anta Episod 4.doc");
INSERT INTO upload_file VALUES("87","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 5","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 5.doc","Sinopsis Man Ana Man Anta Episod 5.doc");
INSERT INTO upload_file VALUES("88","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 6","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 6.doc","Sinopsis Man Ana Man Anta Episod 6.doc");
INSERT INTO upload_file VALUES("89","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 7","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 7.doc","Sinopsis Man Ana Man Anta Episod 7.doc");
INSERT INTO upload_file VALUES("90","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 8","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 8.doc","Sinopsis Man Ana Man Anta Episod 8.doc");
INSERT INTO upload_file VALUES("91","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 9","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 9.doc","Sinopsis Man Ana Man Anta Episod 9.doc");
INSERT INTO upload_file VALUES("92","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 10","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 10.doc","Sinopsis Man Ana Man Anta Episod 10.doc");
INSERT INTO upload_file VALUES("93","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 11","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 11.doc","Sinopsis Man Ana Man Anta Episod 11.doc");
INSERT INTO upload_file VALUES("94","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 12","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 12.doc","Sinopsis Man Ana Man Anta Episod 12.doc");
INSERT INTO upload_file VALUES("95","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta Episod 13","doc","409088","Infiru Files/document/Sinopsis Man Ana Man Anta Episod 13.doc","Sinopsis Man Ana Man Anta Episod 13.doc");
INSERT INTO upload_file VALUES("96","Man Ana Man Anta","2016-03-16","Sinopsis Man Ana Man Anta (umum)","docx","11911","Infiru Files/document/Sinopsis Man Ana Man Anta (umum).docx","Sinopsis Man Ana Man Anta (umum).docx");
INSERT INTO upload_file VALUES("97","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 1","docx","103371","Infiru Files/document/Sinopsis Indah Iman Episod 1.docx","Sinopsis Indah Iman Episod 1.docx");
INSERT INTO upload_file VALUES("98","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 2","docx","759298","Infiru Files/document/Sinopsis Indah Iman Episod 2.docx","Sinopsis Indah Iman Episod 2.docx");
INSERT INTO upload_file VALUES("99","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 3","docx","759308","Infiru Files/document/Sinopsis Indah Iman Episod 3.docx","Sinopsis Indah Iman Episod 3.docx");
INSERT INTO upload_file VALUES("100","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 4","docx","759359","Infiru Files/document/Sinopsis Indah Iman Episod 4.docx","Sinopsis Indah Iman Episod 4.docx");
INSERT INTO upload_file VALUES("101","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 5","docx","759378","Infiru Files/document/Sinopsis Indah Iman Episod 5.docx","Sinopsis Indah Iman Episod 5.docx");
INSERT INTO upload_file VALUES("102","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 6","docx","759362","Infiru Files/document/Sinopsis Indah Iman Episod 6.docx","Sinopsis Indah Iman Episod 6.docx");
INSERT INTO upload_file VALUES("103","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 7","docx","759419","Infiru Files/document/Sinopsis Indah Iman Episod 7.docx","Sinopsis Indah Iman Episod 7.docx");
INSERT INTO upload_file VALUES("104","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 8","docx","759445","Infiru Files/document/Sinopsis Indah Iman Episod 8.docx","Sinopsis Indah Iman Episod 8.docx");
INSERT INTO upload_file VALUES("105","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 9","docx","759299","Infiru Files/document/Sinopsis Indah Iman Episod 9.docx","Sinopsis Indah Iman Episod 9.docx");
INSERT INTO upload_file VALUES("106","Indah Iman","2016-03-16","Sinopsis Indah Iman Episod 10","docx","759446","Infiru Files/document/Sinopsis Indah Iman Episod 10.docx","Sinopsis Indah Iman Episod 10.docx");
INSERT INTO upload_file VALUES("107","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 1","doc","750080","Infiru Files/document/Sinopsis Fis Silmi Episod 1.doc","Sinopsis Fis Silmi Episod 1.doc");
INSERT INTO upload_file VALUES("108","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 2","doc","750592","Infiru Files/document/Sinopsis Fis Silmi Episod 2.doc","Sinopsis Fis Silmi Episod 2.doc");
INSERT INTO upload_file VALUES("109","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 3","doc","750592","Infiru Files/document/Sinopsis Fis Silmi Episod 3.doc","Sinopsis Fis Silmi Episod 3.doc");
INSERT INTO upload_file VALUES("110","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 4","doc","751104","Infiru Files/document/Sinopsis Fis Silmi Episod 4.doc","Sinopsis Fis Silmi Episod 4.doc");
INSERT INTO upload_file VALUES("111","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 5","doc","751104","Infiru Files/document/Sinopsis Fis Silmi Episod 5.doc","Sinopsis Fis Silmi Episod 5.doc");
INSERT INTO upload_file VALUES("112","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 6","doc","751104","Infiru Files/document/Sinopsis Fis Silmi Episod 6.doc","Sinopsis Fis Silmi Episod 6.doc");
INSERT INTO upload_file VALUES("113","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 7","doc","751616","Infiru Files/document/Sinopsis Fis Silmi Episod 7.doc","Sinopsis Fis Silmi Episod 7.doc");
INSERT INTO upload_file VALUES("114","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 8","doc","751616","Infiru Files/document/Sinopsis Fis Silmi Episod 8.doc","Sinopsis Fis Silmi Episod 8.doc");
INSERT INTO upload_file VALUES("115","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 9","doc","751616","Infiru Files/document/Sinopsis Fis Silmi Episod 9.doc","Sinopsis Fis Silmi Episod 9.doc");
INSERT INTO upload_file VALUES("116","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 10","doc","751104","Infiru Files/document/Sinopsis Fis Silmi Episod 10.doc","Sinopsis Fis Silmi Episod 10.doc");
INSERT INTO upload_file VALUES("117","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 11","doc","751616","Infiru Files/document/Sinopsis Fis Silmi Episod 11.doc","Sinopsis Fis Silmi Episod 11.doc");
INSERT INTO upload_file VALUES("118","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 12","doc","751616","Infiru Files/document/Sinopsis Fis Silmi Episod 12.doc","Sinopsis Fis Silmi Episod 12.doc");
INSERT INTO upload_file VALUES("119","Fis Silmi","2016-03-16","Sinopsis Fis Silmi Episod 13","doc","751616","Infiru Files/document/Sinopsis Fis Silmi Episod 13.doc","Sinopsis Fis Silmi Episod 13.doc");
INSERT INTO upload_file VALUES("120","Tazkiratul Iman","2016-03-16","Sinopsis  Tazkiratul Iman Episod 1","docx","287145","Infiru Files/document/Sinopsis  Tazkiratul Iman Episod 1.docx","Sinopsis  Tazkiratul Iman Episod 1.docx");
INSERT INTO upload_file VALUES("121","Tazkiratul Iman","2016-03-16","Sinopsis Tazkiratul Iman Episod 2","docx","287223","Infiru Files/document/Sinopsis Tazkiratul Iman Episod 2.docx","Sinopsis Tazkiratul Iman Episod 2.docx");
INSERT INTO upload_file VALUES("122","Tazkiratul Iman","2016-03-16","Sinopsis Tazkiratul Iman Episod 3","docx","287268","Infiru Files/document/Sinopsis Tazkiratul Iman Episod 3.docx","Sinopsis Tazkiratul Iman Episod 3.docx");
INSERT INTO upload_file VALUES("123","Tazkiratul Iman","2016-03-16","Sinopsis Tazkiratul Iman Episod 4","docx","288868","Infiru Files/document/Sinopsis Tazkiratul Iman Episod 4.docx","Sinopsis Tazkiratul Iman Episod 4.docx");
INSERT INTO upload_file VALUES("124","Tazkiratul Iman","2016-03-16","Sinopsis Tazkiratul Iman Episod 5","docx","287037","Infiru Files/document/Sinopsis Tazkiratul Iman Episod 5.docx","Sinopsis Tazkiratul Iman Episod 5.docx");
INSERT INTO upload_file VALUES("125","Tazkiratul Iman","2016-03-16","Sinopsis Tazkiratul Iman Episod 6","docx","288830","Infiru Files/document/Sinopsis Tazkiratul Iman Episod 6.docx","Sinopsis Tazkiratul Iman Episod 6.docx");
INSERT INTO upload_file VALUES("126","Tazkiratul Iman","2016-03-16","Sinopsis Tazkiratul Iman Episod 7","docx","287305","Infiru Files/document/Sinopsis Tazkiratul Iman Episod 7.docx","Sinopsis Tazkiratul Iman Episod 7.docx");
INSERT INTO upload_file VALUES("127","Tazkiratul Iman","2016-03-16","Sinopsis Tazkiratul Iman Episod 8","docx","287325","Infiru Files/document/Sinopsis Tazkiratul Iman Episod 8.docx","Sinopsis Tazkiratul Iman Episod 8.docx");
INSERT INTO upload_file VALUES("128","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.o Episod 1","doc","1070592","Infiru Files/document/Sinopsis Lensa Kuliah 3.o Episod 1.doc","Sinopsis Lensa Kuliah 3.o Episod 1.doc");
INSERT INTO upload_file VALUES("129","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.o Episod 2","doc","1070592","Infiru Files/document/Sinopsis Lensa Kuliah 3.o Episod 2.doc","Sinopsis Lensa Kuliah 3.o Episod 2.doc");
INSERT INTO upload_file VALUES("130","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 3","doc","1070080","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 3.doc","Sinopsis Lensa Kuliah 3.0 Episod 3.doc");
INSERT INTO upload_file VALUES("131","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 4","doc","1070080","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 4.doc","Sinopsis Lensa Kuliah 3.0 Episod 4.doc");
INSERT INTO upload_file VALUES("132","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 5","doc","1077760","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 5.doc","Sinopsis Lensa Kuliah 3.0 Episod 5.doc");
INSERT INTO upload_file VALUES("133","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 6","doc","1077760","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 6.doc","Sinopsis Lensa Kuliah 3.0 Episod 6.doc");
INSERT INTO upload_file VALUES("135","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 7","doc","1077248","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 7.doc","Sinopsis Lensa Kuliah 3.0 Episod 7.doc");
INSERT INTO upload_file VALUES("136","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 8","doc","1077248","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 8.doc","Sinopsis Lensa Kuliah 3.0 Episod 8.doc");
INSERT INTO upload_file VALUES("137","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 9","doc","1077248","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 9.doc","Sinopsis Lensa Kuliah 3.0 Episod 9.doc");
INSERT INTO upload_file VALUES("138","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 10","doc","1077248","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 10.doc","Sinopsis Lensa Kuliah 3.0 Episod 10.doc");
INSERT INTO upload_file VALUES("139","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 11","doc","1077248","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 11.doc","Sinopsis Lensa Kuliah 3.0 Episod 11.doc");
INSERT INTO upload_file VALUES("140","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 12","doc","1077248","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 12.doc","Sinopsis Lensa Kuliah 3.0 Episod 12.doc");
INSERT INTO upload_file VALUES("141","Lensa Kuliah 3","2016-03-16","Sinopsis Lensa Kuliah 3.0 Episod 13","doc","1077760","Infiru Files/document/Sinopsis Lensa Kuliah 3.0 Episod 13.doc","Sinopsis Lensa Kuliah 3.0 Episod 13.doc");
INSERT INTO upload_file VALUES("142","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 1","doc","321024","Infiru Files/document/Sinopsis Alhamdulillah Episod 1.doc","Sinopsis Alhamdulillah Episod 1.doc");
INSERT INTO upload_file VALUES("143","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 2","doc","320512","Infiru Files/document/Sinopsis Alhamdulillah Episod 2.doc","Sinopsis Alhamdulillah Episod 2.doc");
INSERT INTO upload_file VALUES("144","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 3","doc","321536","Infiru Files/document/Sinopsis Alhamdulillah Episod 3.doc","Sinopsis Alhamdulillah Episod 3.doc");
INSERT INTO upload_file VALUES("145","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 4","doc","321024","Infiru Files/document/Sinopsis Alhamdulillah Episod 4.doc","Sinopsis Alhamdulillah Episod 4.doc");
INSERT INTO upload_file VALUES("146","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 5","docx","305830","Infiru Files/document/Sinopsis Alhamdulillah Episod 5.docx","Sinopsis Alhamdulillah Episod 5.docx");
INSERT INTO upload_file VALUES("147","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 6","docx","305773","Infiru Files/document/Sinopsis Alhamdulillah Episod 6.docx","Sinopsis Alhamdulillah Episod 6.docx");
INSERT INTO upload_file VALUES("148","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 7","docx","306100","Infiru Files/document/Sinopsis Alhamdulillah Episod 7.docx","Sinopsis Alhamdulillah Episod 7.docx");
INSERT INTO upload_file VALUES("149","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 8","docx","306161","Infiru Files/document/Sinopsis Alhamdulillah Episod 8.docx","Sinopsis Alhamdulillah Episod 8.docx");
INSERT INTO upload_file VALUES("150","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 10","docx","306210","Infiru Files/document/Sinopsis Alhamdulillah Episod 10.docx","Sinopsis Alhamdulillah Episod 10.docx");
INSERT INTO upload_file VALUES("151","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 11","docx","306267","Infiru Files/document/Sinopsis Alhamdulillah Episod 11.docx","Sinopsis Alhamdulillah Episod 11.docx");
INSERT INTO upload_file VALUES("152","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 12","docx","306383","Infiru Files/document/Sinopsis Alhamdulillah Episod 12.docx","Sinopsis Alhamdulillah Episod 12.docx");
INSERT INTO upload_file VALUES("153","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 13","docx","306293","Infiru Files/document/Sinopsis Alhamdulillah Episod 13.docx","Sinopsis Alhamdulillah Episod 13.docx");
INSERT INTO upload_file VALUES("154","Alhamdulillah","2016-03-16","Sinopsis Alhamdulillah Episod 9","docx","306235","Infiru Files/document/Sinopsis Alhamdulillah Episod 9.docx","Sinopsis Alhamdulillah Episod 9.docx");
INSERT INTO upload_file VALUES("155","An Najah","2016-03-16","Sinopsis An Najah Episod 1","docx","270783","Infiru Files/document/Sinopsis An Najah Episod 1.docx","Sinopsis An Najah Episod 1.docx");
INSERT INTO upload_file VALUES("156","An Najah","2016-03-16","Sinopsis An Najah Episod 2","docx","270680","Infiru Files/document/Sinopsis An Najah Episod 2.docx","Sinopsis An Najah Episod 2.docx");
INSERT INTO upload_file VALUES("157","An Najah","2016-03-16","Sinopsis An Najah Episod 3","docx","270782","Infiru Files/document/Sinopsis An Najah Episod 3.docx","Sinopsis An Najah Episod 3.docx");
INSERT INTO upload_file VALUES("158","An Najah","2016-03-16","Sinopsis An Najah Episod 4","docx","270784","Infiru Files/document/Sinopsis An Najah Episod 4.docx","Sinopsis An Najah Episod 4.docx");
INSERT INTO upload_file VALUES("159","An Najah","2016-03-16","Sinopsis An Najah Episod 5","docx","270798","Infiru Files/document/Sinopsis An Najah Episod 5.docx","Sinopsis An Najah Episod 5.docx");
INSERT INTO upload_file VALUES("160","An Najah","2016-03-16","Sinopsis An Najah Episod 6","docx","270896","Infiru Files/document/Sinopsis An Najah Episod 6.docx","Sinopsis An Najah Episod 6.docx");
INSERT INTO upload_file VALUES("161","An Najah","2016-03-16","Sinopsis An Najah Episod 7","docx","270944","Infiru Files/document/Sinopsis An Najah Episod 7.docx","Sinopsis An Najah Episod 7.docx");
INSERT INTO upload_file VALUES("162","An Najah","2016-03-16","Sinopsis An Najah Episod 8","docx","270943","Infiru Files/document/Sinopsis An Najah Episod 8.docx","Sinopsis An Najah Episod 8.docx");
INSERT INTO upload_file VALUES("163","Syukran La Ka Musim 2","2016-03-16","Sinopsis Syukran La Ka Musim 2 Episod 10","doc","854528","Infiru Files/document/Sinopsis Syukran La Ka Musim 2 Episod 10.doc","Sinopsis Syukran La Ka Musim 2 Episod 10.doc");
INSERT INTO upload_file VALUES("164","Syukran La Ka Musim 2","2016-03-16","Sinopsis Syukran La Ka Musim 2 Episod 11","doc","854528","Infiru Files/document/Sinopsis Syukran La Ka Musim 2 Episod 11.doc","Sinopsis Syukran La Ka Musim 2 Episod 11.doc");
INSERT INTO upload_file VALUES("165","Syukran La Ka Musim 2","2016-03-16","Sinopsis Syukran La Ka Musim 2 Episod 12","doc","855040","Infiru Files/document/Sinopsis Syukran La Ka Musim 2 Episod 12.doc","Sinopsis Syukran La Ka Musim 2 Episod 12.doc");
INSERT INTO upload_file VALUES("166","Syukran La Ka Musim 2","2016-03-16","Sinopsis Syukran La Ka Musim 2 Episod 13","doc","855552","Infiru Files/document/Sinopsis Syukran La Ka Musim 2 Episod 13.doc","Sinopsis Syukran La Ka Musim 2 Episod 13.doc");
INSERT INTO upload_file VALUES("167","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 1","docx","340709","Infiru Files/document/Sinopsis Kufiah Putih Episod 1.docx","Sinopsis Kufiah Putih Episod 1.docx");
INSERT INTO upload_file VALUES("168","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 2","docx","340809","Infiru Files/document/Sinopsis Kufiah Putih Episod 2.docx","Sinopsis Kufiah Putih Episod 2.docx");
INSERT INTO upload_file VALUES("169","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 3","docx","340846","Infiru Files/document/Sinopsis Kufiah Putih Episod 3.docx","Sinopsis Kufiah Putih Episod 3.docx");
INSERT INTO upload_file VALUES("170","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 4","docx","340857","Infiru Files/document/Sinopsis Kufiah Putih Episod 4.docx","Sinopsis Kufiah Putih Episod 4.docx");
INSERT INTO upload_file VALUES("171","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 5","docx","340589","Infiru Files/document/Sinopsis Kufiah Putih Episod 5.docx","Sinopsis Kufiah Putih Episod 5.docx");
INSERT INTO upload_file VALUES("172","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 6","docx","340763","Infiru Files/document/Sinopsis Kufiah Putih Episod 6.docx","Sinopsis Kufiah Putih Episod 6.docx");
INSERT INTO upload_file VALUES("173","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 7","docx","340838","Infiru Files/document/Sinopsis Kufiah Putih Episod 7.docx","Sinopsis Kufiah Putih Episod 7.docx");
INSERT INTO upload_file VALUES("174","Kufiah Putih","2016-03-16","Sinopsis Kufiah Putih Episod 8","docx","340860","Infiru Files/document/Sinopsis Kufiah Putih Episod 8.docx","Sinopsis Kufiah Putih Episod 8.docx");
INSERT INTO upload_file VALUES("176","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 1","doc","372224","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 1.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 1.doc");
INSERT INTO upload_file VALUES("177","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 2","doc","372224","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 2.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 2.doc");
INSERT INTO upload_file VALUES("178","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 3","doc","372736","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 3.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 3.doc");
INSERT INTO upload_file VALUES("179","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 4","doc","372224","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 4.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 4.doc");
INSERT INTO upload_file VALUES("180","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 5","doc","372736","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 5.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 5.doc");
INSERT INTO upload_file VALUES("181","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 6","doc","372224","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 6.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 6.doc");
INSERT INTO upload_file VALUES("182","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 7","doc","372736","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 7.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 7.doc");
INSERT INTO upload_file VALUES("183","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 8","doc","372224","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 8.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 8.doc");
INSERT INTO upload_file VALUES("184","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 9","doc","372736","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 9.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 9.doc");
INSERT INTO upload_file VALUES("185","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 10","doc","372736","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 10.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 10.doc");
INSERT INTO upload_file VALUES("186","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 11","doc","372736","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 11.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 11.doc");
INSERT INTO upload_file VALUES("187","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 12","doc","372736","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 12.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 12.doc");
INSERT INTO upload_file VALUES("188","Fi Kuliyyah Musim 2","2016-03-16","Sinopsis Fi Kuliyyah Musim 2 Episod 13","doc","372224","Infiru Files/document/Sinopsis Fi Kuliyyah Musim 2 Episod 13.doc","Sinopsis Fi Kuliyyah Musim 2 Episod 13.doc");
INSERT INTO upload_file VALUES("189","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 1","docx","268369","Infiru Files/document/Sinopsis At Tilmeez Episod 1.docx","Sinopsis At Tilmeez Episod 1.docx");
INSERT INTO upload_file VALUES("190","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 2","docx","268294","Infiru Files/document/Sinopsis At Tilmeez Episod 2.docx","Sinopsis At Tilmeez Episod 2.docx");
INSERT INTO upload_file VALUES("191","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 3","docx","268311","Infiru Files/document/Sinopsis At Tilmeez Episod 3.docx","Sinopsis At Tilmeez Episod 3.docx");
INSERT INTO upload_file VALUES("192","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 4","docx","268376","Infiru Files/document/Sinopsis At Tilmeez Episod 4.docx","Sinopsis At Tilmeez Episod 4.docx");
INSERT INTO upload_file VALUES("193","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 5","docx","268367","Infiru Files/document/Sinopsis At Tilmeez Episod 5.docx","Sinopsis At Tilmeez Episod 5.docx");
INSERT INTO upload_file VALUES("194","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 6","docx","269263","Infiru Files/document/Sinopsis At Tilmeez Episod 6.docx","Sinopsis At Tilmeez Episod 6.docx");
INSERT INTO upload_file VALUES("195","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 8","docx","269341","Infiru Files/document/Sinopsis At Tilmeez Episod 8.docx","Sinopsis At Tilmeez Episod 8.docx");
INSERT INTO upload_file VALUES("196","At Tilmeez","2016-03-16","Sinopsis At Tilmeez Episod 7","docx","269394","Infiru Files/document/Sinopsis At Tilmeez Episod 7.docx","Sinopsis At Tilmeez Episod 7.docx");



DROP TABLE upload_invois;

CREATE TABLE `upload_invois` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;




