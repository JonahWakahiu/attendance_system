<?php

$id = $_GET['id'];

// connect to the database
include('db_connect.php');

$sql = "DELETE FROM employees WHERE id=$id";

// run the query and store the result
$result = mysqli_query($conn, $sql);
// checking if the record has been deleted successfully

if($result){
    echo "Record successfully deleted";
} else{
    echo "Failed to delete record: ".mysqli_error($conn);
}
?>