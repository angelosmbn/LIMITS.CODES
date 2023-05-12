<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background: linear-gradient(to bottom, #bdc3c7, #2c3e50);
			color: #333;
			margin: 0;
			padding: 0;
		}
        form {
            max-width: 600px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            background: linear-gradient(to bottom, #74ebd5, #acb6e5);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
        }

        h1,h3 {
            margin-top: 20px;
            margin-bottom: 40px;
            text-align: center;
        }
        h5{
            font-size: 15px;
            display: block;
            margin-top: 20px;
            font-weight: bold;
            margin-bottom: auto;
        }

        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }

        input[type=text], input[type=email], input[type=tel] {
            width: 96%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }
        
        input[type="file"] {
            border: none;
            background-color: #9bc4e2;
            padding: 8px;
            font-size: 16px;
            color: #212529;
            border-radius: 4px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
        input[type="file"]::-webkit-file-upload-button {
            background-color: #f2f4f6;
            color: black;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }
        input[type=file]:hover::-webkit-file-upload-button  {
            background-color: #d6dbdf;
        }

        #city,#state-province,#postal-code,#country,#lname,#fname,
        #mname,#student-id,#year-level,#phone,#email,#guardian-last-name,
        #guardian-first-name,#guardian-contact,#guardian-relationship,
        #emergency-last-name,#emergency-first-name,#emergency-contact,#emergency-relationship,
        #birth-certificate,#form-138,#id{
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            margin-right: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
        }

        .form-group select {
            flex: 1;
            margin-right: 10px;
        }

        .form-group select:last-child {
            margin-right: 0;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }

        button[type="submit"] {
            width: 40%;
            margin-top: 30px;
            background-color: #6e9eb8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }
        button[type="reset"] {
            width: 40%;
            background-color: #6e9eb8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }
        button[type="submit"]:hover {
            width: 42%;
            border-radius: 20px;
            background-color: #6791a8;
        }
        button[type="reset"]:hover {
            width: 42%;
            background-color: #6791a8;
        }
    </style>

</head>
<body>
	<form action="Student_Reg_Script.php" method="POST">
		<h1>Student Registration</h1>
        <h5>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;First Name:&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Middle Name:</h5>

        <div class="form-group">
        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
        <input type="text" name="mname" id="mname" placeholder="Middle Name">
        </div>
        <h5>Student ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;Year-Level:&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Course:
        </h5>
        <div class="form-group">
            <input type="text" name="student-id" id="student-id" placeholder="Student ID">
            
            <select name="year-level" id="year-level" required>
                <option value="">Select Year Level</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
                <option value="4">4th Year</option>
                <option value="5">5th Year</option>
            </select>
        
            <select id="course" name="course" required>
                <option value="">--Select Course--</option>
                <option value="BSCS">BSCS</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCPE">BSCPE</option>
                <option value="BSECE">BSECE</option>
                <option value="BSCE">BSCE</option>
            </select>
        </div>
        <h5>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Contact Number:
        </h5>
        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="ex.myname@example.com" required>
            <input type="tel" name="phone" id="phone" placeholder="0912-345-6789" required>
        </div>

        <label for="birthdate">Birth Date:</label>
        <div class="form-group">
            <select name="month" id="month" required>
                <option value="">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>

            <select name="day" id="day" required>
            <option value="" disabled selected>Day</option>
            <?php
                for ($i = 1; $i <= 31; $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?>
            </select>

            <select name="year" id="year" required>
            <option value="" disabled selected>Year</option>
            <?php
                for ($i = 1900; $i <= 2099; $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?>
            </select>

        </div>

        
        <label for="present-address">Present Address:</label>
        <input type="text" name="street-address-1" id="street-address-1" placeholder="Street Address 1" required>
        <input type="text" name="street-address-2" id="street-address-2" placeholder="Street Address 2">
        <div class="form-group">
            <input type="text" name="city" id="city" placeholder="City" required>
            <input type="text" name="state-province" id="state-province" placeholder="State/Province" required>
            <input type="text" name="postal-code" id="postal-code" placeholder="Postal/Zip Code" required>
            <input type="text" name="country" id="country" placeholder="Country" required>
        </div>
        <h3>GUARDIAN INFORMATION</h3>
        <h5>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        First Name:
        </h5>
        <div class="form-group">
            <input type="text" name="guardian-last-name" id="guardian-last-name" placeholder="Last Name" required>
            <input type="text" name="guardian-first-name" id="guardian-first-name" placeholder="First Name" required>
        </div>

        <h5>Contact Number:&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Relationship:
        </h5>
        <div class="form-group">
        <input type="text" name="guardian-contact" id="guardian-contact" placeholder="0912-345-6789" required>
        <input type="text" name="guardian-relationship" id="guardian-relationship" placeholder="Relationship" required>
        </div>

        <h3>EMERGENCY CONTACT</h3>
        <h5>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;
        First Name:
        </h5>
        <div class="form-group">
        <input type="text" name="emergency-last-name" id="emergency-last-name" placeholder="Last Name" required>
        <input type="text" name="emergency-first-name" id="emergency-first-name" placeholder="First Name" required>
        </div>
        <h5>Contact Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        Relationship:
        </h5>
        <div class="form-group">
        <input type="text" name="emergency-contact" id="emergency-contact" placeholder="0912-345-6789" required>
        <input type="text" name="emergency-relationship" id="emergency-relationship" placeholder="Relationship" required>
        </div>
        <h3>PREVIOUS SCHOOL</h3>
        <label for="elementary-school">Elementary School:</label>
        <input type="text" name="elementary-school" id="elementary-school" placeholder="Elementary School" required>

        <label for="high-school">High School:</label>
        <input type="text" name="high-school" id="high-school" placeholder="High School" required>

        <h3>FILE SUBMISSION</h3>
        <label for="birth-certificate">&nbsp;Birth Certificate:</label>
        <input type="file" name="birth-certificate" id="birth-certificate" accept="image/*, application/pdf">
        <label for="form-138">&nbsp;Form 138:</label>
        <input type="file" name="form-138" id="form-138" accept="image/*, application/pdf">
        <label for="id">&nbsp;ID:</label>
        <input type="file" name="id" id="id" accept="image/*, application/pdf">
        <center>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
        </center>
    </body>
</html>