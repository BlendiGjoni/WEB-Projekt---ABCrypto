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
    $currentUser = $_SESSION['username'];
}
catch(PDOException $e){
            echo "Database Connection Failed".$e->getMessage();
            return null;
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
        <div class="maindsu">
            <?php include 'components/sidebar.php' ?>
            <div class="dashboard-users-content">
                <table class="dashboard-users-table">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Date of Birth</th>
                        <th>User Type</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        include_once '../PHP/userRepository.php';
                        $userR = new userRepository();
                        $allusers = $userR->getAllUsers();

                        foreach ($allusers as $user){
                            echo
                            "
                            <tr>
                                <td>$user[id]</td>
                                <td>$user[username]</td>
                                <td>$user[email]</td>
                                <td>$user[password]</td>
                                <td>$user[date_of_birth]</td>
                                <td>$user[user_type]</td>
                                <td><a class='useredit' href='#'>Edit</a></td>
                                <td><a href='../PHP/deleteUser.php'>Delete</a></td>
                            </tr>
                            ";
                        }
                    ?>
                </table>
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