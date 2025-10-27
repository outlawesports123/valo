<?php

namespace App\Filament\Resources\Players\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlayerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('portrait')
                    ->disk('public')
                    ->directory('player')
                    ->image()
                    ->moveFiles(),
                Section::make("Basic Details")
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('gender'),
                        TextInput::make('display_name'),
                    ]),
                FileUpload::make('alt_photo_1')
                    ->disk('public')
                    ->directory('player_alt1')
                    ->image()
                    ->moveFiles(),
                FileUpload::make('alt_photo_2')
                    ->disk('public')
                    ->directory('player_alt2')
                    ->image()
                    ->moveFiles(),
            ]);
    }
}
