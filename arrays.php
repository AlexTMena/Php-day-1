<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Arrays</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <h1>Index Array</h1>
    <?php
    $friend[0] = "Jade";
    $friend[1] = "Allan";
    $friend[2] = "McDonalds";

    echo $friend[2]; //will dsiplay variable
    echo $friend[2][1]; //will display variable and the second will display the 2nd character of the variable choosen
    
    echo "<br>";

    $pets = array("wawa","chokie","tenten");
    echo $pets[0];
    echo "br>";
    echo "<pre>";
    print_r($pets);
    echo "</pre>";
    echo "<br>";

    echo "<pre>";
    var_dump($pets);
    echo "</pre>";

    echo "<br>";
    ?>

    <h1>ASSOCIATIVE ARRAY (Key => Value)</h1>
    <?php

    $infos = array(
                "name"=>"Alex",
                "position"=>"Standing",
                "address"=>"Bulacan");
    echo $infos['position'];

    echo "<pre>";
    var_dump($infos);
    echo "</pre>";
    ?>

    <h1>Multi Array</h1>

    <?php
    $drinks = array(
                "sprite",
                array(
                    "coke",
                    "coke zero"
                    ),
                "royal"
            );

    echo $drinks[0];    
    echo $drinks[1][1];

    echo "<pre>";
    var_dump($drinks);
    echo "</pre>";

    ?>


</body>
</html>