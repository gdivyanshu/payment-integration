<?php
//Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbpassword = '';
$dbName = 'paypal';
//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbpassword, $dbName);
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>

