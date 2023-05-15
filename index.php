<?php 

    include("validate.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Home Page</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <style>
        fieldset{
            border: 1px solid black;
            width: 65vw;
        }

        .error{
            color: red;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Employee details</legend>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <!-- first name field -->
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname"><br>
                <span class="error"><?php echo $fnameErr; ?></span>
            <br>
            <!-- last name field -->
            <label for="lname">First Name:</label>
            <input type="text" name="lname" id="lname"><br>
                <span class="error"><?php echo $lnameErr; ?></span>
            <br>

            <!-- National Id field -->
            <label for="natID">National ID:</label>
            <input type="text" name="natID" id="natID"><br>
                <span class="error"><?php echo $natIDErr; ?></span>
            <br>

            <!-- gender field -->
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>

            <!-- field arrival time -->
            <label for="arrival">Arrival Time:</label>
            <input type="time" name="arrival" id="arrival"><br>
                <span class="error"><?php echo $arrivalErr; ?></span>
            <br>

            <!-- field date -->
            <label for="date">Date</label>
            <input type="text" name="date" id="date" autocomplete="off" readonly><br>
                <span class="error"><?php echo $dateErr; ?></span>
            <br>

            <!-- field for status -->
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="absent">Absent</option>
                <option value="absent">Absent</option>
            </select><br><br>

            <!-- submit button -->
            <button type="submit">Submit</button>
        </form>

    </fieldset>

    <script>
        $( function() {
            $( "#date" ).datepicker({
                maxDate: 0
            });
        });
    </script>
</body>
</html>