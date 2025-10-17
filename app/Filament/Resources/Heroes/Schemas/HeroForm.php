<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Details")
                    ->schema([
                        FileUpload::make('portrait')
                            ->hiddenLabel()
                            ->directory('public')
                            ->image()
                            ->moveFiles()
                            ->avatar()
                            ->alignCenter(),
                        TextInput::make('name')
                            ->hiddenLabel()
                            ->placeholder('Name')
                            ->required(),
                    ])
            ]);
    }
}
