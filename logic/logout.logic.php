<?php
session_start();
session_destroy();
header("Location: /Majesty_project/pages/home/home.html");
exit();
?>