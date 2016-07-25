<?php

namespace Styde;

abstract class Unit
{
    protected $hp = 40;
    protected $name;
    protected $weapon;
    protected $armor;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }

    public function attack(Unit $opponent)
    {
        show($this->weapon->getDescription($this, $opponent));

        $opponent->takeDamage($this->weapon->getDamage());
    }

    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        show("{$this->name} muere");

        exit();
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
