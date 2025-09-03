<?php

namespace App\Filament\Professional\Resources\Professionals\Pages;

use App\Filament\Professional\Resources\Professionals\ProfessionalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfessionals extends ListRecords
{
    protected static string $resource = ProfessionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
