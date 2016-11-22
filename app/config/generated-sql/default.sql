
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- bs_categories
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bs_categories`;

CREATE TABLE `bs_categories`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- bs_contents
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bs_contents`;

CREATE TABLE `bs_contents`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `id_product` INTEGER NOT NULL,
    `id_order` INTEGER NOT NULL,
    `quantity` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `id_product` (`id_product`),
    INDEX `id_order` (`id_order`),
    CONSTRAINT `bs_contents_ibfk_1`
        FOREIGN KEY (`id_product`)
        REFERENCES `bs_products` (`id`),
    CONSTRAINT `bs_contents_ibfk_2`
        FOREIGN KEY (`id_order`)
        REFERENCES `bs_orders` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- bs_orders
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bs_orders`;

CREATE TABLE `bs_orders`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `id_user` INTEGER NOT NULL,
    `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `date_edited` DATETIME,
    `date_cancelled` DATETIME,
    `id_state` INTEGER DEFAULT 1 NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `id_state` (`id_state`),
    INDEX `id_user` (`id_user`),
    CONSTRAINT `bs_orders_ibfk_1`
        FOREIGN KEY (`id_state`)
        REFERENCES `bs_states` (`id`),
    CONSTRAINT `bs_orders_ibfk_2`
        FOREIGN KEY (`id_user`)
        REFERENCES `bs_users` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- bs_products
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bs_products`;

CREATE TABLE `bs_products`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `id_category` INTEGER NOT NULL,
    `price` INTEGER NOT NULL,
    `availability` TINYINT NOT NULL,
    `icon` VARCHAR(255),
    PRIMARY KEY (`id`),
    INDEX `id_category` (`id_category`),
    CONSTRAINT `bs_products_ibfk_1`
        FOREIGN KEY (`id_category`)
        REFERENCES `bs_categories` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- bs_states
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bs_states`;

CREATE TABLE `bs_states`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- bs_users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `bs_users`;

CREATE TABLE `bs_users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `mail` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `rank` TINYINT DEFAULT 1 NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `postal_code` INTEGER NOT NULL,
    `suspensionDate` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
