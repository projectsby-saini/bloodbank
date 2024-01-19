<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
            min-height: 100vh;
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
            background-color: rgb(46 42 42 / 70%);
            padding: 20px;
            min-height: calc(100vh - 80px); /* Adjust 80px according to your footer height */
            box-sizing: border-box;
            position: relative;
        }

        #footer {
            background-color: #333; /* Set the background color to black */
            color: white;
            padding: 0px;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 2;
        }

        #header {
            background-color: #333;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        td {
            width: 200px;
            height: 40px;
        }

        #form table {
            width: 33%;
            border-collapse: collapse;
            background-color: #333; /* Set the background color for the table */
            color: white;
        }

        #form th, #form td {
            border: 1px solid white; /* Set the border for the table cells */
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
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
                $un = $_SESSION['un'];
                if (!$un) {
                    header("Location:admin-home.php");
                }
                ?>
                <h1 align="center" style="text-decoration: none; color: white;">Stock Blood List</h1>
                <br>
                <center>
                    <div id="form">
                        <table>
                        <tr>
                                <td><center><b><font color="white">Name </font></b></center></td>
                                <td><center><b><font color="white">Quantity</font></b></center></td>
                            </tr>
                
                                <tr>
                                <td><center>A+</center></td>
                                <td><center>
                                    <?php
                                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                                    echo $row=$q->rowcount();
                                    ?>
                                </center></td>
                                </tr>

                                <tr>
                                <td><center>A-</center></td>
                                <td><center>
                                    <?php
                                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                                    echo $row=$q->rowcount();
                                    ?>
                                </center></td>
                                </tr>

                                <tr>
                                <td><center>AB+</center></td>
                                <td><center>
                                    <?php
                                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                                    echo $row=$q->rowcount();
                                    ?>
                                </center></td>
                                </tr>

                                <tr>
                                <td><center>AB-</center></td>
                                <td><center>
                                    <?php
                                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                                    echo $row=$q->rowcount();
                                    ?>
                                </center></td>
                                </tr>

                                <tr>
                                <td><center>O+</center></td>
                                <td><center>
                                    <?php
                                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                                    echo $row=$q->rowcount();
                                    ?>
                                </center></td>
                                </tr>

                                <tr>
                                <td><center>O-</center></td>
                                <td><center>
                                    <?php
                                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                                    echo $row=$q->rowcount();
                                    ?>
                                </center></td>
                                </tr>
                                
                        </table>
                    </div>
                </center>
            </div>
        </div>
        <br><br><br><br><br><br>
        <!-- Black Footer -->
        <div id="footer">
            <div class="siteFooterBar">
                <div class="content1">
                    <div class="foot"></div>
                </div>
            </div>
            <div class="footer-content">
                <h3>JOIN OUR CAUSE</h3>
                <p align="center" style="text-decoration: none; font-family: 'Neuton', serif; color: white;">Donating blood or platelets can be intimidating and even scary. Time to put those hesitations and fears aside. Learn from Blood Buddy and platelet donors how simple and easy it is to roll up a sleeve and help save lives.</p>
                <div class="socials">
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/givebloodnhs/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/indiablooddonation/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="http://nbtc.naco.gov.in/" target="_blank"><i class="fas fa-globe"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
