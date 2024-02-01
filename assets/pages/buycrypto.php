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
    <title>Buy Crypto - ABCrypto</title>
</head>

<body>

    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////
    Kodi header njesoj -->
    <header>
        <?php include 'components/navbar.php' ?>
    </header>

    <!-- Kodi per pjesen e main te buy crypto -->
    <main class="buycrypto_main">
        <div class="buycrypto-text">
            <h1>Buy Crypto quick, easy, simple.</h1>
            <p>Buy and sell digital currencies, keep track of them in the one place.</p>
        </div>
        <div class="buycrypto-hero">
            <img src="../images/simplistic-cryptocurrency-wallet-and-online-banking.png" alt="">
            <form class="buycrypto_form">
                <div>
                    <p class="buycrypto-form-text">Choose Coin:</p>
                    <select class="select-coin">
                        <option value="BTC">Bitcoin <span>(BTC)</span></option>
                        <option value="ETH">Etherum <span>(ETH)</span></option>
                        <option value="LTC">Litecoin <span>(LTC)</span></option>
                        <option value="XRP">XRP <span>(XRP)</span></option>
                        <option value="DOGE">Doge Coin <span>(DOGE)</span></option>
                        <option value="DASH">Dash <span>(DASH)</span></option>
                        <option value="ZEC">Zcash <span></span></option>
                    </select>
                </div>
                <div>
                    <p class="buycrypto-form-text">How much?</p>
                    <p id="buycrypto_money">
                        <input type="number" placeholder="Enter Amount">
                        <select class="select-currency">
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="AUD">AUD</option>
                            <option value="CAD">CAD</option>
                        </select>
                    </p>
                </div>
                <div>
                    <a href="login.php">Buy Now</a>
                </div>
            </form>
        </div>
    </main>

    <!-- Footeri njesoj  -->
    <footer id="footer">
        <?php include 'components/footer.php' ?>
    </footer>
    <script src="../script/script.js"></script>
</body>
</html>