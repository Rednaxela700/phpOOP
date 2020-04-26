<?php

class User{
    public $username;
    public $password;
    private static $passwordLength = 5; //static is used as value that won't be changed

    public static function getPasswordLength() {
        return self::$passwordLength;
    }
}

echo User::getPasswordLength();