<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;

enum Role:string  implements HasLabel
{
    case ADMIN = 'ADMIN';
    case EDITOR = 'EDITOR';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ADMIN => 'ADMIN',
            self::EDITOR => 'EDITOR',
        };        
    }

}
