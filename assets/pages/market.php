<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    echo "<style> .dropdown{display:none !important} </style>";
}else{
    echo "<style> .loginbtn{display: none !important} </style>";
    if($_SESSION['user_type'] == 'user'){
        echo "<style> .dropdown-dashboard{display:none !important} </style>";
    }
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
    <title>Market - ABCrypto</title>
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per header njesoj. -->
    <header>
        <?php include 'components/navbar.php' ?>
    </header>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per main te market. Links dhe tabela e produkteve. -->
    <div class="marketmain">
        <div class="title-wrap">
            <h1>Market Update</h1>
            <a href="#" class="btn-link">See All Coins</a>
        </div>
        <ul class="marketlinks">
            <li><a href="#">View All</a></li>
            <li><a href="#">Metaverse</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Energy</a></li>
            <li><a href="#">NFT</a></li>
            <li><a href="#">Gaming</a></li>
            <li><a href="#">Music</a></li>
        </ul>
        <table class="market-table">
            <thead class="table-head">
                <tr class="table-row table-title">
                    <th class="table-heading"></th>
                    <th class="table-heading">#</th>
                    <th class="table-heading">Name</th>
                    <th class="table-heading">Last Price</th>
                    <th class="table-heading">24h%</th>
                    <th class="table-heading">Market Cap</th>
                    <th class="table-heading">Last 7 Days</th>
                    <th class="table-heading">Added by:</th>
                    <th class="table-heading"></th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">1</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/bitcoin-btc-logo.svg" width="20px" height="20px" alt="Bitcoin Logo"><h3><a href="#" class="coin-name">Bitcoin <span>BTC</span></a></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update green">+1.45%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-1.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">2</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/ethereum-eth-logo.svg" width="20px" height="20px" alt="Etherum Logo"><h3><a href="#" class="coin-name">Etherum <span>ETH</span></a></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update red">-5.12%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-2.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">3</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/tether-usdt-logo.svg" width="20px" height="20px" alt="Tether Logo"><h3><a href="#" class="coin-name">Tether <span>USDT/USD</span></a></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update green">+1.45%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-1.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">4</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/bnb-bnb-logo.svg" width="20px" height="20px" alt="BND Logo"><h3><a href="#" class="coin-name">BNB <span>BNB/USD</span></a></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update red">-3.75%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-2.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">5</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/solana-sol-logo.svg" width="20px" height="20px" alt="Solana Logo"><h3><a href="#" class="coin-name">Solana <span>SOL</span></a></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update green">+1.45%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-1.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">6</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/xrp-xrp-logo.svg" width="20px" height="20px" alt="XRP Logo"><h3><a href="#" class="coin-name">XRP <span>XRP</span></a></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update red">-2.22%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-2.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">7</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/cardano-ada-logo.svg" width="20px" height="20px" alt="Cardano Logo"><h3><a href="#" class="coin-name">Cardano <span>ADA</span></a></h3></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update green">+0.8%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-1.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <tr class="table-row">
                    <td class="table-data"><button class="add-to-fav"><i class='bx bx-star'></i></button></td>
                    <th class="table-data rank">8</th>
                    <td class="table-data"><div class="wrapper"><img src="../images/avalanche-avax-logo.svg" width="20px" height="20px" alt="Avalanche Logo"><h3><a href="#" class="coin-name">Avalanche <span>AVAX</span></a></h3></div></td>
                    <td class="table-data last-price">$56,623.54</td>
                    <td class="table-data last-update green">+1.41%</td>
                    <td class="table-data market-cap">$880,423,640,582</td>
                    <td class="table-data"><img src="../images/chart-1.svg" width="100px" height="40px" alt="profit chart"></td>
                    <td class="table-data"></td>
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
                <?php
                include_once '../PHP/productRepository.php';
                include_once '../PHP/userRepository.php';

                $pR = new productRepository();
                $uR = new userRepository();
                $products = $pR->getAllProducts();

                foreach($products as $product){
                    $imageName = $product['product_logo'];
                    $imagePath = "../images/$imageName";
                    $imageData = base64_encode(file_get_contents($imagePath));
                    $imageType = 'image/png';
                    $imageSrc = "data:$imageType;base64,$imageData";
                    
                    $chartName = $product['product_chart'];
                    $chartPath = "../images/$chartName";
                    $chartData = base64_encode(file_get_contents($chartPath));
                    $chartType = 'image/png';
                    $chartSrc = "data:$chartType;base64,$chartData";
                    $addedBy = $uR->getUserById($product['fk_user_id']);

                    echo "
                        <tr class='table-row'>
                            <td class='table-data'><button class='add-to-fav'><i class='bx bx-star'></i></button></td>
                            <th class='table-data rank'>$product[product_id]</th>
                            <td class='table-data'><div class='wrapper'><img src='$imageSrc' width='20px' height='20px' alt='Avalanche Logo'><h3><a href='#' class='coin-name'>$product[product_name] <span>$product[product_name_shortcut]</span></a></h3></div></td>
                            <td class='table-data last-price'>$$product[product_last_price]</td>
                            <td class='table-data last-update green'>+$product[product_perc]%</td>
                            <td class='table-data market-cap'>$$product[product_market_cap]</td>
                            <td class='table-data'><img src='$chartSrc' width='100px' height='40px' alt='profit chart'></td>
                            <td class='table-data'>$addedBy[id] - $addedBy[username] : $addedBy[user_type]</td>
                            <td class='table-data'><button class='btn-trade'>Trade</button></td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
        <div class="addcryptolink">
            <h2><a href="addcrypto.php">Add Crypto</a></h2>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per footer njesoj... -->
    <footer>
        <?php include 'components/footer.php' ?>
    </footer>
    <script src="../script/script.js"></script>
</body>
</html>