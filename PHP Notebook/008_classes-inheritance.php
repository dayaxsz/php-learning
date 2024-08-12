<?php

// Inheritance

class Car {

    public $brand;

    public function drive(){
        echo "vroom";
    }
};

$Car = new Car(); 
class Pilot extends Car {
    public $name;
    public $age;
    public $country;

    public function drive(){
        echo "Vroom Vroom";
    }

    public function pedal(){
        $this->drive(); // output na drive do Pilot
        parent::drive(); // output na drive do Car
    }
}

$Pilot = new Pilot();

$Pilot->drive();        

$Pilot->pedal();
