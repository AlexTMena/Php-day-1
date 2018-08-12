<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<h1>Build-in functions</h1>

    <?php

    $str = "The quick brow fox jumps over the lazy dog <br>";
    $grade = 80.5;
    $price = 200;
    $isProggramer = true;

    echo strtoupper($str); //Change to all uppercase
    echo ucwords($str); //Change all first letter of string to uppercase
    echo str_word_count($str);
    echo str_replace("quick","fast",$str);
    echo substr($str,0,32);
    echo "<br>";
    echo round($grade);
    echo "<br>";
    echo date("l - F d, Y");
    echo "<br>";
    echo isset($isProggramer);

    ?>

    <h1>Custom functions</h1>

    <?php

    function myFunction() {
        echo "Hello Greet Function <br>";
    }

    myFunction();
    myFunction();
    myFunction();

    //function with arguments
    function playerFunction($name,$game) {
        echo "$name is a $game player<br>";
    }

    playerFunction("Bien","Chess");
    playerFunction("Jay","Football");
    
    //returning values

    function average($math, $science, $english){
        $average = ($math+$science+$english)/3;
        return $average;
    }

    $anaAve = average(90,98,94);

    echo $anaAve;
    
    echo "<br>";

    function totalSalary($numberOfHours,$hourlyRate){
        $totalSalary = $numberOfHours+$hourlyRate;
        return $totalSalary;
    }

    function totalDeduction($tax,$philHealth,$sss,$pagIbig){
        $totalDeduction = $tax+$philHealth+$sss+$pagIbig;
        return $totalDeduction;
    }

    
    
    echo "John's Total Salary: P";
    $totalSalary = totalSalary(40,100);
    echo $totalSalary;
    echo "<br>";
    echo "John's Total Deduction: P";
    $totalDeduction = totalDeduction(10,20,30,35);
    echo $totalDeduction;
    echo "<br>";
    echo "John's Total Net Income: P";
    echo $totalSalary - $totalDeduction;
    ?>


</body>
</html>