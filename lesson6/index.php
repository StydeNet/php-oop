<?php

namespace Styde;

require 'src/helpers.php';
require 'vendor/Armor.php';

spl_autoload_register(function ($className) {
    show("Intentando cargar $className");

    if (strpos($className, 'Styde\\') === 0) {
        $className = str_replace('Styde\\', '', $className);

        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});

$armor = new BronzeArmor();

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');
//$silence->move('el norte');
$silence->attack($ramm);

$ramm->setArmor(new CursedArmor);

$silence->attack($ramm);

$ramm->attack($silence);
