<?php 

include "db_connect.php";

$sql = "SELECT id, firstname, lastname, nationalid, gender, arrivaltime, date, status FROM employees";

// get the result from the query
$result = mysqli_query($conn, $sql);

// convert the result to an array
$employees = mysqli_fetch_all($result, MYSQLI_ASSOC);


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
    <title>Attendance table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="9">Employees Attendance Table</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>National ID</th>
            <th>Gender</th>
            <th>Arrival Time</th>
            <th>Date</th>
            <th>Status</th>
            <th>Operations</th>
        </tr>
        <tr>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['id'];?>
                <?php }?>
            </td>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['firstname'];?>
                <?php }?>
            </td>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['lastname'];?>
                <?php }?>
            </td>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['nationalid'];?>
                <?php }?>
            </td>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['gender'];?>
                <?php }?>
            </td>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['arrivaltime'];?>
                <?php }?>
            </td>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['date'];?>
                <?php }?>
            </td>
            <td>
                <?php foreach($employees as $employee) { ?>
                    <?php echo $employee['status'];?>
                <?php }?>
            </td>
        </tr>
    </table>
</body>
</html>