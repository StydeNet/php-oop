<?php

namespace Styde;

class Str
{
    public static function studly($value)
    {
        $result = ucfirst(str_replace('_', ' ', $value));

        return str_replace(' ', '', $result);
    }
}