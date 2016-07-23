<?php

class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Duilio', 'Palacios');

$person2 = new Person('Ramon', 'Lapenta');

//

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";
