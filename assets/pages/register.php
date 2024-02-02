<?php
    $usernameError = "";
    $emailError = "";
    $passwordError = "";
    $cpasswordError = "";
    $dateError = "";
    
    echo "<style> .dropdown{display:none !important} </style>";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $dateofbirth = $_POST['dateofbirth'];

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

        if(empty($dateofbirth)){
            $dateError = "<br/>Date is required!";
        }

        if (empty($usernameError) && empty($emailError) && empty($passwordError) && empty($cpasswordError) && empty($dateError)) {
            include_once '../PHP/userRepository.php';
            include_once '../PHP/user.php';

            $user = new User($username, $email, $password, $dateofbirth);
            $userRepository = new userRepository();
    
            $userRepository->insertUser($user);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="shortcut icon" type="image/png" href="../images/logologo.png">
    <title>Sign Up - ABCrypto</title>
</head>

<body class="loginbody">

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
    <header>
        <?php include 'components/navbar.php' ?>
    </header>

    <!-- /////////////////////////////////////////////////////////////////////////////////////////////
    //Kodi per main te register. Ngjashem me login, me shume elemente ne form, renditja ndryshe e fotos dhe formes. -->
    <main>
        <div class="registermainpage">
            <div class="registerimage">
                <img src="../images//biro-bank-where-bitcoin-savings-are-kept-and-the-currency-grows-1.png" alt="" width="500px">
            </div>
            <form class="registerform" method="post" action="">
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
                    <input type="date" name="dateofbirth" id="date" >
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
        <?php include 'components/footer.php' ?>
    </footer>
    <script src="../script/script.js"></script>
</body>

</html>