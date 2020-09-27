<?php
require "src/Database.php";

// MYSQL configuration (2020.09.07) Attila
define("MYSQL_CONNECTION_STRING", "YOUR_STRING_HERE");
define("USERNAME", "YOUR_USERNAME_HERE");
define("PASSWORD", "YOUR_PASSWORD_HERE");

use API\Src\Database;

$db = new Database();
$db = $db->GetConnection();
?>