<?php

namespace App\Filament\Resources\Auth\AdminResource\Pages;

use App\Filament\Resources\Auth\AdminResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;
}
