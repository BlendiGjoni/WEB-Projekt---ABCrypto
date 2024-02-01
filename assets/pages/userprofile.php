<?php

////////////////////////////////////////////////////////////////
// Kodi per userprofile php
include '../PHP/databaseConnection.php';

session_start();
$databaseConnection = new databaseConnection();
$conn = $databaseConnection->startConnection();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    echo "<style> .dropdown{display:none !important} </style>";
}else{
    echo "<style> .loginbtn{display: none !important} </style>";
}  if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
}
// marrja e te dhenave
$usernm = $_SESSION['username'];
$usrid = $_SESSION['id'];
$usremail = $_SESSION['email'];
$usrdate = $_SESSION['date_of_birth'];
$usrtype = $_SESSION['user_type'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../images/logologo.png">
    <title>Profile</title>
</head>
<body>
    <header>    
        <?php include 'components/navbar.php' ?>
    </header>
    <!-- ///////////////////////////////////////////////////////////////////////////////
    KODI PER USER PROFILE MAIN
     -->
    <main class="profilemain">
        <div class="profileinfo">
            <img src="../images/userprofilepic.png" alt="">
                <div class="userprofile-username">
                    <p class="userinfotext">Username: </p>
                    <p><?php echo $usernm ?></p>
                </div>    
                <div class="userprofile-id">
                    <p class="userinfotext">ID: </p>
                    <p><?php echo $usrid ?></p>
                </div>    
                <div class="userprofile-email">
                    <p class="userinfotext">Email: </p>
                    <p><?php echo $usremail ?></p>
                </div>
                <div class="userprofile-date">
                    <p class="userinfotext">Date of birth: </p>
                    <p><?php echo $usrdate ?></p>
                </div>     
                <div class="userprofile-type">
                    <p class="userinfotext">Role: </p>
                    <p><?php echo $usrtype ?></p>
                </div>
        </div>
    </main>


    <footer>
        <?php include 'components/footer.php' ?>
    </footer>
    <script src="../script/script.js"></script>
</body>
</html>
