<?php
require "bootstrap.php";

$seed = <<<EOS
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `database`;

CREATE TABLE `person` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `age` int(3) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `person`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO `person`(`name`, `age`)
VALUES("Steve Jobs", 34);

INSERT INTO `person`(`name`, `age`)
VALUES("Steven Seagal", 26);

INSERT INTO `person`(`name`, `age`)
VALUES("Steven Spielberg", 45);
EOS;

try
{
  $seedDb = $db->exec($seed);
  echo "Success!\n";
}
catch (\PDOException $e)
{
  exit($e->getMessage());
}
?>