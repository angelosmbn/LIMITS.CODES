<html>
<head>
    <title>Machine Problem #1</title>
    <style>
    body {
        
    }

    table {
        max-width: 50%;
        margin: 0 auto;
        background-color: white;
        border: 1px solid;
    }

    th, td {
        text-align: center;
        border: 1px solid black;
        padding: 5px;
        width: 40px;
        height: 35px;
    }

    
    </style>
</head>
<body >
    <center><h1> Multiplication Table</h1></center>
    <table>
        <tr>
            <th>0</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>0</th>";
            }
            ?>
        </tr>
        <?php
        for ($row = 1; $row <= 10; $row++) {
            echo "<tr>";
            echo "<th>0</th>";
            for ($col = 1; $col <= 10; $col++) {
                $result = $row * $col;
                echo "<th>$result</th>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
