<?php

namespace App\Filament\Professional\Resources\Bookings\Pages;

use App\Filament\Professional\Resources\Bookings\BookingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBooking extends CreateRecord
{
    protected static string $resource = BookingResource::class;
}
