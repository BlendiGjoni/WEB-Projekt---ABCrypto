<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:assets/pages/login.php");
}else{
    echo "<style>
        .loginbtn{
            display: none !important;
        }

    </style>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- //Kodi per links dhe sources. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="assets/images/logologo.png">
    <title>ABCrypto</title>
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per header (NAV bar). -->
    <header>
        <nav>
            <a href="index.php" class="navlogo"><img src="assets/images/textlogo.png" width="200px" alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul>
                <li><a href="index.php" id="current">Home</a></li>
                <li><a href="#footer">About Us</a></li>
                <li><a target="" href="assets/pages/market.php">Market</a></li>
                <li><a target="" href="assets/pages/buycrypto.php">Buy Crypto</a></li>
            </ul>
            <a target="_blank" href="assets/pages/login.php" class="loginbtn">Log In</a>
            <div class="dropdown">
                <div class="dropdown-button"><a href="" ><i class='bx bxs-user-circle' style=" color: green"></i></a></div>
                <div class="dropdown-content">
                    <a href="" class="dropdown-profile">Profile</a>
                    <a href="" class="dropdown-dashboard">Dashboard</a>
                    <a href="" class="dropdown-logout">Log Out</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per main. -->
    <main>

        <!-- ////////////////////////////////////////////////////////////
        //Pjesa e pare e main(Teksti, butoni dhe image). -->
        <div class="main-first-page">
            <div class="home">
                <div id="maintext"><strong>Buy & Sell Digital Assets In <span>ABCrypto</span></strong></div>
                <div id="smalltext">
                    <p>Biggest, easiest, safest and fastest cryptocurrency exchange online. Experience unparalleled security and lightning-fast transactions for all your crypto needs.</p>
                </div>
                <div class="getstartedbtn"><a href="assets/pages/login.php">Get Started Now</a></div>
            </div>
            <div id="hero"><img src="assets/images/colors-crypto-banking-and-cryptocurrency-wallet.gif" alt=""></div>
        </div>

        <!-- //////////////////////////////////////////////////////////
        //Pjesa e infos rreth kompanise (vlerat e arritura, numri i perdoruesve etj). -->
        <div class="main-customer">
            <div class="groups">
                <div id="chart"><i class='bx bx-line-chart'></i></div>
                <div class="group-text">
                    <h2>$600M</h2>
                    <p>Digital currency exchanged</p>
                </div>
            </div>
            <div class="groups">
                <div id="usericon"><i class='bx bxs-user-check'></i></div>
                <div class="group-text">
                    <h2>5M+</h2>
                    <p>Satisfied investors</p>
                </div>
            </div>
            <div class="groups">
                <div  id="world"><i class='bx bx-world'></i></div>
                <div class="group-text">
                    <h2>195</h2>
                    <p>Countries supported</p>
                </div>
            </div>
        </div>

        <!-- //////////////////////////////////////////////////////////
        //Pjesa trete e main, poashtu teksti, butoni, foto. -->
        <div class="main-third-page">
            <div class="photo-part">
                <img src="assets/images/beam-cryptocurrency-analytics-and-trading-on-laptop-screen.gif" width="400px" alt="image">
            </div>
            <div class="text-part">
                <div>
                    <h1>What Is <span>ABCrypto</span></h1>
                    <p>Experience a variety of trading. You can use various types of coin transactions such as Futures Trade, P2P, Staking, Mining.</p>
                </div>
                <div>
                    <h3><i class='bx bxs-check-circle'></i> View real-time cryptocurrency prices</h3>
                    <p>Invest in cryptocurrency slowly over time by scheduling buys daily, weekly, or monthly.</p>
                </div>
                <div>
                    <h3><i class='bx bxs-check-circle'></i>     Buy and sell BTC, ETH, XRP, OKB, Etc...</h3>
                    <p>Buy and selll popular digital currencies, keep track of them in the one place.</p>
                </div>
                <div><a href="assets/pages/login.php">Explore More</a></div>
            </div>
        </div>

        <!-- //////////////////////////////////////////////////////////
        //Kodi per slider te produkteve. -->
        <div class="main-second-page">
            <section class="product">
                <button class="pre-btn"><i class='bx bxs-chevron-right'></i></button>
                <button class="nxt-btn"><i class='bx bxs-chevron-right'></i></button>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-info">
                            <img src="assets/images/bitcoin-btc-logo.svg" alt="bitcoin-logo" class="productimg">
                            <h2><strong>Bitcoin</strong></h2>
                        </div>
                        <div class="product-decription">
                            <br>
                            <p>Bitcoin is an innovative payment network</p>
                            <p>$$$$</p>
                            <br>
                            <a href="" class="buy-trade-btn"> Buy & Trade</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-info">
                            <img src="assets/images/ethereum-eth-logo.svg" alt="etherum-logo" class="productimg">
                            <h2><strong>Etherum</strong></h2>
                        </div>
                        <div class="product-decription">
                            <br>
                            <p>Bitcoin is an innovative payment network</p>
                            <p>$$$$</p>
                            <br>
                            <a href="" class="buy-trade-btn"> Buy & Trade</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-info">
                            <img src="assets/images/litecoin-ltc-logo.svg" alt="litecoinlogo" class="productimg">
                            <h2><strong>Litecoin</strong></h2>
                        </div>
                        <div class="product-decription">
                            <br>
                            <p>Bitcoin is an innovative payment network</p>
                            <p>$$$$</p>
                            <br>
                            <a href="" class="buy-trade-btn"> Buy & Trade</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-info">
                            <img src="assets/images/shiba-inu-shib-logo.svg" alt="shiba-logo" class="productimg">
                            <h2><strong>Shiba</strong></h2>
                        </div>
                        <div class="product-decription">
                            <br>
                            <p>Bitcoin is an innovative payment network</p>
                            <p>$$$$</p>
                            <br>
                            <a href="" class="buy-trade-btn"> Buy & Trade</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-info">
                            <img src="assets/images/tether-usdt-logo.svg" alt="tether-logo" class="productimg">
                            <h2><strong>Tether</strong></h2>
                        </div>
                        <div class="product-decription">
                            <br>
                            <p>Bitcoin is an innovative payment network</p>
                            <p>$$$$</p>
                            <br>
                            <a href="" class="buy-trade-btn"> Buy & Trade</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-info">
                            <img src="assets/images/xrp-xrp-logo.svg" alt="xrp-logo" class="productimg">
                            <h2><strong>XRP</strong></h2>
                        </div>
                        <div class="product-decription">
                            <br>
                            <p>Bitcoin is an innovative payment network</p>
                            <p>$$$$</p>
                            <br>
                            <a href="" class="buy-trade-btn"> Buy & Trade</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- //////////////////////////////////////////////////////////
        //Kodi per contact us, butoni, input, teksti. -->
        <div class="main-subscribe-page">
            <div><h1>Subscribe to ABCrypto</h1></div>
            <div class="subscribelabel">
                <div class="subscribelabeldiv">
                    <input type="email" placeholder=" Enter your email">
                </div>
                <div class="subscribebuttondiv">
                    <button type="submit" id="subscribe-sub">Subscribe</button>
                </div>
            </div>
            <div><p>By submitting this form, you agree to receive marketing and other communications from ABCrypto about ABCrypto products and other company updates. You can unsubscribe from these communications at any time. For more informacion on our privacy pracitcies, please review our <a href="#">Privacy Policy.</a></p>
            </div>
        </div>
    </main>
    
    <br><br>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per footer. -->
    <footer id="footer">

        <!-- //Pjesa e pare e footerit, socials, logo. -->
        <div class="first-part-footer">
            <div class="footer-logo">
                <img src="assets/images/ABCRYPTO Logo - Original - 5000x5000.png" alt="">
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

        <!-- //Pjesa e dyte e footerit, tekstet, links... -->
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
        <br>
        <img src="assets/images/textlogo.png" alt="" width="200px">
        <p id="copyright">&copy; All rights reserved.</p>
    </footer>

    <!-- //source i javascript -->
    <script src="assets/script/script.js"></script>
</body>

</html>