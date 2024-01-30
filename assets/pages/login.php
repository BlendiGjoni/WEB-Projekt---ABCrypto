<?php
include '../PHP/databaseConnection.php';

session_start();
    
    $usernameError = "";
    $passwordError = "";
        try{
            $db = new databaseConnection();
            $db->startConnection();
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                if(empty($username)){
                    $usernameError = "Username is required!";
                }
                else{
                    $username = trim($username);
                    $username = htmlspecialchars($username);
                    if(!preg_match('/^[a-zA-Z\-]+$/', $username)){
                        $usernameError = "Username should contain only letters and one symbol(-)!";
                    }
                }
        
                if(empty($password)){
                    $passwordError = "Password is required!";
                }
                else{
                    if(strlen($password) < 8){
                        $passwordError = "Password must be at least 8 characters!";
                    }else if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)){
                        $passwordError = "Password should contain only letters(case insensitive) and numbers!";
                    }
                }
                $query = $db->startConnection()->prepare("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
                $query->execute([$username, $password]);
                $control = $query->fetch(PDO::FETCH_OBJ);
                if($control > 0){
                    $_SESSION['username'] = $_POST['username'];
                    header('Location:../../index.php');
                }
                else{
                    echo "<script type='text/javascript'";
                    echo "alert('Please enter a username and password');";
                    echo "window.location.href='login.php'";
                    echo "</script>";
                }
            }

        }catch(PDOException $e){
            echo "Database Connection Failed".$e->getMessage();
            return null;
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
    <title>Log in - ABCrypto</title>
</head>

<body class="loginbody">

    <!-- //////////////////////////////////////////////////////////
    //Kodi per header, njesoj si index dhe faqet tjera. -->
    <header>
        <nav>
            <a href="../../index.php" class="navlogo"><img src="../images/textlogo.png" width="200px" alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="#footer">About Us</a></li>
                <li><a target="" href="market.php">Market</a></li>
                <li><a target="" href="buycrypto.php">Buy Crypto</a></li>
            </ul>
            <a href="login.php" class="loginbtn" id="login-loginbtn">Log In</a>
        </nav>
    </header>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per main te login. Forma dhe foto. -->
    <main class="loginmain">
        <form class="loginform" id="loginpop" method="post" action="">
            <div id="logintxt">Login</div>
            <div class="login-text-input"><b>Username: </b>
                <input type="text" placeholder="Enter your username" id="username" name="username">
            </div>
            <span style="font-size: 15px; color: red;"><?php echo $usernameError ?></span>
            <div class="login-text-input"><b>Password: </b>
                <input type="password" placeholder="Enter your password" id="password" name="password">
            </div>
            <span style="font-size: 15px; color: red;"><?php echo $passwordError ?></span>
            <div class="loginsub"><button type="submit" id="loginsubbtn" name="login" onclick="validateLogInForm()">Log in</button></div>
            <div class="registerbtn"><a href="register.php" id="registerbtn">Register</a></div>
        </form>
        <div class="loginhero">
            <img src="../images/babella.png" alt="" width="500px">
        </div>
    </main>
    <!-- //////////////////////////////////////////////////////////
    //Kodi per footer, njesoj. -->
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