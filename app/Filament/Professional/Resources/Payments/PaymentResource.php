<?php

namespace App\Filament\Professional\Resources\Payments;

use App\Filament\Professional\Resources\Payments\Pages\CreatePayment;
use App\Filament\Professional\Resources\Payments\Pages\EditPayment;
use App\Filament\Professional\Resources\Payments\Pages\ListPayments;
use App\Filament\Professional\Resources\Payments\Schemas\PaymentForm;
use App\Filament\Professional\Resources\Payments\Tables\PaymentsTable;
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

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CreditCard;
    protected static string| UnitEnum | null $navigationGroup = 'Setting';

    public static function form(Schema $schema): Schema
    {
        return PaymentForm::configure($schema);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('professional_id', Auth::guard('professional')->user()->id);
    }

    public static function table(Table $table): Table
    {
        return PaymentsTable::configure($table);
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
