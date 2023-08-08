-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: pizzariaapp
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargos` (
  `id_cargo` int unsigned NOT NULL AUTO_INCREMENT,
  `cargo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'Não Informado','2023-06-20 19:24:15',NULL,NULL),(2,'eewtg','2023-06-29 19:24:15',NULL,NULL),(3,'faefgae','2023-06-29 19:24:15',NULL,NULL),(4,'arqwr','2023-06-29 19:24:15',NULL,NULL),(5,'rasd','2023-06-29 19:24:15',NULL,NULL),(6,'dfhrt4','2023-06-29 19:24:15',NULL,NULL),(7,'yrtyr','2023-06-29 19:24:15',NULL,NULL);
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id_cliente` int unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddd` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '11',
  `celular` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacoes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Luis','11','(63) 95911-1814','luana34@uol.com.br','Voluptatibus ducimus ut ullam vero eos eveniet repudiandae saepe. Fugiat non voluptatem possimus corrupti quae. Neque provident iusto eum similique. Alias veniam nulla in molestiae molestias architecto ipsam ad.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(2,'Laís','11','(67) 90680-9851','isaraiva@yahoo.com','Quaerat temporibus impedit quaerat enim temporibus. Corporis provident debitis quaerat.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(3,'Viviane','11','(43) 4107-1730','alessandra61@uol.com.br','Quia vel iste consequuntur libero. Rerum voluptatem omnis sint aut. Eaque officia molestiae dicta voluptas.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(4,'Ester','11','(94) 90090-7477','assuncao.nelson@ig.com.br','Voluptas autem laboriosam sed sapiente quia rerum. Quia numquam sed sit debitis. Voluptas nobis quam dolorem cumque.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(5,'Alessandra','11','(83) 90391-3404','vale.emanuel@brito.com.br','Accusantium tenetur quas voluptas temporibus nemo. Ut beatae sed voluptatum sit cupiditate expedita et. Alias molestias quasi ratione laboriosam facilis rerum et et. Aut et hic recusandae.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(6,'Kauan','11','(79) 99768-6557','emilio.bittencourt@r7.com','Porro mollitia quidem omnis molestiae. Facere et placeat dolor veniam qui.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(7,'Hugo','11','(24) 2006-3429','stefany80@ig.com.br','Eveniet vel rem iusto recusandae enim sit debitis. Veritatis doloribus voluptatum inventore vero. Aut explicabo et est laudantium omnis accusantium.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(8,'Michele','11','(24) 90951-9100','rogerio10@santana.net','Aliquid provident provident labore. Maxime beatae quaerat placeat et. Mollitia voluptate expedita nam. Omnis a tempora est aut.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(9,'Juliano','11','(67) 93932-5323','bernardo82@gmail.com','Maxime totam repudiandae nisi blanditiis. Quod deserunt nobis quo. Dolorum esse odio adipisci est at magni. Vel repudiandae ipsa quis et qui velit est.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(10,'Giovana','11','(66) 3017-8706','hvieira@dasneves.com.br','Assumenda ut culpa doloribus fugit ab possimus et. Voluptas autem ut odio dolores. Tempore tempore et laboriosam quisquam. Sed deserunt quisquam quia magnam ut.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(11,'Thaís','11','(51) 93405-8826','tainara.solano@terra.com.br','Et molestiae tenetur nam enim. Beatae omnis dolorum incidunt at esse quia. Reprehenderit et aut iusto ipsam quod officia dolorem. Qui vero aut deserunt fuga fugiat atque.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(12,'Denise','11','(31) 91787-4175','vanessa.carmona@camacho.org','Corporis non illum magnam fuga dolor est quidem. Qui nam est enim omnis architecto in. Provident enim laborum similique cum fuga nostrum cum. Ut in dicta vel sit eveniet.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(13,'Pedro','11','(51) 96809-4833','queiros.daiana@maia.net.br','Sit reprehenderit voluptate rem at et ad. Facilis quo dolore sint maiores et magni exercitationem. Temporibus saepe est ea repellendus.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(14,'Larissa','11','(69) 3442-5449','serra.veronica@hotmail.com','Atque vitae eos unde consequatur. Repellat dolorem cupiditate facilis temporibus sit inventore dicta. Ut dolor aliquid quisquam.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(15,'Gilberto','11','(42) 4692-9317','daniela35@souza.org','Alias cum commodi ipsa id deserunt sed. Nihil pariatur aliquid tenetur consequuntur unde voluptates ipsam. Voluptate doloribus distinctio est qui. Quia rerum nisi esse aut necessitatibus.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(16,'Emanuelly','11','(95) 92068-6475','anita.fonseca@faro.org','Est sed veritatis modi quis ipsa. Id quis nobis repellat repellat iste illo. Eos magni voluptas quis atque eveniet. Asperiores qui fugit est reiciendis ad.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(17,'Mirella','11','(77) 3650-5761','matias.edson@ig.com.br','Aperiam consequatur et vero atque exercitationem placeat qui. Vel sit pariatur numquam iure. Eius recusandae vel velit a ut quisquam iusto nihil.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(18,'Maximiano','11','(86) 99731-9889','olivia.dasdores@queiros.com.br','Et dolores id minus soluta. Qui dolor soluta non dignissimos eum voluptatibus. Illum nobis sapiente excepturi. Ab ratione autem ut non ex consequatur nisi.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(19,'Sofia','11','(95) 2790-2546','heloise.matos@aragao.com.br','Ducimus necessitatibus aut dolor ut delectus adipisci. Vero voluptas ullam dolorem dignissimos error molestias voluptas esse. Repellat in perspiciatis facere explicabo. Laborum quos et nemo. Natus magni maxime alias magni similique.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(20,'Marina','11','(44) 4181-5509','adriel15@r7.com','Fugit ut similique modi impedit error totam dolorum id. Reiciendis delectus doloribus sed quae illum exercitationem dolore quo. Nisi omnis eius quia sit. Fuga ex consequuntur minus assumenda dignissimos.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(21,'Kléber','11','(53) 97663-5330','carla.fernandes@r7.com','Perferendis doloribus veniam reiciendis voluptatem occaecati quis laborum. Quia at omnis inventore temporibus quo eos et. Ad neque et nulla eligendi alias eum.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(22,'Joyce','11','(13) 3340-6041','vcampos@terra.com.br','Est aut quam aut dolore provident nihil. Quaerat in dolore quaerat in incidunt et. Aliquid sed repellendus excepturi. Qui non et numquam alias est qui velit aut.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(23,'James','11','(13) 2343-3476','simon51@queiros.net','Distinctio autem ducimus velit veritatis voluptatem facilis. Maxime qui officia animi sunt asperiores quia suscipit. Alias eligendi quis molestiae dolore minus iste.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(24,'Cristiana','11','(34) 90618-2902','fernandes.mia@bittencourt.com.br','Labore omnis nostrum deleniti qui deleniti. Omnis doloremque numquam ut. Sunt facere repudiandae quis necessitatibus. Illo veniam sit eos.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(25,'Igor','11','(66) 96010-1529','dominato.stefany@soto.com','Rerum sunt consequatur officia expedita reprehenderit. Iusto ut neque quis omnis vitae. Accusantium et tempora facilis.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(26,'Clara','11','(42) 3951-4170','tgomes@maldonado.com','Eum provident incidunt eum rerum veritatis ipsam cupiditate. Aliquid voluptatum molestias nulla fugiat. Dolore voluptatum praesentium ut saepe.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(27,'Lorena','11','(99) 3430-4248','luisa.uchoa@uol.com.br','Consequatur et sunt suscipit. Qui vitae enim reiciendis beatae libero atque voluptatibus consequatur. Est sapiente consequatur architecto possimus.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(28,'Filipe','11','(82) 99390-4854','santos.caio@zamana.org','Cum porro magnam sed commodi fugiat expedita. Odio libero aliquid voluptatibus fugiat minus suscipit debitis. Qui unde et molestias numquam et aspernatur. Aut earum voluptatum esse placeat.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(29,'Rafaela','11','(89) 92532-5197','pamela14@prado.net','Error qui dicta odit ipsa culpa in repellat omnis. Labore vel asperiores hic iste aliquid. Consequatur fuga quia voluptatem commodi doloribus rerum earum. Quis facere repellat ad eos numquam excepturi et.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(30,'David','11','(47) 99829-0087','yteles@barreto.com','Molestiae at atque fuga ducimus a nesciunt similique aut. Magnam aliquam iure consequuntur omnis qui quaerat dolores. Excepturi sint ea saepe qui saepe atque blanditiis. Quam omnis quia doloremque nobis.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(31,'Emanuel','11','(53) 91596-9231','luzia48@uol.com.br','Repudiandae voluptates delectus ut exercitationem doloremque. Est rem qui et aspernatur.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(32,'Samara','11','(83) 2554-5425','robson.galvao@lira.org','Quos animi commodi sit libero voluptas odio ut. Ut facilis tempore est. Officia reprehenderit aut voluptatum perferendis sed velit odio.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(33,'Maurício','11','(91) 96283-1781','ferreira.madalena@r7.com','Quo consequuntur aut doloremque at neque ea. Dolores labore laborum magnam hic dolorem magnam facere. Earum consequatur consequuntur qui labore iste omnis non. Itaque quo modi tenetur et commodi ad dolorem quidem.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(34,'Josué','11','(33) 3945-7934','szaragoca@ig.com.br','Molestiae sit totam aut ut nihil molestiae facilis. Vel nulla aut error minima ad quia. Eum voluptatem incidunt et quod corporis est earum dolorum. Nostrum eius expedita sunt fugiat.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(35,'Tiago','11','(94) 98833-0701','henrique48@ig.com.br','Ipsam excepturi aperiam nesciunt expedita architecto ratione. Repudiandae non sunt et sed. Quis doloremque commodi numquam. Et laboriosam voluptatem occaecati illo.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(36,'Agathaa','11','(95) 90921-5576','teste@ferminiano.net','Unde qui qui sunt vel ut. Ipsam corrupti debitis nulla iste nostrum laborum. Maxime fugiat ea voluptas accusantium maxime tenetur sed. Aut quaerat itaque tempora qui ipsum ut similique eaque.','2023-06-27 17:00:51','2023-07-30 01:56:33',NULL),(37,'Daniella','11','(12) 94487-1990','leia27@fonseca.br','Magnam in sunt magnam necessitatibus voluptas temporibus. Ab neque dolor voluptatum enim. Sequi recusandae ad consequatur aut.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(38,'Lia','11','(37) 2507-1978','cristiano.quintana@batista.net.br','Et voluptate nemo sequi dolorem odio est aut sint. Consectetur voluptas repellat sapiente inventore voluptatem tempora dolores. Dolorem voluptas voluptatem voluptas qui blanditiis.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(39,'Maicon','11','(89) 93579-9357','elaine.dacruz@terra.com.br','Tempore quia nesciunt reprehenderit quia et odit. Culpa qui est nesciunt eaque ad corrupti. Omnis consequatur autem odit voluptas eos et nisi ab.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(40,'Carolina','11','(49) 4207-1331','queiros.alessandro@cruz.net','Aut aut praesentium vitae et. Sapiente officia enim repellendus mollitia iusto sed ut. Aut vel assumenda iusto.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(41,'Sebastião','11','(31) 90160-7309','medina.jasmin@matos.br','Dolor rerum earum omnis natus. In nihil adipisci mollitia nostrum facere doloribus quae velit. Omnis at fugit ex nobis.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(42,'Rodolfo','11','(44) 92618-2305','gil.estevao@campos.net','Repudiandae enim qui molestiae ipsa non neque. Quo adipisci saepe autem reiciendis recusandae. Rem assumenda qui voluptas aut exercitationem ipsam.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(43,'Wellington','11','(45) 2907-3051','deverso.ornela@aragao.com','Molestiae amet cumque sapiente. Autem odit atque nihil sed qui sed ullam. Enim est fugit quam omnis exercitationem et. Est ea laudantium non.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(44,'Natália','11','(83) 98605-3461','gian25@martines.com.br','Pariatur voluptatibus in ut cupiditate corporis perferendis dignissimos. Voluptates ipsa aut ea dolor quae. Deserunt aut possimus est vel dolor.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(45,'Filipe','11','(48) 4950-4947','fabricio.chaves@garcia.com.br','Quisquam ut consequatur ullam numquam at rerum eos atque. Assumenda tempore accusantium nostrum voluptates ut doloribus deleniti magni. Quia doloribus nam omnis voluptatem corrupti nostrum sint.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(46,'Laís','11','(94) 2244-1766','pontes.luna@uol.com.br','Aut provident sunt commodi aperiam nisi. Voluptatibus eum accusamus modi et et. Aspernatur ut accusamus corporis sit.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(47,'Murilo','11','(24) 2597-0394','everton39@romero.com.br','Explicabo voluptatem fugiat modi. Ea aliquid dolore amet libero. Dignissimos assumenda commodi eos voluptatem et autem id. Id laboriosam omnis qui velit. A ut amet ipsum excepturi voluptas aspernatur fuga.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(48,'Natal','11','(43) 2949-1506','robson.marin@arruda.com.br','Quis sit dolorum rem velit similique id. Molestiae voluptas corporis et aut harum. Earum consequuntur commodi numquam et explicabo dolore placeat.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(49,'Daiane','11','(53) 94318-3400','manuela91@leal.com','Aspernatur sapiente vero accusamus est. Omnis ut ipsa aperiam voluptatem et. Deserunt et occaecati illum accusantium dolor aut ex. Natus dolor cumque deleniti modi incidunt et.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(50,'Simon','11','(82) 98570-4543','reis.alicia@terra.com.br','Sint dolor consequuntur reprehenderit quidem. Aperiam molestias id ipsa in cum. Dolores distinctio earum fuga aut qui.','2023-06-27 17:00:51','2023-06-27 17:00:51',NULL),(51,'teste','11','(11)98280-5587','morgantigabriel@gmail.com','asdgaegaegaegag','2023-07-30 01:57:28','2023-07-30 01:57:28',NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes_enderecos`
--

DROP TABLE IF EXISTS `clientes_enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes_enderecos` (
  `id_cliente_endereco` int unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `id_endereco` int NOT NULL DEFAULT '1',
  `observacoes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cliente_endereco`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes_enderecos`
--

LOCK TABLES `clientes_enderecos` WRITE;
/*!40000 ALTER TABLE `clientes_enderecos` DISABLE KEYS */;
INSERT INTO `clientes_enderecos` VALUES (1,48,49,'Velit illo saepe amet ipsum vel corporis. Velit optio recusandae temporibus in aut. Laborum et laboriosam officia dolor qui. Sit minus quod explicabo expedita totam ipsum est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(2,24,1,'Magnam vitae eligendi libero impedit cumque animi. Tempore quasi non cupiditate laborum repellendus error. Fuga ea iusto et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(3,36,29,'Sunt ad sed quis. Ab et voluptatibus illo fugit dolore molestiae sed. Rerum reiciendis possimus velit ut molestias est et. Ut laborum voluptates ipsum possimus rerum libero ullam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(4,22,40,'Modi aperiam saepe repellendus quia perferendis provident tempora. Molestiae enim sunt et mollitia. Mollitia ipsam placeat facilis sit voluptatem. Facere ut quibusdam quae assumenda ad magnam libero.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(5,37,33,'Minus consectetur dicta maxime cupiditate. Aut voluptatem rerum dignissimos. Repudiandae a veniam quo modi veritatis ratione rem illum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(6,43,1,'Corporis suscipit et in suscipit ipsam saepe quis. Itaque sapiente id dolor. Numquam culpa est quia.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(7,49,23,'Neque nobis qui eos et occaecati. Sed reiciendis aut omnis quia.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(8,41,43,'Ut et omnis qui consequatur rerum modi. Aut voluptate similique ut et et. Omnis et consectetur itaque repudiandae quia et sit.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(9,44,5,'Deserunt sapiente et sed. Deleniti sit autem tempora nulla. Nobis quo veniam tempora labore suscipit quis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(10,20,7,'Dolorem placeat nisi architecto provident omnis adipisci. Impedit accusamus sed praesentium aut animi nostrum. Mollitia illo ullam reiciendis adipisci maxime maxime. Mollitia dolores accusamus quia aut vel. Consectetur provident maiores et facilis et laudantium est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(11,36,23,'Voluptate magnam qui aut sed. Deserunt dolorem ipsam necessitatibus sint sequi cupiditate commodi atque. Dolores sit omnis laborum distinctio.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(12,2,29,'Totam blanditiis dolorem exercitationem rem rerum. Alias non similique sint. Qui mollitia rerum et vel quam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(13,32,40,'Ipsam tempore beatae non porro. Eaque ducimus itaque non sit consequatur deserunt tempore. Quia repellat provident eius ea aliquam corporis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(14,34,36,'Asperiores molestiae eius voluptatem veniam non. Quis sed quidem nisi ut incidunt. Voluptates quaerat fugiat doloremque eum officiis. Fuga quae accusamus nobis numquam molestiae optio.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(15,34,36,'Sit ut nihil eos corrupti voluptate commodi. Molestias architecto est voluptatem nulla aut enim.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(16,33,17,'Alias consequuntur sit qui praesentium. Omnis reprehenderit adipisci magni delectus dicta. Adipisci consequatur alias ea fugiat laudantium. Ullam aut cum cupiditate.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(17,50,28,'Repudiandae provident placeat voluptas. Dolore est qui neque ex. Corporis similique quibusdam natus sit sed fuga ducimus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(18,23,43,'Quos nisi alias et dicta odio et. Consequatur ab magni blanditiis. Repellat id ex sed. Ut et soluta ad voluptatem repudiandae sed.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(19,16,1,'Ullam nulla eaque iusto officia quia eligendi qui ab. Veritatis repudiandae est dicta cupiditate quibusdam vero. Assumenda nihil quae impedit omnis ea aliquid enim vel. Odio rerum et sunt.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(20,45,10,'Debitis unde quas dignissimos reprehenderit saepe consequuntur. Eaque iste dolore est impedit qui quia id. Omnis minus perferendis ipsa. Vel quaerat praesentium magnam sunt ad nam reiciendis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(21,50,41,'Quo eum odit officiis fuga in doloribus harum. Facilis dolorem qui architecto cum sint aut. Aliquam ad ea reiciendis omnis minima officiis est. Nisi consectetur accusantium commodi occaecati voluptatem eos et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(22,45,3,'Porro molestiae beatae occaecati rerum vel. Voluptatum minus cum non. Minus minima exercitationem neque consequatur quia. Ad voluptatem cupiditate a voluptas.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(23,4,23,'Vitae quidem culpa quia dignissimos. Consequuntur ut aut aperiam sapiente. Ea et culpa sed. Consectetur quasi architecto eligendi beatae omnis repudiandae.','2023-06-27 17:35:26','2023-08-01 22:58:06',NULL),(52,36,51,'slgbwrhbwrh','2023-08-01 22:58:31','2023-08-01 22:58:31',NULL),(24,8,16,'Fuga molestiae qui rerum ut corrupti sit qui laudantium. Molestiae nisi dolor quia quod. Ut occaecati aut possimus non non est. Commodi rerum numquam eveniet assumenda eum quo perferendis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(25,16,21,'Explicabo doloribus expedita iusto officia. Qui sed consequuntur provident corporis dolor. Sequi nihil quam nisi cum. Eius dignissimos sunt accusamus mollitia officiis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(26,48,1,'Animi corrupti inventore odit incidunt recusandae laudantium. Facilis sit aut magni dolorum maiores facilis quaerat. Et nihil animi velit eos et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(27,34,23,'Ut et quia minus maiores voluptatem nemo. Hic iusto aut aspernatur possimus commodi nihil. Cumque id provident minus at. Quae rerum maxime voluptatum aut quo.','2023-06-27 17:35:26','2023-08-01 22:52:19',NULL),(28,9,11,'Repellendus voluptate quas et. Voluptates qui dolores rerum magnam inventore nam voluptatem dolores. Veritatis modi aut modi culpa aut et repellendus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(29,22,27,'Ut magnam commodi debitis. Voluptas accusamus non rem asperiores. Doloremque asperiores quia maiores modi fuga esse. Cumque enim odit ipsam suscipit optio. Sit omnis distinctio aut.','2023-06-27 17:35:26','2023-08-01 22:52:09',NULL),(30,10,28,'Provident nostrum repudiandae quae labore. Dignissimos voluptas quia fugit provident voluptatum vel aut. Eaque nulla distinctio sunt natus quam sint molestias. Porro aperiam vel saepe ex sit.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(31,20,29,'Non voluptate ducimus laborum et eveniet. Nam consectetur dolores libero qui saepe molestias voluptatem. Placeat harum eius architecto commodi dolorem dolore quibusdam. Illum autem ducimus facere reprehenderit alias voluptatem.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(32,1,28,'Id cupiditate velit voluptatem neque voluptas. Impedit neque quis sed culpa. Officiis ducimus omnis iusto quo qui veritatis saepe. Consequatur nesciunt facere cum facere rerum rem quas quia.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(33,14,5,'Et fuga voluptas minima amet sit. Molestiae nesciunt dolores nam nesciunt blanditiis dignissimos. Velit perspiciatis animi et repudiandae hic. Voluptatibus tempore a eum est ducimus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(34,49,28,'Expedita occaecati aliquam tempora architecto et nam architecto. Quo nulla cumque iure corrupti consectetur distinctio est. Dolor cumque libero error beatae. Vero et maiores quidem porro. Aspernatur quia facilis enim autem ad est est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(35,14,17,'Modi esse eum natus. Consectetur rerum velit libero explicabo autem laudantium quis. Sunt nihil eum veritatis et aut. Quo pariatur officia mollitia repellat quos illum nulla.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(36,6,23,'Iure minima ea nemo impedit iste soluta. Sequi neque facere earum aut vel porro. Ad repellat repellat velit asperiores recusandae et animi. Eaque numquam et dignissimos nisi error quisquam fugiat nulla.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(37,43,5,'Libero mollitia impedit odit quia non dolorem. Mollitia illum ab perspiciatis non enim. Omnis in ut fugiat quia ut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(38,8,11,'Et non unde error qui et. Quod et enim a ut. Qui quia quae at eveniet temporibus aspernatur.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(39,19,7,'Animi tempora libero sit consectetur ipsum accusamus dolore. Et debitis quae velit assumenda. Magni blanditiis magnam aut accusantium et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(40,47,1,'Nesciunt deleniti assumenda laborum. Voluptatem mollitia aperiam ducimus accusamus dicta in fugit voluptatibus. Nihil corrupti sint aut suscipit quos qui voluptatem debitis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(41,22,10,'Qui nihil quaerat maxime eveniet. Voluptas molestiae adipisci iusto ut consequatur vel ducimus. Ab iusto quia et earum adipisci ut explicabo ut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(42,40,31,'Porro voluptatem perspiciatis error nemo. Aut accusantium officiis nihil. Cum beatae autem est sint id dolore.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(43,32,5,'Odit et autem nobis vel at. Eum aut in quis quas sit. Quia numquam excepturi adipisci hic atque. Maiores animi quod dolor.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(44,12,44,'Quis velit illum vel id rerum aut soluta. Officia sint nulla quod in ea ut. Eum molestiae quisquam et recusandae labore quia magnam quidem. Consequatur fuga nulla et atque ratione minima quam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(45,7,23,'Ullam non possimus libero aliquam magnam odio voluptas. Enim doloremque officia nihil et. Sed ducimus et repellendus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(46,22,47,'Veniam est aspernatur fuga. Et nihil tenetur necessitatibus autem nesciunt sed. Temporibus quis ab sint rerum. Dignissimos autem omnis est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(47,20,30,'Quidem non asperiores tempora et. Et iusto vel magnam aperiam exercitationem quia. Aut enim nihil quibusdam ut aut nostrum quam neque.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(48,49,47,'Ullam quia reiciendis sint ut blanditiis qui. Consequatur quia veniam repellat non labore. Qui ut aut provident.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(49,28,46,'Odio maxime consequatur ut incidunt rerum. Ut nemo magni possimus ea non natus. Placeat natus ducimus et non voluptate sint quod.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(50,4,30,'Ipsa aspernatur molestias error amet at. Rerum molestiae in harum consequatur. Vero quo autem debitis inventore harum molestiae distinctio animi. Et asperiores voluptatem nobis eaque repellat.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL);
/*!40000 ALTER TABLE `clientes_enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `enderecos` (
  `id_endereco` int unsigned NOT NULL AUTO_INCREMENT,
  `endereco` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uf` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacoes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
INSERT INTO `enderecos` VALUES (1,'48602-676, Travessa Salas, 47451\nLouise do Leste - AP','507','m','tenetur','Santa Nathalia do Leste','SP','744','Ex molestiae quo quaerat repellendus in. Autem qui illum et sed.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(2,'74634-944, Av. Teobaldo Galvão, 25\nSanta Davi - AC','383','k','quis','Santa Cléber do Leste','SP','569','Id velit repudiandae ut ratione saepe sunt. Eos veniam provident quaerat sed ratione consequatur minus quis. Error similique facere voluptas in. Quia nam id repellat labore ab sint.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(3,'04073-301, Travessa Tâmara Prado, 9\nVasques do Leste - PB','299','g','voluptatum','Porto Dener do Sul','SP','132','Est nisi voluptatem deleniti consequuntur. Animi est nemo optio inventore rem tempora occaecati. Esse aliquid vitae voluptas qui facere deserunt esse sequi.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(4,'18439-612, Travessa Maurício Teles, 69550. Bc. 0 Ap. 55\nSalgado do Leste - SE','499','v','corporis','Porto Nádia','SP','478','Aut nulla dolor nemo deleniti quam est fuga quidem. Inventore distinctio reprehenderit aut quisquam dolorem commodi. Est aliquam voluptas et sed in non. Quod quia in nisi totam voluptatibus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(5,'36054-491, Largo Delatorre, 86. F\nVila Alexa - RJ','133','t','aut','Cruz do Sul','SP','834','In quia praesentium consectetur amet. Ullam nihil et modi tempora. Sunt adipisci tenetur aut aliquam. Provident perspiciatis officia repellat consequatur. Possimus qui numquam voluptatum ut vero sint.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(6,'41881-205, R. Mauro Verdugo, 557. Bloco B\nHeitor do Leste - SE','834','k','quas','Vila Edilson','SP','816','Rerum quas officia consequatur et ratione dolore. Aliquam delectus quis quia qui sit sit.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(7,'34962-150, Avenida Isaac, 4. 62º Andar\nSão José do Leste - PR','837','l','veritatis','São Melinda','SP','248','Ut voluptatem eum commodi nesciunt a. Neque provident in quia sed voluptatem. Vel tenetur necessitatibus ea similique id fugit expedita vero.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(8,'40563-944, Largo Eva, 801. Bloco C\nSão Sebastião - RO','337','t','fuga','Santa Natal','SP','413','Veniam nam et rerum voluptatem accusantium illo. Et id eaque similique quasi dolorem tempora aperiam. Ipsam consequatur ipsam quia nulla optio et ad. Est dolores aut architecto.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(9,'77701-327, Largo Sergio Salas, 57\nSão Tábata - PB','929','g','nisi','Santos do Leste','SP','213','Alias saepe impedit omnis consectetur. Fugit maiores repudiandae alias est qui. Et delectus cum eligendi.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(10,'77750-456, Av. Gomes, 2. Bloco A\nPorto Nayara d\'Oeste - ES','47','y','et','Vila Diego','SP','586','Deserunt veniam dolores qui tempore molestiae sequi. Sint rerum ratione blanditiis. Facilis tempore repudiandae eos repellendus consequatur sunt.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(11,'24165-998, Rua Fernandes, 8. Apto 5\nSanta Isabel do Norte - SP','415','m','ea','Hernani do Norte','SP','917','Et consequatur et sit aliquid magni voluptas. Dignissimos vero quaerat a et omnis est. Culpa velit non recusandae enim explicabo doloribus necessitatibus. Quidem neque quia voluptatem pariatur facere est ab.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(12,'81561-211, Av. de Freitas, 6\nVila Cléber - MA','9','m','voluptatem','Alcantara do Sul','SP','860','Eligendi fuga beatae commodi fuga est. Temporibus officia et aut voluptas ea vel. Aliquam voluptas aut iure illum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(13,'28719-798, Av. Sérgio Verdugo, 3. Anexo\nPorto Jorge - RJ','863','l','voluptatem','Vinícius d\'Oeste','SP','249','Unde doloremque tenetur et sint non nostrum consectetur. Pariatur atque architecto qui qui repellat. Aliquam pariatur ratione molestiae autem omnis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(14,'45806-515, Av. Quintana, 66177\nSantacruz do Leste - PR','405','k','pariatur','Esteves do Norte','SP','981','Et laudantium aut eos nemo dolorem. Eveniet tenetur aut deserunt maiores dolor. Omnis sapiente et in vel expedita officiis et vel.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(15,'89039-034, Av. Matias, 7033. Bloco A\nCíntia do Leste - BA','733','j','non','Vila Elisa do Sul','SP','507','Et sed quis voluptate. Ullam dolor et nobis dolore voluptatum ab. Ex est totam deserunt aspernatur non nobis consequatur aut. Labore cupiditate sed et aliquam reiciendis omnis et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(16,'11171-305, Av. Anderson, 8149. 111º Andar\nVila Stefany - CE','281','i','non','Vila Arthur do Norte','SP','387','Nemo eaque esse quia pariatur sunt. Et voluptatem deserunt nam asperiores. Inventore autem amet iusto non. Commodi facilis consequatur reiciendis et vero itaque consequatur. Harum quibusdam rerum inventore molestias quia voluptas.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(17,'01838-982, Av. Lourenço, 67\nCaldeira do Norte - MT','572','s','possimus','Vila Juan do Leste','SP','998','Eaque quasi vel eos blanditiis earum et voluptatibus. Ea aliquam omnis omnis qui. Voluptatem ab et voluptatem quis tenetur.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(18,'23286-997, R. Manuel de Arruda, 3. Fundos\nVila Danielle - BA','621','o','doloribus','Santa Cristian do Leste','SP','543','Est quo tempora sapiente a vel voluptatum sed earum. Libero aut eos quis molestiae consequatur. Repudiandae consequatur voluptas veritatis asperiores.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(19,'37744-106, Avenida Sueli, 6626\nPorto Lorenzo do Sul - RJ','123','a','quis','Santiago d\'Oeste','SP','508','Dolorum natus blanditiis dolores eos tenetur. Enim velit accusamus reiciendis culpa ut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(20,'75439-506, R. Maurício, 56379. Apto 672\nRezende do Sul - RJ','404','h','temporibus','Valente do Norte','SP','740','Adipisci ut sint dolores eaque. Cumque corrupti quia laudantium ut molestiae voluptate impedit laboriosam. Saepe eius accusantium et eligendi in beatae omnis. Molestiae temporibus quo minima autem ratione.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(21,'34728-979, Rua Letícia, 5130\nSão Isis - GO','285','o','veniam','Santa Mariah','SP','301','Adipisci alias perspiciatis porro molestiae. Necessitatibus mollitia quia qui ipsa velit dignissimos fugit. Quibusdam et at molestias ea ipsam. Animi quisquam in facilis numquam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(22,'54436-048, Largo Montenegro, 283. Bc. 05 Ap. 85\nBenez do Norte - MG','785','t','nisi','Porto Felipe do Sul','SP','508','Quia nesciunt fugiat voluptas et voluptas ex. Sequi aut officiis qui. Assumenda voluptas et vero corporis voluptas quas. Saepe nihil quo et non illo minima sapiente.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(23,'25491-710, Av. Ronaldo, 34. Fundos\nVila Graziela do Leste - PI','64','s','architecto','Santa Inácio','SP','319','Vitae quidem culpa quia dignissimos. Consequuntur ut aut aperiam sapiente. Ea et culpa sed. Consectetur quasi architecto eligendi beatae omnis repudiandae.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(24,'41299-190, R. Nathalia, 60. 5º Andar\nAssunção do Norte - MA','887','m','error','Casanova d\'Oeste','SP','90','Ea magnam mollitia explicabo eveniet ea. Odit tenetur voluptates ad voluptatem ut explicabo sit dolore. Nam rerum itaque labore et nobis. Aut est aut dolorem adipisci.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(25,'29518-974, R. Richard Montenegro, 687. Apto 8\nRezende d\'Oeste - AM','931','p','distinctio','Porto Théo do Norte','SP','540','Ut quia sed consequatur quo. Minima ut sit illo ad in ut. Debitis iusto veniam dolorum fuga. Ullam debitis aut est sed magnam qui voluptatem. Blanditiis illum distinctio debitis accusantium.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(26,'24758-149, R. Gael Aragão, 69427. Anexo\nSão Ricardo do Sul - PI','100','h','consequuntur','Santa Ellen do Leste','SP','315','Veritatis deleniti laudantium ipsa sit. Voluptatem iure tenetur vitae reprehenderit. Dolores tempora quas neque et asperiores illo facilis. Atque odit corporis libero voluptatem excepturi alias rerum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(27,'69141-560, R. Noelí, 491\nSanta Marta do Leste - SC','420','q','exercitationem','Santa Eduardo d\'Oeste','SP','336','Ut et quia minus maiores voluptatem nemo. Hic iusto aut aspernatur possimus commodi nihil. Cumque id provident minus at. Quae rerum maxime voluptatum aut quo.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(28,'26782-324, Largo Rodrigo Lovato, 910\nEster d\'Oeste - AC','103','z','qui','Santa Gabriela do Sul','SP','530','Nisi voluptate est omnis ipsam et ut ut et. Qui eum repellat ab non expedita deleniti.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(29,'15894-895, Travessa Suellen Romero, 5244\nSimone do Norte - AC','834','b','id','Vanessa do Leste','SP','932','Ut magnam commodi debitis. Voluptas accusamus non rem asperiores. Doloremque asperiores quia maiores modi fuga esse. Cumque enim odit ipsam suscipit optio. Sit omnis distinctio aut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(30,'06915-749, Largo Ramires, 32. Bc. 4 Ap. 92\nCampos do Sul - PE','412','y','et','Porto Emílio do Leste','SP','264','Est accusantium maiores est laborum voluptas. Praesentium atque in cum quia aut inventore modi. Debitis id nemo autem molestias eos veritatis officiis. Ratione quis iure voluptatibus saepe ullam ullam maiores.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(31,'23763-465, Rua Delatorre, 2066. Apto 685\nSanta Vitor d\'Oeste - RR','766','o','commodi','Vila Sandra','SP','70','Repellat commodi esse possimus molestias doloribus consectetur quia. Voluptatem sit dolorem est dolorem dolores sunt doloremque. Consequatur sit amet voluptatum nihil in quae ullam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(32,'40714-287, Largo Alexandre Gomes, 36. Bloco B\nSão Heloísa do Norte - RS','186','e','qui','Galhardo do Norte','SP','261','Omnis aut eum libero eum. Error sint tenetur perspiciatis vero. Voluptas dolores tenetur blanditiis vel corporis voluptas nesciunt.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(33,'85460-286, Largo Delatorre, 5\nDaniella do Norte - PE','838','q','sint','Porto Sebastião','SP','65','Consequatur dolor a non facere autem assumenda. Provident harum natus nulla vitae. Ratione non sed tenetur blanditiis fugit aperiam ut. Vel explicabo aspernatur necessitatibus qui numquam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(34,'19881-771, Largo Yasmin Ramires, 356. Bloco A\nSanta Milena d\'Oeste - RJ','664','j','tempore','Porto Téo','SP','677','Laudantium soluta illum eveniet consequuntur illum dolore. Dolores harum doloribus dignissimos aut. Reiciendis temporibus voluptatem fuga aliquam corporis porro molestiae. Velit rerum debitis veritatis voluptatem error.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(35,'19284-780, Largo Rivera, 5311\nChaves d\'Oeste - MT','469','d','consequatur','Santa Daniella d\'Oeste','SP','120','Libero voluptatem illum placeat ipsum. Quis et dolores ducimus soluta.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(36,'91558-115, Av. Burgos, 18\nPorto Fátima do Sul - GO','628','q','autem','São Daniel','SP','254','Perspiciatis tempora enim veritatis et hic ut dolorum. Et maiores illum aut doloremque vitae et ipsa.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(37,'52768-587, R. Verdara, 7\nSanta Sarah do Norte - BA','697','h','vitae','Ítalo do Leste','SP','701','Asperiores repellendus delectus eligendi atque in tempore. Ab numquam laborum dolor rerum voluptatem excepturi. Tempora alias incidunt et ab sed.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(38,'63764-928, R. Heitor Estrada, 6064. Bloco C\nKamila do Leste - AP','519','x','et','Grego do Norte','SP','777','Magni beatae sapiente et omnis. Saepe deserunt qui sunt cupiditate iure sint modi. Non optio accusantium fugiat dignissimos quas est. Nemo dolore iure quisquam corrupti quia veritatis animi.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(39,'17998-254, Rua Pietra, 61532\nSão Kléber - RO','999','v','in','Karine d\'Oeste','SP','628','Nihil eum aperiam perferendis exercitationem ut cumque aliquam. Molestiae esse quibusdam eum repellendus. Aliquam eaque fugiat necessitatibus expedita. Libero voluptas eum quia autem.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(40,'23330-622, Avenida Hosana, 254. 094º Andar\nBatista do Norte - SC','73','x','magnam','Vila Wesley','SP','754','Aspernatur alias dolores qui explicabo ut quis et quia. Quasi expedita veritatis incidunt. Quod et id ut non occaecati nam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(41,'86863-454, Avenida Roberto, 77288. Apto 413\nPorto Alessandro do Norte - RS','654','i','minus','Fabrício d\'Oeste','SP','111','Aut deleniti ea quibusdam laboriosam a qui amet. Non quibusdam libero molestiae illum amet nam dolores. Debitis distinctio mollitia velit sed odit.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(42,'02540-060, Largo Bernardo Cortês, 4. Apto 1\nJefferson do Norte - RO','598','t','quia','Salas do Sul','SP','219','Asperiores dicta qui beatae. Aut beatae nihil adipisci qui autem. Porro consequatur debitis ratione magnam necessitatibus. Impedit nihil impedit debitis quod cumque necessitatibus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(43,'24795-781, Rua Emerson, 2989. Bloco C\nSão Letícia do Leste - RO','479','d','dolorum','São Juliano','SP','364','Consequuntur qui porro quis esse aperiam harum. Eligendi id non consequuntur nostrum beatae. Sit temporibus tenetur quo sed blanditiis eum mollitia placeat.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(44,'70193-185, Av. Chaves, 5632. Bc. 6 Ap. 57\nArtur do Leste - RN','74','c','quis','Vila Augusto do Sul','SP','126','Aut omnis aut ducimus quo. Magnam eius velit eum ut vel molestias. Harum quisquam iusto neque distinctio modi eum nam repudiandae.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(45,'80672-628, Avenida Toledo, 75. Bc. 19 Ap. 62\nSanta Agustina - MT','186','y','molestias','São Enzo do Norte','SP','480','Sunt eius mollitia tempora explicabo tempora nostrum. In repellat repellendus at aut maiores dolores. Vitae voluptas in esse architecto sed dolores.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(46,'15399-163, Largo Uchoa, 22480\nRomero do Leste - AC','499','a','unde','São Beatriz do Norte','SP','881','Id qui ea repudiandae magni odio dicta omnis. Vel harum rerum odio quaerat sapiente quis aliquam. Rerum quia earum dolorem tempora pariatur facilis nesciunt. Dolorem voluptas ratione odio nesciunt omnis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(47,'73499-435, Avenida Kelly, 159\nPorto Rafaela - PB','444','y','quo','Valente do Norte','SP','416','Fugiat fuga quisquam rerum. Non corporis sequi suscipit eos ea distinctio. Enim voluptatibus nesciunt cupiditate sunt voluptates tempore ea.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(48,'89655-833, Travessa Fernandes, 6015. Bloco C\nBarros d\'Oeste - MS','320','n','sapiente','Lutero d\'Oeste','SP','405','Error sit itaque sed dolores. Consequatur voluptas corporis molestias soluta aut unde aut. Qui tenetur assumenda aut eius officia voluptatibus atque. Vel ea quia itaque ut dolores odio.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(49,'99385-199, Travessa Burgos, 8204. Bc. 4 Ap. 07\nDelgado do Leste - PR','276','o','necessitatibus','Kauan do Leste','SP','314','Occaecati velit dolores et aut. Ut eligendi quo perferendis quos sint. Eaque consequatur quo ea quos quod id. Et voluptates voluptate deserunt et nostrum rerum. Aliquam non et adipisci et dolores quis qui vel.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(50,'52672-510, Av. Marques, 34. 2º Andar\nVila Lucas do Norte - MT','103','w','explicabo','Padilha d\'Oeste','SP','335','Dolor numquam beatae laboriosam deserunt eaque. Delectus unde eaque minus vel possimus sit. Voluptate eaque dolores tempora aut a. Voluptas aut minus et est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(51,'Paulo Harris','12','S','Vila Floresta','Santo ANdre','SA','0910021','slgbwrhbwrh','2023-08-01 22:58:31','2023-08-01 22:58:31',NULL);
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (16,'2014_10_12_000000_create_users_table',1),(17,'2014_10_12_100000_create_password_reset_tokens_table',1),(18,'2019_08_19_000000_create_failed_jobs_table',1),(19,'2019_12_14_000001_create_personal_access_tokens_table',1),(20,'2023_06_15_165531_create_cargos_table',1),(21,'2023_06_20_140755_create_tipo_pedidos_table',1),(22,'2023_06_20_144919_create_tipo_pagamentos_table',1),(23,'2023_06_20_145403_create_statuses_table',1),(24,'2023_06_20_153425_create_tipo_produtos_table',1),(34,'2023_06_20_153709_create_tamanhos_table',4),(33,'2023_06_20_155019_create_produtos_table',3),(35,'2023_06_22_140223_create_produto_tamanhos_table',5),(28,'2023_06_22_142735_create_clientes_table',2),(29,'2023_06_22_144829_create_enderecos_table',2),(30,'2023_06_22_153358_create_cliente_enderecos_table',2),(31,'2023_06_22_162045_create_pedidos_table',2),(32,'2023_06_22_165526_create_pedido_produtos_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `id_pedido` int unsigned NOT NULL AUTO_INCREMENT,
  `id_tipo_pedido` int NOT NULL,
  `id_user` bigint NOT NULL,
  `id_cliente` int NOT NULL,
  `id_cliente_endereco` int NOT NULL,
  `id_status` int NOT NULL,
  `id_tipo_pagamento` int NOT NULL,
  `total` decimal(10,2) DEFAULT '0.00',
  `observacoes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,1,8,31,34,1,1,2790.00,'Nam quisquam et voluptate ea aut reiciendis omnis voluptas. Quas sit sunt quia sint dolorum. Suscipit sequi tempore praesentium voluptate a neque. Ut velit amet maiores qui saepe eligendi.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(2,1,3,42,34,1,1,136.00,'Expedita ut eveniet consectetur consequatur explicabo molestiae. Sed voluptatem ut ex dolores assumenda est atque. Corporis vel rerum tempora in.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(3,1,10,26,24,1,1,3380.00,'Porro similique qui eos rerum tempora. Eveniet ea distinctio omnis dolorem illum porro dicta eos. Quo qui dolorem et ratione similique.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(4,1,1,15,42,1,1,807.00,'Dolor iusto consequuntur porro et ipsa rerum eveniet. Eum dolor est distinctio repellendus illum. Ut culpa voluptas officia enim.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(5,1,9,43,36,1,1,697.00,'Sint deleniti fuga voluptas quia voluptatem et molestiae. Soluta reiciendis dolorem voluptatum quaerat at vel omnis id. Iure provident illum fuga alias rerum consequuntur et. Ea quasi eum voluptatibus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(6,1,2,17,41,1,1,1612.00,'Repudiandae quia sint in. Corrupti fuga quis consectetur cum dolorem id sed. Illo praesentium et sed pariatur dolores blanditiis nostrum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(7,1,2,46,2,1,1,1015.00,'Magni nam voluptates quisquam consequatur velit. Non voluptatibus assumenda eos rem fugiat. Qui minus numquam porro eos quisquam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(8,1,7,45,47,1,1,829.00,'Officia expedita atque quae optio laboriosam. Dolorem earum dolores eius eaque. Voluptas rerum optio ipsam numquam est dolores consequatur. Molestias laudantium ea inventore quis. Hic est vitae iure ea qui fuga hic et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(9,1,4,22,38,1,1,1450.00,'Sed architecto eius nihil rerum eaque. Molestiae est nostrum non sit a autem. Nulla culpa dolores distinctio consectetur voluptatem aperiam. Vel adipisci sit provident in nihil alias totam est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(10,1,5,13,23,1,1,3451.00,'Sed deleniti accusamus quae et. Voluptatibus dolorem sit dolores nam. Cumque aperiam itaque ut et aut quasi rerum. Amet nam voluptas odio hic.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(11,1,3,10,20,1,1,365.00,'Qui aut qui aut necessitatibus totam et vero voluptatem. Dolor architecto atque officiis et hic. Officiis quidem ab est et ipsum non ex. Similique nemo repudiandae explicabo autem voluptatum laudantium.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(12,1,5,38,5,1,1,3478.00,'Hic magnam possimus quibusdam. Laboriosam iste cumque beatae voluptatibus autem id. Vel in magnam ab voluptas et labore. Et eligendi non quia ut occaecati necessitatibus ut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(13,1,1,2,45,1,1,1269.00,'Amet aliquam fugit aut ea. Error suscipit omnis voluptatum qui placeat quia non.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(14,1,10,3,6,1,1,75.00,'Eaque sunt facere consectetur sequi rem. Illo distinctio optio voluptatibus culpa et laboriosam. Non illo ea consequatur perspiciatis itaque. Quia asperiores alias quos aut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(15,1,7,24,16,1,1,2507.00,'Aut facilis quo dolor hic error nemo. Eos praesentium ea beatae sunt alias cum. Necessitatibus quam quia expedita earum voluptas. Ut voluptas velit illo ducimus et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(16,1,4,25,30,1,1,1967.00,'Rem tempore sunt est. Aspernatur sed sunt iste et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(17,1,6,9,5,1,1,1826.00,'Tempore recusandae repellat exercitationem officiis mollitia rem et. Ipsam cum labore unde eum aut qui et. A vitae ab ut aut repellendus. Est et voluptatem aut ut voluptatum enim. Dolores facere asperiores qui excepturi rerum debitis maxime.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(18,1,3,49,34,1,1,3776.00,'Omnis non est doloribus eum deserunt in distinctio. Dolores quod ducimus veniam sit accusantium assumenda doloribus. Iusto quia vero quidem veniam voluptatem voluptatem. Et dolorem tempora natus et et consequatur est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(19,1,9,3,47,1,1,2026.00,'Quae ea similique soluta voluptate ea dolorem sunt. Maxime illo incidunt et neque. Aut placeat tempore voluptas. Sapiente neque laudantium nemo explicabo.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(20,1,9,17,14,1,1,1050.00,'Temporibus eos et laboriosam commodi perferendis id. Ex consequatur quae pariatur aut provident. Molestiae perferendis quo assumenda est. Tempore accusamus officiis aut est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(21,1,9,26,18,1,1,722.00,'Tenetur repudiandae laboriosam eum necessitatibus. Consectetur ea qui quo possimus excepturi consequatur rem. Dolorem cumque amet accusantium accusantium officia quaerat.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(22,1,10,2,32,1,1,3643.00,'Ex iusto odio quos quas quasi sunt deserunt alias. Nostrum non aut ullam eos. Maiores expedita et rerum eos.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(23,1,2,46,42,1,1,2367.00,'Laudantium non illum assumenda ut aut. Est aut aut omnis sit voluptas rem delectus. Vitae repellendus aut maiores temporibus qui voluptatem est.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(24,1,5,25,38,1,1,3722.00,'Ea dolores aut exercitationem explicabo sit unde. Dolore dolorem ullam sapiente nam. Dolorem eius sit quis rerum. Quibusdam odit aspernatur repudiandae animi.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(25,1,6,20,16,1,1,1126.00,'Non eum deleniti repudiandae laboriosam sint veniam. Consequuntur ut natus veritatis id eaque accusantium perferendis. Quos optio aut beatae quia aut. Nihil qui et doloribus repellendus modi.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(26,1,8,44,25,1,1,1517.00,'Velit unde officiis laborum error. Totam iste deleniti repellat tempore sint ipsa.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(27,1,1,6,24,1,1,1348.00,'Sint corrupti eum voluptas et dolores eaque impedit. Et debitis et minus ut iusto aperiam dolore. Consequuntur quo aut et quia. Quos occaecati corporis nobis magni nemo iste voluptate.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(28,1,4,22,2,1,1,2570.00,'Eaque harum assumenda quo molestiae voluptatem fuga. Dolor corporis et rerum impedit et sed. Magnam beatae autem dolores.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(29,1,1,28,40,1,1,315.00,'Sunt alias consequuntur quaerat consequatur adipisci maiores magni. Mollitia ex similique nihil non magni corporis est. Eveniet voluptatem amet quo ipsam cupiditate iure.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(30,1,6,16,3,1,1,1889.00,'Iure enim nostrum nulla ex similique. Cupiditate facilis ratione quaerat excepturi. Beatae delectus et qui doloribus et. Non aut ea eveniet aut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(31,1,8,18,32,1,1,2215.00,'Error est vero suscipit consequatur. Soluta sit aut commodi dolor voluptates dolorum est laudantium. Dignissimos harum porro maxime velit quia ducimus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(32,1,9,43,50,1,1,2170.00,'Asperiores magni aut velit vero molestias et quae distinctio. Quia recusandae magni earum ut pariatur nesciunt. Et consequatur quae qui omnis consequatur et cum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(33,1,9,18,10,1,1,3566.00,'Placeat sequi est consequuntur labore nihil et consectetur. Delectus sint inventore ullam iusto mollitia autem veritatis. Expedita dolorem facilis voluptatum. Consequatur maxime error temporibus optio aliquid.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(34,1,1,4,35,1,1,3052.00,'Natus sint excepturi id voluptas consequatur est quis. Aut optio porro odit et illo hic nemo et. Velit asperiores consequuntur et quisquam soluta qui. Omnis neque dolor non dolorem unde odio.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(35,1,2,21,21,1,1,1455.00,'Quasi maxime saepe eaque dignissimos sit iure eius. Quis debitis iste eius nihil iusto. Et fugit est expedita laudantium quod inventore voluptas. Temporibus nihil dignissimos quaerat esse sequi ab.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(36,1,7,7,6,1,1,3135.00,'Dignissimos molestiae nihil occaecati vero vel ipsum fugit. Minima accusantium molestiae corrupti eum. Consectetur consequatur expedita sint quod.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(37,1,6,30,44,1,1,3875.00,'Dolorem occaecati adipisci molestiae dolores saepe. Quasi possimus ipsa excepturi eum. Occaecati architecto porro vitae possimus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(38,1,6,49,22,1,1,2138.00,'Expedita esse dignissimos reprehenderit mollitia. Et dolor aut architecto. Asperiores occaecati numquam inventore. Rerum dignissimos qui quam adipisci consequatur molestiae nihil rerum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(39,1,2,37,30,1,1,166.00,'Modi esse recusandae voluptatem molestias libero. Animi est praesentium vitae a ipsam voluptatibus dolores molestias. Officia nihil ducimus occaecati culpa placeat. Praesentium recusandae saepe porro illum corporis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(40,1,6,45,18,1,1,165.00,'Non suscipit non ea placeat impedit corporis inventore. Eum velit ut quaerat aut. Sed pariatur vel beatae alias ullam voluptate.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(41,1,4,44,29,1,1,3987.00,'Earum totam ut ab doloribus voluptatum. Veniam nesciunt nulla voluptatem dolores repellendus est. Odit perspiciatis veniam natus saepe est rerum quae.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(42,1,3,37,33,1,1,802.00,'Quas at id illo tempora fugit eos cupiditate. Et et maxime blanditiis. Neque odio iusto ea illo quia quae.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(43,1,6,40,4,1,1,1384.00,'Sit quidem quisquam nulla consequatur. Praesentium voluptas asperiores aut dolor eos. Animi occaecati ad saepe quae consequatur in a.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(44,1,1,23,1,1,1,440.00,'Pariatur quis a earum perferendis vel asperiores. Nobis voluptas sit natus enim perspiciatis dolorem omnis. Tempora minima magni voluptatum ipsa dolores ex. Dolores eveniet ipsum dicta maiores non animi qui id.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(45,1,7,19,41,1,1,136.00,'Placeat esse modi repellat nostrum accusantium ut labore. Harum maxime earum adipisci repellendus culpa. Atque optio nisi voluptatem optio aut. Ducimus tenetur pariatur provident sunt excepturi.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(46,1,7,21,38,1,1,3841.00,'In mollitia et tempore a. Veniam architecto ut quasi consequatur.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(47,1,4,41,48,1,1,1585.00,'Porro quis ex id. Quas et fugit veniam id harum. Quaerat aut quam ea reprehenderit.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(48,1,6,9,36,1,1,1679.00,'Nulla voluptate ducimus nobis animi non qui. Modi voluptatibus nihil assumenda dolore natus aut. Accusantium quae id molestiae. Voluptas excepturi reiciendis dignissimos consectetur hic.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(49,1,6,32,23,1,1,1073.00,'Omnis tempora adipisci explicabo commodi. Quia nihil delectus sint eum. Nemo sequi aspernatur provident libero voluptas.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(50,1,7,7,24,1,1,594.00,'Iste quia veritatis rerum voluptas exercitationem hic. Fuga ad impedit enim natus repellat. Culpa autem voluptatem magnam natus sint sapiente qui.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos_produtos`
--

DROP TABLE IF EXISTS `pedidos_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos_produtos` (
  `id_pedido_produto` int unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint NOT NULL,
  `id_pedido` int NOT NULL,
  `id_produto_tamanho` int NOT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `qtd` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `observacoes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pedido_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos_produtos`
--

LOCK TABLES `pedidos_produtos` WRITE;
/*!40000 ALTER TABLE `pedidos_produtos` DISABLE KEYS */;
INSERT INTO `pedidos_produtos` VALUES (1,2,7,1,171.00,6.00,753.00,'Consequatur laboriosam est nulla pariatur laborum eveniet magnam maiores. Atque aliquam est aut voluptas cum aut non. Sed beatae ea voluptatem soluta consequatur maiores.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(2,10,1,1,122.00,16.00,2536.00,'Dolores consequatur rerum temporibus qui ratione rerum. Unde voluptatem officiis odit hic pariatur. Labore reiciendis ea quia laborum. Iste id sed voluptatem maxime ducimus aperiam dolore voluptas. Quia possimus dolor praesentium autem et fuga.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(3,4,38,1,80.00,5.00,1358.00,'Sint ut distinctio iusto est adipisci error sed est. Non placeat qui quasi quia sint non qui dolores. Voluptates sed ipsa repellendus rem aut maiores.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(4,6,22,1,85.00,5.00,2625.00,'Nihil est consequatur ab et. Non quidem doloremque molestiae quo et eum. Occaecati aliquam esse amet. Maxime excepturi optio eos modi assumenda. Neque rerum ea at ratione illo non.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(5,3,2,1,142.00,12.00,2018.00,'Illum omnis qui et quisquam qui veniam. Qui autem culpa amet autem. Non totam voluptates neque a laboriosam delectus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(6,3,41,1,108.00,9.00,2709.00,'Magni sunt eum aut aspernatur. Aut quae rem sed adipisci. Odio voluptatem accusantium saepe architecto dolor voluptas.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(7,8,7,1,109.00,9.00,2128.00,'Qui voluptate ad temporibus non rem expedita. Ut vel omnis omnis sed sequi officia incidunt. Eum ut quia itaque ducimus eum culpa doloremque. Omnis suscipit sit eum laudantium temporibus consequatur ut veritatis. Porro fuga expedita velit nihil neque.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(8,6,37,1,149.00,9.00,1053.00,'Veritatis laudantium autem voluptatem minima iusto et soluta. Aut ut sed est in. Voluptatem in amet voluptatem necessitatibus doloremque itaque recusandae. Dignissimos quas aut aliquid perspiciatis quia commodi aut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(9,1,33,1,156.00,1.00,1318.00,'Maiores commodi id asperiores pariatur aut. Occaecati officia consequatur iure consequatur quos ducimus. Placeat eum praesentium velit dolorum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(10,4,47,1,116.00,20.00,2613.00,'Dolores aut accusantium labore voluptatem. Aspernatur assumenda maxime consequatur ducimus qui officiis et. Architecto id dolorem dolorem illo et. Nemo aut ut vero soluta qui aut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(11,10,37,1,152.00,4.00,2548.00,'Non veniam minus est beatae. Et et dolore et et provident voluptatibus. Ipsa et autem sunt. Expedita ipsa quos velit aut ratione exercitationem.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(12,9,16,1,125.00,17.00,2608.00,'Earum eveniet enim labore qui ea et voluptas. Porro saepe veniam alias odit laboriosam deserunt ullam. Sint eveniet autem et nobis consequuntur. Illum quam dolores atque facilis magni natus perspiciatis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(13,8,47,1,52.00,12.00,550.00,'Corporis tenetur et sequi perspiciatis quae id odio asperiores. Amet cupiditate occaecati iusto voluptas quis autem. Molestiae et saepe voluptas dolor quidem dolorum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(14,6,34,1,136.00,20.00,2102.00,'Voluptas distinctio enim provident alias praesentium dolorem esse. Ducimus tempora qui qui neque quos. Officiis perferendis provident consequatur nesciunt.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(15,5,20,1,66.00,3.00,1295.00,'Tenetur aut tenetur omnis harum veniam veritatis rem. Recusandae adipisci molestias dolor consequatur occaecati corporis porro. Quidem optio vel nam qui dicta.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(16,4,5,1,52.00,8.00,2858.00,'Dignissimos rem incidunt voluptas. Rem est est nulla commodi. Molestias non a occaecati et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(17,2,44,1,197.00,19.00,469.00,'Esse et eum veniam ipsam provident voluptatem. Et dolore commodi nihil illum ex. Et hic molestias iste assumenda voluptas. Provident praesentium inventore consectetur tempora quod soluta est. Sit dicta aut suscipit earum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(18,9,10,1,107.00,2.00,2049.00,'Earum dignissimos totam ea vitae asperiores. Eum sit facilis ex ab quae quae. Et eos facere molestiae tenetur.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(19,7,48,1,55.00,8.00,2277.00,'Totam quidem sed modi sapiente ab. Aperiam placeat dolorem fugiat. Est omnis eligendi alias quae doloribus ut alias. Et velit expedita sit vero et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(20,6,34,1,164.00,4.00,264.00,'Eum voluptatem deleniti repellat amet. Ut pariatur repellat enim voluptatibus animi sit. Est error autem neque veritatis. Enim animi illo corrupti commodi quis sequi sed consequuntur. Ducimus sapiente vel inventore fugiat quia recusandae voluptatibus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(21,5,16,1,108.00,7.00,2072.00,'Voluptatem nemo dolor molestias sit in pariatur eius sint. Pariatur quam recusandae nostrum eligendi consectetur. Ullam cupiditate iusto omnis impedit.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(22,5,49,1,173.00,17.00,114.00,'Quasi non perferendis cupiditate voluptas. Quis ipsam et nobis quasi. Sunt rerum molestias fuga error.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(23,4,12,1,124.00,9.00,273.00,'Perferendis occaecati beatae tenetur incidunt provident omnis veritatis. Natus quam culpa ipsum dolores autem fuga quam qui. Et fuga aliquam soluta inventore. Odit veritatis maxime aliquid eaque consequatur ipsum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(24,1,39,1,130.00,10.00,686.00,'Quia totam vero atque quod tempora. Corporis ipsa ut voluptatum vel consequatur cumque praesentium. Laborum modi et magnam. Et laborum eum id qui.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(25,1,25,1,73.00,9.00,2461.00,'Quasi aut itaque quo totam quo minus odio. Deserunt officia qui praesentium veniam perferendis neque quia. Accusamus consequatur esse minus est. Deserunt quibusdam perferendis nulla fugit.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(26,10,20,1,106.00,19.00,1829.00,'Sunt qui rem magnam ducimus quis natus. Nemo eos aspernatur exercitationem vero ad aliquid rerum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(27,8,36,1,152.00,1.00,2698.00,'Et deleniti sed porro ad commodi reprehenderit qui et. Maxime voluptatem commodi deleniti dolores. Nisi qui necessitatibus consequatur maxime aut repudiandae. Debitis iusto molestias sed aperiam cupiditate vel et minus.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(28,5,31,1,127.00,4.00,2722.00,'Qui placeat soluta quo nesciunt saepe dolor nihil quis. Minima sed suscipit sed quia maiores aperiam dolores aut. Possimus ipsa harum dolorum fugiat iure labore. Tempore sit quia ipsa quia magni dolores.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(29,6,20,1,104.00,11.00,1926.00,'Error voluptatem consequatur cum. Dolorem facere amet nisi. Dicta et iste sequi officiis et. Sequi cumque corrupti repudiandae nulla itaque reprehenderit quod repellat. Impedit aut dolores voluptatibus et.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(30,3,25,1,98.00,3.00,1954.00,'Est nihil aliquid dolorem est praesentium voluptas. Magnam fugiat iste inventore saepe sit harum. Beatae cupiditate et odio ut occaecati expedita in. Est molestiae nisi ipsa ullam.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(31,3,10,1,77.00,16.00,2821.00,'Est harum consequatur a id dolor qui. Aut fugiat placeat laboriosam. Dolore enim accusamus quas a. Placeat omnis quaerat aut ipsa blanditiis beatae.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(32,2,19,1,137.00,6.00,2721.00,'Nihil unde beatae ea id nam consequatur corporis. Voluptates sit voluptatem possimus optio deserunt tempore laboriosam quis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(33,1,24,1,64.00,12.00,738.00,'Rerum voluptas dolor atque. Maxime illo laborum distinctio et. Itaque consequatur repellendus quibusdam eaque ratione praesentium. Et consequatur ducimus a provident atque amet voluptates.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(34,2,34,1,131.00,10.00,787.00,'Qui aliquid tenetur illum iure voluptatibus est laborum. Magni ducimus omnis dolorum laborum. Nostrum occaecati saepe quisquam nobis et fugiat asperiores veritatis. Aut quia in impedit voluptatem et deserunt dolor.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(35,4,42,1,163.00,2.00,2892.00,'Ut maiores dolorem at reprehenderit a aperiam qui. Sit id est iure dolores eum qui. Dolor enim consequatur aliquam exercitationem modi sapiente. Corporis voluptatem maiores accusamus eum officia consequatur.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(36,4,13,1,176.00,8.00,2669.00,'Non aut illo neque cumque perferendis eos officiis. Quidem et culpa cum aspernatur quia quia sequi. Ipsam placeat exercitationem rem odio molestiae.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(37,3,50,1,80.00,15.00,2363.00,'Ea pariatur assumenda dicta et. Sint culpa provident veniam porro occaecati ut aut pariatur. Officiis molestiae aut perferendis itaque. Sunt mollitia eligendi dolorem aut perspiciatis.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(38,7,42,1,67.00,8.00,2626.00,'Cum dolor consequuntur nihil consequatur. Enim consectetur voluptatibus tempore corrupti ex at. Est sed qui dolores facilis est laboriosam. Enim sint aut omnis autem molestiae sequi. Et suscipit consectetur sit doloribus sed.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(39,6,41,1,188.00,17.00,2987.00,'Nam blanditiis reiciendis reprehenderit incidunt. Eius accusantium corrupti voluptas sapiente. Consequatur hic est voluptatum quo suscipit voluptas. Veritatis laboriosam aperiam sit doloremque consequatur molestias.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(40,1,21,1,181.00,17.00,2327.00,'Aspernatur recusandae est et autem voluptatem omnis totam facere. Fuga ut facere eaque quo sed consequatur. Esse aut optio totam incidunt cumque. Et odit voluptatem veniam quae.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(41,10,37,1,135.00,18.00,342.00,'Ipsum asperiores enim a aut consequatur. Illum quia recusandae qui rerum rerum non eveniet. Eos perspiciatis recusandae maxime occaecati saepe cupiditate in facilis. Officiis autem modi sed doloremque et officia. Et neque a debitis a.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(42,4,15,1,189.00,2.00,719.00,'A blanditiis pariatur est autem. Omnis totam dignissimos vel rerum omnis. Dolor vitae numquam possimus vero. Est nostrum non sed vel.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(43,3,45,1,116.00,6.00,2777.00,'Asperiores eos quia a omnis sed quasi. Tempora animi excepturi molestias consequatur.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(44,5,39,1,152.00,9.00,199.00,'Molestiae illum est velit asperiores deleniti. Dolorum quo sint at at. Porro voluptatibus tenetur vitae voluptatem eveniet mollitia.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(45,10,8,1,161.00,16.00,1646.00,'Earum perspiciatis id deleniti deleniti officiis reiciendis. Cumque vero ut enim natus vel dicta. Labore officia nam eum unde.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(46,7,44,1,119.00,19.00,2712.00,'Sunt aut sit suscipit aut unde. Asperiores dolor reprehenderit et voluptatum deleniti inventore laborum. Officiis eum quam necessitatibus quibusdam eum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(47,5,38,1,97.00,1.00,627.00,'Perspiciatis quis enim placeat odio sint. Non odit numquam omnis natus ad libero aut. Officiis in nobis et sit assumenda dolorum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(48,6,35,1,176.00,19.00,2707.00,'Et aut quam et eos sunt et. Nostrum quod non ratione quod et et. Optio voluptatum laborum exercitationem tempore. Impedit culpa nihil sapiente debitis ut.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(49,6,18,1,148.00,12.00,1503.00,'Perferendis nulla similique voluptatum. Vero est voluptatem dignissimos et facere. Mollitia libero ut saepe velit modi. Harum ut nulla non magni aut autem quam. Quo et cum suscipit et id.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL),(50,9,41,1,180.00,8.00,146.00,'Beatae id blanditiis quasi ut quod suscipit exercitationem. Quia delectus consequatur autem corrupti. Id est quod natus eligendi ut tenetur qui. Voluptatem quam explicabo nostrum.','2023-06-27 17:35:26','2023-06-27 17:35:26',NULL);
/*!40000 ALTER TABLE `pedidos_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id_produto` int unsigned NOT NULL AUTO_INCREMENT,
  `id_tipo_produto` int NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacoes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,3,'Fritas com Cheddar e Bacon','Batata frita, cheddar, bacon, calabresa e catupiry','20230803114943600.png',NULL,'2023-08-03 12:49:11','2023-08-03 14:49:43',NULL),(2,3,'Nuggets','Peito de frango moido com ervas, empanado e frito','20230803115000145.png',NULL,'2023-08-03 12:53:30','2023-08-03 14:50:00',NULL),(3,3,'Mandioca Frita','Madioca frita, com pimenta biquinho','20230803115043494.png',NULL,'2023-08-03 14:50:43','2023-08-03 14:50:43',NULL),(4,3,'Polenta Frita','Polenta frita acompanhada de Molhos da casa','20230803115134136.png',NULL,'2023-08-03 14:51:34','2023-08-03 14:51:34',NULL),(5,3,'Frango à Passarinho','Frango à passarinho acompanhado de maionese verde','20230803120309371.png',NULL,'2023-08-03 15:03:09','2023-08-03 15:03:09',NULL),(6,3,'Mini Pastel','Mix de mini pastel de queijo, carne, calabresa, frango e camarão','20230803120440320.png',NULL,'2023-08-03 15:04:40','2023-08-03 15:04:40',NULL),(7,3,'Tortano','Muçarela, calabresa, catupiry e bacon','20230803120541431.png',NULL,'2023-08-03 15:05:41','2023-08-03 15:05:41',NULL),(8,3,'Focaccia','Muçarela, tomate seco, azeitona preta, cebola e ervas','20230803120559579.png',NULL,'2023-08-03 15:05:59','2023-08-03 15:05:59',NULL);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos_tamanhos`
--

DROP TABLE IF EXISTS `produtos_tamanhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos_tamanhos` (
  `id_produto_tamanho` int unsigned NOT NULL AUTO_INCREMENT,
  `id_produto` int NOT NULL,
  `id_tamanho` int NOT NULL DEFAULT '1',
  `preco` decimal(10,2) NOT NULL DEFAULT '0.00',
  `observacoes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produto_tamanho`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos_tamanhos`
--

LOCK TABLES `produtos_tamanhos` WRITE;
/*!40000 ALTER TABLE `produtos_tamanhos` DISABLE KEYS */;
INSERT INTO `produtos_tamanhos` VALUES (1,1,1,47.00,'850g','2023-08-03 15:16:00','2023-08-03 15:16:00',NULL),(2,1,2,25.00,'500g','2023-08-03 15:16:15','2023-08-03 15:16:15',NULL),(3,1,3,15.00,'250g','2023-08-03 15:16:25','2023-08-03 15:16:25',NULL),(4,2,1,47.00,'850g','2023-08-03 15:16:58','2023-08-03 15:16:58',NULL),(5,2,2,25.00,'500g','2023-08-03 15:17:08','2023-08-03 15:17:08',NULL),(6,2,3,15.00,'250g','2023-08-03 15:17:20','2023-08-03 15:17:20',NULL),(7,3,1,47.00,'850g','2023-08-03 15:17:43','2023-08-03 15:17:43',NULL),(8,3,2,25.00,'500g','2023-08-03 15:17:57','2023-08-03 15:17:57',NULL),(9,3,3,15.00,'250g','2023-08-03 15:18:05','2023-08-03 15:18:05',NULL),(10,4,1,47.00,'850g','2023-08-03 15:18:29','2023-08-03 15:18:29',NULL),(11,4,2,25.00,'500g','2023-08-03 15:18:38','2023-08-03 15:18:38',NULL),(12,4,3,15.00,'250g','2023-08-03 15:18:49','2023-08-03 15:18:49',NULL),(13,7,7,30.00,NULL,'2023-08-03 15:19:15','2023-08-03 15:19:15',NULL),(14,8,7,30.00,NULL,'2023-08-03 15:19:25','2023-08-03 15:19:25',NULL),(15,5,1,47.00,'850g','2023-08-03 15:19:38','2023-08-03 15:19:38',NULL),(16,5,2,25.00,'500g','2023-08-03 15:19:49','2023-08-03 15:19:49',NULL),(17,5,3,15.00,'250g','2023-08-03 15:19:56','2023-08-03 15:19:56',NULL),(18,6,1,30.00,'25 Mini Pasteis','2023-08-03 15:20:36','2023-08-03 15:20:36',NULL),(19,6,2,23.00,'15 Mini Pasteis','2023-08-03 15:20:53','2023-08-03 15:20:53',NULL),(20,6,3,15.00,'10 Mini Pasteis','2023-08-03 15:21:11','2023-08-03 15:21:11',NULL);
/*!40000 ALTER TABLE `produtos_tamanhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id_status` int unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tamanhos`
--

DROP TABLE IF EXISTS `tamanhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tamanhos` (
  `id_tamanho` int unsigned NOT NULL AUTO_INCREMENT,
  `tamanho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tamanho`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tamanhos`
--

LOCK TABLES `tamanhos` WRITE;
/*!40000 ALTER TABLE `tamanhos` DISABLE KEYS */;
INSERT INTO `tamanhos` VALUES (1,'Grande','2023-03-08 15:08:08',NULL,NULL),(2,'Média','2023-03-08 15:08:08',NULL,NULL),(3,'Pequena','2023-03-08 15:08:08',NULL,NULL),(4,'Brotinho','2023-03-08 15:08:08',NULL,NULL),(5,'1Litro','2023-03-08 15:08:08',NULL,NULL),(6,'2 Litros','2023-03-08 15:08:08',NULL,NULL),(7,'Único','2023-03-08 15:08:08',NULL,NULL);
/*!40000 ALTER TABLE `tamanhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_pagamentos`
--

DROP TABLE IF EXISTS `tipos_pagamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_pagamentos` (
  `id_tipo_pagamento` int unsigned NOT NULL AUTO_INCREMENT,
  `tipo_pagamento` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_pagamento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_pagamentos`
--

LOCK TABLES `tipos_pagamentos` WRITE;
/*!40000 ALTER TABLE `tipos_pagamentos` DISABLE KEYS */;
INSERT INTO `tipos_pagamentos` VALUES (1,'Não Definido','2023-06-20 19:24:15',NULL,NULL);
/*!40000 ALTER TABLE `tipos_pagamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_pedidos`
--

DROP TABLE IF EXISTS `tipos_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_pedidos` (
  `id_tipo_pedido` int unsigned NOT NULL AUTO_INCREMENT,
  `tipo_pedido` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_pedidos`
--

LOCK TABLES `tipos_pedidos` WRITE;
/*!40000 ALTER TABLE `tipos_pedidos` DISABLE KEYS */;
INSERT INTO `tipos_pedidos` VALUES (1,'Não Definido','2023-06-20 19:24:15',NULL,NULL);
/*!40000 ALTER TABLE `tipos_pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_produtos`
--

DROP TABLE IF EXISTS `tipos_produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_produtos` (
  `id_tipo_produto` int unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_produtos`
--

LOCK TABLES `tipos_produtos` WRITE;
/*!40000 ALTER TABLE `tipos_produtos` DISABLE KEYS */;
INSERT INTO `tipos_produtos` VALUES (7,'Sucos','2023-08-03 12:37:33','2023-08-03 12:37:33',NULL),(2,'Pizzas Doces','2023-08-03 12:27:40','2023-08-03 12:27:40',NULL),(3,'Entradas','2023-08-03 12:35:52','2023-08-03 12:35:52',NULL),(4,'Pizzas Premium','2023-08-03 12:36:03','2023-08-03 12:36:03',NULL),(5,'Pizzas Tradicionais','2023-08-03 12:36:32','2023-08-03 12:36:32',NULL),(6,'Outras Pizzas','2023-08-03 12:37:02','2023-08-03 12:37:02',NULL),(8,'Refrigerantes','2023-08-03 12:37:37','2023-08-03 12:37:37',NULL),(9,'Cervejas','2023-08-03 12:37:42','2023-08-03 12:37:42',NULL),(10,'Drinks','2023-08-03 12:37:45','2023-08-03 12:37:45',NULL),(11,'Sobremesas','2023-08-03 12:37:59','2023-08-03 12:37:59',NULL),(12,'Nao definido','2023-08-03 12:37:59',NULL,NULL);
/*!40000 ALTER TABLE `tipos_produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cargo` int NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Manuela Zamana de Aguiar','campos.willian@example.com',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','aKeHVGat0u','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(2,'Dr. Rebeca Rivera Romero','eabreu@example.net',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','GzLJbFZPBD','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(3,'Dr. Betina Mascarenhas Filho','pena.ian@example.com',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','FLqXeYuoVl','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(4,'Dr. César Vega Filho','verdara.maximo@example.com',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','31PeDYP1dS','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(5,'Téo Marin Paes','serna.david@example.org',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','t0MScira46','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(6,'Srta. Eva da Rosa Ortiz Sobrinho','josefina40@example.org',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Iz70enexge','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(7,'Srta. Laís Daniella Franco','ymeireles@example.com',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','2L29vHOFBR','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(8,'Pérola Meireles Teles','droque@example.org',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','rYsdhT9mjf','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(9,'Srta. Daniele Teles','delvalle.manoela@example.net',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','rSXbncoHLk','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL),(10,'Sra. Mariana Delvalle','sara43@example.net',1,'2023-06-20 19:47:41','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','e7suou9zFL','2023-06-20 19:47:41','2023-06-20 19:47:41',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-03 12:22:11
