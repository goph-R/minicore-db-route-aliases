<?php

class DbRouteAlias extends Record {

/*
CREATE TABLE `route_alias` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`path` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci';
*/

    protected $tableName = 'route_alias';

    protected $id;
    protected $alias;
    protected $path;

}