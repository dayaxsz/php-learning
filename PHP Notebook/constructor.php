<?php 

Class Constructor {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
}

/*
A constructor is not required, but can make creating a new object easier. They are usually used to define the initial value of a property. Constructor saves us from calling the set_name() method which reduces the amount of codeInstead of writing:

$hat = new Hat();
$hat->setColor('Red');
*/

$Constructor = new Constructor('Zed', '22');

echo $Constructor->getName() . "\n";
echo $Constructor->getAge() . "\n";


