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
    <title>Market - ABCrypto</title>
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per header njesoj. -->
    <header>
        <nav>
            <a href="../../index.php" class="navlogo"><img src="../images/textlogo.png   " width="200px" alt=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="#footer">About Us</a></li>
                <li><a href="market.php" id="current">Market</a></li>
                <li><a href="buycrypto.php">Buy Crypto</a></li>
            </ul>
            <a target="_blank" href="login.php" class="loginbtn">Log In</a>
        </nav>
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
                    <td class="table-data"><button class="btn-trade">Trade</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ////////////////////////////////////////////////////////////////
    //Kodi per footer njesoj... -->
    <footer>
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