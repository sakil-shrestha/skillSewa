<?php

namespace App\Filament\Professional\Resources\JobInfos\Pages;

use App\Filament\Professional\Resources\JobInfos\JobInfoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJobInfos extends ListRecords
{
    protected static string $resource = JobInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
