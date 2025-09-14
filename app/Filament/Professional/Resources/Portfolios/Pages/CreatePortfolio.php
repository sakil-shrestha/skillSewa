<?php

namespace App\Filament\Professional\Resources\Portfolios\Pages;

use App\Filament\Professional\Resources\Portfolios\PortfolioResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreatePortfolio extends CreateRecord
{
    protected static string $resource = PortfolioResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['professional_id'] = Auth::user()->id;
        // dd($data);
        return $data;
    }
}
