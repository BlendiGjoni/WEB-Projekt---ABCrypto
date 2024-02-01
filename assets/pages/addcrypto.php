<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
    echo "<style> .dropdown{display:none !important} </style>";
}else{
    echo "<style> .loginbtn{display: none !important} </style>";
}

$product_logoError = "";
$product_nameError = "";
$product_name_shortcutError = "";
$product_last_priceError = "";
$product_percError = "";
$product_market_capError = "";
$product_chartError = "";
try{
    if(isset($_POST['add'])){
        $product_logo = $_POST['product_logo'];
        $product_name = $_POST['product_name'];
        $product_name_shortcut = $_POST['product_name_shortcut'];
        $product_last_price = $_POST['product_last_price'];
        $product_perc = $_POST['product_perc'];
        $product_market_cap = $_POST['product_market_cap'];
        $product_chart = $_POST['product_chart'];
        $fk_user_id = $_SESSION['id'];
    
        if(empty($product_logo)){
            $product_logoError = "Product logo required!";
        }else if($product_logo){

        }
        if(empty($product_name)){
            $product_nameError = "Product name required!";
        }
        if(empty($product_name_shortcut)){
            $product_name_shortcutError = "Product name shortcut required!";
        }
        if(empty($product_last_price)){
            $product_last_priceError = "Product last price required!";
        }
        if(empty($product_perc)){
            $product_percError = "Product percentage required!";
        }
        if(empty($product_market_cap)){
            $product_market_capError = "Product market cap required!";
        }
        if(empty($product_chart)){
            $product_chartError = "Product chart required!";
        }
        if (empty($product_logoError) && empty($product_nameError) && empty($product_name_shortcutError) && empty($product_last_priceError) && empty($product_percError) && empty($product_market_capError) && empty($product_chartError)) {
            include_once '../PHP/productRepository.php';
            include_once '../PHP/product.php';

            $product = new product($product_logo, $product_name, $product_name_shortcut, $product_last_price, $product_perc, $product_market_cap, $product_chart, $fk_user_id);
            $productRepository = new productRepository();

            $productRepository->insertProduct($product);
        }
    }
}
catch(PDOException $e){
    echo "Database Connection Failed".$e->getMessage();
    return null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- //Kodi per links dhe sources. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../images/logologo.png">
    <title>ABCrypto - Add Crypto</title>
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per header (NAV bar). -->
    <header>
        <?php include 'components/navbar.php' ?>
    </header>
    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per main. -->
    <main>
        <div class="addcryptomain">
            <form action="" method="post">
                <div class="addcryptolabels">
                    <label for="image">Crypto's Logo: </label>
                    <input type="file" name="product_logo" id="">
                    <span id="productlogoError"><?php echo $product_logoError ?></span>
                </div>
                <div class="addcryptolabels">
                    <label for="name">Crypto's name: </label>
                    <input type="text" name="product_name" id="prodname">
                    <span id="productnameError"><?php echo $product_nameError ?></span>
                </div>
                <div class="addcryptolabels">
                    <label for="shortname">Crypto's shortcut: </label>
                    <input type="text" name="product_name_shortcut" id="prodshortcut">
                    <span id="productshortcutError"><?php echo $product_name_shortcutError ?></span>
                </div>
                <div class="addcryptolabels">
                    <label for="lastprice">Crypto's last price:</label>
                    <input type="text" name="product_last_price" id="prodlastprice">
                    <span id="productlastpriceError"><?php echo $product_last_priceError ?></span>
                </div>
                <div class="addcryptolabels">
                    <label for="priceperc">Crypto's last 24h price percentage:</label>
                    <input type="text" name="product_perc" id="prodperc">
                    <span id="productpercError"><?php echo $product_percError ?></span>
                </div>
                <div class="addcryptolabels">
                    <label for="marketcap">Crypto's market cap:</label>
                    <input type="text" name="product_market_cap" id="prodmarketcap">
                    <span id="productmarketcapError"><?php echo $product_market_capError ?></span>
                </div>
                <div class="addcryptolabels">
                    <label for="cryptochart">Crypto's last 24h chart:</label>
                    <input type="file" name="product_chart" id="">
                    <span id="productchartError"><?php echo $product_chartError ?></span>
                </div>
                <div class="addcryptolabels">
                    <button type="submit" name="add" onclick="validateProduct()">Add</button>
                </div>
            </form>
        </div>
    </main>
    
    <br><br>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per footer. -->
    <footer>
        <?php include 'components/footer.php' ?>
    </footer>

    <!-- //source i javascript -->
    <script src="../script/script.js"></script>
    
</body>
</html>