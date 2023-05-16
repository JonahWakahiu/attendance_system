<?php 

$fname = $lname = $natID = $gender = $arrival = $date = $status = "";
//$fnameErr = $lnameErr = $natIDErr = $arrivalErr = $dateErr = "";

$errors = array('fnameErr'=>'', 'lnameErr'=>'', 'natIDErr'=>'', 'arrivalErr'=>'', 'dateErr'=>'');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    // check for empty inputs and throw an error 
    // validate the fname
    if(empty($_POST['fname'])){
        $errors['fnameErr'] = "First Name is required!!";
    } else{
        $fname = test_input($_POST['fname']);
        // second validation
        if(!preg_match('/^[a-zA-Z]{3,10}$/', $fname)){
            $errors['fnameErr'] = "First Name should be letters only and between 3 to 10 letters...";
        }
    }

    // validate the lastname
    if(empty($_POST['lname'])){
        $errors['lnameErr'] = "Last Name is required!!";
    } else{
        $lname = test_input($_POST['lname']);
        // second level validation
        if(!preg_match('/^[a-zA-Z]{3,10}$/', $lname)){
            $errors['lnameErr'] = "Last Name should be letters only and between 3 to 10 letters...";
        }
    }

    // validate National ID
    if(empty($_POST['natID'])){
        $errors['natIDErr'] = "National ID is required!!";
    } else{
        $natID = test_input($_POST['natID']);
        if(!preg_match('/^[\d]{3,10}$/', $natID)){
            $errors['natIDErr'] = "National ID should be numbers olny...";
        }
    }

    // storing the value of gender in a variable
    $gender = test_input($_POST['gender']);

    // validate arrival time

    if(empty($_POST['arrival'])){
        $errors['arrivalErr'] = "Arrival Time is required!!";
    } else{
        $arrival = test_input($_POST['arrival']);
    }

    // validate the date field
    if(empty($_POST['date'])){
        $errors['dateErr'] = "date is required!!";
    } else{
        $date = test_input($_POST['date']);
    }

    // storing the status value in a variable
    $status = test_input($_POST['status']);

    if(array_filter($errors)){
        // echo errors in the form
    } else{
        include("db_connect.php");

        $query = "SELECT * FROM employees WHERE nationalid = '$natID' && date = '$date'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            echo "A record with the same national ID and date already exists.";
        } else{
            // create an sql query
            $date = test_input($_POST['date']);
            $sql = "INSERT INTO employees(firstname, lastname, gender, nationalid, arrivaltime, date, status) VALUES ('$fname', '$lname', '$gender', '$natID', '$arrival', '$date', '$status')";

            //save to DB and check
            if(mysqli_query($conn, $sql)){
                // success
                header('Location: index.php');
            } else{
                echo "failed to add the record: ".mysqli_error($conn);
            }
        }

        // close the connection
        mysqli_close($conn);
        
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>