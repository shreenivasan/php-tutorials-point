<?php

namespace App;
class App
{
	
    public static $_registry = []; // used to create global variable / objects
    private static $_app;
    private static $_loader;
    
    public static function register($key, $value, $graceful = false){
        if (isset(self::$_registry[$key])) {
                if ($graceful) {
                        return null;
                }
                throw new \Exception('Registery key "'.$key.'" already exists.');
        }
        self::$_registry[$key] = $value;
    }
    
    public static function run($config = null)
    {
        self::register('db', $config['db'], false);
    }
}
