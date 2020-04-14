CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `age` INT(3) NOT NULL,
  `email` VARCHAR(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;