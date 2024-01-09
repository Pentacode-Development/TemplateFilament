<?php

namespace App\Filament\Resources\Auth\UserResource\Pages;

use App\Filament\Resources\Auth\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
