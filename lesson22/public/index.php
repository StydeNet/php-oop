<?php

require '../vendor/autoload.php';

use Styde\User;
use Styde\Food;
use Styde\LunchBox;

$gordon = new User(['name' => 'Gordon']);

// Daughter
$joanie = new User(['name' => 'Joanie']);

$lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Manzana']),
    new Food(['name' => 'Agua', 'beverage' => true]),
]);

// House
$joanie->setLunch($lunchBox);

// School
$joanie->eatMeal();


