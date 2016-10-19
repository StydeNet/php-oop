<?php

class Person {

    public $id;

    public $name;

    public $online = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function is($otherPerson)
    {
        return $this->id == $otherPerson->id;
    }

}

$duilio = new Person('Duilio');
$duilio->id = 1;
$duilio->online = true;

$duilio2 = new Person('Duilio');
$duilio2->id = 2;

if ($duilio->is($duilio2)) {
    echo "Verdadero";
} else {
    echo "Falso";
}


