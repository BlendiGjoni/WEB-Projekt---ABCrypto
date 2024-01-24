<?php
    $usernameError = "";
    $emailError = "";
    $passwordError = "";
    $cpasswordError = "";
    $dateError = "";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $date = $_POST['date'];

        if(empty($username)){
            $usernameError = "<br/>Username is required!";
        }
        else{
            $username = trim($username);
            $username = htmlspecialchars($username);
            if(!preg_match('/^[a-zA-Z\-]+$/', $username)){
                $usernameError = "<br/>Username should contain only letters and one symbol(-)!";
            }
        }

        if(empty($email)){
            $emailError = "<br/>Email is required!";
        }
        else{
            $email = trim($email);
            $email = htmlspecialchars($email);
            if(!preg_match('/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/', $email)){
                $emailEror = "<br/>Email is invalid!";
            }
        }
        
        if(empty($password)){
            $passwordError = "<br/>Password is required!";
        }
        else{
            if(strlen($password) < 8){
                $passwordError = "<br/>Password must be at least 8 characters!";
            }else if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)){
                $passwordError = "<br/>Password should contain only letters(case insensitive) and numbers!";
            }
        }

        if(empty($cpassword)){
            $cpasswordError = "<br/>Confirm password is required!";
        }
        else if(!($cpassword == $password)){
            $cpasswordError = "<br/>Passwords must match!";
        }

        if(empty($date)){
            $dateError = "<br/>Date is required!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" type="image/png" href="../images/logologo.png">
    <title>Sign Up - ABCrypto</title>
</head>

<body class="loginbody">

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
    <header>
        <nav>
            <a href="../../index.php" class="navlogo"><img src="../images/textlogo.png" width="200px" alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="#footer">About Us</a></li>
                <li><a target="_blank" href="market.php">Market</a></li>
                <li><a target="_blank" href="buycrypto.php">Buy Crypto</a></li>
            </ul>
            <a href="login.php" class="loginbtn">Log In</a>
        </nav>
    </header>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////
    //Kodi per main te register. Ngjashem me login, me shume elemente ne form, renditja ndryshe e fotos dhe formes. -->
    <main>
        <div class="registermainpage">
            <div class="registerimage">
                <img src="../images//biro-bank-where-bitcoin-savings-are-kept-and-the-currency-grows-1.png" alt="" width="500px">
            </div>
            <form class="registerform" method="post">
                <div id="registertxt">Sign Up</div>
                <div>
                    <label for="username"><b>Username: </b></label><br>
                    <input type="text" placeholder="Enter Username" name="username" id="username" >
                    <span style="font-size: 15px; color: red;"><?php echo $usernameError ?></span>
                </div>
                <div>
                    <label for="email"><b>Email: </b></label><br>
                    <input type="email" placeholder="Enter Email" name="email" id="email" >
                    <span style="font-size: 15px; color: red;"><?php echo $emailError ?></span>
                </div>
                <div>
                    <label for="password"><b>Password: </b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" id="password" >
                    <span style="font-size: 15px; color: red;"><?php echo $passwordError ?></span>
                </div>
                <div>
                    <label for="password"><b>Confirm Password:</b></label><br>
                    <input type="password" placeholder="Confirm Password" name="cpassword" id="confirmpassword" >
                    <span style="font-size: 15px; color: red;"><?php echo $cpasswordError ?></span>
                </div>
                <div>
                    <label for="date"><b>Date of Birth: </b></label><br>
                    <input type="date" name="date" id="date" >
                    <span style="font-size: 15px; color: red;"><?php echo $dateError ?></span>
                </div>
                <div class="">
                </div>
                <div><button type="submit" name="submit" id="signupbtn" onclick="validateRegisterForm()">Sign Up</button></div>
                <div class="registerlogbtn">Already have an account? <a href="login.php" id="registerloginbtn">Log in</a></div>
            </form>
        </div>
    </main>

    <!-- ///////////////////////////////////////////////////////////////////////// -->
    <footer id="footer">
        <div class="first-part-footer">
            <div class="footer-logo"><img src="" alt="">
                <img src="../images/ABCRYPTO Logo - Original - 5000x5000.png" alt="">
            </div>
            <div class="socials">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook-square'></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
        </div>
        <div class="second-part-footer">
            <div class="company">
                <p><strong>Company</strong></p>
                <p><a href="">About Us</a></p>
                <p><a href="">Careers</a></p>
                <p><a href="">Affiliates</a></p>
                <p><a href="">Blog</a></p>
                <p><a href="">Cookie policy</a></p>
            </div>
            <div class="individuals">
                <p><strong>Individuals</strong></p>
                <p><a href="">Buy & Sell</a></p>
                <p><a href="">Earn Crypto</a></p>
                <p><a href="">Wallet</a></p>
                <p><a href="">NFT</a></p>
                <p><a href="">Card</a></p>
            </div>
            <div class="support">
                <p><strong>Support</strong></p>
                <p><a href="">Help Center</a></p>
                <p><a href="">Contact us</a></p>
                <p><a href="">Create account</a></p>
                <p><a href="">Account Info</a></p>
                <p><a href="">Payment Methods</a></p>
            </div>
            <div class="learn">
                <p><strong>Learn</strong></p>
                <p><a href="">Crypto Basics</a></p>
                <p><a href="">Tips and Tutorials</a></p>
                <p><a href="">Market Updates</a></p>
                <p><a href="">What is Crypto?</a></p>
                <p><a href="">What is blockchain</a></p>
            </div>
        </div>
        <img src="../images/textlogo.png" alt="" width="200px">
        <p id="copyright">&copy; All rights reserved.</p>
    </footer>
    <script src="../script/script.js"></script>
</body>

</html>