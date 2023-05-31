<?php

namespace App\Filament\Resources\Donor\DonorResource\Pages;

use App\Filament\Resources\Donor\DonorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDonor extends EditRecord
{
    protected static string $resource = DonorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
