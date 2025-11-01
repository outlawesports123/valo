<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('logo')
                    ->required()
                    ->hiddenLabel()
                    ->disk('public')
                    ->directory('team_logos')
                    ->placeholder('Upload Team Logo here!')
                    ->image()
                    ->moveFiles()
                    ->panelAspectRatio('1:1')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '1:1',
                    ])
                    ->imageCropAspectRatio('1:1')
                    ->imageEditorViewportWidth('1200')
                    ->imageEditorViewportHeight('720')
                    ->panelLayout('integrated')
                    ->openable()
                    ->downloadable()
                    ->maxSize(2048)
                    ->visibility('public'),
                Section::make("Team Details")
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('short_name')
                            ->required(),
                    ]),
            ]);
    }
}
