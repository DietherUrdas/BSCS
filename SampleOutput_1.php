<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Output 1 - Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="top-nav">
        <a href="index.php" class="nav-link"><span>Home</span></a>
        <a href="SampleInput_1.php" class="nav-link"><span>Back</span></a>
    </nav>
    <div class="container">
        <div class="card">
            <h1>📤 Output Without Validation</h1>
            <div class="output-section">
                <?php
                echo "<div class='output-item'><span class='label'>Name:</span> <span class='value'>" . htmlspecialchars($_POST['txtName']) . "</span></div>";
                echo "<div class='output-item'><span class='label'>Age:</span> <span class='value'>" . htmlspecialchars($_POST['txtAge']) . "</span></div>";
                echo "<div class='output-item'><span class='label'>Phone:</span> <span class='value'>" . htmlspecialchars($_POST['txtPhone']) . "</span></div>";
                echo "<div class='output-item'><span class='label'>Bill:</span> <span class='value'> ₱" . htmlspecialchars($_POST['txtBill']) . "</span></div>";
                ?>
            </div>
            <a href="SampleInput_1.php" class="btn btn-primary">Submit Another</a>
        </div>
    </div>
</body>
</html>	