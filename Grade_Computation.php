<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Computation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="top-nav">
        <a href="index.php" class="nav-link"><span>Home</span></a>
    </nav>
    <div class="container">
        <div class="card">
<?php
// declare variables
$nameErr = $midErr = $finErr = "";
$name = $midGrade = $finGrade = $semGrd = $remarks = $fontColor = "";
$nameFlag = $midFlag = $finFlag = FALSE;

// declare function named testInput
function testInput($data) 
{
  $data = trim($data); // trim the text value
  $data = stripslashes($data); // removed slash
  $data = htmlspecialchars($data); // removed special characters like <,>,% and so on.
  return $data; // return the value of $data
}

// check if the method in form set as POST
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
// check if name textfield is empty
if (empty($_POST['txtName']))
{	
$nameErr = "Name is required.";
$nameFlag = FALSE;
}
else
{	
$name = testInput($_POST['txtName']);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z .]*$/",$name)) // same with this (!ctype_alpha($name))
{
$nameErr = "Only letters and white space allowed";
$nameFlag = FALSE;
}
}
		
if (!empty($name) && preg_match("/^[a-zA-Z .]*$/",$name))
$nameFlag = TRUE;

		
// check if midGrade textfield is empty
if (empty($_POST['txtMid']))
{	
$midErr = "Midterm grade is required.";
$midGradeFlag = FALSE;
}
else
{	
    $midGrade = testInput($_POST['txtMid']);
// check if midterm Grade only contains numberss
if (!is_numeric($midGrade))
{
$midErr = "Only numbers are allowed.";
$midGradeFlag = FALSE;
}
                          else
                             if (($midGrade < 50) || ($midGrade > 100))
  {
  $midErr = "Midterm Grade must be between 50 - 100 only.";
  $midGradeFlag = FALSE;
  }		
              }

              if (!empty($midGrade) && is_numeric($midGrade) && (($midGrade>=50) && ($midGrade <=100)))
                   $midGradeFlag = TRUE;

              // check if finGrade textfield is empty
              if (empty($_POST['txtFin']))
              {	
              $finErr = "Final grade is required.";
              $finGradeFlag = FALSE;
              }
              else
             {	
             $finGrade = testInput($_POST['txtFin']);
                  // check if final grade only contains numbers
if (!is_numeric($finGrade))
{
$finErr = "Only numbers are allowed.";
$finGradeFlag = FALSE;
}
else
if (($finGrade < 50) || ($finGrade > 100))
{
$finErr = "Final Grade must be between 50 - 100 only.";
$finGradeFlag = FALSE;
}
               }
if (!empty($finGrade) && is_numeric($finGrade) && (($finGrade>=50) && ($finGrade <=100)))
$finGradeFlag = TRUE;

//compute for the semGrade
if (($nameFlag == TRUE) && ($midGradeFlag == TRUE) && ($finGradeFlag == TRUE))
{
$semGrd = ($midGrade+$finGrade)/2;

//determine remarks
if ($semGrd>=74.5)
$remarks = "Passed";
else
$remarks = "Failed";
              }
  }	
?>

            <h1>Grade Computation</h1>
            <p class="subtitle">Student Grade Calculator with Validation</p>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form">
                <p class="required-note"><span class="error">*</span> required field.</p>
                <div class="form-group">
                    <label for="txtName">Student Name:</label>
                    <input type="text" id="txtName" name="txtName" class="input-field" value="<?php echo htmlspecialchars($name); ?>" placeholder="Enter student name">
                    <span class="error"><?php echo $nameErr;?></span>
                </div>
                <div class="form-group">
                    <label for="txtMid">Midterm Grade:</label>
                    <input type="text" id="txtMid" name="txtMid" class="input-field" value="<?php echo htmlspecialchars($midGrade); ?>" placeholder="50-100">
                    <span class="error"><?php echo $midErr;?></span>
                </div>
                <div class="form-group">
                    <label for="txtFin">Final Grade:</label>
                    <input type="text" id="txtFin" name="txtFin" class="input-field" value="<?php echo htmlspecialchars($finGrade); ?>" placeholder="50-100">
                    <span class="error"><?php echo $finErr;?></span>
                </div>
                <div class="form-actions">
                    <input type="submit" value="Compute" name="btnCompute" class="btn btn-primary">
                </div>
            </form>

            <?php
            if (isset($_POST['btnCompute']) && ($nameFlag == TRUE) && ($midGradeFlag == TRUE) && ($finGradeFlag == TRUE))
            {
            echo "<div class='grade-result'>";
            echo "<h2>📋 Grade Information</h2>";
            echo "<div class='output-section'>";
            echo "<div class='output-item'><span class='label'>Student Name:</span> <span class='value'>".htmlspecialchars($name)."</span></div>";
            echo "<div class='output-item'><span class='label'>Midterm Grade:</span> <span class='value'>".htmlspecialchars($midGrade)."</span></div>";
            echo "<div class='output-item'><span class='label'>Final Grade:</span> <span class='value'>".htmlspecialchars($finGrade)."</span></div>";
            echo "<div class='output-item highlight'><span class='label'>Semestral Grade:</span> <span class='value grade-value'>".round($semGrd,2)."</span></div>";
            
            if ($semGrd <= 74)
                $fontColor = "#FF0000";
            else
                $fontColor = "#00AA00";
            
            echo "<div class='output-item'><span class='label'>Remarks:</span> <span class='value' style='color: $fontColor; font-weight: bold; font-size: 1.2em;'>".$remarks."</span></div>";
            echo "</div>";
            echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
