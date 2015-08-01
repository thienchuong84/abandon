

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL auto_increment,
  `user` varchar(50) collate utf8_unicode_ci NOT NULL,
  `pass` varchar(50) collate utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci

GRANT ALL PRIVILEGES ON code.* TO remote_test@'%' IDENTIFIED BY 'dientu@%123456';

INSERT  INTO `user`(`idUser`,`user`,`pass`,`fullname`) VALUE (1,`admin`,`admin`,`Adminsitrator`);