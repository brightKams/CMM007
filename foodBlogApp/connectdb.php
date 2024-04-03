<?php

$servername = "localhost";
$dbname = "taste9jafoodblog";
$username = "brightkams";
$password = "brightkams";

// CREATE A CONNECTION

$db = new mysqli($servername, $username, $password, $dbname);

// CHECK CONNECTION
if ($db->connect_error) {
    echo "Error: " . $db->connect_error;
    die("connection failed: " . $db->connect_error);
}


echo  "Successfully connected to " . "'" . $dbname . "'" . " DB"  ;


?>