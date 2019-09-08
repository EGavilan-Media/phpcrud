CREATE DATABASE `egm_phpcrud`;

USE `egm_phpcrud`;

/*Table structure for table `tbl_record` */

DROP TABLE IF EXISTS `tbl_record`;

CREATE TABLE `tbl_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_record` */

INSERT INTO `tbl_record` (`id`, `firstname`, `lastname`, `address`, `skills`, `designation`, `created_date`) VALUES
(1, 'Haily', 'Barajas', 'Pennsylvania', ' HTML, CSS and JavaScrip', 'Web Design', '2019-09-07 23:44:39'),
(2, 'Carleton', 'Priest', 'Michigan', 'PHP and MySQL', 'Web Developer', '2019-09-07 23:45:41'),
(3, 'Chaman', 'Maes', 'New York', 'PHP', 'Web Developer', '2019-09-07 23:46:40'),
(4, 'Tim', 'Smith', 'Illinois', 'HTML and CSS', 'Web Design', '2019-09-07 23:48:22');

