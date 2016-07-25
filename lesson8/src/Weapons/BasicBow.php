<?php

namespace Styde\Weapons;

use Styde\Weapon;
use Styde\Unit;

class BasicBow extends Bow
{
    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} dispara una flecha {$opponent->getName()}";
    }
}
