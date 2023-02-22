SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: 'administrator'


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--  data for table `administrator`

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0');


-- Indexes for table `administrator`

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `administrator`

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;