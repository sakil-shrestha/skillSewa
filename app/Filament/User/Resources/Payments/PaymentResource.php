<?php

namespace App\Filament\User\Resources\Payments;

use App\Filament\User\Resources\Payments\Pages\CreatePayment;
use App\Filament\User\Resources\Payments\Pages\EditPayment;
use App\Filament\User\Resources\Payments\Pages\ListPayments;
use App\Filament\User\Resources\Payments\Schemas\PaymentForm;
use App\Filament\User\Resources\Payments\Tables\PaymentsTable;
use App\Models\Payment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;
    protected static string| UnitEnum | null $navigationGroup = 'Main';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CreditCard;

    public static function form(Schema $schema): Schema
    {
        return PaymentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PaymentsTable::configure($table);
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::user()->id);
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
            'index' => ListPayments::route('/'),
            'create' => CreatePayment::route('/create'),
            'edit' => EditPayment::route('/{record}/edit'),
        ];
    }
}
