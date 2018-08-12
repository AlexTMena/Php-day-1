<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Loops</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <!-- Control Structures
    1. Sequence
    2. Selection/Decision
    3. Iteration/Repetition (Loops)
        3.1. For
        3.2. While
        3.3. Do While
        3.4. Foreach-->

    <h1>FOR LOOP</h1>
    <?php
    
    for($a = 1; $a <= 10; $a++):
        echo "For Loop no {$a} <br>";
    endfor;

    ?>

    <h1>While Loop</h1>
    <?php
    $b=1;
    while($b<=10):
        echo "While loop no {$b} <br>";
        $b++;
    endwhile;
    ?>

    <h1>Do While</h1>
    <?php
    $c=1;
    do{
        echo "Do While Loop no {$c} <br>";
        $c++;
    }while($c<=10);
    ?>


    <h1>FORECH Loop</h1>
    <?php

    $months = array("jan","feb","Mar");

    foreach ($months as $key => $value) {
        echo "$value <br>";
    }

    ?> 

    <select>
        <?php for($y = 1950; $y<=date('Y'); $y++){ ?>
            <option value="">
                <?php echo $y; ?>
            </option>
        <?php } ?>
    </select>

</body>
</html>