<?php


class validate{
    // Email

    public static $email_pattern ="/^[a-zA-Z][a-zA-Z0-9_\.\u]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/";
    public static function isEmail($input){
        return preg_match(self::$email_pattern,$input);
    }

    // User

    public static $user_pattern= "/^[A-Za-z0-9_\u][a-z0-9_\.\s]{4,31}$/";
    public static function isUser($input){
        return preg_match(self::$user_pattern,$input);
    }

    //pass
    public static $pass_pattern = "/^[\w\.\_0-9\u]{6,12}$/"; // fai bao gom . or _ ky tu or so
    public static function isPass($input){
        return preg_match(self::$pass_pattern,$input);
    }

    // Phone
    public static $phone_pattern = "/^[\d]{10,13}/"; // chi la so
    public static function isPhone($input){
        return preg_match(self::$phone_pattern,$input);
    }

    // Username Unicode

    public static $username_pattern = "/'/^[\w\s]{6,20}$/u'/"; // Full Name
    public static function isUserName($input){
        return preg_match(self::$username_pattern,$input);
    }


}

