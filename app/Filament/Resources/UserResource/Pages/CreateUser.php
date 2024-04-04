<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\UserRegistered;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $temporaryPassword = Str::random(6);

        $user  =  static::getModel()::create(array_merge($data,[
            'password' => Hash::make($temporaryPassword)
        ]));

        Mail::to($user->email)->send(new UserRegistered($user,$temporaryPassword));

        return $user;

    }
}
