<?php

namespace App\Filament\Resources\Donor\DonorResource\Pages;

use App\Filament\Resources\Donor\DonorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDonors extends ListRecords
{
    protected static string $resource = DonorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
