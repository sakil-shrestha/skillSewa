<?php

namespace App\Filament\Professional\Resources\JobInfos\Pages;

use App\Filament\Professional\Resources\JobInfos\JobInfoResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateJobInfo extends CreateRecord
{
    protected static string $resource = JobInfoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['professional_id'] = Auth::user()->id;
        // dd($data);
        return $data;
    }
}
