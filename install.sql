CREATE TABLE `route_alias` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`alias` VARCHAR(255) NOT NULL,
	`path` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`),
    INDEX (`alias`),
    INDEX (`path`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;