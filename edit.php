<?php 

$id = $_GET['id'];

include('db_connect.php');

$sql = "SELECT firstname, lastname, nationalid, gender, arrivaltime, date, status FROM employees WHERE id=$id";

// run the query and store the result
$result = mysqli_query($conn, $sql);

// convert the result to an array
$employeedetails = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r($employeedetails);

foreach($employeedetails as $employee){
    $fname = $employee['firstname'];
    $lname = $employee['lastname'];
    $natID = $employee['nationalid'];
    $gender = $employee['gender'];
    $arrival = $employee['arrivaltime'];
    $date = $employee['date'];
    $status = $employee['status'];
}


//free the result for memory
mysqli_free_result($result);

// closing the connection
mysqli_close($conn);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee's Details Edit Page</title>
</head>
<body>
    <form action="" method="">
        <fieldset>
            <legend>Edit Details</legend>
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>" ><br><br>

            <!-- lastname-->
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>" ><br><br>

            <!-- national id -->
            <label for="natID">National ID</label>
            <input type="text" name="natID" id="natID" value="<?php echo $natID; ?>"><br><br>

            <!-- gender -->
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>

            <!-- arrival time -->
            <label for="arrival">Arrival Time:</label>
            <input type="time" name="arrival" id="arrival" value="<?php echo $arrival; ?>"><br><br>

            <!-- Date -->
            <label for="date">Date</label>
            <input type="text" name="date" id="date" value="<?php echo $date; ?>"><br><br>

            <!-- status -->
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="absent">Absent</option>
                <option value="present">Present</option>
            </select><br><br>

            <!-- edit button -->
            <button type="submit">Edit</button>
        </fieldset>
    </form>
</body>
</html>