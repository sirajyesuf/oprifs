<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Pages\Auth\EditProfile;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;

class Profile extends  EditProfile
{
   
    public static function isSimple(): bool
    {
        return false;
    }

}
