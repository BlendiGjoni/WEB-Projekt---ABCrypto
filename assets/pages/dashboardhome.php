<?php
include '../PHP/databaseConnection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
    echo "<style> .dropdown{display:none !important} </style>";
}else{
    echo "<style> .loginbtn{display: none !important} </style>";
}

try{
    $dc = new databaseConnection();
    $userc = $dc->startConnection()->query("SELECT * FROM user");
    $userc = $userc->rowCount();

    $adminc = $dc->startConnection()->query("SELECT * FROM user WHERE user_type = 'admin'");
    $adminc = $adminc->rowCount();
}
catch(PDOException $e){
            echo "Database Connection Failed".$e->getMessage();
            return null;
        }
?>
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
    <title>Dashboard - ABCrypto</title>
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
        <div class="maindsh">
            <?php include 'components/sidebar.php' ?>
            <div class="dashboard-home-content">
                <div class="dhc-box">
                    <i class='bx bxs-user-voice'></i>
                    <h2>Admins</h2>
                    <span><?php echo $adminc ?></span>
                </div>
                <div class="dhc-box">
                    <i class='bx bxs-coin-stack' ></i>
                    <h2>Products</h2>
                    <span>2</span>
                </div>
                <div class="dhc-box">
                    <i class='bx bxs-user'></i>
                    <h2>Users</h2>
                    <span><?php echo $userc ?></span>
                </div>
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