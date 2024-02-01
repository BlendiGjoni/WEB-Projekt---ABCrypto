<?php
include '../PHP/databaseConnection.php';

session_start();
    
    $usernameError = "";
    $passwordError = "";
        try{
            $db = new databaseConnection();
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                if(empty($username)){
                    $usernameError = "Username is required!";
                }
                else if(empty($password)){
                    $passwordError = "Password is required!";
                }
                else{
                    $username = trim($username);
                    $username = htmlspecialchars($username);
                    if(!preg_match('/^[a-zA-Z\-]+$/', $username)){
                        $usernameError = "Username should contain only letters and one symbol(-)!";
                    }
                    if(strlen($password) < 8){
                        $passwordError = "Password must be at least 8 characters!";
                    }else if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)){
                        $passwordError = "Password should contain only letters(case insensitive) and numbers!";
                    }
                    $query = $db->startConnection()->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
                    $query->bindParam(':username', $username);
                    $query->bindParam(':password', $password);
        
                    $query->execute();

                    // $control = $query->fetch(PDO::FETCH_OBJ);
                    // if($control > 0){
                    //     $_SESSION['username'] = $_POST['username'];
                    //     header('Location:index.php');
                    //     exit();
                    // }
                    
                    $user = $query->fetch(PDO::FETCH_ASSOC);
                    if($user){
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['date_of_birth'] = $user['date_of_birth'];
                        $_SESSION['user_type'] = $user['user_type'];

                        header('Location:index.php');
                        exit();
                    }
                    else{
                        echo "<script type='text/javascript'>";
                        echo "alert('Please enter a username and password');";
                        echo "window.location.href='login.php'";
                        echo "</script>";
                        exit();
                    }
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
        <?php include 'components/navbar.php' ?>
    </header>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per main te login. Forma dhe foto. -->
    <main class="loginmain">
        <form class="loginform" id="loginpop" method="post">
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
        <?php include 'components/footer.php'  ?>
    </footer>
    <script src="../script/script.js"></script>
</body>

</html>