SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `items`

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `qty` int(10) NOT NULL DEFAULT '0',
  `image` varchar(1024) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--  data for table `products`


INSERT INTO `products` (`id`, `barcode`, `name`, `price`, `qty`, `image`, `description`) VALUES
(1, '001', 'xxxxxx', 55, 3, 'images/products/mac.jpg', 'basil basil'),
(2, '002', 'sdsdsd', 69, 4, 'images/products/mac.jpg', 'mahinda appchi');


-- PK for table `products`

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;`