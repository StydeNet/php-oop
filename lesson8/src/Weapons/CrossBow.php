<?php

namespace Styde\Weapons;

use Styde\Weapon;
use Styde\Unit;

class CrossBow extends Bow
{
    protected $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} dispara una flecha {$opponent->getName()}";
    }
}
