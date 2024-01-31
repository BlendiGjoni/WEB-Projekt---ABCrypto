<?php
include '../PHP/databaseConnection.php';

session_start();
$databaseConnection = new databaseConnection();
$conn = $databaseConnection->startConnection();


if(isset($_POST['username'])){


    $username = $_POST['username'];

    $sql = "SELECT id, username, email, date_of_birth, user_type FROM user WHERE username = :username"; 
    $statement = $conn->prepare($sql);
    $statement->bindParam(':username', $username);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);

}
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
        <nav>
            <a href="../../index.php" class="navlogo"><img src="../images/textlogo.png   " width="200px" alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
                <ul>
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="#footer">About Us</a></li>
                    <li><a href="market.php" id="current">Market</a></li>
                    <li><a href="buycrypto.php">Buy Crypto</a></li>
                </ul>
            </div>    
        </nav>
    </header>

<main class="profilemain">
    <div class="profileinfo">
        <img src="../images/userprofilepic.png" alt="">
            <div class="userprofile-username">
                <p class="userinfotext">Username: </p>
                <p><?php echo isset($user['username']) ? $user['username'] : ''; ?></p>
            </div>    
            <div class="userprofile-id">
                <p class="userinfotext">ID: </p>
                <p><?php echo isset($user['id']) ? $user['id'] : ''; ?></p>
            </div>    
            <div class="userprofile-email">
                <p class="userinfotext">Email: </p>
                <p><?php echo isset($user['email']) ? $user['email'] : ''; ?></p>
            </div>
            <div class="userprofile-date">
                <p class="userinfotext">Date of birth: </p>
                <p><?php echo isset($user['date_of_birth']) ? $user['date_of_birth'] : ''; ?></p>
            </div>     
            <div class="userprofile-type">
                <p class="userinfotext">Role: </p>
                <p><?php echo isset($user['user_type']) ? $user['user_type'] : ''; ?></p>
            </div>
    </div>
</main>


    <footer>
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
