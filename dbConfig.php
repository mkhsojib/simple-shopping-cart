<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'sojib';
$dbPassword = '123@#456';
$dbName = 'codexworld';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>