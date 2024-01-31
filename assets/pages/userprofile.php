<?php
include '../PHP/databaseConnection.php';

session_start();
$databaseConnection = new databaseConnection();
$conn = $databaseConnection->startConnection();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    echo "<style> .dropdown{display:none !important} </style>";
}else{
    echo "<style> .loginbtn{display: none !important} </style>";
}  

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
        <?php include 'components/navbar.php' ?>
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
        <?php include 'components/footer.php' ?>
    </footer>
    <script src="../script/script.js"></script>
</body>
</html>
