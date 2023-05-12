<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f2f2f2;
            }
            
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: auto;
            }
            
            .form-container {
                max-width: 400px;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 4px;
                background-color: #fff;
            }
            
            h2 {
                text-align: center;
                color: #333;
            }
            
            form {
                margin-top: 20px;
            }
            
            label {
                display: block;
                margin-bottom: 10px;
                color: #555;
            }
            
            button {
                margin-top: 10px;
                padding: 8px 16px;
                font-size: 14px;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            button[type="reset"] {
                background-color: #f44336;
            }
        </style>
    </head>
    
    <body>
        <h2>Select Programming Languages</h2>
        <div class="container">
            <div class="form-container">
                <form action="SW3_script.php" method="POST">
                    <?php
                        $languages = array(
                            "Javascript",
                            "Python",
                            "Go",
                            "Java",
                            "Kotlin",
                            "PHP",
                            "C#",
                            "Swift",
                            "R",
                            "Ruby"
                        );

                        for ($i = 0; $i < count($languages); $i++) {
                            $value = $languages[$i];
                            echo '<label>';
                            echo '<input type="checkbox" name="topic[]" value="' . $value . '">' . $value;
                            echo '</label>';
                        }
                    ?>

                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </form>
            </div>
        </div>
    </body>
</html>
