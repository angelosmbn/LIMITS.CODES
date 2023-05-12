<!DOCTYPE html>
<html>
    <head>
        <title> MEASURE CONVERSION </title>
        <style>
            .container{
                padding: 290px;
                margin: 15px;
                border: 1px solid black;
                
                /* other styling */
                background-color: #33475b;
                border-radius: 10px;
                color: white;
                font-family: Arial;
                text-align: center;
            }

            input[type="text"] {
			width: 120px;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 20px;
		    }
            form {
			margin-top: 30px;
			text-align: center;
		    }


        .btn-group button {
            background-color: #7faad4; /* Green background */
            border: 1px solid black; /* Green border */
            color: white; /* White text */
            padding: 10px 24px; /* Some padding */
            cursor: pointer; /* Pointer/hand icon */
            border-radius: 5px;
        }

        .btn-group button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            background-color: #526d87;
        }

        .result {

            padding: 0px;
            margin: 20px;
            border: 1px solid black;
            border-radius: 10px;

			font-size: 24px;
			color: black;
			text-align: center;
            background-color: #5884b0;
		}

        </style>
        
    </head> 

    <body style="background-color:#212b36;">
        <div class="btn-group"> 
        <div class="container" >
            <h1>Enter measurement</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="measurement" step="any" id="container" required >

            <label for="unit">Unit:</label>
            <select name="unit" id="unit">
            <option value="mm">Millimeter</option>
            <option value="cm">Centimeter</option>
            <option value="m">Meter</option>
            <option value="km">Kilometer</option>
            </select>

            <br><br>

            <label for="unit_to">Convert to:</label>
            <br><br>
            <button name="unit_to" value="mm">Millimeter</button>
            <button name="unit_to" value="cm">Centimeter</button>
            <button name="unit_to" value="m">Meter</button>
            <button name="unit_to" value="km">Kilometer</button>
            </form>
       
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$measurement = $_POST['measurement'];
                $current_value = $_POST['unit'];
                $converted_value = $_POST['unit_to'];
                $value = 0;
                switch ($current_value){
                    case 'mm':
                        if($converted_value == 'mm') {
                            $value = $measurement;
                        }
                        elseif($converted_value == 'cm'){
                            $value = $measurement/10;
                        }
                        elseif($converted_value == 'm'){
                            $value = $measurement/100;
                        }
                        elseif($converted_value == 'km'){
                            $value = $measurement/1000;
                        }
                        break;
                
                    case 'cm':
                        if($converted_value == 'mm') {
                            $value = $measurement*10;
                        }
                        elseif($converted_value == 'cm'){
                            $value = $measurement;
                        }
                        elseif($converted_value == 'm'){
                            $value = $measurement/100;
                        }
                        elseif($converted_value == 'km'){
                            $value = $measurement/1000;
                        }
                        break;
                    
                    case 'm':
                        if($converted_value == 'mm') {
                            $value = $measurement*1000;
                        }
                        elseif($converted_value == 'cm'){
                            $value = $measurement*100;
                        }
                        elseif($converted_value == 'm'){
                            $value = $measurement;
                        }
                        elseif($converted_value == 'km'){
                            $value = $measurement/1000;
                        }

                        break;

                    case 'km':
                        if($converted_value == 'mm') {
                            $value = $measurement*1000000;
                        }
                        elseif($converted_value == 'cm'){
                            $value = $measurement*100000;
                        }
                        elseif($converted_value == 'm'){
                            $value = $measurement*1000;
                        }
                        elseif($converted_value == 'km'){
                            $value = $measurement;
                        }

                        break;
                }

				?>
				<div class='result'>
					<p><?php echo $value . " " . $converted_value; ?></p>
				</div>
				<?php
			}

        ?>
    </div>
    </div>
    </body>
</html>