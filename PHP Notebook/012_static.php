<?php 

// You can use the instanceof keyword to check if an object belongs to a specific class
// var_dump($apple instanceof Fruit);

// Sem static precisa instanciar
class Champion1 {
    public $name = 'Zed';
}


$champion1 = new Champion1();

// echo $champion1->name . "\n";

// Com static

class Champion2 {
    public static $name = 'Ahri';
}

// echo Champion2::$name . "\n";

class Champion3 {
    private static $popularChampion;
    public $champion;
    public static function setDefaultChampion($champion) {
        self::$popularChampion = $champion;
        // $this se refere ao objeto (instância) atual, e self se refere à classe. Portanto, como regra geral, usa-se $this para acessar membros (atributos, métodos) da instância e self para acessar membros estáticos.
    }
    public function __construct() {
        $this->champion = self::$popularChampion; //The $this keyword refers to the current object, and is only available inside methods.
    }
}

Champion3::setDefaultChampion('Zed');

$champion3 = new Champion3();
echo $champion3->champion;