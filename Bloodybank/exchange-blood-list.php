<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
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

        #header {
            background-color: #333;
            padding: 10px;
            text-align: center;
            width: 100%;
            color: white;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
        }

        #inner_full {
            background-color: rgb(139 139 139 / 69%);
            padding: 20px;
            min-height: calc(100vh - 120px); /* Adjusted for header and footer height */
            box-sizing: border-box;
            display: flex; /* Use flexbox for layout */
            align-items: center; /* Center content vertically */
            justify-content: center; /* Center content horizontally */
            flex-direction: column; /* Stack child elements vertically */
        }

        #form-container {
            max-width: 600px;
            width: 100%;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        form input,
        form select,
        form textarea {
            width: calc(100% - 20px); /* Adjusted for padding */
            margin-bottom: 10px;
            padding: 10px;
        }

        form button {
            padding: 10px;
            width: calc(100% - 20px); /* Adjusted for padding */
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        #footer {
            background-color: #333;
            color: white;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 2;
        }

        .photo {
            flex: 1; /* Take half of the space */
            padding-right: 20px; /* Add some spacing between image and form */
        }

        .photo img {
            width: 100%;
            height: auto;
            display: block;
        }
        #form-container {
    width: 100%;
    height: 423px;
    margin-left: 43px;
    margin-bottom: 60px;
    background-color: rgb(55 63 63 / 69%);
    border-radius: 10px;
}

    </style>
</head>

<body>
    <video autoplay muted loop>
        <source src="./video/homevideo1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div id="full">
        <div id="header">
            <h2><a href="admin-home.php" style="text-decoration: none; color: white;">Lifeline Blood Bank System</a></h2>
        </div>
        <div id="inner_full">
            <div id="body">
            <?php
                $un=$_SESSION['un'];
                if(!$un)
                {
                    header("Location:admin-home.php");
                }
                ?>
                <br><br><br>
                <h1 align="center" style="text-decoration: none; font-family: 'Neuton', serif; color: #094eff;">Exchange Blood Donor Registration</h1>
<br>
                <div id="form-container">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td width="300px" height="70px"><i class="fas fa-user icon"></i> Enter Name</td>
                                <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td><span></span>
                                <td width="300px" height="70px"><i class="fas fa-user icon"></i> Enter Father's Name</td>
                                <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
                            </tr>
                            <tr>
                                <td height="50px"><i class="fas fa-home icon"></i> Enter Address</td>
                                <td width="200px" height="50px"><textarea name="address" ></textarea></td><span></span>
                                <td height="50px"><i class="fas fa-city icon"></i> Enter City</td>
                                <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                            </tr>
                            <tr>
                                <td height="50px"><i class="fas fa-birthday-cake icon"></i> Enter Age</td>
                                <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td><span></span>
                                <td height="50px"><i class="fas fa-envelope icon"></i> Enter E-mail</td>
                                <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td><span></span>
                                
                            </tr>
                            <tr>
                                <td height="50px"><i class="fas fa-mobile-alt icon"></i> Enter Mobile No</td>
                                <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No."></td>
                            </tr>
                            <tr>
                            <td height="50px"><i class="fas fa-tint icon"></i> Select Blood Group</td>
                                <td width="200px" height="50px">
                                    <select name="bgroup" >
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                    </select>
                                </td>
                                <td height="50px"><i class="fas fa-tint icon"></i> Exchange Blood Group</td>
                                <td width="200px" height="50px">
                                    <select name="exbgroup" >
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                    </select>
                                </td>
                            </tr>

                            <br><br>
                            <tr>
                            <td><input type="submit" name="sub" value="Save"></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                        if (isset($_POST['sub'])) 
                        {
                            $name = $_POST['name'];
                            $fname = $_POST['fname'];
                            $address = $_POST['address'];
                            $city = $_POST['city'];
                            $age = $_POST['age'];
                            $bgroup = $_POST['bgroup'];
                            $mno = $_POST['mno'];
                            $email = $_POST['email'];
                            $exbgroup = $_POST['exbgroup'];

                            $q = $db->prepare("INSERT INTO exchange_blood (name,fname,address,city,age,bgroup,mno,email,exbgroup) VALUES 
                                (:name,:fname ,:address,:city,:age,:bgroup,:mno,:email,:exbgroup)");
                            $q->bindValue('name', $name);
                            $q->bindValue('fname', $fname);
                            $q->bindValue('address', $address);
                            $q->bindValue('city', $city);
                            $q->bindValue('age', $age);
                            $q->bindValue('bgroup', $bgroup);
                            $q->bindValue('mno', $mno);
                            $q->bindValue('email', $email);
                            $q->bindValue('exbgroup', $exbgroup);

                            if ($q->execute()) {
                                echo "<script>alert('Registration Successful')</script>";
                            } else {
                                echo "<script>alert('Donor Registration Failed')</script>";
                            }
                        }
                        ?>
                </div>
                <br><br><br><br><br>
            </div>
        </div>
        <div id="footer"><h4>© Copyright 2023 Blood Bank System by Divyansh Saini. All Rights Reserved.</h4>
            <p><a href="logout.php"><font color="white">Logout</font></a></p>
        </div>
    </div>
</body>

</html>
