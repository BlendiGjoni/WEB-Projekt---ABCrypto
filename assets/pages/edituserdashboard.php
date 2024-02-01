<?php
include '../PHP/databaseConnection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
    echo "<style> .dropdown{display:none !important} </style>";
}else{
    echo "<style> .loginbtn{display: none !important} </style>";
}

$userId = $_GET['id'];
include_once '../PHP/userRepository.php';

$userRepository = new userRepository();
$user = $userRepository->getUserById($userId);

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
    <title>Dashboard Users - ABCrypto</title>
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per header njesoj. -->
    <header>
        <?php include 'components/navbar.php' ?>
    </header>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per main te market. Links dhe tabela e produkteve. -->
    <main>
        <div class="maindsedit">
            <?php include 'components/sidebar.php' ?>
            <div class="editform">
                <form action="" method="post" >
                    <input class="inputedit" type="text" name="id" value="<?=$user['id']?>" readonly>
                    <span></span> <br>
                    <input class="inputedit" type="text" name="username" value="<?=$user['username']?>">
                    <span></span><br>
                    <input class="inputedit" type="text" name="email" value="<?=$user['email']?>">
                    <span></span><br>
                    <input class="inputedit" type="text" name="password" value="<?=$user['password']?>">
                    <span></span><br>
                    <input class="inputedit" type="date" name="date_of_birth" value="<?=$user['date_of_birth']?>">
                    <span></span><br>
                    
                    <input type="submit" name="editbtn" value="Save" class="editsubmit">
                </form>
            </div>
        </div>
    </main>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per footer njesoj... -->
    <footer>
        <?php include 'components/footer.php' ?>
    </footer>
    <script src="../script/script.js"></script>
</body>
</html>

<?php


if(isset($_POST['editbtn'])){
    $id = $user['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];

    $userRepository->updateUser($id,$username,$email,$password,$date_of_birth);

    header("location:dashboardusers.php");
    
}
?>