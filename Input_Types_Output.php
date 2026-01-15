<?php
//Script name: Input_Types_Output.php
?>

<html> 
	<head> 
		<title> Use of HTML Form Tags in PHP </title> 
	</head>
<body bgcolor="99ffff">
	<?php
	
	$name = $_POST['txtName'];
	$age =  $_POST['txtAge'];
	$course = $_POST['txtCourse'];
	$rdo = $_POST['rdo'];
	$job = $_POST['cboJob'];
	$comments = $_POST['txtComments'];

	echo "OUTPUT From: <b> TextField </b> <br>";
	echo "Hi " .$name. "<br>";
	echo "You are ".$age." years old. <br>";
	echo "Your course is " .$course. " <br><br>";

	echo "OUTPUT From: <b> Checkbox </b> <br>";
	if (isset($_POST['chkYes']))
		echo "Checkbox status: <b> ".$_POST['chkYes']."</b> <br><br>";
	
	echo "OUTPUT From: <b> Multiple CheckBoxes </b> <br>";
	echo "Your favorite computer subject/s is/are: <br>";
	if (isset($_POST['chkCP']))
		echo "&nbsp&nbsp&nbsp " .$_POST['chkCP']. "<br>";
	if (isset($_POST['chkCG']))
		echo "&nbsp&nbsp&nbsp " .$_POST['chkCG']. "<br>";
	if (isset($_POST['chkWBA']))
		echo "&nbsp&nbsp&nbsp " .$_POST['chkWBA']. "<br><br>";

	
	echo "<br> OUTPUT From: <b> Radio Button </b> <br>";
	if (isset($rdo))
		echo "You selected: " .$rdo. "<br><br>";
	
	echo "OUTPUT From: <b> ComboBox </b> <br>";
	echo "You prefered to be a: " .$job. " <br><br>";

	echo "OUTPUT From: <b> ListBox </b> <br>";
	echo "You prefered a thesis title like:<br>";
	if (isset($_POST['lstThesisTitle']))
		echo "&nbsp&nbsp&nbsp " .$_POST['lstThesisTitle']." <br><br>";
	else
		echo "NONE <br><br>";

	echo "OUTPUT From: <b> TextArea </b> <br>";
	echo $comments . " <br>";
?>
</body>
</html>
