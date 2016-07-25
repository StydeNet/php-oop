<?php

namespace Styde;

require '../vendor/autoload.php';

$ramm = new Unit('Ramm', new Weapons\BasicSword);

$ramm->setArmor(new Armors\SilverArmor());

$silence = new Unit('Silence', new Weapons\FireBow);

$silence->attack($ramm);

$silence->attack($ramm);

$ramm->attack($silence);
