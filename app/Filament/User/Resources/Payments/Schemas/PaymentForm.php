<?php

namespace App\Filament\User\Resources\Payments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('professional_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('booking_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('transaction_id')
                    ->default(null),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->required()
                    ->default('success'),
            ]);
    }
}
