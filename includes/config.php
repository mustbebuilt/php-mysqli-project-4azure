<?php
/* Database credentials */
//DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD
define("DB_SERVER", $_ENV["DB_HOST"] );
define("DB_USERNAME", $_ENV["DB_USERNAME"]);
define("DB_PASSWORD", $_ENV["DB_PASSWORD"]);
define("DB_NAME", $_ENV["DB_DATABASE"]);
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
