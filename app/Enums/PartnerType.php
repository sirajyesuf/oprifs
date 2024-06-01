<?php

namespace App\Enums;

enum PartnerType: string
{
    case DONORPARTNER = 'donor partner';
    case GOVERMENTDEVELOPMENTPARTNER = 'govt devt partner';


    // Method to return an associative array of keys and values
    public static function getKeyValueArray(): array
    {
        $keyValueArray = [];
        foreach (self::cases() as $case) {
            $keyValueArray[$case->value] = $case->name;
        }
        return $keyValueArray;
    }
    
}
