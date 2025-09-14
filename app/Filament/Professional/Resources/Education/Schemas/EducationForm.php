<?php

namespace App\Filament\Professional\Resources\Education\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('faculty')
                    ->required(),
                // TextInput::make('professional_id')
                //     ->default(Auth::user()->id)
                //     ->readOnly()
                //     ->required(),
                // Hidden::make('professional_id')
                //     ->default(Auth::user()->professional->id),
                Select::make('level')
                    ->options(['primary' => 'Primary', 'secondary' => 'Secondary', 'higher' => 'Higher'])
                    ->required(),
                TextInput::make('years_of_experience')
                    ->required(),
                TagsInput::make('skills')
                    ->required(),
            ]);
    }
}
