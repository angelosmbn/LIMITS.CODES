<?php
    session_start(); // Start the session

    if(isset($user)){
        // Redirect to the patient dashboard page
        echo ("<script>location.href='Admin_home.php'</script>");
        exit();
    }
    $error_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['firstname'];
        $mname = $_POST['middlename'];
        $lname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        $conn = new mysqli('localhost', 'root', '', 'sa4');
        if ($conn->connect_error) {
            $error_message = 'Unable to connect to the database. Please try again later.';
            die("Connection failed: " . $conn->connect_error);
        }
        else {
            if($password == $confirmpassword){
                $stmt = $conn->prepare("INSERT INTO doctors(Firstname, Lastname, Middlename, Contactno, Email, Brithday, username, password) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssssss", $fname, $lname, $mname, $contact, $email, $birthday, $username, $password);
                $stmt->execute();

                $stmt->close();
                $conn->close();
            }
            else{
                $error_message = 'Password does not match. Please try again.';
            }
            
        }
    }
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { /* Adjust the value to make space for the navbar */ 
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .form {
            background-color: #fff;
            display: relative;
            padding: 1rem;
            max-width: 350px;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            margin: auto;
            border: 0.5px solid black;
            margin-top: 150px;
        }

        input{
            width: 60%;
            
        }


        .error-message{
            color: red;
        }
        a{
            margin-left: 90%;
        }

    </style>
</head>
<body>
    <form class="form" method="POST" action="login.php">
        <h2>Add User</h2>
        <a href="Admin_home.php">Back</a><br>
        Fill Up Form <br>
        <form action="" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname"><br>
        <label for="middlename">Middle Name:</label>
        <input type="text" name="middlename" id="middlename"><br>
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname"><br>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" name="confirmpassword" id="confirmpassword"><br>
        <label for="birthday">Birthday:</label>
        <input type="date" name="birthday" id="birthday"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <label for="contact">Contact Number:</label>
        <input type="text" name="contact" id="contact"><br>
        <?php if (!empty($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>
        </div>
        <button type="submit" class="submit">Submit</button>
        </form>
    </form>
</body>
</html>
