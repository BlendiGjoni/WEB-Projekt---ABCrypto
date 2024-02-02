<?php
include '../PHP/databaseConnection.php';

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
    echo "<style> .dropdown{display:none !important} </style>";
}else{
    echo "<style> .loginbtn{display: none !important} </style>";
}

$productId = $_GET['product_id'];
include_once '../PHP/productRepository.php';

$productRepository = new productRepository();
$product = $productRepository->getProductById($productId);

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
    <title>Dashboard Edit Crypto - ABCrypto</title>
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
        <div class="maindscedit">
            <?php include 'components/sidebar.php' ?>
            <div class="edit-crypto-form">
                <form action="" method="post" >
                    <input class="inputedit" type="text" name="product_id" value="<?=$product['product_id']?>" readonly>
                    <span></span> <br>
                    <input class="inputedit" type="file" name="product_logo" value="<?=$product['product_logo']?>">
                    <span></span><br>
                    <input class="inputedit" type="text" name="product_name" value="<?=$product['product_name']?>">
                    <span></span><br>
                    <input class="inputedit" type="text" name="product_name_shortcut" value="<?=$product['product_name_shortcut']?>">
                    <span></span><br>
                    <input class="inputedit" type="text" name="product_last_price" value="<?=$product['product_last_price']?>">
                    <span></span><br>
                    <input class="inputedit" type="text" name="product_perc" value="<?=$product['product_perc']?>">
                    <span></span><br>
                    <input class="inputedit" type="text" name="product_market_cap" value="<?=$product['product_market_cap']?>">
                    <span></span><br>
                    <input class="inputedit" type="file" name="product_chart" value="<?=$product['product_chart']?>">
                    <span></span><br>
                    
                    <input type="submit" name="editcryptobtn" value="Save" class="editcryptosubmit">
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


if(isset($_POST['editcryptobtn'])){
    $product_id = $product['product_id'];
    $product_logo = $_POST['product_logo'];
    $product_name = $_POST['product_name'];
    $product_name_shortcut = $_POST['product_name_shortcut'];
    $product_last_price = $_POST['product_last_price'];
    $product_perc = $_POST['product_perc'];
    $product_market_cap = $_POST['product_market_cap'];
    $product_chart = $_POST['product_chart'];

    $productRepository->updateProduct($product_id,$product_logo,$product_name,$product_name_shortcut,$product_last_price,$product_perc,$product_market_cap,$product_chart);

    header("location:dashboardcrypto.php");
    
}
?>