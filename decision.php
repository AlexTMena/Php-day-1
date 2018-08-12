<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDP Decision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <!-- Control Structures
    1. Sequence
    2. Selection/Decision
        2.1. Ternary
    3. Iteration/Repetition (Loops)
        3.1. For
        3.2. While
        3.3. Do While
        3.4. Foreach-->

    <h1>Ternary (?)</h1>
    
    <?php 
    
        $age = 38;
        //echo condition? "condition is true action":"condition is false action";
        echo $age > 18? "You are not minor.":"Parental Guidance";

    ?>

    <h1>If Statement</h1>
    <?php
    
    $yearsInService = 10;
    if ($yearsInService >= 5 ){
        echo "5000 bonus";
    } else {
        echo "3000 bonus";
    }

    echo "<br>";

    $fruit = "apple";
    if ($fruit == "apple") {
            echo "Red color";
        } else if($fruit == "banana"){
            echo "Yellow color";
        } else if ($fruit == "guava"){
            echo "Green color";
    }else{
        echo "Fruit not found.";
    }
    

    echo "<br>";
    //Nestedr If statement

    $office = "hr";
    $position = "director";

    if ($office == "hr") {
        if ($position == 'director') {
            echo "10,000 Bonus <br>";
        } else {
            echo "5,000 Bonus <br>";
        }
    } else {
        if ($position == 'director') {
            echo "8,000 Bonus <br>";
        } else {
            echo "2,000 Bonus <br>";
        }
    }
    
    //Logical Operators && AND, || OR
    if ($office  == "hr" and $position == "director") {
        echo "10,000 Bonus For Director of HR office <br>";
    } elseif($office == "hr" and $position !== "director") {
        echo "5,000 Bonus for Working in Hr Office <br>";
    } elseif($office !== "hr" and $position == "director") {
        echo "8,000 Bonus for Director <br>";
    } else {
        echo "2,000 Bonus for an employee<br>";
    }
    
    ?>

    <!-- Switch Case -->
    <h1>Switch Case </h1>

    <?php

    $soda = "coke";

    switch ($soda) {
        case 'coke':
        echo "I love coke";
        break;
            
        case 'royal':
        echo "I love royal";
        break;
        
        case 'sprite':
        echo "I love sprite";
        break;

        default:
        echo "you're not a softdrinker";
    }
    
    ?>
    

</body>
</html>