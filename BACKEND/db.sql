/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.28-MariaDB : Database - db_kopikap
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kopikap` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_kopikap`;

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `Id_Kategori` varchar(10) NOT NULL,
  `Nama_Kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`Id_Kategori`,`Nama_Kategori`) values 
('K01','LAPTOP'),
('K02','MONITOR'),
('K03','PRINTER'),
('K04','MOUSE'),
('K05','KEYBOARD'),
('K06','SPEAKER'),
('K07','HEADSET'),
('K08','CATRIDGE'),
('K09','HARDISK'),
('K10','FLASHDISK'),
('K11','RAM'),
('K12','POWERSUPPLY'),
('K13','MOTHERBOARD'),
('K14','PROCESSOR'),
('K15','COOLER'),
('K16','CASINGPC'),
('K17','NETWORKADAPTER'),
('K18','WEBCAM');

/*Table structure for table `tbl_merek` */

DROP TABLE IF EXISTS `tbl_merek`;

CREATE TABLE `tbl_merek` (
  `Id_Merek` varchar(10) NOT NULL,
  `Nama_Merek` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Merek`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_merek` */

insert  into `tbl_merek`(`Id_Merek`,`Nama_Merek`) values 
('M01','ASUS'),
('M02','ACER'),
('M03','TOSHIBA'),
('M04','MSI'),
('M05','APPLE'),
('M06','SAMSUNG'),
('M07','HP'),
('M08','LENOVO');

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `Id_Produk` varchar(10) NOT NULL,
  `Nama_Produk` varchar(100) DEFAULT NULL,
  `Harga` varchar(25) DEFAULT NULL,
  `Stok_Produk` varchar(10) DEFAULT NULL,
  `Spesifikasi` varchar(100) DEFAULT NULL,
  `Foto_Produk` varchar(100) DEFAULT NULL,
  `Kategori` varchar(25) DEFAULT NULL,
  `Merek` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id_Produk`),
  KEY `Merek` (`Merek`),
  KEY `Kategori` (`Kategori`),
  CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`Merek`) REFERENCES `tbl_merek` (`Id_Merek`),
  CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`Kategori`) REFERENCES `tbl_kategori` (`Id_Kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`Id_Produk`,`Nama_Produk`,`Harga`,`Stok_Produk`,`Spesifikasi`,`Foto_Produk`,`Kategori`,`Merek`) values 
('P01','AAUS','464654','87','JKHK','JHKQ','K01','M01'),
('P02','MONITOR ACER','RP 120.000','4','Original','sds','K02','M02'),
('P03','KEYBOARD','RP 80.000','9','ORIGINAL','SS','K05','M04'),
('P04','MOUSE TOSHIBA','RP 150.000','7','ORIGINAL','KK','K04','M03'),
('P05','PRINTER SAMSUNG','RP 3.000.000','3','ORIGINAL','--','K03','M06'),
('P06','SPEAKER SAMSUNG','RP 2.500.000','5','SECOND','KK','K06','M06'),
('P07','HEADSET HP','RP 500.000','8','ORIGINAL','OP','K07','M07'),
('P08','CATRIDGE ACER','RP 300.000','9','SECOND','LL','K08','M02'),
('P09','HARDISK APPLE','RP 3.500.000','2','ORIGINAL','UU','K09','M05'),
('P10','FLASHDISK TOSHIBA','RP 200.000','8','SECOND','EE','K10','M03'),
('P11','RAM 4 GB ASUS','RP 250.000','3','ORIGINAL','OO','K11','M01'),
('P12','POWERSUPPLY LENOVO','RP 280.000','7','ORIGINAL','HH','K12','M08'),
('P13','MOTHERBOARD MSI','RP 4.000.000','2','ORIGINAL','UU','K13','M04'),
('P14','PROCESSOR TOSHIBA','RP 2.000.000','4','ORIGINAL','YY','K14','M03'),
('P15','COOLER ASUS','RP 440.000','3','SECOND','F','K15','M01'),
('P16','CASINGPC APPLE','RP 300.000','2','SECOND','LL','K16','M05'),
('P17','NETWORKADAPTER SAMSUNG','RP 700.000','9','ORIGINAL','EE','K17','M06'),
('P18','WEBCAM MSI','RP 3.200.000','4','ORIGINAL','WW','K18','M04');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `Id_User` varchar(10) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
