<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Output 2 - Validation Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="top-nav">
        <a href="index.php" class="nav-link"><span>Home</span></a>
        <a href="SampleInput_2.php" class="nav-link"><span>Back</span></a>
    </nav>
    <div class="container">
        <div class="card">
            <h1>✅ Output With Input Validation</h1>
            <div class="output-section">
                <?php
                //if(ctype_alpha(str_replace(" ", "",$_POST['txtName']))) //Letters A-Z,a-z and white spaces are accepted
                    //$name = $_POST['txtName'];
                    
                if(ctype_alpha($_POST['txtName'])) //Letters A-Z and a-z are accepted
                    $name = $_POST['txtName'];
                elseif (!ctype_alpha($_POST['txtName']))
                    $name = "type letters a-z only";

                if(ctype_digit($_POST['txtAge'])) // Only integers or whole number is accepted
                    $age = $_POST['txtAge'];
                elseif(!ctype_digit($_POST['txtAge']))
                    $age = "type numbers 0-9 only";
                    
                if(empty($_POST['txtPhone'])) // Will test if the textbox is empty value
                    $phone = "phone number is empty";	
                elseif(is_string($_POST['txtPhone'])) // Will accept string values (any characters) 
                    $phone = $_POST['txtPhone'];
                        
                if(is_numeric($_POST['txtBill'])) // Only numbers are accepted (integer/floating point)
                    $bill = $_POST['txtBill'];
                elseif(!is_numeric($_POST['txtBill']))
                    $bill = "letters and special characters are not allowed";
                
                $nameClass = (ctype_alpha($_POST['txtName'])) ? 'valid' : 'invalid';
                $ageClass = (ctype_digit($_POST['txtAge'])) ? 'valid' : 'invalid';
                $phoneClass = (!empty($_POST['txtPhone'])) ? 'valid' : 'invalid';
                $billClass = (is_numeric($_POST['txtBill'])) ? 'valid' : 'invalid';
                
                echo "<div class='output-item $nameClass'><span class='label'>Name:</span> <span class='value'>$name</span></div>";
                echo "<div class='output-item $ageClass'><span class='label'>Age:</span> <span class='value'>$age</span></div>";
                echo "<div class='output-item $phoneClass'><span class='label'>Phone:</span> <span class='value'>$phone</span></div>";
                echo "<div class='output-item $billClass'><span class='label'>Bill:</span> <span class='value'> ₱$bill</span></div>";
                ?>
            </div>
            <a href="SampleInput_2.php" class="btn btn-primary">Submit Another</a>
        </div>
    </div>
</body>
</html>
