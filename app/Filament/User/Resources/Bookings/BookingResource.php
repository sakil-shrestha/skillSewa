<?php

namespace App\Filament\User\Resources\Bookings;

use App\Filament\User\Resources\Bookings\Pages\CreateBooking;
use App\Filament\User\Resources\Bookings\Pages\EditBooking;
use App\Filament\User\Resources\Bookings\Pages\ListBookings;
use App\Filament\User\Resources\Bookings\Schemas\BookingForm;
use App\Filament\User\Resources\Bookings\Tables\BookingsTable;
use App\Models\Booking;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Bookmark;

    public static function form(Schema $schema): Schema
    {
        return BookingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BookingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBookings::route('/'),
            'create' => CreateBooking::route('/create'),
            'edit' => EditBooking::route('/{record}/edit'),
        ];
    }
}
