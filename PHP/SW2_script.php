<!DOCTYPE html>
<html>
<head>
    <title>SEATWORK 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $student_no = $_POST["student_no"];
            $name = $_POST["name"];
            $course = $_POST["course"];
            $year_level = $_POST["year_level"];
            $class_standing = $_POST["class_standing"];
            $midterm = $_POST["midterm"];
            $final = $_POST["final"];
            $honor = isset($_POST["honor"]) ? "Yes" : "No";
            
            $average = ($class_standing * 0.6) + ($midterm * 0.15) + ($final * 0.25);

            if ($average >= 70 && $average <= 100) {
                $status = "Passed";
            }
            else {
                $status = "Failed";
            }
            echo "<h2><center>Student Grade Report<center></h2>";
            echo "<table>";
            echo "<tr><th>Field</th><th>Value</th></tr>";
            echo "<tr><td>Student No.</td><td>{$student_no}</td></tr>";
            echo "<tr><td>Name</td><td>{$name}</td></tr>";
            echo "<tr><td>Course</td><td>{$course}</td></tr>";
            echo "<tr><td>Year Level</td><td>{$year_level}</td></tr>";
            echo "<tr><td>Class Standing (60%)</td><td>{$class_standing}</td></tr>";
            echo "<tr><td>Midterm Exam (15%)</td><td>{$midterm}</td></tr>";
            echo "<tr><td>Final Exam (25%)</td><td>{$final}</td></tr>";
            echo "<tr><td>Weighted Average</td><td>{$average}</td></tr>";
            echo "<tr><td>Status</td><td>{$status}</td></tr>";
            echo "<tr><td>Honor Student</td><td>{$honor}</td></tr>";
            echo "</table>";
        }
    ?>
</body>
</html>
