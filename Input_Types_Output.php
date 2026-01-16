<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Output - Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="top-nav">
        <a href="index.php" class="nav-link"><span>Home</span></a>
        <a href="Input_Types.html" class="nav-link"><span>Back</span></a>
    </nav>
    <div class="container">
        <div class="card">
            <h1>📤 Form Results</h1>
            <p class="subtitle">Use of HTML Form Tags in PHP</p>
            <div class="output-section">
                <?php
                $name = $_POST['txtName'];
                $age =  $_POST['txtAge'];
                $course = $_POST['txtCourse'];
                $rdo = $_POST['rdo'];
                $job = $_POST['cboJob'];
                $comments = $_POST['txtaComments'];

                echo "<div class='output-group'>";
                echo "<h3>📝 TextField Output</h3>";
                echo "<div class='output-item'><span class='label'>Greeting:</span> <span class='value'>Hi " . htmlspecialchars($name) . "</span></div>";
                echo "<div class='output-item'><span class='label'>Age:</span> <span class='value'>You are " . htmlspecialchars($age) . " years old.</span></div>";
                echo "<div class='output-item'><span class='label'>Course:</span> <span class='value'>Your course is " . htmlspecialchars($course) . "</span></div>";
                echo "</div>";

                echo "<div class='output-group'>";
                echo "<h3>☑️ Checkbox Output</h3>";
                if (isset($_POST['chkYes']))
                    echo "<div class='output-item'><span class='label'>COMSOC Officer:</span> <span class='value'>" . htmlspecialchars($_POST['chkYes']) . "</span></div>";
                else
                    echo "<div class='output-item'><span class='label'>COMSOC Officer:</span> <span class='value'>Not selected</span></div>";
                echo "</div>";

                echo "<div class='output-group'>";
                echo "<h3>☑️ Multiple Checkboxes Output</h3>";
                echo "<p>Your favorite computer subject/s is/are:</p>";
                $subjects = [];
                if (isset($_POST['chkCP'])) $subjects[] = htmlspecialchars($_POST['chkCP']);
                if (isset($_POST['chkCG'])) $subjects[] = htmlspecialchars($_POST['chkCG']);
                if (isset($_POST['chkWBA'])) $subjects[] = htmlspecialchars($_POST['chkWBA']);
                
                if (count($subjects) > 0) {
                    foreach ($subjects as $subject) {
                        echo "<div class='output-item'><span class='value'>• $subject</span></div>";
                    }
                } else {
                    echo "<div class='output-item'><span class='value'>None selected</span></div>";
                }
                echo "</div>";

                echo "<div class='output-group'>";
                echo "<h3>🔘 Radio Button Output</h3>";
                if (isset($rdo))
                    echo "<div class='output-item'><span class='label'>Preference:</span> <span class='value'>" . htmlspecialchars($rdo) . "</span></div>";
                echo "</div>";

                echo "<div class='output-group'>";
                echo "<h3>📋 ComboBox Output</h3>";
                echo "<div class='output-item'><span class='label'>Preferred Job:</span> <span class='value'>" . htmlspecialchars($job) . "</span></div>";
                echo "</div>";

                echo "<div class='output-group'>";
                echo "<h3>📋 ListBox Output</h3>";
                echo "<p>You prefered a thesis title like:</p>";
                if (isset($_POST['lstThesisTitle'])) {
                    if (is_array($_POST['lstThesisTitle'])) {
                        foreach ($_POST['lstThesisTitle'] as $title) {
                            echo "<div class='output-item'><span class='value'>• " . htmlspecialchars($title) . "</span></div>";
                        }
                    } else {
                        echo "<div class='output-item'><span class='value'>• " . htmlspecialchars($_POST['lstThesisTitle']) . "</span></div>";
                    }
                } else {
                    echo "<div class='output-item'><span class='value'>NONE</span></div>";
                }
                echo "</div>";

                echo "<div class='output-group'>";
                echo "<h3>📄 TextArea Output</h3>";
                echo "<div class='output-item'><span class='value'>" . nl2br(htmlspecialchars($comments)) . "</span></div>";
                echo "</div>";
                ?>
            </div>
            <a href="Input_Types.html" class="btn btn-primary">Submit Another</a>
        </div>
    </div>
</body>
</html>
