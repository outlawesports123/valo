<?php

namespace App\Filament\Resources\Heroes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                    Stack::make([
                        ImageColumn::make('portrait')
                            ->label('')
                            ->alignCenter()
                            ->extraAttributes([
                                'class'=> 'h-32 w-max !overflow-visible',
                            ])
                            ->extraImgAttributes([
                                "class"=> "object-scale-down !h-full",
                            ]),
                        TextColumn::make('name')
                            ->weight(FontWeight::Bold)
                            ->alignCenter()
                            ->extraAttributes([
                                'style'=> 'padding-top: 8px;',
                            ])
                            ->searchable(),

                    ]),

            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 4,
            ])
            ->paginated([
                8, 16, 24, 32, 'all'
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()
                ->label(''),
                EditAction::make()
                ->label(''),
                DeleteAction::make()
                ->label(''),
            ])
            ->recordActionsAlignment('center')
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
