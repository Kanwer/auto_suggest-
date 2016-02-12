<?php


include "../config/AppConfig.php";
class ConnectionUtils
{
    private static $url;

    public static function getUrl()
    {
        AppConfig::initConfig();
        return self::$url= 'http://' .AppConfig::$connection["elastic"]["host"] . ':' .AppConfig::$connection["elastic"]["port"] . '/' . AppConfig::$connection["elastic"]["index"] . '/'.AppConfig::$connection["elastic"]["type"]."/_search";    }

}
