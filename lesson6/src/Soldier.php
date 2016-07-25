<?php

namespace Styde;

use Warcraft\Armor;

class Soldier extends Unit
{
    protected $damage = 40;
    protected $armor;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function attack(Unit $opponent)
    {
        show(
            "{$this->name} ataca con la espada a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
