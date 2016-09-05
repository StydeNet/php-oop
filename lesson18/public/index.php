<?php

use Styde\HtmlNode;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Styde')
    ->name('content')
    ->id('contenido');

var_dump($node('name'), $node('width', 100));