<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php
    
    $BMI_VALUE = ($weight / ($height * $height)) * 703;

    if ($BMI_VALUE < 18) {
        $LABEL_VALUE = 'underweight';
    } else if ($BMI_VALUE > 30) {
        $LABEL_VALUE = 'obese';
    } else {
        $LABEL_VALUE = 'normal';
    }


?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is <?php echo $BMI_VALUE; ?>, which is considered <?php echo $LABEL_VALUE; ?>.</p>
</body>