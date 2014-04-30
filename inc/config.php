<?php
//THis is the config File 
//error_repoting
error_reporting(-1);

//db connection
$dsn = 'mysql:dbname=test;host=localhost';
$user = 'dbuser';
$pass = 'dbpass';

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'There was a connection error: ' . $e->getMessage();
    die();
}

//Constants
?>