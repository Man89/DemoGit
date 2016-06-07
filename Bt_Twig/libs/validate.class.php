<?php

class Validate{
    public static function isNumber($str){
        return preg_match('/^[0-9]+$/',$str);
    }

    public static function isPhone($str){
        return preg_match('/^[0-9]{9-11}$/',$str);
    }

    public static function isPwd($str){
        return preg_match('/^[a-zA-Z0-9\@\#\.\- ]{6,15}$/',$str);
    }
    public static function isEmail($str){
        return preg_match('/^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/',$str);
    }

}