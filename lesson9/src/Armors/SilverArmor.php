<?php

namespace Styde\Armors;

use Styde\Armor;
use Styde\Attack;

class SilverArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        if ($attack->isPhysical()) {
            return $attack->getDamage() / 3;
        }

        return $attack->getDamage();
    }
}
