<?php

namespace App\Filament\User\Resources\Payments\Pages;

use App\Filament\User\Resources\Payments\PaymentResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;
}
