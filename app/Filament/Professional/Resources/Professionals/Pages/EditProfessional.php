<?php

namespace App\Filament\Professional\Resources\Professionals\Pages;

use App\Filament\Professional\Resources\Professionals\ProfessionalResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfessional extends EditRecord
{
    protected static string $resource = ProfessionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
