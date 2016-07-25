<?php

namespace Styde;

require '../vendor/autoload.php';

$ramm = new Soldier('Ramm', new Weapons\BasicSword);

$ramm->setArmor(new Armors\BronzeArmor());

$silence = new Archer('Silence', new Weapons\CrossBow);

$silence->attack($ramm);

$silence->attack($ramm);

$ramm->attack($silence);
