<?php

namespace App\Filament\Resources\Tournaments\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TournamentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Tournament Details")
                    ->schema([
                        FileUpload::make('logo')
                            ->hiddenLabel()
                            ->directory('public')
                            ->image()
                            ->moveFiles()
                            ->avatar()
                            ->alignCenter()
                            ->required(),
                        TextInput::make('name')
                            ->label('Tournament Name')
                            ->required(),
                        Section::make('Colors')
                            ->schema([
                                ColorPicker::make('primary_color'),
                                ColorPicker::make('secondary_color'),
                                ColorPicker::make('acent_color'),
                            ])->columns(3)
                    ])
            ]);
    }
}
