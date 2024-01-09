<?php

namespace App\Filament\Resources\Auth\AdminResource\Pages;

use App\Filament\Resources\Auth\AdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListAdmins extends ListRecords
{
    use Translatable;

    protected static string $resource = AdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make('Language'),
            Actions\CreateAction::make(),
        ];
    }
}
