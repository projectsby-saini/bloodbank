<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD BUDDY - Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- Additional stylesheets and scripts -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            position: relative;
        }

        #homevideo {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1;
            color: white;
        }

        .login-form {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            padding-bottom: 50px;
            text-align: center;
            position: relative;
            z-index: 2; /* Ensure footer is on top */
        }
    </style>
</head>

<body>
    <div class="preloader">
        <img src="pre-loader.svg" alt="spinner">
    </div>

    <!--Scroll to top button-->
    <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>

    <!-- Home Page -->
    <header>
        <video autoplay muted loop plays-inline id="homevideo">
            <source src="./video/homevideo1.mp4" type="video/mp4">
        </video>

        

        <!-- Login Form Container -->
        <div class="login-container">
            <div class="login-form">
                <h2>Lifeline Blood Bank System</h2>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><b>Enter Username</b></td>
                            <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username"
                                    style="width: 180px; height: 30px; border-radius: 10px;"></td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><b>Enter Password</b></td>
                            <td width="200px" height="70px"><input type="password" name="ps"
                                    placeholder="Enter Password" style="width: 180px;
                                    height: 30px; border-radius: 10px; "></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="sub" value="Login"
                                    style="width: 70px; height: 30px; border-radius: 5px;"></td>
                        </tr>
                    </table>
                </form>
                <?php
                if (isset($_POST['sub'])) {
                    $un = $_POST['un'];
                    $ps = $_POST['ps'];
                    $q = $db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'");
                    $q->execute();
                    $res = $q->fetchAll(PDO::FETCH_OBJ);
                    if ($res) {
                        $_SESSION['un'] = $un;
                        header("Location:admin-home.php");
                    } else {
                        echo "<script>alert('Wrong User')</script>";
                    }
                }
                ?>
            </div>
        </div>
    </header>

    <!--ABOUT US -->

    <main>
        <section id="about-us">
            <div class="about">
                <h1 class="heading">What is this all about ?</h1> <br>
                <p class="head-des" class="text">We solve the problem of blood emergencies by connecting <span
                        class="one-line"><br></span> blood donors directly with people in blood need. </p>
                <div class="row">
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>What we do ?</h3>
                        <p>We connect blood donors with recipients, without any intermediary such as blood banks, for an
                            efficient and seamless process.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/innovation.png">
                        </div>
                        <br>
                        <h3>Innovative</h3>
                        <p>This blood bank system is an innovative approach to address global health.We provide <span>immediate
                                access</span> to blood donors.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/netwotk.png">
                        </div>
                        <h3>Network</h3>
                        <p>This blood bank system is one of several community organizations working together as a network that
                            responds to emergencies in an efficient manner.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/noti.png">
                        </div>
                        <h3>Get notified</h3>
                        <p>This blood bank system Connect works with network partners to connect blood donors and recipients
                            through an automated SMS service and a mobile app.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/cost.png">
                        </div>
                        <h3>Totally Free</h3>
                        <p>This blood bank system's ultimate goal is to provide an easy -to-use, easy-to-access, fast, efficient,
                            and reliable way to get life-saving blood, totally <span>Free of cost.</span></p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/save.png">
                        </div>
                        <h3>Save Life</h3>
                        <p>We are a non profit foundation and our main objective is to make sure that everything is done
                            to protect vulnerable persons.<span>Help
                                us by making a gift!</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Volunteer Section -->

    <div class="volunteer" section id="vol-sect">
        <div class="title-head">
            <h1 class="title">Our super heroes </h1>
        </div>
        <p class="content">We depend on volunteers! Volunteers make up 96% of our total<span class="line"><br></span>
            workforce and carry on our humanitarian work. Blood donation is healthy,<span class="line"><br></span> our
            volunteers are available 24/7 to help and donate
            blood. Blood banks store blood<span class="line"><br></span> bags but our volunteers are there with you in
            an emergency for a blood transfusion real time.</p>
        <ul class="volunt">
            <li class="vol">
                <span class=" vol-i number">1 </span>
                <span class=" vol-i name">Garvit</span>
                <span class=" vol-i location">Delhi,<br>India</span>
                <span class=" vol-i blood group">O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">2</span>
                <span class=" vol-i name">Mehere kaur</span>
                <span class=" vol-i location">Ghaziabad,<br>Uttar Pradesh</span>
                <span class=" vol-i blood group">B+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">3</span>
                <span class=" vol-i name">Kenny</span>
                <span class=" vol-i location">Kerela,<br>India</span>
                <span class=" vol-i blood group">AB+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>
            <li class="vol">
                <span class=" vol-i number">4</span>
                <span class=" vol-i name">Sarah</span>
                <span class=" vol-i location">Tamil Nadu,<br>India</span>
                <span class=" vol-i blood group">A+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">5</span>
                <span class=" vol-i name">Kenneth</span>
                <span class=" vol-i location">Ayodhya,<br>Uttar Pradesh</span>
                <span class=" vol-i blood group"> O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">6</span>
                <span class=" vol-i name">Ritika</span>
                <span class=" vol-i location">Ramnagar,<br>Uttarakhand</span>
                <span class=" vol-i blood group">O+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">7</span>
                <span class=" vol-i name">Krish Maurya</span>
                <span class=" vol-i location">Surat,<br>Gujarat</span>
                <span class=" vol-i blood group">O- <i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">8</span>
                <span class=" vol-i name">Tushkar</span>
                <span class=" vol-i location">Bengaluru,<br>Karnataka</span>
                <span class=" vol-i blood group">AB+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">9</span>
                <span class=" vol-i name">Nitin</span>
                <span class=" vol-i location">Lucknow</span>
                <span class=" vol-i blood group">AB-<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

            <li class="vol">
                <span class=" vol-i number">10</span>
                <span class=" vol-i name">Riya</span>
                <span class=" vol-i location">Delhi,<br>India</span>
                <span class=" vol-i blood group">B+<i class="fa fa-tint" aria-hidden="true"></i>
                </span>
            </li>

        </ul>
    </div>
    <!--REVIEW-->
    <section class="customer-review">
        <div class="row-customer">
            <h2>Testimonials<br>See what our users have to say</h2>
        </div>
        <div class="row-customer">
            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    This blood bank system is just awesome! I just donated for the first time and it could not have been
                    easier.Blood Buddy is doing a very important work and I'm happy that I could contribute . It's
                    hygienic,safe and convenient, I recommend it to everyone!
                </div>
                <div class="customer">
                    <img src="Images/review-3.PNG" alt="Customer photo">
                    <p>Esha Puri </p>
                </div>
            </div>

            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    I found this blood bank system at a time that my mother was in urgent need of blood. Blood Buddy arranged the
                    required amount in no time. It saved us a lot of hassle and worry especially in such a trying
                    time.<br> Thank you Blood Buddy!
                </div>
                <div class="customer">
                    <img src="Images/review-2.PNG" alt="Customer photo">
                    <p>Amit Mangal</p>
                </div>
            </div>
            <div class="col-customer span-1-of-3-customer customer-box">
                <div class="customer-text-box">
                    I have been a part of this organization for quite some time and each time I'm amazed by the seamless
                    and efficient system in place.The importance of timely care especially in the recent times is known
                    and having Blood Buddy takes a load off my mind.
                </div>
                <div class="customer">
                    <img src="Images/review-1.PNG" alt="Customer photo">
                    <p>Dr.Kabir Khatri</p>
                </div>
            </div>
        </div>
    </section>


    <!--FOOTER-->
    <footer>
        <div class="siteFooterBar">
            <div class="content1">
                <div class="foot">© Copyright 2023 Blood Bank System by Divyansh Saini. All Rights Reserved.</div>
            </div>
        </div>
        <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations
                and
                fears
                aside. Learn from Blood Buddy and platelet donors how simple and easy it is to roll up a
                sleeve
                and help
                save lives.</p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="/" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                    <li><a href="" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="/" target="_blank"><i class="fas fa-globe"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Add your preloader, scroll to top button, and additional scripts here -->

    <!-- Javascript for pre-loader -->
    <script>
        const preloader = document.querySelector('.preloader');
        const fadeEffect = setInterval(() => {
            if (!preloader.style.opacity) {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) {
                preloader.style.opacity -= 1.5;
            } else {
                clearInterval(fadeEffect);
            }
        }, 1500);
        window.addEventListener('load', fadeEffect);
    </script>

    <!-- Javascript for scroll to top -->
    <script src="up.js"></script>
</body>

</html>
