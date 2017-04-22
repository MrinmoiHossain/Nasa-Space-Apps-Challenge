<?php
namespace Nasa\Utility;

class Url
{
    public static function redirect($url = '/'){
        header('location:'.$url);
    }
}