<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
$conn = mysqli_connect($servername, $username, $password, $dbname);


//display in usermngment
$persons = mysqli_query($conn, "SELECT * FROM persons");