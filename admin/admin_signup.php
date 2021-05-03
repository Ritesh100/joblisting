<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
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
     <form action="admin-signup-check.php" method="post" class="login-form">
     	<h2>ADMIN SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="admin_index.php" class="button">Already have an account?</a>

          <br><br><br>

        <div class="another_login"> 
               <strong>If you want to Signup as user </strong> 
               <a href="../user/signup.php" style="background-color: white; font-size: 11px;font-weight: bold; color: black;" class="button">admin</a>
          </div>
     </form>


</body>
</html>