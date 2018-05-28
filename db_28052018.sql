-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: advancedblog
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Development','development','2018-05-13 15:43:15','2018-05-13 15:43:15'),(2,'Designing','designing','2018-05-13 15:43:28','2018-05-13 15:43:28'),(3,'Traveling','traveling','2018-05-13 15:43:39','2018-05-13 15:43:39'),(4,'Fashion','fashion','2018-05-13 15:43:54','2018-05-13 15:43:54'),(5,'Lifestyle','lifestyle','2018-05-13 15:44:14','2018-05-13 15:44:14'),(6,'Sports','sports','2018-05-24 16:28:11','2018-05-24 16:28:11');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_posts`
--

DROP TABLE IF EXISTS `category_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_posts` (
  `post_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `category_posts_post_id_index` (`post_id`),
  KEY `category_posts_category_id_index` (`category_id`),
  CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_posts`
--

LOCK TABLES `category_posts` WRITE;
/*!40000 ALTER TABLE `category_posts` DISABLE KEYS */;
INSERT INTO `category_posts` VALUES (1,1,'2018-05-28 09:33:53','2018-05-28 09:33:53'),(1,2,'2018-05-28 09:33:53','2018-05-28 09:33:53'),(2,2,'2018-05-28 09:54:57','2018-05-28 09:54:57'),(2,5,'2018-05-28 09:54:57','2018-05-28 09:54:57'),(3,4,'2018-05-28 09:57:42','2018-05-28 09:57:42'),(4,5,'2018-05-28 10:00:26','2018-05-28 10:00:26'),(5,6,'2018-05-28 10:03:51','2018-05-28 10:03:51');
/*!40000 ALTER TABLE `category_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_05_12_095438_create_posts_table',1),(4,'2018_05_12_100127_create_tags_table',1),(5,'2018_05_12_100155_create_categories_table',1),(6,'2018_05_12_100359_create_category_posts_table',1),(7,'2018_05_12_100707_create_post_tags_table',1),(8,'2018_05_12_100952_create_admins_table',1),(9,'2018_05_12_101145_create_roles_table',1),(10,'2018_05_12_101235_create_admin_roles_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tags` (
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `post_tags_post_id_index` (`post_id`),
  KEY `post_tags_tag_id_index` (`tag_id`),
  CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tags`
--

LOCK TABLES `post_tags` WRITE;
/*!40000 ALTER TABLE `post_tags` DISABLE KEYS */;
INSERT INTO `post_tags` VALUES (1,1,'2018-05-28 09:33:53','2018-05-28 09:33:53'),(1,2,'2018-05-28 09:33:53','2018-05-28 09:33:53'),(2,1,'2018-05-28 09:54:57','2018-05-28 09:54:57'),(2,2,'2018-05-28 09:54:57','2018-05-28 09:54:57'),(3,1,'2018-05-28 09:57:42','2018-05-28 09:57:42'),(4,2,'2018-05-28 10:00:26','2018-05-28 10:00:26'),(5,2,'2018-05-28 10:03:51','2018-05-28 10:03:51');
/*!40000 ALTER TABLE `post_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Small Earth','The Earth was small, light blue and so touchingly alone.....','small-earth',NULL,'<p><strong>The Earth was small, light blue, and so touchingly alone, our home that must be defended like a holy relic. The Earth was absolutely round. I believe I never knew what the word round meant until I saw Earth from space.</strong></p>\r\n\r\n<pre>\r\n<code class=\"language-css\">p{height: 800}</code></pre>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there&rsquo;s a fundamental truth to our nature, Man must explore . . . and this is exploration at its greatest.</p>\r\n\r\n<p>Curious that we spend more time congratulating people who have succeeded than encouraging people who have not.</p>\r\n\r\n<p>Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.</p>\r\n\r\n<p>The regret on our side is, they used to say years ago, we are reading about you in science class. Now they say, we are reading about you in history class.</p>\r\n\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n<p><img alt=\"\" src=\"https://c1.staticflickr.com/5/4074/4858566900_5ddb0f6066_b.jpg\" /></p>\r\n\r\n<p>Astronomy compels the soul to look upward, and leads us from this world to another.</p>\r\n\r\n<p>Astronomy compels the soul to look upward, and leads us from this world to another.</p>\r\n\r\n<p>Problems look mighty small from 150 miles up.</p>\r\n\r\n<p>NASA is not about the &lsquo;Adventure of Human Space Exploration&rsquo;&hellip;We won&rsquo;t be doing it just to get out there in space &ndash; we&rsquo;ll be doing it because the things we learn out there will be making life better for a lot of people who won&rsquo;t be able to go.</p>',NULL,NULL,NULL,1,'2018-05-13 14:56:21','2018-05-28 10:35:51'),(2,'Man must explore, and this is exploration at its greatest','Problems look mighty small from 150 miles up','man-must-explore-and-this-is-exploration-at-its-greatest',NULL,'<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center &mdash; an equal earth which all men occupy as equals. The airman&#39;s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n\r\n<p>Science cuts two ways, of course; its products can be used for both good and evil. But there&#39;s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That&#39;s how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>\r\n\r\n<p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>\r\n\r\n<h2>The Final Frontier</h2>\r\n\r\n<p>There can be no thought of finishing for &lsquo;aiming for the stars.&rsquo; Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<p>There can be no thought of finishing for &lsquo;aiming for the stars.&rsquo; Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>\r\n\r\n<p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>\r\n\r\n<h2>Reaching for the Stars</h2>\r\n\r\n<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>\r\n\r\n<p><a href=\"https://blackrockdigital.github.io/startbootstrap-clean-blog/post.html#\"><img alt=\"\" src=\"https://blackrockdigital.github.io/startbootstrap-clean-blog/img/post-sample-image.jpg\" /></a>To go places and do things that have never been done before &ndash; that&rsquo;s what living is all about.</p>\r\n\r\n<p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there&rsquo;s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>',NULL,NULL,NULL,1,'2018-05-28 09:54:57','2018-05-28 09:55:15'),(3,'Science has not yet mastered prophecy','We predict too much for the next year and yet far too little for the next ten.','science-has-not-yet-mastered-prophecy',NULL,'<p>We have an infinite amount to learn both from nature and from each other</p>\r\n\r\n<p>I don&#39;t know what you could say about a day in which you have seen four beautiful sunsets.</p>\r\n\r\n<p>Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.</p>\r\n\r\n<p>When I orbited the Earth in a spaceship, I saw for the first time how beautiful our planet is. Mankind, let us preserve and increase this beauty, and not destroy it!</p>\r\n\r\n<p>To be the first to enter the cosmos, to engage, single-handed, in an unprecedented duel with nature&mdash;could one dream of anything more?</p>\r\n\r\n<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center &mdash; an equal earth which all men occupy as equals. The airman&#39;s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n\r\n<p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>\r\n\r\n<p>We choose to go to the moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone, and one which we intend to win.</p>\r\n\r\n<p><img alt=\"\" src=\"https://c1.staticflickr.com/9/8158/7678546866_d86a1ea550_c.jpg\" /></p>\r\n\r\n<p>Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next 10.</p>\r\n\r\n<p>The regret on our side is, they used to say years ago, we are reading about you in science class. Now they say, we are reading about you in history class.</p>\r\n\r\n<p>Buy why, some say, the moon? Why choose this as our goal? And they may as well ask why climb the highest mountain?</p>\r\n\r\n<p>We choose to go to the moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone, and one which we intend to win.</p>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there&rsquo;s a fundamental truth to our nature, Man must explore . . . and this is exploration at its greatest.</p>\r\n\r\n<p>Buy why, some say, the moon? Why choose this as our goal? And they may as well ask why climb the highest mountain?</p>\r\n\r\n<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That&#39;s how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>',NULL,NULL,NULL,1,'2018-05-28 09:57:42','2018-05-28 10:01:44'),(4,'Failure is not an option','Many say exploration is part of our destiny, but it’s actually our duty to future generations.','failure-is-not-an-option',NULL,'<p>Science cuts two ways, of course; its products can be used for both good and evil. But there&#39;s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n\r\n<p>I don&#39;t know what you could say about a day in which you have seen four beautiful sunsets.</p>\r\n\r\n<p>Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.</p>\r\n\r\n<p>NASA is not about the &lsquo;Adventure of Human Space Exploration&rsquo;&hellip;We won&rsquo;t be doing it just to get out there in space &ndash; we&rsquo;ll be doing it because the things we learn out there will be making life better for a lot of people who won&rsquo;t be able to go.</p>\r\n\r\n<p>The sky is the limit only for those who aren&#39;t afraid to fly!</p>\r\n\r\n<p>Problems look mighty small from 150 miles up.</p>\r\n\r\n<p>I don&#39;t know what you could say about a day in which you have seen four beautiful sunsets.</p>\r\n\r\n<p>The regret on our side is, they used to say years ago, we are reading about you in science class. Now they say, we are reading about you in history class.</p>\r\n\r\n<p>The sky is the limit only for those who aren&#39;t afraid to fly!</p>\r\n\r\n<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That&#39;s how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>\r\n\r\n<p><img alt=\"\" src=\"https://c1.staticflickr.com/4/3813/9460177260_ab99b745f2_k.jpg\" /></p>\r\n\r\n<p>If you could see the earth illuminated when you were in a place as dark as night, it would look to you more splendid than the moon.</p>\r\n\r\n<p>NASA is not about the &lsquo;Adventure of Human Space Exploration&rsquo;&hellip;We won&rsquo;t be doing it just to get out there in space &ndash; we&rsquo;ll be doing it because the things we learn out there will be making life better for a lot of people who won&rsquo;t be able to go.</p>\r\n\r\n<p>To go places and do things that have never been done before &ndash; that&rsquo;s what living is all about.</p>\r\n\r\n<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center &mdash; an equal earth which all men occupy as equals. The airman&#39;s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n\r\n<p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>\r\n\r\n<p>I believe every human has a finite number of heartbeats. I don&#39;t intend to waste any of mine</p>\r\n\r\n<p>When I orbited the Earth in a spaceship, I saw for the first time how beautiful our planet is. Mankind, let us preserve and increase this beauty, and not destroy it!</p>\r\n\r\n<p>We are all connected; To each other, biologically. To the earth, chemically. To the rest of the universe atomically.</p>\r\n\r\n<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>\r\n\r\n<p>We want to explore. We&rsquo;re curious people. Look back over history, people have put their lives at stake to go out and explore &hellip; We believe in what we&rsquo;re doing. Now it&rsquo;s time to go.</p>',NULL,NULL,NULL,1,'2018-05-28 10:00:26','2018-05-28 10:01:21'),(5,'That\'s one small step for [a] man, one giant leap for mankind.','To go places and do things that have never been done before – that’s what living is all about.','that-one-small-step-for-man-one-giant-leap-for-mankind',NULL,'<p><strong>The Earth was small, light blue, and so touchingly alone, our home that must be defended like a holy relic. The Earth was absolutely round. I believe I never knew what the word round meant until I saw Earth from space.</strong></p>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there&rsquo;s a fundamental truth to our nature, Man must explore . . . and this is exploration at its greatest.</p>\r\n\r\n<p>Curious that we spend more time congratulating people who have succeeded than encouraging people who have not.</p>\r\n\r\n<p>Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.</p>\r\n\r\n<p>The regret on our side is, they used to say years ago, we are reading about you in science class. Now they say, we are reading about you in history class.</p>\r\n\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n<p><img alt=\"\" src=\"https://c1.staticflickr.com/5/4074/4858566900_5ddb0f6066_b.jpg\" /></p>\r\n\r\n<p>Astronomy compels the soul to look upward, and leads us from this world to another.</p>\r\n\r\n<p>Astronomy compels the soul to look upward, and leads us from this world to another.</p>\r\n\r\n<p>Problems look mighty small from 150 miles up.</p>\r\n\r\n<p>NASA is not about the &lsquo;Adventure of Human Space Exploration&rsquo;&hellip;We won&rsquo;t be doing it just to get out there in space &ndash; we&rsquo;ll be doing it because the things we learn out there will be making life better for a lot of people who won&rsquo;t be able to go.</p>',NULL,NULL,NULL,1,'2018-05-28 10:03:51','2018-05-28 10:03:51');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Laravel','laravel','2018-05-13 15:44:41','2018-05-13 15:44:41'),(2,'Bootstrap','bootstrap','2018-05-13 15:45:00','2018-05-13 15:45:00');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2018-05-28 10:40:45
