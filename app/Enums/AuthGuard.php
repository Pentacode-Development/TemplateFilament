<?php

namespace App\Enums;

use ReflectionClass;

class AuthGuard
{
    public const WEB = 'web';
    public const ADMIN = 'admin';

    public static function all() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
    
    public static function get() {
        return [
            self::WEB => 'Web',
            self::ADMIN => 'Admin',
        ];
    }
    
    public static function colors() {
        // danger, gray, info, primary, success or warning
        return [
            self::WEB => 'primary', 
            self::ADMIN => 'warning', 
        ];
    }
}