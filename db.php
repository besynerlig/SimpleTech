<?php

 DEFINE('CLAN_NAME', 'Clan/Community Name');
 DEFINE('SQL_HOST', 'localhost');
 DEFINE('SQL_USER', 'root');
 DEFINE('SQL_PASS', '');
 DEFINE('SQL_DB', 'simpletechdemo');

// Create connection
$con = new mysqli(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB);

// Check connection
if ($con->connect_error) {
    die("Connection to database failed: " . $con->connect_error);
}

?>
