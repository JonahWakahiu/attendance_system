<?php 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Home Page</title>
    <style>
        fieldset{
            border: 1px solid black;
            width: 65vw;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Employee details</legend>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <!-- first name field -->
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname"><br><br>
            <!-- last name field -->
            <label for="lname">First Name:</label>
            <input type="text" name="lname" id="lname"><br><br>

            <!-- National Id field -->
            <label for="natID">National ID:</label>
            <input type="text" name="natID" id="natID"><br><br>

            <!-- gender field -->
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>

            <!-- field arrival time -->
            <label for="arrival">Arrival Time:</label>
            <input type="text" name="date" id="date"><br><br>

            <!-- field date -->
            <label for="date">Date</label>
            <input type="text" name="date" id="date"><br><br>

            <!-- field for status -->
            <label for="status">Status</label>
            <input type="text" name="status" id="status"><br><br>

            <!-- submit button -->
            <button type="submit">Submit</button>
        </form>

    </fieldset>
</body>
</html>