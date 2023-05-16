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
    <style>
        .decoration{
            text-decoration: none;
        }
    </style>
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
        <?php foreach($employees as $employee) { ?>
            <tr>
                <td><?php echo $employee['id'];?></td>
                <td><?php echo $employee['firstname'];?></td>
                <td><?php echo $employee['lastname'];?></td>
                <td><?php echo $employee['nationalid'];?></td>
                <td><?php echo $employee['gender'];?></td>
                <td><?php echo $employee['arrivaltime'];?></td>
                <td><?php echo $employee['date'];?></td>
                <td><?php echo $employee['status'];?></td>
                <td>
                    <a class="decoration"  href="operation.php?id=<?php echo $employee['id']?>">Delete</a>
                    <a class="decoration" href="edit.php?id=<?php echo $employee['id']?>">Edit</a>
                </td>
            </tr>
        <?php }?>
    </table>
</body>
</html>