<?php 

$fnameErr = $lnameErr = $natIDErr = $arrivalErr = $dateErr = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    // check for empty inputs and throw an error 
    // validate the fname
    if(empty($_POST['fname'])){
        $fnameErr = "First Name is required!!";
    } else{
        $fname = test_input($_POST['fname']);
    }

    // validate the lastname
    if(empty($_POST['lname'])){
        $lnameErr = "Last Name is required!!";
    } else{
        $lname = test_input($_POST['lname']);
    }

    // validate National ID
    if(empty($_POST['natID'])){
        $natIDErr = "National ID is required!!";
    } else{
        $natID = test_input($_POST['natID']);
    }

    // storing the value of gender in a variable
    $gender = test_input($_POST['gender']);

    // validate arrival time

    if(empty($_POST['arrival'])){
        $arrivalErr = "Arrival Time is required!!";
    } else{
        $arrival = test_input($_POST['arrival']);
    }

    // validate the date field
    if(empty($_POST['date'])){
        $dateErr = "date is required!!";
    } else{
        $date = test_input($_POST['date']);
    }

    // storing the status value in a variable
    $status = test_input($_POST['status']);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>