<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Input 1 - Data Entry</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="top-nav">
        <a href="index.php" class="nav-link"><span>Home</span></a>
    </nav>
    <div class="container">
        <div class="card">
            <?php 
                echo "<div class='alert'>WITHOUT VALIDATION</div>";
            ?>
            <h1>Data Entry Form</h1>
            <p class="subtitle">Sample Scripts without input validation</p>
            <form action="SampleOutput_1.php" method="post" class="form">
                <div class="form-group">
                    <label for="txtName">Enter your name:</label>
                    <input type="text" id="txtName" name="txtName" class="input-field" placeholder="Your full name">
                </div>
                <div class="form-group">
                    <label for="txtAge">Enter your age:</label>
                    <input type="text" id="txtAge" name="txtAge" class="input-field" placeholder="Your age">
                </div>
                <div class="form-group">
                    <label for="txtPhone">Enter your phone no.:</label>
                    <input type="text" id="txtPhone" name="txtPhone" class="input-field" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label for="txtBill">Enter your bill:</label>
                    <input type="text" id="txtBill" name="txtBill" class="input-field" placeholder="Bill amount">
                </div>
                <div class="form-actions">
                    <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">
                    <input type="reset" value="Reset" class="btn btn-secondary">
                </div>
            </form>
        </div>
    </div>
</body>
</html>				
