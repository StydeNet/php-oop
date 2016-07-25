<?php

namespace Styde;

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show(
            "{$this->name} dispara una flecha a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }
}
