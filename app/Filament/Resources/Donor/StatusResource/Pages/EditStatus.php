<?php

namespace App\Filament\Resources\Donor\StatusResource\Pages;

use App\Filament\Resources\Donor\StatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatus extends EditRecord
{
    protected static string $resource = StatusResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
