<!DOCTYPE html>
<html>
<head>
    <title>STUDENT REGISTRATION</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            width: 40%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #9bc4e2;
            color: white;
        }
        button{
            width: 20%;
            margin-top: 50px;
            background-color: #6e9eb8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }
        button:hover {
            width: 22%;
            border-radius: 20px;
            background-color: #6791a8;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $lname = $_POST["lname"];
            $fname = $_POST["fname"];
            $mname = $_POST["mname"];
            $student_id = $_POST["student-id"];
            $year_level = $_POST["year-level"];
            $course = $_POST["course"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $b_month = $_POST["month"];
            $b_day = $_POST["day"];
            $b_year = $_POST["year"];
            $street1 = $_POST["street-address-1"];
            $street2 = $_POST["street-address-2"];
            $city = $_POST["city"];
            $state = $_POST["state-province"];
            $zip = $_POST["postal-code"];
            $country = $_POST["country"];
            $g_lname = $_POST["guardian-last-name"];
            $g_fname = $_POST["guardian-first-name"];
            $g_phone = $_POST["guardian-contact"];
            $g_rel = $_POST["guardian-relationship"];
            $e_lname = $_POST["emergency-last-name"];
            $e_fname = $_POST["emergency-first-name"];
            $e_phone = $_POST["emergency-contact"];
            $e_rel = $_POST["emergency-relationship"];
            $elem = $_POST["elementary-school"];
            $hs = $_POST["high-school"];
            $bc = $_POST["birth-certificate"];
            $form138 = $_POST["form-138"];
            $id = $_POST["id"];

            echo "<table>";
            echo "<tr><th>Variable</th><th>Value</th></tr>";
            echo "<tr><td>Full Name</td><td>" . $fname . " " . $mname . " " . $lname . "</td></tr>";
            echo "<tr><td>Student ID</td><td>" . $student_id . "</td></tr>";
            echo "<tr><td>Year Level</td><td>" . $year_level . "</td></tr>";
            echo "<tr><td>Course</td><td>" . $course . "</td></tr>";
            echo "<tr><td>Email</td><td>" . $email . "</td></tr>";
            echo "<tr><td>Phone</td><td>" . $phone . "</td></tr>";
            echo "<tr><td>Birth Month</td><td>" . $b_month . "</td></tr>";
            echo "<tr><td>Birth Day</td><td>" . $b_day . "</td></tr>";
            echo "<tr><td>Birth Year</td><td>" . $b_year . "</td></tr>";
            echo "<tr><td>Street Address 1</td><td>" . $street1 . "</td></tr>";
            echo "<tr><td>Street Address 2</td><td>" . $street2 . "</td></tr>";
            echo "<tr><td>City</td><td>" . $city . "</td></tr>";
            echo "<tr><td>State/Province</td><td>" . $state . "</td></tr>";
            echo "<tr><td>Postal Code</td><td>" . $zip . "</td></tr>";
            echo "<tr><td>Country</td><td>" . $country . "</td></tr>";
            echo "<tr><td>Guardian Full Name</td><td>" . $g_fname . " " .$g_lname . "</td></tr>";
            echo "<tr><td>Guardian Contact</td><td>" . $g_phone . "</td></tr>";
            echo "<tr><td>Guardian Relationship</td><td>" . $g_rel . "</td></tr>";
            echo "<tr><td>Emergency Full Name</td><td>" . $e_fname . " "  . $e_lname . "</td></tr>";
            echo "<tr><td>Emergency Contact</td><td>" . $e_phone . "</td></tr>";
            echo "<tr><td>Emergency Relationship</td><td>" . $e_rel . "</td></tr>";
            echo "<tr><td>Elementary School</td><td>" . $elem . "</td></tr>";
            echo "<tr><td>High School</td><td>" . $hs . "</td></tr>";
            echo "<tr><td>Birth Certificate</td><td>" . $bc . "</td></tr>";
            echo "<tr><td>Form 138</td><td>" . $form138 . "</td></tr>";
            echo "<tr><td>ID</td><td>" . $id . "</td></tr>";
            echo "</table>";

        }
    ?>
    <form method="post">
        <center><button type="button" onclick="goBack()">Go Back</button></center>
    </form>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
