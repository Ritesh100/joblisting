<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
$conn = mysqli_connect($servername, $username, $password, $dbname);


//display in usermngment

$res = mysqli_query($conn, "SELECT * FROM jobseekers");