<?php
//Sample Scripts
//Script name: SampleOutput_2.php
//Output from SampleInput_2.php
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
	
	echo "OUTPUT WITH INPUT VALIDATION<br><br>";
	echo "<b>Name:</b> $name <br>";
	echo "<b>Age:</b> $age <br>";
	echo "<b>Phone:</b> $phone <br>";
	echo "<b>Bill:</b> $bill <br>";	
?>
