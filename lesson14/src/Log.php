<?php

namespace Styde;

class Log
{
    protected static $logger;

    public static function setLogger(Logger $logger)
    {
        static::$logger = $logger;
    }

    public static function info($message)
    {
        static::$logger->info($message);
    }
}