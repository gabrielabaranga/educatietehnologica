-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: site
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clasav`
--

DROP TABLE IF EXISTS `clasav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clasav` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) DEFAULT NULL,
  `descr` text,
  `data_postare` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clasav`
--

LOCK TABLES `clasav` WRITE;
/*!40000 ALTER TABLE `clasav` DISABLE KEYS */;
INSERT INTO `clasav` VALUES (1,'Bucataria si dotarea acesteia','Bucătăria este spatiul în care se prepara hrana prin aplicarea anumitor tehnologii asupra alimentelor.\r\nPentru pregătirea si prelucrarea alimentelor se folosesc:\r\n-Vasele: Oalele si cratitele \r\nVesela,Tacamurile \r\n-Paharele\r\n-Ustensilele\r\n-Dispozitivele\r\n-Aparate de bucatarie: \r\n-pentru prelucrarea alimentelor\r\n-pentru pastrarea si conservarea alimentelor\r\n-pentru pregatirea termica a mancarii\r\nFactorii de confort in bucatarie:\r\n-Dispunerea mobilierului\r\n-Amplasarea chiuvetei si aragazului \r\n-Dotarea cu obiectele necesare \r\n-Iluminatul\r\n-Finisajul pereţilor şi al pardoselii \r\nAranjarea mesei reprezinta totalitatea operatiunilor ce se efectueaza pentru pregatirea si aranjarea obiectelor de inventar in vederea servirii consumatorilor.\r\nObiecte de inventar:\r\n-farfuria suport este farfuria in contact cu masa\r\n-cutitul obisnuit pentru preparatul de baza la dreapta farfuriei cu partea taioasa inspre farfurie\r\n-furculita este asezata la stanga farfuriei\r\n-paharele(de apa, vin alb, pentru aperitiv) se asaza in fata farfuriei spre dreapta\r\n-cosul de paine in stanga furculitelor\r\n-servet de panza\r\nObiectele de decor sunt florile puse in vaze mai putin inalte si lumanarile decorative.','2019-06-01 13:40:10'),(4,'Recapitulare Originea alimentelor','Elevii cunosc:\r\n- alimentele de origine minerală, vegetală şi animală;\r\n- noţiuni despre creşterea animalelor şi factorii care o influenţează;\r\n- informaţii despre cultivarea plantelor de câmp şi grădină şi factorii care la influenţează \r\nEnumera tipurile de alimente după originea lor\r\nDescrie lucrări de cultivare a plantelor şi enumera factorii care le influenţează\r\nRecunoaste animalele domestice şi influenţa factorilor de mediu asupra creşterii acestora','2019-06-01 14:12:50'),(5,'Prepararea la rece a alimentelor','Pentru acest mod de preparare se aplică metode mecanice cum ar fi:curatarea,taierea, amestecarea; ele constau în obtinerea unor produse alimentare folosite ca atare sau se realizeaza o operatie de pregatire a alimentelor inainte de prelucrarea termica.\r\n-Produsele alimentare astfel preparate sunt :\r\n*aperitivele reci(sandvisurile) cu branzeturi, mezeluri, salata de icre, oua umplute,\r\n*salatele (din legume sau fructe),\r\n*sucurile din fructe(presarea fructelor în storcator),\r\nA.Transmiterea instructajului tehnic:\r\n1.Discutii pregatitoare.\r\n2.Normele de protectia muncii: -profesorul prezinta regulile generale de protectia muncii, masurile personale si manipularea corecta a obiectelor taioase.\r\n3.Explicatia de catre profesor a etapelor de lucru, impărtirea materialelor fiecarei grupe, elevii din fiecare grupa isi vor impărti sarcinile, vor desemna un lider, vor efectua sarcinile ce le revin.\r\nB.Aplicarea în practică a instructajului transmis: munca independenta si in grup, executarea de catre fiecare elev a unei sarcini de lucru, realizarea corecta si în mod cronologic a etapelor de lucru.\r\nPe parcursul lucrării practice se urmăreste: minuirea corecta a materialelor, executarea corecta a sarcinilor de lucru, pozitia de lucru si modul de cooperare intre membrii grupului, respectarea normelor de igiena si tehnica securitatii muncii.\r\nProfesorul intervine in cazul in care una din grupe nu a inteles modul de lucru.\r\n','2019-06-01 14:13:13');
/*!40000 ALTER TABLE `clasav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clasavi`
--

DROP TABLE IF EXISTS `clasavi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clasavi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) DEFAULT NULL,
  `descr` text,
  `data_postare` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clasavi`
--

LOCK TABLES `clasavi` WRITE;
/*!40000 ALTER TABLE `clasavi` DISABLE KEYS */;
INSERT INTO `clasavi` VALUES (1,'Functii si scheme functionale ale locuintei','Functii si scheme functionale ale locuintei\r\n-enumera obiectivele\r\nFunctiile unei locuinte sunt:\r\n-adapostire\r\n-destindere si primirea oaspetilor\r\n-dormit\r\n-studiu\r\n-prepararea si servitul mesei\r\n-igiena personala\r\n-depozitare\r\nIncaperile locuintei sunt:\r\n-vestibul(holul)\r\n-camera de zi\r\n-dormitorul\r\n-camera scolarului\r\n-baia\r\n-bucataria\r\n-camara\r\nIn functie de modul in care se face trecerea dintr-o incapere in alta, pentru locuinta exista doua scheme functionale:\r\n-decomandata\r\n-semidecomandata','2019-06-01 14:14:15'),(2,'Locuinta.Tipuri de locuinte si confortul ambiental','Locuinta reprezinta o constructie, formata din una sau mai multe camere de locuit si dependinte, folosita in general de o singura familie.\r\nIn functie de modul de grupare in cladirea de locuit exista:\r\n-locuinta individuala specifica mediului rural si unor cartiere urbane. Locuintele individuale sunt case sau vile.\r\n-locuintele colective sunt numite si blocuri de locuinte: fiecare locuinta din bloc numindu-se apartament.\r\nConfortul reprezinta totalitatea conditiilor materiale care asigura o existenta civilizata, placuta comoda si igienica.\r\nFactorii care determina confortul in locuinta sunt:\r\n-factori fizici \r\n-factori de constructie\r\nFactorii fizici sunt:\r\n-compozitia aerului\r\n-umiditatea\r\n-temperatura aerului\r\n-lumina\r\n-culorile\r\n-zgomotul.\r\nFactorii de constructie sunt:\r\n-marimea locuintei\r\n-impartirea optima a spatiului\r\n-finisajele\r\n-existenta retelelor de utilitati.','2019-06-01 14:14:38');
/*!40000 ALTER TABLE `clasavi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clasavii`
--

DROP TABLE IF EXISTS `clasavii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clasavii` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) DEFAULT NULL,
  `descr` text,
  `data_postare` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clasavii`
--

LOCK TABLES `clasavii` WRITE;
/*!40000 ALTER TABLE `clasavii` DISABLE KEYS */;
/*!40000 ALTER TABLE `clasavii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clasaviii`
--

DROP TABLE IF EXISTS `clasaviii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clasaviii` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) DEFAULT NULL,
  `descr` text,
  `data_postare` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clasaviii`
--

LOCK TABLES `clasaviii` WRITE;
/*!40000 ALTER TABLE `clasaviii` DISABLE KEYS */;
/*!40000 ALTER TABLE `clasaviii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postari`
--

DROP TABLE IF EXISTS `postari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postari` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `descr` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_postare` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postari`
--

LOCK TABLES `postari` WRITE;
/*!40000 ALTER TABLE `postari` DISABLE KEYS */;
INSERT INTO `postari` VALUES (23,'Origami','In tehnica Origami se foloseste hartie alba sau colorata in forma patrata.\r\nSe utilizeaza frecvent si alte forme: dreptunghiulara, de triunghi echilateral, pentagoane, hexagoane, cercuri, elipse, fasii lungi si inguste etc. Plierea se face dupa reguli precise respectand ordinea etapelor. Este o mare placere sa vezi cum o bucata de hartie se transforma intr- o forma spatiala.[1,2]\r\nCel mai adesea se folosesc coli de hartie colorata pe o singura parte, de obicei, un patrat cu latura de 10-15 cm. Europenii recurg la patratele obtinute prin reducerea colilor de format A4 (21 cm) sau A5 (15 cm). Pentru a mari durabilitatea figurinei, in cazurile cand se doreste aceasta, se folosesc sortimente speciale de hartie, obiectele create din acest tip de hartie seamana cu niste bibelouri. Aproape orice bucata de hartie poate fi folosita pentru origami; exista insa si hartii speciale, foarte fine. Primul lucru care trebuie invatat sunt simbolurile care ne arata sensurile de impaturire a hartiei. Sunt 9 simboluri cu nume sugestive, precum impaturirea in vale sau impaturirea in munte. apoi formele de baza. Pentru fiecare figura exista diagrame care descriu modul in care tebuie impaturita hartia.\r\n1-un patrat de hartie se indoie pe liniile de mijloc si se revine\r\n2-laturile din stanga si din dreapta se pliaza pana la linia de mijloc\r\n3-latura de sus se indoaie in jos, pe linia de mijloc\r\n4-marginea din fata a figurii se ridica in sus pe linia punctata\r\n5-colturile din stanga si dreapta se indoaie si se dezindoaie\r\n6-laturile din partea superioara se indoiaie pe liniile punctuate, se deschide marginea si se preseaza\r\n7-se intoarce figura\r\n8-se deseneaza ferestre;\r\n9-se poate folosi in forma plata pentru colaje sau se indoaie pe linia de mijloc pentru machete.\r\n2.ORIGAMI LA ORELE DE EDUCATIE TEHNOLOGICA\r\nTehnica Origami favorizeaza obtinerea a diferite obiecte decorative, tablouri, buchete de flori, felicitari pentru diferite ocazii, podoabe pentru pomul de Craciun, cosulete, obiecte de uz cotidian (plicuri, invitatii, semne de carte etc.).dar si planse colaj, machete reprezentative pentru diverse module de la disciplina Educatia Tehnologica sau la alte discipline.\r\nUrmarirea atenta a etapelor si executarea corecta implica realizarea unui produs de calitate, idee ce poate fi aplicata in orice situatie din experienta personala a individului.\r\nDatorita structurii modulare a disciplinei Educatia Tehnologica, continuturile materiei permit o abordare multidisciplinara a secventelor de instruire. Astfel utilizarea tehnici ORIGAMI la orele de aplicatii practice mareste sfera conexiunilor cu alte discipline studiate de elevi.','2019-06-01 12:34:56');
/*!40000 ALTER TABLE `postari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useri`
--

DROP TABLE IF EXISTS `useri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useri` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `parola` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useri`
--

LOCK TABLES `useri` WRITE;
/*!40000 ALTER TABLE `useri` DISABLE KEYS */;
INSERT INTO `useri` VALUES (7,'test','$2y$10$3hDILbuoRDjXHCUiy9tKsO2fsx2smptKJgEbOIi8.v09mPRx.HF.6','test@test.net'),(8,'test2','$2y$10$Ml/7EUGECArPfPrgvaQqIOC4HFbUpsYcU5hlVKD8QRbWVh4RU9wMq','dsds@dsds.ro'),(9,'test','$2y$10$IxbQIDok9PO.bxIYkJQQGuo9AZy1kSqczkoqwLn0LiVOK8szjZRFa','test@test.ro'),(10,'test1','$2y$10$SmQ1mIYWcUGGr5tJ9z0eS.md14/ysZNKUIJqPqPem.TRfuTh7y26W','test1@test1.ro');
/*!40000 ALTER TABLE `useri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-01 14:34:16
