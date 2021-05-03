
<?php 
    require_once('conn.php');

    $result=mysqli_query($conn,"SELECT count(*) as total from jobseekers");
    $data=mysqli_fetch_assoc($result);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../css/dashboard.css" />
    <title>dashboard</title>
</head>

<body id="body">
    <div class="container">
        <nav class="navbar">
            <div class="nav_icon" onclick="toggleSidebar()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="navbar__left">
                <a class="active_link" href="#">Admin</a>
            </div>
           
        </nav>

        <main>
            <div class="main__container">
                <!-- MAIN TITLE STARTS HERE -->

                <div class="main__title">
                    <img src="assets/hello.svg" alt="" />
                    <div class="main__greeting">
                        <h1>Job Here</h1>
                        <p>Welcome to admin dashboard</p>
                    </div>
                </div>

                <!-- MAIN TITLE ENDS HERE -->

                <!-- MAIN CARDS STARTS HERE -->
                <div class="main__cards">
                    <div class="card">
                        <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"></i>
                        <div class="card_inner">
                            <p class="text-primary-p">Number of job Seeker</p>
                            <span class="font-bold text-title"><?php echo $data['total']; ?></span>
                        </div>
                    </div>

                    <div class="card">
                        <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
                        <div class="card_inner">
                            <p class="text-primary-p">Number of job portals</p>
                            <span class="font-bold text-title">2</span>
                        </div>
                    </div>


                </div>
                <!-- MAIN CARDS ENDS HERE -->

                <!-- CHARTS STARTS HERE -->


                <div class="charts">
                    <div class="charts__title">
                        <div>
                            <h1>Stats Reports</h1>
                            <p>Job Here</p>
                        </div>

                    </div>

                    <div class="charts__cards">
                        <div class="card2">
                            <h1>Total jobs</h1>
                            <p>24</p>
                        </div>

                        <div class="card3">
                            <h1> Total Users</h1>
                            <p><?php echo $data['total']; ?></p>
                        </div>


                    </div>
                </div>

                <!-- CHARTS ENDS HERE -->
            </div>
        </main>

        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">
                    <img src="" alt="" />
                    <h1>Job Here</h1>
                </div>
                <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
            </div>

            <div class="sidebar__menu">
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="dashboard.php">Dashboard</a>
                </div>
                <h2>Management</h2>
                <div class="sidebar__link">
                    <i class="fa fa-wrench"></i>
                    <a href="usermgmt.php">User Management</a>
                </div>
                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="../user/login.php">Log out</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>