/*drop database if exists register;
create database register;
use register;

INSERT INTO `login` (`id`, `username`,`email`, `password`) VALUES 
(1,'suganja','kichaa4@gmail.com','Tsgnya13'),
(2,'buresr','kichaa4@gmail.com','123');
*/

DROP database IF EXISTS db_documentation;
CREATE database if not exists db_documentation;
use db_documentation;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Table structure for table `admin`
/*Tsgnya13*/

CREATE TABLE `admin` (
    `id` INT NOT NULL AUTO_INCREMENT,
   /* `name` VARCHAR(50) NOT NULL,*/
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `code` VARCHAR(10) not null default 'bursar123',
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL ,
      PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE = InnoDB DEFAULT CHARSET=latin1 ;

/*INSERT INTO `admin`(`id`, `username`, `email`, `code`, `password`, `salt`) 
VALUES (1,'Suganya','kichaa4@gmail.com','bursar123','8c2ad9a1cf25cd6d4738f073e26d394e0fe6e0f6171d483dddb30a7ab9a8b7daf0ae49e4ea3ebaa07f397f43fed81f87dfff8b3372bd6d7994f5896771675ba4','23a18c79bb635e820350a68b381d3b8d09b281e11aafdc370dd6f4ae4aa757b1b6cfdd28106a220e7861a27798c3f5209db65bf76ab530aabbc280bfc29c7f09');
*/


-- Table structure for table `user1`

CREATE TABLE `user1` (
    `id` INT NOT NULL AUTO_INCREMENT,
    
	`username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `code` VARCHAR(10) not null default 'bursar123',
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL ,
          PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE = InnoDB DEFAULT CHARSET=latin1 ;

-- Table structure for table `user2`

CREATE TABLE `user2` (
    `id` INT NOT NULL AUTO_INCREMENT,
    
	`username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `code` VARCHAR(10) not null default 'bursar123',
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL ,
          PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE = InnoDB DEFAULT CHARSET=latin1 ;

-- Table structure for table `user3`

CREATE TABLE `user3` (
    `id` INT NOT NULL AUTO_INCREMENT,
   
	`username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `code` VARCHAR(10) not null default 'bursar123',
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL ,
          PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE = InnoDB DEFAULT CHARSET=latin1 ;



/***CREATE TABLE `members` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `position` VARCHAR(50) NOT NULL,
    `code` VARCHAR(10) not null default 'bursar123',
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL 
) ENGINE = InnoDB DEFAULT CHARSET=latin1 ;*/



-- Table structure for table `letter resistration`


DROP TABLE IF EXISTS `regtable`;
CREATE TABLE `regtable`(
	`date` VARCHAR(10) not null,
	`se_no` int not null,
	`from` VARCHAR(50) not null default '',
	`to` VARCHAR(50) not null ,
	`heading` varchar(500) not null default '',
	`billno` varchar(20) null,
	`amount` decimal(10,2) null,
	`view` blob null,
	`receiver` varchar(20)  null,
	`other` VARCHAR(500)  null,
	`reason` VARCHAR(500)  null,
	`return_date` VARCHAR(10)  null,
	PRIMARY KEY (`se_no`,`date`)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1;


-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
   `password` CHAR(128) NOT NULL,
  `position` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

/*INSERT INTO `users`(`id`, `username`, `email`, `password`, `position`) VALUES ('1','Suganya','kichaa4@gmail.com','Tsgnya13','Admin');
*/
-- Table structure for table `history`

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `position` varchar(30) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
