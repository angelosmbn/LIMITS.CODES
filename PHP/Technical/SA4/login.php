<?php
    session_start(); // Start the session

    if(isset($user)){
        // Redirect to the patient dashboard page
        echo ("<script>location.href='Admin_home.php'</script>");
        exit();
    }
    $error_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $admin_access = "admin";
        $user_access = "user";
        $conn = new mysqli('localhost', 'root', '', 'sa4');
        if ($conn->connect_error) {
            $error_message = 'Unable to connect to the database. Please try again later.';
            die("Connection failed: " . $conn->connect_error);
        } else {
            $stmt_user = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ? AND accesslevel = ?");
            if ($stmt_user){
                $stmt_user->bind_param("sss", $username, $password, $admin_access);
                $stmt_user->execute();
                $result_user = $stmt_user->get_result();
            }else{
                $stmt_user = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ? AND accesslevel = ?");
                $stmt_user ->bind_param("sss", $username, $password, $admin_access);
                $stmt_user ->execute();
                $result_user  = $stmt_user ->get_result();
            }
            if ($result_user->num_rows > 0) {
                $user = $result_user->fetch_assoc();
                $_SESSION['user'] = $user;
                header("Location: Admin_home.php");
                //echo ("<script>location.href='Admin_home.php'</script>");
                exit();
            }
            elseif ($result_user->num_rows < 0){
                $user = $result_user->fetch_assoc();
                $_SESSION['user'] = $user;
                echo ("<script>location.href='User_home.php'</script>");
                exit();
            }
            else {
                $error_message = 'Invalid email or password. Please try again.';
            }
            
            $stmt_user->close();
            $conn->close();
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
            display: block;
            padding: 1rem;
            max-width: 350px;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            margin: auto;
            border: 0.5px solid black;
            margin-top: 150px;
        }

        .form-title {
            font-size: 1.25rem;
            line-height: 1.75rem;
            font-weight: 600;
            text-align: center;
            color: #000;
        }

        .input-container {
            position: relative;
        }

        .input-container input, .form button {
            outline: none;
            border: 1px solid #e5e7eb;
            margin: 8px 0;
        }

        .input-container input {
            background-color: #fff;
            padding: 1rem;
            padding-right: 3rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            width: 250px;
            border-radius: 0.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .submit {
            display: block;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            background-color: #4F46E5;
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.25rem;
            font-weight: 500;
            width: 100%;
            border-radius: 0.5rem;
            text-transform: uppercase;
        }

        .signup-link {
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.25rem;
            text-align: center;
        }

        .signup-link a {
            text-decoration: underline;
        }
        .error-message{
            color: red;
        }

    </style>
</head>
<body>
    <form class="form" method="POST" action="login.php">
        <p class="form-title">Sign in to your account</p>
        <div class="input-container">
            <input type="text" name="username" placeholder="Enter Username">
            <span></span>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Enter password">
            <?php if (!empty($error_message)) { ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php } ?>
        </div>
        <button type="submit" class="submit">Sign in</button>
        <p class="signup-link">
            No account?
            <a href="signup.php">Sign up</a>
        </p>
    </form>
</body>
</html>
