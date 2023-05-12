<!DOCTYPE html>
<html>
    <head>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container{
            padding: 10px;
            margin: auto;
            border: 1px solid black;
            width: 300px;
                
            /* other styling */
            background-color: #33475b;
            border-radius: 10px;
            color: white;
            font-family: Arial;
            text-align: center;
        }
        
        </style>
    </head>
    <body>
    <div class="container">
    <?php
        function print_checked_topics($selectedTopics) {
            foreach ($selectedTopics as $topic) {
                echo $topic, "<br>";
            }
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Selected Topics:</h2>";
            if (isset($_POST['topic'])) {
                $selectedTopics = $_POST['topic'];
                print_checked_topics($selectedTopics);
            } else {
                echo "No topics selected.";
            }
            
            
        }
        
    ?>
    </div>
    </body>
</html>
