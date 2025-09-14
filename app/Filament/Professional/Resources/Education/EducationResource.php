<?php

namespace App\Filament\Professional\Resources\Education;

use App\Filament\Professional\Resources\Education\Pages\CreateEducation;
use App\Filament\Professional\Resources\Education\Pages\EditEducation;
use App\Filament\Professional\Resources\Education\Pages\ListEducation;
use App\Filament\Professional\Resources\Education\Schemas\EducationForm;
use App\Filament\Professional\Resources\Education\Tables\EducationTable;
use App\Models\Education;
use BackedEnum;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;




    public static function form(Schema $schema): Schema
    {
        return EducationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EducationTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('professional_id', Auth::guard('professional')->user()->id);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEducation::route('/'),
            'create' => CreateEducation::route('/create'),
            'edit' => EditEducation::route('/{record}/edit'),
        ];
    }
}
