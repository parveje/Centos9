<?php 
// DB credentials.
define('DB_HOST','backend');
define('DB_USER','root');
define('DB_PASS','Time@12345');
define('DB_NAME','bhw');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
