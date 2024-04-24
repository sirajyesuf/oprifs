<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\FunctionLike;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function getContactus(){

        return Setting::whereNotNull('phone_number')
        ->whereNotNull('email')
        ->whereNotNull('facebook')
        ->whereNotNull('youtube')
        ->whereNotNull('linkedin')
        ->whereNotNull('instagram')
        ->first();
    }

    public static function getLocation(){
        return Setting::whereNotNull('relative_location')
        ->whereNotNull('absolute_location')->first();
    }


    public static function canCreateAboutus(){

        return  Setting::whereNotNull('aboutus')
        ->whereNotNull('mission')
        ->whereNotNull('vission')
        ->exists();
    }

    public static function canCreateContactUs(){
        
        return  Setting::whereNotNull('phone_number')
        ->whereNotNull('email')
        ->whereNotNull('facebook')
        ->whereNotNull('youtube')
        ->whereNotNull('linkedin')
        ->whereNotNull('instagram')
        ->exists();
    }


    public static function canCreateLocation(){
        
        return  Setting::whereNotNull('relative_location')
        ->whereNotNull('absolute_location')
        ->exists();
    }
}

