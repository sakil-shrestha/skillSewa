<?php

namespace App\Filament\Professional\Resources\JobInfos\Pages;

use App\Filament\Professional\Resources\JobInfos\JobInfoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJobInfo extends EditRecord
{
    protected static string $resource = JobInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
