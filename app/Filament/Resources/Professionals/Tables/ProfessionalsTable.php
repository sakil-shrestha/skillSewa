<?php

namespace App\Filament\Resources\Professionals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Facades\Filament;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

//for admin panel
class ProfessionalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Grid::make([
                //     'default' => 1,
                //     'sm' => 2,
                //     'md' => 3,
                //     'lg' => 4,
                // ])
                // ->schema([
                Stack::make([
                    ImageColumn::make('profile')
                        ->circular()
                        ->grow(false)
                        ->extraImgAttributes(['class' => 'h-32 w-32 object-cover rounded-lg']),
                    TextColumn::make('name')
                        ->searchable(),
                    TextColumn::make('email')
                        ->label('Email address')
                        ->searchable(),
                    TextColumn::make('contact')
                        ->searchable(),
                    TextColumn::make('address')
                        ->searchable(),
                    SelectColumn::make('status')
                        ->options([
                            'pending' => 'pending',
                            'approved' => 'approved',
                            'rejected' => 'rejected',
                        ]),

                    // TextColumn::make('dob')
                    //     ->date()
                    //     ->sortable(),
                    // TextColumn::make('created_at')
                    //     ->dateTime()
                    //     ->sortable()
                    //     ->toggleable(isToggledHiddenByDefault: true),
                    // TextColumn::make('updated_at')
                    //     ->dateTime()
                    //     ->sortable()
                    //     ->toggleable(isToggledHiddenByDefault: true),
                ])

                    ->space(2)
                    ->extraAttributes(['class' => 'bg-white p-4 rounded-lg shadow']),
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])

            // ])
            ->filters([
                //
            ])
            ->recordActions([
                // EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
