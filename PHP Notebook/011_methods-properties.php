<?php

class House {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }
}

// A constructor is not required, but can make creating a new object easier. They are usually used to define the initial value of a property. Instead of writing:

$house = new House();

$house->setColor('Red'); 

// We can write:

$house = new House('Black');

// Also, constructors do not return values because the return value is always a new object.

