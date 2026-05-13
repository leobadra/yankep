-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_timkeryankep
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_akun`
--

DROP TABLE IF EXISTS `data_akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `unit_kerja` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_akun`
--

/*!40000 ALTER TABLE `data_akun` DISABLE KEYS */;
INSERT INTO `data_akun` VALUES (1,'Sarvita Dewi, S.Kp., M.Kep','196910231995032001','Manajer Timkeryankep','Timker Yankep','7d9ba793254b81f4ab513ea14f2963dd'),(2,'Huzaimah, S.Kep., Ners','196908251993032002','Asisten Manajer Rawat Inap','Timker Yankep','113b6783ab88d8e162d02ac6ad7d1104'),(3,'Rike Khoirunnisa, S.Kep., Ners','198001012007012034','MPP','Timker Yankep','695d2dd0067a4b8c874da8d5d0613add'),(4,'Eti Sismihastuti, S.Kep., Ners','196808151989012001','MPP','Timker Yankep','ea39b51056c07324bcf21b80ad3f96fe'),(5,'Evi Aulia, S.Kep., Ners., ETN','197603021999032001','PM II : Analis','Timker Yankep','aeafa7d49f5a6eb873cf151f04e5a238'),(6,'Sri Herni Wigiarti, S.Kep., Ners., M.Kep','197701012000032002','Asisten Manajer Rawat Jalan','Timker Yankep','38cbea65767be0fa894243dd5638109a'),(7,'Eka Handayani, S.Kep., Ners','197601312000032002','PM II : Analis','Timker Yankep','cfb3a524a6647f04a942419d4b77d063'),(8,'Puji Lestari, S.Kep., Ners','197201101995032001','Perawat pendidik','Timker Yankep','c8ad0dc89492c463a507a8c74338e965'),(9,'Sari Asri, S.Kep., Ners','196808201990032002','Ketua Komite Keperawatan','Timker Yankep','c1d03253bb102ab24995dd8941f669dc'),(10,'Evi Riyani, S.Kep., Ners','196804301989012001','MPP','Timker Yankep','7131119085a2f622831053a08962bd9e'),(11,'Mursiti, S.Kep., Ners','198007202007012022','MPP','Timker Yankep','b17f5ed1732b8e34ef838d80132db115'),(12,'Leo Badar Mualimien, S.Kep., Ners','199111212022031001','PJ Digitalisasi Keperawatan','Timker Yankep','aba7ba00b6b8053b93eb888827ba917a');
/*!40000 ALTER TABLE `data_akun` ENABLE KEYS */;

--
-- Dumping routines for database 'db_timkeryankep'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-13 11:01:52
