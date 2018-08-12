<?php

class HousePlan{

     var $noOfDoors = 2;
     var $noOfRooms = 3;
     var $wallColor = "cream";
     var $roofColor = "burgundy";

    function closeTheDoor(){
        echo "Door is closed";
    }

    function openLights() {
        echo "Let there be light.";
    }


}
// echo "<pre>";
// echo print_r(get_declared_classes());
// echo "</pre>";

?>