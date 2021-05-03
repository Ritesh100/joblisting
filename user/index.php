<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../css/loginpage.css">
    <link rel="stylesheet" href="../css/aboutus.css">

</head>

<body>
    <nav class="navbar">

        <div class="logo">
            <strong> JOB HERE </strong>
        </div>
        <div class="nav-items">
            <li><a href="guest.php">Home</a></li>

            <li><a href="gaboutus.php">About US</a></li>
            <li><a href="gcontact.php">Contact</a></li>

        </div>

    </nav>

    <form action="login.php" method="post" class="login-form">
        <h2>USER LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>




        <div class="login">
            <button type="submit">Login</button>
            <a href="signup.php" class="button">Create an account</a>
        </div>

        <br><br><br>
        <div class="another_login">
            <span>If you want to login as admin:</span>
            <a href="../admin/admin_index.php"
                style="background-color: white; font-size: 11px; font-weight: bold; color: black;"
                class="button">admin</a>
        </div>
    </form>
</body>

</html>