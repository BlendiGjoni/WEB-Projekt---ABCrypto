            <div class="sidebar" style="">
            <div class="firstpartsidebar">
                <a href="#"><i class='bx bx-user-pin'></i></a>
                <h2>Username: <?php echo $_SESSION['username'] ?></h2>
                <span>Role: <?php echo $_SESSION['user_type'] ?></span>
            </div>
            <div class="secondpartsidebar">
                <ul class="dashlinks">
                    <li><a href="dashboardhome.php"><i class='bx bx-home-circle'></i> <span>Home</span></a></li>
                    <li><a href="dashboardusers.php"><i class='bx bxs-user-detail'></i> <span>Users</span></a></li>
                    <li><a href="#"><i class='bx bxl-bitcoin'></i> <span>Crypto</span></a></li>
                </ul>
                <ul class="logoutlink">
                    <li><a href="logout.php"><span>Log out</span> <i class='bx bx-log-out bx-rotate-180' ></i></a></li>
                </ul>
            </div>
        </div>