<?php

namespace Styde\Armors;

use Styde\Armor;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}
