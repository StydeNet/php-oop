<?php

namespace Styde;

class Str
{
    public static function studly($value)
    {
        $result = ucwords(str_replace('_', ' ', $value));

        return str_replace(' ', '', $result);
    }

    public static function snake($value)
    {
        $result = preg_replace("@([A-Z])@", "_$1", $value);
        return strtolower(trim($result, '_'));
    }
}