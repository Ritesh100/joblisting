<?php
require_once "conn.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="usermgmt.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <title>Addjobs</title>
</head>

<body id="body">
    <div class="container">
        <nav class="navbar">

            <div class="navbar__left">
                <a class="active_link" href="addjobs.php" style="text-decoration: none; font-weight: bold; ">Add
                    Jobs</a>
        </nav>

        <main>
            <div class="form-div" style="margin-right: 350px;">
                <form action="jobpost.php" style="padding-top: 25px;">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="Name" placeholder=" Enter Company name"><br><br>



                    <label for="Position">Position</label>
                    <input type="text" id="Position" name="Position" placeholder="Enter the position"><br><br>

                    <label for="Salary">Salary</label>
                    <input type="text" id="Salary" name="Salary" placeholder="Enter Salary"><br><br>

                    <label for="Address">Address</label>
                    <input type="text" id="Address" name="Address" placeholder="Enter Address"><br><br>

                    <label for="job-portal">Job Portal</label>
                    <select id="job-portal" name="job-portal">
                        <option value="kumarijob">Kumarijob</option>
                        <option value="jobjee">Jobejee</option>
                        <option value="merojob">merojob</option>
                    </select>
                    <br><br>

                    <button type="submit" value="submit">Submit</button>
                </form>
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
                <div class="sidebar__link">
                    <i class="fa fa-home"></i>
                    <a href="dashboard.php">Dashboard</a>
                </div>
                <h2>Management</h2>
                <div class="sidebar__link ">
                    <i class="fa fa-wrench"></i>
                    <a href="usermgmt.php">User Management</a>
                </div>
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    <a href="addjobs.php">Add jobs</a>
                </div>
                <div class="sidebar__logout">
                    <i class="fa fa-power-off"></i>
                    <a href="../user/logout.php">Log out</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
</body>

</html>