<?php

namespace Styde;

use Warcraft\Armor as WarcraftArmor;

class BronzeArmor implements WarcraftArmor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}
