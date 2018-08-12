<?php
    include "HousePlan.php";
    include "Car.php";
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Object Oriented Programming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    

    <!-- 
    procedural      ==      oop
                    ==      class
    function        ==      method
    -->

    <?php

    $alexHouse = new HousePlan();
    $marielHouse = new HousePlan();

    echo $alexHouse->noOfDoors;
    echo "<br>";
    echo $marielHouse->noOfDoors;
    echo "<br>";
    $alexHouse->noOfDoors = 40;
    echo "<br>";
    echo $alexHouse->noOfDoors;
    echo "<br>";
    echo $marielHouse->noOfDoors; //referencing a method
    echo "<br>";
    $alexHouse->closeTheDoor();
    echo "<br>";


    // referencing the car plan

    $Volvo = new Car(10000);
    echo "<br>";
    // $Volvo->stopCar();

    ?>

    


</body>
</html>