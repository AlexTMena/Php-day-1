<?php

class Car{
    private $noOfWheels = 4;

    function __construct($speedx){
        echo "construct is running <br>";
        $this->stopCar();
        $this->move($speedx);
    }

    private function move($speed=0) {
        echo "The car is {$speed} moving. <br>";
    }

    private function stopCar(){
        echo "The car is not moving. <br>";
    }
}

?>