<?php

namespace Curso;

class Log 
{
    protected static $logger;

    public static function SetLogger(Logger $logger)
    {
        static::$logger = $logger; 
    }

    public static function Info($message)
    {
        static::$logger->Info($message);
    }
}
