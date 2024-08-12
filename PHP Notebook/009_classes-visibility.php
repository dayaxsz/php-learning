<?php

class Phone {
    private $number;

    public function setNumber($number) {
        $this->number = $number; 
    }

    public function getNumber($number) {
        return $this->number;
    }
}

$phone = new Phone();
$phone->setNumber('(11) 98205-6141');

class Phone2 {
    private $number;

    // validates the number won't start at 7.
    public function setNumber($number){
        if(substr($number, 0 ,1) !== '7'){ // substr(string,start,length)
            $this->number = $number;
        }
    }
}

// The protected and private keywords work a little differently. They both prevent functions and properties from being accessed outside an object. However, a method or property marked protected can still be accessed by a child class.
class Phone3 {
    private $number;
    protected $caller;
    
    public function setNumber($number) {
        $this->number = $number;
    }

}

// In class Smartphone, the caller property is accessible because the parent class has it marked as protected. However, Smartphone cannot access the number property because it is still listed as private.

class Smartphone extends Phone3 {

    public function setCaller($caller){
        $this->caller = $caller;
    }

}


