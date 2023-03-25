<?php
    //creating tables sql in an array
    $create_tables_sql = array(
        "create table if not exists 'social_blog'.'address'(
            `address_id` VARCHAR(15) NOT NULL COMMENT 'a hash inter value',
            `address_house_no` INT NOT NULL DEFAULT 0,
            `address_street_name` VARCHAR(45) NOT NULL DEFAULT '####',
            `address_city` VARCHAR(45) NOT NULL,
            `address_region` VARCHAR(45) NOT NULL,
            `address_country` VARCHAR(45) NOT NULL,
            `address_zipcode` VARCHAR(10) NOT NULL,
            PRIMARY KEY (`address_id`),
            UNIQUE INDEX `address_id_UNIQUE` (`address_id` ASC)
        )",
        "create table if not exists 'social_blog'.'users'(
            `user_id` VARCHAR(20) NOT NULL COMMENT 'the id is a variable character of 20 indices. a mixture of social blog initial characters (sb) then the date of account creation and 10 indices interger value all concatinated. ',
            `user_name` VARCHAR(45) NOT NULL,
            `user_email` VARCHAR(45) NOT NULL,
            `user_password` VARCHAR(45) NOT NULL COMMENT 'the password is a concatination of alphanumeric characters and special characters. it should have a minimum lenght of 8',
            `user_dob` DATE NOT NULL,
            `user_contact` VARCHAR(45) NOT NULL,
            `user_gender` VARCHAR(6) NOT NULL,
            `user_status` VARCHAR(8) NOT NULL,
            `address_id` VARCHAR(15) NOT NULL,
            PRIMARY KEY (`user_id`, `address_id`),
            UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC),
            UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC),
            UNIQUE INDEX `user_contact_UNIQUE` (`user_contact` ASC),
            INDEX `fk_users_address1_idx` (`address_id` ASC),
            CONSTRAINT `fk_users_address1`
                FOREIGN KEY (`address_id`)
                REFERENCES `social_blog`.`address` (`address_id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION
        )",
        "create table if not exists 'social_blog'.'posts'(
        `post_id` VARCHAR(11) NOT NULL COMMENT 'the id is a hash value of 11 character (#0000000000)',
        `post_date` DATE NOT NULL,
        `post_title` VARCHAR(45) NOT NULL,
        `post_content` LONGTEXT NOT NULL,
        `post_likes` INT NOT NULL DEFAULT 0,
        `post_dislikes` INT NOT NULL DEFAULT 0,
        `post_engagements` INT NOT NULL,
        `post_commenting_state` TINYINT NOT NULL COMMENT 'his discribes wether or not comments are allowed on the post. it value is boolean of 1 for commenting allow and 0 for no commenting',
        `user_id` VARCHAR(20) NOT NULL,
        PRIMARY KEY (`post_id`),
        UNIQUE INDEX `post_id_UNIQUE` (`post_id` ASC) VISIBLE,
        INDEX `fk_posts_users_idx` (`user_id` ASC) VISIBLE,
        CONSTRAINT `fk_posts_users`
            FOREIGN KEY (`user_id`)
            REFERENCES `social_blog`.`users` (`user_id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
        )", );

?>