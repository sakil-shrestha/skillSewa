<?php

namespace App\Filament\Resources\Professionals\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProfessionalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->readOnly()
                    ->required(),
                // TextInput::make('password')
                //     ->password()
                //     ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->readOnly()
                    ->email()
                    ->required(),
                TextInput::make('contact')
                    ->default(null),
                TextInput::make('address')
                    ->default(null),
                FileUpload::make('profile')
                    ->default(null),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'])
                    ->default('pending')
                    ->required(),
                DatePicker::make('dob')
                    ->readOnly(),
            ]);
    }
}
