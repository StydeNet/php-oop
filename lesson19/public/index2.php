<?php

require '../vendor/autoload.php';

$data = file_get_contents('../storage/user.txt');

$user = unserialize($data);

var_dump($user);