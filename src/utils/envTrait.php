<?php

namespace Nadachi\WeatherMeet\utils;

trait envTrait
{
    public static function env()
    {
        $env = file_get_contents("./.env");
        $lines = explode("\n",$env);

        foreach($lines as $line){
            preg_match("/([^#]+)\=(.*)/",$line,$matches);
            if(isset($matches[2])){
                putenv(trim($line));
            }
        }
    }
}