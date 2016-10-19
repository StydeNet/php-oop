<?php

namespace Laravel;

trait Macroable
{
    private static $macros = [];

    public static function hasMacro($method)
    {
        return isset (static::$macros[$method]);
    }

    public static function macro($method, \Closure $macro)
    {
        static::$macros[$method] = $macro;
    }

    public function __call($method, array $arguments)
    {
        if (static::hasMacro($method)) {
            return call_user_func_array(
                static::$macros[$method]->bindTo($this, static::class),
                $arguments
                );
        }

        throw new \BadMethodCallException("The method {$method} does no exist");
    }
}