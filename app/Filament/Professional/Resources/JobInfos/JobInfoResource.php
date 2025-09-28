<?php

namespace App\Filament\Professional\Resources\JobInfos;

use App\Filament\Professional\Resources\JobInfos\Pages\CreateJobInfo;
use App\Filament\Professional\Resources\JobInfos\Pages\EditJobInfo;
use App\Filament\Professional\Resources\JobInfos\Pages\ListJobInfos;
use App\Filament\Professional\Resources\JobInfos\Schemas\JobInfoForm;
use App\Filament\Professional\Resources\JobInfos\Tables\JobInfosTable;
use App\Models\JobInfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class JobInfoResource extends Resource
{
    protected static ?string $model = JobInfo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Briefcase;
    protected static string | UnitEnum | null $navigationGroup = 'Settings';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('professional_id', Auth::guard('professional')->user()->id);
    }

    public static function form(Schema $schema): Schema
    {
        return JobInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JobInfosTable::configure($table);
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
            'index' => ListJobInfos::route('/'),
            'create' => CreateJobInfo::route('/create'),
            'edit' => EditJobInfo::route('/{record}/edit'),
        ];
    }
}
