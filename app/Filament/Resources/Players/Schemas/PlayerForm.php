<?php

namespace App\Filament\Resources\Players\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlayerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make("Basic Details")
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                                'other' => 'Other',
                            ])
                            ->disablePlaceholderSelection(),
                        TextInput::make('display_name'),
                    ])
                    ->columnSpanFull(),
                Section::make("Images")
                    ->columns(4)
                    ->columnSpanFull()
                    ->collapsible()
                    ->schema([
                        FileUpload::make('portrait')
                            ->placeholder('Upload Player Portrait here!')
                            ->hiddenLabel()
                            ->disk('public')
                            ->directory('player')
                            ->image()
                            ->moveFiles()
                            ->panelAspectRatio('2:3')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '9:16',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditorViewportWidth('1200')
                            ->imageEditorViewportHeight('720')
                            ->panelLayout('integrated')
                            ->openable()
                            ->downloadable()
                            ->maxSize(2048)
                            ->columnSpan(2)
                            ->visibility('public'), // 2MB
                        Group::make()
                            ->schema([
                                FileUpload::make('alt_photo_1')
                                    ->hiddenLabel()
                                    ->disk('public')
                                    ->directory('player_alt1')
                                    ->placeholder('Upload Alternate Photo 1 here!')
                                    ->image()
                                    ->moveFiles()
                                    ->panelAspectRatio('16:9')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        '9:16',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->imageEditorViewportWidth('1200')
                                    ->imageEditorViewportHeight('720')
                                    ->panelLayout('integrated')
                                    ->openable()
                                    ->downloadable()
                                    ->maxSize(2048)
                                    ->visibility('public'),
                                FileUpload::make('alt_photo_2')
                                    ->hiddenLabel()
                                    ->disk('public')
                                    ->directory('player_alt2')
                                    ->placeholder('Upload Alternate Photo 2 here!')
                                    ->image()
                                    ->moveFiles()
                                    ->panelAspectRatio('16:9')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        '9:16',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->imageEditorViewportWidth('1200')
                                    ->imageEditorViewportHeight('720')
                                    ->panelLayout('integrated')
                                    ->openable()
                                    ->downloadable()
                                    ->maxSize(2048)
                                    ->visibility('public'),
                            ])
                            ->columnSpan(2)
                    ]),
            ]);
    }
}
