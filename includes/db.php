<?php

//check whether we are running inside a docker container

$host = (getenv('DOCKER_ENV'))?'db':'localhost';
$user =  'root';
$pass = (getenv('DOCKER_ENV'))?'root':'';
$dbname = 'testshopdb';

$conn = mysqli_connect($host,$user,$pass,$dbname);

if(!$conn)
    {
        die("Database connection faild". mysqli_connect_error());
    }
?>