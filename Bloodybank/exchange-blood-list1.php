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
                <h1 align="center" style="text-decoration: none; color: white;">Exchange Blood List</h1>
                <br>
                <center>
                    <div id="form">
                        <table>
                        <tr>
                                <td><center><b><font color="white">Name</font></b></center></td>
                                <td><center><b><font color="white">Father's Name</font></b></center></td>
                                <td><center><b><font color="white">Address</font></b></center></td>
                                <td><center><b><font color="white">City</font></b></center></td>
                                <td><center><b><font color="white">Age</font></b></center></td>
                                <td><center><b><font color="white">Blood Group</font></b></center></td>
                                <td><center><b><font color="white">Exchange Blood Group</font></b></center></td>
                                <td><center><b><font color="white">Mobile No</font></b></center></td>
                                <td><center><b><font color="white">E-mail</font></b></center></td>
                            </tr>
                            <?php
                            $q = $db->query("SELECT * FROM exchange_blood");
                            while ($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                <tr>
                                <td><center><?= $r1->name; ?></center></td>
                                <td><center><?= $r1->fname; ?></center></td>
                                <td><center><?= $r1->address; ?></center></td>
                                <td><center><?= $r1->city; ?></center></td>
                                <td><center><?= $r1->age; ?></center></td>
                                <td><center><?= $r1->bgroup; ?></center></td>
                                <td><center><?= $r1->exbgroup; ?></center></td>
                                <td><center><?= $r1->mno; ?></center></td>
                                <td><center><?= $r1->email; ?></center></td>
                                </tr>
                                <?php
                            }
                            ?>
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
