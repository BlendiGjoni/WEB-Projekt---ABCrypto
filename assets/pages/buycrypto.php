    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
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
        <nav>
            <a href="../../index.php" class="navlogo"><img src="../images/textlogo.png" width="200px" alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul>
                <li><a href="../../index.php" id="current">Home</a></li>
                <li><a href="#footer">About Us</a></li>
                <li><a href="market.php">Market</a></li>
                <li><a href="buycrypto.php" id="current">Buy Crypto</a></li>
            </ul>
            <a target="_blank" href="login.php" class="loginbtn">Log In</a>
        </nav>
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