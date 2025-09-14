<?php

namespace App\Filament\Professional\Resources\Education\Pages;

use App\Filament\Professional\Resources\Education\EducationResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateEducation extends CreateRecord
{
    protected static string $resource = EducationResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {


        $data['professional_id'] = Auth::guard('professional')->user()->id;
        // dd($data);
        return $data;
    }
}
