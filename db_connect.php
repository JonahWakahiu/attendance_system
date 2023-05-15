<?php 

// connecting to MySQL database
$conn = mysqli_connect('localhost', 'Jonah', 'pass1234', 'attendance');

// checking the connection
if(!$conn){
    "Connection failed: ".mysqli_connect_error($conn);
}
?>