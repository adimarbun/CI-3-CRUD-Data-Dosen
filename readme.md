Cara Menggunakan source code :

1.Pull source code
2.Create Database Kampus :

=======================
CREATE DATABASE `kampus`;
USE `kampus`;

CREATE TABLE `dosen` (
`IdDosen` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`Nama` varchar(150),
`JenisKelamin` varchar(20),
`Agama` varchar(30),
`NoHp` varchar(15),
`Email` varchar(150),
`JabatanFungsional` varchar(30),
`PendidikanTerakhir` varchar(11)
);

=========================



