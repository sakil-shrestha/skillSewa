<?php

namespace App\Filament\Professional\Resources\Professionals;

use App\Filament\Professional\Resources\Professionals\Pages\CreateProfessional;
use App\Filament\Professional\Resources\Professionals\Pages\EditProfessional;
use App\Filament\Professional\Resources\Professionals\Pages\ListProfessionals;
use App\Filament\Professional\Resources\Professionals\Schemas\ProfessionalForm;
use App\Filament\Professional\Resources\Professionals\Tables\ProfessionalsTable;
use App\Models\Professional;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

//for professional panel
class ProfessionalResource extends Resource
{
    protected static ?string $model = Professional::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?string $modelLabel = "Info";
    protected static ?string $pluralModelLabel = 'Info';

    // euta professional ko data haru arko professional ma show huna na dina ko lagi yo function use gareko
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('id', Auth::guard('professional')->user()->id);
    }

    public static function form(Schema $schema): Schema
    {
        return ProfessionalForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfessionalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }



    // public static function canCreate(): bool
    // {
    //     return false;
    // }

    public static function getPages(): array
    {
        return [
            'index' => ListProfessionals::route('/'),
            'create' => CreateProfessional::route('/create'),
            'edit' => EditProfessional::route('/{record}/edit'),
        ];
    }
}
