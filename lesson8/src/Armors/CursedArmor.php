<?php

namespace Styde\Armors;

use Styde\Armor;

class CursedArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}
