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
                <strong>  JOB HERE  </strong>
            </div>
            <div class="nav-items">
                <li><a href="employerzone.php">Home</a></li>

                <li><a href="aboutus.html">About US</a></li>
                <li><a href="#">Contact</a></li>

            </div>

        </nav>

     <form action="admin_login.php" method="post" class="login-form">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

         
          
           
          <div class="login">
              <button type="submit">Login</button>
              <a href="admin_signup.php"  class="button">Create an account</a>
         </div>

          <br><br><br>
          <div class="another_login"> 
               <span>If you want to Login as user:</span> 
               <a href="../user/index.php" style="background-color: white; font-size: 11px; font-weight: bold; color: black;" class="button">user</a>
          </div>
     </form>
</body>
</html>