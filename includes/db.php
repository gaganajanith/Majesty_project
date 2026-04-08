<?php

//check whether we are running inside a docker container

$host   = getenv('DB_HOST') ?: 'localhost';
$user   = getenv('DB_USER') ?: 'root';
$pass   = getenv('DB_PASS') ?: '';
$db     = getenv('DB_NAME') ?: 'testshopdb';

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn)
    {
        die("Database connection faild". mysqli_connect_error());
    }
?>