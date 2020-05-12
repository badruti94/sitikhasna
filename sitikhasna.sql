/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.8-MariaDB : Database - sitikhasna
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sitikhasna` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sitikhasna`;

/*Table structure for table `pengajuan` */

DROP TABLE IF EXISTS `pengajuan`;

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `keperluan` text DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pengajuan`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengajuan` */

insert  into `pengajuan`(`id_pengajuan`,`id_user`,`nama`,`alamat`,`no_hp`,`email`,`jabatan`,`keperluan`,`status`) values 
(7,3,'Adi','jl kenari','0898','andq@pnc.ac.id','tidak punya','tidak ada','Sudah Disetujui'),
(8,3,'Adi','jl kenari','0898','and@pnc.ac.id','tidak punya','tidak ada','Belum Disetujui'),
(9,3,'Catchus','jl kenari','0898','ca@pnc.ac.id','Ketua Kelas','Buat PMW','Sudah Disetujui'),
(10,3,'Catchus','jl kenari','0898','badruakfm@gmail.com','Ketua Kelas','Buat PMW','Belum Disetujui'),
(11,3,'Catchu','jl kenari','088xx','abc@gmail.com','Mahasiswa','Buat PMW','Sudah Disetujui'),
(12,3,'Andi SS','jl kenari','088xx','08980936892','Ketua Kelas','Buat PMW','Sudah Disetujui'),
(13,4,'Kazuto','jl kenari','0898','kazuto@pnc.ac.id','Mahasiswa','Buat PMW','Belum Disetujui');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`level`) values 
(1,'admin','admin','admin'),
(3,'rain32','123','dosen'),
(4,'kazuto12','123','dosen');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
