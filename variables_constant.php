<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Variables and Constants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php 
    $fullname   = "Victor Magtangol";   //string
    $age        = 24;                   //Numeric (Int)
    $mathGrade  = 90.1;                 //float
    $isMale     = true;                 //boolean

    echo "Welcome".$fullname;
    echo "<br>";
    echo "Ako si $fullname. I'm $age years old.";            //display in browser
    echo "<br>";
    echo "Ako si {$fullname}. I'm $age years old. <br>";

    //MATH OPERATION
    $num1 = 10;
    $num2 = 30;

    $total = $num1 + $num2;
    echo "The total is {$total} <br>";

    //CONSTANT (fixed Value and all caps)
    define("USERNAME","John");
    define("PASSWORD","j123");

    echo "Username: ".USERNAME;
    echo "<br>";
    echo "Password: ".PASSWORD;

?>


</body>
</html>