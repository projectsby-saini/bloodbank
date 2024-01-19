<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative; /* Ensure the body is a positioned container for the absolute footer */
            min-height: 100vh; /* Set minimum height to cover the viewport */
        }

        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translateX(-50%) translateY(-50%);
        }

        #full {
            position: relative;
            z-index: 1;
        }

        #inner_full {
            /* Adjust other styles as needed for your layout */
            background-color: rgb(46 42 42 / 70%); /* Adding a semi-transparent background to improve readability */
            padding: 20px;
            min-height: calc(100vh - 60px); /* Adjust 60px according to your footer height */
            box-sizing: border-box; /* Ensure padding is included in the height calculation */
        }

        ul li {
            width: 20%;
            height: 50px;
            line-height: 50px;
            margin-left: 133px;
            margin-top: 104px;
            background: rgb(25, 0, 252);
            color: white;
            float: left;
            border-radius: 10px;
            list-style: none;
            text-align: center;
        }

        ul li a {
            text-decoration: none;
            color: white;
        }

        #footer {
            background-color: #333;
            color: white;
            padding: 20px;
            margin-top: 20px; /* Change margin-top to add space between content and footer */
            padding-top: 20px;
            padding-bottom: 4px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 1;
        }

        #header {
            background-color: #333; /* Set the background color to black */
            padding: 10px; /* Add padding for better visibility */
            text-align: center;
            width: 100%;
        }

        /* Add other styles as needed for your layout */
    </style>
</head>

<body>
    <!-- Add the video tag here -->
    <video autoplay muted loop>
        <source src="./video/homevideo1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: white;">Lifeline Blood Bank System</a></h2>
            </div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un'];
                if(!$un)
                {
                    header("Location:admin-home.php");
                }
                ?>
                <h1 align="center" style="text-decoration: none; font-family: 'Neuton', serif; color: white;">Start Saving Lives</h1>
                <p align="center" style="text-decoration: none; font-family: 'Neuton', serif; color: white;">Become a donor or request for blood And help save lives</p><br>
                <ul>
                    <li><a href="donor-red.php">Donor Registration </a></li>
                    <li><a href="donor-list.php">Donor List </a></li>
                    <li><a href="stock-blood-list.php">Stock Blood List</a></li>
                </ul><br><br><br><br><br>

                <ul>
                    <li><a href="out-stock-blood-list.php">Out Stock Blood List </a></li>
                    <li><a href="exchange-blood-list.php">Exchange Blood Registration </a></li>
                    <li><a href="exchange-blood-list1.php">Exchange Blood List </a></li>
                </ul>

                <form action="" method="post">
                    <!-- Your form content goes here -->
                </form>
            </div>
            <br><br><br><br><br><br><br>
        </div>
    </div>
    <div id="footer">
        <h4 align="center">© Copyright 2023 Blood Bank System by Divyansh Saini. All Rights Reserved.</h4>
        <p align="center" ><a href="logout.php"><font color="white">Logout</font></a></p>
    </div>
</body>

</html>
