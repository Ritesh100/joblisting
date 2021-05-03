<?php
include_once 'conn.php';
if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE jobseekers set id='" . $_POST['Id'] . "', user_name='" . $_POST['user_name'] . "', name='" . $_POST['name'] . "' WHERE id='" . $_POST['Id'] . "'");
	$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM jobseekers WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
	<title>Update jobseeker Data</title>

	<link rel="stylesheet" type="text/css" href="../css/loginpage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>


<body>



<form name="frmUser" method="post" action="" class="login-form">

	<div class="goback" style="">
		<a href="usermgmt.php" style="text-decoration: none; font-weight: bold; color: black" ><i class="fas fa-arrow-left"></i></a>
	</div>
	<div>
			<?php if(isset($message)) { echo $message; } ?>
	</div>
	

	<input type="hidden" name="Id"  value="<?php echo $row['id']; ?>">
	<br>
	Username: <br>
	<input type="text" name="user_name" class="txtField" value="<?php echo $row['user_name']; ?>">
	<br>
	Name :<br>
	<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
	<br>
	<input type="submit" name="update" value="Submit" class="buttom">

</form>
</body>
</html>