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
    <title>Dashboard Crypto's - ABCrypto</title>
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
        <div class="maindsc">
            <?php include 'components/sidebar.php' ?>
            <div class="dashboard-crypto-content">
                <table class="dashboard-crypto-table">
                    <tr>
                        <th>ID</th>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>Shortcut</th>
                        <th>Last Price</th>
                        <th>Date of Birth</th>
                        <th>Market Cap</th>
                        <th>Last 7 Days</th>
                        <th>Added by:</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        include_once '../PHP/userRepository.php';
                        include_once '../PHP/productRepository.php';
                        $uR = new userRepository();
                        $productR = new productRepository();
                        $allproducts = $productR->getAllProducts();


                        // $addedBy = $uR->getUserById($product['fk_user_id']);

                        foreach ($allproducts as $product){
                            echo
                            "
                            <tr>
                                <td>$product[product_id]</td>
                                <td>$product[product_logo]</td>
                                <td>$product[product_name]</td>
                                <td>$product[product_name_shortcut]</td>
                                <td>$product[product_last_price]</td>
                                <td>$product[product_perc]</td>
                                <td>$product[product_market_cap]</td>
                                <td>$product[product_chart]</td>
                                <td>$product[fk_user_id]</td>
                                <td><a class='productedit' href='editcryptodashboard.php?product_id=$product[product_id]'>Edit</a></td>
                                <td><a href='../PHP/deleteProduct.php?product_id=$product[product_id]'>Delete</a></td>
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