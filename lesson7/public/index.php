<?php

namespace Styde;

require '../vendor/autoload.php';

$armor = new Armors\BronzeArmor();

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');
//$silence->move('el norte');
$silence->attack($ramm);

$ramm->setArmor(new Armors\CursedArmor);

$silence->attack($ramm);

$ramm->attack($silence);
