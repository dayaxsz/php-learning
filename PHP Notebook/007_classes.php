<?php

class Car {

    public $brand;

    public function drive(){
        echo "vroom";
    }
};

$Car = new Car(); // instancia a classe
// An instance of a class is called an object.

$Car->brand = 'Ferrari';

echo $Car->brand . "\n"; //output: Ferrari

$Car->brand = 'Redbull';

echo $Car->brand . "\n"; //output: Redbull

$Car->drive();


