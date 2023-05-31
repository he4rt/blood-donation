<?php

namespace App\Filament\Resources\Donor\StatusResource\Pages;

use App\Filament\Resources\Donor\StatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatuses extends ListRecords
{
    protected static string $resource = StatusResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
