<?php

require "../vendor/autoload.php";
require "../vendor/laravel/Macroable.php";
require "../vendor/laravel/HtmlBuilder.php";

use Laravel\HtmlBuilder;

HtmlBuilder::macro('success', function ($message) {
    return "<p style=\"background-color: #dff0d8; border-color: #d0e9c6; color: #3c763d; padding: 10px\">{$message}</p>" . $this->hr();
});

$html = new HtmlBuilder();

echo $html->success('Todo salió bien!');