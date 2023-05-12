<!DOCTYPE html>
<html>
    <head>
        <title>SEATWORK 2</title>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        h3 {
            margin-bottom: 10px;
        }
        form {
            border: 1px solid #ddd;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        button[type="reset"]:hover {
            background-color: #3e8e41;
        }
        </style>
    </head>

    <body>
        
        <form action="SW2_script.php" method="POST">
            <h3><center>Student Record</center></h3><br>
            <label for="student_no">Student No.</label>
            <input type="text" name="student_no" id="student_no" placeholder="Enter Student Number" required>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Full Name"  required>

            <label for="course">Course:</label>
            <select id="course" name="course" required>
                <option value="">--Select Course--</option>
                <option value="BSCS">BSCS</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCPE">BSCPE</option>
                <option value="BSECE">BSECE</option>
                <option value="BSCE">BSCE</option>
            </select>

            <label for="year_level">Year Level:</label>
            <input type="number" name="year_level" id="year_level" min="1" max="4" placeholder="*"  required>

            <h3>Grades Record</h3>

            <label for="class_standing">Class Standing (60%):</label>
            <input type="number" name="class_standing" id="class_standing" placeholder="Enter Grade Here"  required>

            <label for="midterm">Midterm Exam (15%):</label>
            <input type="number" name="midterm" id="midterm" placeholder="Enter Grade Here"  required>

            <label for="final">Final Exam (25%):</label>
            <input type="number" name="final" id="final" placeholder="Enter Grade Here"  required>

            <label for="honor">Honor Student:
            <input type="checkbox" name="honor" id="honor">
            </label>
            <br>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </body>
</html>
