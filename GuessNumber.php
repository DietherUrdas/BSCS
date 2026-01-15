<html> 
	<head> 
		<title> Use of Decision Statements in PHP </title> 
	</head>
		<body bgcolor=cccc99>
			<h2> Guess the Number Result </h2>
				<?php
				//Script name: GuessNumber.php
				$guess = $_POST['guess'];
                $num = rand(1,10); //or you can set the value for the number, e.g. 
                // $num=5;
                
				if ($guess > $num) {
				   echo "Your guess is too high. <br> It's $num. ";
				   }
				if ($guess < $num) {
				   echo "Your guess is too low. <br> It's $num. ";
				   } 
				if ($guess == $num) {
				   echo "You're Right! <br> It's $num. ";
				   }
				?>
		</body>
</html>
