CREATE TABLE `Role` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50)
);

CREATE TABLE `User` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `frist_name` varchar(100),
  `last_name` varchar(100),
  `email` varchar(100),
  `phone` varchar(20),
  `address` varchar(255),
  `password` varchar(20),
  `role_id` int,
  `created_at` datetime,
  `updated_at` datetime,
  `deleted` int
);

CREATE TABLE `Category` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50)
);

CREATE TABLE `Brands` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50)
);

CREATE TABLE `Product` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(150),
  `category_id` int,
  `barnd_id` int,
  `price` int,
  `color` varchar(20),
  `image` varchar(255),
  `description` longtext,
  `size` int,
  `dimensions` longtext,
  `created_at` datetime,
  `updated_at` datetime,
  `deleted` int
);

CREATE TABLE `Galery` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int,
  `image` varchar(255)
);

CREATE TABLE `Order` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `frist_name` varchar(100),
  `last_name` varchar(100),
  `email` varchar(100),
  `phone` varchar(20),
  `address` varchar(255),
  `note` varchar(255),
  `order_date` datetime,
  `status` int,
  `total_money` int
);

CREATE TABLE `Order_detail` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` int,
  `product_id` int,
  `price` int,
  `num` int,
  `total` int,
  `total_money` int,
  `code` varchar(255),
  `order_code` varchar(50)
);

CREATE TABLE `Contact` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `last_name` varchar(100),
  `email` varchar(100)
);

ALTER TABLE `User` ADD FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`);

ALTER TABLE `Galery` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Order_detail` ADD FOREIGN KEY (`order_id`) REFERENCES `Order` (`id`);

ALTER TABLE `Order_detail` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Order` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`barnd_id`) REFERENCES `Brands` (`id`);
