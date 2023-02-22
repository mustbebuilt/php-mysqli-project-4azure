<?php
require_once("../includes/config.php");
$sql = "CREATE TABLE `Films` (
  `filmID` int(11) NOT NULL,
  `filmTitle` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `filmCertificate` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `filmDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `filmImage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `filmPrice` decimal(5,2) NOT NULL,
  `stars` int(11) NOT NULL,
  `releaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
if ($mysqli->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $mysqli->error;
}


