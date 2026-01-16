<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number - Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="top-nav">
        <a href="index.php" class="nav-link"><span>Home</span></a>
        <a href="GuessNumber.html" class="nav-link"><span class="nav-icon">←</span><span>Back</span></a>
    </nav>
    <div class="container">
        <div class="card">
            <h1>Guess the Number Result</h1>
            <div class="game-result">
                <?php
                //Script name: GuessNumber.php
                $guess = $_POST['guess'];
                $num = rand(1,10); //or you can set the value for the number, e.g. 
                // $num=5;
                
                if ($guess > $num) {
                    echo "<div class='result-message wrong'><span class='icon'>📈</span><p>Your guess is too high.</p><p class='answer'>The number was: <strong>$num</strong></p></div>";
                }
                if ($guess < $num) {
                    echo "<div class='result-message wrong'><span class='icon'>📉</span><p>Your guess is too low.</p><p class='answer'>The number was: <strong>$num</strong></p></div>";
                } 
                if ($guess == $num) {
                    echo "<div class='result-message correct'><span class='icon'>🎉</span><p>You're Right!</p><p class='answer'>The number was: <strong>$num</strong></p></div>";
                }
                ?>
            </div>
            <a href="GuessNumber.html" class="btn btn-primary">Play Again</a>
        </div>
    </div>
</body>
</html>
