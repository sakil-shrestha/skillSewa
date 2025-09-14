<?php

namespace App\Filament\Professional\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Select::make('professional_id')
                //     ->relationship('professional', 'name')
                //     ->required(),
                TextInput::make('link')
                    ->required(),
                FileUpload::make('resume')
                    ->required(),
            ]);
    }
}
