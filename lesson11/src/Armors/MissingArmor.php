<?php

namespace Styde\Armors;

use Styde\Armor;
use Styde\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}