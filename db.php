<?php

 DEFINE('CLAN_NAME', 'Clan/Community Name');
 DEFINE('SQL_HOST', '127.0.0.1');
 DEFINE('SQL_USER', 'root');
 DEFINE('SQL_PASS', 'password');
 DEFINE('SQL_DB', 'simpletechdemo');
 
// Create connection
$con = new mysqli(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB);

// Check connection
if ($con->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
}

?>
