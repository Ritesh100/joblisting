<?php
require_once "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="usermgmt.css" />
    <title>dashboard</title>
</head>

<body id="body">
    <div class="container">
        <nav class="navbar">

            <div class="navbar__left">
                <a class="active_link" href="usermgmt.php" style="text-decoration: none; font-weight: bold; ">User
                    Management</a>
        </nav>

        <main>

            <?php
            if (mysqli_num_rows($res) > 0) {
            ?>

            <table border="1" ; style="background-color:dimgray;width:100%;font-size:30px;">
                <tr style="background-color:burlywood">
                    <th>id</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                <?php
                    while ($table = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>" . $table['id'] . "</td>";
                        echo "<td>" . $table['user_name'] . "</td>";
                        echo "<td>" . $table['name'] . "</td>";
                    ?>
                <td>
                    <a href="update.php?id=<?php echo $table["id"]; ?>">edit</a>
                    <a href="delete.php?id=<?php echo $table["id"]; ?>">delete</a>

                </td>

                <?php
                        echo "</tr>";
                    }
                    ?>

            </table>

            <?php
            } else {
                echo "No result found";
            }
            ?>


        </main>

        <div id="sidebar">
            <div class="sidebar__title">
                <div class="sidebar__img">

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
                <div class="sidebar__link active_menu_link">
                    <i class="fa fa-wrench"></i>
                    <a href="usermgmt.php">User Management</a>
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