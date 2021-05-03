<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
$conn = mysqli_connect($servername, $username, $password, $dbname);


//display in usermngment
$addjobs = mysqli_query($conn, "SELECT * FROM addjobs");