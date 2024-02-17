/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_karyawan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_karyawan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_karyawan`;

/*Table structure for table `tb_karyawan` */

DROP TABLE IF EXISTS `tb_karyawan`;

CREATE TABLE `tb_karyawan` (
  `no` smallint(3) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  `gaji` int(10) DEFAULT NULL,
  `tunjangan` float DEFAULT NULL,
  `gaji_bersih` int(10) DEFAULT NULL,
  PRIMARY KEY (`nik`),
  KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_karyawan` */

insert  into `tb_karyawan`(`no`,`nik`,`nama_karyawan`,`jabatan`,`tgl_masuk`,`divisi`,`gaji`,`tunjangan`,`gaji_bersih`) values 
(1,'17300001','Bintaro','Technical Support','2019-06-10','Staff',9000000,0.15,10350000),
(2,'17300002','Hafif','Technical Support','2019-06-07','Umum',12000000,0.1,13200000),
(3,'17300003','Mas Untoro','Technical Support','2019-06-11','Staff',10000000,0.2,12000000),
(4,'17300004','Komeng','Accounting','2019-07-22','Staff',15000000,0.13,16950000),
(5,'17300005','Nunung','Accounting','2011-09-02','Manager',20000000,0.23,24600000);

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `level` enum('admin','user','superuser') DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`no`,`nik`,`nama_karyawan`,`level`,`password`) values 
(1,'101651016','admin','admin','admin');

/* Trigger structure for table `tb_karyawan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `gajiBih` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `gajiBih` BEFORE INSERT ON `tb_karyawan` FOR EACH ROW 
	SET new.gaji_bersih = new.gaji + (new.gaji * new.tunjangan) */$$


DELIMITER ;

/* Trigger structure for table `tb_karyawan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `gajiBersih` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `gajiBersih` BEFORE UPDATE ON `tb_karyawan` FOR EACH ROW 
	SET new.gaji_bersih = new.gaji + (new.gaji * new.tunjangan) */$$


DELIMITER ;

/* Procedure structure for procedure `tampilData` */

/*!50003 DROP PROCEDURE IF EXISTS  `tampilData` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `tampilData`()
SELECT * FROM tb_karyawan */$$
DELIMITER ;

/* Procedure structure for procedure `tampilgaji` */

/*!50003 DROP PROCEDURE IF EXISTS  `tampilgaji` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `tampilgaji`()
select nik,nama_karyawan,gaji,tunjangan,gaji_bersih from tb_karyawan */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
