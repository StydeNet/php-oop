<?php

require '../vendor/autoload.php';

use Styde\User;

$user = new User(['name' => 'Duilio', 'email' => 'admin@styde.net']);

$user->id = 10;

echo $result = serialize($user);

file_put_contents('../storage/user.txt', $result);