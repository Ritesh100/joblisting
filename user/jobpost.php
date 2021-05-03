//include_once 'connection.php';
// if (isset($_POST['save'])) {
// $Name = $_POST['Name'];
// $Position = $_POST['Position'];
// $Salary = $_POST['Salary'];
// $Address = $_POST['Address'];
// $sql = "INSERT INTO addjobs(Name,Position, Salary,Address) VALUES('$Name','$Position','$Salary','$Address')";
// if (mysqli_query($conn, $sql)) {
// echo "New record created successfully !";
// } else {
// echo "Error: " . $sql . "
// " . mysqli_error($conn);
// }
// mysqli_close($conn);
// }

// $connect = mysqli_connect("localhost", "root", "", "project");
// if ($connect === false) {
// die("Error: Couldnot connect" . mysqli_connect_error());
// }
// $Name = $_REQUEST['Name'];
// $Position = $_REQUEST['Position'];
// $Salary = $_REQUEST['Salary'];
// $Address = $_REQUEST['Address'];

// $sql = "INSERT INTO addjobs VALUES('$Name','$Position','$Salary','$Address')";
// if (mysqli_query($connect, $sql)) {
// echo "<h3>data stored in a database successfully."
    // . " Please browse your localhost php my admin"
    // . " to view the updated data</h3>";

// echo nl2br("\n$Name\n $Position\n "
// . "$Salary\n $Address");
// } else {
// echo "ERROR: Hush! Sorry $sql. "
// . mysqli_error($connect);
// }

// // Close connection
// mysqli_close($connect);
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Position = mysqli_real_escape_string($link, $_REQUEST['Position']);
$Salary = mysqli_real_escape_string($link, $_REQUEST['Salary']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);

// Attempt insert query execution
$sql = "INSERT INTO addjobs (Name,Position, Salary,Address) VALUES ('$Name','$Position','$Salary','$Address)";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>