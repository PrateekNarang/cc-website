CREATE TABLE `wp_intern` (
 `email` varchar(255) NOT NULL,
 `Firstname` varchar(255) DEFAULT NULL,
 `Lastname` varchar(255) DEFAULT NULL,
 `college` varchar(255) DEFAULT NULL,
 `city` varchar(255) DEFAULT NULL,
 `whyInternWithUs` varchar(300) DEFAULT NULL,
 `whatYouHopeToAchieve` varchar(300) DEFAULT NULL,
 `whyPickyou` varchar(300) DEFAULT NULL,
 PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
