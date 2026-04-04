<?php
session_start();

if(isset($_SESSION['user_id']))
    {
        if($_SESSION['user_role'] == "admin")
            {

            }
        else
            {
                echo "go for user dashboard";
            }
    }

else
    {
      header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .dashboard_sidebar
            {
                position: fixed;
                top: 0;
                background-color: gold;
                width: 200px;
                height: 100%;
            }
        
        .dashboard_sidebar ul li 
            {
                list-style: none;
                text-align: center;
                
            }

        .dashboard_sidebar ul li a
            {
                padding: 10px;
                display: block;
                text-decoration: none;
                color: black;
            }

        .dashboard_sidebar ul li a:hover
            {
                background-color: gray;
            }

        .dashboard_main
            {
                padding: 30px;
                margin-left: 200px;
            }

    </style>
</head>
<body>
    <div class="dashboard_sidebar">
        <ul>
            <li><a href="addproduct.php">Add Product </a> </li>
            <li><a href="">View Order </a> </li>
            <li><a href="logout.php">Logout </a> </li>
        </ul>
    </div>

    <div class="dashboard_main"></div>
</body>
</html>