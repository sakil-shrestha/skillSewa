<?php

namespace App\Filament\Professional\Resources\Portfolios;

use App\Filament\Professional\Resources\Portfolios\Pages\CreatePortfolio;
use App\Filament\Professional\Resources\Portfolios\Pages\EditPortfolio;
use App\Filament\Professional\Resources\Portfolios\Pages\ListPortfolios;
use App\Filament\Professional\Resources\Portfolios\Schemas\PortfolioForm;
use App\Filament\Professional\Resources\Portfolios\Tables\PortfoliosTable;
use App\Models\Portfolio;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('professional_id', Auth::guard('professional')->user()->id);
    }

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PortfolioForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortfoliosTable::configure($table);
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
            'index' => ListPortfolios::route('/'),
            'create' => CreatePortfolio::route('/create'),
            'edit' => EditPortfolio::route('/{record}/edit'),
        ];
    }
}
