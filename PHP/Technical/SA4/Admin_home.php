<?php 
    session_start();

    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
    $name = ""; // Initialize the variable
    $name = $user['Firstname'] . " " . $user['Middlename'] . " " . $user['Lastname'];
    // Logout logic
    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
    <style>
        .container {
            background-color: #fff;
            display: relative;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
            max-width: 1000px;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            margin: auto;
            border: 0.5px solid black;
            margin-top: 150px;
        }
        .titles {
            font-weight: bold;
            display: inline; /* Display inline to make "Welcome" and name appear side by side */
            margin-right: 5px; /* Add some space between "Welcome" and name */
        }
        .tab{
            margin-left: 10px;
            display: inline;
        }

        .settings {
            margin-top: 50px;
            margin-left: 20px;
            margin-bottom: 30px
        }
        #records{
            margin-bottom: 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            display: relative;
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>My Information</h2>
        <div class='titles'>Welcome</div> <?php echo $name ?> <br>
        <div class='titles'>Userlevel:</div> <?php echo $user['accesslevel']; ?> <br>
        <div class='titles'>Birthday:</div> <?php echo $user['accesslevel']; ?> <br>
        <div class='titles'>Contact Details</div> <br>
        <div class="tab"><div class='titles'>Contact:</div> <?php echo $user['Contactno']; ?> </div> <br>
        <div class="tab"><div class='titles'>Email:</div> <?php echo $user['Email']; ?> </div> <br>
        
        <div class="settings">
            <a href="upload.php">upload image</a>
            <div class="tab"><a href="reset.php">Reset my password</a></div>
        </div>
        
        <h2 id="records">-Records-</h2>
        <a id="add_user" href="upload.php">Add New User</a>
        <br>
        <table>
        <tr><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th>
        <th>Contact No.</th><th>Email.</th><th>Birthday</th><th>Username</th>
        <th>Access Level</th><th>Status</th></tr>
        <?php 
            $conn = new mysqli('localhost', 'root', '', 'sa4');
            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>{$row['ID']}</td><td>{$row['Firstname']}</td><td>{$row['Middlename']}</td><td>{$row['Lastname']}</td><td>{$row['Contactno']}</td><td>{$row['Email']}</td><td>{$row['Birthday']}</td><td>{$row['username']}</td><td>{$row['accesslevel']}</td><td>{$row['status']}</td></tr>";
                }
            }
            else {
                echo "0 results";
            }
        
        ?>

        </table>
        
        <form action="" method="post">
            
        </form>
    </div>
</body>
</html>